@extends('layouts.master')

@section('content')
<!-- Main content AQUI VA TODO EL CONTENIDO EXTRA -->
<div class="main container mt-5">
    <div class="row justify-content-center">
        <div class="col-7 mt-5">
            <div class="col-12 mt-5 text-center font-weight-bolder">
                <h1 class="font-weight-bolder">BIENVENIDOS</h1>
            </div>
            
            <div class="card">
                <form class="formulario" action="{{route('entrada.validar')}}" method="POST">
                    <div class="card-header text-center font-weight-bolder" style="font-size: 25px">
                        Iniciar Sesión
                    </div>
                    <div class="card-body col-12">
                        @csrf
                        <p>Correo:</p>
                        <input type="email" name="nombre" class="form-control col-12" id="" value="{{old('nombre')}}" placeholder="Introduce tu email">
                        <p class="mt-3">Contraseña</p>
                        <input type="password" name="palabra" class="form-control col-12" id="" value="{{old('palabra')}}" placeholder="Introduce tu contraseña">
                        <button type="submit" class="btn col-12 mt-3 btn-success">Iniciar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Content Wrapper. Contains page content -->