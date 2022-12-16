<script>
  $(document).ready(function(){
    $('.select2').select2({
      language: "es"
    });
    

    var diagnostico = function(selected, upixxxxx,padrexxx) {
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("vodonremites.diagnostico") }}',
               campoxxx: 'diag_id',
               mensajex: 'Exite un error al cargar los cursos'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#tipodiag').change(() => {
            let upixxxxx = $('#tipodiag').val();
            let padrexxx = '{{ $todoxxxx["padrexxx"]->id }}';
            let cabecera = true
            diagnostico(0,upixxxxx);
            
        });

        var f_ajaxresp=function(dataxxxx,pselecte){
                    $.ajax({
                        url : "{{route('vdiagnosti.codigo')}}",
                        data : dataxxxx,
                        type : 'GET',
                        dataType :'json',
                        success : function(json) {
                            $('#codigo' ).val(json.codigo);
                            },
                        error : function(xhr, status) {
                            alert('Disculpe, no se encontraron datos de diagnostico');
                        },
                    });
                }

        $('#diag_id').change(function() {
        f_ajaxresp({dataxxxx:$(this).val()})
        });
        @if(old('diag_id') != null)
        f_ajaxresp({
                dataxxxx: {
                    valuexxx: "{{old('codigo')}}",
                    campoxxx: 'codigo',
                    padrexxx: '{{old("diag_id")}}'
            }});
        @endif

    (function($) {
            $.fn.extend( {
                limiter: function(limit, elem) {
                    $(this).on("keyup focus", function() {
                        setCount(this, elem);
                    });
                    function setCount(src, elem) {
                        var chars = src.value.length;
                        if (chars > limit) {
                            src.value = src.value.substr(0, limit);
                            chars = limit;
                        }
                        elem.html( chars+"/4000" );
                    }
                    setCount($(this)[0], elem);
                }
            });
        })(jQuery);
        var elem = $("#evolu");
        $("#evolucion").limiter(4000, elem);
        var elem = $("#observa");
        $("#observacion").limiter(4000, elem);
});
$(document).on('click','#remove',function(){
            $(this).closest('tr').remove();
        });

</script>
