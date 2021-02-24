<script>
  $(document).ready(function() {
    $('#tabla').DataTable({
      "serverSide": true,
      "ajax": {
        url:  "{{ url('api/ai/nnajs') }}",
        data: {userxxxx:{{Auth::user()->id}}}
      }
    ,
      "columns": [
        {data: 'botones',name:'botones'},
        {data: 'tipodocumento',name:'tipodocumento.nombre as tipodocumento'},
        {data: 's_documento',name:'nnaj_docus.s_documento'},
        {data: 's_primer_nombre',name:'fi_datos_basicos.s_primer_nombre'},
        {data: 's_segundo_nombre',name:'fi_datos_basicos.s_segundo_nombre'},
        {data: 's_primer_apellido',name:'fi_datos_basicos.s_primer_apellido'},
        {data: 's_segundo_apellido',name:'fi_datos_basicos.s_segundo_apellido'},
        {data: 'sexos',name:'sexos.nombre as sexos'},
        {data: 'd_nacimiento',name:'nnaj_nacimis.d_nacimiento'},
        {data: 's_nombre_identitario',name:'nnaj_sexos.s_nombre_identitario'},
        {data: 'upiservicio',name:'upiservicio'},
      ],
      "language": {
        "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
      }
    });
    
  });
</script>
