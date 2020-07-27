<?php

namespace Tests\Unit\Traits\GestionTiempos;

use App\Traits\GestionTiempos\ManageDateTrait;
use PHPUnit\Framework\TestCase;

class ManageDateTraitTest extends TestCase
{
    use ManageDateTrait;
    public function testConocer_fecha_inicial_del_mes()
    {
        $this->assertEquals($this->getPrimerOFinalDiaMes(['datexxxx'=>'10-07-2020','optionxx'=>1,'formatxx'=>'Y-m-d']),'2020-07-01');
    }
    public function testConocer_fecha_final_del_mes()
    {
        $this->assertEquals($this->getPrimerOFinalDiaMes(['datexxxx'=>'10-07-2020','optionxx'=>2,'formatxx'=>'Y-m-d']),'2020-07-31');
    }
    public function testLa_fecha_no_es_fin_de_semana_o_festivo()
    {
        $this->assertTrue($this->getDiaHabil(['fechaxxx'=>'24-07-2020']));
    }

    public function testLa_fecha_es_fin_de_semana_o_festivo()
    {
        $this->assertFalse($this->getDiaHabil(['fechaxxx'=>'25-07-2020']));
    }

    public function testLa_fecha_es_inicio_de_mes()
    {
        $respuest=$this->getInicioOFinMes(['fechahoy'=>'2020-07-01','optionxx'=>1]);
        $this->assertTrue($respuest['finmesxx']);
        $this->assertEquals($respuest['fechaxxx'],'2020-07-01');
    }
    public function testLa_fecha_es_fin_de_mes()
    {
        $respuest=$this->getInicioOFinMes(['fechahoy'=>'2020-07-31','optionxx'=>2]);
        $this->assertTrue($respuest['finmesxx']);
        $this->assertEquals($respuest['fechaxxx'],'2020-07-31');
    }
}
