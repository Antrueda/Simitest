<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    private $tablaxxx = 'mensajes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->comment('TITULO DEL MENSAJES');
            $table->string('descripcion')->comment('DESCRIPCION O TEXTO DEL MENSAJE');
            $table->integer('user_id')->unsigned()->default(1)->comment('ID DEL USUARIO');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->integer('user_crea_id')->unsigned()->comment('ID DEL USUARIO QUE CREO');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->integer('user_edita_id')->unsigned()->comment('ID DEL USUARIO QUE EDITO');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->integer('estusuario_id')->unsigned()->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table->timestamps();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LOS MENSAJES PUBLICADOS EN EL SISTEMA'");
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
