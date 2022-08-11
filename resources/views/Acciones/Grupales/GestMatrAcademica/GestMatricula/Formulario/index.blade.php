<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            CONSULTA
        </h3>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::label('pri_nombre', 'Primer nombre:', ['class' => 'control-label text-uppercase ']) !!}
                {!! Form::text('pri_nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('seg_nombre', 'Segundo nombre:', ['class' => 'control-label text-uppercase']) !!}
                {!! Form::text('seg_nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('pri_apellido', 'Primer Apellido:', ['class' => 'control-label text-uppercase']) !!}
                {!! Form::text('pri_apellido', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('seg_apellido', 'Segundo Apellido:', ['class' => 'control-label text-uppercase']) !!}
                {!! Form::text('seg_apellido', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('documento', '№ de documento:', ['class' => 'control-label text-uppercase']) !!}
                {!! Form::text('documento', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
            </div>
            <div class="form-group col-md-6 d-flex align-items-end">
                <button class="btn btn-sm btn-primary buscar_persona" type="button">BUSCAR...</button>
            </div>
            <div class="table-responsive ">
                <table class="table table-hover text-nowrap table-bordered tablennaj">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Documento</th>
                      <th>Nombre</th>
                      
                    </tr>
                  </thead>
                  <tbody id="DataResult">
                    <tr>
                        <td colspan="3">
                          <center>BUSCAR ...</center>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>

    </div>
</div>

@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<<<<<<< HEAD
=======


>>>>>>> 44c38a4fb9f9193b1708b5cf690e2aca3dbe83b3
