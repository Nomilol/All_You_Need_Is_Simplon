<?php

namespace App\Http\Controllers;

use App\Simplonien;
use Illuminate\Http\Request;

class NonceController extends Controller
{
  public function create(){
      $nonce = null;
      while(!$nonce){
        $nonce = str_random(66);
        $email = \App\Nonce::where('nonce', $nonce)->exists();
      }
      return $nonce;
    }
}
