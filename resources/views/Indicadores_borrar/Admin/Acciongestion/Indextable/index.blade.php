
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            @foreach ($todoxxxx['padrexxx'] as $padrexxx)
                <p>{{ $padrexxx}}</p>
            @endforeach
            
            
            @if(count($todoxxxx['parametr'])>0)
                @can($todoxxxx['permisox'].'-crear')
                    <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}">
                        Nuevo
                    </a>
                @endcan 
            @endif
            
        </h3>
    </div>
    <div class="card-body">
        @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
            <div class="table-responsive">
                <table id="{{ $tableName }}" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="150">Acciones</th>
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
<style>
  /* Tooltip */
  .test + .tooltip > .tooltip-inner {
    background-color: #73AD21;
    color: #FFFFFF;
    border: 1px solid green;
    padding: 15px;
    font-size: 20px;
  }
  /* Tooltip on top */
  .test + .tooltip.top > .tooltip-arrow {
    border-top: 5px solid green;
  }
  /* Tooltip on bottom */
  .test + .tooltip.bottom > .tooltip-arrow {
    border-bottom: 5px solid blue;
  }
  /* Tooltip on left */
  .test + .tooltip.left > .tooltip-arrow {
    border-left: 5px solid red;
  }
  /* Tooltip on right */
  .test + .tooltip.right > .tooltip-arrow {
    border-right: 5px solid black;
  }
  </style>
@section('codigo')
@include('Indicadores.Admin.Acciongestion.Indextable.js')
@endsection
