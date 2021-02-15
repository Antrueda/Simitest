<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_quiere_entrar_id', '15.1 ¿Quieres entrar al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_quiere_entrar_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('s_porque_quiere_entrar', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_porque_quiere_entrar', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'class' => 'md-textarea form-control', 'id' => 's_porque_quiere_entrar', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    <p id="contadorporquequiere">0/4000</p>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_que_gustaria_hacer', '15.2 ¿Qué te gustaría hacer en el IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_que_gustaria_hacer', null, ['rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'class' => 'md-textarea form-control', 'id' => 's_que_gustaria_hacer', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    <p id="contadorgustariahacer">0/4000</p>
  </div>
 
 
</div>