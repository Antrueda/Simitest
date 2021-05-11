<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiViolbasasTable extends Migration
{
    private $tablaxxx = 'fi_violbasas';
    private $commentx = '12.2 El tipo de violencia referenciado corresponde a violencia basada en ?';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->integer('fi_violencia_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->foreign('fi_violencia_id')->references('id')->on('fi_violencias');
            $table->integer('prm_violbasa_id')->unsigned()->comment(strtoupper($this->commentx));
            $table->foreign('prm_violbasa_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LAS RESPUESTAS A LA PReGUNTA: ".strtoupper($this->commentx)."'");

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->integer('fi_violencia_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->integer('prm_violbasa_id')->unsigned()->comment(strtoupper($this->commentx));
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
