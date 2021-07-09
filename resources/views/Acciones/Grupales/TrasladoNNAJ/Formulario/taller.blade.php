
  
@if(!isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif

{{ Form::number('sis_nnaj_id', null, ['class' => 'form-control form-control-sm','id'=>'sis_nnaj_id',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
</div>
        <div class="form-row align-items-end">
                <div class="form-group col-md-4">
                    {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
                    {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
                    {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
                "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
                    {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
                "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
                    {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
                "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
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
                {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
            </div>
            
        </div>


    <div class="col-md-4">
        {{ Form::label('retorna_id', '¿Retorna?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('retorna_id', $todoxxxx['condicio'], null, ['class' => $errors->first('retorna_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'retorna_id','onchange' => 'doc(this.value)']) }}
        @if($errors->has('retorna_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('retorna_id') }}
            </div>
        @endif
        </div>
        
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
  
  
