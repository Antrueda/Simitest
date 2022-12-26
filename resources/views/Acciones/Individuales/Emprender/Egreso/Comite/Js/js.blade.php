<script>
  $(document).ready(function(){
    $('.select2').select2({
      language: "es"
    });
    
    var f_motivo = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("egresocomite.motivo") }}',
               campoxxx: 'motivo_id',
               mensajex: 'Exite un error al cargar los modulos'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#cierreca_id').change(() => {
            let upixxxxx = $('#cierreca_id').val();
            let cabecera = true
            f_motivo(0,upixxxxx);
            
        });



});
$(document).on('click','#remove',function(){
            $(this).closest('tr').remove();
        });

</script>
