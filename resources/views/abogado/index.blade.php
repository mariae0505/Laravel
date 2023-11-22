@extends('adminlte::page')

@section('title', 'El Title')

@section('content_header')
<style>
    .trash-icono svg {
        color: rgb(248, 14, 14) !important;
    }

    .pencil-icono svg {
        color: rgb(7, 7, 248) !important;
    }

    .content-wrapper {
        background-color: rgba(255, 255, 255, .8);
    }
</style>
<h1>El ContentHeader</h1>
@stop

@section('content')
<a href="abogados/create" class="btn btn-primary mb-3">CREAR ABOGADO</a>

<table id="abogados" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

    <thead class="bg-primary text-white ">
        <tr>
            <th>ID</th>
            <th>ID TERCERO</th>
            <th>MAXIMOPROCEOS</th>
            <th>tarjeta</th>
            <th>OBSERVACION</th>
            <th class="text-center"> Opciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($abogados as $abogado)
        <tr>
            <td>{{$abogado->id}} </td>
            <td>{{$abogado->terceros->primernombre}} {{$abogado->terceros->primerapellido}}</td>
            <td>{{$abogado->maximoprocesos}}</td>
            <td>{{$abogado->tarjeta}}</td>
            <td>{{$abogado->observaciones}}</td>
            <td class="text-center">
                <form action="{{ route ('abogados.destroy',$abogado->id)}}" method="POST">
                       
                            <a href="/abogados/{{$abogado->id}}/edit" class="btn btn-light btn-small">
                                <div class="pencil-icono">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </div>

                            </a>
                        
                    
                    @csrf
                    @method('DELETE')
                            <button type="submit" class="btn btn-light">
                                <div class="trash-icono">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>

                                </div>
                            </button>
                        
                    
                </form>
            </td>
        </tr>
        @endforeach
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="public/css/estilos.css">
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