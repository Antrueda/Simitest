<script>
  $(document).ready(function(){
    $('#prm_upi_id,#user_doc1').select2({
      language: "es"
    });
    $('#apoyo_id').select2({
      language: "es"
    });
    $('#user_doc2').select2({
      language: "es"
    });
 

        var f_sede = function(selected, upixxxxx,padrexxx) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    cabecera: true,
                    upixxxxx: upixxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("inscricon.sede") }}',
                campoxxx: 'sede_id',
                mensajex: 'Exite un error al cargar las sedes'
            }
            f_comboGeneral(dataxxxx);
        }
        var f_progra = function(selected, upixxxxx,padrexxx) {
           
            let dataxxxx = {
                dataxxxx: {
                    padrexxx:padrexxx,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("inscricon.program") }}',
                campoxxx: 'progra_id',
                mensajex: 'Exite un error al cargar los programas'
            }
            f_comboGeneral(dataxxxx);
        }
        var f_tipopro = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("inscricon.tipopro") }}',
               campoxxx: 'tipop_id',
               mensajex: 'Exite un error al cargar los tipos de programas'
           }
           f_comboGeneral(dataxxxx);
       }
       var f_modal = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("inscricon.modalida") }}',
               campoxxx: 'modal_id',
               mensajex: 'Exite un error al cargar las modalidades'
           }
           f_comboGeneral(dataxxxx);
       }

      
        $('#conve_id').change(() => {
            let upixxxxx = $('#upi_id').val();
            let servicio = $('#conve_id').val();
            let cabecera = true
            f_sede(0,upixxxxx,servicio);
            f_progra(0,upixxxxx,servicio);
            f_tipopro(0,upixxxxx,servicio);
            f_modal(0,upixxxxx,servicio);
        });

        let servicio = '{{old("conve_id")}}';
        if (servicio !== '') { 
            let upixxxxx = $('#upi_id').val();
            let convenio='{{old("sede_id")}}';
            let programa='{{old("progra_id")}}';
            let tipoprox='{{old("tipop_id")}}';
            let modalxxx='{{old("modal_id")}}';
            f_sede(convenio,upixxxxx,servicio);
            f_progra(programa,upixxxxx,servicio);
            f_tipopro(tipoprox,upixxxxx,servicio);
            f_modal(modalxxx,upixxxxx,servicio);
            
        }
     
  });


  
  
  
  

  init_contadorTa("observaciones", "contadorobservaciones", 500);

  
  
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
function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }

window.onload = updateContadorTa();
</script>
