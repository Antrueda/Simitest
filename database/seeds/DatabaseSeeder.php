<?php

use App\Models\sistema\SisTcampo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SisEstasSeeder::class);
        $this->call(RolesYPermisosSeeder::class);
        $this->call(SisParametrosSeeder::class);
        $this->call(SisPaisSeeder::class);
        $this->call(SisDepartamentoSeeder::class);
        $this->call(SisMunicipioSeeder::class);
        $this->call(SisCargosSeeder::class);
        $this->call(SisLocalidadsSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(TemasTableSeeder::class);
        $this->call(SisAreasSeeder::class);
        $this->call(FiNucleoFamiliarsTableSeeder::class);
        $this->call(SisUpzsSeeder::class);
        $this->call(SisBarriosSeeder::class);
        $this->call(SisDependenciasSeeder::class);
        $this->call(SisEntidadsSeeder::class);
        $this->call(SisEntidadSaludsSeeder::class);
        $this->call(SisInstitucionEdusSeeder::class);
        $this->call(SisDocumentosFuentesSeeder::class);
        $this->call(InIndicadorSeeder::class);
        $this->call(SisActividadsSeeder::class);
        $this->call(SisMapaProcsSeeder::class);
        $this->call(SisProcesosSeeder::class);
        $this->call(SisActividadProcesosSeeder::class);
        $this->call(SisNnajsSeeder::class);
        $this->call(InLineaBasesSeeder::class);
        $this->call(InFuentesSeeder::class);
        $this->call(InBaseFuentesSeeder::class);
        $this->call(InPreguntasSeeder::class);
        $this->call(SisTablasSeeder::class);
        $this->call(SisTcamposSeeder::class);
        $this->call(InLigrusSeeder::class);
        $this->call(InDocPreguntasSeeder::class);
        $this->call(SisFsoportesSeeder::class);
        $this->call(FosTsesSeeder::class);
        $this->call(FosStsesSeeder::class);
        $this->call(InRespuestasSeeder::class);
        $this->call(AgTemasSeeder::class);
        $this->call(AgTallersSeeder::class);
        $this->call(AgSubtemasSeeder::class);
        $this->call(SisTitulosSeeder::class);
        $this->call(AgRecursosSeeder::class);
        $this->call(SisObsesSeeder::class);
    }
}
