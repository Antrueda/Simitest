<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEvasionParentescosTable extends Migration
{
    private $tablaxxx = 'evasion_parentescos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_parentezco_id')->unsigned();
            $table->string('primer_apellido', 120);
            $table->string('segundo_apellido', 120)->nullable();;
            $table->string('primer_nombre', 120);
            $table->string('segundo_nombre', 120)->nullable();;
            $table->string('direccion_familiar', 120);
            $table->string('s_telefono', 10);
            $table->foreign('prm_parentezco_id')->references('id')->on('parametros');
            $table->bigInteger('reporte_evasion_id')->unsigned();
            $table->foreign('reporte_evasion_id')->references('id')->on('ai_reporte_evasions');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA FAMILIARES EN EVASION'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);

    }
}
