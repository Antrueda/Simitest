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
    });
</script>