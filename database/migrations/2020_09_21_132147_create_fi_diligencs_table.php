<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiDiligencsTable extends Migration
{
    private $tablaxxx = 'fi_diligencs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->tablaxxx, function (Blueprint $table) {
            
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA'); 
            $table->integer('fi_datos_basico_id')->unsigned()->comment('FICHA DE INGRESO A LA QUE CORRESPONDE LA FECHA DE DILIGENCIAMIENTO');
            $table->foreign('fi_datos_basico_id')->references('id')->on('fi_datos_basicos');
            $table->date('diligenc')->comment('FECHA DE DILIGENCIAMIENTO DE LA FICHA DE INGRESO');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA FECHA DE DILIGENCIAMIENTO DE LA FICHA DE INGRESO'");
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_datos_basico_id')->unsigned()->comment('FICHA DE INGRESO A LA QUE CORRESPONDE LA FECHA DE DILIGENCIAMIENTO');
            $table->date('diligenc')->comment('FECHA DE DILIGENCIAMIENTO DE LA FICHA DE INGRESO');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
