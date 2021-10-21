<div class="card">
    <div class="card-header">
        <h1>
            {{ $todoxxxx['cardhead']}}
        </h1>
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @foreach($todoxxxx['pestania'][$todoxxxx['pestpadr']]['pesthija'] as $pestania)
                @canany($pestania['cananyxx'])
                    <li class="nav-item"  aria-hidden="false">
                        <a data-toggle="tooltip" title="{{ $pestania['tooltipx'] }}" class="nav-link {{ $pestania['activexx']?'active': '' }} text-sm tooltipx {{$pestania['disabled']?'disabled' :''}}" href="{{ $pestania['routexxx'] }}">
                            {{ $pestania['titupest'] }}
                            @if($pestania['checkxxy'])
                                @if($pestania['checkxxx'])
                                    <span class="fas fa-check text-success" aria-hidden="true"></span>
                                @else
                                    <span class="fas fa-times text-danger" aria-hidden="true"></span>
                                @endif
                            <!-- <span class="fas fa-bell text-warning" aria-hidden="true">44</span> -->
                            @endif
                        </a>
                    </li>
                @endcanany
            @endforeach

        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active">
                {{ $crudxxxx }} <!-- nombre que se le data en pestanias de la carpeta Acrud -->
            </div>
        </div>
    </div>
</div>
