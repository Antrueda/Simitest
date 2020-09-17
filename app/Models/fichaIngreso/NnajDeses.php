<?php

namespace App\Models\fichaIngreso;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeServ;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class NnajDeses extends Model
{
    protected $fillable = [
        'sis_depser_id',
        'nnaj_upi_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
 
     ];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function nnaj_upi()
    {
        return $this->belongsTo(NnajUpi::class);
    }

    
}
