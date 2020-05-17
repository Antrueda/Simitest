<?php

namespace App\CamposMagicos;

class CamposMagicos
{
    public static function magicos($table)
    {
        $table->bigInteger('user_crea_id')->unsigned();
        $table->bigInteger('user_edita_id')->unsigned();
        $table->bigInteger('sis_esta_id')->unsigned()->default(1);
        $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
        $table->foreign('user_crea_id')->references('id')->on('users');
        $table->foreign('user_edita_id')->references('id')->on('users');
        $table->timestamps();
        $table->softDeletes();
        return $table;
    }

    public static function h_magicos($table)
    {
        $table->integer('user_crea_id');
        $table->integer('user_edita_id');
        $table->integer('sis_esta_id');
        $table->timestamps();
        $table->softDeletes();
        return $table;
    }
}
