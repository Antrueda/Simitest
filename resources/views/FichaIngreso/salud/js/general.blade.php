<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    var table = '';
    $(document).ready(function() {
        $('#i_prm_recibe_medicina_id').change(function() {
            $('#s_medicamento').val('')
            $('#s_medicamento').attr("disabled", $(this).val() == 227 ? false : true)
        });
    });
</script>
