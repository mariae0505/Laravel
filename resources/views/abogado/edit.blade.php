@extends('layouts.plantillabase')

@section('contenidohijos')
<div class="container">
<h2>EDITAR REGISTROS </h2>

<form action="/abogados/{{$abogado->id}}" method="post" ">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="" class="form-label">Tecero</label>
      <input  id="tercero_id" name="tercero_id" type="text" class="form-control" value="{{$abogado->tercero_id}}" >
    </div>  
      
    <div class="mb-3">
      <label for="" class="form-label">Procesos</label>
      <input  id="maximoprocesos" name="maximoprocesos" type="text" class="form-control" value="{{$abogado->maximoprocesos}}">
    </div>  
      
    <div class="mb-3">
      <label for="" class="form-label">Tarjeta</label>
      <input  id="tarjeta" name="tarjeta" type="text" class="form-control" value="{{$abogado->tarjeta}}" >
    </div>  
      
    <div class="mb-3">
      <label for="" class="form-label">Observaciones</label>
      <input  id="observaciones" name="observaciones" type="text" class="form-control" value="{{$abogado->observaciones}}">
    </div>  
      
     <a href="/abogados" class="btn btn-primary" tabindex=5>Cancelar</a> 
    <button type="submit" class="btn btn-primary">Guardar</button>

  </form>


@endsection
</div>
