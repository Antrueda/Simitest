<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAreaTable extends Migration
{
    private $tablaxxx = 'h_areas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('nombre', 120)->comment('CAMPO DE NOMBRE DEL AREA');
            $table->string('contexto', 3)->nullable()->comment('CAMPO DEL CONTEXTO DEL AREA');
            $table->longText('descripcion')->nullable()->comment('CAMPO DE LA DESCRIPCION DEL AREA');
            $table->Integer('estusuario_id')->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
