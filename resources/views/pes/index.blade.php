@extends('layouts.plantillabase');
<!--index pes-->
@section('contenido')


<a style="margin: 10px auto;" href="pes/create" class="btn btn-primary">Agregar</a>

<table class="table table-light table-striped mt-4">
    <thead class="table table-dark table-striped mt-4">
        <p style="font-size: 35px; text-align:center; margin:0 auto;">AGREGAR PROGRAMA EDUCATIVO</p>
        <tr>
            <th scope="col">Programa</th>
            <th scope="col">Coordinador</th>
            <th scope="col">Acciones</th>
        <tr>
    </thead>
        <!--<tr>
            <th scope="col">Programa 1</th>
            <th scope="col">Ing. Keyla Esmeralda Montejo</th>
            <th scope="col"><buttom class="btn btn-info">Editar</buttom>
            <div class="btn-group">
            <buttom class="btn btn-danger">Borrar</buttom>
            </div>  
            <div class="btn-group">
            <buttom class="btn btn-primary">Agregar</buttom>
            </div>     
            </th>
            
        <tr>
        <tr>
            <th scope="col">Programa 2</th>
            <th scope="col">Ing. Cesar Gabriel Morales</th>
            <th scope="col"><buttom class="btn btn-info">Editar</buttom>
            <div class="btn-group">
            <buttom class="btn btn-danger">Borrar</buttom>
            </div>  
            <div class="btn-group">
            <buttom class="btn btn-primary">Agregar</buttom>
            </div>     
            </th>
            
        <tr>
        -->
    <tbody>
    @foreach($pes as $pe)
    <tr>
        <td> {{$pe->nombre}} </td>
        <td> {{$pe->coordinador}} </td>

        
        <td> 
            
            <a href='/pes/{​​{​​$pe->id}​​}​​/edit' class="btn btn-info">Editar</a>
            <button class="btn btn-danger">Eliminar</button>
            <a class="btn btn-info">Mostrar</a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection