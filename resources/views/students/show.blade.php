
@extends('layout')

@section('content')
    <div class="container">
        <h1>Detalles del Estudiante</h1>

        <div class="card">
            <div class="card-header">
                Estudiante #{{ $student->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $student->name }}</h5>
                <p class="card-text">Apellido: {{ $student->lastname }}</p>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">Volver a la lista</a>
                
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Editar</a>
                
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@endsection