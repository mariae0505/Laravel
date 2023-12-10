@extends('adminlte::page')

@section('title', 'Title create')

@section('content_header')

<h1>Creación de Abogados </h1>

@stop
@section('content')

<form action="/abogados" method="post" ">
  @csrf
  <div class=" row">

  <div class="col p-3 ">

    <div class="row">

      <div class="col">
        <div class=" mb-3">
          <label for="" class="form-label">Tipo Documento</label>
          <select id="tipoidentificacion_id" name="tipoidentificacion_id" value="{{old('tipoidentificacion_id')}}"
            class="form-control @error('tipoidentificacion_id') is-invalid @enderror buscador">
            <option value=""> -- Seleccione tipo -- </option>
            @foreach($tipoidentificaciones as $tipoidentificacion)

            <option value="{{ $tipoidentificacion['id'] }}">{{ $tipoidentificacion['descripcion'] }}

            </option>
            @endforeach
          </select>

          @error('tipoidentificacion_id')
          <span class="invalid-feedback">
            <strong>
              {{ $message }}
            </strong>
          </span>

          @enderror

        </div>

      </div>
      <div class="col">
      </div>

    </div>
    <div class=" mb-3">
      <label for="" class="form-label">Nro.Identificación</label>
      <input id="identificacion" name="identificacion" type="text" value="{{old('identificacion')}}"
        class="form-control @error('identificacion') is-invalid @enderror ">
      @error('identificacion')
      <span class="invalid-feedback">
        <strong>
          {{ $message }}
        </strong>
      </span>

      @enderror
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Primer Nombre</label>
      <input id="primernombre" name="primernombre" type="text"  value="{{old('primernombre')}}"
        class="form-control  @error('primernombre') is-invalid @enderror">
      @error('primernombre')
      <span class="invalid-feedback">
        <strong>
          {{ $message }}
        </strong>
      </span>

      @enderror
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Segundo Nombre</label>
      <input id="segundonombre" name="segundonombre" type="text" value="{{old('segundonombre')}}" class="form-control"  >
    </div>


    <div class=" mb-3">
      <label for="" class="form-label">Primer Apellido</label>
      <input id="primerapellido" name="primerapellido" type="text" value="{{old('primerapellido')}}"
        class="form-control @error('primerapellido') is-invalid @enderror">
      @error('primerapellido')
      <span class="invalid-feedback">
        <strong>
          {{ $message }}
        </strong>
      </span>

      @enderror
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Segundo Apellido</label>
      <input id="segundoapellido" name="segundoapellido" type="text" value="{{old('segundoapellido')}}" 
       class="form-control" tabindex="1">
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Razón Social</label>
      <input id="razonsocial" name="razonsocial" type="text"  value="{{old('razonsocial')}}" 
      class="form-control" tabindex="1">
    </div>

  </div>


  <div class="col p-3 ">
    <div class="row">
      <div class="col">
        <div class=" mb-3">
          <label for="" class="form-label">Naturaleza</label>
          <select id="naturaleza" name="naturaleza" value="{{old('naturaleza')}}" 
            class="form-control @error('naturaleza') is-invalid @enderror buscador">
            <option value=""> -- Seleccione tipo -- </option>
            @foreach($naturalezas as $natu)

            <option value="{{ $natu['naturaleza'] }}">{{ $natu['descripcion'] }}

            </option>
            @endforeach
          </select>

          @error('naturaleza')
            <span class="invalid-feedback">
              <strong>
                {{ $message }}
              </strong>
            </span>

          @enderror
        </div>

      </div>
      <div class="col">
      </div>
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Dirección</label>
      <input id="direccion" name="direccion" type="text" value="{{old('direccion')}}" 
      class="form-control @error('direccion') is-invalid @enderror ">
      @error('direccion')
      <span class="invalid-feedback">
        <strong>
          {{ $message }}
        </strong>
      </span>

    @enderror
    </div>

    <div class=" mb-3">
      <label for="" class="form-label">Telefonos</label>
      <input id="telefonos" name="telefonos" type="text" value="{{old('telefonos')}}" 
      class="form-control @error('telefonos') is-invalid @enderror " >
      @error('telefonos')
      <span class="invalid-feedback">
        <strong>
          {{ $message }}
        </strong>
      </span>

    @enderror
    </div>

    <div class="mb-3">
      <label for="" class="form-label">correo</label>
      <input id="correo" name="correo" type="email" value="{{old('correo')}}" 
      class="form-control @error('correo') is-invalid @enderror ">
      @error('correo')
      <span class="invalid-feedback">
        <strong>
          {{ $message }}
        </strong>
      </span>

    @enderror
    </div>


    <div class="mb-3">
      <label for="" class="form-label">Procesos</label>
      <input id="maximoprocesos" name="maximoprocesos" type="text" value="{{old('maximoprocesos')}}" 
      class="form-control @error('maximoprocesos') is-invalid @enderror" >
      @error('maximoprocesos')
        <span class="invalid-feedback">
          <strong>
            {{ $message }}
          </strong>
        </span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Tarjeta</label>
      <input id="tarjeta" name="tarjeta" type="text" value="{{old('tarjeta')}}" 
      class="form-control @error('tarjeta') is-invalid @enderror">
      @error('tarjeta')
        <span class="invalid-feedback">
          <strong>
            {{ $message }}
          </strong>
        </span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Observaciones</label>
      <input id="observaciones" name="observaciones" type="text" value="{{old('observaciones')}}" 
      class="form-control" tabindex="3">
    </div>

  </div>
  </div>

  <div class="row">
    <div class="col p-3 ">


    </div>
    <div class="col p-3 ">
      <a href="/abogados" class="btn btn-primary" tabindex=5>Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>

@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<link rel="stylesheet" href="/css/admin_custom.css">
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