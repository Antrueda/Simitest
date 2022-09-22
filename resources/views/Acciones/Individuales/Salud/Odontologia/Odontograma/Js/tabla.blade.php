<script>
   var table ='';
$(document).ready(function() {
    @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[ 50, -1], [ 50, "Todos"]],
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
  $(".reload" ).click(function() {
            table.ajax.reload(null, false);
        }); 


        var agregar=function(dataxxxx){
            console.log(dataxxxx);
                    $.ajax({
                        url : "{{route('vodontograma.agregar',$todoxxxx['padrexxx'])}}",
                        data : dataxxxx,
                        type : 'GET',
                        dataType :'json',
                        success: function(json) {
                            toastr.success('Asistente agregado con éxito');
                            {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();

                            },
                        error: function(xhr, status) {
                            alert('Disculpe, al agregar el asitente');
                        }
                    });
                }

        $('#agregar').on('click',function() {
            console.log($('#diente').val());
            console.log($('#super_id').val());
            console.log($('#diag_id').val());
            agregar({
                diente: $('#diente').val(),
                super_id: $('#super_id').val(),
                diag_id: $('#diag_id').val(),
            });
        });



} );
</script>

