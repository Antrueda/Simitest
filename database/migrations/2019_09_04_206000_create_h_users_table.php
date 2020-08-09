<?php

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('email');
            $table->string('password');
            $table->dateTime('created_at');
            $table->Integer('user_crea_id');
            $table->string('s_telefono');
            $table->string('s_matriculap');
            $table->date('d_vinculacion');
            $table->Integer('itiestan')->default(0)->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->default(0)->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->default(0)->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->integer('sis_cargo_id');
            $table->date('d_finvinculacion');
            $table->integer('prm_tvinculacion_id');
            $table->integer('sis_municipio_id');
            $table->integer('prm_documento_id');
            $table->integer('sis_esta_id');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS TEMAS REGISTRADOS EN EL SISTEMA'");
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