
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Línea Base Validaciones
        </h3>
    </div>
    <div class="card-body">
        @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
            <div class="table-responsive">
                <table id="{{ $tableName }}" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="150">ACCIONES</th>
                            @foreach( $todoxxxx['cabecera'] as $cabecera )
                                <th>{{  $cabecera['td'] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                </table>
            </div>
        @endcanany
    </div>
</div>
@section('codigo')
@include('layouts.components.tablajquery.js')
@endsection