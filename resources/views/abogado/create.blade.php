@extends('adminlte::page')

@section('title', 'Title create')

@section('content_header')
    <h1>ContenHeader h1</h1>
@stop

@section('content')

<form action="/abogados" method="post" ">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Tecero</label>
    <input  id="tercero_id" name="tercero_id" type="text" class="form-control" tabindex="1">
  </div>  
    
  <div class="mb-3">
    <label for="" class="form-label">Procesos</label>
    <input  id="maximoprocesos" name="maximoprocesos" type="text" class="form-control" tabindex="2">
  </div>  
    
  <div class="mb-3">
    <label for="" class="form-label">Tarjeta</label>
    <input  id="tarjeta" name="tarjeta" type="text" class="form-control" tabindex="4">
  </div>  
    
  <div class="mb-3">
    <label for="" class="form-label">Observaciones</label>
    <input  id="observaciones" name="observaciones" type="text" class="form-control" tabindex="3">
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