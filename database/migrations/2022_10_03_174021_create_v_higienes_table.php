<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVHigienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_higienes', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('odonto_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('odonto_id')->references('id')->on('v_odontologias');
            $table->integer('diente')->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('diag_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('diag_id')->references('id')->on('diagnosticos');
            $table->integer('super_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('super_id')->references('id')->on('superficies');
            $table->integer('tiposup_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('tiposup_id')->references('id')->on('tipo_supers');
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
        Schema::dropIfExists('v_higienes');
    }
}
