<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisDiagnosticosTable extends Migration
{
    private $tablaxxx = 'sis_diagnosticos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 4);
            $table->char('simbolo')->nullable();
            $table->text('descripcion', 4000);
            $table->char('sexo');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");        
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
