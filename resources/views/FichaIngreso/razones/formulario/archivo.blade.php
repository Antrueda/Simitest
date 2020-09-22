<div class="form-row align-items-end">


    <div class="form-group col-md-12">
        {{ Form::label('i_prm_documento_id', '17.2 Copia documentos que anexa', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_documento_id', $todoxxxx['docanexa'], null, ['class' => $errors->first('i_prm_documento_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Digite el responsable']) }}
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
    'data-placeholder' => 'Seleccione un estasdo']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
<div class="form-row align-items-end" style="margin-bottom: 40px">
    @component('layouts.components.archivos.upload')
    @slot('dataxxxx',['classdiv'=>'custom-file mb-3','campoxxx'=>'s_doc_adjunto',
    'descripc'=>'Seleccione un archivo','idlabelx'=>'docontacto',
    'claslabe'=>'custom-file-label','acceptxx'=>'image/jpeg,application/pdf',
    'clasinpu'=>'custom-file-input','tipoarch'=>Tr::getTitulo(28,1)])
    @endcomponent
    @if($todoxxxx['archivox']!='')
    <div class="row">
        <div class="col-md-12">
        <button type="button" class="btn btn-outline-primary" ><a href="{{Storage::url($todoxxxx['modeloxx']->s_ruta)}}" target="_blank" >Descargar Archivo</a></button>
        </div>
    </div>
    @endif
</div>
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
