<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    @if($todoxxxx['usuariox']->prm_tipoblaci_id == 651||$todoxxxx['usuariox']->prm_tipoblaci_id == 2323)
    {{ Form::label('observaciones', '18. Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    @else
    {{ Form::label('observaciones', '17. Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    @endif
    {{ Form::textarea('observaciones', null, ['rows' => 4, 'cols' => 40, 'style' => 'resize:none', 'id' => 'observaciones', 'class' => 'md-textarea form-control', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    <p id="contadorobservaciones">0/4000</p>
  </div>
</div>


