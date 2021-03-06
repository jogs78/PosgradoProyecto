@extends('layouts.master')

@section('titulo')
  <p>Docente: {{ \Session::get('usuario')->nombre}}</p>

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
                            <h1 class="card-title font-weight-bold" style="text-align: center">                                
                            Docente: {{ \Session::get('usuario')->nombre}}
                            </h1>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                
                                    <div class="col-md-12">
                                    @if (session('message'))
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Bien!,</strong> {{Session::get('message')}}
                                        </div> 
                                     @endif
                                <!-- contenido de main imagenes -->
                                        <div class="row">
                                            <table class="table table-dark table-striped mt-4">
                                                <thead class="table table-dark table-striped mt-4">
                                                    
                                                    <tr>
                
                                                        <th scope="col">Proyecto</th>
                                                        <th scope="col">Estudiante</th>
                                                        <th scope="col">Acciones</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                @foreach($proyectos as $proyecto) 
                                                <tr> 
                                            
                                            
                                                    <th scope="col">{{$proyecto->titulo}}</th> 
                                                    <th scope="col">{{$proyecto->estudiante->nombre}}</th>
                                                    <td>

                                            
                                                        @if ($proyecto->estudiante->semestreActual->estado == "Evaluacion")
                                                            <a href="evaluaciones/{{$proyecto->id}}" class="btn btn-info">Evaluar</a>
                                                            @if($proyecto->promedio-> count() >=1)
                                                            <button type="button" class="btn btn-warning"><a href="promedios-semestrales/{{$proyecto->id}}" style="color: white">Historico</a></button>
                                                            @endif
                                                                    
                                                        @endif
                                                     
                                                        @if ($proyecto->estudiante->semestreActual->estado == "Concluido")
                                                            <button type="button" class="btn btn-warning"><a href="promedios-semestrales/{{$proyecto->id}}" style="color: white">Historico</a></button>
                                                        @endif
                                                        
                                                    </td>
                                                        </th>
                                                        <tr> 
                                                @endforeach
                                                 <!-- liga para descargar manuales -->
                                               
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                </div>
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection

