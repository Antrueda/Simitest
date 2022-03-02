<script>
   $(function(){
    $('#sis_deporigen_id').select2({
      language: "es"
    });
    $('#sis_depdestino_id').select2({
      language: "es"
    });
        var f_campos=function(dataxxxx){
            $.ajax({
                url : "{{ url('api/ag/espacios') }}",
                data : {
                    padrexxx:dataxxxx.valuexxx,
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $("#"+json.campoxxx).attr("readonly", json.readonly);
                    //$("#"+json.campoxxx).val('');
                    getCombo(dataxxxx,json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }

        var f_formativas=function(dataxxxx){
            $.ajax({
                url : "{{ url('api/ag/formativas') }}",
                data : dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    getCombo(dataxxxx,json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var f_tooltip=function(dataxxxx){
        var propieda=dataxxxx.thisxxxx.attr('propiedad');
        var elemento=$("#"+propieda+' option:selected').val();
        $.ajax({
            url :  "{{url('api/tooltip/tooltip')}}",
            data : { idxxxxxx : elemento,casosxxx: propieda},
            type : 'GET',
            dataType : 'json',
            success : function(json) {
                dataxxxx.thisxxxx.attr('data-original-title',json.tooltipx) ;
                dataxxxx.thisxxxx.tooltip();
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
        });



    }

    $(".mouseover").hover(function () {
        f_tooltip({'thisxxxx':$(this)});
    });

        @if(old('sis_depdestino_id')!=null)
        f_campos({valuexxx:"{{old('sis_depdestino_id')}}",psalecte:"{{old('i_prm_lugar_id')}}"});
        @endif
        $('#sis_depdestino_id').change(function(){
            $('#s_prm_espac').val('');
            f_campos({valuexxx:$(this).val(),psalecte:''});
        });

        @if(old('area_id')!=null)
            f_formativas({valuexxx:"{{old('area_id')}}",psalecte:"{{old('ag_tema_id')}}",casosxxx:'area_id'});
        @endif

        $('#area_id').change(function(){
            $('#ag_tema_id,#ag_taller_id,#ag_sttema_id').empty();
            $('#ag_tema_id,#ag_taller_id').append('<option value="">SELECCIONE</option>')
            $('#ag_sttema_id').append('<option value="1">N/A</option>')
            if($(this).val()!='')
                f_formativas({valuexxx:$(this).val(),psalecte:'',casosxxx:$(this).prop('id')});
        });
        @if(old('ag_tema_id')!=null)
            f_formativas({valuexxx:"{{old('ag_tema_id')}}",psalecte:"{{old('ag_taller_id')}}",casosxxx:'ag_tema_id'});
        @endif
        $('#ag_tema_id').change(function(){
            $('#ag_taller_id,#ag_sttema_id').empty();
            $('#ag_taller_id').append('<option value="">SELECCIONE</option>')
            $('#ag_sttema_id').append('<option value="1">N/A</option>')
            if($(this).val()!='')
                f_formativas({valuexxx:$(this).val(),psalecte:'',casosxxx:$(this).prop('id')});
        });
        @if(old('ag_taller_id')!=null)
            f_formativas({valuexxx:"{{old('ag_taller_id')}}",psalecte:"{{old('ag_sttema_id')}}",casosxxx:'ag_taller_id'});
        @endif
        $('#ag_taller_id').change(function(){
            $('#ag_sttema_id').empty();
            $('#ag_sttema_id').append('<option value="1">N/A</option>')
            if($(this).val()!='')
                f_formativas({valuexxx:$(this).val(),psalecte:'',casosxxx:$(this).prop('id')});
        });

        $("#s_doc_adjunto_ar").change(function() {
            var fichero_seleccionado = $(this).val();
            var nombre_fichero_seleccionado = fichero_seleccionado.replace(/.*[\/\\]/, ''); //Eliminamos el path hasta el fichero seleccionado
            $("#s_doc_adjunto_ar_label").text(nombre_fichero_seleccionado);
        });

        $('#d_registro').mask('0000-00-00');
        $("#d_registro").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: new Date(<?=$todoxxxx['inicioxx'][0]?>, <?=$todoxxxx['inicioxx'][1]-1?>, <?=$todoxxxx['inicioxx'][2]?>),
            maxDate: new Date(<?=$todoxxxx['actualxx'][0]?>, <?=$todoxxxx['actualxx'][1]-1?>, <?=$todoxxxx['actualxx'][2]?>),
        });

    });
</script>
