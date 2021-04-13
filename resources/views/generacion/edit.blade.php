@extends('layouts.plantillageneracion');

@section('contenido')
<h2>Agregar generacion</h2>

<form action="/pes/{​​{​​$pe->id}​​}​​" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Generacion</label>
        <input name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Año</label>
        <input name="correo" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input name="password" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">nombre</label>
        <input name="nombre" type="text" class="form-control" tabindex="3">
    </div>

    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection