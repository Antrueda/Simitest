<script>
   var table ='';
$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50], [5, 10, 20, 25, 50]],
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

  var f_ajax = function(valuexxx, checkedx) {

      var rutaxxxx="{{ route($todoxxxx['permisox'].'.crear',$todoxxxx['parametr'])}}";
      var metodoxx='POST';
      if(checkedx!=1){
        rutaxxxx="{{ route($todoxxxx['permisox'].'.borrar',$todoxxxx['parametr'])}}";
        metodoxx='PUT';
      }
            $.ajax({
                url: rutaxxxx,
                type: metodoxx,
                data: {
                    'parametro_id': valuexxx,
                    _token:'{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(json) {
                    toastr.success('Respusta asignda con éxito');
                    {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                    {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.ajax.reload();
                },
                error: function(xhr, status) {
                    toastr.error('Disculpe ha existido un problema al asignar la respuesta al combo');
                }
            });
        }

$('#datatable').on('click','.activain',function(){
    f_ajax($(this).prop('id'),2);
})

    $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
        var tablaxxx={{$todoxxxx["tablasxx"][1]["tablaxxx"]}}
        var id= tablaxxx.row( this ).data();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }else{
            tablaxxx.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            f_ajax(id.id,1);
        }
    } );
} );
</script>
