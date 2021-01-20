<?php

namespace App\Models\oracle;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GeNnaj extends Model
{
    protected $table = 'ge_nnaj';
    protected $connection = 'oracle';
    protected $primaryKey = 'ID_NNAJ';
    public $timestamps = false;
//     const CREATED_AT = 'FECHA_INSERCION';
// const UPDATED_AT = 'FECHA_MODIFICACION';
    protected $fillable = [
        
        'PRIMER_APELLIDO',
        'SEGUNDO_APELLIDO',
        'PRIMER_NOMBRE',
        'SEGUNDO_NOMBRE',
        'APODO',
        'FECHA_NACIMIENTO',
        'ID_NACIMIENTO',
        'FECHA_INSERCION',
        'USUARIO_INSERCION',
        'FECHA_MODIFICACION',
        'USUARIO_MODIFICACION',
        'RH',
        'GENERO',
        'TIPO_DOCUMENTO',
        'NUMERO_DOCUMENTO',
        'ID_LUGAR_EXPEDICION',
        'CLASE_LIBRETA_MILITAR',
        'ESTADO',
        'NUMERO_LIBRETA_MILITAR',
        'ULTIMO_GRADO_APROBADO',
        'FECHA_NACIMIENTO_ESTIMADA',
        'ETNIA',
        'EMAIL',
        'NOMBRE_IDENTITARIO',
        'ESTADO_CIVIL',
        'GENERO_IDENTIFICA',
        'SEXO_ORIENTA',
        'CONDICION_VESTIDO',
        'AUTOCUIDADO',
        'SIN_ID_PORQUE',
        'CUENTA_DOC',
        'SITUACION_MIL',
        'TIPO_POBLACION',
        'ID_PAIS_NACIMIENTO',
    ];
public function getData($dataxxxx)
{
    return [
        
        'PRIMER_APELLIDO'=>'jimenez',
        'SEGUNDO_APELLIDO'=>'2',
        'PRIMER_NOMBRE'=>'jose',
        'SEGUNDO_NOMBRE'=>'2',
        'APODO'=>'1',
        'FECHA_NACIMIENTO'=>'1',
        'ID_NACIMIENTO'=>1,
        'FECHA_INSERCION'=>date('Y-m-d'),
        'USUARIO_INSERCION'=>1,
        'FECHA_MODIFICACION'=>date('Y-m-d'),
        'USUARIO_MODIFICACION'=>1,
        'RH'=>'1',
        'GENERO'=>'1',
        'TIPO_DOCUMENTO'=>'1',
        'NUMERO_DOCUMENTO'=>'1',
        'ID_LUGAR_EXPEDICION'=>'1',
        'CLASE_LIBRETA_MILITAR'=>'1',
        'ESTADO'=>'1',
        'NUMERO_LIBRETA_MILITAR'=>'1',
        'ULTIMO_GRADO_APROBADO'=>'1',
        'FECHA_NACIMIENTO_ESTIMADA'=>'1',
        'ETNIA'=>'1',
        'EMAIL'=>'1',
        'NOMBRE_IDENTITARIO'=>'1',
        'ESTADO_CIVIL'=>'1',
        'GENERO_IDENTIFICA'=>'1',
        'SEXO_ORIENTA'=>'1',
        'CONDICION_VESTIDO'=>'1',
        'AUTOCUIDADO'=>'1',
        'SIN_ID_PORQUE'=>'1',
        'CUENTA_DOC'=>'1',
        'SITUACION_MIL'=>'1',
        'TIPO_POBLACION'=>'1',
        'ID_PAIS_NACIMIENTO'=>'1',
    ];
}
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;


        if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
        } else {
            $maximoxx=GeNnaj::select(['ID_NNAJ'])->orderBy('ID_NNAJ','DESC')->get();
            ddd($maximoxx[0]);
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = GeNnaj::create($dataxxxx);
        }
        return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
