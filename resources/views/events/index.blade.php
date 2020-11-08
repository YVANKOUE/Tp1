@extends('layouts.app')

@section('content')

<a href="{{route('events.create')}}">Creer un evenement</a>
@if($events ->count() > 0)
<ul>
@foreach($events as $event)
<li><a href="{{route('events.show' , $event)}}">{{$event->titre}}</a> creer le {{$event->Echeance}} </li>
@endforeach
</ul>
@else
<p>Aucun evenements aujoudhui</p>
@endif
@stop