<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisCargosTable extends Migration
{
    private $tablaxxx = 'h_sis_cargos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_cargo');
            $table->Integer('itiestan')->nullable()->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->nullable()->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->nullable()->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->Integer('estusuario_id')->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
