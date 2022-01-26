@include('indicadores.Administ.'.$todoxxxx['carpetax'].'.Formulario.veractina')
<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('sis_esta_id','Estado') }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->sisEsta->s_estado }}
        </div>
    </div>
    @include('layouts.registro')
</div>
