<script>
    $(function() {
        $('.select2').select2({
            language: "es"
        });
        var f_camposxx = function(json,dataxxxx) {
            if (json.messagex[0]) {
                alert(json.messagex[2])
                $(json.messagex[1]).focus()
            } else {
                // limpar los combos
                $.each(json.emptyxxx, function(i, d) {
                    $(d).empty();
                });
                // campos que se innabilitan
                $.each(json.readonly, function(i, d) {
                    if(dataxxxx.limpiarx){
                      $(d[0]).val('')
                    }

                    $(d[0]).prop('readonly', d[1])
                });
                $.each(json.combosxx, function(i, d) {
                    $.each(d[1], function(i, comboxxx) {
                        $(d[0]).append('<option ' + comboxxx.selected + ' value="' + comboxxx.valuexxx + '">' + comboxxx.optionxx + '</option>')
                    });
                });
            }
        }
        var f_fijusticia = function(dataxxxx) {
            $.ajax({
                url: "{{ route('fijusticia.pardspoa',$todoxxxx['parametr']) }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_camposxx(json,dataxxxx);
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        $("#i_prm_actualmente_pard_id").change(function() {
            var dataxxxx = {
                valuexxx: $(this).val(),
                valoruno: $('#i_prm_ha_estado_pard_id').val(),
                optionxx: 1,
                selected: {tipotiem:0,motipard:0},
                limpiarx:true
            };
            f_fijusticia(dataxxxx);
        });
        var valoruno = "{{old('i_prm_ha_estado_pard_id')}}";
        var valuexxx = "{{old('i_prm_actualmente_pard_id')}}";
        if (valuexxx != '' && valoruno != '') {
            var dataxxxx = {
                valuexxx: valuexxx,
                valoruno: valoruno,
                optionxx: 1,
                selected: {tipotiem:"{{old('i_prm_tipo_tiempo_pard_id')}}",motipard:"{{old('i_prm_motivo_pard_id')}}"},
                limpiarx:false
            };
            f_fijusticia(dataxxxx);
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


    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
