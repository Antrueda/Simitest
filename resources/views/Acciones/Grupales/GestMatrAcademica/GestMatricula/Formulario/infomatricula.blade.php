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