@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Estadios</h2>
    <a href="{{ route('estadios.create') }}" class="btn btn-primary">Agregar estadio</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estadios as $estadio)
            <tr>
                <td>{{ $estadio->id }}</td>
                <td>{{ $estadio->description }}</td>
                <td>
                    <a href="{{ route('estadios.show', $estadio) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('estadios.edit', $estadio) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('estadios.destroy', $estadio) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('gestor') }}" class="btn btn-secondary mb-2">Regresar a Gestor</a>
        </div>
    </div>
</div>
@endsection
