<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @canany(['aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='aiindex') ?' active' : '' }}
        text-sm" href="{{ route('ai.ver',$todoxxxx['usuariox']->sis_nnaj_id) }}">INDIVIDUALES</a></li>
            @endcanany
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2|| $todoxxxx['pestpadr']==3)
            @canany(['csdxxxxx-leer', 'csdxxxxx-crear', 'csdxxxxx-editar', 'csdxxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdxxxxx') ?' active' : '' }}
            text-sm" href="{{ route('csdxxxxx',$todoxxxx['usuariox']->sis_nnaj_id) }}">CSD</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==3)

            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>1,
            'tituloxx'=>'1. DATOS BÁSICOS',
            'permisox'=>'csdatbas',
            ])

            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>2,
            'tituloxx'=>'2. VIOLENCIA Y CONDICIÓN ESPECIAL',
            'permisox'=>'csdviolencia'
            ])
           
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>3,
            'tituloxx'=>'3. SITUACIONES ESPECIALES',
            'permisox'=>'csdsituacionespecial'
            ])

            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>4,
            'tituloxx'=>'4. JUSTICIA RESTAURATIVA',
            'permisox'=>'csdjusticia'
            ])
           
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>5,
            'tituloxx'=>'5. RESIDENCIA',
            'permisox'=>'csdresidencia'
            ])

            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>6,
            'tituloxx'=>'6. DINÁMICA FAMILIAR',
            'permisox'=>'csddinfamiliar'
            ])

            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>7,
            'tituloxx'=>'7. COMPOSICIÓN FAMILIAR',
            'permisox'=>'csdcomfamirobserva'
            ])
           
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>8,
            'tituloxx'=>'8. MOTIVOS DE VINCULACIÓN Y BIENVENIDA',
            'permisox'=>'csdbienvenida'
            ])
            
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>9,
            'tituloxx'=>'9. ALIMENTACIÓN DE LA FAMILIA',
            'permisox'=>'csdalimentacion'
            ])
            
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>10,
            'tituloxx'=>'10. GENERACIÓN DE INGRESOS',
            'permisox'=>'csdgeningresos'
            ])
            
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>11,
            'tituloxx'=>'11. REDES SOCIALES DE APOYO',
            'permisox'=>'csdredesapoyo'
            ])
           
            @include('Csd.Acomponentes.tabsxxxx.pestania',[
            'pestania'=>12,
            'tituloxx'=>'12. CONCLUSIONES',
            'permisox'=>'csdconclusiones'
            ])
       

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