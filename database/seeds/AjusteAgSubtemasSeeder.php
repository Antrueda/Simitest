<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Grupales\AgSubtema;

class AjusteAgSubtemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array( 
            [
                "ID" => 2,
                "AG_TALLER_ID" => 20
            ], [
                "ID" => 3,
                "AG_TALLER_ID" => 20
            ], [
                "ID" => 4,
                "AG_TALLER_ID" => 38
            ], [
                "ID" => 5,
                "AG_TALLER_ID" => 38
            ], [
                "ID" => 6,
                "AG_TALLER_ID" => 53
            ], [
                "ID" => 7,
                "AG_TALLER_ID" => 53
            ], [
                "ID" => 8,
                "AG_TALLER_ID" => 63
            ], [
                "ID" => 9,
                "AG_TALLER_ID" => 63
            ], [
                "ID" => 11,
                "AG_TALLER_ID" => 63
            ], [
                "ID" => 12,
                "AG_TALLER_ID" => 72
            ], [
                "ID" => 13,
                "AG_TALLER_ID" => 72
            ], [
                "ID" => 14,
                "AG_TALLER_ID" => 73
            ], [
                "ID" => 15,
                "AG_TALLER_ID" => 73
            ]
        );
        foreach ($data as $key => $value) {
            AgSubtema::where('id', $value['ID'])->update(['ag_taller_id' => $value['AG_TALLER_ID']]);
        }
    }
}
