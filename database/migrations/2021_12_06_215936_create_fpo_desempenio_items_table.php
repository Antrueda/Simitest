<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFpoDesempenioItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fpo_desempenio_items', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('item_nombre', 120)->comment('NOMBRE DE ITEM');

            $table->integer('categoria_id')->nullable()->unsigned()->comment('relacion a tabla categorias');
            $table->foreign('categoria_id')->references('id')->on('fpo_desempenio_categorias');

            $table->integer('desempenio_id')->unsigned()->comment('relacion a tabla desempenio');
            $table->foreign('desempenio_id')->references('id')->on('fpo_desempenio_componentes');

            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fpo_desempenio_items');
    }
}
