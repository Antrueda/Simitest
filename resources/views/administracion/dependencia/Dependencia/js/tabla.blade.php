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
        var f_ajax = function(valuexxx, checkedx) {
            $.ajax({
                url: "{{ route($todoxxxx['permisox'].'.migraupi')}}",
                type: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    'valuexxx': valuexxx,
                },
                dataType: 'json',
                success: function(json) {
                    toastr.success('Upi/dependencia migrada con éxito');
                    <?= $todoxxxx["tablasxx"][0]["tablaxxx"] ?>.ajax.reload();
                    <?= $todoxxxx["tablasxx"][1]["tablaxxx"] ?>.ajax.reload();
                },
                error: function(xhr, status) {
                    alert('Disculpe, hubo un problema al intetar migrar la upi/depndencia');
                }
            });
        }
        $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }} tbody').on('click', 'tr', function() {
            var id = <?= $todoxxxx["tablasxx"][1]["tablaxxx"] ?>.row(this).data();
            if (!$(this).hasClass('btn-primary') && id != undefined) {
                $(this).addClass('btn-primary');
                f_ajax(id.id,0);
            }
            console.log(id);
        });

    });
</script>
