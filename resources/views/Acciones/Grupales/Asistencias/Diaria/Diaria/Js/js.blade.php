<script>
    $(document).ready(() => {








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
                $("#prm_luga_acti_id,#prm_luga_acti_id  option[value=''").attr("selected", true);
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
        $('#prm_luga_acti_id').change(function() {
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

        var f_paginaGrupos = function(dataxxxx) {
            $.ajax({
                url: "{{ route('diariaxx.pagrupox') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_armarCombo(json);
                    $(json.readonid).prop('readonly', json.readonly);
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar los municipios');
                },
            });
        }

        $('#prm_actividad_id').change(function() {
            f_paginaGrupos({progacti:$(this).val()});

        });


    });
</script>
