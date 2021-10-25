</div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            autoFill: true,
            language: {
                //adminlte/plugins/datatables/Spanish.lang
                url: '/adminlte/plugins/datatables/Spanish.lang'
            }
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Esta seguro de Guardar/Actualizar este registro?`,
                text: "Tenga en cuenta que puede estar enlazado a otros modulos como parametro dependiente con el mismo nombre.",
                icon: "warning",
                buttons: true,
                dangerMode: false,
            })
            .then((state) => {
                if (state) {
                    form.submit();
                }
            });

    });
    $(document).ready(function() {
        $("#habilitar").click(function() {
            if ($(this).is(":checked")) {
                $(".form-input-shower").show();
                $(".form-select-shower").hide();
            } else {
                $(".form-input-shower").hide();
                $(".form-select-shower").show();
            }
        });
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });
    });
</script>
