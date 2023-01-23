<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->

<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
{{-- <script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}
<!-- daterangepicker -->
{{-- <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script> --}}
{{-- <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}
<!-- Summernote -->
{{-- <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script> --}}
<!-- overlayScrollbars -->
{{-- <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> --}}
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
{{-- <script src="{{ asset('adminlte/plugins/chart.js/chart.js') }}"></script> --}}
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard3.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->

<script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/mask/jquery.mask.js') }}"></script>
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/select2/js/i18n/es.js') }}"></script>
<script src="{{ asset('especiales/contarcaracteres.js') }}"></script>
<script src="{{ asset('especiales/fechas.js') }}"></script>
<script src="{{ asset('especiales/combos.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "9000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    var f_motivos = function(dataxxxx) {
        $('#estusuario_id').empty();
        $.ajax({
            url: dataxxxx.routexxx,
            type: 'GET',
            data: dataxxxx.dataxxxx,
            dataType: 'json',
            success: function(json) {
                $.each(json, function(i, data) {
                    var selected = '';
                    if (data.valuexxx == dataxxxx.selected) {
                        selected = 'selected';
                    }
                    $('#estusuario_id').append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                });

            },
            error: function(xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
            }
        });
    }

    var f_motivos_usuario = function(dataxxxx) {
        $('#estusuarios_id').empty();
        $.ajax({
            url: dataxxxx.routexxx,
            type: 'GET',
            data: dataxxxx.dataxxxx,
            dataType: 'json',
            success: function(json) {
                $.each(json, function(i, data) {
                    var selected = '';
                    if (data.valuexxx == dataxxxx.selected) {
                        selected = 'selected';
                    }
                    $('#estusuarios_id').append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                });

            },
            error: function(xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
            }
        });
    }

    var f_servicios = function(dataxxxx) {
        $('#prm_serv_id').empty();
        $.ajax({
            url: dataxxxx.routexxx,
            type: 'GET',
            data: dataxxxx.dataxxxx,
            dataType: 'json',
            success: function(json) {
                $.each(json, function(i, data) {
                    var selected = '';
                    if (data.valuexxx == dataxxxx.selected) {
                        selected = 'selected';
                    }
                    $('#prm_serv_id').append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                });

            },
            error: function(xhr, status) {
                alert('Disculpe, existiÃ³ un problema');
            }
        });
    }



    var f_inactivar = function(dataxxxx) {
        $.ajax({
            url: dataxxxx.urlxxxxx,
            data: dataxxxx.dataxxxx,
            type: dataxxxx.typexxxx,
            dataType: 'json',
            success: function(json) {
                setTimeout(function() {
                    console.log(dataxxxx.datatabl)
                    dataxxxx.datatabl.ajax.reload();
                }, 2000);

                toastr.success(json.tituloxx, json.messagex);
            },
            error: function(xhr, status) {
                alert(dataxxxx.msnxxxxx);
            },
        });
    }

    var f_reconfirm = function(dataxxxx) {
        var idxxxxxx = 'reconfirmar';
        var confirmx = "<button type='button' id='" + idxxxxxx + "' class='btn clear'>SI</button>";
        confirmx += '<button type="button" class="btn clear" role="button">NO</button>';
        toastr.error(
            confirmx,
            dataxxxx.reconfir, {
                closeButton: false,
                allowHtml: true,
                onShown: function(toast) {
                    $("#" + idxxxxxx).click(function() {
                        f_inactivar(dataxxxx)
                    });
                }
            });
    }
    var f_confirm = function(dataxxxx) {
        var idxxxxxx = 'confirmar';
        var confirmx = "<div class='btn clear'><button type='button' id='" + idxxxxxx + "' class='btn clear'>SI</button>";
        confirmx += '<button type="button" class="btn clear" role="button">NO</button></div>';
        toastr.error(
            confirmx,
            dataxxxx.confirmx, {
                closeButton: false,
                allowHtml: true,
                onShown: function(toast) {
                    $("#" + idxxxxxx).click(function() {

                        f_reconfirm(dataxxxx)
                    });
                }
            });
    }

    var getOption = function(dataxxxx) {
        $("#" + dataxxxx.comboidx).append(
            "<option " +
            dataxxxx.selected +
            ' value="' +
            dataxxxx.valuexxx +
            '">' +
            dataxxxx.optionxx +
            "</option>"
        );
    }

    var getCombo = function(dataxxxx, json) {
        $("#" + json.comboxxx).empty();
        $.each(json.dataxxxx, function(i, d) {
            var selected = "";
            if (dataxxxx.psalecte == d.valuexxx) {
                selected = "selected";
            }
            getOption({
                comboidx: json.comboxxx,
                selected: selected,
                valuexxx: d.valuexxx,
                optionxx: d.optionxx
            });
        });
    };
    /**
     * realizar las validaciones cuando se selecciona NINGUNA, NO APLICA...
     * @param {*} dataxxxx
     */
    var f_comboSimple = function(dataxxxx) {
        $.ajax({
            url: dataxxxx.urlxxxxx,
            data: dataxxxx.dataxxxx,
            type: "GET",
            dataType: "json",
            success: function(json) {
                $("#" + json.selectxx).empty();
                $.each(json.comboxxx, function(i, d) {
                    getOption({
                        comboidx: json.selectxx,
                        selected: d.selected,
                        valuexxx: d.valuexxx,
                        optionxx: d.optionxx
                    });
                });
            },
            error: function(xhr, status) {
                alert(dataxxxx.msnxxxxx);
            }
        });
    };
    $('.tooltipx').tooltip({
        placement: "top"
    });

    /**
     *  servicos de
     * dataxxxx={campoxxx:'',routexxx:'',dataxxxx:{},mensajex:''
     * }
     */
    var f_comboGeneral = function(dataxxxx) {
        let campoxxx = $("#" + dataxxxx.campoxxx);
        campoxxx.empty();
        $.ajax({
            url: dataxxxx.urlxxxxx,
            data: dataxxxx.dataxxxx,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                $.each(json, function(i, data) {
                    campoxxx.append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>')
                });
            },
            error: function(xhr, status) {
                alert(dataxxxx.mensajex);
            },
        });

    }

    /**
     * contador de caracteres para los textarea FIXED
     * @param  id obtiene el id del textarea
     */

    function countCharts(id) {    
        var idInput = $('#' + id).val().length;
        var idCount = $('#' + id + '_char_counter');
        var counterText = idCount.text();
        var counterTextMax = counterText.substr(counterText.indexOf("/") + 1);
        idCount.text(idInput+ '/' + counterTextMax);        
    };



      //evitar enviar formulario duplicado
    $('#formulario, input[type="submit"]').on('submit',function(){
        $('#formulario, input[type="submit"]').attr('disabled','true');
    })

    //dropdown sub menu - acciones individuales menu
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });


        return false;
    });

</script>
@include('layouts.mensaje')
@yield('scripts')
