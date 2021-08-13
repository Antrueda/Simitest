<?php

namespace App\Traits\Acciones\Grupales\Trasladonnaj;

use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajUpi;
use app\Models\sistema\SisServicio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{

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
            
                }else{
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
            } else {

                $this->setUpiTrasladoGeneral($dataxxxx);
            }
            $nnajs = TrasladoNnaj::select('id')->where('traslado_id', $dataxxxx['padrexxx']->id)->get();
            $dataxxxx['padrexxx']->update(['trasladototal' => count($nnajs)]);


            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
