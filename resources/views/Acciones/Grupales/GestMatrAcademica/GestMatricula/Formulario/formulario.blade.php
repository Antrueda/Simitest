<div class="card">
    <div class="card-header bg-secondary text-white">
        MATRICULA
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-12 m-0">
                {!! Form::label('', 'Persona:', ['class' => 'control-label']) !!}
            </div>
            <div class="form-group col-md-6">
                <div class="form-control form-control-sm">
                    <strong>            
                        {{$todoxxxx['datapadre']->s_primer_nombre}} {{$todoxxxx['datapadre']->s_segundo_nombre}} {{$todoxxxx['datapadre']->s_primer_apellido}} {{$todoxxxx['datapadre']->s_segundo_apellido}}
                    </strong>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-control form-control-sm">
                    {{$todoxxxx['datapadre']->s_documento}}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="forn-group col-md-6">
                {!! Form::label('', 'GRUPO:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->s_grupo}}
                </div>

                {!! Form::label('', 'GRADO:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->s_grado}}
                </div>

                {!! Form::label('', 'ESTRATEGIA:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->estrategia}}
                </div>

                {!! Form::label('', 'UPI:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->upi}}
                </div>
            </div>
            <div class="forn-group col-md-6">
                {!! Form::label('', 'FECHA MATRICULA:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->fecha}}
                </div>

                {!! Form::label('', 'PERIODO ACADÉMICO:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->periodo}}
                </div>

                {!! Form::label('', 'NUMERO DE MATRICULA:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->s_servicio}}
                </div>

                {!! Form::label('', 'NUMERO DE MATRICULA:', ['class' => 'control-labl']) !!}
                <div class="form-control form-control-sm bg-light">           
                        {{$todoxxxx['datapadre']->numeromatricula}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-secondary text-white">
        ESTADO MATRICULA
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::label('fechdili', 'FECHA DE DILIGENCIAMIENTO:', ['class' => 'control-label']) !!}
                {!! Form::date('fechdili',null, ['class' => 'form-control form-control-sm', 'required']) !!}
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
                {!! Form::select('prm_motivo_reti',[],null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_motivo_reti'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_motivo_reti') }}
                </div>
                @endif
            </div>
            <div id="prm_aplazado_field" class="d-none form-group col-md-6 {{$errors->first('prm_mot_aplazad') ? 'has-error' : ''}}">
                {!! Form::label('prm_mot_aplazad', 'MOTIVO DE APLAZADO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_mot_aplazad',[],null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_mot_aplazad'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_mot_aplazad') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>