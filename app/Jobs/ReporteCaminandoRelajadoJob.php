<?php

namespace App\Jobs;

use App\Exports\CaminandoRelajado\ReporteGeneralCaminandoRelajadoExport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ReporteCaminandoRelajadoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $datafilter;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($datafilter)
    {
        $this->datafilter = $datafilter;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        ob_end_clean();
        ob_start();
        return (new ReporteGeneralCaminandoRelajadoExport($this->datafilter))->download('reporte-general.xlsx');
    }
}
