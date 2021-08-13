<?php

namespace App\Traits\Interfaz;

use App\Models\Simianti\Ge\FichaAcercamientoIngreso;
use App\Models\Simianti\Ge\GeNnaj;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use Illuminate\Support\Facades\Auth;
use App\Traits\Interfaz\HomologacionesSimiAtiguoTrait as HSAT;
use App\Traits\Interfaz\Nuevsimi\ActualizarNnajFiTrait;
use Illuminate\Support\Facades\DB;

/**
 * realizar la creación de nnaj
 *
 */
trait InterfazFiTrait
{
    use HSAT;
    use HomologacionesTrait;
    use CrearNnajSimiantiFiTrait;
    use BuscarNnajSimiantiFiTrait;
    use ActualizarNnajFiTrait;
    /**
     * consultar documento de identidad,
     * * en caso de que no exista lo crea
     *
     * @param array $dataxxxx
     * @return $document
     */
    public function setGeNnajDocumentoIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $respuest = [
                'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
                'tipo_documento' => $dataxxxx['nnajxxxx']->tipo_documento,
                'numero_documento' => $dataxxxx['padrexxx']->nnaj_docu->s_documento,
                'notaria' => '',
                'registraduria' => '',
                'id_lugar_expedicion' => $dataxxxx['padrexxx']->nnaj_docu->sis_municipio->simianti_id,
                'fecha_insercion' => date('Y-m-d'),
                'usuario_insercion' => Auth::user()->s_documento,
                'fecha_modificacion' => date('Y-m-d'),
                'usuario_modificacion' => Auth::user()->s_documento,
                'estado' => 'A',
            ];
            $document = GeNnajDocumento::where('numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)->first();
            if ($document == null) {
                $document = GeNnajDocumento::create($respuest);
            }
            return $document;
        }, 5);
        return $objetoxx;
    }

    /**
     * consulta la relacion del nnaj con el documento de identidad
     *
     * @param array $dataxxxx
     * @return $nnajxxxx
     */
    public function getGeNnajIFT($dataxxxx)
    {
        $nnajxxxx = GeNnaj::join('ge_nnaj_documento', 'ge_nnaj.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)->first();
        return $nnajxxxx;
    }

    /**
     * consultar y crar nnaj
     *
     * @param array $dataxxxx
     * @return $nnajxxxx
     */
    public function setGeNnajIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $nnajxxxx = GeNnaj::where('numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)->first();
            if ($nnajxxxx == null) {

                $datannaj = $this->getDataGeNnajCNSFT($dataxxxx);
                $nnajxxxx = GeNnaj::create($datannaj);
                $nnajactu = $dataxxxx['padrexxx']->sis_nnaj;
                $nnajactu->update(['simianti_id' => $nnajxxxx->id_nnaj, 'user_edita_id' => Auth::user()->id]);
            }
            return  $nnajxxxx;
        }, 5);
        return $objetoxx;
    }

    /**
     * asignarle la upi al nnaj en el antiguo simi
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setGeUpiNnajIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $upinnajx = GeUpiNnaj::where('id_nnaj', $dataxxxx['nnajxxxx']->id_nnaj)
                ->where('id_upi', $dataxxxx['dependen']->sis_depen->simianti_id)
                ->where('modalidad', $dataxxxx['servicio']->simianti_id)
                ->first();
            if ($upinnajx == null) {
                $maximoxx = GeUpiNnaj::select(['id_upi_nnaj'])->orderBy('id_upi_nnaj', 'DESC')->first()->id_upi_nnaj;
                $fillable = [
                    'id_upi_nnaj' => $maximoxx + 1,
                    'id_upi' => $dataxxxx['dependen']->sis_depen->simianti_id,
                    'modalidad' => $dataxxxx['servicio']->simianti_id,
                    'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
                    'fecha_insercion' => $dataxxxx['nnajxxxx']->fecha_insercion,
                    'usuario_insercion' => $dataxxxx['nnajxxxx']->usuario_insercion,
                    'fecha_modificacion' => $dataxxxx['nnajxxxx']->fecha_modificacion,
                    'usuario_modificacion' => $dataxxxx['nnajxxxx']->usuario_modificacion,
                    'estado' => 'A',
                ];
                GeUpiNnaj::create($fillable);
            }
        }, 5);
        return $objetoxx;
    }
    public function getFichaAcercamientoIngresoDataIFT($dataxxxx)
    {
        $fiacingr = FichaAcercamientoIngreso::select(['id'])->orderBy('id', 'DESC')->first();
        $dataxxxx = [
            'id' => $fiacingr->id + 1,
            'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
        ];
        return $dataxxxx;
    }
    public function setFichaAcercamientoIngresoIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = FichaAcercamientoIngreso::where('id_nnaj', $dataxxxx['nnajxxxx']->id_nnaj)->first();
            if ($objetoxx == null) {
                $objetoxx = FichaAcercamientoIngreso::create($this->getFichaAcercamientoIngresoDataIFT($dataxxxx));
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
    /**
     * crear nnaj en el antiguo simi, este método se llama en el metodo edit de FiController
     *
     * @param array $dataxxxx
     * @return object
     */
    public function setNnajAnguoSimiIFT($dataxxxx): object
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $nnajxxxx  = $this->getGeNnajIFT($dataxxxx); // buscar la cédula
            $padrexxx = $dataxxxx['padrexxx'];
            if ($nnajxxxx == null) {
                $dependen = $padrexxx->sis_nnaj->nnaj_upis->where('prm_principa_id', 227)->first();
                $servicio = $dependen->nnaj_deses->where('prm_principa_id', 227)->first();
                if ($servicio != null) {
                    $nnajxxxx = $this->setGeNnajIFT(['padrexxx' => $padrexxx]);
                    $document = $this->setGeNnajDocumentoIFT(['nnajxxxx' => $nnajxxxx, 'padrexxx' => $dataxxxx['padrexxx']]);
                    $this->setGeUpiNnajIFT(
                        [
                            'nnajxxxx' =>  $nnajxxxx,
                            'dependen' => $dependen,
                            'servicio' => $servicio->sis_servicio
                        ]
                    );
                }
            } else {
                $padrexxx = $this->pruebaANFT($dataxxxx);
            }
            return $padrexxx;
        }, 5);
        return $objetoxx;
    }
}
