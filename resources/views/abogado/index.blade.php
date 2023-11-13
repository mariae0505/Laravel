@extends('layouts.plantillabase')

@section('contenidohijos')

<div class="container">
<h1> vista de index contenidohijossss</h1>
<a href="abogados/create" class="btn btn-primary">CREAR ABOGADO</a>

<table class="table table-center table-dark table-striped mt-4">

    <thead>
        <tr>
            <th>ID</th>
            <th>ID TERCERO</th>
            <th>MAXIMOPROCEOS</th>
            <th>tarjeta</th>
            <th>OBSERVACION</th>
            <th> Opciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($abogados as $abogado)
        <tr>
            <td>{{$abogado->id}} </td>
            <td>{{$abogado->tercero_id}}</td>
            <td>{{$abogado->maximoprocesos}}</td>
            <td>{{$abogado->tarjeta}}</td>
            <td>{{$abogado->observaciones}}</td>
            <td> 
                <form action="{{ route ('abogados.destroy',$abogado->id)}}" method="POST">
                    
                    <a href="/abogados/{{$abogado->id}}/edit"  class="btn btn-info btn-small" >Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>

            
            

            

        </tr>
            
        @endforeach




</table>



@endsection
</div>