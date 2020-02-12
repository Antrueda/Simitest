<script>
   $(function(){
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

        @if(old('sis_depdestino_id')!=null)
        f_campos({valuexxx:"{{old('sis_depdestino_id')}}",psalecte:"{{old('i_prm_lugar_id')}}"});
        @endif
        $('#sis_depdestino_id').change(function(){ 
            f_campos({valuexxx:$(this).val(),psalecte:''});
        });

        @if(old('area_id')!=null)
            f_formativas({valuexxx:"{{old('area_id')}}",psalecte:"{{old('ag_tema_id')}}",casosxxx:'area_id'});
        @endif

        $('#area_id').change(function(){ 
            $('#ag_tema_id,#ag_taller_id,#ag_sttema_id').empty();
            $('#ag_tema_id,#ag_taller_id').append('<option value="">Seleccione</option>')
            $('#ag_sttema_id').append('<option value="1">NO APLICA</option>')
            if($(this).val()!='')
                f_formativas({valuexxx:$(this).val(),psalecte:'',casosxxx:$(this).prop('id')});
        });
        @if(old('ag_tema_id')!=null)
            f_formativas({valuexxx:"{{old('ag_tema_id')}}",psalecte:"{{old('ag_taller_id')}}",casosxxx:'ag_tema_id'});
        @endif
        $('#ag_tema_id').change(function(){ 
            $('#ag_taller_id,#ag_sttema_id').empty();
            $('#ag_taller_id').append('<option value="">Seleccione</option>')
            $('#ag_sttema_id').append('<option value="1">NO APLICA</option>')
            if($(this).val()!='')
                f_formativas({valuexxx:$(this).val(),psalecte:'',casosxxx:$(this).prop('id')});
        });
        @if(old('ag_taller_id')!=null)
            f_formativas({valuexxx:"{{old('ag_taller_id')}}",psalecte:"{{old('ag_sttema_id')}}",casosxxx:'ag_taller_id'});
        @endif
        $('#ag_taller_id').change(function(){ 
            $('#ag_sttema_id').empty();
            $('#ag_sttema_id').append('<option value="1">NO APLICA</option>')
            if($(this).val()!='')
                f_formativas({valuexxx:$(this).val(),psalecte:'',casosxxx:$(this).prop('id')});
        });


        $("#d_registro").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: {{ $todoxxxx['tiempoxx'] }},
            maxDate:'+0d',
            yearRange: "-70:+0",
            onSelect: function(dateText) {
            }
        });
    });
</script>   