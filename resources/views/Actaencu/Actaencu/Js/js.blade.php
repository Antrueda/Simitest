<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

    function validacionFilaContacto(index) {
        let errors = 0;
        if($.trim($('#c_nombres_' + index).val()) == '') {
            errors++;
        }
        if($('#c_entidad_' + index).val() == 0 || $('#c_entidad_' + index).val() === undefined) {
            errors++;
        }
        if($.trim($('#c_cargo_' + index).val()) == '') {
            errors++;
        }
        if($('#c_telefono_' + index).val() == 0 || $('#c_telefono_' + index).val() == '') {
            errors++;
        }
        if($.trim($('#c_email_' + index).val()) == '') {
            errors++;
        }
        if(errors) {
            return false;
        } else {
            return true;
        }
    }

    function saveContacto() {

        let data = [];

        for (let index = 0; index < 10; index++) {
            if(validacionFilaContacto(index)) {
                data.push({
                    index:      index,
                    nombres:    $('#c_nombres_' + index).val(),
                    entidad:    $('#c_entidad_' + index).val(),
                    cargo:      $('#c_cargo_' + index).val(),
                    telefono:   $('#c_telefono_' + index).val(),
                    email:      $('#c_email_' + index).val()
                });
            }
        }


        $.ajax({
            method: 'POST',
            url: '{{ route('actaencuSaveContactos') }}',
            data: {
                data,
                acta_encuentro_id: $('#acta_encuentro_id').val()
            },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success(response) {
                console.log(response)
            }
        });
    }

    function saveRecursos() {
        $.ajax({
            method: 'POST',
            url: '{{ route('actaencuSaveRecursos') }}',
            data: {
                data: $('#recursos').val(),
                acta_encuentro_id: $('#acta_encuentro_id').val()
            },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success(response) {
                console.log(response)
            }
        });
    }

    $(document).ready(() => {
        $('#sis_localidad_id').change(() => {
            $('#sis_upz_id').empty();
            $('#sis_barrio_id').empty();
            let data = {
                sis_localidad_id: $('#sis_localidad_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route('actaencuGetUPZs') }}',
                data: data,
                success(response) {
                    console.log(response);
                    $('#sis_upz_id').attr('disabled', false);
                    $('#sis_upz_id').append(new Option('Seleccione una', ''));
                    $.each(response, (index, value) => {
                        $('#sis_upz_id').append(new Option(value, index));
                    });
                }
            });
        });

        $('#sis_upz_id').change(() => {
            $('#sis_barrio_id').empty();
            let data = {
                sis_localidad_id: $('#sis_localidad_id').val(),
                sis_upz_id: $('#sis_upz_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route('actaencuGetBarrio') }}',
                data: data,
                success(response) {
                    console.log(response);
                    $('#sis_barrio_id').attr('disabled', false);
                    $('#sis_barrio_id').append(new Option('Seleccione una', ''));
                    $.each(response, (index, value) => {
                        $('#sis_barrio_id').append(new Option(value, index));
                    });
                }
            });
        });

        $('#prm_accion_id').change(() => {
            $('#prm_actividad_id').empty();
            let data = {
                prm_accion_id: $('#prm_accion_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route('actaencuGetActividades') }}',
                data: data,
                success(response) {
                    console.log(response)
                    $('#prm_actividad_id').attr('disabled', false);
                    $('#prm_actividad_id').append(new Option('Seleccione una', ''));
                    $.each(response, (index, value) => {
                        $('#prm_actividad_id').append(new Option(value, index));
                    });
                }
            });
        });

        $('#sis_depen_id').change(() => {
            $('#sis_servicio_id').empty();
            let data = {
                sis_depen_id: $('#sis_depen_id').val()
            }
            $.ajax({
                method: 'GET',
                url: '{{ route('actaencuGetServicios') }}',
                data: data,
                success(response) {
                    console.log(response);
                    $('#sis_servicio_id').attr('disabled', false);
                    $('#sis_servicio_id').append(new Option('Seleccione una', ''));
                    $.each(response, (index, value) => {
                        $('#sis_servicio_id').append(new Option(value, index));
                    });
                }
            });
        });

        $('.select2').select2({
            language: "es"
        });
    });
</script>
