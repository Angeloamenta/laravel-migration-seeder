@extends('layouts.base')

@section('content')
<div class="train-card">
    <h1>{{$train->agency}}</h1>
    <h2>Partenza da</h2>
    <h4>{{$train->departure_station}}</h4>
    <h2>Arrivo a</h2>
    <h4>{{$train->arrival_station}}</h4>
    <h2>Partenza</h2>
    <h4>{{$train->departure_day}}</h4>
</div>
@endsection