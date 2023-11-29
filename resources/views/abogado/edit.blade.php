@extends('adminlte::page')

@section('title', 'TitleEditar')

@section('content_header')
    <h1>ConentHeader h1</h1>
@stop

@section('content')
    <form action="/abogados/{{$abogado->id}}" method="post" ">
      @csrf
      @method('put')

      <div class="row" >
      
        <div class="col">
          <div class="mb-3">
            <label for="" class="form-label">Tipo Documento</label>
            <select  id="tipoidentificacion_id" name="tipoidentificacion_id" class="form-control buscador">
              <div class="container">
              <option  value=""> -- Seleccione T. Documento -- </option>
            </div>
              @foreach($tipoidentificaciones as $tipoidentificacion)
  
                <option value="{{ $tipoidentificacion['id'] }}"  
                     @if($abogado->terceros->tipoidentificacion_id  ==  $tipoidentificacion['id'] ) selected  @endif   
                    >
                  {{ $tipoidentificacion['descripcion'] }}
  
              </option>
              @endforeach
            </select>
            {{-- <input id="tipoidentificacion_id" name="tipoidentificacion_id" type="text" class="form-control"
              tabindex="1"> --}}
          </div>
  
        </div>
        <div class="col">
          {{$abogado->terceros->tipoidentificacion_id}} 
        </div>
        
      </div>






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

 @stop

@section('css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
      $(document).ready(function() {
        $('.buscador').select2();
        
        
    });
    </script>
@stop