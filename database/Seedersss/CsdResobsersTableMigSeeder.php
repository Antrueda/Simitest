<?php



use Illuminate\Database\Seeder;

class CsdResobsersTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('csd_resobsers')->delete();
        
        \DB::table('csd_resobsers')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:10:11',
                'created_at' => '2021-05-25 10:10:11',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'observaciones' => 'La vivienda se encuentra en zona de alto consumo de spa por otro lado, se evidencia plagas, aunque los HÁBITOS de aseo son apropiados, la vivienda cuenta con humedad y otros factores de PROPAGACIÓN de plagas.',
                'csd_residencia_id' => '94',
                'id' => '2',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-17 15:47:33',
                'created_at' => '2021-05-17 15:47:33',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'observaciones' => 'LA VIVIENDA PRESENTA ALTO RIESGO NATURAL, LA VIVIENDA SE NO CUENTA CON ESPACIOS DEFINIDOS ESTRUCTURAL MENTE.',
                'csd_residencia_id' => '93',
                'id' => '1',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-02 19:10:59',
                'created_at' => '2021-06-02 19:10:59',
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'observaciones' => 'LA FAMILIA VIVE EN CASA DE INQUILINATO LA CUAL ES PAGA EN MODALIDAD PAGA DIARIO, 20 MIL PESOS, EN LA HABITACION DUEMEN 5 PERSONAS LAS PROGENITORAS Y 3 ADOLESCENTES,  LAS DOS PROGENITORAS QUE SON HERMANAS COMPARTEN LA CAMA, EN LA MISMA HABITACION TIENEN LA COCINA, EL BAÑO ES COMPATIDO CON UNAS 10 FAMILIAS MAS.',
                'csd_residencia_id' => '97',
                'id' => '5',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-02 19:11:21',
                'created_at' => '2021-06-02 19:11:21',
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'observaciones' => 'LA FAMILIA VIVE EN CASA DE INQUILINATO LA CUAL ES PAGA EN MODALIDAD PAGA DIARIO, 20 MIL PESOS, EN LA HABITACION DUEMEN 5 PERSONAS LAS PROGENITORAS Y 3 ADOLESCENTES,  LAS DOS PROGENITORAS QUE SON HERMANAS COMPARTEN LA CAMA, EN LA MISMA HABITACION TIENEN LA COCINA, EL BAÑO ES COMPATIDO CON UNAS 10 FAMILIAS MAS.',
                'csd_residencia_id' => '98',
                'id' => '6',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-27 14:28:15',
                'created_at' => '2021-05-27 14:28:15',
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'observaciones' => 'Vivienda ubicada en el barrio dorado bajo, casa de un piso , prefabricada, con todos los servicios públicos,  al interior de la vivienda se identifica piso en baldosa, y paredes pañetadas con color. un baño, una cocina y tres habitaciones todas ocupadas.',
                'csd_residencia_id' => '95',
                'id' => '3',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-02 19:10:39',
                'created_at' => '2021-06-02 19:10:39',
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'observaciones' => 'LA FAMILIA VIVE EN CASA DE INQUILINATO LA CUAL ES PAGA EN MODALIDAD PAGA DIARIO, 20 MIL PESOS, EN LA HABITACION DUEMEN 5 PERSONAS LAS PROGENITORAS Y 3 ADOLESCENTES,  LAS DOS PROGENITORAS QUE SON HERMANAS COMPARTEN LA CAMA, EN LA MISMA HABITACION TIENEN LA COCINA, EL BAÑO ES COMPATIDO CON UNAS 10 FAMILIAS MAS.',
                'csd_residencia_id' => '96',
                'id' => '4',
            ),
        ));
        
        
    }
}