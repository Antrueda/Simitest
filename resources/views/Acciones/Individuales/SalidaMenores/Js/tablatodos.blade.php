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

  $(function() {
        // Máscara documento
        $('#s_documento').mask('000000000000');
        var f_ajax1 = function(dataxxxx, pselecte) {
            $.ajax({
                url: dataxxxx.url,
                data: dataxxxx.data,
                type: dataxxxx.type,
                dataType: dataxxxx.datatype,
                success: function(json) {
                    if (json[0].valuexxx == 1) {
                        $("#" + dataxxxx.campoxxx).empty();
                    }
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var datamuni = function(campoxxx, valuexxx, selected) {
            var routexxx = "{{ route('fidatbas.municipio') }}"
            var municipi = 'sis_municipioexp_id';
            if (campoxxx == 'prm_etnia_id') {
                municipi = 'prm_poblacion_etnia_id';
                routexxx = "{{ route('ajaxx.poblacionetnia') }}"
            }
            $("#" + municipi).empty();
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'departam': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: municipi
            }
            if (valuexxx != '') {
                f_ajax(dataxxxx, selected);
            }
        }
        @if(old('prm_etnia_id') !== null)
        datamuni('prm_etnia_id', "{{old('prm_etnia_id')}}", "{{old('prm_poblacion_etnia_id')}}");
        @endif

        $("#prm_etnia_id").change(function() {
            datamuni($(this).prop('id'), $(this).val(), '')
        });
    });

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
    $('#primer_apellido').val('');
            $('#primer_nombre').val('');
            $('#segundo_apellido').val('');
            $('#segundo_nombre').val('');
            $('#prm_doc_id').val('');
            $('#documento').val('');
            $('#prm_parentezco_id').val('');


        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            {{ $tablasxx["tablaxxx"] }}.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            var d = {{$tablasxx["tablaxxx"]}}.row(this).data();
            $('#primer_apellido').val(d.s_primer_apellido);
            $('#primer_nombre').val(d.s_primer_nombre);
            $('#segundo_apellido').val(d.s_segundo_apellido);
            $('#segundo_nombre').val(d.s_segundo_nombre);
            $('#documento').val(d.s_documento);
            $('#prm_doc_id').val(d.prm_documento_id);
            $('#prm_parentezco_id').val(d.i_prm_parentesco_id);
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
