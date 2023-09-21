<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\StripeWebhookHandle;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\FrontMembershipController;
use App\Http\Controllers\Front\FrontAboutController;
use App\Http\Controllers\Front\LegalController;
use App\Http\Controllers\Front\SearchHostController;
use App\Http\Controllers\Hosts\HostMessageController;
use App\Http\Controllers\Front\ApplyDiscountController;
use App\Http\Controllers\Front\MeetingController;
use App\Http\Controllers\Front\VedioChatController;


use App\Http\Controllers\Admin\AdminDashController;
use App\Http\Controllers\Admin\settings\SettingsController;
use App\Http\Controllers\Admin\membership\MembershipController;
use App\Http\Controllers\Admin\membership\MembershipPayments;
use App\Http\Controllers\Admin\membership\MembershipFeatureController;
use App\Http\Controllers\Admin\postnotification\PostNotificationController;

use App\Http\Controllers\Admin\users\HostController;
use App\Http\Controllers\Admin\users\GuestController;

use App\Http\Controllers\Admin\discount\DiscountController;
use App\Http\Controllers\Admin\mettings\MeetingsController;
use App\Http\Controllers\Admin\Streams\StreamPayments;
// Add this new by rahul
use App\Http\Controllers\Admin\Search\SearchController;
// End


use App\Http\Controllers\Hosts\HostDashController;
use App\Http\Controllers\Hosts\HostAccountController;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Hosts\HostTagController;
use App\Http\Controllers\Hosts\HostMembershipController;
use App\Http\Controllers\Hosts\HostCalendar;
use App\Http\Controllers\Hosts\AppoinmentsController;
use App\Http\Controllers\Hosts\HostStreamController;
use App\Http\Controllers\Hosts\WebsocketController;
use App\Http\Controllers\Hosts\HostDiscountController;
use App\Http\Controllers\Hosts\MeetingCharges;
use App\Http\Controllers\Hosts\HostPaymentMethodsController;
use App\Http\Controllers\Hosts\HostStripeAccountRegisteration;
use App\Http\Controllers\Hosts\NotificationController;
use App\Http\Controllers\Hosts\QuestionaryController;
use Google\Service\ServiceConsumerManagement\Authentication;

use App\Http\Controllers\LiveStream\VedioCallController;

use App\Events\Message;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcometest');
// });

Route::get('square-test',[TestController::class,'squareTest']);

///////////////// Coming soon page redirection ///////////////////////

Route::get('coming-soon',function(){
    return view('comming-soon/index');
});

// Route::group(['middleware'=> 'SiteAccessValidation'],function(){
///////////////// Stripe webhook //////////////////////////////////////

// Route::stripeWebhooks('stripe-webhooks');
// Route::get('check-post-method',[StripeWebhookHandle::class,'checkPostMethod']);
Route::post('/stripe/webhook',[StripeWebhookHandle::class,'index']);
// Route::post('stripe-webhook',[StripeWebhookHandle::Class,'getSubscriptionRenewStatus']);

///////////////// Stripe webhook //////////////////////////////////////

Route::get('/live-stream/{room_name}',[VedioCallController::class,'index']);
Route::get('live-stream-token',[VedioCallController::class,'passToken']);
Route::post('ping-for-payment',[VedioCallController::class,'pingForPayment']);
Route::post('videocall-payment',[VedioCallController::class,'vedioCallPayment']);
Route::post('/coupon-check',[VedioCallController::class,'CouponCheck']);
Route::post('call_duration', [VedioCallController::class, 'call_duration']); // Make a Route for saving call duration in appointments table

Route::get('/trycode',[HostController::class,'trycode']);

Route::get('host-register-email',function(){
    return view('Emails.host_registration');
});

Route::get('learn-area',[TestController::class,'test'])->name('learn-area');
Route::get('return-from-listener',[TestController::class,'returnFromListener']);
Route::get('send-test-email-with-job',[TestController::class,'sendTestEmail']);

