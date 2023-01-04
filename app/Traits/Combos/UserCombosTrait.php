<?php

namespace App\Traits\Combos;

use App\Models\sistema\SisDepen;
use App\Models\sistema\SisMunicipio;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait UserCombosTrait
{
    use EstructuraComboTrait;

    public function getDocNombreCompletoCargo($registro)
    {
        return $registro->s_documento . ' - ' . $registro->s_primer_nombre . ' ' . $registro->s_segundo_nombre . ' ' . $registro->s_primer_apellido . ' ' . $registro->s_segundo_apellido . ' - ' . $registro->s_cargo;
    }

    public function userComboRolUCT($dataxxxx)
    {
      
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera']=true;
        }
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx']=false;
        }       
        $comboxxx = $this->getCabecera($dataxxxx);
        $userxxxx = User::select(['users.id', 's_primer_nombre', 's_documento', 's_primer_apellido', 's_segundo_apellido', 's_segundo_nombre', 'sis_cargo_id','s_cargo'])->where(function ($queryxxx) use ($dataxxxx) {
            if (isset($dataxxxx['notinxxx'])) {
                $queryxxx->whereNotIn('users.id', $dataxxxx['notinxxx']);
            }
            $queryxxx->where('users.sis_esta_id', 1);
        })
        ->orWhere(function ($queryxxx) use ($dataxxxx) {
            $queryxxx->where('users.id',  $dataxxxx['usersele']);
        })
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('sis_cargos', 'users.sis_cargo_id', '=', 'sis_cargos.id')
            ->whereIn('model_has_roles.role_id', $dataxxxx['rolxxxxx'])
            ->groupBy('users.id', 's_primer_nombre', 's_documento', 's_primer_apellido', 's_segundo_apellido', 's_segundo_nombre', 'sis_cargo_id','s_cargo')
            ->orderBy('s_primer_nombre')
            ->orderBy('s_primer_apellido')
            ->get();
        foreach ($userxxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $this->getDocNombreCompletoCargo($registro)];
            } else {
                $comboxxx[$registro->id] = $this->getDocNombreCompletoCargo($registro);
            }
        }
        return $comboxxx;
    }

    /** listar todos o el usuario que se seleccionó */
    public function getUsuarioUCT($dataxxxx)
    {
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera']=true;
        }
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx']=false;
        }
        $comboxxx = $this->getCabecera($dataxxxx);
        $dataxxxx['dataxxxx'] = User::
        join('sis_cargos', 'users.sis_cargo_id', '=', 'sis_cargos.id')
        ->where(function ($queryxxx) use ($dataxxxx) {
            if ($dataxxxx['usersele'] > 0) { 
                $queryxxx->where('users.id', $dataxxxx['usersele']);
            }
        })->get(['users.id', 's_primer_nombre', 's_documento', 's_primer_apellido', 's_segundo_apellido', 's_segundo_nombre', 'sis_cargo_id','s_cargo']);


        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $this->getDocNombreCompletoCargo($registro)];
            } else {
                $comboxxx[$registro->id] = $this->getDocNombreCompletoCargo($registro);
            }
        }
        return $comboxxx;
    }


    public function getUpiUsuarioUCT($dataxxxx)
    {
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera']=true;
        }
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx']=false;
        }
        $comboxxx = $this->getCabecera($dataxxxx);

        $dataxxxx['dataxxxx'] = SisDepen::join('sis_depen_user', 'sis_depens.id', '=', 'sis_depen_user.sis_depen_id')
        ->where(function($queryxxx){
            $queryxxx->where('user_id', Auth::user()->id);
            $queryxxx->where('sis_depen_user.sis_esta_id', 1);

        })
        ->orWhere(function ($queryxxx) use ($dataxxxx) {
            $queryxxx->where('sis_depens.id',  $dataxxxx['optisele']);
        })
            ->get(['sis_depens.id', 'sis_depens.nombre']);


            foreach ($dataxxxx['dataxxxx'] as $registro) {
                if ($dataxxxx['ajaxxxxx']) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
                } else {
                    $comboxxx[$registro->id] = $registro->nombre;
                }
            }
        return $comboxxx;
    }
}
//
