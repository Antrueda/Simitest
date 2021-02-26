<script>
    $(document).ready(function() {
        $('#emociones,#situaciones,#personas').select2({
            language: "es",
        });

        $('#emociones,#situaciones,#personas').change(function() {
            f_comboSimple({
                dataxxxx: {
                    padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                    selectxx: $(this).prop('id'),
                },
                urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
                msnxxxxx:"Disculpe, existió un problema al armar el combo"
            });
        });
    });

    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
