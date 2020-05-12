<script>
  $(function() {
    $('.select2').select2({
      language: "es"
    });

    var campos = function(dataxxxx) {

      $(dataxxxx.campempt).empty();
      $.ajax({
        url: "{{ route('di.docindicador.combos',$todoxxxx['parametr']) }}",
        dataType: "json",
        type: 'GET',
        data: dataxxxx.dataxxxx,
        success: function(data) {
          $.each(data, function(i, d) {
            var selected = '';
            if (d.valuexxx == dataxxxx.pselecte) {
              selected = 'selected';
            }
            $("#" + dataxxxx.comboxxx).append('<option ' + selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
          });
        }
      });
    }



    $('#sis_tabla_id').change(function() {
      campos({
          dataxxxx: {
            tablaxxx: $(this).val(), // saber las preguntas que ya se le han asignado al documento
            grupoxxx: "{{ $todoxxxx['grupoxxx']->id }}",
            opcionxx:1
          },
          campempt:'#sis_campo_id,#in_pregunta_id',
          pselecte:'',
          comboxxx:'sis_campo_id'
        }

      );
    });
  });
</script>