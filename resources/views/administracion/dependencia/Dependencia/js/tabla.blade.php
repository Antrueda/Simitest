<script>
    $(function() {
        <?php
        foreach ($todoxxxx['tablasxx'] as $tablasxx) {
        ?>
            <?= $tablasxx["tablaxxx"]  ?> = $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
                processing: true,
                serverSide: true,
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
    });
</script>
