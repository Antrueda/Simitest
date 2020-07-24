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
}
