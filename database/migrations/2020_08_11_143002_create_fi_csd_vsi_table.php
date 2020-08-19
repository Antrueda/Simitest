<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiCsdVsiTable extends Migration
{
    private $tablaxxx = 'fi_csd_vsi';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_documento');
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->bigInteger('prm_doc_fisico_id')->unsigned();


            $table->bigInteger('prm_sexo_id')->unsigned();
            $table->string('s_apodo')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->date('d_nacimiento');


            $table->bigInteger('prm_identidad_genero_id')->unsigned();
            $table->bigInteger('prm_orientacion_sexual_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_sexo_id')->references('id')->on('parametros');




            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');

            $table->foreign('prm_identidad_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_orientacion_sexual_id')->references('id')->on('parametros');

            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('prm_doc_fisico_id')->references('id')->on('parametros');

            $table->unique(['sis_esta_id', 's_documento']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DE LAS PERSONAS QUE HACEN PARTE DE LA COMPOSICIÓN FAMILIAR DEL NNAJ, YA SEA QUE VENGAN DE LA FICHA DE INGRESO, VALORACIÓN SICOSOCIAL O CONSULTA SOCIAL EN DOMICILIO.'");
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
