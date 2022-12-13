<script>
  $(document).ready(function(){
    $('#diag_id').select2({
      language: "es"
    });

    $('#edadxxxx').on('change keyup','#aniosxxx',function(){
        $.ajax({
            url: "{{ route('fidatbas.cafecnac') }}",
            data: {
                'padrexxx': $(this).val()
            },
            type: 'GET',
            dataType: 'json',
            success: function(json) {
               $('#d_nacimiento').val(json.fechaxxx)
               $('#aniosxxx').val(json.edadxxxx)
            },
            error: function(xhr, status) {
                alert('Disculpe, existió un problema al calcular la fecha de nacimiento');
            },
        });
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
                    if (dataxxxx.data.fechaxxx) {
                        var edadxxxx = eval(json[0].edadxxxx)
                        $("#prm_estado_civil_id,#prm_identidad_genero_id,#prm_orientacion_sexual_id,#prm_sexo_id").empty();
                        $("#prm_estado_civil_id,#prm_identidad_genero_id,#prm_orientacion_sexual_id,#prm_sexo_id").append('<option value="" >Seleccione</option>');
                        if (edadxxxx <= 14) {
                            $("#prm_estado_civil_id,#prm_identidad_genero_id,#prm_orientacion_sexual_id").empty();
                        }

                        $.each(json[0].orientac, function(i, d) {
                            var selected = '';
                            if (dataxxxx.orientac == d.valuexxx) {
                                selected = 'selected';
                            }
                            $("#prm_orientacion_sexual_id").append('<option ' + selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
                        });
                        $.each(json[0].generoxx, function(i, d) {
                            var selected = '';
                            if (dataxxxx.generoxx == d.valuexxx) {
                                selected = 'selected';
                            }
                            $("#prm_identidad_genero_id").append('<option ' + selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
                        });
                        $.each(json[0].estacivi, function(i, d) {
                            var selected = '';
                            if (dataxxxx.estadoxx == d.valuexxx) {
                                selected = 'selected';
                            }
                            $("#prm_estado_civil_id").append('<option ' + selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
                        });
                        $.each(json[0].sexoxxxx, function(i, d) {
                            var selected = '';
                            if (dataxxxx.sexoxxxx == d.valuexxx) {
                                selected = 'selected';
                            }
                            $("#prm_sexo_id").append('<option ' + selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
                        });

                        //f_situacion_militar(edadxxxx);
                        $('#aniosxxx').val(edadxxxx)
                    } else {
                        $.each(json, function(i, data) {
                            var selected = '';
                            if (eval(data.valuexxx) == eval(pselecte)) {
                                selected = 'selected'
                            }
                            $('#' + dataxxxx.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                        });
                    }

                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var datadepa = function(campoxxx, valuexxx, selected) {
            var localida = false;
            var routexxx = "{{ route('ajaxx.departamento') }}"
            var municipi = 'sis_municipioexp_id';
            var departam = 'sis_departamexp_id';
            if (campoxxx == 'sis_pai_id') {
                municipi = 'sis_municipio_id';
                departam = 'sis_departam_id';
            } else if (campoxxx == 'sis_localidad_id') {
                departam = 'sis_upz_id';
                municipi = 'sis_upzbarri_id';
                routexxx = "{{ route('ajaxx.upz') }}";
                localida = true;
            }

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
                if (valuexxx != 2 && !localida) {
                    $("#" + departam + ",#" + municipi).empty();
                    $("#" + departam + ",#" + municipi).append('<option value="1">N/A</>')
                    return false;
                }
                f_ajax(dataxxxx, selected);
            }
        }
        var datamuni = function(campoxxx, valuexxx, selected) {
            var routexxx = "{{ route('fidatbas.municipio') }}"
            var municipi = 'sis_municipioexp_id';
            if (campoxxx == 'sis_departam_id') {
                municipi = 'sis_municipio_id';
            } else if (campoxxx == 'sis_upz_id') {
                municipi = 'sis_upzbarri_id';
                routexxx = "{{ route('ajaxx.barrio') }}"
            } else if (campoxxx == 'prm_etnia_id') {
                municipi = 'prm_poblacion_etnia_id';
                routexxx = "{{ route('ajaxx.poblacionetnia') }}"
            }
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



        $(".sispaisx").change(function() {
            datadepa($(this).prop('id'), $(this).val(), '');
        });
        $(".departam").change(function() {
            datamuni($(this).prop('id'), $(this).val(), '')
        });
        


      

  });

  function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }


</script>
