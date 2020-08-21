<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSisMenusTable extends Migration
{
    private $tablaxxx = 'sis_menus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_menu_id')->unsigned()->nullable();
            $table->string('s_menu');
            $table->string('s_icono');
            $table->bigInteger('sis_docfuen_id')->unsigned()->nullable();
            $table->foreign('sis_menu_id')->references('id')->on('sis_menus');
            $table->foreign('sis_docfuen_id')->references('id')->on('sis_docfuens');
            $table->timestamps();
            $table->unique(['sis_menu_id','s_menu']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CONFIGURACION PARA LOS MENUS DEL PANEL LATERAL IZQUIERDA'");
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_old');
            $table->string('s_menu');
            $table->string('s_icono');
            $table->bigInteger('sis_docfuen_id')->nullable();
            $table->bigInteger('sis_menu_id')->nullable();
            $table->string('rutaxxxx', 50);
            $table->string('ipxxxxxx', 50);
            $table->string('metodoxx', 50);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS HISTORIALE DE LA TABLA: h_{$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
