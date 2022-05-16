<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){

        let pri_nombre = $('#pri_nombre');
        let seg_nombre = $('#seg_nombre');
        let pri_apellido = $('#pri_apellido');
        let seg_apellido = $('#seg_apellido');
        let documento = $('#documento');

        $('.select2').select2({
            language: "es"
        });


        $("#pri_nombre, #pri_apellido, #documento").change(function() {
            pri_nombre.removeClass('is-invalid');
            pri_apellido.removeClass('is-invalid');
            documento.removeClass('is-invalid');
        });
        $("#documento").change(function() {
            pri_nombre.val("");
            seg_nombre.val("");
            pri_apellido.val("");
            seg_apellido.val("");
        });

        function validarCampos(){
            if (pri_nombre.val() == "" && pri_apellido.val() == "" && documento.val() == "") {
                pri_nombre.addClass('is-invalid');
                pri_apellido.addClass('is-invalid');
                documento.addClass('is-invalid');
                return false;
            }

            if (documento.val() != "") {
                return true;
            }

            if (pri_nombre.val() != "" && pri_apellido.val() != "") {
                return true;
            }else{
                if (pri_nombre.val() != "") {
                    pri_apellido.addClass('is-invalid');
                }else{
                    pri_nombre.addClass('is-invalid');
                }
            }
        }
      
        

        $(".buscar_persona").click(function() {
            cargarDataBuscar();
        });

        if(sessionStorage.getItem("busqueda-gestionmat")){
            var storedArray = JSON.parse(sessionStorage.getItem("busqueda-gestionmat"));
            pri_nombre.val(storedArray["s_primer_nombre"]),
            seg_nombre.val(storedArray["s_segundo_nombre"]),
            pri_apellido.val(storedArray["s_primer_apellido"]),
            seg_apellido.val(storedArray["s_segundo_apellido"]),
            documento.val(storedArray["s_documento"])
            cargarDataBuscar();
        }
        
        $('#DataResult').on('click', '.cargar_data', function () {
            cargarData($(this).attr("data-sisnnaj"));
        });

        function cargarDataBuscar(){
            @foreach ($todoxxxx['tablasxx'] as $tablasxx)
            let {{ $tablasxx["tablaxxx"] }} = document.getElementById('{{ $tablasxx["tablaxxx"] }}');
            if ($.fn.DataTable.fnIsDataTable({{ $tablasxx["tablaxxx"] }})) { 
                $('#{{ $tablasxx["tablaxxx"] }}').DataTable().destroy();
            }
            @endforeach
            if (validarCampos()) {
                
            data={
                    "s_primer_nombre":pri_nombre.val().toUpperCase() ,
                    "s_segundo_nombre":seg_nombre.val().toUpperCase(),
                    "s_primer_apellido":pri_apellido.val().toUpperCase(),
                    "s_segundo_apellido":seg_apellido.val().toUpperCase(),
                    "s_documento":documento.val()
                };
                ///guardar busqueda en storage
                setStoregeConsulta(data);
                // $('#sidebar-overlay').show();
                $.ajax({
                    url: "{{ route('gestmaca.buscarnnajs')}}",
                    type: 'GET',
                    data: {
                        'data': data,
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(json) {
                       var html = '';
                       if (json.data.length) {
                            json.data.forEach(element => {
                                html += '<tr>' +
                                        '<td>' + element.rn + '</td>' +
                                        '<td>' + element.s_documento + '</td>' +
                                        '<td>' + element.s_primer_nombre + ' ' + element.s_segundo_nombre +' '+ element.s_primer_apellido +' '+ element.s_segundo_apellido + '</td>' +
                                        '<td> <button class="btn btn-sm btn-primary cargar_data" type="button" data-sisnnaj='+element.sis_nnaj_id+'>SELECCIONAR</button></td>' +
                                    
                                        '</tr>';
                            });
                       }else{
                        html += '<tr><td colspan="3"><center>No se encontraron resultados para su búsqueda</center></td></tr>';
                       }
                       $('#DataResult').html(html);
                    },
                    // complete: function(){
                    //     $('#sidebar-overlay').hide();
                    // },
                    error: function(xhr, status) {
                        alert('Disculpe, existiÃ³ un problema');
                    }
                });
            }
        }

        function cargarData(valuexxx){
            
            @foreach ($todoxxxx['tablasxx'] as $tablasxx)
            
            let {{ $tablasxx["tablaxxx"] }} = document.getElementById('{{ $tablasxx["tablaxxx"] }}');
            let {{ $tablasxx["tablaxxx"] }}url='{{ route($tablasxx["urlxxxxx"],":queryId")}}';
            {{ $tablasxx["tablaxxx"] }}url = {{ $tablasxx["tablaxxx"] }}url.replace(':queryId', valuexxx);

            if ($.fn.DataTable.fnIsDataTable({{ $tablasxx["tablaxxx"] }})) { 
                $('#{{ $tablasxx["tablaxxx"] }}').DataTable().ajax.url({{ $tablasxx["tablaxxx"] }}url).load();
            }else{
                {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
                    "serverSide": true,
                    "lengthMenu":				[[5, 10, 20, 25, 50], [5, 10, 20, 25, 50]],
                    "ajax": {
                        url:{{ $tablasxx["tablaxxx"] }}url,
                    },
                    "columns":[
                        @foreach($tablasxx['columnsx'] as $columnsx)
                            {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
                        @endforeach
                    ],
                    "language": {
                        "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
                    }
                });
            }
               
            @endforeach
         }


         function setStoregeConsulta($data){
            sessionStorage.setItem('busqueda-gestionmat', JSON.stringify(data))
         }     
    });
  
</script>