// Route::group(['middleware'=>['auth','guest']],function(){
// Authentication
Route::get('login',[AuthenticationController::class,'login'])->name('login');
Route::get('register',[AuthenticationController::class,'register'])->name('register');
Route::post('loginProc',[AuthenticationController::class,'loginProcess'])->name('loginProc');
Route::post('registerProc',[AuthenticationController::class,'registerProcess'])->name('registerProc');
Route::post('/{id}/update-password',[AuthenticationController::class,'updatePassword'])->name('update-password');
Route::get('logout',[AuthenticationController::class,'logout'])->name('logout');
// Route::get('testing',[AuthenticationController::class,'paymentStatus'])->name('testing');

Route::get('forgotten-password',[AuthenticationController::class,'forgottenPassword']);
Route::post('forgottenProc',[AuthenticationController::class,'ForgottenProcess']);
Route::get('reset-password/{password_token}',[AuthenticationController::class,'newpassword']);

// Front Routes 
//  Add middelware for authentication admin and host for home
Route::post('/helpproc',[FrontAboutController::class,'helpFormSubmit'])->name('help-page'); 
Route::group(['middleware'=>['User','User']],function(){
Route::get('home/olive',[HomeController::class,'index']);
Route::get('/',function(){
    return view('comming-soon/index');
});



Route::get('/membership',[FrontMembershipController::class,'index'])->name('membership');
Route::get('/membership-payment/{slug}',[FrontMembershipController::class,'membershipPayment']);
Route::get('/registration-status',[FrontMembershipController::class,'registrationResponse']);


Route::get('/about-support',[FrontAboutController::class,'index'])->name('about-support');
Route::get('/legal/{id?}',[LegalController::class,'index'])->name('legal');
Route::get('/privacy-policy',[LegalController::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/term-and-conditions',[LegalController::class,'termAndConditions'])->name('term-and-conditions');
Route::get('privacy-policy/download',[LegalController::class,'privacyPolicydownload']);
Route::get('receipt/download',[LegalController::class,'Receiptdownload']);
Route::get('term-condition/download',[LegalController::class,'termconditiondownload']);
Route::get('quick-guide/download/{pdfname}',[LegalController::class,'downloadQuickGuidePdf']);
// Route::get('/legal',function(){
//     return view('');
// });
Route::get('/search-host',[SearchHostController::class,'index'])->name('search-host');
Route::get('/details/{id}',[SearchHostController::class,'hostDetail']);
Route::post('/schedule-meeting',[SearchHostController::class,'scheduleMeeting']);
Route::post('/searchhost',[SearchHostController::class,'searchhost']);

//questionnaire
Route::post('/questionnaire',[SearchHostController::class,'questionnaire']);
Route::get('/cancelappointment/{id}',[SearchHostController::class,'cancelappointment']);

//Meetings
Route::get('/scheduledmeeting',[MeetingController::class,'index']);
Route::get('/scheduledmeeting/cancel/{id}',[MeetingController::class,'cancelappointment']);
Route::get('/message/{id}',[MeetingController::class,'message']);
Route::post('send-messages',[MeetingController::class,'send']);
Route::post('messageseen',[MeetingController::class,'messageseen']);


});
// User Middelware end here !!!

Route::get('/coupon-for-host',[ApplyDiscountController::class,'couponForHost'])->name('coupon-for-host');

// });

// Admin Routes
Route::group(['middleware'=>['auth','Admin']],function(){
    Route::group(['prefix' => 'admin'],function(){
        Route::controller(AdminDashController::class)->group(function(){
            Route::get('/dashboard','index')->name('admin-dashboard');
        });
        //Search route add by rahul
        Route::controller(SearchController::class)->group(function(){
            Route::post('/search','index')->name('search');
        });
        // End search  route

        // Host list
        Route::controller(HostController::class)->group(function(){
            Route::get('/host-list','hostList')->name('host-list');
        });
        Route::controller(HostController::class)->group(function(){
            Route::post('/search-user','searchUser')->name('search-user');;
        });
        Route::controller(HostController::class)->group(function(){
            Route::get('/host-details/{id}','hostDetail')->name('host-details');
        });
        Route::controller(HostController::class)->group(function(){
            Route::get('/host-delete/{id}','hostDelete');
        });
        Route::controller(HostController::class)->group(function(){
            Route::post('/host-generals-update','hostGeneralsUpdate');
        });
        Route::controller(HostController::class)->group(function(){
            Route::post('/host-image-update','profileimage');
        });
        Route::controller(HostController::class)->group(function(){
            Route::post('/message','message');
        });
        Route::controller(HostController::class)->group(function(){
            Route::post('/messageseen','seenmessage');
        });
        // Guest list
        Route::controller(GuestController::class)->group(function(){
            Route::get('/guest-list','guestlist')->name('guest-list');
        });
        Route::controller(GuestController::class)->group(function(){
            Route::get('/guest-details/{id}','hostdetail')->name('host-details');
        });
        Route::controller(GuestController::class)->group(function(){
            Route::get('/guest-delete/{id}','guestdelete');
        });
        Route::controller(GuestController::class)->group(function(){
            Route::post('/guest-generals-update','update')->name('guest-generals-update');
        });
        Route::controller(SettingsController::class)->group(function(){
            Route::get('/general-settings','index')->name('admin-general-setting');
        });
        Route::controller(SettingsController::class)->group(function(){
            Route::post('/admin-update','adminUpdate');
        });
        Route::controller(SettingsController::class)->group(function(){
            Route::post('/admin-profile-update','addProfilePic');
        });
        // create membership
        Route::controller(MembershipController::class)->group(function(){
            Route::get('/membership-list','index')->name('membership-list');
        });
        Route::controller(MembershipController::class)->group(function(){
            Route::get('/add-membership-tier','addMembershipTier')->name('add-membership');
        });
        Route::controller(MembershipController::class)->group(function(){
            Route::post('/insert-membership-tier','addMembershipTierProc');
        });
        Route::controller(MembershipController::class)->group(function(){
            Route::get('/edit-membership-tier/{slug}','edit')->name('edit-membership');
        });
        // Route::controller(MembershipController::class)->group(function(){
        //     Route::post('/update-membership-tier','editproc')->name('update-membership-tier');
        // });
        Route::controller(MembershipController::class)->group(function(){
            Route::get('/delete-membership-tier/{id}','deleteMembership'); //price can not be deleted in product 
        });
        Route::controller(MembershipController::class)->group(function(){
            Route::get('/activate/{id}','activateMembership'); //price can not be deleted in product 
        });
        Route::controller(MembershipController::class)->group(function(){
            Route::post('/update-membership-tier','updateMembership')->name('update-membership-tier'); 
        });
        Route::controller(MembershipPayments::class)->group(function(){
            Route::get('/membership-payment-list','membershipPaymentList')->name('membership-payment-list');
        });
        Route::controller(MembershipPayments::class)->group(function(){
            Route::get('/membership-payment-details/{slug}','membershipPaymentDetails')->name('membership-payment-details');
        });
        Route::controller(MembershipPayments::class)->group(function(){
            Route::get('/membership-payment-refund/{id}','refund');
        });
        //search
        Route::controller(MembershipPayments::class)->group(function(){
            Route::post('/paymentsearch','search')->name('paymentsearch');
        });
     
        //StreamPayments
        Route::controller(StreamPayments::class)->group(function(){
            Route::get('/stream-payments','index')->name('stream-payments');
        });
        Route::controller(StreamPayments::class)->group(function(){
            Route::get('/stream-payments/{id}','paymentdetail')->name('stream-payments-detail');
        });
        // Discount 

        Route::controller(DiscountController::class)->group(function(){
            Route::get('/generate-discount/','index')->name('generate-discount');
        });
        Route::controller(DiscountController::class)->group(function(){
            Route::get('/update-discount/{id}','update')->name('update-discount');
        });
        Route::controller(DiscountController::class)->group(function(){
            Route::get('/delete-discount/{id}','delete')->name('delete-discount');
        });
        Route::controller(DiscountController::class)->group(function(){
            Route::get('/discount-coupon-list','discountList')->name('discount-coupon-list');
        });
        Route::controller(DiscountController::class)->group(function(){
            Route::post('/create-discount','createDiscount')->name('create-discount');
        });
        Route::controller(MeetingsController::class)->group(function(){
            Route::get('/meetings','index')->name('meetings');
        });
        Route::controller(MeetingsController::class)->group(function(){
            Route::get('/meetings/{id}','detail')->name('meeting-detail');
        });
        Route::controller(PostNotificationController::class)->group(function(){
            Route::get('/postnotice','index')->name('postnotification');
        });
        Route::controller(PostNotificationController::class)->group(function(){
            Route::post('/sendnotice','sendmessage')->name('sendnotice');
        });
        Route::controller(MembershipFeatureController::class)->group(function(){
            Route::get('/features','index')->name('features');
        });
        Route::controller(MembershipFeatureController::class)->group(function(){
            Route::post('/featureadd','featureadd')->name('featureadd');
        });
        Route::controller(MembershipFeatureController::class)->group(function(){
            Route::post('/featureedit','edit')->name('featureedit');
        });
        Route::controller(SettingsController::class)->group(function(){
            Route::get('/changepassword','changepassword')->name('changepassword');
        });
        Route::controller(SettingsController::class)->group(function(){
            Route::get('/site-meta','sitemeta')->name('site-meta');
        });
        Route::controller(SettingsController::class)->group(function(){
            Route::post('/sitemetaproc','sitemetaadd')->name('site-meta-add');
        });
        
        
    });
});
// Host Routes

Route::group(['middleware'=>['auth','Host']],function(){
 
    Route::get('/{id}',[HostDashController::class,'index'])->name('host-dashboard');
    // Account Details
    Route::get('/{id}/general-settings',[HostAccountController::class,'index'])->name('general-settings');
    Route::post('/{id}/add-user-meta',[HostAccountController::class,'addUserMeta'])->name('add-user-meta');
    Route::post('/{id}/add-profile-picture',[HostAccountController::class,'addProfilePic'])->name('add-profile-picture');
    Route::get('/{id}/change-password',[HostAccountController::class,'changePassword'])->name('change-password');

    // Tags
    Route::get('/{id}/tags',[HostTagController::class,'index'])->name('tags');
    Route::post('/{id}/add-tags',[HostTagController::class,'addTags'])->name('add-tags');
    Route::post('/{id}/edit-tags',[HostTagController::class,'editTags'])->name('edit-tags');
    Route::post('/{id}/delete-tags',[HostTagController::class,'deleteTags'])->name('delete-tags');
    
    // membership 
    Route::get('/{id}/membership',[HostMembershipController::class,'index'])->name('membership');
    Route::get('/{id}/membership-details',[HostMembershipController::class,'membershipDetail'])->name('membership-details');
    Route::get('/{id}/upgrade-membership',[HostMembershipController::class,'membershipDetail'])->name('upgrade-membership');
    Route::get('/{id}/get-invoice',[HostMembershipController::class,'getInvoice'])->name('get-invoice');
    Route::get('/{id}/subscribe/{slug}',[HostMembershipController::class,'subscribe'])->name('subscribe');
    Route::get('/{id}/subscribe-response',[HostMembershipController::class,'subscribeResponse'])->name('subscribe-response');

    // Route::post('/{id}/create-subscription',[HostMembershipController::class,'createSubscription'])->name('create-subscription');
    Route::post('create-subscription',[HostMembershipController::class,'createSubscription'])->name('create-subscription');
    Route::get('/{id}/upgrade-subscription',[HostMembershipController::class,'upgradeSubscription'])->name('upgrade-subscription');
    Route::get('/{id}/upgrade-subscription/{slug}',[HostMembershipController::class,'upgradeSubscriptionDetail'])->name('upgrade-subscription');
    Route::post('/{id}/upgrade-to-new-subscription',[HostMembershipController::class,'upgradeSubscriptionProcess'])->name('upgrade-to-new-subscription');
   
    Route::get('/{id}/pause-subscription/',[HostMembershipController::class,'pauseSubscription'])->name('pause-subscription');
    Route::get('/{id}/resume-subscription/',[HostMembershipController::class,'resumeSubscription'])->name('resume-subscription');
    Route::get('/{id}/cancel-subscription/',[HostMembershipController::class,'cancelSubscription'])->name('cancel-subscription');
    

    // Register your account to stripe for the payment
    Route::get('/{id}/register-account',[HostStripeAccountRegisteration::class,'index'])->name('register-account');
    Route::get('/{id}/edit-account',[HostStripeAccountRegisteration::class,'editAccount'])->name('edit-account');
    Route::post('/register-host-stripe-account',[HostStripeAccountRegisteration::class,'registerAccount']);
    Route::post('update-host-stripe-account', [HostStripeAccountRegisteration::class,'updateAccount']);
    Route::get('/delete-host-stripe-account/{id}', [HostStripeAccountRegisteration::class,'deleteAccount']);
    

    //Discount
    Route::get('/{id}/coupons',[HostDiscountController::class,'index'])->name('host-coupons');
    Route::get('/{id}/coupons/create/{did?}',[HostDiscountController::class,'create'])->name('coupons-create');
    Route::post('/{id}/coupons/createproc',[HostDiscountController::class,'createproc'])->name('coupons-createproc');
    Route::get('/{id}/coupons/delete/{did}',[HostDiscountController::class,'delete']);
    Route::post('/{id}/coupons/disable',[HostDiscountController::class,'disable'])->name('coupon-disable');

    // Calendar
    // Route::get('/{id}/calendar',[HostCalendar::class,'index'])->name('host-calendar');
    // Route::post('/{id}/insert-schedule',[HostCalendar::class,'insertSchedule']); old
      
    Route::get('/{id}/calendar',[HostCalendar::class,'index'])->name('host-calender');
    Route::post('/{id}/calendar-response',[HostCalendar::class,'ajax']);
    Route::post('/{id}/seen-status',[HostCalendar::class,'seenstatus']);

    //hostMessage
    Route::get('/{id}/message/{uid?}',[HostMessageController::class,'index'])->name('host-messages');
    // Route::get('/{id}/hostmessage/{uid}',[HostMessageController::class,'hostmessage']);
    Route::post('send-message',[HostMessageController::class,'message']);
    Route::post('host/updatemessage',[HostMessageController::class,'update']);


   
    //Appoinments
    Route::get('{id}/appointments',[AppoinmentsController::class,'index'])->name('appoinments');
    Route::get('delete-appointment/{id}',[AppoinmentsController::class,'deleteAppointment']);

    //meeting charges
    Route::get('{id}/meeting-charges',[MeetingCharges::class,'index'])->name('meeting-charges');
    Route::get('{id}/meeting-charges/add/{idd?}',[MeetingCharges::class,'add'])->name('add-meeting-charges');
    Route::post('{id}/meeting-charges/addproc',[MeetingCharges::class,'addproc'])->name('meeting-add');
    Route::get('{id}/meeting-charges/delete/{idd}',[MeetingCharges::class,'delete'])->name('meeting-delete');
    
    //StreamPayment


    //Vedio chat
    Route::get('{id}/vedio-conference/{userid}',[HostStreamController::class,'index']); 
    Route::post('create-room',[HostStreamController::class,'createRoom']); 
    Route::post('generate-token',[HostStreamController::class,'generateToken']); 
    Route::get('{id}/join-room',[HostStreamController::class,'joinRoomView']); 
    Route::post('host/send-room-link',[HostStreamController::class,'sendlink']); 

    // 
    Route::get('{id}/websocket', [WebsocketController::class,'onOpen'])->name('websocket');

    //upgrade membership
    Route::get('{id}/upgrademembership',[HostMembershipController::class,'upgrade']);

    //Questionary

    Route::get('{id}/questionnaire',[QuestionaryController::class,'index'])->name('questionary');
    Route::get('{id}/addquestionnaire/{idd?}',[QuestionaryController::class,'AddQuestion'])->name('add-questionary');
    Route::post('{id}/questionnaire/add',[QuestionaryController::class,'AddQuestionary']);
    Route::post('{id}/questionnaire/delete',[QuestionaryController::class,'delete']);

    //Notifications

    Route::get('{id}/notifications',[NotificationController::class,'index']);
    Route::post('{id}/seenupdate',[NotificationController::class,'seenupdate']);
    Route::get('{id}/adminnotification',[NotificationController::class,'adminnotification']);
    
    //Host payment methods
    Route::get('/{id}/payment-methods',[HostPaymentMethodsController::class,'index'])->name('payment-methods');
    Route::get('delete-payment-methods/{id}',[HostPaymentMethodsController::class,'deletePaymentMethod']);
    Route::get('{id}/stream-payments',[HostPaymentMethodsController::class,'streampayments'])->name('host-stream-payments');
    
});
// });
