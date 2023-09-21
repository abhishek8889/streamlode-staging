<?php

namespace App\Http\Controllers\Hosts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;
use Twilio\Rest\Client;
use Twilio\Jwt\Grants\SyncGrant;
use Twilio\Jwt\Grants\ChatGrant;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\SendVideoLink;
use App\Models\HostAppointments;
use App\Models\Messages;
use Hash;
use App\Events\Message;

class HostStreamController extends Controller
{
    public function index($unique_id,$id){
      
        $appoinments = HostAppointments::where('_id',$id)->with('user')->first();
   
        return view('Host.Appoinments.vedio_chat',compact('appoinments'));
    }
    public function createRoom(Request $req){
        $room_name = md5($req->room_name).'12';
        $twilioAccountSid = getenv('TWILIO_ACCOUNT_SID');
        $twilioAuthToken = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($twilioAccountSid, $twilioAuthToken);
        $room = $twilio->video->v1->rooms->create(
            [
                "uniqueName" => $room_name, // default room type is group
                "statusCallback" => env('APP_URL')."live-stream/".$room_name,
                "statusCallbackMethod" => "GET",
                "unusedRoomTimeout" => 60,
            ]
        );

        $host_appoinments = HostAppointments::find($req->room_name);
        $host_appoinments->video_link_name = $room_name;
        $host_appoinments->join_link = env('APP_URL')."live-stream/".$room_name;
        $host_appoinments->update();
        // :::::::::::::  Send  mail to guest automatically   :::::::::::::::

        $guest_name = $host_appoinments->guest_name;
        $guest_email = $host_appoinments->guest_email;
        $hostDetail = User::find($host_appoinments->host_id);

        $mailData = [
            'host_name' => $hostDetail->first_name.' '.$hostDetail->last_name,
            'link' => $host_appoinments->join_link,
            'appointment_id' => $host_appoinments->id,
        ];
        try{
            $mail = Mail::to($guest_email)->send(new SendVideoLink($mailData));
        }catch(\Exception $e){

        }
        
        $data = array(
            'roomName'  =>  $room_name,
            'join_link' =>  $room->statusCallback,
            'status'    =>  Hash::make('host'),
        );
        return response()->json($data['join_link']);
    }
 
    public function joinRoomView(){
        return view('Host.Appoinments.join_room');
    }

    public function sendlink(Request $req){
        
        $appoinments = HostAppointments::where('_id',$req->id)->with('user')->first();
        $mailData = [
            'host_name' => $appoinments->user['first_name'].' '.$appoinments->user['last_name'],
            'link' => $req->link,
            'appointment_id' => $req->id,
        ];
        $mail = Mail::to($appoinments->guest_email)->send(new SendVideoLink($mailData));
        
        if($mail == true){
            return response()->json('successfully sent link');
        }else{
            return response()->json('error in sending mail please contact with support.');
        }
    }
}
