<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiGeneracionIngresoUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_actgeing_id.required' => 'Seleccione actividad realiza generar ingreso',
            'prm_trabinfo_id.required' => 'Seleccione trabajo informal',
            'prm_otractiv_id.required' => 'Seleccione otra actividad',
            'prm_razgeing_id.required' => 'Seleccione porque no genera ingresos',
            'prm_jorgeing_id.required' => 'Seleccione en que jornada genera ingreso',
            'prm_frecingr_id.required' => 'Seleccione frecuencia recibe ingreso',
            'totinmen.required' => 'Seleccione total ingreso',
            'prm_tiprelab_id.required' => 'Seleccione tipo relacion laboral',
        ];
        $this->_reglasx = [
            'prm_actgeing_id' => ['Required'],
            'prm_trabinfo_id' => ['Required'],
            'prm_otractiv_id' => ['Required'],
            'prm_razgeing_id' => ['Required'],
            'prm_jorgeing_id' => ['Required'],
            'prm_frecingr_id' => ['Required'],
            'totinmen' => ['Required'],
            'prm_tiprelab_id' => ['Required'],
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();

        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        // dd($dataxxxx);
        switch ($dataxxxx['prm_actgeing_id']) {
            case 626:
                $this->_mensaje['s_trabajo_formal.required'] = 'Seleccione mencione trabajo formal';
                $this->_reglasx['s_trabajo_formal'] = 'required';
                break;
            case 627:
                    $this->_reglasx['prm_jorgeing_id'] = 'nullable';
                    $this->_reglasx['s_hora_inicial'] = 'nullable';
                    $this->_reglasx['s_hora_final'] = 'nullable';
                    $this->_reglasx['prm_frecingr_id'] = 'nullable';
                    $this->_reglasx['totinmen'] = 'nullable';
                    $this->_reglasx['prm_razgeing_id'] = 'nullable';
                    $this->_reglasx['prm_tiprelab_id'] = 'nullable';
                    
             break;
             case 628:
                $this->_reglasx['prm_jorgeing_id'] = 'nullable';
                $this->_reglasx['s_hora_inicial'] = 'nullable';
                $this->_reglasx['s_hora_final'] = 'nullable';
                $this->_reglasx['prm_frecingr_id'] = 'nullable';
                $this->_reglasx['totinmen'] = 'nullable';
                $this->_reglasx['prm_razgeing_id'] = 'nullable';
                $this->_reglasx['prm_tiprelab_id'] = 'nullable';
                
            break;
            case 853:
                $this->_reglasx['prm_jorgeing_id'] = 'nullable';
                $this->_reglasx['s_hora_inicial'] = 'nullable';
                $this->_reglasx['s_hora_final'] = 'nullable';
                $this->_reglasx['prm_frecingr_id'] = 'nullable';
                $this->_reglasx['totinmen'] = 'nullable';
                $this->_reglasx['prm_razgeing_id'] = 'nullable';
                $this->_reglasx['prm_tiprelab_id'] = 'nullable';
                
                break;
        }
        if ($this->diabuemp == '' && $this->mesbuemp == '' && $this->anobuemp == '') {
            if ($this->prm_razgeing_id == 711) {
                $this->_mensaje['i_prm_dias_buscando_empleo_id.required'] = 'Indique cuanto tiempo lleva buscando empleo';
                $this->_reglasx['i_prm_dias_buscando_empleo_id'] = ['Required'];
                }
             }


    }
    }
