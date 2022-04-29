<?php

namespace App\Console\Commands;

use DateTime;
use DateTimeZone;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Acciones\Grupales\Educacion\IEstadoMs;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;

class GestMatrEstadoInasistencia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'matricula:estadoinasistencia';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear estado de matricula por numero de inaxistencias administrables por UPI, todos los dias antes de 24:00';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = new DateTime();
        $hoy = $date->setTimezone(new DateTimeZone('America/Bogota'))->format("Y-m-d");

        $dataxxxx = IMatriculaNnaj::with('ultimaPlanillasAsistencia')->select([
            'i_matricula_nnajs.id',
            'i_matriculas.id as matricula',
            'i_matricula_nnajs.sis_nnaj_id', 
             'sis_depens.maxinasistencia', 
             'i_matriculas.fecha',
        ])
            ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id')
            ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
            ->join('sis_depens', 'i_matriculas.prm_upi_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
            ->where('i_matricula_nnajs.sis_esta_id', 1)
            ->where('i_estado_ms.id', null)
            ->get()->toArray();
        foreach ($dataxxxx as $key => $matriculannaj) {
            $asistencias=count($matriculannaj['ultima_planillas_asistencia']);
            if ($asistencias == 0 ) {
                 $fecha1= new DateTime($matriculannaj['fecha']);
                 $diff = $date->diff($fecha1);

                if ($diff->days >= intval($matriculannaj['maxinasistencia'])) {
                     $respuest = IEstadoMs::create([
                        'id' => $matriculannaj['id'],
                        'fechdili' => $hoy,
                        'prm_estado_matri'=>2775,
                        'prm_motivo_reti'=>2776,
                        'prm_mot_aplazad'=>null,
                        'descripcion'=>'Estado retiro automático por inasistencia.',
                        'user_fun_id'=>1,
                        'user_crea_id'=>1,
                        'user_edita_id'=>1,
                    ]);
                }
            }else{
                $fecha1= new DateTime($matriculannaj['ultima_planillas_asistencia'][0]['created_at']);
                $diff = $date->diff($fecha1);
                if ($diff->days >= intval($matriculannaj['maxinasistencia'])) {
                    $respuest = IEstadoMs::create([
                       'id' => $matriculannaj['id'],
                       'fechdili' => $hoy,
                       'prm_estado_matri'=>2775,
                       'prm_motivo_reti'=>2776,
                       'prm_mot_aplazad'=>null,
                       'descripcion'=>'Estado retiro automático por inasistencia.',
                       'user_fun_id'=>1,
                       'user_crea_id'=>1,
                       'user_edita_id'=>1,
                   ]);
               }
            }
        }
    }
}
