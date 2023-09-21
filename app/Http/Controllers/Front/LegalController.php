<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\HelpMail;
use App\Models\User;
use App\Models\Sitemeta;
use Illuminate\Support\Facades\Mail;

class LegalController extends Controller
{
    //
    public function index($value = null){

        return view('Guests.legal.index',compact('value'));
    }
    public function privacyPolicy(){
        return view('Guests.privacyPolicy.index');
    }
    public function termAndConditions(){
        return view('Guests.termAndConditions.index');
    }
    public function privacyPolicydownload(){
        $file = public_path('privacy-policies/Privacy-Policy.pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return response()->download($file, 'Privacy-Policy.pdf', $headers);
    }
    public function Receiptdownload(){
        $file = public_path('privacy-policies/Receipt-2533-9452.pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return response()->download($file, 'Receipt.pdf', $headers);
    }
    public function termconditiondownload(){
        $file = public_path('privacy-policies/Terms and Conditions of Website - Veritas Horizon_ L.L.C. - PDF (1) (1).pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return response()->download($file, 'Terms&Conditions.pdf', $headers);
    }
    public function downloadQuickGuidePdf($pdfname){
        $file = public_path('quick-guide/'.$pdfname.'.pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return response()->download($file, $pdfname.'.pdf', $headers);
    }
}
