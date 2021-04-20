@extends('layouts.plantillageneracion');

@section('contenido')
<h2>Agregar Generaciones</h2>

<form action="/pes" method="POST">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Generacion</label>
        <input id="Programa" name="Programa" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nivel</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Rubricas</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Entregables</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Porcetajes</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Periodos</label>
        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
    </div>

    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection