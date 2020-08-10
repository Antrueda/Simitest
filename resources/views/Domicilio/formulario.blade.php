<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md-9">
                Propósito: {{ $dato->proposito }}
            </div>
            <div class="col-md-3">
                Fecha diligenciamiento: {{ $dato->fecha }}
            </div>
        </div>
    </div>
    <div class="card-body">
        <h6>NNAJ VISITADO(A)
            @if ($accion!='Agregar')
                <a class="btn btn-sm btn-primary ml-2" title="Agregar" href="{{ route('csd.agregar', $dato->id) }}">
                    Agregar
                </a>
            @endif
        </h6>
        <hr>
        @if(isset($todos))
            {{ Form::open(['route' => ['csd.agregar', $dato->id], 'name' => 'forma', 'class' => 'form-horizontal']) }}
                <div class="row pb-3">
                    <div class="col-md-10">
                        {{ Form::label('nnaj', 'NNAJ:', ['class' => 'control-label col-form-label-sm d-none']) }}
                        {{ Form::select('nnaj', $todos, null, ['class' => $errors->first('nnaj') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...']) }}
                        @if($errors->has('nnaj'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('nnaj') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-1">
                        {{ Form::submit('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
                    </div>
                    <div class="col-md-1">
                        <a class="btn btn-primary btn-sm ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
                    </div>
                </div>
            {{ Form::close() }}
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr class="text-center">
                        <th width="80">Acciones</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Primer nombre</th>
                        <th>Segundo nombre</th>
                        <th>Documento</th>
                        <th>UPI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nnajs as $d)
                        <tr>
                            <td>
                                @if(count($nnajs)>1)
                                    <a class="btn btn-sm btn-danger" title="Eliminar" href="{{ route('csd.eliminar', [$dato->id, $d->id]) }}">
                                        Eliminar
                                    </a>
                                @endif
                            </td>
                            <td>{{ $d->fi_datos_basico->s_primer_apellido }}</td>
                            <td>{{ $d->fi_datos_basico->s_segundo_apellido }}</td>
                            <td>{{ $d->fi_datos_basico->s_primer_nombre }}</td>
                            <td>{{ $d->fi_datos_basico->s_segundo_nombre }}</td>
                            <td>{{ $d->fi_datos_basico->s_documento }}</td>
                            <td>
                                @if($d->FiBienvenida->where('sis_esta_id', 1)->sortByDesc('id')->first())
                                    {{ $d->FiBienvenida->where('sis_esta_id', 1)->sortByDesc('id')->first()->dependencia->nombre }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <ul class="nav nav-tabs">
            @canany(['csddatobasico-leer', 'csddatobasico-crear', 'csddatobasico-editar', 'csddatobasico-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Basico') ?' active' : '' }}" href="{{ route('CSD.basico', $dato->id) }}">1. Datos básicos</a>
                </li>
            @endcanany
            @canany(['csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar', 'csdviolencia-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Violencia') ?' active' : '' }}" href="{{ route('CSD.violencia', $dato->id) }}">2. Violencias y condición especial</a>
                </li>
            @endcanany
            @canany(['csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar', 'csdsituacionespecial-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='SituacionEspecial') ?' active' : '' }}" href="{{ route('CSD.situacionespecial', $dato->id) }}">3. Situaciones especiales</a>
                </li>
            @endcanany
            @canany(['csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar', 'csdjusticia-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Justicia') ?' active' : '' }}" href="{{ route('CSD.justicia', $dato->id) }}">4.
                      Justicia restaurativa</a>
                </li>
            @endcanany
            @canany(['csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar', 'csdresidencia-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Residencia') ?' active' : '' }}" href="{{ route('CSD.residencia', $dato->id) }}">5. Residencia</a>
                </li>
            @endcanany
            @canany(['csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar', 'csddinfamiliar-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='DinFamiliar') ?' active' : '' }}" href="{{ route('CSD.dinfamiliar', $dato->id) }}">6. Dinámica familiar</a>
                </li>
            @endcanany
            @canany(['csdcomfamiliar-leer', 'csdcomfamiliar-crear', 'csdcomfamiliar-editar', 'csdcomfamiliar-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='ComFamiliar') ?' active' : '' }}" href="{{ route('CSD.comfamiliar', $dato->id) }}">7. Composición familiar</a>
                </li>
            @endcanany
            @canany(['csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar', 'csdbienvenida-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Bienvenida') ?' active' : '' }}" href="{{ route('CSD.bienvenida', $dato->id) }}">8. Motivos de vinculación y bienvenida</a>
                </li>
            @endcanany
            @canany(['csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar', 'csdalimentacion-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Alimentacion') ?' active' : '' }}" href="{{ route('CSD.alimentacion', $dato->id) }}">9. Alimentación de la familia</a>
                </li>
            @endcanany
            @canany(['csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar', 'csdgeningresos-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='GenIngresos') ?' active' : '' }}" href="{{ route('CSD.geningresos', $dato->id) }}">10. Generación de Ingresos</a>
                </li>
            @endcanany
            @canany(['csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar', 'csdredesapoyo-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='RedesApoyo') ?' active' : '' }}"
                    href="{{ route('CSD.redesapoyo', $dato->id) }}">11. Redes Sociales de Apoyo</a>
                </li>
            @endcanany
            @canany(['csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar', 'csdconclusiones-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Conclusiones') ?' active' : '' }}" href="{{ route('CSD.conclusiones', $dato->id) }}">12. Conclusiones</a>
                </li>
            @endcanany
        </ul>
    </div>
</div>

@if($accion=='Basico')
    @include('Domicilio.Basico.formulario')
@elseif($accion=='Violencia')
    @include('Domicilio.Violencia.formulario')
@elseif($accion=='SituacionEspecial')
    @include('Domicilio.SituacionEspecial.formulario')
@elseif($accion=='Justicia')
    @include('Domicilio.Justicia.formulario')
@elseif($accion=='Residencia')
    @include('Domicilio.Residencia.formulario')
@elseif($accion=='DinFamiliar')
    @include('Domicilio.DinFamiliar.formulario')
@elseif($accion=='ComFamiliar')
    @include('Domicilio.ComFamiliar.formulario')
@elseif($accion=='Bienvenida')
    @include('Domicilio.Bienvenida.formulario')
@elseif($accion=='Alimentacion')
    @include('Domicilio.Alimentacion.formulario')
@elseif($accion=='GenIngresos')
    @include('Domicilio.GenIngresos.formulario')
@elseif($accion=='RedesApoyo')
    @include('Domicilio.RedesApoyo.formulario')
@elseif($accion=='Conclusiones')
    @include('Domicilio.Conclusiones.formulario')
@endif
