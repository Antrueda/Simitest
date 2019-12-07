<script>
$(document).ready(function() {
    $('#{{ $tableName }}').DataTable({
    	"serverSide": true,
    	"ajax": "{{ url($todoxxxx['urlxxxxx'])  }}",
    	"columns":[
			@foreach($todoxxxx['columnsx'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	},
		   fnRowCallback: function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
			   console.log(iDisplayIndexFull)
			   if($(nRow).find('td:eq(6)').text()==1){
				   $(nRow).find('td:eq(6)').text('ACTIVO')
			   }
    //    if ($(nRow).find('td:eq(3)').text()=='0' &&
    //        $(nRow).find('td:eq(4)').text()!='0') {
    //           $(nRow).find('td:eq(3)').addClass('color');
    //        }   
    }
    });
} );
</script>