@extends('layouts.layout')

@section('content')
  <div class="ui segment">

    <h2 class="ui small header">Vérification de l'adresse email</h2>


    <form class="ui form" action="/check" method="post">
      <div class="ui field required">
        <label for="email">Email</label><input type="text" name="email" required/>
      </div>
      {{ csrf_field() }}
      <button type="submit" name="button" class="ui green button">Vérifier</button>
    </form>

  </div>
@stop
