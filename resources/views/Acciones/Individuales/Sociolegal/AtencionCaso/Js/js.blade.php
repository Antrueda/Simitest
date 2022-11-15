<script>
  $(document).ready(function(){
    
    $('.select2').select2({
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
            console.log(datadepa)
        });
        $(".departam").change(function() {
            datamuni($(this).prop('id'), $(this).val(), '')
        });

        var dataupz = function(campoxxx, valuexxx, selected) {

            var departam = 'upz_id';
            var municipi = 'sis_upzbarrio_id';
            var routexxx = "{{ route('acasojur.upz') }}";

            $("#" + departam + ",#" + municipi).empty();
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'upzxxx': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: departam
            }
            if (valuexxx != '') {
                f_ajax(dataxxxx, selected);
            }
        }
        var databarrio = function(campoxxx, valuexxx, selected) {

            var municipi = 'sis_upzbarrio_id';
            var routexxx = "{{ route('acasojur.barrio') }}"

            $("#" + municipi).empty();
            
            dataxxxx = {
                url: routexxx,
                data: {
                    _token: $("input[name='_token']").val(),
                    'barrio': valuexxx
                },
                type: 'POST',
                datatype: 'json',
                campoxxx: municipi
            }
            if (valuexxx != '') {
                f_ajax(dataxxxx, selected);
            }
        }

        @if(old('localidad_id') !== null)
        dataupz('localidad_id', "{{old('localidad_id')}}", "{{old('upz_id')}}");

            @if(old('upz_id') !== null)
            databarrio('upz_id', "{{old('upz_id')}}", "{{old('sis_upzbarrio_id')}}");
            @endif
        @endif

        $(".upzxxx").change(function() {
            dataupz($(this).prop('id'), $(this).val(), '');
            
        });
        $(".barrio").change(function() {
            databarrio($(this).prop('id'), $(this).val(), '')
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
            $("#temac_id").empty();
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
        $("#consultaca").limiter(4000, elem);

        var elem = $("#asesor");
        $("#asesoriaca").limiter(4000, elem);

        var elem = $("#apoder");
        $("#apoderado").limiter(500, elem);
        


  });









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
    function doc2(valor){
        console.log(valor==805);
        if(valor == 805){
             document.getElementById("paren_div").hidden=true;
            }else{
            document.getElementById("paren_div").hidden=false;
         }
    } 
       
  
    function doc3(valor){
        if(valor == 227){
            document.getElementById("prm_juzgado").hidden=false;
            document.getElementById("num_proceso").hidden=false;

            
            
    }else{
        document.getElementById("prm_juzgado").hidden=true;
        document.getElementById("num_proceso").hidden=true;

        
        } 
  
    } 
        


    function carga() {
        doc(document.getElementById('i_prm_ha_estado_pard_id').value);
        doc1(document.getElementById('centro_id').value);
        doc2(document.getElementById('prm_solicita_id').value);
        
    }
    window.onload=carga;

    $( window ).on( "load", function() {
        document.getElementById('consultaca').onkeyup = function () {
        document.getElementById('count').innerHTML = (0 + this.value.length)+"/4000" ;
        };
    });

</script>
