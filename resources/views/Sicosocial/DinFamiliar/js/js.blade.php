<script>

var table = '';
var tableS = '';


$(document).ready(function() {
    $('#cuidador').select2({
        language: "es"
    });
    $('#ausencia').select2({
        dropdownParent: $('#ausencia_div'),
        language: "es"
    });
    $('#calles').select2({
        language: "es"
    });
    $('#delitos').select2({
        language: "es"
    });
    $('#prostituciones').select2({
        language: "es"
    });
    $('#libertades').select2({
        language: "es"
    });
    $('#consumo').select2({
        language: "es"
    });
    $('#salud').select2({
        language: "es"
    });

    table = $('#{{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}').DataTable({
            "serverSide": true,
            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "ajax": {
                url: "{{ url($todoxxxx['tablasxx'][0]['urlxxxxx'])  }}",
                @if(isset($todoxxxx['dataxxxx']))
                data: {
                    @foreach($todoxxxx["tablasxx"][0]['dataxxxx'] as $dataxxxx) {
                        {
                            $dataxxxx['campoxxx']
                        }
                    }: "{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
                @endif
            },
            "columns": [
                @foreach($todoxxxx["tablasxx"][0]['columnsx'] as $columnsx) {
                    data: '{{ $columnsx["data"] }}',
                    name: '{{ $columnsx["name"] }}'
                },
                @endforeach
            ],

            "language": {
                "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
            }
        });
        tableS = $('#{{ $todoxxxx["tablasxx"][1]["tablaxxx"] }}').DataTable({
            "serverSide": true,
            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "ajax": {
                url: "{{ url($todoxxxx['tablasxx'][1]['urlxxxxx'])  }}",
                @if(isset($todoxxxx['dataxxxx']))
                data: {
                    @foreach($todoxxxx["tablasxx"][1]['dataxxxx'] as $dataxxxx) {
                        {
                            $dataxxxx['campoxxx']
                        }
                    }: "{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
                @endif
            },
            "columns": [
                @foreach($todoxxxx["tablasxx"][1]['columnsx'] as $columnsx) {
                    data: '{{ $columnsx["data"] }}',
                    name: '{{ $columnsx["name"] }}'
                },
                @endforeach
            ],

            "language": {
                "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
            }
        });
        $("#s_doc_adjunto_ar").change(function() {
            var fichero_seleccionado = $(this).val();
            var nombre_fichero_seleccionado = fichero_seleccionado.replace(/.*[\/\\]/, ''); //Eliminamos el path hasta el fichero seleccionado
            $("#s_doc_adjunto_ar_label").text(nombre_fichero_seleccionado);
        });
        $('#cuidador,#ausencia,#calles,#delitos,#prostituciones,#libertades,#consumo,#salud').change(function() {
            f_comboSimple({
                dataxxxx: {
                    padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                    selectxx: $(this).prop('id'),
                },
                urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
                msnxxxxx:"Disculpe, existió un problema al armar el combo"
            });
        });

});



function doc1(valor) {
    if(valor != '') {
        document.getElementById("prm_hogar_id").hidden=true;
        document.getElementById("prm_hogar_id").value = '';
    } else {
        document.getElementById("prm_hogar_id").hidden=false;
    }
}
function doc2(valor) {
    if(valor != '') {
        document.getElementById("prm_familiar_id").hidden=true;
        document.getElementById("prm_familiar_id").value = '';
    } else {
        document.getElementById("prm_familiar_id").hidden=false;
    }
}
function carga() {
    doc1(document.getElementById('prm_familiar_id').value)
    doc2(document.getElementById('prm_hogar_id').value)
}
window.onload = carga;

function carga() {
    doc(document.getElementById('prm_consumo_id').value)
    doc1(document.getElementById('prm_familia_id').value)
    doc2(document.getElementById('prm_consume_id').value)
  }

  window.onload = carga;

  init_contadorTa("descripcion", "contadorindescripcion", 4000);
  init_contadorTa("lugar", "contadorlugar", 4000);


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
