-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-02-2021 a las 16:25:32
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simicr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_actividads`
--
-- Error leyendo la estructura de la tabla simicr.ag_actividads: #1932 - Table 'simicr.ag_actividads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_actividads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_actividads`' en la linea 1

--
-- Disparadores `ag_actividads`
--
DROP TRIGGER IF EXISTS `trigger_ag_actividads_edita`;
DELIMITER $$
CREATE TRIGGER `trigger_ag_actividads_edita` AFTER UPDATE ON `ag_actividads` FOR EACH ROW BEGIN
        INSERT INTO h_ag_actividads (
                `id_old`
                ,`d_registro`
                ,`area_id`
                ,`sis_deporigen_id`
                ,`sis_depdestino_id`
                ,`ag_tema_id`
                ,`i_prm_lugar_id`
                ,`ag_taller_id`
                ,`ag_sttema_id`
                ,`i_prm_dirig_id`
                ,`s_prm_espac`
                ,`sis_entidad_id`
                ,`s_introduc`
                ,`s_justific`
                ,`s_objetivo`
                ,`s_metodolo`
                ,`s_categori`
                ,`s_contenid`
                ,`s_estrateg`
                ,`s_resultad`
                ,`s_evaluaci`
                ,`s_observac`
                ,`user_crea_id`
                ,`user_edita_id`
                ,`sis_esta_id`
                ,`metodoxx`
                ,`rutaxxxx`
                ,`ipxxxxxx`
                ,`created_at`
                ,`updated_at`
        )
        VALUES (
                NEW.id
                ,NEW.d_registro
                ,NEW.area_id
                ,NEW.sis_deporigen_id
                ,NEW.sis_depdestino_id
                ,NEW.ag_tema_id
                ,NEW.i_prm_lugar_id
                ,NEW.ag_taller_id
                ,NEW.ag_sttema_id
                ,NEW.i_prm_dirig_id
                ,NEW.s_prm_espac
                ,NEW.sis_entidad_id
                ,NEW.s_introduc
                ,NEW.s_justific
                ,NEW.s_objetivo
                ,NEW.s_metodolo
                ,NEW.s_categori
                ,NEW.s_contenid
                ,NEW.s_estrateg
                ,NEW.s_resultad
                ,NEW.s_evaluaci
                ,NEW.s_observac
                ,NEW.user_crea_id
                ,NEW.user_edita_id
                ,NEW.sis_esta_id
                ,`Edit`
                ,`la ruta es por base de datos`
                ,`la ruta es por base de datos`
                ,NEW.created_at		
			    ,NEW.updated_at		
            );
        END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `trigger_ag_actividads_nuevo`;
