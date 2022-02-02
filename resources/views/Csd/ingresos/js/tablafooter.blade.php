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


       ,
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;

            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };

            // Total de todos los registros
            ingresos = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total total de la pagina en que se esté
            pageIngresos = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                console.log(data)
            // Update footer
            $( api.column( 3 ).footer() ).html(
                '$'+ingresos
                // '$'+pageAporte +' ( $'+ aportes +' total)'
            );

            // Total de todos los registros
            aportes = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total total de la pagina en que se esté
            pageAporte = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            // Update footer
            $( api.column( 4 ).footer() ).html(
                '$'+aportes
                // '$'+pageAporte +' ( $'+ aportes +' total)'
            );
        }

   });
 @endforeach
} );
function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
 </script>

