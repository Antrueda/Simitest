  
@if(!isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif
<div style="display: none">
    {{ Form::label('sis_nnaj_id', '1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('sis_nnaj_id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        {{ Form::label('sis_nnaj_id', '1er. asfasfas', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}

</div>
        <div class="form-row align-items-end">
                <div class="form-group col-md-4">
                    {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
                    {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly', 'style' => 'text-transform:uppercase;']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
                    {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
                "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly', 'style' => 'text-transform:uppercase;']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
                    {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
                "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly', 'style' => 'text-transform:uppercase;']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
                    {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
                "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly', 'style' => 'text-transform:uppercase;']) }}
                </div>
            <div class="form-group col-md-4">
                {{ Form::label('s_documento', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
                {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="form-group col-md-4">
            {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
            {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly', 'style' => 'text-transform:uppercase;']) }}
            </div>
            
        </div>

        @if($todoxxxx["padrexxx"]->prm_trasupi_id==37&&$todoxxxx["padrexxx"]->tipotras_id==2641)
        <div class="form-row align-items-end">
            <div class="col-md-4">
                    {{ Form::label('motivoe_id', 'Motivo de Egreso', ['class' => 'control-label col-form-label-sm']) }}
                    <a href="#" propiedad="motivoe_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
                    {{ Form::select('motivoe_id', $todoxxxx['motivoeg'], null, ['class' => $errors->first('motivoe_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivoe_id']) }}
                    @if($errors->has('motivoe_id'))
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('motivoe_id') }}
                        </div>
                    @endif
                </div>

            <div class="col-md-4">
                {{ Form::label('motivoese_id', 'Motivo de Egreso Secundario', ['class' => 'control-label col-form-label-sm']) }}
                <a href="#" propiedad="motivoese_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
                {{ Form::select('motivoese_id', $todoxxxx['motivose'], null, ['class' => $errors->first('motivoese_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivoese_id']) }}
                @if($errors->has('motivoese_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('motivoese_id') }}
                    </div>
                @endif
            </div>
        </div>
        
        <div class="form-row align-items-end">
            <div class="col-md-4">
                    {{ Form::label('fechaasistencia', 'Fecha última asistencia', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('fechaasistencia', null, ['class' => $errors->first('fechaasistencia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'fechaasistencia']) }}
                    @if($errors->has('fechaasistencia'))
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('fechaasistencia') }}
                        </div>
                    @endif
                </div>

            <div class="col-md-4">
                {{ Form::label('estadoasintecia', 'Estado Académico', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('estadoasintecia', null, ['class' => $errors->first('estadoasintecia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'estadoasintecia']) }}
                @if($errors->has('estadoasintecia'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('estadoasintecia') }}
                    </div>
                @endif
            </div>
        </div> 
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
        
        @endif
       
                 <br>
                <hr>
    

  

