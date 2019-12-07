<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    @if($todoxxxx['accionxx'] == 'Editar')
    $(document).ready(function() {
        // SCRIPTS PARA LOS ROLES
        var table = $('#example').DataTable({
            "serverSide": true,
            "ajax": {
                "url": "{{ route('usuario.roles') }}",
                'type': 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}'
                },
            },
            "columns": [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'btn'
                },
            ]
        });
        $('#example').on('click', '.eliminar', function() {
            $.ajax({
                url: "{{ route('usuario.eliminarol')}}",
                type: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'rolexxxx': $(this).prop('id'),
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}'
                },
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(i, data) {
                        var listrole = '<li><label><input type="checkbox" class="rolesxxx" name="rolesxxx[]" value="' + data.id + '">' + data.name + '</label></li>';
                        $('#listrole').append(listrole)
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existio un problema');
                }
            });
            setTimeout(function() {
                table.ajax.reload();
            }, 300);
        });

        $('#listrole').on('click', '.rolesxxx', function() {

            $('#listrole').empty()
            $.ajax({
                url: "{{ route('usuario.asignar')}}",
                type: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'rolexxxx': $(this).val(),
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}'
                },
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(i, data) {
                        var listrole = '<li><label><input type="checkbox" class="rolesxxx" name="rolesxxx[]" value="' + data.id + '">' + data.name + '</label></li>';
                        $('#listrole').append(listrole)
                    });

                },
                error: function(xhr, status) {
                    alert('Disculpe, existio un problema');
                }
            });

            setTimeout(function() {
                table.ajax.reload();
            }, 300);

        });
        // FIN SCRIPTS PARA LOS ROLES

        // SCRIPTS PARA LAS DEPENDENCIAS
        var dependen = $('#tdepende').DataTable({
            "serverSide": true,
            "ajax": {
                "url": "{{ route('usuario.dasignadas') }}",
                'type': 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}'
                },
            },
            "columns": [{
                    data: 'id'
                },
                {
                    data: 'nombre'
                },
                {
                    data: 'btn'
                },
            ]
        });

        $('#listdepe').on('click', '.dependen', function() {

            $('#listdepe').empty()
            $.ajax({
                url: "{{ route('usuario.dasignar')}}",
                type: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'dependen': $(this).val(),
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}'
                },
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(i, data) {
                        var listrole = '<li><label><input type="checkbox" class="dependen" name="dependen[]" value="' + data.id + '">' + data.nombre + '</label></li>';
                        $('#listdepe').append(listrole)
                    });

                },
                error: function(xhr, status) {
                    alert('Disculpe, existio un problema');
                }
            });

            setTimeout(function() {
                dependen.ajax.reload();
            }, 300);

        });
        $('#tdepende').on('click', '.eliminar', function() {
            $.ajax({
                url: "{{ route('usuario.eliminadependencia')}}",
                type: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'dependen': $(this).prop('id'),
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}'
                },
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(i, data) {
                        var listrole = '<li><label><input type="checkbox" class="rolesxxx" name="rolesxxx[]" value="' + data.id + '">' + data.name + '</label></li>';
                        $('#listrole').append(listrole)
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existio un problema');
                }
            });
            setTimeout(function() {
                dependen.ajax.reload();
            }, 300);
        });
        // FIN SCRIPTS PARA LAS DEPENDENCIAS
    });

    @endif


    $(function() {
        var f_ajax = function(departam, pselecte) {
            $.ajax({
                url: "{{ route('usuario.municipio')}}",
                type: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'departam': departam
                },
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(i, data) {
                        var selected = '';
                        if (data.valuexxx == pselecte) {
                            selected = 'selected';
                        }
                        $('#sis_municipio_id').append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                    });

                },
                error: function(xhr, status) {
                    alert('Disculpe, existiÃ³ un problema');
                }
            });
        }
        @if(old('sis_departamento_id') !== null)
        f_ajax({{ old('sis_departamento_id') }}, {{ old('sis_municipio_id') }});
        @endif

        $('#sis_departamento_id').change(function() {
            $('#sis_municipio_id').empty();
            if ($(this).val() != '') {
                f_ajax($(this).val(), '');
            }
        });

        $("#d_carga").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: '-28y +0m +0d',
            maxDate: '+0y +0m +0d',
            yearRange: "-28:+0",
            onSelect: function(dateText) {
                $.ajax({
                    url: "{{ route('usuario.tiempocarga') }}",
                    data: {
                        fechaxxx: dateText
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $("#i_tiempo").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });

    })
</script>
