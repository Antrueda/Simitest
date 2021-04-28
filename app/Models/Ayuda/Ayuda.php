<?php

namespace App\Models\Ayuda;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Ayuda extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'ayudas';// cuando se cumple con el standar no es necesario

    /**
     * Filtros de los campos que se necesita para crear un objeto
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'slug',
        'cuerpo',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];


    /**
     * Se setea la variable slug segun el contenido del titulo
     *
     * @var array
     */
    public function setSlugAttribute()
    {
        return $this->attributes['slug'] = Str::slug($this->attributes['titulo']);
    }
    /**
     *
     *Se da formato a la variable Date
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat(
            'Y-m-d H:i:s',
            Carbon::parse($date)->toDateTimeString()
        )->format('d-m-Y h:i A');
    }

}
