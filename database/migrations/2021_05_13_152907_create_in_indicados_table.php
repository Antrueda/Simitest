<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateInIndicadosTable extends Migration
{
    private $tablaxxx = 'in_indicados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_indicador')->unique()->comment('NOMBRE DEL INDICADOR');
            $table->integer('area_id')->unsigned()->comment('ID DEL AREA');
            $table->foreign('area_id','indi_fk4')->references('id')->on('areas');
            $table = CamposMagicos::magicosFk($table,['indi']);
            $table->unique(['s_indicador','area_id'],'indi_un1');
        });

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_indicador')->comment('NOMBRE DEL INDICADOR');
            $table->integer('area_id')->unsigned()->comment('ID DEL AREA');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
