<meta name="_token" content="{{csrf_token()}}" />
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crear')
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}" data-toggle="modal" data-target="#myModal">
                {{ $todoxxxx['titunuev'] }}
            </a>
            @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">
        @canany($todoxxxx['permtabl'])
        <div class="table-responsive">
            <table id="{{ $tableName }}" class="table table-bordered   table-sm">
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
</div>
<form method="post" action="{{url('chempionleague')}}" id="form">
    @csrf
<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
            
          <h5 class="modal-title">Agregar Diagnostico</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="form-group col-md-4">
                {{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('diag_id', $todoxxxx['cursosxx'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-md is-invalid' : 'form-control select2 form-control-md','id' =>'diag_id' ]) }}
                @if($errors->has('diag_id'))
                <div class="invalid-feedback d-block">
                  {{ $errors->first('diag_id') }}
                </div>
             @endif
            </div>
    
                <div class="form-group col-md-4">
                    {{ Form::label('codigo', 'Codigo', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('codigo', null, ['class' => $errors->first('codigo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' =>'codigo' ]) }}
                    @if($errors->has('codigo'))
                    <div class="invalid-feedback d-block">
                      {{ $errors->first('codigo') }}
                    </div>
                 @endif
                </div>
            </div>
            <div class="row">
               <div class="form-group col-md-4">
                {{ Form::label('esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('esta_id', $todoxxxx['estadoxx'],null, ['class' => $errors->first('esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' =>'esta_id' ]) }}
                @if($errors->has('esta_id'))
                <div class="invalid-feedback d-block">
                  {{ $errors->first('esta_id') }}
                </div>
             @endif
                </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                {{ Form::label('concepto', 'Conducta y Evolución', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('concepto',null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id' =>'concepto', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','autocomplete'=>"off"]) }}
                <p id="contadorconcepto">0/4000</p>
                @if($errors->has('concepto'))
                  <div class="invalid-feedback d-block">
                    {{ $errors->first('concepto') }}4
                  </div>
               @endif
              </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button  class="btn btn-success" id="ajaxSubmit">Guardar</button>
          </div>
      </div>
    </div>
  </div>
</form>