<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdConclusioneTable extends Migration
{
    private $tablaxxx = 'csd_conclusiones';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->longText('conclusiones');
            $table->string('persona_nombre');
            $table->string('persona_doc');
            $table->integer('persona_parent_id')->unsigned();
            $table->integer('user_doc1_id')->unsigned();
            $table->integer('user_doc2_id')->unsigned()->nullable();
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id','csdcon_pk1')->references('id')->on('parametros');
            $table->foreign('sis_esta_id','csdcon_pk2')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id','csdcon_pk3')->references('id')->on('csds');
            $table->foreign('persona_parent_id','csdcon_pk4')->references('id')->on('parametros');
            $table->foreign('user_doc1_id','csdcon_pk5')->references('id')->on('users');
            $table->foreign('user_doc2_id','csdcon_pk6')->references('id')->on('users');
            $table->foreign('user_crea_id','csdcon_pk7')->references('id')->on('users');
            $table->foreign('user_edita_id','csdcon_pk8')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS CONCLUSIONRES DE LA VISITA SOCIAL EN DOMICILIO DE UNA PERSONA ENTREVISTADA, SECCION 12 CONCLUSIONES DE CONSULTA SOCIAL EN DOMICILIO'");
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
