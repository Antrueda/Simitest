<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>
  <title>SIMI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- css -->
  @include('layouts.css')
  <!-- end css -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts.nav-bar.index')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.mainsidebar')
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    @include('layouts.contentWrapper')
    <!-- /.content-wrapper -->

    <!-- footer -->
    @include('layouts.footer')
    <!-- end footer -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Scripts -->
  @include('layouts.scripts')
  @yield('codigo')
  <!-- End Scripts -->


  
<!-- include summernote css/js-->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.texteditor').summernote({
                height: 500,
                minHeight: null,
                maxHeight: null,
                shortCuts: false,
                fontSize: 14,
                disableDragAndDrop: false,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['Insert', ['picture']],
                    ['Other', ['fullscreen', 'codeview']]
                ],
            });
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>

</html>
