<?php

use App\Models\Sistema\SisCargo;
use Illuminate\Database\Seeder;

class SisCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisCargo::create(['id' => 1, 's_cargo' => 'INGENIERO DE SISTEMAS', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        SisCargo::create(['id' => 2, 's_cargo' => 'TÉCNICO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 2
        SisCargo::create(['id' => 3, 's_cargo' => 'ABOGADO (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 3
        SisCargo::create(['id' => 4, 's_cargo' => 'ADMINISTRADOR-SIMI', 'itiestan' => 10, 'itiegabe' => 5, 'itigafin' => 5, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 4
        SisCargo::create(['id' => 5, 's_cargo' => 'AUXILIAR ADMINISTRATIVO (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 5
        SisCargo::create(['id' => 6, 's_cargo' => 'AUXILIAR DE ENFERMERÍA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 6
        SisCargo::create(['id' => 7, 's_cargo' => 'ESTILISTA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 7
        SisCargo::create(['id' => 8, 's_cargo' => 'FACILITADOR (A) DE CONVIVENCIA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 8
        SisCargo::create(['id' => 9, 's_cargo' => 'FONOAUDIOLOGO (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 9
        SisCargo::create(['id' => 10, 's_cargo' => 'MEDICO(A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 10
        SisCargo::create(['id' => 11, 's_cargo' => 'NUTRICIONISTA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 11
        SisCargo::create(['id' => 12, 's_cargo' => 'ODONTOLOGO (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 12
        SisCargo::create(['id' => 13, 's_cargo' => 'PSICÓLOGO(A)', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 9, 'sis_esta_id' => 1]); // 13
        SisCargo::create(['id' => 14, 's_cargo' => 'PSICÓLOGO(A) CLINICO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 14
        SisCargo::create(['id' => 15, 's_cargo' => 'PSICOPEDAGOGO (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 15
        SisCargo::create(['id' => 16, 's_cargo' => 'SOCIOLOGO (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 16
        SisCargo::create(['id' => 17, 's_cargo' => 'TRABAJADOR(A) SOCIAL', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 9, 'sis_esta_id' => 1]); // 17
        SisCargo::create(['id' => 18, 's_cargo' => 'TUTOR (A) DE CONVIVENCIA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 2]); // 18
        SisCargo::create(['id' => 19, 's_cargo' => 'TUTOR (A) DE VIVIENDA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 2]); // 19
        SisCargo::create(['id' => 20, 's_cargo' => 'TERAPEUTA OCUPACIONAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 20
        SisCargo::create(['id' => 21, 's_cargo' => 'PROMOTOR (A) SOCIAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 21
        SisCargo::create(['id' => 22, 's_cargo' => 'REFERENTE LOCAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 22
        SisCargo::create(['id' => 23, 's_cargo' => 'RESPONSABLE UPI/AREA/COORDINADOR', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 23
        SisCargo::create(['id' => 24, 's_cargo' => 'REFERENTE TERRITORIAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 24
        SisCargo::create(['id' => 25, 's_cargo' => 'FACILITADOR DE ZONA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 25
        SisCargo::create(['id' => 26, 's_cargo' => 'ENFERMERA (O) JEFE', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 26
        SisCargo::create(['id' => 27, 's_cargo' => 'COORDINADOR LOCAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 27
        SisCargo::create(['id' => 28, 's_cargo' => 'ASESOR JURIDICO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 28
        SisCargo::create(['id' => 29, 's_cargo' => 'MONITOR', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 29
        SisCargo::create(['id' => 30, 's_cargo' => 'APOYO ACADEMICO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 30
        SisCargo::create(['id' => 31, 's_cargo' => 'USUARIOS-CONSULTA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 31
        SisCargo::create(['id' => 32, 's_cargo' => 'MONITOR FORMACION TECNICA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 32
        SisCargo::create(['id' => 33, 's_cargo' => 'COORDINADOR (A) ACADEMICA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 33
        SisCargo::create(['id' => 34, 's_cargo' => 'DOCENTES', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 34
        SisCargo::create(['id' => 35, 's_cargo' => 'COORDINADOR (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 35
        SisCargo::create(['id' => 36, 's_cargo' => 'PSICÓLOGO-SOCIO LEGAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 36
        SisCargo::create(['id' => 37, 's_cargo' => 'TALLERISTA VOCACIONAL', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 37
        SisCargo::create(['id' => 38, 's_cargo' => 'LIDER ADMINISTRATIVO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 38
        SisCargo::create(['id' => 39, 's_cargo' => 'AREA-ESPIRITUALIDAD', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 39
        SisCargo::create(['id' => 40, 's_cargo' => 'EQUIPO EMPRENDER', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 40
        SisCargo::create(['id' => 41, 's_cargo' => 'AREA MITIGACION', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 41
        SisCargo::create(['id' => 42, 's_cargo' => 'TALLERISTA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 42
        SisCargo::create(['id' => 43, 's_cargo' => 'MEDICO ESPECIALISTA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 43
        SisCargo::create(['id' => 44, 's_cargo' => 'GESTOR OPERATIVO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 44
        SisCargo::create(['id' => 45, 's_cargo' => 'COORDINADOR (A) COMEDORES', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 45
        SisCargo::create(['id' => 46, 's_cargo' => 'APOYO ADMINISTRATIVO CONVENIOS', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 46
        SisCargo::create(['id' => 47, 's_cargo' => 'INGENIERA DE ALIMENTOS', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 47
        SisCargo::create(['id' => 48, 's_cargo' => 'TECNICO ADMINISTRATIVO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 48
        SisCargo::create(['id' => 49, 's_cargo' => 'FACILITADOR (A) ESCNNA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 49
        SisCargo::create(['id' => 50, 's_cargo' => 'COORDINADORA DE ZONA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 50
        SisCargo::create(['id' => 51, 's_cargo' => 'ASESOR (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 51
        SisCargo::create(['id' => 52, 's_cargo' => 'RESPONSABLE PLANILLA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 52
        SisCargo::create(['id' => 53, 's_cargo' => 'PSICÓLOGO CLINICO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 53
        SisCargo::create(['id' => 54, 's_cargo' => 'MEDICO TERAPIAS ALTERNATIVAS', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 54
        SisCargo::create(['id' => 55, 's_cargo' => 'TRABAJADOR SOCIAL OBRA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 55
        SisCargo::create(['id' => 56, 's_cargo' => 'PSICOCIALCONVENIO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 56
        SisCargo::create(['id' => 57, 's_cargo' => 'APOYO A LA DIVERSIDAD', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 57
        SisCargo::create(['id' => 58, 's_cargo' => 'CARGO NO IDENTIFICADO', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 58
        SisCargo::create(['id' => 59, 's_cargo' => 'FORMADOR ESTRATEGIA CULTURA CIUDADANA', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 59
        SisCargo::create(['id' => 60, 's_cargo' => 'CUIDADOR (A)', 'itiestan' => 10, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 60
        SisCargo::create(['id' => 61, 's_cargo' => 'MONITOR ZONA', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 61
        SisCargo::create(['id' => 62, 's_cargo' => 'APOYO ADMINISTRATIVO', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 62
        SisCargo::create(['id' => 63, 's_cargo' => 'PSICÓLOGO(A) A.C', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 9, 'sis_esta_id' => 1]); // 63
        SisCargo::create(['id' => 64, 's_cargo' => 'TRABAJADOR (A) SOCIAL A.C', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 9, 'user_edita_id' => 9, 'sis_esta_id' => 1]); // 64
        SisCargo::create(['id' => 65, 's_cargo' => 'SUPERVISOR (A) CONTRATO', 'itiestan' => 9, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 65
        SisCargo::create(['id' => 66, 's_cargo' => 'ADMINISTRATIVO (A) SICOSOCIAL', 'itiestan' => 9, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 66
        SisCargo::create(['id' => 67, 's_cargo' => 'TUTORES', 'itiestan' => 0, 'itiegabe' => 0, 'itigafin' => 0, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]); // 67
    }
}
