
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
    ejecutar_evento_agregar('#{{ $tablasxx["tablaxxx"] }} tbody','{{ $tablasxx["tablaxxx"] }}');
  @endforeach

});

    
    
    let f_ajax = function(valuexxx) {

        let url='{{ route("asissema.desvincular",":queryId")}}';
            url = url.replace(':queryId', valuexxx);

        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: 'json',
            success: function(json) {

                toastr.success('El nnaj fue eliminado de esta planilla de asistencia con exito');
                {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.ajax.reload();
                {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
            },
            error: function(xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
            }
        });
    }

    let f_ajax_agregar = function(valuexxx) {
        $(".agregar-matricula-asistencia").attr("disabled", true);

        $.ajax({
            url: "{{ route('asissema.asignarmatricula',$todoxxxx['modeloxx']->id)}}",
            type: 'POST',
            data: {
                'valuexxx': valuexxx,
                "_token": "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function(json) {
                console.log(json);
                if (json == "falta_dias") {
                    toastr.warning('El nnaj no pudo ser asignado a la planilla de asistencia por que falta asignar dias de grupo, COMUNIQUESE CON EL ADMINISTRADOR.');
                }else{
                    toastr.success('El nnaj asignado a la planilla de asistencia con exito');
                }
                {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.ajax.reload();
                {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
            },
            error: function(xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
            }
        });
    }

    var  ejecutar_evento = function(tbody,table){
        $(tbody).on("click","button.eliminar-asigna-asistencia",function(){
            let asistencia_matricula = $(this).attr("data-asis");
            if(asistencia_matricula != undefined){
                f_ajax(asistencia_matricula);
            }
        })
    }

    var  ejecutar_evento_agregar = function(tbody,table){
        $(tbody).on("click","button.agregar-matricula-asistencia",function(){
            let matricula = $(this).attr("data-matricula");
            if(matricula != undefined){
                f_ajax_agregar(matricula);
            }
        })
    }
  
</script>
