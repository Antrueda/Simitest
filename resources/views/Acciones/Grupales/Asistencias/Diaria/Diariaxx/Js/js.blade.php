<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(document).ready(() => {
        let old_prm_actividad = '{{old("prm_lugactiv_id")}}';
        let old_sis_depen_id = '{{old("sis_depen_id")}}';
        let old_sis_servicio_id = '{{old("sis_servicio_id")}}';
        let old_prm_actividad_id = '{{old("prm_actividad_id")}}';

        let f_armarCombo = function(json) {
            $(json.emptyxxx).empty();
            $.each(json.combosxx, function(i, d) {
                $.each(d.comboxxx, function(j, dd) {
                    $('#' + d.selectid).append('<option  value="' + dd.valuexxx + '">' + dd
                        .optionxx + '</option>');
                })
            });
        }
        var f_dependen = function(dataxxxx) {

            if (dataxxxx.dependen == '') {
                alert('Por favor seleccione primero una dependencia');
                $('#sis_depen_id').focus();
                $("#prm_lugactiv_id  option[value=''").attr("selected", true);
                return false;
            }

            $.ajax({
                url: "{{ route('diariaxx.dependen') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_armarCombo(json);
                },
                error: function(xhr, status) {
                    alert(
                        'Disculpe, existió un problema las opciones de acuerdo al tipo de lugar y la UP/dependencia');
                },
            });
        }

        var f_upz = function(dataxxxx) {
            $.ajax({
                url: "{{ route('diariaxx.upzxxxxx') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_armarCombo(json);
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar las upzs');
                },
            });
        }

        var f_barrio = function(dataxxxx) {
            $.ajax({
                url: "{{ route('diariaxx.barrioxx') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_armarCombo(json);
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar los barrios');
                },
            });
        }
        var f_municipio = function(dataxxxx) {
            $.ajax({
                url: "{{ route('diariaxx.municipi') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_armarCombo(json);
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar los municipios');
                },
            });
        }
        $('#prm_lugactiv_id').change(function() {
            f_dependen({
                lugarxxx: $(this).val(),
                dependen: $('#sis_depen_id').val(),
                selected: [0]
            });

        });

        $('#sis_localidad_id').change(function() {
            f_upz({
                padrexxx: $(this).val(),
                selected: [0]
            });

        });

        $('#sis_upz_id').change(function() {
            f_barrio({
                padrexxx: $(this).val(),
                selected: [0]
            });

        });

        $('#sis_departam_id').change(function() {
            f_municipio({
                padrexxx: $(this).val(),
                selected: [0]
            });
        });

        var f_paginaGrupos = function(dataxxxx, old_pag) {
            $.ajax({
                url: "{{ route('diariaxx.pagrupox') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_armarCombo(json);
                    let elemento = $(json.readonid);
                    elemento.prop('readonly', json.readonly);

                    if (old_pag != "") {
                        elemento.val(old_pag);
                    } else {
                        elemento.val('')
                    }
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar los municipios');
                },
            });
        }

        /// funcion de  ACTIVIDADES O CONVENIOS 
        $('#prm_actividad_id').change(function() {
            f_paginaGrupos({
                progacti: $(this).val()
            }, "");
        });

        ////////


        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            fechapuede($('#sis_depen_id').val());
        });

        function fechapuede(dependex) {
            $.ajax({
                url: "{{ route('diariaxx.fechpued')}}",
                type: 'GET',
                data: {
                    'dependex': dependex,
                    "_token": "{{ csrf_token() }}",
                },
                dataType: 'json',
                success: function(json) {
                    updateResult(json)
                },
                error: function(xhr, status) {
                    alert('Disculpe, existiÃ³ un problema');
                }
            });
        }

        function updateResult(data) {
            fechaPuede = data;
            $("#fechdili").val("");
            $("#fechdili").attr({
                "min": fechaPuede['fechlimi']
            });
            $("#fechdili").attr({
                "max": fechaPuede['actualxx']
            });
        }

        $('.select2').select2({
            language: "es"
        });


        setTimeout(() => {
            $('.select2-container').css('width', '100%');
        }, 1000);

        let f_sis_depen = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("diariaxx.servicio") }}',
                campoxxx: 'sis_servicio_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }
        ///se crea para que los select no queden vacios 

        if (old_sis_depen_id != '') {
            if (old_sis_servicio_id != '') {
                f_sis_depen(old_sis_servicio_id);
            } else {
                f_sis_depen(0);
            }
            f_dependen({
                lugarxxx: old_prm_actividad,
                dependen: old_sis_depen_id,
                selected: [0]
            });
        }

        if (old_prm_actividad_id != '') {
            numepagi = '{{old("numepagi")}}';
            f_paginaGrupos({
                progacti: old_prm_actividad_id
            }, numepagi);
        }

        $("#fechdili").on("click", function() {
            if ($('#sis_depen_id').val() == "") {
                alert('seleccione primero una sede o dependencia')
            }
        })

        $("#fechdili").on("change", function() {
            if ($('#sis_depen_id').val() == "") {
                $("#fechdili").val("");
                alert('seleccione primero una sede o dependencia');
                return;
            }
            let fechasele = $('#fechdili').val();
            if (fechasele < fechaPuede['fechlimi'] || fechasele > fechaPuede['actualxx']) {
                alert('La fecha es mayor o menor a la permitida');
                $("#fechdili").val("");
            }
        })




        // tipo de actividad
        let inputTipoacti = $('#tipoacti_id');

        inputTipoacti.change(() => {
            let tipoacti = inputTipoacti.find(':selected').val();
            if (tipoacti != "") {
                $('#asd_actividads_id').attr('disabled', false);
                f_actividad(0, tipoacti);
            } else {
                $('#asd_actividads_id').attr('disabled', true);
            }
        })
    });

    function validation(event) {
        if (event.charCode >= 48 && event.charCode <= 57) {
            return true;
        } else {
            return false;
        }
    }
</script>