DELIMITER $$
CREATE TRIGGER `trigger_ag_actividads_nuevo` AFTER INSERT ON `ag_actividads` FOR EACH ROW BEGIN
            INSERT INTO h_ag_actividads (
                `id_old`
                ,`d_registro`
                ,`area_id`
                ,`sis_deporigen_id`
                ,`sis_depdestino_id`
                ,`ag_tema_id`
                ,`i_prm_lugar_id`
                ,`ag_taller_id`
                ,`ag_sttema_id`
                ,`i_prm_dirig_id`
                ,`s_prm_espac`
                ,`sis_entidad_id`
                ,`s_introduc`
                ,`s_justific`
                ,`s_objetivo`
                ,`s_metodolo`
                ,`s_categori`
                ,`s_contenid`
                ,`s_estrateg`
                ,`s_resultad`
                ,`s_evaluaci`
                ,`s_observac`
                ,`user_crea_id`
                ,`user_edita_id`
                ,`sis_esta_id`
                ,`metodoxx`
                ,`rutaxxxx`
                ,`ipxxxxxx`
                ,`created_at`
                ,`updated_at`
            )
            VALUES (
                NEW.id
                ,NEW.d_registro
                ,NEW.area_id
                ,NEW.sis_deporigen_id
                ,NEW.sis_depdestino_id
                ,NEW.ag_tema_id
                ,NEW.i_prm_lugar_id
                ,NEW.ag_taller_id
                ,NEW.ag_sttema_id
                ,NEW.i_prm_dirig_id
                ,NEW.s_prm_espac
                ,NEW.sis_entidad_id
                ,NEW.s_introduc
                ,NEW.s_justific
                ,NEW.s_objetivo
                ,NEW.s_metodolo
                ,NEW.s_categori
                ,NEW.s_contenid
                ,NEW.s_estrateg
                ,NEW.s_resultad
                ,NEW.s_evaluaci
                ,NEW.s_observac
                ,NEW.user_crea_id
                ,NEW.user_edita_id
                ,NEW.sis_esta_id
                ,`Create`
                ,`la ruta es por base de datos`
                ,`la ruta es por base de datos`
                ,NEW.created_at		
			    ,NEW.updated_at		
            );
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_asistentes`
--
-- Error leyendo la estructura de la tabla simicr.ag_asistentes: #1932 - Table 'simicr.ag_asistentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_asistentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_asistentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_contextos`
--
-- Error leyendo la estructura de la tabla simicr.ag_contextos: #1932 - Table 'simicr.ag_contextos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_contextos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_contextos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_convenios`
--
-- Error leyendo la estructura de la tabla simicr.ag_convenios: #1932 - Table 'simicr.ag_convenios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_convenios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_convenios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_recursos`
--
-- Error leyendo la estructura de la tabla simicr.ag_recursos: #1932 - Table 'simicr.ag_recursos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_recursos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_recursos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_relacions`
--
-- Error leyendo la estructura de la tabla simicr.ag_relacions: #1932 - Table 'simicr.ag_relacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_relacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_relacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_responsables`
--
-- Error leyendo la estructura de la tabla simicr.ag_responsables: #1932 - Table 'simicr.ag_responsables' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_responsables: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_responsables`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_subtemas`
--
-- Error leyendo la estructura de la tabla simicr.ag_subtemas: #1932 - Table 'simicr.ag_subtemas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_subtemas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_subtemas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_tallers`
--
-- Error leyendo la estructura de la tabla simicr.ag_tallers: #1932 - Table 'simicr.ag_tallers' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_tallers: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_tallers`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_taller_ag_tema`
--
-- Error leyendo la estructura de la tabla simicr.ag_taller_ag_tema: #1932 - Table 'simicr.ag_taller_ag_tema' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_taller_ag_tema: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_taller_ag_tema`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_temas`
--
-- Error leyendo la estructura de la tabla simicr.ag_temas: #1932 - Table 'simicr.ag_temas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ag_temas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ag_temas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_reporte_evasions`
--
-- Error leyendo la estructura de la tabla simicr.ai_reporte_evasions: #1932 - Table 'simicr.ai_reporte_evasions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_reporte_evasions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_reporte_evasions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_retorno_salidas`
--
-- Error leyendo la estructura de la tabla simicr.ai_retorno_salidas: #1932 - Table 'simicr.ai_retorno_salidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_retorno_salidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_retorno_salidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_retorno_salidas_condicion`
--
-- Error leyendo la estructura de la tabla simicr.ai_retorno_salidas_condicion: #1932 - Table 'simicr.ai_retorno_salidas_condicion' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_retorno_salidas_condicion: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_retorno_salidas_condicion`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_salida_mayores`
--
-- Error leyendo la estructura de la tabla simicr.ai_salida_mayores: #1932 - Table 'simicr.ai_salida_mayores' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_salida_mayores: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_salida_mayores`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_salida_mayores_razones`
--
-- Error leyendo la estructura de la tabla simicr.ai_salida_mayores_razones: #1932 - Table 'simicr.ai_salida_mayores_razones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_salida_mayores_razones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_salida_mayores_razones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_salida_menores`
--
-- Error leyendo la estructura de la tabla simicr.ai_salida_menores: #1932 - Table 'simicr.ai_salida_menores' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_salida_menores: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_salida_menores`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_salida_menores_con`
--
-- Error leyendo la estructura de la tabla simicr.ai_salida_menores_con: #1932 - Table 'simicr.ai_salida_menores_con' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_salida_menores_con: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_salida_menores_con`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ai_salida_menores_obj`
--
-- Error leyendo la estructura de la tabla simicr.ai_salida_menores_obj: #1932 - Table 'simicr.ai_salida_menores_obj' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.ai_salida_menores_obj: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`ai_salida_menores_obj`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--
-- Error leyendo la estructura de la tabla simicr.areas: #1932 - Table 'simicr.areas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.areas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`areas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_user`
--
-- Error leyendo la estructura de la tabla simicr.area_user: #1932 - Table 'simicr.area_user' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.area_user: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`area_user`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comfacsds`
--
-- Error leyendo la estructura de la tabla simicr.comfacsds: #1932 - Table 'simicr.comfacsds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.comfacsds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`comfacsds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csds`
--
-- Error leyendo la estructura de la tabla simicr.csds: #1932 - Table 'simicr.csds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_alimentacions`
--
-- Error leyendo la estructura de la tabla simicr.csd_alimentacions: #1932 - Table 'simicr.csd_alimentacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_alimentacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_alimentacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_aliment_compra`
--
-- Error leyendo la estructura de la tabla simicr.csd_aliment_compra: #1932 - Table 'simicr.csd_aliment_compra' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_aliment_compra: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_aliment_compra`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_aliment_frec`
--
-- Error leyendo la estructura de la tabla simicr.csd_aliment_frec: #1932 - Table 'simicr.csd_aliment_frec' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_aliment_frec: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_aliment_frec`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_aliment_inge`
--
-- Error leyendo la estructura de la tabla simicr.csd_aliment_inge: #1932 - Table 'simicr.csd_aliment_inge' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_aliment_inge: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_aliment_inge`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_aliment_prepara`
--
-- Error leyendo la estructura de la tabla simicr.csd_aliment_prepara: #1932 - Table 'simicr.csd_aliment_prepara' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_aliment_prepara: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_aliment_prepara`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_bienvenidas`
--
-- Error leyendo la estructura de la tabla simicr.csd_bienvenidas: #1932 - Table 'simicr.csd_bienvenidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_bienvenidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_bienvenidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_bienvenida_motivos`
--
-- Error leyendo la estructura de la tabla simicr.csd_bienvenida_motivos: #1932 - Table 'simicr.csd_bienvenida_motivos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_bienvenida_motivos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_bienvenida_motivos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_com_familiars`
--
-- Error leyendo la estructura de la tabla simicr.csd_com_familiars: #1932 - Table 'simicr.csd_com_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_com_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_com_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_com_familiar_observaciones`
--
-- Error leyendo la estructura de la tabla simicr.csd_com_familiar_observaciones: #1932 - Table 'simicr.csd_com_familiar_observaciones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_com_familiar_observaciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_com_familiar_observaciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_conclusiones`
--
-- Error leyendo la estructura de la tabla simicr.csd_conclusiones: #1932 - Table 'simicr.csd_conclusiones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_conclusiones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_conclusiones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.csd_datos_basicos: #1932 - Table 'simicr.csd_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dias_gen_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.csd_dias_gen_ingresos: #1932 - Table 'simicr.csd_dias_gen_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dias_gen_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dias_gen_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_antecedente`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_antecedente: #1932 - Table 'simicr.csd_dinfam_antecedente' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_antecedente: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_antecedente`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_establecen`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_establecen: #1932 - Table 'simicr.csd_dinfam_establecen' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_establecen: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_establecen`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_incumple`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_incumple: #1932 - Table 'simicr.csd_dinfam_incumple' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_incumple: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_incumple`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_madres`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_madres: #1932 - Table 'simicr.csd_dinfam_madres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_madres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_madres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_norma`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_norma: #1932 - Table 'simicr.csd_dinfam_norma' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_norma: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_norma`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_padres`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_padres: #1932 - Table 'simicr.csd_dinfam_padres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_padres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_padres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_dinfam_problema`
--
-- Error leyendo la estructura de la tabla simicr.csd_dinfam_problema: #1932 - Table 'simicr.csd_dinfam_problema' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_dinfam_problema: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_dinfam_problema`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_din_familiars`
--
-- Error leyendo la estructura de la tabla simicr.csd_din_familiars: #1932 - Table 'simicr.csd_din_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_din_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_din_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_gening_aportas`
--
-- Error leyendo la estructura de la tabla simicr.csd_gening_aportas: #1932 - Table 'simicr.csd_gening_aportas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_gening_aportas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_gening_aportas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_gening_dias`
--
-- Error leyendo la estructura de la tabla simicr.csd_gening_dias: #1932 - Table 'simicr.csd_gening_dias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_gening_dias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_gening_dias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_gen_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.csd_gen_ingresos: #1932 - Table 'simicr.csd_gen_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_gen_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_gen_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_justicias`
--
-- Error leyendo la estructura de la tabla simicr.csd_justicias: #1932 - Table 'simicr.csd_justicias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_justicias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_justicias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_nnaj_especial`
--
-- Error leyendo la estructura de la tabla simicr.csd_nnaj_especial: #1932 - Table 'simicr.csd_nnaj_especial' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_nnaj_especial: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_nnaj_especial`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_redsoc_actuals`
--
-- Error leyendo la estructura de la tabla simicr.csd_redsoc_actuals: #1932 - Table 'simicr.csd_redsoc_actuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_redsoc_actuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_redsoc_actuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_redsoc_pasados`
--
-- Error leyendo la estructura de la tabla simicr.csd_redsoc_pasados: #1932 - Table 'simicr.csd_redsoc_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_redsoc_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_redsoc_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_rescamass`
--
-- Error leyendo la estructura de la tabla simicr.csd_rescamass: #1932 - Table 'simicr.csd_rescamass' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_rescamass: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_rescamass`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_rescomparte`
--
-- Error leyendo la estructura de la tabla simicr.csd_rescomparte: #1932 - Table 'simicr.csd_rescomparte' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_rescomparte: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_rescomparte`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_reshogars`
--
-- Error leyendo la estructura de la tabla simicr.csd_reshogars: #1932 - Table 'simicr.csd_reshogars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_reshogars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_reshogars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_residencias`
--
-- Error leyendo la estructura de la tabla simicr.csd_residencias: #1932 - Table 'simicr.csd_residencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_residencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_residencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_reside_ambiente`
--
-- Error leyendo la estructura de la tabla simicr.csd_reside_ambiente: #1932 - Table 'simicr.csd_reside_ambiente' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_reside_ambiente: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_reside_ambiente`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_resobsers`
--
-- Error leyendo la estructura de la tabla simicr.csd_resobsers: #1932 - Table 'simicr.csd_resobsers' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_resobsers: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_resobsers`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_resservis`
--
-- Error leyendo la estructura de la tabla simicr.csd_resservis: #1932 - Table 'simicr.csd_resservis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_resservis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_resservis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_sis_nnaj`
--
-- Error leyendo la estructura de la tabla simicr.csd_sis_nnaj: #1932 - Table 'simicr.csd_sis_nnaj' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_sis_nnaj: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_sis_nnaj`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csd_violencias`
--
-- Error leyendo la estructura de la tabla simicr.csd_violencias: #1932 - Table 'simicr.csd_violencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.csd_violencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`csd_violencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estusuarios`
--
-- Error leyendo la estructura de la tabla simicr.estusuarios: #1932 - Table 'simicr.estusuarios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.estusuarios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`estusuarios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fcv_geningresos`
--
-- Error leyendo la estructura de la tabla simicr.fcv_geningresos: #1932 - Table 'simicr.fcv_geningresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fcv_geningresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fcv_geningresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fcv_redes_actuales`
--
-- Error leyendo la estructura de la tabla simicr.fcv_redes_actuales: #1932 - Table 'simicr.fcv_redes_actuales' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fcv_redes_actuales: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fcv_redes_actuales`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fcv_redes_pasados`
--
-- Error leyendo la estructura de la tabla simicr.fcv_redes_pasados: #1932 - Table 'simicr.fcv_redes_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fcv_redes_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fcv_redes_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_acciones`
--
-- Error leyendo la estructura de la tabla simicr.fi_acciones: #1932 - Table 'simicr.fi_acciones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_acciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_acciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_actividadestls`
--
-- Error leyendo la estructura de la tabla simicr.fi_actividadestls: #1932 - Table 'simicr.fi_actividadestls' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_actividadestls: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_actividadestls`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_actividad_tiempo_libres`
--
-- Error leyendo la estructura de la tabla simicr.fi_actividad_tiempo_libres: #1932 - Table 'simicr.fi_actividad_tiempo_libres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_actividad_tiempo_libres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_actividad_tiempo_libres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_autorizacions`
--
-- Error leyendo la estructura de la tabla simicr.fi_autorizacions: #1932 - Table 'simicr.fi_autorizacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_autorizacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_autorizacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_bienvenidas`
--
-- Error leyendo la estructura de la tabla simicr.fi_bienvenidas: #1932 - Table 'simicr.fi_bienvenidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_bienvenidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_bienvenidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_compfamis`
--
-- Error leyendo la estructura de la tabla simicr.fi_compfamis: #1932 - Table 'simicr.fi_compfamis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_compfamis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_compfamis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_condicion_ambientes`
--
-- Error leyendo la estructura de la tabla simicr.fi_condicion_ambientes: #1932 - Table 'simicr.fi_condicion_ambientes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_condicion_ambientes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_condicion_ambientes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_consumo_spas`
--
-- Error leyendo la estructura de la tabla simicr.fi_consumo_spas: #1932 - Table 'simicr.fi_consumo_spas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_consumo_spas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_consumo_spas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_contactos`
--
-- Error leyendo la estructura de la tabla simicr.fi_contactos: #1932 - Table 'simicr.fi_contactos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_contactos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_contactos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_contviols`
--
-- Error leyendo la estructura de la tabla simicr.fi_contviols: #1932 - Table 'simicr.fi_contviols' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_contviols: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_contviols`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_csdvsis`
--
-- Error leyendo la estructura de la tabla simicr.fi_csdvsis: #1932 - Table 'simicr.fi_csdvsis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_csdvsis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_csdvsis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_csd_vsi_geni`
--
-- Error leyendo la estructura de la tabla simicr.fi_csd_vsi_geni: #1932 - Table 'simicr.fi_csd_vsi_geni' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_csd_vsi_geni: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_csd_vsi_geni`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_csd_vsi_redes_actuales`
--
-- Error leyendo la estructura de la tabla simicr.fi_csd_vsi_redes_actuales: #1932 - Table 'simicr.fi_csd_vsi_redes_actuales' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_csd_vsi_redes_actuales: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_csd_vsi_redes_actuales`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_csd_vsi_redes_pasados`
--
-- Error leyendo la estructura de la tabla simicr.fi_csd_vsi_redes_pasados: #1932 - Table 'simicr.fi_csd_vsi_redes_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_csd_vsi_redes_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_csd_vsi_redes_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.fi_datos_basicos: #1932 - Table 'simicr.fi_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_dias_genera_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.fi_dias_genera_ingresos: #1932 - Table 'simicr.fi_dias_genera_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_dias_genera_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_dias_genera_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_diligencs`
--
-- Error leyendo la estructura de la tabla simicr.fi_diligencs: #1932 - Table 'simicr.fi_diligencs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_diligencs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_diligencs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_discausas`
--
-- Error leyendo la estructura de la tabla simicr.fi_discausas: #1932 - Table 'simicr.fi_discausas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_discausas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_discausas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_documentos_anexas`
--
-- Error leyendo la estructura de la tabla simicr.fi_documentos_anexas: #1932 - Table 'simicr.fi_documentos_anexas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_documentos_anexas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_documentos_anexas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_enfermedades_familias`
--
-- Error leyendo la estructura de la tabla simicr.fi_enfermedades_familias: #1932 - Table 'simicr.fi_enfermedades_familias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_enfermedades_familias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_enfermedades_familias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_eventos_medicos`
--
-- Error leyendo la estructura de la tabla simicr.fi_eventos_medicos: #1932 - Table 'simicr.fi_eventos_medicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_eventos_medicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_eventos_medicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_formacions`
--
-- Error leyendo la estructura de la tabla simicr.fi_formacions: #1932 - Table 'simicr.fi_formacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_formacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_formacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_generacion_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.fi_generacion_ingresos: #1932 - Table 'simicr.fi_generacion_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_generacion_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_generacion_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_jr_causasmos`
--
-- Error leyendo la estructura de la tabla simicr.fi_jr_causasmos: #1932 - Table 'simicr.fi_jr_causasmos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_jr_causasmos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_jr_causasmos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_jr_causassis`
--
-- Error leyendo la estructura de la tabla simicr.fi_jr_causassis: #1932 - Table 'simicr.fi_jr_causassis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_jr_causassis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_jr_causassis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_jr_familiars`
--
-- Error leyendo la estructura de la tabla simicr.fi_jr_familiars: #1932 - Table 'simicr.fi_jr_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_jr_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_jr_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_justrests`
--
-- Error leyendo la estructura de la tabla simicr.fi_justrests: #1932 - Table 'simicr.fi_justrests' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_justrests: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_justrests`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_lesicomes`
--
-- Error leyendo la estructura de la tabla simicr.fi_lesicomes: #1932 - Table 'simicr.fi_lesicomes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_lesicomes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_lesicomes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_modalidads`
--
-- Error leyendo la estructura de la tabla simicr.fi_modalidads: #1932 - Table 'simicr.fi_modalidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_modalidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_modalidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_motivo_vinculacions`
--
-- Error leyendo la estructura de la tabla simicr.fi_motivo_vinculacions: #1932 - Table 'simicr.fi_motivo_vinculacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_motivo_vinculacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_motivo_vinculacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_proceso_familias`
--
-- Error leyendo la estructura de la tabla simicr.fi_proceso_familias: #1932 - Table 'simicr.fi_proceso_familias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_proceso_familias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_proceso_familias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_proceso_pards`
--
-- Error leyendo la estructura de la tabla simicr.fi_proceso_pards: #1932 - Table 'simicr.fi_proceso_pards' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_proceso_pards: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_proceso_pards`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_proceso_spoas`
--
-- Error leyendo la estructura de la tabla simicr.fi_proceso_spoas: #1932 - Table 'simicr.fi_proceso_spoas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_proceso_spoas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_proceso_spoas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_proceso_srpas`
--
-- Error leyendo la estructura de la tabla simicr.fi_proceso_srpas: #1932 - Table 'simicr.fi_proceso_srpas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_proceso_srpas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_proceso_srpas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_razones`
--
-- Error leyendo la estructura de la tabla simicr.fi_razones: #1932 - Table 'simicr.fi_razones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_razones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_razones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_razon_continuas`
--
-- Error leyendo la estructura de la tabla simicr.fi_razon_continuas: #1932 - Table 'simicr.fi_razon_continuas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_razon_continuas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_razon_continuas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_razon_iniciados`
--
-- Error leyendo la estructura de la tabla simicr.fi_razon_iniciados: #1932 - Table 'simicr.fi_razon_iniciados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_razon_iniciados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_razon_iniciados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_red_apoyo_actuals`
--
-- Error leyendo la estructura de la tabla simicr.fi_red_apoyo_actuals: #1932 - Table 'simicr.fi_red_apoyo_actuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_red_apoyo_actuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_red_apoyo_actuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_red_apoyo_antecedentes`
--
-- Error leyendo la estructura de la tabla simicr.fi_red_apoyo_antecedentes: #1932 - Table 'simicr.fi_red_apoyo_antecedentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_red_apoyo_antecedentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_red_apoyo_antecedentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_residencias`
--
-- Error leyendo la estructura de la tabla simicr.fi_residencias: #1932 - Table 'simicr.fi_residencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_residencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_residencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_riesgo_escnnas`
--
-- Error leyendo la estructura de la tabla simicr.fi_riesgo_escnnas: #1932 - Table 'simicr.fi_riesgo_escnnas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_riesgo_escnnas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_riesgo_escnnas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_sacramentos`
--
-- Error leyendo la estructura de la tabla simicr.fi_sacramentos: #1932 - Table 'simicr.fi_sacramentos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_sacramentos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_sacramentos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_saluds`
--
-- Error leyendo la estructura de la tabla simicr.fi_saluds: #1932 - Table 'simicr.fi_saluds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_saluds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_saluds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_situacion_especials`
--
-- Error leyendo la estructura de la tabla simicr.fi_situacion_especials: #1932 - Table 'simicr.fi_situacion_especials' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_situacion_especials: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_situacion_especials`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_situacion_vulneracions`
--
-- Error leyendo la estructura de la tabla simicr.fi_situacion_vulneracions: #1932 - Table 'simicr.fi_situacion_vulneracions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_situacion_vulneracions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_situacion_vulneracions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_sustancia_consumidas`
--
-- Error leyendo la estructura de la tabla simicr.fi_sustancia_consumidas: #1932 - Table 'simicr.fi_sustancia_consumidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_sustancia_consumidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_sustancia_consumidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_vestuario_nnajs`
--
-- Error leyendo la estructura de la tabla simicr.fi_vestuario_nnajs: #1932 - Table 'simicr.fi_vestuario_nnajs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_vestuario_nnajs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_vestuario_nnajs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_victataqs`
--
-- Error leyendo la estructura de la tabla simicr.fi_victataqs: #1932 - Table 'simicr.fi_victataqs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_victataqs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_victataqs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_victima_escnnas`
--
-- Error leyendo la estructura de la tabla simicr.fi_victima_escnnas: #1932 - Table 'simicr.fi_victima_escnnas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_victima_escnnas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_victima_escnnas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_violbasas`
--
-- Error leyendo la estructura de la tabla simicr.fi_violbasas: #1932 - Table 'simicr.fi_violbasas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_violbasas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_violbasas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fi_violencias`
--
-- Error leyendo la estructura de la tabla simicr.fi_violencias: #1932 - Table 'simicr.fi_violencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fi_violencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fi_violencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.fos_datos_basicos: #1932 - Table 'simicr.fos_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fos_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fos_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_stses`
--
-- Error leyendo la estructura de la tabla simicr.fos_stses: #1932 - Table 'simicr.fos_stses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fos_stses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fos_stses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_tses`
--
-- Error leyendo la estructura de la tabla simicr.fos_tses: #1932 - Table 'simicr.fos_tses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.fos_tses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`fos_tses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_actividads`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_actividads: #1932 - Table 'simicr.h_ag_actividads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_actividads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_actividads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_asistentes`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_asistentes: #1932 - Table 'simicr.h_ag_asistentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_asistentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_asistentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_contextos`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_contextos: #1932 - Table 'simicr.h_ag_contextos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_contextos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_contextos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_convenios`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_convenios: #1932 - Table 'simicr.h_ag_convenios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_convenios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_convenios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_recursos`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_recursos: #1932 - Table 'simicr.h_ag_recursos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_recursos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_recursos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_relacions`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_relacions: #1932 - Table 'simicr.h_ag_relacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_relacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_relacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_responsables`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_responsables: #1932 - Table 'simicr.h_ag_responsables' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_responsables: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_responsables`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_subtemas`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_subtemas: #1932 - Table 'simicr.h_ag_subtemas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_subtemas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_subtemas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_tallers`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_tallers: #1932 - Table 'simicr.h_ag_tallers' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_tallers: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_tallers`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_taller_ag_tema`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_taller_ag_tema: #1932 - Table 'simicr.h_ag_taller_ag_tema' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_taller_ag_tema: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_taller_ag_tema`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ag_temas`
--
-- Error leyendo la estructura de la tabla simicr.h_ag_temas: #1932 - Table 'simicr.h_ag_temas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ag_temas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ag_temas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_reporte_evasions`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_reporte_evasions: #1932 - Table 'simicr.h_ai_reporte_evasions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_reporte_evasions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_reporte_evasions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_retorno_salidas`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_retorno_salidas: #1932 - Table 'simicr.h_ai_retorno_salidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_retorno_salidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_retorno_salidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_retorno_salidas_condicion`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_retorno_salidas_condicion: #1932 - Table 'simicr.h_ai_retorno_salidas_condicion' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_retorno_salidas_condicion: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_retorno_salidas_condicion`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_salida_mayores`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_salida_mayores: #1932 - Table 'simicr.h_ai_salida_mayores' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_salida_mayores: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_salida_mayores`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_salida_mayores_razones`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_salida_mayores_razones: #1932 - Table 'simicr.h_ai_salida_mayores_razones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_salida_mayores_razones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_salida_mayores_razones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_salida_menores`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_salida_menores: #1932 - Table 'simicr.h_ai_salida_menores' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_salida_menores: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_salida_menores`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_salida_menores_con`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_salida_menores_con: #1932 - Table 'simicr.h_ai_salida_menores_con' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_salida_menores_con: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_salida_menores_con`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_ai_salida_menores_obj`
--
-- Error leyendo la estructura de la tabla simicr.h_ai_salida_menores_obj: #1932 - Table 'simicr.h_ai_salida_menores_obj' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_ai_salida_menores_obj: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_ai_salida_menores_obj`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_areas`
--
-- Error leyendo la estructura de la tabla simicr.h_areas: #1932 - Table 'simicr.h_areas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_areas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_areas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_area_user`
--
-- Error leyendo la estructura de la tabla simicr.h_area_user: #1932 - Table 'simicr.h_area_user' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_area_user: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_area_user`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_comfacsds`
--
-- Error leyendo la estructura de la tabla simicr.h_comfacsds: #1932 - Table 'simicr.h_comfacsds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_comfacsds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_comfacsds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csds`
--
-- Error leyendo la estructura de la tabla simicr.h_csds: #1932 - Table 'simicr.h_csds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_alimentacions`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_alimentacions: #1932 - Table 'simicr.h_csd_alimentacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_alimentacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_alimentacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_aliment_compra`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_aliment_compra: #1932 - Table 'simicr.h_csd_aliment_compra' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_aliment_compra: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_aliment_compra`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_aliment_frec`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_aliment_frec: #1932 - Table 'simicr.h_csd_aliment_frec' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_aliment_frec: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_aliment_frec`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_aliment_inge`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_aliment_inge: #1932 - Table 'simicr.h_csd_aliment_inge' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_aliment_inge: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_aliment_inge`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_aliment_prepara`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_aliment_prepara: #1932 - Table 'simicr.h_csd_aliment_prepara' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_aliment_prepara: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_aliment_prepara`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_bienvenidas`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_bienvenidas: #1932 - Table 'simicr.h_csd_bienvenidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_bienvenidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_bienvenidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_bienvenida_motivos`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_bienvenida_motivos: #1932 - Table 'simicr.h_csd_bienvenida_motivos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_bienvenida_motivos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_bienvenida_motivos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_com_familiars`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_com_familiars: #1932 - Table 'simicr.h_csd_com_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_com_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_com_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_com_familiar_observaciones`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_com_familiar_observaciones: #1932 - Table 'simicr.h_csd_com_familiar_observaciones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_com_familiar_observaciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_com_familiar_observaciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_conclusiones`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_conclusiones: #1932 - Table 'simicr.h_csd_conclusiones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_conclusiones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_conclusiones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_datos_basicos: #1932 - Table 'simicr.h_csd_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_antecedente`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_antecedente: #1932 - Table 'simicr.h_csd_dinfam_antecedente' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_antecedente: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_antecedente`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_establecen`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_establecen: #1932 - Table 'simicr.h_csd_dinfam_establecen' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_establecen: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_establecen`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_incumple`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_incumple: #1932 - Table 'simicr.h_csd_dinfam_incumple' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_incumple: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_incumple`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_madres`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_madres: #1932 - Table 'simicr.h_csd_dinfam_madres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_madres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_madres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_norma`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_norma: #1932 - Table 'simicr.h_csd_dinfam_norma' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_norma: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_norma`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_padres`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_padres: #1932 - Table 'simicr.h_csd_dinfam_padres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_padres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_padres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_dinfam_problema`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_dinfam_problema: #1932 - Table 'simicr.h_csd_dinfam_problema' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_dinfam_problema: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_dinfam_problema`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_din_familiars`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_din_familiars: #1932 - Table 'simicr.h_csd_din_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_din_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_din_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_gening_aportas`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_gening_aportas: #1932 - Table 'simicr.h_csd_gening_aportas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_gening_aportas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_gening_aportas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_gening_dias`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_gening_dias: #1932 - Table 'simicr.h_csd_gening_dias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_gening_dias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_gening_dias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_gen_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_gen_ingresos: #1932 - Table 'simicr.h_csd_gen_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_gen_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_gen_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_justicias`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_justicias: #1932 - Table 'simicr.h_csd_justicias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_justicias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_justicias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_nnaj_especial`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_nnaj_especial: #1932 - Table 'simicr.h_csd_nnaj_especial' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_nnaj_especial: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_nnaj_especial`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_redsoc_actuals`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_redsoc_actuals: #1932 - Table 'simicr.h_csd_redsoc_actuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_redsoc_actuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_redsoc_actuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_redsoc_pasados`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_redsoc_pasados: #1932 - Table 'simicr.h_csd_redsoc_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_redsoc_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_redsoc_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_residencias`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_residencias: #1932 - Table 'simicr.h_csd_residencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_residencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_residencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_reside_ambiente`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_reside_ambiente: #1932 - Table 'simicr.h_csd_reside_ambiente' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_reside_ambiente: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_reside_ambiente`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_sis_nnaj`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_sis_nnaj: #1932 - Table 'simicr.h_csd_sis_nnaj' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_sis_nnaj: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_sis_nnaj`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_csd_violencias`
--
-- Error leyendo la estructura de la tabla simicr.h_csd_violencias: #1932 - Table 'simicr.h_csd_violencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_csd_violencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_csd_violencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_estusuarios`
--
-- Error leyendo la estructura de la tabla simicr.h_estusuarios: #1932 - Table 'simicr.h_estusuarios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_estusuarios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_estusuarios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fcv_generacioningresos`
--
-- Error leyendo la estructura de la tabla simicr.h_fcv_generacioningresos: #1932 - Table 'simicr.h_fcv_generacioningresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fcv_generacioningresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fcv_generacioningresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fcv_redes_actuales`
--
-- Error leyendo la estructura de la tabla simicr.h_fcv_redes_actuales: #1932 - Table 'simicr.h_fcv_redes_actuales' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fcv_redes_actuales: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fcv_redes_actuales`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fcv_redes_pasados`
--
-- Error leyendo la estructura de la tabla simicr.h_fcv_redes_pasados: #1932 - Table 'simicr.h_fcv_redes_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fcv_redes_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fcv_redes_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_acciones`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_acciones: #1932 - Table 'simicr.h_fi_acciones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_acciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_acciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_actividadestls`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_actividadestls: #1932 - Table 'simicr.h_fi_actividadestls' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_actividadestls: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_actividadestls`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_actividad_tiempo_libres`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_actividad_tiempo_libres: #1932 - Table 'simicr.h_fi_actividad_tiempo_libres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_actividad_tiempo_libres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_actividad_tiempo_libres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_autorizacions`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_autorizacions: #1932 - Table 'simicr.h_fi_autorizacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_autorizacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_autorizacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_bienvenidas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_bienvenidas: #1932 - Table 'simicr.h_fi_bienvenidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_bienvenidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_bienvenidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_compfamis`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_compfamis: #1932 - Table 'simicr.h_fi_compfamis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_compfamis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_compfamis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_condicion_ambientes`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_condicion_ambientes: #1932 - Table 'simicr.h_fi_condicion_ambientes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_condicion_ambientes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_condicion_ambientes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_consumo_spas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_consumo_spas: #1932 - Table 'simicr.h_fi_consumo_spas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_consumo_spas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_consumo_spas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_contactos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_contactos: #1932 - Table 'simicr.h_fi_contactos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_contactos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_contactos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_contviols`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_contviols: #1932 - Table 'simicr.h_fi_contviols' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_contviols: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_contviols`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_csdvsis`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_csdvsis: #1932 - Table 'simicr.h_fi_csdvsis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_csdvsis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_csdvsis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_csd_vsi_generacioningresosses`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_csd_vsi_generacioningresosses: #1932 - Table 'simicr.h_fi_csd_vsi_generacioningresosses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_csd_vsi_generacioningresosses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_csd_vsi_generacioningresosses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_csd_vsi_redes_actuales`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_csd_vsi_redes_actuales: #1932 - Table 'simicr.h_fi_csd_vsi_redes_actuales' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_csd_vsi_redes_actuales: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_csd_vsi_redes_actuales`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_csd_vsi_redes_pasados`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_csd_vsi_redes_pasados: #1932 - Table 'simicr.h_fi_csd_vsi_redes_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_csd_vsi_redes_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_csd_vsi_redes_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_datos_basicos: #1932 - Table 'simicr.h_fi_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_dias_genera_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_dias_genera_ingresos: #1932 - Table 'simicr.h_fi_dias_genera_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_dias_genera_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_dias_genera_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_diligencs`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_diligencs: #1932 - Table 'simicr.h_fi_diligencs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_diligencs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_diligencs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_discausas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_discausas: #1932 - Table 'simicr.h_fi_discausas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_discausas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_discausas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_documentos_anexas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_documentos_anexas: #1932 - Table 'simicr.h_fi_documentos_anexas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_documentos_anexas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_documentos_anexas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_enfermedades_familias`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_enfermedades_familias: #1932 - Table 'simicr.h_fi_enfermedades_familias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_enfermedades_familias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_enfermedades_familias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_eventos_medicos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_eventos_medicos: #1932 - Table 'simicr.h_fi_eventos_medicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_eventos_medicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_eventos_medicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_formacions`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_formacions: #1932 - Table 'simicr.h_fi_formacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_formacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_formacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_generacion_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_generacion_ingresos: #1932 - Table 'simicr.h_fi_generacion_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_generacion_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_generacion_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_jr_causasmos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_jr_causasmos: #1932 - Table 'simicr.h_fi_jr_causasmos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_jr_causasmos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_jr_causasmos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_jr_causassis`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_jr_causassis: #1932 - Table 'simicr.h_fi_jr_causassis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_jr_causassis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_jr_causassis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_jr_familiars`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_jr_familiars: #1932 - Table 'simicr.h_fi_jr_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_jr_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_jr_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_justrests`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_justrests: #1932 - Table 'simicr.h_fi_justrests' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_justrests: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_justrests`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_lesicomes`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_lesicomes: #1932 - Table 'simicr.h_fi_lesicomes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_lesicomes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_lesicomes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_modalidads`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_modalidads: #1932 - Table 'simicr.h_fi_modalidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_modalidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_modalidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_motivo_vinculacions`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_motivo_vinculacions: #1932 - Table 'simicr.h_fi_motivo_vinculacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_motivo_vinculacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_motivo_vinculacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_proceso_familias`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_proceso_familias: #1932 - Table 'simicr.h_fi_proceso_familias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_proceso_familias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_proceso_familias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_proceso_pards`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_proceso_pards: #1932 - Table 'simicr.h_fi_proceso_pards' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_proceso_pards: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_proceso_pards`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_proceso_spoas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_proceso_spoas: #1932 - Table 'simicr.h_fi_proceso_spoas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_proceso_spoas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_proceso_spoas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_proceso_srpas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_proceso_srpas: #1932 - Table 'simicr.h_fi_proceso_srpas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_proceso_srpas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_proceso_srpas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_razones`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_razones: #1932 - Table 'simicr.h_fi_razones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_razones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_razones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_razon_continuas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_razon_continuas: #1932 - Table 'simicr.h_fi_razon_continuas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_razon_continuas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_razon_continuas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_razon_iniciados`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_razon_iniciados: #1932 - Table 'simicr.h_fi_razon_iniciados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_razon_iniciados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_razon_iniciados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_red_apoyo_actuals`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_red_apoyo_actuals: #1932 - Table 'simicr.h_fi_red_apoyo_actuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_red_apoyo_actuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_red_apoyo_actuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_red_apoyo_antecedentes`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_red_apoyo_antecedentes: #1932 - Table 'simicr.h_fi_red_apoyo_antecedentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_red_apoyo_antecedentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_red_apoyo_antecedentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_residencias`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_residencias: #1932 - Table 'simicr.h_fi_residencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_residencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_residencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_riesgo_escnnas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_riesgo_escnnas: #1932 - Table 'simicr.h_fi_riesgo_escnnas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_riesgo_escnnas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_riesgo_escnnas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_sacramentos`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_sacramentos: #1932 - Table 'simicr.h_fi_sacramentos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_sacramentos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_sacramentos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_saluds`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_saluds: #1932 - Table 'simicr.h_fi_saluds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_saluds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_saluds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_situacion_especials`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_situacion_especials: #1932 - Table 'simicr.h_fi_situacion_especials' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_situacion_especials: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_situacion_especials`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_situacion_vulneracions`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_situacion_vulneracions: #1932 - Table 'simicr.h_fi_situacion_vulneracions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_situacion_vulneracions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_situacion_vulneracions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_sustancia_consumidas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_sustancia_consumidas: #1932 - Table 'simicr.h_fi_sustancia_consumidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_sustancia_consumidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_sustancia_consumidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_vestuario_nnajs`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_vestuario_nnajs: #1932 - Table 'simicr.h_fi_vestuario_nnajs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_vestuario_nnajs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_vestuario_nnajs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_victataqs`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_victataqs: #1932 - Table 'simicr.h_fi_victataqs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_victataqs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_victataqs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_victima_escnnas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_victima_escnnas: #1932 - Table 'simicr.h_fi_victima_escnnas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_victima_escnnas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_victima_escnnas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_violbasas`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_violbasas: #1932 - Table 'simicr.h_fi_violbasas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_violbasas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_violbasas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fi_violencias`
--
-- Error leyendo la estructura de la tabla simicr.h_fi_violencias: #1932 - Table 'simicr.h_fi_violencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fi_violencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fi_violencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fos_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.h_fos_datos_basicos: #1932 - Table 'simicr.h_fos_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fos_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fos_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fos_stses`
--
-- Error leyendo la estructura de la tabla simicr.h_fos_stses: #1932 - Table 'simicr.h_fos_stses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fos_stses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fos_stses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_fos_tses`
--
-- Error leyendo la estructura de la tabla simicr.h_fos_tses: #1932 - Table 'simicr.h_fos_tses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_fos_tses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_fos_tses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_accion_gestions`
--
-- Error leyendo la estructura de la tabla simicr.h_in_accion_gestions: #1932 - Table 'simicr.h_in_accion_gestions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_accion_gestions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_accion_gestions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_actibases`
--
-- Error leyendo la estructura de la tabla simicr.h_in_actibases: #1932 - Table 'simicr.h_in_actibases' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_actibases: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_actibases`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_actsoportes`
--
-- Error leyendo la estructura de la tabla simicr.h_in_actsoportes: #1932 - Table 'simicr.h_in_actsoportes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_actsoportes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_actsoportes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_base_fuentes`
--
-- Error leyendo la estructura de la tabla simicr.h_in_base_fuentes: #1932 - Table 'simicr.h_in_base_fuentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_base_fuentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_base_fuentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_doc_preguntas`
--
-- Error leyendo la estructura de la tabla simicr.h_in_doc_preguntas: #1932 - Table 'simicr.h_in_doc_preguntas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_doc_preguntas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_doc_preguntas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_fuentes`
--
-- Error leyendo la estructura de la tabla simicr.h_in_fuentes: #1932 - Table 'simicr.h_in_fuentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_fuentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_fuentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_indicadors`
--
-- Error leyendo la estructura de la tabla simicr.h_in_indicadors: #1932 - Table 'simicr.h_in_indicadors' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_indicadors: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_indicadors`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_ligrus`
--
-- Error leyendo la estructura de la tabla simicr.h_in_ligrus: #1932 - Table 'simicr.h_in_ligrus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_ligrus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_ligrus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_lineabase_nnajs`
--
-- Error leyendo la estructura de la tabla simicr.h_in_lineabase_nnajs: #1932 - Table 'simicr.h_in_lineabase_nnajs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_lineabase_nnajs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_lineabase_nnajs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_linea_bases`
--
-- Error leyendo la estructura de la tabla simicr.h_in_linea_bases: #1932 - Table 'simicr.h_in_linea_bases' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_linea_bases: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_linea_bases`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_preguntas`
--
-- Error leyendo la estructura de la tabla simicr.h_in_preguntas: #1932 - Table 'simicr.h_in_preguntas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_preguntas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_preguntas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_respus`
--
-- Error leyendo la estructura de la tabla simicr.h_in_respus: #1932 - Table 'simicr.h_in_respus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_respus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_respus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_validacions`
--
-- Error leyendo la estructura de la tabla simicr.h_in_validacions: #1932 - Table 'simicr.h_in_validacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_validacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_validacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_in_valoracions`
--
-- Error leyendo la estructura de la tabla simicr.h_in_valoracions: #1932 - Table 'simicr.h_in_valoracions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_in_valoracions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_in_valoracions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_is_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.h_is_datos_basicos: #1932 - Table 'simicr.h_is_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_is_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_is_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vmas`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vmas: #1932 - Table 'simicr.h_mit_vmas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vmas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vmas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vma_ttos`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vma_ttos: #1932 - Table 'simicr.h_mit_vma_ttos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vma_ttos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vma_ttos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vspa`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vspa: #1932 - Table 'simicr.h_mit_vspa' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vspa: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vspa`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vspa_tabla`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vspa_tabla: #1932 - Table 'simicr.h_mit_vspa_tabla' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vspa_tabla: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vspa_tabla`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vspa_tabla_cuatro`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vspa_tabla_cuatro: #1932 - Table 'simicr.h_mit_vspa_tabla_cuatro' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vspa_tabla_cuatro: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vspa_tabla_cuatro`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vspa_tabla_dos`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vspa_tabla_dos: #1932 - Table 'simicr.h_mit_vspa_tabla_dos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vspa_tabla_dos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vspa_tabla_dos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_mit_vspa_tabla_tres`
--
-- Error leyendo la estructura de la tabla simicr.h_mit_vspa_tabla_tres: #1932 - Table 'simicr.h_mit_vspa_tabla_tres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_mit_vspa_tabla_tres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_mit_vspa_tabla_tres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_deses`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_deses: #1932 - Table 'simicr.h_nnaj_deses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_deses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_deses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_docus`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_docus: #1932 - Table 'simicr.h_nnaj_docus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_docus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_docus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_fi_csds`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_fi_csds: #1932 - Table 'simicr.h_nnaj_fi_csds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_fi_csds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_fi_csds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_focalis`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_focalis: #1932 - Table 'simicr.h_nnaj_focalis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_focalis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_focalis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_nacimis`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_nacimis: #1932 - Table 'simicr.h_nnaj_nacimis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_nacimis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_nacimis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_sexos`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_sexos: #1932 - Table 'simicr.h_nnaj_sexos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_sexos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_sexos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_sit_mils`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_sit_mils: #1932 - Table 'simicr.h_nnaj_sit_mils' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_sit_mils: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_sit_mils`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_nnaj_upis`
--
-- Error leyendo la estructura de la tabla simicr.h_nnaj_upis: #1932 - Table 'simicr.h_nnaj_upis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_nnaj_upis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_nnaj_upis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_parametros`
--
-- Error leyendo la estructura de la tabla simicr.h_parametros: #1932 - Table 'simicr.h_parametros' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_parametros: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_parametros`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_parametro_tema`
--
-- Error leyendo la estructura de la tabla simicr.h_parametro_tema: #1932 - Table 'simicr.h_parametro_tema' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_parametro_tema: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_parametro_tema`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_password_resets`
--
-- Error leyendo la estructura de la tabla simicr.h_password_resets: #1932 - Table 'simicr.h_password_resets' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_password_resets: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_password_resets`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_posts`
--
-- Error leyendo la estructura de la tabla simicr.h_posts: #1932 - Table 'simicr.h_posts' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_posts: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_posts`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_redes_apoyos`
--
-- Error leyendo la estructura de la tabla simicr.h_redes_apoyos: #1932 - Table 'simicr.h_redes_apoyos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_redes_apoyos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_redes_apoyos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_actividads`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_actividads: #1932 - Table 'simicr.h_sis_actividads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_actividads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_actividads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_actividad_procesos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_actividad_procesos: #1932 - Table 'simicr.h_sis_actividad_procesos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_actividad_procesos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_actividad_procesos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_actividad_sis_documento_fuente`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_actividad_sis_documento_fuente: #1932 - Table 'simicr.h_sis_actividad_sis_documento_fuente' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_actividad_sis_documento_fuente: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_actividad_sis_documento_fuente`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_barrios`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_barrios: #1932 - Table 'simicr.h_sis_barrios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_barrios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_barrios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_cargos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_cargos: #1932 - Table 'simicr.h_sis_cargos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_cargos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_cargos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_departamentos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_departamentos: #1932 - Table 'simicr.h_sis_departamentos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_departamentos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_departamentos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_dependencia_sis_eslug`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_dependencia_sis_eslug: #1932 - Table 'simicr.h_sis_dependencia_sis_eslug' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_dependencia_sis_eslug: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_dependencia_sis_eslug`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_depens`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_depens: #1932 - Table 'simicr.h_sis_depens' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_depens: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_depens`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_depen_sis_eslug`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_depen_sis_eslug: #1932 - Table 'simicr.h_sis_depen_sis_eslug' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_depen_sis_eslug: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_depen_sis_eslug`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_depen_user`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_depen_user: #1932 - Table 'simicr.h_sis_depen_user' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_depen_user: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_depen_user`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_depeservs`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_depeservs: #1932 - Table 'simicr.h_sis_depeservs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_depeservs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_depeservs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_diagnosticos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_diagnosticos: #1932 - Table 'simicr.h_sis_diagnosticos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_diagnosticos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_diagnosticos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_dia_festivos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_dia_festivos: #1932 - Table 'simicr.h_sis_dia_festivos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_dia_festivos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_dia_festivos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_docfuens`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_docfuens: #1932 - Table 'simicr.h_sis_docfuens' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_docfuens: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_docfuens`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_enprsas`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_enprsas: #1932 - Table 'simicr.h_sis_enprsas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_enprsas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_enprsas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_entidads`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_entidads: #1932 - Table 'simicr.h_sis_entidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_entidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_entidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_entidad_saluds`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_entidad_saluds: #1932 - Table 'simicr.h_sis_entidad_saluds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_entidad_saluds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_entidad_saluds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_entidad_sis_servicio`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_entidad_sis_servicio: #1932 - Table 'simicr.h_sis_entidad_sis_servicio' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_entidad_sis_servicio: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_entidad_sis_servicio`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_eslugs`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_eslugs: #1932 - Table 'simicr.h_sis_eslugs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_eslugs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_eslugs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_estas`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_estas: #1932 - Table 'simicr.h_sis_estas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_estas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_estas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_fsoportes`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_fsoportes: #1932 - Table 'simicr.h_sis_fsoportes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_fsoportes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_fsoportes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_institucions`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_institucions: #1932 - Table 'simicr.h_sis_institucions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_institucions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_institucions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_institucion_edus`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_institucion_edus: #1932 - Table 'simicr.h_sis_institucion_edus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_institucion_edus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_institucion_edus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_localidads`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_localidads: #1932 - Table 'simicr.h_sis_localidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_localidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_localidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_localupzs`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_localupzs: #1932 - Table 'simicr.h_sis_localupzs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_localupzs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_localupzs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_mapa_procs`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_mapa_procs: #1932 - Table 'simicr.h_sis_mapa_procs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_mapa_procs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_mapa_procs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_menus`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_menus: #1932 - Table 'simicr.h_sis_menus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_menus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_menus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_municipios`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_municipios: #1932 - Table 'simicr.h_sis_municipios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_municipios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_municipios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_nnajs`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_nnajs: #1932 - Table 'simicr.h_sis_nnajs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_nnajs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_nnajs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_obses`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_obses: #1932 - Table 'simicr.h_sis_obses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_obses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_obses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_pais`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_pais: #1932 - Table 'simicr.h_sis_pais' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_pais: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_pais`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_procesos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_procesos: #1932 - Table 'simicr.h_sis_procesos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_procesos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_procesos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_servicios`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_servicios: #1932 - Table 'simicr.h_sis_servicios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_servicios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_servicios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_tablas`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_tablas: #1932 - Table 'simicr.h_sis_tablas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_tablas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_tablas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_tcampos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_tcampos: #1932 - Table 'simicr.h_sis_tcampos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_tcampos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_tcampos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_titulos`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_titulos: #1932 - Table 'simicr.h_sis_titulos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_titulos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_titulos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_upzbarris`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_upzbarris: #1932 - Table 'simicr.h_sis_upzbarris' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_upzbarris: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_upzbarris`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_sis_upzs`
--
-- Error leyendo la estructura de la tabla simicr.h_sis_upzs: #1932 - Table 'simicr.h_sis_upzs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_sis_upzs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_sis_upzs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_temas`
--
-- Error leyendo la estructura de la tabla simicr.h_temas: #1932 - Table 'simicr.h_temas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_temas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_temas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_users`
--
-- Error leyendo la estructura de la tabla simicr.h_users: #1932 - Table 'simicr.h_users' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_users: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_users`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsis`
--
-- Error leyendo la estructura de la tabla simicr.h_vsis: #1932 - Table 'simicr.h_vsis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_abu_sexuals`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_abu_sexuals: #1932 - Table 'simicr.h_vsi_abu_sexuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_abu_sexuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_abu_sexuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_actemo_fisiologica`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_actemo_fisiologica: #1932 - Table 'simicr.h_vsi_actemo_fisiologica' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_actemo_fisiologica: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_actemo_fisiologica`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_act_emocionals`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_act_emocionals: #1932 - Table 'simicr.h_vsi_act_emocionals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_act_emocionals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_act_emocionals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_antecedentes`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_antecedentes: #1932 - Table 'simicr.h_vsi_antecedentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_antecedentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_antecedentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_bienvenidas`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_bienvenidas: #1932 - Table 'simicr.h_vsi_bienvenidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_bienvenidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_bienvenidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_bienvenida_motivo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_bienvenida_motivo: #1932 - Table 'simicr.h_vsi_bienvenida_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_bienvenida_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_bienvenida_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_conceptos`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_conceptos: #1932 - Table 'simicr.h_vsi_conceptos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_conceptos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_conceptos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_concep_red`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_concep_red: #1932 - Table 'simicr.h_vsi_concep_red' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_concep_red: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_concep_red`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_consentimientos`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_consentimientos: #1932 - Table 'simicr.h_vsi_consentimientos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_consentimientos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_consentimientos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_consumos`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_consumos: #1932 - Table 'simicr.h_vsi_consumos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_consumos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_consumos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_consumo_expectativa`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_consumo_expectativa: #1932 - Table 'simicr.h_vsi_consumo_expectativa' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_consumo_expectativa: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_consumo_expectativa`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_consumo_quien`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_consumo_quien: #1932 - Table 'simicr.h_vsi_consumo_quien' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_consumo_quien: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_consumo_quien`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_datos_vinculas`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_datos_vinculas: #1932 - Table 'simicr.h_vsi_datos_vinculas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_datos_vinculas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_datos_vinculas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_ausencia`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_ausencia: #1932 - Table 'simicr.h_vsi_dinfam_ausencia' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_ausencia: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_ausencia`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_calle`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_calle: #1932 - Table 'simicr.h_vsi_dinfam_calle' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_calle: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_calle`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_consumo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_consumo: #1932 - Table 'simicr.h_vsi_dinfam_consumo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_consumo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_consumo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_cuidador`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_cuidador: #1932 - Table 'simicr.h_vsi_dinfam_cuidador' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_cuidador: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_cuidador`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_delito`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_delito: #1932 - Table 'simicr.h_vsi_dinfam_delito' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_delito: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_delito`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_libertad`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_libertad: #1932 - Table 'simicr.h_vsi_dinfam_libertad' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_libertad: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_libertad`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_madres`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_madres: #1932 - Table 'simicr.h_vsi_dinfam_madres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_madres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_madres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_padres`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_padres: #1932 - Table 'simicr.h_vsi_dinfam_padres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_padres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_padres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_prostitucion`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_prostitucion: #1932 - Table 'simicr.h_vsi_dinfam_prostitucion' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_prostitucion: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_prostitucion`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_dinfam_salud`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_dinfam_salud: #1932 - Table 'simicr.h_vsi_dinfam_salud' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_dinfam_salud: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_dinfam_salud`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_din_familiars`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_din_familiars: #1932 - Table 'simicr.h_vsi_din_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_din_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_din_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_educacions`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_educacions: #1932 - Table 'simicr.h_vsi_educacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_educacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_educacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_edu_causa`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_edu_causa: #1932 - Table 'simicr.h_vsi_edu_causa' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_edu_causa: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_edu_causa`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_edu_dificultad`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_edu_dificultad: #1932 - Table 'simicr.h_vsi_edu_dificultad' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_edu_dificultad: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_edu_dificultad`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_edu_diftipo_a`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_edu_diftipo_a: #1932 - Table 'simicr.h_vsi_edu_diftipo_a' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_edu_diftipo_a: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_edu_diftipo_a`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_edu_diftipo_b`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_edu_diftipo_b: #1932 - Table 'simicr.h_vsi_edu_diftipo_b' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_edu_diftipo_b: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_edu_diftipo_b`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_edu_fortaleza`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_edu_fortaleza: #1932 - Table 'simicr.h_vsi_edu_fortaleza' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_edu_fortaleza: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_edu_fortaleza`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_emocion_vincula`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_emocion_vincula: #1932 - Table 'simicr.h_vsi_emocion_vincula' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_emocion_vincula: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_emocion_vincula`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_estemo_adecuado`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_estemo_adecuado: #1932 - Table 'simicr.h_vsi_estemo_adecuado' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_estemo_adecuado: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_estemo_adecuado`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_estemo_contexto`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_estemo_contexto: #1932 - Table 'simicr.h_vsi_estemo_contexto' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_estemo_contexto: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_estemo_contexto`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_estemo_dificulta`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_estemo_dificulta: #1932 - Table 'simicr.h_vsi_estemo_dificulta' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_estemo_dificulta: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_estemo_dificulta`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_estemo_estresante`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_estemo_estresante: #1932 - Table 'simicr.h_vsi_estemo_estresante' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_estemo_estresante: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_estemo_estresante`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_estemo_lesiva`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_estemo_lesiva: #1932 - Table 'simicr.h_vsi_estemo_lesiva' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_estemo_lesiva: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_estemo_lesiva`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_estemo_motivo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_estemo_motivo: #1932 - Table 'simicr.h_vsi_estemo_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_estemo_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_estemo_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_est_emocionals`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_est_emocionals: #1932 - Table 'simicr.h_vsi_est_emocionals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_est_emocionals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_est_emocionals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_fac_protectors`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_fac_protectors: #1932 - Table 'simicr.h_vsi_fac_protectors' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_fac_protectors: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_fac_protectors`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_fac_riesgos`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_fac_riesgos: #1932 - Table 'simicr.h_vsi_fac_riesgos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_fac_riesgos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_fac_riesgos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_gening_dias`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_gening_dias: #1932 - Table 'simicr.h_vsi_gening_dias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_gening_dias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_gening_dias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_gening_labor`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_gening_labor: #1932 - Table 'simicr.h_vsi_gening_labor' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_gening_labor: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_gening_labor`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_gening_quien`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_gening_quien: #1932 - Table 'simicr.h_vsi_gening_quien' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_gening_quien: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_gening_quien`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_gen_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_gen_ingresos: #1932 - Table 'simicr.h_vsi_gen_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_gen_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_gen_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_metas`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_metas: #1932 - Table 'simicr.h_vsi_metas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_metas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_metas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_nnaj_academica`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_nnaj_academica: #1932 - Table 'simicr.h_vsi_nnaj_academica' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_nnaj_academica: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_nnaj_academica`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_nnaj_comportamental`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_nnaj_comportamental: #1932 - Table 'simicr.h_vsi_nnaj_comportamental' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_nnaj_comportamental: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_nnaj_comportamental`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_nnaj_emocional`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_nnaj_emocional: #1932 - Table 'simicr.h_vsi_nnaj_emocional' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_nnaj_emocional: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_nnaj_emocional`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_nnaj_familiar`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_nnaj_familiar: #1932 - Table 'simicr.h_vsi_nnaj_familiar' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_nnaj_familiar: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_nnaj_familiar`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_nnaj_sexual`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_nnaj_sexual: #1932 - Table 'simicr.h_vsi_nnaj_sexual' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_nnaj_sexual: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_nnaj_sexual`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_nnaj_social`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_nnaj_social: #1932 - Table 'simicr.h_vsi_nnaj_social' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_nnaj_social: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_nnaj_social`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_personas`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_personas: #1932 - Table 'simicr.h_vsi_personas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_personas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_personas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_potencialidads`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_potencialidads: #1932 - Table 'simicr.h_vsi_potencialidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_potencialidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_potencialidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_redsoc_acceso`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_redsoc_acceso: #1932 - Table 'simicr.h_vsi_redsoc_acceso' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_redsoc_acceso: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_redsoc_acceso`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_redsoc_actuals`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_redsoc_actuals: #1932 - Table 'simicr.h_vsi_redsoc_actuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_redsoc_actuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_redsoc_actuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_redsoc_motivo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_redsoc_motivo: #1932 - Table 'simicr.h_vsi_redsoc_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_redsoc_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_redsoc_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_redsoc_pasados`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_redsoc_pasados: #1932 - Table 'simicr.h_vsi_redsoc_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_redsoc_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_redsoc_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_red_socials`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_red_socials: #1932 - Table 'simicr.h_vsi_red_socials' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_red_socials: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_red_socials`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_relfam_acciones`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_relfam_acciones: #1932 - Table 'simicr.h_vsi_relfam_acciones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_relfam_acciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_relfam_acciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_relfam_dificultad`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_relfam_dificultad: #1932 - Table 'simicr.h_vsi_relfam_dificultad' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_relfam_dificultad: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_relfam_dificultad`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_relfam_motivo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_relfam_motivo: #1932 - Table 'simicr.h_vsi_relfam_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_relfam_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_relfam_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_relsol_dificulta`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_relsol_dificulta: #1932 - Table 'simicr.h_vsi_relsol_dificulta' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_relsol_dificulta: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_relsol_dificulta`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_relsol_facilita`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_relsol_facilita: #1932 - Table 'simicr.h_vsi_relsol_facilita' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_relsol_facilita: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_relsol_facilita`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_rel_familiars`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_rel_familiars: #1932 - Table 'simicr.h_vsi_rel_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_rel_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_rel_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_rel_sociales`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_rel_sociales: #1932 - Table 'simicr.h_vsi_rel_sociales' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_rel_sociales: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_rel_sociales`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_saluds`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_saluds: #1932 - Table 'simicr.h_vsi_saluds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_saluds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_saluds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_sitesp_riesgo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_sitesp_riesgo: #1932 - Table 'simicr.h_vsi_sitesp_riesgo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_sitesp_riesgo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_sitesp_riesgo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_sitesp_victima`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_sitesp_victima: #1932 - Table 'simicr.h_vsi_sitesp_victima' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_sitesp_victima: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_sitesp_victima`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_situacion_vincula`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_situacion_vincula: #1932 - Table 'simicr.h_vsi_situacion_vincula' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_situacion_vincula: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_situacion_vincula`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_sit_especials`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_sit_especials: #1932 - Table 'simicr.h_vsi_sit_especials' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_sit_especials: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_sit_especials`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_violencias`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_violencias: #1932 - Table 'simicr.h_vsi_violencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_violencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_violencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_vio_contexto`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_vio_contexto: #1932 - Table 'simicr.h_vsi_vio_contexto' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_vio_contexto: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_vio_contexto`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_vsi_vio_tipo`
--
-- Error leyendo la estructura de la tabla simicr.h_vsi_vio_tipo: #1932 - Table 'simicr.h_vsi_vio_tipo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.h_vsi_vio_tipo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`h_vsi_vio_tipo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_accion_gestions`
--
-- Error leyendo la estructura de la tabla simicr.in_accion_gestions: #1932 - Table 'simicr.in_accion_gestions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_accion_gestions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_accion_gestions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_actibases`
--
-- Error leyendo la estructura de la tabla simicr.in_actibases: #1932 - Table 'simicr.in_actibases' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_actibases: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_actibases`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_actsoportes`
--
-- Error leyendo la estructura de la tabla simicr.in_actsoportes: #1932 - Table 'simicr.in_actsoportes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_actsoportes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_actsoportes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_base_fuentes`
--
-- Error leyendo la estructura de la tabla simicr.in_base_fuentes: #1932 - Table 'simicr.in_base_fuentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_base_fuentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_base_fuentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_doc_preguntas`
--
-- Error leyendo la estructura de la tabla simicr.in_doc_preguntas: #1932 - Table 'simicr.in_doc_preguntas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_doc_preguntas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_doc_preguntas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_fuentes`
--
-- Error leyendo la estructura de la tabla simicr.in_fuentes: #1932 - Table 'simicr.in_fuentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_fuentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_fuentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_indicadors`
--
-- Error leyendo la estructura de la tabla simicr.in_indicadors: #1932 - Table 'simicr.in_indicadors' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_indicadors: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_indicadors`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_ligrus`
--
-- Error leyendo la estructura de la tabla simicr.in_ligrus: #1932 - Table 'simicr.in_ligrus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_ligrus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_ligrus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_lineabase_nnajs`
--
-- Error leyendo la estructura de la tabla simicr.in_lineabase_nnajs: #1932 - Table 'simicr.in_lineabase_nnajs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_lineabase_nnajs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_lineabase_nnajs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_linea_bases`
--
-- Error leyendo la estructura de la tabla simicr.in_linea_bases: #1932 - Table 'simicr.in_linea_bases' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_linea_bases: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_linea_bases`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_preguntas`
--
-- Error leyendo la estructura de la tabla simicr.in_preguntas: #1932 - Table 'simicr.in_preguntas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_preguntas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_preguntas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_respus`
--
-- Error leyendo la estructura de la tabla simicr.in_respus: #1932 - Table 'simicr.in_respus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_respus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_respus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_validacions`
--
-- Error leyendo la estructura de la tabla simicr.in_validacions: #1932 - Table 'simicr.in_validacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_validacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_validacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_valoracions`
--
-- Error leyendo la estructura de la tabla simicr.in_valoracions: #1932 - Table 'simicr.in_valoracions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.in_valoracions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`in_valoracions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `is_datos_basicos`
--
-- Error leyendo la estructura de la tabla simicr.is_datos_basicos: #1932 - Table 'simicr.is_datos_basicos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.is_datos_basicos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`is_datos_basicos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--
-- Error leyendo la estructura de la tabla simicr.mensajes: #1932 - Table 'simicr.mensajes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mensajes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mensajes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--
-- Error leyendo la estructura de la tabla simicr.migrations: #1932 - Table 'simicr.migrations' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.migrations: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`migrations`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vmas`
--
-- Error leyendo la estructura de la tabla simicr.mit_vmas: #1932 - Table 'simicr.mit_vmas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vmas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vmas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vma_ttos`
--
-- Error leyendo la estructura de la tabla simicr.mit_vma_ttos: #1932 - Table 'simicr.mit_vma_ttos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vma_ttos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vma_ttos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vspa`
--
-- Error leyendo la estructura de la tabla simicr.mit_vspa: #1932 - Table 'simicr.mit_vspa' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vspa: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vspa`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vspa_tabla`
--
-- Error leyendo la estructura de la tabla simicr.mit_vspa_tabla: #1932 - Table 'simicr.mit_vspa_tabla' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vspa_tabla: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vspa_tabla`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vspa_tabla_cuatro`
--
-- Error leyendo la estructura de la tabla simicr.mit_vspa_tabla_cuatro: #1932 - Table 'simicr.mit_vspa_tabla_cuatro' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vspa_tabla_cuatro: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vspa_tabla_cuatro`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vspa_tabla_dos`
--
-- Error leyendo la estructura de la tabla simicr.mit_vspa_tabla_dos: #1932 - Table 'simicr.mit_vspa_tabla_dos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vspa_tabla_dos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vspa_tabla_dos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mit_vspa_tabla_tres`
--
-- Error leyendo la estructura de la tabla simicr.mit_vspa_tabla_tres: #1932 - Table 'simicr.mit_vspa_tabla_tres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.mit_vspa_tabla_tres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`mit_vspa_tabla_tres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--
-- Error leyendo la estructura de la tabla simicr.model_has_permissions: #1932 - Table 'simicr.model_has_permissions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.model_has_permissions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`model_has_permissions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--
-- Error leyendo la estructura de la tabla simicr.model_has_roles: #1932 - Table 'simicr.model_has_roles' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.model_has_roles: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`model_has_roles`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_deses`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_deses: #1932 - Table 'simicr.nnaj_deses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_deses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_deses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_docus`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_docus: #1932 - Table 'simicr.nnaj_docus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_docus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_docus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_fi_csds`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_fi_csds: #1932 - Table 'simicr.nnaj_fi_csds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_fi_csds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_fi_csds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_focalis`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_focalis: #1932 - Table 'simicr.nnaj_focalis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_focalis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_focalis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_nacimis`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_nacimis: #1932 - Table 'simicr.nnaj_nacimis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_nacimis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_nacimis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_sexos`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_sexos: #1932 - Table 'simicr.nnaj_sexos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_sexos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_sexos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_sit_mils`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_sit_mils: #1932 - Table 'simicr.nnaj_sit_mils' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_sit_mils: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_sit_mils`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nnaj_upis`
--
-- Error leyendo la estructura de la tabla simicr.nnaj_upis: #1932 - Table 'simicr.nnaj_upis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nnaj_upis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nnaj_upis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--
-- Error leyendo la estructura de la tabla simicr.notifications: #1932 - Table 'simicr.notifications' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.notifications: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`notifications`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuclfamis`
--
-- Error leyendo la estructura de la tabla simicr.nuclfamis: #1932 - Table 'simicr.nuclfamis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.nuclfamis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`nuclfamis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--
-- Error leyendo la estructura de la tabla simicr.parametros: #1932 - Table 'simicr.parametros' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.parametros: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`parametros`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro_tema`
--
-- Error leyendo la estructura de la tabla simicr.parametro_tema: #1932 - Table 'simicr.parametro_tema' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.parametro_tema: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`parametro_tema`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--
-- Error leyendo la estructura de la tabla simicr.password_resets: #1932 - Table 'simicr.password_resets' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.password_resets: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`password_resets`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--
-- Error leyendo la estructura de la tabla simicr.permissions: #1932 - Table 'simicr.permissions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.permissions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`permissions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--
-- Error leyendo la estructura de la tabla simicr.posts: #1932 - Table 'simicr.posts' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.posts: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`posts`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_apoyos`
--
-- Error leyendo la estructura de la tabla simicr.redes_apoyos: #1932 - Table 'simicr.redes_apoyos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.redes_apoyos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`redes_apoyos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--
-- Error leyendo la estructura de la tabla simicr.roles: #1932 - Table 'simicr.roles' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.roles: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`roles`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--
-- Error leyendo la estructura de la tabla simicr.role_has_permissions: #1932 - Table 'simicr.role_has_permissions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.role_has_permissions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`role_has_permissions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_actividads`
--
-- Error leyendo la estructura de la tabla simicr.sis_actividads: #1932 - Table 'simicr.sis_actividads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_actividads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_actividads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_actividad_procesos`
--
-- Error leyendo la estructura de la tabla simicr.sis_actividad_procesos: #1932 - Table 'simicr.sis_actividad_procesos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_actividad_procesos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_actividad_procesos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_actividad_sis_documento_fuente`
--
-- Error leyendo la estructura de la tabla simicr.sis_actividad_sis_documento_fuente: #1932 - Table 'simicr.sis_actividad_sis_documento_fuente' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_actividad_sis_documento_fuente: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_actividad_sis_documento_fuente`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_barrios`
--
-- Error leyendo la estructura de la tabla simicr.sis_barrios: #1932 - Table 'simicr.sis_barrios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_barrios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_barrios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_cargos`
--
-- Error leyendo la estructura de la tabla simicr.sis_cargos: #1932 - Table 'simicr.sis_cargos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_cargos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_cargos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_departamentos`
--
-- Error leyendo la estructura de la tabla simicr.sis_departamentos: #1932 - Table 'simicr.sis_departamentos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_departamentos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_departamentos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_depens`
--
-- Error leyendo la estructura de la tabla simicr.sis_depens: #1932 - Table 'simicr.sis_depens' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_depens: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_depens`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_depen_sis_eslug`
--
-- Error leyendo la estructura de la tabla simicr.sis_depen_sis_eslug: #1932 - Table 'simicr.sis_depen_sis_eslug' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_depen_sis_eslug: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_depen_sis_eslug`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_depen_user`
--
-- Error leyendo la estructura de la tabla simicr.sis_depen_user: #1932 - Table 'simicr.sis_depen_user' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_depen_user: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_depen_user`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_depeservs`
--
-- Error leyendo la estructura de la tabla simicr.sis_depeservs: #1932 - Table 'simicr.sis_depeservs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_depeservs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_depeservs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_diagnosticos`
--
-- Error leyendo la estructura de la tabla simicr.sis_diagnosticos: #1932 - Table 'simicr.sis_diagnosticos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_diagnosticos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_diagnosticos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_dia_festivos`
--
-- Error leyendo la estructura de la tabla simicr.sis_dia_festivos: #1932 - Table 'simicr.sis_dia_festivos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_dia_festivos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_dia_festivos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_docfuens`
--
-- Error leyendo la estructura de la tabla simicr.sis_docfuens: #1932 - Table 'simicr.sis_docfuens' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_docfuens: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_docfuens`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_enprsas`
--
-- Error leyendo la estructura de la tabla simicr.sis_enprsas: #1932 - Table 'simicr.sis_enprsas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_enprsas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_enprsas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_entidads`
--
-- Error leyendo la estructura de la tabla simicr.sis_entidads: #1932 - Table 'simicr.sis_entidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_entidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_entidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_entidad_saluds`
--
-- Error leyendo la estructura de la tabla simicr.sis_entidad_saluds: #1932 - Table 'simicr.sis_entidad_saluds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_entidad_saluds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_entidad_saluds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_entidad_sis_servicio`
--
-- Error leyendo la estructura de la tabla simicr.sis_entidad_sis_servicio: #1932 - Table 'simicr.sis_entidad_sis_servicio' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_entidad_sis_servicio: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_entidad_sis_servicio`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_eslugs`
--
-- Error leyendo la estructura de la tabla simicr.sis_eslugs: #1932 - Table 'simicr.sis_eslugs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_eslugs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_eslugs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_estas`
--
-- Error leyendo la estructura de la tabla simicr.sis_estas: #1932 - Table 'simicr.sis_estas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_estas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_estas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_fsoportes`
--
-- Error leyendo la estructura de la tabla simicr.sis_fsoportes: #1932 - Table 'simicr.sis_fsoportes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_fsoportes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_fsoportes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_institucions`
--
-- Error leyendo la estructura de la tabla simicr.sis_institucions: #1932 - Table 'simicr.sis_institucions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_institucions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_institucions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_institucion_edus`
--
-- Error leyendo la estructura de la tabla simicr.sis_institucion_edus: #1932 - Table 'simicr.sis_institucion_edus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_institucion_edus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_institucion_edus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_localidads`
--
-- Error leyendo la estructura de la tabla simicr.sis_localidads: #1932 - Table 'simicr.sis_localidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_localidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_localidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_localupzs`
--
-- Error leyendo la estructura de la tabla simicr.sis_localupzs: #1932 - Table 'simicr.sis_localupzs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_localupzs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_localupzs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_mapa_procs`
--
-- Error leyendo la estructura de la tabla simicr.sis_mapa_procs: #1932 - Table 'simicr.sis_mapa_procs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_mapa_procs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_mapa_procs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_menus`
--
-- Error leyendo la estructura de la tabla simicr.sis_menus: #1932 - Table 'simicr.sis_menus' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_menus: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_menus`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_municipios`
--
-- Error leyendo la estructura de la tabla simicr.sis_municipios: #1932 - Table 'simicr.sis_municipios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_municipios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_municipios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_nnajs`
--
-- Error leyendo la estructura de la tabla simicr.sis_nnajs: #1932 - Table 'simicr.sis_nnajs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_nnajs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_nnajs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_obses`
--
-- Error leyendo la estructura de la tabla simicr.sis_obses: #1932 - Table 'simicr.sis_obses' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_obses: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_obses`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_pais`
--
-- Error leyendo la estructura de la tabla simicr.sis_pais: #1932 - Table 'simicr.sis_pais' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_pais: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_pais`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_pestanias`
--
-- Error leyendo la estructura de la tabla simicr.sis_pestanias: #1932 - Table 'simicr.sis_pestanias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_pestanias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_pestanias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_procesos`
--
-- Error leyendo la estructura de la tabla simicr.sis_procesos: #1932 - Table 'simicr.sis_procesos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_procesos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_procesos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_servicios`
--
-- Error leyendo la estructura de la tabla simicr.sis_servicios: #1932 - Table 'simicr.sis_servicios' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_servicios: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_servicios`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_tablas`
--
-- Error leyendo la estructura de la tabla simicr.sis_tablas: #1932 - Table 'simicr.sis_tablas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_tablas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_tablas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_tcampos`
--
-- Error leyendo la estructura de la tabla simicr.sis_tcampos: #1932 - Table 'simicr.sis_tcampos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_tcampos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_tcampos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_titulos`
--
-- Error leyendo la estructura de la tabla simicr.sis_titulos: #1932 - Table 'simicr.sis_titulos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_titulos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_titulos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_upzbarris`
--
-- Error leyendo la estructura de la tabla simicr.sis_upzbarris: #1932 - Table 'simicr.sis_upzbarris' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_upzbarris: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_upzbarris`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_upzs`
--
-- Error leyendo la estructura de la tabla simicr.sis_upzs: #1932 - Table 'simicr.sis_upzs' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.sis_upzs: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`sis_upzs`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--
-- Error leyendo la estructura de la tabla simicr.temas: #1932 - Table 'simicr.temas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.temas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`temas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--
-- Error leyendo la estructura de la tabla simicr.users: #1932 - Table 'simicr.users' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.users: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`users`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsis`
--
-- Error leyendo la estructura de la tabla simicr.vsis: #1932 - Table 'simicr.vsis' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsis: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsis`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_abu_sexuals`
--
-- Error leyendo la estructura de la tabla simicr.vsi_abu_sexuals: #1932 - Table 'simicr.vsi_abu_sexuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_abu_sexuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_abu_sexuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_actemo_fisiologica`
--
-- Error leyendo la estructura de la tabla simicr.vsi_actemo_fisiologica: #1932 - Table 'simicr.vsi_actemo_fisiologica' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_actemo_fisiologica: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_actemo_fisiologica`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_act_emocionals`
--
-- Error leyendo la estructura de la tabla simicr.vsi_act_emocionals: #1932 - Table 'simicr.vsi_act_emocionals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_act_emocionals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_act_emocionals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_antecedentes`
--
-- Error leyendo la estructura de la tabla simicr.vsi_antecedentes: #1932 - Table 'simicr.vsi_antecedentes' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_antecedentes: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_antecedentes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_bienvenidas`
--
-- Error leyendo la estructura de la tabla simicr.vsi_bienvenidas: #1932 - Table 'simicr.vsi_bienvenidas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_bienvenidas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_bienvenidas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_bienvenida_motivo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_bienvenida_motivo: #1932 - Table 'simicr.vsi_bienvenida_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_bienvenida_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_bienvenida_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_conceptos`
--
-- Error leyendo la estructura de la tabla simicr.vsi_conceptos: #1932 - Table 'simicr.vsi_conceptos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_conceptos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_conceptos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_concep_red`
--
-- Error leyendo la estructura de la tabla simicr.vsi_concep_red: #1932 - Table 'simicr.vsi_concep_red' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_concep_red: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_concep_red`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_consentimientos`
--
-- Error leyendo la estructura de la tabla simicr.vsi_consentimientos: #1932 - Table 'simicr.vsi_consentimientos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_consentimientos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_consentimientos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_consumos`
--
-- Error leyendo la estructura de la tabla simicr.vsi_consumos: #1932 - Table 'simicr.vsi_consumos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_consumos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_consumos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_consumo_expectativa`
--
-- Error leyendo la estructura de la tabla simicr.vsi_consumo_expectativa: #1932 - Table 'simicr.vsi_consumo_expectativa' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_consumo_expectativa: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_consumo_expectativa`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_consumo_quien`
--
-- Error leyendo la estructura de la tabla simicr.vsi_consumo_quien: #1932 - Table 'simicr.vsi_consumo_quien' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_consumo_quien: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_consumo_quien`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_datos_vinculas`
--
-- Error leyendo la estructura de la tabla simicr.vsi_datos_vinculas: #1932 - Table 'simicr.vsi_datos_vinculas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_datos_vinculas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_datos_vinculas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_ausencia`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_ausencia: #1932 - Table 'simicr.vsi_dinfam_ausencia' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_ausencia: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_ausencia`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_calle`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_calle: #1932 - Table 'simicr.vsi_dinfam_calle' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_calle: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_calle`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_consumo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_consumo: #1932 - Table 'simicr.vsi_dinfam_consumo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_consumo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_consumo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_cuidador`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_cuidador: #1932 - Table 'simicr.vsi_dinfam_cuidador' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_cuidador: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_cuidador`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_delito`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_delito: #1932 - Table 'simicr.vsi_dinfam_delito' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_delito: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_delito`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_libertad`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_libertad: #1932 - Table 'simicr.vsi_dinfam_libertad' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_libertad: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_libertad`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_madres`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_madres: #1932 - Table 'simicr.vsi_dinfam_madres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_madres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_madres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_padres`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_padres: #1932 - Table 'simicr.vsi_dinfam_padres' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_padres: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_padres`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_prostitucion`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_prostitucion: #1932 - Table 'simicr.vsi_dinfam_prostitucion' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_prostitucion: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_prostitucion`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_dinfam_salud`
--
-- Error leyendo la estructura de la tabla simicr.vsi_dinfam_salud: #1932 - Table 'simicr.vsi_dinfam_salud' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_dinfam_salud: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_dinfam_salud`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_din_familiars`
--
-- Error leyendo la estructura de la tabla simicr.vsi_din_familiars: #1932 - Table 'simicr.vsi_din_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_din_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_din_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_educacions`
--
-- Error leyendo la estructura de la tabla simicr.vsi_educacions: #1932 - Table 'simicr.vsi_educacions' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_educacions: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_educacions`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_edu_causa`
--
-- Error leyendo la estructura de la tabla simicr.vsi_edu_causa: #1932 - Table 'simicr.vsi_edu_causa' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_edu_causa: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_edu_causa`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_edu_dificultad`
--
-- Error leyendo la estructura de la tabla simicr.vsi_edu_dificultad: #1932 - Table 'simicr.vsi_edu_dificultad' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_edu_dificultad: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_edu_dificultad`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_edu_diftipo_a`
--
-- Error leyendo la estructura de la tabla simicr.vsi_edu_diftipo_a: #1932 - Table 'simicr.vsi_edu_diftipo_a' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_edu_diftipo_a: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_edu_diftipo_a`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_edu_diftipo_b`
--
-- Error leyendo la estructura de la tabla simicr.vsi_edu_diftipo_b: #1932 - Table 'simicr.vsi_edu_diftipo_b' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_edu_diftipo_b: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_edu_diftipo_b`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_edu_fortaleza`
--
-- Error leyendo la estructura de la tabla simicr.vsi_edu_fortaleza: #1932 - Table 'simicr.vsi_edu_fortaleza' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_edu_fortaleza: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_edu_fortaleza`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_emocion_vincula`
--
-- Error leyendo la estructura de la tabla simicr.vsi_emocion_vincula: #1932 - Table 'simicr.vsi_emocion_vincula' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_emocion_vincula: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_emocion_vincula`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_estemo_adecuado`
--
-- Error leyendo la estructura de la tabla simicr.vsi_estemo_adecuado: #1932 - Table 'simicr.vsi_estemo_adecuado' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_estemo_adecuado: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_estemo_adecuado`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_estemo_contexto`
--
-- Error leyendo la estructura de la tabla simicr.vsi_estemo_contexto: #1932 - Table 'simicr.vsi_estemo_contexto' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_estemo_contexto: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_estemo_contexto`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_estemo_dificulta`
--
-- Error leyendo la estructura de la tabla simicr.vsi_estemo_dificulta: #1932 - Table 'simicr.vsi_estemo_dificulta' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_estemo_dificulta: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_estemo_dificulta`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_estemo_estresante`
--
-- Error leyendo la estructura de la tabla simicr.vsi_estemo_estresante: #1932 - Table 'simicr.vsi_estemo_estresante' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_estemo_estresante: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_estemo_estresante`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_estemo_lesiva`
--
-- Error leyendo la estructura de la tabla simicr.vsi_estemo_lesiva: #1932 - Table 'simicr.vsi_estemo_lesiva' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_estemo_lesiva: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_estemo_lesiva`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_estemo_motivo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_estemo_motivo: #1932 - Table 'simicr.vsi_estemo_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_estemo_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_estemo_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_est_emocionals`
--
-- Error leyendo la estructura de la tabla simicr.vsi_est_emocionals: #1932 - Table 'simicr.vsi_est_emocionals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_est_emocionals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_est_emocionals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_fac_protectors`
--
-- Error leyendo la estructura de la tabla simicr.vsi_fac_protectors: #1932 - Table 'simicr.vsi_fac_protectors' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_fac_protectors: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_fac_protectors`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_fac_riesgos`
--
-- Error leyendo la estructura de la tabla simicr.vsi_fac_riesgos: #1932 - Table 'simicr.vsi_fac_riesgos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_fac_riesgos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_fac_riesgos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_gening_dias`
--
-- Error leyendo la estructura de la tabla simicr.vsi_gening_dias: #1932 - Table 'simicr.vsi_gening_dias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_gening_dias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_gening_dias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_gening_labor`
--
-- Error leyendo la estructura de la tabla simicr.vsi_gening_labor: #1932 - Table 'simicr.vsi_gening_labor' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_gening_labor: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_gening_labor`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_gening_quien`
--
-- Error leyendo la estructura de la tabla simicr.vsi_gening_quien: #1932 - Table 'simicr.vsi_gening_quien' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_gening_quien: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_gening_quien`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_gen_ingresos`
--
-- Error leyendo la estructura de la tabla simicr.vsi_gen_ingresos: #1932 - Table 'simicr.vsi_gen_ingresos' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_gen_ingresos: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_gen_ingresos`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_metas`
--
-- Error leyendo la estructura de la tabla simicr.vsi_metas: #1932 - Table 'simicr.vsi_metas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_metas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_metas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_nnaj_academica`
--
-- Error leyendo la estructura de la tabla simicr.vsi_nnaj_academica: #1932 - Table 'simicr.vsi_nnaj_academica' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_nnaj_academica: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_nnaj_academica`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_nnaj_comportamental`
--
-- Error leyendo la estructura de la tabla simicr.vsi_nnaj_comportamental: #1932 - Table 'simicr.vsi_nnaj_comportamental' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_nnaj_comportamental: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_nnaj_comportamental`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_nnaj_emocional`
--
-- Error leyendo la estructura de la tabla simicr.vsi_nnaj_emocional: #1932 - Table 'simicr.vsi_nnaj_emocional' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_nnaj_emocional: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_nnaj_emocional`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_nnaj_familiar`
--
-- Error leyendo la estructura de la tabla simicr.vsi_nnaj_familiar: #1932 - Table 'simicr.vsi_nnaj_familiar' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_nnaj_familiar: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_nnaj_familiar`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_nnaj_sexual`
--
-- Error leyendo la estructura de la tabla simicr.vsi_nnaj_sexual: #1932 - Table 'simicr.vsi_nnaj_sexual' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_nnaj_sexual: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_nnaj_sexual`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_nnaj_social`
--
-- Error leyendo la estructura de la tabla simicr.vsi_nnaj_social: #1932 - Table 'simicr.vsi_nnaj_social' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_nnaj_social: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_nnaj_social`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_personas`
--
-- Error leyendo la estructura de la tabla simicr.vsi_personas: #1932 - Table 'simicr.vsi_personas' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_personas: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_personas`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_potencialidads`
--
-- Error leyendo la estructura de la tabla simicr.vsi_potencialidads: #1932 - Table 'simicr.vsi_potencialidads' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_potencialidads: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_potencialidads`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_redsoc_acceso`
--
-- Error leyendo la estructura de la tabla simicr.vsi_redsoc_acceso: #1932 - Table 'simicr.vsi_redsoc_acceso' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_redsoc_acceso: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_redsoc_acceso`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_redsoc_actuals`
--
-- Error leyendo la estructura de la tabla simicr.vsi_redsoc_actuals: #1932 - Table 'simicr.vsi_redsoc_actuals' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_redsoc_actuals: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_redsoc_actuals`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_redsoc_motivo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_redsoc_motivo: #1932 - Table 'simicr.vsi_redsoc_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_redsoc_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_redsoc_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_redsoc_pasados`
--
-- Error leyendo la estructura de la tabla simicr.vsi_redsoc_pasados: #1932 - Table 'simicr.vsi_redsoc_pasados' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_redsoc_pasados: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_redsoc_pasados`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_red_socials`
--
-- Error leyendo la estructura de la tabla simicr.vsi_red_socials: #1932 - Table 'simicr.vsi_red_socials' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_red_socials: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_red_socials`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_relfam_acciones`
--
-- Error leyendo la estructura de la tabla simicr.vsi_relfam_acciones: #1932 - Table 'simicr.vsi_relfam_acciones' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_relfam_acciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_relfam_acciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_relfam_dificultad`
--
-- Error leyendo la estructura de la tabla simicr.vsi_relfam_dificultad: #1932 - Table 'simicr.vsi_relfam_dificultad' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_relfam_dificultad: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_relfam_dificultad`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_relfam_motivo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_relfam_motivo: #1932 - Table 'simicr.vsi_relfam_motivo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_relfam_motivo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_relfam_motivo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_relsol_dificulta`
--
-- Error leyendo la estructura de la tabla simicr.vsi_relsol_dificulta: #1932 - Table 'simicr.vsi_relsol_dificulta' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_relsol_dificulta: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_relsol_dificulta`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_relsol_facilita`
--
-- Error leyendo la estructura de la tabla simicr.vsi_relsol_facilita: #1932 - Table 'simicr.vsi_relsol_facilita' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_relsol_facilita: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_relsol_facilita`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_rel_familiars`
--
-- Error leyendo la estructura de la tabla simicr.vsi_rel_familiars: #1932 - Table 'simicr.vsi_rel_familiars' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_rel_familiars: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_rel_familiars`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_rel_sociales`
--
-- Error leyendo la estructura de la tabla simicr.vsi_rel_sociales: #1932 - Table 'simicr.vsi_rel_sociales' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_rel_sociales: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_rel_sociales`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_saluds`
--
-- Error leyendo la estructura de la tabla simicr.vsi_saluds: #1932 - Table 'simicr.vsi_saluds' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_saluds: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_saluds`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_sitesp_riesgo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_sitesp_riesgo: #1932 - Table 'simicr.vsi_sitesp_riesgo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_sitesp_riesgo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_sitesp_riesgo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_sitesp_victima`
--
-- Error leyendo la estructura de la tabla simicr.vsi_sitesp_victima: #1932 - Table 'simicr.vsi_sitesp_victima' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_sitesp_victima: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_sitesp_victima`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_situacion_vincula`
--
-- Error leyendo la estructura de la tabla simicr.vsi_situacion_vincula: #1932 - Table 'simicr.vsi_situacion_vincula' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_situacion_vincula: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_situacion_vincula`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_sit_especials`
--
-- Error leyendo la estructura de la tabla simicr.vsi_sit_especials: #1932 - Table 'simicr.vsi_sit_especials' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_sit_especials: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_sit_especials`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_violencias`
--
-- Error leyendo la estructura de la tabla simicr.vsi_violencias: #1932 - Table 'simicr.vsi_violencias' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_violencias: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_violencias`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_vio_contexto`
--
-- Error leyendo la estructura de la tabla simicr.vsi_vio_contexto: #1932 - Table 'simicr.vsi_vio_contexto' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_vio_contexto: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_vio_contexto`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsi_vio_tipo`
--
-- Error leyendo la estructura de la tabla simicr.vsi_vio_tipo: #1932 - Table 'simicr.vsi_vio_tipo' doesn't exist in engine
-- Error leyendo datos de la tabla simicr.vsi_vio_tipo: #1064 - Algo está equivocado en su sintax cerca 'FROM `simicr`.`vsi_vio_tipo`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `V_COMPOSICION_FAMILIAR`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `V_COMPOSICION_FAMILIAR`;
CREATE TABLE IF NOT EXISTS `V_COMPOSICION_FAMILIAR` (
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `V_CONSUMO_SPA`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `V_CONSUMO_SPA`;
CREATE TABLE IF NOT EXISTS `V_CONSUMO_SPA` (
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `V_DATOS_BASICOS`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `V_DATOS_BASICOS`;
CREATE TABLE IF NOT EXISTS `V_DATOS_BASICOS` (
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `V_ESCUELA`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `V_ESCUELA`;
CREATE TABLE IF NOT EXISTS `V_ESCUELA` (
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `V_GENERACION_INGRESOS`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `V_GENERACION_INGRESOS`;
CREATE TABLE IF NOT EXISTS `V_GENERACION_INGRESOS` (
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `V_JUSTICIA`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `V_JUSTICIA`;
CREATE TABLE IF NOT EXISTS `V_JUSTICIA` (
);

-- --------------------------------------------------------

--
-- Estructura para la vista `V_COMPOSICION_FAMILIAR`
--
DROP TABLE IF EXISTS `V_COMPOSICION_FAMILIAR`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_composicion_familiar`  AS  select distinct `a`.`sis_nnaj_id` AS `sis_nnaj_id`,`a`.`s_documento` AS `documento_nnaj`,`b`.`sis_nnajnnaj_id` AS `sis_nnajnnaj_id`,`i`.`s_documento` AS `numero_documento`,concat(`c`.`s_primer_nombre`,' ',`c`.`s_segundo_nombre`,' ',`c`.`s_primer_apellido`,' ',`c`.`s_segundo_apellido`) AS `nombre_familiar`,`b`.`s_nombre_identitario` AS `nombre_identitario`,`d`.`nombre` AS `vinculado_idipron`,`e`.`nombre` AS `parentesco`,`f`.`nombre` AS `ocupacion`,`g`.`nombre` AS `convive_nnaj`,`h`.`nombre` AS `representante_legal`,`b`.`s_telefono` AS `telefono` from ((((((((`v_datos_basicos` `a` left join `fi_compfamis` `b` on(`b`.`sis_nnajnnaj_id` = `a`.`sis_nnaj_id`)) left join `fi_datos_basicos` `c` on(`b`.`sis_nnaj_id` = `c`.`sis_nnaj_id`)) left join `parametros` `d` on(`d`.`id` = `b`.`i_prm_vinculado_idipron_id`)) left join `parametros` `e` on(`e`.`id` = `b`.`i_prm_parentesco_id`)) left join `parametros` `f` on(`f`.`id` = `b`.`i_prm_ocupacion_id`)) left join `parametros` `g` on(`g`.`id` = `b`.`i_prm_convive_nnaj_id`)) left join `parametros` `h` on(`h`.`id` = `b`.`prm_reprlega_id`)) left join `nnaj_docus` `i` on(`i`.`fi_datos_basico_id` = `b`.`sis_nnaj_id`)) where `b`.`sis_nnaj_id` <> `a`.`sis_nnaj_id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `V_CONSUMO_SPA`
--
DROP TABLE IF EXISTS `V_CONSUMO_SPA`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_consumo_spa`  AS  select `a`.`sis_nnaj_id` AS `sis_nnaj_id`,`a`.`s_documento` AS `s_documento`,case when `e`.`nombre` is not null then `e`.`nombre` else 'NO CONSUMO' end AS `spa`,case when `d`.`i_edad_uso` is not null then `d`.`i_edad_uso` else 'NO APLICA' end AS `edad_inicio_consumo`,case when `f`.`nombre` is not null then `f`.`nombre` else 'NO APLICA' end AS `consumo_ultimo_mes` from ((((`v_datos_basicos` `a` left join `fi_consumo_spas` `b` on(`b`.`sis_nnaj_id` = `a`.`sis_nnaj_id`)) left join `fi_sustancia_consumidas` `d` on(`d`.`fi_consumo_spa_id` = `b`.`id`)) left join `parametros` `e` on(`e`.`id` = `d`.`i_prm_sustancia_id`)) left join `parametros` `f` on(`f`.`id` = `d`.`i_prm_consume_id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `V_DATOS_BASICOS`
--
DROP TABLE IF EXISTS `V_DATOS_BASICOS`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_datos_basicos`  AS  select distinct `fdb`.`sis_nnaj_id` AS `sis_nnaj_id`,`fdb`.`s_primer_nombre` AS `s_primer_nombre`,`fdb`.`s_segundo_nombre` AS `s_segundo_nombre`,`fdb`.`s_primer_apellido` AS `s_primer_apellido`,`fdb`.`s_segundo_apellido` AS `s_segundo_apellido`,`fdb`.`created_at` AS `created_at`,`usr`.`name` AS `usuariocrea`,`nna`.`d_nacimiento` AS `d_nacimiento`,`etnia`.`nombre` AS `etnia`,`poet`.`nombre` AS `poblacion_etnia`,`esci`.`nombre` AS `estado_civil`,`sexo`.`s_nombre_identitario` AS `s_nombre_identitario`,`docu`.`s_documento` AS `s_documento`,`psex`.`nombre` AS `sexo`,`siba`.`s_barrio` AS `s_barrio`,`upzs`.`s_upz` AS `s_upz`,`silo`.`s_localidad` AS `s_localidad`,`depe`.`nombre` AS `dependencia`,`a`.`nombre` AS `tiene_lugar_donde_dormir`,`b`.`nombre` AS `lugar_donde_duerme`,`c`.`nombre` AS `tipo_residencia`,`d`.`nombre` AS `tipo_dirrecion`,`e`.`nombre` AS `zona_residencia`,`f`.`nombre` AS `TIPO_DE_VIA`,`resi`.`s_nombre_via` AS `NUMERO`,`g`.`nombre` AS `Alfabeto_Via_Principal`,`g1`.`nombre` AS `Bis`,`g2`.`nombre` AS `Letra_Bis`,`g3`.`nombre` AS `Cuadrante_VP`,`resi`.`i_via_generadora` AS `Vía_Generadora_VG`,`g4`.`nombre` AS `Alfabético_VG`,`resi`.`i_placa_vg` AS `Placa_VG`,`g5`.`nombre` AS `Cuadrante_VG`,`g6`.`nombre` AS `identidad`,`g7`.`nombre` AS `orientacion`,`g9`.`nombre` AS `tiene_discapacidad`,`g10`.`nombre` AS `tipo_discapacidad`,`g8`.`i_prm_tipo_discapacidad_id` AS `i_prm_tipo_discapacidad_id`,`g11`.`s_municipio` AS `municipio_nacimiento`,`g12`.`s_departamento` AS `departamento_nacimiento`,`g13`.`s_pais` AS `pais_nacimiento`,`g14`.`nombre` AS `tiene_hijos`,`g8`.`i_numero_hijos` AS `numero_hijo`,`g15`.`nombre` AS `condicion_especial`,`g16`.`nombre` AS `cabeza_hogar`,`g18`.`nombre` AS `situacion_militar`,`g19`.`nombre` AS `clase_libreta`,`g20`.`nombre` AS `tipo_documento` from (((((((((((((((((((((((((((((((((((((((((((((`fi_datos_basicos` `fdb` left join `nnaj_nacimis` `nna` on(`fdb`.`id` = `nna`.`fi_datos_basico_id`)) left join `users` `usr` on(`fdb`.`user_crea_id` = `usr`.`id`)) left join `nnaj_fi_csds` `nfc` on(`fdb`.`id` = `nfc`.`fi_datos_basico_id`)) left join `parametros` `etnia` on(`nfc`.`prm_etnia_id` = `etnia`.`id`)) left join `parametros` `poet` on(`nfc`.`prm_poblacion_etnia_id` = `poet`.`id`)) left join `parametros` `esci` on(`nfc`.`prm_estado_civil_id` = `esci`.`id`)) left join `fi_residencias` `resi` on(`fdb`.`sis_nnaj_id` = `resi`.`sis_nnaj_id`)) left join `nnaj_sexos` `sexo` on(`fdb`.`id` = `sexo`.`fi_datos_basico_id`)) left join `nnaj_docus` `docu` on(`fdb`.`id` = `docu`.`fi_datos_basico_id`)) left join `parametros` `psex` on(`sexo`.`prm_sexo_id` = `psex`.`id`)) left join `sis_upzbarris` `upba` on(`resi`.`sis_upzbarri_id` = `upba`.`id`)) left join `sis_barrios` `siba` on(`upba`.`sis_barrio_id` = `siba`.`id`)) left join `sis_localupzs` `loup` on(`upba`.`sis_localupz_id` = `loup`.`id`)) left join `sis_upzs` `upzs` on(`loup`.`sis_upz_id` = `upzs`.`id`)) left join `sis_localidads` `silo` on(`loup`.`sis_localidad_id` = `silo`.`id`)) left join `nnaj_upis` `upis` on(`fdb`.`sis_nnaj_id` = `upis`.`sis_nnaj_id`)) left join `sis_depens` `depe` on(`upis`.`sis_depen_id` = `depe`.`id`)) left join `parametros` `a` on(`a`.`id` = `resi`.`i_prm_tiene_dormir_id`)) left join `parametros` `b` on(`b`.`id` = `resi`.`i_prm_tipo_duerme_id`)) left join `parametros` `c` on(`c`.`id` = `resi`.`i_prm_tipo_tenencia_id`)) left join `parametros` `d` on(`d`.`id` = `resi`.`i_prm_tipo_direccion_id`)) left join `parametros` `e` on(`e`.`id` = `resi`.`i_prm_zona_direccion_id`)) left join `parametros` `f` on(`f`.`id` = `resi`.`i_prm_tipo_via_id`)) left join `parametros` `g` on(`g`.`id` = `resi`.`i_prm_alfabeto_via_id`)) left join `parametros` `g1` on(`g1`.`id` = `resi`.`i_prm_tiene_bis_id`)) left join `parametros` `g2` on(`g2`.`id` = `resi`.`i_prm_bis_alfabeto_id`)) left join `parametros` `g3` on(`g3`.`id` = `resi`.`i_prm_cuadrante_vp_id`)) left join `parametros` `g4` on(`g4`.`id` = `resi`.`i_prm_alfabetico_vg_id`)) left join `parametros` `g5` on(`g5`.`id` = `resi`.`i_prm_cuadrante_vg_id`)) left join `parametros` `g6` on(`g6`.`id` = `sexo`.`prm_identidad_genero_id`)) left join `parametros` `g7` on(`g7`.`id` = `sexo`.`prm_orientacion_sexual_id`)) left join `fi_saluds` `g8` on(`g8`.`sis_nnaj_id` = `fdb`.`sis_nnaj_id`)) left join `parametros` `g9` on(`g9`.`id` = `g8`.`i_prm_tiene_discapacidad_id`)) left join `parametros` `g10` on(`g10`.`id` = `g8`.`i_prm_tipo_discapacidad_id`)) left join `sis_municipios` `g11` on(`g11`.`id` = `nna`.`sis_municipio_id`)) left join `sis_departamentos` `g12` on(`g11`.`sis_departamento_id` = `g12`.`id`)) left join `sis_pais` `g13` on(`g13`.`id` = `g12`.`sis_pai_id`)) left join `parametros` `g14` on(`g14`.`id` = `g8`.`i_prm_tiene_hijos_id`)) left join `fi_violencias` `v1` on(`v1`.`sis_nnaj_id` = `fdb`.`sis_nnaj_id`)) left join `parametros` `g15` on(`g15`.`id` = `v1`.`i_prm_condicion_presenta_id`)) left join `parametros` `g16` on(`g16`.`id` = `v1`.`prm_cabefami_id`)) left join `nnaj_sit_mils` `g17` on(`g17`.`fi_datos_basico_id` = `fdb`.`id`)) left join `parametros` `g18` on(`g17`.`prm_situacion_militar_id` = `g18`.`id`)) left join `parametros` `g19` on(`g19`.`id` = `g17`.`prm_clase_libreta_id`)) left join `parametros` `g20` on(`g20`.`id` = `docu`.`prm_doc_fisico_id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `V_ESCUELA`
--
DROP TABLE IF EXISTS `V_ESCUELA`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_escuela`  AS  select distinct `a`.`sis_nnaj_id` AS `sis_nnaj_id`,`c`.`nombre` AS `sabe_leer`,`d`.`nombre` AS `sabe_escribir`,`e`.`nombre` AS `operaciones_basica`,`f`.`nombre` AS `actualmente_estudia`,`g`.`nombre` AS `jornada_estudio`,`h`.`nombre` AS `naturaleza_institucion`,`b`.`s_institucion_edu` AS `nombre_colegio`,concat(`b`.`i_dias_sin_estudio`,'-DIA-',`b`.`i_meses_sin_estudio`,'-MES-',`b`.`i_anos_sin_estudio`,'-AÑO') AS `TIEMPO_SIN_ESTUDIO`,`k`.`nombre` AS `ultimo_grado_aprobado`,`i`.`nombre` AS `ultimo_nivel`,`j`.`nombre` AS `tiene_certificado` from ((((((((((`v_datos_basicos` `a` left join `fi_formacions` `b` on(`b`.`sis_nnaj_id` = `a`.`sis_nnaj_id`)) left join `parametros` `c` on(`c`.`id` = `b`.`i_prm_lee_id`)) left join `parametros` `d` on(`d`.`id` = `b`.`i_prm_escribe_id`)) left join `parametros` `e` on(`e`.`id` = `b`.`i_prm_operaciones_id`)) left join `parametros` `f` on(`f`.`id` = `b`.`i_prm_estudia_id`)) left join `parametros` `g` on(`g`.`id` = `b`.`i_prm_jornada_estudio_id`)) left join `parametros` `h` on(`h`.`id` = `b`.`i_prm_naturaleza_entidad_id`)) left join `parametros` `k` on(`k`.`id` = `b`.`i_prm_ultimo_grado_aprobado_id`)) left join `parametros` `i` on(`i`.`id` = `b`.`i_prm_ultimo_nivel_estudio_id`)) left join `parametros` `j` on(`j`.`id` = `b`.`i_prm_certificado_ultimo_nivel_id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `V_GENERACION_INGRESOS`
--
DROP TABLE IF EXISTS `V_GENERACION_INGRESOS`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_generacion_ingresos`  AS  select distinct `a`.`sis_nnaj_id` AS `sis_nnaj_id`,`c`.`nombre` AS `actividad_ingresos`,`b`.`s_trabajo_formal` AS `actividad_formal`,`d`.`nombre` AS `actividad_informal`,`e`.`nombre` AS `otra_actividad`,`f`.`nombre` AS `pq_no_ingreso`,concat(`b`.`i_dias_buscando_empleo`,'--DIAS--',`b`.`i_meses_buscando_empleo`,'--MESES--',`b`.`i_anos_buscando_empleo`,'--AÑO') AS `tiempo_buscando_empleo`,`g`.`nombre` AS `jornada_ingreso`,concat(`b`.`s_hora_inicial`,'--HORA INICIO--',`b`.`s_hora_final`,'--HORA FINAL') AS `HORARIO_INGRESO`,`k`.`nombre` AS `dias_ingreso`,`h`.`nombre` AS `frecuencia_ingresos`,`b`.`i_total_ingreso_mensual` AS `ingresos`,`i`.`nombre` AS `tipo_contrato` from ((((((((((`v_datos_basicos` `a` left join `fi_generacion_ingresos` `b` on(`a`.`sis_nnaj_id` = `b`.`sis_nnaj_id`)) left join `parametros` `c` on(`c`.`id` = `b`.`i_prm_actividad_genera_ingreso_id`)) left join `parametros` `d` on(`d`.`id` = `b`.`i_prm_trabajo_informal_id`)) left join `parametros` `e` on(`e`.`id` = `b`.`i_prm_otra_actividad_id`)) left join `parametros` `f` on(`f`.`id` = `b`.`i_prm_razon_no_genera_ingreso_id`)) left join `parametros` `g` on(`g`.`id` = `b`.`i_prm_jornada_genera_ingreso_id`)) left join `parametros` `h` on(`h`.`id` = `b`.`i_prm_frec_ingreso_id`)) left join `parametros` `i` on(`i`.`id` = `b`.`i_prm_tipo_relacion_laboral_id`)) left join `fi_dias_genera_ingresos` `j` on(`j`.`fi_generacion_ingreso_id` = `b`.`id`)) left join `parametros` `k` on(`k`.`id` = `j`.`i_prm_dia_genera_id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `V_JUSTICIA`
--
DROP TABLE IF EXISTS `V_JUSTICIA`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_justicia`  AS  select distinct `a`.`sis_nnaj_id` AS `id`,`a`.`s_documento` AS `documento`,`e1`.`nombre` AS `ha_estado_pard`,`e2`.`nombre` AS `actualmente_pard`,concat(`e`.`i_cuanto_pard`,'-',`e3`.`nombre`) AS `hace_cuanto_pard`,`e4`.`nombre` AS `motivo_pard`,`c1`.`nombre` AS `ha_estado_srpa`,`c3`.`nombre` AS `actualmente_srpa`,concat(`c`.`i_cuanto_srpa`,'-',`c2`.`nombre`) AS `hace_cuanto`,`c4`.`nombre` AS `motivo_spra`,`c5`.`nombre` AS `sancion_pedagogica`,`d1`.`nombre` AS `ha_estado_spoa`,`d2`.`nombre` AS `actualmente_spoa`,concat(`d`.`i_cuanto_spoa`,'-',`d3`.`nombre`) AS `hace_cuanto_s`,`d5`.`nombre` AS `motivo_spoa`,`d6`.`nombre` AS `modalidad_pena`,`d4`.`nombre` AS `ha_estado_preso`,`b1`.`nombre` AS `vinculado_violencia`,`b2`.`nombre` AS `riesgo_actos` from (((((((((((((((((((((`v_datos_basicos` `a` left join `fi_justrests` `b` on(`b`.`sis_nnaj_id` = `a`.`sis_nnaj_id`)) left join `fi_proceso_srpas` `c` on(`c`.`fi_justrest_id` = `b`.`id`)) left join `parametros` `c1` on(`c1`.`id` = `c`.`i_prm_ha_estado_srpa_id`)) left join `parametros` `c2` on(`c2`.`id` = `c`.`i_prm_tipo_tiempo_srpa_id`)) left join `parametros` `c3` on(`c3`.`id` = `c`.`i_prm_actualmente_srpa_id`)) left join `parametros` `c4` on(`c4`.`id` = `c`.`i_prm_motivo_srpa_id`)) left join `parametros` `c5` on(`c5`.`id` = `c`.`i_prm_sancion_srpa_id`)) left join `fi_proceso_spoas` `d` on(`d`.`fi_justrest_id` = `b`.`id`)) left join `parametros` `d1` on(`d1`.`id` = `d`.`i_prm_ha_estado_spoa_id`)) left join `parametros` `d2` on(`d2`.`id` = `d`.`i_prm_actualmente_spoa_id`)) left join `parametros` `d3` on(`d3`.`id` = `d`.`i_prm_tipo_tiempo_spoa_id`)) left join `parametros` `d4` on(`d4`.`id` = `d`.`i_prm_ha_estado_preso_id`)) left join `parametros` `d5` on(`d5`.`id` = `d`.`i_prm_motivo_spoa_id`)) left join `parametros` `d6` on(`d6`.`id` = `d`.`i_prm_mod_cumple_pena_id`)) left join `parametros` `b1` on(`b1`.`id` = `b`.`i_prm_vinculado_violencia_id`)) left join `parametros` `b2` on(`b2`.`id` = `b`.`i_prm_riesgo_participar_id`)) left join `fi_proceso_pards` `e` on(`e`.`fi_justrest_id` = `b`.`id`)) left join `parametros` `e1` on(`e1`.`id` = `e`.`i_prm_ha_estado_pard_id`)) left join `parametros` `e2` on(`e2`.`id` = `e`.`i_prm_actualmente_pard_id`)) left join `parametros` `e3` on(`e3`.`id` = `e`.`i_prm_tipo_tiempo_pard_id`)) left join `parametros` `e4` on(`e4`.`id` = `e`.`i_prm_motivo_pard_id`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
