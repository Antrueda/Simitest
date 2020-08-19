<?php

use App\Models\Sistema\SisDiaFestivo;
use Illuminate\Database\Seeder;

class SisDiaFestivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisDiaFestivo::create(['diafestivo'=>'2020-01-01','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-01-06','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-03-23','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-04-09','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-04-10','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-05-01','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-05-25','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-06-15','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-06-22','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-06-29','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-07-20','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-08-07','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-08-17','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-10-12','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-11-02','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-11-16','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-12-08','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisDiaFestivo::create(['diafestivo'=>'2020-12-25','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
    }
}
