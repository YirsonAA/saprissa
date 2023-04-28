<!-- resources/views/partidos/estadio.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{ route('root') }}" >Regresar a la lista de estadios</a>
        <h2>Partidos en {{ $estadio->description }}</h2>
        <ul>
            @foreach ($partidos as $partido)
                <li>{{ $partido->partido }}</li>
            @endforeach
        </ul>
    </div>
@endsection
