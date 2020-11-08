@extends('layouts.app')
@section('content')

<h1>{{$event->titre}}</h1>
<p>{{$event->description}}</p>
<p>{{$event->Echeance}}</p>
<a href="{{route('home')}}">Tous les evenements</a><br>
<a href="{{route('events.edit',$event)}}">Modifier</a> 
<form action="{{route('events.destroy',$event)}}" method="post"><br>
{{csrf_field()}}

{{method_field('DELETE')}}
<input type="submit" value="Supprimer">
</form>
@stop