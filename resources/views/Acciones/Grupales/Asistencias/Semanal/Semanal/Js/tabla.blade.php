<style>.dataTables_filter, .dataTables_info { display: none; } 
</style>
<script>
   var table ='';
$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
        var campos=[0,0,0,"dependencia","s_servicio",'actividad',"s_grado","s_cursos","actividade","convenio",'grupo','prm_fecha_inicio',0,0];
        $('#{{ $tablasxx["tablaxxx"] }} #buscarxx th').each( function (i) {
            var title = $(this).text();
            var id='';
            if(campos[i]!=0){
                id='id="'+campos[i]+'"';
                $(this).html( '<input '+id+' type="text" class="autocomplete" placeholder="'+title+'" oninput="stopPropagation(event)" onclick="stopPropagation(event);"/>' );
            }else{
                $(this).html("");
            }
        } );
        
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
        order: [[1, 'asc']],
        "columnDefs": [
        { "searchable": false,orderable: false, "targets": [0,11,12] }
        ],
        "columns":[
            @foreach($tablasxx['columnsx'] as $columnsx)
                {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
            @endforeach
        ],
        "language": {
            "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
        },
        initComplete: function () {
            // Apply the search
            
            this.api().columns().every( function () {
                var that = this;
                $('input', this.header()).on( 'keyup', function () {                       
                    if(that.search() !== this.value && this.value == ''){
                        that
                            .search( this.value )
                            .draw();
                    }
                });
                $('input', this.header()).on( 'keydown clear', function (ev) {
                    if(ev.type === 'keydown' && ev.keyCode === 13){
                        ev.preventDefault();
                    }
                    if (ev.keyCode == 13) {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        } 
                    }
                } );
            } );
        }
    });
  @endforeach
});
function stopPropagation(evt) {
    if (evt.stopPropagation !== undefined) {
        evt.preventDefault();
        evt.stopPropagation();
    } else {
        evt.cancelBubble = true;
    }
}
</script>