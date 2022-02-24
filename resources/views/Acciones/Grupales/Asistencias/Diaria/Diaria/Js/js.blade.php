<script>
    $(document).ready(() => {
        var fechaPuede;


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

        $('#sis_localidad_id').change(function() {
            f_upz({
                padrexxx: $(this).val(),
                selected: [0]
            });

        });






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
        }// hacemos el llamado de la funcion 
        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            fechapuede($('#sis_depen_id').val());
        });
        $('#prm_luga_acti_id').change(function() {
            f_dependen({
                lugarxxx: $(this).val(),
                dependen: $('#sis_depen_id').val(),
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

        function fechapuede(dependex) {
            $.ajax({
                url: "{{ route('diariaxx.fechapuede')}}",
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
            $("#fechdili").attr({"min" : fechaPuede['fechlimi']});
            $("#fechdili").attr({"max" : fechaPuede['actualxx']});
        }


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






        
        $("#fechdili").on("click",function(){
            if ($('#sis_depen_id').val() == "") {
                alert('seleccione primero una sede o dependencia')
            }
        })

        $("#fechdili").on("change",function(){
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

    });
</script>
