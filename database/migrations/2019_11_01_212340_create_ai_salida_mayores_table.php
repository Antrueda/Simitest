<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiSalidamayoresTable extends Migration
{
    private $tablaxxx = 'ai_salida_mayores';
    private $tablaxxx2 = 'ai_salida_mayores_razones';
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
            $table->date('fecha');
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->text('descripcion', 4000);
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA DESCRIPCIÓN DE LA SALIA DE UN BENEFICIARIO DE LOS SERVICIOS DE UNA UPI'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('ai_salmay_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('ai_salmay_id')->references('id')->on('ai_salida_mayores');
            $table->unique(['parametro_id', 'ai_salmay_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS PORMENORES DE LA SALIA DE UN BENEFICIARIO DE LOS SERVICIOS DE UNA UPI'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}