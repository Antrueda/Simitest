<?php

use App\Models\Acciones\Individuales\salud\Medicina\AsignaMedicamentos;
use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Salud\Medicina\Compuesto;
use App\Models\Acciones\Individuales\salud\Medicina\Concentracion;
use App\Models\Acciones\Individuales\salud\Medicina\Presentacion;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMINISTRACION DEL COMPUESTO 

        Compuesto::create(['nombre' => 'ABACAVIR','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ABACAVIR + ZIDOVUDINA + LAMIVUDINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACETAMINOFEN','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACETATO DE ALUMINIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACETATO DE MEDROXIPROGESTERONA AMPOLLA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACICLOVIR','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO ASCORBICO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO FOLICO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO FUSIDICO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO VALPROICO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALBENDAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALPRAZOLAM','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALUMINIO HIDROXIDO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALUMINIO HIDROXIDO + MAGNESIO HIDROXIDO CON O SIN SIMETICONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'AMITRIPTILINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'AMOXICILINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'AZITROMICINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BECLOMETASONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BENZOATO DE BENCILO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BETAMETASONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BISACODILO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BLOQUEADOR SOLAR','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BROMURO DE IPRATROPIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CALAMINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CARBAMAZEPINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CARBONATO DE CALCIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CARBONATO DE LITIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CEFALEXINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CETIRIZINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CIPROFLOXACINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLINDAMICINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLOBEZAN','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLONAZEPAM','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLORFENIRAMINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLORHIDRATO DE SERTRALINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLOTRIMAZOL  ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLOZAPINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'COLISTINA + CORTICOIDE + NEOMICINA OTICO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CROTAMITON ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DICLOFENACO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DICLOXACILINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DIMENHIDRINATO   ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DOXICICLINA  ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'EMULSION DE SCOTT   ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERGOTAMINA + CAFEINA  ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERITROMICINA (ETILSUCCINATO O ESTEARATO)   ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'EMULSION DE SCOTT   ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERGOTAMINA + CAFEINA  ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERITROMICINA (ETILSUCCINATO O ESTEARATO)   ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ESCITALOPRAM ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ESOMEPRAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ESPIRONOLACTONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'FENITOINA SODICA    ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'FLUCONAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'FLUOXETINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GAMABENCENO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GEMFIBROZILO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GENTAMICINA 0.3% COLIRIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GLICERINA CARBONATADA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GUAYACOLATO DE GLICERILO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HALOPERIDOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROCORTISONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROXICINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROXIDO DE ALUMINIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROXIDO ALUMINIO+MAGNESIO+SIMETICONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIERRO (FERROSO) SULFATO ANHIDRO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIOSCINA BUTIL BROMURO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'IBUPROFENO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'INSULINA ZINC CRISTALINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'INSULINA ZINC N.P.H.','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'IVERMECTINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'KETOCONAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'KETOCONAZOL SHAMPOO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'KETOTIFENO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LAMIVUDINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LAMIVUDINA + ZIDOVUDINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LEVETIRACETAM','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LEVONORGESTREL + ETINILESTRADIOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LEVOTIROXINA SODICA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LITIO CARBONATO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LOPERAMIDA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LORATADINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LORAZEPAM','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'MANTECA CACAO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'MEBENDAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METFORMINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METOCARBAMOL ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METOCLOPRAMIDA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METOPROLOL ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METRONIDAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METRONIDAZOL NISTATINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'MULTIVITAMINAS','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NAPROXENO SODICO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NITROFURANTOINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NITROFURAZONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NORFLOXACINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'OLANZAPINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'OMEPRAZOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'OXIMETAZOLINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'PAROXETINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'PENICILINA G BENZATINICA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'POLIMIXINA+NEOMICINA+CORTICOIDE COLIRIO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'PREDNISOLONA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'QUETIAPINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RANITIDINA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RIFAMPICINA + ISONIAZIDA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RISPERIDONA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RITONAVIR','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SALBUTAMOL ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SALES DE REHIDRATACION ORAL FORMULA OMS','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SERTRALINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SULFADIAZINA DE PLATA','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SUPLEMENTO NUTRICIONAL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SUPLEMENTO PROTEICO','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TIAMINA ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TINIDAZOL ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TRAMADOL','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TRAZODONA CLORHIDRATO ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TRIMETOPRIM + SULFAMETOXAZOL ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'VITAMINA A ','descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);


        // ADMINISTRACION DE LA PRESENTACION

        Presentacion::create(['nombre' => 'TABLETA','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'JARABE','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'FRASCO','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'AMPOLLA','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'CREMA','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'CAPSULAS','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'SUSPENSIÓN','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'INHALADOR','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'SPRAY NASAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'LOCIÓN','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'SOBRE','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'CREMA/VAGINAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'TABLETA/VAGINAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'FRASCO/GOTAS','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'SOBRE','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'GOTAS NASALES','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'SOLUCION ORAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'TARRO','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'OVULOS','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'BARRA LABIAL ','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'TABLETAS MASTICABLES','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'FRASCO/SUSPENSION ORAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'FRASCO/JARABE','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'LOCIÓN/FRASCO','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'FRASCO/SUSPENSION ORAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'FRASCO/SUSPENSION ORAL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'GEL','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Presentacion::create(['nombre' => 'GOTAS','descripcion' => 'CREACION PRESENTACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);


        // ADMINISTRACION DE LA CONCENTRACION

        Concentracion::create(['nombre' => '300MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '300/150/300 MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '500MG ','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '120MG/5CC','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => 'LOCION 120 ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //5//

        Concentracion::create(['nombre' => '150MG/ML,1ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '200MG ','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '800MG ','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '4%/20ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '5MG ','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
       //10

        Concentracion::create(['nombre' => '2%','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '0.5MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '50MCG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '150ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '10ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //15
        Concentracion::create(['nombre' => '5MG/ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => 'UNIDAD','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '850MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '750MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '10MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //20
       
        Concentracion::create(['nombre' => '50MG/5ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '250MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '100MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '2,2%','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '400MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //25
        
        Concentracion::create(['nombre' => '15MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '20MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '2.400.000 UL.','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '5ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '25MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //30

        Concentracion::create(['nombre' => '1MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '2MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '3MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '28,4G','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '1%','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //35
       
        Concentracion::create(['nombre' => 'VARIAS','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '100MG/ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '50MG/5ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '800/160MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '50,000U.I','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //40
        
        Concentracion::create(['nombre' => '25%','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '0.05%','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '60MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '120ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '250MCG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
       //45
       
        Concentracion::create(['nombre' => '20MCG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '600MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '4MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '2MG/5ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '40MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        //50

        Concentracion::create(['nombre' => '60MG/10%','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '50MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '75MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '180ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '360ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //55
        Concentracion::create(['nombre' => '1MG/100MG','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '70ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '60G','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '25CC','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Concentracion::create(['nombre' => '20ML','descripcion' => 'CREACION CONCENTRACIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);


        // ADMINISTRACION DE LA ASIGNACION DE MEDICAMENTOS




        AsignaMedicamentos::create(['compuesto_id' =>1,'presentacion_id' =>1,'concentracion_id' => 1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>2,'presentacion_id' =>1,'concentracion_id' => 2,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>3,'presentacion_id' =>1,'concentracion_id' => 3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>3,'presentacion_id' =>2,'concentracion_id' => 4,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>4,'presentacion_id' =>3,'concentracion_id' => 5,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>5,'presentacion_id' =>4,'concentracion_id' => 6,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>6,'presentacion_id' =>1,'concentracion_id' => 7,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>6,'presentacion_id' =>1,'concentracion_id' => 8,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>7,'presentacion_id' =>1,'concentracion_id' => 3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>8,'presentacion_id' =>1,'concentracion_id' => 10,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>9,'presentacion_id' =>5,'concentracion_id' => 11,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>10,'presentacion_id' =>6,'concentracion_id' => 22,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>10,'presentacion_id' =>6,'concentracion_id' => 3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>10,'presentacion_id' =>2,'concentracion_id' => 22,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>11,'presentacion_id' =>1,'concentracion_id' => 7,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>11,'presentacion_id' =>7,'concentracion_id' => 29,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>12,'presentacion_id' =>1,'concentracion_id' => 12,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>13,'presentacion_id' =>3,'concentracion_id' => 14,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>14,'presentacion_id' =>1,'concentracion_id' => 15,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>15,'presentacion_id' =>1,'concentracion_id' => 30,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>16,'presentacion_id' =>6,'concentracion_id' => 3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>16,'presentacion_id' =>7,'concentracion_id' => 22,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>17,'presentacion_id' =>6,'concentracion_id' => 3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>18,'presentacion_id' =>8,'concentracion_id' => 13,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>18,'presentacion_id' =>8,'concentracion_id' => 45,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>18,'presentacion_id' =>9,'concentracion_id' => 15,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>19,'presentacion_id' =>10,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>20,'presentacion_id' =>5,'concentracion_id' => 42,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>21,'presentacion_id' =>1,'concentracion_id' => 10,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>22,'presentacion_id' =>11,'concentracion_id' => 43,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>23,'presentacion_id' =>8,'concentracion_id' => 46,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>24,'presentacion_id' =>10,'concentracion_id' => 44,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>25,'presentacion_id' =>1,'concentracion_id' => 7,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>26,'presentacion_id' =>1,'concentracion_id' => 47,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>27,'presentacion_id' =>1,'concentracion_id' => 1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>28,'presentacion_id' =>6,'concentracion_id' => 3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>29,'presentacion_id' =>1,'concentracion_id' =>20,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>30,'presentacion_id' =>6,'concentracion_id' =>3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>31,'presentacion_id' =>6,'concentracion_id' =>3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>32,'presentacion_id' =>6,'concentracion_id' =>1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>33,'presentacion_id' =>5,'concentracion_id' =>42,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]); 
        AsignaMedicamentos::create(['compuesto_id' =>34,'presentacion_id' =>1,'concentracion_id' =>12,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>34,'presentacion_id' =>1,'concentracion_id' =>32,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>35,'presentacion_id' =>1,'concentracion_id' =>48,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>35,'presentacion_id' =>2,'concentracion_id' =>49,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>36,'presentacion_id' =>1,'concentracion_id' =>30,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>37,'presentacion_id' =>5,'concentracion_id' =>50,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>37,'presentacion_id' =>12,'concentracion_id' =>35,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>37,'presentacion_id' =>13,'concentracion_id' =>23,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>38,'presentacion_id' =>1,'concentracion_id' =>30,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>39,'presentacion_id' =>14,'concentracion_id' =>26,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>40,'presentacion_id' =>24,'concentracion_id' =>51,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>41,'presentacion_id' =>27,'concentracion_id' =>35,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>41,'presentacion_id' =>1,'concentracion_id' =>52,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>41,'presentacion_id' =>4,'concentracion_id' =>53,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>42,'presentacion_id' =>6,'concentracion_id' =>3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>43,'presentacion_id' =>2,'concentracion_id' =>44,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>44,'presentacion_id' =>1,'concentracion_id' =>52,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>45,'presentacion_id' =>6,'concentracion_id' =>23,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>46,'presentacion_id' =>3,'concentracion_id' =>54,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>46,'presentacion_id' =>3,'concentracion_id' =>55,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>47,'presentacion_id' =>28,'concentracion_id' =>56,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>48,'presentacion_id' =>6,'concentracion_id' =>3,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>49,'presentacion_id' =>1,'concentracion_id' =>20,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>50,'presentacion_id' =>1,'concentracion_id' =>27,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>51,'presentacion_id' =>1,'concentracion_id' =>23,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>52,'presentacion_id' =>6,'concentracion_id' =>23,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>53,'presentacion_id' =>6,'concentracion_id' =>6,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>54,'presentacion_id' =>1,'concentracion_id' =>30,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>54,'presentacion_id' =>23,'concentracion_id' =>57,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>55,'presentacion_id' =>24,'concentracion_id' =>58,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>56,'presentacion_id' =>1,'concentracion_id' =>47,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>57,'presentacion_id' =>14,'concentracion_id' =>29,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>58,'presentacion_id' =>14,'concentracion_id' =>59,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>59,'presentacion_id' =>23,'concentracion_id' =>44,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        AsignaMedicamentos::create(['compuesto_id' =>60,'presentacion_id' =>14,'concentracion_id' =>60,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  

    }
}
