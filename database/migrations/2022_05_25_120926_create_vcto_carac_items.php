<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVctoCaracItems extends Migration
{
    private $tablaxxx = 'vcto_carac_items';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vcto_caracteris_id')->unsigned()->comment('Valaracion caracteristicas');
            $table->integer('vcto_item_id')->unsigned()->comment('ITEM A EVALUAR');
            $table->integer('prm_valor')->unsigned()->comment('EVALUACION');
            $table->timestamps();

            $table->foreign('vcto_caracteris_id')->references('id')->on('vcto_caracteris');
            $table->foreign('vcto_item_id')->references('id')->on('vcto_items');
            $table->foreign('prm_valor')->references('id')->on('parametros');
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
