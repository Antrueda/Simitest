<style>.dataTables_filter, .dataTables_info { display: none; } 
</style>
<script>
   var table ='';
   var form_data ={'CargarData': false}
$(document).ready(function() {
  @foreach ($todoxxxx['tablasxx'] as $tablasxx)
        var campos=[0,0,0,0,"s_servicio",'actividad',"s_grado","s_cursos","actividade","convenio",'grupo','prm_fecha_inicio',0,0];
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
                data:function( d ) {
                    return $.extend( {}, d, { "my_extra_data": form_data } );
                }
        },
        order: [[1, 'asc']],
        "columnDefs": [
        { "searchable": true,orderable: false, "targets": [0,3,12,13] }
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

$(".buscar_asistencia").click(function() {
    
    if ($('#sis_depen_id').val() != "") {
        let sis_dep= $('#sis_depen_id').val();
        let fecha_desde= $('#fecha_desde').val();
        let fecha_hasta= $('#fecha_hasta').val();

        if (fecha_desde != "" && fecha_hasta == "") {
            $('#fecha_hasta').addClass('is-invalid');
            return 0;
        }

        form_data ={'CargarData': true,'sisdepen':sis_dep,'fecha_desde':fecha_desde,'fecha_hasta':fecha_hasta}
        let url = '{{$tablasxx['urlxxxxx']}}';
        $('#{{ $tablasxx["tablaxxx"] }}').DataTable().ajax.url(url).load();
        $('#sis_depen_id').removeClass('is-invalid');
        $('#fecha_hasta').removeClass('is-invalid');
    }else{
        $('#sis_depen_id').addClass('is-invalid');
    }

});
</script>