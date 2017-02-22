<?php

namespace App\Http\Controllers;

use App\Simplonien;
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
}
