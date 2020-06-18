<div style="display:{{ $todoxxxx['dispform'] }}">
    <div class="form-group card-footer text-muted text-center">
        @if($todoxxxx['accionxx']!='Ver')
            {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
        @endif
        <a class="btn btn-sm btn-primary"
            href="{{ route('fos.fichaobservacion.lista', $todoxxxx['nnajregi']) }}">Volver
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-row align-items-end">
                {{ Form::hidden('sis_nnaj_id', $todoxxxx['nnajregi']) }}
                <div class="form-group col-md-6">
                    {{ Form::label('sis_dependen_id', 'UPI / Dependencia', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('sis_dependen_id', $todoxxxx['dependen'], null, ['class' => 'form-control form-control-sm']) }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('d_fecha_diligencia', 'Fecha Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('d_fecha_diligencia', null, ['class' => 'form-control form-control-sm',$todoxxxx["readonly"],'style'=>'border:1px']) }}
                </div>
            </div>
            <div class="form-row align-items-end">
                <div class="form-group col-md-6">
                    {{ Form::label('area_id', 'Área / Contexto Pedagógico', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('area_id', $todoxxxx["areacont"], null, ['class' => $errors->first('area_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('fos_tse_id', 'Tipo de Seguimiento', ['class' => 'control-label col-form-label-sm']) }}
                    <a href="#"  propiedad="fos_tse_id"  class="mouseover" title=""><i class="far fa-question-circle"></i></a>
                    {{ Form::select('fos_tse_id', $todoxxxx["seguixxx"], null, ['class' => $errors->first('fos_tse_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                </div>
               
                <div class="form-group col-md-6">
                    {{ Form::label('fos_stse_id', 'Sub-Tipo de Seguimiento', ['class' => 'control-label col-form-label-sm']) }}
                    <a href="#"  propiedad="fos_stse_id"  class="mouseover" title=""><i class="far fa-question-circle"></i></a>
                    {{ Form::select('fos_stse_id', $todoxxxx["tipsegui"], null, ['class' => $errors->first('fos_stse_id') ? 'form-control select2 form-control-sm is-invalid mouseover1' : 'form-control select2 form-control-sm mouseover1']) }}
                </div>
            </div>
            <div class="form-row align-items-end">
                <div class="form-group col-md-12">
                    {{ Form::label('s_observacion', 'Observacion y/o Seguimiento', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::textarea('s_observacion', null, ['class' => $errors->first('s_observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_observacion', 'maxlength' => '4000',"onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
                    <p id="contadorobservacion">0/4000</p>
                </div>
            </div>
            <div class="form-row align-items-end">
                <div class="form-group col-md-12">
                    {{ Form::label('fi_composicion_fami_id', 'Acudiente', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('fi_composicion_fami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm']) }}
                </div>
            </div>
            <div class="form-row align-items-end">
                <div class="form-group col-md-12">
                    {{ Form::label('i_responsable', 'Responsable de la actividad', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('i_responsable', $todoxxxx['usuarios'], null, ['class' => 'form-control form-control-sm']) }}
                </div>
            </div>
        </div>
    </div>

    <div class="form-group card-footer text-muted text-center">
        @if($todoxxxx['accionxx']!='Ver')
            {{ Form::submit($todoxxxx['accionxx'], ['class'=>'btn btn-sm btn-primary']) }}
        @endif
    </div>
</div>