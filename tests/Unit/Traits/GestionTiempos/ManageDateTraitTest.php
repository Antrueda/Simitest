<?php

namespace Tests\Unit\Traits\GestionTiempos;

use App\Traits\GestionTiempos\ManageDateTrait;
use PHPUnit\Framework\TestCase;

class ManageDateTraitTest extends TestCase
{
    use ManageDateTrait;

    public function testLa_fecha_no_es_fin_de_semana_o_festivo()
    {
        $this->assertTrue($this->getDiaHabil(['fechaxxx'=>'24-07-2020']));
    }

    public function testLa_fecha_es_fin_de_semana_o_festivo()
    {
        $this->assertFalse($this->getDiaHabil(['fechaxxx'=>'25-07-2020']));
    }

}
