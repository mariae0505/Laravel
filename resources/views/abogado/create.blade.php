@extends('adminlte::page')

@section('title', 'Title create')

@section('Creación de Abogados')
<h1>ContenHeader h1</h1>
@stop

@section('content')

<form action="/abogados" method="post" ">
  @csrf
  <div class=" row">

  <div class="col p-3 ">

    <div class="row">
      <div class="col">
        <div class=" mb-3">
          <label for="" class="form-label">Naturaleza</label>
          <input id="naturaleza" name="naturaleza" type="text" class="form-control" tabindex="1">
        </div>

      </div>
      <div class="col">
        <div class=" mb-3">
          <label for="" class="form-label">Tipo Documento</label>
          <input id="tipoidentificacion_id" name="tipoidentificacion_id" type="text" class="form-control" tabindex="1">
        </div>

      </div>
      <div class="col">
        <div class=" mb-3">
          <label for="" class="form-label">No.Identificación</label>
          <input id="identificacion" name="identificacion" type="text" class="form-control" tabindex="1">
        </div>

      </div>

    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Primer Nombre</label>
      <input id="primernombre" name="primernombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Segundo Nombre</label>
      <input id="segundonombre" name="segundonombre" type="text" class="form-control" tabindex="1">
    </div>


    <div class=" mb-3">
      <label for="" class="form-label">Primer Apellido</label>
      <input id="primerapellido" name="primerapellido" type="text" class="form-control" tabindex="1">
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Segundo Apellido</label>
      <input id="segundoapellido" name="segundoapellido" type="text" class="form-control" tabindex="1">
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Razón Social</label>
      <input id="razonsocial" name="razonsocial" type="text" class="form-control" tabindex="1">
    </div>

  </div>
  <div class="col p-3 ">

    <div class=" mb-3">
      <label for="" class="form-label">Dirección</label>
      <input id="direccion" name="direccion" type="text" class="form-control" tabindex="1">
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Telefonos</label>
      <input id="Telefonos" name="Telefonos" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">correo</label>
      <input id="correo" name="correo" type="email" class="form-control" tabindex="2">
    </div>


    <div class="mb-3">
      <label for="" class="form-label">Procesos</label>
      <input id="maximoprocesos" name="maximoprocesos" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Tarjeta</label>
      <input id="tarjeta" name="tarjeta" type="text" class="form-control" tabindex="4">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Observaciones</label>
      <input id="observaciones" name="observaciones" type="text" class="form-control" tabindex="3">
    </div>



  </div>
  </div>
  <a href="/abogados" class="btn btn-primary" tabindex=5>Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop