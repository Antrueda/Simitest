<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    const year = new Date().getFullYear();
    var maximoxx = 500;
    $(document).ready(() => {
        countCharts('observaciones');
        let localida = '{{old("sis_localidad_id")}}';
        let upzxxxxx = '{{old("sis_upz_id")}}';
        let barrioxx = '{{old("sis_upzbarri_id")}}';
        let docufisi = '{{old("prm_doc_fisico_id")}}';
        let docuayu = '{{old("prm_ayuda_id")}}';
        let tipopobl = '{{old("prm_tipoblaci_id")}}';
        let perfilxx = '{{old("prm_pefil_id")}}';

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
            $('#sis_upzbarri_id').empty();
        }

        var f_sis_barrio = function(selected, upzxxxxx) {
            let dataxxxx = {
                dataxxxx: {
                    sis_localidad_id: $('#sis_localidad_id').val(),
                    sis_upz_id: upzxxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencuGetBarrio") }}',
                campoxxx: 'sis_upzbarri_id',
                mensajex: 'Exite un error al cargar los barrios'
            }
            f_comboGeneral(dataxxxx);
        }

        var f_docu_ayuda = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    docufisi: $('#prm_doc_fisico_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route($todoxxxx["permisox"].".docuayud") }}', // ! cambiar
                campoxxx: 'prm_ayuda_id',
                mensajex: 'Exite un error al cargar las opciones del motivo'
            }
            f_comboGeneral(dataxxxx);
        }

        var f_perfil = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    tipopobl: $('#prm_tipoblaci_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route($todoxxxx["permisox"].".perfil") }}', // ! cambiar
                campoxxx: 'prm_pefil_id',
                mensajex: 'Exite un error al cargar las opciones del perfil'
            }
            f_comboGeneral(dataxxxx);
        }

        if (localida !== '') {
            f_sis_upz(upzxxxxx);
        }

        if (upzxxxxx !== '') {
            f_sis_barrio(barrioxx, upzxxxxx);
        }

        if (docufisi !== '') {
            f_docu_ayuda(docuayud);
        }

        if (tipopobl != '') {
            f_perfil(perfilxx);
        }

        $('#sis_upz_id').change(() => {
            let upzxxxxx = $('#sis_upz_id').val();
            f_sis_barrio(0, upzxxxxx);
        });

        $('#sis_localidad_id').change(() => {
            f_sis_upz(0);
        });

        $('#prm_doc_fisico_id').change(() => {
            f_docu_ayuda(0);
        });

        $('#prm_tipoblaci_id').change(() => {
            f_perfil(0);
        });

        var f_ajax = function(dataxxxx, pselecte) {
            $.ajax({
                url: dataxxxx.url,
                data: dataxxxx.data,
                type: dataxxxx.type,
                dataType: dataxxxx.datatype,
                success: function(json) {
                    if (json[0].valuexxx == 1) {
                        $("#" + dataxxxx.campoxxx).empty();
                    }
                    if (dataxxxx.data.fechaxxx) {
                        var edadxxxx = eval(json[0].edadxxxx)
                        $('#aniosxxx').val(edadxxxx)
                    }

                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        var f_nacimiento = function(valuexxx, orientac, generoxx, estadoxx, sexoxxxx) {
            dataxxxx = {
                url: "{{ route('ajaxx.edad') }}",
                data: {
                    _token: $("input[name='_token']").val(),
                    'fechaxxx': valuexxx,
                    opcionxx: 1,
                },
                type: 'POST',
                datatype: 'json',
                orientac: orientac,
                generoxx: generoxx,
                estadoxx: estadoxx,
                sexoxxxx: sexoxxxx
            }

            f_ajax(dataxxxx, '');
        }

        $('#d_nacimiento').mask('0000-00-00');
        $("#d_nacimiento").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            yearRange: `${year - 100}:${year}`;
            onSelect: function(dateText) {
                f_nacimiento($(this).val(), '', '', '', '');
            }
        });

        $("#prm_tipodocu_id").change(function() {
            var valuexxx = $(this).val()
            if ($(this).val() != '') {
                $.ajax({
                    url: "{{ route('ajaxx.consecutivoceduala') }}",
                    data: {
                        _token: $("input[name='_token']").val(),
                        'padrexxx': $(this).val(),
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(json) {
                        if (valuexxx != 145) {
                            $("#prm_ayuda_id").empty();
                            $("#s_documento").val('');
                            $("#s_documento").prop('readonly', false)
                            $("#prm_doc_fisico_id option[value='']").attr("selected", true);
                        } else {
                            $("#s_documento").val(json.consecut);
                            $("#s_documento").prop('readonly', true)
                        }
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    }
                });
            } else {
                $("#prm_ayuda_id").empty();
                $("#s_documento").val('');
                $("#s_documento").prop('readonly', false)
                $("#prm_doc_fisico_id option[value='']").attr("selected", true);
            }
        });
        $('.select2').select2({
            language: "es"
        });
    });

    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
