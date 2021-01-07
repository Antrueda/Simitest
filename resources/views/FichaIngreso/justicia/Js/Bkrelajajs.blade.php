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
       var f_ocultasrpa = function(dataxxxx){
            $(dataxxxx.camposxx).empty();
            if(dataxxxx.valuexxx != ''){
               $.ajax({
                   url : "{{ route('ajaxx.ocultasrpa') }}",
                   data : {
                           _token: $("input[name='_token']").val(),
                           'padrexxx':dataxxxx.valuexxx
                       },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        $('#i_cuanto_srpa').val(json[0].valuexxx)

                        $('#i_cuanto_srpa').prop('readonly',json[0].tiemsrpa)
                        if(json[0].titisrpa[0].valuexxx==1){
                            $(dataxxxx.camposxx).empty();
                        }
                        if(dataxxxx.optionxx==1){
                            $.each(json[0].actusrpa,function(i,data){
                                $('#i_prm_actualmente_srpa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.actusrpa)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                            });
                        }
                        $.each(json[0].titisrpa,function(i,data){
                            $('#i_prm_tipo_tiempo_srpa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.tiposrpa)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].motisrpa,function(i,data){
                            $('#i_prm_motivo_srpa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.motipard)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].sancsrpa,function(i,data){
                            $('#i_prm_sancion_srpa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.sancsrpa)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
       }

        @if(old('i_prm_ha_estado_srpa_id')!=null && old('i_prm_ha_estado_srpa_id')==228)
            var actusrpa='';
            var tiposrpa='';
            var motipard='';
            var sancsrpa='';
            @if(old('i_prm_actualmente_srpa_id')!=null)
                actusrpa:{{ old('i_prm_actualmente_srpa_id') }};
            @endif

            @if(old('i_prm_tipo_tiempo_srpa_id')!=null)
                tiposrpa:{{ old('i_prm_tipo_tiempo_srpa_id') }};
            @endif

            @if(old('i_prm_motivo_srpa_id')!=null)
                motipard:{{ old('i_prm_motivo_srpa_id') }};
            @endif

            @if(old('i_prm_sancion_srpa_id')!=null)
                sancsrpa:{{ old('i_prm_sancion_srpa_id') }};
            @endif
            var dataxxxx={
            valuexxx:{{ old('i_prm_ha_estado_srpa_id') }},
            camposxx:'#i_prm_actualmente_srpa_id,#i_prm_tipo_tiempo_srpa_id, #i_prm_motivo_srpa_id, #i_prm_sancion_srpa_id',
            optionxx:1,
            actusrpa:actusrpa,
            tiposrpa:tiposrpa,
            motipard:motipard,
            sancsrpa:sancsrpa
        };
           f_ocultasrpa(dataxxxx);
        @endif

        @if(old('i_prm_actualmente_srpa_id')!=null && old('i_prm_ha_estado_srpa_id')!=228)
            var dataxxxx={
                valuexxx:{{ old('i_prm_actualmente_srpa_id') }},
                camposxx:'#i_prm_tipo_tiempo_srpa_id, #i_prm_motivo_srpa_id, #i_prm_sancion_srpa_id',
                optionxx:2,
                actusrpa:'',
                tiposrpa:tiposrpa,
                motipard:motipard,
                sancsrpa:sancsrpa
            };
            f_ocultasrpa(dataxxxx);
        @endif


        $("#i_prm_ha_estado_srpa_id").change(function(){
            var dataxxxx={
                valuexxx:$(this).val(),
                camposxx:'#i_prm_actualmente_srpa_id,#i_prm_tipo_tiempo_srpa_id, #i_prm_motivo_srpa_id, #i_prm_sancion_srpa_id',
                optionxx:1,
                actusrpa:'',
                tiposrpa:'',
                motipard:'',
                sancsrpa:''
            };
            f_ocultasrpa(dataxxxx);
        });
        $("#i_prm_actualmente_srpa_id").change(function(){
            var dataxxxx={
                valuexxx:$(this).val(),
                camposxx:'#i_prm_tipo_tiempo_srpa_id, #i_prm_motivo_srpa_id, #i_prm_sancion_srpa_id',
                optionxx:2,
                actusrpa:'',
                tiposrpa:'',
                motipard:'',
                sancsrpa:''
            };
            f_ocultasrpa(dataxxxx);
       });

        var f_ocultaspoa = function(dataxxxx){
            $(dataxxxx.camposxx).empty();
            if(dataxxxx.valuexxx != ''){
                $.ajax({
                    url : "{{ route('ajaxx.ocultaspoa') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':dataxxxx.valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {

                        $('#i_cuanto_spoa').val(json[0].valuexxx)
                        $('#i_cuanto_spoa').prop('readonly',json[0].tiemspoa)

                        if(json[0].titispoa[0].valuexxx==1){
                            $(dataxxxx.camposxx).empty();
                        }

                        if(dataxxxx.optionxx==1){
                            $.each(json[0].actuspoa,function(i,data){
                                $('#i_prm_actualmente_spoa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.actuspoa)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                            });
                        }

                        $.each(json[0].titispoa,function(i,data){
                            $('#i_prm_tipo_tiempo_spoa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.actuspoa)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].motispoa,function(i,data){
                            $('#i_prm_motivo_spoa_id').append('<option '+f_selected(data.valuexxx,dataxxxx.motispoa)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].cumppena,function(i,data){
                            $('#i_prm_mod_cumple_pena_id').append('<option '+f_selected(data.valuexxx,dataxxxx.cumpenax)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].estapres,function(i,data){
                            $('#i_prm_ha_estado_preso_id').append('<option '+f_selected(data.valuexxx,dataxxxx.estapres)+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }

       @if(old('i_prm_ha_estado_spoa_id')!=null && old('i_prm_ha_estado_spoa_id')==228)
            var actuspoa='';
            var tipospoa='';
            var motispoa='';
            var cumpenax='';
            var estapres='';
            @if(old('i_prm_actualmente_spoa_id')!=null)
                actuspoa={{ old('i_prm_actualmente_spoa_id') }}
            @endif
            @if(old('i_prm_tipo_tiempo_spoa_id')!=null)
                tipospoa={{ old('i_prm_tipo_tiempo_spoa_id') }}
            @endif
            @if(old('i_prm_motivo_spoa_id')!=null)
                motispoa={{ old('i_prm_motivo_spoa_id') }}
            @endif
            @if(old('i_prm_mod_cumple_pena_id')!=null)
                cumpenax={{ old('i_prm_mod_cumple_pena_id') }}
            @endif
            @if(old('i_prm_ha_estado_preso_id')!=null)
                estapres={{ old('i_prm_ha_estado_preso_id') }}
            @endif
            var dataxxxx={
                valuexxx:{{ old('i_prm_ha_estado_spoa_id') }},
                camposxx:'#i_prm_actualmente_spoa_id,#i_prm_tipo_tiempo_spoa_id, #i_prm_motivo_spoa_id, #i_prm_mod_cumple_pena_id, #i_prm_ha_estado_preso_id',
                optionxx:1,
                actuspoa:actuspoa,
                tipospoa:tipospoa,
                motispoa:motispoa,
                cumpenax:cumpenax,
                estapres:estapres
            };
           f_ocultaspoa(dataxxxx);
       @endif

        $("#i_prm_ha_estado_spoa_id").change(function(){
            var dataxxxx={
                valuexxx:$(this).val(),
                camposxx:'#i_prm_actualmente_spoa_id,#i_prm_tipo_tiempo_spoa_id, #i_prm_motivo_spoa_id, #i_prm_mod_cumple_pena_id, #i_prm_ha_estado_preso_id',
                optionxx:1,
                actuspoa:'',
                tipospoa:'',
                motispoa:'',
                cumpenax:'',
                estapres:''
            };
            f_ocultaspoa(dataxxxx);
        });

        @if(old('i_prm_actualmente_spoa_id')!=null && old('i_prm_ha_estado_spoa_id')!=228)
            var actuspoa='';
            var tipospoa='';
            var motispoa='';
            var cumpenax='';
            var estapres='';

            if(old('i_prm_tipo_tiempo_spoa_id')!=null){
                tipospoa={{ old('i_prm_tipo_tiempo_spoa_id') }}
            }
            if(old('i_prm_motivo_spoa_id')!=null){
                motispoa={{ old('i_prm_motivo_spoa_id') }}
            }
            if(old('i_prm_mod_cumple_pena_id')!=null){
                cumpenax={{ old('i_prm_mod_cumple_pena_id') }}
            }
            if(old('i_prm_ha_estado_preso_id')!=null){
                estapres={{ old('i_prm_ha_estado_preso_id') }}
            }
            var dataxxxx={
                valuexxx:{{ old('i_prm_ha_estado_spoa_id') }},
                camposxx:'#i_prm_tipo_tiempo_spoa_id, #i_prm_motivo_spoa_id, #i_prm_mod_cumple_pena_id, #i_prm_ha_estado_preso_id',
                optionxx:2,
                actuspoa:actuspoa,
                tipospoa:tipospoa,
                motispoa:motispoa,
                cumpenax:cumpenax,
                estapres:estapres
            };
            f_ocultaspoa(dataxxxx);
        @endif
        $("#i_prm_actualmente_spoa_id").change(function(){
            var dataxxxx={
                valuexxx:$(this).val(),
                camposxx:'#i_prm_tipo_tiempo_spoa_id, #i_prm_motivo_spoa_id, #i_prm_mod_cumple_pena_id, #i_prm_ha_estado_preso_id',
                optionxx:2,
                actuspoa:'',
                tipospoa:'',
                motispoa:'',
                cumpenax:'',
                estapres:''
            };
            f_ocultaspoa(dataxxxx);
        });

       //VINCULADO VIOLENCIA
       var f_vincviolencia = function(valuexxx){
           $("#prm_situacion_id").empty();
           if(valuexxx != ''){
               $.ajax({
                   url : "{{ route('ajaxx.vinviolencia') }}",
                   data : {
                           _token: $("input[name='_token']").val(),
                           'padrexxx':valuexxx
                       },
                   type : 'POST',
                   dataType : 'json',
                   success : function(json) {
                       if(json[0].vinviole[0].valuexxx==1){
                           $("#prm_situacion_id").empty();
                       }
                       $.each(json[0].vinviole,function(i,data){
                           $('#prm_situacion_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                   },
                   error : function(xhr, status) {
                       alert('Disculpe, existió un problema');
                   },
               });
           }
       }

       @if(old('i_prm_vinculado_violencia_id')!=null)
           f_vincviolencia({{ old('i_prm_vinculado_violencia_id') }});
       @endif

       $("#i_prm_vinculado_violencia_id").change(function(){
           f_vincviolencia($(this).val());
       });

       //RIESGO VIOLENCIA
       var f_riesviolencia = function(valuexxx){
           $("#prm_riesgo_id").empty();
           $("#prm_riesgo_id").append('<option value="">Seleccione</>')
           if(valuexxx != ''){
               $.ajax({
                   url : "{{ route('ajaxx.rieviolencia') }}",
                   data : {
                           _token: $("input[name='_token']").val(),
                           'padrexxx':valuexxx
                       },
                   type : 'POST',
                   dataType : 'json',
                   success : function(json) {
                       if(json[0].rieviole[0].valuexxx==1){
                           $("#prm_riesgo_id").empty();
                       }
                       $.each(json[0].rieviole,function(i,data){
                           $('#prm_riesgo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                   },
                   error : function(xhr, status) {
                       alert('Disculpe, existió un problema');
                   },
               });
           }
       }

       @if(old('i_prm_riesgo_participar_id')!=null)
           f_riesviolencia({{ old('i_prm_riesgo_participar_id') }});
       @endif

       $("#i_prm_riesgo_participar_id").change(function(){
           f_riesviolencia($(this).val());
       });

   });

</script>
