<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisMenu extends Model
{
    protected $fillable = [
        's_menu',
        'sis_docfuen_id',
        's_icono',
        'sis_menu_id'
    ];
}
