<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
   $(function(){
    $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });

        $('#sis_esta_id').change(function() {
            f_motivos({
                dataxxxx: {
                    estadoid: $(this).val(),
                },
                selected: '',
                routexxx: "{{ route('dependencia.motivosx')}}"
            })
        });

        @if(old('sis_esta_id') !== null)
        f_motivos({
            dataxxxx: {
                estadoid: $('#sis_esta_id').val(),
            },
            selected: "{{old('estusuario_id')}}",
            routexxx: "{{ route('dependencia.motivosx')}}"
        })
        @endif


       var dataxxxy= {
           urlxxxxx:'',
           dataxxxx:'',
           selected:'',
           comboxxx:'',
           msnxxxxx:'',
           typexxxx:''
       }
       var f_combos=function(dataxxxx){
            $.ajax({
                url :   dataxxxx.urlxxxxx,
                data :  dataxxxx.dataxxxx,
                type :  dataxxxx.typexxxx,
                dataType : 'json',
                success : function(json) {
                    $.each(json,function(i,d){
                        var selected='';
                        if(d.valuexxx==dataxxxx.selected){
                            selected='selected';
                        }
                        $('#'+dataxxxx.comboxxx).append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');

                    });

                },
                error : function(xhr, status) {
                    alert(dataxxxx.msnxxxxx);
                },
            });

       }
       $("#dtiegabe").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: '-28y +0m +0d',
            maxDate: '+0y +0m +0d',
            yearRange: "-28:+0",
            onSelect: function(dateText) {
                $.ajax({
                    url: "{{ route('usuario.tiempocarga') }}",
                    data: {
                        fechaxxx: dateText
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $("#itiegabe").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });
        $("#dtiestan").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: '-28y +0m +0d',
            maxDate: '+0y +0m +0d',
            yearRange: "-28:+0",
            onSelect: function(dateText) {
                $.ajax({
                    url: "{{ route('usuario.tiempocarga') }}",
                    data: {
                        fechaxxx: dateText
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $("#itiestan").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });


        $("#dtigafin").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: '-28y +0m +0d',
            maxDate: '+0y +0m +0d',
            yearRange: "-28:+0",
            onSelect: function(dateText) {
                $.ajax({
                    url: "{{ route('usuario.tiempocarga') }}",
                    data: {
                        fechaxxx: dateText
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $("#itigafin").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });



      var f_ajax = function (departam,pselecte) {
      $.ajax({
        url: "{{ route('usuario.municipio')}}",
        type: 'POST',
        data: {_token: $("input[name='_token']").val(),
          'departam':departam
        },
        dataType: 'json',
        success: function (json) {
          $.each(json,function(i,data){
            var selected='';
            if(data.valuexxx==pselecte){
              selected='selected';
            }
            $('#sis_municipio_id').append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
          });

        },
        error: function (xhr, status) {
          alert('Disculpe, existiÃ³ un problema');
        }
      });
    }
    @if(old('sis_departamento_id')!==null)
      f_ajax({{ old('sis_departamento_id') }},{{ old('sis_municipio_id') }});
    @endif

    $('#sis_departamento_id').change(function(){
      $('#sis_municipio_id').empty();
      if($(this).val()!=''){
        f_ajax($(this).val(),'');
      }
    });

    $('#sis_localidad_id').change(function(){
        var dataxxxy= {
           urlxxxxx: "{{ route('ajaxx.upz')}}",
           dataxxxx:{
               _token: $("input[name='_token']").val(),
               sispaisx:$(this).val()
           },
           selected:'',
           comboxxx:'sis_upz_id',
           msnxxxxx:'Se presentó un error al listar las upzs',
           typexxxx:'POST'
        };
        $('#sis_upz_id,#sis_upzbarri_id').empty();
        $('#sis_upz_id,#sis_upzbarri_id').append('<option value="">Seleccione</option>');
        if($(this).val()!=''){
            f_combos(dataxxxy);
        }
    });
    $('#sis_upz_id').change(function(){
        var dataxxxy= {
           urlxxxxx: "{{ route('ajaxx.barrio')}}",
           dataxxxx:{
               _token: $("input[name='_token']").val(),
               departam:$(this).val()
           },
           selected:'',
           comboxxx:'sis_upzbarri_id',
           msnxxxxx:'Se presentó un error al listar los barrios',
           typexxxx:'POST'
        };
        $('#sis_upzbarri_id').empty();
        $('#sis_upzbarri_id').append('<option value="">Seleccione</option>');
        if($(this).val()!=''){
            f_combos(dataxxxy);
        }
    });


    @if(old('sis_localidad_id')!==null)
        var dataxxxy= {
            urlxxxxx: "{{ route('ajaxx.upz')}}",
            dataxxxx:{
                _token: $("input[name='_token']").val(),
                sispaisx:{{ old('sis_localidad_id') }}
            },
            selected:{{ old('sis_upz_id') }},
            comboxxx:'sis_upz_id',
            msnxxxxx:'Se presentó un error al listar las upzs',
            typexxxx:'POST'
        };
        f_combos(dataxxxy);

        @if(old('sis_upz_id')!==null)
            dataxxxy= {
            urlxxxxx: "{{ route('ajaxx.barrio')}}",
            dataxxxx:{
                _token: $("input[name='_token']").val(),
                departam:{{ old('sis_upz_id') }}
            },
            selected:{{ old('sis_upzbarri_id') }},
            comboxxx:'sis_upzbarri_id',
            msnxxxxx:'Se presentó un error al listar los barrios',
            typexxxx:'POST'
            };
            f_combos(dataxxxy);
        @endif
    @endif

});

</script>
