<?php

namespace App\Models\AsisSema;

use Illuminate\Database\Eloquent\Model;

class AsissemaAsisten extends Model
{
    protected $primaryKey = null;
public $incrementing = false;
    protected $table = 'asissema_asistens';

    protected $fillable = [
        'asissema_matri_id',
        'fecha',
        'valor_asis',
        'created_at',
        'updated_at'
    ];
}
