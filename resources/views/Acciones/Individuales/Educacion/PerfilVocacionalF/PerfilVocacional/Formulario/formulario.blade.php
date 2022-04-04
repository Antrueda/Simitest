<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

input[type="checkbox"]:checked {
    box-shadow: 0 0 2px #0069d9, 0 0 10px #0069d9, 0 0 15px #0069d9;
}

input[type="checkbox"]:hover {
    box-shadow: 0 0 2px #A9A9A9, 0 0 10px #A9A9A9, 0 0 15px #A9A9A9;
}
</style>
<div class="form-row border-bottom border-secondary ">
    <div class="form-group col-md-1 mb-0 border-right">
        <p class=""><strong>No.</strong></p>
    </div>
    <div class="form-group col-md-9 mb-0 border-right">
        <p class=""><strong>Actividad</strong></p>
    </div>
    <div class="forn-group col-md-2 mb-0">
        <p class=""><strong>Me gusta</strong></p>
    </div>
</div>

@foreach ($todoxxxx['actividades'] as $key => $actividad)
    <div class="form-row border-bottom border-secondary ">
        <div class="form-group col-md-1 mb-0 border-right">
            <p class=""><center>{{$key+1}}</center></p>
        </div>
        <div class="form-group col-md-9 mb-0 border-right">
            <p class="">{{$actividad->nombre}}</p>
        </div>
        <div class="forn-group col-md-2 mb-0">
            <center>                
                <input class="form-check-input" type="checkbox" name="actividades[]" value="{{$actividad->id}}" id="flexCheckDefault" {{ (is_array(old('actividades')) && in_array($actividad->id, old('actividades'))) ? ' checked' : '' }}/>
            </center>
        </div>
    </div>
@endforeach



