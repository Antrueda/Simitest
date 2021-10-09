<script>
  $(function() {
    $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });
    var f_campos = function(valuexxx) {
      $('#i_prm_nivel_id,#i_prm_categoria_id').empty();
      $.ajax({
        url: "{{ route('valoraci.valoracion') }}",
        data: {
          _token: $("input[name='_token']").val(),
          avancexx: valuexxx,
          cateactu: $('#i_prm_cactual_id').val(),
          padrexxx: "{{$todoxxxx['paddrexx']->id}}"
        },
        type: 'POST',
        dataType: 'json',
        success: function(json) {
          $.each(json.nivelxxx, function(i, d) {
            $('#i_prm_nivel_id').append('<option  value="' + d.valuexxx + '">' + d.optionxx + '</option>');
          });
          $.each(json.categori, function(i, d) {
            $('#i_prm_categoria_id').append('<option  value="' + d.valuexxx + '">' + d.optionxx + '</option>');
          });
        },
        error: function(xhr, status) {
          alert('Disculpe, existió un problema');
        },
      });
    }
    @if(old('i_prm_avance_id') != null)
    f_campos("{{old('i_prm_avance_id')}}");
    @endif
    $('#i_prm_avance_id').change(function() {
      f_campos($(this).val());
    });
  });
</script>
