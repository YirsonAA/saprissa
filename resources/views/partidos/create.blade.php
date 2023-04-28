@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Agregar partido</h2>
    <form action="{{ route('partidos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="partido">Partido:</label>
            <input type="text" class="form-control" id="partido" name="partido" required>
        </div>
        <div class="form-group">
            <label for="estadio_id">Estadio:</label>
            <select class="form-control" id="estadio_id" name="estadio_id" required>
                <option value="">Seleccione un estadio</option>
                @foreach($estadios as $estadio)
                <option value="{{ $estadio->id }}">{{ $estadio->description }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('partidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('gestor') }}" class="btn btn-secondary mb-2">Regresar a Gestor</a>
        </div>
    </div>

</div>
@endsection

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif