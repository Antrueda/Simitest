<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
  $(function() {
    $('.select2').select2({
      language: "es",
      //theme: 'bootstrap4'
    });


    var f_ajax = function(dataxxxx) {
      $('#in_linea_base_id, #prm_categori_id').empty();
      $('#prm_categori_id').append('<option value="">Seleccione</option>')
      $('#prm_nivelxxx_id option[value=""]').prop('selected', true)
      $.ajax({
        url: dataxxxx.url,
        type: dataxxxx.type,
        data: dataxxxx.data,
        dataType: 'json',
        success: function(json) {
          $.each(json, function(i, d) {
            $('#in_linea_base_id').append('<option value="' + d.valuexxx + '">' + d.optionxx + '</option>')
          });
          toastr.success('Linea base asignda con éxito');
        },
        error: function(xhr, status) {
          toastr.error('Disculpe, existió un problema al asignar linea base');
        }
      });
    }


    let f_categori = function(valuexxx,selected) {
      $('#prm_categori_id').empty();
      $.ajax({
        url: "{{ route($todoxxxx['permisox'].'.categori')}}",
        type: 'GET',
        data: {
          'selected': [selected],
          'valuexxx': valuexxx,
        },
        dataType: 'json',
        success: function(json) {
          $.each(json, function(i, d) {
            $('#prm_categori_id').append('<option value="' + d.valuexxx + '">' + d.optionxx + '</option>')
          });
        },
        error: function(xhr, status) {
          toastr.error('Disculpe, existió un problema al asignar linea base');
        }
      });
    }
    let  nivelxxx= '<?=old('prm_nivelxxx_id') ?>';
    let  categori= '<?=old('prm_categori_id') ?>';
    if(nivelxxx!=''){
      f_categori(nivelxxx,categori);
    }
    

    $('#prm_nivelxxx_id').change(function() {
      f_categori($(this).val(),0);
    });
  });
</script>