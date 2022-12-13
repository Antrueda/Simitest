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


        $('#prm_ultniest_id').change(function(){
            $.ajax({
                url : "{{ route($todoxxxx['routxxxx'].'.ultinive',$todoxxxx['parametr']) }}",
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


</script>
