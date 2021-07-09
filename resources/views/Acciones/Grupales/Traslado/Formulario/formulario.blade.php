
<div class="row">
        <div class="col-md-4">
            {{ Form::label('tipotras_id', 'Tipo de Remisión', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('tipotras_id', $todoxxxx['traslado'], null, ['class' => $errors->first('tipotras_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
            @if($errors->has('tipotras_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipotras_id') }}
                </div>
            @endif
        </div>
        <div class="col-md-4">
            {{ Form::label('remision_id', 'Tipo de Remisión', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('remision_id', $todoxxxx['traslado'], null, ['class' => $errors->first('remision_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
            @if($errors->has('remision_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('remision_id') }}
                </div>
            @endif
        </div>
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_upi_id', 'UPI que envía', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
      <div class="col-md-4">
        {{ Form::label('trasladototal', 'Total de NNAJ', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('trasladototal',  null, ['class' => $errors->first('trasladototal') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('trasladototal'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('trasladototal') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_trasupi_id', 'UPI que recibe', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_trasupi_id', $todoxxxx['depender'], null, ['class' => $errors->first('prm_trasupi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_trasupi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_trasupi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_serv_id', 'Servicio de Remisión', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_serv_id', $todoxxxx['servicio'], null, ['class' => $errors->first('prm_serv_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la serivcio', 'id'=>'prm_serv_id']) }}
        @if($errors->has('prm_serv_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_serv_id') }}
            </div>
        @endif
    </div>
</div>
    <br>
<div>
    <h6 class="mt-3">DATOS FUNCIONARIO Y/O CONTRATISTA RESPONSABLE</h6>
<br>

    <div class="row">
        <div class="col-md-2">
            {{ Form::label('s_documento', 'Documento', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::text('s_documento',  $todoxxxx['document'], ['class' => $errors->first('s_documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
            @if($errors->has('s_documento'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('s_documento') }}
                </div>
            @endif
        </div>
    

    
        <div class="col-md-4">
            {{ Form::label('responsable_id', 'Responsable registro en SIMI', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('responsable_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('responsable_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('responsable_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('responsable_id') }}
                </div>
            @endif
        </div>
 

    
        <div class="col-md-3">
            {{ Form::label('s_cargo', 'Cargo de Responsable', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::text('s_cargo',  $todoxxxx['cargoxxx'], ['class' => $errors->first('s_cargo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
            @if($errors->has('s_cargo'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('s_cargo') }}
                </div>
            @endif
        </div>
    </div>

</div>    
<h6 class="mt-3">BENEFICIARIOS ASOCIADOS</h6>
 @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')





