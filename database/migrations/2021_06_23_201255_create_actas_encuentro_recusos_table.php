<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActasEncuentroRecusosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas_encuentro_recusos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actas_encuentro_id');
            $table->unsignedBigInteger('ag_recurso_id');
            $table->unsignedBigInteger('user_crea');
            $table->unsignedBigInteger('user_edita');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('actas_encuentro_id')->references('id')->on('actas_encuentros');
            $table->foreign('ag_recurso_id')->references('id')->on('ag_recursos');
            $table->foreign('user_crea')->references('id')->on('users');
            $table->foreign('user_edita')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actas_encuentro_recusos');
    }
}
