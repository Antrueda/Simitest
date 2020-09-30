<script>
    $(document).ready(function() {
        $('#emociones,#situaciones').select2({
            language: "es",
        });

        $("#situaciones").change(function() {
            f_comboSimple({
                dataxxxx: {
                    padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                    valuexxx: 235,
                    selectxx: $(this).prop('id'),
                    temaxxxx: 131,
                },
                urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
                msnxxxxx:"Disculpe, existió un problema al armar el combo para la pregunta 1.14"
            });
        })
    });
</script>
