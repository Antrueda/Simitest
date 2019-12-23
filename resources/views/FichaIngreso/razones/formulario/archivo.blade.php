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
</div>
<div class="form-row align-items-end" style="margin-bottom: 40px">
  @upload
  @slot('dataxxxx',['classdiv'=>'custom-file mb-3','campoxxx'=>'s_doc_adjunto','descripc'=>'Seleccione un archivo',
  'claslabe'=>'custom-file-label','acceptxx'=>'image/jpeg,application/pdf','clasinpu'=>'custom-file-input','tipoarch'=>'Seleccione archivo de imágen jpg.'])
  @endupload
</div>

@if($todoxxxx['accionxx']!='Crear' || isset($todoxxxx['archivox']))
@component('layouts.components.tablajquery.index', ['todoxxxx'=>$todoxxxx])
@slot('tableName')
documetos
@endslot
@slot('class')
@endslot

@endcomponent 
@endif