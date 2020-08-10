<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiConsentimiento extends Model{
	protected $fillable = [
        'vsi_id', 'fecha', 'user_doc1_id', 'cargo1', 'user_doc2_id', 'cargo2', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function firma1(){
        return $this->belongsTo(User::class, 'user_doc1_id');
    }

    public function firma2(){
        return $this->belongsTo(User::class, 'user_doc2_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['cargo1' => User::findOrFail($dataxxxx['requestx']->user_doc1_id)->sis_cargo->s_cargo]);
            $dataxxxx['requestx']->request->add(['cargo2' => User::findOrFail($dataxxxx['requestx']->user_doc2_id)->sis_cargo->s_cargo]);
            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = VsiConsentimiento::create($dataxxxx['requestx']->all());
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
