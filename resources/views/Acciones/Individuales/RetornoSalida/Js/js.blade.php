<script>
  $(document).ready(function(){
    $('#prm_upi_id').select2({
      language: "es"
    });
    $('#responsable').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });
    $('#prm_parentezco_id').select2({
      language: "es"
    });


    var f_repsable = function(dataxxxx) {
            $.ajax({
                url: "{{ route('aisalidamenores.responsa')}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) { 
                    $(json.campoxxx).empty();
                    $.each(json.comboxxx, function(id, data) { console.log(data)
                        $(json.campoxxx).append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existe un problema as buscar el responsable de la upi');
                }
            });
        }
        $('#prm_upi_id').change(function() {
          f_repsable({dataxxxx:{padrexxx:$(this).val(),selected:''}})
        });

  });
</script>