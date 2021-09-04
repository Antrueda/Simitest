<div class="form-row">
    <div class="col-md-4">
        {{ Form::label('prm_upi_id', 'UPI / Area / Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $upis, null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha de diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_valoracion_id', 'Tipo de Valoración', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_valoracion_id', $tValoracion, null, ['class' => $errors->first('prm_valoracion_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
        @if($errors->has('prm_valoracion_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_valoracion_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>2. Centros de Tratamiento</h6>
    </div>
</div>
<div class="form-row align-items-end">
    <div class="col-md-3">
        {{ Form::label('prm_icbf_id', '2.1 Aplica ICBF', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_icbf_id', $sino, null, ['class' => $errors->first('prm_icbf_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_icbf_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_icbf_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('previos', '2.2 Número de tratamientos previos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('previos', null, ['class' => $errors->first('previos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '999']) }}
        @if($errors->has('previos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('previos') }}
            </div>
        @endif
    </div>
    @if ($nnaj->nnaj_sexo->prm_sexo_id == 21)
        <div class="col-md-3">
            <div class="row align-items-end">
                <div class="col-md">
                    {{ Form::label('prm_gestante_id', '2.3 Mujer gestante', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('prm_gestante_id', $sinoc, null, ['class' => $errors->first('prm_gestante_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc(this.value)']) }}
                    @if($errors->has('prm_gestante_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_gestante_id') }}
                    </div>
                    @endif
                </div>
                <div class="col-md">
                    {{ Form::label('semanas_gestacion', 'Sem. gestación', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::number('semanas_gestacion', null, ['class' => $errors->first('semanas_gestacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '999']) }}
                    @if($errors->has('semanas_gestacion'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('semanas_gestacion') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @else
        {{ Form::hidden('prm_gestante_id', null, ['id' => 'prm_gestante_id' ]) }}
        {{ Form::hidden('semanas_gestacion', null, ['id' => 'semanas_gestacion']) }}
    @endif
    <div class="col-md-3">
        {{ Form::label('prm_escolar_id', '2.4 Condición Escolar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_escolar_id', $escolar, null, ['class' => $errors->first('prm_escolar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_escolar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_escolar_id') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row align-items-end">
    <div class="col-md-3">
        {{ Form::label('prm_ingresos_id', '2.5 Fuente de ingresos en los últimos seis meses', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ingresos_id', $ingresos, null, ['class' => $errors->first('prm_ingresos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_ingresos_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_ingresos_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_modalidad_id', '2.6 Modalidad de atención (Servicio que recibe)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_modalidad_id', $modalidad, null, ['class' => $errors->first('prm_modalidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_modalidad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_modalidad_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_acude_id', '2.7 ¿Cómo acudió a la institución?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_acude_id', $acude, null, ['class' => $errors->first('prm_acude_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_acude_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_acude_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_sitio_id', '2.8 Sitio habitual de consumo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_sitio_id', $sitio, null, ['class' => $errors->first('prm_sitio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_sitio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_sitio_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>3. Prevalencia de vida - Exposición a sustancias psicoactivas</h6>
    </div>
</div>
<div class="form-row">
    <div class="col-md-3">
        {{ Form::label('prm_probado_id', '3.1 Alguna vez en su vida ha probado o consumido algún tipo de Sustancia Psicoactiva?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_probado_id', $sinoc, null, ['class' => $errors->first('prm_probado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc1(this.value)']) }}
        @if($errors->has('prm_probado_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_probado_id') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row mt-3">
    <div class="col-md-12">
        <h6>3.2 Patrones de Consumo</h6>
        @include('Acciones.Individuales.Salud.Mitigacion.Vspa.tabla')
    </div>
</div>
<div class="form-row">
    <div class="col-md-3">
        {{ Form::label('prm_cantidad_id', '3.3 ¿Actualmente qué cantidad de cigarrillos fuma al día?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_cantidad_id', $cantidad, null, ['class' => $errors->first('prm_cantidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_cantidad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_cantidad_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>3.4 Drogas inyectables y heroína</h6>
    </div>
    <div class="col-md-12">
        <div class="form-row">
            <div class="col-md-4">
                {{ Form::label('prm_inyectadas_id', '¿Alguna vez ha usado drogas inyectadas?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_inyectadas_id', $sinoc, null, ['class' => $errors->first('prm_inyectadas_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc2(this.value)']) }}
                @if($errors->has('prm_inyectadas_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_inyectadas_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('edad_inicio', 'Edad en que inició el consumo', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('edad_inicio', null, ['class' => $errors->first('edad_inicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99', 'id' => 'edad_inicio']) }}
                @if($errors->has('edad_inicio'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('edad_inicio') }}
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                {{ Form::label('prm_dificultad_id', '¿Le ha sido fácil obtener la sustancia?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_dificultad_id', $sino, null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('prm_dificultad_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_dificultad_id') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                {{ Form::label('descripcion', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('descripcion') }}
                        </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                {{ Form::label('prm_obtiene_id', '¿Cómo ha obtenido la sustancia?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_obtiene_id', $obtiene, null, ['class' => $errors->first('prm_obtiene_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('prm_obtiene_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_obtiene_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('donde', '¿Dónde?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('donde', null, ['class' => $errors->first('donde') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('donde'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('donde') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('precio', 'Precio', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('precio', null, ['class' => $errors->first('precio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '999']) }}
                @if($errors->has('precio'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('precio') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
                        {{ Form::number('cantidad', null, ['class' => $errors->first('cantidad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '999']) }}
                        @if($errors->has('cantidad'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('cantidad') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('prm_medida_id', 'Unidad de Medida', ['class' => 'control-label col-form-label-sm']) }}
                        {{ Form::select('prm_medida_id', $medida, null, ['class' => $errors->first('prm_medida_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                        @if($errors->has('prm_medida_id'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('prm_medida_id') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                {{ Form::label('prm_frecuencia_id', '¿Con qué frecuencia acostumbra a consumir la sustancia?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_frecuencia_id', $frecuencia, null, ['class' => $errors->first('prm_frecuencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('prm_frecuencia_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_frecuencia_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('prm_costumbre_id', '¿Acostumbra a usar la sustancia?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_costumbre_id', $costumbre, null, ['class' => $errors->first('prm_costumbre_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('prm_costumbre_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_costumbre_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('porque', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('porque'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('porque') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('sustancia', '¿Qué sustancia Psicoactiva había consumido antes?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('sustancia', null, ['class' => $errors->first('sustancia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'maxlength' => '200', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('sustancia'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('sustancia') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                {{ Form::label('prm_comparte_id', '¿Acostumbra a compartir agujas?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_comparte_id', $comparte, null, ['class' => $errors->first('prm_comparte_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('prm_comparte_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_comparte_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('porque_comparte', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('porque_comparte', null, ['class' => $errors->first('porque_comparte') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('porque_comparte'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('porque_comparte') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('prm_prueba_id', '¿Se ha practicado alguna vez la prueba del VIH SIDA?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_prueba_id', $sino, null, ['class' => $errors->first('prm_prueba_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('prm_prueba_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_prueba_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                {{ Form::label('porque_prueba', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('porque_prueba', null, ['class' => $errors->first('porque_prueba') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('porque_prueba'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('porque_prueba') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                {{ Form::label('observaciones', 'Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Se sugiere indicar aspectos relevantes según el criterio profesional y que contribuyan o amplíen la información previamente recopilada. Se sugiere ser claro, concreto', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('observaciones'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('observaciones') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="form-row mt-3">
    <div class="col-md-12">
        <h6>4. Realizar pregunta por pregunta y marcar SI o NO, según reporte del NNAJ</h6>
    </div>
    <div class="col-md-12">
        @include('Acciones.Individuales.Salud.Mitigacion.Vspa.tabla2')
    </div>
</div>
<div class="form-row mt-3">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <h6>5. Situaciones asociadas al uso de Sustancias Psicoactivas</h6>
            </div>
            <div class="col-md-12">
                @include('Acciones.Individuales.Salud.Mitigacion.Vspa.tabla3')
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <h6>6. Direccionamiento Intrainstitucional</h6>
            </div>
            <div class="col-md-12">
                @include('Acciones.Individuales.Salud.Mitigacion.Vspa.tabla4')
            </div>
        </div>
    </div>
</div>
<div class="form-row mt-3">
    <div class="col-md-12">
        <h6>7. Observaciones Generales e Información del Análisis que se Considere Relevante</h6>
    </div>
    <div class="col-md-12">
        {{ Form::textarea('obs_generales', null, ['class' => $errors->first('obs_generales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('obs_generales'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_generales') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('obs_generales_dos', '7.1 Observaciones', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('obs_generales_dos', null, ['class' => $errors->first('obs_generales_dos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('obs_generales_dos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_generales_dos') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-md">
        {{ Form::label('user_doc1_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('user_doc1_id', $usuarios, null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
        @if($errors->has('user_doc1_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('user_doc1_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @canany(['vspa-crear', 'vspa-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('ai.ver', $dato->id) }}">REGRESAR</a>
</div>
