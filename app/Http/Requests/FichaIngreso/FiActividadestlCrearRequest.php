<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiActividadestlCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;


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
     * Get the validation rules that apply to the request.
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
        $nnajxxxx = FiDatosBasico::find($this->segments()[1]);



        if ($nnajxxxx->prm_tipoblaci_id != 650) {

            $this->_mensaje = [
                'i_horas_permanencia_calle.required' => 'Seleccione horas permanencia en calle',
                'i_dias_permanencia_calle.required' => 'Seleccione días permanencia en calle',
                'i_prm_actividad_tl_id.required' => 'Seleccione actividad de tiempo libre',
                'i_prm_pertenece_parche_id.required' => 'Seleccione pertenece a algun parche',
            ];
            $this->_reglasx = [
                'i_horas_permanencia_calle' => ['Required'],
                'i_dias_permanencia_calle' => ['Required'],
                'i_prm_actividad_tl_id' => ['Required'],
                'i_prm_pertenece_parche_id' => ['Required'],
            ];

            if ($dataxxxx['i_prm_pertenece_parche_id'] == 227) {
                $this->_mensaje['s_nombre_parche.required'] = 'Ingrese el nombre del parche o grupo';
                $this->_reglasx['s_nombre_parche'] = 'required';
            }
            if ($nnajxxxx->prm_estrateg_id != 2323) {
                $this->_mensaje['i_prm_acceso_recreacion_id.required']='Seleccione tiene acceso recreación';
                $this->_mensaje['i_prm_practica_religiosa_id.required']='Seleccione tiene practicas religiosas';
                $this->_mensaje['i_prm_religion_practica_id.required']='Seleccione la religión que practica';

                $this->_reglasx['i_prm_acceso_recreacion_id']=['Required'];
                $this->_reglasx['i_prm_practica_religiosa_id']=['Required'];
                $this->_reglasx['i_prm_religion_practica_id']=['Required'];

                if ($dataxxxx['i_prm_religion_practica_id'] == 494) {
                    $this->_mensaje['i_prm_sacramentos_hechos_id.required'] = 'Seleccione cual(es) sacramento(s) tiene';
                    $this->_reglasx['i_prm_sacramentos_hechos_id'] = 'required';
                }

            }


            if ($nnajxxxx->prm_estrateg_id == 2323) {
                $this->_mensaje['prm_accione_id.required'] = 'Seleccione las acciones en las cuales presuntamente está en conflicto con la ley ha actuado ';
                $this->_reglasx['prm_accione_id'] = 'required|array';
            }
        } else {
            $this->_mensaje = [
                'i_prm_actividad_tl_id.required' => 'Seleccione actividad de tiempo libre',
            ];
            $this->_reglasx = [
                'i_prm_actividad_tl_id' => ['Required'],
            ];
        }
    }
}
