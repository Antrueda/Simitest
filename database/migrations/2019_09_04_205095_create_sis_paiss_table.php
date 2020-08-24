<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisPaissTable extends Migration
{
    private $tablaxxx = 'sis_pais';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_iso');
            $table->string('s_pais');
            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
        });
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