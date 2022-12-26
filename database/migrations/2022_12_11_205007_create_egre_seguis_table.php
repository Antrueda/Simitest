<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgreSeguisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egre_seguis', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('consul_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('consul_id')->references('id')->on('parametros');
            $table->longText('observconsu',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('verifi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('verifi_id')->references('id')->on('parametros');
            $table->longText('observerifi',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('contact_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('contact_id')->references('id')->on('parametros');

            // $table->date('fechareg')->comment('FECHA DE DILIGENCIAMIENTO');
            // $table->integer('tipollama_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            // $table->foreign('tipollama_id')->references('id')->on('parametros');
            // $table->longText('obserllamad',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            // $table->integer('motivollama_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            // $table->foreign('motivollama_id')->references('id')->on('parametros');
            // $table->date('fechareg2')->comment('FECHA DE DILIGENCIAMIENTO');
            // $table->integer('tipollama2_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            // $table->foreign('tipollama2_id')->references('id')->on('parametros');
            // $table->longText('obserllamad2',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->string('numcontac', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('persocpntac', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');

            $table->integer('parent_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('parent_id')->references('id')->on('parametros');
            $table->integer('motivoe_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('motivoe_id')->references('id')->on('motivo_egreso_secus');
          
            $table->integer('conflicto_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('conflicto_id')->references('id')->on('parametros');
            $table->integer('vincula_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('vincula_id')->references('id')->on('parametros');      
            $table->integer('emprende_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('emprende_id')->references('id')->on('parametros');  
            $table->longText('observemp',4000)->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('egreso_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('egreso_id')->references('id')->on('s_egresos');           
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
        Schema::dropIfExists('egre_seguis');
    }
}
