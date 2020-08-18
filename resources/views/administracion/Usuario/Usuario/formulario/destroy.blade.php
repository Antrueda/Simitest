<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('prm_documento_id','OBSERVACION') }}
        {{ Form::select('prm_documento_id',$todoxxxx['observac'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
    </div>
    @include('layouts.registro')
</div>
