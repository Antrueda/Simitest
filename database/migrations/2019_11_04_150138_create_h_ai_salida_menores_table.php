<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAiSalidaMenoresTable extends Migration
{
    private $tablaxxx = 'h_ai_salida_menores';
    private $tablaxxx2 = 'h_ai_salida_menores_obj';
    private $tablaxxx3 = 'h_ai_salida_menores_con';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_salida');
            $table->string('primer_apellido', 120);
            $table->string('segundo_apellido', 120);
            $table->string('primer_nombre', 120);
            $table->string('segundo_nombre', 120);
            $table->bigInteger('prm_doc_id')->unsigned();
            $table->string('documento', 10);
            $table->bigInteger('prm_parentezco_id')->unsigned();
            $table->bigInteger('prm_autorizado_id')->unsigned();
            $table->string('ape1_autorizado', 120)->nullable();
            $table->string('ape2_autorizado', 120)->nullable();
            $table->string('nom1_autorizado', 120)->nullable();
            $table->string('nom2_autorizado', 120)->nullable();
            $table->bigInteger('prm_doc2_id')->unsigned()->nullable();
            $table->string('doc_autorizado', 10)->nullable();
            $table->bigInteger('prm_parentezco2_id')->unsigned()->nullable();
            $table->bigInteger('prm_carta_id')->unsigned()->nullable();
            $table->bigInteger('prm_copiaDoc_id')->unsigned()->nullable();
            $table->bigInteger('prm_copiaDoc2_id')->unsigned()->nullable();
            $table->string('descripcion', 4000);
            $table->string('objetos', 4000);
            $table->bigInteger('prm_upi2_id')->unsigned();
            $table->Integer('tiempo');
            $table->string('novedad', 120);
            $table->string('dir_salida', 120);
            $table->string('tel_contacto', 10);
            $table->string('causa', 4000)->nullable();
            $table->string('nombres_recoge', 120);
            $table->string('doc_recoge', 120);
            $table->bigInteger('responsable')->unsigned();
            $table->bigInteger('user_doc1_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('ai_salida_menores_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_condicion_id')->unsigned();
            $table->bigInteger('prm_orientado_id')->unsigned();
            $table->bigInteger('prm_enfermerd_id')->unsigned();
            $table->bigInteger('prm_brotes_id')->unsigned();
            $table->bigInteger('prm_laceracio_id')->unsigned();
            $table->bigInteger('ai_salida_menores_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);        
    }
}