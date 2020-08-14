<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisMenu extends Model
{
    protected $fillable = [
        'munu',
        'documento',
        'pestania',
        'icono',
        'esmenu',
        'sis_menu_id'
    ];
}
