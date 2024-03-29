@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid ">

        <div style="height:60px">
        </div>  <!-- espacio del top -->  

        <div class="row justify-content-center " >
            <div class="col-10">
                <div class="card col-12">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12">
                        <!-- contenido de main imagenes -->
                                <div class="row">
                                <!-- Docente -->
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/')}}"><span class="info-box-text  font-weight-bold" style="color: aliceblue;">Usuarios</span></a>  
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Estudiante -->
                                    <div class="col-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-medal"></i></span>
                                            <div class="info-box-content">
                                            <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Rubricas</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Coordinador -->
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-project-diagram"></i></span>
                            
                                            <div class="info-box-content">
                                            <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Proyectos</span></a>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <!-- informatico -->
                                    <div class="col-6">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
                                            <div class="info-box-content">
                                                <a href="{{url('/')}}"><span class="info-box-text font-weight-bold" style="color: aliceblue;">Generaciones</span></a>
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
    </div>
</section>


@endsection
  <!-- Content Wrapper. Contains page content -->
