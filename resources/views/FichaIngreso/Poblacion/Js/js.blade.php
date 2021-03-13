

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });
        $('#prm_situacion_vulnera_id').change(function() {
                f_comboSimple({
                    dataxxxx: {
                        padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                        selectxx: $(this).prop('id'),
                    },
                    urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
                    msnxxxxx:"Disculpe, existió un problema al armar el combo"
              });
             });
        var getEscnna=function(dataxxxx){

            $("#i_prm_victima_escnna_id").empty();
            $.ajax({
                url : "{{ route('fisituacion.getEscnna',$todoxxxx['usuariox']->id) }}",
                data : {
                        'padrexxx':dataxxxx.valuexxx,
                        'selected':dataxxxx.selected,
                    },
                type : 'GET',
                dataType : 'json',
                success : function(json) {

                    $.each(json.escnnaxx,function(i,data){
                        $('#i_prm_victima_escnna_id').append('<option '+data.selected+'  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        @if(old('i_prm_tipo_id')!=null)
        var victimax=[@foreach (old("i_prm_victima_escnna_id") as $situacx)
              {{ $situacx }},
            @endforeach ];

            getEscnna({valuexxx:{{ old('i_prm_tipo_id') }},selected:victimax })
        @endif

        $("#i_prm_tipo_id").change(function(){
            getEscnna({valuexxx:$(this).val(),selected:''})
        });



    });


</script>
