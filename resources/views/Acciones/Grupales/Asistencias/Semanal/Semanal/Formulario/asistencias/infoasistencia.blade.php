<div class="row">
  <div class="col-12">
    <div class="card card-outline card-secondary">
      <div class="card-header">
        <h3 class="card-title">Información de planilla</h3>
      </div>
      <div class="card-body table-responsive ">
        <div class="form-row">
          <div class="form-group col-md-2">
            {!! Form::label('consecut', 'CONSECUTIVO PLANILLA N°:', ['class' => 'control-label']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->consecut}}
            </div>
          </div>
          <div class="form-group col-md-5">
            {!! Form::label('created_at', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->upi->nombre}}
            </div>
          </div>
          <div class="form-group col-md-5">
            {!! Form::label('created_at', 'SERVICIO:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->prm_serv->s_servicio}}
            </div>
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('created_at', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->prm_actividad->nombre}}
            </div>
          </div>
          @if ($todoxxxx['modeloxx']->curso)
            <div class="form-group col-md-6">
              {!! Form::label('created_at', 'CURSO:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
                  {{$todoxxxx['modeloxx']->curso->s_cursos}}
              </div>
            </div>
          @endif
          @if ($todoxxxx['modeloxx']->grado)
            <div class="form-group col-md-6">
              {!! Form::label('created_at', 'GRADO:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
                  {{$todoxxxx['modeloxx']->grado->s_grado}}
              </div>
            </div>
          @endif
          <div class="form-group col-md-6">
            {!! Form::label('created_at', 'GRUPO:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->grupo->s_grupo}}
            </div>
          </div>
          <div class="col-md-12">
            {!! Form::label('', 'HORARIO:', ['class' => 'control-label mb-0']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('created_at', 'DE:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->h_inicio}}
            </div>
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('created_at', 'A:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->h_final}}
            </div>
          </div>
          <div class="form-group col-md-6">
              {!! Form::label('created_at', 'FECHA INICIAL:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
                  {{$todoxxxx['modeloxx']->prm_fecha_inicio}}
              </div>
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('created_at', 'FECHA FINAL:', ['class' => 'control-label']) !!}
            <div class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->prm_fecha_final}}
            </div>
          </div>
          <div class="form-group col-md-6">
              {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRO:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
                  {{$todoxxxx['modeloxx']->created_at}}
              </div>
          </div>
          <div class="form-group col-md-6">
              {!! Form::label('updated_at', 'FECHA Y HORA DE ACTUALIZACIÓN:', ['class' => 'control-label']) !!}
              <div class="form-control form-control-sm">
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
      </div>
      </div>
    </div>
  </div>
</div>
