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
                url : "{{ route($todoxxxx['routxxxx'].'.compsele',$todoxxxx['parametr']) }}",
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


      
  @foreach ($todoxxxx['tablazxx'] as $tablazxx)
    {{ $tablazxx["tablaxxx"] }} =  $('#{{ $tablazxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
        "ajax": {
            url:"{{ url($tablazxx['urlxxxxx'])  }}",
            @if(isset($tablazxx['dataxxxx']))
                data:{
                    @foreach($tablazxx['dataxxxx'] as $dataxxxx)
                    {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
            @endif
        },
        "columns":[
            @foreach($tablazxx['columnsx'] as $columnsx)
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

  $('#{{ $tablazxx["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
    $('#primer_apellidoaco').val('');
            $('#primer_nombreaco').val('');
            $('#segundo_apellidoaco').val('');
            $('#segundo_nombreaco').val('');
            $('#documentoaco').val('');
 


        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            {{ $tablazxx["tablaxxx"] }}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            var d = {{$tablazxx["tablaxxx"]}}.row(this).data();
            $('#primer_apellidoaco').val(d.s_primer_apellido);
            $('#primer_nombreaco').val(d.s_primer_nombre);
            $('#segundo_apellidoaco').val(d.s_segundo_apellido);
            $('#segundo_nombreaco').val(d.s_segundo_nombre);
            $('#documentoaco').val(d.s_documento);
            f_combo({dataxxxx:{padrexxx:d.id},selected:''});
        }
    } );


} );
 
</script>
