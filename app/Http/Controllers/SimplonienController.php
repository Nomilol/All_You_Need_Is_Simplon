<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simplonien;
use Illuminate\Support\Facades\Mail;
use App\Mail\AddProfile;

class SimplonienController extends Controller
{
    public function postCheckMail(Request $request){
        $testedEmail = $request->email;
        $email = \App\Simplonien::where('email', $testedEmail)->exists();
        if($email){
            return view('simplonien.edit');
        }
        else {
            $this->sendAddMail($testedEmail);
            return view('simplonien.add');
        }
    }

    public function sendAddMail($email){
        Mail::to($email)->send(new AddProfile());
    }
}
