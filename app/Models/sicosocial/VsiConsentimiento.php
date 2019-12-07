<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class VsiConsentimiento extends Model{
	protected $fillable = [
        'vsi_id', 'fecha', 'user_doc1_id', 'cargo1', 'user_doc2_id', 'cargo2', 'activo', 'user_crea_id', 'user_edita_id'
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
}