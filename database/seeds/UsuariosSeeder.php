<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $super = User::create([
      'name' => 'Usuario Super Administrador',
      's_primer_nombre' => 'JOSE',
      's_segundo_nombre' => 'DUMAR',
      's_primer_apellido' => 'JIMENEZ',
      's_segundo_apellido' => 'RUIZ',
      'email' => 'nuevosimi1@idipron.gov.co',
      'password' => '12345678',
      'user_crea_id' => '1',
      'user_edita_id' => '1',
      'sis_esta_id' => 1,
      'itiestan'=>10,
      'itiegabe'=>0,
      's_telefono' => '3173809970',
      'prm_tvinculacion_id' => 1672,
      's_matriculap' => 'ALGO',
      'sis_cargo_id' => '1',
      'd_vinculacion' => '2021-02-04',
      'd_finvinculacion' => '2021-02-04',
      's_documento' => '145811541',
      'prm_documento_id' => 1,
      'sis_municipio_id' => 1,
      'password_change_at'=>date('Y-m-d',time()),
      'password_reset_at'=>date('Y-m-d',time()),
    ]);


     $super->assignRole('super-administrador');
    $super = User::create([
      'name' => 'FERNANDO SANABRIA',
      's_primer_nombre' => 'FERNANDO',
      's_segundo_nombre' => 'FERNANDO',
      's_primer_apellido' => 'SANABRIA',
      's_segundo_apellido' => 'SANABRIA',
      'email' => 'nuevosimi@idipron.gov.co',
      'password' => '12345678',
      'user_crea_id' => '1',
      'user_edita_id' => '1',
      'sis_esta_id' => 1,
      's_telefono' => '3173809970',
      'prm_tvinculacion_id' => 1672,
      'itiestan'=>10,
      'itiegabe'=>0,
      's_matriculap' => 'ALGO',
      'sis_cargo_id' => '1',
      'd_finvinculacion' => '2021-02-04',
      'd_vinculacion' => '2021-02-04',
      's_documento' => '12345678',
      'prm_documento_id' => 1,
      'sis_municipio_id' => 1,
      'password_change_at'=>date('Y-m-d',time()),
      'password_reset_at'=>date('Y-m-d',time()),
    ]);

    $super->assignRole('super-administrador');

    $super = User::create([
      'name' => 'YENNY ADREA CORZO CÁCERES',
      's_primer_nombre' => 'YENNY',
      's_segundo_nombre' => 'ADREA',
      's_primer_apellido' => 'CORZO',
      's_segundo_apellido' => 'CÁCERES',
      'email' => 'YENNYCC@IDIPRON.GOV.CO',
      'password' => '1031143437',
      'user_crea_id' => '1',
      'user_edita_id' => '1',
      'sis_esta_id' => 1,
      's_telefono' => '3197533728',
      'prm_tvinculacion_id' => '1673',
      'itiestan'=>10,
      'itiegabe'=>0,
      's_matriculap' => '159236',
      'sis_cargo_id' => 1,
      'd_finvinculacion' => '2021-02-04',
      'd_vinculacion' => '2021-02-04',
      's_documento' => '1031143437',
      'prm_documento_id' => 1,
      'sis_municipio_id' => 1,
      'password_change_at'=>date('Y-m-d',time()),
      'password_reset_at'=>date('Y-m-d',time()),
    ]);
    $super->assignRole('PSICÓLOGO(A)');

    $super = User::create([
        'name' => 'EDITH JOHANNA FUENTES',
        's_primer_nombre' => 'EDITH',
        's_segundo_nombre' => 'JHONNA',
        's_primer_apellido' => 'FUENTES',
        's_segundo_apellido' => 'VIDAL',
        'email' => 'edithf@idipron.gov.co',
        'password' => '52796926',
        'user_crea_id' => '1',
        'user_edita_id' => '1',
        'sis_esta_id' => 1,
        's_telefono' => '3004928979',
        'prm_tvinculacion_id' => '1673',
        'itiestan'=>10,
        'itiegabe'=>0,
        's_matriculap' => '159236',
        'sis_cargo_id' => 1,
        'd_finvinculacion' => '2021-02-04',
        'd_vinculacion' => '2021-02-04',
        's_documento' => '52796926',
        'prm_documento_id' => 1,
        'sis_municipio_id' => 1,
        'password_change_at'=>date('Y-m-d',time()),
        'password_reset_at'=>date('Y-m-d',time()),
      ]);
      $super->assignRole('PSICÓLOGO(A)');

    $super = User::create([
      'name' => 'SOL MARINA RODRIGUEZ MARIN',
      's_primer_nombre' => 'SOL',
      's_segundo_nombre' => 'MARINA',
      's_primer_apellido' => 'RODRIGUEZ',
      's_segundo_apellido' => 'MARIN',
      'email' => 'solr@idipron.gov.co',
      'password' => '53141198',
      'user_crea_id' => '1',
      'user_edita_id' => '1',
      'sis_esta_id' => 1,
      's_telefono' => '313848461',
      'prm_tvinculacion_id' => '1673',
      'itiestan'=>10,
      'itiegabe'=>0,
      's_matriculap' => '000',
      'sis_cargo_id' => 5,
      'd_finvinculacion' => '2021-02-04',
      'd_vinculacion' => '2021-02-04',
      's_documento' => '53141198',
      'prm_documento_id' => 1,
      'sis_municipio_id' => 233,
      'password_change_at'=>date('Y-m-d',time()),
      'password_reset_at'=>date('Y-m-d',time()),
    ]);
    $super->assignRole('aux_administrativo_territorio');
    $super = User::create([
      'name' => 'LUZ FARYDE AYA CORRALES',
      's_primer_nombre' => 'LUZ',
      's_segundo_nombre' => 'FARYDE',
      's_primer_apellido' => 'AYA',
      's_segundo_apellido' => 'CORRALES',
      'email' => 'LUZAC@IDIPRON.GOV.CO',
      'password' => '52223097',
      'user_crea_id' => '1',
      'user_edita_id' => '1',
      'sis_esta_id' => 1,
      's_telefono' => '313848461',
      'prm_tvinculacion_id' => '1673',
      'itiestan'=>10,
      'itiegabe'=>0,
      's_matriculap' => '000',
      'sis_cargo_id' => 5,
      'd_finvinculacion' => '2021-02-04',
      'd_vinculacion' => '2021-02-04',
      's_documento' => '52223097',
      'prm_documento_id' => 1,
      'sis_municipio_id' => 233,
      'password_change_at'=>date('Y-m-d',time()),
      'password_reset_at'=>date('Y-m-d',time()),
    ]);
    $super->assignRole('aux_administrativo_territorio');
  }
}
