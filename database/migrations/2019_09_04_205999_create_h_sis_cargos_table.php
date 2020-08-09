<?php

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
            $table->id();
            $table->string('s_cargo');
            $table->Integer('itiestan')->default(0)->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->default(0)->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->default(0)->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->timestamps();
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
