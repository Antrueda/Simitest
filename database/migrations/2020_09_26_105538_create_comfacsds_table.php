<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateComfacsdsTable extends Migration
{
    private $tablaxxx = 'comfacsds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_compfami_id')->unsigned()->comment('COMPONENTE FAMILIAR QUE RESPONDE LA CSD');
            $table->foreign('fi_compfami_id')->references('id')->on('fi_compfamis');
            $table->integer('csd_id')->unsigned()->comment('ID Cconsulta social en domicilio');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table = CamposMagicos::magicos($table);
        });

       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA DE DONDE SE ACTUALIZAN LOS DATOS BASICOS DE FICHA DE INGRESO'");

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_compfami_id')->unsigned()->comment('COMPONENTE FAMILIAR QUE RESPONDE LA CSD');
            $table->integer('csd_id')->unsigned()->comment('ID Cconsulta social en domicilio');
            $table = CamposMagicos::magicos($table);

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
