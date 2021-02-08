<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiRelSocialesTable extends Migration
{
    private $tablaxxx = 'h_vsi_rel_sociales';
    private $tablaxxx2 = 'h_vsi_relsol_facilita';
    private $tablaxxx3 = 'h_vsi_relsol_dificulta';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('vsi_id')->unsigned();
            $table->longText('descripcion');
            $table->bigInteger('prm_dificultad_id')->nullable()->unsigned();
            $table->longText('completa')->nullable();

            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relsocial_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relsocial_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
