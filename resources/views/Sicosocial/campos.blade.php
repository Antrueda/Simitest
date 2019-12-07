<h5>{{ $accion }} valoración sicosocial</h5>
<hr>
<div class="row">
    <div class="col-md-9">
        {{ Form::label('dependencia_id', 'UPI', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('dependencia_id', $dependencias, null, ['class' => $errors->first('dependencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('dependencia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('dependencia_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
</div>
<div class="row my-3">
    @canany(['vsidatobasico-crear', 'vsidatobasico-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('VSI.nnaj', $dato->id) }}">Regresar</a>
</div>