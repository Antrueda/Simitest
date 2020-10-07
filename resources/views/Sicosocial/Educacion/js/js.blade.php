<script>
$(document).ready(function(){
    $('#causas').select2({
        dropdownParent: $('#causas_div'),
        language: "es"
    });
    $('#fortalezas').select2({
        dropdownParent: $('#fortalezas_div'),
        language: "es"
    });
    $('#dificultades').select2({
        dropdownParent: $('#dificultades_div'),
        language: "es"
    });
    $('#dificultadesa').select2({
        dropdownParent: $('#dificultadesa_div'),
        language: "es"
    });
    $('#dificultadesb').select2({
        dropdownParent: $('#dificultadesb_div'),
        language: "es"
    });
});

var f_limpiar = function(valuexxx,psalecte) {
            $("#causas,#fortalezas,#dificultades,#dificultadesa,#dificultadesb,#prm_rendimiento_id,#descripcion,#prm_motivo_id").empty();
                $.ajax({
                    url : "{{ route('vsieduca.limpiar') }}",
                    data: {
                        padrexxx:valuexxx,
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $.each(json[0].causasxx, function(i, data) {
                            $('#causas').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].materias, function(i, data) {
                            $('#fortalezas').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].materias, function(i, data) {
                            $('#dificultades').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].dificulx, function(i, data) {
                            $('#dificultadesa').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].dificuly, function(i, data) {
                            $('#dificultadesb').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].rendimie, function(i, data) {
                            $('#prm_rendimiento_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].motivosx, function(i, data) {
                            $('#prm_motivo_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });

                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });



        }

    $("#prm_estudia_id").change(function(){
        f_limpiar($(this).val(),'');

    });



function doc(valor){
    if(valor == 228){
        document.getElementById("dia").hidden=false;
        document.getElementById("mes").hidden=false;
        document.getElementById("ano").hidden=false;
        document.getElementById("prm_motivo_id").hidden=false;
        document.getElementById("prm_rendimiento_id").hidden=false;
        document.getElementById("prm_rendimiento_id").value=[];
        document.getElementById("fortalezas_div").hidden=false;
        document.getElementById("fortalezas").value=[];
        document.getElementById("dificultades_div").hidden=false;
        document.getElementById("prm_dificultad_id").hidden=true;
        document.getElementById("causas_div").hidden=false;


    } else {
        document.getElementById("dia").hidden=true;
        document.getElementById("dia").value='';
        document.getElementById("mes").hidden=true;
        document.getElementById("mes").value='';
        document.getElementById("ano").hidden=true;
        document.getElementById("ano").value='';
        document.getElementById("prm_motivo_id").hidden=true;
        document.getElementById("prm_rendimiento_id").hidden=false;
        document.getElementById("fortalezas_div").hidden=false;
        document.getElementById("dificultades_div").hidden=false;
        document.getElementById("prm_dificultad_id").hidden=false;
        document.getElementById("causas_div").hidden=true;


    }
}
function doc1(valor){
    if(valor == 228){
        document.getElementById("dificultadesa_div").hidden=true;
        document.getElementById("dificultadesb_div").hidden=true;

    } else {
        document.getElementById("dificultadesa_div").hidden=false;
        document.getElementById("dificultadesb_div").hidden=false;
    }
}

</script>
