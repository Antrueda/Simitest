<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Menu Principal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Menú Principal</li>
          </ol>
        </div>
      </div>
    </div>
  </div> --}}

    <!-- Main content -->

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <section class="content">
        <script>
            var inactivityTime = function() {
                var time;
                window.onload = resetTimer;
                // DOM Events
                document.onmousemove = resetTimer;
                document.onkeypress = resetTimer;

                function logout() {
                    alert("El sistema se cerró de estar 30 minutos inactivo.")

                }

                function resetTimer() {
                    clearTimeout(time);
                    time = setTimeout(logout, 1806000)
                    // 1000 milliseconds = 1 second
                }
            };
            window.onload = function() {
                inactivityTime();
            }
        </script>
        <div class="container-fluid pt-2">
            <?php


            $auxiliar = auth()->user();
            if ($auxiliar) {
                $fechahoy = \Carbon\Carbon::createFromFormat('Y-m-d', date('Y-m-d'));
                $fechregi = \Carbon\Carbon::createFromFormat('Y-m-d', explode(' ', $auxiliar->password_change_at)[0]);
                $difedias = $fechahoy->diffInDays($fechregi);
            }
            ?>
            @if($auxiliar)
            @if($difedias<6) <div class="alert alert-warning" role="alert">

                El usuario tiene cambio de contraseña en {{$difedias}} días
                @endif
                @endif
        </div>
        @yield('content')

</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
