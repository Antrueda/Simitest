<script>
   var table ='';
$(document).ready(function() {
    var foreachx=function(comboxxx){
        $('#'+comboxxx[0]).empty();
        $.each(comboxxx[1],function(i,data){
            $('#'+comboxxx[0]).append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
        });
    }


      
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
      var f_ajaxresp=function(dataxxxx,pselecte){
            $.ajax({
                url : "{{route('traslannaj.asistencia')}}",
                data : dataxxxx,
                type : 'GET',
                dataType :'json',
                success : function(json) {
                    $('#fechaasistencia' ).val(json.fechaxxx);
                    $('#estadoasintecia' ).val(json.estadoxx);
                    },
                error : function(xhr, status) {
                    alert('Disculpe, no se encontraron datos de asistencia o matricula');
                },
            });
        }
        $('#{{ $tablasxx["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
            $('#s_primer_apellido').val('');
            $('#s_primer_nombre').val('');
            $('#s_segundo_apellido').val('');
            $('#s_segundo_nombre').val('');
            $('#s_documento').val('');
            $('#s_nombre_identitario').val('');

        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            {{ $tablasxx["tablaxxx"] }}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            var d = {{$tablasxx["tablaxxx"]}}.row(this).data();
            $('#sis_nnaj_id').val(d.id);
            $('#s_primer_apellido').val(d.s_primer_apellido);
            $('#s_primer_nombre').val(d.s_primer_nombre);
            $('#s_segundo_apellido').val(d.s_segundo_apellido);
            $('#s_segundo_nombre').val(d.s_segundo_nombre);
            $('#s_documento').val(d.s_documento);
            $('#d_nacimiento').val(d.d_nacimiento);
            $('#s_nombre_identitario').val(d.s_nombre_identitario);
            f_ajaxresp({nnajxxxx:d.s_documento},'');

                
        }
    } );

});
 
</script>
