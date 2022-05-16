@if (isset($todoxxxx['modeloxx']))
<br>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">RESULTADOS</h3>
    </div>
    <div class="card-body">
      
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Área</th>
                <th scope="col">Cantidad de marcadas</th>
                <th scope="col">Porcentaje</th>
                <th scope="col">Descripción</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($todoxxxx['grafica']['perfilactividades'] as $item)
                    <tr>
                        <th scope="row">{{$item->nombre}}</th>
                        <td>{{$item->actividadesarea}}</td>
                        <td>@convert2((($item->actividadesarea*100)/$todoxxxx['grafica']['tatalactividades']))%</td>
                        <td>{{$item->descripcion}}</td>
                    </tr>
                @endforeach
                    <tr>
                        <th scope="row">Total</th>
                        <td>{{$todoxxxx['grafica']['tatalactividades']}}</td>
                        <td>{{(($todoxxxx['grafica']['tatalactividades']*100)/$todoxxxx['grafica']['tatalactividades'])}}%</td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
        <br>
        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
    </div>
</div>
@endif