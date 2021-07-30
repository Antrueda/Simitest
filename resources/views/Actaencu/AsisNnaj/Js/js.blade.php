<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    $(document).ready({
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4',
        });

        @if(old('d_nacimiento') !== null)
            f_nacimiento('{{ old("d_nacimiento") }}', '{{ old("prm_orientacion_sexual_id") }}', '{{ old("prm_identidad_genero_id") }}', '{{ old("prm_estado_civil_id") }}', '{{ old("prm_sexo_id") }}');
        @endif

        $("#d_nacimiento").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: "<?= isset($todoxxxx['mindatex']) ? $todoxxxx['mindatex'] : '+0y +0m +0d' ?>",
            maxDate: "<?= isset($todoxxxx['maxdatex']) ? $todoxxxx['maxdatex'] : '+0y +0m +0d' ?>",
            yearRange: "-29:-5",

            onSelect: function(dateText) {
                f_nacimiento($(this).val(), '', '', '', '');
            }
        });
    });

    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
