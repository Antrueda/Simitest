<script>
  $(function() {
    $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });
    var campos = function(dataxxxx) {
      $.ajax({
        url: "{{ route('grupregu.combos',$todoxxxx['parametr']) }}",
        dataType: "json",
        type: 'GET',
        data: dataxxxx.dataxxxx,
        success: function(data) {
          $(data.campempt).empty();
          $(data.selectxx).append('<option value="">Seleccione</option>');
          $.each(data.dataxxxx, function(i, d) {
            var selected = '';
            if (dataxxxx.pselecte == d.valuexxx) {
              selected = 'selected';
            }
            $("#"+data.campoxxx).append('<option ' + selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
          });
        }
      });
    }



    $('#sis_tabla_id').change(function() {
      campos({
        dataxxxx: {
          tablaxxx: $(this).val(), // saber las preguntas que ya se le han asignado al documento
          grupoxxx: "{{ $todoxxxx['grupoxxx']->id }}",
          opcionxx: 1
        },
        pselecte: ''
      });
    });

    $('#sis_campo_tabla_id').change(function() {
      campos({
        dataxxxx: {
          tablaxxx: $(this).val(), // saber las preguntas que ya se le han asignado al documento
          grupoxxx: "{{ $todoxxxx['grupoxxx']->id }}",
          opcionxx: 2,
          campoxxx: $('#sis_campo_tabla_id').val(),
        },
        pselecte: ''
      });
    });
  });
</script>
