<?php

namespace App\Http\Controllers\Hosts;

use App\Models\HostAppointments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Mail\SendGuestMeetinglink;
use App\Mail\AppoinmentCancel;
use Mail;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\User;


class AppoinmentsController extends Controller
{
    private $guest_timezone;
    public function __construct(){
        $guest_ip = request()->ip();
        $response = Http::get('http://ip-api.com/json/' . $guest_ip . '?fields=timezone');
        if ($response->ok()) {
            $timezone = $response->json()['timezone'];
            $this->guest_timezone = $timezone;
        }
    }
    public function index(){   

        $host_schedule = HostAppointments::where([['host_id','=',Auth::user()->_id],['questionrie_status',1]])->with('usermessages',function($response){ $response->where([['reciever_id',Auth::user()->id],['status',1]]); } )->with('answers')->orderBy('created_at','desc')->with('payments')->paginate(10);
        
        return view('Host.Appoinments.index',compact('host_schedule'));
    }
    public function deleteAppointment(Request $req){
        
        $appointment = HostAppointments::find($req->id);
        $host_name = Auth::user()->first_name.' '.Auth()->user()->last_name;
        $host = User::find(Auth::user()->id);
        $guest = User::find($appointment->user_id);
        $start_date_guest_tz = '';
        $end_date_guest_tz = '';

        if(isset($guest->selected_timezone) && isset($host->selected_timezone)){
            // Start Date: 
            $start_date = Carbon::parse($appointment->start, $host->selected_timezone);
            $start_date  = $start_date->setTimezone($guest->selected_timezone);
            $start_date_guest_tz = $start_date->format('Y-m-d H:i');
        
            $end_date = Carbon::parse($appointment->end, $host->selected_timezone);
            $end_date  = $end_date->setTimezone($guest->selected_timezone);
            $end_date_guest_tz = $end_date->format('Y-m-d H:i');
        }
        try {
        $mailData1 = [
            'mailto' => 'HOST',
            'host_name' => $host_name,
            'guest_name' => $appointment->guest_name,
            'start' => $appointment->start,
            'end' => $appointment->end,
            'deleted_by' => $host_name
        ];
        $mail_host = Mail::to(Auth()->user()->email)->send(new AppoinmentCancel($mailData1));
        $mailData2 = [
            'mailto' => 'Guest',
            'host_name' => $host_name,
            'guest_name' => $appointment->guest_name,
            'start' => $start_date_guest_tz,
            'end' => $end_date_guest_tz,
            'deleted_by' => $host_name
        ];
        $mail_host = Mail::to($appointment->guest_email)->send(new AppoinmentCancel($mailData2));
       
        } catch (\Throwable $th) {
        }
        // print_r($mailData2);
        $appointment->delete();
        return redirect()->back()->with('success','You have succesfully deleted your appointment');
    }
}
