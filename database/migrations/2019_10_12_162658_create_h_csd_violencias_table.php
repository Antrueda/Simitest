<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdViolenciasTable extends Migration
{
    private $tablaxxx = 'h_csd_violencias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_condicion_id')->unsigned();
            $table->bigInteger('departamento_cond_id')->unsigned()->nullable();
            $table->bigInteger('municipio_cond_id')->unsigned()->nullable();
            $table->bigInteger('prm_certificado_id')->unsigned()->nullable();
            $table->bigInteger('departamento_cert_id')->unsigned()->nullable();
            $table->bigInteger('municipio_cert_id')->unsigned()->nullable();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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