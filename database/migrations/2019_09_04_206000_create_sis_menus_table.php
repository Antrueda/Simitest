<?php

use App\CamposMagicos\CamposMagicos;
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
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('sis_menu_id')->unsigned()->nullable()->comment('CAMPO DEL ID DEL MENU');
            $table->string('s_menu')->comment('CAMPO NOMBRE DEL MENU');
            $table->string('s_icono')->comment('CAMPO NOMBRE DEL ICONO');
            $table->bigInteger('sis_docfuen_id')->unsigned()->nullable();
            $table->foreign('sis_menu_id')->references('id')->on('sis_menus');
            $table->foreign('sis_docfuen_id')->references('id')->on('sis_docfuens');
            $table->timestamps();
            $table->unique(['sis_menu_id','s_menu'],'sismen_un1');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CONFIGURACION PARA LOS MENUS DEL PANEL LATERAL IZQUIERDA'");

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_menu');
            $table->string('s_icono');
            $table->bigInteger('sis_docfuen_id')->nullable();
            $table->bigInteger('sis_menu_id')->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA h_{$this->tablaxxx}'");
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
