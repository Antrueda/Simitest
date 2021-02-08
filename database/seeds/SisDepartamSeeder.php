<?php

use App\Models\Sistema\SisDepartam;
use Illuminate\Database\Seeder;

class SisDepartamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SisDepartam::create(["sis_pai_id" => 1,"s_departamento" => "N/A"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>91, "s_departamento" => "AMAZONAS"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>5, "s_departamento" => "ANTIOQUIA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>81, "s_departamento" => "ARAUCA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>8, "s_departamento" => "ATLÁNTICO"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>11, "s_departamento" => "BOGOTÁ DC"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>13, "s_departamento" => "BOLÍVAR"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>15, "s_departamento" => "BOYACÁ"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>17, "s_departamento" => "CALDAS"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>18, "s_departamento" => "CAQUETÁ"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>85, "s_departamento" => "CASANARE"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>19, "s_departamento" => "CAUCA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>20, "s_departamento" => "CESAR"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>27, "s_departamento" => "CHOCÓ"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>23, "s_departamento" => "CÓRDOBA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>25, "s_departamento" => "CUNDINAMARCA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>94, "s_departamento" => "GUAINÍA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>95, "s_departamento" => "GUAVIARE"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>41, "s_departamento" => "HUILA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>44, "s_departamento" => "LA GUAJIRA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>47, "s_departamento" => "MAGDALENA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>50, "s_departamento" => "META"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>52, "s_departamento" => "NARIÑO"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>54, "s_departamento" => "NORTE DE SANTANDER"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>86, "s_departamento" => "PUTUMAYO"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>63, "s_departamento" => "QUINDÍO"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>66, "s_departamento" => "RISARALDA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>88, "s_departamento" => "SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>68, "s_departamento" => "SANTANDER"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>70, "s_departamento" => "SUCRE"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>73, "s_departamento" => "TOLIMA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>76, "s_departamento" => "VALLE DEL CAUCA"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>97, "s_departamento" => "VAUPÉS"]);
        SisDepartam::create(["sis_pai_id" => 2,'simianti_id'=>99, "s_departamento" => "VICHADA"]);
        SisDepartam::create(["sis_pai_id" => 247,'simianti_id'=>0, "s_departamento" => "DEPARTAMENTO NO IDENTIFICADO EN EL NUEVO DESARROLLO"]);
    }
}
