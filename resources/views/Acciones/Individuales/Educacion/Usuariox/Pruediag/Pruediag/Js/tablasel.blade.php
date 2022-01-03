<script>
    var table = '';
    $(document).ready(function() {
        var f_ajax = function(valuexxx) {
            $.ajax({
                url: "{{ route($todoxxxx['permisox'].'.crearxxx',$todoxxxx['parametr'])}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'valuexxx': valuexxx,
                },
                dataType: 'json',
                success: function(json) {
                    toastr.success(json.mensajex);
                    <?= $todoxxxx["tablasxx"][0]["tablaxxx"] ?>.ajax.reload();
                    <?= $todoxxxx["tablasxx"][1]["tablaxxx"] ?>.ajax.reload();
                },
                error: function(xhr, status) {
                    alert('Disculpe, existe un problema al asignar la asignatura');
                }
            });
        }



        $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}').on('click', 'tr', function() {
            let tr = this.closest('tr');
            let id = <?= $todoxxxx["tablasxx"][1]["tablaxxx"] ?>.row(tr).data();
            f_ajax(id.id);
        });

    });
</script>
