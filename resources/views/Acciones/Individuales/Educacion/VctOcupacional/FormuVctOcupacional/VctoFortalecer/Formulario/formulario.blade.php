
<div class="card p-1">
    <div class="card pt-2">
        <div class="form-group col-md-12">
            {!! Form::label('fortalecer', 'SELECCIONE ÁREAS A FORTALECER:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('fortalecer',$todoxxxx['areas_for'], null, ['name' => 'fortalecer[]', 'class' => 'form-control form-control-sm select2', 'multiple']) !!}
            @if($errors->has('fortalecer'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fortalecer') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-row">
        @include('layouts.registro')
    </div>
</div>

