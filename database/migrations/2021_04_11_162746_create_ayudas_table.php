<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateAyudasTable extends Migration
{
    private $tablaxxx = 'ayudas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->comments('titulo de la ayuda');
            $table->string('slug')->comments('url amigable');
            $table->longtext('cuerpo')->comments('cuerpo o descripcion de la ayuda');
            $table = CamposMagicos::magicosFk($table, ['ayuda_pk', 1, 2, 3]);
         });
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
