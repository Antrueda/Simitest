<div class="row">
  <div class="col-12">
    <div class="card card-outline card-secondary">
      <div class="card-header">
        <div class="row justify-content-between">
          <div class="col-4">
            <h3 class="card-title">Beneficiarios</h3>
          </div>
          <div class="col-4">
            <div class="form-row">
              {{-- <div class="form-group">
                  {!! Form::text('nombre',(isset($_GET['nombre']) ? $_GET['nombre'] : null) , ['class'=>'form-control','placeholder' => 'Nombre']) !!}
              </div> --}}
              <div class="form-group">
                {!! Form::text('documento', (isset($_GET['documento']) ? $_GET['documento'] : null), ['class'=>'form-control','placeholder' => 'Documento']) !!}
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </button>
              </div>
            </div>             
          </div>
        </div>
      </div>
      
      <!-- /.card-header -->
      <div class="card-body table-responsive ">
        <table class="table table-hover text-nowrap table-bordered asistencias">
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
              <td></td>
            </tr>
          </thead>
          <tbody>
            @forelse ($todoxxxx['listasis'] as $key => $listaasistencia)
              <?php $i =0; ?>
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$listaasistencia->s_documento}}</td>
                <td><strong>{{$listaasistencia->s_primer_nombre}} {{$listaasistencia->s_segundo_nombre}} {{$listaasistencia->s_primer_apellido}} {{$listaasistencia->s_segundo_apellido}}</strong></td>
                @foreach ($todoxxxx['cabesema'] as $item)
                  @if (isset($item["dia"]))
                    <td>
                      @isset($listaasistencia->asistencias[$i])
                        @if (Carbon\Carbon::parse($item["fecha"]) <= Carbon\Carbon::parse($todoxxxx['hoy']))
                          <input type="checkbox" class="cambio-estado" data-id="{{$listaasistencia->asistencias[$i]->asissema_matri_id}}" data-fecha="{{$listaasistencia->asistencias[$i]->fecha}}" {{($listaasistencia->asistencias[$i]->valor_asis)?"checked":""}} style="width: 18px; height: 18px;" >
                        @else
                          <input disabled type="checkbox" {{($listaasistencia->asistencias[$i]->valor_asis)?"checked":""}} style="width: 18px; height: 18px;" >
                        @endif
                      @endisset
                    </td>
                    <?php $i += 1; ?>
                  @else
                    <td></td>
                  @endif
                @endforeach
                <td>
                  <button class="btn btn-sm btn-danger eliminar-asigna-asistencia" type="button" data-asis="{{$listaasistencia->asistenciamatricula}}">ELIMINAR</button>
                </td>
              </tr>
            @empty
                <tr>
                    <td colspan="10">
                      <center>No ah registrado beneficiarios</center>
                    </td>
                </tr>
            @endforelse
              <th colspan="3">Total asistencias:  <button class="btn btn-primary btn-sm" onclick='window.location.reload();'>ACTUALIZAR</button></th>
            @foreach ($todoxxxx['cabesema'] as $item)
              @if (isset($item["dia"]))
                
                <th style="text-align: center;">{{$todoxxxx['modeloxx']->contarasistencia($item["fecha"])}}</th>
              @else
                <th style="text-align: center;">-</th>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $todoxxxx['listasis']->links() }}
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@include($todoxxxx['rutacarp'].''.'.Semanal.Formulario.asistencias.infoasistencia')


<script>
  $(document).ready(function() {
    let ruta = "{{ route('asissema.asistencias',$todoxxxx['modeloxx']->id) }}";
    $("form").attr("action",ruta);
    $("form").attr("method",'GET');
    $( "form input[name='_token']" ).remove();
  });
</script>