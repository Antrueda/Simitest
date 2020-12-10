<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiViolenciaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_tip_vio_id.required' => 'Indique si se presenta algun tipo de violencia',
            'prm_fam_fis_id.required_if' => 'Campo obligatorio',
            'prm_fam_psi_id.required_if' => 'Campo obligatorio',
            'prm_fam_sex_id.required_if' => 'Campo obligatorio',
            'prm_fam_eco_id.required_if' => 'Campo obligatorio',
            'prm_amicol_fis_id.required_if' => 'Campo obligatorio',
            'prm_amicol_psi_id.required_if' => 'Campo obligatorio',
            'prm_amicol_sex_id.required_if' => 'Campo obligatorio',
            'prm_amicol_eco_id.required_if' => 'Campo obligatorio',
            'prm_par_fis_id.required_if' => 'Campo obligatorio',
            'prm_par_psi_id.required_if' => 'Campo obligatorio',
            'prm_par_sex_id.required_if' => 'Campo obligatorio',
            'prm_par_eco_id.required_if' => 'Campo obligatorio',
            'prm_compar_fis_id.required_if' => 'Campo obligatorio',
            'prm_compar_psi_id.required_if' => 'Campo obligatorio',
            'prm_compar_sex_id.required_if' => 'Campo obligatorio',
            'prm_compar_eco_id.required_if' => 'Campo obligatorio',
            'prm_ins_fis_id.required_if' => 'Campo obligatorio',
            'prm_ins_psi_id.required_if' => 'Campo obligatorio',
            'prm_ins_sex_id.required_if' => 'Campo obligatorio',
            'prm_ins_eco_id.required_if' => 'Campo obligatorio',
            'prm_lab_fis_id.required_if' => 'Campo obligatorio',
            'prm_lab_psi_id.required_if' => 'Campo obligatorio',
            'prm_lab_eco_id.required_if' => 'Campo obligatorio',
            'prm_lab_sex_id.required_if' => 'Campo obligatorio',
            'prm_dis_gen_id.required_if' => 'Campo obligatorio',
            'prm_dis_ori_id.required_if' => 'Campo obligatorio',
            'contextos.required_if' => 'Seleccione un contexto',
            'tipos.required_if' => 'Seleccione un tipo de violencia',

        ];
        $this->_reglasx = [
            'prm_tip_vio_id'    => 'required|exists:parametros,id',
            'prm_fam_fis_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_fam_psi_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_fam_sex_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_fam_eco_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_amicol_fis_id' => 'required_if:prm_tip_vio_id,227',
            'prm_amicol_psi_id' => 'required_if:prm_tip_vio_id,227',
            'prm_amicol_sex_id' => 'required_if:prm_tip_vio_id,227',
            'prm_amicol_eco_id' => 'required_if:prm_tip_vio_id,227',
            'prm_par_fis_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_par_psi_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_par_sex_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_par_eco_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_compar_fis_id' => 'required_if:prm_tip_vio_id,227',
            'prm_compar_psi_id' => 'required_if:prm_tip_vio_id,227',
            'prm_compar_sex_id' => 'required_if:prm_tip_vio_id,227',
            'prm_compar_eco_id' => 'required_if:prm_tip_vio_id,227',
            'prm_ins_fis_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_ins_psi_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_ins_sex_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_ins_eco_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_lab_fis_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_lab_psi_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_lab_sex_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_lab_eco_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_dis_gen_id'    => 'required_if:prm_tip_vio_id,227',
            'prm_dis_ori_id'    => 'required_if:prm_tip_vio_id,227',
            'contextos' => 'required_if:prm_dis_gen_id,227|array',
            'tipos' => 'required_if:prm_dis_ori_id,227|array',
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
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
