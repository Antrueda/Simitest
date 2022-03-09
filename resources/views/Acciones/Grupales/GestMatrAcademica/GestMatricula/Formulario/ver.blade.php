@include($todoxxxx['rutacarp'].'GestMatricula.Formulario.infomatricula')
<div class="card">
    <div class="card-header bg-secondary text-white">
        ESTADO MATRICULA
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::label('fechdili', 'FECHA DE DILIGENCIAMIENTO:', ['class' => 'control-label']) !!}
                <div class="form-control form-control-sm">
                    {{$todoxxxx['modeloxx']->fechdili}}
                </div>
            </div>
            <div class="form-group col-md-6" {{$errors->first('prm_estado_matri') ? 'has-error' : ''}}">
                {!! Form::label('prm_estado_matri', 'ESTADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_estado_matri', $todoxxxx['prm_estado_matris'], null, ['class' => 'form-control form-control-sm select2','required','disabled']) !!}
            </div>
            <div id="prm_motivo_field" class="d-none form-group col-md-6 {{$errors->first('prm_motivo_reti') ? 'has-error' : ''}}">
                {!! Form::label('prm_motivo_reti', 'MOTIVOS DE RETIRO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_motivo_reti',$todoxxxx['motivoxx'],null, ['class' => 'form-control form-control-sm select2', 'required','disabled']) !!}
            </div>
            <div id="prm_aplazado_field" class="d-none form-group col-md-6 {{$errors->first('prm_mot_aplazad') ? 'has-error' : ''}}">
                {!! Form::label('prm_mot_aplazad', 'MOTIVO DE APLAZADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_mot_aplazad',$todoxxxx['motaplaz'],null, ['class' => 'form-control form-control-sm select2', 'required','disabled']) !!}
            </div>
            
            <div class="col-md-12">
                {{ Form::label('descripcion', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
                <div class="form-control form-control-sm">
                    {{$todoxxxx['modeloxx']->descripcion}}
                </div>
            </div>

            @include($todoxxxx['rutacarp'].'GestMatricula.Formulario.dataregistro')
        </div>
    </div>
</div>