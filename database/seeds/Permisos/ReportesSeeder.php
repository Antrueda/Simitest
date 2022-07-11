<?php
namespace Database\Seeds\Permisos;

use EstructuraBaseTrait;
use Illuminate\Database\Seeder;

class ReportesSeeder extends Seeder
{
    use EstructuraBaseTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        $this->permisox = 'repomodu';
        $this->compleme = 'permisos para el módulo de reportes';
        $this->getBase();

        


    }
}
