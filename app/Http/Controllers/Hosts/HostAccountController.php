<?php

namespace App\Http\Controllers\Hosts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersMeta;
use App\Models\User;
use File;
use App\Rules\ImageFileType;
class HostAccountController extends Controller
{
    public function index(){
        $user_meta = UsersMeta::where('user_id','=',auth()->user()->unique_id)->get();

        return view('Host.account-details.general_settings',compact('user_meta'));
    }
    public function addUserMeta( Request $req ){
        // dd($req);
        $user = User::find($req->id);
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->phone = $req->phone;
        $user->email = strtolower($req->email);
        $user->facebook = $req->facebook;
        $user->twitter = $req->twitter;
        $user->instagram = $req->instagram;
        $user->linkdin = $req->linkdin;
        if($req->hide_profile == "on"){ // public_visibility = 0 not visible to public
            $public_visibility = 0;
        }else{
            $public_visibility = 1;
        }
        $user->public_visibility = $public_visibility;
        $user->description = $req->hostDescription;
        $user->update();
        return redirect('/'.auth()->user()->unique_id. '/general-settings')->with(['success'=>'Profile updated succesfully']);
    }
    public function addProfilePic(Request $req){
        $req->validate([
            'profile_img' => ['required','image',new ImageFileType]
        ],
        [
            'profile_img.required' => 'You have to choose any image before upload.',
        ]);
        $user = User::find($req->id);
        if($req->profile_exist == '1'){
            if($req->hasfile('profile_img')){
                $destination = asset('Assets/images/user-profile-images/'. auth()->user()->profile_image_name);
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $req->file('profile_img');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(base_path('public/Assets/images/user-profile-images'),$name);
                $user->profile_image_name = $name;
                $user->profile_image_url = asset('Assets/images/user-profile-images/'.$name);
                $user->update();
            }
            return back()->with('success','Profile picture uploaded succesfully.');
        }else{
            if($req->hasfile('profile_img')){
                $file = $req->file('profile_img');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(base_path('public/Assets/images/user-profile-images'),$name);
                $user->profile_image_name = $name;
                $user->profile_image_url = asset('Assets/images/user-profile-images/'.$name);
                $user->save();
            }
            return back()->with('success','New profile picture added succesfully.');
        }
    }
    public function changePassword(){
        return view('Host.account-details.password_change');
    }
}
