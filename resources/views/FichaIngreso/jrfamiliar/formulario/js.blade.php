<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
         var f_ajax=function(dataxxxx,pselecte){ 
            $.ajax({
                url : dataxxxx.url,
                data : dataxxxx.data,
                type : dataxxxx.type,
                dataType : dataxxxx.datatype,
                success : function(json) {
                    $('#aniosxxx').text(json[0].edadxxxx)           
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        @if(isset($todoxxxx['nacicomp']))
        $('#d_nacimiento').mask('0000-00-00');     
        $("#d_nacimiento").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            maxDate:'+0d',
            yearRange: "-70:+0",
            onSelect: function(dateText) {
                dataxxxx={
                    url:"{{ route('ajaxx.edad') }}",
                    data:{
                        _token: $("input[name='_token']").val(),
                        'fechaxxx':$(this).val()
                    },
                    type:'POST',
                    datatype:'json',

                }
                f_ajax(dataxxxx,'');
            }
        });
        @endif
    });

    function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
      }
}
</script>  