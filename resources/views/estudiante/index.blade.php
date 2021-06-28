@extends('layouts.master')

@section('titulo')
  <p>Estudiante</p>

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
@section('inicio')
<li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/estudiantes')}}" class="nav-link">Inicio</a>
</li>
@endsection
@section('content')
   <div class="main container mt-10">
     <div class="row justify-content-center">
       <div class="col-md-10">
         <section class="content">
    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                        <h5 class="card-title font-weight-bold" style="text-align: center">Estudiante</h5>
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
                                                <a href="{{url('/proyectos')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Nuevo Proyecto</span></a>  
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/mainestudiantes')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Modificar Proyecto</span></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/reportes')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Reportar Avance</span></a>
                                            
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/compromisos')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Compromisos</span></a>
                                                
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
       </div>
     </div>
    
   </div>
@endsection
  

