<script>
    $(function() {
        <?php
        foreach ($todoxxxx['tablasxx'] as $tablasxx) {
        ?>
            <?= $tablasxx["tablaxxx"]  ?> = $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
                "serverSide": true,
                "lengthMenu": [
                    [5, 10, 20, 25, 50],
                    [5, 10, 20, 25, 50]
                ],
                "ajax": {
                    url: "{{ url($tablasxx['urlxxxxx'])  }}",
                },
                "columns": [
                    <?php
                    foreach ($tablasxx['columnsx'] as $columnsx) {
                        echo "{data:'" . $columnsx['data'] . "',name:'" . $columnsx["name"] . "'},";
                    } ?>
                ],
                "language": {
                    "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
                },
            });
        <?php } ?>

        $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }} tbody').on('click', 'tr', function() {
            var id = <?= $todoxxxx["tablasxx"][1]["tablaxxx"] ?>.row(this).data();
            if (!$(this).hasClass('btn-primary') && id != undefined) {
                $(this).addClass('btn-primary');
                // f_ajax(id.id,0);
            }
            console.log( id );
        });

    });
</script>
