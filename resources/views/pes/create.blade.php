@extends('layouts.master');

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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/pes')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center" >
            <div class="col-12">
                <div class="card col-12">
                        <div class="card-header" style="text-align: center">
                            <h1 class="card-title font-weight-bold" style="text-align: center">Crear Registros</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div >

                        <form action="/pes" method="POST" enctype="multipart/form-data">
                        @csrf
<<<<<<< HEAD
                            <div class="row form-group col-12">
=======
                            <div class="mb-12">
>>>>>>> 8c35d6263727fe550d94beceb51e15810f403777
                                Programa Educativo
                                <input type="text" name="nombre" class="form-control">
                            </div>
<<<<<<< HEAD
                            <div class="row form-group col-12">
=======
                            <div class="mb-12">
>>>>>>> 8c35d6263727fe550d94beceb51e15810f403777
                                Nombre del coordinador
                                <input type="text" name="coordinador"  class="form-control" style="WIDTH:900px;">
                            </div>
                            <div class="mb-12">
                                Correo del cordianador
                                <input type="text" name="correo" class="form-control" style="WIDTH:900px;">
                            </div>
                            <div class="mb-12">
                                Contrase??a
                                <input type="password" name="password"  class="form-control" style="WIDTH:900px;">
                            </div>
                            <div class="mb-12">
                                Repita la Contrase??a
                                <input  type="password" name="password2"  class="form-control" style="WIDTH:900px;">
                            </div>

                            <a href="/pes" class="btn btn-danger" tabindex="5">Cancelar</a>
                            <input type="submit" value="Guardar" class="btn btn-warning">
                            
                        </form>
                </div>
            </div>
        </div> 
    </div> 
</section>  

@endsection