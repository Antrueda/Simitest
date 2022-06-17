<script>
  $(document).ready(function(){
    $('#user_id').select2({
      language: "es"
    });
    $('#apoyo_id').select2({
      language: "es"
    });


    var f_modulo = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("formatov.modulo") }}',
               campoxxx: 'modulo_id',
               mensajex: 'Exite un error al cargar los modulos'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#cursos_id').change(() => {
            let upixxxxx = $('#cursos_id').val();
            let cabecera = true
            f_modulo(0,upixxxxx);
            
        });

        var f_ajaxresp=function(dataxxxx,pselecte){
                    $.ajax({
                        url : "{{route('formatov.unidades')}}",
                        data : dataxxxx,
                        type : 'GET',
                        dataType :'json',
                        success : function(json) {
                            $('#unidades' ).val(json.unidades);
                            },
                        error : function(xhr, status) {
                            alert('Disculpe, no se encontraron datos de matricula');
                        },
                    });
                }

        $('#modulo_id').change(function() {
        f_ajaxresp({dataxxxx:$(this).val()})
        });
        @if(old('modulo_id') != null)
        f_ajaxresp({
                dataxxxx: {
                    valuexxx: "{{old('unidades')}}",
                    campoxxx: 'unidades',
                    padrexxx: '{{old("modulo_id")}}'
            }});
        @endif


      

   

        $('#conocimiento').keyup(function() {
            let conoci = parseFloat($('#conocimiento').val()) *  2;
            $("#conoci").val(conoci);
            });

            $('#desempeno').keyup(function() {
            let desemp = parseFloat($('#desempeno').val()) *  6;
            $("#desemp").val(desemp);
            });
            $('#producto').keyup(function() {
            let producto = parseFloat($('#producto').val()) *  2;
            $("#product").val(producto);
            });
            $('#concepto').on('click', function() {
            let conoci = parseFloat($('#conoci').val());
            let desemp = parseFloat($('#desemp').val());
            let producto = parseFloat($('#product').val());
            let total = conoci+desemp+producto
            if(total>=70){
                $("#concepto").val("COMPETENTE");
            }else{
                $("#concepto").val("NO COMPETENTE");
            }
           
            });
  });

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
