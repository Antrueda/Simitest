<script>
    @isset ($upisjs)
    @foreach($upisjs as $d)
      var upi_{{ $d->id }}=[ "{{ $d->s_direccion }}", "{{ $d->s_telefono }}" ];
    @endforeach
  @endisset
  $(document).ready(function(){
    $('#prm_familiar1_id').select2({
      language: "es"
    });
    $('#prm_familiar2_id').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });
    $('#user_doc2_id').select2({
      language: "es"
    });
    $('#responsable').select2({
      language: "es"
    });
        var f_combo = function(dataxxxx, campoxxx) {
            $("#" + campoxxx).empty();
            $.each(dataxxxx, function(i, data) {
                $("#" + campoxxx).append('<option ' +
                    data.selected + ' value="' +
                    data.valuexxx + '">' +
                    data.optionxx + '</option>')
            });
        }
        var f_municipos = function(valuexxx, campoxxx, selected) {
                  $.ajax({
                      url: "{{ route('ajaxx.municipios') }}",
                      data: {
                          padrexxx: valuexxx,
                          pselecte: selected,
                          campoxxx: campoxxx
                      },
                      type: 'GET',
                      dataType: 'json',
                      success: function(json) {
                          f_combo(json[0], json[1]);
                      },
                      error: function(xhr, status) {
                          alert('Disculpe, existió un problema');
                      },
                  });
                  }
                  $('#departamento_id').change(function() {
                  f_municipos($(this).val(), 'municipio_id', '');
                  });
                  var deptcond = "{{old('departamento_id')}}";

                  if (deptcond != '') {
                  f_municipos('{{ old("departamento_id") }}',
                      'municipio_id',
                      '{{ old("municipio_id") }}');
                  }
                    });

  function doc(valor){
    if(valor == 228){
      document.getElementById("tintura").hidden=true;
      document.getElementById("tintura").value='';
    } else {
      document.getElementById("tintura").hidden=false;
    }
  }

  function doc1(valor){
    if(valor != 1459){
      document.getElementById("prm_corCabello_id").hidden=false;
    } else {
      document.getElementById("prm_corCabello_id").hidden=true;
      document.getElementById("prm_corCabello_id").value='';
    }
  }

  function doc2(valor){
    if(valor == 228){
      document.getElementById("cuantos").hidden=true;
      document.getElementById("cuantos").value='';
      document.getElementById("prm_tamlunar_id").hidden=true;
      document.getElementById("prm_tamlunar_id").value='';
      
    } else {
      document.getElementById("cuantos").hidden=false;
      document.getElementById("prm_tamlunar_id").hidden=false;
    }
  }

  function doc3(valor){
    if (valor == 228) {
      document.getElementById("prm_llamada_id").hidden=true;
      document.getElementById("prm_llamada_id").value='';
      document.getElementById("radicado").hidden=true;
      document.getElementById("radicado").value='';
      document.getElementById("recibe_denuncia").hidden=true;
      document.getElementById("recibe_denuncia").value='';
      document.getElementById("institución").hidden=true;
      document.getElementById("institución").value='';
      document.getElementById("nombre_recibe").hidden=true;
      document.getElementById("nombre_recibe").value='';
      document.getElementById("cargo_recibe").hidden=true;
      document.getElementById("cargo_recibe").value='';
      document.getElementById("placa_recibe").hidden=true;
      document.getElementById("placa_recibe").value='';
      document.getElementById("fecha_denuncia").hidden=true;
      document.getElementById("fecha_denuncia").value='';
      document.getElementById("hora_denuncia").hidden=true;
      document.getElementById("hora_denuncia").value='';
} else {
      document.getElementById("prm_llamada_id").hidden=false;
      document.getElementById("radicado").hidden=false;
      document.getElementById("recibe_denuncia").hidden=false;
      document.getElementById("institución").hidden=false;
      document.getElementById("nombre_recibe").hidden=false;
      document.getElementById("cargo_recibe").hidden=false;
      document.getElementById("placa_recibe").hidden=false;
      document.getElementById("fecha_denuncia").hidden=false;
      document.getElementById("hora_denuncia").hidden=false;
      
    }
  }

  function cambiaDepartamento(departamento){
    if (departamento !== '') {
      mi_ciudad=eval("depa_" + departamento);
      num_ciudad = mi_ciudad.length;
      document.forma.municipio_id.length = num_ciudad;
      for(i=0;i<num_ciudad;i++){
        document.forma.municipio_id.options[i].value=mi_ciudad[i][0];
        document.forma.municipio_id.options[i].text=mi_ciudad[i][1];
      }
    }else{
      document.forma.municipio_id.length = 1;
      document.forma.municipio_id.options[0].value = "1";
      document.forma.municipio_id.options[0].text = "NO APLICA";
    }
    document.forma.municipio_id.options[0].selected = true;
  }

  function cambiaUpi(upi){
    if (upi !== '') {
      mi_upi=eval("upi_" + upi);
      document.getElementById("direccion").innerHTML = mi_upi[0];
      document.getElementById("telefono").innerHTML = mi_upi[1];
    }else{
      document.getElementById("direccion").innerHTML = "";
      document.getElementById("telefono").innerHTML = "";
    }
  }

  function carga(){
    doc(document.getElementById('prm_tinturado_id').value);
    doc1(document.getElementById('prm_tipCabello_id').value);
    doc2(document.getElementById('prm_tienelunar_id').value);
    doc3(document.getElementById('prm_reporta_id').value);
    cambiaUpi(document.getElementById('prm_upi_id').value);
  }
  window.onload = carga;
</script>