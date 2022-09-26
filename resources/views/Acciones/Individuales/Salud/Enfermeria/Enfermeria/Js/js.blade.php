<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(() => {
        let dependen = '{{old("sis_depen_id")}}';
        let servicio = '{{old("sis_servicio_id")}}';
        let grupoxxx = '{{old("prm_grupo_id")}}';
        let gradoxxx = '{{old("eda_grados_id")}}';
        let tipoacti = '{{ old("tipoacti_id") }}';
        let activida = $('#prm_actividad_id');
        let actividade = '{{ old("actividade_id") }}';
        let tipocurso = '{{ old("prm_tipo_curso") }}';
        let tipoaten = '{{ old("prm_tipo_aten") }}';

        let curso = '{{ old("prm_curso") }}';
        let observacion = '{{ old("observacion") }}';
        let especial = '{{ old("prm_especial_id") }}';
        let old_tipoacti = '{{ old("tipoacti_id") }}';
        let old_actividade = '{{ old("vacuna_id") }}';

        var fechaPuede;


        @if(isset($todoxxxx['puedeeditar']))
            @if($todoxxxx['puedeeditar'] == 1)
                fechapuede($('#sis_depen_id').val());
                armarfechaFinal( $("#prm_fecha_inicio").val());
            @endif
        @endif

        var f_repsable = function(dataxxxx) {
        $.ajax({
                url: "{{ route('asissema.responsable')}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) {
                    $(json.campoxxx).empty();
                    $.each(json.comboxxx, function(id, data) { console.log(data)
                        $(json.campoxxx).append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                  //  alert('Disculpe, existe un problema al buscar el responsable de la upi');
                }
            });
        }





        let f_sis_depen = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.servicio") }}',
                campoxxx: 'sis_servicio_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_grado = (selected, upixxxxx, padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    cabecera: true,
                    upixxxxx: upixxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grado") }}',
                campoxxx: 'eda_grados_id',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_grupo = (selected, upixxxxx, padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grupo") }}',
                campoxxx: 'prm_grupo_id',
                mensajex: 'Exite un error al cargar los grupos'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_actividad = (selected, upixxxxx, tipoacti) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoacti: tipoacti,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.actividad") }}',
                campoxxx: 'actividade_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }

        // cargar actividades select
        let f_actividads = (selected, tipoacti) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoacti: tipoacti,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("enfermeria.actividad") }}',
                campoxxx: 'vacuna_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }    
           // tipo de actividad
        let inputTipoacti = $('#tipo_vacunas_id');

        inputTipoacti.change(() => {
            let tipoacti = inputTipoacti.find(':selected').val();
            if (tipoacti != "") {
                $('#vacuna_id').attr('disabled', false);
                f_actividads(0,tipoacti);
            }else{
                $('#vacuna_id').attr('disabled', true);
            }      
        })

        let f_curso = (selected, tipoCurs) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoCurs: tipoCurs,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.curso") }}',
                campoxxx: 'prm_especial',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }

        function ocultarFields() {
            $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field,#grado_id_field, #grupo_id_field, #curso_box, #observaciones,#prm_especial_fiel,#prm_especiales, #prm_especialidades1, #prm_modalidad')
                    .addClass('d-none');
            $('#prm_programa_id, #prm_convenio_id, #vacuna_id, #tipo_vacunas_id, #prm_grupo_id, #eda_grados_id, #prm_curso, #observacion,                            #prm_especial_id, #prm_especiales_id, #prm_especialidades_id, #prm_modalidades_id').attr('disabled', true);
        }




    function fillBook(){   

   var first_select = document.getElementById('prm_actividad_id').value;
   var second_select = document.getElementById('prm_tipo_curso').value;

   // Si se selecciona acompañamiento y apoyos diagnosticos, se debe seleccionar el otro select
    if(first_select == '1327' && second_select == '1339') {
        ocultarFields();
        ocultartemas2();
        $('#prm_especial_fiel').removeClass('d-none');
        $('#prm_especial_id').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
   // Si se selecciona CONSULTA DE URGENCIAS MEDICAS
    }if(first_select=='1327'&& second_select == '1340'){
        ocultarFields();
        ocultartemas2();
        $('#prm_especiales').removeClass('d-none');
        $('#prm_especiales_id').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
   // Si se selecciona CONSULTA FUERA DE LA INSTITUCION PRESENCIAL
    }if(first_select=='1327'&& second_select == '2866'){
        ocultarFields();
        ocultartemas2();
        $('#prm_especialidades1').removeClass('d-none');
        $('#prm_especialidades_id').attr('disabled', false);
        $('#prm_modalidad').removeClass('d-none');
        $('#prm_modalidades_id').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
   // Si se selecciona JOR
    }if(first_select=='1327'&& second_select == '2867'){
        ocultarFields();
        ocultartemas2();
        $('#tipoacti_id_field').removeClass('d-none');
        $('#tipo_vacunas_id').attr('disabled', false);        
        $('#actividade_id_field').removeClass('d-none');
        $('#tipo_vacunas_id').attr('disabled', false);

        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
   // Si se selecciona HOSPITALIZACION
    }if(first_select=='1327'&& second_select == '1345'){
        ocultarFields();
        ocultartemas2();
        $('#prm_especial_fiel').removeClass('d-none');
        $('#prm_especial_id').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
    }
}



   


function fillatencion(){    
   var first_select = document.getElementById('prm_actividad_id').value;
   var second_select = document.getElementById('prm_tipo_aten').value;

   // Si se selecciona AP
    if(first_select == '1328' && second_select == '2876') {
        ocultarFields();
        ocultartemas2();

        $('#prm_espe_ap').removeClass('d-none');
        $('#prm_especialidad_ap').attr('disabled', false);

        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
    // Si se selecciona AV
    }if(first_select=='1328'&& second_select == '2877'){
        ocultarFields();
        ocultartemas2();
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
   // Si se selecciona Tamizaje
    }if(first_select=='1328'&& second_select == '1387'){
        ocultarFields();
        ocultartemas2();
        $('#prm_prueba_tamizajes').removeClass('d-none');
        $('#prm_prueba_tamizaje').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
    }
}


function procedimiento(){    
   var first_select = document.getElementById('prm_actividad_id').value;
   var second_select = document.getElementById('prm_procedimiento').value;

   // Si se selecciona administracion de medicamentos 
    if(first_select == '1332' && second_select == '1378') {
        ocultarFields();
        ocultartemas2();
      //  ocultartemas();
        $('#prm_formula').removeClass('d-none');
        $('#prm_formulacion').attr('disabled', false);
        alert('Disculpe, existiÃ³ un problema al cargar medicamentos');
    // Si se selecciona CURACION 
    }if(first_select=='1332'&& second_select == '1380'){

        alert('Disculpe, existiÃ³ un problema al cargar');

        ocultarFields();
        ocultartemas2();
        ocultartemas();
        alert('selecciono Curacion')

    }
}


function ocultartemas() {
            $('#tipo_curso_box,#tipo_aten,#prm_espe_ap,#prm_proced,#prm_formula,#prm_chindividuals,#prm_tztamizaje,#prm_tipyd') .addClass('d-none');
            $('#prm_tipo_curso,#prm_tipo_aten,#prm_especialidad_ap,#prm_procedimiento,#prm_formulacion,#prm_chindividual,#prm_tamizaje,#prm_promocion').attr('disabled', true);
        }


function promocion(){    
   var first_select = document.getElementById('prm_actividad_id').value;
   var second_select = document.getElementById('prm_promocion').value;

   // Si se selecciona Charla 
    if(first_select == '2865' && second_select == '1383') {
        //1391 Auto cuidado   //1386 Planificacion Familiar
        ocultarFields();
        ocultartemas2();
        ocultartemas();
        $('#prm_chindividuals').removeClass('d-none');
        $('#prm_chindividual').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
    // Si se selecciona Tamizaje 
    }if(first_select=='2865'&& second_select == '1387'){
        ocultarFields();
        ocultartemas2();
        ocultartemas();
        $('#prm_tztamizaje').removeClass('d-none');
        $('#prm_tamizaje').attr('disabled', false);
        $('#observaciones').removeClass('d-none');
        $('#observacion').attr('disabled', false);
    }
}




// Se arma el combo para el motivo de atencion 
        function f_nom_actividad() {
            if (activida.find(':selected').text() === 'Seleccione') {
                ocultarFields();
            }
            switch (activida.val()) {
                case '1327': //ACOMPAÑAMINETO
                  ocultarFields();
                  ocultartemas();

                
                   $('#tipo_curso_box').removeClass('d-none');
                   $('#prm_tipo_curso').attr('disabled', false)
                    break;

                case '1328':// ATENCION PRESTADA DENTRO DE LA UPI
                   // ocultarFields();
                   ocultartemas();
                //   ocultartemas2();
                    ocultarFields();
                    $('#tipo_aten').removeClass('d-none');
                   $('#prm_tipo_aten').attr('disabled', false)
                    break;

                case '2864'://NOVEDAD DE FALLECIMIENTO
                   ocultartemas();
                   ocultartemas2();
                    $('#prm_novedads').removeClass('d-none');
                    $('#prm_novedad').attr('disabled', false);
                    $('#observaciones').removeClass('d-none');
                    $('#observacion').attr('disabled', false);
                    break;

                    case '1332':// PROCEDIMIENTO HACE FALTA LA TABLA DE MEDICAMENTOS Y DE HERIDAS 
                    ocultarFields();
                  //  ocultartemas();
                    ocultartemas2();
                    $('#prm_proced').removeClass('d-none');
                    $('#prm_procedimiento').attr('disabled', false);
                    break;

                case '2865':// PROMOCION Y DETECCION
                    ocultarFields();
                     ocultartemas();
                    ocultartemas2();              
                    $('#prm_tipyd').removeClass('d-none');
                    $('#prm_promocion').attr('disabled', false);
                    break;
                    
                case '1329':// CAMBIO DE EPS
                    ocultarFields();
                    ocultartemas();
                    ocultartemas2(); 
                 
                    break;

                    case '1336':// Tramites de Afiliacion

                     //2899 , 2900 2901    => 467 
                    ocultarFields();
                    ocultartemas();
                    ocultartemas2();  
                    $('#prm_afiliacions').removeClass('d-none');
                    $('#prm_afiliacion').attr('disabled', false);
                    $('#observaciones').removeClass('d-none');
                    $('#observacion').attr('disabled', false);
                    break;

                    case '1337':// Tramites de EPS

                     //2902 , 2903 2904    => 468 
                    ocultarFields();
                    ocultartemas();
                    ocultartemas2();  
                    $('#prm_tramepsx').removeClass('d-none');
                    $('#prm_trameps').attr('disabled', false);
                    $('#observaciones').removeClass('d-none');
                    $('#observacion').attr('disabled', false);
                    break;
            }
        }

        function ocultartemas2() {
            $('#prm_espe_ap,#prm_prueba_tamizajes,#prm_novedads,#prm_afiliacions,#prm_tramepsx') .addClass('d-none');
            $('#prm_especialidad_ap,#prm_prueba_tamizaje,#prm_novedad,#prm_afiliacion,#prm_trameps').attr('disabled', true);
        }


        @if(old('sis_depen_id') != null)
        f_repsable({
                dataxxxx: {
                    valuexxx: "{{old('responsable')}}",
                    campoxxx: 'responsable',
                    padrexxx: '{{old("sis_depen_id")}}'
            }});
        @endif

        if (dependen !== '') {
            f_sis_depen(servicio);

            if (servicio !== '') {
                if (gradoxxx !== '') {
                    f_grado(gradoxxx, dependen, servicio);
                } else {
                    f_grado(0, dependen, servicio);
                }
                if (grupoxxx !== '') {
                    f_grupo(grupoxxx, dependen, servicio);
                } else {
                    f_grupo(0, dependen, servicio);
                }
            }

            if (tipoacti !== '') {
                if (actividade !== '') {
                    f_actividad(actividade, dependen, tipoacti);
                } else {
                    f_actividad(0, dependen, tipoacti);
                }
            }

            if (tipocurso !== '') {
                if (curso !== '') {
                    f_curso(curso,tipocurso);
                } else {
                    f_curso(0,tipocurso);
                }
            }
            fechapuede(dependen);

            let fechaold = '{{ old("prm_fecha_inicio") }}';
            $("#prm_fecha_inicio").val(fechaold)
            armarfechaFinal( $("#prm_fecha_inicio").val());
        }


        $('#sis_depen_id').change(() => {
            let dependen = $('#sis_depen_id').find(":selected").val();
            let tipoacti = inputTipoacti.find(':selected').val();

            f_sis_depen(0);
            fechapuede($('#sis_depen_id').val());
            f_repsable({dataxxxx:{padrexxx:$('#sis_depen_id').val(),selected:''}})
            $("#prm_fecha_inicio").val('');
            f_actividad(0, dependen, tipoacti);
        });

        $('#sis_servicio_id').change(() => {
            let dependen = $('#sis_depen_id').find(":selected").val();
            let servicio = $('#sis_servicio_id').find(":selected").val();
            f_grado(0, dependen, servicio);
            f_grupo(0, dependen, servicio);
        })

     
        let cambiarEstadoAsisten = function(asistenx,fechaxxx,valorxxx) {
            $.ajax({
                url: "{{ route('asissema.estadoasis')}}",
                type: 'POST',
                data: {
                    'asistenx': asistenx,
                    'fechaxxx': fechaxxx,
                    'valorxxx': valorxxx,
                    "_token": "{{ csrf_token() }}",
                },
                dataType: 'json',
                success: function(json) {

                },
                error: function(xhr, status) {
                    alert('Disculpe, existiÃ³ un problema');
                }
            });
        }

        // cuando cargue o cambien nombre del programa o actividada
        f_nom_actividad();
        $('#prm_actividad_id').change(() => {
            f_nom_actividad();
        });

        //CAMBIO DE TIPO DE ATENCION 
        $('#prm_tipo_curso').change(() => {
            let tipo = $('#prm_tipo_curso').val();
            f_curso(0,tipo);
            fillBook();
        });


          //CAMBIO DE TIPO DE ATENCION 
          $('#prm_tipo_aten').change(() => {
            let tipo = $('#prm_tipo_aten').val();
            f_curso(0,tipo);
            fillatencion();
        });

          //CAMBIO DE TIPO DE ATENCION 
          $('#prm_procedimiento').change(() => {
            let tipo = $('#prm_procedimiento').val();
            f_curso(0,tipo);
            procedimiento();
        });

           //CAMBIO DE TIPO DE ATENCION 
          $('#prm_promocion').change(() => {
            let tipo = $('#prm_promocion').val();
            f_curso(0,tipo);
            promocion();
        });






        $('.select2').select2({
            language: "es"
        });

        setTimeout(() => {
            $('.select2-container').css('width', '100%');
        }, 1000);

        $('.cambio-estado').change(function() {
            let id =   $(this).attr("data-id");
            let fecha = $(this).attr("data-fecha");
            let valor = $(this).is(':checked');
            cambiarEstadoAsisten(id,fecha,valor);
        });


        if (old_tipoacti != '') {
            if (old_actividade != '') {
                f_actividads(old_actividade);
            } else {
                f_actividads(0);
            }
            f_actividads({
                activida: old_actividade,
                tipoacti: old_tipoacti,
                selected: [0]
            });
        }

    });
</script>
