@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div style="height:60px">
        </div>  <!-- espacio del top -->  
        <div class="row justify-content-center" >
            <div class="col-10">
                <div class="card col-12">
                    <div class="card-header" style="text-align: center">
                        <h1 class="card-title font-weight-bold" style="text-align: center; font-size: 20px;">                                
                        Reportar Avance
                        </h1>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body">
                        <x-proyecto :proyecto=$proyecto></x-proyecto>
                        @php
                            $periodo = $proyecto->estudiante->periodo;
                            $periodo->laravel_through_key = $proyecto->id;
                        @endphp
                        <x-periodo :periodo=$periodo></x-periodo>
                        <hr>
                        <hr>
                        <hr>
                        @if (session('error_evidencias'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <ul>
                                        @foreach (Session::get('error_evidencias') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                            </div> 
                        @endif
                    
                        <form action="{{route('proyectos.guardarReporte')}}" style="background-color: gray; padding:1%"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="col-12" >
                                        <th scope="col">Compromisos</th>
                                        <th scope="col">Programado</th>
                                        <th scope="col">Realizado</th>
                                        <th scope="col">Evidencias</th>
                                    </tr>
                                </thead>                                    
                                <tbody>
                                @forelse ($proyecto->compromisos( $proyecto->estudiante->semestre->id )->get() as $compromiso)
                                    <tr>
                                        <input type="hidden" name="ides[{{$compromiso->id}}]" value="{{$compromiso->id}}">
                                        <input type="hidden" name="compromisos[{{$compromiso->id}}]" value="{{$compromiso->que}}">
                                        <input type="hidden" name="metas[{{$compromiso->id}}]" value="{{$compromiso->cuantos_programo}}">
                                        <input type="hidden" name="reportados[{{$compromiso->id}}]" value="{{$compromiso->cuantos_cumplio}}">
                                        <input type="hidden" name="archivos[{{$compromiso->id}}]" value="{{$compromiso->evidencia->archivo}}">
                                        
                                        <th>{{$compromiso->que}}</th>
                                        <td>{{$compromiso->cuantos_programo}}</td>
                                        <td>
                                            <input type="number" name="logrados[{{$compromiso->id}}]"  value="{{$compromiso->cuantos_cumplio}}"
                                                                min="0" max="{{$compromiso->cuantos_programo}}">
                                        </td>
                                        <td style="padding: 5px">
                                            @if (!is_null($compromiso->evidencia))
                                                <a href="/evidencias/{{$compromiso->evidencia->archivo}}" target="_blank" >
                                                    {{$compromiso->evidencia->archivo}}
                                                </a>
                                            @else 
                                                SIN EVIDENCIA                                                                                          
                                            @endif
                                            <BR>
                                            <input type="file" name="evidencias[{{$compromiso->id}}]" > 
                                        </td> 
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Sin compromisos definidos para este semestre</td>
                                    </tr>
                                @endforelse
                                </tbody>        
                            </table>
                            REPORTE: 
                            @if ($proyecto->reporte( $proyecto->estudiante->semestre->id )->count() != 0)
                                <input type="hidden" name="reporte_actual" value="{{$proyecto->reporte( $estudiante->semestre->id )->get()[0]->reporte}}">
                                <a href="/evidencias/{{$proyecto->reporte( $estudiante->semestre->id )->get()[0]->reporte }}" target="_blank" >
                                    {{$proyecto->reporte( $estudiante->semestre->id )->get()[0]->reporte }}
                                </a>
                            @else 
                                <input type="hidden" name="reporte_actual" value="">
                                                                                                                            
                            @endif
                            <input type="file" name="reporte" style="display: block">
                            <input type="submit" style="align-items: center" class="btn btn-danger" value="REPORTAR">
                        </form>            
                    </div>        
                </div>
            </div>
        </div>
    </div>
</section>
@endsection  
   
