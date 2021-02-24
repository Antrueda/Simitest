<div class="form-row align-items-end">


    <div class="form-group col-md-12">
        {{ Form::label('i_prm_documento_id', 'Subir archivos del Taller Educativo y/o Acción Formativa', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_documento_id', $todoxxxx['docanexa'], null, ['class' => $errors->first('i_prm_documento_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Indique el documento que se va anexar']) }}
        @if($errors->has('i_prm_documento_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_documento_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
<div class="form-row align-items-end" style="margin-bottom: 40px">
    @component('layouts.components.archivos.upload')
    @slot('dataxxxx',['classdiv'=>'custom-file mb-3','campoxxx'=>'s_doc_adjunto_ar',
    'descripc'=>'Seleccione un archivo','idlabelx'=>'docontacto',
    'claslabe'=>'custom-file-label','acceptxx'=>'image/jpeg,application/pdf',
    'clasinpu'=>'custom-file-input','tipoarch'=>'Seleccione archivo con extensión pdf'])
    @endcomponent

    @if($todoxxxx['archivox']!='')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-outline-primary" href="{{asset($todoxxxx['modeloxx']->s_ruta)}}" target="_blank">Ver Adjunto</a>
        </div>
    </div>
    @endif

</div>

