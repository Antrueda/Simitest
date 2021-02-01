<?php

use App\Models\Sistema\SisDepartamento;
use Illuminate\Database\Seeder;

class SisDepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SisDepartamento::create(["sis_pai_id" => 1,"s_departamento" => "N/A"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>91, "s_departamento" => "AMAZONAS"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>5, "s_departamento" => "ANTIOQUIA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>81, "s_departamento" => "ARAUCA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>8, "s_departamento" => "ATLÁNTICO"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>11, "s_departamento" => "BOGOTÁ DC"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>13, "s_departamento" => "BOLÍVAR"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>15, "s_departamento" => "BOYACÁ"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>17, "s_departamento" => "CALDAS"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>18, "s_departamento" => "CAQUETÁ"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>85, "s_departamento" => "CASANARE"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>19, "s_departamento" => "CAUCA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>20, "s_departamento" => "CESAR"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>27, "s_departamento" => "CHOCÓ"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>23, "s_departamento" => "CÓRDOBA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>25, "s_departamento" => "CUNDINAMARCA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>94, "s_departamento" => "GUAINÍA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>95, "s_departamento" => "GUAVIARE"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>41, "s_departamento" => "HUILA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>44, "s_departamento" => "LA GUAJIRA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>47, "s_departamento" => "MAGDALENA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>50, "s_departamento" => "META"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>52, "s_departamento" => "NARIÑO"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>54, "s_departamento" => "NORTE DE SANTANDER"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>86, "s_departamento" => "PUTUMAYO"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>63, "s_departamento" => "QUINDÍO"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>66, "s_departamento" => "RISARALDA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>88, "s_departamento" => "SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>68, "s_departamento" => "SANTANDER"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>70, "s_departamento" => "SUCRE"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>73, "s_departamento" => "TOLIMA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>76, "s_departamento" => "VALLE DEL CAUCA"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>97, "s_departamento" => "VAUPÉS"]);
        SisDepartamento::create(["sis_pai_id" => 2,'simianti_id'=>99, "s_departamento" => "VICHADA"]);
    }
}
