<div class="form-group row">
    <div class="form-group col-md-12">
    <div class="form-check-inline">
        <label class="form-check-label">
            {{ Form::checkbox('todoxxxx', '',(count($todoxxxx['modeloxx']->lugaresx)==count($todoxxxx['lugaresx']))?true:false,['class' => 'form-check-input todoxxxx']) }} {{ Tr::getTitulo(33,1) }}
        </label>
      </div>
    </div>
    @foreach ($todoxxxx['lugaresx'] as $lugaresx)
        <div class="form-group col-md-3">
            <div class="form-check-inline">
                <label class="form-check-label">
                    <?php $checkedx=false; 
                    foreach($todoxxxx['modeloxx']->lugaresx as $selected){
                        if ($lugaresx->id== $selected) {
                            $checkedx=true; 
                        }
                    }
                    
                    
                    ?>
                    {{ Form::checkbox('lugaresx[]', $lugaresx->id,$checkedx,['class' => 'form-check-input hijosxxx']) }} {{ $lugaresx->s_espaluga }}
                </label>
            </div>
        </div>
    @endforeach  
  </div>