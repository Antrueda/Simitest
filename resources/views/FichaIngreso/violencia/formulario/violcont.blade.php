<div class="form-row align-items-end">

    <div class="form-group col-md-4">
        {{ Form::label('prm_contexto_id', 'Contexto', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_contexto_id', $todoxxxx["contexto"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('prm_contexto_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_contexto_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_violenci_id', 'Violencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_violenci_id', $todoxxxx["violenci"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('prm_violenci_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_violenci_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_respuest_id', 'Respuesta', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_respuest_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('prm_respuest_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_respuest_id') }}
        </div>
        @endif
    </div>

</div>
