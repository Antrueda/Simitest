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
            <th width="70">Acciones</th>
            <th>Primer nombre</th>
            <th>Segundo nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Apodo</th>
            <th>Identitario</th>
          </tr>
        </thead>
      </table>
    </div>
    @endcanany
  </div>
</div>