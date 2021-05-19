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
                        @include('indicadores.admin.inligrutemacombo.tabs')
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="linegrup">
                                <div class="card card-outline card-secondary">
                                    <style>
                                        .selected {
                                            background-color: coral;
                                        }
                                    </style>
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            LISTA DE PREGUNTAS ASIGNADAS
                                            <a class="btn btn-sm btn-primary ml-2" title="ASIGNACION PREGUNTA"
                                                href="{{ route('grupregu.nuevo', ['padrexxx'=>$lineagru->id]) }}">
                                                CREAR ASIGNACION PREGUNTA
                                            </a>
                                        </h3>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <th scope="col" width="300">ACCIONES</th>
                                                    <th scope="col" width="100">ID</th>
                                                    <th scope="col">PREGUNTAS</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($resultados as $index => $resultado)
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-sm btn-primary mr-1"
                                                                href="{{ route('grupregu.ver', ['objetoxx'=>$resultado->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Ver a {{$resultado->temacombo->nombre }}">VER
                                                            </a>
                                                            <a class="btn btn-sm btn-primary mr-1"
                                                                href="{{ route('grupregu.editar', ['objetoxx'=>$resultado->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Ver a {{$resultado->temacombo->nombre }}">EDITAR
                                                            </a>
                                                            <a class="btn btn-sm btn-primary mr-1"
                                                                href="{{ route('temarespuesta', ['padrexxx'=>$resultado->id]) }}"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                title="Ver a {{$resultado->temacombo->nombre }}">ASIGNAR
                                                                RESP.
                                                            </a>
                                                        </td>
                                                        <td width="50">
                                                            {{$resultado->id }}
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="{{ route('grupregu.ver', ['objetoxx'=>$resultado->id]) }}">
                                                                {{$resultado->temacombo->nombre }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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