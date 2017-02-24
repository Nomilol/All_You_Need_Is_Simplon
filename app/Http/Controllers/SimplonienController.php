<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simplonien;
use App\Http\Controllers\NonceController;
use Illuminate\Support\Facades\Mail;
use App\Mail\AddProfile;
use App\Mail\EditProfile;

class SimplonienController extends Controller
{
    public function postCheckMail(Request $request){
        $testedEmail = $request->email;
        $email = \App\Simplonien::where('email', $testedEmail)->exists();
        if($email){
            (new NonceController)->delete($testedEmail);
            (new NonceController)->save($testedEmail, false);
            $this->sendEditMail($testedEmail);
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
      $simploniens = App\Simplonien::all();
      return view('layout.home', ['simploniens' => $simploniens]);
    }

    public function sendAddMail($email){
        Mail::to($email)->send(new AddProfile($email));
    }

    public function sendEditMail($email){
        Mail::to($email)->send(new EditProfile($email));
    }

    public function addSimplonien(Request $request){
        $simplonien = new Simplonien;
        $simplonien->nom = $request->nom;
        $simplonien->prenom = $request->prenom;
        $simplonien->email = $request->email;
        $simplonien->telephone = $request->telephone;
        $simplonien->code_postal = $request->code_postal;
        $simplonien->ville_formation = $request->ville_formation;
        $simplonien->promo = $request->promo;
        $simplonien->github = $request->github;
        $simplonien->cv = $request->cv;
        $simplonien->punchline = $request->punchline;
        $simplonien->linkedin = $request->linkedin;
        $simplonien->twitter = $request->twitter;
        $simplonien->facebook = $request->facebook;
        $simplonien->site_perso = $request->site_perso;
        $simplonien->blog = $request->blog;

        $simplonien->save();

        return view('simplonien.home');
    }

    public function postEditSimplonien(Request $request, $id){
        $simplonien = \App\Simplonien::find($id);
        $simplonien->nom = $request->nom;
        $simplonien->prenom = $request->prenom;
        $simplonien->email = $request->email;
        $simplonien->telephone = $request->telephone;
        $simplonien->code_postal = $request->code_postal;
        $simplonien->ville_formation = $request->ville_formation;
        $simplonien->promo = $request->promo;
        $simplonien->github = $request->github;
        $simplonien->cv = $request->cv;
        $simplonien->punchline = $request->punchline;
        $simplonien->linkedin = $request->linkedin;
        $simplonien->twitter = $request->twitter;
        $simplonien->facebook = $request->facebook;
        $simplonien->site_perso = $request->site_perso;
        $simplonien->blog = $request->blog;

        $simplonien->save();
        return view('simplonien.home');
    }

    public function AsyncAddSimplonien(Request $request){
        $simplonien = new Simplonien;
        $simplonien->nom = $request->nom;
        $simplonien->prenom = $request->prenom;
        $simplonien->email = $request->email;
        $simplonien->telephone = $request->telephone;
        $simplonien->code_postal = $request->code_postal;
        $simplonien->ville_formation = $request->ville_formation;
        $simplonien->promo = $request->promo;
        $simplonien->github = $request->github;
        $simplonien->cv = $request->cv;
        $simplonien->punchline = $request->punchline;
        $simplonien->linkedin = $request->linkedin;
        $simplonien->twitter = $request->twitter;
        $simplonien->facebook = $request->facebook;
        $simplonien->site_perso = $request->site_perso;
        $simplonien->blog = $request->blog;

        $simplonien->save();

        return response()->json([
            'nom' => $simplonien->nom,
            'prenom' => $simplonien->prenom,
            'email' => $simplonien->email,
            'telephone' => $simplonien->telephone,
            'code_postal' => $simplonien->code_postal,
            'ville_formation' => $simplonien->ville_formation,
            'promo' => $simplonien->promo,
            'github' => $simplonien->github,
            'cv' => $simplonien->cv,
            'punchline' => $simplonien->punchline,
            'linkedin' => $simplonien->linkedin,
            'twitter' => $simplonien->twitter,
            'facebook' => $simplonien->facebook,
            'site_perso' => $simplonien->site_perso,
            'blog' => $simplonien->blog,
        ]);
    }
}
