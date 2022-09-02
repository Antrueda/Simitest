<style>.dataTables_filter, .dataTables_info { display: none; } 
</style>

<script>
$('.select2').select2({
    language: "es"
});



   var table ='';
   var form_data ={'CargarData': false}

//    TABLA QUE MUESTRA LAS ASISTENCIAS DIARIAS 

var tablexxx = [];
$(document).ready(function() {
        var tablasxx = <?= json_encode($todoxxxx['tablasxx']) ?>;
        $.each(tablasxx, function(i, d) {
            var tablaxxx = d.tablaxxx
            tablexxx[i]=tablaxxx = $('#' + tablaxxx).DataTable({
                "serverSide": true,
                "lengthMenu": [
                    [5, 10, 20, 25, 50],
                    [5, 10, 20, 25, 50]
                ],
                "ajax": {
                    url: d.urlxxxxx,
                    data:function( d ) {
                    return $.extend( {}, d, { "my_extra_data": form_data } );
                    }
                },
                "language": {
                    "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
                },
                "columns": d.columnsx,
            });
        });       
    });

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
            let url = '{{$todoxxxx['tablasxx'][0]['urlxxxxx']}}';
            $('#{{ $todoxxxx['tablasxx'][0]['tablaxxx'] }}').DataTable().ajax.url(url).load();
            $('#sis_depen_id').removeClass('is-invalid');
            $('#fecha_hasta').removeClass('is-invalid');
        }else{
            $('#sis_depen_id').addClass('is-invalid');
        }
    });
</script>
$todoxxxx['tablasxx']
