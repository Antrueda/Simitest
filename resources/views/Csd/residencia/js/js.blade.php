<script>
    var localidad = [

    ];

    $(document).ready(function() {
        $('#ambientes,#prm_comparte_id').select2({
            language: "es"
        });
        var f_localupz = function(dataxxxx) {
            $('#' + dataxxxx.selectxx).empty()
            $('#' + dataxxxx.selectxx).append('<option value="">Seleccione</option>')
            if (dataxxxx.dataxxxx.upzbarri == 1) {
                $('#sis_upzbarri_id').empty()
                $('#sis_upzbarri_id').append('<option value="">Seleccione</option>')
            }
            $.ajax({
                url: "{{ route('csdresidencia.locali',$todoxxxx["parametr"]) }}",
                dataType: "json",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                success: function(data) {
                    $.each(data, function name(i, d) {
                        $('#' + dataxxxx.selectxx).append('<option value="' + d.valuexxx + '">' + d.optionxx + '</option>')
                    });
                }
            });
        }
        $('#sis_localidad_id').change(function() {

            f_localupz({
                dataxxxx: {
                    upzbarri: 1,
                    padrexxx: $(this).val()
                },
                selectxx: 'sis_upz_id'
            })
        });
        $('#sis_localidad_id').change(function() {

            f_localupz({
                dataxxxx: {
                    upzbarri: 2,
                    padrexxx: $(this).val()
                },
                selectxx: 'sis_upzbarri_id'
            })
        });
    });


    function doc(valor) {
        // Urbana
        if (valor == 287) {
            document.getElementById("prm_dir_via_id").hidden = false;
            document.getElementById("dir_nombre").hidden = false;
            document.getElementById("prm_dir_alfavp_id").hidden = false;
            document.getElementById("prm_dir_bis_id").hidden = false;
            document.getElementById("prm_dir_alfabis_id").hidden = false;
            document.getElementById("prm_dir_cuadrantevp_id").hidden = false;
            document.getElementById("dir_generadora").hidden = false;
            document.getElementById("prm_dir_alfavg_id").hidden = false;
            document.getElementById("dir_placa").hidden = false;
            document.getElementById("prm_dir_cuadrantevg_id").hidden = false;
            document.getElementById("prm_estrato_id").hidden = false;
            document.getElementById("dir_complemento").hidden = false;
        }
        // Rural
        if (valor == 288) {
            document.getElementById("prm_dir_via_id").hidden = true;
            document.getElementById("dir_nombre").hidden = true;
            document.getElementById("prm_dir_alfavp_id").hidden = true;
            document.getElementById("prm_dir_bis_id").hidden = true;
            document.getElementById("prm_dir_alfabis_id").hidden = true;
            document.getElementById("prm_dir_cuadrantevp_id").hidden = true;
            document.getElementById("dir_generadora").hidden = true;
            document.getElementById("prm_dir_alfavg_id").hidden = true;
            document.getElementById("dir_placa").hidden = true;
            document.getElementById("prm_dir_cuadrantevg_id").hidden = true;
            document.getElementById("prm_estrato_id").hidden = true;
            document.getElementById("dir_complemento").hidden = false;
        }
        if (valor == 289) {
            document.getElementById("prm_dir_via_id").hidden = true;
            document.getElementById("dir_nombre").hidden = true;
            document.getElementById("prm_dir_alfavp_id").hidden = true;
            document.getElementById("prm_dir_bis_id").hidden = true;
            document.getElementById("prm_dir_alfabis_id").hidden = true;
            document.getElementById("prm_dir_cuadrantevp_id").hidden = true;
            document.getElementById("dir_generadora").hidden = true;
            document.getElementById("prm_dir_alfavg_id").hidden = true;
            document.getElementById("dir_placa").hidden = true;
            document.getElementById("prm_dir_cuadrantevg_id").hidden = true;
            document.getElementById("prm_estrato_id").hidden = true;
            document.getElementById("dir_complemento").hidden = true;
        }
    }

    function carga() {
        doc(document.getElementById('prm_dir_zona_id').value);
    }
    window.onload = carga;
</script>