<script>
  $(document).ready(function(){
    $('.select2').select2({
            language: "es"
        });
        var f_estudia = function(valuexxx){
            $("#prm_jornestu_id, #prm_natuenti_id, #sis_institucion_edu_id").empty();
            
            if(valuexxx != ''){
                $.ajax({
                url : "{{ route('ajaxx.estudiando') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {

                    $('#diasines').prop('readonly',json[0].dianoest);
                    $('#mesinest').prop('readonly',json[0].mesnoest);
                    $('#anosines').prop('readonly',json[0].anonoest);
                    $('#s_institucion_edu').prop('readonly',json[0].institut);

                    $('#diasines,#mesinest,#anosines,#s_institucion_edu').val('');
                    if(json[0].jornadax[0].valuexxx==1){
                        $("#prm_jornestu_id, #prm_natuenti_id, #sis_institucion_edu_id").empty();
                    }
                    $.each(json[0].jornadax,function(i,data){
                        $('#prm_jornestu_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].naturale,function(i,data){
                        $('#prm_natuenti_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].instituc,function(i,data){
                        $('#sis_institucion_edu_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }
        @if(old('i_prm_estudia_id')!=null)
            f_estudia({{ old('i_prm_estudia_id') }});
        @endif

        $("#i_prm_estudia_id").change(function(){
            f_estudia($(this).val());
        });

        //MASCARA 2 DIGITOS
        $('#diasines').mask('00');
        $('#mesinest').mask('00');
        $('#anosines').mask('00');

        var f_centro = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("acasojur.centro") }}',
               campoxxx: 'censec_id',
               mensajex: 'Exite un error al cargar los centro zonales'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#centro_id').change(() => {
            let upixxxxx = $('#centro_id').val();
            let cabecera = true
            f_centro(0,upixxxxx);
            
        });
        var regisalu = function(valuexxx, selectep) {
            $("#sis_entidad_salud_id").empty();
            $.ajax({
                url: "{{ route('ajaxx.regimensalud') }}",
                data: {
                    _token: $("input[name='_token']").val(),
                    'padrexxx': valuexxx
                },
                type: 'POST',
                dataType: 'json',
                success: function(json) {
                    $.each(json[0].entidadx, function(i, data) {
                        var selected = '';
                        if (selectep == data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#sis_entidad_salud_id').append('<option ' + selected + '  value="' + data.valuexxx + '">' + data.optionxx + '</option>')

                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var prmresal = "{{old('prm_regisalu_id')}}";
        if (prmresal != '') {
            regisalu(prmresal, "{{old('sis_entidad_salud_id')}}");
        }
        $("#prm_regisalu_id").change(function() {
            regisalu($(this).val(), '');
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

        $('#prm_ultniest_id').change(function(){
            $.ajax({
                url : "{{ route('fi.formacion.ultinive',$todoxxxx['parametr']) }}",
                data : {
                        'padrexxx':$(this).val()
                    },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $.each(json,function(i,data){
                        $(data.campoxxx).val(data.valuexxx)
                    });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
        });
    });



  function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }

    function doc1(valor){
        if(valor == 5 ||valor == 15 ){
            document.getElementById("bogota_id").hidden=false;
            
            
        }else{
        document.getElementById("bogota_id").hidden=true;
         }
      
        }  

        function carga() {
        doc1(document.getElementById('centro_id').value);
     }
    window.onload=carga;


</script>
