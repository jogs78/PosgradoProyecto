@extends('layouts.master')

@section('regresar') 
    <a href="/listar-usuarios" class="nav-link">
    <i class="fa fa-chevron-circle-left" aria-hidden="true" ></i>    
    </a>
@endsection
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('inicio')}}" class="nav-link" >Inicio</a>
</li>
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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Actualizar Contraseña</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <!--<input id="coordinador" name="coordinador" type="text" style="width: 100%" tabindex="3"> -->                                        
                                        <form action="/actualizar-contraseñas/Estudiante/{{$estudiante->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        
                                                <div class="form-group">
                                                <label for="password">Introduce tu nuevo password:</label>
                                                <input type="password" name="password" style="width: 100%">
                                                </div>
                                                <a href="/listar-usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
                                                <button type="submit" class="btn btn-warning">Guardar</button>
                                                
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
@endsection




    
          
  