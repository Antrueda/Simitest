<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHUsersTable extends Migration
{
    private $tablaxxx = 'h_users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('name')->comment('CAMPO NOMBRE COMPLETO');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('email')->comment('CAMPO CORREO ELECTRONICO');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->String('password')->comment('CAMPO DE LA CONTRASENIA');
            $table->string('s_telefono')->comment('CAMPO DEL TELEFONO DE CONTACTO');
            $table->string('s_matriculap')->nullable()->comment('CAMPO TARJETA PROFESIONAL');
            $table->timestamp('email_verified_at')->nullable()->comment('CAMPO CON LA FECHA DE CUANDO FUE VERIFICADO EL CORREO');
            $table->date('password_change_at')->comment('FECHA PARA EL PROXIMO CAMBIO DE CONTRASEÑA');
            $table->date('password_reset_at')->nullable()->comment('FECHA EN QUE SE REALIZA EL RECETEO DE LA CONTRASEÑA');
            $table->date('d_vinculacion')->comment('CAMPO FECHA DE VINCULACION');
            $table->Integer('itiestan')->nullable()->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->nullable()->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->nullable()->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->integer('sis_cargo_id')->unsigned()->comment('CAMPO DE ID DEL CARGO');
            $table->date('d_finvinculacion')->comment('CAMPO DE FECHA DE VINCULACION');
            $table->integer('prm_tvinculacion_id')->unsigned()->comment('CAMPO DE TIPO DE VINCULACION');
            $table->integer('sis_municipio_id')->unsigned()->comment('CAMPO DE ID DEL MUNICIPIO');
            $table->integer('estusuario_id')->unsigned()->nullable()->comment('CAMPO DE CAMBIO DE ESTADO');
            $table->integer('prm_documento_id')->unsigned()->comment('CAMPO TIPO DE DOCUMENTO');
            $table->timestamp('polidato_at')->nullable();
            $table->rememberToken();
            $table = CamposMagicos::h_magicos($table);

        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
