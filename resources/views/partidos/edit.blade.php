@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar partido</h2>
    <form action="{{ route('partidos.update', $partido) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="partido">Partido:</label>
            <input type="text" class="form-control" id="partido" name="partido" value="{{ $partido->partido }}" required>
        </div>
        <div class="form-group">
            <label for="estadio_id">Estadio:</label>
            <select class="form-control" id="estadio_id" name="estadio_id" required>
                <option value="">Seleccione un estadio</option>
                @foreach($estadios as $estadio)
                <option value="{{ $estadio->id }}" {{ $partido->estadio_id == $estadio->id ? 'selected' : '' }}>{{ $estadio->description }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('partidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('gestor') }}" class="btn btn-secondary mb-2">Regresar a Gestor</a>
        </div>
    </div>

</div>
@endsection