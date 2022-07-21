@include($todoxxxx['rutacarp'].'GestMatricula.Formulario.infomatricula')
<div class="card">
    <div class="card-header bg-secondary text-white">
        ESTADO MATRÍCULA
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::label('fechdili', 'FECHA DE DILIGENCIAMIENTO:', ['class' => 'control-label']) !!}
                {!! Form::date('fechdili',null, ['class' => 'form-control form-control-sm', 'required',]) !!}
                @if($errors->has('fechdili'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('fechdili') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6" {{$errors->first('prm_estado_matri') ? 'has-error' : ''}}">
                {!! Form::label('prm_estado_matri', 'ESTADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_estado_matri', $todoxxxx['prm_estado_matris'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
                @if($errors->has('prm_estado_matri'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_estado_matri') }}
                </div>
                @endif
            </div>
            <div id="prm_motivo_field" class="d-none form-group col-md-6 {{$errors->first('prm_motivo_reti') ? 'has-error' : ''}}">
                {!! Form::label('prm_motivo_reti', 'MOTIVOS DE RETIRO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_motivo_reti',$todoxxxx['motivoxx'],null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_motivo_reti'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_motivo_reti') }}
                </div>
                @endif
            </div>
            <div id="prm_aplazado_field" class="d-none form-group col-md-6 {{$errors->first('prm_mot_aplazad') ? 'has-error' : ''}}">
                {!! Form::label('prm_mot_aplazad', 'MOTIVO DE APLAZADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_mot_aplazad',$todoxxxx['motaplaz'],null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_mot_aplazad'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_mot_aplazad') }}
                </div>
                @endif
            </div>
            
            <div class="col-md-12">
                {{ Form::label('descripcion', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'OBSERVACIONES', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
                <p id="contador_descripcion">0/4000</p>
                @if($errors->has('descripcion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('senias') }}
                </div>
                @endif
            </div>

            @include($todoxxxx['rutacarp'].'GestMatricula.Formulario.dataregistro')
        </div>
    </div>
</div>