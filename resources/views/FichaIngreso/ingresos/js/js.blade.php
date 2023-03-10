<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        var f_generar_ingresos = function(dataxxxx){
           $('#totinmen,#s_hora_inicial,#s_hora_final').val('')
            $("#prm_trabinfo_id, #prm_otractiv_id, #prm_razgeing_id, #prm_tiprelab_id, #prm_jorgeing_id,#prm_frecingr_id").empty();
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
            $("#prm_diagener_id").empty();
                $.ajax({
                    url : "{{ route('ajaxx.limpiardias') }}",
                    data: {
                        padrexxx:valuexxx,
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $.each(json[0].diaseman, function(i, data) {
                            $('#prm_diagener_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                     },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
        }


        @if(old('prm_actgeing_id')!==null)
            f_generar_ingresos({
                limpiaxx:false,
            valuexxx:{{ isset($todoxxxx['modeloxx']->prm_actgeing_id)? $todoxxxx['modeloxx']->prm_actgeing_id: (old('prm_actgeing_id') !=null ? old('prm_actgeing_id'):0)}},
            trivalue:{{ isset($todoxxxx['modeloxx']->prm_trabinfo_id)? $todoxxxx['modeloxx']->prm_trabinfo_id: (old('prm_trabinfo_id') !=null ? old('prm_actgeing_id'):0)}},
            travalue:{{ isset($todoxxxx['modeloxx']->prm_otractiv_id)? $todoxxxx['modeloxx']->prm_otractiv_id: (old('prm_otractiv_id') !=null ? old('prm_actgeing_id'):0)}},
            noivalue:{{ isset($todoxxxx['modeloxx']->prm_razgeing_id)? $todoxxxx['modeloxx']->prm_razgeing_id: (old('prm_razgeing_id') !=null ? old('prm_actgeing_id'):0)}},
            relvalue:{{ isset($todoxxxx['modeloxx']->prm_tiprelab_id)? $todoxxxx['modeloxx']->prm_tiprelab_id: (old('prm_tiprelab_id') !=null ? old('prm_actgeing_id'):0)}}
            frevalue:{{ isset($todoxxxx['modeloxx']->prm_frecingr_id)? $todoxxxx['modeloxx']->prm_frecingr_id: (old('prm_frecingr_id') !=null ? old('prm_actgeing_id'):0)}}
            jorvalue:{{ isset($todoxxxx['modeloxx']->prm_jorgeing_id)? $todoxxxx['modeloxx']->prm_jorgeing_id: (old('prm_jorgeing_id') !=null ? old('prm_actgeing_id'):0)}}
            diaseman:{{ isset($todoxxxx['modeloxx']->prm_diagener_id)? $todoxxxx['modeloxx']->prm_diagener_id: (old('prm_diagener_id') !=null ? old('prm_actgeing_id'):0)}}
        }
);
        @endif
        $("#prm_actgeing_id").change(function(){
            f_generar_ingresos({valuexxx:$(this).val(), trivalue:'', travalue:'', noivalue:'', relvalue:'',frevalue:'',jorvalue:'', limpiaxx:true});
            f_limpiar($(this).val(),'');
            if($(this).val()!=853){
              f_limpiar($(this).val(),'');
            }
        });

        $("#prm_jorgeing_id").change(function(){
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

        $("#prm_razgeing_id").change(function(){
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
