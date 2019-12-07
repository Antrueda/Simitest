<?php

use App\Models\Indicadores\Area;
use Illuminate\Database\Seeder;

class SisAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['nombre'=>'SICOSOCIAL']);
        Area::create(['nombre'=>'SALUD']);
        Area::create(['nombre'=>'SOCIOLEGAL']);
        Area::create(['nombre'=>'EMPRENDER']);
        Area::create(['nombre'=>'ESPIRITUALIDA']);
        Area::create(['nombre'=>'EDUCACIÓN']);
    }
}
