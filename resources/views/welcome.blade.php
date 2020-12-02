@extends('layouts.index')
@section('content')

  <div class="jumbotron text-center">
  <h1 class="display-4">SIMI</h1>
  <p class="lead">IDIPRON</p>
  <hr class="my-4">
  <p>Sistema misional</p>
  <img src="{{ asset('img/login_r2_c7_s1.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
  <img src="{{ asset('img/login_r4_c7_s1.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
 
</div>
@guest
@else
<div class="jumbotron text-center">
  <table class="table table-bordered table-striped table-hover table-sm" border="1px solid black" >    
    <thead bgcolor="orange">
      <th>Numero</th>
      <th>Mensaje</th>
    </thead>
    <tbody>
      <?php
         $mensajes = \App\Models\Mensajes::select([
            'mensajes.id',
            'mensajes.titulo',
            'mensajes.descripcion',
            'mensajes.created_at',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'mensajes.sis_esta_id', '=', 'sis_estas.id')
            ->where('mensajes.sis_esta_id', 1)->pluck('descripcion')->take(5)->sortByDesc('created_at');;
            $numero=1;
            foreach($mensajes as $value) {
              echo '<tr>';
              echo '<td align="left">' . $numero . '</td>';
              echo '<td align="left">' . $value . '</td>';
              $numero++;
              echo '</tr>';
            }
          
          
       ?>
    </tbody>
  </table>
  </div>
  @endguest
@endsection
