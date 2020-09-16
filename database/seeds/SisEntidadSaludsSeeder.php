<?php

use App\Models\Sistema\SisEntidadSalud;
use Illuminate\Database\Seeder;

class SisEntidadSaludsSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        foreach ($dataxxxx['entidadx'] as $key => $value) {
            SisEntidadSalud::create([
                'sis_enprsa_id' => $dataxxxx['enprsaid'], 'i_prm_tentidad_id' => $value, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,
            ]);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // contributivo y subsidiado
        $this->getR(['enprsaid' => 1, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 2, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 3, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 4, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 5, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 6, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 7, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 8, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 9, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 10, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 11, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 12, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 13, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 14, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 15, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 16, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 17, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 18, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 19, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 20, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 21, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 22, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 23, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 24, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 25, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 26, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 27, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 28, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 29, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 30, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 31, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 32, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 33, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 34, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 35, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 36, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 37, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 38, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 39, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 40, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 41, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 42, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 43, 'entidadx' => [165, 166]]);
        $this->getR(['enprsaid' => 44, 'entidadx' => [165, 166]]);
        //RÉGIMEN ESPECIAL
        $this->getR(['enprsaid' => 45, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 46, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 47, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 48, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 49, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 50, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 51, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 52, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 53, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 54, 'entidadx' => [167]]);
        $this->getR(['enprsaid' => 55, 'entidadx' => [167]]);
        //VINCULADO
        $this->getR(['enprsaid' => 56, 'entidadx' => [1631]]);
        $this->getR(['enprsaid' => 57, 'entidadx' => [1631]]);
        $this->getR(['enprsaid' => 58, 'entidadx' => [1631]]);
    }
}
