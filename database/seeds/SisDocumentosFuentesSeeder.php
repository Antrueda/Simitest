<?php

use Illuminate\Database\Seeder;

use App\Models\Sistema\SisDocumentoFuente;

class SisDocumentosFuentesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisDocumentoFuente::create(['id'=>1,'nombre' => 'USUARIOS']);
        SisDocumentoFuente::create(['id'=>2,'nombre' => 'FICHA DE INGRESO']);
        SisDocumentoFuente::create(['id'=>3,'nombre' => 'VALORACIÓN PSICOSOCIAL']);
        SisDocumentoFuente::create(['id'=>4,'nombre' => 'CONSULTA SOCIAL EN DOMICILIO']);
        SisDocumentoFuente::create(['id'=>5,'nombre' => 'INTERVENCION SICOSOCIAL']);
        SisDocumentoFuente::create(['id'=>6,'nombre' => 'FICHA DE OBSERVACION']);
        SisDocumentoFuente::create(['id'=>7,'nombre' => 'VALORACION DEL RIESGO POR CONSUMO DE SPA']);
        SisDocumentoFuente::create(['id'=>8,'nombre' => 'VALORACION MEDICINA ALTERNATIVA']);
        SisDocumentoFuente::create(['id'=>9,'nombre' => 'SALIDA DE JOVENES MAYORES DE EDAD']);
        SisDocumentoFuente::create(['id'=>10,'nombre' => 'REPORTE DE EVACION']);
        SisDocumentoFuente::create(['id'=>11,'nombre' => 'SALIDA Y PERMISOS CON ACOMPAÑAMIENTO Y/O REPRESENTANTE LEGAL']);
        SisDocumentoFuente::create(['id'=>12,'nombre' => 'RETORNO DE SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL']);

        SisDocumentoFuente::create(['nombre' => 'DOCUEMENTOS FALTATANTES']);

    }
}
