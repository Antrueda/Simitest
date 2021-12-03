<script>
    $(document).ready(function() {



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

<<<<<<< HEAD
    var f_limpiar = function(valuexxx, psalecte) {
        $("#causas,#fortalezas,#dificultades,#dificultadesa,#dificultadesb,#prm_rendimiento_id,#descripcion,#prm_motivo_id").empty();
        $.ajax({
            url: "{{ route('vsieduca.limpiar') }}",
            data: {
                padrexxx: valuexxx,
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
=======
});

var f_dificultades =function(valuexxx,psalecte){
    $("#dificultades").empty();
                $.ajax({
                    url : "{{ route('vsieduca.dificulta') }}",
                    data: {
                        valuexxx:valuexxx,
                        selected:psalecte,
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                    $.each(json, function(i, data) {
                            $('#dificultades').append('<option ' + data.selectxx + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                     },
                    error: function(xhr, status) {
                        alert('Disculpe, no se pueden cargar las dificultades');
                    },
                });
}


    $("#fortalezas").change(function(){
        f_dificultades($(this).val(),[0]);
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
                        $.each(json[0].materiaf, function(i, data) {
                            $('#fortalezas').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].materiad, function(i, data) {
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
>>>>>>> 1bae95c6394b3ca7452b6017fe3ad95b61927d12
                });
               
    }

   f_estudia= function(valor) {
        if (valor == 228) {
            $('.tiempoxx').prop('readonly', false)
            $('#prm_motivo_id').attr("disabled", false);
            // $('#prm_rendimiento_id,#fortalezas_div,#dificultades_div,#causas_div').hide();
            document.getElementById("prm_rendimiento_id").hidden = false;
            document.getElementById("prm_rendimiento_id").value = [];
            document.getElementById("fortalezas_div").hidden = false;
            document.getElementById("fortalezas").value = [];
            document.getElementById("dificultades_div").hidden = false;
            document.getElementById("causas_div").hidden = false;
        } else {
            $('.tiempoxx').prop('readonly', true)
            $('#prm_motivo_id').attr("disabled", true);
            document.getElementById("prm_rendimiento_id").hidden = false;
            document.getElementById("fortalezas_div").hidden = false;
            document.getElementById("dificultades_div").hidden = false;
            document.getElementById("causas_div").hidden = true;
        }
    }

    $("#prm_estudia_id").change(function() {
        f_limpiar($(this).val(), '');
        f_estudia($(this).val());
    });
    f_dificultad = function(valuexxx) {
        if (valuexxx == 228) {
            document.getElementById("dificultadesa_div").hidden = true;
            document.getElementById("dificultadesb_div").hidden = true;
        } else {
            document.getElementById("dificultadesa_div").hidden = false;
            document.getElementById("dificultadesb_div").hidden = false;
        }
    }


    <?php

    if (isset($todoxxxx['modeloxx'])) {
        if ($todoxxxx['modeloxx']->prm_dificultad_id == 228) {?>
        f_dificultad(<?=$todoxxxx['modeloxx']->prm_dificultad_id?>);
        <?php
        }

        if ($todoxxxx['modeloxx']->prm_estudia_id == 227) {?>
        f_estudia(<?=$todoxxxx['modeloxx']->prm_estudia_id?>);

    <?php
        }
    }


    ?>


    $('#prm_dificultad_id').change(function() {
        f_dificultad($(this).val());
    });

    init_contadorTa("descripcion", "contadorindescripcion", 4000);


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
</script>
