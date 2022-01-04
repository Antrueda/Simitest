<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInPregtcamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_pregtcams', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('temacombo_id')->unsigned()->comment('PREGUNTA QUE SE RELACIONA CON EL CAMPO'); 
            $table->integer('sis_tcampo_id')->unsigned()->comment('CAMPO QUE SE RELACIONA CON LA PREGUNTA'); 
            $table->foreign('temacombo_id','prtc_fk4')->references('id')->on('temacombos');
            $table->foreign('sis_tcampo_id','prtc_fk5')->references('id')->on('sis_tcampos');
            $table->unique(['sis_tcampo_id','temacombo_id'],'prtc_un1');
            $table = CamposMagicos::magicosFk($table,'prtc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_pregtcams');
    }
}
