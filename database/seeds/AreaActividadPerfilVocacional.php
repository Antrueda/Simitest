<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfArea;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

class AreaActividadPerfilVocacional extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //AREAS
        PvfArea::create(['nombre' => 'Oficios', 'descripcion' => 'Área de Servicios (Panadería y pastelería, auxiliar de cocina, auxiliar de carnes, mesa y bar, logística de eventos, asistente en iluminación, estética y belleza, peluquería, barbería, servicios generales, auxiliar de operaciones).', 'estusuarios_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1



        //actividades
        PvfActividade::create(['nombre' => 'Creo que tengo habilidades en la preparación de bebidas con licor o frutas, cocteles y preparaciones varias que impliquen algún licor.', 'descripcion' => 'na', 'area_id' => 1, 'estusuarios_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1

    }
}
