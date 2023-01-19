<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosMedicinaMACSeeder extends Seeder
{
    use EstructuraBaseTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->permisox = 'saludxxx';
        $this->compleme = 'de salud';
        $this->getModulo();

        $this->permisox = 'vsmedmac';
        $this->compleme = 'listar valoracion seguimiento medicina alternativa';
        $this->getBase();

    }
}
