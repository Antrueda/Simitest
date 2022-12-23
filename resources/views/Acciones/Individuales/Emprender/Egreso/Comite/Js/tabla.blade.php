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

        $('.btncertifica').click(function(e){
               $("#searchmodal").modal('show');
     })

   








function deleteRecord(queryxxx,row_index) {
$.ajax({
        url : "{{route('vodonremites.quitar',$todoxxxx["parametr"])}}",
        type: 'get',
        data: {
              "id": queryxxx,
              },
        success: function ()
             {
             toastr.success('Diagnostico eliminado');
              var i = row_index.parentNode.parentNode.rowIndex;
              document.getElementById("datatable").deleteRow(i);
              {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
            }
     });  
}
</script>

