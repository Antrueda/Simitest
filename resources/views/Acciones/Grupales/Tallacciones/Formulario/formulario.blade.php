<div class="form-group row">
    <div class="form-group col-md-4">
        {{ Form::label('d_registro',Tr::getTitulo(1,1), ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('d_registro', null, ['class' => $errors->first('d_registro') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','style'=>'height:38px','id'=>'d_registro']) }}
  
        @if($errors->has('d_registro'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('d_registro') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('area_id', Tr::getTitulo(2,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('area_id', $todoxxxx["areaxxxx"], null, ['class' => $errors->first('area_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px']) }}
        @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('area_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_deporigen_id', Tr::getTitulo(3,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_deporigen_id', $todoxxxx["dependen"], null, ['class' => $errors->first('sis_deporigen_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px']) }}
        @if($errors->has('sis_deporigen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_deporigen_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('ag_tema_id', Tr::getTitulo(4,1), ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="ag_tema_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('ag_tema_id', $todoxxxx["agtemaxx"], null, ['class' => $errors->first('ag_tema_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('ag_tema_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ag_tema_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('ag_taller_id', Tr::getTitulo(5,1), ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="ag_taller_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('ag_taller_id', $todoxxxx["tallerxx"], null, ['class' => $errors->first('ag_taller_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('ag_taller_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ag_taller_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('ag_sttema_id', Tr::getTitulo(6,1), ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="ag_sttema_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('ag_sttema_id', $todoxxxx["subtemax"], null, ['class' => $errors->first('ag_sttema_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('ag_sttema_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ag_sttema_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('sis_depdestino_id', Tr::getTitulo(8,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depdestino_id', $todoxxxx["upidepen"], null, ['class' => $errors->first('sis_depdestino_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px']) }}
        @if($errors->has('sis_depdestino_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depdestino_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_lugar_id', Tr::getTitulo(9,1), ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::text('s_prm_espac', null, ['class' => $errors->first('s_prm_espac') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','style'=>'height:38px','readonly','id'=>'s_prm_espac', "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase']) }}
        @if($errors->has('s_prm_espac'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_prm_espac') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_prm_espac', Tr::getTitulo(10,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_lugar_id', $todoxxxx["lugarxxx"], null, ['class' => $errors->first('i_prm_lugar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('i_prm_lugar_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_lugar_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('i_prm_dirig_id', Tr::getTitulo(11,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_dirig_id', $todoxxxx["dirigido"], null, ['class' => $errors->first('i_prm_dirig_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px']) }}
        @if($errors->has('i_prm_dirig_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_dirig_id') }}
        </div>
        @endif
    </div>

</div>

<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('s_introduc', Tr::getTitulo(18,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_introduc', null,
    ['class' => $errors->first('s_introduc') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_introduc', 'maxlength' => '6000','contador'=>'ags_introduccontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_introduccontador">0/6000</p>
        @if($errors->has('s_introduc'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_introduc') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_justific', Tr::getTitulo(19,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_justific', null,
    ['class' => $errors->first('s_justific') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_justific', 'maxlength' => '6000','contador'=>'ags_justificcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_justificcontador">0/6000</p>
        @if($errors->has('s_justific'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_justific') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_objetivo', Tr::getTitulo(20,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_objetivo', null,
    ['class' => $errors->first('s_objetivo') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_objetivo', 'maxlength' => '6000','contador'=>'ags_objetivocontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_objetivocontador">0/6000</p>
        @if($errors->has('s_objetivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_objetivo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_metodolo', Tr::getTitulo(21,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_metodolo', null,
    ['class' => $errors->first('s_metodolo') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_metodolo', 'maxlength' => '6000','contador'=>'ags_metodolocontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_metodolocontador">0/6000</p>
        @if($errors->has('s_metodolo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_metodolo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_categori', Tr::getTitulo(22,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_categori', null,
    ['class' => $errors->first('s_categori') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_categori', 'maxlength' => '6000','contador'=>'ags_categoricontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_categoricontador">0/6000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_contenid', Tr::getTitulo(23,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_contenid', null,
    ['class' => $errors->first('s_contenid') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_contenid', 'maxlength' => '6000','contador'=>'ags_contenidcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_contenidcontador">0/6000</p>
        @if($errors->has('s_contenid'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_contenid') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_estrateg', Tr::getTitulo(24,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_estrateg', null,
    ['class' => $errors->first('s_estrateg') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_estrateg', 'maxlength' => '6000','contador'=>'ags_estrategcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_estrategcontador">0/6000</p>
        @if($errors->has('s_estrateg'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_estrateg') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_resultad', Tr::getTitulo(25,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_resultad', null,
    ['class' => $errors->first('s_resultad') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_resultad', 'maxlength' => '6000','contador'=>'ags_resultadcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_resultadcontador">0/6000</p>
        @if($errors->has('s_resultad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_resultad') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_evaluaci', Tr::getTitulo(26,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_evaluaci', null,
    ['class' => $errors->first('s_evaluaci') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_evaluaci', 'maxlength' => '6000','contador'=>'ags_evaluacicontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_evaluacicontador">0/6000</p>
        @if($errors->has('s_evaluaci'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_evaluaci') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_observac', Tr::getTitulo(27,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_observac', null,
    ['class' => $errors->first('s_observac') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_observac', 'maxlength' => '6000','contador'=>'ags_observaccontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_observaccontador">0/6000</p>
        @if($errors->has('s_observac'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_observac') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        @if(isset($todoxxxx["modeloxx"]->id))
            @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
        @endif
    </div>
  

