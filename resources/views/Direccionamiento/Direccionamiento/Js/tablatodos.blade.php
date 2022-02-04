<script>
   var table ='';
$(document).ready(function() {
    var foreachx=function(comboxxx){
        $.each(comboxxx,function(i,data){
                        $('#'+data.comboxxx[0]).empty();
                        $.each(data.comboxxx[1],function(i,combito){
                            var selected ='';
                            if(data.comboxxx[2]==combito.valuexxx){
                                selected='selected'
                            }
                            $('#'+data.comboxxx[0]).append('<option '+selected+' value="'+combito.valuexxx+'">'+combito.optionxx+'</option>')
                            
                            });
                      });
                      
    }
    
    var f_combo=function(dataxxxx){
            $.ajax({
                url : "{{ route($todoxxxx['routxxxx'].'.nnajsele',$todoxxxx['parametr']) }}",
                data :dataxxxx.dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    foreachx(json)

                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

      
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
    });
  @endforeach
  $('#{{ $tablasxx["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
            $('#s_primer_apellido').val('');
            $('#s_primer_nombre').val('');
            $('#s_segundo_apellido').val('');
            $('#s_segundo_nombre').val('');
            $('#s_documento').val('');
            $('#d_nacimiento').val('');
            $('#s_apodo').val('');
            $('#s_nombre_identitario').val('');
            $('#sis_nnaj_id').val('');
            

        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            f_combo({dataxxxx:{padrexxx:0},selected:''});
        }
        else {
            {{ $tablasxx["tablaxxx"] }}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            var d = {{$tablasxx["tablaxxx"]}}.row(this).data();
            $('#s_primer_apellido').val(d.s_primer_apellido);
            $('#s_primer_nombre').val(d.s_primer_nombre);
            $('#s_segundo_apellido').val(d.s_segundo_apellido);
            $('#s_segundo_nombre').val(d.s_segundo_nombre);
            $('#s_apodo').val(d.s_apodo);
            $('#s_nombre_identitario').val(d.s_nombre_identitario);
            $('#s_documento').val(d.s_documento);
            $('#d_nacimiento').val(d.d_nacimiento);
            $('#sis_nnaj_id').val(d.id);
            f_combo({dataxxxx:{padrexxx:d.id},selected:''});
                
        }
    } );


} );
 
</script>
