@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <div class="row"></div>
    <br><br>
    <div class="row">
        <div class="col-sm-1">
            <a style="text-decoration: none;" href="{{ route('admin.create') }}">
                <button class="btn" type="button" id="btnAdd">
                    Registrar
                </button>
            </a>
        </div>
        <div class="col-sm-11"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table class="table table-hover">
                <thead style="text-align: center;" class="table-dark">
                    <tr>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido(s)</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Tel&eacute;fono</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Sueldo</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado -> nombre }}</td>
                            <td>{{ $empleado -> apellidos }}</td>
                            <td>{{ $empleado -> email }}</td>
                            <td>{{ $empleado -> telefono }}</td>
                            <td>{{ $empleado -> puesto }}</td>
                            <td>{{ $empleado -> edad }}</td>
                            <td>{{ $empleado -> sexo }}</td>
                            <td>{{ $empleado -> sueldo }}</td>
                            <td>{{ $empleado -> fechaIngreso }}</td>
                            <td>
                                <form action="{{ route('admin.destroy', $empleado -> id) }}" method="POST">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.edit', $empleado -> id ) }}" style="text-decoration: none;" id="btnEdit">
                                            <button class="btn btn-outline-primary" type="button">
                                                <i id="edit-icon" class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="del();" class="btn btn-outline-danger" type="submit">
                                            <i id="delete-icon" class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection