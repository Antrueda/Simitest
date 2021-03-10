<?php

use App\Models\Sistema\SisLocalupz;
use Illuminate\Database\Seeder;

class SisLocalupzSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        foreach ($dataxxxx as $key => $value) {
            SisLocalupz::create(['sis_upz_id' =>  $value['sis_upz_id'], 'sis_localidad_id' => $value['sis_localidad_id'],'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx=[
            ['sis_upz_id' => 1, 'sis_localidad_id' => 1],// 1
            ['sis_upz_id' => 2, 'sis_localidad_id' => 11],// 2
            ['sis_upz_id' => 3, 'sis_localidad_id' => 11],// 3
            ['sis_upz_id' => 9, 'sis_localidad_id' => 1],// 4
            ['sis_upz_id' => 10, 'sis_localidad_id' => 1],// 5
            ['sis_upz_id' => 11, 'sis_localidad_id' => 1],// 6
            ['sis_upz_id' => 12, 'sis_localidad_id' => 1],// 7
            ['sis_upz_id' => 13, 'sis_localidad_id' => 1],// 8
            ['sis_upz_id' => 14, 'sis_localidad_id' => 1],// 9
            ['sis_upz_id' => 15, 'sis_localidad_id' => 1],// 10
            ['sis_upz_id' => 16, 'sis_localidad_id' => 1],// 11
            ['sis_upz_id' => 17, 'sis_localidad_id' => 11],// 12
            ['sis_upz_id' => 18, 'sis_localidad_id' => 11],// 13
            ['sis_upz_id' => 19, 'sis_localidad_id' => 11],// 14
            ['sis_upz_id' => 20, 'sis_localidad_id' => 11],// 15
            ['sis_upz_id' => 21, 'sis_localidad_id' => 12],// 16
            ['sis_upz_id' => 22, 'sis_localidad_id' => 12],// 17
            ['sis_upz_id' => 23, 'sis_localidad_id' => 11],// 18
            ['sis_upz_id' => 24, 'sis_localidad_id' => 11],// 19
            ['sis_upz_id' => 25, 'sis_localidad_id' => 11],// 20
            ['sis_upz_id' => 26, 'sis_localidad_id' => 10],// 21
            ['sis_upz_id' => 27, 'sis_localidad_id' => 11],// 22
            ['sis_upz_id' => 28, 'sis_localidad_id' => 11],// 23
            ['sis_upz_id' => 29, 'sis_localidad_id' => 10],// 24
            ['sis_upz_id' => 30, 'sis_localidad_id' => 10],// 25
            ['sis_upz_id' => 31, 'sis_localidad_id' => 10],// 26
            ['sis_upz_id' => 32, 'sis_localidad_id' => 4],// 27
            ['sis_upz_id' => 33, 'sis_localidad_id' => 4],// 28
            ['sis_upz_id' => 34, 'sis_localidad_id' => 4],// 29
            ['sis_upz_id' => 35, 'sis_localidad_id' => 15],// 30
            ['sis_upz_id' => 36, 'sis_localidad_id' => 18],// 31
            ['sis_upz_id' => 37, 'sis_localidad_id' => 14],// 32
            ['sis_upz_id' => 38, 'sis_localidad_id' => 15],// 33
            ['sis_upz_id' => 39, 'sis_localidad_id' => 18],// 34
            ['sis_upz_id' => 40, 'sis_localidad_id' => 16],// 35
            ['sis_upz_id' => 41, 'sis_localidad_id' => 16],// 36
            ['sis_upz_id' => 42, 'sis_localidad_id' => 6],// 37
            ['sis_upz_id' => 43, 'sis_localidad_id' => 16],// 38
            ['sis_upz_id' => 44, 'sis_localidad_id' => 8],// 39
            ['sis_upz_id' => 45, 'sis_localidad_id' => 8],// 40
            ['sis_upz_id' => 46, 'sis_localidad_id' => 8],// 41
            ['sis_upz_id' => 47, 'sis_localidad_id' => 8],// 42
            ['sis_upz_id' => 48, 'sis_localidad_id' => 8],// 43
            ['sis_upz_id' => 49, 'sis_localidad_id' => 7],// 44
            ['sis_upz_id' => 50, 'sis_localidad_id' => 4],// 45
            ['sis_upz_id' => 51, 'sis_localidad_id' => 4],// 46
            ['sis_upz_id' => 52, 'sis_localidad_id' => 5],// 47
            ['sis_upz_id' => 53, 'sis_localidad_id' => 18],// 48
            ['sis_upz_id' => 54, 'sis_localidad_id' => 18],// 49
            ['sis_upz_id' => 55, 'sis_localidad_id' => 18],// 50
            ['sis_upz_id' => 56, 'sis_localidad_id' => 5],// 51
            ['sis_upz_id' => 57, 'sis_localidad_id' => 5],// 52
            ['sis_upz_id' => 58, 'sis_localidad_id' => 5],// 53
            ['sis_upz_id' => 59, 'sis_localidad_id' => 5],// 54
            ['sis_upz_id' => 60, 'sis_localidad_id' => 5],// 55
            ['sis_upz_id' => 61, 'sis_localidad_id' => 5],// 56
            ['sis_upz_id' => 62, 'sis_localidad_id' => 6],// 57
            ['sis_upz_id' => 63, 'sis_localidad_id' => 19],// 58
            ['sis_upz_id' => 64, 'sis_localidad_id' => 19],// 59
            ['sis_upz_id' => 65, 'sis_localidad_id' => 19],// 60
            ['sis_upz_id' => 66, 'sis_localidad_id' => 19],// 61
            ['sis_upz_id' => 67, 'sis_localidad_id' => 19],// 62
            ['sis_upz_id' => 68, 'sis_localidad_id' => 19],// 63
            ['sis_upz_id' => 69, 'sis_localidad_id' => 19],// 64
            ['sis_upz_id' => 70, 'sis_localidad_id' => 19],// 65
            ['sis_upz_id' => 71, 'sis_localidad_id' => 11],// 66
            ['sis_upz_id' => 72, 'sis_localidad_id' => 10],// 67
            ['sis_upz_id' => 73, 'sis_localidad_id' => 10],// 68
            ['sis_upz_id' => 74, 'sis_localidad_id' => 10],// 69
            ['sis_upz_id' => 75, 'sis_localidad_id' => 9],// 70
            ['sis_upz_id' => 76, 'sis_localidad_id' => 9],// 71
            ['sis_upz_id' => 77, 'sis_localidad_id' => 9],// 72
            ['sis_upz_id' => 78, 'sis_localidad_id' => 8],// 73
            ['sis_upz_id' => 79, 'sis_localidad_id' => 8],// 74
            ['sis_upz_id' => 80, 'sis_localidad_id' => 8],// 75
            ['sis_upz_id' => 81, 'sis_localidad_id' => 8],// 76
            ['sis_upz_id' => 82, 'sis_localidad_id' => 8],// 77
            ['sis_upz_id' => 83, 'sis_localidad_id' => 8],// 78
            ['sis_upz_id' => 84, 'sis_localidad_id' => 7],// 79
            ['sis_upz_id' => 85, 'sis_localidad_id' => 7],// 80
            ['sis_upz_id' => 86, 'sis_localidad_id' => 7],// 81
            ['sis_upz_id' => 87, 'sis_localidad_id' => 7],// 82
            ['sis_upz_id' => 88, 'sis_localidad_id' => 2],// 83
            ['sis_upz_id' => 89, 'sis_localidad_id' => 2],// 84
            ['sis_upz_id' => 90, 'sis_localidad_id' => 2],// 85
            ['sis_upz_id' => 91, 'sis_localidad_id' => 3],// 86
            ['sis_upz_id' => 92, 'sis_localidad_id' => 3],// 87
            ['sis_upz_id' => 93, 'sis_localidad_id' => 3],// 88
            ['sis_upz_id' => 94, 'sis_localidad_id' => 17],// 89
            ['sis_upz_id' => 95, 'sis_localidad_id' => 3],// 90
            ['sis_upz_id' => 96, 'sis_localidad_id' => 3],// 91
            ['sis_upz_id' => 97, 'sis_localidad_id' => 2],// 92
            ['sis_upz_id' => 98, 'sis_localidad_id' => 12],// 93
            ['sis_upz_id' => 99, 'sis_localidad_id' => 2],// 94
            ['sis_upz_id' => 100, 'sis_localidad_id' => 13],// 95
            ['sis_upz_id' => 101, 'sis_localidad_id' => 13],// 96
            ['sis_upz_id' => 102, 'sis_localidad_id' => 14],// 97
            ['sis_upz_id' => 103, 'sis_localidad_id' => 12],// 98
            ['sis_upz_id' => 104, 'sis_localidad_id' => 13],// 99
            ['sis_upz_id' => 105, 'sis_localidad_id' => 10],// 100
            ['sis_upz_id' => 106, 'sis_localidad_id' => 13],// 101
            ['sis_upz_id' => 107, 'sis_localidad_id' => 13],// 102
            ['sis_upz_id' => 108, 'sis_localidad_id' => 16],// 103
            ['sis_upz_id' => 109, 'sis_localidad_id' => 13],// 104
            ['sis_upz_id' => 110, 'sis_localidad_id' => 9],// 105
            ['sis_upz_id' => 111, 'sis_localidad_id' => 16],// 106
            ['sis_upz_id' => 112, 'sis_localidad_id' => 9],// 107
            ['sis_upz_id' => 113, 'sis_localidad_id' => 8],// 108
            ['sis_upz_id' => 114, 'sis_localidad_id' => 9],// 109
            ['sis_upz_id' => 115, 'sis_localidad_id' => 9],// 110
            ['sis_upz_id' => 116, 'sis_localidad_id' => 10],// 111
            ['sis_upz_id' => 117, 'sis_localidad_id' => 9],// 112
            ['sis_upz_id' => 118, 'sis_localidad_id' => 23],// 113
            ['sis_upz_id' => 118, 'sis_localidad_id' => 7],// 114
            ['sis_upz_id' => 118, 'sis_localidad_id' => 19],// 115
            ['sis_upz_id' => 118, 'sis_localidad_id' => 3],// 116
            ['sis_upz_id' => 118, 'sis_localidad_id' => 11],// 117
            ['sis_upz_id' => 118, 'sis_localidad_id' => 18],// 118
            ['sis_upz_id' => 118, 'sis_localidad_id' => 5],// 119
            ['sis_upz_id' => 119, 'sis_localidad_id' => 21],// 120
            ['sis_upz_id' => 119, 'sis_localidad_id' => 20],// 121
            ['sis_upz_id' => 119, 'sis_localidad_id' => 22],// 122
            ['sis_upz_id' => 121, 'sis_localidad_id' => 24],// 123
            ];
            $this->getR($dataxxxx);

    }
}
