<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdJusticiasTable extends Migration
{
    private $tablaxxx = 'h_csds';
    private $tablaxxx2 = 'h_csd_sis_nnaj';
    private $tablaxxx3 = 'h_csd_justicias';
    private $tablaxxx4 = 'h_csd_nnaj_especial';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('proposito', 200);
            $table->date('fecha');
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->integer('prm_vinculado_id')->unsigned();
            $table->integer('prm_vin_causa_id')->unsigned()->nullable();
            $table->integer('prm_riesgo_id')->unsigned();
            $table->integer('prm_rie_causa_id')->unsigned()->nullable();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
