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
.perfilvocacional .lista{
    height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}
</style>
<div class="card p-1 perfilvocacional">
    <div class="form-row border-bottom border-secondary bg-secondary text-white rounded-top">
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
    <div class="lista">
        @foreach ($todoxxxx['actividades'] as $key => $actividad)
            <div class="form-row border-bottom border-secondary ">
                <div class="form-group col-md-1 mb-0 border-right">
                    <p class=""><center>{{$key+1}}</center></p>
                </div>
                <div class="form-group col-md-9 mb-0 border-right">
                    {!! Form::label('item'.($key+1),$actividad->nombre, ['class' => 'font-weight-normal']) !!}
                </div>
                <div class="forn-group col-md-2 mb-0">
                    <center>                
                        <input class="form-check-input check_actividades" type="checkbox" name="actividades[]" value="{{$actividad->id}}" id="item{{$key+1}}" {{ (is_array(old('actividades')) && in_array($actividad->id, old('actividades'))) ? ' checked' : '' }}/>
                    </center>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card-footer text-muted p-1">
        <strong><span class="text-primary n-seleccionados"></span></strong> actividades seleccionadas de <strong>{{$todoxxxx['actividades']->count()}}</strong>
    </div>
</div>


