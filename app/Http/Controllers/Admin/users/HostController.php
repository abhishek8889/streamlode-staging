<?php

namespace App\Http\Controllers\Admin\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;
use App\Events\Message;
use App\Models\HostAppointments;
use App\Models\HostQuestionnaire;
use App\Models\QuestionarieAnswer;
use App\Models\HostStripeAccount;
use DB;
use Hash;
use Auth;
use File;
class HostController extends Controller
{
    public function hostList(){
        $hosts = User::where('status', 1)->with(['adminmessage' => function($response){ $response->where('reciever_id',Auth::user()->id); }])->paginate(10);
        // dd($hosts);
        // I remove get from here and add pagination(10)
        
        return view('Admin.users.hostlist',compact('hosts'));
    }
    public function searchUser(Request $req){
        $hosts = User::where('status', 1)
        ->where(function($query) use ($req) {
            $query->orWhere('email', 'like',  $req->searchDetails . '%')
                  ->orWhere('first_name', 'like', $req->searchDetails . '%');
        })
        ->with(['MembershipTier','adminmessage' => function($response) {
            $response->where('receiver_id', Auth::user()->id);
        }])
        ->paginate(10);
        return response()->json($hosts);
        
    }

    public function hostDetail(Request $req , $id){
        $host_detail = User::where('unique_id', $id)->first();
    //    dd($host_detail);
    $message = Messages::where([['reciever_id',$host_detail['_id']],['sender_id',Auth::user()->id]])->orWhere([['reciever_id',Auth::user()->id],['sender_id',$host_detail['_id']]])->get();
        return view('Admin.users.host_detail',compact('host_detail','message'));
    }
    public function hostDelete($id){
        
        $data = User::where('unique_id', $id)->first();
        $id = $data['_id'];     // Get Id from unique_id and delete host records

        // DB::table('users')->where('_id', $id)->delete();
        $appointments = HostAppointments::where('host_id',$id)->get();
        // foreach($appointments as $ap){
        //      $answers = QuestionarieAnswer::where('appointment_id',$ap->id)->first();
        //      $answers->delete();
        // }
        $host_stripe_account  = HostStripeAccount::where('host_id',$id)->first();
        $host_stripe_acc_num = '';
        if(isset($host_stripe_account->stripe_account_num)){
            $host_stripe_acc_num = $host_stripe_account->stripe_account_num;
        }else{
            $host_stripe_acc_num = null;
        }
        if($host_stripe_acc_num != null){
            $stripe = new \Stripe\StripeClient(env('STRIPE_SEC_KEY'));
            $stripe->accounts->delete(
                $host_stripe_acc_num ,
                []
            );
        }
        DB::table('payment_methods')->where('user_id',$id)->delete();
        DB::table('host_subscriptions')->where('host_id',$id)->delete();
        DB::table('host_stripe_accounts')->where('host_id',$id)->delete();
        DB::table('host_questionnaires')->where('host_id',$id)->delete();
        DB::table('appointments')->where('host_id',$id)->delete();
        DB::table('host_availablity')->where('host_id',$id)->delete();
        DB::table('host_discounts_coupons')->where('host_id',$id)->delete();
        DB::table('meeting_charges')->where('host_id',$id)->delete();
        DB::table('tags')->where('user_id',$id)->delete();
        DB::table('messages')->where('reciever_id', $id)->delete();
        DB::table('messages')->where('sender_id', $id)->delete();
       User::find($id)->delete();
        return redirect('/admin/host-list')->with('success','User is deleted succesfully');
    }
    public function hostGeneralsUpdate(Request $req){
        // dd($req->all());
        $host_id = $req->id;
        $host_unique_id = $req->unique_id;
        $user = User::find($host_id);
        if($req->newPassword != null && $req->confirmNewPassword != null){
            // update user with password 
            $req->validate([
                'newPassword' => 'required|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@!$#%]).*$/',
                'confirmNewPassword' => 'required|min:6|same:newPassword|'
                ],[
                    'newPassword.required' => 'This field is required.',
                    'confirmNewPassword.required' => "Password and confirm password both field are required if you want to change host's password. ",
                    'confirmNewPassword.min:6' => "Host's new password must be atleast 6 character",
                    'confirmNewPassword.same:newPassword' => "Your confirm new password must be same as new password.",
                    'newPassword.regex' => 'Your password should have minimum 6 characters which include alphabets, numbers and special characters e.g:Stream@123'
                ] 
            );
            $password_change_status = User::find($host_id)->update(['password'=> Hash::make($req->confirmNewPassword)]);
            $user->first_name = $req->first_name;
            $user->last_name = $req->last_name;
            $user->email = $req->email;
            $user->instagram = $req->instagram;
            $user->linkdin = $req->linkdin;
            $user->twitter = $req->twitter;
            $user->facebook = $req->facebook;

            // $user->phone = $req->phone;
            if(isset($req->hide_profile) || $req->hide_profile == "on"){
                $user->public_visibility = 0; // public visibility 0 means private
            }else{
                $user->public_visibility = 1; // public visibility 1 means public
            }
            $user->description = $req->hostDescription;
            $user->update();
            return redirect('/admin/host-details/'.$host_unique_id)->with('success','Host '.$req->first_name . ' '. $req->last_name. 'updated succesfully.');
        }else{
            $user->first_name = $req->first_name;
            $user->last_name = $req->last_name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->instagram = $req->instagram;
            $user->linkdin = $req->linkdin;
            $user->twitter = $req->twitter;
            $user->facebook = $req->facebook;
            if(isset($req->hide_profile) || $req->hide_profile == "on"){
                $user->public_visibility = 0; // public visibility 0 means private
            }else{
                $user->public_visibility = 1; // public visibility 1 means public
            }
            $user->description = $req->hostDescription;
            $user->update();
            return redirect('/admin/host-details/'.$host_unique_id)->with('success','Host '.$req->first_name . ' '. $req->last_name. 'updated succesfully.');

        }
    }
    public function profileimage(Request $req){
        $req->validate([
            'profile_img' => 'required',
        ],
        [
            'profile_img.required' => 'You have to choose any image before upload.',
        ]);
        $user = User::find($req->id);
        if($req->profile_exist == '1'){
            if($req->hasfile('profile_img')){
                $destination = public_path().'/Assets/images/user-profile-images/'. auth()->user()->profile_image_name;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $req->file('profile_img');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/Assets/images/user-profile-images/', $name);
                $user->profile_image_name = $name;
                $user->profile_image_url = asset('Assets/images/user-profile-images/'.$name);
                $user->update();
            }
            return back()->with('success','Profile picture uploaded succesfully.');
        }else{
            if($req->hasfile('profile_img')){
                $file = $req->file('profile_img');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/Assets/images/user-profile-images/', $name);
                $user->profile_image_name = $name;
                $user->profile_image_url = asset('Assets/images/user-profile-images/'.$name);
                $user->save();
            }
            return back()->with('success','New profile picture added succesfully.');
        }
    }
    public function message(Request $req){
        $username = Auth::user();
        $sender_id = $req->sender_id;
        $reciever_id = $req->reciever_id;
        // $username = $req->username;
        $messages = $req->message;
        
        $message = new Messages();
        $message->reciever_id = $req->reciever_id;
        $message->sender_id = $req->sender_id;
        $message->username = $req->username;
        $message->message = $req->message;
        $message->status = 1;
        $message->save();
        event(new Message($username, $messages,$sender_id,$reciever_id,$message->created_at));
        return response()->json($message);
    }
    public function seenmessage(Request $req){
        $update = Messages::where([['reciever_id',$req->sender_id],['sender_id',$req->reciever_id],['status',1]])->get();
        foreach($update as $u){
            $res = Messages::find($u['_id']);
            $res->status = 0;
            $res->update();
        }
        return response()->json($update);
    }
    public function trycode(){
      $search ='d';
      $appointments = Appointment::whereHas('user', function ($query) use ($searchQuery) {
        $query->where('unique_id', 'LIKE', '%' . $searchQuery . '%');
    })
    ->with('user', 'streampayment')
    ->orderBy('created_at', 'DESC')
    ->get();

            echo '<pre>';
      print_r($data);
      echo '</pre>';
    }
}
