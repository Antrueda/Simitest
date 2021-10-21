<?php

use App\Models\Indicadores\Administ\Area;
use App\Models\Indicadores\Administ\InIndicado;
use App\Observers\Indicadores\Administ\AreaObserver;
use App\Observers\Indicadores\Administ\InIndicadoObserver;

Area::observe(AreaObserver::class);
InIndicado::observe(InIndicadoObserver::class);
