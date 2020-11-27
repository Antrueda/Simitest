<script>
  $(document).ready(function() {
    $('.select2').select2({
          language: "es"
          });
  var dataurlx = '';
          @if (isset($todoxxxx['nnajregi']))
          dataurlx = {
          url:"{{ url($todoxxxx['urlxxxxx'])  }}",
                  data:{nnajxxxx:{{ $todoxxxx['nnajregi'] }}}
          }
  @else
          dataurlx = {
          url:"{{ url($todoxxxx['urlxxxxx'])  }}"
          }
  @endif

          $('#{{ $tableName }}').DataTable({
  "serverSide": true,
          "ajax":dataurlx,
          "columns":[
                  @foreach($todoxxxx['columnsx'] as $columnsx)
          {data:'{{ $columnsx["data"] }}', name:'{{ $columnsx["name"] }}'},
                  @endforeach
          ],
          "language": {
          "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
          }
  });
  });





  @if (isset($todoxxxx['nnajregi']))
          $(function(){

          var f_combo = function(dataxxxx){
          $('#i_prm_subarea_ajuste_id').empty();
          $.ajax({
          url: "{{ route('is.intervencion.subarea',$todoxxxx['nnajregi'])}}",
                  type: 'POST',
                  data: {_token: $("input[name='_token']").val(),
                          'areaxxxx':dataxxxx.valuexxx,
                  },
                  dataType: 'json',
                  success: function (json) {
                  $.each(json.subareax, function(id, data){
                  var selected = '';
                  if (data.valuexxx == dataxxxx.selected){
                  selected = 'selected';
                  }
                  $('#i_prm_subarea_ajuste_id').append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                  });
                  },
                  error: function (xhr, status) {
                  alert('Disculpe, existe un problema');
                  }
          });
          }
          $('#i_prm_area_ajuste_id').change(function(){
                f_combo({valuexxx:$(this).val(), selected:''})
                
          });
          
      
          @if (old('i_prm_area_ajuste_id'))
                  f_combo({valuexxx:{{ old('i_prm_area_ajuste_id') }}, selected:'{{ old("i_prm_subarea_ajuste_id") }}'})
                  @endif


          });

          $(function(){

                var f_combo2 = function(dataxxxx){
                $('#i_prm_area_ajuste_id,#i_prm_subarea_ajuste_id').empty();
                $.ajax({
                url: "{{ route('is.intervencion.area',$todoxxxx['nnajregi'])}}",
                        type: 'POST',
                        data: {_token: $("input[name='_token']").val(),
                                'areajust':dataxxxx.valuexxx,
                        },
                        dataType: 'json',
                                success: function (json) {
                                $.each(json.areajust, function(id, data){
                                var selected = '';
                                if (data.valuexxx == dataxxxx.selected){
                                selected = 'selected';
                                }
                                $('#i_prm_area_ajuste_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                                });
                        },
                        error: function (xhr, status) {
                        alert('Disculpe, existe un problema');
                        }
                });
                }
                @if (old('i_prm_tipo_atencion_id'))
                        f_combo2({valuexxx:{{ old('i_prm_tipo_atencion_id') }}, selected:'{{ old("i_prm_tipo_atencion_id") }}'})
                @endif
                
                $('#i_prm_tipo_atencion_id').change(function(){
                        f_combo2({valuexxx:$(this).val(), selected:''})
                });
        });
  function soloLetras(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toString();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ"; //Se define todo el abecedario que se quiere que se muestre.
  especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

  tecla_especial = false
          for (var i in especiales) {
  if (key == especiales[i]) {
  tecla_especial = true;
  break;
  }
  }
  if (letras.indexOf(tecla) == - 1 && !tecla_especial){
  return false;
  }
  }

  function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
          return true;
  return /\d/.test(String.fromCharCode(keynum));
  }

  // CONTADOR DE CARACTERES
  init_contadorTal("s_objetivo_sesion", "contadorobjetivo", 4000);
  init_contadorTal("s_desarrollo_sesion", "contadordesarrollo", 4000);
  init_contadorTal("s_conclusiones_sesion", "contadorconclusiones", 4000);
  init_contadorTal("s_tareas", "contadortareas", 4000);
  init_contadorTal("s_observaciones", "contadorobservaciones", 4000);
  function init_contadorTal(idtextarea, idcontador, max)
  {
  $("#" + idtextarea).keyup(function()
  {
  updateContadorTal(idtextarea, idcontador, max);
  });
  $("#" + idtextarea).change(function()
  {
  updateContadorTal(idtextarea, idcontador, max);
  });
  }

  function updateContadorTal(idtextarea, idcontador, max)
  {
  var contador = $("#" + idcontador);
  var ta = $("#" + idtextarea);
  contador.html("0/" + max);
  contador.html(ta.val().length + "/" + max);
  if (parseInt(ta.val().length) > max)
  {
  ta.val(ta.val().substring(0, max - 1));
  contador.html(max + "/" + max);
  }

  }
  @endif


</script>


