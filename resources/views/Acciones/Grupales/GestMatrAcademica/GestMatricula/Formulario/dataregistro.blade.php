<div class="col-md-12">
    {{ Form::label('user_fun_id', 'Funcionario(a) y/o contratista', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_fun_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_fun_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm']) }}
    @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
    @endif
</div>

@isset($todoxxxx['modeloxx'])
    <div class="form-group col-md-6">
        {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRÓ:', ['class' => 'control-label']) !!}
        <div id="fechdili" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->created_at}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('updated_at', 'FECHA Y HORA DE ACTUALIZACIÓN:', ['class' => 'control-label']) !!}
        <div id="fechdili" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->updated_at}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('user_crea_id', 'USUARIO QUE REGISTRÓ:', ['class' => 'control-label']) !!}
        <div id="user_crea_id" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->userCrea->name}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('user_edita_id', 'USUARIO QUE ACTUALIZÓ:', ['class' => 'control-label']) !!}
        <div id="user_edita_id" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->userEdita->name}}
        </div>
    </div>
@endisset