<?php

use Illuminate\Database\Seeder;

use App\Models\Sistema\SisDocfuen;

class SisDocumentosFuentesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisDocfuen::create(['id'=>1,'nombre' => 'USUARIOS']);
        SisDocfuen::create(['id'=>2,'nombre' => 'FICHA DE INGRESO']);
        SisDocfuen::create(['id'=>3,'nombre' => 'VALORACIÓN PSICOSOCIAL']);
        SisDocfuen::create(['id'=>4,'nombre' => 'CONSULTA SOCIAL EN DOMICILIO']);
        SisDocfuen::create(['id'=>5,'nombre' => 'INTERVENCION SICOSOCIAL']);
        SisDocfuen::create(['id'=>6,'nombre' => 'FICHA DE OBSERVACION']);
        SisDocfuen::create(['id'=>7,'nombre' => 'VALORACION DEL RIESGO POR CONSUMO DE SPA']);
        SisDocfuen::create(['id'=>8,'nombre' => 'VALORACION MEDICINA ALTERNATIVA']);
        SisDocfuen::create(['id'=>9,'nombre' => 'SALIDA DE JOVENES MAYORES DE EDAD']);
        SisDocfuen::create(['id'=>10,'nombre' => 'REPORTE DE EVACION']);
        SisDocfuen::create(['id'=>11,'nombre' => 'SALIDA Y PERMISOS CON ACOMPAÑAMIENTO Y/O REPRESENTANTE LEGAL']);
        SisDocfuen::create(['id'=>12,'nombre' => 'RETORNO DE SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL']);

        SisDocfuen::create(['nombre' => 'DOCUEMENTOS FALTATANTES']);

    }
}
