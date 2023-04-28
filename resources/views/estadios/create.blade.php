@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Agregar estadio</h2>
    <form action="{{ route('estadios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Descripción:</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('estadios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('gestor') }}" class="btn btn-secondary mb-2">Regresar a Gestor</a>
        </div>
    </div>
</div>
@endsection