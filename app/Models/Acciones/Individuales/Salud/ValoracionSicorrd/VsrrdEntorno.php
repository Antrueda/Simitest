<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Database\Eloquent\Model;

class VsrrdEntorno extends Model
{
    protected $fillable = [
        'nombre',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function factores()
    {
        return $this->hasMany(VsrrdEntorFactor::class, 'vsrrd_entorno_id')->where('sis_esta_id', 1);
    }

    public function armarValueEntorno($data)
    {
        $respuestas = [];
        $respuestas[''] = 'Seleccione';
        foreach ($data as $item) {
            $respuestas[$item->id] = $item->factor->nombre;
        }

        return $respuestas;
    }
}
