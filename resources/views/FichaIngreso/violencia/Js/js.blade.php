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
      
        $("#i_prm_condicion_presenta_id").change(function() {
            $("#i_prm_depto_condicion_id,  #i_prm_tiene_certificado_id, #i_prm_depto_certifica_id,#i_prm_municipio_condicion_id").empty();
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
                            $("#i_prm_municipio_certifica_id,#i_prm_municipio_condicion_id,#i_prm_depto_condicion_id,  #i_prm_tiene_certificado_id, #i_prm_depto_certifica_id").empty();
                        }
                        $.each(json[0].dptcondi, function(i, data) {
                            $('#i_prm_depto_condicion_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].muncondi, function(i, data) {
                            $('#i_prm_municipio_condicion_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].tiecerti, function(i, data) {
                            $('#i_prm_tiene_certificado_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].dptcerti, function(i, data) {
                            $('#i_prm_depto_certifica_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].muncerti, function(i, data) {
                            $('#i_prm_municipio_certifica_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
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
        $('.departam').change(function() {
            var id = $(this).prop('id').split('_')[3];
            f_municipos($(this).val(), 'i_prm_municipio_' + id + '_id', '');
        });
        var deptcond = "{{old('i_prm_depto_condicion_id')}}";
        if (deptcond != '') {
            f_municipos('{{ old("i_prm_depto_condicion_id") }}',
                'i_prm_municipio_condicion_id',
                '{{ old("i_prm_municipio_condicion_id") }}');
        }
        var deptcert = "{{old('i_prm_depto_certifica_id')}}";

        if (deptcond != '') {
            f_municipos('{{ old("i_prm_depto_certifica_id") }}',
            'i_prm_municipio_certifica_id',
            '{{ old("i_prm_municipio_certifica_id") }}');
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

        $('#i_prm_tiene_certificado_id').change(function() {
            f_departamentos($(this).val(), 'i_prm_depto_certifica_id', '')
        });
    });

            $('#violbasa').change(function() {
                f_comboSimple({
                    dataxxxx: {
                        padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                        selectxx: $(this).prop('id'),
                    },
                    urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
                    msnxxxxx:"Disculpe, existió un problema al armar el combo"
              });
             });
</script>