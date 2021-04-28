<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class AreasUserSeeder extends Seeder
{

    public function getR($dataxxxx)
    {
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1];
        $super = User::where('id', $dataxxxx['userxxxx'])->first();
        $areasxxx = [];
        foreach ($dataxxxx['areasxxx'] as $key => $value) {
            $areasxxx[$value] = $camposmagicos;
        }
        $super->areas()->sync($areasxxx);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->getR(['userxxxx' => 1, 'areasxxx' => [6, 7, 8]]);
        $this->getR(['userxxxx' => 2, 'areasxxx' => [6, 7, 8]]);
        $this->getR(['userxxxx' => 3, 'areasxxx' => [6, 7, 8]]);
        $this->getR(['userxxxx' => 5, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 10, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 11, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 12, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 13, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 14, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 15, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 16, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 17, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 904, 'areasxxx' => [6, 7, 8]]);
        $this->getR(["userxxxx" => 2045, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2046, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2047, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2048, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2049, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2050, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2051, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2052, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2053, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2054, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2055, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2056, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2057, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2058, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2059, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2060, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2061, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2062, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2063, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2064, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2065, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2066, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2067, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2068, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2069, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2070, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2071, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2072, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2073, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2074, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2075, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2076, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2077, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2078, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2079, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2080, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2081, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2082, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2083, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2084, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2085, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2086, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2087, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2088, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2089, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2090, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2091, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2092, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2093, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2094, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2095, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2096, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2097, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2098, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2099, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2100, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2101, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2102, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2103, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2104, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2105, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2106, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2107, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2108, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2109, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2110, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2111, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2112, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2113, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2114, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2115, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2116, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2117, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2118, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2119, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2120, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2121, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2122, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2123, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2028, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2029, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2030, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2031, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2032, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2033, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2034, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2035, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2036, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2037, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2038, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2039, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2040, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2041, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2042, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2043, "areasxxx" => [6, 8]]);
        $this->getR(["userxxxx" => 2044, "areasxxx" => [6, 8]]);
        $this->getR(['userxxxx' => 584, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 464, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 1591, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 662, 'areasxxx' => [8]]);
        $this->getR(['userxxxx' => 1089, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 1632, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 310, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 1559, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 778, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 398, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 613, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 795, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 1978, 'areasxxx' => [7,8]]);
        $this->getR(['userxxxx' => 2130, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 1436, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 321, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 489, 'areasxxx' => [7,8]]);
        $this->getR(['userxxxx' => 1989, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2126, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2127, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2128, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2129, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2130, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2131, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2132, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 2133, 'areasxxx' => [6,8]]);
        $this->getR(['userxxxx' => 861, 'areasxxx' => [6,8]]);
        
        
        
    }
}
