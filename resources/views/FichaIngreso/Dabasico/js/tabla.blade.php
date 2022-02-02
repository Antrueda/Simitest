<style>.dataTables_filter, .dataTables_info { display: none; } 
</style>
<script>

   var table ='';
$(document).ready(function() {
    @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    
        var campos=[0,0,"document","primnomb","segunomb","primapel","seguapel","dependencia",0];
        $('#{{ $tablasxx["tablaxxx"] }} #buscarxx th').each( function (i) {
            var title = $(this).text();
            var id='';
            if(campos[i]!=0){
                id='id="'+campos[i]+'"';
                $(this).html( '<input '+id+' type="text" class="autocomplete" placeholder="'+title+'" oninput="stopPropagation(event)" onclick="stopPropagation(event);"/>' );
            }else{
                $(this).html("");
            }
        } );

    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        //"processing":true,
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50, ], [5, 10, 20, 25, 50]],
        "ajax": {
            url:"{{ url($tablasxx['urlxxxxx'])  }}",
            @if(isset($tablasxx['dataxxxx']))
                data:{
                    @foreach($tablasxx['dataxxxx'] as $dataxxxx)
                    {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
            @endif
        },
        order: [[2, 'asc']],
        "columnDefs": [
        { "searchable": false,orderable: false, "targets": [0,1,8] }
        ],
        "columns":[
            @foreach($tablasxx['columnsx'] as $columnsx)
                {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
            @endforeach
        ],
        "language": {
            // 'processing': 'Cargando...',
            "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}",
        },
        initComplete: function () {
            // Apply the search
            
            this.api().columns().every( function () {
                var that = this;

                $('input', this.header()).on( 'keyup', function () {                       
                    if(that.search() !== this.value && this.value == ''){
                        that
                            .search( this.value )
                            .draw();
                    }
                });

                $('input', this.header()).on( 'keydown clear', function (ev) {

                    if(ev.type === 'keydown' && ev.keyCode === 13){
                        ev.preventDefault();
                    }

                    if (ev.keyCode == 13) {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        } 
                    }
                } );
            } );
        }
    });
  @endforeach

$("#datatable").on('click','.actuanti',function(){
    $('#docuagre').val($(this).prop('id'))
        $('#agregarx').submit()
});
  $( "#datatable" ).on("keydown.autocomplete",".autocomplete",function(e){
      var idcampox=$(this).prop('id');
//     $(this).autocomplete({
//       source:

//       function( request, response ) {
//         $.ajax( {
//           url: "{{ route('fidatbas.buscnnaj') }}",
//           dataType: "json",
//           data: {
//               document:document.getElementById("document").value,
//               primnomb:document.getElementById("primnomb").value,
//               segunomb:document.getElementById("segunomb").value,
//               primapel:document.getElementById("primapel").value,
//               seguapel:document.getElementById("seguapel").value,
//               idcampox:idcampox
//           },
//           success: function( data ) {
//             response( data );
//           }
//         } );
//       },
//       minLength: 1,
//       select: function( event, ui ) {
//         ui.item.value=ui.item.defectox;
//         document.getElementById("document").value=ui.item.document;
//         document.getElementById("primnomb").value=ui.item.primnomb;
//         document.getElementById("segunomb").value=ui.item.segunomb;
//         document.getElementById("primapel").value=ui.item.primapel;
//         document.getElementById("seguapel").value=ui.item.seguapel;
//         $('#docuagre').val(ui.item.document)
//         $('#agregarx').submit()

//         // {{ $tablasxx["tablaxxx"] }}.ajax.reload();
//         // {{ $tablasxx["tablaxxx"] }}.ajax.reload();
//             // $(this).val( ui.item.document);
// //             setInterval( function () {
// //                 {{ $tablasxx["tablaxxx"] }}.ajax.reload();
// // }, 300 );
//         console.log(  ui.item );
//       }
    // } );

  });




} );

function stopPropagation(evt) {
    if (evt.stopPropagation !== undefined) {
        evt.preventDefault();
        evt.stopPropagation();
    } else {
        evt.cancelBubble = true;
    }
}

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
