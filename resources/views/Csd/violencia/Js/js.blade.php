<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function() {
        $('.select2').select2({
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
        $("#prm_condicion_id").change(function() {
            $("#departamento_cond_id,  #prm_certificado_id, #departamento_cert_id,#municipio_cond_id").empty();
            if ($(this).val() != '') {
                $.ajax({
                    url: "{{ route('ajaxx.condespecial') }}",
                    data: {
                        _token: $("input[name='_token']").val(),
                        'padrexxx': $(this).val()
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(json) {
                        if (json[0].dptcondi[0].valuexxx == 1) {
                            $("#municipio_cert_id,#municipio_cond_id,#departamento_cond_id,  #prm_certificado_id, #departamento_cert_id").empty();
                        }
                        $.each(json[0].dptcondi, function(i, data) {
                            $('#departamento_cond_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].muncondi, function(i, data) {
                            $('#municipio_cond_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].tiecerti, function(i, data) {
                            $('#prm_certificado_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].dptcerti, function(i, data) {
                            $('#departamento_cert_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].muncerti, function(i, data) {
                            $('#municipio_cert_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        
        });
        var f_municipos = function(valuexxx, campoxxx, selected) {

            $.ajax({
                url: "{{ route('ajaxx.gmunicipios') }}",
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
                    alert('Disculpe, existió un problema al listar los municpios');
                },
            });
        }
        $('#departamento_cond_id').change(function() { 
            f_municipos($(this).val(), 'municipio_cond_id', '');
        });
        var deptcond = "{{old('departamento_cond_id')}}";

        if (deptcond != '') {
            f_municipos('{{ old("departamento_cond_id") }}',
                'municipio_cond_id',
                '{{ old("municipio_cond_id") }}');
        }
        $('#departamento_cert_id').change(function() {
            f_municipos($(this).val(), 'municipio_cert_id', '');
        });
        var deptcert = "{{old('departamento_cert_id')}}";
        
        if (deptcond != '') {
            f_municipos('{{ old("departamento_cert_id") }}',
            'municipio_cert_id',
            '{{ old("municipio_cert_id") }}');
        }  
        var f_departamentos = function(valuexxx, campoxxx, selected) {

            $.ajax({
                url: "{{ route('ajaxx.getDepartamentos') }}",
                data: {
                    padrexxx: valuexxx,
                    pselecte: selected,
                    campoxxx: campoxxx
                },
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    f_combo(json[0], json[1]);
                    f_combo(json[2], json[3]);
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        $('#prm_certificado_id').change(function() {
            f_departamentos($(this).val(), 'departamento_cert_id', '')
        });

    });

    function doc(valor){
	if(valor == 450 || valor == 451 || valor == 452 || valor == 936 || valor == 454){
		document.getElementById("departamento_cond_id").hidden=false;
        document.getElementById("municipio_cond_id").hidden=false;
        document.getElementById("prm_certificado_id").hidden=false;
        
	} else {
		document.getElementById("departamento_cond_id").hidden=true;
        document.getElementById("municipio_cond_id").hidden=true;
        document.getElementById("prm_certificado_id").hidden=true;
        doc1(document.getElementById('prm_certificado_id').value=228);
	}
}
function doc1(valor){
    if(valor == 227){
        document.getElementById("departamento_cert_id").hidden=false;
        document.getElementById("municipio_cert_id").hidden=false;
    } else {
        document.getElementById("departamento_cert_id").hidden=true;
        document.getElementById("municipio_cert_id").hidden=true;
    }
}

function carga() {
	doc(document.getElementById('prm_condicion_id').value);
    doc1(document.getElementById('prm_certificado_id').value);
}
window.onload=carga;
    
</script>