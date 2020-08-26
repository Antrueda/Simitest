<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiViolencia extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_tip_vio_id',
        'prm_fam_fis_id',
        'prm_fam_psi_id',
        'prm_fam_sex_id',
        'prm_fam_eco_id',
        'prm_amicol_fis_id',
        'prm_amicol_psi_id',
        'prm_amicol_sex_id',
        'prm_amicol_eco_id',
        'prm_par_fis_id',
        'prm_par_psi_id',
        'prm_par_sex_id',
        'prm_par_eco_id',
        'prm_compar_fis_id',
        'prm_compar_psi_id',
        'prm_compar_sex_id',
        'prm_compar_eco_id',
        'prm_ins_fis_id',
        'prm_ins_psi_id',
        'prm_ins_sex_id',
        'prm_ins_eco_id',
        'prm_lab_fis_id',
        'prm_lab_psi_id',
        'prm_lab_sex_id',
        'prm_lab_eco_id',
        'prm_dis_gen_id',
        'prm_dis_ori_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi()
    {
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function tipoViolencia()
    {
        return $this->belongsTo(Parametro::class, 'prm_tip_vio_id');
    }
    //Violencia familiar
    public function familiarFisica()
    {
        return $this->belongsTo(Parametro::class, 'prm_fam_fis_id');
    }

    public function familiarPsicologica()
    {
        return $this->belongsTo(Parametro::class, 'prm_fam_psi_id');
    }

    public function familiarSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_fam_sex_id');
    }

    public function familiarEconomica()
    {
        return $this->belongsTo(Parametro::class, 'prm_fam_eco_id');
    }

    //Violencia amigos/colegio
    public function amigosColegioFisica()
    {
        return $this->belongsTo(Parametro::class, 'prm_amicol_fis_id');
    }

    public function amigosColegioPsicologica()
    {
        return $this->belongsTo(Parametro::class, 'prm_amicol_psi_id');
    }

    public function amigosColegioSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_amicol_sex_id');
    }

    public function amigosColegioEconomica()
    {
        return $this->belongsTo(Parametro::class, 'prm_amicol_eco_id');
    }

    //Violencia de pareja
    public function parejaFisica()
    {
        return $this->belongsTo(Parametro::class, 'prm_par_fis_id');
    }

    public function parejaPsicologica()
    {
        return $this->belongsTo(Parametro::class, 'prm_par_psi_id');
    }

    public function parejaSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_par_sex_id');
    }

    public function parejaEconomica()
    {
        return $this->belongsTo(Parametro::class, 'prm_par_eco_id');
    }

    //Violecia comunidad/parche
    public function comunidadParcheFisica()
    {
        return $this->belongsTo(Parametro::class, 'prm_compar_fis_id');
    }

    public function comunidadParchePsicologica()
    {
        return $this->belongsTo(Parametro::class, 'prm_compar_psi_id');
    }

    public function comunidadParcheSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_compar_sex_id');
    }

    public function comunidadParcheEconomica()
    {
        return $this->belongsTo(Parametro::class, 'prm_compar_eco_id');
    }

    //Violencia institucional
    public function institucionalFisica()
    {
        return $this->belongsTo(Parametro::class, 'prm_ins_fis_id');
    }

    public function institucionalPsicologica()
    {
        return $this->belongsTo(Parametro::class, 'prm_ins_psi_id');
    }

    public function institucionalSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_ins_sex_id');
    }

    public function institucionalEconomica()
    {
        return $this->belongsTo(Parametro::class, 'prm_ins_eco_id');
    }

    //VIolencia laboral
    public function laboralFisica()
    {
        return $this->belongsTo(Parametro::class, 'prm_lab_fis_id');
    }

    public function laboralPsicologica()
    {
        return $this->belongsTo(Parametro::class, 'prm_lab_psi_id');
    }

    public function laboralSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_lab_sex_id');
    }

    public function laboralEconomica()
    {
        return $this->belongsTo(Parametro::class, 'prm_lab_eco_id');
    }

    public function discrinadoGenero()
    {
        return $this->belongsTo(Parametro::class, 'prm_dis_gen_id');
    }

    public function discrinadoOrientacion()
    {
        return $this->belongsTo(Parametro::class, 'prm_dis_ori_id');
    }

    public function contextos()
    {
        return $this->belongsToMany(Parametro::class, 'vsi_vio_contexto', 'vsi_violencia_id', 'parametro_id');
    }

    public function tipos()
    {
        return $this->belongsToMany(Parametro::class, 'vsi_vio_tipo', 'vsi_violencia_id', 'parametro_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            if ($dataxxxx['requestx']->prm_tip_vio_id == 228) {
                $dataxxxx['requestx']->prm_fam_fis_id = null;
                $dataxxxx['requestx']->prm_fam_psi_id = null;
                $dataxxxx['requestx']->prm_fam_sex_id = null;
                $dataxxxx['requestx']->prm_fam_eco_id = null;
                $dataxxxx['requestx']->prm_amicol_fis_id = null;
                $dataxxxx['requestx']->prm_amicol_psi_id = null;
                $dataxxxx['requestx']->prm_amicol_sex_id = null;
                $dataxxxx['requestx']->prm_amicol_eco_id = null;
                $dataxxxx['requestx']->prm_par_fis_id = null;
                $dataxxxx['requestx']->prm_par_psi_id = null;
                $dataxxxx['requestx']->prm_par_sex_id = null;
                $dataxxxx['requestx']->prm_par_eco_id = null;
                $dataxxxx['requestx']->prm_compar_fis_id = null;
                $dataxxxx['requestx']->prm_compar_psi_id = null;
                $dataxxxx['requestx']->prm_compar_sex_id = null;
                $dataxxxx['requestx']->prm_compar_eco_id = null;
                $dataxxxx['requestx']->prm_ins_fis_id = null;
                $dataxxxx['requestx']->prm_ins_psi_id = null;
                $dataxxxx['requestx']->prm_ins_sex_id = null;
                $dataxxxx['requestx']->prm_ins_eco_id = null;
                $dataxxxx['requestx']->prm_lab_fis_id = null;
                $dataxxxx['requestx']->prm_lab_psi_id = null;
                $dataxxxx['requestx']->prm_lab_sex_id = null;
                $dataxxxx['requestx']->prm_lab_eco_id = null;
                $dataxxxx['requestx']->prm_dis_gen_id = null;
                $dataxxxx['requestx']->prm_dis_ori_id = null;
            }

            if (!$dataxxxx['requestx']->prm_dis_gen_id || $dataxxxx['requestx']->prm_dis_gen_id == 228) {
                $request["contextos"] = null;
            }
            if (!$dataxxxx['requestx']->prm_dis_ori_id || $dataxxxx['requestx']->prm_dis_ori_id == 228) {
                $request["tipos"] = null;
            }

            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = VsiViolencia::create($dataxxxx['requestx']->all());
            }
            if ($dataxxxx['requestx']->contextos) {
                foreach ($dataxxxx['requestx']->contextos as $d) {
                    $dataxxxx['modeloxx']->contextos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            if ($dataxxxx['requestx']->tipos) {
                foreach ($dataxxxx['requestx']->tipos as $d) {
                    $dataxxxx['modeloxx']->tipos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
