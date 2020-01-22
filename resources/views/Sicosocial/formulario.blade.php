<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                UPI: {{ $vsi->dependencia->nombre }}
            </div>
            <div class="col-md-3">
                FECHA: {{ $vsi->fecha }}
            </div>
            <div class="col-md-1">
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('VSI.nnaj', $nnaj->id) }}">
                    Regresar
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs">
            @canany(['vsidatobasico-leer', 'vsidatobasico-crear', 'vsidatobasico-editar', 'vsidatobasico-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Basico') ?' active' : '' }}" href="{{ route('VSI.basico', $vsi->id) }}">
                        1. Datos básicos 
                        @if($vsi->VsiDatosVincula->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsibienvenida-leer', 'vsibienvenida-crear', 'vsibienvenida-editar', 'vsibienvenida-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Bienvenida') ?' active' : '' }}" href="{{ route('VSI.bienvenida', $vsi->id) }}">
                        2. Motivos de vinculación y bienvenida
                        @if($vsi->VsiBienvenida->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsirelfamiliar-leer', 'vsirelfamiliar-crear', 'vsirelfamiliar-editar', 'vsirelfamiliar-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='RelFamiliar') ?' active' : '' }} " href="{{ route('VSI.relfamiliar', $vsi->id) }}">
                        3. Relaciones familiares
                        @if($vsi->VsiRelFamiliar->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiviolencia-leer', 'vsiviolencia-crear', 'vsiviolencia-editar', 'vsiviolencia-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='Violencia') ?' active' : '' }}  " href=" {{ route('VSI.violencia', $vsi->id) }} ">
                        4. Violencias y condición especial
                        @if($vsi->VsiViolencia->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsidinfamiliar-leer', 'vsidinfamiliar-crear', 'vsidinfamiliar-editar', 'vsidinfamiliar-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='DinFamiliar') ?' active' : '' }}" href="{{ route('VSI.dinfamiliar', $vsi->id) }}">
                        5. Dinámica familiar
                        @if($vsi->VsiDinFamiliar->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsirelsocial-leer', 'vsirelsocial-crear', 'vsirelsocial-editar', 'vsirelsocial-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='RelSocial') ?' active' : '' }}" href=" {{ route('VSI.relsocial', $vsi->id) }} ">
                        6. Relaciones sociales 
                        @if($vsi->VsiRelSociales->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiredesapoyo-leer', 'vsiredesapoyo-crear', 'vsiredesapoyo-editar', 'vsiredesapoyo-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='RedesApoyo') ?' active' : '' }}" href=" {{ route('VSI.redesapoyo', $vsi->id) }} ">
                        7. Redes sociales de apoyo
                        @if($vsi->VsiRedSocial->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiantecedente-leer', 'vsiantecedente-crear', 'vsiantecedente-editar', 'vsiantecedente-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='Antecedente') ?' active' : '' }} " href="{{ route('VSI.antecedente', $vsi->id) }}">
                        8. Antecedentes
                        @if($vsi->VsiAntecedente->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsigeningresos-leer', 'vsigeningresos-crear', 'vsigeningresos-editar', 'vsigeningresos-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='genIngresos') ?' active' : '' }} " href=" {{ route('VSI.genIngresos', $vsi->id) }} ">
                        9. Generación de ingresos
                        @if($vsi->VsiGenIngreso->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsieducacion-leer', 'vsieducacion-crear', 'vsieducacion-editar', 'vsieducacion-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='Educacion') ?' active' : '' }} " href=" {{ route('VSI.educacion', $vsi->id) }} ">
                        10. Educación
                        @if($vsi->VsiEducacion->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar', 'vsisalud-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Salud') ?' active' : '' }}" href="{{ route('VSI.salud', $vsi->id) }}">
                        11. Antecedentes de salud
                        @if($vsi->VsiSalud->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiestemocional-leer', 'vsiestemocional-crear', 'vsiestemocional-editar', 'vsiestemocional-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='EstEmocional') ?' active' : '' }}" href=" {{ route('VSI.estemocional', $vsi->id) }} ">
                        12. Estado emocional
                        @if($vsi->VsiEstEmocional->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiactemocional-leer', 'vsiactemocional-crear', 'vsiactemocional-editar', 'vsiactemocional-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='ActEmocional') ?' active' : '' }}" href="{{ route('VSI.actemocional', $vsi->id) }}">
                        13. Activación emocional
                        @if($vsi->VsiActEmocional->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsipresabusosexual-leer', 'vsipresabusosexual-crear', 'vsipresabusosexual-editar', 'vsipresabusosexual-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='PresAbusoSexual') ?' active' : '' }}" href="{{ route('VSI.presabusosexual', $vsi->id) }}">
                        14. Presunto abuso sexual
                        @if($vsi->VsiAbuSexual->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsisituacionespecial-leer', 'vsisituacionespecial-crear', 'vsisituacionespecial-editar', 'vsisituacionespecial-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='SituacionEspecial') ?' active' : '' }}" href=" {{ route('VSI.situacionespecial', $vsi->id) }} ">
                        15. Situación especial y ESCNNA
                        @if($vsi->VsiSitEspecial->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiconsumo-leer', 'vsiconsumo-crear', 'vsiconsumo-editar', 'vsiconsumo-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link {{ ($accion=='Consumo') ?' active' : '' }} " href="{{ route('VSI.consumo', $vsi->id) }}">
                        16. Consumo de sustancias psicoactivas
                        @if($vsi->VsiConsumo->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsifactor-leer', 'vsifactor-crear', 'vsifactor-editar', 'vsifactor-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Factor') ?' active' : '' }}" href="{{ route('VSI.factor', $vsi->id) }}">
                        17. Factores
                        @if($vsi->VsiFacProtector->where('sis_esta_id', 1)->count()+$vsi->VsiFacRiesgo->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsimeta-leer', 'vsimeta-crear', 'vsimeta-editar', 'vsimeta-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Meta') ?' active' : '' }}" href="{{ route('VSI.meta', $vsi->id) }}">
                        18. Potencialidades y metas
                        @if($vsi->VsiPotencialidad->where('sis_esta_id', 1)->count()+$vsi->VsiMeta->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiareaajuste-leer', 'vsiareaajuste-crear', 'vsiareaajuste-editar', 'vsiareaajuste-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='AreaAjuste') ?' active' : '' }}" href="{{ route('VSI.areaajuste', $vsi->id) }}">
                        19. Áreas de ajuste sicosocial
                        @if($vsi->emocionales->where('sis_esta_id', 1)->count()+$vsi->sexuales->where('sis_esta_id', 1)->count()+$vsi->comportamentales->where('sis_esta_id', 1)->count()+$vsi->academicas->where('sis_esta_id', 1)->count()+$vsi->sociales->where('sis_esta_id', 1)->count()+$vsi->familiares->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiconcepto-leer', 'vsiconcepto-crear', 'vsiconcepto-editar', 'vsiconcepto-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Concepto') ?' active' : '' }}" href="{{ route('VSI.concepto', $vsi->id) }}">
                        20. Impresicón diagnóstica y análisis social
                        @if($vsi->VsiConcepto->where('sis_esta_id', 1)->count()+$vsi->VsiMeta->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
            @canany(['vsiconsentimiento-leer', 'vsiconsentimiento-crear', 'vsiconsentimiento-editar', 'vsiconsentimiento-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Consentimiento') ?' active' : '' }}" href="{{ route('VSI.consentimiento', $vsi->id) }}">
                        21. Consentimiento informado
                        @if($vsi->VsiConsentimiento->where('sis_esta_id', 1)->count()==0)
                            <span class="fas fa-times text-danger" aria-hidden="true"></span>
                        @else
                            <span class="fas fa-check text-success" aria-hidden="true"></span>
                        @endif
                    </a>
                </li>
            @endcanany
        </ul>
    </div>
</div>
@if($accion=='Basico')
    @include('Sicosocial.Basico.formulario')
@elseif($accion=='Bienvenida')
    @include('Sicosocial.Bienvenida.formulario')
@elseif($accion=='Violencia')
    @include('Sicosocial.Violencia.formulario')
@elseif($accion=='Educacion')
    @include('Sicosocial.Educacion.formulario')
@elseif($accion=='RelFamiliar')
    @include('Sicosocial.RelFamiliar.formulario')
@elseif($accion=='RelSocial')
    @include('Sicosocial.RelSocial.formulario')
@elseif($accion=='DinFamiliar')
    @include('Sicosocial.DinFamiliar.formulario')
@elseif($accion=='Salud')
    @include('Sicosocial.Salud.formulario')
@elseif($accion=='ActEmocional')
    @include('Sicosocial.ActEmocional.formulario')
@elseif($accion=='PresAbusoSexual')
    @include('Sicosocial.PresAbusoSexual.formulario')
@elseif($accion=='SituacionEspecial')
    @include('Sicosocial.SituacionEspecial.formulario')
@elseif($accion=='RedesApoyo')
    @include('Sicosocial.RedesApoyo.formulario')
@elseif($accion=='Antecedente')
    @include('Sicosocial.Antecedente.formulario')
@elseif($accion=='genIngresos')
    @include('Sicosocial.GenIngresos.formulario')
@elseif($accion=='EstEmocional')
    @include('Sicosocial.EstEmocional.formulario')
@elseif($accion=='Consumo')
    @include('Sicosocial.Consumo.formulario')
@elseif($accion=='Factor')
    @include('Sicosocial.Factor.formulario')
@elseif($accion=='Meta')
    @include('Sicosocial.Meta.formulario')
@elseif($accion=='AreaAjuste')
    @include('Sicosocial.AreaAjuste.formulario')
@elseif($accion=='Concepto')
    @include('Sicosocial.Concepto.formulario')
@elseif($accion=='Consentimiento')
    @include('Sicosocial.Consentimiento.formulario')
@endif