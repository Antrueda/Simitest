<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function() {
        $('.select2').select2({
            language: "es"
        });
        $('#sis_esta_id').change(function() {
            f_motivos({
                dataxxxx: {
                    estadoid: $(this).val(),
                },
                selected: '',
                routexxx: "{{ route('sis.cargo.moticarg')}}"
            })
        });

        @if(old('sis_esta_id') !== null)
        f_motivos({
            dataxxxx: {
                estadoid: $('#sis_esta_id').val(),
            },
            selected: "{{old('estusuario_id')}}",
            routexxx: "{{ route('sis.cargo.moticarg')}}"
        })
        @endif
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
