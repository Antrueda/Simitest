<div class="row">
    <div class="col-md-6">
        {{ Form::label('potencialidad', '18.1 Potencialidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('potencialidad', null, ['class' => $errors->first('potencialidad') ?
            'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
            'maxlenght' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();',
            'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('potencialidad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('potencialidad') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
