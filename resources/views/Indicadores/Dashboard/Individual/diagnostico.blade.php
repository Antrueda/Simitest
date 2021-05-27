<div style="overflow: scroll; height: 500px">
   
   <table class="table table-bordered">
      <thead>
         <tr>
            <th style="width: 200px">VARIABLE</th>
            <th style="width: 200px">FUENTE</th>
            <th style="width: 200px">VALIDACIÓN</th>
            <th style="width: 2000px">LINEA BASE</th>
            <th>NIVEL</th>
            <th>CATEGORÍA</th>
            <th style="width: 200px">ACTIVIDADES</th>
            <th>%</th>
            <th>TIEMPO</th>
            <th>FUENTE SOPORTE ACTIVIADES</th>
            <th>AVANCE</th>
            <th>ACCIÓN</th>
            <th>NIVEL</th>
            <th>CATEGORIA</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
         </tr>
      </thead>
      <tbody>
         {{-- {{ dd($todoxxxx['indicado']) }} --}}
         @foreach ($todoxxxx['datobasi'] as $indicado)
         <tr>
            <td>
               {{$todoxxxx['datobasi']->sis_nnaj->in_lineabase_nnajs[0]->in_fuente->in_indicador->s_indicador}}
            </td>            
            <td>
               {{$todoxxxx['datobasi']->sis_nnaj->in_lineabase_nnajs[0]->in_fuente->in_base_fuente[0]->sis_docfuen->nombre}}
            </td>
            <td>
            </td>
            <td>
               {{$todoxxxx['datobasi']->sis_nnaj->in_lineabase_nnajs[0]->in_fuente->in_linea_base->s_linea_base}}
            </td>  
            @if($indicado['cantindi']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantindi'] }}">{{ $indicado['indicado'] }}</td>
            @endif
            @if($indicado['cantdocu']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantdocu'] }}">{{ $indicado['document'] }}</td>
            @endif
            @if($indicado['cantpreg']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantpreg'] }}">{{ $indicado['pregunta'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['linebase'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['nivelxxx'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['categori'] }}</td>
            @endif
            @if($indicado['cantacti']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantacti'] }}">{{ $indicado['sactivid'] }}</td>
            @endif
            @if($indicado['cantacti']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantacti'] }}">{{ $indicado['iporcent'] }}</td>
            @endif
            @if($indicado['cantacti']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantacti'] }}">{{ $indicado['itiempox'] }}</td>
            @endif
            @if($indicado['cantsopo']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantsopo'] }}">{{ $indicado['soportex'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['iavancex'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['iaccionx'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['iavanive'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['iavacate'] }}</td>
            @endif

            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex1'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex2'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex3'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex4'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex5'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex6'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex7'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex8'] }}</td>
            @endif
            @if($indicado['cantbase']>0)
            <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}">{{ $indicado['avancex9'] }}</td>
            @endif
         </tr>

         @endforeach


      </tbody>
   </table>
</div>