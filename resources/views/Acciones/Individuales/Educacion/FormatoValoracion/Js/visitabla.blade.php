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


  var f_datacomb=function(dataxxxx){
        $.each(dataxxxx.dataxxxx,function(i,data){
            $('#'+dataxxxx.campoxxx).append('<option '+data.selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>');
        });
    }
    var f_visitado=function(dataxxxx){
        $.ajax({
            url: "{{ route($todoxxxx['routxxxx'].'.visitado',$todoxxxx['parametr'][0]) }}",
            data: dataxxxx,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                f_datacomb(json);
            },
            error: function(xhr, status) {
                alert('Disculpe, existió un problema al seleccionar nnaj visitado');
            },
        });
    }
    $('#{{ $todoxxxx["tablasxx"][0]["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
        $('#sis_nnaj_id').empty()
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            $('#sis_nnaj_id').append('<option value="">Seleccione</option>')
        }
        else {
            {{$tablasxx["tablaxxx"]}}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');

            var d = {{$tablasxx["tablaxxx"]}}.row(this).data().id;
            f_visitado({padrexxx:d});
        }
    } );
} );
</script>
