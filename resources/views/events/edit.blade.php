@extends('layouts.app')
@section('content')

<h1>Editer  Evenement#{{$event->id}}</h1>

<form action="{{route('events.update' , $event)}}" method="POST">
    {{csrf_field()}}

    {{method_field('PUT')}}
    
    <input type="text" name="titre" placeholder="Titre de l'evenement" value="{{ old('titre') ?: $event->titre}}"><br><br>
    {!!$errors->first('titre' , '<p class="error">:message</p>')!!}
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description de l'evenement">{{ old('titre') ?: $event->description}}</textarea><br>
    {!!$errors->first('description' , '<p class="error">:message</p>')!!}
    <input type="date" name="Echeance"><br><br>
    {!!$errors->first('Echeance' , '<p class="error">:message</p>')!!}
    <input type="submit" value="Modifier l'Evenement"><br>
    <p><a href="{{route('home')}}">Accueil</a></p>
</form>

@stop