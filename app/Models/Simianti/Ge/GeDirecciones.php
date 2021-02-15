<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeDirecciones extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_direcciones';
    protected $primaryKey = 'id_nnaj';

    protected $fillable =[
    'id_direccion',
    'tipo_via_ppal',
    'numero_via_ppal',
    'nombre_via_ppal',
    'letra_via_ppal',
    'bis_via_ppal',
    'letra_bis_via',
    'cuad_via_ppal',
    'numero_via_gral',
    'letra_via_gral',
    'numero_placa',
    'cuad_via_gral',
    'comple_select',
    'comple_text',
    'rural',
    'fecha_insercion',
    'usuario_insercion',
    'fecha_modificacion',
    'usuario_modificacion',
    'id_nnaj',
    'id_barrio',
    'tipo_vivienda',
    'tenencia',
    'estrato_residencia',
    'zona',
    'telefonos',
    'id_tipo_dir',
    'id_espacio_parcha',
    'nombre_espacio',
    'celular_1',
    'celular_2',
    'email',
    'tipo_residencia',
    'tiene_residencia',
    ];
    
    public function ge_nnaj()
    {
        $this->belongsTo(GeNnaj::class,'id_nnaj');
    }
}
