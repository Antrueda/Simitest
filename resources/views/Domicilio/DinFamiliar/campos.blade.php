<div class="row">
    <div class="col-md">
        {{ Form::label('antecedentes', '6.1 Antecedentes de problemas sociales asociados con la familia actual y extensa?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('antecedentes[]', $antecedentes, null, ['class' => $errors->first('antecedentes') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'antecedentes', 'multiple', 'autofocus']) }}
        @if($errors->has('antecedentes'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('antecedentes') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('descripcion', 'Descripcion:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('descripcion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('relevantes', '6.2 Acontecimientos relevantes en la familia (fallecimientos, nacimientos, migraciones, eventos traumáticos, etc):', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('relevantes', null, ['class' => $errors->first('relevantes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba los acontecimientos más relevantes', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('relevantes'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('relevantes') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_familiar_id', '6.5 Tipología familiar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_familiar_id', $familiar, null, ['class' => $errors->first('prm_familiar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)']) }}
        @if($errors->has('prm_familiar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_familiar_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_hogar_id', '6.6 Tipología de Hogar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_hogar_id', $hogar, null, ['class' => $errors->first('prm_hogar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc3(this.value)']) }}
        @if($errors->has('prm_hogar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_hogar_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('descripcion_0', 'Descripción (Interpretación de la composición familiar, motivos de separaciones, fallecimientos, tipo de relaciones, impacto en el NNAJ)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion_0', null, ['class' => $errors->first('descripcion_0') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción de la composición familiar', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('descripcion_0'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion_0') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_bogota_id', '6.8 ¿Usted y su familia siempre han vivido en Bogotá?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_bogota_id', $sino, null, ['class' => $errors->first('prm_bogota_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('prm_bogota_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_bogota_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_traslado_id', '6.9 Por qué razón se trasladaron a Bogotá', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_traslado_id', $traslado, null, ['class' => $errors->first('prm_traslado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_traslado_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_traslado_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        <div class="row">
            <div class="col-md-12">
                {{ Form::label('jefe1', '6.10 ¿Quén o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('jefe1', null, ['class' => $errors->first('jefe1') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('jefe1'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('jefe1') }}
                    </div>
                @endif
                {{ Form::label('prm_jefe1_id', '6.10 ¿Quén o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::select('prm_jefe1_id', $familiares, null, ['class' => $errors->first('prm_jefe1_id') ? 'form-control form-control-sm select2 is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('prm_jefe1_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_jefe1_id') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                {{ Form::label('jefe2', '6.10 ¿Quén o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('jefe2', null, ['class' => $errors->first('jefe2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('jefe2'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('jefe2') }}
                    </div>
                @endif
                {{ Form::label('prm_jefe2_id', '6.10 ¿Quén o quiénes asumen la jefatura de este hogar?', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::select('prm_jefe2_id', $familiares, null, ['class' => $errors->first('prm_jefe2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('prm_jefe2_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_jefe2_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('descripcion_1', '6.11 Descripción de hechos relevantes en las etapas del desarrollo, potencialidades, talentos del NNAJ)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion_1', null, ['class' => $errors->first('descripcion_1') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Percepción de quién recibe la consulta sobre el NNAJ', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('descripcion_1'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion_1') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_cuidador_id', '6.12 ¿Quién? asume el cuidado y crianza de los menores de 18 años en ausencia de padres o representante legal?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_cuidador_id', $familiares, null, ['class' => $errors->first('prm_cuidador_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
        @if($errors->has('prm_cuidador_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_cuidador_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('descripcion_2', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion_2', null, ['class' => $errors->first('descripcion_2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describir en qué lugar realiza el cuidado y si tiene algún costo, entre otras', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('descripcion_2'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion_2') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('problemas', '6.13 ¿Cuáles cree que son las principales problemáticas por las que atraviesa la familia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('problemas[]', $problematicas, null, ['class' => $errors->first('problemas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'problemas', 'multiple']) }}
        @if($errors->has('problemas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('problemas') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('afronta', '6.14 ¿Cómo las afrontan?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('afronta', null, ['class' => $errors->first('afronta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describir cómo afronta las problemáticas', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('afronta'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('afronta') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_norma_id', '6.15 ¿Al interior de la familia hay normas y límites?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_norma_id', $sino, null, ['class' => $errors->first('prm_norma_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
        @if($errors->has('prm_norma_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_norma_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_conoce_id', '6.16 ¿Los integrantes del nucleo familiar conocen estas conocen y límites?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_conoce_id', $sino, null, ['class' => $errors->first('prm_conoce_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_conoce_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_conoce_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('normas', '6.17 ¿Quién(es) establece(n) las órdenes y reglas en el hogar?', ['class' => 'control-label col-form-label-sm']) }}
        <div id="normas_div">
            {{ Form::select('normas[]', $familiares, null, ['class' => $errors->first('normas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'normas', 'multiple']) }}
        </div>
        @if($errors->has('normas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('normas') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('establecen', '6.18 ¿Cómo las establecen?', ['class' => 'control-label col-form-label-sm']) }}
        <div id="establecen_div">
            {{ Form::select('establecen[]', $reglas, null, ['class' => $errors->first('establecen') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'establecen', 'multiple']) }}
        </div>
        @if($errors->has('establecen'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('establecen') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('observacion', '6.19 Observaciones', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Observaciones', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('observacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_actuan_id', '6.20 ¿Cómo actúan los miembros de la familia frente a las normas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_actuan_id', $actuan, null, ['class' => $errors->first('prm_actuan_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_actuan_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_actuan_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('porque', '¿Por qué?:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('porque'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('porque') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_solucion_id', '6.21 Cuando hay problemas en casa, ¿Cómo lo solucionan?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_solucion_id', $maneras, null, ['class' => $errors->first('prm_solucion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_solucion_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_solucion_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_problema_id', '6.22 ¿A quién acude cuando hay problemas en casa?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_problema_id', $acude, null, ['class' => $errors->first('prm_problema_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_problema_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_problema_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('incumple', '6.23 ¿Cuál es el modo de actuar cuando no se cumplen las reglas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('incumple[]', $incumple, null, ['class' => $errors->first('incumple') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'incumple', 'multiple']) }}
        @if($errors->has('incumple'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('incumple') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_destaca_id', '6.24 Los miembros de la familia se destacan por:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_destaca_id', $destacan, null, ['class' => $errors->first('prm_destaca_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_destaca_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_destaca_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_positivo_id', '6.25 ¿Cómo actúa la familia cuando hay sucesos positivos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_positivo_id', $sucesos, null, ['class' => $errors->first('prm_positivo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_positivo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_positivo_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @canany(['csddinfamiliar-crear', 'csddinfamiliar-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
</div>