@extends('adminlte::page')

@section('title', 'El Title')

@section('content_header')
    <h1>El ContentHeader</h1>
@stop

@section('content')
    <a href="abogados/create" class="btn btn-primary mb-3">CREAR ABOGADO</a>

    <table id="abogados" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

        <thead class="bg-prymary text-white" >
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready( function () {
                $('#abogados').DataTable({
                    "lengthMenu": [[5,10,50,-1],[5,10,50,"Todos"]]
    
                });
            } );
        </script>
@stop