<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHUsersTable extends Migration
{
    private $tablaxxx = 'h_users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('email');
            $table->string('s_documento');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->date('password_change_at')->comment('FECHA PARA EL PROXIMO CAMBIO DE CONTRASEÑA');
            $table->date('password_reset_at')->nullable()->comment('FECHA EN QUE SE REALIZA EL RECETEO DE LA CONTRASEÑA');
            $table->string('s_telefono');
            $table->string('s_matriculap')->nullable();
            $table->date('d_vinculacion');
            $table->Integer('itiestan')->nullable()->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->nullable()->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->nullable()->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->integer('sis_cargo_id');
            $table->date('d_finvinculacion');
            $table->integer('prm_tvinculacion_id');
            $table->integer('sis_municipio_id');
            $table->integer('estusuario_id')->unsigned()->nullable();
            $table->integer('prm_documento_id');
            $table->rememberToken();
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
