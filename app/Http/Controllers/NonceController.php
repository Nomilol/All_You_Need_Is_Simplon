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

    public function save($email){
      $nonce = new Nonce;

      $nonce->email = $email;
      $nonce->nonce = $this->create();
      $nonce->save();
    }
}
