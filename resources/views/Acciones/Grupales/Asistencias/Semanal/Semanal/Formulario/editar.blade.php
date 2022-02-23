<style>
    .has-error .select2-selection {
    border-color: rgb(185, 74, 72) !important;
}
</style>
<div class="form-row">
    <div class="form-group col-md-1">
        {!! Form::label('consecut', 'CONSECUTIVO PLANILLA N°:', ['class' => 'control-label']) !!}
        <div id="consecut" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->consecut}}
        </div>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
              {{$todoxxxx['modeloxx']->upi->nombre}}
        </div>
    </div>
    <div class="forn-group col-md-4" {{$errors->first('sis_servicio_id') ? 'has-error' : ''}}">
        {!! Form::label('sis_servicio_id', 'TIPO DE SERVICIO:', ['class' => 'control-labl']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->prm_serv->s_servicio}}
        </div>
    </div>
    <div class="form-group col-md-3" {{$errors->first('prm_actividad_id') ? 'has-error' : ''}}">
        {!! Form::label('prm_actividad_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->prm_actividad->nombre}}
        </div>
    </div>

    @if ($todoxxxx['modeloxx']->prm_actividad_id == 2721)
        <div id="grado_id_field" class="form-group col-md-6 {{$errors->first('eda_grados_id') ? 'has-error' : ''}}">
            {!! Form::label('eda_grados_id', 'GRADO:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->grado->s_grado}}
            </div>
        </div>
    @endif
    @if ($todoxxxx['modeloxx']->prm_actividad_id == 2724)
        {{-- <div id="prm_convenio_id_field" class="form-group col-md-6 {{$errors->first('prm_convenio_id') ? 'has-error' : ''}}">
            {!! Form::label('prm_convenio_id', 'CONVENIO /PROGRAMA:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_convenio_id',$todoxxxx['convenios_progs'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
            @if($errors->has('prm_convenio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_convenio_id') }}
            </div>
            @endif
        </div> --}}
    @endif
    @if ($todoxxxx['modeloxx']->prm_actividad_id == 2723)
        {{-- <div id="tipoacti_id_field" class="form-group col-md-6 {{$errors->first('tipoacti_id') ? 'has-error' : ''}}">
            {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
            {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
            @if($errors->has('tipoacti_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('tipoacti_id') }}
            </div>
            @endif
        </div>
        <div id="actividade_id_field" class="form-group col-md-6 {{$errors->first('actividade_id') ? 'has-error' : ''}}">
            {!! Form::label('actividade_id', 'Actividad:', ['class' => 'control-label']) !!}
            {!! Form::select('actividade_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
            @if($errors->has('actividade_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('actividade_id') }}
            </div>
            @endif
        </div> --}}
    @endif
    @if ($todoxxxx['modeloxx']->prm_actividad_id == 2722)
        <div id="curso_box" class="form-group col-md-6 {{$errors->first('prm_curso') ? 'has-error' : ''}}">
            {!! Form::label('prm_curso', 'CURSO:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->curso->s_cursos}}
            </div>
        </div>
    @endif
  
   
    <div id="grupo_id_field" class="form-group col-md-6 {{$errors->first('prm_grupo_id') ? 'has-error' : ''}}">
        {!! Form::label('prm_grupo_id', 'GRUPO:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->grupo->s_grupo}}
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="col-md-12">
            {!! Form::label('', 'HORARIO:', ['class' => 'control-label mb-0']) !!}
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('h_inicio', 'DE:', ['class' => 'control-label']) !!}
            {!! Form::time('h_inicio', null, ['class' => 'form-control form-control-sm', 'required']) !!}
            @if($errors->has('h_inicio'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('h_inicio') }}
            </div>
            @endif
        </div>
    
        <div class="form-group col-md-6">
            {!! Form::label('h_final', 'A:', ['class' => 'control-label']) !!}
            {!! Form::time('h_final', null, ['class' => 'form-control form-control-sm', 'required']) !!}
            @if($errors->has('h_final'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('h_final') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('prm_fecha_inicio', 'FECHA INICIAL:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->prm_fecha_inicio}}
            </div>
        </div>
    
        <div class="form-group col-md-6">
            {!! Form::label('prm_fecha_final', 'FECHA FINAL:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->prm_fecha_final}}
            </div>
        </div>
    </div>
  
    <div class="form-group col-md-6">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el registro:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('user_res_id', 'Responsable de UPI:', ['class' => 'control-label']) !!}
        {!! Form::select('user_res_id', $todoxxxx['responsa'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_res_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_res_id') }}
        </div>
        @endif
    </div>
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRO:', ['class' => 'control-label']) !!}
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
        <div class="col-md-12">
            @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
        </div>
        
    @endisset
</div>
