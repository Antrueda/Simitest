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
<div class="jumbotron text-center">
  <table class="table table-bordered table-striped table-hover table-sm" border="1px solid black" >    
    <thead bgcolor="orange">
      <th>Numero</th>
      <th>Mensaje</th>
    </thead>
    <tbody >
      <tr>
        <td><b>1</b> </td>
  
        <td align="left">La información que se genere frente a los NNAJ es confidencial y/o privilegiada y solo puede ser utilizada por la(s) persona(s) a las cual(es) está dirigida.
           Según el Artículo 7 de la Ley 1581 de 2012 y el Articulo 2.2.2.25.2.9 del decreto 1074 de 2015 según el manual A-TIC-MA-002 Numeral 4.5 Tratamiento de datos sensibles 
           vigente desde el 16 de mayo 2017</td>
      </tr>
      <tr>
        <td><b>2</b> </td>
        <td align="left">Se solicita a todos los usuarios que los casos referentes al SIMI sean enviados por el aplicativo de ARANDA SERVICE DESK</td>
      </tr>
      <tr>
        <td><b>3</b></td>
        <td align="left">Lo que no está en el sistema, no existe, no prestar la clave ni usuario a otras personas. Ver en el SIGID: Política de seguridad y controles básicos 
          y específicos para el manejo de información.</td>
      </tr>
      <tr>
        <td><b>4</b></td>
        <td align="left">No olvidar que cada profesional tiene 30 días hábiles para cargar la información. Excepto el registro de asistencias que debe ser diario </td>
      </tr>
    </tbody>
  </table>
  </div>
@endsection