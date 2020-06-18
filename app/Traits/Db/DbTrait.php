<?php

namespace App\Traits\Db;

use Illuminate\Support\Facades\DB;

/**
 * calcular el nivel de la valoracion
 */
trait DbTrait
{
    public function getCommentTable($tablaxxx,$historia,$comentar)
    {
        $comments = "COMMENT ON TABLE PRUEBADB.";
        $comments .=  $historia.$tablaxxx;
        $comments .= " IS '{$comentar}'";
        DB::statement($comments);
    }

    public function getForeignKey($tablhija,$idtahija,$tablpadr,$idtapadr,$fkxxxxxx)
    {
       $foreignk="ALTER TABLE PRUEBADB.{$tablhija} ADD CONSTRAINT {$fkxxxxxx}
       FOREIGN KEY ({$idtahija}) REFERENCES PRUEBADB.{$tablpadr} ({$idtapadr})";
       DB::statement($foreignk);
    }
}
