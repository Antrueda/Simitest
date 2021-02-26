<div class="row">
    <div class="col-md-6">
        {{ Form::label('prm_razon_id', '1.11 Razones o problemas por las que el NNAJ se vincula al IDIPRON', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_razon_id', $todoxxxx['razonesx'], null, ['class' => $errors->first('prm_razon_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_razon_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_razon_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('personas', '1.12 ¿Qué persona(s) parecen producir o empeorar estas dificultades?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('personas[]', $todoxxxx['personas'], null, ['class' => $errors->first('personas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'personas', 'multiple']) }}
        @if($errors->has('personas'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('personas') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label(null, '1.13 ¿Hace cuánto tiempo se presenta esta situación?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('dia', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('dia'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('dia') }}
                </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('mes', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('mes'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('mes') }}
                </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('ano', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('ano'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('ano') }}
                </div>
                @endif
            </div>
        </div>
    </div>


    <div class="col-md-6">
        {{ Form::label('situaciones', '1.14 ¿Qué situaciones, condiciones o actividades parecen producir o empeorar estas dificultades?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('situaciones[]', $todoxxxx['situacio'], null, ['class' => $errors->first('situaciones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'situaciones', 'multiple']) }}
        @if($errors->has('situaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('situaciones') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('emociones', '1.15 ¿Qué emociones le generan estas dificultades?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('emociones[]', $todoxxxx['emosione'], null, ['class' => $errors->first('emociones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'emociones', 'multiple']) }}
        @if($errors->has('emociones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('emociones') }}
        </div>
        @endif
    </div>




</div>

<div class="row">
    @include('layouts.registro')
</div>
