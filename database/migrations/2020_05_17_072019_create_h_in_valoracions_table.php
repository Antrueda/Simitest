<?php

use App\CamposMagicos\CamposMagicos;
use App\Traits\Db\DbTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHInValoracionsTable extends Migration
{
    use  DbTrait;
    private $tablaxxx = 'in_valoracions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_lineabase_nnaj_id');
            $table->bigInteger('i_prm_categoria_id');
            $table->bigInteger('i_prm_cactual_id');
            $table->bigInteger('i_prm_avance_id');
            $table->bigInteger('i_prm_nivel_id');
            $table->string('s_valoracion', 255);
            $table->string('rutaxxxx', 50);
            $table->string('ipxxxxxx', 50);
            $table->string('metodoxx', 50);
            $table = CamposMagicos::h_magicos($table);
        });

        $comments = "TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}";
        $this->getCommentTable($this->tablaxxx, 'h_', $comments);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
    }
}
