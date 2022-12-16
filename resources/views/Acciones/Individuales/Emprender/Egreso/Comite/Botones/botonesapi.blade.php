
@if($requestx->puedinac)
<a class="btn btn-sm btn-danger" id="{{$queryxxx->id}}"  name="{{$queryxxx->id}}" onclick="deleteRecord(this.id,this)" data-token="{{ csrf_token() }}" style="color: white;">ELIMINAR</a>
@endif