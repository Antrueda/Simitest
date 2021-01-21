<div class="form-group row">
    <div class="form-group col-md-4">
        {{ Form::label('d_registro',Tr::getTitulo(1,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('d_registro', null, ['class' => 'form-control form-control-sm ','style'=>'height:38px','max' => $todoxxxx['hoyxxxxx']]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('area_id', Tr::getTitulo(2,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('area_id', $todoxxxx["areaxxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_deporigen_id', Tr::getTitulo(3,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_deporigen_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('ag_tema_id', Tr::getTitulo(4,1), ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="ag_tema_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('ag_tema_id', $todoxxxx["agtemaxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('ag_taller_id', Tr::getTitulo(5,1), ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="ag_taller_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('ag_taller_id', $todoxxxx["tallerxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('ag_sttema_id', Tr::getTitulo(6,1), ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="ag_sttema_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('ag_sttema_id', $todoxxxx["subtemax"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('sis_depdestino_id', Tr::getTitulo(8,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depdestino_id', $todoxxxx["upidepen"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_lugar_id', Tr::getTitulo(9,1), ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::text('s_prm_espac', null, ['class' => 'form-control form-control-sm','style'=>'height:38px','readonly','id'=>'s_prm_espac', "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_prm_espac', Tr::getTitulo(10,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_lugar_id', $todoxxxx["lugarxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('i_prm_dirig_id', Tr::getTitulo(11,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_dirig_id', $todoxxxx["dirigido"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
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
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_justific', Tr::getTitulo(19,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_justific', null,
    ['class' => $errors->first('s_justific') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_justific', 'maxlength' => '6000','contador'=>'ags_justificcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_justificcontador">0/6000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_objetivo', Tr::getTitulo(20,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_objetivo', null,
    ['class' => $errors->first('s_objetivo') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_objetivo', 'maxlength' => '6000','contador'=>'ags_objetivocontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_objetivocontador">0/6000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_metodolo', Tr::getTitulo(21,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_metodolo', null,
    ['class' => $errors->first('s_metodolo') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_metodolo', 'maxlength' => '6000','contador'=>'ags_metodolocontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_metodolocontador">0/6000</p>
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
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_estrateg', Tr::getTitulo(24,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_estrateg', null,
    ['class' => $errors->first('s_estrateg') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_estrateg', 'maxlength' => '6000','contador'=>'ags_estrategcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_estrategcontador">0/6000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_resultad', Tr::getTitulo(25,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_resultad', null,
    ['class' => $errors->first('s_resultad') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_resultad', 'maxlength' => '6000','contador'=>'ags_resultadcontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_resultadcontador">0/6000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_evaluaci', Tr::getTitulo(26,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_evaluaci', null,
    ['class' => $errors->first('s_evaluaci') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_evaluaci', 'maxlength' => '6000','contador'=>'ags_evaluacicontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_evaluacicontador">0/6000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_observac', Tr::getTitulo(27,1), ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_observac', null,
    ['class' => $errors->first('s_observac') ? 'form-control form-control-sm is-invalid contarcaracteres' :
    'form-control form-control-sm contarcaracteres', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none',
    'id' => 's_observac', 'maxlength' => '6000','contador'=>'ags_observaccontador',
    "onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="ags_observaccontador">0/6000</p>
    </div>
    <div class="form-group col-md-12">
        @if(isset($todoxxxx["modeloxx"]->id))
            @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
        @endif
    </div>
    @if(isset($todoxxxx["modeloxx"]->id))
    <div class="form-row align-items-end form-group col-md-12" style="margin-bottom: 40px">
        {{ Form::label('s_doc_adjunto_ar', 'Cargar Documento', ['class' => 'control-label col-form-label-sm']) }}
        @component('layouts.components.archivos.upload')
        @slot('dataxxxx',['classdiv'=>'custom-file mb-3','campoxxx'=>'s_doc_adjunto_ar','descripc'=>'Seleccione un archivo','idlabelx'=>'s_doc_adjunto_ar_label',
        'claslabe'=>'custom-file-label','acceptxx'=>'image/jpeg,application/pdf','clasinpu'=>'custom-file-input','tipoarch'=>Tr::getTitulo(28,1)])
        @endcomponent

    </div>
    @endif
</div>
@if($todoxxxx['archivox']!='')
<div class="row">
    <div class="col-md-12">
    <a href="{{asset($todoxxxx['modeloxx']->s_doc_adjunto)}}" target="_blank" >{{$todoxxxx['archivox']}}</a>
    </div>
</div>
@endif
