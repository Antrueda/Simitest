<?php

namespace App\Traits\Interfaz\Nuevsimi\Migraciones;

use App\Models\fichaIngreso\FiDatosBasico;
use app\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\fichaIngreso\NnajFocali;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajSitMil;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisDepen;
use app\Models\sistema\SisLocalupz;
use app\Models\sistema\SisNnaj;
use app\Models\sistema\SisUpzbarri;
use App\Models\User;
use Carbon\Carbon;

/**
 * actuliza un nnaj en el nuevo desarrollo con la información que se encuentra en el antiguo simi
 */
trait ArmarConsultasSeedersTrait
{
   public function getSisCargo($desdexxx, $i)
   {
      $dataxxxx = SisCargo::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($dataxxxx as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "SisCargo::create(['id'=>$value->id,
            's_cargo' => '$value->s_cargo', 
            'itiestan' => $value->itiestan, 
            'itiegabe' => $value->itiegabe, 
            'itigafin' => $value->itigafin, 
            'user_crea_id' => $value->user_crea_id, 
            'user_edita_id' => $value->user_edita_id, 
            'sis_esta_id' => $value->sis_esta_id
         ]);// " . $i++ . "<br>";
            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   public function getUser($desdexxx, $i)
   {
      $dataxxxx = User::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($dataxxxx as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            $usuariox = $value->user_edita_id;
            if ($usuariox > $value->id) {
               $usuariox = 1;
            }
            echo "User::create(['id' => $value->id, 
            'name' => '$value->name', 
            's_primer_nombre' => '$value->s_primer_nombre', 
            's_segundo_nombre' => '$value->s_segundo_nombre', 
            's_primer_apellido' => '$value->s_primer_apellido', 
            's_segundo_apellido' => '$value->s_segundo_apellido', 
            'email' => '$value->email', 
            'password' => '$value->s_documento', 
            'sis_esta_id' => $value->sis_esta_id, 
            'user_crea_id' => $value->user_crea_id, 
            'user_edita_id' => $usuariox, 
            's_telefono' => '$value->s_telefono', 
            'prm_tvinculacion_id' => $value->prm_tvinculacion_id, 
            's_matriculap' => '$value->s_matriculap', 
            'sis_cargo_id' => $value->sis_cargo_id, 
            'd_finvinculacion' => '$value->d_finvinculacion', 
            'd_vinculacion' => '$value->d_vinculacion', 
            's_documento' => '$value->s_documento', 
            'prm_documento_id' => $value->prm_documento_id, 
            'sis_municipio_id' => $value->sis_municipio_id, 
            'estusuario_id' => $value->estusuario_id, 
            'itiestan' => $value->itiestan,
             'itiegabe' => $value->itiegabe, 
             'itigafin' => $value->itigafin, 
             'password_change_at' => '$value->password_change_at', 
             'password_reset_at' => '$value->password_reset_at', 
             'polidato_at' => '$value->polidato_at',]);
            // " . $i++ . "<br>";
            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getSisNnaj($desdexxx, $i)
   {
      $dataxxxx = SisNnaj::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($dataxxxx as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "SisNnaj::create(['id'=>$value->id,'sis_esta_id' => $value->sis_esta_id, 'user_crea_id' => $value->user_crea_id, 'user_edita_id' => $value->user_edita_id, 'prm_escomfam_id' => $value->prm_escomfam_id]);// " . $i++ . "<br>";
            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getFiDatosBasico($desdexxx, $i)
   {
      $dataxxxx = FiDatosBasico::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($dataxxxx as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "FiDatosBasico::create(['id'=>$value->id,
            's_primer_nombre' => '$value->s_primer_nombre',
                's_segundo_nombre' => '$value->s_segundo_nombre',
                's_primer_apellido' => '$value->s_primer_apellido',
                's_segundo_apellido' => '$value->s_segundo_apellido',
                's_apodo' => '$value->s_apodo',
                'sis_nnaj_id' =>$value->sis_nnaj_id,
               
                'prm_vestimenta_id' => $value->prm_vestimenta_id,
                'prm_tipoblaci_id' => $value->prm_tipoblaci_id,
                'prm_estrateg_id' => $value->prm_estrateg_id,
                'sis_esta_id' => $value->sis_esta_id,
                'user_crea_id' => $value->user_crea_id,
                'user_edita_id' => $value->user_edita_id,
                'created_at' => '$value->created_at',
                'updated_at' => '$value->updated_at',
                'sis_docfuen_id' => $value->sis_docfuen_id,
         ]);// " . $i++ . "<br>";
            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getNnajFiCsd($desdexxx, $i)
   {
      $dataxxxx = NnajFiCsd::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($dataxxxx as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "
            NnajFiCsd::create([
               'id' => $value->id,
               'fi_datos_basico_id' => $value->fi_datos_basico_id,
               'prm_etnia_id' => $value->prm_etnia_id,
               'prm_poblacion_etnia_id' => $value->prm_poblacion_etnia_id,
               'prm_gsanguino_id' => $value->prm_gsanguino_id,
               'prm_factor_rh_id' => $value->prm_factor_rh_id,
               'prm_estado_civil_id' => $value->prm_estado_civil_id,
               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
               'sis_docfuen_id' => $value->sis_docfuen_id,
           ]);;// " . $i++ . "<br>";
            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   public function getNnajNacimi($desdexxx, $i)
   {
      $dataxxxx = NnajNacimi::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($dataxxxx as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "
            NnajNacimi::create([
               'id' => $value->id,
               'fi_datos_basico_id' => $value->fi_datos_basico_id,
               'd_nacimiento' => '" . explode(' ', $value->d_nacimiento)[0] . "',
               'sis_pai_id' => $value->sis_pai_id,
               'sis_departam_id' => $value->sis_departam_id,
               'sis_municipio_id' => $value->sis_municipio_id,
               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
               'sis_docfuen_id' => $value->sis_docfuen_id,
           ]);;// " . $i++ . "<br>";
            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   public function getNnajDocu($desdexxx, $i)
   {
      $document = NnajDocu::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "NnajDocu::create([
               'id' => '$value->id',
               's_documento' => '$value->s_documento',
               'fi_datos_basico_id' => $value->fi_datos_basico_id,
               'prm_ayuda_id' => $value->prm_ayuda_id,
               'prm_tipodocu_id' => $value->prm_tipodocu_id,
               'prm_doc_fisico_id' => $value->prm_doc_fisico_id,
               'sis_municipio_id' => $value->sis_municipio_id,
               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
               'sis_docfuen_id' => $value->sis_docfuen_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getNnajFocali($desdexxx, $i)
   {
      $document = NnajFocali::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "NnajFocali::create([
               'id' => '$value->id',

              's_nombre_focalizacion' => '$value->s_nombre_focalizacion',
            's_lugar_focalizacion' => '$value->s_lugar_focalizacion',
            'fi_datos_basico_id' => $value->fi_datos_basico_id,
            'sis_upzbarri_id' =>$value->sis_upzbarri_id,

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
               'sis_docfuen_id' => $value->sis_docfuen_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   public function getNnajSexo($desdexxx, $i)
   {
      $document = NnajSexo::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "NnajSexo::create([
               'id' => '$value->id',
               'fi_datos_basico_id' => $value->fi_datos_basico_id,

               's_nombre_identitario' =>  '$value->s_nombre_identitario',
               'prm_sexo_id' =>  $value->prm_sexo_id,
               'prm_identidad_genero_id' =>  $value->prm_identidad_genero_id,
               'prm_orientacion_sexual_id' =>  $value->prm_orientacion_sexual_id,

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
               'sis_docfuen_id' => $value->sis_docfuen_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   
   public function getNnajSitMil($desdexxx, $i)
   {
      $document = NnajSitMil::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "NnajSitMil::create([
               'id' => '$value->id',
               'fi_datos_basico_id' => $value->fi_datos_basico_id,

               'prm_situacion_militar_id' => $value->prm_situacion_militar_id,
                'prm_clase_libreta_id' => $value->prm_clase_libreta_id,

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
               'sis_docfuen_id' => $value->sis_docfuen_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   public function getNnajUpi($desdexxx, $i)
   {
      $document = NnajUpi::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "NnajUpi::create([
               'id' => '$value->id',
               'sis_nnaj_id' => $value->sis_nnaj_id,
                'sis_depen_id' => $value->sis_depen_id,
                'prm_principa_id' => $value->prm_principa_id,

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getFiDiligenc($desdexxx, $i)
   {
      $document = FiDiligenc::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "FiDiligenc::create([
               'id' => '$value->id',
               'diligenc' => '".explode(' ',Carbon::parse($value->diligenc)->toDateTimeString())[0]."',
               'fi_datos_basico_id' => '$value->fi_datos_basico_id',

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getNnajDese($desdexxx, $i)
   {
      $document = NnajDese::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "NnajDese::create([
               'id' => '$value->id',
               'sis_servicio_id'=> '$value->sis_servicio_id',
        'nnaj_upi_id'=> '$value->nnaj_upi_id',
        'prm_principa_id'=> '$value->prm_principa_id',

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   
   public function getSisLocalupz($desdexxx, $i)
   {
      $document = SisLocalupz::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "SisLocalupz::create([
               'id' => '$value->id',
               'sis_upz_id'=> '$value->sis_upz_id', 
               'sis_localidad_id'=> '$value->sis_localidad_id',

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }


   public function getSisUpzbarri($desdexxx, $i)
   {
      $document = SisUpzbarri::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "SisUpzbarri::create([
               'id' => '$value->id',
               'sis_localupz_id'=> '$value->sis_localupz_id', 
               'sis_barrio_id'=> '$value->sis_barrio_id',  
               'simianti_id'=> '$value->simianti_id',

               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }
   
   public function getSisBarrio($desdexxx, $i)
   {
      $document = SisBarrio::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "SisBarrio::create([
               'id' => '$value->id',
               's_barrio'=> '$value->s_barrio', 
               
               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   public function getSisDepen($desdexxx, $i)
   {
      $document = SisDepen::where('id', '>=', $desdexxx)
         ->orderBy('id', 'ASC')
         ->get();
      $j = $i + 1000;
      foreach ($document as $key => $value) {
         if ($value->id >= $desdexxx && $i < $j) {
            echo "SisDepen::create([
               'id' => '$value->id',
               'nombre'=> '$value->nombre',
        'i_prm_cvital_id'=> '$value->i_prm_cvital_id',
        'i_prm_tdependen_id'=> '$value->i_prm_tdependen_id',
        'i_prm_sexo_id'=> '$value->i_prm_sexo_id',
        's_direccion'=> '$value->s_direccion',
        'sis_departam_id'=> '$value->sis_departam_id',
        'sis_municipio_id'=> '$value->sis_municipio_id',
        'estusuario_id'=> '$value->estusuario_id',
        'simianti_id'=> '$value->simianti_id',
        'sis_upzbarri_id'=> '$value->sis_upzbarri_id',
        's_telefono'=> '$value->s_telefono',
        's_correo'=> '$value->s_correo',
        'itiestan'=> '$value->itiestan',
        'itiegabe'=> '$value->itiegabe',
        'itigafin'=> '$value->itigafin',
               
               'sis_esta_id' => $value->sis_esta_id,
               'user_crea_id' => $value->user_crea_id,
               'user_edita_id' => $value->user_edita_id,
           ]);// " . $i++ . "<br>";

            if ($i == ($i + 1000) - 1) {
               break;
            }
         }
      }
   }

   
   public function getSeeder($desdexxx, $seederxx, $i)
   {
      $this->$seederxx($desdexxx, $i);
   }
}
