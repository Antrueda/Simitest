@extends('layouts.index')

@section('content')
    <div class="content-header">
        <h1>GESTIÓN DE AYUDA</h1>
        <hr>
    </div>
    <div class="row px-2 py-1">
        @if (session()->has('message'))
            <div class="alert alert-success col-12" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="card card-outline card-secondary">
        <div class="card-header">
            @can('ayuda-crear')
                <h3 class="card-title">
                    @can('ayuda-crear')
                        <a href="{{ route('ayuda.create') }}" class="btn btn-primary" data-toggle="tooltip"
                            data-placement="bottom" title="Crear una nueva pagina de ayuda">
                            Crear Ayuda
                        </a>
                    @endcan
                </h3>
            @endcan
        </div>
        <div class="card-body">
            @if (count($resultado) > 0)
                @can('ayuda-leer')
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <th scope="col" width="150">ACCIONES</th>
                                <th scope="col">Titulo</th>
                            </thead>
                            <tbody>
                                @foreach ($resultado as $result)
                                    <tr>
                                        <td width="50">
                                            @can('ayuda-editar')
                                                <a class="btn btn btn-warning" href="{{ route('ayuda.edit', $result) }}"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="Editar a {{ $result->titulo }}">
EDITAR
                                                </a>
                                            @endcan
                                            @can('ayuda-cambiar')
                                                <a class="btn btn {{ $result->status ? 'btn-primary' : 'btn-secondary' }}"
                                                    style="display: inline-block" data-toggle="tooltip" data-placement="bottom"
                                                    title="Cambiar {{ $result->titulo }} de estado Visible/No Visible"
                                                    href="{{ route('ayuda.change', $result->id) }}">
CAMBIAR
                                                </a>
                                            @endcan                                            
                                        </td>
                                        <td>{{ $result->titulo }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endcan
            @else
                <p>No hay datos</p>
            @endif
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
