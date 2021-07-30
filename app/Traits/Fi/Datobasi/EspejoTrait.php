<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Models\Parametro;
use App\Models\sistema\AreaUser;
use App\Models\sistema\ParametroTema;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisDepeUsua;
use app\Models\sistema\SisUpzbarri;
use App\Models\Tema;
use App\Models\Temacombo;
use App\Models\User;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait EspejoTrait
{

    public function getParmetrosET($dataxxxx)
    {
        foreach (Parametro::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $estusuar = $value->estusuario_id;
            if ($estusuar == '') {
                $estusuar = 1;
            }
            echo " Parametro::create(['id'=> $value->id,'sis_esta_id' => $value->sis_esta_id, 'user_crea_id' => $value->user_crea_id, 'user_edita_id' => $value->user_edita_id, 'nombre' => '$value->nombre' ]);<br>";
        }
    }

    public function getTemasET($dataxxxx)
    {
        foreach (Tema::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $estusuar = $value->estusuario_id;
            if ($estusuar == '') {
                $estusuar = 1;
            }
            echo " Tema::create(['id'=> $value->id,'sis_esta_id' => $value->sis_esta_id, 'user_crea_id' => $value->user_crea_id, 'user_edita_id' => $value->user_edita_id, 'nombre' => '$value->nombre' ]);<br>";
        }
    }

    public function getTemacombosET($dataxxxx)
    {
        foreach (Temacombo::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {

            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "Temacombo::create([
                           'id'=>$value->id,
                           'nombre'=>'$value->nombre',
                           'tema_id'=>$value->tema_id,
                           'sis_tcampo_id'=>$value->sis_tcampo_id,
    
                                'user_crea_id'=>$value->user_crea_id,
                                'user_edita_id'=>$value->user_edita_id,
                                'sis_esta_id'=>$value->sis_esta_id
                            ]);<br>";
        }
    }

    public function getParametroTemasET($dataxxxx)
    {
        foreach (ParametroTema::orderBy('temacombo_id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {

            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "ParametroTema::create([
                    'parametro_id' => $value->parametro_id, 
                'temacombo_id' => $value->temacombo_id, 
                'simianti_id' => '$value->simianti_id', 
                'sis_esta_id' => $value->sis_esta_id, 
                'user_crea_id' => $value->user_crea_id, 
                'user_edita_id' => $value->user_edita_id]);<br>";
        }
    }

    public function getUpisET($dataxxxx)
    {
        foreach (SisDepen::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $estusuar = $value->estusuario_id;
            if ($estusuar == '') {
                $estusuar = 1;
            }
            echo  "SisDepen::create([
                'id'=>$value->id,
                'nombre'=>'$value->nombre',
                'i_prm_cvital_id'=>$value->i_prm_cvital_id,
                'i_prm_tdependen_id'=>$value->i_prm_tdependen_id,
                'i_prm_sexo_id'=>$value->i_prm_sexo_id,
                's_direccion'=>'$value->s_direccion',
                'sis_departam_id'=>$value->sis_departam_id,
                'sis_municipio_id'=>$value->sis_municipio_id,
                'estusuario_id'=>$estusuar,
                'simianti_id'=>$value->simianti_id,
                'sis_upzbarri_id'=>$value->sis_upzbarri_id,
                's_telefono'=>'$value->s_telefono',
                's_correo'=>'$value->s_correo',
                'itiestan'=>$value->itiestan,
                'itiegabe'=>$value->itiegabe,
                'itigafin'=>$value->itigafin,

                    'user_crea_id'=>$value->user_crea_id,
                    'user_edita_id'=>$value->user_edita_id,
                    'sis_esta_id'=>$value->sis_esta_id
                ]);<br>";
        }
    }

    public function getRolesET($dataxxxx)
    {
        foreach (Role::offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $estusuar = $value->estusuario_id;
            if ($estusuar == '') {
                $estusuar = 1;
            }
            echo " Role::create(['id'=>$value->id,'name' => '$value->name', 'user_crea_id' => $value->user_edita_id, 'user_edita_id' => $value->user_edita_id, 'sis_esta_id' => $value->sis_esta_id]);<br>";
        }
    }


    public function getSisBarrioET($dataxxxx)
    {
        foreach (SisBarrio::offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $estusuar = $value->estusuario_id;
            if ($estusuar == '') {
                $estusuar = 1;
            }
            echo  "SisBarrio::create([
                    'id'=>$value->id,
                    's_barrio'=>'$value->s_barrio',
                        'user_crea_id'=>$value->user_crea_id,
                        'user_edita_id'=>$value->user_edita_id,
                        'sis_esta_id'=>$value->sis_esta_id
                    ]);<br>";
        }
    }

    public function getUsuariosET($dataxxxx)
    {
        $usersxxx = User::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get();
        foreach ($usersxxx as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo ' User::create([
                "id" => ' . $value->id . ',
                "name" => "' . $value->name . '",
                "s_primer_nombre" => "' . $value->s_primer_nombre . '",
                "s_segundo_nombre" => "' . $value->s_segundo_nombre . '",
                "s_primer_apellido" => "' . $value->s_primer_apellido . '",
                "s_segundo_apellido" => "' . $value->s_segundo_apellido . '",
                "email" => "' . $value->email . '",
                "password" => "' . $value->s_documento . '",
                "sis_esta_id" => ' . $value->sis_esta_id . ',
                "user_crea_id" => ' . $value->user_crea_id . ',
                "user_edita_id" => ' . $useredit . ',
                "s_telefono" => "' . $value->s_telefono . '",
                "prm_tvinculacion_id" => ' . $value->prm_tvinculacion_id . ',
                "s_matriculap" => "' . $value->s_matriculap . '",
                "sis_cargo_id" => ' . $value->sis_cargo_id . ',
                "d_finvinculacion" =>  "' . $value->d_finvinculacion . '",
                "d_vinculacion" => "' . $value->d_vinculacion . '",
                "s_documento" => "' . $value->s_documento . '",
                "prm_documento_id" => ' . $value->prm_documento_id . ',
                "sis_municipio_id" => ' . $value->sis_municipio_id . ',
                "estusuario_id" => ' . ($value->estusuario_id != '' ? $value->estusuario_id : 1) . ',
                "itiestan" => ' . $value->itiestan . ',
                "itiegabe" => ' . $value->itiegabe . ',
                "itigafin" => ' . $value->itigafin . ',
                "password_change_at" => "' . $value->password_change_at . '",
                "password_reset_at" => "' . $value->password_reset_at . '",
                "polidato_at" => "' . $value->polidato_at . '",]); <br>';
        }
    }

    public function getFosTseET($dataxxxx)
    {
        foreach (FosTse::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "FosTse::create([
                'id'=>$value->id,
                'area_id'=>$value->area_id,
        'nombre'=>'$value->nombre',
        'estusuario_id'=>$value->estusuario_id,
        'descripcion'=>'$value->descripcion',
                    'user_crea_id'=>$value->user_crea_id,
                    'user_edita_id'=>$value->user_edita_id,
                    'sis_esta_id'=>$value->sis_esta_id
                ]);<br>";
        }
    }
    public function getFosStseET($dataxxxx)
    {
        foreach (FosStse::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "FosStse::create([
                        'id'=>$value->id,
                'nombre'=>'$value->nombre',
                'estusuario_id'=>$value->estusuario_id,
                'descripcion'=>'$value->descripcion',
                            'user_crea_id'=>$value->user_crea_id,
                            'user_edita_id'=>$value->user_edita_id,
                            'sis_esta_id'=>$value->sis_esta_id
                        ]);<br>";
        }
    }
    public function getFosSeguimientoET($dataxxxx)
    {
        foreach (FosSeguimiento::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "FosSeguimiento::create([
                        'id'=>$value->id,
                        'fos_tse_id'=>$value->fos_tse_id,
                        'fos_stses_id'=>$value->fos_stses_id,
                            'user_crea_id'=>$value->user_crea_id,
                            'user_edita_id'=>$value->user_edita_id,
                            'sis_esta_id'=>$value->sis_esta_id
                            ]);<br>";
        }
    }

    public function getSisUpzbarriET($dataxxxx)
    {
        foreach (SisUpzbarri::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "SisUpzbarri::create([
                        'id'=>$value->id,
                        'sis_localupz_id'=>$value->sis_localupz_id,
                        'sis_barrio_id'=>$value->sis_barrio_id,
                        'simianti_id'=>$value->simianti_id,
                            'user_crea_id'=>$value->user_crea_id,
                            'user_edita_id'=>$value->user_edita_id,
                            'sis_esta_id'=>$value->sis_esta_id
                        ]);<br>";
        }
    }

    public function getAreaUserET($dataxxxx)
    {
        foreach (AreaUser::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "AreaUser::create([
                       'id'=>$value->id,
                            'area_id'=>$value->area_id,
                            'user_id'=>$value->user_id,
                            'user_crea_id'=>$value->user_crea_id,
                            'user_edita_id'=>$value->user_edita_id,
                            'sis_esta_id'=>$value->sis_esta_id
                        ]);<br>";
        }
    }

    public function getSisDepeUsuaET($dataxxxx)
    {
        foreach (SisDepeUsua::orderBy('id', 'asc')
            ->offset($dataxxxx['hastaxxx'])
            ->limit($dataxxxx['desdexxx'])
            ->get() as $key => $value) {
            $useredit = $value->user_edita_id;
            if ($useredit > $value->id) {
                $useredit = 1;
            }
            echo  "SisDepeUsua::create([
                       'id'=>$value->id,
                            'sis_depen_id'=>$value->sis_depen_id,
                            'i_prm_responsable_id'=>$value->i_prm_responsable_id,
                            'user_id'=>$value->user_id,
                            'user_crea_id'=>$value->user_crea_id,
                            'user_edita_id'=>$value->user_edita_id,
                            'sis_esta_id'=>$value->sis_esta_id
                        ]);<br>";
        }
    }

   
    public function getEspejoET($opcionxx,$desdexxx,$hastaxxx)
    {

        $dataxxxx['desdexxx']=$desdexxx;
        $dataxxxx['hastaxxx']=$hastaxxx;
        switch ($opcionxx) {
            case 1: // parametros
                $this->getParmetrosET($dataxxxx);
                break;
            case 2: // temas
                $this->getTemasET($dataxxxx);
                break;
            case 3: // temacombos
                $this->getTemacombosET($dataxxxx);
                break;
            case 4: // parametro_temacombo
                $this->getParametroTemasET($dataxxxx);
                break;
        }
    }
}
