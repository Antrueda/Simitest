<script>
   $(function(){
    $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });


    var f_campos=function(dataxxxx){
      $("#fos_tse_id").empty();
            $.ajax({
                url : "{{ route('fossubtipo.tiposeg') }}",
                data : {
                    padrexxx:dataxxxx.valuexxx,
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                  $.each(json,function(i,d){
                    var selected='';
                    if(dataxxxx.selected==d.valuexxx){
                      selected='selected';
                    }
                    $("#fos_tse_id").append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                  });

                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });

        }

        init_contadorTal("descripcion","contadordescripcion", 4000);

function init_contadorTal(idtextarea, idcontador, max){
    $("#"+idtextarea).keyup(function(){
        updateContadorTal(idtextarea, idcontador, max);
    });
    $("#"+idtextarea).change(function(){
        updateContadorTal(idtextarea, idcontador, max);
    });

}

function updateContadorTal(idtextarea, idcontador,max){
    var contador = $("#"+idcontador);
    var ta =     $("#"+idtextarea);
    contador.html("0/"+max);
    contador.html(ta.val().length+"/"+max);
    if(parseInt(ta.val().length)>max){
        ta.val(ta.val().substring(0,max-1));
        contador.html(max+"/"+max);
    }
}

        @if(old('area_id')!=null)
          f_campos({valuexxx:{{ old('area_id') }},selected:{{old('fos_tse_id')}}});
        @endif
        $("#area_id").change(function(){
            f_campos({valuexxx:$(this).val(),selected:''});
        });
    });
</script>
