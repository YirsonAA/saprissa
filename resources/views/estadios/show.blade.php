@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles del estadio</h2>
    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $estadio->id }}</td>
        </tr>
        <tr>
            <th>Descripción:</th>
            <td>{{ $estadio->description }}</td>
        </tr>
    </table>
    <a href="{{ route('estadios.index') }}" class="btn btn-primary">Volver al listado</a>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('gestor') }}" class="btn btn-secondary mb-2">Regresar a Gestor</a>
        </div>
    </div>
</div>
@endsection