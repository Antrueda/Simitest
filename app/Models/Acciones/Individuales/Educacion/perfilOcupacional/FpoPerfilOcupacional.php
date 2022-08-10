<?php

namespace App\Models\Acciones\Individuales\Educacion\perfilOcupacional;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoComponenteRespuesta;

class FpoPerfilOcupacional extends Model
{
    protected $fillable = [
        'id', 
        'fecha_registro',
        'resultado_text',
        'concepto_perfil',
        'sis_nnaj_id',
        'sis_depen_id',
        'user_crea_id', 
        'user_edita_id',
        'sis_esta_id',
   ];

   public function respuestacomponentes()
   {
     return $this->hasMany(FpoComponenteRespuesta::class, 'fpo_perfil_id')->orderBy('fpo_componen_id','asc');
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
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);

            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update([
                    'fecha_registro'=>$dataxxxx['requestx']->fecha_registro,
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'resultado_text'=>$dataxxxx['requestx']->total_test,
                    'concepto_perfil'=>$dataxxxx['requestx']->concepto_perfil,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                ]);
               
                $dataxxxx['modeloxx']->respuestacomponentes()->delete();
                foreach ($dataxxxx['requestx']->items as $key => $value) {
                    $componente= FpoComponenteRespuesta::create([
                        'observacion'=>$value['descripcion'],
                        'fpo_componen_id'=>$key,
                        'fpo_perfil_id'=>$dataxxxx['modeloxx']->id,
                    ]);

                    foreach ($value['respuestas'] as $key2 => $value2) {
                        $item= FpoItemRespuesta::create([
                            'valor'=>$value2,
                            'fpo_item_id'=>$key2,
                            'fpo_comp_respu_id'=>$componente->id,
                        ]);
                    }
                }
                
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = FpoPerfilOcupacional::create([
                    'fecha_registro'=>$dataxxxx['requestx']->fecha_registro,
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'resultado_text'=>$dataxxxx['requestx']->total_test,
                    'concepto_perfil'=>$dataxxxx['requestx']->concepto_perfil,
                    'sis_nnaj_id'=>$dataxxxx['requestx']->sis_nnaj_id,
                    'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id
                ]);
                foreach ($dataxxxx['requestx']->items as $key => $value) {
                    $componente= FpoComponenteRespuesta::create([
                        'observacion'=>$value['descripcion'],
                        'fpo_componen_id'=>$key,
                        'fpo_perfil_id'=>$dataxxxx['modeloxx']->id,
                    ]);

                    foreach ($value['respuestas'] as $key2 => $value2) {
                        $item= FpoItemRespuesta::create([
                            'valor'=>$value2,
                            'fpo_item_id'=>$key2,
                            'fpo_comp_respu_id'=>$componente->id,
                        ]);
                    }
                }
            }

           return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    public function sumaSubtotal($array){
        
        $suma=0;
        foreach ($array as $value) {
            $suma += $value['valor'];
        }
        return $suma;
    }
}
