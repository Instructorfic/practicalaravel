@extends('layout') 

@section('content')
    <div class="container">
        <h1>Editar Estudiante</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf 
            @method('PUT') 

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname', $student->lastname) }}" required>
                @error('lastname')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modificar datos</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection