@if($todoxxxx['accionxx']=='Editar')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
type="text/css" media="all">
@endsection
@endif
<div class="form-row align-items-end">
  <input type="hidden" name="activida" value="{{ $todoxxxx['activida'] }}">
  
  <div class="form-group col-md-4">
    {{ Form::label('prm_documento_id','Tipo de documento') }} 
    {{ Form::select('prm_documento_id',$todoxxxx['prm_documento_id'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }} 
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_documento','Número de Documento') }}
    {{ Form::text('s_documento', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_departamento_id','Departamento Exp. Documento') }} 
    {{ Form::select('sis_departamento_id',$todoxxxx['sis_departamento_id'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }} 
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_municipio_id','Municipio Exp. Documento') }} 
    {{ Form::select('sis_municipio_id',$todoxxxx['sis_municipio_id'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }} 
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('s_primer_nombre','Primer Nombre') }}
    {{ Form::text('s_primer_nombre', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_segundo_nombre','Segundo Nombre') }}
    {{ Form::text('s_segundo_nombre', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_primer_apellido','Primer Apellido') }}
    {{ Form::text('s_primer_apellido', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_segundo_apellido','Segundo Apellido') }}
    {{ Form::text('s_segundo_apellido', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('s_telefono','Teléfono') }}
    {{ Form::text('s_telefono', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('email','Correo Electrónico') }}
    {{ Form::text('email', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('prm_tvinculacion_id','Tipo de Vinculación') }}
    {{ Form::select('prm_tvinculacion_id',$todoxxxx['prm_tvinculacion_id'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }} 
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_matriculap','Tarjeta Profesional') }}
    {{ Form::text('s_matriculap', null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }}
  </div>
  

  <div class="form-group col-md-3">
    {{ Form::label('sis_cargo_id','Cargo') }} 
    {{ Form::select('sis_cargo_id',$todoxxxx['sis_cargo_id'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }} 
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('d_vinculacion','Fecha de Vinculación') }} 
    {{Form::date('d_vinculacion', \Carbon\Carbon::now(),['class'=>'form-control form-control-sm',$todoxxxx['readonly']])}} 
  </div>
  
  <div class="form-group col-md-3">
    {{ Form::label('d_finvinculacion','Fecha lí­mite de vinculación') }} 
    {{Form::date('d_finvinculacion', \Carbon\Carbon::now(),
    ['class'=>'form-control form-control-sm',$todoxxxx['readonly']])}} 
  </div>
<div class="form-group col-md-3">
    {{ Form::label('sis_esta_id','Estado') }} 
    {{ Form::select('sis_esta_id',$todoxxxx['sis_esta_id'], null,['class'=>'form-control form-control-sm',$todoxxxx['readonly']]) }} 
  </div>
  <div class="form-group col-md-3" >
    {{ Form::label('vinculac','Tiempo de actualización') }} 
    <div id="vinculac">
    <div  style="float: left;  width:150px">
      {{Form::text('d_carga', null,
      ['class'=>'form-control form-control-sm','id'=>'d_carga',$todoxxxx['readonly']])}} 
    </div>
    <div  style="float: left; width:60px" >
      {{ Form::number('i_tiempo', null,
      ['class'=>'form-control form-control-sm','id'=>'i_tiempo','readonly']) }}
    </div>
    </div>
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('created_at','Fecha de Inserción') }}
    {{ Form::text('created_at', null,['class'=>'form-control form-control-sm','readonly']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('user_crea_id','Usuario que Inserta') }}
    <div class="form-control form-control-sm">
      @if(isset($todoxxxx['modeloxx']))
      {{ $todoxxxx['modeloxx']->creador->name }}
      @endif
    </div>
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('updated_at','Fecha de Modificación') }}
    {{ Form::text('updated_at', null,['class'=>'form-control form-control-sm','readonly']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('user_edita_id','Usuario que Modifica') }}
    <div class="form-control form-control-sm">
      @if(isset($todoxxxx['modeloxx']))
        {{ $todoxxxx['modeloxx']->editor->name }}
      @endif
    </div>
  </div>
</div>

