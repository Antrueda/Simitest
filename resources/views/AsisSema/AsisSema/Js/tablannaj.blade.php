
<script>
$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
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

    ejecutar_evento('#{{ $tablasxx["tablaxxx"] }} tbody','{{ $tablasxx["tablaxxx"] }}');
  @endforeach

});


    var  ejecutar_evento = function(tbody,table){
        $(tbody).on("click","button.eliminar-asigna-asistencia",function(){
            let asistencia_matricula = $(this).attr("data-asis");
          
        })
    }
    // $("#eliminar-asigna-asistencia").on("click",function() {
    //         console.log('hola');
    //     });
</script>
