<?php

use App\Models\Sistema\SisEntidadSalud;
use Illuminate\Database\Seeder;

class SisEntidadSaludsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisEntidadSalud::create([
            's_nombre_entidad' => 'SALUDTOTAL', 'i_prm_tentidad_id' => 165,
        ]);

        SisEntidadSalud::create([
            's_nombre_entidad' => 'COLSANITAS', 'i_prm_tentidad_id' => 165,
        ]);

        SisEntidadSalud::create([
            's_nombre_entidad' => 'COMPENSAR', 'i_prm_tentidad_id' => 166,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'SOLSALUD', 'i_prm_tentidad_id' => 166,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Población habitante de calle', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Población ICBF', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Comunidad indígena', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Población desplazada', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Víctimas del conflicto armado', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Pueblo PROM', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Menores desvinculados del conflicto armado', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Población desmovilizada', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Población privada de la libertad', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Población migrante de la República Bolivariana de Venezuela', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Fuerzas militares', 'i_prm_tentidad_id' => 167,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'SISBEN Departamental', 'i_prm_tentidad_id' => 1631,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'SISBEN Distrital', 'i_prm_tentidad_id' => 1631,
        ]);
        
        SisEntidadSalud::create([
            's_nombre_entidad' => 'Instrumento provisional', 'i_prm_tentidad_id' => 1631,
        ]);
    }
}