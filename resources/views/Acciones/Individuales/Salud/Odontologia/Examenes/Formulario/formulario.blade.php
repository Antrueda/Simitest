<hr style="border:3px;">
<div class="row">
    <div class="col-md-3">
        {{ Form::label('labios_id', 'Labios', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input"
                name="labios_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->labios_id == 227) ? 'checked' : ''; ?> value="227" {{ old("labios_id") == '227' ? 'checked' : '' }}>SI
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input {{$errors->first('labios_id') ? ' is-invalid' : ''}}"
                name="labios_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->labios_id == 228) ? 'checked' : ''; ?> value="228" {{ old("labios_id") == '228' ? 'checked' : '' }}>NO
            </label>
        </div>
        @if($errors->has('labios_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('labios_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-3">
    {{ Form::label('lengua_id', 'Lengua', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="lengua_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->lengua_id == 227) ? 'checked' : ''; ?> value="227" {{ old("lengua_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('lengua_id') ? ' is-invalid' : ''}}"
            name="lengua_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->lengua_id == 228) ? 'checked' : ''; ?> value="228" {{ old("lengua_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('lengua_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('lengua_id') }}
    </div>
    @endif
    </div>

    <div class="col-md-3">
    {{ Form::label('pisob_id', 'Piso de boca', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="pisob_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->pisob_id == 227) ? 'checked' : ''; ?> value="227" {{ old("pisob_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('pisob_id') ? ' is-invalid' : ''}}"
            name="pisob_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->pisob_id == 228) ? 'checked' : ''; ?> value="228" {{ old("pisob_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('pisob_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('pisob_id') }}
    </div>
    @endif
    </div>

    <div class="col-md-3">
    {{ Form::label('paladar_id', 'Paladar', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="paladar_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->paladar_id == 227) ? 'checked' : ''; ?> value="227" {{ old("paladar_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('paladar_id') ? ' is-invalid' : ''}}"
            name="paladar_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->paladar_id == 228) ? 'checked' : ''; ?> value="228" {{ old("paladar_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('paladar_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('paladar_id') }}
    </div>
    @endif
    </div>

    <div class="col-md-3">
    {{ Form::label('mucosa_id', 'Mucosa Yugal y labial', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"
            name="mucosa_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->mucosa_id == 227) ? 'checked' : ''; ?> value="227" {{ old("mucosa_id") == '227' ? 'checked' : '' }}>SI
        </label>
    </div>
    <div class="form-check disabled">
        <label class="form-check-label">
            <input type="radio" class="form-check-input {{$errors->first('mucosa_id') ? ' is-invalid' : ''}}"
            name="mucosa_id" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->mucosa_id == 228) ? 'checked' : ''; ?> value="228" {{ old("mucosa_id") == '228' ? 'checked' : '' }}>NO
        </label>
    </div>
    @if($errors->has('mucosa_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('mucosa_id') }}
    </div>
    @endif
    </div>

    <div class="col-md-12">
        {{ Form::label('descripcion', 'Descripción de hallazgos:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'descripcion', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <span id="descrip"></span>
            @if($errors->has('descripcion'))
        <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion') }}
            </div>
        @endif
        </div>
</div>

{{-- <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">DIENTE</th>
        <th scope="col"># SUPERFICIES</th>
        <th scope="col">SUPERFICIES</th>
        <th scope="col">DIAGNOSTICO</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{Form::select('diente[]', $todoxxxx['dientesx'],null, ['class' => $errors->first('valora_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder'=>'Seleccione']) }}</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>{{ Form::select('diag_id[]', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','id'=>'diag_id']) }}</td>
        <td><button type="button" class="btn btn-primary" id="add_btn"><i class="fas fa-plus"></i></button></td>
      </tr>
     
    </tbody>
  </table>

     --}}

<hr>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
