<script>
$(document).ready(function() {
    $('#prm_separa_id').select2({
        language: "es"
    });
});
function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
