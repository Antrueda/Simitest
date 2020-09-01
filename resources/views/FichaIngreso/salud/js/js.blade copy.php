<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        alert(4)
        var f_discapacidad = function(valuexxx){
            $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id").empty();
            $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id").append('<option value="">Seleccione</>')
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
                            $("#i_prm_tipo_discapacidad_id, #i_prm_tiene_cert_discapacidad_id, #i_prm_disc_perm_independencia_id").empty();
                        }
                        $.each(json[0].discapac,function(i,data){
                            $('#i_prm_tipo_discapacidad_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].certific,function(i,data){
                                $('#i_prm_tiene_cert_discapacidad_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].independ,function(i,data){
                                $('#i_prm_disc_perm_independencia_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }

        @if(old('i_prm_tiene_discapacidad_id')!=null)
            f_discapacidad({{ old('i_prm_tiene_discapacidad_id') }});
        @endif

        $("#i_prm_tiene_discapacidad_id").change(function(){ alert(4)
            f_discapacidad($(this).val());
        });

        $("#i_prm_conoce_metodos_id").change(function(){
            $("#i_prm_usa_metodos_id, #i_prm_cual_metodo_id, #i_prm_uso_voluntario_id").empty();
            $("#i_prm_usa_metodos_id, #i_prm_cual_metodo_id, #i_prm_uso_voluntario_id").append('<option value="">Seleccione</>')
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
                        $("#i_prm_usa_metodos_id, #i_prm_cual_metodo_id, #i_prm_uso_voluntario_id").empty();
                    }
                    $.each(json[0].usametod,function(i,data){
                        $('#i_prm_usa_metodos_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].cuametod,function(i,data){
                            $('#i_prm_cual_metodo_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].usavolun,function(i,data){
                            $('#i_prm_uso_voluntario_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });


        $("#i_prm_regimen_salud_id").change(function(){
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
            $("#i_prm_razon_no_cinco_comidas_id").empty();
            $("#i_prm_razon_no_cinco_comidas_id").append('<option value="">Seleccione</>')
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
                        $("#i_prm_razon_no_cinco_comidas_id").empty();
                    }
                    $.each(json[0].nocomida,function(i,data){
                        $('#i_prm_razon_no_cinco_comidas_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });

        $("#i_prm_esta_gestando_id").change(function(){
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

        $("#i_prm_esta_lactando_id").change(function(){
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

        $("#i_prm_esta_lactando_id").change(function(){
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

        $("#i_prm_tiene_hijos_id").change(function(){
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

        $("#i_prm_tiene_problema_salud_id").change(function(){
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

        $("#i_prm_consume_medicamentos_id").change(function(){
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
                        $("#i_prm_tiene_sisben_id").empty();
                    }
                    $.each(json[0].pusisben,function(i,data){
                        $('#i_prm_tiene_sisben_id').append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            // }
        }
        @if(old('d_puntaje_sisben')!=null)
        f_sisben({{ old('d_puntaje_sisben') }},{{ old('i_prm_tiene_sisben_id')  }});
        @endif
        $("#d_puntaje_sisben").keyup(function(){
            $("#i_prm_tiene_sisben_id").empty();
            $("#i_prm_tiene_sisben_id").append('<option value="">Seleccione</>')
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
</script>
