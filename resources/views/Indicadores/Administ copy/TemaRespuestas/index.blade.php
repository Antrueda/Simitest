@extends('layouts.index')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h1>
                ÁREA: {{ $area->nombre }}
            </h1>
        </div>
        <div class="card-header p-2">
            @include('indicadores.admin.inligrutemacombo.menu')
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            PREGUNTA: {{$pregunta->nombre}}
                        </h1>
                        <div class="row px-2 py-1">
                            @if (session()->has('message'))
                            <div class="alert alert-success col-12" role="alert">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-header p-2">
                        @include('indicadores.admin.temarespuestas.tabs')
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="respuesta">
                                <div class="card card-outline card-secondary">
                                    <style>
                                        .selected {
                                            background-color: coral;
                                        }
                                    </style>

                                    <div class="row px-2 py-1">
                                        @if (session()->has('message'))
                                        <div class="alert alert-success col-12" role="alert">
                                            {{ session('message') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            LISTA DE RESPUESTAS ASIGNADAS
                                            <a class="btn btn-sm btn-primary ml-2 mr-2" title="ASIGNACION RESPUESTA"
                                                href="{{ route('temarespuesta.nuevo', ['padrexxx'=>$respuesta]) }}">
                                                ASIGNAR RESPUESTA
                                            </a>
                                            <a href="{{ route('grupregu', ['padrexxx'=>$ligru_id]) }}"
                                                class="btn btn-sm btn-primary">VOLVER A PREGUNTAS</a>
                                        </h3>
                                    </div>
                                    <div class="card-body">

                                        @if (count($resultados)>0)
                                            
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <th scope="col" width="300">ACCIONES</th>
                                                    <th scope="col" width="100">ID</th>
                                                    <th scope="col">RESPUESTAS</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($resultados as $index => $resultado)                                                    
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-sm btn-primary mr-1"
                                                                href="{{ route('temarespuesta.ver', ['objetoxx'=>$resultado->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Ver a {{$resultado->parametro->nombreid}}">VER
                                                            </a>
                                                            <a class="btn btn-sm btn-primary mr-1"
                                                                href="{{ route('temarespuesta.editar', ['objetoxx'=>$resultado->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Ver a ">EDITAR
                                                            </a>
                                                        </td>
                                                        <td width="50">
                                                            {{$resultado->id }}
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="{{ route('temarespuesta.ver', ['objetoxx'=>$resultado->id]) }}">
                                                                {{$resultado->parametro->nombre }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        @else
                                            <h1>Sin Resultados</h1>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            autoFill: true,
            language: {
                //adminlte/plugins/datatables/Spanish.lang
                url: '/adminlte/plugins/datatables/Spanish.lang'
            }
        });
    });

</script>
@endsection