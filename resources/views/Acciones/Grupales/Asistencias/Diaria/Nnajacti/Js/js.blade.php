<script>
    $(document).ready(() => {

        let tipoacti = '{{ old("tipoacti_id") }}';
        let actividade = '{{ old("asd_actividads_id") }}';



        let f_armarCombo = function(json) {
            $(json.emptyxxx).empty();
            $.each(json.combosxx, function(i, d) {
                $.each(d.comboxxx, function(j, dd) {
                    $('#' + d.selectid).append('<option  value="' + dd.valuexxx + '">' + dd
                        .optionxx + '</option>');
                })
            });
        }
        let f_actividad = (selected, tipoacti) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoacti: tipoacti,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("nnajacti.actividad") }}',
                campoxxx: 'asd_actividads_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }    
           // tipo de actividad
        let inputTipoacti = $('#tipoacti_id');

        inputTipoacti.change(() => {
            let tipoacti = inputTipoacti.find(':selected').val();
            if (tipoacti != "") {
                $('#asd_actividads_id').attr('disabled', false);
                f_actividad(0,tipoacti);
            }else{
                $('#asd_actividads_id').attr('disabled', true);
            }      
        })


    });
</script>