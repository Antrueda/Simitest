<script>

$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "retrieve": true,
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50], [5, 10, 20, 25, 50]],
        // "columnDefs": [
        //     { "searchable": true, "targets": [ 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17] }
        // ],
        "ajax": {
            url:"{{ url($tablasxx['urlxxxxx'])  }}",
            @if(isset($tablasxx['dataxxxx']))
                data:{
                    @foreach($tablasxx['dataxxxx'] as $dataxxxx)
                    {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
            @endif
        },
        "columns":[
            @foreach($tablasxx['columnsx'] as $columnsx)
                {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
            @endforeach
        ],
        "language": {
            "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
        }
    });
  @endforeach

    var f_ajax = function(valuexxx) {
        $.ajax({
            url: "{{ route($todoxxxx['permisox'].'.asignarx',$todoxxxx['asistenc'])}}",
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                'valuexxx': valuexxx,
            },
            dataType: 'json',
            success: function(json) {
               
                if (json.mostrarx) {
                    toastr.success(json.mensajex);
                } else {
                    toastr.error(json.mensajex);
                }
                {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.ajax.reload();
            },
            error: function(xhr, status) {
                alert('Disculpe, existe un problema al asignar el Nnaj');
            }
        });
    }
    @if (!$todoxxxx['readchcx'])
        $('#{{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}').on( 'click', '.elimagre', function () { 
            let tr = this.closest('tr');
            let id= {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.row( tr ).data();
            if ( !$(this).hasClass('btn-danger') &&  id!=undefined) {
                $(this).addClass('btn-danger');
                f_ajax(id.id);
            }
        } );
    @endif
} );
</script>
