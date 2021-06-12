<?php

namespace App\Http\Requests\FichaIngreso;

use App\Rules\FechaMenor;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Validation\Rule;

class FiDatosBasicoCrearRequest extends FormRequest
{
    use  ManageTimeTrait;
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        
        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione una unidad de atención integral',
            'prm_tipoblaci_id.required' => 'Seleccione el tipo de población',
            'prm_estrateg_id.required' => 'Seleccione una estrategia',
            's_primer_nombre.required' => 'Ingrese el primer nombre',
            's_primer_apellido.required' => 'Ingrese primer apellido',
            'prm_sexo_id.required' => 'Seleccione el sexo',
            'prm_doc_fisico_id.required' => 'Seleccione si cuenta con el documento físico',
            'd_nacimiento.required' => 'Seleccione la fecha de nacimiento o dige la edad',
            'sis_municipio_id.required' => 'Seleccione un municipio',
            'sis_municipioexp_id.required' => 'Seleccione un municipio de expedición',
            'prm_gsanguino_id.required' => 'Seleccione el grupo sanguíneo',
            'prm_factor_rh_id.required' => 'Seleccione el factor RH',
            'prm_estado_civil_id.required' => 'Seleccione un estado civil',
            'prm_situacion_militar_id.required' => 'Indique si tiene la situación militar definida',
            'prm_clase_libreta_id.required' => 'Indique la clase de la libreta militar',
            'prm_identidad_genero_id.required' => 'Seleccione una identidad de género',
            'prm_orientacion_sexual_id.required' => 'Seleccione una orientación sexual',
            'prm_etnia_id.required' => 'Seleccione una etnia',
            'prm_vestimenta_id.required' => 'Indique el estado de la vestimenta',
            's_nombre_focalizacion.required' => 'Indique el nombre de la focalización',
            's_lugar_focalizacion.required' => 'Indique el lugar de focalización',
            'sis_upzbarri_id.required' => 'Seleccione un barrio',
            's_documento.required' => 'Ingrese un documento de identificación',
            'sis_servicio_id.required' => 'Seleccione un servicio',
            'sis_depen_id.required' => 'Seleccione una UPI',
            'diligenc.required' => 'Seleccione una fecha de diligenciamiento',
            'prm_tipodocu_id.required' => 'Seleccione el tipo de documento',
        ];
        $this->_reglasx = [
            'sinpermi'=>[],
            'diligenc' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'prm_doc_fisico_id' => ['required'],
            'prm_tipoblaci_id' => ['required'],
            'prm_estrateg_id' => ['required'],
            'sis_depen_id' => ['Required'],
            's_primer_nombre' => ['required'],
            's_primer_apellido' => ['required'],
            'prm_sexo_id' => ['required'],
            'd_nacimiento' => ['required'],
            'sis_municipio_id' => ['required'],
            'sis_municipioexp_id' => ['required'],
            'prm_gsanguino_id' => [ 
                Rule::requiredIf(function () {
                return request()->prm_tipodocu_id != 144 || request()->prm_tipodocu_id != 142;
            })],
            'prm_factor_rh_id' => [ 
                Rule::requiredIf(function () {
                return request()->prm_tipodocu_id != 144 || request()->prm_tipodocu_id != 142;
            })],
            's_documento' => ['required'],
            'prm_estado_civil_id' => ['required'],
            'prm_situacion_militar_id' => ['required'],
            'prm_clase_libreta_id' => ['required'],
            'prm_identidad_genero_id' => ['required'],
            'prm_orientacion_sexual_id' => ['required'],
            'prm_etnia_id' => ['required'],
            'prm_vestimenta_id' => ['required'],
            's_nombre_focalizacion' => ['required'],
            's_lugar_focalizacion' => ['required'],
            'sis_upzbarri_id' => ['required'],
            'sis_servicio_id' => ['required'],
            'sis_depen_id' => ['required'],
            'prm_tipodocu_id' => ['required'],
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->diligenc != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->diligenc,
                'formular'=>1,
            ]);
            if (!$puedexxx['tienperm']) {
                $this->_mensaje['sinpermi.required'] =  $puedexxx['msnxxxxx'];
                $this->_reglasx['sinpermi'] = 'required';
            }
        }
        $this->validar();

        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario

        if ($dataxxxx['prm_etnia_id'] == 157) {
            $this->_mensaje['prm_poblacion_etnia_id.required'] = 'Seleccione tipo de etnia';
            $this->_reglasx['prm_poblacion_etnia_id'] = 'required';
        }

        if ($dataxxxx['prm_doc_fisico_id'] == 228) {
            $this->_mensaje['prm_ayuda_id.required'] = 'Seleccione porqué no tiene documento';
            $this->_reglasx['prm_ayuda_id'] = 'required';
        }
        $this->_mensaje['s_documento.unique'] = 'El documento ya existe';
        $this->_reglasx['s_documento'][1] = 'unique:nnaj_docus,s_documento';
    }
    
}
