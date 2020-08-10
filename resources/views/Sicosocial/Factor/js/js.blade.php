<script>

var table = '';
var tableS = '';


$(document).ready(function() {

    table = $('#{{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}').DataTable({
            "serverSide": true,
            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "ajax": {
                url: "{{ url($todoxxxx['tablasxx'][0]['urlxxxxx'])  }}",
                data: {
                    @foreach($todoxxxx["tablasxx"][0]['dataxxxx'] as $dataxxxx)
                    "{{ $dataxxxx['campoxxx'] }}": "{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
            },
            "columns": [
                @foreach($todoxxxx["tablasxx"][0]['columnsx'] as $columnsx) {
                    data: '{{ $columnsx["data"] }}',
                    name: '{{ $columnsx["name"] }}'
                },
                @endforeach
            ],

            "language": {
                "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
            }
        });
        tableS = $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}').DataTable({
            "serverSide": true,
            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "ajax": {
                url: "{{ url($todoxxxx['tablasxx'][1]['urlxxxxx'])  }}",

                data: {
                    @foreach($todoxxxx["tablasxx"][1]['dataxxxx'] as $dataxxxx)
                    "{{$dataxxxx['campoxxx']}}": "{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }

            },
            "columns": [
                @foreach($todoxxxx["tablasxx"][1]['columnsx'] as $columnsx) {
                    data: '{{ $columnsx["data"] }}',
                    name: '{{ $columnsx["name"] }}'
                },
                @endforeach
            ],

            "language": {
                "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
            }
        });
});


</script>
