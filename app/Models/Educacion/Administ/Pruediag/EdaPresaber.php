<?php

namespace App\Models\Educacion\Administ\Pruediag;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class EdaPresaber extends Model
{
    protected $fillable = [
        's_presaber',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
      ];

      public function userCrea()
      {
          return $this->belongsTo(User::class, 'user_crea_id');
      }
      public function userEdita()
      {
          return $this->belongsTo(User::class, 'user_edita_id');
      }
      public function sisEsta()
      {
          return $this->belongsTo(SisEsta::class);
      }

      public function setSPresaberAttribute($value)
      {
          if (isset($value)) {
              $this->attributes['s_presaber'] = strtoupper($value);
          }
      }
}
