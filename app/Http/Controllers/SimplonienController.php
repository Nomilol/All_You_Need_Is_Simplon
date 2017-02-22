<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simplonien;
use App\Http\Controllers\NonceController;
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
            (new NonceController)->delete($testedEmail);
            (new NonceController)->save($testedEmail, true);
            $this->sendAddMail($testedEmail);
            return view('simplonien.add');
        }
    }

    public function getData(){
      $simploniens = Simplonien::all();
      return view('layout.home', ['simploniens' => $simploniens]);
      dd();
    }

    public function sendAddMail($email){
        Mail::to($email)->send(new AddProfile($email));
    }
}
