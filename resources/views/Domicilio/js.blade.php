<script>
$(document).ready(function() {
    $('#tabla').DataTable({
        "serverSide": true,
        "ajax": "{{ url('api/csd/nnajs') }}",
        "columns": [
            {data: 'botones'},
            {data: 's_primer_nombre'},
            {data: 's_segundo_nombre'},
            {data: 's_primer_apellido'},
            {data: 's_segundo_apellido'},
            {data: 's_apodo'},
            {data: 's_nombre_identitario'},
        ],
        "language": {
            "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
        }
    });
});
</script>