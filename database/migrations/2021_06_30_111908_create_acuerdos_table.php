<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcuerdosTable extends Migration
{
    private $tablaxxx = 'textos';
    private $tablaxxx2 = 'h_textos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->longText('texto')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('tipotexto_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('tipotexto_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
            
        });
        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->longText('texto')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('tipotexto_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('tipotexto_id')->references('id')->on('parametros');
            $table = CamposMagicos::h_magicos($table);
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
