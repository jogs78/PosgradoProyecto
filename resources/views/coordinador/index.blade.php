@extends('layouts.master')

@section('titulo')
  <p>{{ \Session::get('usuario')->coordinador}}</p>

@endsection
@section('submenu')
    <!--OPCION DEL MENU PARA SALIR DE SESION -->      
    <form action="/logout">
        <li class="nav-item"> 
            @csrf
            <a href="/logout" class="nav-link active far fa-circle nav-icon">Cerrar Sesión</a>
        </li>    
    </form>
    
@endsection


@section('content')
<section class="content">

    <div class="container-fluid">
    
        <div style="height: 5px">
        
        </div>  <!-- Info boxes -->  
  
        <div class="row" >
            <div class="col-md-12">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">

                        <h5 class="card-title font-weight-bold col-md-9" style="text-align: left">
                        {{ $pe->nombre}}: 
                        {{ \Session::get('usuario')->coordinador}} </h5>
    
                       
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>
                            
                                            <div class="info-box-content">
                                                <a href="{{url('/usuarios')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Usuarios</span></a>  
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/generaciones')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Generaciones</span></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/asignaciones')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Proyectos</span></a>
                                            
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/rubricas')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Rubricas</span></a>
                                                
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tasks"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/Compromisos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Compromisos</span></a>
                                                
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
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
  <!-- Content Wrapper. Contains page content -->



    
          
    
        
  