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
                            ['data' => 's_area','name'             => 'areas.nombre as s_area'],
                            ['data' => 's_tipo','name'        => 'fos_tses.nombre as s_tipo'],
                            ['data' => 's_sub','name'    => 'fos_stses.nombre as s_sub'],
                            ['data' => 's_upi','name'             => 'sis_dependens.nombre as s_upi'],
                            ['data' => 'd_fecha_diligencia','name' => 'd_fecha_diligencia'],
                            ['data' => 'sis_esta_id','name'             => 'fos_datos_basicos.sis_esta_id'],
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