<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
    });

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

    @foreach ($todoxxxx['areaitems'] as $key => $area)
        init_contadorTa("descripcion{{$area->id}}", "contador_descripcion{{$area->id}}", 4000);
    @endforeach
    init_contadorTa("concepto", "contador_concepto", 4000);

    setInterval(() => {
        $.ajax({
                url: "/actualizarcierresesion",
                type: 'POST',
                data: {
                "_token": "{{ csrf_token() }}",
                },
                dataType: 'json',
                success: function(json) { 
                },
                error: function(xhr, status) {
                }
            });
    }, 600000)
</script>
