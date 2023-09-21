<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PaymentMethods;
use App\Models\MembershipPaymentsData;
use App\Mail\HostRegisterMail;
use App\Mail\ForgottenPassword;
use App\Models\Discounts\AdminDiscount;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Hash;
use Auth;
use DB;
use Session;
use Illuminate\Support\Str;
use App\Models\HostSubscriptions;
use Carbon\Carbon;


class AuthenticationController extends Controller
{
    public function login(){
        return view('Authentications.login');
    }
    public function register(){
        return view('Authentications.register');
    }
    public function loginProcess(request $req){
      
        $email = strtolower($req->email);
        $password = $req->password;
        $host_credentials = array('email'=>$email, 'password' => $password ,'status' =>1);
        $admin_credentials = array('email'=>$email, 'password' => $password ,'status' =>2);
        if (Auth::attempt($host_credentials)) {
            if($req->roomid){
                return redirect("/live-stream/".$req->roomid);
            }else{
                return redirect('/'.auth()->user()->unique_id);
            }
        }elseif(Auth::attempt($admin_credentials)){
            return redirect('admin/dashboard');
        }
        else{
            return redirect('login')->with('error','Your email or password is wrong');
        }
    }
    public function createSubscription($user_id,$membership_id ,$name,$email,$token,$coupon_code){
        try{
            $stripe_coupon_id = '';
            if($coupon_code != null){
                $stripe_coupon_id = AdminDiscount::where('coupon_code',$coupon_code)->get()->value('stripe_coupon_id');
            }
            // dd($stripe_coupon_id);
          $membership = DB::table('membership')->find($membership_id) ;
          
          $stripe = new \Stripe\StripeClient( env('STRIPE_SEC_KEY') );
  
          #################### Create customer ##########################
  
            $customer =  $stripe->customers->create([
                'name' => $name,
                'email' => $email,
                'payment_method' => $token,
                'invoice_settings' => [
                'default_payment_method' => $token,
                ],
                'address' => [
                    'line1' => '510 Townsend St',
                    'postal_code' => '98140',
                    'city' => 'San Francisco',
                    'state' => 'CA',
                    'country' => 'US',
                ],
            ]);
            
          //   #################### Attach payments method with customer ##########################
  
          $paymentMethodAttachStatus = $stripe->paymentMethods->attach(
              $token,
              ['customer' => $customer->id]
          );
  
          //  #################### Create subscription ##########################
  
        $createMembership = '';
            if($coupon_code != null){
                $createMembership =  $stripe->subscriptions->create([
                    'customer' => $customer->id,
                    'collection_method'=>'charge_automatically',
                    'items' => [
                        [
                            'price' => $membership['price_id'],
                            // 'recurring' => [
                            //     'interval' => 'month', // Frequency at which bills are counted ||## day, week, month or year. ##||
                            //     'interval_count' => 1, // Number of intervals between subscription billings.
                            // ]
                        ],
                    ],
                    'coupon' => $stripe_coupon_id,
                ]);
            }else{
                $createMembership =  $stripe->subscriptions->create([
                    'customer' => $customer->id,
                    'collection_method'=>'charge_automatically',
                    'items' => [
                      ['price' => $membership['price_id']],
                    ]
                ]);
            }

            // dd($createMembership);

            $invoice = $createMembership->latest_invoice;
            $payment_intent = '';
            $host_inovice_url = '';
            $host_invoice_pdf = '';
            $subtotal = '';
            $discount = '';
            $total_excluding_discount = '';
            if(!empty($invoice)){
                $invoice_details =  $this->getInvoice($invoice);
                $subtotal = (int)$invoice_details->subtotal / 100;
                $total_excluding_discount = (int)$invoice_details->total /100 ;
                $payment_intent = $invoice_details->payment_intent;
                $host_inovice_url = $invoice_details->hosted_invoice_url;
                $host_invoice_pdf = $invoice_details->invoice_pdf;
                if($coupon_code != null){
                    $discount = (int)$invoice_details->total_discount_amounts[0]->amount / 100;
                }
            }

                // ######################### payment table data save  #######################################
  
            $payementMethods = new PaymentMethods;
            $payementMethods->user_id = $user_id;
            $payementMethods->stripe_payment_method = $token;  
            $payementMethods->brand = $paymentMethodAttachStatus->card->brand;
            $payementMethods->last_4 = $paymentMethodAttachStatus->card->last4;
            $payementMethods->expire_month = $paymentMethodAttachStatus->card->exp_month;
            $payementMethods->expire_year = $paymentMethodAttachStatus->card->exp_year;
            $payementMethods->save();

            // dd($payementMethods);
            // ######################## Store data in membership payment table ###############################
  
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01235675854abcdefghjijklmnopqrst';
            $random_order_number = substr(str_shuffle($str_result),0,7);
  
            $membership_payment = new MembershipPaymentsData;
            $membership_payment->user_id = $user_id;
            $membership_payment->inovice_id = $createMembership->latest_invoice;
            $membership_payment->stripe_payment_intent = $payment_intent;
            $membership_payment->stripe_payment_method = $token; 
            $membership_payment->payment_method_id = $payementMethods->id;
            $membership_payment->order_id = $random_order_number;
            $membership_payment->membership_id = $membership_id;
            $membership_payment->membership_total_amount = $createMembership->plan->amount / 100;
            // prices starts
            $membership_payment->discount_coupon_name = $coupon_code;
            $membership_payment->subtotal = $subtotal;
            $membership_payment->discount_amount = $discount ;
            $membership_payment->total = $total_excluding_discount ;// while we use discount then we fix this and diff beteween unused time charge and new charge from invoice 
            // prices end
            $membership_payment->payment_type = 'create_membership';
            $susbcription_status = '';
            if($createMembership->status == 'active'){ // if subscription status == active then membership payment status == succesfull
                $membership_payment->payment_status = 'succesfull'; // subscription status
                $susbcription_status = 'success';
                // send mail for user's email to get activation and payment done
                try {
                    $mail = Mail::to($email)->send(new HostRegisterMail($name, $host_inovice_url , $host_invoice_pdf,$susbcription_status));
                } catch (\Throwable $th) {
                   
                }
            }else{
                $membership_payment->payment_status = $createMembership->status;
                // send mail for user's email to get activation and payment done
                $susbcription_status = 'pending';
                try {
                    $mail = Mail::to($email)->send(new HostRegisterMail($name, $host_inovice_url , $host_invoice_pdf,$susbcription_status));
                } catch (\Throwable $th) {
                
                }
            }
            $membership_payment->save();
  
            //#################  Host Subscription Data Save  ############################

            $host_subscription = new HostSubscriptions;
            $host_subscription->stripe_subscription_id = $createMembership->id;
            $host_subscription->subscription_name = $membership['name'];
            $host_subscription->membership_id = $membership_id;
            $host_subscription->host_id = $user_id;
            $host_subscription->interval = 'month'; // subscription interval is different 
            $host_subscription->interval_count = 1; // 
            $host_subscription->subscription_status = $createMembership->status;
            $host_subscription->membership_payment_id = $membership_payment->id;
            if($createMembership->status == 'active'){
                $host_subscription->start_on = date('Y-M-d H:i' ,$createMembership->current_period_start ); // on condition 
                $host_subscription->next_invoice_generate_on = date('Y-M-d H:i' ,$createMembership->current_period_end ); // on condition 
            }else{
                $host_subscription->start_on = '00-00-00'; // on condition 
                $host_subscription->next_invoice_generate_on = '00-00-00'; // on condition 
            }
            $host_subscription->save();

            //######################## USER UPDATE ########################################

            $user = User::find($user_id);
            $user->stripe_customer_id = $customer->id;
            $user->subscription_id = $createMembership->id; // Subscription id got from stripe
            $user->host_subscription_id = $host_subscription->id;  // Subscription id got from host_subscription table 
        
            // dd($createMembership);
            
            if($createMembership->status != 'incomplete'){
                $user->membership_id = $membership_id;
                $user->active_status = 1;   // membership active // depend on subscription status 
                // $user->subscription_status = $createMembership->status; // subscription status
                $user->save();
                return array('paymentStatus'=>TRUE,'response'=>'Congratulations you got ' . $membership['name'] . ' for a ' . $membership['interval'],'membership_id'=> $membership_id);
            }else{
                $user->active_status = 0;   // membership inactive // depend on subscription status 
                // $user->subscription_status = $createMembership->status; // subscription status
                $user->membership_id = null;
            }
          $user->save();
        //   $success_response =  array('paymentStatus'=> FALSE, 'response'=>'You are registered but for payment you will get invoice in your registered email ('.$email.') please pay from there and activate your subscription.','membership_id'=> $membership_id);
          return  array('paymentStatus'=> FALSE, 'response'=>'You are registered but for payment you will get invoice in your registered email ('.$email.') please pay from there and activate your subscription.','membership_id'=> $membership_id);
            // return  array('success' => true ,'response' => $success_response);
        }catch(\Exception $e){
            $error =  $e->getMessage();
            return  array('paymentStatus'=> 'exceptionError', 'response'=>$error,'membership_id'=> $membership_id);
        }
    }
    public function registerProcess(request $req){
    //  dd($req);
        $validator = Validator::make($req->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error','There is an error in something. Please re-register your form.');
        }else{
            $validate = $req->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'unique_id' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password'=>'required|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@!$#%]).*$/',
            ],[
                'first_name.required' => 'First name is required',
                'last_name.required' => 'Last Name is required',
                'unique_id.required' => 'Stream Lode page name is required',
                'unique_id.unique' => 'This name is already taken please choose another',
                'email.required' => 'Email is required',
                'email.unique' => 'This email is already taken please choose another',
                'password.required' => 'Password must be required',
                'password.regex' => 'Your password should have minimum 6 characters which include alphabets, numbers and special characters e.g:Stream@123',
            ]);
            
