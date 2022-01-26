<?php

namespace App\Exports;

use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Simianti\Ge\GeAcumuladoMeta;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GeAcumuladoMetaExport implements  FromView,ShouldAutoSize
{
  
    use Exportable;

    private $ano;
//
    public function __construct($ano)
    {
        $this->ano = $ano['Ano'];
        $this->mes = $ano['Mes'];
        $this->meta = $ano['Meta'];
    }
    public function view(): View 
    {
        $todoxxxx=GeAcumuladoMeta::select( 
        'ge_acumulado_meta.id_nnaj', //1
        'ge_acumulado_meta.tipo_documento',//2
        'ge_acumulado_meta.numero_documento',//3
        'ge_acumulado_meta.primer_apellido',//
        'ge_acumulado_meta.segundo_apellido',//
        'ge_acumulado_meta.primer_nombre',//
        'ge_acumulado_meta.segundo_nombre',//
        'ge_acumulado_meta.nombre_concatenado',
        'ge_acumulado_meta.fecha_nacimiento',
        'ge_acumulado_meta.edad',
        'ge_acumulado_meta.grupo_etario',//6
        'ge_acumulado_meta.sexo',//5
        // 'ge_acumulado_meta.identidad_genero',
        // 'ge_acumulado_meta.orientacion_sexual',
        // 'ge_acumulado_meta.estado_civil',
        'ge_acumulado_meta.etnia',//8
        'ge_acumulado_meta.dependencia',
        'ge_acumulado_meta.año as ano',
        'ge_acumulado_meta.total',
        'ge_acumulado_meta.año_meta as ano_meta',
        'ge_acumulado_meta.meta',
        'ge_acumulado_meta.meta_final',//7
        'ge_upi.nombre',
        'ge_acumulado_meta.modalidad',//9
        'ge_acumulado_meta.mes_reporte'//10
        )->orderBy('id_nnaj','ASC')
        ->join('ge_upi', 'ge_acumulado_meta.upi', '=', 'ge_upi.id_upi')
        ->where('ge_acumulado_meta.edad','<',29)
        ->where('ge_acumulado_meta.año',$this->ano)
        ->where('ge_acumulado_meta.mes_reporte','LIKE', '%' . $this->mes . '%')
        ->where('ge_acumulado_meta.meta_final',$this->meta)
        ->get();
        return view('administracion.Reportes.Excel.Formulario.geacumuladometa',
        ['todoxxxx' => $todoxxxx]);
    }
}
