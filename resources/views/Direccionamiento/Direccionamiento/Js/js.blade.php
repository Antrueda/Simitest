<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    maximoxx = 4000;
    $(document).ready(() => {
        countCharts('justificacion');
        var f_sis_upz = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencuGetUPZs") }}',
                campoxxx: 'sis_upz_id',
                mensajex: 'Exite un error al cargar las upzs'
            }
            f_comboGeneral(dataxxxx);
            $('#sis_barrio_id').empty();
        }
        var f_ajax=function(dataxxxx,pselecte){
            $.ajax({
                url : dataxxxx.url,
                data : dataxxxx.data,
                type : dataxxxx.type,
                dataType : dataxxxx.datatype,
                success : function(json) {
                    $('#aniosxxx').text(json[0].edadxxxx)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        var f_sis_barrio = function(selected, upzxxxxx) {
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    sis_upz_id: upzxxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencuGetBarrio") }}',
                campoxxx: 'sis_barrio_id',
                mensajex: 'Exite un error al cargar los barrios'
            }
            f_comboGeneral(dataxxxx);
        }

        $('#sis_localidad_id').change(() => {
            f_sis_upz(0);
        });

        let localida = '{{old("sis_localidad_id")}}';
        let upzxxxxx = '{{old("sis_upz_id")}}';
        let barrioxx = '{{old("sis_barrio_id")}}';

        if (localida !== '') {
            f_sis_upz(upzxxxxx);
        }

        if (upzxxxxx !== '') {
            f_sis_barrio(barrioxx, upzxxxxx);
        }

        $('#sis_upz_id').change(() => {
            let upzxxxxx = $('#sis_upz_id').val();
            f_sis_barrio(0, upzxxxxx);
        });

        let f_prm_actividad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#prm_accion_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencuGetActividades") }}',
                campoxxx: 'prm_actividad_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }
        let accionxx = '{{old("prm_accion_id")}}';
        if (accionxx !== '') {
            f_prm_actividad('{{old("prm_actividad_id")}}');
        }

        $('#prm_accion_id').change(() => {
            f_prm_actividad(0);
        });
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


        $('#d_nacimiento').mask('0000-00-00');
        $("#d_nacimiento").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            maxDate:'+0d',
            yearRange: "-70:+0",
            onSelect: function(dateText) {
                dataxxxx={
                    url:"{{ route('ajaxx.edad') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'fechaxxx':$(this).val(),
                        opcionxx:1,
                    },
                    type:'POST',
                    datatype:'json',

                }
                f_ajax(dataxxxx,'');
            }
        });
        $('#edadxxxx').on('change keyup','#aniosxxx',function(){
        $.ajax({
            url: "{{ route('direccionref.cafecnac') }}",
            data: {
                'padrexxx': $(this).val()
            },
            type: 'GET',
            dataType: 'json',
            success: function(json) {
               $('#d_nacimiento').val(json.fechaxxx)
               $('#aniosxxx').val(json.edadxxxx)
            },
            error: function(xhr, status) {
                alert('Disculpe, existió un problema al calcular la fecha de nacimiento');
            },
        });
    });




    //     var datamuni = function(campoxxx, valuexxx, selected) {
    //         var routexxx = "{{ route('fidatbas.municipio') }}"
    //         var municipi = 'sis_municipioexp_id';
    //         if (campoxxx == 'prm_etnia_id') {
    //             municipi = 'prm_poblacion_etnia_id';
    //             routexxx = "{{ route('ajaxx.poblacionetnia') }}"
    //         }
    //         $("#" + municipi).empty();
    //         dataxxxx = {
    //             url: routexxx,
    //             data: {
    //                 _token: $("input[name='_token']").val(),
    //                 'departam': valuexxx
    //             },
    //             type: 'POST',
    //             datatype: 'json',
    //             campoxxx: municipi
    //         }
    //         if (valuexxx != '') {
    //             f_ajax(dataxxxx, selected);
    //         }
    //     }
    //     @if(old('prm_etnia_id') !== null)
    //     datamuni('prm_etnia_id', "{{old('prm_etnia_id')}}", "{{old('prm_poblacion_etnia_id')}}");
    //     @endif

    //     $("#prm_etnia_id").change(function() {
    //         datamuni($(this).prop('id'), $(this).val(), '')
    //     });
    // });






        $('.select2').select2({
            language: "es"
        });

        

        $('#fecha').mask('0000-00-00');
        $("#fecha").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: new Date(<?=$todoxxxx['inicioxx'][0]?>, <?=$todoxxxx['inicioxx'][1]-1?>, <?=$todoxxxx['inicioxx'][2]?>),
            maxDate: new Date(<?=$todoxxxx['actualxx'][0]?>, <?=$todoxxxx['actualxx'][1]-1?>, <?=$todoxxxx['actualxx'][2]?>),
            // new Date(1999, 10 - 1, 25),

            // yearRange: "-28:-0",


        });
    });
</script>
