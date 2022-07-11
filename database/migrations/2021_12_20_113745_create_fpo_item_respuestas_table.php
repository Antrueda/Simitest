<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFpoItemRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fpo_item_respuestas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('valor', 1);
            $table->integer('fpo_item_id')->unsigned()->comment('CAMPO ID DE TABLA FPO ITEM');
            $table->foreign('fpo_item_id')->references('id')->on('fpo_desempenio_items');
            $table->integer('fpo_comp_respu_id')->unsigned()->comment('CAMPO ID COMPONENTE RESPUESTAS');
            $table->foreign('fpo_comp_respu_id')->references('id')->on('fpo_componente_respuestas')->onDelete('cascade');;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fpo_item_respuestas');
    }
}
