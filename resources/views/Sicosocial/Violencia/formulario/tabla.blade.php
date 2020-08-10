@component('bootstrap::table')
@slot('class')
  table-sm table-hover my-2
@endslot
<thead>
  <th></th>
  <th>Física</th>
  <th>Psicológica</th>
  <th>Sexual</th>
  <th>Económica</th>
</thead>
<tbody>
  <tr>
    <th>Familiar</th>
    <th>
      {{ Form::select('prm_fam_fis_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_fam_fis_id']) }}
    </th>
    <th>
      {{ Form::select('prm_fam_psi_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_fam_psi_id']) }}
    </th>
    <th>
      {{ Form::select('prm_fam_sex_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_fam_sex_id']) }}
    </th>
    <th>
      {{ Form::select('prm_fam_eco_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_fam_eco_id']) }}
    </th>
  </tr>
  <tr>
    <th>Amistades / Colegio</th>
    <th>
      {{ Form::select('prm_amicol_fis_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_amicol_fis_id']) }}
    </th>
    <th>
      {{ Form::select('prm_amicol_psi_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_amicol_psi_id']) }}
    </th>
    <th>
      {{ Form::select('prm_amicol_sex_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_amicol_sex_id']) }}
    </th>
    <th>
      {{ Form::select('prm_amicol_eco_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_amicol_eco_id']) }}
    </th>
  </tr>
  <tr>
    <th>Pareja</th>
    <th>
      {{ Form::select('prm_par_fis_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_par_fis_id']) }}
    </th>
    <th>
      {{ Form::select('prm_par_psi_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_par_psi_id']) }}
    </th>
    <th>
      {{ Form::select('prm_par_sex_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_par_sex_id']) }}
    </th>
    <th>
      {{ Form::select('prm_par_eco_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_par_eco_id']) }}
    </th>
  </tr>
  <tr>
    <th>Comunitario / Parches</th>
    <th>
      {{ Form::select('prm_compar_fis_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_compar_fis_id']) }}
    </th>
    <th>
      {{ Form::select('prm_compar_psi_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_compar_psi_id']) }}
    </th>
    <th>
      {{ Form::select('prm_compar_sex_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_compar_sex_id']) }}
    </th>
    <th>
      {{ Form::select('prm_compar_eco_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_compar_eco_id']) }}
    </th>
  </tr>
  <tr>
    <th>Institucional</th>
    <th>
      {{ Form::select('prm_ins_fis_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_ins_fis_id']) }}
    </th>
    <th>
      {{ Form::select('prm_ins_psi_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_ins_psi_id']) }}
    </th>
    <th>
      {{ Form::select('prm_ins_sex_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_ins_sex_id']) }}
    </th>
    <th>
      {{ Form::select('prm_ins_eco_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_ins_eco_id']) }}
    </th>
  </tr>
  <tr>
    <th>Laboral</th>
    <th>
      {{ Form::select('prm_lab_fis_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_lab_fis_id']) }}
    </th>
    <th>
      {{ Form::select('prm_lab_psi_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_lab_psi_id']) }}
    </th>
    <th>
      {{ Form::select('prm_lab_sex_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_lab_sex_id']) }}
    </th>
    <th>
      {{ Form::select('prm_lab_eco_id', $todoxxxx['sinoxxxx'], null, ['class' => 'form-control form-control-sm', 'id' => 'prm_lab_eco_id']) }}
    </th>
  </tr>
</tbody>
@endcomponent
