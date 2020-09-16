<?php

use App\Models\Sistema\SisEnprsa;
use Illuminate\Database\Seeder;

class SisEnprsaSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        SisEnprsa::create([
            's_enprsa' => strtoupper($dataxxxx['enprsaxx']), 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->getR(['enprsaxx' => 'SALUDTOTAL']); //1
        $this->getR(['enprsaxx' => 'COLSANITAS']); //2
        $this->getR(['enprsaxx' => 'AMBUQ EPSS']); //3
        $this->getR(['enprsaxx' => 'ANAS WAYUU EPS INDIGENA']); //4
        $this->getR(['enprsaxx' => 'ASMET SALUD']); //5
        $this->getR(['enprsaxx' => 'ASOCIACIÓN INDIGENA DEL CAUCA']); //6
        $this->getR(['enprsaxx' => 'ASOCIACION MUTUAL SER ESS']); //7
        $this->getR(['enprsaxx' => 'ALIANSALUD EPS S.A.']); //8
        $this->getR(['enprsaxx' => 'CAPITAL SALUD EPS']); //9
        $this->getR(['enprsaxx' => 'CAPRESOCA E.P.S.']); //10
        $this->getR(['enprsaxx' => 'CCF CAJACOPI ATLANTICO']); //11
        $this->getR(['enprsaxx' => 'CCF DE LA GUAJIRA']); //12
        $this->getR(['enprsaxx' => 'CCF DE NARIÑO']); //13
        $this->getR(['enprsaxx' => 'COMFABOY']); //14
        $this->getR(['enprsaxx' => 'COMFACOR']); //15
        $this->getR(['enprsaxx' => 'COMFACUNDI EPS-S']); //16
        $this->getR(['enprsaxx' => 'COMFAMILIAR CARTAGENA']); //17
        $this->getR(['enprsaxx' => 'COMFAMILIAR CHOCO']); //18
        $this->getR(['enprsaxx' => 'COMFAMILIAR HUILA']); //19
        $this->getR(['enprsaxx' => 'COMFAORIENTE']); //20
        $this->getR(['enprsaxx' => 'COMFASUCRE']); //21
        $this->getR(['enprsaxx' => 'COMFENALCO VALLE E.P.S.']); //22
        $this->getR(['enprsaxx' => 'COMPARTA']); //23
        $this->getR(['enprsaxx' => 'COMPENSAR E.P.S.']); //24
        $this->getR(['enprsaxx' => 'CONVIDA E.P.S.']); //25
        $this->getR(['enprsaxx' => 'COOMEVA E.P.S. S.A.']); //26
        $this->getR(['enprsaxx' => 'COOSALUD EPS']); //27
        $this->getR(['enprsaxx' => 'CRUZ BLANCA EPS S.A.']); //28
        $this->getR(['enprsaxx' => 'DUSAKAWI E.P.S.I']); //29
        $this->getR(['enprsaxx' => 'ECOOPSOS ESS']); //30
        $this->getR(['enprsaxx' => 'EMDISALUD E.S.S.']); //31
        $this->getR(['enprsaxx' => 'EMSSANAR ESS']); //32
        $this->getR(['enprsaxx' => 'EPS FAMISANAR LTDA']); //33
        $this->getR(['enprsaxx' => 'EPS SURAMERICANA S.A.']); //34
        $this->getR(['enprsaxx' => 'MALLAMAS EPSI']); //35
        $this->getR(['enprsaxx' => 'MEDIMÁS EPS']); //36
        $this->getR(['enprsaxx' => 'NUEVA EPS']); //37
        $this->getR(['enprsaxx' => 'PIJAOS SALUD EPSI']); //38
        $this->getR(['enprsaxx' => 'SALUD TOTAL S.A. EPS']); //39
        $this->getR(['enprsaxx' => 'SALUDVIDA E.P.S. S.A.']); //40
        $this->getR(['enprsaxx' => 'SANITAS S.A. E.P.S.']); //41
        $this->getR(['enprsaxx' => 'SAVIA SALUD EPS']); //42
        $this->getR(['enprsaxx' => 'SERVICIO OCCIDENTAL DE SALUD SOS EPS']); //43

        $this->getR(['enprsaxx' => 'SOLSALUD']); //44
        $this->getR(['enprsaxx' => 'Población habitante de calle']); //45
        $this->getR(['enprsaxx' => 'Población ICBF']); //46
        $this->getR(['enprsaxx' => 'Comunidad indígena']); //47
        $this->getR(['enprsaxx' => 'Población desplazada']); //48
        $this->getR(['enprsaxx' => 'Víctimas del conflicto armado']); //49
        $this->getR(['enprsaxx' => 'Pueblo RROM']); //50
        $this->getR(['enprsaxx' => 'Menores desvinculados del conflicto armado']); //51
        $this->getR(['enprsaxx' => 'Población desmovilizada']); //52
        $this->getR(['enprsaxx' => 'Población privada de la libertad']); //53
        $this->getR(['enprsaxx' => 'Población migrante de la República Bolivariana de Venezuela']); //54
        $this->getR(['enprsaxx' => 'Fuerzas militares']); //55
        $this->getR(['enprsaxx' => 'SISBEN Departamental']); //56
        $this->getR(['enprsaxx' => 'SISBEN Distrital']); //57
        $this->getR(['enprsaxx' => 'Instrumento provisional']); //58






    }
}
