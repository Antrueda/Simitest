<div class="row">
    <div class="col-md-4">
        {{ Form::label('conve_id', 'Convenio/Entidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('conve_id', $todoxxxx['convenio'], null, ['class' => $errors->first('conve_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm']) }}
        @if ($errors->has('conve_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('conve_id') }}
            </div>
        @endif
    </div>



    <div class="col-md-4"> 
        {{ Form::label('sede_id', 'Sede/Centro', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sede_id', $todoxxxx['sedecent'], null, ['class' => $errors->first('sede_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if ($errors->has('sede_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sede_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('progra_id', 'Programa', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('progra_id', $todoxxxx['programa'], null, ['class' => $errors->first('progra_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la serivcio', 'id' => 'progra_id']) }}
        @if ($errors->has('progra_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('progra_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('tipop_id', 'Tipo de Programa', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('tipop_id', $todoxxxx['tipoprog'], null, ['class' => $errors->first('tipop_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la serivcio', 'id' => 'tipop_id']) }}
        @if ($errors->has('tipop_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('tipop_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('numficha', 'No. de ficha', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('numficha', null, ['class' => $errors->first('numficha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'numficha']) }}
        @if ($errors->has('numficha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('numficha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('modal_id', 'Modalidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('modal_id', $todoxxxx['modalida'], null, ['class' => $errors->first('modal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la UPI', 'id' => 'modal_id']) }}
        @if ($errors->has('modal_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('modal_id') }}
            </div>
        @endif
    </div>

    <div class="col-md-12">
        {{ Form::label('user_id', 'Funcionario(A) Y/O Contratista Encargado Del Seguimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('user_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm']) }}
        @if ($errors->has('user_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('user_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
        @if ($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha_inicio', 'Fecha de inicio de Formación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha_inicio', null, ['class' => $errors->first('fecha_inicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
        @if ($errors->has('fecha_inicio'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha_inicio') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha_final', 'Fecha final de Formación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha_final', null, ['class' => $errors->first('fecha_final') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => $todoxxxx['hoyxxxxx']]) }}
        @if ($errors->has('fecha_final'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha_final') }}
            </div>
        @endif
    </div>
    <div class="col-md-4"> 
        {{ Form::label('upi_id', 'UPI/Área/Dependdencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if ($errors->has('upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('upi_id') }}
            </div>
        @endif
    </div>
</div>


<h6 class="mt-3">BENEFICIARIOS ASOCIADOS</h6>
@include($todoxxxx['rutacarp'] . 'Acomponentes.Acrud.index')


