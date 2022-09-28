<script>
  $(document).ready(function(){
    
    $('#areas').select2({
      language: "es"
    });
    $('#user_id').select2({
      language: "es"
    });
    $('#prm_upi2_id').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });

    $('#checki').val(1);
    $('#checkbox1').change(function(){
      if(this.checked){
      $('#autoUpdate').slideDown();
      $('#checki').val(1);
        }else{
            $('#autoUpdate').slideUp();
            $('#checki').val(0);
        }
     
      });
});
      $(function() {
        var f_ajax = function(dataxxxx, pselecte) {
            $.ajax({
                url: dataxxxx.url,
                data: dataxxxx.data,
                type: dataxxxx.type,
                dataType: dataxxxx.datatype,
                success: function(json) {
                    if (json[0].valuexxx == 1) {
                        $("#" + dataxxxx.campoxxx).empty();
                    }
                    $.each(json, function(i, data) {
                        var selected = '';
                        if (eval(data.valuexxx) == eval(pselecte)) {
                            selected = 'selected'
                        }
                        $('#' + dataxxxx.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                    });


                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var datadepa = function(campoxxx, valuexxx, selected) {

            var departam = 'sis_upz_id';
            var municipi = 'sis_upzbarri_id';
            var routexxx = "{{ route('ajaxx.upz') }}";

            $("#" + departam + ",#" + municipi).empty();
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'sispaisx': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: departam
            }
            if (valuexxx != '') {
                f_ajax(dataxxxx, selected);
            }
        }
        var datamuni = function(campoxxx, valuexxx, selected) {

            var municipi = 'sis_upzbarri_id';
            var routexxx = "{{ route('ajaxx.barrio') }}"

            $("#" + municipi).empty();
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'departam': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: municipi
            }
            if (valuexxx != '') {
                f_ajax(dataxxxx, selected);
            }
        }

        @if(old('sis_localidad_id') !== null)
        datadepa('sis_localidad_id', "{{old('sis_localidad_id')}}", "{{old('sis_upz_id')}}");

            @if(old('sis_upz_id') !== null)
                datamuni('sis_upz_id', "{{old('sis_upz_id')}}", "{{old('sis_upzbarri_id')}}");
            @endif
        @endif

        $(".sispaisx").change(function() {
            datadepa($(this).prop('id'), $(this).val(), '');
        });
        $(".departam").change(function() {
            datamuni($(this).prop('id'), $(this).val(), '')
        });

        // INICIO esconde campos según la zona de residencia
        var f_tipozona = function(valuexxx) {
       
            if (valuexxx != '') {
                // if (valuexxx == 287) {
                    $('#s_complemento').val('');
                // }
                $.ajax({
                    url: "{{ route('ajaxx.escondesitipodir') }}",
                    data: {
                        _token: $("input[name='_token']").val(),
                        'padrexxx': valuexxx
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function(json) {
                        
                        $('#s_nombre_via').prop('readonly', json[0].nomviapr);
                        $('#i_via_generadora').prop('readonly', json[0].numerovg);
                        $('#i_placa_vg').prop('readonly', json[0].placavgx);
                        $.each(json[0].tipoviax, function(i, data) {
                            $('#i_prm_tipo_via_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].alfviapr, function(i, data) {
                            $('#i_prm_alfabeto_via_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].tienebis, function(i, data) {
                            $('#i_prm_tiene_bis_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].letrabis, function(i, data) {
                            $('#i_prm_bis_alfabeto_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].cuadravp, function(i, data) {
                            $('#i_prm_cuadrante_vp_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].alfabevg, function(i, data) {
                            $('#i_prm_alfabetico_vg_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                        $.each(json[0].cuadravg, function(i, data) {
                            $('#i_prm_cuadrante_vg_id').append('<option  value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        }

        @if(old('i_prm_zona_direccion_id') != null)
        f_tipozona("{{old('i_prm_zona_direccion_id')}}");
        @endif

        @if(old('i_prm_tipo_via_id') != null)
        f_tipozona("{{old('i_prm_tipo_via_id')}}");
        @endif

        @if(old('i_prm_alfabeto_via_id') != null)
        f_tipozona("{{old('i_prm_alfabeto_via_id')}}");
        @endif

        @if(old('i_prm_tiene_bis_id') != null)
        f_tipozona("{{old('i_prm_tiene_bis_id')}}");
        @endif
        
        @if(old('i_prm_bis_alfabeto_id') != null)
        f_tipozona("{{old('i_prm_bis_alfabeto_id')}}");
        @endif

        @if(old('i_prm_cuadrante_vp_id') != null)
        f_tipozona("{{old('i_prm_cuadrante_vp_id')}}");
        @endif

        @if(old('i_prm_alfabetico_vg_id') != null)
        f_tipozona("{{old('i_prm_alfabetico_vg_id')}}");
        @endif

        @if(old('i_prm_cuadrante_vg_id') != null)
        f_tipozona("{{old('i_prm_cuadrante_vg_id')}}");
        @endif


        $("#i_prm_zona_direccion_id").change(function() {
            $('#s_nombre_via,#s_nombre_via,#i_via_generadora,#i_placa_vg').val('');
            $("#i_prm_tipo_via_id, #i_prm_alfabeto_via_id, #i_prm_tiene_bis_id, #i_prm_bis_alfabeto_id, #i_prm_cuadrante_vp_id, #i_prm_alfabetico_vg_id, #i_prm_cuadrante_vg_id").empty();
            f_tipozona($(this).val());
        });

        var f_centro = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("acasojur.centro") }}',
               campoxxx: 'censec_id',
               mensajex: 'Exite un error al cargar los centro zonales'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#centro_id').change(() => {
            let upixxxxx = $('#centro_id').val();
            let cabecera = true
            f_centro(0,upixxxxx);
            
        });
        var f_tema = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("acasojur.tema") }}',
               campoxxx: 'temac_id',
               mensajex: 'Exite un error al cargar los temas'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#tipoc_id').change(() => {
            let upixxxxx = $('#tipoc_id').val();
            let cabecera = true
            f_tema(0,upixxxxx);
            
        });


        (function($) {
            $.fn.extend( {
                limiter: function(limit, elem) {
                    $(this).on("keyup focus", function() {
                        setCount(this, elem);
                    });
                    function setCount(src, elem) {
                        var chars = src.value.length;
                        if (chars > limit) {
                            src.value = src.value.substr(0, limit);
                            chars = limit;
                        }
                        elem.html( chars+"/4000" );
                    }
                    setCount($(this)[0], elem);
                }
            });
        })(jQuery);
        var elem = $("#chars");
        $("#descripcion").limiter(4000, elem);



  });







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

    function doc(valor){
        if(valor == 227){
            document.getElementById("pard_id").hidden=false;
            document.getElementById("zonal_id").hidden=false;
            document.getElementById("bogota_id").hidden=true;
            
            
    }else{
        document.getElementById("pard_id").hidden=true;
        document.getElementById("zonal_id").hidden=true;
        document.getElementById("bogota_id").hidden=true;
        
        } 
  
    } 
    function doc1(valor){
        if(valor == 5 ||valor == 15 ){
            document.getElementById("bogota_id").hidden=false;
            
            
        }else{
        document.getElementById("bogota_id").hidden=true;
         }
      
        
        } 
  
        


    function carga() {
        doc(document.getElementById('i_prm_ha_estado_pard_id').value);
        doc1(document.getElementById('centro_id').value);
        
    }
    window.onload=carga;
    
</script>
