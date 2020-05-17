<?php
use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDocumentoFuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_documento_fuentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table=CamposMagicos::magicos($table);
        });

        Schema::create('h_sis_documento_fuentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table=CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_sis_documento_fuentes');
        Schema::dropIfExists('sis_documento_fuentes');
    }
}
