<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    private $tablaxxx = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('name')->comment('CAMPO NOMBRE COMPLETO');
            $table->string('s_primer_nombre')->comment('CAMPO PRIMER NOMBRE');
            $table->string('s_segundo_nombre')->nullable()->comment('CAMPO SEGUNDO NOMBRE');
            $table->string('s_primer_apellido')->comment('CAMPO PRIMER APELLIDO');
            $table->string('s_segundo_apellido')->nullable()->comment('CAMPO SEGUNDO APELLIDO');
            $table->string('email')->unique()->comment('CAMPO CORREO ELECTRONICO');
            $table->string('s_telefono')->comment('CAMPO DEL TELEFONO DE CONTACTO');
            $table->string('s_matriculap')->nullable()->comment('CAMPO TARJETA PROFESIONAL');
            $table->string('s_documento')->comment('CAMPO NUMERO DE DOCUMENTO');

            $table->date('d_vinculacion')->comment('CAMPO FECHA DE VINCULACION');
            $table->Integer('itiestan')->default(0)->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->default(0)->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->default(0)->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->timestamp('email_verified_at')->nullable()->comment('CAMPO CON LA FECHA DE CUANDO FUE VERIFICADO EL CORREO');
            $table->date('password_change_at')->comment('FECHA PARA EL PROXIMO CAMBIO DE CONTRASEÑA');
            $table->date('password_reset_at')->nullable()->comment('FECHA EN QUE SE REALIZA EL RECETEO DE LA CONTRASEÑA');
            $table->string('password')->comment('CAMPO DE LA CONTRASEÑA');
            $table->rememberToken();
            $table->timestamps();
            $table->bigInteger('user_crea_id')->nullable()->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned()->comment('CAMPO DE ID DEL MUNICIPIO');
            $table->bigInteger('user_edita_id')->nullable()->unsigned();
            $table->bigInteger('sis_cargo_id')->unsigned()->comment('CAMPO DE ID DEL CARGO');
            $table->date('d_finvinculacion')->comment('CAMPO DE FECHA DE VINCULACION');
            $table->bigInteger('prm_tvinculacion_id')->unsigned()->comment('CAMPO DE TIPO DE VINCULACION');
            $table->bigInteger('prm_documento_id')->unsigned()->comment('CAMPO TIPO DE DOCUMENTO');
            $table->bigInteger('sis_esta_id')->unsigned()->comment('CAMPO DE ESTADO');
            $table->bigInteger('estusuario_id')->unsigned()->nullable()->comment('CAMPO DE CAMBIO DE ESTADO');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_tvinculacion_id')->references('id')->on('parametros');
            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('sis_cargo_id')->references('id')->on('sis_cargos');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->unique(['s_documento']);
            $table->timestamp('polidato_at')->nullable();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LOS USUARIOS REGISTRADOS EN EL SISTEMA'");
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
