<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->comments('titulo de la ayuda');
            $table->string('slug')->comments('url amigable');
            $table->longtext('cuerpo')->comments('cuerpo o descripcion de la ayuda');
            $table->boolean('status')->comments('publicacion de la ayuda')->default(false);
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
        Schema::dropIfExists('ayudas');
    }
}
