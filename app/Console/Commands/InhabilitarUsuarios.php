<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InhabilitarUsuarios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'disable:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inhabilitar Usuarios Con Fecha de Contrato Menor a la fecha actual cada 6 Horas.';

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
        $userList = User::where('d_finvinculacion', '<=', Carbon::now())->where('sis_esta_id', '=', 1)->get(['id']);
        foreach ($userList as $index => $value) {
            $user = User::find($value->id);
            $user->update(['sis_esta_id' => 2, 'estusuario_id' => 2]); //Se actualiza el estatus del usuario y la justificación 
            DB::table('area_user')->where('user_id', $value->id)->update(['sis_esta_id' => 2]);// Se actualiza el estado a inactivo de area
            DB::table('SIS_DEPEN_USER')->where('user_id', $value->id)->update(['sis_esta_id' => 2]);// Se actualiza el estado a incativo dependencias
        }
    }
}
