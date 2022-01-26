<script>
    var tablexxx = [];
    $(document).ready(function() {
        var tablasxx = <?= json_encode($todoxxxx['tablasxx']) ?>;
        $.each(tablasxx, function(i, d) {
            var tablaxxx = d.tablaxxx
            tablexxx[i] = tablaxxx = $('#' + tablaxxx).DataTable({
                "serverSide": true,
                "processing": true,
                "lengthMenu": [
                    [10, 25, 50,100,200],
                    [10, 25, 50, 100,200]
                ],
                "ajax": {
                    url: d.urlxxxxx,
                },
                "language": {
                    "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
                },
                "columns": d.columnsx,
                // initComplete: function() {
                //     this.api().columns().every(function() {
                //         var column = this;
                //         var select = $('<select><option value=""></option></select>')
                //             .appendTo($(column.footer()).empty())
                //             .on('change', function() {
                //                 var val = $.fn.dataTable.util.escapeRegex(
                //                     $(this).val()
                //                 );

                //                 column
                //                     .search(val ? '^' + val + '$' : '', true, false)
                //                     .draw();
                //             });

                //         column.data().unique().sort().each(function(d, j) {
                //             select.append('<option value="' + d + '">' + d + '</option>')
                //         });
                //     });
                // }
            });
        });


    });
</script>