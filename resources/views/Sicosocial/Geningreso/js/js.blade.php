<script>
$(document).ready(function() {
    $('#dias').select2({
        dropdownParent: $('#dias_div'),
        language: "es"
    });
    $('#quienes').select2({
        language: "es",

    });
    $('#labores').select2({
        language: "es"
    });
    var f_campos=function(valuexxx,psalecte){
           $('#prm_jornada_id').empty()
                $.ajax({
                    url : "{{ route('vsigener.jornada') }}",
                    data : {
                        padrexxx:valuexxx,
                    },
                    type : 'GET',
                    dataType : 'json',
                    success : function(json) {
                        $.each(json,function(i,d){
                            var selected='';
                            if(psalecte==d.valuexxx){
                                selected='selected';
                            }
                            $('#prm_jornada_id').append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });


        }

        var f_limpiar = function(valuexxx,psalecte) {
            $("#dias,#quienes,#labores,#expectativa,#descripcion,#prm_frecuencia_id").empty();
                $.ajax({
                    url : "{{ route('vsigener.limpiar') }}",
                    data: {
                        padrexxx:valuexxx,
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $.each(json[0].semanaxx, function(i, data) {
                            $('#dias').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].parentes, function(i, data) {
                            $('#quienes').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].actividx, function(i, data) {
                            $('#labores').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].frecuenc, function(i, data) {
                            $('#prm_frecuencia_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });

                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });



        }

    $("#prm_actividad_id").change(function(){
        f_campos($(this).val(),'');
        f_limpiar($(this).val(),'');

    });
    var f_buscarempleo = function(dataxxxx) {
            $.ajax({
                    url : "{{ route('ajaxx.buscempl') }}",
                    data: dataxxxx.dataxxxx,
                    type: 'GET',
                    dataType: 'json',
                    success: function(respuest) {
                        $("#"+respuest.selectxx).empty();
                        $.each(respuest.comboxxx, function(i, data) {
                            $("#"+respuest.selectxx).append('<option ' + data.selected + '  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $('#cuanto').val('')
                        $('#cuanto').prop('readonly',respuest.readonly)
                      },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema al armar el combo para tiempo en busqueda');
                    },
                });
        }
    $("#prm_no_id").change(function(){
        f_buscarempleo({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: 'prm_periodo_id',
                selected: ''
            },
        });
        
    });


    $('#quienes,#labores').change(function() {
        f_comboSimple({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: $(this).prop('id'),
            },
            urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
            msnxxxxx:"Disculpe, existió un problema al armar el combo"
        });
    });
});


function doc(valor){
    if(valor == 626){
        document.getElementById("trabaja").hidden=false;
        document.getElementById("prm_informal_id").hidden=true;
        document.getElementById("prm_otra_id").hidden=true;
        document.getElementById("prm_no_id").hidden=true;
        document.getElementById("jornada_entre").hidden=false;
        document.getElementById("prm_jor_entre_id").hidden=false;
        document.getElementById("jornada_a").hidden=false;
        document.getElementById("prm_jor_a_id").hidden=false;
        document.getElementById("dias_div").hidden=false;
        document.getElementById("prm_frecuencia_id").hidden=false;
        document.getElementById("prm_laboral_id").hidden=false;
        document.getElementById("aporte").hidden=false;
        document.getElementById("prm_aporta_id").hidden=false;
        document.getElementById("porque").value='';
        document.getElementById("cuanto_aporta").value='';
        document.getElementById("aporte").value='';
        document.getElementById("prm_frecuencia_id").value='';
        document.getElementById("prm_laboral_id").value='';


    }
    if(valor == 627) {
        document.getElementById("trabaja").hidden=true;
        document.getElementById("prm_informal_id").hidden=false;
        document.getElementById("prm_otra_id").hidden=true;
        document.getElementById("prm_no_id").hidden=true;
        document.getElementById("jornada_entre").hidden=false;
        document.getElementById("prm_jor_entre_id").hidden=false;
        document.getElementById("jornada_a").hidden=false;
        document.getElementById("prm_jor_a_id").hidden=false;
        document.getElementById("dias_div").hidden=false;
        document.getElementById("prm_frecuencia_id").hidden=false;
        document.getElementById("prm_laboral_id").hidden=true;
        document.getElementById("aporte").hidden=false;
        document.getElementById("prm_aporta_id").hidden=false;
        document.getElementById("porque").value='';
        document.getElementById("cuanto_aporta").value='';
        document.getElementById("aporte").value='';
        document.getElementById("prm_aporta_id").value='';
        document.getElementById("prm_laboral_id").value='';

    }
    if(valor == 628) {
        document.getElementById("trabaja").hidden=true;
        document.getElementById("prm_informal_id").hidden=true;
        document.getElementById("prm_otra_id").hidden=false;
        document.getElementById("prm_no_id").hidden=true;
        document.getElementById("jornada_entre").hidden=false;
        document.getElementById("prm_jor_entre_id").hidden=false;
        document.getElementById("jornada_a").hidden=false;
        document.getElementById("prm_jor_a_id").hidden=false;
        document.getElementById("dias_div").hidden=false;
        document.getElementById("prm_frecuencia_id").hidden=false;
        document.getElementById("prm_laboral_id").hidden=true;
        document.getElementById("aporte").hidden=false;
        document.getElementById("prm_aporta_id").hidden=false;
        document.getElementById("porque").value='';
        document.getElementById("cuanto_aporta").value='';
        document.getElementById("aporte").value='';
        document.getElementById("prm_aporta_id").value='';
        document.getElementById("prm_laboral_id").value='';

    }
    if(valor == 853) {
        document.getElementById("trabaja").hidden=true;
        document.getElementById("prm_informal_id").hidden=true;
        document.getElementById("prm_otra_id").hidden=true;
        document.getElementById("prm_no_id").hidden=false;
        document.getElementById("jornada_entre").hidden=true;
        document.getElementById("prm_jor_entre_id").hidden=true;
        document.getElementById("jornada_a").hidden=true;
        document.getElementById("prm_jor_a_id").hidden=true;
        document.getElementById("dias_div").hidden=true;
        document.getElementById("prm_frecuencia_id").hidden=true;
        document.getElementById("prm_laboral_id").hidden=true;
        document.getElementById("aporte").hidden=true;
        document.getElementById("prm_aporta_id").hidden=true;
        document.getElementById("porque").value='';
        document.getElementById("cuanto_aporta").value='';
        document.getElementById("aporte").value='';
        document.getElementById("prm_aporta_id").value='';
        document.getElementById("prm_laboral_id").value='';
    }
    doc1(document.getElementById('prm_no_id').value);
    doc2(document.getElementById('prm_aporta_id').value);
}


function doc1(valor){
    if(valor != 711){
        document.getElementById("cuanto").hidden=true;
        document.getElementById("prm_periodo_id").hidden=true;

    } else {
        document.getElementById("cuanto").hidden=false;
        document.getElementById("prm_periodo_id").hidden=false;

    }
}

function doc2(valor){
    if(valor == 227 && document.getElementById('prm_actividad_id').value != 853){
        document.getElementById("porque").hidden=false;
        document.getElementById("cuanto_aporta").hidden=false;

    } else {
        document.getElementById("porque").hidden=true;
        document.getElementById("cuanto_aporta").hidden=true;

    }
}



function carga() {
    doc(document.getElementById('prm_actividad_id').value);
}
window.onload=carga;
init_contadorTa("descripcion", "contadordescripcion", 4000);
init_contadorTa("expectativa", "contadorexpectativa", 4000);


  

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
</script>
