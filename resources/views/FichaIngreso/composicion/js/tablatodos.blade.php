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
                    $('#'+json.paisxxxx[0]+' option:selected').removeAttr( "selected" )
                    $('#'+json.paisxxxx[0]+' option[value='+json.paisxxxx[1]+']').attr('selected', 'selected');
                    foreachx(json.departam)
                    foreachx(json.municipi)

                    $('#'+json.departam[0]+' option[value='+json.departam[2]+']').attr('selected', 'selected');
                    $('#'+json.municipi[0]+' option[value='+json.municipi[2]+']').attr('selected', 'selected');
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problemadddd');
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
                    $('#aniosxxx').val(json[0].edadxxxx)
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

  $('#{{ $tablasxx["tablaxxx"] }} tbody').on( 'click', 'tr', function () {
    $('#s_primer_apellido').val('');
            $('#s_primer_nombre').val('');
            $('#s_segundo_apellido').val('');
            $('#s_segundo_nombre').val('');
            $('#s_documento').val('');


        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            $('#tablaselect').val('NO');
        }
        else {
            $('#tablaselect').val('SI');
            {{ $tablasxx["tablaxxx"] }}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            var d = {{$tablasxx["tablaxxx"]}}.row(this).data();
            $('#s_primer_apellido').val(d.s_primer_apellido);
            $('#s_primer_nombre').val(d.s_primer_nombre);
            $('#s_segundo_apellido').val(d.s_segundo_apellido);
            $('#s_segundo_nombre').val(d.s_segundo_nombre);
            $('#s_documento').val(d.s_documento);
            $('#d_nacimiento').val(d.d_nacimiento);
            dataxxxx={
                    url:"{{ route('ajaxx.edad') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'fechaxxx':$(this).val(),
                        opcionxx:2,
                        padrexxx:d.id,
                    },
                    type:'POST',
                    datatype:'json',

                }
                f_ajax(dataxxxx,'');

                f_combo({dataxxxx:{padrexxx:d.id},selected:''});
        }
    } );


} );
</script>
