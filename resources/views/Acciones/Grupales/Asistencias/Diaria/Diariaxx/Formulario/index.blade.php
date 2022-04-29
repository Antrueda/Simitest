<div class="card card-outline card-secondary">
  <div class="card-header">
      <h3 class="card-title">
          CONSULTA
      </h3>
  </div>
  <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
          {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2']) !!}
        </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              {!! Form::label('fecha_desde', 'Fecha asistencia desde:', ['class' => 'control-label text-uppercase']) !!}
              {!! Form::date('fecha_desde', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
          </div>
          <div class="form-group col-md-6">
              {!! Form::label('fecha_hasta', 'Fecha asistencia hasta:', ['class' => 'control-label text-uppercase']) !!}
              {!! Form::date('fecha_hasta', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
          </div>
          <div class="form-group col-md-6 d-flex align-items-end">
              <button class="btn btn-sm btn-primary buscar_asistencia" type="button">BUSCAR...</button>
          </div>
      </div>

  </div>
</div>

@include('Acomponentes.Acrud.index')