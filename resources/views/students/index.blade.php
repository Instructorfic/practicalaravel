@extends('layout')

@section('content')
<div class="container">
        <h1>Lista de Estudiantes</h1>

        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Nuevo Estudiante</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection