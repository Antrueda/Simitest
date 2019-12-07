<?php

namespace App\Models\Salud\Mitigacion;

use Illuminate\Database\Eloquent\Model;

class VspaTabla extends Model{
    
    protected $table = 'mit_vspa_tabla';
    
    protected $fillable = [
        'primera_ini',          'primera_dos',          'primera_tres',         'primera_cuatro',   
        'primera_cinco',        'primera_seis',         'primera_siete',        'primera_dmi',
        'ultima_ini',           'ultima_dos',           'ultima_tres',          'ultima_cuatro',
        'ultima_cinco',         'ultima_seis',          'ultima_siete',         'ultima_dmi',
        'prm_droga_ini_id',     'prm_droga_dos_id',     'prm_droga_tres_id',    'prm_droga_cuatro_id',
        'prm_droga_cinco_id',   'prm_droga_seis_id',    'prm_droga_siete_id',   'prm_droga_dmi_id',
        'prm_fre_ini_id',       'prm_fre_dos_id',       'prm_fre_tres_id',      'prm_fre_cuatro_id',
        'prm_fre_cinco_id',     'prm_fre_seis_id',      'prm_fre_siete_id',     'prm_fre_dmi_id',
        'prm_via_ini_id',       'prm_via_dos_id',       'prm_via_tres_id',      'prm_via_cuatro_id',
        'prm_via_cinco_id',     'prm_via_seis_id',      'prm_via_siete_id',     'prm_via_dmi_id',
        'prm_mes_ini_id',       'prm_mes_dos_id',       'prm_mes_tres_id',      'prm_mes_cuatro_id',
        'prm_mes_cinco_id',     'prm_mes_seis_id',      'prm_mes_siete_id',     'prm_mes_dmi_id',
        'prm_anio_ini_id',      'prm_anio_dos_id',      'prm_anio_tres_id',     'prm_anio_cuatro_id',
        'prm_anio_cinco_id',    'prm_anio_seis_id',     'prm_anio_siete_id',    'prm_anio_dmi_id',
        'prm_imp_ini_id',       'prm_imp_dos_id',       'prm_imp_tres_id',       'prm_imp_cuatro_id',
        'prm_imp_cinco_id',     'prm_imp_seis_id',      'prm_imp_siete_id',      'prm_imp_dmi_id',
    ];

    public function droga_ini(){
        return $this->belongsTo(Parametro::class, 'prm_droga_ini_id');
    }
    
    public function droga_dos(){
        return $this->belongsTo(Parametro::class, 'prm_droga_dos_id');
    }

    public function droga_tres(){
        return $this->belongsTo(Parametro::class, 'prm_droga_tres_id');
    }

    public function droga_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_droga_cuatro_id');
    }

    public function droga_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_droga_cinco_id');
    }

    public function droga_seis(){
        return $this->belongsTo(Parametro::class, 'prm_droga_seis_id');
    }

    public function droga_siete(){
        return $this->belongsTo(Parametro::class, 'prm_droga_siete_id');
    }

    public function droga_dmi(){
        return $this->belongsTo(Parametro::class, 'prm_droga_dmi_id');
    }

    public function fre_ini(){
        return $this->belongsTo(Parametro::class, 'prm_fre_ini_id');
    }

    public function fre_dos(){
        return $this->belongsTo(Parametro::class, 'prm_fre_dos_id');
    }

    public function fre_tres(){
        return $this->belongsTo(Parametro::class, 'prm_fre_tres_id');
    }

    public function fre_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_fre_cuatro_id');
    }

    public function fre_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_fre_cinco_id');
    }

    public function fre_seis(){
        return $this->belongsTo(Parametro::class, 'prm_fre_seis_id');
    }

    public function fre_siete(){
        return $this->belongsTo(Parametro::class, 'prm_fre_siete_id');
    }
    
    public function fre_dmi(){
        return $this->belongsTo(Parametro::class, 'prm_fre_dmi_id');
    }

    public function via_ini(){
        return $this->belongsTo(Parametro::class, 'prm_via_ini_id');
    }

    public function via_dos(){
        return $this->belongsTo(Parametro::class, 'prm_via_dos_id');
    }

    public function via_tres(){
        return $this->belongsTo(Parametro::class, 'prm_via_tres_id');
    }

    public function via_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_via_cuatro_id');
    }

    public function via_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_via_cinco_id');
    }

    public function via_seis(){
        return $this->belongsTo(Parametro::class, 'prm_via_seis_id');
    }

    public function via_siete(){
        return $this->belongsTo(Parametro::class, 'prm_via_siete_id');
    }

    public function via_dmi(){
        return $this->belongsTo(Parametro::class, 'prm_via_dmi_id');
    }

    public function mes_ini(){
        return $this->belongsTo(Parametro::class, 'prm_mes_ini_id');
    }

    public function mes_dos(){
        return $this->belongsTo(Parametro::class, 'prm_mes_dos_id');
    }

    public function mes_tres(){
        return $this->belongsTo(Parametro::class, 'prm_mes_tres_id');
    }

    public function mes_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_mes_cuatro_id');
    }

    public function mes_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_mes_cinco_id');
    }

    public function mes_seis(){
        return $this->belongsTo(Parametro::class, 'prm_mes_seis_id');
    }

    public function mes_siete(){
        return $this->belongsTo(Parametro::class, 'prm_mes_siete_id');
    }

    public function mes_dmi(){
        return $this->belongsTo(Parametro::class, 'prm_mes_dmi_id');
    }

    public function anio_ini(){
        return $this->belongsTo(Parametro::class, 'prm_anio_ini_id');
    }

    public function anio_dos(){
        return $this->belongsTo(Parametro::class, 'prm_anio_dos_id');
    }

    public function anio_tres(){
        return $this->belongsTo(Parametro::class, 'prm_anio_tres_id');
    }

    public function anio_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_anio_cuatro_id');
    }

    public function anio_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_anio_cinco_id');
    }

    public function anio_seis(){
        return $this->belongsTo(Parametro::class, 'prm_anio_seis_id');
    }

    public function anio_siete(){
        return $this->belongsTo(Parametro::class, 'prm_anio_siete_id');
    }

    public function anio_dmi(){
        return $this->belongsTo(Parametro::class, 'prm_anio_dmi_id');
    }

    public function imp_ini(){
        return $this->belongsTo(Parametro::class, 'prm_imp_ini_id');
    }

    public function imp_dos(){
        return $this->belongsTo(Parametro::class, 'prm_imp_dos_id');
    }

    public function imp_tres(){
        return $this->belongsTo(Parametro::class, 'prm_imp_tres_id');
    }

    public function imp_cuatro(){
        return $this->belongsTo(Parametro::class, 'prm_imp_cuatro_id');
    }

    public function imp_cinco(){
        return $this->belongsTo(Parametro::class, 'prm_imp_cinco_id');
    }

    public function imp_seis(){
        return $this->belongsTo(Parametro::class, 'prm_imp_seis_id');
    }

    public function imp_siete(){
        return $this->belongsTo(Parametro::class, 'prm_imp_siete_id');
    }

    public function imp_dmi(){
        return $this->belongsTo(Parametro::class, 'prm_imp_dmi_id');
    }

    public function Vspa(){
        return $this->belongsTo(Vspa::class, 'mit_vspa_id');
    }
}
