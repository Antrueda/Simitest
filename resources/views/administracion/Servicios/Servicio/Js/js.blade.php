<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    $(function(){
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });
        // Máscara documento
        $('#s_documento').mask('000000000000');

         var f_ajax=function(dataxxxx,pselecte){
            $.ajax({
                url : dataxxxx.url,
                data : dataxxxx.data,
                type : dataxxxx.type,
                dataType : dataxxxx.datatype,
                success : function(json) {
                    if(json[0].valuexxx==1){
                        $("#"+dataxxxx.campoxxx).empty();
                    }
                    if (dataxxxx.data.fechaxxx) {
                        var edadxxxx=eval(json[0].edadxxxx)
                        $("#prm_estado_civil_id,#prm_identidad_genero_id,#prm_orientacion_sexual_id,#prm_sexo_id").empty();
                        $("#prm_estado_civil_id,#prm_identidad_genero_id,#prm_orientacion_sexual_id,#prm_sexo_id").append('<option value="" >Seleccione</option>');
                        if(edadxxxx<=14){
                            $("#prm_estado_civil_id,#prm_identidad_genero_id,#prm_orientacion_sexual_id").empty();
                        }

                        $.each(json[0].orientac,function(i,d){
                            var selected='';
                            if(dataxxxx.orientac==d.valuexxx){
                                selected='selected';
                            }
                            $("#prm_orientacion_sexual_id").append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });
                        $.each(json[0].generoxx,function(i,d){
                            var selected='';
                            if(dataxxxx.generoxx==d.valuexxx){
                                selected='selected';
                            }
                            $("#prm_identidad_genero_id").append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });
                        $.each(json[0].estacivi,function(i,d){
                            var selected='';
                            if(dataxxxx.estadoxx==d.valuexxx){
                                selected='selected';
                            }
                            $("#prm_estado_civil_id").append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });
                        $.each(json[0].sexoxxxx,function(i,d){
                            var selected='';
                            if(dataxxxx.sexoxxxx==d.valuexxx){
                                selected='selected';
                            }
                            $("#prm_sexo_id").append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });

                        //f_situacion_militar(edadxxxx);
                       $('#aniosxxx').text(edadxxxx)
                    }else{
                        $.each(json,function(i,data){
                            var selected='';
                            if(eval(data.valuexxx)==eval(pselecte)){
                                selected='selected'
                            }
                            $('#'+dataxxxx.campoxxx).append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    }

                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var datadepa=function(campoxxx,valuexxx,selected){
            var localida=false;
            var routexxx="{{ route('ajaxx.departamento') }}"
            var municipi='sis_municipioexp_id';
            var departam='sis_departamentoexp_id';
            if(campoxxx=='sis_pai_id'){
                municipi='sis_municipio_id';
                departam='sis_departamento_id';
            }else if(campoxxx=='sis_localidad_id'){
                departam='sis_upz_id';
                municipi='sis_upzbarri_id';
                routexxx="{{ route('ajaxx.upz') }}";
                localida=true;
            }

            $("#"+departam+",#"+municipi).empty();
            $("#"+departam+",#"+municipi).append('<option value="">Seleccione</option>')
            dataxxxx={
                url:routexxx,
                data:{
                    _token: $("input[name='_token']").val(),
                    'sispaisx':valuexxx
                },
                type:'POST',
                datatype:'json',
                campoxxx:departam
            }
            if(valuexxx!='' ){
                if(valuexxx!=2 && !localida){
                    $("#"+departam+",#"+municipi).empty();
                    $("#"+departam+",#"+municipi).append('<option value="1">N/A</>')
                    return false;
                }
                f_ajax(dataxxxx,selected);
            }


        }
        var datamuni=function(campoxxx,valuexxx,selected){
            var routexxx="{{ route('fidatbas.municipio') }}"
            var municipi='sis_municipioexp_id';
            if(campoxxx=='sis_departamento_id'){
                municipi='sis_municipio_id';
            }else if(campoxxx=='sis_upz_id'){
                municipi='sis_upzbarri_id';
                routexxx="{{ route('ajaxx.barrio') }}"
            }else if(campoxxx=='prm_etnia_id'){
                municipi='prm_poblacion_etnia_id';
                routexxx="{{ route('ajaxx.poblacionetnia') }}"
            }
            $("#"+municipi).empty();
            $("#"+municipi).append('<option value="">Seleccione</>')
            dataxxxx={
                url:routexxx,
                data:{
                    _token: $("input[name='_token']").val(),
                    'departam':valuexxx
                },
                type:'POST',
                datatype:'json',
                campoxxx:municipi
            }
            if(valuexxx!='' ){
                f_ajax(dataxxxx,selected);
            }
        }
        var f_documento_fisico=function(valuexxx,selected){
            $("#prm_ayuda_id").empty();
            $("#prm_ayuda_id").append('<option value="">Seleccione</>')
            dataxxxx={
                    url:"{{ route('ajaxx.ayuda') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'padrexxx':valuexxx
                    },
                    type:'POST',
                    datatype:'json',
                    campoxxx:'prm_ayuda_id'
                }
                if(valuexxx!='' ){
                    f_ajax(dataxxxx,selected);
                }
        }


        var f_cuenta_documento=function(valuexxx,pselecte){
            $("#prm_doc_fisico_id").empty();
            $("#prm_doc_fisico_id").append('<option value="">Seleccione</>')

                if(valuexxx!='' ){
                    $.ajax({
                    url : "{{ route('ajaxx.cuentadocumento') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        if(json[0].unosolox==1){
                            $("#prm_doc_fisico_id").empty();
                        }
                        $.each(json[0].cuendocu,function(i,data){
                            var selected='';
                            if(pselecte==data.valuexxx) {
                                selected='selected';
                            }
                            $('#prm_doc_fisico_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });

                }
        }
        var f_situacion_militar=function(valuexxx){
            $("#prm_situacion_militar_id,#prm_clase_libreta_id").empty();
            $("#prm_situacion_militar_id,#prm_clase_libreta_id").append('<option value="">Seleccione</option>');

            if(valuexxx!=''){
                var fechaxxx='';
                if($('#d_nacimiento').val()==''){
                    $("#prm_sexo_id").empty();
                    $("#prm_sexo_id").append('<option value="">Seleccione</>')
                    alert('Por favor seleccione una fecha')
                    return false;
                }
                $.ajax({
                    url : "{{ route('ajaxx.situacionmilitar') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx,
                            'fechaxxx':$('#d_nacimiento').val(),
                            opcionxx:1
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        if(json[0].condicio[0].valuexxx==1){
                            $("#prm_situacion_militar_id,#prm_clase_libreta_id").empty();
                        }
                        $.each(json[0].condicio,function(i,data){
                            $('#prm_situacion_militar_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].tiplibre,function(i,data){
                            $('#prm_clase_libreta_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });

                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });


            }
        }
        @if(old('sis_pai_id')!==null)
            datadepa('sis_pai_id',{{ old('sis_pai_id') }},{{ old('sis_departamento_id') }});

            @if(old('sis_departamento_id')!==null)
                datamuni('sis_departamento_id',{{ old('sis_departamento_id') }},{{ old('sis_municipio_id') }});
            @endif
        @endif
        @if(old('sis_paiexp_id')!==null)
            datadepa('sis_paiexp_id',{{ old('sis_paiexp_id') }},{{ old('sis_departamentoexp_id') }});

            @if(old('sis_departamentoexp_id')!==null)
                datamuni('sis_departamentoexp_id',{{ old('sis_departamentoexp_id') }},{{ old('sis_municipioexp_id') }});
            @endif
        @endif
        @if(old('sis_localidad_id')!==null)
            datadepa('sis_localidad_id',{{ old('sis_localidad_id') }},{{ old('sis_upz_id') }});

            @if(old('sis_upz_id')!==null)
                datamuni('sis_upz_id',{{ old('sis_upz_id') }},{{ old('sis_upzbarri_id') }});
            @endif
        @endif
         @if(old('prm_doc_fisico_id')!==null)
          f_documento_fisico({{ old('prm_doc_fisico_id') }},{{ old('prm_ayuda_id') }});
            @endif
        @if(old('prm_etnia_id')!==null)
        datamuni('prm_etnia_id',{{ old('prm_etnia_id') }},{{ old('prm_poblacion_etnia_id') }});
        @endif

        @if(isset($todoxxxx['mindatex']))
        var fechactu=new Date();
        var fechaInicio = new Date(fechactu.getFullYear()-28,fechactu.getMonth(),fechactu.getDate()).getTime();
        var fechaFin    = new Date().getTime();
        var diff = parseInt((fechaFin - fechaInicio)/(1000*60*60*24));


        var f_nacimiento=function(valuexxx, orientac, generoxx, estadoxx, sexoxxxx){
            dataxxxx={
                    url:"{{ route('ajaxx.edad') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'fechaxxx':valuexxx,
                        opcionxx:1,
                    },
                    type:'POST',
                    datatype:'json',
                    orientac:orientac,
                    generoxx:generoxx,
                    estadoxx:estadoxx,
                    sexoxxxx:sexoxxxx
                }

                f_ajax(dataxxxx,'');
        }


        @if(old('d_nacimiento')!==null)

        f_nacimiento('{{ old("d_nacimiento") }}','{{ old("prm_orientacion_sexual_id") }}','{{ old("prm_identidad_genero_id") }}','{{ old("prm_estado_civil_id") }}','{{ old("prm_sexo_id") }}');
        @endif

        $("#d_nacimiento").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate:"<?= isset($todoxxxx['mindatex'])?$todoxxxx['mindatex']:'+0y +0m +0d'?>",
            maxDate:"<?= isset($todoxxxx['maxdatex'])?$todoxxxx['maxdatex']:'+0y +0m +0d'?>",
            yearRange: "-28:-5",

            onSelect: function(dateText) {
                f_nacimiento($(this).val(),'','','','');
            }
        });
      @endif

        $("#prm_doc_fisico_id").change(function(){
            f_documento_fisico($(this).val(),'');
        });

        $(".sispaisx").change(function(){
            datadepa($(this).prop('id'),$(this).val(),'');
        });
        $(".departam").change(function(){
            datamuni($(this).prop('id'),$(this).val(),'')
        });




        $("#prm_tipodocu_id").change(function(){
            var valuexxx=$(this).val()
             if($(this).val()!=''){
                 $.ajax({
                    url:"{{ route('ajaxx.consecutivoceduala') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val(),
                    },
                    type:'POST',
                    dataType : 'json',
                    success : function(json)  {
                        if(valuexxx!=145){
                            $("#prm_ayuda_id").empty();
                            $("#prm_ayuda_id").append('<option value="">Seleccione</>')
                            $("#s_documento").val('');
                            $("#s_documento").prop('readonly',false)
                            $("#prm_doc_fisico_id option[value='']").attr("selected",true);
                            f_cuenta_documento('0','');
                        }else{
                            $("#s_documento").val(json.consecut);
                            $("#s_documento").prop('readonly',true)
                            f_documento_fisico(228,'');
                            f_cuenta_documento(valuexxx,'');
                        }
                        $("#sis_paiexp_id,#sis_departamentoexp_id,#sis_municipioexp_id").empty();
                        if(valuexxx!=145){
                            $("#sis_paiexp_id,#sis_departamentoexp_id,#sis_municipioexp_id").append('<option value="">Seleccione</option>')
                        }
                        $.each(json.paisxxxx,function(i,d){
                            $("#sis_paiexp_id").append('<option value="'+d.valuexxx+'">'+d.optionxx+'</option>')
                        });
                        $.each(json.departam,function(i,d){
                            $("#sis_departamentoexp_id").append('<option value="'+d.valuexxx+'">'+d.optionxx+'</option>')
                        });
                        $.each(json.municipi,function(i,d){
                            $("#sis_municipioexp_id").append('<option value="'+d.valuexxx+'">'+d.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    }
                });
             }else{
                $("#prm_ayuda_id").empty();
                $("#prm_ayuda_id").append('<option value="">Seleccione</>')
                $("#s_documento").val('');
                $("#s_documento").prop('readonly',false)
                $("#prm_doc_fisico_id option[value='']").attr("selected",true);
                f_cuenta_documento('0','');
             }
        });
        var sita_sexo=function(valuexxx){
            f_situacion_militar(valuexxx);
        }

        @if(old('prm_sexo_id')!==null)
         f_situacion_militar({{ old('prm_sexo_id') }});
        @endif

        $("#prm_sexo_id").change(function(){
           sita_sexo($(this).val());
        });

        var clase_libreta=function(valuexxx,pselecte){
            $("#prm_clase_libreta_id").empty();
            $("#prm_clase_libreta_id").append('<option value="">Seleccione</>')
            if(valuexxx!=''){
                $.ajax({
                    url : "{{ route('ajaxx.claselibreta') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        if(json[0].claslibr[0].valuexxx==1){
                            $("#prm_clase_libreta_id").empty();
                        }
                        $.each(json[0].claslibr,function(i,data){
                            var selected='';
                            if(pselecte==data.valuexxx)
                                selected='selected';
                            $('#prm_clase_libreta_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }
        @if(old('prm_situacion_militar_id')!==null)
            clase_libreta({{ old('prm_situacion_militar_id') }},{{ old('prm_clase_libreta_id') }});
        @endif
        $("#prm_situacion_militar_id").change(function(){
            clase_libreta($(this).val(),'');
        });
    });
</script>
