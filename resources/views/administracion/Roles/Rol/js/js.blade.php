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
                routexxx: "{{ route('dependencia.motivosx')}}"
            })
        });

        @if(old('sis_esta_id') !== null)
        f_motivos({
            dataxxxx: {
                estadoid: $('#sis_esta_id').val(),
            },
            selected: "{{old('estusuario_id')}}",
            routexxx: "{{ route('dependencia.motivosx')}}"
        })
        @endif



    });
</script>