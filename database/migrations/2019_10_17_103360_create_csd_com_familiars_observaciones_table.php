<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdComFamiliarsObservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csd_com_familiars_observacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->longText('observaciones',4000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();

            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csd_com_familiars_observacions');
    }
}
