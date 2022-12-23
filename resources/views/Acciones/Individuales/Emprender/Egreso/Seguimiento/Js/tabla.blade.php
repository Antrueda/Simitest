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
                            url : "{{route('egresopost.agregar')}}",
                            data : dataxxxx,
                            type : 'GET',
                            dataType :'json',
                            success: function(json) {
                                console.log(json);
                                toastr.success('Contacto Telefónico agregado con éxito');
                                {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                                },
                            error: function(xhr, status) {
                        
                                alert('Disculpe, error al agregar el asitente');
                            }
                        });
                    }
                
        $("#tipollama_id").change(function(){
            if($(this).val()==227){
                $('#motivollama_id').val('235')
            }
        });        


            $('#agregar').on('click',function() {
                if($('#fechareg').val()==''||$('#obserllamad').val()==''||$('#tipollama_id').val()==''||$('#motivollama_id').val()==''){
                    toastr.error('Por favor complete los datos de la llamada para realizar su ingreso');
                }else{
                agregar({
                    fechareg: $('#fechareg').val(),
                    tipollama_id: $('#tipollama_id').val(),
                    motivollama_id: $('#motivollama_id').val(),
                    obserllamad: $('#obserllamad').val(),
                    egreso_id:  '{{ $todoxxxx["padrexxx"]->id }}',
                    });
                $('#fechareg').val('');
                $('#tipollama_id').val('');
                $('#obserllamad').val('');
                $("#motivollama_id").val('');
                }   
            });
} );

function deleteRecord(queryxxx,row_index) {
$.ajax({
        url : "{{route('egresopost.quitar',$todoxxxx["parametr"])}}",
        type: 'get',
        data: {
              "id": queryxxx,
              },
        success: function ()
             {
             toastr.success('Contacto Telefónico eliminado');
              var i = row_index.parentNode.parentNode.rowIndex;
              document.getElementById("datatable").deleteRow(i);
              {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
            }
     });  
}


</script>

