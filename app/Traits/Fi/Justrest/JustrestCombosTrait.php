<?php

namespace app\Traits\FI\Justrest;

use App\Models\Parametro;
use App\Models\Tema;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait JustrestCombosTrait
{

    public function getCombosJCT()
    {
        $this->opciones['condspoa'] = Tema::combo(23, true, false);
        $this->opciones['violvinc'] = Tema::combo(23, true, false);
        $this->opciones['violries'] = Tema::combo(23, true, false);
        $this->opciones['estaspoa'] = Tema::combo(23, true, false);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['condnoap'] = Tema::combo(23, true, false);
        $this->opciones['actupard'] = Tema::combo(25, true, false);
        $this->opciones['actusrpa'] = Tema::combo(25, true, false);
        $this->opciones['actuspoa'] = Tema::combo(25, true, false);
        $this->opciones['motipard'] = Tema::combo(45, true, false);
        $this->opciones['motisrpa'] = Tema::combo(46, true, false);
        $this->opciones['sancsrpa'] = Tema::combo(47, true, false);
        $this->opciones['motispoa'] = Tema::combo(357, true, false);
        $this->opciones['sancspoa'] = Tema::combo(49, true, false);
        $this->opciones['causviol'] = Tema::combo(120, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        // $this->opciones['tablname'] = 'jrfamili';
        $this->opciones['vincviol'] = Tema::combo(120, false, false);
        $this->opciones['riesviol'] = Tema::combo(120, false, false);
        $this->opciones['titipard'] = Tema::combo(152, true, false);
        $this->opciones['titisrpa'] = Tema::combo(152, true, false);
        $this->opciones['titispoa'] = Tema::combo(152, true, false);
        $this->opciones['condspoa'] = Tema::combo(25, true, false);
    }
    public function getCHCJCT($dataxxxx)
    {
        // Inicializa composrtamiento de campos abiertos
        $this->opciones['readpard'] = '';
        $this->opciones['readnomd'] = '';
        $this->opciones['readteld'] = '';
        $this->opciones['readluga'] = '';
        $this->opciones['readsrpa'] = '';
        $this->opciones['readspoa'] = '';
        if ($dataxxxx['tipoblac'] == 650) {
            $this->opciones['estaspoa'] = Parametro::find(235)->Combo;
            $this->opciones['condnoap'] = Parametro::find(235)->Combo;
            $this->opciones['actupard'] = Parametro::find(235)->Combo;
            $this->opciones['actusrpa'] = Parametro::find(235)->Combo;
            $this->opciones['actuspoa'] = Parametro::find(235)->Combo;
            $this->opciones['titipard'] = Parametro::find(235)->Combo;
            $this->opciones['motipard'] = Parametro::find(235)->Combo;
            $this->opciones['readpard'] = 'readonly';
            $this->opciones['readnomd'] = 'readonly';
            $this->opciones['readteld'] = 'readonly';
            $this->opciones['readluga'] = 'readonly';
            $this->opciones['titisrpa'] = Parametro::find(235)->Combo;
            $this->opciones['motisrpa'] = Parametro::find(235)->Combo;
            $this->opciones['readsrpa'] = 'readonly';
            $this->opciones['sancsrpa'] = Parametro::find(235)->Combo;
            $this->opciones['titispoa'] = Parametro::find(235)->Combo;
            $this->opciones['motispoa'] = Parametro::find(235)->Combo;
            $this->opciones['readspoa'] = 'readonly';
            $this->opciones['sancspoa'] = Parametro::find(235)->Combo;
            $this->opciones['condspoa'] = Parametro::find(235)->Combo;
            $this->opciones['vincviol'] = Parametro::find(235)->Combo;
            $this->opciones['riesviol'] = Parametro::find(235)->Combo;
        }
    }
}
