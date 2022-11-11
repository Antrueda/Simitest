<?php

namespace database\seeds\Indicadores;

use App\Models\Indicadores\Administ\InLineaBase;
use Illuminate\Database\Seeder;

class InLineaBasesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $dataxxxx = [
      's_linea_base' => 'El NNAJ presenta dificultad para interactuar con las demás personas en el #######1.',
      'user_crea_id' => 1,
      'user_edita_id' => 1,
      'sis_esta_id' => 1
    ];
    InLineaBase::create($dataxxxx); // 1
    $dataxxxx['s_linea_base'] = 'El NNAJ presenta #######1 para relacionarse con los demás.';
    InLineaBase::create($dataxxxx); // 2
    $dataxxxx['s_linea_base'] = 'El NNAJ reacciona de manera #######1 ante eventos o situaciones que generan cambio emocional.';
    InLineaBase::create($dataxxxx);  // 3
    $dataxxxx['s_linea_base'] = 'El NNAJ no cuentan con redes sociales de apoyo.';
    InLineaBase::create($dataxxxx); // 4
    $dataxxxx['s_linea_base'] = 'La familia del NNAJ no cuenta con redes sociales de apoyo.';
    InLineaBase::create($dataxxxx); // 5
    $dataxxxx['s_linea_base'] = '#######1 presenta dificultades de acceso a los servicios brindados por las redes sociales de apoyo.';
    InLineaBase::create($dataxxxx); // 6
    $dataxxxx['s_linea_base'] = 'La red de apoyo social representa factores de riesgo para el NNAJ y/o su familia.';
    InLineaBase::create($dataxxxx); // 7
    $dataxxxx['s_linea_base'] = 'El NNA ha sido victima de la ESCNNA #######1.';
    InLineaBase::create($dataxxxx); // 8
    $dataxxxx['s_linea_base'] = 'Identificación de ESCNNA en la modalidad de ########';
    InLineaBase::create($dataxxxx); // 9
    $dataxxxx['s_linea_base'] = 'El NNA ha tenido #######1 de quitarse la vida #######2 por eventos relacionados con su situación como victima de la ESCNNA.';
    InLineaBase::create($dataxxxx); // 10
    $dataxxxx['s_linea_base'] = 'Identificación de factores de riesgo de ESCNNA #######1.';
    InLineaBase::create($dataxxxx); // 11
    $dataxxxx['s_linea_base'] = 'Identificación de factores de riesgo de ESCNNA naturalizados por parte de la familia como parte de su situación cotidiana.';
    InLineaBase::create($dataxxxx); // 12
    $dataxxxx['s_linea_base'] = 'Identificación de presunto abuso sexual #######1.';
    InLineaBase::create($dataxxxx); // 13
    $dataxxxx['s_linea_base'] = 'Identificación de evento traumático ante presunto abuso sexual, sin apoyo #######1.';
    InLineaBase::create($dataxxxx); // 14
    $dataxxxx['s_linea_base'] = 'Identificación de evento traumático ante presunto abuso sexual #######1.';
    InLineaBase::create($dataxxxx); // 15
    $dataxxxx['s_linea_base'] = 'Identificación de #######1, Ante el evento el NNAJ ha emitido #######2 de quitarse la vida.';
    InLineaBase::create($dataxxxx); // 16
    $dataxxxx['s_linea_base'] = 'El AJ ha presentado #######1 .';
    InLineaBase::create($dataxxxx); // 17
    $dataxxxx['s_linea_base'] = 'El AJ #######1 debido a su #######2.';
    InLineaBase::create($dataxxxx); // 18
    $dataxxxx['s_linea_base'] = 'Identificación de abandono del(os) representantes legales y/o cuidadores.';
    InLineaBase::create($dataxxxx); // 19
    $dataxxxx['s_linea_base'] = 'Identificación de baja supervisión de los NNA por parte de sus cuidadores y/o representantes legales que generan factores de riesgo.';
    InLineaBase::create($dataxxxx); // 20
    $dataxxxx['s_linea_base'] = 'Identificación de falta de corresponsabilidad de los representantes legales para asumir el cuidado de sus hijos, asignandolo a otras personas.';
    InLineaBase::create($dataxxxx); // 21
    $dataxxxx['s_linea_base'] = 'Identificación de relaciones familiares conflictivas y/o distantes #######1 .';
    InLineaBase::create($dataxxxx); // 22
    $dataxxxx['s_linea_base'] = 'Identificación de #######1 con escasa #######2.';
    InLineaBase::create($dataxxxx); // 23
    $dataxxxx['s_linea_base'] = 'Identificación problemas en la solución de conflictos debido a los inadecuados canales de comunicación.';
    InLineaBase::create($dataxxxx); // 24
    $dataxxxx['s_linea_base'] = 'Identificación de #######1.';
    InLineaBase::create($dataxxxx); // 25
    $dataxxxx['s_linea_base'] = 'Existe desconocimiento de normas y limites al interior del nucleo familiar, ########1.';
    InLineaBase::create($dataxxxx); // 26
    $dataxxxx['s_linea_base'] = 'Identificación de violencia intrafamiliar ejercido por #######1.';
    InLineaBase::create($dataxxxx); // 27
    $dataxxxx['s_linea_base'] = 'Identificación de violencia intrafamiliar #######1.';
    InLineaBase::create($dataxxxx); // 28
  }
}
