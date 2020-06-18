{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){

        var f_discapacidad = function(valuexxx){
            $("#tipodisc_id, #ticedisc_id, #dipeinde_id").empty();
            $("#tipodisc_id, #ticedisc_id, #dipeinde_id").append('<option value="">Seleccione</>')
            if(valuexxx != ''){
                $.ajax({
                    url : "{{ route('ajaxx.discapacitado') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        if(json[0].discapac[0].valuexxx==1){
                            $("#tipodisc_id, #ticedisc_id, #dipeinde_id").empty();
                        }
                        $.each(json[0].discapac,function(i,data){
                            $('#tipodisc_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].certific,function(i,data){
                                $('#ticedisc_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].independ,function(i,data){
                                $('#dipeinde_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }

        @if(old('tiendisc_id')!=null)
            f_discapacidad({{ old('tiendisc_id') }});
        @endif

        $("#tiendisc_id").change(function(){
            f_discapacidad($(this).val());
        });

        $("#conometo_id").change(function(){
            $("#usametod_id, #cualmeto_id, #usovolun_id").empty();
            $("#usametod_id, #cualmeto_id, #usovolun_id").append('<option value="">Seleccione</>')
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.anticonceptivo') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json[0].usametod[0].valuexxx==1){
                        $("#usametod_id, #cualmeto_id, #usovolun_id").empty();
                    }
                    $.each(json[0].usametod,function(i,data){
                        $('#usametod_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].cuametod,function(i,data){
                            $('#cualmeto_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].usavolun,function(i,data){
                            $('#usovolun_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });


        $("#regisalu_id").change(function(){
            $("#sis_entidad_salud_id").empty();
            $("#sis_entidad_salud_id").append('<option value="">Seleccione</>')
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.regimensalud') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json[0].entidadx[0].valuexxx==1){
                        $("#sis_entidad_salud_id").empty();
                    }
                    $.each(json[0].entidadx,function(i,data){
                        $('#sis_entidad_salud_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#i_comidas_diarias").keyup(function(){
            $("#racicomi_id").empty();
            $("#racicomi_id").append('<option value="">Seleccione</>')
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.comidasdiarias') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json[0].nocomida[0].valuexxx==1){
                        $("#racicomi_id").empty();
                    }
                    $.each(json[0].nocomida,function(i,data){
                        $('#racicomi_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#estagest_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.estagestando') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#i_numero_semanas').val(json.valuexxx)
                    $('#i_numero_semanas').prop('readonly',json.numseman)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#estalact_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.estalactando') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#i_numero_meses').val(json.valuexxx)
                    $('#i_numero_meses').prop('readonly',json.nummeses)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#estalact_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.estalactando') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#i_numero_meses').val(json.valuexxx)
                    $('#i_numero_meses').prop('readonly',json.nummeses)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#tienhijo_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.tienehijos') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#i_numero_hijos').val(json.valuexxx)
                    $('#i_numero_hijos').prop('readonly',json.numhijos)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#probsalu_id").change(function(){
            $("#i_prm_problema_salud_id").empty();
            $("#i_prm_problema_salud_id").append('<option value="">Seleccione</>')
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.tieneprobsalud') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json.prosalud[0].valuexxx==1){
                        $("#i_prm_problema_salud_id").empty();
                    }
                    $.each(json.prosalud,function(i,data){
                    s    $('#i_prm_problema_salud_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#consmedi_id").change(function(){
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.consumedicamen') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $('#s_cual_medicamento').val(json.valuexxx)
                    $('#s_cual_medicamento').prop('readonly',json.consmedi)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });
        var f_sisben=function(valuexxx,pselecte){
            // if(valuexxx!=''){
                $.ajax({
                url : "{{ route('ajaxx.puntajesisben') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    if(json[0].pusisben[0].valuexxx==1){
                        $("#tiensalu_id").empty();
                    }
                    $.each(json[0].pusisben,function(i,data){
                        $('#tiensalu_id').append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            // }
        }
        @if(old('d_puntaje_sisben')!=null)
        f_sisben({{ old('d_puntaje_sisben') }},{{ old('tiensalu_id')  }});
        @endif
        $("#d_puntaje_sisben").keyup(function(){
            $("#tiensalu_id").empty();
            $("#tiensalu_id").append('<option value="">Seleccione</>')
            f_sisben($(this).val(),'');
        });

        //MASCARA PUNTAJE SISBEN
        $('#d_puntaje_sisben').mask('00.00');

    });

function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>    --}}
