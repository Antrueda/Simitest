<script>
$(document).ready(function() {
    $('#{{ $tableName }}').DataTable({
    	"serverSide": true,
    	"ajax":{
			url:"{{ url($todoxxxx['urlxxxxx'])  }}",
			@if(count($todoxxxx['dataxxxx'] )>0)
			data:{
				@foreach($todoxxxx['dataxxxx'] as $dataxxxx)
					{{ $dataxxxx["campoxxx"] }}:'{{ $dataxxxx["dataxxxx"] }}',
				@endforeach
			}
			@endif
		}
		 ,
    	"columns":[
			@foreach($todoxxxx['columnsx'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	},
		   "drawCallback": function( settings ) {

$('.test').tooltip({title: "Documentos que soportan la actividad", 
html: true, placement: "bottom",

});


// add as many tooltips you want

},
    });
	
$('.test').tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) { alert(44)
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });



} );

</script>