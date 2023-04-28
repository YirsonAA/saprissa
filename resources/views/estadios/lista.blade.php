@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Estadios</h2>
    <!-- resources/views/estadios/index.blade.php -->
    @foreach ($estadios as $estadio)
    <h3><a href="{{ route('estadios.partidos', $estadio->id) }}">{{ $estadio->description }}</a></h3>
    @endforeach

</div>
@endsection