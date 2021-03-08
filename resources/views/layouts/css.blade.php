<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
  href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset ('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
{{-- <link rel="stylesheet" href="{{ asset ('adminlte/plugins/jqvmap/jqvmap.min.css') }}"> --}}
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset ('adminlte/dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset ('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Daterange picker -->
{{-- <link rel="stylesheet" href="{{ asset ('adminlte/plugins/daterangepicker/daterangepicker.css') }}"> --}}
<!-- summernote -->
{{-- <link rel="stylesheet" href="{{ asset ('adminlte/plugins/summernote/summernote-bs4.css') }}"> --}}
<link rel="stylesheet" href="{{ asset ('adminlte/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset ('adminlte/plugins/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset ('adminlte/plugins/datatables/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/select.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset ('adminlte/dist/css/simi.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>

.tooltip-main {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  font-weight: 700;
  background: green;
  border: 1px solid #737373;
  color: #737373;
  margin: 4px 121px 0 5px;
  float: right;
  text-align: left !important;
}

.tooltip-qm {
  float: left;
  margin: -2px 0px 3px 4px;
  font-size: 12px;
}

.tooltip-inner {
  max-width: 236px !important;

  font-size: 12px;
  padding: 10px 15px 10px 20px;
  background: green;
  color:black;
  border: 1px solid #737373;
  text-align: left;
}

.tooltip.show {
  opacity: 1;
}

.bs-tooltip-auto[x-placement^=bottom] .arrow::before,
.bs-tooltip-bottom .arrow::before {
  border-bottom-color: #f00;
  /* Red */
}
</style>

@yield('styles')
