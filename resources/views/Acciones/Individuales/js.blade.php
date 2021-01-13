<script>
  $(document).ready(function() {
    $('#tabla').DataTable({
      "serverSide": true,
      "ajax": "{{ url('api/ai/nnajs') }}",
      "columns": [
        {data: 'botones',name:'botones'},
        {data: 'id',name:'fi_datos_basicos.id'},
        {data: 's_documento',name:'nnaj_docus.s_documento'},
        {data: 's_primer_nombre',name:'fi_datos_basicos.s_primer_nombre'},
        {data: 's_segundo_nombre',name:'fi_datos_basicos.s_segundo_nombre'},
        {data: 's_primer_apellido',name:'fi_datos_basicos.s_primer_apellido'},
        {data: 's_segundo_apellido',name:'fi_datos_basicos.s_segundo_apellido'},
        {data: 's_apodo',name:'fi_datos_basicos.s_apodo'},
        {data: 's_nombre_identitario',name:'nnaj_sexos.s_nombre_identitario'},
        {data: 'nombre',name:'sis_depens.nombre'},
      ],
      "language": {
        "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
      }
    });
  });
</script>
