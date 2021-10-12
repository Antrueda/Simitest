<script>
    var tablexxx = [];
    $(document).ready(function() {
        var tablasxx = <?= json_encode($todoxxxx['tablasxx']) ?>;
        $.each(tablasxx, function(i, d) {
            var tablaxxx = d.tablaxxx
            tablexxx[i] = tablaxxx = $('#' + tablaxxx).DataTable({
                "serverSide": true,
                "lengthMenu": [
                    [5, 10, 20, 25, 50, -1],
                    [5, 10, 20, 25, 50, "Todos"]
                ],
                "ajax": {
                    url: d.urlxxxxx,
                },
                "language": {
                    "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
                },
                "columns": d.columnsx,
            });
        });


        var f_ajax = function(valuexxx, checkedx) {
            $.ajax({
                url: "{{ route($todoxxxx['permisox'].'.crearxxx',$todoxxxx['parametr'])}}",
                type: 'POST',
                data: {
                    'valuexxx': valuexxx,
                    'checkedx': checkedx,
                    _token: $("input[name='_token']").val(),
                },
                dataType: 'json',
                success: function(json) {
                    toastr.success('Respuesta asignda con éxito');
                    tablexxx[0].ajax.reload();
                    tablexxx[1].ajax.reload();
                },
                error: function(xhr, status) {
                    toastr.error('Disculpe, existió un problema al asignar la respuesta');
                }
            });
        }

        $('#' + tablasxx[1].tablaxxx + ' tbody').on('click', 'tr', function() {
            var id = tablexxx[1].row(this).data();
            if (!$(this).hasClass('btn-primary') && id != undefined) {
                $(this).addClass('btn-primary');
                f_ajax(id.id, 0);
            }
        });
    });
</script>
