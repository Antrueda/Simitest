<script>
   var table ='';
$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
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


  var f_ajax = function(valuexxx) {
            $.ajax({
                url: "{{ route($todoxxxx['permisox'].'.agregar',$todoxxxx['parametr'])}}",
                type: 'GET',
                data: {
                    'fi_dato_basico_id': valuexxx,
                },
                dataType: 'json',
                success: function(json) {
                    toastr.success('Joven agregado con éxito');
                        {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                        {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.ajax.reload();

                },
                error: function(xhr, status) {
                    alert('Disculpe, al agregar el asitente');
                }
            });

        }

        @can('salidajovenes-editar')

            $('#{{ $todoxxxx["tablasxx"][0]["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
                var id= {{$todoxxxx["tablasxx"][0]["tablaxxx"]}}.row( this ).data();

                if ( !$(this).hasClass('btn-primary') &&  id!=undefined) {
                    $(this).addClass('btn-primary');
                    f_ajax(id.id);
                }

            console.log( {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.row( this ).data() );
            } );

            // $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }} tbody').on( 'click', 'tr', function () { alert(44)
            //     var id= {{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}.row( this ).data();
            //     if ( !$(this).hasClass('btn-primary' &&  id!=undefined) ) {
            //         $(this).addClass('btn-primary');
            //         f_ajax(id.id);
            //     }
            // } );
        @endcan


} );
</script>
