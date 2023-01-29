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

        $this->permisox = 'vsmacans';
        $this->compleme = 'listar valoracion seguimiento medicina alternativa';
        $this->getBase();

        $this->permisox = 'vsmacant';
        $this->compleme = 'listar valoracion seguimiento medicina alternativa';
        $this->getBase();

        $this->permisox = 'vsmaccon';
        $this->compleme = 'listar valoracion seguimiento medicina alternativa';
        $this->getBase();

        $this->permisox = 'vsmacdia';
        $this->compleme = 'listar valoracion seguimiento medicina alternativa';
        $this->getBase();

        $this->permisox = 'vsmedpma';
        $this->compleme = 'listar valoracion seguimiento medicina alternativa';
        $this->getBase();

    }
}
