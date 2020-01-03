<script>
    $(document).ready(function(){
        $("#area_id").change(event => {
            var area = $("select#area_id option:checked").val();
            console.log(area);
            if(area != ''){
                $.get(`tiposeguimientos/`+area, function(res, sta){
                    $("#seg_id").empty();
                    $("#seg_id").append(`<option value=""> Seleccione... </option>`);
                    res.forEach(element => {
                        $("#seg_id").append(`<option value=${element.id}> ${element.nombre} </option>`);
                    });
                });
            } else{
                $("#seg_id").empty();
                $("#seg_id").append(`<option value=""> Seleccione... </option>`);
            }
        });
    });
</script>