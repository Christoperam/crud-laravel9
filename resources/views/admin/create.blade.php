@extends('layouts.app')


@section('content')

<div class="container-fluid">
    <div class="row"></div>
    <br><br>
    <div class="row" id="contenedor">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h2 style="text-align: center;font-size: 29px;">
                Registro de empleados
            </h2>
            <br><br>
            <form action="{{ route('admin.store') }}" method="POST" class="form">
                @csrf
                <div class="row mb-3">
                    <label for="nombre" class="col-sm-3 col-form-label">Nombre(s): </label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="apellidos" class="col-sm-3 col-form-label">Apellido(s): </label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="apellidos" name="apellidos">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Correo: </label>
                    <div class="col-sm-8">
                        <input required type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="pass" class="col-sm-3 col-form-label">Contrasenia: </label>
                    <div class="col-sm-8">
                        <input required type="password" class="form-control" id="pass" name="password">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="tel" class="col-sm-3 col-form-label">Tel&eacute;fono: </label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="tel" name="telefono">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="puesto" class="col-sm-3 col-form-label">Puesto: </label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="puesto" name="puesto">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="edad" class="col-sm-3 col-form-label">Edad: </label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="edad" name="edad">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="sexo" class="col-sm-3 col-form-label">Sexo: </label>
                    <div class="col-sm-8">
                        <!--<input required type="text" class="form-control" id="sexo" name="sexo">-->
                        <select class="form-select" name="sexo" id="sexo">
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="sueldo" class="col-sm-3 col-form-label">Sueldo: </label>
                    <div class="col-sm-8">
                        <input required type="text" class="form-control" id="sueldo" name="sueldo">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mb-3">
                    <label for="fecha" class="col-sm-3 col-form-label">Fecha de Ingreso: </label>
                    <div class="col-sm-8">
                        <input required type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" align="center">
                        <button onclick="add();" type="submit" class="btn btn-outline-success">
                            Guardar
                        </button>
                        &nbsp;
                        <a href="{{ url('/') }}" style="text-decoration: none;">
                            <button type="button" class="btn btn-outline-danger">
                                Cancelar
                            </button>
                        </a>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </form>
            <br>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<script>
    function add()
{
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'El empleado se registró con éxito',
        showConfirmButton: false,
        timer: 1500
    });
}
</script>
@endsection