            if(empty($validate['errors'])){
                $password = Hash::make($req->password);
                // 1st step of registration 
                $data = array(
                    'first_name' => $req->first_name,
                    'last_name' => $req->last_name,
                    'email' => strtolower($req->email),
                    'unique_id' => $req->unique_id,
                    'public_visibility' => 1,
                    'selected_timezone' => $req->timezone,
                    'password' => $password,
                    'status' => 1 // user status 0 = guest ; 1 = host ; 2 = admin
                );
                $user = User::create($data);
                $user_id = $user->_id;
                $user_email = $user->email;
                $name = $req->first_name . " " . $req->last_name;

                $createSubscription = '';
                if(!empty($user_id)){
                    $createSubscription = $this->createSubscription($user_id,$req->membership_id,$name,$req->email,$req->token,$req->coupon_code);
                    // dd($createSubscription);
                    if($createSubscription['paymentStatus'] === 'exceptionError'){
                        $paymentMethod = PaymentMethods::where('user_id',$user_id)->delete();
                        $membershipPaymentsData = membershipPaymentsData::where('user_id',$user_id)->delete();
                        $hostSubscription = HostSubscriptions::where('host_id',$user_id)->delete();
                        $user = User::find($user_id)->delete();
                        return redirect('registration-status')->with(['paymentStatus'=> 'exceptionError', 'message'=>$createSubscription['response'],'membership_id' => $createSubscription['membership_id']]);
                    }else{
                        return redirect('registration-status')->with(['paymentStatus'=> $createSubscription['paymentStatus'], 'message'=>$createSubscription['response'],'membership_id' => $createSubscription['membership_id']]);
                    }
                }else{
                    return redirect()->back()->with('error','Sorry error in registration process please try again.');
                }
            }
            return redirect('membership');
        }
    }
    
    public function getInvoice($invoice_number){
        $stripe = new \Stripe\StripeClient( env('STRIPE_SEC_KEY') );
        $invoice = $stripe->invoices->retrieve(
         $invoice_number,
          []
        );
        return $invoice;
    }
    // public function confirmPayment($payment_intent){
    //     $stripe = new \Stripe\StripeClient( env('STRIPE_SEC_KEY') );
    //       $payment_response = $stripe->paymentIntents->confirm(
    //         $payment_intent,
    //         ['payment_method' => 'pm_card_visa']
    //       );
    //     return $payment_response;
    // }
    public function paymentStatus(){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SEC_KEY'));
         $payment_status =  $stripe->paymentIntents->retrieve(
            'pi_3MeHOcSDpE15tSXh1KJcOnmk',
            []
          );
          dd($payment_status);
        
    }

    public function updatePassword(Request $req){
        $req->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@!$#%]).*$/', 
            'confirm_new_password' => 'required_with:new_password|same:new_password|'
            ],[
                'current_password.required' => 'Your current password must be required',
                'new_password.required' => 'Your new password must be required',
                'new_password.min:6' => 'Your new password must be atleast 6 character',
                'confirm_new_password.required' => 'Your confirm new password must be required',
                'confirm_new_password.same:new_password' => 'Your confirm new password must be same as new password',
                'new_password.regex' => 'Your password should have minimum 6 characters which include alphabets, numbers and special characters e.g:Stream@123'
            ] 
        );
        $matchPassword=  Hash::check($req->current_password, auth()->user()->password);
        // if(auth()->user()->status == 1){
        //     if($matchPassword == true){
        //         $password_change_status = User::find(auth()->user()->id)->update(['password'=> Hash::make($req->confirm_new_password)]);
        //         if($password_change_status == true){
        //             // logout from other session remain
        //             return redirect('/'.auth()->user()->unique_id.'/change-password')->with('success','Your password is changed succesfully.');
        //         }
        //     }else{
        //         return redirect('/'.auth()->user()->unique_id.'/change-password')->with('error','Your old password is not matched.');
        //     }
        // }elseif(auth()->user()->status == 2){
        //     if($matchPassword == true){
        //         $password_change_status = User::find(auth()->user()->id)->update(['password'=> Hash::make($req->confirm_new_password)]);
        //         if($password_change_status == true){
        //             // logout from other session remain
        //             return redirect('/'.auth()->user()->unique_id.'/change-password')->with('success','Your password is changed succesfully.');
        //         }
        //     }else{
        //         return redirect('/'.auth()->user()->unique_id.'/change-password')->with('error','Your old password is not matched.');
        //     }
        // }else{
        // }
        if($matchPassword == true){
            $password_change_status = User::find(auth()->user()->id)->update(['password'=> Hash::make($req->confirm_new_password)]);
            if($password_change_status == true){
                // logout from other session remain
                return redirect()->back()->with('success','Your password is changed succesfully.');
            }
        }else{
            return redirect()->back()->with('error','Your old password is not matched.');
        }
        
    }
    public function forgottenPassword(){
        return view('Authentications.forgottenpassword');
    }
    public function newpassword($password_token){
      $email = base64_decode($password_token);
        return view('Authentications.newpassword',compact('email','password_token'));
    }

    public function ForgottenProcess(Request $req){
      
        if($req->email){
            $find = User::where('email',$req->email)->first();
            if($find){
                $token = base64_encode($req->email);
                // $token = Str::random(64);
                // $set_time = date('y-m-d h:i'); 
                // $default_time = date('y-m-d H:i'); 
                // $extra_time = Date("M/d/Y h:i", strtotime("5 minutes", strtotime($set_time)));
             
                // Session::put('token', $token);
                // Session::put('time',$extra_time);
                // $am_or_pm = Date("a", strtotime("5 minutes", strtotime($default_time)));
                $mailData = [
                    'unique_id' => $find->unique_id,
                    // 'email' => $req->email,
                    'token' => $token,
                    // 'expire' => $extra_time,
                    // 'am_or_pm' => $am_or_pm,
                ];
                try {
                    $mail = Mail::to($req->email)->send(new ForgottenPassword($mailData));
                } catch (\Throwable $th) {
                   
                }
                return back()->with('success','check your email to regenrate your password');
            }else{
                return back()->with('error','This email address cannot be found in our system.');
            }
        }
        elseif($req->password_token){
            // $confirm_token =md5($req->emaill);
            
                 $req->validate([
                    'password' => 'min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@!$#%]).*$/',
                    'cpassword' => 'required_with:password|same:password|min:6'
                 ],[
                    'password.regex' => 'Your password should have minimum 6 characters which include alphabets, numbers and special characters e.g:Stream@123',
                    'cpassword.same' => 'Confirm Password are not matched with password'
                    ]);
            // // }
            // // if($req->token == Hash::make($req->emaill)){
                
            $password = Hash::make($req->password);
            $update = User::where('email',$req->emaill)->update(['password' => $password]);
            if($update){
                return redirect('login')->with('success','successfully changed password');
            }else{
                return back()->with('error','this link is not valid');
            }
        }
        else{
            return back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success',"You have logged out succesfully");
    }
}
