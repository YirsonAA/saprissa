<!-- resources/views/estadios/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $estadio->description }}</h2>
    <h3>Partidos</h3>
    <ul>
        @foreach ($partidos as $partido)
        <li>{{ $partido->partido }}</li>
        @endforeach
    </ul>
</div>
@endsection