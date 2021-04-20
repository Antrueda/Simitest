<script>
   $(function(){
    $('.select2').select2({
            language: "es"
        });
        var f_selected=function(seledata,selecomb){
            var selected='';
            if(seledata==selecomb){
                selected='selected';
            }
            return selected;
        }
        $("#i_prm_actualmente_srpa_id").change(function() {
            var dataxxxx = {
                valuexxx: $(this).val(),
                valoruno: $('#i_prm_ha_estado_srpa_id').val(),
                optionxx: 2,
                selected: {tipotiem:0,motisrpa:0,sancsrpa:0},
                limpiarx:true

            };
            f_fijusticia(dataxxxx);
        });

        var valoruno = "{{old('i_prm_ha_estado_srpa_id')}}";
        var valuexxx = "{{old('i_prm_actualmente_srpa_id')}}";
        if (valuexxx != '' && valoruno != '') {
            var dataxxxx = {
                valuexxx: valuexxx,
                valoruno: valoruno,
                optionxx: 2,
                selected: {tipotiem:"{{old('i_prm_tipo_tiempo_srpa_id')}}",motisrpa:"{{old('i_prm_motivo_srpa_id')}}",sancsrpa:"{{old('i_prm_sancion_srpa_id')}}"},
                limpiarx:false
            };
            f_fijusticia(dataxxxx);
        }
        $("#i_prm_actualmente_spoa_id").change(function() {
            var dataxxxx = {
                valuexxx: $(this).val(),
                valoruno: $('#i_prm_ha_estado_spoa_id').val(),
                optionxx: 3,
                selected: {tipotiem:0,motispoa:0,modalida:0,privadox:0},
                limpiarx:true
            };
            f_fijusticia(dataxxxx);
        });
        var valoruno = "{{old('i_prm_ha_estado_spoa_id')}}";
        var valuexxx = "{{old('i_prm_actualmente_spoa_id')}}";
        if (valuexxx != '' && valoruno != '') {
            var dataxxxx = {
                valuexxx: valuexxx,
                valoruno: valoruno,
                optionxx: 3,
                selected: {tipotiem:"{{old('i_prm_tipo_tiempo_spoa_id')}}",motispoa:"{{old('i_prm_motivo_spoa_id')}}",modalida:"{{old('i_prm_mod_cumple_pena_id')}}",privadox:"{{old('i_prm_ha_estado_preso_id')}}"},
                limpiarx:false
            };
            f_fijusticia(dataxxxx);
        }

        //VINCULADO VIOLENCIA
        $("#i_prm_vinculado_violencia_id").change(function() {
            var dataxxxx = {
                valuexxx: $(this).val(),
                optionxx: 4,
                selected: {selected:[0]},
            };
            f_fijusticia(dataxxxx);
        });

        var valuexxx = "{{old('i_prm_vinculado_violencia_id')}}";
        if (valuexxx != '') {
            var dataxxxx = {
                valuexxx: valuexxx,
                optionxx: 4,
                selected: {selected:json_encode(old('prm_situacion_id'))},
            };
            f_fijusticia(dataxxxx);
        }
        //RIESGO VIOLENCIA
        $("#i_prm_riesgo_participar_id").change(function() {
            var dataxxxx = {
                valuexxx: $(this).val(),
                optionxx: 5,
                selected: {selected:[0]},
            };
            f_fijusticia(dataxxxx);
        });
        var valuexxx = "{{old('i_prm_riesgo_participar_id')}}";
        if (valuexxx != '') {
            var dataxxxx = {
                valuexxx: valuexxx,
                optionxx: 5,
                selected: {selected:json_encode(old('prm_riesgo_id'))},
            };
            f_fijusticia(dataxxxx);
        }

   });

   function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>
