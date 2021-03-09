<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        //SI PRACTICA ALGUNA RELIGIÓN, SELECCIONE CUAL
        var f_practicareligion = function(valuexxx,pselecte){
            $("#i_prm_religion_practica_id, #i_prm_sacramentos_hechos_id").empty();

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
                        $.each(json.combosxx,function(i,dataxxxx){
                            $.each(dataxxxx.comboxxx,function(i,data){
                               $(dataxxxx.nombrexx).append('<option '+dataxxxx.selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                            });
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema las religioes y los sacramentos');
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
                        $.each(json.comboxxx,function(i,data){
                            $('#i_prm_sacramentos_hechos_id').append('<option '+json.selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema listar los sacramentos');
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

    function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>
