@extends('layouts.index')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        FICHA DE INGRESO
                    </div>
                    <div class="card-header p-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active text-sm" href="http://127.0.0.1:8000/fi">NNAJ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="fidatbas">
                                <form method="get" id="agregarx" target="_blank" action="http://127.0.0.1:8000/fi/agregar"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="1a01ZSCL5B59jzNAHE7hrY0OKVSVElZAAtpoq7s9">
                                    <input type="hidden" id="docuagre" name="docuagre">
                                </form>
                            </div>
                            <div class="card card-outline card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        LISTA DE FAMILIARES A BENEFICIAR
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <th scope="col" width="180">ACCIONES</th>

                                                <th scope="col">DOCUMENTO</th>
                                                <th scope="col">PRIMER NOMBRE</th>
                                                <th scope="col">SEGUNDO NOMBRE</th>
                                                <th scope="col">PRIMER APELLIDO</th>
                                                <th scope="col">SEGUNDO APELLIDO</th>
                                                <th scope="col">ESTADO</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($resultado as $resulfam)
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm"
                                                                href="{{ route('fi.familiar.agregar', ['id' => $resulfam->id]) }} ">
                                                                SELECCIONE
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {{ $resulfam->s_documento }}
                                                        </td>
                                                        <td>
                                                            {{ $resulfam->s_primer_nombre }}
                                                        </td>
                                                        <td>
                                                            {{ $resulfam->s_segundo_nombre }}
                                                        </td>
                                                        <td>
                                                            {{ $resulfam->s_primer_apellido }}
                                                        </td>
                                                        <td>
                                                            {{ $resulfam->s_segundo_apellido }}
                                                        </td>
                                                        <td>
                                                            {{ $resulfam->s_estado }}
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- nombre que se le data en pestanias de la carpeta Acrud -->
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
