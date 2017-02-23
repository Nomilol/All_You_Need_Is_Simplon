@extends('layouts.layout')

@section('content')

<div class="ui segment">

  <h2 class="ui centered big header">Editer son profil de Simplonien</h2>

  <form class="ui form" action="/simplonien/edit/{{ $simplonien->id }}" method="post">
    <div class="ui field required">
      <label for="nom">Nom</label><input type="text" name="nom" value="{{ $simplonien->nom }}" required />
    </div>
    <div class="ui field required">
      <label for="prenom">Prénom</label><input type="text" name="prenom" value="{{ $simplonien->prenom }}" required />
    </div>
    <div class="ui field required">
      <label for="email">Email</label><input type="text" name="email" value="{{ $simplonien->email }}" required />
    </div>
    <div class="ui field">
      <label for="telephone">Téléphone</label><input type="number" name="telephone" value="{{ $simplonien->telephone }}" />
    </div>
    <div class="ui field required">
      <label for="code_postal">Code Postal</label><input type="text" name="code_postal" value="{{ $simplonien->code_postal }}" required />
    </div>
    <div class="ui field required">
      <label for="ville_formation">Ville de Formation</label><input type="text" name="ville_formation" value="{{ $simplonien->ville_formation }}" required />
    </div>
    <div class="ui field required">
      <label for="promo">N° de Promotion</label><input type="number" name="promo" value="{{ $simplonien->promo }}" required />
    </div>
    <div class="ui field">
      <label for="github">Lien Github</label><input type="text" name="github" value="{{ $simplonien->github }}" />
    </div>
    <div class="ui field">
      <label for="cv">Lien CV</label><input type="text" name="cv" value="{{ $simplonien->cv }}" />
    </div>
    <div class="ui field">
      <label for="punchline">Punchline</label><input type="text" name="punchline" value="{{ $simplonien->punchline }}" />
    </div>
    <div class="ui field">
      <label for="linkedin">Lien Linkedin</label><input type="text" name="linkedin" value="{{ $simplonien->linkedin }}" />
    </div>
    <div class="ui field">
      <label for="twitter">Lien Twitter</label><input type="text" name="twitter" value="{{ $simplonien->twitter }}" />
    </div>
    <div class="ui field">
      <label for="facebook">Lien Facebook</label><input type="text" name="facebook" value="{{ $simplonien->facebook }}" />
    </div>
    <div class="ui field">
      <label for="site_perso">Lien du Site Perso</label><input type="text" name="site_perso" value="{{ $simplonien->site_perso }}" />
    </div>
    <div class="ui field">
      <label for="blog">Lien du Blog</label><input type="text" name="blog" value="{{ $simplonien->blog }}" />
    </div>
    {{ csrf_field() }}

    <button type="submit" class="ui green button">Editer</button>

  </form>

</div>



@stop
