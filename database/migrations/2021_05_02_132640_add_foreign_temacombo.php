<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTemacombo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temacombos', function (Blueprint $table) {
<<<<<<< HEAD
            // $table->foreign('sis_tcampo_id','teco_fk2')->references('id')->on('sis_tcampos');
=======
            $table->foreign('sis_tcampo_id','teco_fk5')->references('id')->on('sis_tcampos');
>>>>>>> fba6a6efd154a85d489e184853d9afda37301a06
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
