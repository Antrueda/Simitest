<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crear')
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}">
                {{ $todoxxxx['titunuev'] }}
            </a>
            @endcan
            @endif
        </h3>
    </div>
    <div class="card-header">
        <div class="pull-left">
           <h2 class="card-title"> Quizzes</h2>
        </div>
        <div class="pull-right">
           <div class="pull-left">
              <nav role="navigation">
                 <ul class="ul-dropdown">
                    <li class="firstli">
                       <i
                          class="material-icons">settings</i><a href="#">ACTION</a>
                       <ul>
                          <li><a href="#">Export CSV</a></li>
                          <li><a href="#">Export Excel</a></li>
                          <li><a href="#">Export PDF</a></li>
                          <li><a href="#">Print</a></li>
                       </ul>
                    </li>
                 </ul>
              </nav>
           </div>

        </div>
     </div>
    <div class="card-body">
        @canany([$todoxxxx['permisox'].'-leer',$todoxxxx['permisox'].'-crear',$todoxxxx['permisox'].'-editar',$todoxxxx['permisox'].'-borrar'])
        <div class="table-responsive">
            <table id="{{ $tableName }}" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>

                    @foreach( $todoxxxx['cabecera'] as $cabecera )
                    <tr class="text-center">
                        @foreach( $cabecera as $cabecerx)
                        <th width="{{$cabecerx['widthxxx']}}" rowspan="{{$cabecerx['rowspanx']}}" colspan="{{$cabecerx['colspanx']}}"> {{ $cabecerx['td']   }}</th>
                        @endforeach
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
        @endcanany
    </div>
</div>
