<?php

namespace App\Traits\Administracion\Ubicacion;

use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisUpz;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function listaPaises(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'departam'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisPai::select([
                'sis_pais.id',
                'sis_pais.s_pais',
                'sis_pais.s_iso',
                'sis_pais.sis_esta_id',
                'sis_estas.s_estado',
            ])

                ->join('sis_estas', 'sis_pais.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }
    public function listaDepartamentos(Request $request,$padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'municipi'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisDepartam::select([
                'sis_departams.id',
                'sis_departams.s_departamento',
                'sis_departams.sis_esta_id',
                'sis_estas.s_estado',
            ])

                ->join('sis_estas', 'sis_departams.sis_esta_id', '=', 'sis_estas.id')
                ->where('sis_pai_id',$padrexxx);
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaMunicipios(Request $request,$padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'municipi'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisMunicipio::select([
                'sis_municipios.id',
                'sis_municipios.s_municipio',
                'sis_municipios.sis_esta_id',
                'sis_estas.s_estado',
            ])

                ->join('sis_estas', 'sis_municipios.sis_esta_id', '=', 'sis_estas.id')
                ->where('sis_departam_id',$padrexxx)
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }
    /**
     * listar localidades
     *
     * @param Request $request
     * @return void
     */
    public function listaLocalidades(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisLocalidad::select([
                'sis_localidads.id',
                'sis_localidads.s_localidad',
                'sis_localidads.sis_esta_id',
                'sis_estas.s_estado',
            ])

                ->join('sis_estas', 'sis_localidads.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    /**
     * listar upz's
     *
     * @param Request $request
     * @return void
     */
    public function listaUpzs(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisUpz::select([
                'sis_upzs.id',
                'sis_upzs.s_upz',
                'sis_upzs.sis_esta_id',
                'sis_estas.s_estado',
            ])

                ->join('sis_estas', 'sis_upzs.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    /**
     * listar upz's
     *
     * @param Request $request
     * @return void
     */
    public function listaBarrios(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisBarrio::select([
                'sis_barrios.id',
                'sis_barrios.s_barrio',
                'sis_barrios.sis_esta_id',
                'sis_estas.s_estado',
            ])

                ->join('sis_estas', 'sis_barrios.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }
}
