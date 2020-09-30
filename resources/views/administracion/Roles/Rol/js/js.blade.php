<script>
    $(function() {

        $('.select2').select2({
            language: "es"
        });

        $('#sis_esta_id').change(function() {
            f_motivos({
                dataxxxx: {
                    estadoid: $(this).val(),
                    formular: 2351,
                },
                selected: '',
                routexxx: "{{ route('ajaxx.formular')}}"
            })
        });

        @if(old('sis_esta_id') !== null)
        f_motivos({
            dataxxxx: {
                estadoid: $('#sis_esta_id').val(),
                formular: 2351,
            },
            selected: "{{old('estusuario_id')}}",
            routexxx: "{{ route('ajaxx.formular')}}"
        })
        @endif



    });
</script>
