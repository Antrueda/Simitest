
<div class="card card-outline card-secondary">
    <style>
       .selected{
        background-color: coral;
       }
    </style>
    <div class="card-header">
        <h3 class="card-title">
            @if (isset($todoxxxx['titulist']))
                {{ $todoxxxx['titulist'] }}
            @else
            Datos  
            @endif
            @if(!isset($todoxxxx['vercrear']))
                @can($todoxxxx['permisox'].'-crear')
                    <a class="btn btn-sm btn-primary ml-2" title="{{ isset($todoxxxx['titunuev'])?$todoxxxx['titunuev']:'Nuevo' }}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}">
                        @if (isset($todoxxxx['titunuev']))
                        {{ $todoxxxx['titunuev'] }}
                        @else
                          Nuevo  
                        @endif 
                    </a>
                @endcan
            @endif
        </h3>
    </div>
    <div class="card-body">
    <div class="form-group row">  
  <div class="form-group col-md-12">
    <h1 style="text-align: center">{{ $todoxxxx["modeloxx"]->in_base_fuente->sis_documento_fuente->nombre }}</h1> 
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sis_tabla_id', 'Tabla', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_tabla_id', $todoxxxx["tablaxxx"], null, ['class' => 'form-control form-control-sm',
     $todoxxxx["readonly"],'id'=>'sis_tabla_id']) }}
  </div> 
  <div class="form-group col-md-6">
    {{ Form::label('sis_campo_id', 'Campo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_campo_id', $todoxxxx["campoxxx"], null, ['class' => 'form-control form-control-sm',
     $todoxxxx["readonly"],'id'=>'sis_campo_id']) }}
  </div>
  <div class="form-group col-md-12">
     {{ Form::label('in_pregunta_id', 'Preguntas', ['class' => 'control-label col-form-label-sm']) }}
     {{ Form::text('pregunta_select', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,
    'placeholder' => 'pregunta del documento', 'maxlength' => '120', 'autofocus','id'=>'pregunta_select']) }}
    
  </div> 
</div>
        @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
            <div class="table-responsive">
                <table id="{{ $tableName }}" class="table table-bordered   table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width="150">Acciones</th>
                            @foreach( $todoxxxx['cabecera'] as $cabecera )
                            
                        <th> {{  $cabecera['td']   }}</th>
                            @endforeach
                        </tr>
                    </thead>
                </table>
            </div>
        @endcanany
    </div>
</div>
@section('codigo')
@include('Indicadores.Admin.DocIndicador.tablajquery.js')
@endsection