<script>
  $(document).ready(function(){
    $('#user_id').select2({
      language: "es"
    });
    $('#apoyo_id').select2({
      language: "es"
    });






      

        let f_unidad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#modulo_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("valorcomp.unidad") }}',
                campoxxx: 'unidad_id',
                mensajex: 'Exite un error al cargar las unidades del modulo'
            }
            f_comboGeneral(dataxxxx);
        }
        $('#modulo_id').change(() => {
            f_unidad(0);
        });

        let dependen = '{{old("modulo_id")}}';
        if (dependen !== '') {
            f_unidad('{{old("unidad_id")}}');
        }

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
