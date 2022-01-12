<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Archivos\Archivos;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Tema;
use App\Models\Temacombo;

class FiDocumentosAnexa extends Model
{

    protected $fillable = [
        'sis_nnaj_id',
        'i_prm_documento_id',

        'user_crea_id',
        'user_edita_id',
        's_ruta',
        'sis_esta_id'
    ];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function documentos($padrexxx)
    {
        $vestuari = ['docanexa' => FiDocumentosAnexa::where('sis_nnaj_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['docanexa'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }

    public static function setDocumento($objetoxx, $dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $datosxxx = [
                'sis_nnaj_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            // dd($dataxxxx);
            FiDocumentosAnexa::where('sis_nnaj_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['i_prm_documento_anexa_id'] as $diagener) {
                $datosxxx['i_prm_documento_anexa_id'] = $diagener;
                FiDocumentosAnexa::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }

    public static function transaccion($dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx) {
            $rutaxxxx = Archivos::getRuta([
                'requestx' => $dataxxxx['requestx'],
                'nombarch' => 's_doc_adjunto_ar',
                'rutaxxxx' => 'fi/razones', 'nomguard' => 'razones'
            ]);
            if ($rutaxxxx != false) {

                $dataxxxx['requestx']->request->add(['s_ruta' => $rutaxxxx]);
            }
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = FiDocumentosAnexa::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $usuariox;
    }

    /**
     * crear combo de los documentos que falten para asignar al cargue de informacion
     *
     * @param  $dataxxxx contiene los datos de parametrizacion del combo
     * @return $comboxxx
     */
    public static function comboTema($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }



        $temaxxxy = Temacombo::select(['parametros.id as valuexxx', 'parametros.nombre as optionxx'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
       /*     ->whereNotIn(
                'parametros.id',
                FiDocumentosAnexa::select('i_prm_documento_id')
                    ->where('sis_nnaj_id', $dataxxxx['nnajxxxx'])
                    ->whereNotIn('i_prm_documento_id', $dataxxxx['selected'])
                    ->get()
            )*/
            ->where('temacombos.id', $dataxxxx['temaxxxx'])
            ->get();
        foreach ($temaxxxy as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
