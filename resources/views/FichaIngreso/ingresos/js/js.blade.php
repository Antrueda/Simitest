<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        var f_generar_ingresos = function(dataxxxx){
           $('#i_total_ingreso_mensual,#i_prm_frec_ingreso_id,#i_prm_jornada_genera_ingreso_id,#s_hora_inicial,#s_hora_final').val('')
            $("#i_prm_trabajo_informal_id, #i_prm_otra_actividad_id, #i_prm_razon_no_genera_ingreso_id, #i_prm_tipo_relacion_laboral_id, #i_prm_jornada_genera_ingreso_id, #i_prm_dia_genera_id").empty();
            if(dataxxxx.valuexxx!=''){
                $.ajax({
                url : "{{ route('ajaxx.trabajogenera') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':dataxxxx.valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $.each(json.readonly,function(i,data){
                        $(data.nombrexx).prop(data.propieda,data.valorxxx)
                    });

                    $.each(json.combosxx,function(j,dataxxxx){
                        $.each(dataxxxx.comboxxx,function(i,data){
                          $(dataxxxx.nombrexx).append('<option '+dataxxxx.selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                       });
                    })

                   },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        }

        var f_limpiar = function(valuexxx,psalecte) {
            $("#i_prm_dia_genera_id").empty();
                $.ajax({
                    url : "{{ route('ajaxx.limpiardias') }}",
                    data: {
                        padrexxx:valuexxx,
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $.each(json[0].diaseman, function(i, data) {
                            $('#i_prm_dia_genera_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                     },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
        }


        @if(old('i_prm_actividad_genera_ingreso_id')!=null)
            f_generar_ingresos({
                limpiaxx:false,
            valuexxx:{{ isset($todoxxxx['modeloxx']->i_prm_actividad_genera_ingreso_id)? $todoxxxx['modeloxx']->i_prm_actividad_genera_ingreso_id: (old('i_prm_actividad_genera_ingreso_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}},
            trivalue:{{ isset($todoxxxx['modeloxx']->i_prm_trabajo_informal_id)? $todoxxxx['modeloxx']->i_prm_trabajo_informal_id: (old('i_prm_trabajo_informal_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}},
            travalue:{{ isset($todoxxxx['modeloxx']->i_prm_otra_actividad_id)? $todoxxxx['modeloxx']->i_prm_otra_actividad_id: (old('i_prm_otra_actividad_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}},
            noivalue:{{ isset($todoxxxx['modeloxx']->i_prm_razon_no_genera_ingreso_id)? $todoxxxx['modeloxx']->i_prm_razon_no_genera_ingreso_id: (old('i_prm_razon_no_genera_ingreso_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}},
            relvalue:{{ isset($todoxxxx['modeloxx']->i_prm_tipo_relacion_laboral_id)? $todoxxxx['modeloxx']->i_prm_tipo_relacion_laboral_id: (old('i_prm_tipo_relacion_laboral_id') !=null ? old('i_prm_actividad_genera_ingreso_id'):0)}}
        }
);
        @endif
        $("#i_prm_actividad_genera_ingreso_id").change(function(){
            f_generar_ingresos({valuexxx:$(this).val(), trivalue:'', travalue:'', noivalue:'', relvalue:'', limpiaxx:true});
            if($(this).val()!=853){
              f_limpiar($(this).val(),'');
            }
        });

        $("#i_prm_jornada_genera_ingreso_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.jornadagenera') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#s_hora_inicial').val(json.valuexxx)
                    $('#s_hora_inicial').prop('readonly',json.horainix)
                    $('#s_hora_final').val(json.valuexxx)
                    $('#s_hora_final').prop('readonly',json.horafinx)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#i_prm_razon_no_genera_ingreso_id").change(function(){
                $.ajax({
                url : "{{ route($todoxxxx['routxxxx'].'.pgeningr') }}",
                data : {
                        'padrexxx':$(this).val()
                    },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                  $.each(json,function(i,d){
                    $(d.campoxxx).prop(d.propieda,d.valorxxx)
                  })
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });

        });


    });

function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>
