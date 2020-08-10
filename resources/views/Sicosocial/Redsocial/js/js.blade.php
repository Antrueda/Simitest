<script>

var table = '';
var tableS = '';


$(document).ready(function() {

    $('#motivos').select2({
        dropdownParent: $('#motivos_div'),
        language: "es"
    });
    $('#accesos').select2({
        dropdownParent: $('#accesos_div'),
        language: "es"
    });
    $('#servicios').select2({
        language: "es"
    });
    $('#servicios1').select2({
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
});

function doc(valor){
    if(valor == 228){
        document.getElementById("motivos_div").hidden=true;
        document.getElementById("motivos").value=[];
        document.getElementById("prm_quien_id").hidden=true;
    } else {
        document.getElementById("motivos_div").hidden=false;
        document.getElementById("prm_quien_id").hidden=false;
    }
}
function doc1(valor){
    if(valor == 228){
        document.getElementById("accesos_div").hidden=true;
    } else {
        document.getElementById("accesos_div").hidden=false;
    }
}
function doc2(valor){
    if(valor == 228){
        document.getElementById("prm_protector_id").hidden=true;
    } else {
        document.getElementById("prm_protector_id").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('prm_dificultad_id').value);
    doc1(document.getElementById('prm_acceso_id').value);
    doc2(document.getElementById('prm_presenta_id').value);
}
window.onload=carga;
</script>
