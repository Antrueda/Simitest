<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @foreach($todoxxxx['pestania'] as $pestania)
                @canany($pestania['cananyxx'])
                    <li class="nav-item">
                        <a data-toggle="tooltip" title="{{ $pestania['tooltipx'] }}" class="nav-link {{ $pestania['activexx']?'active': ''}} text-sm tooltipx {{$pestania['disabled']?'disabled':''}}" href="{{ $pestania['routexxx'] }}">
                            {{ $pestania['titupest'] }}
                        </a>
                    </li>
                @endcanany
            @endforeach
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            @if($todoxxxx['mostabsx'])
                @include('Acomponentes.Tabsxxxx.pestania')
            @endif
        </div>
    </div>
</div>
