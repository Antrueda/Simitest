<script>
    maximoxx = 4000;
    $(document).ready(() => {
        countCharts('justificacion');
       
        let f_sis_entidad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_entidad_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencu.servicio") }}',
                campoxxx: 'ent_servicio_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let dependen = '{{old("sis_entidad_id")}}';
        if (dependen !== '') {
            f_sis_entidad('{{old("ent_servicio_id")}}');
            
        }
        $('#sis_entidad_id').change(() => {
            f_sis_entidad(0);
        });

        var f_upiarea = function(dataxxxx) {
                $.ajax({
                url: "{{ route('direccionref.upiarea')}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) { 
                    $('#upi_id').empty();
                    $.each(json.comboxxx, function(id, data) {
                        $('#upi_id').append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                  //  alert('Disculpe, existe un problema al buscar el responsable de la upi');
                }
            });
        }


        $('#area_id').change(function() {
            f_upiarea({dataxxxx:{padrexxx:$(this).val(),selected:[0],remision:$('#area_id').val()}})
            });

        @if(old('area_id')!==null)
        f_upiarea({{ old('area_id') }},{{ old('upi_id') }});
        @endif    

        var f_sis_municipio = function (departam,pselecte) {
        $.ajax({
        url: "{{ route('usuario.municipio')}}",
        type: 'POST',
        data: {_token: $("input[name='_token']").val(),
          'departam':departam
        },
        dataType: 'json',
        success: function (json) {
          $.each(json,function(i,data){
            var selected='';
            if(data.valuexxx==pselecte){
              selected='selected';
            }
            $('#municipio_cond_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
           });

        },

        error: function (xhr, status) {
          alert('Disculpe, existiÃ³ un problema');
        }
      });
    }
      @if(old('departamento_cond_id')!==null)
      f_sis_municipio({{ old('departamento_cond_id') }},{{ old('municipio_cond_id') }});
         @endif

    $('#departamento_cond_id').change(function(){
      $('#municipio_cond_id').empty();
      if($(this).val()!=''){
        f_sis_municipio($(this).val(),'');
      }
    });

    var f_sis_municipiocert = function (departam,pselecte) {
        $.ajax({
        url: "{{ route('usuario.municipio')}}",
        type: 'POST',
        data: {_token: $("input[name='_token']").val(),
          'departam':departam
        },
        dataType: 'json',
        success: function (json) {
          $.each(json,function(i,data){
            var selected='';
            if(data.valuexxx==pselecte){
              selected='selected';
            }
            $('#municipio_cert_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
           });

        },

        error: function (xhr, status) {
          alert('Disculpe, existiÃ³ un problema');
        }
      });
    }
      @if(old('departamento_cert_id')!==null)
      f_sis_municipiocert({{ old('departamento_cert_id') }},{{ old('municipio_cert_id') }});
         @endif

    $('#departamento_cert_id').change(function(){
      $('#municipio_cert_id').empty();
      if($(this).val()!=''){
        f_sis_municipiocert($(this).val(),'');
      }
    });


    var f_departamento=function(dataxxxx){
            $.ajax({
                url : "{{ route('direccionref.depamuni') }}",
                data :dataxxxx.dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $(json.limpiarx).empty();
                    $.each(json.comboxxx,function(i,data){
                        var selected='';
                        if(data.valuexxx==dataxxxx.selected){
                            selected='selected';
                        }
                        $('#'+json.campoxxx).append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problemadddd');
                },
            });
        }
        @if(old('sis_pai_id')!=null)
            f_departamento({dataxxxx:{tipoxxxx:'sis_pai_id', padrexxx:{{ old('sis_pai_id') }}  } , selected:"{{ old('sis_departam_id') }}"  });
            @if(old('sis_departam_id')!=null)
                f_departamento({dataxxxx:{tipoxxxx:'sis_departam_id', padrexxx:{{ old('sis_departam_id') }}  } , selected:"{{ old('sis_municipio_id') }}"  });
            @endif
        @endif
        //MASCARA DOCUMENTOS

        $(".listarxx").change(function(){
            var sispaisid=$(this).prop('id');
            if(sispaisid=='sis_pai_id' && $(this).val()!=2){
                f_departamento({dataxxxx:{tipoxxxx:'sis_pai_id',padrexxx:1},selected:''});
                f_departamento({dataxxxx:{tipoxxxx:'sis_departam_id',padrexxx:1},selected:''});
            }else{
                f_departamento({dataxxxx:{tipoxxxx:sispaisid,padrexxx:$(this).val()},selected:''});
            }

        });



                var f_etnia = function (departam,pselecte) {
                $.ajax({
                url: "{{ route('ajaxx.poblacionetnia')}}",
                type: 'POST',
                data: {_token: $("input[name='_token']").val(),
                'departam':departam
                },
                dataType: 'json',
                success: function (json) {
                $.each(json,function(i,data){
                    var selected='';
                    if(data.valuexxx==pselecte){
                    selected='selected';
                    }
                    $('#prm_poblacion_etnia_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                });

                },

                error: function (xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
                }
            });
            }
            @if(old('prm_etnia_id')!==null)
            f_etnia({{ old('prm_etnia_id') }},{{ old('prm_poblacion_etnia_id') }});
            @endif

            $('#prm_etnia_id').change(function(){
            $('#prm_poblacion_etnia_id').empty();
            if($(this).val()!=''){
                f_etnia($(this).val(),'');
            }
            });
            var foreachx=function(comboxxx){
                $('#'+comboxxx[0]).empty();
                $.each(comboxxx[1],function(i,data){
                    $('#'+comboxxx[0]).append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                });
            }

            var f_combo=function(dataxxxx){
            $.ajax({
                url: "{{ route('direccionref.userarea')}}",
                data :dataxxxx.dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $('#'+json.funccont[0]+' option:selected').removeAttr( "selected" )
                    foreachx(json.funccont)
                  
                    
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
            $('#intra_id').change(() => {
                f_combo({dataxxxx:{padrexxx:$('#intra_id').val(),selected:''}})
                });

        

     


        var certifica = function(valuexxxx){
        if(valuexxxx==228){
            $('#departcert_div').hide()
            $('#municipiocert_div').hide()
        }else{
            $('#departcert_div').show()
            $('#municipiocert_div').show()
        }
        } 
        $('#prm_certifica_id').change(function(){
            certifica($(this).val())
        })

        $('.select2').select2({
            language: "es"
        });

        });

    function doc(valor){
        if(valor == 691){
            document.getElementById("nombre_div").hidden=false;
            document.getElementById("entidad_div").hidden=true;
            document.getElementById("programa_div").hidden=true;
        } 
        if(valor == 690){
            document.getElementById("nombre_div").hidden=true;
            document.getElementById("entidad_div").hidden=false;
            document.getElementById("programa_div").hidden=false;
        } 
    } 

    function doc2(valor){
        if(valor == 227){
            document.getElementById("prm_discapacidad_id").hidden=false;
        }else{
            document.getElementById("prm_discapacidad_id").hidden=true;
        }
       
    } 

    
    function doc1(valor){
        if(valor == 853){
            document.getElementById("dcond_div").hidden=true;
            document.getElementById("mcond_div").hidden=true;
            document.getElementById("departcert_div").hidden=true;
            document.getElementById("municipiocert_div").hidden=true;
            document.getElementById("certifi_div").hidden=true;
        }else{
            document.getElementById("dcond_div").hidden=false;
            document.getElementById("mcond_div").hidden=false;
            document.getElementById("departcert_div").hidden=false;
            document.getElementById("municipiocert_div").hidden=false;
            document.getElementById("certifi_div").hidden=false;
        }
       
    } 



    function doc4(valor){
        if(valor == 227){
            document.getElementById("departcert_div").hidden=false;
            document.getElementById("municipiocert_div").hidden=false;
        }else{
            document.getElementById("departcert_div").hidden=true;
            document.getElementById("municipiocert_div").hidden=true;
        }
       
    } 

    function doc3(valor){
        if(valor == 2726){
            document.getElementById("inter_div").hidden=false;
            document.getElementById("recibe_div").hidden=false;
            document.getElementById("intra_div").hidden=true;
            document.getElementById("idipron_div").hidden=true;
            
        }else{
            document.getElementById("inter_div").hidden=true;
            document.getElementById("recibe_div").hidden=true;
            document.getElementById("intra_div").hidden=false;
            document.getElementById("idipron_div").hidden=false;
        } 
    }


    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }

    function carga() {
        doc(document.getElementById('inter_id').value);
        doc1(document.getElementById('prm_condicion_id').value);
        doc2(document.getElementById('prm_cuentadisc_id').value);
        doc3(document.getElementById('prm_tipoenti_id').value);
        doc4(document.getElementById('prm_certifica_id').value);

    }
    window.onload=carga;
</script>
