<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
  $(document).ready(function() {
    $('#dias').select2({
      language: "es"
    });
    var f_generar_ingresos = function(dataxxxx){
           $('#prm_frecuencia_id').val('')
            $("#prm_informal_id, #prm_otra_id, #prm_laboral_id").empty();
            $("#prm_informal_id, #prm_otra_id, #prm_laboral_id").append('<option value="">Seleccione</>')
            if(dataxxxx.valuexxx!=''){
                $.ajax({
                url : "{{ route('ajaxx.trabajogenera') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':dataxxxx.valuexxx
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {

                    if(dataxxxx.limpiaxx==true){
                        $('#trabaja').val(json[0].valuexxx)
                    }
                    if(json[0].trabinfo[0].valuexxx==1){
                        $("#prm_informal_id").empty();
                    }
                    if(json[0].otractiv[0].valuexxx==1){
                        $("#prm_otra_id").empty();
                    }
                    if(json[0].tiporela[0].valuexxx==1){
                        $("#prm_laboral_id").empty();
                    }
                    $('#trabaja').prop('readonly',json[0].trabform)
              

                    $.each(json[0].trabinfo,function(i,data){
                        var selected = '';
                        if(dataxxxx.trivalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#prm_informal_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });



                    $.each(json[0].otractiv,function(i,data){
                        var selected = '';
                        if(dataxxxx.travalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#prm_otra_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                    $.each(json[0].tiporela,function(i,data){
                        var selected = '';
                        if(dataxxxx.relvalue==data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#prm_laboral_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                   },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        }
        @if(old('prm_actividad_id')!=null)
            f_generar_ingresos({
                limpiaxx:false,
            valuexxx:{{ isset($todoxxxx['modeloxx']->prm_actividad_id)? $todoxxxx['modeloxx']->prm_actividad_id: (old('prm_actividad_id') !=null ? old('prm_actividad_id'):0)}},
            trivalue:{{ isset($todoxxxx['modeloxx']->prm_informal_id)? $todoxxxx['modeloxx']->prm_informal_id: (old('prm_informal_id') !=null ? old('prm_actividad_id'):0)}},
            travalue:{{ isset($todoxxxx['modeloxx']->prm_otra_id)? $todoxxxx['modeloxx']->prm_otra_id: (old('prm_otra_id') !=null ? old('prm_actividad_id'):0)}},
            relvalue:{{ isset($todoxxxx['modeloxx']->prm_laboral_id)? $todoxxxx['modeloxx']->prm_laboral_id: (old('prm_laboral_id') !=null ? old('prm_actividad_id'):0)}}
        }
);
        @endif
        $("#prm_actividad_id").change(function(){
            f_generar_ingresos({valuexxx:$(this).val(), trivalue:'', travalue:'', noivalue:'', relvalue:'', limpiaxx:true});
            f_limpiar($(this).val(),'');
        });


  });


    function doc(valor){
        if(valor == 626){
            document.getElementById("trabaja").hidden=false;
            document.getElementById("prm_informal_id").hidden=true;
            document.getElementById("prm_otra_id").hidden=true;
            document.getElementById("prm_laboral_id").hidden=false;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("intensidad").hidden=false;
        } 
        if(valor == 627) {
            document.getElementById("trabaja").hidden=true;
            document.getElementById("prm_informal_id").hidden=false;
            document.getElementById("prm_otra_id").hidden=true;
            document.getElementById("prm_laboral_id").hidden=true;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("intensidad").hidden=false;
        }
        if(valor == 628) {
            document.getElementById("trabaja").hidden=true;
            document.getElementById("prm_informal_id").hidden=true;
            document.getElementById("prm_otra_id").hidden=false;
            document.getElementById("prm_laboral_id").hidden=true;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("intensidad").hidden=false;
        }
        if(valor == 853) {
            document.getElementById("trabaja").hidden=true;
            document.getElementById("prm_informal_id").hidden=true;
            document.getElementById("prm_otra_id").hidden=true;
            document.getElementById("prm_laboral_id").hidden=true;
            document.getElementById("prm_frecuencia_id").hidden=true;
            document.getElementById("intensidad").hidden=true;
        }
    }
    init_contadorTa("observaciones", "contadordescripcion1", 4000);

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
    function carga() {
        doc(document.getElementById('prm_actividad_id').value);
    }
    window.onload=carga;
    </script>
