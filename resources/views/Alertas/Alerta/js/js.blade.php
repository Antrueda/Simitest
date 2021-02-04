<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
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
        @if(old('sis_departam_id') !== null)
        f_ajax({
            {
                old('sis_departam_id')
            }
        }, {
            {
                old('sis_municipio_id')
            }
        });
        @endif

        $('#sis_departam_id').change(function() {
            $('#sis_municipio_id').empty();
            if ($(this).val() != '') {
                f_ajax($(this).val(), '');
            }
        });


        $("#dtiegabe").datepicker({
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
                        $("#itiegabe").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });
        $("#dtiestan").datepicker({
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
                        $("#itiestan").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });


        $("#dtigafin").datepicker({
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
                        $("#itigafin").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });


    });

</script>
