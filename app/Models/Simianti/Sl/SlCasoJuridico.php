<?php

namespace App\Models\Simianti\Sl;


use Illuminate\Database\Eloquent\Model;

class SlCasoJuridico extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'sl_caso_juridico';
    protected $primaryKey = 'ID_CASO_JURIDICO';
    public $timestamps = false;
    protected $fillable = [
        'id_nnaj',
        'ID_CASO_JURIDICO',
        'ID_PROFESIONAL',
        'FECHA_CASO',
        'NOMBRE_FAMILIAR',
        'PARENTESCO_FAMILIAR',
        'CONSULTA_CASO',
        'ASESORIA_CASO',
        'ESTADO_CASO',
        'ASIGNADO_CASO',
        'TIPO_CASO_JURIDICO',
        'TEMA_CASO_JURIDICO',
        'ID_UPI',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estado',
    ];
    public function ge_nnaj()
    {
        $this->belongsTo(GeNnaj::class,'id_nnaj');
    }
}
/*
 select
distinct
a.id_nnaj,
d.numero_documento,
'SL' AS MODULO,
m1.DESCRIPCION AS TIPO_CASO_JURIDICO,
g.NOMBRE as tema_caso,
a.CONSULTA_CASO,
a.ASESORIA_CASO,
TO_CHAR(a.FECHA_CASO,'DD/MM/YYYY') AS FECHA,
a.USUARIO_INSERCION ,
c.PRIMER_NOMBRE||' '||c.SEGUNDO_NOMBRE||' '||c.PRIMER_APELLIDO||' '||c.SEGUNDO_APELLIDO as profesional,
h.nombre as upi,
Z.DESCRIPCION AS ESTADO_CASO
from sl_caso_juridico a left join SIS_MULTIVALORES m1 on a.TIPO_CASO_JURIDICO=m1.codigo and m1.tabla='TIPO_CASO_JURIDICO'
inner join GE_NNAJ b on a.ID_NNAJ=b.ID_NNAJ
inner join GE_PERSONAL_IDIPRON c on a.USUARIO_INSERCION=c.ID_DOCUMENTO
inner join GE_NNAJ_DOCUMENTO d on A.ID_NNAJ=d.ID_NNAJ
left join iadmin.SIS_TEMA_JURIDICO G ON G.CODIGO_TEMA_JURIDICO=a.TEMA_CASO_JURIDICO AND a.TIPO_CASO_JURIDICO=G.CODIGO_TIPO_CASO
left join IADMIN.GE_UPI h on a.ID_UPI=h.ID_UPI
LEFT JOIN SIS_MULTIVALORES Z ON Z.CODIGO=A.ESTADO_CASO AND Z.TABLA='ESTADO_CASO'
 order by
a.id_nnaj;
*/