<?php

use Illuminate\Database\Seeder;

use App\Models\Sistema\SisDocfuen;

class SisDocumentosFuentesSeeder extends Seeder{
    public function getR($dataxxxx)
    {
        SisDocfuen::create([
            'nombre' => strtoupper($dataxxxx['nombrexx']), 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $this->getR(['nombrexx'=>'USUARIOS']);
        $this->getR(['nombrexx'=>'FICHA DE INGRESO']);
        $this->getR(['nombrexx'=>'VALORACIÓN PSICOSOCIAL']);
        $this->getR(['nombrexx'=>'CONSULTA SOCIAL EN DOMICILIO']);
        $this->getR(['nombrexx'=>'INTERVENCION SICOSOCIAL']);
        $this->getR(['nombrexx'=>'FICHA DE OBSERVACION']);
        $this->getR(['nombrexx'=>'VALORACION DEL RIESGO POR CONSUMO DE SPA']);
        $this->getR(['nombrexx'=>'VALORACION MEDICINA ALTERNATIVA']);
        $this->getR(['nombrexx'=>'SALIDA DE JOVENES MAYORES DE EDAD']);
        $this->getR(['nombrexx'=>'REPORTE DE EVACION']);
        $this->getR(['nombrexx'=>'SALIDA Y PERMISOS CON ACOMPAÑAMIENTO Y/O REPRESENTANTE LEGAL']);
        $this->getR(['nombrexx'=>'RETORNO DE SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL']);
        $this->getR(['nombrexx'=>'DOCUEMENTOS FALTATANTES']);
    }
}
