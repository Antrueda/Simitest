<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAiSalidaMayoresTable extends Migration
{
    private $tablaxxx = 'h_ai_salida_mayores';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            //$table->integer('sis_nnaj_id')->unsigned();
            $table->date('fecha')->comment('CAMPO FECHA DE LA SALIDA O PERMISO');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->integer('user_doc1_id')->unsigned()->comment('CAMPO PERSONA QUE DILIGENCIA');
            $table->integer('user_doc2_id')->unsigned()->comment('CAMPO RESPONSABLE DE LA UPI O DEPENDENCIA');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

    
    }

    public function down()
    {
        
        Schema::dropIfExists($this->tablaxxx);
    }
}