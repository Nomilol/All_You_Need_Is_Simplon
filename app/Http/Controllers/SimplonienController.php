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
<<<<<<< HEAD
    public function getData(){
      $simploniens = Simplonien::all();
      return view('layout.home', ['simploniens' => $simploniens]);
      dd();
=======

    public function sendAddMail($email){
        Mail::to($email)->send(new AddProfile());
>>>>>>> 74e17afe93cd4c6ebdc2028336096b02eff61b01
    }
}
