<?php

use Illuminate\Database\Seeder;


class PermisosEducacionUsuarioSeeder extends Seeder
{
    use EstructuraBaseTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->permisox='pruediag';
        $this->compleme='Pruba diagnóstica para los usuarios';
        $this->getBase();
        $this->permisox='edupresa';
        $this->compleme='Presaberes de la pruba diagnóstica para los usuarios';
        $this->getBase();
    }
}
