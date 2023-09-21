<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Events\SendNotifications;
use App\Models\HostAppointments;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\WakeUpGuestItsMeetingTime;
use App\Mail\WakeUpHostItsMeetingTime;
use Square\SquareClient;
use Square\Exceptions\ApiException;
use Square\Models\CreatePaymentRequest;
use Square\Models\Money;

class TestController extends Controller
{
    //
    public function index(){
       $name = "Abhishek sharma";
       $age = 21;
       $data = ['name' => $name, 'age' => $age];
       $event_status = event( new SendNotifications($data));
    //    return $event_status;
    }
    public function returnFromListener(){
      echo hello("Abhishek");
    
    }
    public function sendTestEmail(){
        $data  = "This is test data ";
        $name = "Abhishek";
        dispatch( new SendEmail($data,$name));
        return "email sent succesfully";
    }
    public function squareTest(){
        return view('Guests.square-test.index');
    }
    public function test(Request $request){
      
      
    }
}