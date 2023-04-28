@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Partidos</h2>
    <a href="{{ route('partidos.create') }}" class="btn btn-primary">Agregar partido</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Partido</th>
                <th>Estadio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partidos as $partido)
            <tr>
                <td>{{ $partido->id }}</td>
                <td>{{ $partido->partido }}</td>
                <td>{{ $partido->estadio->description }}</td>
                <td>
                    <a href="{{ route('partidos.show', $partido) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('partidos.edit', $partido) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('partidos.destroy', $partido) }}" method="POST" style="display: inline;">
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