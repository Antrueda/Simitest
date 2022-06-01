
<div class="card p-1">
    <div class="col-md-12">
        {{ Form::label('ante_clinico', 'ANTECEDENTES CLÍNICOS:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('ante_clinico', null, ['class' => $errors->first('ante_clinico') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                            'placeholder' => 'Realice una breve descripción de antecedentes clínicos de importancia.',
                            'required', 
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true']) }}
        <p id="contador_ante_clinico">0/4000</p>
        @if($errors->has('ante_clinico'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ante_clinico') }}
        </div>
        @endif
    </div>
    <div class="card pt-2">
        <div class="col-md-12">
            {!! Form::label('prm_dinsustancias', 'DINÁMICAS DE CONSUMO DE SUSTANCIAS PSICOACTIVAS:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_dinsustancias', $todoxxxx['dinsustancias'], null, ['class' => 'form-control form-control-sm','required']) !!}
            @if($errors->has('prm_dinsustancias'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dinsustancias') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 pl-4">
            {{ Form::label('obs_clinico', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('obs_clinico', null, ['class' => $errors->first('obs_clinico') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                'placeholder' => 'Realice una breve descripción de antecedentes clínicos de importancia.',
                                'required', 
                                'maxlength' => '4000',
                                'rows'=>'7','spellcheck'=>'true']) }}
            <p id="contador_obs_clinico">0/4000</p>
            @if($errors->has('obs_clinico'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_clinico') }}
            </div>
            @endif
        </div>
    </div>
    <div class="card pt-2">
        <div class="col-md-12 mb-2">
            {!! Form::label('prm_alimentacion', 'ALIMENTACION:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_alimentacion', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
            @if($errors->has('prm_alimentacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_alimentacion') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 mb-2">
            {!! Form::label('prm_higienemayor', 'HIGIENE MAYOR:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_higienemayor', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
            @if($errors->has('prm_higienemayor'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_higienemayor') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 mb-2">
            {!! Form::label('prm_higienemenor', 'HIGIENE MENOR:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_higienemenor', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
            @if($errors->has('prm_higienemenor'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_higienemenor') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 pl-4">
            {{ Form::label('obs_higiene', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('obs_higiene', null,
                                ['class' => $errors->first('obs_higiene') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                'placeholder' => '',
                                'maxlength' => '4000',
                                'rows'=>'7',
                                'spellcheck'=>'true']) }}
            <p id="contador_obs_higiene">0/4000</p>
            @if($errors->has('obs_higiene'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_higiene') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        {!! Form::label('prm_vestido', 'VESTIDO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_vestido', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('prm_vestido'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_vestido') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {!! Form::label('prm_habitos', 'HÁBITOS Y RUTINAS:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_habitos', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('prm_habitos'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_habitos') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {!! Form::label('prm_activis', 'ACTIVIDADES INSTRUMENTALES:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_activis', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('prm_activis'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_activis') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {!! Form::label('prm_dominancia', 'DOMINANCIA MANUAL:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_dominancia', $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('prm_dominancia'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_dominancia') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('obs_general', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('obs_general', null, ['class' => $errors->first('obs_general') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
                            'placeholder' => 'Escribir observaciones de interés o datos relevantes dentro de la valoración.',
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true']) }}
        <p id="contador_obs_general">0/4000</p>
        @if($errors->has('obs_general'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('obs_general') }}
        </div>
        @endif
    </div>
    <div class="form-row">
        @include('layouts.registro')
    </div>
</div>

