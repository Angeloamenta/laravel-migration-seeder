@extends('layouts.base')

@section('content')
<div class="train-card">
    @foreach ($trains as $train)
    <a href="{{ route('show', $train) }}">
        
        <h2>{{$train['agency']}}</h2>
    </a>
        <h4>{{$train['departure_day']}}</h4>
    @endforeach
</div>
@endsection