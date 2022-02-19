<script>
    $(document).ready(() => {
        var f_dependen = function(dataxxxx) {

            if (dataxxxx.dependen == '') {
                alert('Por favor seleccione priemero una dependencia');
                $('#sis_depen_id').focus();
                $("#prm_luga_acti_id,#prm_luga_acti_id  option[value=''").attr("selected",true);
                return false;
            }

            $.ajax({
                url : "{{ route('diariaxx.dependen') }}",
                data : dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $(json.emptyxxx).empty();
                    $.each(json.combosxx,function(i,d){
                        $.each(d.comboxxx,function(j,dd){
                            $('#'+d.selectid).append('<option  value="'+dd.valuexxx+'">'+dd.optionxx+'</option>');
                        })
                        
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });


        }



        $('#prm_luga_acti_id').change(function() {
        f_dependen({lugarxxx: $(this).val(),dependen:$('#sis_depen_id').val(),selected:[0]});

        });

    });
</script>