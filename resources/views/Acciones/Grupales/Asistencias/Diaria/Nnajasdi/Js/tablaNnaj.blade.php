<script>
    $(document).ready(function() {
        @foreach ($todoxxxx['tablasxx'] as $tablasxx)
            {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
                "serverSide": true,
                "lengthMenu": [
                    [5, 10, 20, 25, 50],
                    [5, 10, 20, 25, 50]
                ],
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

            ejecutar_evento_agregar('#{{ $tablasxx["tablaxxx"] }} tbody','{{ $tablasxx["tablaxxx"] }}');
        @endforeach
    });


    var  ejecutar_evento_agregar = function(tbody,table){
        $(tbody).on("click","button.agregar-nnaj-asisdiaria",function(){
            let sisnnaj = $(this).attr("data-sisnnaj");
            if(sisnnaj != undefined){
                f_ajax_agregar(sisnnaj);
            }
        })
    }

    let f_ajax_agregar = function(valuexxx) {
        let url='{{ route("nnajasdi.crearxxx",":queryId")}}';
                url = url.replace(':queryId', {{$todoxxxx['parametr'][0]}});
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                'sisnnajx': valuexxx,
                "_token": "{{ csrf_token() }}",
            },
            dataType: 'json',
            success: function(json) {

                toastr.success('El nnaj asignado a la planilla de asistencia con exito');
                {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.ajax.reload();
                {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
            },
            error: function(xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
            }
        });
    }

</script>
