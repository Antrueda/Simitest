<div class="form-row align-items-end">   
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_situacion_vulnera_id', '12.1 Situaciones de vulneraciones', ['class' => 'control-label col-form-label-sm']) }}
      <select id="i_prm_situacion_vulnera_id" name="i_prm_situacion_vulnera_id[]" 
        class="form-control form-control-sm" multiple="multiple">
        @foreach ($todoxxxx["situavul"] as $valuexxx => $optionxx)
          <?php $situavux='' ?>
          @if (old('i_prm_situacion_vulnera_id')!=null)
              @foreach (old('i_prm_situacion_vulnera_id') as $situacx)
              @if($situacx==$valuexxx)
                <?php $situavux='selected' ?>
              @endif
            @endforeach
          @else
              @foreach ($todoxxxx["situacio"]['vulnerax'] as $situacx)
              @if($situacx->i_prm_situacion_vulnera_id==$valuexxx)
                <?php $situavux='selected' ?>
              @endif
            @endforeach
          @endif
            
          <option value="{{ $valuexxx }} " {{ $situavux }}>{{ $optionxx }}</option>
        @endforeach
      </select>
  </div>
 <div class="form-group col-md-4">
    {{ Form::label('i_prm_tipo_id', 'Tipo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tipo_id', $todoxxxx["tipoescn"], null, ['class' => 'form-control form-control-sm', 
    'style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_victima_escnna_id', '12.2 ó 12.3 Víctima o riesgo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
     <select id="i_prm_victima_escnna_id" name="i_prm_victima_escnna_id[]" 
     class="form-control form-control-sm" multiple="multiple">
       @foreach ($todoxxxx["viescnna"] as $valuexxx => $optionxx)
       <?php $victimas='' ?>
       @foreach ($todoxxxx["situacio"]['escnnaxx'] as $situacx)
        <?php 
        $valorxxx='';
        if($todoxxxx["modeloxx"]->i_prm_tipo_id==563){
          $valorxxx=$situacx->i_prm_riesgo_escnna_id;
        }else{
          $valorxxx=$situacx->i_prm_victima_escnna_id;
        }
        ?>
           @if($valorxxx==$valuexxx)
            <?php $victimas='selected' ?>
           @endif
       @endforeach
           <option value="{{ $valuexxx }} "{{ $victimas }} >{{ $optionxx }}</option>
       @endforeach
     </select>
  </div>
  
  
</div>