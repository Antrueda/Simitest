<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    maximoxx = 4000;
    $(document).ready(() => {
        countCharts('descripcion');
        $('.select2').select2({
            language: "es"
        });
    });



    let f_armarCombo = function(json) {
            $(json.emptyxxx).empty();
            $.each(json.combosxx, function(i, d) {
                $.each(d.comboxxx, function(j, dd) {
                    $('#' + d.selectid).append('<option  value="' + dd.valuexxx + '">' + dd
                        .optionxx + '</option>');
                })
            });
        }
</script>
