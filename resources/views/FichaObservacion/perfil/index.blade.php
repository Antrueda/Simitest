<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                {{-- ventanas --}}
                <div style="display:{{ $todoxxxx['disptabx'] }}">
                    <?php 
                        $todoxxxx['cabecera'] = [
                            ['td' => 'Id'],
                            ['td' => 'AREA'],
                            ['td' => 'SEGUIMIENTO'],
                            ['td' => 'SUB SEGUIMIENTO'],
                            ['td' => 'UPI'],
                            ['td' => 'FECHA'],
                            ['td' => 'ESTADO'],
                        ];
                        $todoxxxx['columnsx'] = [
                            ['data' => 'btns','name'               => 'btns'],
                            ['data' => 'id','name'                 => 'fos_datos_basicos.id'],
                            ['data' => 'Area','name'             => 'areas.nombre'],
                            ['data' => 'Seguimiento','name'        => 'sis_fos_tipo_seguimientos.nombre'],
                            ['data' => 'SubSeguimiento','name'    => 'sis_fos_sub_tipo_seguimientos.nombre'],
                            ['data' => 'UPI','name'             => 'sis_dependencias.nombre'],
                            ['data' => 'd_fecha_diligencia','name' => 'd_fecha_diligencia'],
                            ['data' => 'activo','name'             => 'fos_datos_basicos.activo'],
                        ];
                        $todoxxxx['tablname']='tbfichas';
                        $todoxxxx['urlxxxxx'] = 'api/fos/fichaobservacion'
                    ?>
                    @component('FichaObservacion.datatable.index', ['todoxxxx'=>$todoxxxx])
                        @slot('tableName')
                            tbfichas
                        @endslot
                    @endcomponent
                </div>
                @include('FichaObservacion.perfil.card')
                {{-- ventanas --}}
            </div>
            <div class="col-md-3">
                {{--  Info Basica --}}
                @include('FichaObservacion.perfil.infoBase')
            </div>
        </div>
    </div>
</section>