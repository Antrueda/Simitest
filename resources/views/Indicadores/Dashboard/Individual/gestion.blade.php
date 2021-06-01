<div style="overflow: scroll; height: 500px">
   <table class="table table-bordered">
       <thead>
         <tr>
           <th style="width: 200px">.</th>
           <th style="width: 200px" >.</th>
           <th style="width: 200px">.</th>
           <th style="width: 2000px">.</th>
           <th>.</th>
           <th>.</th>
           <th style="width: 200px">ACTIVIDADES</th>
           <th>%</th>
           <th>TIEMPO</th>
           <th>FUENTE SOPORTE ACTIVIDADES</th>
           
         </tr>
       </thead>
       <tbody>
         {{-- {{ dd($todoxxxx['indicado']) }} --}}
         @foreach ($todoxxxx['indicado'] as $indicado)
          
            <tr>
               @if($indicado['cantindi']>0)
                  <td style="vertical-align:middle;" rowspan="{{ $indicado['cantindi'] }}"></td>
               @endif
               @if($indicado['cantdocu']>0)
                  <td style="vertical-align:middle;" rowspan="{{ $indicado['cantdocu'] }}"></td>
               @endif
               @if($indicado['cantpreg']>0)
                  <td style="vertical-align:middle;" rowspan="{{ $indicado['cantpreg'] }}"></td>
               @endif
               @if($indicado['cantbase']>0)
                  <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}"></td>
               @endif
               @if($indicado['cantbase']>0)
                  <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}"></td>
               @endif
               @if($indicado['cantbase']>0)
                  <td style="vertical-align:middle;" rowspan="{{ $indicado['cantbase'] }}"></td>
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
            </tr> 
               
         @endforeach
         
         
       </tbody>
     </table>
    </div>