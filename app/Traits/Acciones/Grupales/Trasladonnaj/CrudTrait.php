<?php

namespace App\Traits\Acciones\Grupales\Trasladonnaj;

use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use App\Models\Simianti\Sis\SisMultivalore;
use app\Models\sistema\SisServicio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    public function getUpiSimi($dataxxxx)
    {
        $servicio = $dataxxxx['padrexxx']->prm_serv->simianti_id;
        $creaupix = [];
        $creaupix['id_upi_nnaj'] = GeUpiNnaj::orderby('id_upi_nnaj', 'desc')->first()->id_upi_nnaj + 1;
        $creaupix['estado'] = 'A';
        $creaupix['id_upi'] = $dataxxxx['padrexxx']->trasupi->simianti_id;
        $creaupix['id_nnaj'] = $dataxxxx['modeloxx']->sis_nnaj->simianti_id;
        $creaupix['motivo'] = 'prueba simi nuevo';
        $creaupix['tiempo'] = 0;
        $creaupix['modalidad'] = $servicio;
        $creaupix['anio'] = 0;
        $creaupix['fecha_egreso'] = null;
        $creaupix['fecha_ingreso'] = $dataxxxx['padrexxx']->fecha;
        $creaupix['fecha_insercion'] = $dataxxxx['padrexxx']->fecha;
        $creaupix['usuario_insercion'] = Auth::user()->s_documento;
        $creaupix['usuario_modificacion'] = Auth::user()->s_documento;
        $creaupix['id_valoracion_inicial'] = 0;
        $creaupix['fuente'] = 'FI';
        $creaupix['origen'] = 'Remision Búsqueda Áctiva';
        $creaupix['servicio'] =  $servicio;
        $creaupix['flag'] = null;
        $creaupix['estado_compartido'] = 'S';

        $upiservi = GeUpiNnaj::create($creaupix);
        return $upiservi;
    }

    public function getNnajSimi($dataxxxx)
    {
        
        if ($dataxxxx['modeloxx']->sis_nnaj->simianti_id < 1) {
            $simianti = GeNnajDocumento::where('numero_documento',$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_docu->s_documento)->first();
            
            if($simianti!=null){
            $dataxxxx['modeloxx']->sis_nnaj->update([
                'simianti_id' => $simianti->id_nnaj,
                'usuario_insercion' => Auth::user()->s_documento,
            ]);
            $dataxxxx['modeloxx']->sis_nnaj->simianti_id = $simianti->id_nnaj;
         
            }
        }
        return $dataxxxx;
    }

    public function crearUpi($dataxxxx)
    {
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['sis_nnaj_id'] = $dataxxxx['modeloxx']->sis_nnaj_id;
        $dataxxxx['prm_principa_id'] = 227;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $servicio = [
            'sis_servicio_id' => $dataxxxx['sis_servicio_id'],
            'prm_principa_id' => 227,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1
        ];
        $objetoxx = NnajUpi::create($dataxxxx);
        $servicio['nnaj_upi_id'] = $objetoxx->id;
        NnajDese::create($servicio);
        return $objetoxx;
    }



    public  function setUpiTrasladoGeneral($dataxxxx) // $objetoxx=datos basicos
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            // * Encontrar las upis del nnaj
            $objetoxx = NnajUpi::where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)
                ->get();
            $upientra = NnajUpi::where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)
                ->where('sis_depen_id', $dataxxxx['sis_depen_id'])->first();
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            // el nnaj tiene upis asignadas
            if (isset($objetoxx)) {
                //recorrer las upuis asignadas
                foreach ($objetoxx as $d) {
                    // upis diferentes a la que se va asiganr
                    if ($d->sis_depen_id != $dataxxxx['sis_depen_id'] && $upientra == null) {

                        $upientra = $this->crearUpi($dataxxxx);
                    }
                    if ($d->sis_depen_id != $dataxxxx['sis_depen_id']) { // se deja como principal

                        $d->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);

                        foreach ($d->nnaj_deses as $key => $value) {

                            $value->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                        }
                    } else { // se deja se quita como principal

                        $dataxxxx['sis_esta_id'] = 1;
                        $dataxxxx['prm_principa_id'] = 227;
                        $d->update($dataxxxx);  // * Se actualiza la nnaj_upi
                        // * Se consulta el servicio que llega con la nnaj_upi


                        $servent = NnajDese::where('nnaj_upi_id', $d->id)->where('sis_servicio_id', $dataxxxx['sis_servicio_id'])->first();

                        if (is_null($servent)) { // * En caso de ser nula la consulta, se crea el nnajdese
                            NnajDese::create([
                                'sis_servicio_id' => $dataxxxx['sis_servicio_id'],
                                'prm_principa_id' => 227,
                                'user_crea_id' => Auth::user()->id,
                                'user_edita_id' => Auth::user()->id,
                                'nnaj_upi_id' => $d->id,
                                'sis_esta_id' => 1
                            ]);
                        }
                        // * Se realiza una consulta de los servicios de la nnaj_upi
                        $servent = NnajDese::where('nnaj_upi_id', $d->id)->get();
                        // * Luego se realiza un foreach por cada servicio
                        foreach ($servent as $key => $value) {
                            // * Se realiza comparacion con el servicio que se trae
                            if ($value->sis_servicio_id == $dataxxxx['sis_servicio_id']) {
                                // * Aqui se realiza actualizacion si el servicio se encuentra
                                $value->update(['sis_esta_id' => 1, 'prm_principa_id' => 227, 'user_edita_id' => Auth::user()->id]);
                            } else {
                                // * Aqui se realiza actualizacion en donde se inactiva
                                $value->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                            }
                        }
                    }
                }
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }


    public  function setUpiTrasladoGeneralServicio($dataxxxx) // $objetoxx=datos basicos
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = NnajUpi::where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)
                ->where('sis_depen_id', $dataxxxx['sis_depen_id'])->get();
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            // el nnaj tiene upis asignadas
            if (!is_null($objetoxx)) {
                //recorrer las upuis asignadas
                foreach ($objetoxx as $d) {
                    // upis diferentes a la que se va asiganr
                    if ($d->sis_depen_id != $dataxxxx['sis_depen_id']) { // se deja como principal
                        $d->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                        foreach ($d->nnaj_deses as $key => $value) {
                            $value->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                        }
                    } else { // se deja se quita como principal
                        $dataxxxx['sis_esta_id'] = 1;
                        $dataxxxx['prm_principa_id'] = 227;
                        $d->update($dataxxxx);  // * Se actualiza la nnaj_upi
                        // * Se consulta el servicio que llega con la nnaj_upi
                        $servent = NnajDese::where('nnaj_upi_id', $d->id)->where('sis_servicio_id', $dataxxxx['sis_servicio_id'])->first();
                        if (is_null($servent)) { // * En caso de ser nula la consulta, se crea el nnajdese
                            NnajDese::create([
                                'sis_servicio_id' => $dataxxxx['sis_servicio_id'],
                                'prm_principa_id' => 227,
                                'user_crea_id' => Auth::user()->id,
                                'user_edita_id' => Auth::user()->id,
                                'nnaj_upi_id' => $d->id,
                                'sis_esta_id' => 1
                            ]);
                        }
                        // * Se realiza una consulta de los servicios de la nnaj_upi
                        $servent = NnajDese::where('nnaj_upi_id', $d->id)->get();
                        // * Luego se realiza un foreach por cada servicio
                        foreach ($servent as $key => $value) {
                            // * Se realiza comparacion con el servicio que se trae
                            if ($value->sis_servicio_id == $dataxxxx['sis_servicio_id']) {
                                // * Aqui se realiza actualizacion si el servicio se encuentra
                                $value->update(['sis_esta_id' => 1, 'prm_principa_id' => 227, 'user_edita_id' => Auth::user()->id]);
                            } else {
                                // * Aqui se realiza actualizacion en donde se inactiva
                                $value->update(['sis_esta_id' => 2, 'prm_principa_id' => 228, 'user_edita_id' => Auth::user()->id]);
                            }
                        }
                    }
                }
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }





    public function setUpiTrasladoCompartido($dataxxxx) // $objetoxx=datos basicos
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = NnajUpi::where('sis_depen_id', $dataxxxx['sis_depen_id'])
                ->where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)
                ->first();

            $servicio = null;
            if ($objetoxx != null) {
                $servicio = NnajDese::where('sis_servicio_id', $dataxxxx['sis_servicio_id'])
                    ->where('nnaj_upi_id', $objetoxx->id)->first();
            }

            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($objetoxx->id)) {
                $dataxxxx['sis_esta_id'] = 1;
                $objetoxx->update($dataxxxx);
                if ($servicio == null) {
                    NnajDese::create([
                        'sis_servicio_id' => $dataxxxx['sis_servicio_id'],
                        'prm_principa_id' => 227,
                        'user_crea_id' => Auth::user()->id,
                        'user_edita_id' => Auth::user()->id,
                        'nnaj_upi_id' => $objetoxx->id,
                        'sis_esta_id' => 1
                    ]);
                } else {
                    $dataxxxx['sis_esta_id'] = 1;
                    $dataxxxx['user_crea_id'] = Auth::user()->id;
                    $servicio->update($dataxxxx);
                }
            } else {
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['sis_nnaj_id'] = $dataxxxx['modeloxx']->sis_nnaj_id;
                $dataxxxx['prm_principa_id'] = 228;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = NnajUpi::create($dataxxxx);
                NnajDese::setServicioDatosBasicos($dataxxxx,  $objetoxx);
            }


            return $objetoxx;
        }, 5);
        return $objetoxx;
    }

    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setTrasnnaj($dataxxxx)
    {

        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $dataxxxx['sis_depen_id'] = $dataxxxx['padrexxx']->prm_trasupi_id;
        
            $dataxxxx['sis_servicio_id'] = $dataxxxx['padrexxx']->prm_serv_id;
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = TrasladoNnaj::create($dataxxxx['requestx']->all());
            }
            if ($dataxxxx['padrexxx']->tipotras_id == 2642) {
                $this->setUpiTrasladoCompartido($dataxxxx);
                $this->getNNAJSimiAntiCompartido($dataxxxx);
            } else {
                if ($dataxxxx['padrexxx']->remision_id == 2637) {
                    $this->setUpiTrasladoGeneralServicio($dataxxxx);
                     $this->getNNAJSimiAntiGeneralServicio($dataxxxx);
                } else {
                    $this->setUpiTrasladoGeneral($dataxxxx);
                    $this->getNNAJSimiAntiGeneral($dataxxxx);
                    if($dataxxxx['padrexxx']->prm_trasupi_id==37&&$dataxxxx['padrexxx']->prm_serv_id==8){
                        $this->SetMatriculaEgreso($dataxxxx);
                    }
                }
            }
            
            
            $nnajs = TrasladoNnaj::select('id')->where('traslado_id', $dataxxxx['padrexxx']->id)->get();
            $dataxxxx['padrexxx']->update(['trasladototal' => count($nnajs)]);
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }


    public function getNNAJSimiAntiCompartido($dataxxxx)
    {
        $servicio = $dataxxxx['padrexxx']->prm_serv->simianti_id;
        $queryxxx = GeNnajDocumento::where('numero_documento',$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_docu->s_documento)->first();
        $upiservi= null;
        if($queryxxx!=null){
            $upiservi = GeUpiNnaj::where('id_nnaj', $queryxxx->id_nnaj)->where('id_upi', $dataxxxx['padrexxx']->trasupi->simianti_id)->where('servicio',$servicio)->first();
        if (isset($upiservi)) {
            $dataxxxx['estado'] = 'A';
            $dataxxxx['motivo'] = 'prueba simi nuevo';
            $dataxxxx['fecha_modificacion'] = $dataxxxx['padrexxx']->fecha;
            $upiservi->update($dataxxxx);
           
        } else {
            $dataxxxx['id_upi_nnaj'] = GeUpiNnaj::orderby('id_upi_nnaj', 'desc')->first()->id_upi_nnaj + 1;
            $dataxxxx['estado'] = 'A';
            $dataxxxx['id_upi'] = $dataxxxx['padrexxx']->trasupi->simianti_id;
            $dataxxxx['id_nnaj'] = $queryxxx->id_nnaj;
            $dataxxxx['motivo'] = 'prueba simi nuevo';
            $dataxxxx['tiempo'] = 0;
            $dataxxxx['modalidad'] = $servicio;
            $dataxxxx['anio'] = 0;
            $dataxxxx['fecha_insercion'] = $dataxxxx['padrexxx']->fecha;
            $dataxxxx['fecha_egreso'] = null;
            $dataxxxx['fecha_ingreso'] = $dataxxxx['padrexxx']->fecha;
            $creaupix['usuario_insercion'] = Auth::user()->s_documento;
            $creaupix['usuario_modificacion'] = Auth::user()->s_documento;
            $dataxxxx['id_valoracion_inicial'] = 0;
            $dataxxxx['fuente'] = 'FI';
            $dataxxxx['origen'] = 'Remision Búsqueda Áctiva';
            $dataxxxx['servicio'] = $servicio;
            $dataxxxx['flag'] = null;
            $dataxxxx['estado_compartido'] = 'S';
            $upiservi = GeUpiNnaj::create($dataxxxx);
        }
     }
    }

    /**
     * Inactivar las upis que tiene asignadas el nnaj
     *
     * @param object $queryxxx
     * @return void
     */
    public function setInactivaUpi($dataxxxx)
    {
        // * Se buscan las upis que tiene el nnaj
        
        $upiservi = GeUpiNnaj::where('id_nnaj', $dataxxxx['modeloxx']->sis_nnaj->simianti_id)->get();
        // * Recorrer las upis encontradas
        foreach ($upiservi as $upisnnaj) {
            // * Armar array para la actualización
            $upiservi = [
                'estado' => 'I',
                'usuario_modificacion' => Auth::user()->s_documento,
            ];
            // * Actualizar la upi con el estado I=Inactivo
            $upisnnaj->update($upiservi);
        }
    }




    public function SetMatriculaEgreso($dataxxxx)
    {
        // * Se buscan las upis que tiene el nnaj
            $matricula= IMatriculaNnaj::where('sis_nnaj_id', $dataxxxx['modeloxx']->sis_nnaj_id)->get();
                foreach ($matricula as $nnajmat) {
                    // * Armar array para la actualización
                    $matricula = [
                        'sis_esta_id' => 2,
                        'user_edita_id' => Auth::user()->id,
                    ];
                    // * Actualizar la matricula con el estado inactivo
                    $nnajmat->update($matricula);
                    }
    }
    /**
     * Encontrar el id del nnaj en el desarrollo antiguo
     *
     * @param array $dataxxxx
     * @return array $dataxxxx
     */

    public function setInactivaUpiServicio($dataxxxx)
    {
        // * Se buscan las upis que tiene el nnaj
        
        $upiservi = GeUpiNnaj::where('id_nnaj', $dataxxxx['modeloxx']->sis_nnaj->simianti_id)->where('id_upi', $dataxxxx['padrexxx']->trasupi->simianti_id)->get();
        // * Recorrer las upis encontradas
        foreach ($upiservi as $upisnnaj) {
            // * Armar array para la actualización
            $upiservi = [
                'estado' => 'I',
                'usuario_modificacion' => Auth::user()->s_documento,
            ];
            // * Actualizar la upi con el estado I=Inactivo
            $upisnnaj->update($upiservi);
        }
    }

    public function getNNAJSimiAntiGeneral($dataxxxx)
    {
        $dataxxxx = $this->getNnajSimi($dataxxxx);
      
        if($dataxxxx['modeloxx']->sis_nnaj->simianti_id > 1){
        $this->setInactivaUpi($dataxxxx);
        $upixxxxx = GeUpiNnaj::where('id_nnaj', $dataxxxx['modeloxx']->sis_nnaj->simianti_id)
        ->where('id_upi',$dataxxxx['padrexxx']->trasupi->simianti_id)
        ->first();
        if (!is_null($upixxxxx)) {
            $servicio=SisServicio::find($dataxxxx['sis_servicio_id']);
            $upixxxxx->update([
                'estado' => 'A',
                'usuario_modificacion' => User::find(1)->s_documento,
                'modalidad'=>$servicio->simianti_id,
                'servicio'=>$servicio->simianti_id,
            ]);
        } else {
            $this->getUpiSimi($dataxxxx);
        }
      }
    }

    public function getNNAJSimiAntiGeneralServicio($dataxxxx)
    {
        $dataxxxx = $this->getNnajSimi($dataxxxx);
        
        if($dataxxxx['modeloxx']->sis_nnaj->simianti_id > 1){
        
        $this->setInactivaUpiServicio($dataxxxx);
        $upixxxxx = GeUpiNnaj::where('id_nnaj', $dataxxxx['modeloxx']->sis_nnaj->simianti_id)
        ->where('id_upi',$dataxxxx['padrexxx']->trasupi->simianti_id)
        ->where('servicio',$dataxxxx['padrexxx']->prm_serv->simianti_id)
        ->where('estado','A')
        ->first();
        
        if (!is_null($upixxxxx)) {
            $servicio=SisServicio::find($dataxxxx['sis_servicio_id']);
            $upixxxxx->update([
                'estado' => 'A',
                'usuario_modificacion' => User::find(1)->s_documento,
                'modalidad'=>$servicio->simianti_id,
                'servicio'=>$servicio->simianti_id,
            ]);
  
        } else {
            $this->getUpiSimi($dataxxxx);
        }
    }
    }
}

