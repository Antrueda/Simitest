<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

    $(function(){
        $('.select2').select2({
            language: "es"
        });
        var f_ajax=function(dataxxxx){
            $.ajax({
                    url : "{{ route('fiautorizacion.autoriza',[$todoxxxx['usuariox']->id]) }}",
                    data : {
                        'padrexxx':dataxxxx.valuexxx
                    },
                    type : 'GET',
                    dataType : 'json',
                    success : function(json) {
                        $('#sdocumen').text(json.sdocumen);
                         $('#expedici').text(json.expedici);
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
        }
        @if(isset($todoxxxx['modeloxx']->id))
            f_ajax({valuexxx:"{{ $todoxxxx['modeloxx']->id }}}");
        @endif
        $('#fi_compfami_id').change(function(){
            f_ajax({valuexxx:$(this).val()})
        });
    });
</script>
