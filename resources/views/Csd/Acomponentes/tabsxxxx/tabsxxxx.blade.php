<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('ai.ver',$todoxxxx['usuariox']->sis_nnaj_id) }}">INDIVIDUALES</a></li>
            @endcanany
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2)
            @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">CSDS</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==2)
            @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas.editar',$todoxxxx['pestpara'][0]) }}">1. INFORMACI{{$todoxxxx['vocalesx'][3]}}N B{{$todoxxxx['vocalesx'][0]}}SICA</a></li>
            @endcanany
            @if($todoxxxx['usuariox']->prm_estrateg_id != 2323)
            @canany(['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vestuario') ?' active' : '' }} text-sm" href="{{ route('fi.vestuario.nuevo', $todoxxxx['pestpara'][0]) }}">2. Vestuario</a></li>
            @endcanany
            @endif
            @canany(['firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='residencia') ?' active' : '' }} text-sm" href="{{ route('fi.residencia.nuevo', $todoxxxx['pestpara'][0]) }}">3. Residencia</a></li>
            @endcanany
            @canany(['fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='formacion') ?' active' : '' }} text-sm" href="{{ route('fi.formacion.nuevo', $todoxxxx['pestpara'][0]) }}">4. Escuela</a></li>
            @endcanany
            @canany(['ficomposicion-leer', 'ficomposicion-crear', 'ficomposicion-editar', 'ficomposicion-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='ficomposicion') ?' active' : '' }} text-sm" href="{{ route('ficomposicion', $todoxxxx['pestpara'][0]) }}">5. Composición Familiar</a></li>
            @endcanany
            @canany(['fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fisalud') ?' active' : '' }} text-sm" href="{{ route('fisalud.nuevo', $todoxxxx['pestpara'][0]) }}">6. Salud</a></li>
            @endcanany
            @canany(['fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fiingresos') ?' active' : '' }} text-sm" href="{{ route('fiingresos.nuevo', $todoxxxx['pestpara'][0]) }}">7. Generación de Ingresos</a></li>
            @endcanany
            @canany(['fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fiactividades') ?' active' : '' }} text-sm" href="{{ route('fiactividades.nuevo', $todoxxxx['pestpara'][0]) }}">8. Actividades de Tiempo Libre</a></li>
            @endcanany
            @canany(['firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='firedapoyo') ?' active' : '' }} text-sm" href="{{ route('firedapoyo', $todoxxxx['pestpara'][0]) }}">9. Redes de Apoyo</a></li>
            @endcanany
            @if($todoxxxx['usuariox']->prm_tipoblaci_id == 651)
            @canany(['fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fijusticia') ?' active' : '' }} text-sm" href="{{ route('fijusticia.nuevo', $todoxxxx['pestpara'][0]) }}">10. Justicia Restaurativa</a></li>
            @endcanany
            @endif
            @canany(['ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='ficonsumo') ?' active' : '' }} text-sm" href="{{ route('ficonsumo.nuevo', $todoxxxx['pestpara'][0]) }}">11. Consumo SPA</a></li>
            @endcanany
            @canany(['fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fiviolencia') ?' active' : '' }} text-sm" href="{{ route('fiviolencia.nuevo', $todoxxxx['pestpara'][0]) }}">12. Violencias y Condición Especial</a></li>
            @endcanany
            @canany(['fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fisituacion') ?' active' : '' }} text-sm" href="{{ route('fisituacion.nuevo', $todoxxxx['pestpara'][0]) }}">13. Tipo de Población</a></li>
            @endcanany
            @canany(['ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='ficontacto') ?' active' : '' }} text-sm" href="{{ route('ficontacto.nuevo', $todoxxxx['pestpara'][0]) }}">14. Contacto con IDIPRON y Tratamiento de Datos</a></li>
            @endcanany
            @canany(['fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fibienvenida') ?' active' : '' }} text-sm" href="{{ route('fibienvenida.nuevo', $todoxxxx['pestpara'][0]) }}">15. Bienvenida</a></li>
            @endcanany
            @canany(['fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fiautorizacion') ?' active' : '' }} text-sm" href="{{ route('fiautorizacion.nuevo', $todoxxxx['pestpara'][0]) }}">16. Autorización</a></li>
            @endcanany
            @canany(['firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='firazones') ?' active' : '' }} text-sm" href="{{ route('firazones.nuevo', $todoxxxx['pestpara'][0]) }}">17. Razones para Entrar al IDIPRON</a></li>
            @endcanany

            @endif
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                {{ $crudxxxx }} <!-- nombre que se le data en pestanias de la carpeta Acrud -->
            </div>
        </div>
    </div>
</div>
