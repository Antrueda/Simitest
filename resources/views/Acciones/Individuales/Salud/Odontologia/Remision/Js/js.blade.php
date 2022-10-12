<script>
  $(document).ready(function(){
    $('.select2').select2({
      language: "es"
    });
    
    $('#add_btn').on('click',function(){
     var html='';
     html+='<tr>';
     html+='<td>{{Form::select('diente[]', $todoxxxx['dientesx'],null, ['class' =>'form-control form-control-sm','placeholder'=>'Seleccione']) }}</td>';
     html+='<td>Mark</td>';
     html+='<td>DOM</td>';
     html+=' <td>{{ Form::select('diag_id[]', $todoxxxx['diagnost'],null, ['class' => "form-control select2 form-control-sm"]) }}</td>';
     html+='<td><button type="button" class="btn btn-primary" id="remove"><i class="fas fa-minus"></i></button></td>';
     html+='</tr>';
     $('tbody').append(html);
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
        var elem = $("#evolu");
        $("#evolucion").limiter(4000, elem);
        var elem = $("#observa");
        $("#observacion").limiter(4000, elem);
});
$(document).on('click','#remove',function(){
            $(this).closest('tr').remove();
        });

</script>
