@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="container-fluid">
    <div class="row"></div>
    <br><br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">
                            <span style="text-align: center;"><i class="fa-solid fa-user" id="user-icon"></i></span>
                        </div>
                        <br><br>
                        <div class="row mb-3">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <input id="email" name="email" type="email" required class="form-control" placeholder="Correo electrónico">
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <input id="password" name="password" type="password" required class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        @error('message')

                        @enderror
                        <br>
                        <div class="row mb-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" align="center">
                                <button type="submit" class="btn" id="btnLogin">Acceder</button>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<style>
    #user-icon 
    {
        font-size: 70px;
        color: #1B7DDF;
        margin-top: 1rem;
    }

    #btnLogin 
    {
        font-size: 19px;
        font-weight: bold;
        background-color: #1B7DDF;
        color: #ffffff;
    
        transition: ease-out 0.3s;
        border-radius: 20px;
    }
    
    #btnLogin:hover 
    {
        background-color: #F43E3E;
    }
</style>
@endsection