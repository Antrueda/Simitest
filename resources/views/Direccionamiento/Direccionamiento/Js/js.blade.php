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

        $('.select2').select2({
            language: "es"
        });

        var datadepa = function(campoxxx, valuexxx, selected) {
            var localida = false;
            var routexxx = "{{ route('ajaxx.departamento') }}"
            var municipi = 'sis_municipioexp_id';
            var departam = 'sis_departamexp_id';
            if (campoxxx == 'sis_pai_id') {
                municipi = 'sis_municipio_id';
                departam = 'sis_departam_id';
            } else if (campoxxx == 'sis_localidad_id') {
                departam = 'sis_upz_id';
                municipi = 'sis_upzbarri_id';
                routexxx = "{{ route('ajaxx.upz') }}";
                localida = true;
            }

            $("#" + departam + ",#" + municipi).empty();
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'sispaisx': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: departam
            }
            if (valuexxx != '') {
                if (valuexxx != 2 && !localida) {
                    $("#" + departam + ",#" + municipi).empty();
                    $("#" + departam + ",#" + municipi).append('<option value="1">N/A</>')
                    return false;
                }
                f_ajax(dataxxxx, selected);
            }


        }
        var datamuni = function(campoxxx, valuexxx, selected) {
            var routexxx = "{{ route('fidatbas.municipio') }}"
            var municipi = 'sis_municipioexp_id';
            if (campoxxx == 'sis_departam_id') {
                municipi = 'sis_municipio_id';
            } else if (campoxxx == 'sis_upz_id') {
                municipi = 'sis_upzbarri_id';
                routexxx = "{{ route('ajaxx.barrio') }}"
            } else if (campoxxx == 'prm_etnia_id') {
                municipi = 'prm_poblacion_etnia_id';
                routexxx = "{{ route('ajaxx.poblacionetnia') }}"
            }
            $("#" + municipi).empty();
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'departam': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: municipi
            }
            if (valuexxx != '') {
                f_ajax(dataxxxx, selected);
            }
        }

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
