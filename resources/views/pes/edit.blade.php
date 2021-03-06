@extends('layouts.master');

@section('titulo')
  Informatico

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link"> 
            <i  class="fa fa-sign-out" aria-hidden="true"></i>    
        </a>
         </li>    
    </form>   
@endsection


@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Registros</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div >
            
                        <form action="/pes/{{$pe->id}}" method="post">
                            @csrf
                            @method('PUT')
                                <div class="mb-12">
                                    Programa Educativo
                                    <input type="text" name="nombre"  class="form-control" tabindex="2" value="{{$pe->nombre}}">
                                </div>
                                <div class="mb-12">
                                    Nombre del coordinador
                                    <input type="text" name="coordinador"  class="form-control" tabindex="3"  value="{{$pe->coordinador}}">
                                </div>
                                <div class="mb-12">
                                    Correo del cordianador
                                    <input type="text" name="correo"  class="form-control" tabindex="3"  value="{{$pe->correo}}">
                                </div>
                                <div class="mb-12">
                                    Contrase??a
                                    <input type="password" name="password"  class="form-control" tabindex="3">
                                </div>
                                <div class="mb-12">
                                    Repita la Contrase??a
                                    <input  type="password" name="password2"  class="form-control" tabindex="3">
                                </div>

                                <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                                <input type="submit" value="Guardar" class="btn btn-primary">
                                
                            </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection