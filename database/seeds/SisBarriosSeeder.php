<?php

use App\Models\Sistema\SisBarrio;
use Illuminate\Database\Seeder;

class SisBarriosSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        foreach ($dataxxxx as $key => $value) {
            SisBarrio::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_barrio' => strtoupper($value['nombrexx'])]);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisBarrio::create(['id' => '1', 's_barrio' => 'CANAIMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 1
        SisBarrio::create(['id' => '2', 's_barrio' => 'LA FLORESTA DE LA SABANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 2
        SisBarrio::create(['id' => '3', 's_barrio' => 'TORCA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 3
        SisBarrio::create(['id' => '4', 's_barrio' => 'ALTOS DE SERREZUELA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 4
        SisBarrio::create(['id' => '5', 's_barrio' => 'BALCONES DE VISTA HERMOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 5
        SisBarrio::create(['id' => '6', 's_barrio' => 'BALMORAL NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 6
        SisBarrio::create(['id' => '7', 's_barrio' => 'BUENAVISTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 7
        SisBarrio::create(['id' => '8', 's_barrio' => 'CHAPARRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 8
        SisBarrio::create(['id' => '9', 's_barrio' => 'EL CODITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 9
        SisBarrio::create(['id' => '10', 's_barrio' => 'EL REFUGIO DE SAN ANTONIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 10
        SisBarrio::create(['id' => '11', 's_barrio' => 'EL VERBENAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 11
        SisBarrio::create(['id' => '12', 's_barrio' => 'HORIZONTES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 12
        SisBarrio::create(['id' => '13', 's_barrio' => 'LA ESTRELLITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 13
        SisBarrio::create(['id' => '14', 's_barrio' => 'LA FRONTERA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 14
        SisBarrio::create(['id' => '15', 's_barrio' => 'LA LLANURITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 15
        SisBarrio::create(['id' => '16', 's_barrio' => 'LOS CONSUELOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 16
        SisBarrio::create(['id' => '17', 's_barrio' => 'MARANTÁ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 17
        SisBarrio::create(['id' => '18', 's_barrio' => 'MATURÍN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 18
        SisBarrio::create(['id' => '19', 's_barrio' => 'MEDELLÍN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 19
        SisBarrio::create(['id' => '20', 's_barrio' => 'MIRADOR DEL NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 20
        SisBarrio::create(['id' => '21', 's_barrio' => 'NUEVO HORIZONTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 21
        SisBarrio::create(['id' => '22', 's_barrio' => 'SAN ANTONIO NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 22
        SisBarrio::create(['id' => '23', 's_barrio' => 'SANTANDERSITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 23
        SisBarrio::create(['id' => '24', 's_barrio' => 'TIBABITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 24
        SisBarrio::create(['id' => '25', 's_barrio' => 'VIÑA DEL MAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 25
        SisBarrio::create(['id' => '26', 's_barrio' => 'BOSQUE DE SAN ANTONIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 26
        SisBarrio::create(['id' => '27', 's_barrio' => 'CONJUNTO CAMINO DEL PALMAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 27
        SisBarrio::create(['id' => '28', 's_barrio' => 'EL PITE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 28
        SisBarrio::create(['id' => '29', 's_barrio' => 'EL REDIL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 29
        SisBarrio::create(['id' => '30', 's_barrio' => 'LA CITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 30
        SisBarrio::create(['id' => '31', 's_barrio' => 'LA GRANJA NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 31
        SisBarrio::create(['id' => '32', 's_barrio' => 'LA URIBE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 32
        SisBarrio::create(['id' => '33', 's_barrio' => 'LOS NARANJOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 33
        SisBarrio::create(['id' => '34', 's_barrio' => 'SAN JUAN BOSCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 34
        SisBarrio::create(['id' => '35', 's_barrio' => 'URBANIZACIÓN LOS LAURELES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 35
        SisBarrio::create(['id' => '36', 's_barrio' => 'AINSUCA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 36
        SisBarrio::create(['id' => '37', 's_barrio' => 'ALTABLANCA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 37
        SisBarrio::create(['id' => '38', 's_barrio' => 'BARRANCAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 38
        SisBarrio::create(['id' => '39', 's_barrio' => 'CALIFORNIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 39
        SisBarrio::create(['id' => '40', 's_barrio' => 'CERRO NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 40
        SisBarrio::create(['id' => '41', 's_barrio' => 'DANUBIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 41
        SisBarrio::create(['id' => '42', 's_barrio' => 'DON BOSCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 42
        SisBarrio::create(['id' => '43', 's_barrio' => 'LA PERLA ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 43
        SisBarrio::create(['id' => '44', 's_barrio' => 'LAS ARENERAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 44
        SisBarrio::create(['id' => '45', 's_barrio' => 'MILÁN (BARRANCAS)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 45
        SisBarrio::create(['id' => '46', 's_barrio' => 'PRADERA NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 46
        SisBarrio::create(['id' => '47', 's_barrio' => 'SAN CRISTÓBAL NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 47
        SisBarrio::create(['id' => '48', 's_barrio' => 'SAN CRISTÓBAL NORTE PARTE ALTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 48
        SisBarrio::create(['id' => '49', 's_barrio' => 'SAN CRISTÓBAL NORTE PARTE BAJA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 49
        SisBarrio::create(['id' => '50', 's_barrio' => 'SANTA TERESA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 50
        SisBarrio::create(['id' => '51', 's_barrio' => 'SORATAMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 51
        SisBarrio::create(['id' => '52', 's_barrio' => 'TORCOROMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 52
        SisBarrio::create(['id' => '53', 's_barrio' => 'VILLA NYDIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 53
        SisBarrio::create(['id' => '54', 's_barrio' => 'VILLA OLIVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 54
        SisBarrio::create(['id' => '55', 's_barrio' => 'EL TOBERÍN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 55
        SisBarrio::create(['id' => '56', 's_barrio' => 'BABILONIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 56
        SisBarrio::create(['id' => '57', 's_barrio' => 'DARANDELOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 57
        SisBarrio::create(['id' => '58', 's_barrio' => 'ESTRELLA DEL NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 58
        SisBarrio::create(['id' => '59', 's_barrio' => 'GUANOA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 59
        SisBarrio::create(['id' => '60', 's_barrio' => 'JARDÍN NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 60
        SisBarrio::create(['id' => '61', 's_barrio' => 'LA LIBERIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 61
        SisBarrio::create(['id' => '62', 's_barrio' => 'LA PRADERA NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 62
        SisBarrio::create(['id' => '63', 's_barrio' => 'LAS ORQUÍDEAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 63
        SisBarrio::create(['id' => '64', 's_barrio' => 'PANTANITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 64
        SisBarrio::create(['id' => '65', 's_barrio' => 'SANTA MÓNICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 65
        SisBarrio::create(['id' => '66', 's_barrio' => 'VILLA MAGDALA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 66
        SisBarrio::create(['id' => '67', 's_barrio' => 'VILLAS DE ARANJUEZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 67
        SisBarrio::create(['id' => '68', 's_barrio' => 'VILLAS DEL MEDITERRÁNEO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 68
        SisBarrio::create(['id' => '69', 's_barrio' => 'ZARAGOZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 69
        SisBarrio::create(['id' => '70', 's_barrio' => 'ACACIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 70
        SisBarrio::create(['id' => '71', 's_barrio' => 'ANTIGUA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 71
        SisBarrio::create(['id' => '72', 's_barrio' => 'BELMIRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 72
        SisBarrio::create(['id' => '73', 's_barrio' => 'BOSQUE DE PINOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 73
        SisBarrio::create(['id' => '74', 's_barrio' => 'CAOBOS SALAZAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 74
        SisBarrio::create(['id' => '75', 's_barrio' => 'CAPRI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 75
        SisBarrio::create(['id' => '76', 's_barrio' => 'CEDRITOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 76
        SisBarrio::create(['id' => '77', 's_barrio' => 'CEDRO BOLÍVAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 77
        SisBarrio::create(['id' => '78', 's_barrio' => 'CEDRO GOLF', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 78
        SisBarrio::create(['id' => '79', 's_barrio' => 'CEDRO MADEIRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 79
        SisBarrio::create(['id' => '80', 's_barrio' => 'CEDRO NARVÁEZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 80
        SisBarrio::create(['id' => '81', 's_barrio' => 'CEDRO SALAZAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 81
        SisBarrio::create(['id' => '82', 's_barrio' => 'EL CONTADOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 82
        SisBarrio::create(['id' => '83', 's_barrio' => 'EL RINCÓN DE LAS MARGARITAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 83
        SisBarrio::create(['id' => '84', 's_barrio' => 'LA SONORA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 84
        SisBarrio::create(['id' => '85', 's_barrio' => 'LAS MARGARITAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 85
        SisBarrio::create(['id' => '86', 's_barrio' => 'LISBOA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 86
        SisBarrio::create(['id' => '87', 's_barrio' => 'LOS CEDROS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 87
        SisBarrio::create(['id' => '88', 's_barrio' => 'LOS CEDROS ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 88
        SisBarrio::create(['id' => '89', 's_barrio' => 'MONTEARROYO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 89
        SisBarrio::create(['id' => '90', 's_barrio' => 'NUEVA AUTOPISTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 90
        SisBarrio::create(['id' => '91', 's_barrio' => 'NUEVO COUNTRY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 91
        SisBarrio::create(['id' => '92', 's_barrio' => 'SIERRAS DEL MORAL EL NOGAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 92
        SisBarrio::create(['id' => '93', 's_barrio' => 'BELLA SUIZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 93
        SisBarrio::create(['id' => '94', 's_barrio' => 'BELLAVISTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 94
        SisBarrio::create(['id' => '95', 's_barrio' => 'BOSQUE MEDINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 95
        SisBarrio::create(['id' => '96', 's_barrio' => 'EL PAÑUELITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 96
        SisBarrio::create(['id' => '97', 's_barrio' => 'EL PEDREGAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 97
        SisBarrio::create(['id' => '98', 's_barrio' => 'ESCUELA DE CABALLERÍA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 98
        SisBarrio::create(['id' => '99', 's_barrio' => 'ESCUELA DE INFANTERÍA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 99
        SisBarrio::create(['id' => '100', 's_barrio' => 'FRANCISCO MIRANDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 100
        SisBarrio::create(['id' => '101', 's_barrio' => 'GINEBRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 101
        SisBarrio::create(['id' => '102', 's_barrio' => 'LA ESPERANZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 102
        SisBarrio::create(['id' => '103', 's_barrio' => 'LA GLORIETA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 103
        SisBarrio::create(['id' => '104', 's_barrio' => 'LAS DELICIAS DEL CARMEN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 104
        SisBarrio::create(['id' => '105', 's_barrio' => 'SAGRADO CORAZÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 105
        SisBarrio::create(['id' => '106', 's_barrio' => 'SAN GABRIEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 106
        SisBarrio::create(['id' => '107', 's_barrio' => 'SANTA ANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 107
        SisBarrio::create(['id' => '108', 's_barrio' => 'SANTA ANA OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 108
        SisBarrio::create(['id' => '109', 's_barrio' => 'SANTA BÁRBARA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 109
        SisBarrio::create(['id' => '110', 's_barrio' => 'SANTA BÁRBARA ALTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 110
        SisBarrio::create(['id' => '111', 's_barrio' => 'SANTA BÁRBARA ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 111
        SisBarrio::create(['id' => '112', 's_barrio' => 'UNICERROS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 112
        SisBarrio::create(['id' => '113', 's_barrio' => 'USAQUÉN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 113
        SisBarrio::create(['id' => '114', 's_barrio' => 'COUNTRY CLUB', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 114
        SisBarrio::create(['id' => '115', 's_barrio' => 'LA CALLEJA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 115
        SisBarrio::create(['id' => '116', 's_barrio' => 'LA CAROLINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 116
        SisBarrio::create(['id' => '117', 's_barrio' => 'LA CRISTALINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 117
        SisBarrio::create(['id' => '118', 's_barrio' => 'PRADOS DEL COUNTRY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 118
        SisBarrio::create(['id' => '119', 's_barrio' => 'RECODO DEL COUNTRY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 119
        SisBarrio::create(['id' => '120', 's_barrio' => 'SANTA COLOMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 120
        SisBarrio::create(['id' => '121', 's_barrio' => 'SOATAMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 121
        SisBarrio::create(['id' => '122', 's_barrio' => 'TOLEDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 122
        SisBarrio::create(['id' => '123', 's_barrio' => 'TORRES DEL COUNTRY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 123
        SisBarrio::create(['id' => '124', 's_barrio' => 'VERGEL DEL COUNTRY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 124
        SisBarrio::create(['id' => '125', 's_barrio' => 'SANTA BÁRBARA OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 125
        SisBarrio::create(['id' => '126', 's_barrio' => 'CAMPO ALEGRE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 126
        SisBarrio::create(['id' => '127', 's_barrio' => 'MOLINOS DEL NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 127
        SisBarrio::create(['id' => '128', 's_barrio' => 'MULTICENTRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 128
        SisBarrio::create(['id' => '129', 's_barrio' => 'NAVARRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 129
        SisBarrio::create(['id' => '130', 's_barrio' => 'RINCÓN DEL CHICÓ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 130
        SisBarrio::create(['id' => '131', 's_barrio' => 'SAN PATRICIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 131
        SisBarrio::create(['id' => '132', 's_barrio' => 'SANTA BÁRBARA CENTRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 132
        SisBarrio::create(['id' => '133', 's_barrio' => 'SANTA BIBIANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 133
        SisBarrio::create(['id' => '134', 's_barrio' => 'SANTA PAULA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 134
        SisBarrio::create(['id' => '135', 's_barrio' => 'CHICÓ RESERVADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 135
        SisBarrio::create(['id' => '136', 's_barrio' => 'CHICÓ ALTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 136
        SisBarrio::create(['id' => '137', 's_barrio' => 'EL NOGAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 137
        SisBarrio::create(['id' => '138', 's_barrio' => 'EL REFUGIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 138
        SisBarrio::create(['id' => '139', 's_barrio' => 'LA CABRERA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 139
        SisBarrio::create(['id' => '140', 's_barrio' => 'LOS ROSALES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 140
        SisBarrio::create(['id' => '141', 's_barrio' => 'SEMINARIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 141
        SisBarrio::create(['id' => '142', 's_barrio' => 'TOSCANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 142
        SisBarrio::create(['id' => '143', 's_barrio' => 'LA ESPERANZA NORORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 143
        SisBarrio::create(['id' => '144', 's_barrio' => 'LA SUREÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 144
        SisBarrio::create(['id' => '145', 's_barrio' => 'SAN ISIDRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 145
        SisBarrio::create(['id' => '146', 's_barrio' => 'SAN LUIS ALTOS DEL CABO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 146
        SisBarrio::create(['id' => '147', 's_barrio' => 'BOSQUE CALDERÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 147
        SisBarrio::create(['id' => '148', 's_barrio' => 'BOSQUE CALDERÓN TEJADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 148
        SisBarrio::create(['id' => '149', 's_barrio' => 'CHAPINERO ALTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 149
        SisBarrio::create(['id' => '150', 's_barrio' => 'EL CASTILLO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 150
        SisBarrio::create(['id' => '151', 's_barrio' => 'EL PARAÍSO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 151
        SisBarrio::create(['id' => '152', 's_barrio' => 'EMAUS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 152
        SisBarrio::create(['id' => '153', 's_barrio' => 'GRANADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 153
        SisBarrio::create(['id' => '154', 's_barrio' => 'INGEMAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 154
        SisBarrio::create(['id' => '155', 's_barrio' => 'JUAN XXIII', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 155
        SisBarrio::create(['id' => '156', 's_barrio' => 'LA SALLE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 156
        SisBarrio::create(['id' => '157', 's_barrio' => 'LAS ACACIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 157
        SisBarrio::create(['id' => '158', 's_barrio' => 'LOS OLIVOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 158
        SisBarrio::create(['id' => '159', 's_barrio' => 'MARÍA CRISTINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 159
        SisBarrio::create(['id' => '160', 's_barrio' => 'MARISCAL SUCRE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 160
        SisBarrio::create(['id' => '161', 's_barrio' => 'NUEVA GRANADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 161
        SisBarrio::create(['id' => '162', 's_barrio' => 'PALOMAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 162
        SisBarrio::create(['id' => '163', 's_barrio' => 'PARDO RUBIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 163
        SisBarrio::create(['id' => '164', 's_barrio' => 'SAN MARTÍN DE PORRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 164
        SisBarrio::create(['id' => '165', 's_barrio' => 'VILLA ANITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 165
        SisBarrio::create(['id' => '166', 's_barrio' => 'VILLA DEL CERRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 166
        SisBarrio::create(['id' => '167', 's_barrio' => 'ANTIGUO COUNTRY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 167
        SisBarrio::create(['id' => '168', 's_barrio' => 'CHICÓ NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 168
        SisBarrio::create(['id' => '169', 's_barrio' => 'CHICÓ NORTE II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 169
        SisBarrio::create(['id' => '170', 's_barrio' => 'CHICÓ NORTE III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 170
        SisBarrio::create(['id' => '171', 's_barrio' => 'CHICÓ OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 171
        SisBarrio::create(['id' => '172', 's_barrio' => 'EL CHICÓ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 172
        SisBarrio::create(['id' => '173', 's_barrio' => 'EL RETIRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 173
        SisBarrio::create(['id' => '174', 's_barrio' => 'ESPARTILLAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 174
        SisBarrio::create(['id' => '175', 's_barrio' => 'LAGO GAITÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 175
        SisBarrio::create(['id' => '176', 's_barrio' => 'PORCIÊNCULA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 176
        SisBarrio::create(['id' => '177', 's_barrio' => 'QUINTA CAMACHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 177
        SisBarrio::create(['id' => '178', 's_barrio' => 'CATALUÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 178
        SisBarrio::create(['id' => '179', 's_barrio' => 'CHAPINERO CENTRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 179
        SisBarrio::create(['id' => '180', 's_barrio' => 'CHAPINERO NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 180
        SisBarrio::create(['id' => '181', 's_barrio' => 'MARLY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 181
        SisBarrio::create(['id' => '182', 's_barrio' => 'SUCRE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 182
        SisBarrio::create(['id' => '183', 's_barrio' => 'LA MERCED', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 183
        SisBarrio::create(['id' => '184', 's_barrio' => 'PARQUE CENTRAL BAVARIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 184
        SisBarrio::create(['id' => '185', 's_barrio' => 'SAN DIEGO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 185
        SisBarrio::create(['id' => '186', 's_barrio' => 'SAMPER', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 186
        SisBarrio::create(['id' => '187', 's_barrio' => 'SAN MARTÍN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 187
        SisBarrio::create(['id' => '188', 's_barrio' => 'BOSQUE IZQUIERDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 188
        SisBarrio::create(['id' => '189', 's_barrio' => 'GERMANIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 189
        SisBarrio::create(['id' => '190', 's_barrio' => 'LA MACARENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 190
        SisBarrio::create(['id' => '191', 's_barrio' => 'LA PAZ CENTRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 191
        SisBarrio::create(['id' => '192', 's_barrio' => 'LA PERSEVERANCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 192
        SisBarrio::create(['id' => '193', 's_barrio' => 'LA ALAMEDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 193
        SisBarrio::create(['id' => '194', 's_barrio' => 'LA CAPUCHINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 194
        SisBarrio::create(['id' => '195', 's_barrio' => 'VERACRUZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 195
        SisBarrio::create(['id' => '196', 's_barrio' => 'LAS NIEVES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 196
        SisBarrio::create(['id' => '197', 's_barrio' => 'SAN VICTORINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 197
        SisBarrio::create(['id' => '198', 's_barrio' => 'SANTA INÉS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 198
        SisBarrio::create(['id' => '199', 's_barrio' => 'LAS CRUCES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 199
        SisBarrio::create(['id' => '200', 's_barrio' => 'SAN BERNARDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 200
        SisBarrio::create(['id' => '201', 's_barrio' => 'ATANASIO GIRARDOT', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 201
        SisBarrio::create(['id' => '202', 's_barrio' => 'CARTAGENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 202
        SisBarrio::create(['id' => '203', 's_barrio' => 'EL BALCÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 203
        SisBarrio::create(['id' => '204', 's_barrio' => 'EL CONSUELO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 204
        SisBarrio::create(['id' => '205', 's_barrio' => 'EL DORADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 205
        SisBarrio::create(['id' => '206', 's_barrio' => 'EL GUAVIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 206
        SisBarrio::create(['id' => '207', 's_barrio' => 'EL MIRADOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 207
        SisBarrio::create(['id' => '208', 's_barrio' => 'EL ROCÍO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 208
        SisBarrio::create(['id' => '209', 's_barrio' => 'EL TRIUNFO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 209
        SisBarrio::create(['id' => '210', 's_barrio' => 'FABRICA DE LOZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 210
        SisBarrio::create(['id' => '211', 's_barrio' => 'GRAN COLOMBIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 211
        SisBarrio::create(['id' => '212', 's_barrio' => 'LA PEÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 212
        SisBarrio::create(['id' => '213', 's_barrio' => 'LOS LACHES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 213
        SisBarrio::create(['id' => '214', 's_barrio' => 'LOURDES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 214
        SisBarrio::create(['id' => '215', 's_barrio' => 'RAMÍREZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 215
        SisBarrio::create(['id' => '216', 's_barrio' => 'SAN DIONISIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 216
        SisBarrio::create(['id' => '217', 's_barrio' => 'SANTA ROSA DE LIMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 217
        SisBarrio::create(['id' => '218', 's_barrio' => 'VITELMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 218
        SisBarrio::create(['id' => '219', 's_barrio' => 'AGUAS CLARAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 219
        SisBarrio::create(['id' => '220', 's_barrio' => 'ALTOS DEL ZIPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 220
        SisBarrio::create(['id' => '221', 's_barrio' => 'AMAPOLAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 221
        SisBarrio::create(['id' => '222', 's_barrio' => 'AMAPOLAS II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 222
        SisBarrio::create(['id' => '223', 's_barrio' => 'BALCÓN DE LA CASTAÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 223
        SisBarrio::create(['id' => '224', 's_barrio' => 'BELLA VISTA SECTOR LUCERO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 224
        SisBarrio::create(['id' => '225', 's_barrio' => 'BELLAVISTA PARTE BAJA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 225
        SisBarrio::create(['id' => '226', 's_barrio' => 'BELLAVISTA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 226
        SisBarrio::create(['id' => '227', 's_barrio' => 'BOSQUE DE LOS ALPES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 227
        SisBarrio::create(['id' => '228', 's_barrio' => 'BUENAVISTA SURORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 228
        SisBarrio::create(['id' => '229', 's_barrio' => 'CAMINO VIEJO SAN CRISTÓBAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 229
        SisBarrio::create(['id' => '230', 's_barrio' => 'CERROS DE SAN VICENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 230
        SisBarrio::create(['id' => '231', 's_barrio' => 'CIUDAD DE LONDRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 231
        SisBarrio::create(['id' => '232', 's_barrio' => 'CORINTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 232
        SisBarrio::create(['id' => '233', 's_barrio' => 'EL BALCÓN DE LA CASTAÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 233
        SisBarrio::create(['id' => '234', 's_barrio' => 'EL FUTURO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 234
        SisBarrio::create(['id' => '235', 's_barrio' => 'EL RAMAJAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 235
        SisBarrio::create(['id' => '236', 's_barrio' => 'EL RAMAJAL (SAN PEDRO)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 236
        SisBarrio::create(['id' => '237', 's_barrio' => 'GRAN COLOMBIA (MOLINOS DE ORIENTE)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 237
        SisBarrio::create(['id' => '238', 's_barrio' => 'HORACIO ORJUELA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 238
        SisBarrio::create(['id' => '239', 's_barrio' => 'LA CASTAÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 239
        SisBarrio::create(['id' => '240', 's_barrio' => 'LA CECILIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 240
        SisBarrio::create(['id' => '241', 's_barrio' => 'LA GRAN COLOMBIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 241
        SisBarrio::create(['id' => '242', 's_barrio' => 'LA HERRADURA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 242
        SisBarrio::create(['id' => '243', 's_barrio' => 'LA JOYITA CENTRO (BELLO HORIZONTE)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 243
        SisBarrio::create(['id' => '244', 's_barrio' => 'LA PLAYA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 244
        SisBarrio::create(['id' => '245', 's_barrio' => 'LA ROCA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 245
        SisBarrio::create(['id' => '246', 's_barrio' => 'LA SAGRADA FAMILIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 246
        SisBarrio::create(['id' => '247', 's_barrio' => 'LAS COLUMNAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 247
        SisBarrio::create(['id' => '248', 's_barrio' => 'LAS MERCEDES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 248
        SisBarrio::create(['id' => '249', 's_barrio' => 'LAURELES SUR ORIENTAL II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 249
        SisBarrio::create(['id' => '250', 's_barrio' => 'LOS ALPES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 250
        SisBarrio::create(['id' => '251', 's_barrio' => 'LOS ALPES FUTURO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 251
        SisBarrio::create(['id' => '252', 's_barrio' => 'LOS ARRAYANES SECTOR SANTA INÉS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 252
        SisBarrio::create(['id' => '253', 's_barrio' => 'LOS LAURELES SUR ORIENTAL I SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 253
        SisBarrio::create(['id' => '254', 's_barrio' => 'MACARENA LOS ALPES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 254
        SisBarrio::create(['id' => '255', 's_barrio' => 'MANANTIAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 255
        SisBarrio::create(['id' => '256', 's_barrio' => 'MANILA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 256
        SisBarrio::create(['id' => '257', 's_barrio' => 'MIRAFLORES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 257
        SisBarrio::create(['id' => '258', 's_barrio' => 'MOLINOS DE ORIENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 258
        SisBarrio::create(['id' => '259', 's_barrio' => 'MONTECARLO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 259
        SisBarrio::create(['id' => '260', 's_barrio' => 'NUEVA ESPAÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 260
        SisBarrio::create(['id' => '261', 's_barrio' => 'NUEVA ESPAÑA PARTE ALTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 261
        SisBarrio::create(['id' => '262', 's_barrio' => 'RAMAJAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 262
        SisBarrio::create(['id' => '263', 's_barrio' => 'RINCÓN DE LA VICTORIA-BELLAVISTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 263
        SisBarrio::create(['id' => '264', 's_barrio' => 'SAGRADA FAMILIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 264
        SisBarrio::create(['id' => '265', 's_barrio' => 'SAN BLAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 265
        SisBarrio::create(['id' => '266', 's_barrio' => 'SAN BLAS (PARCELAS)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 266
        SisBarrio::create(['id' => '267', 's_barrio' => 'SAN BLAS II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 267
        SisBarrio::create(['id' => '268', 's_barrio' => 'SAN CRISTÓBAL ALTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 268
        SisBarrio::create(['id' => '269', 's_barrio' => 'SAN CRISTÓBAL VIEJO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 269
        SisBarrio::create(['id' => '270', 's_barrio' => 'SAN PEDRO SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 270
        SisBarrio::create(['id' => '271', 's_barrio' => 'SAN VICENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 271
        SisBarrio::create(['id' => '272', 's_barrio' => 'SAN VICENTE ALTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 272
        SisBarrio::create(['id' => '273', 's_barrio' => 'SAN VICENTE BAJO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 273
        SisBarrio::create(['id' => '274', 's_barrio' => 'SAN VICENTE SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 274
        SisBarrio::create(['id' => '275', 's_barrio' => 'SANTA INÉS SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 275
        SisBarrio::create(['id' => '276', 's_barrio' => 'TERRAZAS DE ORIENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 276
        SisBarrio::create(['id' => '277', 's_barrio' => 'TRIÁNGULO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 277
        SisBarrio::create(['id' => '278', 's_barrio' => 'TRIÁNGULO ALTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 278
        SisBarrio::create(['id' => '279', 's_barrio' => 'TRIÁNGULO BAJO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 279
        SisBarrio::create(['id' => '280', 's_barrio' => 'VEREDA ALTOS DE SAN BLAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 280
        SisBarrio::create(['id' => '281', 's_barrio' => 'GOLCONDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 281
        SisBarrio::create(['id' => '282', 's_barrio' => 'PRIMERO DE MAYO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 282
        SisBarrio::create(['id' => '283', 's_barrio' => 'BUENOS AIRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 283
        SisBarrio::create(['id' => '284', 's_barrio' => 'CALVO SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 284
        SisBarrio::create(['id' => '285', 's_barrio' => 'LA MARÍA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 285
        SisBarrio::create(['id' => '286', 's_barrio' => 'LAS BRISAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 286
        SisBarrio::create(['id' => '287', 's_barrio' => 'LOS DOS LEONES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 287
        SisBarrio::create(['id' => '288', 's_barrio' => 'MODELO SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 288
        SisBarrio::create(['id' => '289', 's_barrio' => 'NARIÑO SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 289
        SisBarrio::create(['id' => '290', 's_barrio' => 'QUINTA RAMOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 290
        SisBarrio::create(['id' => '291', 's_barrio' => 'REPÊBLICA DE VENEZUELA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 291
        SisBarrio::create(['id' => '292', 's_barrio' => 'SAN CRISTÓBAL SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 292
        SisBarrio::create(['id' => '293', 's_barrio' => 'SAN JAVIER', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 293
        SisBarrio::create(['id' => '294', 's_barrio' => 'SANTA ANA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 294
        SisBarrio::create(['id' => '295', 's_barrio' => 'SOSIEGO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 295
        SisBarrio::create(['id' => '296', 's_barrio' => 'VELÓDROMO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 296
        SisBarrio::create(['id' => '297', 's_barrio' => 'VILLA ALBANIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 297
        SisBarrio::create(['id' => '298', 's_barrio' => 'VILLA JAVIER', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 298
        SisBarrio::create(['id' => '299', 's_barrio' => 'ATENAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 299
        SisBarrio::create(['id' => '300', 's_barrio' => '20 DE JULIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 300
        SisBarrio::create(['id' => '301', 's_barrio' => 'ATENAS I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 301
        SisBarrio::create(['id' => '302', 's_barrio' => 'AYACUCHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 302
        SisBarrio::create(['id' => '303', 's_barrio' => 'BARCELONA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 303
        SisBarrio::create(['id' => '304', 's_barrio' => 'BARCELONA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 304
        SisBarrio::create(['id' => '305', 's_barrio' => 'BARCELONA SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 305
        SisBarrio::create(['id' => '306', 's_barrio' => 'BELLO HORIZONTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 306
        SisBarrio::create(['id' => '307', 's_barrio' => 'BELLO HORIZONTE III SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 307
        SisBarrio::create(['id' => '308', 's_barrio' => 'CÓRDOBA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 308
        SisBarrio::create(['id' => '309', 's_barrio' => 'EL ÁNGULO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 309
        SisBarrio::create(['id' => '310', 's_barrio' => 'EL ENCANTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 310
        SisBarrio::create(['id' => '311', 's_barrio' => 'GRANADA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 311
        SisBarrio::create(['id' => '312', 's_barrio' => 'GRANADA SUR III SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 312
        SisBarrio::create(['id' => '313', 's_barrio' => 'LA JOYITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 313
        SisBarrio::create(['id' => '314', 's_barrio' => 'LA SERAFINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 314
        SisBarrio::create(['id' => '315', 's_barrio' => 'MANAGUA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 315
        SisBarrio::create(['id' => '316', 's_barrio' => 'MONTEBELLO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 316
        SisBarrio::create(['id' => '317', 's_barrio' => 'SAN ISIDRO I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 317
        SisBarrio::create(['id' => '318', 's_barrio' => 'SAN ISIDRO SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 318
        SisBarrio::create(['id' => '319', 's_barrio' => 'SAN LUIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 319
        SisBarrio::create(['id' => '320', 's_barrio' => 'SUR AMÉRICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 320
        SisBarrio::create(['id' => '321', 's_barrio' => 'VILLA DE LOS ALPES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 321
        SisBarrio::create(['id' => '322', 's_barrio' => 'VILLA DE LOS ALPES I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 322
        SisBarrio::create(['id' => '323', 's_barrio' => 'VILLA NATALY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 323
        SisBarrio::create(['id' => '324', 's_barrio' => 'ALTAMIRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 324
        SisBarrio::create(['id' => '325', 's_barrio' => 'ALTAMIRA CHIQUITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 325
        SisBarrio::create(['id' => '326', 's_barrio' => 'ALTOS DEL POBLADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 326
        SisBarrio::create(['id' => '327', 's_barrio' => 'ALTOS DEL VIRREY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 327
        SisBarrio::create(['id' => '328', 's_barrio' => 'ALTOS DEL ZUQUE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 328
        SisBarrio::create(['id' => '329', 's_barrio' => 'BELLAVISTA PARTE ALTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 329
        SisBarrio::create(['id' => '330', 's_barrio' => 'EL PILAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 330
        SisBarrio::create(['id' => '331', 's_barrio' => 'BELLAVISTA SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 331
        SisBarrio::create(['id' => '332', 's_barrio' => 'CIUDADELA SANTA ROSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 332
        SisBarrio::create(['id' => '333', 's_barrio' => 'EL QUINDÍO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 333
        SisBarrio::create(['id' => '334', 's_barrio' => 'EL RECODO-REPÊBLICA DE CANADÁ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 334
        SisBarrio::create(['id' => '335', 's_barrio' => 'EL RODEO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 335
        SisBarrio::create(['id' => '336', 's_barrio' => 'LA COLMENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 336
        SisBarrio::create(['id' => '337', 's_barrio' => 'LA GLORIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 337
        SisBarrio::create(['id' => '338', 's_barrio' => 'LA GLORIA BAJA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 338
        SisBarrio::create(['id' => '339', 's_barrio' => 'LA GLORIA MZ 11', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 339
        SisBarrio::create(['id' => '340', 's_barrio' => 'LA GLORIA OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 340
        SisBarrio::create(['id' => '341', 's_barrio' => 'LA GLORIA ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 341
        SisBarrio::create(['id' => '342', 's_barrio' => 'LA GLORIA SAN MIGUEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 342
        SisBarrio::create(['id' => '343', 's_barrio' => 'LA GROVANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 343
        SisBarrio::create(['id' => '344', 's_barrio' => 'LA VICTORIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 344
        SisBarrio::create(['id' => '345', 's_barrio' => 'LA VICTORIA II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 345
        SisBarrio::create(['id' => '346', 's_barrio' => 'LA VICTORIA III SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 346
        SisBarrio::create(['id' => '347', 's_barrio' => 'LA YE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 347
        SisBarrio::create(['id' => '348', 's_barrio' => 'LAS GAVIOTAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 348
        SisBarrio::create(['id' => '349', 's_barrio' => 'LAS GUACAMAYAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 349
        SisBarrio::create(['id' => '350', 's_barrio' => 'LAS GUACAMAYAS I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 350
        SisBarrio::create(['id' => '351', 's_barrio' => 'II Y III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 351
        SisBarrio::create(['id' => '352', 's_barrio' => 'MALVINAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 352
        SisBarrio::create(['id' => '353', 's_barrio' => 'MORALBA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 353
        SisBarrio::create(['id' => '354', 's_barrio' => 'PANORAMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 354
        SisBarrio::create(['id' => '355', 's_barrio' => 'PASEITO III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 355
        SisBarrio::create(['id' => '356', 's_barrio' => 'PUENTE COLORADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 356
        SisBarrio::create(['id' => '357', 's_barrio' => 'QUINDÍO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 357
        SisBarrio::create(['id' => '358', 's_barrio' => 'QUINDÍO I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 358
        SisBarrio::create(['id' => '359', 's_barrio' => 'SAN JOSÉ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 359
        SisBarrio::create(['id' => '360', 's_barrio' => 'SAN JOSÉ ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 360
        SisBarrio::create(['id' => '361', 's_barrio' => 'SAN JOSÉ SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 361
        SisBarrio::create(['id' => '362', 's_barrio' => 'SAN MARTÍN DE LOBA I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 362
        SisBarrio::create(['id' => '363', 's_barrio' => 'SAN MARTÍN SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 363
        SisBarrio::create(['id' => '364', 's_barrio' => 'SAN MIGUEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 364
        SisBarrio::create(['id' => '365', 's_barrio' => 'ANTIOQUIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 365
        SisBarrio::create(['id' => '366', 's_barrio' => 'CANADÁ LA GUIRÁ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 366
        SisBarrio::create(['id' => '367', 's_barrio' => 'CANADÁ LA GUIRÁ II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 367
        SisBarrio::create(['id' => '368', 's_barrio' => 'CANADÁ-SAN LUIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 368
        SisBarrio::create(['id' => '369', 's_barrio' => 'CHIGUAZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 369
        SisBarrio::create(['id' => '370', 's_barrio' => 'EL PINAR (REPÊBLICA DEL CANADÁ II)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 370
        SisBarrio::create(['id' => '371', 's_barrio' => 'JUAN REY (LA PAZ)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 371
        SisBarrio::create(['id' => '372', 's_barrio' => 'LA BELLEZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 372
        SisBarrio::create(['id' => '373', 's_barrio' => 'LA NUEVA GLORIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 373
        SisBarrio::create(['id' => '374', 's_barrio' => 'LA NUEVA GLORIA II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 374
        SisBarrio::create(['id' => '375', 's_barrio' => 'LA PENÍNSULA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 375
        SisBarrio::create(['id' => '376', 's_barrio' => 'LA SIERRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 376
        SisBarrio::create(['id' => '377', 's_barrio' => 'LOS LIBERTADORES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 377
        SisBarrio::create(['id' => '378', 's_barrio' => 'LOS LIBERTADORES SECTOR EL TESORO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 378
        SisBarrio::create(['id' => '379', 's_barrio' => 'LOS LIBERTADORES SECTOR LA COLINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 379
        SisBarrio::create(['id' => '380', 's_barrio' => 'LOS LIBERTADORES SECTOR SAN IGNACIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 380
        SisBarrio::create(['id' => '381', 's_barrio' => 'LOS LIBERTADORES SECTOR SAN ISIDRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 381
        SisBarrio::create(['id' => '382', 's_barrio' => 'LOS LIBERTADORES SECTOR SAN JOSÉ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 382
        SisBarrio::create(['id' => '383', 's_barrio' => 'LOS LIBERTADORES SECTOR SAN LUIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 383
        SisBarrio::create(['id' => '384', 's_barrio' => 'LOS LIBERTADORES SECTOR SAN MIGUEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 384
        SisBarrio::create(['id' => '385', 's_barrio' => 'LOS LIBERTADORES BOSQUE DIAMANTE TRIÁNGULO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 385
        SisBarrio::create(['id' => '386', 's_barrio' => 'LOS PINARES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 386
        SisBarrio::create(['id' => '387', 's_barrio' => 'LOS PINOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 387
        SisBarrio::create(['id' => '388', 's_barrio' => 'LOS PUENTES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 388
        SisBarrio::create(['id' => '389', 's_barrio' => 'NUEVA DELHI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 389
        SisBarrio::create(['id' => '390', 's_barrio' => 'NUEVA GLORIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 390
        SisBarrio::create(['id' => '391', 's_barrio' => 'NUEVA ROMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 391
        SisBarrio::create(['id' => '392', 's_barrio' => 'NUEVAS MALVINAS (EL TRIUNFO)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 392
        SisBarrio::create(['id' => '393', 's_barrio' => 'REPÊBLICA DEL CANADÁ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 393
        SisBarrio::create(['id' => '394', 's_barrio' => 'REPÊBLICA DEL CANADÁ-EL PINAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 394
        SisBarrio::create(['id' => '395', 's_barrio' => 'SAN JACINTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 395
        SisBarrio::create(['id' => '396', 's_barrio' => 'SAN MANUEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 396
        SisBarrio::create(['id' => '397', 's_barrio' => 'SAN RAFAEL SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 397
        SisBarrio::create(['id' => '398', 's_barrio' => 'SAN RAFAEL USME', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 398
        SisBarrio::create(['id' => '399', 's_barrio' => 'SANTA RITA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 399
        SisBarrio::create(['id' => '400', 's_barrio' => 'SANTA RITA SUR ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 400
        SisBarrio::create(['id' => '401', 's_barrio' => 'VALPARAÍSO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 401
        SisBarrio::create(['id' => '402', 's_barrio' => 'VILLA ANGÉLICA-CANADÁ-LA GUIRÁ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 402
        SisBarrio::create(['id' => '403', 's_barrio' => 'VILLA AURORA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 403
        SisBarrio::create(['id' => '404', 's_barrio' => 'VILLABELL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 404
        SisBarrio::create(['id' => '405', 's_barrio' => 'YOMASA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 405
        SisBarrio::create(['id' => '406', 's_barrio' => 'VILLA ANGÉLICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 406
        SisBarrio::create(['id' => '407', 's_barrio' => 'EL PARAÍSO SUR ORIENTAL I SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 407
        SisBarrio::create(['id' => '408', 's_barrio' => 'JUAN REY I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 408
        SisBarrio::create(['id' => '409', 's_barrio' => 'VILLA BEGONIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 409
        SisBarrio::create(['id' => '410', 's_barrio' => 'COSTA RICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 410
        SisBarrio::create(['id' => '411', 's_barrio' => 'DOÑA LILIANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 411
        SisBarrio::create(['id' => '412', 's_barrio' => 'EL BOSQUE KM. 11', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 412
        SisBarrio::create(['id' => '413', 's_barrio' => 'JUAN JOSÉ RONDÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 413
        SisBarrio::create(['id' => '414', 's_barrio' => 'JUAN JOSÉ RONDÓN II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 414
        SisBarrio::create(['id' => '415', 's_barrio' => 'LA CABAÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 415
        SisBarrio::create(['id' => '416', 's_barrio' => 'LA FLORA-PARCELACIÓN SAN PEDRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 416
        SisBarrio::create(['id' => '417', 's_barrio' => 'LAS VIOLETAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 417
        SisBarrio::create(['id' => '418', 's_barrio' => 'LOS ARRAYANES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 418
        SisBarrio::create(['id' => '419', 's_barrio' => 'LOS SOCHES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 419
        SisBarrio::create(['id' => '420', 's_barrio' => 'TIHUAQUE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 420
        SisBarrio::create(['id' => '421', 's_barrio' => 'UNIÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 421
        SisBarrio::create(['id' => '422', 's_barrio' => 'VILLA DIANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 422
        SisBarrio::create(['id' => '423', 's_barrio' => 'VILLA ROSITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 423
        SisBarrio::create(['id' => '424', 's_barrio' => 'ALASKA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 424
        SisBarrio::create(['id' => '425', 's_barrio' => 'ARRAYANES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 425
        SisBarrio::create(['id' => '426', 's_barrio' => 'DANUBIO AZUL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 426
        SisBarrio::create(['id' => '427', 's_barrio' => 'DAZA SECTOR II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 427
        SisBarrio::create(['id' => '428', 's_barrio' => 'DUITAMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 428
        SisBarrio::create(['id' => '429', 's_barrio' => 'EL PORVENIR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 429
        SisBarrio::create(['id' => '430', 's_barrio' => 'EL PORVENIR II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 430
        SisBarrio::create(['id' => '431', 's_barrio' => 'FISCALA II LA FORTUNA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 431
        SisBarrio::create(['id' => '432', 's_barrio' => 'FISCALA SECTOR CENTRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 432
        SisBarrio::create(['id' => '433', 's_barrio' => 'LA FISCALA-LOS TRES LAURELES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 433
        SisBarrio::create(['id' => '434', 's_barrio' => 'LA FISCALA-LOTE 16', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 434
        SisBarrio::create(['id' => '435', 's_barrio' => 'LA FISCALA-LOTE 16A', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 435
        SisBarrio::create(['id' => '436', 's_barrio' => 'LA FISCALA SECTOR DAZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 436
        SisBarrio::create(['id' => '437', 's_barrio' => 'LA FISCALA SECTOR NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 437
        SisBarrio::create(['id' => '438', 's_barrio' => 'LA FISCALA SECTOR RODRÍGUEZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 438
        SisBarrio::create(['id' => '439', 's_barrio' => 'LA MORENA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 439
        SisBarrio::create(['id' => '440', 's_barrio' => 'LA MORENA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 440
        SisBarrio::create(['id' => '441', 's_barrio' => 'LA MORENA II (SECTOR VILLA SANDRA)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 441
        SisBarrio::create(['id' => '442', 's_barrio' => 'NUEVA ESPERANZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 442
        SisBarrio::create(['id' => '443', 's_barrio' => 'VILLA NEIZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 443
        SisBarrio::create(['id' => '444', 's_barrio' => 'PICOTA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 444
        SisBarrio::create(['id' => '445', 's_barrio' => 'PORVENIR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 445
        SisBarrio::create(['id' => '446', 's_barrio' => 'ALMIRANTE PADILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 446
        SisBarrio::create(['id' => '447', 's_barrio' => 'ALTOS DEL PINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 447
        SisBarrio::create(['id' => '448', 's_barrio' => 'ARIZONA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 448
        SisBarrio::create(['id' => '449', 's_barrio' => 'BARRANQUILLITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 449
        SisBarrio::create(['id' => '450', 's_barrio' => 'BENJAMIN URIBE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 450
        SisBarrio::create(['id' => '451', 's_barrio' => 'BETANIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 451
        SisBarrio::create(['id' => '452', 's_barrio' => 'BETANIA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 452
        SisBarrio::create(['id' => '453', 's_barrio' => 'BOLONIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 453
        SisBarrio::create(['id' => '454', 's_barrio' => 'BULEVAR DEL SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 454
        SisBarrio::create(['id' => '455', 's_barrio' => 'CASA LOMA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 455
        SisBarrio::create(['id' => '456', 's_barrio' => 'CASA REY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 456
        SisBarrio::create(['id' => '457', 's_barrio' => 'CASALOMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 457
        SisBarrio::create(['id' => '458', 's_barrio' => 'COMPOSTELA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 458
        SisBarrio::create(['id' => '459', 's_barrio' => 'COMPOSTELA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 459
        SisBarrio::create(['id' => '460', 's_barrio' => 'COMPOSTELA III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 460
        SisBarrio::create(['id' => '461', 's_barrio' => 'EL BOSQUE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 461
        SisBarrio::create(['id' => '462', 's_barrio' => 'EL CORTIJO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 462
        SisBarrio::create(['id' => '463', 's_barrio' => 'EL CURUBO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 463
        SisBarrio::create(['id' => '464', 's_barrio' => 'EL JORDÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 464
        SisBarrio::create(['id' => '465', 's_barrio' => 'EL NEVADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 465
        SisBarrio::create(['id' => '466', 's_barrio' => 'EL RECUERDO SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 466
        SisBarrio::create(['id' => '467', 's_barrio' => 'EL REFUGIO SECTOR SANTA LIBRADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 467
        SisBarrio::create(['id' => '468', 's_barrio' => 'EL ROSAL-MIRADOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 468
        SisBarrio::create(['id' => '469', 's_barrio' => 'EL RUBÍ II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 469
        SisBarrio::create(['id' => '470', 's_barrio' => 'GRAN YOMASA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 470
        SisBarrio::create(['id' => '471', 's_barrio' => 'GRAN YOMASA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 471
        SisBarrio::create(['id' => '472', 's_barrio' => 'LA ANDREA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 472
        SisBarrio::create(['id' => '473', 's_barrio' => 'LA AURORA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 473
        SisBarrio::create(['id' => '474', 's_barrio' => 'LA FORTALEZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 474
        SisBarrio::create(['id' => '475', 's_barrio' => 'LA REGADERA KM. 11', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 475
        SisBarrio::create(['id' => '476', 's_barrio' => 'LA REGADERA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 476
        SisBarrio::create(['id' => '477', 's_barrio' => 'LAS GRANJAS DE SAN PEDRO (SANTA LIBRADA)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 477
        SisBarrio::create(['id' => '478', 's_barrio' => 'LAS VIVIENDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 478
        SisBarrio::create(['id' => '479', 's_barrio' => 'LOS TEJARES SUR II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 479
        SisBarrio::create(['id' => '480', 's_barrio' => 'NUEVO SAN ANDRÉS DE LOS ALTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 480
        SisBarrio::create(['id' => '481', 's_barrio' => 'OLIVARES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 481
        SisBarrio::create(['id' => '482', 's_barrio' => 'SALAZAR SALAZAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 482
        SisBarrio::create(['id' => '483', 's_barrio' => 'SAN ANDRÉS ALTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 483
        SisBarrio::create(['id' => '484', 's_barrio' => 'SAN FELIPE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 484
        SisBarrio::create(['id' => '485', 's_barrio' => 'SAN JUAN BAUTISTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 485
        SisBarrio::create(['id' => '486', 's_barrio' => 'SAN JUAN I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 486
        SisBarrio::create(['id' => '487', 's_barrio' => 'SAN JUAN II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 487
        SisBarrio::create(['id' => '488', 's_barrio' => 'SAN JUAN II Y III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 488
        SisBarrio::create(['id' => '489', 's_barrio' => 'SAN PABLO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 489
        SisBarrio::create(['id' => '490', 's_barrio' => 'SANTA LIBRADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 490
        SisBarrio::create(['id' => '491', 's_barrio' => 'SANTA LIBRADA-LA ESPERANZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 491
        SisBarrio::create(['id' => '492', 's_barrio' => 'SANTA LIBRADA-LA SUREÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 492
        SisBarrio::create(['id' => '493', 's_barrio' => 'SANTA LIBRADA-LOS TEJARES (GRAN YOMASA)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 493
        SisBarrio::create(['id' => '494', 's_barrio' => 'SANTA LIBRADA NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 494
        SisBarrio::create(['id' => '495', 's_barrio' => 'SANTA LIBRADA-SAN BERNARDINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 495
        SisBarrio::create(['id' => '496', 's_barrio' => 'SANTA LIBRADA-SAN FRANCISCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 496
        SisBarrio::create(['id' => '497', 's_barrio' => 'SANTA LIBRADA-SALAZAR SALAZAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 497
        SisBarrio::create(['id' => '498', 's_barrio' => 'SANTA LIBRADA SECTOR LA PEÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 498
        SisBarrio::create(['id' => '499', 's_barrio' => 'SANTA MARTA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 499
        SisBarrio::create(['id' => '500', 's_barrio' => 'SANTA MARTHA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 500
        SisBarrio::create(['id' => '501', 's_barrio' => 'SIERRA MORENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 501
        SisBarrio::create(['id' => '502', 's_barrio' => 'TENERIFE II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 502
        SisBarrio::create(['id' => '503', 's_barrio' => 'URBANIZACIÓN COSTA RICA-SAN ANDRÉS DE LOS ALTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 503
        SisBarrio::create(['id' => '504', 's_barrio' => 'URBANIZACIÓN BRASILIA II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 504
        SisBarrio::create(['id' => '505', 's_barrio' => 'URBANIZACIÓN BRASILIA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 505
        SisBarrio::create(['id' => '506', 's_barrio' => 'URBANIZACIÓN CARTAGENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 506
        SisBarrio::create(['id' => '507', 's_barrio' => 'URBANIZACIÓN LA ANDREA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 507
        SisBarrio::create(['id' => '508', 's_barrio' => 'URBANIZACIÓN LA AURORA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 508
        SisBarrio::create(['id' => '509', 's_barrio' => 'URBANIZACIÓN MIRAVALLE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 509
        SisBarrio::create(['id' => '510', 's_barrio' => 'URBANIZACIÓN TEQUENDAMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 510
        SisBarrio::create(['id' => '511', 's_barrio' => 'VALLES DE CAFAM', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 511
        SisBarrio::create(['id' => '512', 's_barrio' => 'VIANEY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 512
        SisBarrio::create(['id' => '513', 's_barrio' => 'VILLA ALEJANDRÍA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 513
        SisBarrio::create(['id' => '514', 's_barrio' => 'VILLA NELLY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 514
        SisBarrio::create(['id' => '515', 's_barrio' => 'VILLAS DE SANTA ISABEL (PARQUE ENTRENUBES)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 515
        SisBarrio::create(['id' => '516', 's_barrio' => 'VILLAS DEL EDÉN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 516
        SisBarrio::create(['id' => '517', 's_barrio' => 'YOMASITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 517
        SisBarrio::create(['id' => '518', 's_barrio' => 'ALFONSO LÓPEZ SECTOR CHARALÁ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 518
        SisBarrio::create(['id' => '519', 's_barrio' => 'ANTONIO JOSÉ DE SUCRE I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 519
        SisBarrio::create(['id' => '520', 's_barrio' => 'BELLAVISTA ALTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 520
        SisBarrio::create(['id' => '521', 's_barrio' => 'BELLAVISTA II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 521
        SisBarrio::create(['id' => '522', 's_barrio' => 'BOSQUE EL LIMONAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 522
        SisBarrio::create(['id' => '523', 's_barrio' => 'BOSQUE EL LIMONAR II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 523
        SisBarrio::create(['id' => '524', 's_barrio' => 'BRAZUELOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 524
        SisBarrio::create(['id' => '525', 's_barrio' => 'BRAZUELOS OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 525
        SisBarrio::create(['id' => '526', 's_barrio' => 'BRAZUELOS-EL PARAÍSO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 526
        SisBarrio::create(['id' => '527', 's_barrio' => 'BRAZUELOS-LA ESMERALDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 527
        SisBarrio::create(['id' => '528', 's_barrio' => 'CENTRO EDUCATIVO SAN JOSÉ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 528
        SisBarrio::create(['id' => '529', 's_barrio' => 'CHAPINERITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 529
        SisBarrio::create(['id' => '530', 's_barrio' => 'CHICÓ SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 530
        SisBarrio::create(['id' => '531', 's_barrio' => 'CHICÓ SUR II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 531
        SisBarrio::create(['id' => '532', 's_barrio' => 'CIUDADELA CANTARRANA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 532
        SisBarrio::create(['id' => '533', 's_barrio' => 'II Y III SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 533
        SisBarrio::create(['id' => '534', 's_barrio' => 'COMUNEROS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 534
        SisBarrio::create(['id' => '535', 's_barrio' => 'EL BRILLANTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 535
        SisBarrio::create(['id' => '536', 's_barrio' => 'EL ESPINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 536
        SisBarrio::create(['id' => '537', 's_barrio' => 'EL MORTIÑO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 537
        SisBarrio::create(['id' => '538', 's_barrio' => 'EL RUBÍ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 538
        SisBarrio::create(['id' => '539', 's_barrio' => 'EL TUNO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 539
        SisBarrio::create(['id' => '540', 's_barrio' => 'EL UVAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 540
        SisBarrio::create(['id' => '541', 's_barrio' => 'EL VIRREY ÊLTIMA ETAPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 541
        SisBarrio::create(['id' => '542', 's_barrio' => 'FINCA LA ESPERANZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 542
        SisBarrio::create(['id' => '543', 's_barrio' => 'LA ESMERALDA-EL RECUERDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 543
        SisBarrio::create(['id' => '544', 's_barrio' => 'LA ESPERANZA KM. 10', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 544
        SisBarrio::create(['id' => '545', 's_barrio' => 'LAS FLORES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 545
        SisBarrio::create(['id' => '546', 's_barrio' => 'LORENZO ALCANTUZ I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 546
        SisBarrio::create(['id' => '547', 's_barrio' => 'LORENZO ALCANTUZ II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 547
        SisBarrio::create(['id' => '548', 's_barrio' => 'LOS ALTOS DEL BRAZUELO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 548
        SisBarrio::create(['id' => '549', 's_barrio' => 'MARICHUELA III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 549
        SisBarrio::create(['id' => '550', 's_barrio' => 'MONTEBLANCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 550
        SisBarrio::create(['id' => '551', 's_barrio' => 'MONTEVÍDEO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 551
        SisBarrio::create(['id' => '552', 's_barrio' => 'NUEVO SAN LUIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 552
        SisBarrio::create(['id' => '553', 's_barrio' => 'SAN JOAQUÍN-EL UVAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 553
        SisBarrio::create(['id' => '554', 's_barrio' => 'SECTOR GRANJAS DE SAN PEDRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 554
        SisBarrio::create(['id' => '555', 's_barrio' => 'TENERIFE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 555
        SisBarrio::create(['id' => '556', 's_barrio' => 'URBANIZACIÓN CHUNIZA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 556
        SisBarrio::create(['id' => '557', 's_barrio' => 'URBANIZACIÓN JARÓN MONTE RUBIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 557
        SisBarrio::create(['id' => '558', 's_barrio' => 'URBANIZACIÓN LÍBANO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 558
        SisBarrio::create(['id' => '559', 's_barrio' => 'URBANIZACIÓN MARICHUELA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 559
        SisBarrio::create(['id' => '560', 's_barrio' => 'USMINIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 560
        SisBarrio::create(['id' => '561', 's_barrio' => 'VILLA ALEMANIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 561
        SisBarrio::create(['id' => '562', 's_barrio' => 'VILLA ALEMANIA II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 562
        SisBarrio::create(['id' => '563', 's_barrio' => 'VILLA ANITA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 563
        SisBarrio::create(['id' => '564', 's_barrio' => 'VILLA ISRAEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 564
        SisBarrio::create(['id' => '565', 's_barrio' => 'VILLA ISRAEL II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 565
        SisBarrio::create(['id' => '566', 's_barrio' => 'ALFONSO LÓPEZ SECTOR BUENOS AIRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 566
        SisBarrio::create(['id' => '567', 's_barrio' => 'ALFONSO LÓPEZ SECTOR EL PROGRESO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 567
        SisBarrio::create(['id' => '568', 's_barrio' => 'BRISAS DEL LLANO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 568
        SisBarrio::create(['id' => '569', 's_barrio' => 'EL NUEVO PORTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 569
        SisBarrio::create(['id' => '570', 's_barrio' => 'EL PORTAL II ETAPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 570
        SisBarrio::create(['id' => '571', 's_barrio' => 'EL PROGRESO USME', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 571
        SisBarrio::create(['id' => '572', 's_barrio' => 'EL REFUGIO I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 572
        SisBarrio::create(['id' => '573', 's_barrio' => 'EL TRIÁNGULO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 573
        SisBarrio::create(['id' => '574', 's_barrio' => 'EL UVAL II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 574
        SisBarrio::create(['id' => '575', 's_barrio' => 'LA HUERTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 575
        SisBarrio::create(['id' => '576', 's_barrio' => 'LA ORQUÍDEA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 576
        SisBarrio::create(['id' => '577', 's_barrio' => 'LA REFORMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 577
        SisBarrio::create(['id' => '578', 's_barrio' => 'NUEVO PORVENIR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 578
        SisBarrio::create(['id' => '579', 's_barrio' => 'NUEVO PROGRESO-EL PROGRESO II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 579
        SisBarrio::create(['id' => '580', 's_barrio' => 'PORTAL DE LA VEGA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 580
        SisBarrio::create(['id' => '581', 's_barrio' => 'PORTAL DE ORIENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 581
        SisBarrio::create(['id' => '582', 's_barrio' => 'PORTAL DEL DIVINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 582
        SisBarrio::create(['id' => '583', 's_barrio' => 'PUERTA AL LLANO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 583
        SisBarrio::create(['id' => '584', 's_barrio' => 'PUERTA AL LLANO II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 584
        SisBarrio::create(['id' => '585', 's_barrio' => 'REFUGIO I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 585
        SisBarrio::create(['id' => '586', 's_barrio' => 'VILLA HERMOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 586
        SisBarrio::create(['id' => '587', 's_barrio' => 'EL BOSQUE CENTRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 587
        SisBarrio::create(['id' => '588', 's_barrio' => 'EL NUEVO PORTAL II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 588
        SisBarrio::create(['id' => '589', 's_barrio' => 'EL REFUGIO I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 589
        SisBarrio::create(['id' => '590', 's_barrio' => 'LA ESPERANZA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 590
        SisBarrio::create(['id' => '591', 's_barrio' => 'LOS OLIVARES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 591
        SisBarrio::create(['id' => '592', 's_barrio' => 'PEPINITOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 592
        SisBarrio::create(['id' => '593', 's_barrio' => 'TOCAIMITA ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 593
        SisBarrio::create(['id' => '594', 's_barrio' => 'TOCAIMITA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 594
        SisBarrio::create(['id' => '595', 's_barrio' => 'CIUDADELA EL OASIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 595
        SisBarrio::create(['id' => '596', 's_barrio' => 'USME-CENTRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 596
        SisBarrio::create(['id' => '597', 's_barrio' => 'EL PEDREGAL-LA LIRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 597
        SisBarrio::create(['id' => '598', 's_barrio' => 'EL SALTEADOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 598
        SisBarrio::create(['id' => '599', 's_barrio' => 'FÁTIMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 599
        SisBarrio::create(['id' => '600', 's_barrio' => 'ISLA DEL SOL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 600
        SisBarrio::create(['id' => '601', 's_barrio' => 'LAGUNETA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 601
        SisBarrio::create(['id' => '602', 's_barrio' => 'NUEVO MUZÊ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 602
        SisBarrio::create(['id' => '603', 's_barrio' => 'RINCÓN DE MUZÊ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 603
        SisBarrio::create(['id' => '604', 's_barrio' => 'RINCÓN DE VENECIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 604
        SisBarrio::create(['id' => '605', 's_barrio' => 'SAMORE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 605
        SisBarrio::create(['id' => '606', 's_barrio' => 'SAN VICENTE FERRER', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 606
        SisBarrio::create(['id' => '607', 's_barrio' => 'TEJAR DE ONTARIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 607
        SisBarrio::create(['id' => '608', 's_barrio' => 'VENECIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 608
        SisBarrio::create(['id' => '609', 's_barrio' => 'CIUDAD TUNAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 609
        SisBarrio::create(['id' => '610', 's_barrio' => 'ABRAHAM LINCOLN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 610
        SisBarrio::create(['id' => '611', 's_barrio' => 'SAN BENITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 611
        SisBarrio::create(['id' => '612', 's_barrio' => 'SAN CARLOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 612
        SisBarrio::create(['id' => '613', 's_barrio' => 'TUNJUELITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 613
        SisBarrio::create(['id' => '614', 's_barrio' => 'JARDINES DEL APOGEO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 614
        SisBarrio::create(['id' => '615', 's_barrio' => 'EL MOTORISTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 615
        SisBarrio::create(['id' => '616', 's_barrio' => 'INDUSTRIAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 616
        SisBarrio::create(['id' => '617', 's_barrio' => 'LA ILUSIÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 617
        SisBarrio::create(['id' => '618', 's_barrio' => 'NUEVO CHILE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 618
        SisBarrio::create(['id' => '619', 's_barrio' => 'OLARTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 619
        SisBarrio::create(['id' => '620', 's_barrio' => 'VILLA DEL RÍO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 620
        SisBarrio::create(['id' => '621', 's_barrio' => 'AMARU', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 621
        SisBarrio::create(['id' => '622', 's_barrio' => 'BERLÍN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 622
        SisBarrio::create(['id' => '623', 's_barrio' => 'BERLÍN DE BOSA LA LIBERTAD III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 623
        SisBarrio::create(['id' => '624', 's_barrio' => 'BOSA NOVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 624
        SisBarrio::create(['id' => '625', 's_barrio' => 'BOSA NOVA II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 625
        SisBarrio::create(['id' => '626', 's_barrio' => 'BOSALINDA (HOLDEBRANDO OLARTE)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 626
        SisBarrio::create(['id' => '627', 's_barrio' => 'BRASIL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 627
        SisBarrio::create(['id' => '628', 's_barrio' => 'BRASILIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 628
        SisBarrio::create(['id' => '629', 's_barrio' => 'CAMPO HERMOSO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 629
        SisBarrio::create(['id' => '630', 's_barrio' => 'CASA NUEVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 630
        SisBarrio::create(['id' => '631', 's_barrio' => 'CHICALA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 631
        SisBarrio::create(['id' => '632', 's_barrio' => 'CIUDADELA LA LIBERTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 632
        SisBarrio::create(['id' => '633', 's_barrio' => 'EL BOSQUE DE BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 633
        SisBarrio::create(['id' => '634', 's_barrio' => 'EL CAUCE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 634
        SisBarrio::create(['id' => '635', 's_barrio' => 'EL DIAMANTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 635
        SisBarrio::create(['id' => '636', 's_barrio' => 'EL LIBERTADOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 636
        SisBarrio::create(['id' => '637', 's_barrio' => 'EL PARADERO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 637
        SisBarrio::create(['id' => '638', 's_barrio' => 'EL PORTAL DE LA LIBERTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 638
        SisBarrio::create(['id' => '639', 's_barrio' => 'EL PROGRESO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 639
        SisBarrio::create(['id' => '640', 's_barrio' => 'EL RECUERDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 640
        SisBarrio::create(['id' => '641', 's_barrio' => 'EL RINCÓN DE BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 641
        SisBarrio::create(['id' => '642', 's_barrio' => 'EL SAUCE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 642
        SisBarrio::create(['id' => '643', 's_barrio' => 'ESCOCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 643
        SisBarrio::create(['id' => '644', 's_barrio' => 'HOLANDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 644
        SisBarrio::create(['id' => '645', 's_barrio' => 'HORTELANOS DE ESCOCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 645
        SisBarrio::create(['id' => '646', 's_barrio' => 'JORGE URIBE BOTERO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 646
        SisBarrio::create(['id' => '647', 's_barrio' => 'LA CONCEPCIÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 647
        SisBarrio::create(['id' => '648', 's_barrio' => 'LA DULCINEA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 648
        SisBarrio::create(['id' => '649', 's_barrio' => 'LA ESMERALDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 649
        SisBarrio::create(['id' => '650', 's_barrio' => 'LA ESTANZUELA I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 650
        SisBarrio::create(['id' => '651', 's_barrio' => 'LA FLORIDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 651
        SisBarrio::create(['id' => '652', 's_barrio' => 'LA FONTANA DE BOSA-LA LIBERTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 652
        SisBarrio::create(['id' => '653', 's_barrio' => 'LA INDEPENDENCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 653
        SisBarrio::create(['id' => '654', 's_barrio' => 'LA LIBERTAD I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 654
        SisBarrio::create(['id' => '655', 's_barrio' => 'II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 655
        SisBarrio::create(['id' => '656', 's_barrio' => 'III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 656
        SisBarrio::create(['id' => '657', 's_barrio' => 'IV', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 657
        SisBarrio::create(['id' => '658', 's_barrio' => 'LA MAGNOLIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 658
        SisBarrio::create(['id' => '659', 's_barrio' => 'LA PALMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 659
        SisBarrio::create(['id' => '660', 's_barrio' => 'LA PAZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 660
        SisBarrio::create(['id' => '661', 's_barrio' => 'LA PORTADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 661
        SisBarrio::create(['id' => '662', 's_barrio' => 'LA PORTADITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 662
        SisBarrio::create(['id' => '663', 's_barrio' => 'LA VEGUITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 663
        SisBarrio::create(['id' => '664', 's_barrio' => 'LAS VEGAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 664
        SisBarrio::create(['id' => '665', 's_barrio' => 'LOS OCALES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 665
        SisBarrio::create(['id' => '666', 's_barrio' => 'LOS SAUCES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 666
        SisBarrio::create(['id' => '667', 's_barrio' => 'MIAMI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 667
        SisBarrio::create(['id' => '668', 's_barrio' => 'NEW JERSEY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 668
        SisBarrio::create(['id' => '669', 's_barrio' => 'NUESTRA SEÑORA DE LA PAZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 669
        SisBarrio::create(['id' => '670', 's_barrio' => 'NUEVA ESCOCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 670
        SisBarrio::create(['id' => '671', 's_barrio' => 'POTRERITOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 671
        SisBarrio::create(['id' => '672', 's_barrio' => 'SAN ANTONIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 672
        SisBarrio::create(['id' => '673', 's_barrio' => 'SAN ANTONIO DE BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 673
        SisBarrio::create(['id' => '674', 's_barrio' => 'SAN ANTONIO DE ESCOCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 674
        SisBarrio::create(['id' => '675', 's_barrio' => 'SAN BERNARDINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 675
        SisBarrio::create(['id' => '676', 's_barrio' => 'SAN JORGE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 676
        SisBarrio::create(['id' => '677', 's_barrio' => 'SAN JUANITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 677
        SisBarrio::create(['id' => '678', 's_barrio' => 'SAN PEDRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 678
        SisBarrio::create(['id' => '679', 's_barrio' => 'SAUCES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 679
        SisBarrio::create(['id' => '680', 's_barrio' => 'SIRACUZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 680
        SisBarrio::create(['id' => '681', 's_barrio' => 'TOKIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 681
        SisBarrio::create(['id' => '682', 's_barrio' => 'VEGAS DE SANTANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 682
        SisBarrio::create(['id' => '683', 's_barrio' => 'VILLA CAROLINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 683
        SisBarrio::create(['id' => '684', 's_barrio' => 'VILLA CLEMENCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 684
        SisBarrio::create(['id' => '685', 's_barrio' => 'VILLA COLOMBIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 685
        SisBarrio::create(['id' => '686', 's_barrio' => 'VILLA DE LOS COMUNEROS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 686
        SisBarrio::create(['id' => '687', 's_barrio' => 'VILLA DE SUAITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 687
        SisBarrio::create(['id' => '688', 's_barrio' => 'VILLA MAGNOLIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 688
        SisBarrio::create(['id' => '689', 's_barrio' => 'VILLA NATALIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 689
        SisBarrio::create(['id' => '690', 's_barrio' => 'VILLA NOHORA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 690
        SisBarrio::create(['id' => '691', 's_barrio' => 'VILLA SONIA I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 691
        SisBarrio::create(['id' => '692', 's_barrio' => 'VILLAS DEL PROGRESO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 692
        SisBarrio::create(['id' => '693', 's_barrio' => 'VILLAS DEL VELERO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 693
        SisBarrio::create(['id' => '694', 's_barrio' => 'CAMPO VERDE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 694
        SisBarrio::create(['id' => '695', 's_barrio' => 'ANDALUCÍA I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 695
        SisBarrio::create(['id' => '696', 's_barrio' => 'ANTONIA SANTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 696
        SisBarrio::create(['id' => '697', 's_barrio' => 'ARGELIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 697
        SisBarrio::create(['id' => '698', 's_barrio' => 'BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 698
        SisBarrio::create(['id' => '699', 's_barrio' => 'BOSQUES DE MERYLAND', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 699
        SisBarrio::create(['id' => '700', 's_barrio' => 'BRASILIA-LA ESTACIÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 700
        SisBarrio::create(['id' => '701', 's_barrio' => 'CARLOS ALBÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 701
        SisBarrio::create(['id' => '702', 's_barrio' => 'CHARLES DE GAULLE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 702
        SisBarrio::create(['id' => '703', 's_barrio' => 'CLARETIANO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 703
        SisBarrio::create(['id' => '704', 's_barrio' => 'EL JARDÍN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 704
        SisBarrio::create(['id' => '705', 's_barrio' => 'EL LLANO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 705
        SisBarrio::create(['id' => '706', 's_barrio' => 'EL PALMAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 706
        SisBarrio::create(['id' => '707', 's_barrio' => 'EL PORTAL DE BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 707
        SisBarrio::create(['id' => '708', 's_barrio' => 'EL POVENIR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 708
        SisBarrio::create(['id' => '709', 's_barrio' => 'EL RETAZO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 709
        SisBarrio::create(['id' => '710', 's_barrio' => 'EL TOCHE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 710
        SisBarrio::create(['id' => '711', 's_barrio' => 'GETSEMANÍ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 711
        SisBarrio::create(['id' => '712', 's_barrio' => 'GRANCOLOMBIANO I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 712
        SisBarrio::create(['id' => '713', 's_barrio' => 'GUALOCHE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 713
        SisBarrio::create(['id' => '714', 's_barrio' => 'HERMANOS BARRAGÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 714
        SisBarrio::create(['id' => '715', 's_barrio' => 'HUMBERTO VALENCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 715
        SisBarrio::create(['id' => '716', 's_barrio' => 'ISLANDIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 716
        SisBarrio::create(['id' => '717', 's_barrio' => 'ISRAELITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 717
        SisBarrio::create(['id' => '718', 's_barrio' => 'JIMÉNEZ DE QUESADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 718
        SisBarrio::create(['id' => '719', 's_barrio' => 'JOSÉ ANTONIO GALÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 719
        SisBarrio::create(['id' => '720', 's_barrio' => 'JOSÉ MARÍA CARBONEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 720
        SisBarrio::create(['id' => '721', 's_barrio' => 'LA AMISTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 721
        SisBarrio::create(['id' => '722', 's_barrio' => 'LA AZUCENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 722
        SisBarrio::create(['id' => '723', 's_barrio' => 'LA ESTACIÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 723
        SisBarrio::create(['id' => '724', 's_barrio' => 'LA RIVIERA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 724
        SisBarrio::create(['id' => '725', 's_barrio' => 'LAURELES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 725
        SisBarrio::create(['id' => '726', 's_barrio' => 'LLANO ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 726
        SisBarrio::create(['id' => '727', 's_barrio' => 'LLANOS DE BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 727
        SisBarrio::create(['id' => '728', 's_barrio' => 'MANZANARES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 728
        SisBarrio::create(['id' => '729', 's_barrio' => 'MITRANI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 729
        SisBarrio::create(['id' => '730', 's_barrio' => 'NARANJOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 730
        SisBarrio::create(['id' => '731', 's_barrio' => 'BOSA PALESTINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 731
        SisBarrio::create(['id' => '732', 's_barrio' => 'PASO ANCHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 732
        SisBarrio::create(['id' => '733', 's_barrio' => 'PIAMONTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 733
        SisBarrio::create(['id' => '734', 's_barrio' => 'PRIMAVERA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 734
        SisBarrio::create(['id' => '735', 's_barrio' => 'SAN EUGENIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 735
        SisBarrio::create(['id' => '736', 's_barrio' => 'SAN PABLO I SECTOR Y SAN PABLO II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 736
        SisBarrio::create(['id' => '737', 's_barrio' => 'SANTA LUCÍA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 737
        SisBarrio::create(['id' => '738', 's_barrio' => 'URBANIZACIÓN ACUARELA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 738
        SisBarrio::create(['id' => '739', 's_barrio' => 'VEREDA SAN JOSÉ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 739
        SisBarrio::create(['id' => '740', 's_barrio' => 'VILLA ANNY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 740
        SisBarrio::create(['id' => '741', 's_barrio' => 'VILLA BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 741
        SisBarrio::create(['id' => '742', 's_barrio' => 'XOCHIMILCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 742
        SisBarrio::create(['id' => '743', 's_barrio' => 'CALDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 743
        SisBarrio::create(['id' => '744', 's_barrio' => 'ANTONIO NARIÑO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 744
        SisBarrio::create(['id' => '745', 's_barrio' => 'CAÑAVERALEJO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 745
        SisBarrio::create(['id' => '746', 's_barrio' => 'EL ANHELO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 746
        SisBarrio::create(['id' => '747', 's_barrio' => 'EL CORZO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 747
        SisBarrio::create(['id' => '748', 's_barrio' => 'EL RECUERDO DE SANTA FE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 748
        SisBarrio::create(['id' => '749', 's_barrio' => 'EL REGALO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 749
        SisBarrio::create(['id' => '750', 's_barrio' => 'LA ARBOLEDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 750
        SisBarrio::create(['id' => '751', 's_barrio' => 'LA GRANJITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 751
        SisBarrio::create(['id' => '752', 's_barrio' => 'LA SUERTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 752
        SisBarrio::create(['id' => '753', 's_barrio' => 'LA UNIÓN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 753
        SisBarrio::create(['id' => '754', 's_barrio' => 'LOS CENTAUROS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 754
        SisBarrio::create(['id' => '755', 's_barrio' => 'OSORIO X', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 755
        SisBarrio::create(['id' => '756', 's_barrio' => 'OSORIO XIII', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 756
        SisBarrio::create(['id' => '757', 's_barrio' => 'PARCELA EL PORVENIR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 757
        SisBarrio::create(['id' => '758', 's_barrio' => 'SAN BERNARDINO II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 758
        SisBarrio::create(['id' => '759', 's_barrio' => 'SANTA FE I, II Y III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 759
        SisBarrio::create(['id' => '760', 's_barrio' => 'SANTA FE DE BOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 760
        SisBarrio::create(['id' => '761', 's_barrio' => 'VILLA ALEGRE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 761
        SisBarrio::create(['id' => '762', 's_barrio' => 'VILLA ALEGRÍA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 762
        SisBarrio::create(['id' => '763', 's_barrio' => 'VILLA ESMERALDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 763
        SisBarrio::create(['id' => '764', 's_barrio' => 'VILLA KAREN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 764
        SisBarrio::create(['id' => '765', 's_barrio' => 'EL MATORRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 765
        SisBarrio::create(['id' => '766', 's_barrio' => 'EL MATORRAL DE SAN BERNARDINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 766
        SisBarrio::create(['id' => '767', 's_barrio' => 'EL TRIUNFO DE SAN BERNARDINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 767
        SisBarrio::create(['id' => '768', 's_barrio' => 'LA VEGA DE SAN BERNARDINO BAJO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 768
        SisBarrio::create(['id' => '769', 's_barrio' => 'SAN BERNARDINO SECTOR POTRERITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 769
        SisBarrio::create(['id' => '770', 's_barrio' => 'SAN BERNARDINO XIX, XVI, XVII, XVIII, XXII Y XXV', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 770
        SisBarrio::create(['id' => '771', 's_barrio' => 'CIUDADELA EL RECREO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 771
        SisBarrio::create(['id' => '772', 's_barrio' => 'AGRUPACIÓN PÍO X', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 772
        SisBarrio::create(['id' => '773', 's_barrio' => 'AGRUPACIÓN MULTIFAMILIAR VILLA EMILIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 773
        SisBarrio::create(['id' => '774', 's_barrio' => 'ALFÉREZ REAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 774
        SisBarrio::create(['id' => '775', 's_barrio' => 'AMÉRICAS CENTRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 775
        SisBarrio::create(['id' => '776', 's_barrio' => 'AMÉRICAS OCCIDENTAL I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 776
        SisBarrio::create(['id' => '777', 's_barrio' => 'II Y III ETAPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 777
        SisBarrio::create(['id' => '778', 's_barrio' => 'ANTIGUO HIPÓDROMO DE TECHO II ETAPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 778
        SisBarrio::create(['id' => '779', 's_barrio' => 'BANDERAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 779
        SisBarrio::create(['id' => '780', 's_barrio' => 'CARVAJAL II SECTOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 780
        SisBarrio::create(['id' => '781', 's_barrio' => 'CENTROAMÉRICAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 781
        SisBarrio::create(['id' => '782', 's_barrio' => 'CIUDAD KENNEDY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 782
        SisBarrio::create(['id' => '783', 's_barrio' => 'EL RINCÓN DE MANDALAY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 783
        SisBarrio::create(['id' => '784', 's_barrio' => 'FLORESTA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 784
        SisBarrio::create(['id' => '785', 's_barrio' => 'FUNDADORES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 785
        SisBarrio::create(['id' => '786', 's_barrio' => 'GLORIETA DE LAS AMÉRICAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 786
        SisBarrio::create(['id' => '787', 's_barrio' => 'HIPOTECHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 787
        SisBarrio::create(['id' => '788', 's_barrio' => 'IGUALDAD I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 788
        SisBarrio::create(['id' => '789', 's_barrio' => 'LA LLANURA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 789
        SisBarrio::create(['id' => '790', 's_barrio' => 'LAS AMÉRICAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 790
        SisBarrio::create(['id' => '791', 's_barrio' => 'MANDALAY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 791
        SisBarrio::create(['id' => '792', 's_barrio' => 'MARSELLA III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 792
        SisBarrio::create(['id' => '793', 's_barrio' => 'NUEVA MARSELLA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 793
        SisBarrio::create(['id' => '794', 's_barrio' => 'PROVIVIENDA ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 794
        SisBarrio::create(['id' => '795', 's_barrio' => 'SANTA ROSA DE CARVAJAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 795
        SisBarrio::create(['id' => '796', 's_barrio' => 'VILLA ADRIANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 796
        SisBarrio::create(['id' => '797', 's_barrio' => 'VILLA CLAUDIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 797
        SisBarrio::create(['id' => '798', 's_barrio' => 'ALQUERÍA DE LA FRAGUA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 798
        SisBarrio::create(['id' => '799', 's_barrio' => 'BOMBAY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 799
        SisBarrio::create(['id' => '800', 's_barrio' => 'CARIMAGUA I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 800
        SisBarrio::create(['id' => '801', 's_barrio' => 'CARVAJAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 801
        SisBarrio::create(['id' => '802', 's_barrio' => 'CARVAJAL OSORIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 802
        SisBarrio::create(['id' => '803', 's_barrio' => 'CARVAJAL TECHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 803
        SisBarrio::create(['id' => '804', 's_barrio' => 'CONDADO EL REY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 804
        SisBarrio::create(['id' => '805', 's_barrio' => 'DELICIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 805
        SisBarrio::create(['id' => '806', 's_barrio' => 'DESARROLLO NUEVA YORK', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 806
        SisBarrio::create(['id' => '807', 's_barrio' => 'EL PENCIL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 807
        SisBarrio::create(['id' => '808', 's_barrio' => 'EL PROGRESO I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 808
        SisBarrio::create(['id' => '809', 's_barrio' => 'FLORALIA I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 809
        SisBarrio::create(['id' => '810', 's_barrio' => 'GERONA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 810
        SisBarrio::create(['id' => '811', 's_barrio' => 'GUADALUPE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 811
        SisBarrio::create(['id' => '812', 's_barrio' => 'LA CHUCUA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 812
        SisBarrio::create(['id' => '813', 's_barrio' => 'LAS TORRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 813
        SisBarrio::create(['id' => '814', 's_barrio' => 'LOS CRISTALES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 814
        SisBarrio::create(['id' => '815', 's_barrio' => 'LUCERNA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 815
        SisBarrio::create(['id' => '816', 's_barrio' => 'MILENTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 816
        SisBarrio::create(['id' => '817', 's_barrio' => 'NUEVA YORK', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 817
        SisBarrio::create(['id' => '818', 's_barrio' => 'PROVIVIENDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 818
        SisBarrio::create(['id' => '819', 's_barrio' => 'PROVIVIENDA OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 819
        SisBarrio::create(['id' => '820', 's_barrio' => 'SALVADOR ALLENDE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 820
        SisBarrio::create(['id' => '821', 's_barrio' => 'SAN ANDRÉS I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 821
        SisBarrio::create(['id' => '822', 's_barrio' => 'TALAVERA DE LA REINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 822
        SisBarrio::create(['id' => '823', 's_barrio' => 'TAYRONA COMERCIAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 823
        SisBarrio::create(['id' => '824', 's_barrio' => 'VALENCIA-LA CHUCUA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 824
        SisBarrio::create(['id' => '825', 's_barrio' => 'VILLA NUEVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 825
        SisBarrio::create(['id' => '826', 's_barrio' => 'ALOHA NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 826
        SisBarrio::create(['id' => '827', 's_barrio' => 'AGRUPACIÓN DE VIVIENDA PIO XII', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 827
        SisBarrio::create(['id' => '828', 's_barrio' => 'BAVARIA TECHO II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 828
        SisBarrio::create(['id' => '829', 's_barrio' => 'BOSQUES DE CASTILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 829
        SisBarrio::create(['id' => '830', 's_barrio' => 'CASTILLA LA NUEVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 830
        SisBarrio::create(['id' => '831', 's_barrio' => 'CASTILLA LOS MANDRILES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 831
        SisBarrio::create(['id' => '832', 's_barrio' => 'CASTILLA REAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 832
        SisBarrio::create(['id' => '833', 's_barrio' => 'CASTILLA RESERVADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 833
        SisBarrio::create(['id' => '834', 's_barrio' => 'CATANIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 834
        SisBarrio::create(['id' => '835', 's_barrio' => 'CATANIA-CASTILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 835
        SisBarrio::create(['id' => '836', 's_barrio' => 'CIUDAD DON BOSCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 836
        SisBarrio::create(['id' => '837', 's_barrio' => 'CIUDAD FAVIDI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 837
        SisBarrio::create(['id' => '838', 's_barrio' => 'CIUDAD TECHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 838
        SisBarrio::create(['id' => '839', 's_barrio' => 'EL CONDADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 839
        SisBarrio::create(['id' => '840', 's_barrio' => 'EL PORTAL DE LAS AMÉRICAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 840
        SisBarrio::create(['id' => '841', 's_barrio' => 'EL RINCÓN DE CASTILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 841
        SisBarrio::create(['id' => '842', 's_barrio' => 'EL RINCÓN DE LOS ÁNGELES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 842
        SisBarrio::create(['id' => '843', 's_barrio' => 'EL TINTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 843
        SisBarrio::create(['id' => '844', 's_barrio' => 'EL VERGEL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 844
        SisBarrio::create(['id' => '845', 's_barrio' => 'LAGOS DE CASTILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 845
        SisBarrio::create(['id' => '846', 's_barrio' => 'LAS DOS AVENIDAS I Y II ETAPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 846
        SisBarrio::create(['id' => '847', 's_barrio' => 'MONTERREY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 847
        SisBarrio::create(['id' => '848', 's_barrio' => 'MULTIFAMILIARES EL FERROL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 848
        SisBarrio::create(['id' => '849', 's_barrio' => 'OSORIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 849
        SisBarrio::create(['id' => '850', 's_barrio' => 'OVIEDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 850
        SisBarrio::create(['id' => '851', 's_barrio' => 'PIO XII', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 851
        SisBarrio::create(['id' => '852', 's_barrio' => 'SAN JOSÉ OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 852
        SisBarrio::create(['id' => '853', 's_barrio' => 'SANTA CATALINA I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 853
        SisBarrio::create(['id' => '854', 's_barrio' => 'VALLADOLID', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 854
        SisBarrio::create(['id' => '855', 's_barrio' => 'VILLA ALSACIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 855
        SisBarrio::create(['id' => '856', 's_barrio' => 'VILLA CASTILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 856
        SisBarrio::create(['id' => '857', 's_barrio' => 'VILLA GALANTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 857
        SisBarrio::create(['id' => '858', 's_barrio' => 'VILLA LILIANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 858
        SisBarrio::create(['id' => '859', 's_barrio' => 'VILLA MARIANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 859
        SisBarrio::create(['id' => '860', 's_barrio' => 'VISIÓN DE COLOMBIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 860
        SisBarrio::create(['id' => '861', 's_barrio' => 'CASABLANCA I, II, III Y IV', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 861
        SisBarrio::create(['id' => '862', 's_barrio' => 'CASABLANCA 32 Y 33', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 862
        SisBarrio::create(['id' => '863', 's_barrio' => 'CIUDAD KENNEDY CENTRAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 863
        SisBarrio::create(['id' => '864', 's_barrio' => 'CIUDAD KENNEDY NORTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 864
        SisBarrio::create(['id' => '865', 's_barrio' => 'CIUDAD KENNEDY OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 865
        SisBarrio::create(['id' => '866', 's_barrio' => 'CIUDAD KENNEDY ORIENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 866
        SisBarrio::create(['id' => '867', 's_barrio' => 'CIUDAD KENNEDY SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 867
        SisBarrio::create(['id' => '868', 's_barrio' => 'EL DESCANSO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 868
        SisBarrio::create(['id' => '869', 's_barrio' => 'LA GIRALDILLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 869
        SisBarrio::create(['id' => '870', 's_barrio' => 'MIRAFLORES KENNEDY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 870
        SisBarrio::create(['id' => '871', 's_barrio' => 'MULTIFAMILIAR TECHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 871
        SisBarrio::create(['id' => '872', 's_barrio' => 'NUEVO KENNEDY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 872
        SisBarrio::create(['id' => '873', 's_barrio' => 'PASTRANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 873
        SisBarrio::create(['id' => '874', 's_barrio' => 'TECHO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 874
        SisBarrio::create(['id' => '875', 's_barrio' => 'PUERTO JOSÉ DE CALDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 875
        SisBarrio::create(['id' => '876', 's_barrio' => 'ALAMEDA DE TIMIZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 876
        SisBarrio::create(['id' => '877', 's_barrio' => 'ALFONSO MONTAÑA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 877
        SisBarrio::create(['id' => '878', 's_barrio' => 'BOITÁ I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 878
        SisBarrio::create(['id' => '879', 's_barrio' => 'CASA LOMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 879
        SisBarrio::create(['id' => '880', 's_barrio' => 'CATALINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 880
        SisBarrio::create(['id' => '881', 's_barrio' => 'CATALINA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 881
        SisBarrio::create(['id' => '882', 's_barrio' => 'EL COMITÉ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 882
        SisBarrio::create(['id' => '883', 's_barrio' => 'EL PALENQUE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 883
        SisBarrio::create(['id' => '884', 's_barrio' => 'JACQUELINE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 884
        SisBarrio::create(['id' => '885', 's_barrio' => 'JUAN PABLO I', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 885
        SisBarrio::create(['id' => '886', 's_barrio' => 'LA UNIDAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 886
        SisBarrio::create(['id' => '887', 's_barrio' => 'LAGO TIMIZA I Y II ETAPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 887
        SisBarrio::create(['id' => '888', 's_barrio' => 'LAS LUCES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 888
        SisBarrio::create(['id' => '889', 's_barrio' => 'MORAVIA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 889
        SisBarrio::create(['id' => '890', 's_barrio' => 'NUEVO TIMIZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 890
        SisBarrio::create(['id' => '891', 's_barrio' => 'ONASIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 891
        SisBarrio::create(['id' => '892', 's_barrio' => 'PASTRANITA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 892
        SisBarrio::create(['id' => '893', 's_barrio' => 'PERPETUO SOCORRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 893
        SisBarrio::create(['id' => '894', 's_barrio' => 'PRADOS DE KENNEDY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 894
        SisBarrio::create(['id' => '895', 's_barrio' => 'ROMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 895
        SisBarrio::create(['id' => '896', 's_barrio' => 'ROMA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 896
        SisBarrio::create(['id' => '897', 's_barrio' => 'SANTA CATALINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 897
        SisBarrio::create(['id' => '898', 's_barrio' => 'TIMIZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 898
        SisBarrio::create(['id' => '899', 's_barrio' => 'TONOLI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 899
        SisBarrio::create(['id' => '900', 's_barrio' => 'TOCAREMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 900
        SisBarrio::create(['id' => '901', 's_barrio' => 'TUNDAMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 901
        SisBarrio::create(['id' => '902', 's_barrio' => 'VASCONIA II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 902
        SisBarrio::create(['id' => '903', 's_barrio' => 'VILLA DE LOS SAUCES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 903
        SisBarrio::create(['id' => '904', 's_barrio' => 'VILLA RICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 904
        SisBarrio::create(['id' => '905', 's_barrio' => 'SANTA PAZ-SANTA ELVIRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 905
        SisBarrio::create(['id' => '906', 's_barrio' => 'VEREDA EL TINTAL Y LA PARTE OCCIDENTAL DEL SECTOR TINTAL COMO LO ES CIUDAD TINTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 906
        SisBarrio::create(['id' => '907', 's_barrio' => 'URBANIZACIÓN UNIR UNO (PREDIO CALANDAIMA)', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 907
        SisBarrio::create(['id' => '908', 's_barrio' => 'CALANDAIMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 908
        SisBarrio::create(['id' => '909', 's_barrio' => 'CONJUNTO RESIDENCIAL PRADOS DE CASTILLA I, II Y III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 909
        SisBarrio::create(['id' => '910', 's_barrio' => 'CONJUNTO RESIDENCIAL GERONA DEL TINTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 910
        SisBarrio::create(['id' => '911', 's_barrio' => 'GALÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 911
        SisBarrio::create(['id' => '912', 's_barrio' => 'SANTA FE DEL TINTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 912
        SisBarrio::create(['id' => '913', 's_barrio' => 'TINTALA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 913
        SisBarrio::create(['id' => '914', 's_barrio' => 'CIUDADELA TIERRA BUENA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 914
        SisBarrio::create(['id' => '915', 's_barrio' => 'CIUDADELA PRIMAVERA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 915
        SisBarrio::create(['id' => '916', 's_barrio' => 'CAYETANO CAÑIZARES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 916
        SisBarrio::create(['id' => '917', 's_barrio' => 'CHUCUA DE LA VACA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 917
        SisBarrio::create(['id' => '918', 's_barrio' => 'EL AMPARO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 918
        SisBarrio::create(['id' => '919', 's_barrio' => 'EL LLANTITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 919
        SisBarrio::create(['id' => '920', 's_barrio' => 'EL OLIVO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 920
        SisBarrio::create(['id' => '921', 's_barrio' => 'EL SAUCEDAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 921
        SisBarrio::create(['id' => '922', 's_barrio' => 'LA CONCORDIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 922
        SisBarrio::create(['id' => '923', 's_barrio' => 'LLANO GRANDE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 923
        SisBarrio::create(['id' => '924', 's_barrio' => 'MARÍA PAZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 924
        SisBarrio::create(['id' => '925', 's_barrio' => 'PINAR DEL RÍO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 925
        SisBarrio::create(['id' => '926', 's_barrio' => 'VILLA DE LA LOMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 926
        SisBarrio::create(['id' => '927', 's_barrio' => 'VILLA DE LA TORRE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 927
        SisBarrio::create(['id' => '928', 's_barrio' => 'VILLA EMILIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 928
        SisBarrio::create(['id' => '929', 's_barrio' => 'VISTA HERMOSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 929
        SisBarrio::create(['id' => '930', 's_barrio' => 'ALFONSO LÓPEZ MICHELSEN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 930
        SisBarrio::create(['id' => '931', 's_barrio' => 'BRITALITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 931
        SisBarrio::create(['id' => '932', 's_barrio' => 'CALARCÁ I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 932
        SisBarrio::create(['id' => '933', 's_barrio' => 'CASABLANCA SUR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 933
        SisBarrio::create(['id' => '934', 's_barrio' => 'CLASS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 934
        SisBarrio::create(['id' => '935', 's_barrio' => 'EL ALMENAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 935
        SisBarrio::create(['id' => '936', 's_barrio' => 'EL CARMELO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 936
        SisBarrio::create(['id' => '937', 's_barrio' => 'GRAN BRITALIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 937
        SisBarrio::create(['id' => '938', 's_barrio' => 'PASTRANITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 938
        SisBarrio::create(['id' => '939', 's_barrio' => 'SANTA MARÍA DE KENNEDY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 939
        SisBarrio::create(['id' => '940', 's_barrio' => 'VEGAS DE SANTA ANA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 940
        SisBarrio::create(['id' => '941', 's_barrio' => 'VILLA ANDREA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 941
        SisBarrio::create(['id' => '942', 's_barrio' => 'VILLA ZARZAMORA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 942
        SisBarrio::create(['id' => '943', 's_barrio' => 'VILLAS DE KENNEDY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 943
        SisBarrio::create(['id' => '944', 's_barrio' => 'ALTAMAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 944
        SisBarrio::create(['id' => '945', 's_barrio' => 'AVENIDA CUNDINAMARCA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 945
        SisBarrio::create(['id' => '946', 's_barrio' => 'CIUDAD DE CALI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 946
        SisBarrio::create(['id' => '947', 's_barrio' => 'CIUDAD GALÁN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 947
        SisBarrio::create(['id' => '948', 's_barrio' => 'CIUDAD GRANADA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 948
        SisBarrio::create(['id' => '949', 's_barrio' => 'DINDALITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 949
        SisBarrio::create(['id' => '950', 's_barrio' => 'EL PATIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 950
        SisBarrio::create(['id' => '951', 's_barrio' => 'EL ROSARIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 951
        SisBarrio::create(['id' => '952', 's_barrio' => 'HORIZONTE OCCIDENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 952
        SisBarrio::create(['id' => '953', 's_barrio' => 'JAZMÍN OCCIDENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 953
        SisBarrio::create(['id' => '954', 's_barrio' => 'LA RIVERA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 954
        SisBarrio::create(['id' => '955', 's_barrio' => 'LAS PALMERAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 955
        SisBarrio::create(['id' => '956', 's_barrio' => 'LOS ALMENDROS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 956
        SisBarrio::create(['id' => '957', 's_barrio' => 'PALMITAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 957
        SisBarrio::create(['id' => '958', 's_barrio' => 'PATIO BONITO I, II Y III', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 958
        SisBarrio::create(['id' => '959', 's_barrio' => 'PUENTE LA VEGA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 959
        SisBarrio::create(['id' => '960', 's_barrio' => 'SAN MARINO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 960
        SisBarrio::create(['id' => '961', 's_barrio' => 'SUMAPAZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 961
        SisBarrio::create(['id' => '962', 's_barrio' => 'TAYRONA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 962
        SisBarrio::create(['id' => '963', 's_barrio' => 'TIERRA BUENA. TINTALITO I Y II', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 963
        SisBarrio::create(['id' => '964', 's_barrio' => 'VILLA ALEXANDRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 964
        SisBarrio::create(['id' => '965', 's_barrio' => 'VILLA ANDRÉS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 965
        SisBarrio::create(['id' => '966', 's_barrio' => 'VILLA MENDOZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 966
        SisBarrio::create(['id' => '967', 's_barrio' => 'OSORIO XI Y XII', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 967
        SisBarrio::create(['id' => '968', 's_barrio' => 'PORTAL AMÉRICAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 968
        SisBarrio::create(['id' => '969', 's_barrio' => 'ALOHA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 969
        SisBarrio::create(['id' => '970', 's_barrio' => 'ALSACIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 970
        SisBarrio::create(['id' => '971', 's_barrio' => 'ÁTICOS DE LAS AMÉRICAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 971
        SisBarrio::create(['id' => '972', 's_barrio' => 'COOPERATIVA DE SUBOFICIALES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 972
        SisBarrio::create(['id' => '973', 's_barrio' => 'EL CONDADO DE LA PAZ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 973
        SisBarrio::create(['id' => '974', 's_barrio' => 'LOS PINOS DE MARSELLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 974
        SisBarrio::create(['id' => '975', 's_barrio' => 'LUSITANIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 975
        SisBarrio::create(['id' => '976', 's_barrio' => 'MARSELLA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 976
        SisBarrio::create(['id' => '977', 's_barrio' => 'UNIDAD OVIEDO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 977
        SisBarrio::create(['id' => '978', 's_barrio' => 'URBANIZACIÓN BAVARIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 978
        SisBarrio::create(['id' => '979', 's_barrio' => 'CIUDAD ALSACIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 979
        SisBarrio::create(['id' => '980', 's_barrio' => 'ARABIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 980
        SisBarrio::create(['id' => '981', 's_barrio' => 'ATAHUALPA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 981
        SisBarrio::create(['id' => '982', 's_barrio' => 'BAHÍA SOLANO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 982
        SisBarrio::create(['id' => '983', 's_barrio' => 'SANTIAGO BATAVIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 983
        SisBarrio::create(['id' => '984', 's_barrio' => 'BELÉN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 984
        SisBarrio::create(['id' => '985', 's_barrio' => 'BOSTON', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 985
        SisBarrio::create(['id' => '986', 's_barrio' => 'CENTENARIO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 986
        SisBarrio::create(['id' => '987', 's_barrio' => 'CENTRO A', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 987
        SisBarrio::create(['id' => '988', 's_barrio' => 'EL CARMEN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 988
        SisBarrio::create(['id' => '989', 's_barrio' => 'EL CUCO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 989
        SisBarrio::create(['id' => '990', 's_barrio' => 'EL GUADUAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 990
        SisBarrio::create(['id' => '991', 's_barrio' => 'EL RUBY', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 991
        SisBarrio::create(['id' => '992', 's_barrio' => 'EL TAPETE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 992
        SisBarrio::create(['id' => '993', 's_barrio' => 'FERROCAJA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 993
        SisBarrio::create(['id' => '994', 's_barrio' => 'FLANDES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 994
        SisBarrio::create(['id' => '995', 's_barrio' => 'FONTIBÓN CENTRO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 995
        SisBarrio::create(['id' => '996', 's_barrio' => 'LA GIRALDA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 996
        SisBarrio::create(['id' => '997', 's_barrio' => 'LA LAGUNA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 997
        SisBarrio::create(['id' => '998', 's_barrio' => 'PALESTINA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 998
        SisBarrio::create(['id' => '999', 's_barrio' => 'RINCÓN SANTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 999
        SisBarrio::create(['id' => '1000', 's_barrio' => 'SANTANDER', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,]); // 1000
    }
}
