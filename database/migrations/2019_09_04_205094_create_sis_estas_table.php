<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisEstasTable extends Migration
{
    private $tablaxxx = 'sis_estas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_estado');
            $table->Integer('i_estado');
            $table->Integer('user_crea_id'); 
            $table->Integer('user_edita_id');
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_estado');
            $table->Integer('i_estado');
            $table->Integer('user_crea_id'); 
            $table->Integer('user_edita_id');
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE `{'h_'.$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
        Schema::dropIfExists('h_' . $this->tablaxxx);        
    }
}