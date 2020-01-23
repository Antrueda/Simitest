<script>
   
$(document).ready(function() {
  var tabalxxx=function(){
    return 
  }
  @foreach($todoxxxx["tablasxx"] as $todoxxxy)

  var {{ $todoxxxy["tablenax"] }} =  $('#{{ $todoxxxy["tablenax"] }}').DataTable({
      "serverSide": true,
      "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
    	"ajax": {
        url:"{{ url($todoxxxy['urlxxxxx'])  }}",
        @if(isset($todoxxxy['dataxxxx']))
          data:{
            @foreach($todoxxxy['dataxxxx'] as $dataxxxx)
            {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
            @endforeach
          }
        @endif
      },
    	"columns":[
			@foreach($todoxxxy['columnsx'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
      @endforeach
    ],
    
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
    });



  @endforeach
  
  $('#areasuser tbody').on( 'click', 'tr', function () {
    
  });


  $('#areas tbody').on( 'click', 'tr', function () {
    var filaxxxx=areas.row( this ).data()
    $.ajax({
                url: "{{ route('usuario.setAreas')}}",
                type: 'GET',
                data: {
                    'usuariox': '{{ $todoxxxx["modeloxx"]->id }}',
                    'areaxxxx': filaxxxx.id
                },
                dataType: 'json',
                success: function(json) {
                  areas.ajax.reload();
                  areasuser.ajax.reload();
                  alert('Área asignada con éxito');
                //   setTimeout(function() {
                    
                // }, 300);

                },
                error: function(xhr, status) {
                    alert('Disculpe, existio un problema');
                }
            });

            
  });
  
  $('#areasuser').on('click','.accionxx',function(){
    
    $.ajax({
      url: "{{ route('usuario.setActinact')}}",
      type: 'GET',
      data: {
          'areaxxxx': $(this).prop('id')
      },
      dataType: 'json',
      success: function(json) {
        alert(json.mensajex);
        areasuser.ajax.reload();
      },
      error: function(xhr, status) {
          alert('Disculpe, existio un problema');
      }
    });
  });


} );
</script>