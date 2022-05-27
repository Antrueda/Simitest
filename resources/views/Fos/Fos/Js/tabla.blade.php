<script>
   var table ='';
$(document).ready(function() {
    @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[5, 10, 20, 25, 50], [5, 10, 20, 25, 50]],
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
        "columns":[
            @foreach($tablasxx['columnsx'] as $columnsx)
                {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
            @endforeach
        ],
        dom: "Blfrtip",
        buttons: [
                    {
                        text: 'csv',
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    {
                        text: 'excel',
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    {
                        text: 'pdf',
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    {
                        text: 'print',
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    
                ],
        columnDefs: [{
            orderable: false,
            targets: -1
        }] 
   
    });
    $("ul li ul li").click(function() {
    var i = $(this).index() + 1
    var table = $('#quiztable').DataTable();
    if (i == 1) {
        table.button('.buttons-csv').trigger();
    } else if (i == 2) {
        table.button('.buttons-excel').trigger();
    } else if (i == 3) {
        table.button('.buttons-pdf').trigger();
    } else if (i == 4) {
        table.button('.buttons-print').trigger();
    } 
});
  @endforeach
} );
</script>

$(document).ready(function() {
    $('#quiztable').DataTable({
        dom: "Blfrtip",
        buttons: [
            {
                text: 'csv',
                extend: 'csvHtml5',
            },
            {
                text: 'excel',
                extend: 'excelHtml5',
            },
            {
                text: 'pdf',
                extend: 'pdfHtml5',
            },
            {
                text: 'print',
                extend: 'print',
            },  
        ],
        columnDefs: [{
            orderable: false,
            targets: -1
        }] 
    });
});