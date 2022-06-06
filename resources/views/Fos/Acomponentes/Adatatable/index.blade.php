<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
            @if($todoxxxx['vercrear'])
            @can($todoxxxx['permisox'].'-crear')
            <a class="btn btn-sm btn-primary ml-2" title="{{$todoxxxx['titunuev']}}" href="{{ route($todoxxxx['routxxxx'].'.nuevo',$todoxxxx['parametr']) }}">
        
                {{ $todoxxxx['titunuev'] }}
          
          
            @endcan
            @endif
            <a class="btn btn-sm btn-primary ml-2" title="EXPORTAR" href="{{ route($todoxxxx['routxxxx'].'.export',$todoxxxx['parametr']) }}">EXPORTAR</a>
        </h3>
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

<style>
    .dt-buttons {
    display: none;
}
.pull-left ul {
    list-style: none;
    margin: 0;
    padding-left: 0;
}
.pull-left a {
    text-decoration: none;
    color: #ffffff;
}
.pull-left li {
    color: #ffffff;
    background-color: #2f2f2f;
    border-color: #2f2f2f;
    display: block;
    float: left;
    position: relative;
    text-decoration: none;
    transition-duration: 0.5s;
    padding: 12px 30px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
}
.pull-left li:hover {
    cursor: pointer;
}
.pull-left ul li ul {
    visibility: hidden;
    opacity: 0;
    min-width: 9.2rem;
    position: absolute;
    transition: all 0.5s ease;
    margin-top: 8px;
    left: 0;
    display: none;
}
.pull-left ul li:hover>ul,
.pull-left ul li ul:hover {
    visibility: visible;
    opacity: 1;
    display: block;
}
.pull-left ul li ul li {
    clear: both;
    width: 100%;
    color: #ffffff;
}
.ul-dropdown {
    margin: 0.3125rem 1px !important;
    outline: 0;
}
.firstli {
    border-radius: 0.2rem;
}
.firstli .material-icons {
    position: relative;
    display: inline-block;
    top: 0;
    margin-top: -1.1em;
    margin-bottom: -1em;
    font-size: 0.8rem;
    vertical-align: middle;
    margin-right: 5px;
}
</style>