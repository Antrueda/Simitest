<style>
    .has-error .select2-selection {
    border-color: rgb(185, 74, 72) !important;
}
</style>

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Beneficiarios</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive ">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    @foreach ($todoxxxx['cabesema'] as $item)
                      @if (isset($item["dia"]))
                        <th style="text-align: center;">{{$item["dia"]}} <br> {{$item["fecha"]}}</th>
                      @else
                        <th style="text-align: center;">{{$item}}</th>
                      @endif
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                  @forelse ($todoxxxx['listasis'] as $key => $listaasistencia)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$listaasistencia->s_documento}}</td>
                      <td><strong>{{$listaasistencia->s_primer_nombre}} {{$listaasistencia->s_segundo_nombre}} {{$listaasistencia->s_primer_apellido}} {{$listaasistencia->s_segundo_apellido}}</strong></td>
                      @foreach ($todoxxxx['cabesema'] as $item)
                        @if (isset($item["dia"]))
                          <td>
                            <input type="checkbox" name="" id="" style="width: 18px; height: 18px;" >
                          </td>
                        @else
                          <td></td>
                        @endif
                      @endforeach
                    </tr>
                  @empty
                      <tr>
                          <td colspan="10">
                            <center>No ah registrado beneficiarios</center>
                          </td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
