<div class="form-group row">
<div class="form-group col-md-4">
    {{ Form::label('user_id','Usuario') }}
    {{ Form::select('user_id',$todoxxxx['userxxxx'], null,['class'=>'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('area_id','&Aacute;rea') }}
    {{ Form::select('area_id',$todoxxxx['areaxxxx'], null,['class'=>'form-control form-control-sm select2']) }}
  </div>

<div class="form-group col-md-4">
    {{ Form::label('sis_esta_id','Estado') }}
    {{ Form::select('sis_esta_id',$todoxxxx['estadoxx'], null,['class'=>'form-control form-control-sm select2',$todoxxxx['readonly']]) }}
  </div>





    @include('layouts.registro')
</div>
