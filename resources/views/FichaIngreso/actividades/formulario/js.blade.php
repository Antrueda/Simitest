<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){

        //SI PRACTICA ALGUNA RELIGIÓN, SELECCIONE CUAL
        var f_practicareligion = function(valuexxx,pselecte){
            $("#i_prm_religion_practica_id, #i_prm_sacramentos_hechos_id").empty();
            $("#i_prm_religion_practica_id").append('<option value="">Seleccione</>')
            if(valuexxx != ''){
                $.ajax({
                    url : "{{ route('ajaxx.practicareligion') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        if(json[0].cualreli[0].valuexxx==1){
                            $("#i_prm_religion_practica_id, #i_prm_sacramentos_hechos_id").empty();
                        }

                        $.each(json[0].cualreli,function(i,data){
                            var selected = '';
                            if (data.valuexxx == pselecte){
                                selected = 'selected';
                            }
                            $('#i_prm_religion_practica_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')

                        });
                        $.each(json[0].sacramen,function(i,data){
                            var selected = '';
                            if (data.valuexxx == 1){
                                selected = 'selected';
                            }
                            $('#i_prm_sacramentos_hechos_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }

        @if(old('i_prm_practica_religiosa_id')!=null)
            f_practicareligion({{ old('i_prm_practica_religiosa_id') }},{{ old('i_prm_religion_practica_id') }});
        @endif

      

        $("#i_prm_practica_religiosa_id").change(function(){
            f_practicareligion($(this).val(),'');
        });

        // SI ES CATÓLICO SELECCIONE CUAL SACRAMENTO TIENE
        var f_cualsacramento = function(valuexxx){
            $("#i_prm_sacramentos_hechos_id").empty();
            //$("#i_prm_sacramentos_hechos_id").append('<option value="">Seleccione</>')
            if(valuexxx != ''){
                $.ajax({
                    url : "{{ route('ajaxx.cualsacramento') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        if(json[0].sacramen[0].valuexxx==1){
                            $("#i_prm_sacramentos_hechos_id").empty();
                        }
                        $.each(json[0].sacramen,function(i,data){
                            var selected = '';
                            if (data.valuexxx == 1){
                                selected = 'selected';
                            }
                            $('#i_prm_sacramentos_hechos_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }

        @if(old('i_prm_religion_practica_id')!=null)
            f_cualsacramento({{ old('i_prm_religion_practica_id') }});
        @endif

        $("#i_prm_religion_practica_id").change(function(){
            f_cualsacramento($(this).val());
        });

         $("#i_prm_pertenece_parche_id").change(function(){
              $('#s_nombre_parche').val('').prop('readonly',false);
             if($(this).val()==228){
                 $('#s_nombre_parche').val('').prop('readonly',true);
             }

        });

    });
</script>
