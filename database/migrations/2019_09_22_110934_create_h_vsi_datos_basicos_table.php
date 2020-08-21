<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'h_vsis';
    private $tablaxxx2 = 'h_vsi_nnaj_familiar';
    private $tablaxxx3 = 'h_vsi_nnaj_social';
    private $tablaxxx4 = 'h_vsi_nnaj_academica';
    private $tablaxxx5 = 'h_vsi_nnaj_comportamental';
    private $tablaxxx6 = 'h_vsi_nnaj_sexual';
    private $tablaxxx7 = 'h_vsi_nnaj_emocional';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->date('fecha');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx7}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_id']);
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx);
    }
}