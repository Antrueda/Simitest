<script>
  $(document).ready(function() {
        $('.select2').select2({
            language: "es"
        });

        var f_combo=function(dataxxxx){

$.ajax({
           url : "{{ route('fisalud.victimax',$todoxxxx['parametr']) }}",
           data : dataxxxx,
           type : 'GET',
           dataType : 'json',
           success : function(json) {
            $('#'+json.selectxx).empty();
               $.each(json.comboxxx,function(i,data){

                   $('#'+json.selectxx).append('<option '+data.selected+'  value="'+data.valuexxx+'">'+data.optionxx+'</option>')

                });
           },
           error : function(xhr, status) {
               alert('Disculpe, existió un problema');
           },
       });
}
$("#i_prm_condicion_amb_id").change(function(){
    f_combo({padrexxx:$(this).val()==''?0:$(this).val(),opcionxx:3});
})
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
            $("#" + departam + ",#" + municipi).append('<option value="">Seleccione</option>')
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
            $("#" + municipi).append('<option value="">Seleccione</>')
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
        $('#ambientes,#comparte').change(function() {
        f_comboSimple({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: $(this).prop('id'),
            },
            urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
            msnxxxxx:"Disculpe, existió un problema al armar el combo"
        });

    });


init_contadorTa("observaciones", "contadorporqueingresar", 4000);

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


    $(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Agregar Servicio');
  $('#servicio').val('');
  $('#legal').val('');
  $('#error_servicio').text('');
  $('#error_legal').text('');
  $('#servicio').css('border-color', '');
  $('#legal').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_servicio = '';
  var error_legal = '';
  var servicio = '';
  var legal = '';
  if($('#servicio').val() == '')
  {
   error_servicio = 'First Name is required';
   $('#error_servicio').text(error_servicio);
   $('#servicio').css('border-color', '#cc0000');
   servicio = '';
  }
  else
  {
   error_servicio = '';
   $('#error_servicio').text(error_servicio);
   $('#servicio').css('border-color', '');
   servicio = $('#servicio').val();
  } 
  if($('#legal').val() == '')
  {
   error_legal = 'Last Name is required';
   $('#error_legal').text(error_legal);
   $('#legal').css('border-color', '#cc0000');
   legal = '';
  }
  else
  {
   error_legal = '';
   $('#error_legal').text(error_legal);
   $('#legal').css('border-color', '');
   legal = $('#legal').val();
  }
  if(error_servicio != '' || error_legal != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+servicio+' <input type="hidden" name="hidden_servicio[]" id="servicio'+count+'" class="servicio" value="'+servicio+'" /></td>';
    output += '<td>'+legal+' <input type="hidden" name="hidden_legal[]" id="legal'+count+'" value="'+legal+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+servicio+' <input type="hidden" name="hidden_servicio[]" id="servicio'+row_id+'" class="servicio" value="'+servicio+'" /></td>';
    output += '<td>'+legal+' <input type="hidden" name="hidden_legal[]" id="legal'+row_id+'" value="'+legal+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var servicio = $('#servicio'+row_id+'').val();
  var legal = $('#legal'+row_id+'').val();
  $('#servicio').val(servicio);
  $('#legal').val(legal);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Edit Data');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("¿Seguro que quiere eliminar este servicio?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.servicio').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>Data Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one data</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
        // FIN esconde campos según la zona de residencia

    });
    function doc(valor) {
        // Urbana
        if (valor == 287) {
            document.getElementById("prm_dir_via_id").hidden = false;
            document.getElementById("dir_nombre").hidden = false;
            document.getElementById("prm_dir_alfavp_id").hidden = false;
            document.getElementById("prm_dir_bis_id").hidden = false;
            document.getElementById("prm_dir_alfabis_id").hidden = false;
            document.getElementById("prm_dir_cuadrantevp_id").hidden = false;
            document.getElementById("dir_generadora").hidden = false;
            document.getElementById("prm_dir_alfavg_id").hidden = false;
            document.getElementById("dir_placa").hidden = false;
            document.getElementById("prm_dir_cuadrantevg_id").hidden = false;
            document.getElementById("prm_estrato_id").hidden = false;
            document.getElementById("dir_complemento").hidden = false;
        }
        // Rural
        if (valor == 288) {
            document.getElementById("prm_dir_via_id").hidden = true;
            document.getElementById("dir_nombre").hidden = true;
            document.getElementById("prm_dir_alfavp_id").hidden = true;
            document.getElementById("prm_dir_bis_id").hidden = true;
            document.getElementById("prm_dir_alfabis_id").hidden = true;
            document.getElementById("prm_dir_cuadrantevp_id").hidden = true;
            document.getElementById("dir_generadora").hidden = true;
            document.getElementById("prm_dir_alfavg_id").hidden = true;
            document.getElementById("dir_placa").hidden = true;
            document.getElementById("prm_dir_cuadrantevg_id").hidden = true;
            document.getElementById("prm_estrato_id").hidden = true;
            document.getElementById("dir_complemento").hidden = false;
        }
        if (valor == 289) {
            document.getElementById("prm_dir_via_id").hidden = true;
            document.getElementById("dir_nombre").hidden = true;
            document.getElementById("prm_dir_alfavp_id").hidden = true;
            document.getElementById("prm_dir_bis_id").hidden = true;
            document.getElementById("prm_dir_alfabis_id").hidden = true;
            document.getElementById("prm_dir_cuadrantevp_id").hidden = true;
            document.getElementById("dir_generadora").hidden = true;
            document.getElementById("prm_dir_alfavg_id").hidden = true;
            document.getElementById("dir_placa").hidden = true;
            document.getElementById("prm_dir_cuadrantevg_id").hidden = true;
            document.getElementById("prm_estrato_id").hidden = true;
            document.getElementById("dir_complemento").hidden = true;
        }
    }

    function carga() {
        doc(document.getElementById('prm_dir_zona_id').value);
    }
    



    function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>