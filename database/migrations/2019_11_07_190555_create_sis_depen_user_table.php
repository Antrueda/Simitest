<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisDepenUserTable extends Migration
{
    private $tablaxxx = 'sis_depen_user';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->bigInteger('i_prm_responsable_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('i_prm_responsable_id')->references('id')->on('parametros');
            $table->unique(['user_id', 'sis_depen_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACIÓN ENTRE LOS USUARIOS Y LAS DEPENDENCIAS'");
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