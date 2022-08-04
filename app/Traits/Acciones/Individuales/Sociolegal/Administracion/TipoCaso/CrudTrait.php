<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\Administracion\TipoCaso;


use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setDiagnostico($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxy = $dataxxxx['requestx']->all();
                $arrayxx =
                    [
                        "s_cursos" => $dataxxxy['s_cursos'],
                        "descripcion" =>  $dataxxxy['descripcion'],
                        "grado_reque_id" =>  $dataxxxy['grado_reque_id'],
                        "tipo_curso_id" =>  $dataxxxy['tipo_curso_id'],
                        "sis_esta_id" =>  $dataxxxy['sis_esta_id'],
                        "estusuario_id" =>  $dataxxxy['estusuario_id'],
                        "user_edita_id" =>  $dataxxxy['user_edita_id'],
                        "user_crea_id" =>  $dataxxxy['user_crea_id']
                    ];


                $dataxxxx['modeloxx'] = Diagnostico::create($arrayxx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
