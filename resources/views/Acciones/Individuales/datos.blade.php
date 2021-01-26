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
            <td width="70">ACCIONES</td>
            <td>ID</td>
            <td>DOCUMENTOS</td>
            <td>PRIMER NOMBRE</td>
            <td>SEGUNDO NOMBRE</td>
            <td>PRIMER APELLIDO</td>
            <td>SEGUNDO APELLIDO</td>
            <td>APODO</td>
            <td>IDENTITARIO</td>
            <td>UPI/SERVICIO</td>
          </tr>
        </thead>
      </table>
    </div>
    @endcanany
  </div>
</div>
