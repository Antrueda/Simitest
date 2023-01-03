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
            
                    $.ajax({
                        url : "{{route('vodontograma.agregar')}}",
                        data : dataxxxx,
                        type : 'GET',
                        dataType :'json',
                        success: function(json) {
                            console.log(json);
                            toastr.success('Diagnostico agregado con éxito');
                            {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                            },
                        error: function(xhr, status) {
                     
                            alert('Disculpe, error al agregar el asitente');
                        }
                    });
                }

        $('#agregar').on('click',function() {
            if($('#diente').val()==''||$('#tiposup_id').val()==''||$('#super_id').val()==''||$('#diag_id').val()==''){
                toastr.error('Por favor seleccione los datos para ingresar el diagnostico del diente');
            }else{
            agregar({
                diente: $('#diente').val(),
                super_id: $('#super_id').val(),
                diag_id: $('#diag_id').val(),
                tiposup_id: $('#tiposup_id').val(),
                odonto_id:  '{{ $todoxxxx["padrexxx"]->id }}',
                });
            $('#diente').val('');
            $('#super_id').val('');
            $('#tiposup_id').val('');
            $("#diag_id").val(0).select2();
            }   
        });
       
        



} );

function deleteRecord(queryxxx,row_index) {
$.ajax({
        url : "{{route('vodontograma.quitar',$todoxxxx["parametr"])}}",
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

// function doc(valor){
//         if(valor == 227){
//             document.getElementById("cual_div").hidden=false;
//             }
//         if(valor == 228){
//             document.getElementById("cual_div").hidden=true;
//         }
//     } 

//     function doc2(valor){
//         if(valor == 227){
//             document.getElementById("diag_div").hidden=false;
//             }
//         if(valor == 228){
//             document.getElementById("diag_div").hidden=true;
//         }
//     } 

//     function doc1(valor){
//         if(valor == 227){
//             document.getElementById("medic_div").hidden=false;
//         }
//         if(valor == 228){
//             document.getElementById("medic_div").hidden=true;
//         }
//     } 


//     function carga() {
//         doc(document.getElementById('alergia_id').value);
//         doc1(document.getElementById('toma_id').value);
//         doc2(document.getElementById('enfactu_id').value);
//     }
// window.onload=carga;

</script>


