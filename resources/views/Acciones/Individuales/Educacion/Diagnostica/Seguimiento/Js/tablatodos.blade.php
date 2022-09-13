<script>
   var table ='';
$(document).ready(function() {
    var foreachx=function(comboxxx){
        $('#'+comboxxx[0]).empty();
        $.each(comboxxx[1],function(i,data){
            $('#'+comboxxx[0]).append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
        });
    }
    var f_combo=function(dataxxxx){

            $.ajax({
                url : "{{ route($todoxxxx['routxxxx'].'.nnajsele',$todoxxxx['parametr']) }}",
                data :dataxxxx.dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $('#'+json.tipodocu[0]+' option:selected').removeAttr( "selected" )
                    $('#'+json.tipodocu[0]+' option[value='+json.tipodocu[1]+']').attr('selected', 'selected');
                    foreachx(json.parentes)
                    

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

  

  var f_ajax=function(dataxxxx,pselecte){
            $.ajax({
                url : dataxxxx.url,
                data : dataxxxx.data,
                type : dataxxxx.type,
                dataType : dataxxxx.datatype,
                success : function(json) {
                    $.each(json, function(i, data) {
                            var selected = '';
                            if (eval(data.valuexxx) == eval(pselecte)) {
                                selected = 'selected'
                            }
                            $('#' + dataxxxx.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

  $('#{{ $tablasxx["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
             $('#ape2_autorizado').val('');
            $('#ape1_autorizado').val('');
            $('#nom1_autorizado').val('');
            $('#nom2_autorizado').val('');
            $('#doc_autorizado').val('');
            $('#telefonoaco').val('');
 


        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            {{ $tablasxx["tablaxxx"] }}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            var d = {{$tablasxx["tablaxxx"]}}.row(this).data();
            $('#ape1_autorizado').val(d.s_primer_apellido);
            $('#ape2_autorizado').val(d.s_primer_nombre);
            $('#nom1_autorizado').val(d.s_segundo_apellido);
            $('#nom2_autorizado').val(d.s_segundo_nombre);
            $('#doc_autorizado').val(d.s_documento);
            $('#telefonoaco').val(d.s_telefono);
            f_combo({dataxxxx:{padrexxx:d.id},selected:''});
        }
    } );


} );
</script>
