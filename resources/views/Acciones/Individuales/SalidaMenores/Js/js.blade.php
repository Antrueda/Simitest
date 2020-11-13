<script>
  $(document).ready(function(){
    $('#prm_upi_id').select2({
      language: "es"
    });
    $('#objetivo').select2({
      language: "es"
    });
    $('#prm_parentezco2_id').select2({
      language: "es"
    });
    $('#prm_upi2_id').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });
    var f_cargos = function(dataxxxx) {
            $.ajax({
                url: "{{ route('aisalidamenores.cargos',$todoxxxx['usuariox']->id)}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) {
                    $(json.campoxxx).empty();
                    $(json.campcarg).text(json.cargoxxx);
                    $.each(json.comboxxx, function(id, data) {
                        var selected = '';
                        if (data.valuexxx == dataxxxx.selected) {
                            selected = 'selected';
                        }
                        $(json.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existe un problema');
                }
            });
        }

        @if(old('sis_depend_id') != null)
            f_cargos({
                dataxxxx: {
                    valuexxx: "{{old('userr_id')}}",
                    campoxxx: 'userr_id',
                    selected: '{{old("sis_depend_id")}}'
            }});
        @endif
        $('.cargos').change(function() {
            f_cargos({
                dataxxxx: {
                    valuexxx: $(this).val(),
                    campoxxx: $(this).prop('id')
                },
                selected: ''
            });
        });


        $('#s_documento').mask('000000000000');
        $('#s_documento_responsable').mask('000000000000');
  });
init_contadorTa("descripcion", "contadordescripcion", 4000);
init_contadorTa("objetos", "contadordescripcion1", 4000);
init_contadorTa("causa", "contadordescripcion2", 4000);


function init_contadorTa(idtextarea, idcontador, max) {
    $("#" + idtextarea).keyup(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
    $("#" + idtextarea).change(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
}

function updateContadorTa(idtextarea, idcontador, max) {
    var contador = $("#" + idcontador);
    var ta = $("#" + idtextarea);
    contador.html("0/" + max);
    contador.html(ta.val().length + "/" + max);
    if (parseInt(ta.val().length) > max) {
        ta.val(ta.val().substring(0, max - 1));
        contador.html(max + "/" + max);
    }

}
</script>
