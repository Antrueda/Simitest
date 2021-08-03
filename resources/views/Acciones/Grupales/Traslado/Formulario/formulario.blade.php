
<div class="row">

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
            {{ Form::label('tipotras_id', 'Tipo de Traslado', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('tipotras_id', $todoxxxx['trasladx'], null, ['class' => $errors->first('tipotras_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
            @if($errors->has('tipotras_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipotras_id') }}
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
        {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'id'=>'prm_upi_id','data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('respone_id', 'Responsable UPI que envía', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('respone_id', $todoxxxx['response'], null, ['class' => $errors->first('respone_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id'=>'responsable']) }}
        @if($errors->has('respone_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('respone_id') }}
            </div>
        @endif
    </div>
      <div class="col-md-4">
        {{ Form::label('trasladototal', 'Total de NNAJ', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('trasladototal',  null, ['class' => $errors->first('trasladototal') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', "onkeypress" => "return soloNumeros(event);",'readonly']) }}
        @if($errors->has('trasladototal'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('trasladototal') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_trasupi_id', 'UPI, Dependencia y/o Área solicitante del traslado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_trasupi_id', $todoxxxx['depender'], null, ['class' => $errors->first('prm_trasupi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'id'=>'prm_trasupi_id','data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_trasupi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_trasupi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('responr_id', 'Responsable UPI que recibe', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('responr_id', $todoxxxx['responsr'], null, ['class' => $errors->first('responr_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id'=>'responsabler']) }}
        @if($errors->has('responr_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('responr_id') }}
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
            {{ Form::label('user_doc', 'Responsable registro en SIMI', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('user_doc', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('user_doc'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('user_doc') }}
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
<br>
<hr>

                <div class="row">
                    <div class="col-md-12">
                {{ Form::label('observaciones', 'Observación', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                    <p id="contadorobservaciones">0/4000</p>
                    @if($errors->has('observaciones'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('observaciones') }}
                        </div>
                    @endif
                </div>  
              </div>   
   <hr>           
 <div>
    <h6 class="mt-3">FIRMAS</h6>
<br>
          <div class="col-md-4">
            {{ Form::label('cuid_doc', '16.1 FUNCIONARIO(A)/ CONTRATISTA (CUIDADOR Y/O CONVIVENCIA)', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('cuid_doc', $todoxxxx['cuidador'], null, ['class' => $errors->first('cuid_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('cuid_doc'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('cuid_doc') }}
                </div>
            @endif
        </div>
 
        <div class="col-md-4">
            {{ Form::label('auxe_doc', '16.2 FUNCIONARIO(A)/ CONTRISTA (REPRESENTANTE AUXILIAR ENFERMERIA)', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('auxe_doc', $todoxxxx['enfermer'], null, ['class' => $errors->first('auxe_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('auxe_doc'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('auxe_doc') }}
                </div>
            @endif
        </div>

        <div class="col-md-4">
            {{ Form::label('doce_doc', '16.3 FUNCIONARIO(A)/ CONTRISTA (REPRESENTANTE APOYO ACADEMICO/DOCENTE) ', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('doce_doc', $todoxxxx['docentex'], null, ['class' => $errors->first('doce_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('doce_doc'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('doce_doc') }}
                </div>
            @endif
        </div>
        

        <div class="col-md-4">
            {{ Form::label('psico_doc', '16.4 FUNCIONARIO(A)/ CONTRISTA (REPRESENTANTE EQUIPO PSICOSOCIAL', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('psico_doc', $todoxxxx['piscoxxx'], null, ['class' => $errors->first('psico_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('psico_doc'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('psico_doc') }}
                </div>
            @endif
        </div>

        <div class="col-md-4">
            {{ Form::label('auxil_doc', '16.5 FUNCIONARIO (A)/ CONTRISTA FIRMA AUXILIAR ADMINISTRATIVO/A', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('auxil_doc', $todoxxxx['auxiliar'], null, ['class' => $errors->first('auxil_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            @if($errors->has('auxil_doc'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('auxil_doc') }}
                </div>
            @endif
        </div>
    </div>

</div>  




