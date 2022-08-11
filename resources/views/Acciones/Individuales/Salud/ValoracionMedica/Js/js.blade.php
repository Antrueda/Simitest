<script>
  $(document).ready(function(){
    $('#diag_id').select2({
      language: "es"
    });

    var regisalu = function(valuexxx, selectep) {
            $("#entidad_id").empty();
            $.ajax({
                url: "{{ route('ajaxx.regimensalud') }}",
                data: {
                    _token: $("input[name='_token']").val(),
                    'padrexxx': valuexxx
                },
                type: 'POST',
                dataType: 'json',
                success: function(json) {
                    $.each(json[0].entidadx, function(i, data) {
                        var selected = '';
                        if (selectep == data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#entidad_id').append('<option ' + selected + '  value="' + data.valuexxx + '">' + data.optionxx + '</option>')

                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var prmresal = "{{old('afili_id')}}";
        if (prmresal != '') {
            regisalu(prmresal, "{{old('entidad_id')}}");
        }
        $("#afili_id").change(function() {
            regisalu($(this).val(), '');
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
        

  });
init_contadorTa("concepto", "contadorconcepto", 4000);
init_contadorTa("motivoval", "contadormotivoval", 4000);
init_contadorTa("recomenda", "contadorrecomenda", 4000);



function init_contadorTa(idtextarea, idcontador, max) {
    $("#" + idtextarea).keyup(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
    $("#" + idtextarea).change(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
}

function updateContadorTa(idtextarea, idcontador, max) {
    var contador = $("#" + idcontador);
    var ta = $("#" + idtextarea);
    contador.html("0/" + max);
    contador.html(ta.val().length + "/" + max);
    if (parseInt(ta.val().length) > max) {
        ta.val(ta.val().substring(0, max - 1));
        contador.html(max + "/" + max);
    }

}

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }


    function doc(valor){
        if(valor == 2811){
            document.getElementById("remigen_id").hidden=true;
            document.getElementById("remisal_id").hidden=false;
        } 
        if(valor == 2810){
            document.getElementById("remigen_id").hidden=false;
            document.getElementById("remisal_id").hidden=true;
        } 

        if(valor == 168){
            document.getElementById("remigen_id").hidden=true;
            document.getElementById("remisal_id").hidden=true;
        } 
    } 


    function doc2(valor){
        document.getElementById("recomenda").hidden=true;
        if(valor == 228){
            document.getElementById("recomenda").hidden=true;
            
        } 
        if(valor == 227){
            document.getElementById("recomenda").hidden=false;
            
        } 
    } 

    function doc3(valor){
        if(valor == 1){
            document.getElementById("remiesp_id").hidden=false;
        }else{ 
            document.getElementById("remiesp_id").hidden=true;
        } 
    } 


    function carga() {
        doc(document.getElementById('remico_id').value);
        doc2(document.getElementById('certifi_id').value);
        doc3(document.getElementById('remiint_id').value);
        

    }
    window.onload=carga;
</script>
