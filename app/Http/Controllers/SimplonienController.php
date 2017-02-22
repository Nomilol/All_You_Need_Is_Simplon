<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simplonien;

class SimplonienController extends Controller
{
    public function postCheckMail(Request $request){
        $testedEmail = $request->email;
        $email = \App\Simplonien::where('email', $testedEmail)->exists();
        if($email){
            return view('simplonien.edit');
        }
        else {
            return view('simplonien.add');
        }
    }
    public function getData(){
      $simploniens = Simplonien::all();
      return view('layout.home', ['simploniens' => $simploniens]);
      dd();
    }
}
