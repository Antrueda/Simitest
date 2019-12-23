<script>

$(document).ready(function(){
    $("#prm_area_id").change(event => {
        var area = $("select#prm_area_id option:checked").val();
        if (area != '') {
            $.get(`tipoSeguimiento/`+area, function(res, sta){
                $("#prm_seguimiento_id").empty();
                $("#prm_seguimiento_id").append(`<option value=""> Seleccione </option>`);
                $("#prm_sub_tipo_id").empty();
                $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                res.forEach(element => {
                    $("#prm_seguimiento_id").append(`<option value=${element.id}> ${element.nombre} </option>`);
                });
            });
            
        } else {
            $("#prm_seguimiento_id").empty();
            $("#prm_seguimiento_id").append(`<option value=""> Seleccione </option>`);
            $("#prm_sub_tipo_id").empty();
            $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
        }
    });
    $("#prm_seguimiento_id").change(event => {
        var area = $("select#prm_area_id option:checked").val();
        var seguimiento = $("select#prm_seguimiento_id option:checked").val();
        if (seguimiento != '') {
            $.get(`subTipoSeguimiento/`+area+`/`+seguimiento, function(res, sta){
                $("#prm_sub_tipo_id").empty();
                $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                res.forEach(element => {
                    $("#prm_sub_tipo_id").append(`<option value=${element.id}> ${element.nombre} </option>`);
                    $('[data-toggle="tooltip"]').tooltip();
                });
            });
            
        } else {
            $("#prm_sub_tipo_id").empty();
            $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
        }
    });
})

</script>