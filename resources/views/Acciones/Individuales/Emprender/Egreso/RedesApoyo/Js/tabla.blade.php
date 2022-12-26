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

     
     var agregar=function(dataxxxx){
                        
                        $.ajax({
                            url : "{{route('egresoredes.agregar')}}",
                            data : dataxxxx,
                            type : 'GET',
                            dataType :'json',
                            success: function(json) {
                                console.log(json);
                                toastr.success('Red de apoyo agregada con éxito');
                                {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                                },
                            error: function(xhr, status) {
                        
                                alert('Disculpe, error al agregar el asitente');
                            }
                        });
                    }

            $('#agregar').on('click',function() {
                if($('#tipo_id').val()==''||$('#nombreper').val()==''||$('#servicios').val()==''||$('#contacto').val()==''){
                    toastr.error('Por favor complete los datos de la red para realizar su ingreso');
                }else{
                agregar({
                    tipo_id: $('#tipo_id').val(),
                    servicios: $('#servicios').val(),
                    contacto: $('#contacto').val(),
                    nombreper: $('#nombreper').val(),
                    egreso_id:  '{{ $todoxxxx["padrexxx"]->id }}',
                    });
                $('#tipo_id').val('');
                $('#servicios').val('');
                $('#nombreper').val('');
                $("#contacto").val('');
                }   
            });
} );

function deleteRecord(queryxxx,row_index) {
$.ajax({
        url : "{{route('egresoredes.quitar',$todoxxxx["parametr"])}}",
        type: 'get',
        data: {
              "id": queryxxx,
              },
        success: function ()
             {
             toastr.success('Red de apoyo eliminada');
              var i = row_index.parentNode.parentNode.rowIndex;
              document.getElementById("datatable").deleteRow(i);
              {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
            }
     });  
}
</script>

