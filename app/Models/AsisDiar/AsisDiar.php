<?php

namespace App\Models\AsisDiar;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsisDiar extends Model
{
    use SoftDeletes;

    protected $fillable = [
        // Todo: Colocar los campos
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    protected $table = 'asisdiars';

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
