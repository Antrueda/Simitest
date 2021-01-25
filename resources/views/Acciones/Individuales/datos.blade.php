<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 class="card-title">
      Datos
    </h3>
  </div>
  <div class="card-body">
    @canany(['aiindex-leer','aiindex-crear','aiindex-editar','aiindex-borrar'])
    <div class="table-responsive">
      <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
          <tr class="text-center">
            <th width="70">ACCIONES</th>
            <th>ID</th>
            <th>DOCUMENTOS</th>
            <th>PRIMER NOMBRE</th>
            <th>SEGUNDO NOMBRE</th>
            <th>PRIMEMR APELLIDO</th>
            <th>SEGUNDO APELLIDO</th>
            <th>APODO</th>
            <th>IDENTITARIO</th>
            <th>UPI/SERVICIO</th>
          </tr>
        </thead>
      </table>
    </div>
    @endcanany
  </div>
</div>
