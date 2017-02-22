<?php

namespace App\Http\Controllers;

use App\Simplonien;
use App\Nonce;
use Illuminate\Http\Request;

class NonceController extends Controller
{
  public function create(){
    $exists = true;
    $nonce = null;
      while($exists){
        $nonce = str_random(66);
        $exists = \App\Nonce::where('nonce', $nonce)->exists();
      }
      return $nonce;
    }

    public function save($email, $adding){
      $nonce = new Nonce;

      $nonce->email = $email;
      $nonce->adding = $adding;
      $nonce->nonce = $this->create();
      $nonce->save();
    }

    public function delete($email){
      $oldNonces = \App\Nonce::where('email', $email)->delete();
    }

    public function verifyToken(){
      $exists = \App\Nonce::where('nonce', $_GET['token'])->exists();
      if($exists){
        return view('simplonien.addForm');
      }
      else{
        return view('simplonien.home');
      }
    }
}
