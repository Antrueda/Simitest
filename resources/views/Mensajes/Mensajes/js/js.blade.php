<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    $(function() {
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4',
        });
        // Máscara documento
        $('#sis_esta_id').change(function() {
            f_motivos({
                dataxxxx: {
                    estadoid: $(this).val(),
                },
                selected: '',
                routexxx: "{{ route('mensajes.motivosx')}}"
            })
        });

        @if(old('sis_esta_id') != null)
        f_motivos({
            dataxxxx: {
                estadoid: $('#sis_esta_id').val(),
            },
            selected: "{{old('estusuario_id')}}",
            routexxx: "{{ route('mensajes.motivosx')}}"
        })
        @endif
});

init_contadorTa("descripcion", "contadordescripcion", 4000);

function init_contadorTa(idtextarea, idcontador, max) {
    $("#" + idtextarea).keyup(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
    $("#" + idtextarea).change(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
}

function updateContadorTa(idtextarea, idcontador, max) {
    var contador = $("#" + idcontador);
    var ta = $("#" + idtextarea);
    contador.html("0/" + max);
    contador.html(ta.val().length + "/" + max);
    if (parseInt(ta.val().length) > max) {
        ta.val(ta.val().substring(0, max - 1));
        contador.html(max + "/" + max);
    }
}
</script>
