<script>
$(document).ready(function() {
    $('#contextos').select2({
        dropdownParent: $('#contextos_div'),
        language: "es"
    });
    $('#tipos').select2({
        dropdownParent: $('#tipos_div'),
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
       
});
//
///


function doc1(valor){
    if(valor == 228 && document.getElementById('prm_dis_ori_id').value == 228||valor == 235 && document.getElementById('prm_dis_ori_id').value == 235
    ||valor == 228 && document.getElementById('prm_dis_ori_id').value == 235||valor == 235 && document.getElementById('prm_dis_ori_id').value == 228){
        document.getElementById("contextos_div").hidden=true;
        document.getElementById("contextos").value=[];
        document.getElementById("tipos_div").hidden=true;
        document.getElementById("tipos").value=[]
    } else {
        document.getElementById("contextos_div").hidden=false;
        document.getElementById("tipos_div").hidden=false;
    }
}


function doc2(valor){
    if(valor == 228 && document.getElementById('prm_dis_gen_id').value == 228||valor == 235 && document.getElementById('prm_dis_gen_id').value==235
    ||valor == 228 && document.getElementById('prm_dis_gen_id').value==235||valor == 235 && document.getElementById('prm_dis_gen_id').value==228){
        document.getElementById("contextos_div").hidden=true;
        document.getElementById("contextos").value=[];
        document.getElementById("tipos_div").hidden=true;
        document.getElementById("tipos").value=[]
     } else {
        document.getElementById("contextos_div").hidden=false;
        document.getElementById("tipos_div").hidden=false;
        
    }
}



function carga() {
    doc1(document.getElementById('prm_dis_gen_id').value);
    doc2(document.getElementById('prm_dis_ori_id').value);
}
window.onload=carga;
</script>
