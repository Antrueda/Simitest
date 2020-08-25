<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHTemasTable extends Migration
{
  private $tablaxxx = 'h_temas';
  private $tablaxxx2 = 'h_parametro_tema';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nombre');
      $table = CamposMagicos::h_magicos($table);
    });
    DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

    Schema::create($this->tablaxxx2, function (Blueprint $table) {
      $table->bigInteger('parametro_id')->unsigned();
      $table->bigInteger('tema_id')->unsigned();
      $table = CamposMagicos::h_magicos($table);
    });
    DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists($this->tablaxxx2);
    Schema::dropIfExists($this->tablaxxx);
  }
}