<?php

namespace App\CamposMagicos;

class CamposMagicos
{

    private static function armarCampo($tablaxxx,$campoxxx){
        if (!$tablaxxx) {
            $tablaxxx = $campoxxx . 's';
            $campoxxx = $campoxxx . '_id';
        }
        return [$tablaxxx,$campoxxx];
    }
    public static function getForeign($table, $campoxxx, $tablaxxx = false)
    {
        $c=CamposMagicos::armarCampo($tablaxxx,$campoxxx);
        $table->bigInteger($c[1])->unsigned();
        $table->foreign($c[1])->references('id')->on($c[0]);
        return $table;
    }

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
