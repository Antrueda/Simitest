@component('bootstrap::table')
    @slot('class')
        table-sm table-hover table-responsive-sm my-2
    @endslot
    <thead class="text-center">
        <tr>
            <th>Ítem</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>6.1 Sicosocial</td>
            <td>
                {{ Form::select('prm_seis_uno_id', $sino, null, ['class' => $errors->first('prm_seis_uno_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
            </td>
        </tr>
        <tr>
            <td>6.2 Sociolegal</td>
            <td>
                {{ Form::select('prm_seis_dos_id', $sino, null, ['class' => $errors->first('prm_seis_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
            </td>
        </tr>
    </tbody>
    <tr>
        <td>6.3 Salud</td>
        <td>
            {{ Form::select('prm_seis_tres_id', $sino, null, ['class' => $errors->first('prm_seis_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        </td>
    </tr>
    <tr>
        <td>6.4 Educación</td>
        <td>
            {{ Form::select('prm_seis_cuatro_id', $sino, null, ['class' => $errors->first('prm_seis_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        </td>
    </tr>
    <tr>
        <td>6.5 Emprender</td>
        <td>
            {{ Form::select('prm_seis_cinco_id', $sino, null, ['class' => $errors->first('prm_seis_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        </td>
    </tr>
    <tr>
        <td>6,6 Espiritualidad</td>
        <td>
            {{ Form::select('prm_seis_seis_id', $sino, null, ['class' => $errors->first('prm_seis_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        </td>
    </tr>
@endcomponent
