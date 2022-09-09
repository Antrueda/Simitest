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

        Compuesto::create(['nombre' => 'ABACAVIR', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ABACAVIR + ZIDOVUDINA + LAMIVUDINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACETAMINOFEN', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACETATO DE ALUMINIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACETATO DE MEDROXIPROGESTERONA AMPOLLA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACICLOVIR', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO ASCORBICO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO FOLICO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO FUSIDICO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ACIDO VALPROICO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALBENDAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALPRAZOLAM', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALUMINIO HIDROXIDO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ALUMINIO HIDROXIDO + MAGNESIO HIDROXIDO CON O SIN SIMETICONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'AMITRIPTILINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'AMOXICILINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'AZITROMICINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BECLOMETASONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BENZOATO DE BENCILO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BETAMETASONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BISACODILO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BLOQUEADOR SOLAR', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'BROMURO DE IPRATROPIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CALAMINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CARBAMAZEPINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CARBONATO DE CALCIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CARBONATO DE LITIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CEFALEXINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CETIRIZINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CIPROFLOXACINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLINDAMICINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLOBEZAN', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLONAZEPAM', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLORFENIRAMINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLORHIDRATO DE SERTRALINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLOTRIMAZOL  ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CLOZAPINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'COLISTINA + CORTICOIDE + NEOMICINA OTICO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'CROTAMITON ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DICLOFENACO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DICLOXACILINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DIMENHIDRINATO   ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'DOXICICLINA  ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'EMULSION DE SCOTT   ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERGOTAMINA + CAFEINA  ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERITROMICINA (ETILSUCCINATO O ESTEARATO)   ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'EMULSION DE SCOTT   ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERGOTAMINA + CAFEINA  ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ERITROMICINA (ETILSUCCINATO O ESTEARATO)   ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ESCITALOPRAM ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ESOMEPRAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'ESPIRONOLACTONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'FENITOINA SODICA    ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'FLUCONAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'FLUOXETINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GAMABENCENO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GEMFIBROZILO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GENTAMICINA 0.3% COLIRIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GLICERINA CARBONATADA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'GUAYACOLATO DE GLICERILO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HALOPERIDOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROCORTISONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROXICINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROXIDO DE ALUMINIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIDROXIDO ALUMINIO+MAGNESIO+SIMETICONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIERRO (FERROSO) SULFATO ANHIDRO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'HIOSCINA BUTIL BROMURO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'IBUPROFENO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'INSULINA ZINC CRISTALINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'INSULINA ZINC N.P.H.', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'IVERMECTINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'KETOCONAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'KETOCONAZOL SHAMPOO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'KETOTIFENO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LAMIVUDINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LAMIVUDINA + ZIDOVUDINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LEVETIRACETAM', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LEVONORGESTREL + ETINILESTRADIOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LEVOTIROXINA SODICA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LITIO CARBONATO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LOPERAMIDA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LORATADINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'LORAZEPAM', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'MANTECA CACAO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'MEBENDAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METFORMINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METOCARBAMOL ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METOCLOPRAMIDA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METOPROLOL ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METRONIDAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'METRONIDAZOL NISTATINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'MULTIVITAMINAS', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NAPROXENO SODICO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NITROFURANTOINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NITROFURAZONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'NORFLOXACINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'OLANZAPINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'OMEPRAZOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'OXIMETAZOLINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'PAROXETINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'PENICILINA G BENZATINICA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'POLIMIXINA+NEOMICINA+CORTICOIDE COLIRIO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'PREDNISOLONA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'QUETIAPINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RANITIDINA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RIFAMPICINA + ISONIAZIDA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RISPERIDONA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'RITONAVIR', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SALBUTAMOL ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SALES DE REHIDRATACION ORAL FORMULA OMS', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SERTRALINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SULFADIAZINA DE PLATA', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SUPLEMENTO NUTRICIONAL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'SUPLEMENTO PROTEICO', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TIAMINA ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TINIDAZOL ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TRAMADOL', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TRAZODONA CLORHIDRATO ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'TRIMETOPRIM + SULFAMETOXAZOL ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        Compuesto::create(['nombre' => 'VITAMINA A ', 'descripcion' => 'CREACION COMPUESTO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);




        // ADMINISTRACION DE LA PRESENTACION
        Presentacion::create(['nombre' =>  'TABLETA', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //1
        Presentacion::create(['nombre' =>  'JARABE', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //2
        Presentacion::create(['nombre' =>  'FRASCO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //3
        Presentacion::create(['nombre' =>  'AMPOLLA', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //4
        Presentacion::create(['nombre' =>  'TABLETAS', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //5
        Presentacion::create(['nombre' =>  'CREMA', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //6
        Presentacion::create(['nombre' =>  'CAPSULAS', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //7
        Presentacion::create(['nombre' =>  'SUSPENSIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //8
        Presentacion::create(['nombre' =>  'INHALADOR', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //9
        Presentacion::create(['nombre' =>  'SPRAY NASAL', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //10
        Presentacion::create(['nombre' =>  'LOCIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //11
        Presentacion::create(['nombre' =>  'SOBRE', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //12
        Presentacion::create(['nombre' =>  'CAPSULA  ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //13
        Presentacion::create(['nombre' =>  'CREMA/VAGINAL', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //14
        Presentacion::create(['nombre' =>  'TABLETA/VAGINAL', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //15
        Presentacion::create(['nombre' =>  'LOCIÓN/FRASCO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //16
        Presentacion::create(['nombre' =>  'GEL', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //17
        Presentacion::create(['nombre' =>  'GOTAS ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //18
        Presentacion::create(['nombre' =>  'FRASCO/JARABE', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //19
        Presentacion::create(['nombre' =>  'LOCION/FRASCO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //20
        Presentacion::create(['nombre' =>  'GOTAS /FRASCO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //21
        Presentacion::create(['nombre' =>  'TABLETAS MASTICABLES', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //22
        Presentacion::create(['nombre' =>  'SUSPENCIÓN', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //23
        Presentacion::create(['nombre' =>  'FRASCO/SUSPENSION ORAL', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //24
        Presentacion::create(['nombre' =>  'INYECTABLE', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //25
        Presentacion::create(['nombre' =>  'SOLUCION ORAL', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //26
        Presentacion::create(['nombre' =>  'BARRA LABIAL ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //27
        Presentacion::create(['nombre' =>  'OVULOS', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //28
        Presentacion::create(['nombre' =>  'GOTAS NASALES', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //29
        Presentacion::create(['nombre' =>  'TARRO', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //30




        // ADMINISTRACION DE LA CONCENTRACION

        Concentracion::create(['nombre' => '300MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //1
        Concentracion::create(['nombre' => '300/150/300 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //2
        Concentracion::create(['nombre' => '500 MG ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //3
        Concentracion::create(['nombre' => '120MG/5CC', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //4
        Concentracion::create(['nombre' => 'LOCION 120 ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //5
        Concentracion::create(['nombre' => '150MG/ML,1ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //6
        Concentracion::create(['nombre' => '200 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //7
        Concentracion::create(['nombre' => '800 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //8
        Concentracion::create(['nombre' => '500 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //9
        Concentracion::create(['nombre' => '5MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //10
        Concentracion::create(['nombre' => '0.02', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //11
        Concentracion::create(['nombre' => '250MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //12
        Concentracion::create(['nombre' => '500MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //13
        Concentracion::create(['nombre' => '200 MG ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //14
        Concentracion::create(['nombre' => '5ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //15
        Concentracion::create(['nombre' => '0.5MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //16
        Concentracion::create(['nombre' => '150 ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //17
        Concentracion::create(['nombre' => '10ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //18
        Concentracion::create(['nombre' => '25 MG ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //19
        Concentracion::create(['nombre' => '500 MG  ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //20
        Concentracion::create(['nombre' => '250 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //21
        Concentracion::create(['nombre' => '50MCG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //22
        Concentracion::create(['nombre' => '250MCG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //23
        Concentracion::create(['nombre' => '0.25', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //24
        Concentracion::create(['nombre' => '0.05% ', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //25
        Concentracion::create(['nombre' => '60MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //26
        Concentracion::create(['nombre' => '20MCG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //27
        Concentracion::create(['nombre' => '120ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //28
        Concentracion::create(['nombre' => '600 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //29
        Concentracion::create(['nombre' => '300 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //30
        Concentracion::create(['nombre' => '10MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //31
        Concentracion::create(['nombre' => '300MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //32
        Concentracion::create(['nombre' => '0,05%MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //33
        Concentracion::create(['nombre' => '0,5MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //34
        Concentracion::create(['nombre' => '2MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //35
        Concentracion::create(['nombre' => '4MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //36
        Concentracion::create(['nombre' => '2 MG/5ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //37
        Concentracion::create(['nombre' => '25MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //38
        Concentracion::create(['nombre' => '40G', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //39
        Concentracion::create(['nombre' => '0.01', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //40
        Concentracion::create(['nombre' => '100MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //41
        Concentracion::create(['nombre' => '15ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //42
        Concentracion::create(['nombre' => '60ML/10%', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //43
        Concentracion::create(['nombre' => '50MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //44
        Concentracion::create(['nombre' => '75MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //45
        Concentracion::create(['nombre' => '180ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //46
        Concentracion::create(['nombre' => '360ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //47
        Concentracion::create(['nombre' => '1MG/100MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //48
        Concentracion::create(['nombre' => '20MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //49
        Concentracion::create(['nombre' => '150 MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //50
        Concentracion::create(['nombre' => '200MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //51
        Concentracion::create(['nombre' => '70ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //52
        Concentracion::create(['nombre' => '60G', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //53
        Concentracion::create(['nombre' => '600MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //54
        Concentracion::create(['nombre' => '25CC', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //55
        Concentracion::create(['nombre' => '20ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //56
        Concentracion::create(['nombre' => '234MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //57
        Concentracion::create(['nombre' => '0.06', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //58
        Concentracion::create(['nombre' => '20MG/1ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //59
        Concentracion::create(['nombre' => '400MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //60
        Concentracion::create(['nombre' => '100 UI/ml, 10 ml', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //61
        Concentracion::create(['nombre' => '100 UI/ml', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //62
        Concentracion::create(['nombre' => '0.006', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //63
        Concentracion::create(['nombre' => '100ML/2%', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //64
        Concentracion::create(['nombre' => '1MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //65
        Concentracion::create(['nombre' => '50MG/5ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //66
        Concentracion::create(['nombre' => '150/300MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //67
        Concentracion::create(['nombre' => '4%/20ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //68
        Concentracion::create(['nombre' => '5 MG/ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //69
        Concentracion::create(['nombre' => 'UNIDAD', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //70
        Concentracion::create(['nombre' => '850MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //71
        Concentracion::create(['nombre' => '750MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //72
        Concentracion::create(['nombre' => 'VARIAS', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //73
        Concentracion::create(['nombre' => '0.022', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //74
        Concentracion::create(['nombre' => '2.400.000 UL.', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //75
        Concentracion::create(['nombre' => '3MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //76
        Concentracion::create(['nombre' => '100MCG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //77
        Concentracion::create(['nombre' => '28,4G', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //78
        Concentracion::create(['nombre' => '100MG/ML', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //79
        Concentracion::create(['nombre' => '800/160MG', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //80
        Concentracion::create(['nombre' => '50,000U.I', 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //81




        // ADMINISTRACION DE LA ASIGNACION DE MEDICAMENTOS
        
        AsignaMedicamentos::create(['compuesto_id' => 1, 'presentacion_id' => 1, 'concentracion_id' => 1, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 2, 'presentacion_id' => 1, 'concentracion_id' => 2, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 3, 'presentacion_id' => 1, 'concentracion_id' => 3, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 3, 'presentacion_id' => 2, 'concentracion_id' => 4, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 4, 'presentacion_id' => 3, 'concentracion_id' => 5, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 5, 'presentacion_id' => 4, 'concentracion_id' => 6, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 6, 'presentacion_id' => 5, 'concentracion_id' => 7, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 6, 'presentacion_id' => 5, 'concentracion_id' => 8, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 7, 'presentacion_id' => 5, 'concentracion_id' => 9, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 8, 'presentacion_id' => 1, 'concentracion_id' => 10, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 9, 'presentacion_id' => 6, 'concentracion_id' => 11, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 10, 'presentacion_id' => 7, 'concentracion_id' => 12, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 10, 'presentacion_id' => 7, 'concentracion_id' => 13, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 10, 'presentacion_id' => 2, 'concentracion_id' => 12, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 11, 'presentacion_id' => 5, 'concentracion_id' => 14, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 11, 'presentacion_id' => 8, 'concentracion_id' => 15, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 12, 'presentacion_id' => 5, 'concentracion_id' => 16, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 13, 'presentacion_id' => 3, 'concentracion_id' => 17, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 14, 'presentacion_id' => 1, 'concentracion_id' => 18, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 15, 'presentacion_id' => 5, 'concentracion_id' => 19, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 16, 'presentacion_id' => 7, 'concentracion_id' => 20, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 16, 'presentacion_id' => 23, 'concentracion_id' => 21, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 17, 'presentacion_id' => 7, 'concentracion_id' => 3, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 18, 'presentacion_id' => 9, 'concentracion_id' => 22, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 18, 'presentacion_id' => 9, 'concentracion_id' => 23, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 18, 'presentacion_id' => 10, 'concentracion_id' => 18, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 19, 'presentacion_id' => 11, 'concentracion_id' => 24, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 20, 'presentacion_id' => 6, 'concentracion_id' => 25, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 21, 'presentacion_id' => 5, 'concentracion_id' => 10, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 22, 'presentacion_id' => 12, 'concentracion_id' => 26, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 23, 'presentacion_id' => 9, 'concentracion_id' => 27, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 24, 'presentacion_id' => 11, 'concentracion_id' => 28, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 25, 'presentacion_id' => 5, 'concentracion_id' => 7, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 26, 'presentacion_id' => 5, 'concentracion_id' => 29, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 27, 'presentacion_id' => 5, 'concentracion_id' => 30, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 28, 'presentacion_id' => 13, 'concentracion_id' => 9, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 29, 'presentacion_id' => 5, 'concentracion_id' => 31, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 30, 'presentacion_id' => 7, 'concentracion_id' => 20, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 31, 'presentacion_id' => 7, 'concentracion_id' => 3, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 32, 'presentacion_id' => 7, 'concentracion_id' => 1, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 33, 'presentacion_id' => 6, 'concentracion_id' => 33, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 34, 'presentacion_id' => 1, 'concentracion_id' => 34, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 34, 'presentacion_id' => 1, 'concentracion_id' => 35, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 35, 'presentacion_id' => 1, 'concentracion_id' => 36, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 35, 'presentacion_id' => 2, 'concentracion_id' => 37, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 36, 'presentacion_id' => 1, 'concentracion_id' => 38, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 37, 'presentacion_id' => 6, 'concentracion_id' => 39, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 37, 'presentacion_id' => 14, 'concentracion_id' => 40, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 37, 'presentacion_id' => 15, 'concentracion_id' => 41, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 38, 'presentacion_id' => 1, 'concentracion_id' => 38, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 39, 'presentacion_id' => 21, 'concentracion_id' => 42, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 40, 'presentacion_id' => 16, 'concentracion_id' => 43, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 41, 'presentacion_id' => 17, 'concentracion_id' => 40, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 41, 'presentacion_id' => 1, 'concentracion_id' => 44, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 41, 'presentacion_id' => 4, 'concentracion_id' => 45, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 42, 'presentacion_id' => 7, 'concentracion_id' => 13, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 43, 'presentacion_id' => 2, 'concentracion_id' => 28, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 44, 'presentacion_id' => 5, 'concentracion_id' => 44, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 45, 'presentacion_id' => 7, 'concentracion_id' => 41, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 46, 'presentacion_id' => 3, 'concentracion_id' => 46, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 46, 'presentacion_id' => 3, 'concentracion_id' => 47, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 47, 'presentacion_id' => 18, 'concentracion_id' => 48, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 48, 'presentacion_id' => 7, 'concentracion_id' => 13, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 49, 'presentacion_id' => 5, 'concentracion_id' => 31, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 50, 'presentacion_id' => 5, 'concentracion_id' => 49, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 51, 'presentacion_id' => 5, 'concentracion_id' => 41, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 52, 'presentacion_id' => 7, 'concentracion_id' => 41, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 53, 'presentacion_id' => 7, 'concentracion_id' => 50, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 53, 'presentacion_id' => 7, 'concentracion_id' => 51, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 54, 'presentacion_id' => 5, 'concentracion_id' => 38, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 54, 'presentacion_id' => 19, 'concentracion_id' => 52, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 55, 'presentacion_id' => 20, 'concentracion_id' => 53, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 56, 'presentacion_id' => 5, 'concentracion_id' => 54, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 57, 'presentacion_id' => 21, 'concentracion_id' => 15, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 58, 'presentacion_id' => 21, 'concentracion_id' => 55, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 59, 'presentacion_id' => 19, 'concentracion_id' => 18, 'estusuario_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); //
        AsignaMedicamentos::create(['compuesto_id' => 60,'presentacion_id' => 21,'concentracion_id' => 56,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 61,'presentacion_id' => 6,'concentracion_id' => 40,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 62,'presentacion_id' => 5,'concentracion_id' => 38,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 63,'presentacion_id' => 22,'concentracion_id' => 57,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 63,'presentacion_id' => 23,'concentracion_id' => 58,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 64,'presentacion_id' => 24,'concentracion_id' => 47,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => ,'presentacion_id' => 12,'concentracion_id' => 18,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 65,'presentacion_id' => 1,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 66,'presentacion_id' => 1,'concentracion_id' => 31,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 66,'presentacion_id' => 4,'concentracion_id' => 59,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 67,'presentacion_id' => 5,'concentracion_id' => 60,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 68,'presentacion_id' => 25,'concentracion_id' => 61,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 69,'presentacion_id' => 25,'concentracion_id' => 62,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 70,'presentacion_id' => 21,'concentracion_id' => 63,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 71,'presentacion_id' => 5,'concentracion_id' => 51,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 72,'presentacion_id' => 3,'concentracion_id' => 64,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 73,'presentacion_id' => 5,'concentracion_id' => 65,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 74,'presentacion_id' => 5,'concentracion_id' => 66,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 75,'presentacion_id' => 5,'concentracion_id' => 67,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 76,'presentacion_id' => 5,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 77,'presentacion_id' => 5,'concentracion_id' => 38,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 77,'presentacion_id' => 26,'concentracion_id' => 68,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 79,'presentacion_id' => 5,'concentracion_id' => 27,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 80,'presentacion_id' => 5,'concentracion_id' => 22,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 81,'presentacion_id' => 5,'concentracion_id' => 1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 82,'presentacion_id' => 5,'concentracion_id' => 35,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 83,'presentacion_id' => 5,'concentracion_id' => 31,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => ,'presentacion_id' => 2,'concentracion_id' => 69,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 84,'presentacion_id' => 5,'concentracion_id' => 65,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 85,'presentacion_id' => 27,'concentracion_id' => 70,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 86,'presentacion_id' => 5,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 87,'presentacion_id' => 5,'concentracion_id' => 71,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 88,'presentacion_id' => 5,'concentracion_id' => 72,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 89,'presentacion_id' => 5,'concentracion_id' => 31,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 90,'presentacion_id' => 5,'concentracion_id' => 66,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 91,'presentacion_id' => 28,'concentracion_id' => 13,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 91,'presentacion_id' => 5,'concentracion_id' => 13,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 92,'presentacion_id' => 28,'concentracion_id' => 13,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 93,'presentacion_id' => 5,'concentracion_id' => 73,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 94,'presentacion_id' => 5,'concentracion_id' => 12,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 95,'presentacion_id' => 5,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 96,'presentacion_id' => 6,'concentracion_id' => 74,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 97,'presentacion_id' => 5,'concentracion_id' => 60,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 98,'presentacion_id' => 1,'concentracion_id' => 10,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 99,'presentacion_id' => 7,'concentracion_id' => 49,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 100,'presentacion_id' => 29,'concentracion_id' => 42,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 101,'presentacion_id' => 5,'concentracion_id' => 49,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 102,'presentacion_id' => 4,'concentracion_id' => 75,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 103,'presentacion_id' => 21,'concentracion_id' => 15,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 104,'presentacion_id' => 5,'concentracion_id' => 10,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 105,'presentacion_id' => 5,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 105,'presentacion_id' => 5,'concentracion_id' => 38,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 106,'presentacion_id' => 5,'concentracion_id' => 1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 107,'presentacion_id' => 7,'concentracion_id' => 1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 108,'presentacion_id' => 1,'concentracion_id' => 65,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 108,'presentacion_id' => 1,'concentracion_id' => 35,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 108,'presentacion_id' => 1,'concentracion_id' => 76,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 109,'presentacion_id' => 1,'concentracion_id' => 41,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 110,'presentacion_id' => 9,'concentracion_id' => 77,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 111,'presentacion_id' => 12,'concentracion_id' => 78,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 112,'presentacion_id' => 1,'concentracion_id' => 66,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 113,'presentacion_id' => 6,'concentracion_id' => 40,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 114,'presentacion_id' => 30,'concentracion_id' => 73,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 115,'presentacion_id' => 30,'concentracion_id' => 73,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 116,'presentacion_id' => 1,'concentracion_id' => 1,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 117,'presentacion_id' => 5,'concentracion_id' => 13,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 118,'presentacion_id' => 21,'concentracion_id' => 79,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 119,'presentacion_id' => 5,'concentracion_id' => 66,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 120,'presentacion_id' => 1,'concentracion_id' => 80,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//
        AsignaMedicamentos::create(['compuesto_id' => 121,'presentacion_id' => 7,'concentracion_id' => 81,'estusuario_id' => 71,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);//



    }
}
