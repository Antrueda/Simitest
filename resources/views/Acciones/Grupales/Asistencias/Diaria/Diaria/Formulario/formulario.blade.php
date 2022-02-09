 
<div class="form-row">
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-2">
            {!! Form::label('consecut', 'PLANILLA N°:', ['class' => 'control-label']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->consecut}}
            </div>
        </div>
    @endisset 

    <div class="form-group col-md-4">
        {!! Form::label('fechdili', 'fecha de diligeciamiento:', ['class' => 'control-label']) !!}
        {!! Form::date('fechdili', null, ['class' => 'form-control form-control-sm', 'disabled']) !!}
        @if($errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
  
</div>
