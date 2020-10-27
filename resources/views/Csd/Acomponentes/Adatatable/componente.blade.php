<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crear')
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}">
                {{ $todoxxxx['titunuev'] }}
            </a>
            @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
        <div class="table-responsive">
            <table id="{{ $tableName }}" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    @foreach( $todoxxxx['cabecera'] as $cabecera )
                    <tr class="text-center">
                        @foreach( $cabecera as $cabecerx)
                        <th width="{{$cabecerx['widthxxx']}}" rowspan="{{$cabecerx['rowspanx']}}" colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']   }}</th>
                        @endforeach
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
        @endcanany
        
    </div>
    <div class="form-row align-items-end">
        <div class="form-group col-md-12">
            {{ Form::label('observaciones', '7.31 Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'observaciones de la visita social en domicilio', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}       
            </div>
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['observar']}}" href="{{ route($todoxxxx['routxxxx'].'.observaciones.nuevo',$todoxxxx['parametr']) }}">
                {{ $todoxxxx['observar'] }}
            </a>
    </div>
</div>
