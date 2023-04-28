@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles del partido</h2>
    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $partido->id }}</td>
        </tr>
        <tr>
            <th>Partido:</th>
            <td>{{ $partido->partido }}</td>
        </tr>
        <tr>
            <th>Estadio:</th>
            <td>{{ $partido->estadio->description }}</td>
        </tr>
    </table>
    <a href="{{ route('partidos.index') }}" class="btn btn-primary">Volver al listado</a>
</div>
<div class="row">
    <div class="col-md-6">
        <a href="{{ route('gestor') }}" class="btn btn-secondary mb-2">Regresar a Gestor</a>
    </div>
</div>

@endsection