<script>
   $(function() {
        $('.select2').select2({
            language: "es"
        });
        $("#user_doc1_id").change(function() {
            $.ajax({
                url: "{{ route('vsiconse.responsa',$todoxxxx['vsixxxxx']->id)}}",
                type: 'GET',
                data: {
                    comboxxx:$(this).prop('id'),
                    usernotx:$(this).val()
                },
                dataType: 'json',
                success: function(json) {
                    $(json.comboxxx).empty();
                    $.each(json.dataxxxx, function(id, data) {
                        $(json.comboxxx).append('<option value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existe un problema al seleccionar el responsable');
                }
            });
        });
        @if(old('user_doc1_id')!=null)
        f_cargos({{ old('user_doc1_id') }},{{ old('user_doc2_id')  }},1);
        @endif
  });
</script>
