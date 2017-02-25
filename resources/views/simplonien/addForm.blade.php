@extends('layouts.layout')

@section('content')

<div class="ui segment">

  <h2 class="ui centered big header">Ajouter son profil de Simplonien</h2>

  <form class="ui form" action="/simplonien/add" id="addForm" method="post">
    <div class="ui field required">
      <label for="nom">Nom</label><input type="text" name="nom" value="blablabla" required />
    </div>
    <div class="ui field required">
      <label for="prenom">Prénom</label><input type="text" name="prenom" value="blablabla" required />
    </div>
    <div class="ui field required">
      <label for="email">Email</label><input type="text" name="email" value="blablabla" required />
    </div>
    <div class="ui field">
      <label for="telephone">Téléphone</label><input type="number" name="telephone" />
    </div>
    <div class="ui field required">
      <label for="code_postal">Code Postal</label><input type="text" name="code_postal" value="31200" required />
    </div>
    <div class="ui field required">
      <label for="ville_formation">Ville de Formation</label><input type="text" name="ville_formation" value="blablabla" required />
    </div>
    <div class="ui field required">
      <label for="promo">N° de Promotion</label><input type="number" name="promo" value="3" required />
    </div>
    <div class="ui field">
      <label for="github">Lien Github</label><input type="text" name="github" />
    </div>
    <div class="ui field">
      <label for="cv">Lien CV</label><input type="text" name="cv" />
    </div>
    <div class="ui field">
      <label for="punchline">Punchline</label><input type="text" name="punchline" />
    </div>
    <div class="ui field">
      <label for="linkedin">Lien Linkedin</label><input type="text" name="linkedin" />
    </div>
    <div class="ui field">
      <label for="twitter">Lien Twitter</label><input type="text" name="twitter" />
    </div>
    <div class="ui field">
      <label for="facebook">Lien Facebook</label><input type="text" name="facebook" />
    </div>
    <div class="ui field">
      <label for="site_perso">Lien du Site Perso</label><input type="text" name="site_perso" />
    </div>
    <div class="ui field">
      <label for="blog">Lien du Blog</label><input type="text" name="blog" />
    </div>
    {{ csrf_field() }}

    <button type="submit" class="ui green button" id="addButton">Ajouter</button>

  </form>

</div>



@stop
