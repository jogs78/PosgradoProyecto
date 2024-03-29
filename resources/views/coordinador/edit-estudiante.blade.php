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
                            <h1 class="card-title font-weight-bold" style="text-align: center">Editar Registro</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                            <!-- contenido de main imagenes -->
                                    <!--<input id="coordinador" name="coordinador" type="text" style="width: 100%" tabindex="3"> -->
                                        <form action="/actualizar-usuarios/Estudiante/{{$estudiante->id}}" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" style="width: 100%" tabindex="2" value="{{$estudiante->nombre}}">
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Correo</label>
                                                    <input id="correo" name="correo" type="text" style="width: 100%" tabindex="3" value="{{$estudiante->correo}}">
                                                </div>
                                       
                                                <a href="/listar-usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
                                                <input type="submit" value="Guardar" class="btn btn-warning">
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




    
          
  




  


