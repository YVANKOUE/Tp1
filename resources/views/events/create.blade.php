@extends('layouts.app')
@section('content')

<h1>Creer un Evenement</h1>

<form action="{{route('events.store')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="titre" placeholder="Titre de l'evenement"><br><br>
    {!!$errors->first('titre' , '<p class="error">:message</p>')!!}
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description de l'evenement"></textarea><br>
    {!!$errors->first('description' , '<p class="error">:message</p>')!!}
    <input type="date" name="Echeance"><br><br>
    {!!$errors->first('Echeance' , '<p class="error">:message</p>')!!}
    <input type="submit" value="Enregistrer"><br>
    <p><a href="{{route('home')}}">Accueil</a></p>
</form>

@stop