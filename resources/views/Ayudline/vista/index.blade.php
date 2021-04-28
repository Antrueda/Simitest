@extends('layouts.index')

@section('content')
<div class="content-header">
    <h1>AYUDA</h1>
    <hr>
</div>
<div class="card card-outline card-secondary">
    <div class="card-body">
        @if (count($resultados) > 0)
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <th scope="col" width="150">ACCIONES</th>
                            <th scope="col">Titulo</th>
                        </thead>
                        <tbody>
                            @foreach ($resultados as $resultado)
                                <tr>
                                    <td width="50">
                                            <a class="btn btn btn-primary" href="{{route('ayuda.vista.slug', ['slug'=>$resultado->slug])}}"
                                                data-toggle="tooltip" data-placement="bottom"
                                                title="Ver a {{ $resultado->titulo }}">
VER                                            </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('ayuda.vista.slug', ['slug'=>$resultado->slug]) }}">{{ $resultado->titulo }}</a>
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
