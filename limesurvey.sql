-- MySQL dump 10.13  Distrib 5.5.59, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: limesurvey
-- ------------------------------------------------------
-- Server version	5.5.59-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `encuestas_link`
--

DROP TABLE IF EXISTS `encuestas_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuestas_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestas_link`
--

LOCK TABLES `encuestas_link` WRITE;
/*!40000 ALTER TABLE `encuestas_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuestas_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_answers`
--

DROP TABLE IF EXISTS `lime_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_answers` (
  `qid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortorder` int(11) NOT NULL,
  `assessment_value` int(11) NOT NULL DEFAULT '0',
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `scale_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`qid`,`code`,`language`,`scale_id`),
  KEY `answers_idx2` (`sortorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_answers`
--

LOCK TABLES `lime_answers` WRITE;
/*!40000 ALTER TABLE `lime_answers` DISABLE KEYS */;
INSERT INTO `lime_answers` VALUES (15,'A1','1',1,0,'es-CL',0),(15,'A2','2',2,0,'es-CL',0),(15,'A3','3',3,0,'es-CL',0),(15,'A4','4',4,0,'es-CL',0),(15,'A5','5',5,0,'es-CL',0),(15,'A6','6',6,0,'es-CL',0),(15,'A7','7',7,0,'es-CL',0),(17,'A1','1',1,0,'es-CL',0),(17,'A2','2',2,0,'es-CL',0),(17,'A3','3',3,0,'es-CL',0),(17,'A4','4',4,0,'es-CL',0),(17,'A5','5',5,0,'es-CL',0),(17,'A6','6',6,0,'es-CL',0),(17,'A7','7',7,0,'es-CL',0),(18,'A1','1',1,0,'es-CL',0),(18,'A2','2',2,0,'es-CL',0),(18,'A3','3',3,0,'es-CL',0),(18,'A4','4',4,0,'es-CL',0),(18,'A5','5',5,0,'es-CL',0),(18,'A6','6',6,0,'es-CL',0),(18,'A7','7',7,0,'es-CL',0),(19,'A1','1',1,0,'es-CL',0),(19,'A2','2',2,0,'es-CL',0),(19,'A3','3',3,0,'es-CL',0),(19,'A4','4',4,0,'es-CL',0),(19,'A5','5',5,0,'es-CL',0),(19,'A6','6',6,0,'es-CL',0),(19,'A7','7',7,0,'es-CL',0),(20,'A1','1',1,0,'es-CL',0),(20,'A2','2',2,0,'es-CL',0),(20,'A3','3',3,0,'es-CL',0),(20,'A4','4',4,0,'es-CL',0),(20,'A5','5',5,0,'es-CL',0),(20,'A6','6',6,0,'es-CL',0),(20,'A7','7',7,0,'es-CL',0),(21,'A1','1. A la hora',1,0,'es-CL',0),(21,'A2','2. Atrasado',2,0,'es-CL',0),(21,'A3','3. Antes',3,0,'es-CL',0),(23,'A1','1. Menor a 15 minutos',1,0,'es-CL',0),(23,'A2','2. Entre 16 y 30 minutos',2,0,'es-CL',0),(23,'A3','3. Mayor a 31 minutos',3,0,'es-CL',0),(25,'A1','1. Primera vez',1,0,'es-CL',0),(25,'A2','2. Poco frecuente',2,0,'es-CL',0),(25,'A3','3. Habitualmente',3,0,'es-CL',0),(28,'A1','1',1,0,'es-CL',0),(28,'A2','2',2,0,'es-CL',0),(28,'A3','3',3,0,'es-CL',0),(28,'A4','4',4,0,'es-CL',0),(28,'A5','5',5,0,'es-CL',0),(28,'A6','6',6,0,'es-CL',0),(28,'A7','7',7,0,'es-CL',0),(29,'A1','1. Prefiere vía telefónica',1,0,'es-CL',0),(29,'A2','2. Utiliza el correo',2,0,'es-CL',0),(29,'A3','3. No sabe utilizar el portal /web',3,0,'es-CL',0),(29,'A4','4. No conoce el portal /web',4,0,'es-CL',0),(29,'A5','5. Desconoce esta funcionalidad del portal /web',5,0,'es-CL',0),(29,'A6','6. La planta está cerca por lo que no lo requiere',6,0,'es-CL',0),(29,'A7','7. La plataforma no funciona bien, tiene problemas',7,0,'es-CL',0),(29,'A8','',8,0,'es-CL',0),(30,'A1','1',1,0,'es-CL',0),(30,'A2','2',2,0,'es-CL',0),(30,'A3','3',3,0,'es-CL',0),(30,'A4','4',4,0,'es-CL',0),(30,'A5','5',5,0,'es-CL',0),(30,'A6','6',6,0,'es-CL',0),(30,'A7','7',7,0,'es-CL',0),(30,'A8','99. No ha recibido mensaje',8,0,'es-CL',0),(32,'A4','4. No puede comparar',4,0,'es-CL',0),(32,'A3','3. Peor',3,0,'es-CL',0),(32,'A2','2. Igual',2,0,'es-CL',0),(32,'A1','1. Mejor',1,0,'es-CL',0),(100,'A2','2',2,0,'es-CL',0),(98,'A7','7',7,0,'es-CL',0),(98,'A6','6',6,0,'es-CL',0),(98,'A5','5',5,0,'es-CL',0),(98,'A4','4',4,0,'es-CL',0),(98,'A3','3',3,0,'es-CL',0),(98,'A2','2',2,0,'es-CL',0),(98,'A1','1',1,0,'es-CL',0),(96,'A8','NA',8,0,'es-CL',0),(100,'A1','1',1,0,'es-CL',0),(98,'A8','NA',8,0,'es-CL',0),(94,'A1','1',1,0,'es-CL',0),(94,'A2','2',2,0,'es-CL',0),(94,'A3','3',3,0,'es-CL',0),(94,'A4','4',4,0,'es-CL',0),(94,'A5','5',5,0,'es-CL',0),(94,'A6','6',6,0,'es-CL',0),(94,'A7','7',7,0,'es-CL',0),(94,'A8','NA',8,0,'es-CL',0),(96,'A1','1',1,0,'es-CL',0),(96,'A2','2',2,0,'es-CL',0),(90,'A1','0',1,0,'es-CL',0),(90,'A2','1',2,0,'es-CL',0),(90,'A3','2',3,0,'es-CL',0),(90,'A4','3',4,0,'es-CL',0),(90,'A5','4',5,0,'es-CL',0),(90,'A6','5',6,0,'es-CL',0),(90,'A7','6',7,0,'es-CL',0),(90,'A8','7',8,0,'es-CL',0),(90,'A9','8',9,0,'es-CL',0),(90,'A10','9',10,0,'es-CL',0),(90,'A11','10',11,0,'es-CL',0),(90,'A12','No Aplica',12,0,'es-CL',0),(96,'A7','7',7,0,'es-CL',0),(96,'A6','6',6,0,'es-CL',0),(96,'A5','5',5,0,'es-CL',0),(96,'A4','4',4,0,'es-CL',0),(96,'A3','3',3,0,'es-CL',0),(58,'A1','ATENTO CHILE',1,0,'es-CL',0),(58,'A2','ATENTO PERU',2,0,'es-CL',0),(58,'A3','CSG',3,0,'es-CL',0),(58,'A4','DIGITEX',4,0,'es-CL',0),(58,'A5','ENTEL',5,0,'es-CL',0),(58,'A6','HOLDTECH',6,0,'es-CL',0),(58,'A7','SERCOM',7,0,'es-CL',0),(58,'A8','SPM',8,0,'es-CL',0),(58,'A9','SINERGO',9,0,'es-CL',0),(58,'A10','TELEPERFOMANCE',10,0,'es-CL',0),(58,'A11','VETEC',11,0,'es-CL',0),(58,'A12','EFICAZ',12,0,'es-CL',0),(59,'A3','NO APLICA',3,0,'es-CL',0),(59,'A2','NO',2,0,'es-CL',0),(59,'A1','SI',1,0,'es-CL',0),(60,'A1','SI',1,0,'es-CL',0),(60,'A2','NO',2,0,'es-CL',0),(60,'A3','NO APLICA',3,0,'es-CL',0),(61,'A1','SI',1,0,'es-CL',0),(61,'A2','NO',2,0,'es-CL',0),(61,'A3','NO APLICA',3,0,'es-CL',0),(63,'A1','SI',1,0,'es-CL',0),(63,'A2','NO',2,0,'es-CL',0),(63,'A3','NO APLICA',3,0,'es-CL',0),(64,'A1','SI',1,0,'es-CL',0),(64,'A2','NO',2,0,'es-CL',0),(64,'A3','NO APLICA',3,0,'es-CL',0),(62,'A1','SI',1,0,'es-CL',0),(62,'A2','NO',2,0,'es-CL',0),(62,'A3','NO APLICA',3,0,'es-CL',0),(65,'A1','SI',1,0,'es-CL',0),(65,'A2','NO',2,0,'es-CL',0),(65,'A3','NO APLICA',3,0,'es-CL',0),(66,'A1','SI',1,0,'es-CL',0),(66,'A2','NO',2,0,'es-CL',0),(66,'A3','NO APLICA',3,0,'es-CL',0),(67,'A1','SI',1,0,'es-CL',0),(67,'A2','NO',2,0,'es-CL',0),(67,'A3','NO APLICA',3,0,'es-CL',0),(69,'A1','SI',1,0,'es-CL',0),(69,'A2','NO',2,0,'es-CL',0),(69,'A3','NO APLICA',3,0,'es-CL',0),(70,'A1','SI',1,0,'es-CL',0),(70,'A2','NO',2,0,'es-CL',0),(70,'A3','NO APLICA',3,0,'es-CL',0),(71,'A1','SI',1,0,'es-CL',0),(71,'A2','NO',2,0,'es-CL',0),(71,'A3','NO APLICA',3,0,'es-CL',0),(72,'A1','SI',1,0,'es-CL',0),(72,'A2','NO',2,0,'es-CL',0),(72,'A3','NO APLICA',3,0,'es-CL',0),(73,'A1','SI',1,0,'es-CL',0),(73,'A2','NO',2,0,'es-CL',0),(73,'A3','NO APLICA',3,0,'es-CL',0),(74,'A1','SI',1,0,'es-CL',0),(74,'A2','NO',2,0,'es-CL',0),(74,'A3','NO APLICA',3,0,'es-CL',0),(75,'A1','SI',1,0,'es-CL',0),(75,'A2','NO',2,0,'es-CL',0),(75,'A3','NO APLICA',3,0,'es-CL',0),(76,'A1','SI',1,0,'es-CL',0),(76,'A2','NO',2,0,'es-CL',0),(76,'A3','NO APLICA',3,0,'es-CL',0),(77,'A1','SI',1,0,'es-CL',0),(77,'A2','NO',2,0,'es-CL',0),(77,'A3','NO APLICA',3,0,'es-CL',0),(78,'A1','SI',1,0,'es-CL',0),(78,'A2','NO',2,0,'es-CL',0),(78,'A3','NO APLICA',3,0,'es-CL',0),(79,'A1','SI',1,0,'es-CL',0),(79,'A2','NO',2,0,'es-CL',0),(79,'A3','NO APLICA',3,0,'es-CL',0),(80,'A1','SI',1,0,'es-CL',0),(80,'A2','NO',2,0,'es-CL',0),(80,'A3','NO APLICA',3,0,'es-CL',0),(81,'A1','SI',1,0,'es-CL',0),(81,'A2','NO',2,0,'es-CL',0),(81,'A3','NO APLICA',3,0,'es-CL',0),(82,'A1','SI',1,0,'es-CL',0),(82,'A2','NO',2,0,'es-CL',0),(82,'A3','NO APLICA',3,0,'es-CL',0),(83,'A1','SI',1,0,'es-CL',0),(83,'A2','NO',2,0,'es-CL',0),(83,'A3','NO APLICA',3,0,'es-CL',0),(84,'A1','SI',1,0,'es-CL',0),(84,'A2','NO',2,0,'es-CL',0),(84,'A3','NO APLICA',3,0,'es-CL',0),(85,'A1','SI',1,0,'es-CL',0),(85,'A2','NO',2,0,'es-CL',0),(85,'A3','NO APLICA',3,0,'es-CL',0),(68,'A1','SI',1,0,'es-CL',0),(68,'A2','NO',2,0,'es-CL',0),(68,'A3','NO APLICA',3,0,'es-CL',0),(100,'A3','3',3,0,'es-CL',0),(100,'A4','4',4,0,'es-CL',0),(100,'A5','5',5,0,'es-CL',0),(100,'A6','6',6,0,'es-CL',0),(100,'A7','7',7,0,'es-CL',0),(100,'A8','NA',8,0,'es-CL',0),(102,'A1','1',1,0,'es-CL',0),(102,'A2','2',2,0,'es-CL',0),(102,'A3','3',3,0,'es-CL',0),(102,'A4','4',4,0,'es-CL',0),(102,'A5','5',5,0,'es-CL',0),(102,'A6','6',6,0,'es-CL',0),(102,'A7','7',7,0,'es-CL',0),(102,'A8','NA',8,0,'es-CL',0),(115,'A1','SI',1,0,'es-CL',0),(115,'A2','NO',2,0,'es-CL',0),(115,'A3','NO APLICA',3,0,'es-CL',0),(116,'A1','SI',1,0,'es-CL',0),(116,'A2','NO',2,0,'es-CL',0),(116,'A3','NO APLICA',3,0,'es-CL',0),(117,'A1','SI',1,0,'es-CL',0),(117,'A2','NO',2,0,'es-CL',0),(117,'A3','NO APLICA',3,0,'es-CL',0),(118,'A1','SI',1,0,'es-CL',0),(118,'A2','NO',2,0,'es-CL',0),(118,'A3','NO APLICA',3,0,'es-CL',0),(131,'A2','NO',2,0,'es-CL',0),(131,'A1','SI',1,0,'es-CL',0),(120,'A1','SI',1,0,'es-CL',0),(120,'A2','NO',2,0,'es-CL',0),(120,'A3','NO APLICA',3,0,'es-CL',0),(121,'A1','SI',1,0,'es-CL',0),(121,'A2','NO',2,0,'es-CL',0),(121,'A3','NO APLICA',3,0,'es-CL',0),(122,'A1','SI',1,0,'es-CL',0),(122,'A2','NO',2,0,'es-CL',0),(122,'A3','NO APLICA',3,0,'es-CL',0),(123,'A1','SI',1,0,'es-CL',0),(123,'A2','NO',2,0,'es-CL',0),(123,'A3','NO APLICA',3,0,'es-CL',0),(129,'A3','NO APLICA',3,0,'es-CL',0),(129,'A2','NO',2,0,'es-CL',0),(129,'A1','SI',1,0,'es-CL',0),(125,'A1','RM',1,0,'es-CL',0),(125,'A2','REGIONES',2,0,'es-CL',0),(126,'A1','SI',1,0,'es-CL',0),(126,'A2','NO',2,0,'es-CL',0),(126,'A3','NO APLICA',3,0,'es-CL',0),(127,'A1','SI',1,0,'es-CL',0),(127,'A2','NO',2,0,'es-CL',0),(127,'A3','NO APLICA',3,0,'es-CL',0),(128,'A1','SI',1,0,'es-CL',0),(128,'A2','NO',2,0,'es-CL',0),(128,'A3','NO APLICA',3,0,'es-CL',0),(130,'A1','SI',1,0,'es-CL',0),(130,'A2','NO',2,0,'es-CL',0),(130,'A3','NO APLICA',3,0,'es-CL',0),(132,'A1','SI',1,0,'es-CL',0),(132,'A2','NO',2,0,'es-CL',0),(132,'A3','NO APLICA',3,0,'es-CL',0),(133,'A1','SI',1,0,'es-CL',0),(133,'A2','NO',2,0,'es-CL',0),(133,'A3','NO APLICA',3,0,'es-CL',0),(134,'A1','SI',1,0,'es-CL',0),(134,'A2','NO',2,0,'es-CL',0),(134,'A3','NO APLICA',3,0,'es-CL',0),(135,'A1','SI',1,0,'es-CL',0),(135,'A2','NO',2,0,'es-CL',0),(135,'A3','NO APLICA',3,0,'es-CL',0),(136,'A1','SI',1,0,'es-CL',0),(136,'A2','NO',2,0,'es-CL',0),(136,'A3','NO APLICA',3,0,'es-CL',0),(137,'A1','SI',1,0,'es-CL',0),(137,'A2','NO',2,0,'es-CL',0),(137,'A3','NO APLICA',3,0,'es-CL',0),(138,'A1','SI',1,0,'es-CL',0),(138,'A2','NO',2,0,'es-CL',0),(138,'A3','NO APLICA',3,0,'es-CL',0),(139,'A1','SI',1,0,'es-CL',0),(139,'A2','NO',2,0,'es-CL',0),(139,'A3','NO APLICA',3,0,'es-CL',0),(140,'A1','SI',1,0,'es-CL',0),(140,'A2','NO',2,0,'es-CL',0),(140,'A3','NO APLICA',3,0,'es-CL',0),(141,'A1','SI',1,0,'es-CL',0),(141,'A2','NO',2,0,'es-CL',0),(141,'A3','NO APLICA',3,0,'es-CL',0),(142,'A1','SI',1,0,'es-CL',0),(142,'A2','NO',2,0,'es-CL',0),(142,'A3','NO APLICA',3,0,'es-CL',0),(144,'A1','No está de acuerdo con la GCARD',1,0,'es-CL',0),(144,'A2','La información entregada fue otra (en puntos o por telefono)',2,0,'es-CL',0),(144,'A3','El plazo de pago por cheque o transferencuias',3,0,'es-CL',0),(131,'A3','NO APLICA',3,0,'es-CL',0),(146,'A1','',0,0,'es-CL',0);
/*!40000 ALTER TABLE `lime_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_assessments`
--

DROP TABLE IF EXISTS `lime_assessments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_assessments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL DEFAULT '0',
  `scope` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gid` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `maximum` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`,`language`),
  KEY `assessments_idx2` (`sid`),
  KEY `assessments_idx3` (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_assessments`
--

LOCK TABLES `lime_assessments` WRITE;
/*!40000 ALTER TABLE `lime_assessments` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_assessments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_auditlog_log`
--

DROP TABLE IF EXISTS `lime_auditlog_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_auditlog_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entityid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci,
  `oldvalues` text COLLATE utf8mb4_unicode_ci,
  `newvalues` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=242 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_auditlog_log`
--

LOCK TABLES `lime_auditlog_log` WRITE;
/*!40000 ALTER TABLE `lime_auditlog_log` DISABLE KEYS */;
INSERT INTO `lime_auditlog_log` VALUES (1,'2017-11-28 11:04:44','1','permission','618961','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(2,'2017-11-28 11:04:58','1','survey','618961','update','googleanalyticsstyle','{\"googleanalyticsstyle\":null}','{\"googleanalyticsstyle\":\"0\"}'),(3,'2017-11-28 11:09:44','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Calidad\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":1,\"email\":\"sgaldamesh@gmail.com\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(4,'2017-11-28 11:10:59','1','user','2','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"2\",\"users_name\":\"Calidad\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":\"1\",\"email\":\"sgaldamesh@gmail.com\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:09:44\",\"modified\":null,\"lang\":\"auto\"}',NULL),(5,'2017-11-28 11:13:06','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Calidad\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":1,\"email\":\"calidad@rhyta.com\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(6,'2017-11-28 11:14:05','1','user','3','update','email,modified','{\"email\":\"calidad@rhyta.com\",\"modified\":null}','{\"email\":\"calidad@cuvox.de\",\"modified\":{\"expression\":\"NOW()\",\"params\":[]}}'),(7,'2017-11-28 11:14:12','1','user','3','update','modified','{\"modified\":\"2017-11-28 11:14:05\"}','{\"modified\":{\"expression\":\"NOW()\",\"params\":[]}}'),(8,'2017-11-28 11:14:54','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Editor\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Editor de calidad\",\"parent_id\":1,\"email\":\"editor@cuvox.de\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(9,'2017-11-28 11:16:36','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Segundo\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Calidad\",\"parent_id\":1,\"email\":\"sgaldamesh@gmail.com\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(10,'2017-11-28 11:19:18','1','user','5','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"5\",\"users_name\":\"Segundo\",\"full_name\":\"Calidad\",\"parent_id\":\"1\",\"email\":\"sgaldamesh@gmail.com\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:16:36\",\"modified\":null,\"lang\":\"auto\"}',NULL),(11,'2017-11-28 11:19:24','1','user','4','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"4\",\"users_name\":\"Editor\",\"full_name\":\"Editor de calidad\",\"parent_id\":\"1\",\"email\":\"editor@cuvox.de\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:14:54\",\"modified\":null,\"lang\":\"auto\"}',NULL),(12,'2017-11-28 11:19:29','1','user','3','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"3\",\"users_name\":\"Calidad\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":\"1\",\"email\":\"calidad@cuvox.de\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:13:06\",\"modified\":\"2017-11-28 11:14:12\",\"lang\":\"auto\"}',NULL),(13,'2017-11-28 11:19:57','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Calidad\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":1,\"email\":\"calidad@cuvox.de\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(14,'2017-11-28 11:21:30','1','user','6','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"6\",\"users_name\":\"Calidad\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":\"1\",\"email\":\"calidad@cuvox.de\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:19:57\",\"modified\":null,\"lang\":\"auto\"}',NULL),(15,'2017-11-28 11:21:43','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Calidad\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":1,\"email\":\"calidad@cuvox.de\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(16,'2017-11-28 11:32:03','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Editor\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuarios editores\",\"parent_id\":1,\"email\":\"editor@cuvox.de\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(17,'2017-11-28 11:39:36','1','permission','618961','update','statistics','{\"surveyactivation\":{\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"statistics\":{\"read\":true}}'),(18,'2017-11-28 11:47:51','1','user','8','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"8\",\"users_name\":\"Editor\",\"full_name\":\"Usuarios editores\",\"parent_id\":\"1\",\"email\":\"editor@cuvox.de\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:32:03\",\"modified\":null,\"lang\":\"auto\"}',NULL),(19,'2017-11-28 11:47:55','1','user','7','delete','uid,users_name,full_name,parent_id,email,htmleditormode,templateeditormode,questionselectormode,one_time_pw,dateformat,created,modified,lang','{\"uid\":\"7\",\"users_name\":\"Calidad\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":\"1\",\"email\":\"calidad@cuvox.de\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"one_time_pw\":null,\"dateformat\":\"1\",\"created\":\"2017-11-28 11:21:43\",\"modified\":null,\"lang\":\"auto\"}',NULL),(20,'2017-11-28 11:48:14','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"Calidad\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuarios de calidad\",\"parent_id\":1,\"email\":\"calidad@cuvox.de\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(21,'2017-11-28 11:49:38','9','user','9','afterSuccessfulLogin',NULL,NULL,NULL),(22,'2017-11-28 11:51:22','1','permission','618961','update','statistics','{\"surveyactivation\":{\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"statistics\":{\"read\":true}}'),(23,'2017-11-28 11:51:22','1','permission','618961','update','statistics','{\"surveyactivation\":{\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"statistics\":{\"read\":true}}'),(24,'2017-11-28 11:51:44','9','user','9','afterSuccessfulLogin',NULL,NULL,NULL),(25,'2017-11-28 13:29:29','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(26,'2017-11-28 16:19:00','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(27,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"1JpDucEvDaoGN6F\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(28,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"tvszYSLTrljvpDw\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(29,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"ibS9QLaJcjhKwoF\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(30,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"PeYC1VFqFneiCLm\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(31,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"HTQ4acn4n7QV31N\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(32,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"Si6Diamu0BFuypz\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(33,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"ztAzYSZEU87P514\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(34,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"i1uuzzPAuBW94UA\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(35,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"IvykkQZklH9yXcv\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(36,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"E2sPqJAatXLVkaT\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(37,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"14Ilu9YQlmkYmp8\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(38,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"ElwsG0nNUk0xeLY\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(39,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"R057KRpQ0C5XJRZ\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(40,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"h8yn0pj0A9e3b3J\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(41,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"UDo3VeftziBafs5\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(42,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"di4GqbBssKzIbNs\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(43,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"4GeJjlCN0BspAjl\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(44,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"NBR3gUpeemjBIuh\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(45,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"TRCKuxaeqdZt4m8\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(46,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"rYZ5ztJzC0aQB4W\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(47,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"0JHazCYKVHhaFGu\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(48,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"RJOODXW6Q0OKQjJ\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(49,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"97gQ4zo3qaaEfxz\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(50,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"LrRH34Mu9S0sJfC\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(51,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"qp0guKQ5VGNni8Q\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(52,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"aq2DjfKQO0z7n0J\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(53,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"DsRmcNJBvs8aqap\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(54,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"QPHz3rSiKjONCgZ\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(55,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"MYHPiGM67Xe8GKm\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(56,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"NYYerzaaPlz71Xz\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(57,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"l6eZDuSApZnCaaz\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(58,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"6OobsCJHn8Hnoey\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(59,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"71uXTaywgizEHFS\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(60,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"9RV46GcVnPwdpUC\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(61,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"1QNJ911cE3CHymy\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(62,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"GHNW1XRgPNXaVRD\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(63,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"JFQha2WNzrG18Ib\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(64,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"tUZE3f4wFRIVUR1\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(65,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"Bne3xRLEGcMzPvv\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(66,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"pxz43Swjl26I7EH\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(67,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"mdzOrK4sppszXV9\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(68,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"JkmuXnX0nQjLxPj\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(69,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"Xv6MKcOFJaojzlb\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(70,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"aPHLZfHny3zClvR\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(71,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"MTY6HqZIpqQc00h\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(72,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"2INFd3U10sYmg8a\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(73,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"0Hu0HHqK7pWpA82\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(74,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"zvzGDdG7N4SD6TK\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(75,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"uAXRHXDxiwzgZrD\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(76,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"L97ToUWtzJzHNN5\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(77,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"hBUCN6zQ8KcokLq\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(78,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"YWybvHevTa6rYWT\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(79,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"qpGyaQERzqVHeBI\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(80,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"dLpSwxNYUHYoWBp\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(81,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"KczxL5S7t1aLjrs\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(82,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"czmTghO91JpDQtl\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(83,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"WINgT3wLr4NvOrD\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(84,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"AYetxE7NklhIctb\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(85,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"hLITg8zZSMWFg7I\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(86,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"JbEoNfZ6xFQBSPp\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(87,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"oGZM0EcXaymucxG\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(88,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"EvQcb6MPdOSlEBn\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(89,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"fYrSa58rRJzTtXn\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(90,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"zlbqaujERWh3zxm\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(91,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"TBJ1IvILX7e4CHu\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(92,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"40bd8t2NTu0Hn5z\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(93,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"f0aFrp1csE0zlCx\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(94,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"qsDYcvMdDDpj8eb\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(95,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"ndwJvoNmKyJ89ux\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(96,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"DstAEB10zAfIC81\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(97,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"ETu7z62PqwZ6g2M\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(98,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"K0iLzGpszquvKQd\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(99,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"yMq8zzdkisO9cBA\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(100,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"NawxHdGpZqmz55n\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(101,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"HtezFAYlh5fk8EC\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(102,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"iItB0gezrijMOs0\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(103,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"h9IarurZzSb7aXr\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(104,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"xyOprMkNI9lUeYv\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(105,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"IWMMrStlPzWMpYL\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(106,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"eiwHhPYpzxnj11i\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(107,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"ywPLT9Bt2mYluYh\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(108,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"Qwdjmc57b03N1Hi\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(109,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"Q34agI23Iwu1TLC\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(110,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"BsDZge1xYQ6wDEZ\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(111,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"KDE9PbodS7uAyrQ\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(112,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"1LybBaxWh6CZAfA\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(113,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"NpaoAr6feM7ZbZ1\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(114,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"7z3bUW6wuvLhO29\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(115,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"He1Ig1m2s3jz8ii\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(116,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"0IooR1JKDiYblei\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(117,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"JBgypOvznMisYSn\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(118,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"q8D6dPuhIyemeyF\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(119,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"iDdTPE78iRNROJg\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(120,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"TzQRKbDd7Rj4BCK\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(121,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"am6HyBMLmODftNz\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(122,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"eubm2jGdeRjDWZk\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(123,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"RTP97SHdlK2KonT\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(124,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"GX4z6XLz51NFF1z\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(125,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"CQzPzLqmCZp960J\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(126,'2017-11-28 17:03:34','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,token,language,validfrom,validuntil,tid,participant_id,emailstatus,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"\",\"lastname\":\"\",\"email\":\"\",\"token\":\"FF4Upk56C2aCe8v\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"emailstatus\":null,\"blacklisted\":null,\"mpid\":null}'),(127,'2017-11-28 17:06:48','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"Segundo\",\"lastname\":\"Galdames\",\"email\":\"sgaldamesh@gmail.com\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(128,'2017-11-29 10:16:30','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(129,'2017-11-29 11:04:33','1','survey','618961','update','startdate,listpublic,usecaptcha,alloweditaftercompletion','{\"startdate\":null,\"listpublic\":\"N\",\"usecaptcha\":\"N\",\"alloweditaftercompletion\":\"N\"}','{\"startdate\":\"2017-11-29 00:00:00\",\"listpublic\":\"Y\",\"usecaptcha\":\"X\",\"alloweditaftercompletion\":\"Y\"}'),(130,'2017-11-29 11:05:23','1','survey','618961','update','usecaptcha','{\"usecaptcha\":\"X\"}','{\"usecaptcha\":\"N\"}'),(131,'2017-11-29 11:06:10','1','survey','618961','update','allowregister','{\"allowregister\":\"N\"}','{\"allowregister\":\"Y\"}'),(132,'2017-11-29 11:06:46','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,language,validfrom,token,tid,participant_id,blacklisted,validuntil,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":1,\"firstname\":\"Segundo \",\"lastname\":\"Galdames\",\"email\":\"sgaldamesh@gmail.com\",\"emailstatus\":\"OK\",\"language\":\"es-CL\",\"validfrom\":\"2017-11-29 00:00:00\",\"token\":\"bYIxOEvhu6zP1AS\",\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"validuntil\":null,\"mpid\":null}'),(133,'2017-11-29 11:06:47','1','token_618961','1','update','sent','{\"sent\":\"N\"}','{\"sent\":\"2017-11-29 10:06\"}'),(134,'2017-11-29 11:08:59','1','token_618961','1','update','completed,usesleft','{\"completed\":\"N\",\"usesleft\":\"1\"}','{\"completed\":\"2017-11-29 10:08\",\"usesleft\":0}'),(135,'2017-11-29 11:10:33','1','token_618961','1','update','completed,usesleft','{\"completed\":\"2017-11-29 10:08\",\"usesleft\":\"0\"}','{\"completed\":\"2017-11-29 10:10\",\"usesleft\":-1}'),(136,'2017-11-29 11:19:24','1','token_618961','1','update','completed,usesleft','{\"completed\":\"2017-11-29 10:10\",\"usesleft\":\"-1\"}','{\"completed\":\"2017-11-29 10:19\",\"usesleft\":-2}'),(137,'2017-11-29 11:27:45','1','permission','618961','update','surveyactivation,surveycontent,statistics','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":true,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"statistics\":{\"read\":false}}'),(138,'2017-11-29 11:32:53','1','survey','618961','update','expires','{\"expires\":\"2017-11-29 10:25:35\"}','{\"expires\":\"2017-11-30 10:25:00\"}'),(139,'2017-11-29 11:37:51','1','token_618961',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"5\",\"firstname\":\"Segundo\",\"lastname\":\"Galdames\",\"email\":\"sgaldamesh@gmail.com\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(140,'2017-11-29 11:39:13','1','token_618961','1','update','sent','{\"sent\":\"N\"}','{\"sent\":\"2017-11-29 10:39\"}'),(141,'2017-11-29 11:41:05','1','token_618961','1','update','usesleft','{\"usesleft\":\"5\"}','{\"usesleft\":4}'),(142,'2017-11-29 11:43:20','1','token_618961','1','update','usesleft','{\"usesleft\":\"4\"}','{\"usesleft\":3}'),(143,'2017-11-29 11:45:34','1','token_618961','1','update','usesleft','{\"usesleft\":\"3\"}','{\"usesleft\":2}'),(144,'2017-11-29 12:45:44','1','survey','618961','update','allowregister,listpublic','{\"allowregister\":\"Y\",\"listpublic\":\"Y\"}','{\"allowregister\":\"N\",\"listpublic\":\"N\"}'),(145,'2017-11-29 12:49:29','1','token_618961','1','update','usesleft','{\"usesleft\":\"2\"}','{\"usesleft\":1}'),(146,'2017-11-29 12:50:37','1','token_618961','1','update','completed,usesleft','{\"completed\":\"N\",\"usesleft\":\"1\"}','{\"completed\":\"2017-11-29 11:50\",\"usesleft\":0}'),(147,'2017-11-29 12:52:06','1','token_618961','1','update','completed,usesleft','{\"completed\":\"2017-11-29 11:50\",\"usesleft\":\"0\"}','{\"completed\":\"2017-11-29 11:52\",\"usesleft\":-1}'),(148,'2017-11-29 12:54:36','1','token_618961','1','update','validfrom,validuntil','{\"validfrom\":null,\"validuntil\":null}','{\"validfrom\":\"2017-11-29 00:00:00\",\"validuntil\":\"2017-11-29 12:50:00\"}'),(149,'2017-11-29 12:55:16','1','token_618961','1','update','completed,usesleft','{\"completed\":\"2017-11-29 11:52\",\"usesleft\":\"-1\"}','{\"completed\":\"2017-11-29 11:55\",\"usesleft\":-2}'),(150,'2017-11-29 13:03:23',NULL,'user',NULL,'afterFailedLoginAttempt',NULL,NULL,'{\"username\":\"admin\"}'),(151,'2017-11-29 13:03:37',NULL,'user',NULL,'afterFailedLoginAttempt',NULL,NULL,'{\"username\":\"admin\"}'),(152,'2017-11-29 13:03:48',NULL,'user',NULL,'afterFailedLoginAttempt',NULL,NULL,'{\"username\":\"admin\"}'),(153,'2017-11-29 13:04:46','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(154,'2017-11-29 13:07:10',NULL,'token_618961','1','update','completed,usesleft','{\"completed\":\"2017-11-29 11:55\",\"usesleft\":\"-2\"}','{\"completed\":\"2017-11-29 12:07\",\"usesleft\":-3}'),(155,'2017-11-29 14:45:13','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(156,'2017-11-29 14:46:00','1','user',NULL,'create','users_name,htmleditormode,templateeditormode,questionselectormode,dateformat,password,full_name,parent_id,email,created,uid,lang,one_time_pw,modified','[]','{\"users_name\":\"demo\",\"htmleditormode\":\"default\",\"templateeditormode\":\"default\",\"questionselectormode\":\"default\",\"dateformat\":1,\"password\":\"*MASKED*PASSWORD*\",\"full_name\":\"Usuario Super\",\"parent_id\":1,\"email\":\"sgaldames@metasolutions.cl\",\"created\":{\"expression\":\"NOW()\",\"params\":[]},\"uid\":null,\"lang\":\"auto\",\"one_time_pw\":null,\"modified\":null}'),(157,'2017-11-29 14:46:43','1','permission','0','update','participantpanel,labelsets,surveys,usergroups,settings,templates,users,superadmin,auth_db,auth_ldap,auth_webserver','{\"surveyactivation\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"participantpanel\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"labelsets\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveys\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":false,\"export\":true},\"usergroups\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":false,\"export\":false},\"settings\":{\"create\":false,\"read\":true,\"update\":true,\"delete\":false,\"import\":true,\"export\":false},\"templates\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"users\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":false,\"export\":false},\"superadmin\":{\"create\":true,\"read\":true,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_db\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_ldap\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_webserver\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false}}'),(158,'2017-11-29 14:48:12','10','user','10','afterSuccessfulLogin',NULL,NULL,NULL),(159,'2017-11-29 14:50:25','1','permission','0','update','participantpanel,labelsets,surveys,usergroups,settings,templates,users,superadmin,auth_db,auth_ldap,auth_webserver','{\"surveyactivation\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"participantpanel\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":true,\"export\":true},\"labelsets\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":true,\"export\":true},\"surveys\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":false,\"export\":true},\"usergroups\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":false,\"export\":false},\"settings\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"templates\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"users\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"superadmin\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_db\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_ldap\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_webserver\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false}}'),(160,'2017-11-29 14:51:12','10','user','10','update','modified,lang','{\"modified\":null,\"lang\":\"auto\"}','{\"modified\":{\"expression\":\"NOW()\",\"params\":[]},\"lang\":\"es-CL\"}'),(161,'2017-11-29 14:52:01','1','permission','0','update','participantpanel,labelsets,surveys,usergroups,settings,templates,users,superadmin,auth_db,auth_ldap,auth_webserver','{\"surveyactivation\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"participantpanel\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":true,\"export\":true},\"labelsets\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":true,\"export\":true},\"surveys\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":false,\"import\":false,\"export\":true},\"usergroups\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"settings\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"templates\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"users\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"superadmin\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_db\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_ldap\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false},\"auth_webserver\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false}}'),(162,'2017-11-29 14:59:33','1','permission','998811','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(163,'2017-11-29 15:11:19','1','survey','495246','update','template','{\"template\":\"news_paper\"}','{\"template\":\"ubuntu_orange\"}'),(164,'2017-11-29 15:11:56','1','survey','998811','update','template,googleanalyticsstyle','{\"template\":\"default\",\"googleanalyticsstyle\":null}','{\"template\":\"news_paper\",\"googleanalyticsstyle\":\"0\"}'),(165,'2017-11-29 15:16:54','1','survey','998811','update','template','{\"template\":\"news_paper\"}','{\"template\":\"ubuntu_orange\"}'),(166,'2017-11-29 16:20:25','1','token_998811',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"100\",\"firstname\":\"Segundo\",\"lastname\":\"Galdames\",\"email\":\"sgaldamesh@gmail.com\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(167,'2017-11-29 16:28:28','1','token_998811',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"100\",\"firstname\":\"Segundo\",\"lastname\":\"Galdames\",\"email\":\"sgaldamesh@gmail.com\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(168,'2017-11-29 16:29:32','1','token_998811','1','update','sent','{\"sent\":\"N\"}','{\"sent\":\"2017-11-29 15:29\"}'),(169,'2017-11-29 16:45:33','1','user','1','beforeLogout',NULL,NULL,NULL),(170,'2017-11-29 16:51:11','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(171,'2017-11-30 12:03:40','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(172,'2017-11-30 12:03:54','1','user','1','beforeLogout',NULL,NULL,NULL),(173,'2017-11-30 12:07:54','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(174,'2017-11-30 15:09:31','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(175,'2017-11-30 15:11:25','1','user','1','beforeLogout',NULL,NULL,NULL),(176,'2017-11-30 15:12:03','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(177,'2017-11-30 15:12:16','1','user','1','beforeLogout',NULL,NULL,NULL),(178,'2017-11-30 16:22:44','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(179,'2017-11-30 16:23:59','1','survey','998811','update','expires','{\"expires\":\"2017-11-30 00:00:00\"}','{\"expires\":\"2017-12-01 00:00:00\"}'),(180,'2017-11-30 16:28:35','1','user','1','beforeLogout',NULL,NULL,NULL),(181,'2017-12-04 12:28:04','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(182,'2017-12-05 10:52:50','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(183,'2017-12-05 10:53:27','1','user','1','beforeLogout',NULL,NULL,NULL),(184,'2017-12-05 13:09:22','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(185,'2017-12-05 13:14:34','1','survey','998811','update','expires','{\"expires\":\"2017-12-01 00:00:00\"}','{\"expires\":\"2017-12-06 00:00:00\"}'),(186,'2017-12-05 13:15:13','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(187,'2017-12-05 13:17:58','1','token_998811',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"1\",\"firstname\":\"Segundo\",\"lastname\":\"Galdames\",\"email\":\"sgaldames@metasolutions.cl\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(188,'2017-12-05 13:20:20','1','survey','998811','update','format','{\"format\":\"G\"}','{\"format\":\"S\"}'),(189,'2017-12-05 13:21:17','1','survey','998811','update','format','{\"format\":\"S\"}','{\"format\":\"G\"}'),(190,'2017-12-05 13:27:14','1','permission','956849','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(191,'2017-12-05 14:17:33','1','survey','956849','update','googleanalyticsstyle','{\"googleanalyticsstyle\":null}','{\"googleanalyticsstyle\":\"0\"}'),(192,'2017-12-05 15:27:29','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(193,'2017-12-06 17:49:17','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(194,'2017-12-06 17:53:35','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(195,'2017-12-12 12:37:07','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(196,'2017-12-12 12:47:27','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(197,'2017-12-19 10:19:42','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(198,'2018-01-30 11:45:52',NULL,'user',NULL,'afterFailedLoginAttempt',NULL,NULL,'{\"username\":\"admin\"}'),(199,'2018-01-30 11:46:02','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(200,'2018-01-30 11:55:19','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(201,'2018-01-30 11:55:58','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(202,'2018-01-30 11:56:07','1','user','1','beforeLogout',NULL,NULL,NULL),(203,'2018-02-05 08:37:55','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(204,'2018-02-05 09:42:10','1','permission','264315','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(205,'2018-02-05 09:42:50','1','survey','264315','update','googleanalyticsstyle,format','{\"googleanalyticsstyle\":null,\"format\":\"G\"}','{\"googleanalyticsstyle\":\"0\",\"format\":\"S\"}'),(206,'2018-02-05 09:45:29','1','survey','264315','update','ipaddr,refurl,alloweditaftercompletion','{\"ipaddr\":\"N\",\"refurl\":\"N\",\"alloweditaftercompletion\":\"N\"}','{\"ipaddr\":\"Y\",\"refurl\":\"Y\",\"alloweditaftercompletion\":\"Y\"}'),(207,'2018-02-05 09:50:27','1','token_264315',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"20\",\"firstname\":\"Segundo Galdames\",\"lastname\":\"\",\"email\":\"sgaldameh@gmail.com\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(208,'2018-02-05 09:51:53','1','token_264315','1','update','sent','{\"sent\":\"N\"}','{\"sent\":\"2018-02-05 08:51\"}'),(209,'2018-02-05 10:05:22','1','token_264315','1','update','email','{\"email\":\"sgaldameh@gmail.com\"}','{\"email\":\"sgaldamesh@gmail.com\"}'),(210,'2018-02-05 10:05:47','1','token_264315','1','update','remindersent,remindercount','{\"remindersent\":\"N\",\"remindercount\":\"0\"}','{\"remindersent\":\"2018-02-05 09:05\",\"remindercount\":1}'),(211,'2018-02-05 10:07:00','1','token_264315','1','update','usesleft','{\"usesleft\":\"20\"}','{\"usesleft\":19}'),(212,'2018-02-06 12:56:38','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(213,'2018-02-07 10:36:27','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(214,'2018-02-07 10:37:04','1','survey','998811','update','expires','{\"expires\":\"2017-12-06 00:00:00\"}','{\"expires\":\"2018-02-14 00:00:00\"}'),(215,'2018-02-07 10:37:50','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(216,'2018-02-07 10:46:10','1','token_998811','2','update','completed,usesleft','{\"completed\":\"N\",\"usesleft\":\"1\"}','{\"completed\":\"2018-02-07 09:46\",\"usesleft\":0}'),(217,'2018-02-07 12:33:44','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(218,'2018-02-07 12:38:22','1','survey','998811','update','datestamp,ipaddr','{\"datestamp\":\"N\",\"ipaddr\":\"N\"}','{\"datestamp\":\"Y\",\"ipaddr\":\"Y\"}'),(219,'2018-02-07 12:51:09','1','token_998811',NULL,'create','sent,remindersent,remindercount,completed,usesleft,firstname,lastname,email,emailstatus,token,language,validfrom,validuntil,tid,participant_id,blacklisted,mpid','[]','{\"sent\":\"N\",\"remindersent\":\"N\",\"remindercount\":0,\"completed\":\"N\",\"usesleft\":\"100\",\"firstname\":\"Segundo\",\"lastname\":\"Galdames\",\"email\":\"sgaldameh@gmail.com\",\"emailstatus\":\"OK\",\"token\":\"\",\"language\":\"es-CL\",\"validfrom\":null,\"validuntil\":null,\"tid\":null,\"participant_id\":null,\"blacklisted\":null,\"mpid\":null}'),(220,'2018-02-07 12:53:52','1','token_998811','1','update','usesleft','{\"usesleft\":\"100\"}','{\"usesleft\":99}'),(221,'2018-02-07 16:47:03','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(222,'2018-02-07 16:48:59','1','permission','569183','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(223,'2018-02-07 17:32:34','1','survey','569183','update','template,googleanalyticsstyle','{\"template\":\"default\",\"googleanalyticsstyle\":null}','{\"template\":\"ubuntu_orange\",\"googleanalyticsstyle\":\"0\"}'),(224,'2018-02-07 17:40:51','1','survey','569183','update','showgroupinfo','{\"showgroupinfo\":\"B\"}','{\"showgroupinfo\":\"N\"}'),(225,'2018-02-07 18:06:29','1','user','1','beforeLogout',NULL,NULL,NULL),(226,'2018-02-08 09:20:56','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(227,'2018-02-08 10:09:59','1','permission','318492','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(228,'2018-02-08 11:37:00','1','survey','318492','update','googleanalyticsstyle','{\"googleanalyticsstyle\":null}','{\"googleanalyticsstyle\":\"0\"}'),(229,'2018-02-08 11:38:07','1','survey','318492','update','template','{\"template\":\"default\"}','{\"template\":\"news_paper\"}'),(230,'2018-02-08 11:41:14','1','survey','318492','update','template','{\"template\":\"news_paper\"}','{\"template\":\"ubuntu_orange\"}'),(231,'2018-02-08 11:41:59','1','survey','318492','update','showqnumcode','{\"showqnumcode\":\"N\"}','{\"showqnumcode\":\"X\"}'),(232,'2018-02-08 17:52:55','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(233,'2018-02-08 17:56:11','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(234,'2018-02-08 17:59:11','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(235,'2018-02-13 09:20:43','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(236,'2018-02-13 09:35:49','1','permission','764876','update','surveyactivation,surveycontent,quotas,surveylocale,survey,statistics,assessments,surveysettings,tokens,responses,surveysecurity,translations','{\"surveyactivation\":{\"update\":false,\"title\":\"Activaci\\u00f3n de encuesta\",\"description\":\"Permiso para activar\\/desactivar una encuesta\",\"img\":\"activate_deactivate\"},\"surveycontent\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Contenido de la encuesta\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar\\/importar\\/exportar las preguntas, grupos, respuestas y condiciones para una encuesta.\",\"img\":\"add\"},\"quotas\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Cuotas\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de citaci\\u00f3n para una encuesta\",\"img\":\"quota\"},\"surveylocale\":{\"read\":false,\"update\":false,\"title\":\"Elementos de texto de la encuesta\",\"description\":\"Permission to view\\/update the survey text elements : survey title, survey description, welcome and end message \\u2026\",\"img\":\"edit\"},\"survey\":{\"read\":false,\"delete\":false,\"title\":\"Eliminaci\\u00f3n de encuesta\",\"description\":\"Permiso para eliminar una encuesta\",\"img\":\"delete\"},\"statistics\":{\"read\":false,\"title\":\"Estad\\u00edsticas\",\"description\":\"Permiso para ver estadisticas\",\"img\":\"statistics\"},\"assessments\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Evaluaciones\",\"description\":\"Permisos para crear\\/ver\\/actualizar\\/borrar reglas de valoraci\\u00f3n para una encuesta\",\"img\":\"assessments\"},\"surveysettings\":{\"read\":false,\"update\":false,\"title\":\"Opciones de la encuesta\",\"description\":\"Permisos para ver\\/actualizar la configuraci\\u00f3n de la encuesta incluyendo la creaci\\u00f3n de la tabla de prueba\",\"img\":\"survey_settings\"},\"tokens\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Participantes\",\"description\":\"Permisos para crear\\/actualizar\\/borrar\\/importar\\/exportar entradas de prueba\",\"img\":\"tokens\"},\"responses\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"import\":false,\"export\":false,\"title\":\"Respuestas\",\"description\":\"Permisos para crear(ingreso de datos)\\/ver\\/actualizar\\/borrar\\/importar\\/exportar respuestas\",\"img\":\"browse\"},\"surveysecurity\":{\"create\":false,\"read\":false,\"update\":false,\"delete\":false,\"title\":\"Seguridad de la encuesta\",\"description\":\"Permiso para modificar las opciones de seguridad de la encuesta\",\"img\":\"survey_security\"},\"translations\":{\"read\":false,\"update\":false,\"title\":\"Traducci\\u00f3n r\\u00e1pida\",\"description\":\"Permisos para ver y actualizar las traducciones usando la herramienta de traducci\\u00f3n r\\u00e1pida\",\"img\":\"translate\"}}','{\"surveyactivation\":{\"update\":true},\"surveycontent\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"quotas\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveylocale\":{\"read\":true,\"update\":true},\"survey\":{\"read\":true,\"delete\":true},\"statistics\":{\"read\":true},\"assessments\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"surveysettings\":{\"read\":true,\"update\":true},\"tokens\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"responses\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true,\"import\":true,\"export\":true},\"surveysecurity\":{\"create\":true,\"read\":true,\"update\":true,\"delete\":true},\"translations\":{\"read\":true,\"update\":true}}'),(237,'2018-02-20 08:50:07','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(238,'2018-02-20 09:29:21','1','survey','764876','update','googleanalyticsstyle','{\"googleanalyticsstyle\":null}','{\"googleanalyticsstyle\":\"0\"}'),(239,'2018-02-20 09:50:48','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(240,'2018-02-20 11:13:08','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL),(241,'2018-02-26 16:49:21','1','user','1','afterSuccessfulLogin',NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_auditlog_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_boxes`
--

DROP TABLE IF EXISTS `lime_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_boxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT NULL COMMENT 'position of the box',
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL the box points',
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Box title',
  `ico` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'the ico name in font',
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Box description',
  `page` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Page name where the box should be shown ',
  `usergroup` int(11) NOT NULL COMMENT 'Those boxes will be shown for that user group',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_boxes`
--

LOCK TABLES `lime_boxes` WRITE;
/*!40000 ALTER TABLE `lime_boxes` DISABLE KEYS */;
INSERT INTO `lime_boxes` VALUES (1,1,'admin/survey/sa/newsurvey','Create survey','add','Create a new survey','welcome',-2),(2,2,'admin/survey/sa/listsurveys','List surveys','list','List available surveys','welcome',-1),(3,3,'admin/globalsettings','Global settings','settings','Edit global settings','welcome',-2),(4,4,'admin/update','ComfortUpdate','shield','Stay safe and up to date','welcome',-2),(5,5,'admin/labels/sa/view','Label sets','label','Edit label sets','welcome',-2),(6,6,'admin/templates/sa/view','Template editor','templates','Edit LimeSurvey templates','welcome',-2);
/*!40000 ALTER TABLE `lime_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_conditions`
--

DROP TABLE IF EXISTS `lime_conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_conditions` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL DEFAULT '0',
  `cqid` int(11) NOT NULL DEFAULT '0',
  `cfieldname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `method` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `scenario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cid`),
  KEY `conditions_idx2` (`qid`),
  KEY `conditions_idx3` (`cqid`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_conditions`
--

LOCK TABLES `lime_conditions` WRITE;
/*!40000 ALTER TABLE `lime_conditions` DISABLE KEYS */;
INSERT INTO `lime_conditions` VALUES (1,3,0,'','==','Si',1),(2,8,7,'618961X3X7','==','Y',1),(30,101,100,'318492X22X100','<=','A4',1),(29,99,98,'318492X22X98','<=','A4',1),(28,97,96,'318492X22X96','<=','A4',1),(26,95,94,'318492X22X94','<=','A4',1),(25,94,89,'318492X20X89','==','Y',1),(24,93,89,'318492X20X89','==','Y',1),(27,92,90,'318492X21X90','<=','A9',1),(15,91,89,'318492X20X89','==','Y',1),(14,90,89,'318492X20X89','==','Y',1),(13,88,87,'318492X20X87','==','Y',1),(31,102,89,'318492X20X89','==','Y',1),(32,96,89,'318492X20X89','==','Y',1),(33,103,102,'318492X22X102','<=','A4',1),(34,104,89,'318492X20X89','==','Y',1),(35,105,89,'318492X20X89','==','Y',1),(36,106,105,'318492X22X105','==','Y',1),(37,107,89,'318492X20X89','==','Y',1),(38,108,87,'318492X20X87','==','N',1),(39,109,89,'318492X20X89','==','N',1),(40,98,89,'318492X20X89','==','Y',1),(41,89,87,'318492X20X87','==','Y',1),(42,100,89,'318492X20X89','==','Y',1),(43,120,119,'764876X24X119','==','Y',1),(44,121,119,'764876X24X119','==','Y',1),(45,122,119,'764876X24X119','==','Y',1),(46,123,119,'764876X24X119','==','Y',1),(48,124,119,'764876X24X119','==','Y',1),(49,125,124,'764876X25X124','==','N',1),(50,126,125,'764876X25X125','==','A1',1),(51,127,125,'764876X25X125','==','A1',1),(52,128,125,'764876X25X125','==','A1',1),(53,129,125,'764876X25X125','==','A1',1),(54,130,125,'764876X25X125','==','A2',1),(55,131,125,'764876X25X125','==','A2',1),(56,132,125,'764876X25X125','==','A2',1),(57,133,125,'764876X25X125','==','A2',1),(58,134,119,'764876X24X119','==','N',1),(59,135,119,'764876X24X119','==','N',1),(60,144,143,'764876X30X143','==','N',1);
/*!40000 ALTER TABLE `lime_conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_defaultvalues`
--

DROP TABLE IF EXISTS `lime_defaultvalues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_defaultvalues` (
  `qid` int(11) NOT NULL DEFAULT '0',
  `scale_id` int(11) NOT NULL DEFAULT '0',
  `sqid` int(11) NOT NULL DEFAULT '0',
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialtype` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `defaultvalue` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`qid`,`specialtype`,`language`,`scale_id`,`sqid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_defaultvalues`
--

LOCK TABLES `lime_defaultvalues` WRITE;
/*!40000 ALTER TABLE `lime_defaultvalues` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_defaultvalues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_expression_errors`
--

DROP TABLE IF EXISTS `lime_expression_errors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_expression_errors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `errortime` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `gseq` int(11) DEFAULT NULL,
  `qseq` int(11) DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eqn` text COLLATE utf8mb4_unicode_ci,
  `prettyprint` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_expression_errors`
--

LOCK TABLES `lime_expression_errors` WRITE;
/*!40000 ALTER TABLE `lime_expression_errors` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_expression_errors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_failed_login_attempts`
--

DROP TABLE IF EXISTS `lime_failed_login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_failed_login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_attempt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_attempts` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_failed_login_attempts`
--

LOCK TABLES `lime_failed_login_attempts` WRITE;
/*!40000 ALTER TABLE `lime_failed_login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_failed_login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_groups`
--

DROP TABLE IF EXISTS `lime_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_groups` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL DEFAULT '0',
  `group_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `group_order` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `randomization_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `grelevance` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`gid`,`language`),
  KEY `groups_idx2` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_groups`
--

LOCK TABLES `lime_groups` WRITE;
/*!40000 ALTER TABLE `lime_groups` DISABLE KEYS */;
INSERT INTO `lime_groups` VALUES (3,618961,'Datos',0,'Datos del usuario','es-CL','',''),(2,495246,'Saludos',0,'','es-CL','',''),(4,998811,'Identificacion Encuestado',0,'Datos del encuestado registrados en base','es-CL','',''),(5,998811,'Contacto Telefónico',1,'Condiciones previas','es-CL','',''),(6,998811,'Satisfacción Clientes',2,'Preguntas relacionadas con la satisfaccion del servicio de melon hormigones','es-CL','',''),(24,764876,'SALUDO',1,'Esta llamada la puede realizar una persona distinta al titular, sin embargo es necesario y crítico para el proceso contar con el rut del titular para avanzar en la gestión)','es-CL','',''),(22,318492,'Satisfaccion Servicios',2,'','es-CL','',''),(23,764876,'IDENTIFICACION AUDITORIA',0,'','es-CL','',''),(21,318492,'RECOMENDACIÓN',1,'','es-CL','',''),(20,318492,'Saludo y Presentacion',0,'','es-CL','',''),(15,264315,'Presentacion',0,'Presentacion','es-CL','',''),(16,569183,'Datos Generales',0,'Datos de ejecutivos, grabacion y venta','es-CL','',''),(17,569183,'BUENAS PRACTICAS SALUDO Y PRESENTACION DEL PRODUCTO',1,'','es-CL','',''),(18,569183,'CONDICIONES Y CIERRES DEL PRODUCTO',2,'','es-CL','',''),(19,569183,'TOMA DE DATOS PERSONALES',3,'','es-CL','',''),(25,764876,'PROTOCOLO DE DEVOLUCION CLIENTE CON PLAN',2,'','es-CL','',''),(26,764876,'PROTOCOLO DE DEVOLUCION CLIENTE CON PLAN PERO SOLICITA OTRO MEDIO DE PAGO (Residente RM)',3,'Esto es crítico, el ejecutivo NO debe, en ningún caso y de ninguna forma, presionar u obligar al cliente a tomar la opción de la Gift card. Si bien debe ser la primera opción a informar, si el cliente No está de acuerdo con ese medio de devolución, el ejecutivo deberá indicar las otras opciones (para el caso de RM, cheque y para Regiones transferencia electrónica).','es-CL','',''),(27,764876,'PROTOCOLO DE DEVOLUCION CLIENTE CON PLAN PERO SOLICITA OTRO MEDIO DE PAGO (Residente Regiones)',4,'Esto es crítico, el ejecutivo NO debe, en ningún caso y de ninguna forma, presionar u obligar al cliente a tomar la opción de la Gift card. Si bien debe ser la primera opción a informar, si el cliente No está de acuerdo con ese medio de devolución, el ejecutivo deberá indicar las otras opciones (para el caso de RM, cheque y para Regiones transferencia electrónica).','es-CL','',''),(28,764876,'PROTOCOLO DE ATENCION CLIENTE SIN PLAN DE DEVOLUCION',5,'En el caso que el cliente, indicado el rut No registre algún plan con devolución, el ejecutivo deberá indicar esa situación ( No puede cerrar indicando que lisa y llanamente No tiene plan), para este caso, deberá indicar que será revisada la situación y un ejecutivo se pondrá en contacto con él en un plazo no mayor a 72 hrs hábiles.','es-CL','',''),(29,764876,'BUENAS PRACTICAS ',6,'Estos conceptos tienen como finalidad complementar la evaluación de la atención con en nivel de satisfacción que se pueda percibir en el cliente en este proceso. Es muy de oído y mucho de eso se logra obtener con el tono de voz, el trato del cliente o molestias evidentes que resulten de la interacción con el agente.','es-CL','',''),(30,764876,'PERCEPCION DE SATISFACCION DEL EVALUADOR',7,'Estos conceptos tienen como finalidad complementar la evaluación de la atención con en nivel de satisfacción que se pueda percibir en el cliente en este proceso. Es muy de oído y mucho de eso se logra obtener con el tono de voz, el trato del cliente o molestias evidentes que resulten de la interacción con el agente.','es-CL','','');
/*!40000 ALTER TABLE `lime_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_labels`
--

DROP TABLE IF EXISTS `lime_labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_labels` (
  `lid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` text COLLATE utf8mb4_unicode_ci,
  `sortorder` int(11) NOT NULL,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `assessment_value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`,`sortorder`,`language`),
  KEY `labels_code_idx` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_labels`
--

LOCK TABLES `lime_labels` WRITE;
/*!40000 ALTER TABLE `lime_labels` DISABLE KEYS */;
INSERT INTO `lime_labels` VALUES (1,'A1','1',0,'es-CL',0),(1,'A2','2',1,'es-CL',0),(1,'A3','3',2,'es-CL',0),(1,'A4','4',3,'es-CL',0),(1,'A5','5',4,'es-CL',0),(1,'A6','6',5,'es-CL',0),(1,'A7','7',6,'es-CL',0),(2,'A1','0',0,'es-CL',0),(2,'A2','1',1,'es-CL',0),(2,'A3','2',2,'es-CL',0),(2,'A4','3',3,'es-CL',0),(2,'A5','4',4,'es-CL',0),(2,'A6','5',5,'es-CL',0),(2,'A7','6',6,'es-CL',0),(2,'A8','7',7,'es-CL',0),(2,'A9','8',8,'es-CL',0),(2,'A10','9',9,'es-CL',0),(2,'A11','10',10,'es-CL',0),(2,'A12','No Aplica',11,'es-CL',0),(3,'A1','1',0,'es-CL',0),(3,'A2','2',1,'es-CL',0),(3,'A3','3',2,'es-CL',0),(3,'A4','4',3,'es-CL',0),(3,'A5','5',4,'es-CL',0),(3,'A6','6',5,'es-CL',0),(3,'A7','7',6,'es-CL',0),(3,'A8','NA',7,'es-CL',0),(4,'A3','NO APLICA',2,'es-CL',0),(4,'A2','NO',1,'es-CL',0),(4,'A1','SI',0,'es-CL',0),(5,'A1','0',0,'es-CL',0),(5,'A2','1',1,'es-CL',0),(5,'A3','2',2,'es-CL',0),(5,'A4','3',3,'es-CL',0),(5,'A5','4',4,'es-CL',0),(5,'A6','5',5,'es-CL',0),(5,'A7','6',6,'es-CL',0),(5,'A8','7',7,'es-CL',0),(5,'A9','8',8,'es-CL',0),(5,'A10','9',9,'es-CL',0),(5,'A11','10',10,'es-CL',0),(5,'A12','No Aplica',11,'es-CL',0);
/*!40000 ALTER TABLE `lime_labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_labelsets`
--

DROP TABLE IF EXISTS `lime_labelsets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_labelsets` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `label_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `languages` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_labelsets`
--

LOCK TABLES `lime_labelsets` WRITE;
/*!40000 ALTER TABLE `lime_labelsets` DISABLE KEYS */;
INSERT INTO `lime_labelsets` VALUES (1,'Opciones 1 al 7','es-CL'),(2,'Opciones 0 al 10','es-CL'),(3,'Opciones 1 al 7 con NA','es-CL'),(4,'SI NO NA','es-CL'),(5,'Opciones 0 al 10 na','es-CL');
/*!40000 ALTER TABLE `lime_labelsets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_notifications`
--

DROP TABLE IF EXISTS `lime_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Should be either survey or user',
  `entity_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new' COMMENT 'new or read',
  `importance` int(11) NOT NULL DEFAULT '1',
  `display_class` varchar(31) COLLATE utf8mb4_unicode_ci DEFAULT 'default' COMMENT 'Bootstrap class, like warning, info, success',
  `created` datetime NOT NULL,
  `first_read` datetime DEFAULT NULL,
  `hash` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `entity` (`entity`,`entity_id`,`status`),
  KEY `hash` (`hash`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_notifications`
--

LOCK TABLES `lime_notifications` WRITE;
/*!40000 ALTER TABLE `lime_notifications` DISABLE KEYS */;
INSERT INTO `lime_notifications` VALUES (1,'user',1,'New UNSTABLE update available (Current version: 171121)','A security update is available.<a href=/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','read',1,'default','2017-11-27 17:09:05','2017-11-27 16:10:33','98616b6dec760387d631f94b4ceb5211afe345810020feda5b28cb19043c18f8'),(2,'user',10,'New UNSTABLE update available (Current version: 171121)','A security update is available.<a href=/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','read',1,'default','2017-11-29 14:46:43','2017-11-29 13:54:13','56127735510287e6c2aa4e4acc5e5a35e14ada113e3cea97028ff6b3b9c58c7f'),(3,'user',1,'New UNSTABLE update available (Current version: 171121)','A security update is available.<a href=/prueba-lime/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','read',1,'default','2017-11-30 15:09:32','2017-11-30 14:11:21','1f331cf51844f0a2747a8f737769f21e12b9cd27ccff49313e10df57fb2a402e'),(4,'user',1,'New update available (Current version: 171121)','A security update is available.<a href=/prueba-lime/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','read',1,'default','2017-12-12 12:37:08','2017-12-12 11:37:21','8ee77133eb9dab2138b49c43b008fc1bad77bc7d0be22d62f604ce07abd4b22d'),(5,'user',1,'New update available (Current version: 171121)','A security update is available.<a href=/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','read',1,'default','2017-12-12 12:47:28','2017-12-12 11:47:38','2f2b6993b97fd0c0377443e66abca6b1a62987f6f3c23ef0e5d99ced5ab79b18'),(6,'user',1,'Security update! (Current version: 171121)','A security update is available. <a href=/prueba-lime/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','new',1,'default','2018-01-30 11:46:03','2018-01-30 10:53:34','e3def8c5db1d6bb2636f74570d9b6223eeffb8fed1078841c6eae43adb26e5cd'),(7,'user',1,'Security update! (Current version: 171121)','A security update is available. <a href=/limesurvey/index.php/admin/update>Click here to use ComfortUpdate.</a>','new',1,'default','2018-02-05 08:37:56','2018-02-05 07:38:03','987bbf15a01012b7322fa597ab5489d7b559401f744635428fd1b2d9f359850c');
/*!40000 ALTER TABLE `lime_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_495246_20171127165313`
--

DROP TABLE IF EXISTS `lime_old_survey_495246_20171127165313`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_495246_20171127165313` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `495246X2X2` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `495246X2X3` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_495246_10873` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_495246_20171127165313`
--

LOCK TABLES `lime_old_survey_495246_20171127165313` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_495246_20171127165313` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_old_survey_495246_20171127165313` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_495246_20171128092535`
--

DROP TABLE IF EXISTS `lime_old_survey_495246_20171128092535`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_495246_20171128092535` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `495246X2X2` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `495246X2X3` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_495246_12692` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_495246_20171128092535`
--

LOCK TABLES `lime_old_survey_495246_20171128092535` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_495246_20171128092535` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_old_survey_495246_20171128092535` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_618961_20171129091715`
--

DROP TABLE IF EXISTS `lime_old_survey_618961_20171129091715`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_618961_20171129091715` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `refurl` text COLLATE utf8mb4_unicode_ci,
  `618961X3X4` text COLLATE utf8mb4_unicode_ci,
  `618961X3X5` text COLLATE utf8mb4_unicode_ci,
  `618961X3X6` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `618961X3X7` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `618961X3X8` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_618961_26195` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_618961_20171129091715`
--

LOCK TABLES `lime_old_survey_618961_20171129091715` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_618961_20171129091715` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_old_survey_618961_20171129091715` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_618961_20171129103154`
--

DROP TABLE IF EXISTS `lime_old_survey_618961_20171129103154`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_618961_20171129103154` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `refurl` text COLLATE utf8mb4_unicode_ci,
  `618961X3X4` text COLLATE utf8mb4_unicode_ci,
  `618961X3X5` text COLLATE utf8mb4_unicode_ci,
  `618961X3X6` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `618961X3X7` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `618961X3X8` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_618961_47460` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_618961_20171129103154`
--

LOCK TABLES `lime_old_survey_618961_20171129103154` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_618961_20171129103154` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_old_survey_618961_20171129103154` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_764876_20180226155034`
--

DROP TABLE IF EXISTS `lime_old_survey_764876_20180226155034`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_764876_20180226155034` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `ipaddr` text COLLATE utf8mb4_unicode_ci,
  `764876X23X110` text COLLATE utf8mb4_unicode_ci,
  `764876X23X111` text COLLATE utf8mb4_unicode_ci,
  `764876X23X112` text COLLATE utf8mb4_unicode_ci,
  `764876X23X113` decimal(30,10) DEFAULT NULL,
  `764876X23X114` datetime DEFAULT NULL,
  `764876X24X115` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X24X116` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X24X117` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X24X118` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X24X119` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X25X120` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X25X121` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X25X122` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X25X123` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X25X124` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X25X125` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X26X126` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X26X127` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X26X128` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X26X129` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X27X130` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X27X131` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X27X132` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X27X133` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X28X134` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X28X135` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X29X136` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X29X137` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X29X138` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X29X139` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X29X140` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X30X141` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X30X142` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X30X143` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X30X144` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `764876X30X144other` text COLLATE utf8mb4_unicode_ci,
  `764876X30X145` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_764876_33905` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_764876_20180226155034`
--

LOCK TABLES `lime_old_survey_764876_20180226155034` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_764876_20180226155034` DISABLE KEYS */;
INSERT INTO `lime_old_survey_764876_20180226155034` VALUES (1,NULL,'2018-02-20 08:31:44',8,'es-CL','2018-02-20 08:30:36','2018-02-20 08:31:44','127.0.0.1','','Juan Perez','11983017-6',1234567.0000000000,'2018-02-21 00:00:00','A1','A1','A1','A1','Y','A1','A1','A1','A1','Y',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A1','A1','A1','A1','A1','A1','A1','Y',NULL,NULL,'Prueba'),(2,NULL,'2018-02-20 08:36:26',8,'es-CL','2018-02-20 08:35:10','2018-02-20 08:36:26','127.0.0.1','segundo','Manuel torres','11983017-6',1234.0000000000,'2018-02-21 00:00:00','A1','A1','A1','A1','N',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A1','A1','A1','A1','A1','A1','A1','A1','A1','Y',NULL,NULL,'Otra prueba'),(3,NULL,'2018-02-20 08:50:31',8,'es-CL','2018-02-20 08:47:17','2018-02-20 08:50:31','127.0.0.1','Segundo','Raul Matas','12895400-k',123456.0000000000,'2018-02-21 00:00:00','A1','A1','A1','A1','Y','A1','A1','A1','A1','N','A1','A1','A1','A1','A1',NULL,NULL,NULL,NULL,NULL,NULL,'A1','A1','A1','A1','A1','A1','A1','Y',NULL,NULL,'Probando parametros desde mi app'),(4,NULL,NULL,-1,'es-CL','2018-02-21 12:31:28','2018-02-21 12:31:29','127.0.0.1','Segundo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_survey_764876_20180226155034` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_764876_timings_20180226155034`
--

DROP TABLE IF EXISTS `lime_old_survey_764876_timings_20180226155034`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_764876_timings_20180226155034` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interviewtime` float DEFAULT NULL,
  `764876X23time` float DEFAULT NULL,
  `764876X23X110time` float DEFAULT NULL,
  `764876X23X111time` float DEFAULT NULL,
  `764876X23X112time` float DEFAULT NULL,
  `764876X23X113time` float DEFAULT NULL,
  `764876X23X114time` float DEFAULT NULL,
  `764876X24time` float DEFAULT NULL,
  `764876X24X115time` float DEFAULT NULL,
  `764876X24X116time` float DEFAULT NULL,
  `764876X24X117time` float DEFAULT NULL,
  `764876X24X118time` float DEFAULT NULL,
  `764876X24X119time` float DEFAULT NULL,
  `764876X25time` float DEFAULT NULL,
  `764876X25X120time` float DEFAULT NULL,
  `764876X25X121time` float DEFAULT NULL,
  `764876X25X122time` float DEFAULT NULL,
  `764876X25X123time` float DEFAULT NULL,
  `764876X25X124time` float DEFAULT NULL,
  `764876X25X125time` float DEFAULT NULL,
  `764876X26time` float DEFAULT NULL,
  `764876X26X126time` float DEFAULT NULL,
  `764876X26X127time` float DEFAULT NULL,
  `764876X26X128time` float DEFAULT NULL,
  `764876X26X129time` float DEFAULT NULL,
  `764876X27time` float DEFAULT NULL,
  `764876X27X130time` float DEFAULT NULL,
  `764876X27X131time` float DEFAULT NULL,
  `764876X27X132time` float DEFAULT NULL,
  `764876X27X133time` float DEFAULT NULL,
  `764876X28time` float DEFAULT NULL,
  `764876X28X134time` float DEFAULT NULL,
  `764876X28X135time` float DEFAULT NULL,
  `764876X29time` float DEFAULT NULL,
  `764876X29X136time` float DEFAULT NULL,
  `764876X29X137time` float DEFAULT NULL,
  `764876X29X138time` float DEFAULT NULL,
  `764876X29X139time` float DEFAULT NULL,
  `764876X29X140time` float DEFAULT NULL,
  `764876X30time` float DEFAULT NULL,
  `764876X30X141time` float DEFAULT NULL,
  `764876X30X142time` float DEFAULT NULL,
  `764876X30X143time` float DEFAULT NULL,
  `764876X30X144time` float DEFAULT NULL,
  `764876X30X145time` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_764876_timings_20180226155034`
--

LOCK TABLES `lime_old_survey_764876_timings_20180226155034` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_764876_timings_20180226155034` DISABLE KEYS */;
INSERT INTO `lime_old_survey_764876_timings_20180226155034` VALUES (1,70.16,21.67,NULL,NULL,NULL,NULL,NULL,13.22,NULL,NULL,NULL,NULL,NULL,12.44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10.55,NULL,NULL,NULL,NULL,NULL,12.28,NULL,NULL,NULL,NULL,NULL),(2,77.79,31.38,NULL,NULL,NULL,NULL,NULL,11.6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8.9,NULL,NULL,10.92,NULL,NULL,NULL,NULL,NULL,14.99,NULL,NULL,NULL,NULL,NULL),(3,186.77,25.11,NULL,NULL,NULL,NULL,NULL,21.33,NULL,NULL,NULL,NULL,NULL,20.18,NULL,NULL,NULL,NULL,NULL,NULL,90.04,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11.28,NULL,NULL,NULL,NULL,NULL,18.83,NULL,NULL,NULL,NULL,NULL),(4,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_survey_764876_timings_20180226155034` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_998811_20171129152241`
--

DROP TABLE IF EXISTS `lime_old_survey_998811_20171129152241`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_998811_20171129152241` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `998811X4X9` text COLLATE utf8mb4_unicode_ci,
  `998811X4X10` text COLLATE utf8mb4_unicode_ci,
  `998811X5X11` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X12` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X13` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X14` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X15` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X16` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X17` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X18` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X19` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X20` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X21` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X22` decimal(30,10) DEFAULT NULL,
  `998811X6X23` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X24` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X25` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X26` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X27` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X28` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X29` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X29other` text COLLATE utf8mb4_unicode_ci,
  `998811X6X30` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X31` text COLLATE utf8mb4_unicode_ci,
  `998811X6X32` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_998811_45916` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_998811_20171129152241`
--

LOCK TABLES `lime_old_survey_998811_20171129152241` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_998811_20171129152241` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_old_survey_998811_20171129152241` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_998811_20180207113555`
--

DROP TABLE IF EXISTS `lime_old_survey_998811_20180207113555`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_998811_20180207113555` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `998811X4X9` text COLLATE utf8mb4_unicode_ci,
  `998811X4X10` text COLLATE utf8mb4_unicode_ci,
  `998811X4X33` decimal(30,10) DEFAULT NULL,
  `998811X5X11` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X12` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X13` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X14` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X15` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X16` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X17` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X18` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X19` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X20` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X21` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X22` decimal(30,10) DEFAULT NULL,
  `998811X6X23` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X24` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X25` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X26` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X27` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X28` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X29` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X29other` text COLLATE utf8mb4_unicode_ci,
  `998811X6X30` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X31` text COLLATE utf8mb4_unicode_ci,
  `998811X6X32` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_998811_15781` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_998811_20180207113555`
--

LOCK TABLES `lime_old_survey_998811_20180207113555` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_998811_20180207113555` DISABLE KEYS */;
INSERT INTO `lime_old_survey_998811_20180207113555` VALUES (1,NULL,NULL,NULL,'es-CL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,'1980-01-01 00:00:00',3,'es-CL','11000455','Juan Perez',56988051289.0000000000,'','Y','','','A5','','A3','A5','A4','A6','A2',34.0000000000,'A3','N','A1','N','N',NULL,'A3','','A7',NULL,'A2'),(3,'hZeuGxfiMWHRaLc',NULL,0,'es-CL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'hZeuGxfiMWHRaLc',NULL,NULL,'es-CL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'8P9atoNmpurJ8Lk','1980-01-01 00:00:00',3,'es-CL','1234567','Pedro ',988051289.0000000000,'','Y','','','A4','','A6','A5','A4','A5','A2',40.0000000000,'A1','Y','A2','Y','Y','A5',NULL,NULL,'A8',NULL,'A2');
/*!40000 ALTER TABLE `lime_old_survey_998811_20180207113555` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_survey_998811_20180220082129`
--

DROP TABLE IF EXISTS `lime_old_survey_998811_20180220082129`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_survey_998811_20180220082129` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `ipaddr` text COLLATE utf8mb4_unicode_ci,
  `998811X4X9` text COLLATE utf8mb4_unicode_ci,
  `998811X4X10` text COLLATE utf8mb4_unicode_ci,
  `998811X4X33` decimal(30,10) DEFAULT NULL,
  `998811X5X11` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X12` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X13` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X5X14` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X15` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X16` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X17` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X18` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X19` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X20` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X21` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X22` decimal(30,10) DEFAULT NULL,
  `998811X6X23` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X24` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X25` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X26` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X27` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X28` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X29` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X29other` text COLLATE utf8mb4_unicode_ci,
  `998811X6X30` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `998811X6X31` text COLLATE utf8mb4_unicode_ci,
  `998811X6X32` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_998811_17090` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_survey_998811_20180220082129`
--

LOCK TABLES `lime_old_survey_998811_20180220082129` WRITE;
/*!40000 ALTER TABLE `lime_old_survey_998811_20180220082129` DISABLE KEYS */;
INSERT INTO `lime_old_survey_998811_20180220082129` VALUES (7,'TvmeAeS42p9qFOE','2018-02-07 11:53:52',3,'es-CL','2018-02-07 11:51:57','2018-02-07 11:53:52','127.0.0.1','1234567','Luis maldonado',988051289.0000000000,'','Y','','','A5','','A3','A5','A5','A6','A2',120.0000000000,'A3','N','A1','N','N',NULL,'A2','','A7',NULL,'A2'),(8,'TvmeAeS42p9qFOE',NULL,0,'es-CL','2018-02-07 12:05:31','2018-02-07 12:05:48','127.0.0.1','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_survey_998811_20180220082129` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_495246_20171127165313`
--

DROP TABLE IF EXISTS `lime_old_tokens_495246_20171127165313`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_495246_20171127165313` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_495246_40476` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_495246_20171127165313`
--

LOCK TABLES `lime_old_tokens_495246_20171127165313` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_495246_20171127165313` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_495246_20171127165313` VALUES (1,NULL,'Segundo','Galdames','segundogaldames@gmail.com','OK','qM2thL9FlmGz1A7','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_495246_20171127165313` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_495246_20171128092535`
--

DROP TABLE IF EXISTS `lime_old_tokens_495246_20171128092535`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_495246_20171128092535` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_495246_2390` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_495246_20171128092535`
--

LOCK TABLES `lime_old_tokens_495246_20171128092535` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_495246_20171128092535` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_495246_20171128092535` VALUES (1,NULL,'Segundo','Galdames','segundogaldames@gmail.com','OK','OaUTT9YZdVmMRwT','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_495246_20171128092535` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_618961_20171129091715`
--

DROP TABLE IF EXISTS `lime_old_tokens_618961_20171129091715`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_618961_20171129091715` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_618961_9413` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_618961_20171129091715`
--

LOCK TABLES `lime_old_tokens_618961_20171129091715` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_618961_20171129091715` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_618961_20171129091715` VALUES (101,NULL,'Segundo','Galdames','sgaldamesh@gmail.com','OK','bz0IavDcm0PDEfs','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(2,NULL,'','','','OK','tvszYSLTrljvpDw','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(3,NULL,'','','','OK','ibS9QLaJcjhKwoF','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(4,NULL,'','','','OK','PeYC1VFqFneiCLm','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(5,NULL,'','','','OK','HTQ4acn4n7QV31N','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(6,NULL,'','','','OK','Si6Diamu0BFuypz','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(7,NULL,'','','','OK','ztAzYSZEU87P514','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(8,NULL,'','','','OK','i1uuzzPAuBW94UA','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(9,NULL,'','','','OK','IvykkQZklH9yXcv','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(10,NULL,'','','','OK','E2sPqJAatXLVkaT','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(11,NULL,'','','','OK','14Ilu9YQlmkYmp8','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(12,NULL,'','','','OK','ElwsG0nNUk0xeLY','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(13,NULL,'','','','OK','R057KRpQ0C5XJRZ','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(14,NULL,'','','','OK','h8yn0pj0A9e3b3J','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(15,NULL,'','','','OK','UDo3VeftziBafs5','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(16,NULL,'','','','OK','di4GqbBssKzIbNs','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(17,NULL,'','','','OK','4GeJjlCN0BspAjl','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(18,NULL,'','','','OK','NBR3gUpeemjBIuh','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(19,NULL,'','','','OK','TRCKuxaeqdZt4m8','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(20,NULL,'','','','OK','rYZ5ztJzC0aQB4W','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(21,NULL,'','','','OK','0JHazCYKVHhaFGu','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(22,NULL,'','','','OK','RJOODXW6Q0OKQjJ','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(23,NULL,'','','','OK','97gQ4zo3qaaEfxz','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(24,NULL,'','','','OK','LrRH34Mu9S0sJfC','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(25,NULL,'','','','OK','qp0guKQ5VGNni8Q','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(26,NULL,'','','','OK','aq2DjfKQO0z7n0J','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(27,NULL,'','','','OK','DsRmcNJBvs8aqap','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(28,NULL,'','','','OK','QPHz3rSiKjONCgZ','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(29,NULL,'','','','OK','MYHPiGM67Xe8GKm','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(30,NULL,'','','','OK','NYYerzaaPlz71Xz','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(31,NULL,'','','','OK','l6eZDuSApZnCaaz','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(32,NULL,'','','','OK','6OobsCJHn8Hnoey','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(33,NULL,'','','','OK','71uXTaywgizEHFS','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(34,NULL,'','','','OK','9RV46GcVnPwdpUC','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(35,NULL,'','','','OK','1QNJ911cE3CHymy','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(36,NULL,'','','','OK','GHNW1XRgPNXaVRD','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(37,NULL,'','','','OK','JFQha2WNzrG18Ib','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(38,NULL,'','','','OK','tUZE3f4wFRIVUR1','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(39,NULL,'','','','OK','Bne3xRLEGcMzPvv','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(40,NULL,'','','','OK','pxz43Swjl26I7EH','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(41,NULL,'','','','OK','mdzOrK4sppszXV9','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(42,NULL,'','','','OK','JkmuXnX0nQjLxPj','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(43,NULL,'','','','OK','Xv6MKcOFJaojzlb','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(44,NULL,'','','','OK','aPHLZfHny3zClvR','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(45,NULL,'','','','OK','MTY6HqZIpqQc00h','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(46,NULL,'','','','OK','2INFd3U10sYmg8a','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(47,NULL,'','','','OK','0Hu0HHqK7pWpA82','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(48,NULL,'','','','OK','zvzGDdG7N4SD6TK','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(49,NULL,'','','','OK','uAXRHXDxiwzgZrD','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(50,NULL,'','','','OK','L97ToUWtzJzHNN5','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(51,NULL,'','','','OK','hBUCN6zQ8KcokLq','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(52,NULL,'','','','OK','YWybvHevTa6rYWT','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(53,NULL,'','','','OK','qpGyaQERzqVHeBI','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(54,NULL,'','','','OK','dLpSwxNYUHYoWBp','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(55,NULL,'','','','OK','KczxL5S7t1aLjrs','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(56,NULL,'','','','OK','czmTghO91JpDQtl','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(57,NULL,'','','','OK','WINgT3wLr4NvOrD','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(58,NULL,'','','','OK','AYetxE7NklhIctb','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(59,NULL,'','','','OK','hLITg8zZSMWFg7I','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(60,NULL,'','','','OK','JbEoNfZ6xFQBSPp','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(61,NULL,'','','','OK','oGZM0EcXaymucxG','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(62,NULL,'','','','OK','EvQcb6MPdOSlEBn','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(63,NULL,'','','','OK','fYrSa58rRJzTtXn','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(64,NULL,'','','','OK','zlbqaujERWh3zxm','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(65,NULL,'','','','OK','TBJ1IvILX7e4CHu','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(66,NULL,'','','','OK','40bd8t2NTu0Hn5z','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(67,NULL,'','','','OK','f0aFrp1csE0zlCx','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(68,NULL,'','','','OK','qsDYcvMdDDpj8eb','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(69,NULL,'','','','OK','ndwJvoNmKyJ89ux','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(70,NULL,'','','','OK','DstAEB10zAfIC81','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(71,NULL,'','','','OK','ETu7z62PqwZ6g2M','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(72,NULL,'','','','OK','K0iLzGpszquvKQd','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(73,NULL,'','','','OK','yMq8zzdkisO9cBA','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(74,NULL,'','','','OK','NawxHdGpZqmz55n','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(75,NULL,'','','','OK','HtezFAYlh5fk8EC','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(76,NULL,'','','','OK','iItB0gezrijMOs0','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(77,NULL,'','','','OK','h9IarurZzSb7aXr','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(78,NULL,'','','','OK','xyOprMkNI9lUeYv','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(79,NULL,'','','','OK','IWMMrStlPzWMpYL','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(80,NULL,'','','','OK','eiwHhPYpzxnj11i','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(81,NULL,'','','','OK','ywPLT9Bt2mYluYh','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(82,NULL,'','','','OK','Qwdjmc57b03N1Hi','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(83,NULL,'','','','OK','Q34agI23Iwu1TLC','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(84,NULL,'','','','OK','BsDZge1xYQ6wDEZ','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(85,NULL,'','','','OK','KDE9PbodS7uAyrQ','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(86,NULL,'','','','OK','1LybBaxWh6CZAfA','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(87,NULL,'','','','OK','NpaoAr6feM7ZbZ1','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(88,NULL,'','','','OK','7z3bUW6wuvLhO29','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(89,NULL,'','','','OK','He1Ig1m2s3jz8ii','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(90,NULL,'','','','OK','0IooR1JKDiYblei','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(91,NULL,'','','','OK','JBgypOvznMisYSn','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(92,NULL,'','','','OK','q8D6dPuhIyemeyF','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(93,NULL,'','','','OK','iDdTPE78iRNROJg','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(94,NULL,'','','','OK','TzQRKbDd7Rj4BCK','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(95,NULL,'','','','OK','am6HyBMLmODftNz','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(96,NULL,'','','','OK','eubm2jGdeRjDWZk','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(97,NULL,'','','','OK','RTP97SHdlK2KonT','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(98,NULL,'','','','OK','GX4z6XLz51NFF1z','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(99,NULL,'','','','OK','CQzPzLqmCZp960J','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL),(100,NULL,'','','','OK','FF4Upk56C2aCe8v','es-CL',NULL,'N','N',0,'N',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_618961_20171129091715` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_618961_20171129103154`
--

DROP TABLE IF EXISTS `lime_old_tokens_618961_20171129103154`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_618961_20171129103154` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_618961_26053` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_618961_20171129103154`
--

LOCK TABLES `lime_old_tokens_618961_20171129103154` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_618961_20171129103154` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_618961_20171129103154` VALUES (1,NULL,'Segundo ','Galdames','sgaldamesh@gmail.com','OK','bYIxOEvhu6zP1AS','es-CL',NULL,'2017-11-29 10:06','N',0,'2017-11-29 10:19',-2,'2017-11-29 00:00:00',NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_618961_20171129103154` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_998811_20171129152241`
--

DROP TABLE IF EXISTS `lime_old_tokens_998811_20171129152241`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_998811_20171129152241` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_998811_6570` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_998811_20171129152241`
--

LOCK TABLES `lime_old_tokens_998811_20171129152241` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_998811_20171129152241` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_998811_20171129152241` VALUES (1,NULL,'Segundo','Galdames','sgaldamesh@gmail.com','OK','Tu4Z4jSOWrjlbf4','es-CL',NULL,'N','N',0,'N',100,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_998811_20171129152241` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_998811_20180207113555`
--

DROP TABLE IF EXISTS `lime_old_tokens_998811_20180207113555`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_998811_20180207113555` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_998811_47586` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_998811_20180207113555`
--

LOCK TABLES `lime_old_tokens_998811_20180207113555` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_998811_20180207113555` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_998811_20180207113555` VALUES (1,NULL,'Segundo','Galdames','sgaldamesh@gmail.com','OK','hZeuGxfiMWHRaLc','es-CL',NULL,'2017-11-29 15:29','N',0,'N',100,NULL,NULL,NULL),(2,NULL,'Segundo','Galdames','sgaldames@metasolutions.cl','OK','8P9atoNmpurJ8Lk','es-CL',NULL,'N','N',0,'2018-02-07 09:46',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_998811_20180207113555` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_old_tokens_998811_20180220082129`
--

DROP TABLE IF EXISTS `lime_old_tokens_998811_20180220082129`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_old_tokens_998811_20180220082129` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_998811_17446` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_old_tokens_998811_20180220082129`
--

LOCK TABLES `lime_old_tokens_998811_20180220082129` WRITE;
/*!40000 ALTER TABLE `lime_old_tokens_998811_20180220082129` DISABLE KEYS */;
INSERT INTO `lime_old_tokens_998811_20180220082129` VALUES (1,NULL,'Segundo','Galdames','sgaldameh@gmail.com','OK','TvmeAeS42p9qFOE','es-CL',NULL,'N','N',0,'N',99,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_old_tokens_998811_20180220082129` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_participant_attribute`
--

DROP TABLE IF EXISTS `lime_participant_attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_participant_attribute` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`participant_id`,`attribute_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_participant_attribute`
--

LOCK TABLES `lime_participant_attribute` WRITE;
/*!40000 ALTER TABLE `lime_participant_attribute` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_participant_attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_participant_attribute_names`
--

DROP TABLE IF EXISTS `lime_participant_attribute_names`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_participant_attribute_names` (
  `attribute_id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defaultname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`attribute_id`,`attribute_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_participant_attribute_names`
--

LOCK TABLES `lime_participant_attribute_names` WRITE;
/*!40000 ALTER TABLE `lime_participant_attribute_names` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_participant_attribute_names` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_participant_attribute_names_lang`
--

DROP TABLE IF EXISTS `lime_participant_attribute_names_lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_participant_attribute_names_lang` (
  `attribute_id` int(11) NOT NULL,
  `attribute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`attribute_id`,`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_participant_attribute_names_lang`
--

LOCK TABLES `lime_participant_attribute_names_lang` WRITE;
/*!40000 ALTER TABLE `lime_participant_attribute_names_lang` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_participant_attribute_names_lang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_participant_attribute_values`
--

DROP TABLE IF EXISTS `lime_participant_attribute_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_participant_attribute_values` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_participant_attribute_values`
--

LOCK TABLES `lime_participant_attribute_values` WRITE;
/*!40000 ALTER TABLE `lime_participant_attribute_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_participant_attribute_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_participant_shares`
--

DROP TABLE IF EXISTS `lime_participant_shares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_participant_shares` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_uid` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `can_edit` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`participant_id`,`share_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_participant_shares`
--

LOCK TABLES `lime_participant_shares` WRITE;
/*!40000 ALTER TABLE `lime_participant_shares` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_participant_shares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_participants`
--

DROP TABLE IF EXISTS `lime_participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_participants` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_uid` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`participant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_participants`
--

LOCK TABLES `lime_participants` WRITE;
/*!40000 ALTER TABLE `lime_participants` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_permissions`
--

DROP TABLE IF EXISTS `lime_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_p` int(11) NOT NULL DEFAULT '0',
  `read_p` int(11) NOT NULL DEFAULT '0',
  `update_p` int(11) NOT NULL DEFAULT '0',
  `delete_p` int(11) NOT NULL DEFAULT '0',
  `import_p` int(11) NOT NULL DEFAULT '0',
  `export_p` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idxPermissions` (`entity_id`,`entity`,`permission`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_permissions`
--

LOCK TABLES `lime_permissions` WRITE;
/*!40000 ALTER TABLE `lime_permissions` DISABLE KEYS */;
INSERT INTO `lime_permissions` VALUES (1,'global',0,1,'superadmin',0,1,0,0,0,0),(2,'survey',495246,1,'surveyactivation',0,0,1,0,0,0),(3,'survey',495246,1,'surveycontent',1,1,1,1,1,1),(4,'survey',495246,1,'quotas',1,1,1,1,0,0),(5,'survey',495246,1,'surveylocale',0,1,1,0,0,0),(6,'survey',495246,1,'survey',0,1,0,1,0,0),(7,'survey',495246,1,'statistics',0,1,0,0,0,0),(8,'survey',495246,1,'assessments',1,1,1,1,0,0),(9,'survey',495246,1,'surveysettings',0,1,1,0,0,0),(10,'survey',495246,1,'tokens',1,1,1,1,1,1),(11,'survey',495246,1,'responses',1,1,1,1,1,1),(12,'survey',495246,1,'surveysecurity',1,1,1,1,0,0),(13,'survey',495246,1,'translations',0,1,1,0,0,0),(14,'survey',618961,1,'surveyactivation',0,0,1,0,0,0),(15,'survey',618961,1,'surveycontent',1,1,1,1,1,1),(16,'survey',618961,1,'quotas',1,1,1,1,0,0),(17,'survey',618961,1,'surveylocale',0,1,1,0,0,0),(18,'survey',618961,1,'survey',0,1,0,1,0,0),(19,'survey',618961,1,'statistics',0,1,0,0,0,0),(20,'survey',618961,1,'assessments',1,1,1,1,0,0),(21,'survey',618961,1,'surveysettings',0,1,1,0,0,0),(22,'survey',618961,1,'tokens',1,1,1,1,1,1),(23,'survey',618961,1,'responses',1,1,1,1,1,1),(24,'survey',618961,1,'surveysecurity',1,1,1,1,0,0),(25,'survey',618961,1,'translations',0,1,1,0,0,0),(44,'template',0,9,'default',0,1,0,0,0,0),(55,'template',0,10,'default',0,1,0,0,0,0),(73,'survey',998811,1,'quotas',1,1,1,1,0,0),(43,'global',0,9,'auth_db',0,1,0,0,0,0),(51,'survey',618961,9,'surveyactivation',0,0,1,0,0,0),(52,'survey',618961,9,'surveycontent',1,1,1,1,1,1),(53,'survey',618961,9,'survey',0,1,0,0,0,0),(72,'survey',998811,1,'surveycontent',1,1,1,1,1,1),(68,'global',0,10,'participantpanel',1,1,1,0,1,1),(69,'global',0,10,'labelsets',1,1,1,0,1,1),(70,'global',0,10,'surveys',1,1,1,0,0,1),(71,'survey',998811,1,'surveyactivation',0,0,1,0,0,0),(74,'survey',998811,1,'surveylocale',0,1,1,0,0,0),(75,'survey',998811,1,'survey',0,1,0,1,0,0),(76,'survey',998811,1,'statistics',0,1,0,0,0,0),(77,'survey',998811,1,'assessments',1,1,1,1,0,0),(78,'survey',998811,1,'surveysettings',0,1,1,0,0,0),(79,'survey',998811,1,'tokens',1,1,1,1,1,1),(80,'survey',998811,1,'responses',1,1,1,1,1,1),(81,'survey',998811,1,'surveysecurity',1,1,1,1,0,0),(82,'survey',998811,1,'translations',0,1,1,0,0,0),(126,'survey',318492,1,'surveysettings',0,1,1,0,0,0),(127,'survey',318492,1,'tokens',1,1,1,1,1,1),(123,'survey',318492,1,'survey',0,1,0,1,0,0),(124,'survey',318492,1,'statistics',0,1,0,0,0,0),(125,'survey',318492,1,'assessments',1,1,1,1,0,0),(120,'survey',318492,1,'surveycontent',1,1,1,1,1,1),(121,'survey',318492,1,'quotas',1,1,1,1,0,0),(122,'survey',318492,1,'surveylocale',0,1,1,0,0,0),(119,'survey',318492,1,'surveyactivation',0,0,1,0,0,0),(95,'survey',264315,1,'surveyactivation',0,0,1,0,0,0),(96,'survey',264315,1,'surveycontent',1,1,1,1,1,1),(97,'survey',264315,1,'quotas',1,1,1,1,0,0),(98,'survey',264315,1,'surveylocale',0,1,1,0,0,0),(99,'survey',264315,1,'survey',0,1,0,1,0,0),(100,'survey',264315,1,'statistics',0,1,0,0,0,0),(101,'survey',264315,1,'assessments',1,1,1,1,0,0),(102,'survey',264315,1,'surveysettings',0,1,1,0,0,0),(103,'survey',264315,1,'tokens',1,1,1,1,1,1),(104,'survey',264315,1,'responses',1,1,1,1,1,1),(105,'survey',264315,1,'surveysecurity',1,1,1,1,0,0),(106,'survey',264315,1,'translations',0,1,1,0,0,0),(107,'survey',569183,1,'surveyactivation',0,0,1,0,0,0),(108,'survey',569183,1,'surveycontent',1,1,1,1,1,1),(109,'survey',569183,1,'quotas',1,1,1,1,0,0),(110,'survey',569183,1,'surveylocale',0,1,1,0,0,0),(111,'survey',569183,1,'survey',0,1,0,1,0,0),(112,'survey',569183,1,'statistics',0,1,0,0,0,0),(113,'survey',569183,1,'assessments',1,1,1,1,0,0),(114,'survey',569183,1,'surveysettings',0,1,1,0,0,0),(115,'survey',569183,1,'tokens',1,1,1,1,1,1),(116,'survey',569183,1,'responses',1,1,1,1,1,1),(117,'survey',569183,1,'surveysecurity',1,1,1,1,0,0),(118,'survey',569183,1,'translations',0,1,1,0,0,0),(128,'survey',318492,1,'responses',1,1,1,1,1,1),(129,'survey',318492,1,'surveysecurity',1,1,1,1,0,0),(130,'survey',318492,1,'translations',0,1,1,0,0,0),(131,'survey',764876,1,'surveyactivation',0,0,1,0,0,0),(132,'survey',764876,1,'surveycontent',1,1,1,1,1,1),(133,'survey',764876,1,'quotas',1,1,1,1,0,0),(134,'survey',764876,1,'surveylocale',0,1,1,0,0,0),(135,'survey',764876,1,'survey',0,1,0,1,0,0),(136,'survey',764876,1,'statistics',0,1,0,0,0,0),(137,'survey',764876,1,'assessments',1,1,1,1,0,0),(138,'survey',764876,1,'surveysettings',0,1,1,0,0,0),(139,'survey',764876,1,'tokens',1,1,1,1,1,1),(140,'survey',764876,1,'responses',1,1,1,1,1,1),(141,'survey',764876,1,'surveysecurity',1,1,1,1,0,0),(142,'survey',764876,1,'translations',0,1,1,0,0,0);
/*!40000 ALTER TABLE `lime_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_plugin_settings`
--

DROP TABLE IF EXISTS `lime_plugin_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_plugin_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `key` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_plugin_settings`
--

LOCK TABLES `lime_plugin_settings` WRITE;
/*!40000 ALTER TABLE `lime_plugin_settings` DISABLE KEYS */;
INSERT INTO `lime_plugin_settings` VALUES (1,2,'Survey',618961,'auditing','\"1\"'),(2,2,'Survey',495246,'auditing','\"1\"'),(3,2,'Survey',998811,'auditing','\"1\"'),(4,2,'Survey',956849,'auditing','\"1\"'),(5,2,'Survey',264315,'auditing','\"1\"'),(6,2,'Survey',569183,'auditing','\"1\"'),(7,2,'Survey',318492,'auditing','\"1\"'),(8,2,'Survey',764876,'auditing','\"1\"');
/*!40000 ALTER TABLE `lime_plugin_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_plugins`
--

DROP TABLE IF EXISTS `lime_plugins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_plugins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_plugins`
--

LOCK TABLES `lime_plugins` WRITE;
/*!40000 ALTER TABLE `lime_plugins` DISABLE KEYS */;
INSERT INTO `lime_plugins` VALUES (1,'Authdb',1),(2,'AuditLog',1),(3,'QuickMenu',1),(4,'oldUrlCompat',1),(5,'extendedStartPage',1),(6,'ExportSTATAxml',1),(7,'Authwebserver',1),(8,'AuthLDAP',0),(9,'ExportR',1);
/*!40000 ALTER TABLE `lime_plugins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_question_attributes`
--

DROP TABLE IF EXISTS `lime_question_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_question_attributes` (
  `qaid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL DEFAULT '0',
  `attribute` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`qaid`),
  KEY `question_attributes_idx2` (`qid`),
  KEY `question_attributes_idx3` (`attribute`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_question_attributes`
--

LOCK TABLES `lime_question_attributes` WRITE;
/*!40000 ALTER TABLE `lime_question_attributes` DISABLE KEYS */;
INSERT INTO `lime_question_attributes` VALUES (1,5,'statistics_showgraph','0',NULL),(2,5,'maximum_chars','100',NULL),(5,8,'statistics_showgraph','0',NULL),(6,8,'maximum_chars','100',NULL),(7,7,'display_type','1',NULL),(9,12,'display_type','1',NULL),(17,15,'statistics_showgraph','0',NULL),(18,17,'statistics_showgraph','0',NULL),(20,24,'display_type','1',NULL),(21,26,'display_type','1',NULL),(22,27,'display_type','1',NULL),(32,105,'display_type','1',NULL),(28,87,'display_type','1',NULL),(33,89,'display_type','1',NULL),(34,143,'display_type','1',NULL),(35,119,'display_type','1',NULL),(38,124,'display_type','1',NULL),(39,110,'hidden','1',NULL);
/*!40000 ALTER TABLE `lime_question_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_questions`
--

DROP TABLE IF EXISTS `lime_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `parent_qid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'T',
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preg` text COLLATE utf8mb4_unicode_ci,
  `help` text COLLATE utf8mb4_unicode_ci,
  `other` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `mandatory` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_order` int(11) NOT NULL,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `scale_id` int(11) NOT NULL DEFAULT '0',
  `same_default` int(11) NOT NULL DEFAULT '0' COMMENT 'Saves if user set to use the same default value across languages in default options dialog',
  `relevance` text COLLATE utf8mb4_unicode_ci,
  `modulename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`qid`,`language`),
  KEY `questions_idx2` (`sid`),
  KEY `questions_idx3` (`gid`),
  KEY `questions_idx4` (`type`),
  KEY `parent_qid_idx` (`parent_qid`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_questions`
--

LOCK TABLES `lime_questions` WRITE;
/*!40000 ALTER TABLE `lime_questions` DISABLE KEYS */;
INSERT INTO `lime_questions` VALUES (4,0,618961,3,'T','A1','Nombre:','','','N','Y',1,'es-CL',0,0,'1',''),(5,0,618961,3,'T','A2','Apellidos','','','N','Y',2,'es-CL',0,0,'1',NULL),(2,0,495246,2,'Y','P1','¿Se encuentra don XXXX?','','','N','Y',0,'es-CL',0,0,'1',NULL),(3,0,495246,2,'X','P2','Gracias por responder','','','N','N',1,'es-CL',0,0,'((.NAOK == \"Si\"))',''),(6,0,618961,3,'G','A3','Genero','','','N','Y',3,'es-CL',0,0,'1',NULL),(7,0,618961,3,'Y','A4','Acepta que le enviemos informacion a su correo?','','','N','Y',4,'es-CL',0,0,'1',''),(8,0,618961,3,'T','A5','Correo electronico','','','N','Y',5,'es-CL',0,0,'((618961X3X7.NAOK == \"Y\"))',''),(9,0,998811,4,'T','A1','Folio','','','N','Y',1,'es-CL',0,0,'1',''),(10,0,998811,4,'T','A2','Nombre encuestado','','','N','Y',2,'es-CL',0,0,'1',NULL),(11,0,998811,5,'X','C1','<style type=\"text/css\"><!--\r\n		@page { margin: 2cm }\r\n		p { margin-top: 0.04cm; margin-bottom: 0.04cm; direction: ltr; color: #000000; text-align: center; widows: 2; orphans: 2 }\r\n		p.western { font-family: \"Tahoma\", sans-serif; font-size: 10pt; so-language: es-ES }\r\n		p.cjk { font-family: \"Times New Roman\", serif; font-size: 10pt }\r\n		p.ctl { font-family: \"Times New Roman\", serif; font-size: 10pt; so-language: ar-SA; font-weight: bold }\r\n		a:visited { color: #800080 }\r\n		a.western:visited { so-language: es-CL }\r\n		a.cjk:visited { so-language: zh-CN }\r\n		a.ctl:visited { so-language: hi-IN }\r\n		a:link { color: #0000ff }\r\n	-->\r\n</style>\r\n<p align=\"left\" lang=\"es-ES\"> Buenos días/tardes. Mi nombre esXXX Estamos realizando un estudio para conocer la percepción del servicio de despacho Melón Hormigones. Sus respuestas serán informadas para realizar mejoras al servicio.  </p>\r\n','','','N','N',1,'es-CL',0,0,'1',''),(12,0,998811,5,'Y','C2','<p align=\"left\" lang=\"es-ES\">Para comenzar, quisiera saber si ¿es usted la persona que participó en la programación y recepción de hormigón de la semana pasada?</p>\r\n','','','N','Y',2,'es-CL',0,0,'1',''),(13,0,998811,5,'X','C3','<p align=\"left\" lang=\"es-ES\"><b>En caso que el cliente consulte:</b></p>\r\n\r\n<p align=\"left\" lang=\"es-ES\">Llamamos de parte de Praxis, una empresa contratada por Melón Hormigones para la ejecución de este estudio.</p>\r\n','','','N','N',3,'es-CL',0,0,'1',''),(14,0,998811,5,'X','C4','<p align=\"left\" lang=\"es-ES\"><b>Indicaciones: </b></p>\r\n\r\n<p align=\"left\" lang=\"es-ES\">Si el <u>contacto a encuestar no está</u>, anotar en los comentarios si es porque fue cambiada de obra, está de vacaciones, está con licencia, ya no trabaja en la empresa u otro. Dado lo anterior, anotar en los comentarios el nombre y apellido, número de teléfono y cargo de la persona que responde la encuesta.</p>\r\n\r\n<p align=\"left\" lang=\"es-ES\">Si el <u>contacto indica que no es la persona adecuada para responder la encuesta</u>, anotar en los comentarios el nombre y apellido, número de teléfono y cargo de la persona que responde la encuesta.</p>\r\n','','','N','N',4,'es-CL',0,0,'1',''),(15,0,998811,6,'!','P1','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P1. En relación a su experiencia con los despachos de hormigón de la semana anterior, utilizando una escala de 1 a 7 donde 1 es “muy insatisfecho” y 7 es “muy satisfecho”, ¿qué tan satisfecho se encuentra usted con el servicio entregado por Melón Hormigones?</span></h1>\r\n','','','N','Y',0,'es-CL',0,0,'1',''),(16,0,998811,6,'X','P2','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P2. ¿Qué tan satisfecho quedó con:</span></h1>\r\n','','','N','N',1,'es-CL',0,0,'1',''),(17,0,998811,6,'!','P3','<p align=\"left\" lang=\"es-ES\"><span style=\"font-size:18px;\">P2.1 Facilidad para comunicarse con programación y despacho</span></p>\r\n','','','N','Y',2,'es-CL',0,0,'1',''),(18,0,998811,6,'!','P4','<p align=\"left\">P2.2 Flexibilidad en la programación inicial del despacho y cambios posteriores</p>\r\n','','','N','Y',3,'es-CL',0,0,'1',''),(19,0,998811,6,'!','P5','<p align=\"left\" lang=\"es-ES\">P2.3 Puntualidad en la entrega del hormigón</p>\r\n','','','N','Y',4,'es-CL',0,0,'1',NULL),(20,0,998811,6,'!','P6','<p align=\"left\" lang=\"es-ES\">P2.4 Atención del Mixero</p>\r\n','','','N','Y',5,'es-CL',0,0,'1',NULL),(21,0,998811,6,'!','P7','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P3. En relación al despacho de la semana anterior, ¿llegó a la hora o atrasado?</span></h1>\r\n','','','N','Y',6,'es-CL',0,0,'1',''),(22,0,998811,6,'N','P8','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P4. ¿De cuántos minutos fue el atraso?</span></h1>\r\n','','Registrar minutos y clasificar en rango de tiempo','N','Y',7,'es-CL',0,0,'1',''),(23,0,998811,6,'!','P9','Rango de tiempo','','','N','Y',8,'es-CL',0,0,'1',NULL),(24,0,998811,6,'Y','P10','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P5. ¿Fue informado acerca del atraso?</span></h1>\r\n','','','N','Y',9,'es-CL',0,0,'1',''),(25,0,998811,6,'!','P11','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P6. Respecto de este atraso, ¿es 1era vez que ocurre, es poco frecuente o es habitual?</span></h1>\r\n','','','N','Y',10,'es-CL',0,0,'1',''),(26,0,998811,6,'Y','P12','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P7. Este último despacho, ¿Tuvo alguna reprogramación por parte de Melón?</span></h1>\r\n','','','N','Y',11,'es-CL',0,0,'1',NULL),(27,0,998811,6,'Y','P13','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P8. ¿Utiliza el portal melononline.cl para hacer seguimiento de la llegada del hormigón?</span></h1>\r\n','','','N','Y',12,'es-CL',0,0,'1',NULL),(28,0,998811,6,'!','P14','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P9. ¿Qué tan satisfecho se encuentra usted con este portal?</span></h1>\r\n','','','N','Y',13,'es-CL',0,0,'1',NULL),(29,0,998811,6,'!','P15','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P10. ¿Por qué no ha utilizado el portal?</span></h1>\r\n','','','Y','Y',14,'es-CL',0,0,'1',''),(30,0,998811,6,'!','P16','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P11. Utilizando la misma escala de 1 a 7, ¿Qué tan satisfecho se encuentra con los mensajes de texto recibidos informando el status de los despachos?</span></h1>\r\n','','','N','Y',15,'es-CL',0,0,'1',NULL),(31,0,998811,6,'T','P17','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\"><font color=\"#263238\"><font face=\"Arial, sans-serif\">P12. ¿Qué debe mejorar melón en el servicio de mensajería?</font></font></span></h1>\r\n','','','N','Y',16,'es-CL',0,0,'1',NULL),(53,0,569183,16,'S','P2','Duración Grabación','','Minutos y segundos','N','N',2,'es-CL',0,0,'1',NULL),(32,0,998811,6,'!','P18','<h1 lang=\"es-ES\"><span style=\"font-size:18px;\">P13. El servicio de despacho que recibió la semana pasada, ¿es mejor, igual o peor al recibido 2 meses atrás?</span></h1>\r\n','','','N','Y',17,'es-CL',0,0,'1',NULL),(52,0,569183,16,'S','P1','Ejecutivo de Venta','','','N','N',1,'es-CL',0,0,'1',NULL),(33,0,998811,4,'N','A4','Telefono gestionado','','','N','N',3,'es-CL',0,0,'1',NULL),(95,0,318492,22,'T','P6','<p>¿Cuál es el motivo de su nota?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',3,'es-CL',0,0,'(((!is_empty(318492X22X94.NAOK) && (318492X22X94.NAOK <= \"A4\"))))',NULL),(110,0,764876,23,'S','D1','Nombre del ejecutivo','','','N','Y',0,'es-CL',0,0,'1',''),(96,0,318492,22,'L','P7','<p>4. La atención del diseñador o jefe de proyecto</p>\r\n\r\n<p> </p>\r\n','','','N','Y',4,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(97,0,318492,22,'T','P8','<p>¿Cuál es el motivo de su nota?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',5,'es-CL',0,0,'(((!is_empty(318492X22X96.NAOK) && (318492X22X96.NAOK <= \"A4\"))))',NULL),(98,0,318492,22,'L','P9','<p>5. La calidad del trabajo realizado por el instalador</p>\r\n\r\n<p> </p>\r\n','','','N','Y',6,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(94,0,318492,22,'L','P5','<p>3. La coordinación de su proyecto</p>\r\n\r\n<p> </p>\r\n','','','N','Y',2,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',''),(92,0,318492,21,'T','P3','<p>¿Qué falta para que esa nota sea 9 o 10?</p>\r\n\r\n<p> </p>\r\n','','<span style=\"font-size:18px;\">Solo si la nota de recomendacion es menor a 9</span>','N','N',3,'es-CL',0,0,'(((!is_empty(318492X21X90.NAOK) && (318492X21X90.NAOK <= \"A9\"))))',''),(93,0,318492,22,'X','P4','<p>En una escala de 1 a 7, donde 1 es “totalmente insatisfecho” y 7 “totalmente satisfecho”, con que nota califica los atributos que le mencionaré a continuación:</p>\r\n\r\n<p> </p>\r\n','','','N','N',1,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(55,0,569183,16,'S','P4','Nombre Cliente:','','','N','N',4,'es-CL',0,0,'1',NULL),(56,0,569183,16,'S','P5','<label for=\"encuesta_5191\">RUT CLIENTE:</label>','','','N','N',5,'es-CL',0,0,'1',NULL),(57,0,569183,16,'D','P6','<label for=\"encuesta_5192\">FECHA VENTA:</label>','','','N','N',6,'es-CL',0,0,'1',NULL),(91,0,318492,21,'T','P2','<p>2. ¿Cuáles son las razones de esta nota?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',2,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(90,0,318492,21,'L','P1','<p>1. En una escala de 0 a 10, donde “0” significa “no lo recomendaría en lo absoluto” y “10” significa “definitivamente recomendaría”, ¿Qué tanto recomendaría a Easy a un amigo o colega con respecto al servicio entregado en el proyecto señalado?:Seleccione;0;1;2;3;4;5;6;7;8;9;10</p>\r\n\r\n<p> </p>\r\n','','','N','Y',1,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',''),(89,0,318492,20,'Y','S3','<p>Sr/Sra XXXX el proyecto que contrató con Easy, ya fue instalado?</p>\r\n\r\n<p> </p>\r\n','','<span style=\"font-size:18px;\">[Tip: Si el cliente entrega información de que su proyecto no ha sido instalado o nunca contrató este tipo de servicios, terminar el formulario y agradecer.]</span>','N','Y',3,'es-CL',0,0,'((318492X20X87.NAOK == \"Y\"))',''),(51,0,264315,15,'T','P1','Folio','','folio del cliente','N','Y',1,'es-CL',0,0,'1',NULL),(54,0,569183,16,'T','P3','Link Grabación','','','N','N',3,'es-CL',0,0,'1',NULL),(87,0,318492,20,'Y','S1','<p>Buenos días/tardes, mi nombre es XXXX y lo llamo por encargo de Easy. Quisiera comunicarme con el Sr. o la Sra. XXXX.</p>\r\n\r\n<p> </p>\r\n','','','N','Y',1,'es-CL',0,0,'1',''),(88,0,318492,20,'X','S2','<p>Don/Doña XXXX, el motivo de mi llamada es para conocer su opinión sobre la calidad de atención y el servicio que le entregó EASY en la instalación de XXXX [proyecto instalado].</p>\r\n\r\n<p> </p>\r\n','','','N','N',2,'es-CL',0,0,'((318492X20X87.NAOK == \"Y\"))',''),(58,0,569183,16,'!','P7','<label for=\"encuesta_5193\">SELECCIONAR CALL VENTA</label>','','','Y','Y',7,'es-CL',0,0,'1',NULL),(59,0,569183,17,'L','P8','PRESENTA EL PRODUCTO TARJETA SCOTIABANK CENCOSUD MASTERCARD\"?','','','N','Y',2,'es-CL',0,0,'1',''),(60,0,569183,17,'L','P9','PERSONALIZA AL MENOS DOS VECES DURANTE LA CONVERSACION, IDENTIFICANDO EL CLIENTE, TRATANDOLO POR EL NOMBRE Y UTILIZANDO COMO FORMA DE TRATAMIENTO \"DON, DOÑA, SEÑOR, SEÑORA O SEÑORITA\", EVITANDO INFORMALIDAD. ?','','','N','Y',3,'es-CL',0,0,'1',NULL),(61,0,569183,17,'L','P10','ACEPTA CON UN SI, YA, BUENO, ESTOY INTERESADO U OK?','','','N','Y',4,'es-CL',0,0,'1',NULL),(62,0,569183,17,'L','P11','SEÑALA PROMOCIONES VIGENTES? DEL MES','','','N','Y',5,'es-CL',0,0,'1',''),(63,0,569183,17,'L','P12','SEÑALA BENEFICIOS DE LA NUEVA TARJETA ? OBLIGACION MENCIONAR AL MENOS 4','','','N','Y',6,'es-CL',0,0,'1',''),(64,0,569183,17,'L','P13','INFORMA AL CLIENTE QUE SE PODRA INCORPORAR, SI ASÍ­ LO DESEA, UN SEGURO DE DESGRAVAMEN? (ESTO NO ES UNA VENTA, SOLO INFORMACION Y EL CLIENTE EN TERRENO VERA SI LO TOMA O NO)','','','N','Y',7,'es-CL',0,0,'1',''),(65,0,569183,17,'L','P14','INFORMA FECHA DE VIGENCIA PARA HACER EFECTIVO EL BONO DE XXX?','','','N','Y',8,'es-CL',0,0,'1',''),(66,0,569183,17,'L','P15','INFORMA EL LUGAR EN EL CUAL DEBE REALZAR LAS COMPRAS PARA HACER VALIDO EL BONO DE 20.000? RESALTAR QUE PUEDE SER EN CUALQUIER COMERCIO','','','N','Y',1,'es-CL',0,0,'1',''),(67,0,569183,17,'L','P16','INFORMA QUE ESTA LLAMANDO DE TARJETA SCOTIABANK CENCOSUD','','','N','Y',0,'es-CL',0,0,'1',''),(68,0,569183,18,'L','P17','SE PRESENTA CON EL NOMBRE?','','','N','Y',1,'es-CL',0,0,'1',''),(69,0,569183,18,'L','P18','UTILIZA LENGUAJE CLARO Y PRECISO (INCLUYE MODULACION, DICCION, FLUIDEZ, TONO Y RITMO ADECUADO)?','','','N','Y',2,'es-CL',0,0,'1',NULL),(70,0,569183,18,'L','P19','LA INFORMACION ENTREGADA ES FIDEDIGNA?','','','N','Y',3,'es-CL',0,0,'1',NULL),(71,0,569183,18,'L','P20','ENTREGA RESPUESTAS CLARAS AL CLIENTE?','','','N','Y',4,'es-CL',0,0,'1',NULL),(72,0,569183,18,'L','P21','INFORMA EL MONTO DE LA COBERTURA DEL SEGURO DE DESGRAVAMEN?','','','N','Y',5,'es-CL',0,0,'1',NULL),(73,0,569183,18,'L','P22','<label for=\"encuesta_5210\">INFORMA EL COSTO MENSUAL DEL SEGURO QUE ES DE $690 ?</label>','','','N','Y',6,'es-CL',0,0,'1',NULL),(74,0,569183,18,'L','P23','<label for=\"encuesta_5211\">SEÑALA QUE LA CONTRATACION DE TODOS LOS SEGUROS ES VOLUNTARIA?</label>','','','N','Y',7,'es-CL',0,0,'1',NULL),(75,0,569183,18,'L','P24','<label for=\"encuesta_5212\">CONFIRMACION DE AGENDA. </label>','','','N','Y',8,'es-CL',0,0,'1',NULL),(76,0,569183,19,'L','P25','NOMBRE','','','N','Y',1,'es-CL',0,0,'1',NULL),(77,0,569183,19,'L','P26','RUT','','','N','Y',2,'es-CL',0,0,'1',NULL),(78,0,569183,19,'L','P27','<label for=\"encuesta_5216\">FECHA DE VISITA</label>','','','N','Y',3,'es-CL',0,0,'1',NULL),(79,0,569183,19,'L','P28','TIENDA','','','N','Y',4,'es-CL',0,0,'1',NULL),(80,0,569183,19,'L','P29','<label for=\"encuesta_5218\">INFORMA AL CLIENTE QUE LA ATENCION SERA GRABADA?</label>','','','N','Y',5,'es-CL',0,0,'1',NULL),(81,0,569183,19,'L','P30','<label for=\"encuesta_5219\">INFORMA SOBRE EL BONO DE $xxxx PARA SU PRIMERA COMPRA?</label>','','','N','Y',6,'es-CL',0,0,'1',NULL),(82,0,569183,19,'L','P31','<label for=\"encuesta_5220\">REALIZA PREGUNTA DE CIERRE: \"¿LE INTERESA OBTENER ESTA TARJETA?\"</label>','','','N','Y',7,'es-CL',0,0,'1',NULL),(83,0,569183,19,'L','P32','<label for=\"encuesta_5221\">INFORMA QUE EL COSTO MENSUAL DE ADMINISTRACION SERA $2,300 APROXIMADAMENTE?</label>','','','N','Y',8,'es-CL',0,0,'1',NULL),(84,0,569183,19,'L','P33','<label for=\"encuesta_5222\">INFORMA LA FECHA DE VIGENCIA DE LA CAMPAÑA? (RETIRO DE TARJETA)</label>','','','N','Y',9,'es-CL',0,0,'1',NULL),(85,0,569183,19,'L','P34','<label for=\"encuesta_5223\">INFORMA QUE EL DESCUENTO SE ABONARA AL EECC SIGUIENTE O SUBSIGUIENTE?</label>','','','N','Y',10,'es-CL',0,0,'1',NULL),(86,0,569183,19,'T','P35','COMENTARIOS','','','N','N',11,'es-CL',0,0,'1',NULL),(99,0,318492,22,'T','P10','<p>¿Cuál es el motivo de su nota?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',7,'es-CL',0,0,'(((!is_empty(318492X22X98.NAOK) && (318492X22X98.NAOK <= \"A4\"))))',NULL),(100,0,318492,22,'L','P11','<p>6. El cumplimiento del plazo del trabajo según lo que indicó el diseñador</p>\r\n\r\n<p> </p>\r\n','','','N','Y',8,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(101,0,318492,22,'T','P12','<p>¿Cuál es el motivo de su nota?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',9,'es-CL',0,0,'(((!is_empty(318492X22X100.NAOK) && (318492X22X100.NAOK <= \"A4\"))))',NULL),(102,0,318492,22,'L','P13','<p>7. Resolución de problemas e inconvenientes</p>\r\n\r\n<p> </p>\r\n','','','N','Y',10,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',''),(103,0,318492,22,'T','P14','<p>¿Cuál es el motivo de su nota?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',11,'es-CL',0,0,'(((!is_empty(318492X22X102.NAOK) && (318492X22X102.NAOK <= \"A4\"))))',NULL),(104,0,318492,22,'T','P15','<p>8. Tiene algún comentario o sugerencia</p>\r\n\r\n<p> </p>\r\n','','','N','N',12,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(105,0,318492,22,'Y','P16','<p>9. ¿Le gustaría recibir información sobre productos y promociones de Easy por mail?</p>\r\n\r\n<p> </p>\r\n','','','N','Y',13,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',''),(106,0,318492,22,'S','P17','<p>Email</p>\r\n\r\n<p> </p>\r\n','','','N','Y',14,'es-CL',0,0,'((318492X22X105.NAOK == \"Y\"))',NULL),(107,0,318492,22,'X','P18','<p>Don/Sra XXXX, en nombre de Easy agradezco su atención y que tenga muy buenos días/tardes.</p>\r\n\r\n<p> </p>\r\n','','','N','N',15,'es-CL',0,0,'((318492X20X89.NAOK == \"Y\"))',NULL),(108,0,318492,22,'X','P19','<p>Disculpe las molestias que tenga muy buenos días/tardes.</p>\r\n\r\n<p> </p>\r\n','','','N','N',16,'es-CL',0,0,'((318492X20X87.NAOK == \"N\"))',''),(109,0,318492,22,'X','P20','<p>Muchas gracias, que tenga un buen día</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n','','','N','N',17,'es-CL',0,0,'((318492X20X89.NAOK == \"N\"))',NULL),(111,0,764876,23,'S','D2','Nombre del cliente','','','N','Y',1,'es-CL',0,0,'1',NULL),(112,0,764876,23,'S','D3','Rut del cliente','','','N','Y',2,'es-CL',0,0,'1',NULL),(113,0,764876,23,'N','D4','Número de atención (numero de caso)','','SOLO NUMEROS','N','Y',3,'es-CL',0,0,'1',''),(114,0,764876,23,'D','D5','Fecha e la atención','','','N','Y',4,'es-CL',0,0,'1',NULL),(115,0,764876,24,'L','P1','Ejecutivo saluda (Buenos días/tardes/noches)','','','N','Y',0,'es-CL',0,0,'1',NULL),(116,0,764876,24,'L','P2','Ejecutivo menciona en el saludo \"Asistencia Cencosud, mi nombre es XXX, ¿en qué le puedo ayudar?\"','','','N','Y',1,'es-CL',0,0,'1',NULL),(117,0,764876,24,'L','P3','Ejecutivo consulta nombre del cliente','','','N','Y',2,'es-CL',0,0,'1',NULL),(118,0,764876,24,'L','P4','Ejecutivo confirma datos de cliente (Rut, mail y teléfono y si Rut no corresponde al del titular de la póliza, ejecutivo solicita el del titular?)','','','N','Y',3,'es-CL',0,0,'1',NULL),(119,0,764876,24,'Y','P5','Cliente tiene plan vigente?','','','N','Y',4,'es-CL',0,0,'1',''),(120,0,764876,25,'L','P6','Ejecutivo indica plazo para hacer efectivo el cobro del beneficio','','','N','Y',0,'es-CL',0,0,'((764876X24X119.NAOK == \"Y\"))',NULL),(121,0,764876,25,'L','P7','Ejecutivo explica dónde puede hacer efectivo el beneficio y qué podrá comprar con éste','','','N','Y',1,'es-CL',0,0,'((764876X24X119.NAOK == \"Y\"))',NULL),(122,0,764876,25,'L','P8','Ejecutivo explica cómo puede hacer efectivo el beneficio y a qué monto corresponde','','','N','Y',2,'es-CL',0,0,'((764876X24X119.NAOK == \"Y\"))',NULL),(123,0,764876,25,'L','P9','Ejecutivo le indica el número de caso a cliente','','','N','Y',3,'es-CL',0,0,'((764876X24X119.NAOK == \"Y\"))',''),(124,0,764876,25,'Y','P10','Cliente acepta Gcard?','','','N','Y',4,'es-CL',0,0,'((764876X24X119.NAOK == \"Y\"))',''),(125,0,764876,25,'!','P11','Cliente vive en','','','N','Y',5,'es-CL',0,0,'((764876X25X124.NAOK == \"N\"))',''),(126,0,764876,26,'L','P12','Ejecutivo entrega opción de devolución a través de cheque','','','N','Y',0,'es-CL',0,0,'((764876X25X125.NAOK == \"A1\"))',''),(127,0,764876,26,'L','P13','Ejecutivo explica las condiciones de la devolución con cheque (plazos y retiro)','','','N','Y',1,'es-CL',0,0,'((764876X25X125.NAOK == \"A1\"))',NULL),(128,0,764876,26,'L','P14','Ejecutivo consulta que opción elige el cliente','','','N','Y',2,'es-CL',0,0,'((764876X25X125.NAOK == \"A1\"))',NULL),(129,0,764876,26,'L','P15','Ejecutivo informa el número de registro correspondiente','','','N','Y',3,'es-CL',0,0,'((764876X25X125.NAOK == \"A1\"))',NULL),(130,0,764876,27,'L','P16','Ejecutivo entrega opción de devolución a través de transferencia electrónica','','','N','Y',0,'es-CL',0,0,'((764876X25X125.NAOK == \"A2\"))',NULL),(131,0,764876,27,'L','P17','Ejecutivo explica las condiciones de la devolución con cheque (plazos)','','','N','Y',1,'es-CL',0,0,'((764876X25X125.NAOK == \"A2\"))',NULL),(132,0,764876,27,'L','P18','Ejecutivo explica las condiciones de la devolución con cheque (plazos)','','','N','Y',2,'es-CL',0,0,'((764876X25X125.NAOK == \"A2\"))',NULL),(133,0,764876,27,'L','P19','Ejecutivo informa el número de registro correspondiente','','','N','Y',3,'es-CL',0,0,'((764876X25X125.NAOK == \"A2\"))',NULL),(134,0,764876,28,'L','P20','Ejecutivo le informa plazo a cliente en el que lo contactarán para confirmar su situación','','','N','Y',0,'es-CL',0,0,'((764876X24X119.NAOK == \"N\"))',NULL),(135,0,764876,28,'L','P21','Ejecutivo le informa el número de registro correspondiente','','','N','Y',1,'es-CL',0,0,'((764876X24X119.NAOK == \"N\"))',NULL),(136,0,764876,29,'L','P22','El lenguaje utilizado por el Ejecutivo es adecuado y formal?','','','N','Y',0,'es-CL',0,0,'1',NULL),(137,0,764876,29,'L','P23','Entrega respuestas claras al cliente?','','','N','Y',1,'es-CL',0,0,'1',NULL),(138,0,764876,29,'L','P24','Obliga al cliente a tomar la Gif card? ( fuerza esta opción, pone condiciones para optar a gcard y no entrega alternativas?','','','N','Y',2,'es-CL',0,0,'1',NULL),(139,0,764876,29,'L','P25','No deja al cliente en espera por más de 30 segundos sin previo aviso? (silencios bruscos y prolongados)','','','N','Y',3,'es-CL',0,0,'1',NULL),(140,0,764876,29,'L','P26','Realiza chequeo de conformidad? …Le puedo atender en algo más?. Tiene dudas sobre la información entregada?','','','N','Y',4,'es-CL',0,0,'1',NULL),(141,0,764876,30,'L','P27','El cliente se comprendido y asesorado por el ejecutivo?','','','N','Y',0,'es-CL',0,0,'1',NULL),(142,0,764876,30,'L','P28','Se logra en esta atención dar respuesta a las inquietudes del cliente en forma clara?','','','N','Y',1,'es-CL',0,0,'1',NULL),(143,0,764876,30,'Y','P29','Cliente queda satisfecho y conforme con el proceso de devolución y medio de pago indicado?','','','N','Y',2,'es-CL',0,0,'1',NULL),(144,0,764876,30,'!','P30','Motivos:','','','Y','Y',3,'es-CL',0,0,'((764876X30X143.NAOK == \"N\"))',''),(145,0,764876,30,'T','P31','Observaciones de la evaluación general','','','N','N',4,'es-CL',0,0,'1',NULL),(146,0,764876,23,'!','p123834','dfgh','','','N','N',5,'es-CL',0,0,'1',NULL);
/*!40000 ALTER TABLE `lime_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_quickmenu_sortorder`
--

DROP TABLE IF EXISTS `lime_quickmenu_sortorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_quickmenu_sortorder` (
  `uid` int(11) NOT NULL,
  `button_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`button_name`,`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_quickmenu_sortorder`
--

LOCK TABLES `lime_quickmenu_sortorder` WRITE;
/*!40000 ALTER TABLE `lime_quickmenu_sortorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_quickmenu_sortorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_quota`
--

DROP TABLE IF EXISTS `lime_quota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_quota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qlimit` int(11) DEFAULT NULL,
  `action` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `autoload_url` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `quota_idx2` (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_quota`
--

LOCK TABLES `lime_quota` WRITE;
/*!40000 ALTER TABLE `lime_quota` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_quota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_quota_languagesettings`
--

DROP TABLE IF EXISTS `lime_quota_languagesettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_quota_languagesettings` (
  `quotals_id` int(11) NOT NULL AUTO_INCREMENT,
  `quotals_quota_id` int(11) NOT NULL DEFAULT '0',
  `quotals_language` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `quotals_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotals_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotals_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotals_urldescrip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`quotals_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_quota_languagesettings`
--

LOCK TABLES `lime_quota_languagesettings` WRITE;
/*!40000 ALTER TABLE `lime_quota_languagesettings` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_quota_languagesettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_quota_members`
--

DROP TABLE IF EXISTS `lime_quota_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_quota_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `quota_id` int(11) DEFAULT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sid` (`sid`,`qid`,`quota_id`,`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_quota_members`
--

LOCK TABLES `lime_quota_members` WRITE;
/*!40000 ALTER TABLE `lime_quota_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_quota_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_saved_control`
--

DROP TABLE IF EXISTS `lime_saved_control`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_saved_control` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL DEFAULT '0',
  `srid` int(11) NOT NULL DEFAULT '0',
  `identifier` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `saved_thisstep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `saved_date` datetime NOT NULL,
  `refurl` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`scid`),
  KEY `saved_control_idx2` (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_saved_control`
--

LOCK TABLES `lime_saved_control` WRITE;
/*!40000 ALTER TABLE `lime_saved_control` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_saved_control` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_sessions`
--

DROP TABLE IF EXISTS `lime_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_sessions` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` longblob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_sessions`
--

LOCK TABLES `lime_sessions` WRITE;
/*!40000 ALTER TABLE `lime_sessions` DISABLE KEYS */;
INSERT INTO `lime_sessions` VALUES ('ku83ks48ktmdsahx7y32nu3y946a6hyz',1513102025,'admin'),('kbmxz98y8ut2cwwfg2r5rwu9sgi6zy28',1513102262,'admin'),('k68xymddv7xipqvyi5ku7suwzj3r4b94',1513102272,'admin'),('vvcsenkwq8hse9d4d7ya6nkdf4b8dkdi',1513102311,'admin'),('uv8pr55v4gccjev5xhupcry2zbzbmeku',1513102362,'admin'),('wqc7fbjvchg79j99qbxb4q46ufwdxrwk',1513102462,'admin'),('e826ynebjsztkrabp2fhr7mczwqbkecg',1513102490,'admin'),('dts62ywjg2h25x7u9i7wt9xv28rq9k62',1513102518,'admin'),('qrcacjwcipytxdqewvv6gjxj6hgiziyk',1513102528,'admin'),('asukhyde37hggshr2h52c7dfsq4tzxbe',1513102564,'admin'),('mhxmby44gsymj2kma2888sfxsf9gxhqt',1513102582,'admin'),('zh8kn9gnvtxtzxuttja4w5xx6ppnrjsd',1513102595,'admin'),('h2nxqpe98xhrzswas9u8xncviyu7342w',1513102604,'admin'),('hr75w2x384iqmju8zyc4ppwdwu86f7xf',1513102694,'admin'),('meniqf3yeqepjqszdqr323zgifnntwpg',1513102779,'admin'),('mx8tpng4958w7k9ktzhuqdk4h5dhtj4b',1513102853,'admin'),('7ph5ama2v6kkd44ams669wueshq3z5c3',1513103439,'admin');
/*!40000 ALTER TABLE `lime_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_settings_global`
--

DROP TABLE IF EXISTS `lime_settings_global`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_settings_global` (
  `stg_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `stg_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`stg_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_settings_global`
--

LOCK TABLES `lime_settings_global` WRITE;
/*!40000 ALTER TABLE `lime_settings_global` DISABLE KEYS */;
INSERT INTO `lime_settings_global` VALUES ('DBVersion','263'),('SessionName','D8^+;/gDz5^AmSEbh2>PZf,f$0u(q>,6UjAox)4t>q7,F[m/m-_Irk0v{\'}mD*%x'),('sitename','LimeSurvey'),('siteadminname','Administrator'),('siteadminemail','segundogaldames@gmail.com'),('siteadminbounce','segundogaldames@gmail.com'),('defaultlang','es-CL'),('AssetsVersion','2725'),('last_question_1_318492','89'),('last_question_sid_1','764876'),('last_question_gid_1','23'),('last_question_1_495246','3'),('last_question_1_495246_gid','2'),('restrictToLanguages',''),('defaulthtmleditormode','inline'),('defaultquestionselectormode','default'),('defaulttemplateeditormode','default'),('defaulttemplate','default'),('x_frame_options','allow'),('admintheme','Dark_Sky'),('emailmethod','smtp'),('emailsmtphost','webmail.metasolutions.cl'),('emailsmtppassword','segundogaldames2015'),('bounceaccounthost',''),('bounceaccounttype','off'),('bounceencryption','off'),('bounceaccountuser',''),('bounceaccountpass',''),('emailsmtpssl',''),('emailsmtpdebug','0'),('emailsmtpuser','sgaldames@metasolutions.cl'),('filterxsshtml','1'),('shownoanswer','1'),('showxquestions','choose'),('showgroupinfo','choose'),('showqnumcode','choose'),('repeatheadings','25'),('maxemails','50'),('iSessionExpirationTime','7200'),('ipInfoDbAPIKey',''),('pdffontsize','9'),('pdfshowheader','N'),('pdflogowidth','50'),('pdfheadertitle',''),('pdfheaderstring',''),('bPdfQuestionFill','1'),('bPdfQuestionBold','0'),('bPdfQuestionBorder','1'),('bPdfResponseBorder','1'),('googleMapsAPIKey',''),('googleanalyticsapikey',''),('googletranslateapikey',''),('force_ssl','neither'),('surveyPreview_require_Auth','1'),('RPCInterface','json'),('rpc_publish_api','1'),('characterset','auto'),('sideMenuBehaviour','alwaysClosed'),('timeadjust','+0 minutes'),('usercontrolSameGroupPolicy','1'),('show_logo','hide'),('show_last_survey_and_question','hide'),('boxes_by_row','5'),('boxes_offset','0'),('last_question_1_618961','4'),('last_question_1_618961_gid','3'),('last_survey_10','618961'),('last_question_1_998811','14'),('last_question_1_998811_gid','5'),('quickaction_1','0'),('last_question_1','146'),('last_survey_1','764876'),('queXMLBackgroundColourQuestion','241'),('queXMLPageFormat','A4'),('queXMLPageOrientation','P'),('queXMLEdgeDetectionFormat','lines'),('queXMLBackgroundColourSection','221'),('queXMLSectionHeight','18'),('queXMLResponseLabelFontSize','7.5'),('queXMLResponseLabelFontSizeSmall','6.5'),('queXMLResponseTextFontSize','10'),('queXMLQuestionnaireInfoMargin','5'),('queXMLSingleResponseHorizontalHeight','10.5'),('queXMLSingleResponseAreaHeight','9'),('queXMLAllowSplittingVas','0'),('queXMLAllowSplittingMatrixText','1'),('queXMLAllowSplittingSingleChoiceVertical','1'),('queXMLAllowSplittingSingleChoiceHorizontal','1'),('last_question_1_264315','51'),('last_question_1_264315_gid','15'),('last_question_1_569183','68'),('last_question_1_569183_gid','18'),('last_question_1_318492_gid','20'),('last_question_1_764876','146'),('last_question_1_764876_gid','23');
/*!40000 ALTER TABLE `lime_settings_global` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_264315`
--

DROP TABLE IF EXISTS `lime_survey_264315`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_264315` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipaddr` text COLLATE utf8mb4_unicode_ci,
  `refurl` text COLLATE utf8mb4_unicode_ci,
  `264315X15X51` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_264315_21835` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_264315`
--

LOCK TABLES `lime_survey_264315` WRITE;
/*!40000 ALTER TABLE `lime_survey_264315` DISABLE KEYS */;
INSERT INTO `lime_survey_264315` VALUES (1,NULL,'1980-01-01 00:00:00',1,'es-CL','127.0.0.1','http://localhost:8080/limesurvey/index.php/admin/survey/sa/view/surveyid/264315','123456789'),(2,'2xizWnkUWDOaqLw','1980-01-01 00:00:00',1,'es-CL','127.0.0.1',NULL,'123456789');
/*!40000 ALTER TABLE `lime_survey_264315` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_318492`
--

DROP TABLE IF EXISTS `lime_survey_318492`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_318492` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `ipaddr` text COLLATE utf8mb4_unicode_ci,
  `refurl` text COLLATE utf8mb4_unicode_ci,
  `318492X20X87` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X20X88` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X20X89` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X21X90` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X21X91` text COLLATE utf8mb4_unicode_ci,
  `318492X21X92` text COLLATE utf8mb4_unicode_ci,
  `318492X22X93` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X94` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X95` text COLLATE utf8mb4_unicode_ci,
  `318492X22X96` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X97` text COLLATE utf8mb4_unicode_ci,
  `318492X22X98` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X99` text COLLATE utf8mb4_unicode_ci,
  `318492X22X100` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X101` text COLLATE utf8mb4_unicode_ci,
  `318492X22X102` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X103` text COLLATE utf8mb4_unicode_ci,
  `318492X22X104` text COLLATE utf8mb4_unicode_ci,
  `318492X22X105` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X106` text COLLATE utf8mb4_unicode_ci,
  `318492X22X107` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X108` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `318492X22X109` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_318492_2710` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_318492`
--

LOCK TABLES `lime_survey_318492` WRITE;
/*!40000 ALTER TABLE `lime_survey_318492` DISABLE KEYS */;
INSERT INTO `lime_survey_318492` VALUES (1,NULL,NULL,NULL,'es-CL','2018-02-08 16:57:37','2018-02-08 16:57:37','127.0.0.1','http://localhost:8080/prueba-lime/encuestasusuarios/encuestaUsuarioContacto/4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_survey_318492` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_318492_timings`
--

DROP TABLE IF EXISTS `lime_survey_318492_timings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_318492_timings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interviewtime` float DEFAULT NULL,
  `318492X20time` float DEFAULT NULL,
  `318492X20X87time` float DEFAULT NULL,
  `318492X20X88time` float DEFAULT NULL,
  `318492X20X89time` float DEFAULT NULL,
  `318492X21time` float DEFAULT NULL,
  `318492X21X90time` float DEFAULT NULL,
  `318492X21X91time` float DEFAULT NULL,
  `318492X21X92time` float DEFAULT NULL,
  `318492X22time` float DEFAULT NULL,
  `318492X22X93time` float DEFAULT NULL,
  `318492X22X94time` float DEFAULT NULL,
  `318492X22X95time` float DEFAULT NULL,
  `318492X22X96time` float DEFAULT NULL,
  `318492X22X97time` float DEFAULT NULL,
  `318492X22X98time` float DEFAULT NULL,
  `318492X22X99time` float DEFAULT NULL,
  `318492X22X100time` float DEFAULT NULL,
  `318492X22X101time` float DEFAULT NULL,
  `318492X22X102time` float DEFAULT NULL,
  `318492X22X103time` float DEFAULT NULL,
  `318492X22X104time` float DEFAULT NULL,
  `318492X22X105time` float DEFAULT NULL,
  `318492X22X106time` float DEFAULT NULL,
  `318492X22X107time` float DEFAULT NULL,
  `318492X22X108time` float DEFAULT NULL,
  `318492X22X109time` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_318492_timings`
--

LOCK TABLES `lime_survey_318492_timings` WRITE;
/*!40000 ALTER TABLE `lime_survey_318492_timings` DISABLE KEYS */;
INSERT INTO `lime_survey_318492_timings` VALUES (1,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_survey_318492_timings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_569183`
--

DROP TABLE IF EXISTS `lime_survey_569183`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_569183` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `ipaddr` text COLLATE utf8mb4_unicode_ci,
  `569183X16X52` text COLLATE utf8mb4_unicode_ci,
  `569183X16X53` text COLLATE utf8mb4_unicode_ci,
  `569183X16X54` text COLLATE utf8mb4_unicode_ci,
  `569183X16X55` text COLLATE utf8mb4_unicode_ci,
  `569183X16X56` text COLLATE utf8mb4_unicode_ci,
  `569183X16X57` datetime DEFAULT NULL,
  `569183X16X58` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X16X58other` text COLLATE utf8mb4_unicode_ci,
  `569183X17X67` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X66` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X59` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X60` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X61` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X62` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X63` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X64` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X17X65` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X68` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X69` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X70` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X71` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X72` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X73` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X74` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X18X75` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X76` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X77` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X78` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X79` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X80` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X81` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X82` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X83` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X84` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X85` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `569183X19X86` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_569183_10056` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_569183`
--

LOCK TABLES `lime_survey_569183` WRITE;
/*!40000 ALTER TABLE `lime_survey_569183` DISABLE KEYS */;
INSERT INTO `lime_survey_569183` VALUES (1,NULL,'2018-02-07 16:44:53',4,'es-CL','2018-02-07 16:42:11','2018-02-07 16:44:53','127.0.0.1','David Perez','1:30','http://grabacion','Felipe Neira','16456983-4','2018-01-23 00:00:00','A1','','A1','A1','A1','A2','A1','A1','A1','A1','A1','A1','A1','A1','A1','A2','A2','A3','A3','A1','A1','A1','A1','A1','A2','A3','A2','A1','A1','El ejecutivo no realiza buen trabajo');
/*!40000 ALTER TABLE `lime_survey_569183` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_618961`
--

DROP TABLE IF EXISTS `lime_survey_618961`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_618961` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int(11) DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` datetime NOT NULL,
  `datestamp` datetime NOT NULL,
  `refurl` text COLLATE utf8mb4_unicode_ci,
  `618961X3X4` text COLLATE utf8mb4_unicode_ci,
  `618961X3X5` text COLLATE utf8mb4_unicode_ci,
  `618961X3X6` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `618961X3X7` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `618961X3X8` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_survey_token_618961_41210` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_618961`
--

LOCK TABLES `lime_survey_618961` WRITE;
/*!40000 ALTER TABLE `lime_survey_618961` DISABLE KEYS */;
INSERT INTO `lime_survey_618961` VALUES (1,NULL,'2017-11-29 10:33:25',1,'es-CL','2017-11-29 10:32:56','2017-11-29 10:33:25','http://localhost:8080/limesurvey/index.php/admin/survey/sa/view/surveyid/618961','Segundo','Galdames','M','Y','segundogaldames@hotmail.com'),(2,'jZMPaJvzYznzN3O','2017-11-29 10:41:05',1,'es-CL','2017-11-29 10:40:37','2017-11-29 10:41:05',NULL,'Pedro','Morales','M','Y','pedromorales@gmail.com'),(3,'jZMPaJvzYznzN3O','2017-11-29 10:43:20',1,'es-CL','2017-11-29 10:42:52','2017-11-29 10:43:20',NULL,'Javiera','Galdames','F','Y','javigaldamesg@gmail.com'),(4,'jZMPaJvzYznzN3O','2017-11-29 10:45:34',1,'es-CL','2017-11-29 10:45:11','2017-11-29 10:45:34',NULL,'Kathy','Kuhn','F','N',NULL),(5,'jZMPaJvzYznzN3O','2017-11-29 11:49:29',1,'es-CL','2017-11-29 11:22:01','2017-11-29 11:49:29','http://localhost:8080/limesurvey/index.php/admin/tokens/sa/browse/surveyid/618961','Maritza','Gonzalez','F','Y','mgonzalez@hotmail.com'),(6,'jZMPaJvzYznzN3O','2017-11-29 11:50:37',1,'es-CL','2017-11-29 11:49:59','2017-11-29 11:50:37',NULL,'Juanita','Ramirez','F','Y','juanitar@metasolutions.cl'),(7,'jZMPaJvzYznzN3O','2017-11-29 11:52:06',1,'es-CL','2017-11-29 11:51:51','2017-11-29 11:52:06',NULL,'Manuel','ESpinoza','M','N',NULL),(8,'jZMPaJvzYznzN3O','2017-11-29 11:55:16',1,'es-CL','2017-11-29 11:55:02','2017-11-29 11:55:16','','Laura','Lopez','F','N',''),(9,'jZMPaJvzYznzN3O',NULL,0,'es-CL','2017-11-29 12:00:21','2017-11-29 12:00:21','http://localhost:8080/limesurvey/index.php/admin/survey/sa/view/surveyid/618961',NULL,NULL,NULL,NULL,NULL),(10,'jZMPaJvzYznzN3O','2017-11-29 12:07:10',1,'es-CL','2017-11-29 12:06:49','2017-11-29 12:07:10','http://localhost:8080/limesurvey/index.php/618961?newtest=Y&lang=es-CL','Luis','Jara','M','Y','luchojara@mega.cl');
/*!40000 ALTER TABLE `lime_survey_618961` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_links`
--

DROP TABLE IF EXISTS `lime_survey_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_links` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_invited` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  PRIMARY KEY (`participant_id`,`token_id`,`survey_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_links`
--

LOCK TABLES `lime_survey_links` WRITE;
/*!40000 ALTER TABLE `lime_survey_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `lime_survey_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_survey_url_parameters`
--

DROP TABLE IF EXISTS `lime_survey_url_parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_survey_url_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `parameter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targetqid` int(11) DEFAULT NULL,
  `targetsqid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_survey_url_parameters`
--

LOCK TABLES `lime_survey_url_parameters` WRITE;
/*!40000 ALTER TABLE `lime_survey_url_parameters` DISABLE KEYS */;
INSERT INTO `lime_survey_url_parameters` VALUES (1,764876,'ejecutivo',110,NULL);
/*!40000 ALTER TABLE `lime_survey_url_parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_surveys`
--

DROP TABLE IF EXISTS `lime_surveys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_surveys` (
  `sid` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `admin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `expires` datetime DEFAULT NULL,
  `startdate` datetime DEFAULT NULL,
  `adminemail` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonymized` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `faxto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `savetimings` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `template` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `language` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_languages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datestamp` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `usecookie` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `allowregister` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `allowsave` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `autonumber_start` int(11) NOT NULL DEFAULT '0',
  `autoredirect` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `allowprev` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `printanswers` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `ipaddr` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `refurl` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `datecreated` date DEFAULT NULL,
  `publicstatistics` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `publicgraphs` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `listpublic` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `htmlemail` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `sendconfirmation` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `tokenanswerspersistence` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `assessments` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `usecaptcha` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `usetokens` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `bounce_email` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attributedescriptions` text COLLATE utf8mb4_unicode_ci,
  `emailresponseto` text COLLATE utf8mb4_unicode_ci,
  `emailnotificationto` text COLLATE utf8mb4_unicode_ci,
  `tokenlength` int(11) NOT NULL DEFAULT '15',
  `showxquestions` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `showgroupinfo` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'B',
  `shownoanswer` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `showqnumcode` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'X',
  `bouncetime` int(11) DEFAULT NULL,
  `bounceprocessing` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `bounceaccounttype` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccounthost` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccountpass` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccountencryption` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccountuser` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `showwelcome` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `showprogress` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `questionindex` int(11) NOT NULL DEFAULT '0',
  `navigationdelay` int(11) NOT NULL DEFAULT '0',
  `nokeyboard` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `alloweditaftercompletion` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `googleanalyticsstyle` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleanalyticsapikey` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_surveys`
--

LOCK TABLES `lime_surveys` WRITE;
/*!40000 ALTER TABLE `lime_surveys` DISABLE KEYS */;
INSERT INTO `lime_surveys` VALUES (495246,1,'Administrator','N','2017-11-28 00:00:00','2017-11-27 00:00:00','segundogaldames@gmail.com','N','','A','N','ubuntu_orange','es-CL','','N','Y','N','Y',1,'N','N','N','N','N','2017-11-27','N','N','Y','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'Y','B','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'Y','Y',0,0,'N','N','0',''),(618961,1,'Administrator','Y','2017-11-30 10:25:00','2017-11-29 00:00:00','segundogaldames@gmail.com','N','','G','N','ubuntu_orange','es-CL','','Y','N','N','N',1,'Y','N','N','N','Y','2017-11-28','N','N','N','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'N','X','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'N','Y',0,0,'N','Y','0',''),(998811,1,'Administrator','N','2018-02-14 00:00:00','2017-11-29 00:00:00','segundogaldames@gmail.com','N','','G','N','ubuntu_orange','es-CL','','Y','N','N','Y',9,'Y','N','N','Y','N','2017-11-29','N','N','N','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'Y','B','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'Y','Y',0,0,'N','Y','0',''),(318492,1,'Administrator','Y',NULL,NULL,'segundogaldames@gmail.com','N','','S','Y','ubuntu_orange','es-CL','','Y','N','N','Y',0,'Y','N','N','Y','Y','2018-02-08','N','N','N','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'Y','B','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'Y','Y',0,0,'N','N','0',''),(264315,1,'Administrator','Y',NULL,NULL,'segundogaldames@gmail.com','N','','S','N','default','es-CL','','N','N','N','Y',0,'N','N','N','Y','Y','2018-02-05','N','N','N','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'Y','B','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'Y','Y',0,0,'N','Y','0',''),(569183,1,'Administrator','Y',NULL,NULL,'segundogaldames@gmail.com','N','','G','N','ubuntu_orange','es-CL','','Y','N','N','Y',0,'N','N','N','Y','N','2018-02-07','N','N','N','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'Y','N','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'Y','Y',0,0,'N','N','0',''),(764876,1,'Administrator','N',NULL,NULL,'segundogaldames@gmail.com','N','','G','Y','ubuntu_orange','es-CL','','Y','N','N','Y',5,'N','N','N','Y','N','2018-02-13','N','N','N','Y','Y','N','N','N','N','segundogaldames@gmail.com',NULL,'','',15,'Y','B','N','X',NULL,'N',NULL,NULL,NULL,NULL,NULL,'Y','Y',0,0,'N','N','0','');
/*!40000 ALTER TABLE `lime_surveys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_surveys_languagesettings`
--

DROP TABLE IF EXISTS `lime_surveys_languagesettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_surveys_languagesettings` (
  `surveyls_survey_id` int(11) NOT NULL,
  `surveyls_language` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `surveyls_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surveyls_description` text COLLATE utf8mb4_unicode_ci,
  `surveyls_welcometext` text COLLATE utf8mb4_unicode_ci,
  `surveyls_endtext` text COLLATE utf8mb4_unicode_ci,
  `surveyls_url` text COLLATE utf8mb4_unicode_ci,
  `surveyls_urldescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_invite_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_invite` text COLLATE utf8mb4_unicode_ci,
  `surveyls_email_remind_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_remind` text COLLATE utf8mb4_unicode_ci,
  `surveyls_email_register_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_register` text COLLATE utf8mb4_unicode_ci,
  `surveyls_email_confirm_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_confirm` text COLLATE utf8mb4_unicode_ci,
  `surveyls_dateformat` int(11) NOT NULL DEFAULT '1',
  `surveyls_attributecaptions` text COLLATE utf8mb4_unicode_ci,
  `email_admin_notification_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_admin_notification` text COLLATE utf8mb4_unicode_ci,
  `email_admin_responses_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_admin_responses` text COLLATE utf8mb4_unicode_ci,
  `surveyls_numberformat` int(11) NOT NULL DEFAULT '0',
  `attachments` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`surveyls_survey_id`,`surveyls_language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_surveys_languagesettings`
--

LOCK TABLES `lime_surveys_languagesettings` WRITE;
/*!40000 ALTER TABLE `lime_surveys_languagesettings` DISABLE KEYS */;
INSERT INTO `lime_surveys_languagesettings` VALUES (495246,'es-CL','Prueba','Formulario de prueba','','','http://localhost:8080/prueba-survey','Prueba - Survey','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',3,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',1,NULL),(618961,'es-CL','Plantilla','','','Gracias por su participación','http://www.metasolutions.cl','Guardar y salir','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',5,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',0,NULL),(998811,'es-CL','Melon Hormigones Mensajeria','Encuesta Praxis Melon Hormigones Mensajeria','','Muchas gracias por su colaboración','http://localhost:8080/prueba-lime/encuestas/fin','Prueba Lime','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',5,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',0,NULL),(318492,'es-CL','Proyectos Easy','<p>Encuesta para evaluar experiencia de usuarios en Easy</p>\r\n\r\n<p> </p>\r\n','Bienvenidos a Evaluación de Proyectos Easy','<p>Muchas gracias por tu gestion. Seras redirigido a una nueva encuesta</p>\r\n\r\n<p><a href=\"http://localhost:8080/limesurvey/index.php/318492?lang=es-CL\">Nueva Encuesta</a></p>\r\n','','','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',5,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',0,NULL),(264315,'es-CL','Prueba','Cuestionario de prueba','Probando','Gracias por probar','','https://survey.metaservicios.cl/index.php/998811?lang=es-CL','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',5,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',0,NULL),(569183,'es-CL','Pauta Evaluacion TA SPM Captacion Derivacion','Auditoria para CAT','COMPLETA LA SIGUIENTE AUDITORIA','GRACIAS POR TU TRABAJO','','','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',5,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',0,NULL),(764876,'es-CL','Premio Permanencia','Auditoria Cencosud','','','','','Invitación a participar en una encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\nusted ha sido invitado a participar en una encuesta.<br />\n<br />\nLa encuesta es titulada:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nPara participar, por favor pulse en el siguiente enlace.<br />\n<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL}) <br />\nPulse aquí para hacer la encuesta:<br />\n{SURVEYURL}<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}','Recordatorio para participar en una encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nRecientemente se le invitó a participar en la encuesta de título<br />\n<br />\n«{SURVEYNAME}»<br />\n<br />\n«{SURVEYDESCRIPTION}»<br />\n<br />\nAdvertimos que aún no la ha completado, y de la forma más atenta queríamos recordarle que todavía se encuentra disponible si desea participar.<br />\n<br />\nPara hacerlo, por favor pulse en el siguiente enlace.<br />\n<br />\n{SURVEYURL}<br />\n<br />\nNuevamente le agradecemos su interés y colaboración.<br />\nAtentamente,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\nSi no desea participar más en esta encuesta y no quiere recibir más invitaciones por favor haga click en el siguiente link:<br />\n{OPTOUTURL}','Confirmación de inscripción en la encuesta','Estimado/a {FIRSTNAME} {LASTNAME}:<br />\n<br />\nUsted, o alguien utilizando su dirección de correo electrónico, se ha registrado para participar en un cuestionario en línea titulado \"{SURVEYNAME}\".<br />\n<br />\nPara completarla, pulse en la siguiente URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSi tiene dudas con respecto al cuestionario, o si no se registró para participar y cree que este correo es un error, por favor, póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.','Confirmación de su participación en nuestra encuesta','Estimado/a {FIRSTNAME},<br />\n<br />\neste correo es para confirmarle que ha completado la encuesta titulada {SURVEYNAME} y sus respuestas han sido guardadas. Gracias por su participación.<br />\n<br />\nSi tiene alguna duda sobre este correo electrónico, por favor póngase en contacto con {ADMINNAME} en {ADMINEMAIL}.<br />\n<br />\nReciba un muy cordial saludo,<br />\n<br />\n{ADMINNAME}',5,NULL,'Responder envío de encuesta {SURVEYNAME}','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}','Responder envío de encuesta {SURVEYNAME} con resultados','Hola,<br />\n<br />\nUna nueva respuesta ha sido realizada para su encuesta \'{SURVEYNAME}\'.<br />\n<br />\nClick en el siguiente link para recargar la encuesta:<br />\n{RELOADURL}<br />\n<br />\nClick en el siguiente link para ver la respuesta individualmente:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick en el siguiente link para editar la respuesta:<br />\n{EDITRESPONSEURL}<br />\n<br />\nVea las estadísticas aquí:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nLas siguientes respuestas fueron subidas por:<br />\n{ANSWERTABLE}',0,NULL);
/*!40000 ALTER TABLE `lime_surveys_languagesettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_templates`
--

DROP TABLE IF EXISTS `lime_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_templates` (
  `folder` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` int(11) NOT NULL,
  PRIMARY KEY (`folder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_templates`
--

LOCK TABLES `lime_templates` WRITE;
/*!40000 ALTER TABLE `lime_templates` DISABLE KEYS */;
INSERT INTO `lime_templates` VALUES ('default',1),('news_paper',1),('ubuntu_orange',1);
/*!40000 ALTER TABLE `lime_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_tokens_264315`
--

DROP TABLE IF EXISTS `lime_tokens_264315`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_tokens_264315` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_264315_45774` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_tokens_264315`
--

LOCK TABLES `lime_tokens_264315` WRITE;
/*!40000 ALTER TABLE `lime_tokens_264315` DISABLE KEYS */;
INSERT INTO `lime_tokens_264315` VALUES (1,NULL,'Segundo Galdames','','sgaldamesh@gmail.com','OK','2xizWnkUWDOaqLw','es-CL',NULL,'2018-02-05 08:51','2018-02-05 09:05',1,'N',19,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lime_tokens_264315` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_tokens_618961`
--

DROP TABLE IF EXISTS `lime_tokens_618961`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_tokens_618961` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `emailstatus` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `language` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindersent` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `remindercount` int(11) DEFAULT '0',
  `completed` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `usesleft` int(11) DEFAULT '1',
  `validfrom` datetime DEFAULT NULL,
  `validuntil` datetime DEFAULT NULL,
  `mpid` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `idx_token_token_618961_47629` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_tokens_618961`
--

LOCK TABLES `lime_tokens_618961` WRITE;
/*!40000 ALTER TABLE `lime_tokens_618961` DISABLE KEYS */;
INSERT INTO `lime_tokens_618961` VALUES (1,NULL,'Segundo','Galdames','sgaldamesh@gmail.com','OK','jZMPaJvzYznzN3O','es-CL',NULL,'2017-11-29 10:39','N',0,'2017-11-29 12:07',-3,'2017-11-29 00:00:00','2017-11-29 12:50:00',NULL);
/*!40000 ALTER TABLE `lime_tokens_618961` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_user_groups`
--

DROP TABLE IF EXISTS `lime_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_user_groups` (
  `ugid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`ugid`),
  UNIQUE KEY `lug_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_user_groups`
--

LOCK TABLES `lime_user_groups` WRITE;
/*!40000 ALTER TABLE `lime_user_groups` DISABLE KEYS */;
INSERT INTO `lime_user_groups` VALUES (1,'Calidad','Grupo para analisis de datos',1),(2,'Editor','Editores de encuestas',1),(3,'Supervisores','usuarios supervisores',1);
/*!40000 ALTER TABLE `lime_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_user_in_groups`
--

DROP TABLE IF EXISTS `lime_user_in_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_user_in_groups` (
  `ugid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`ugid`,`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_user_in_groups`
--

LOCK TABLES `lime_user_in_groups` WRITE;
/*!40000 ALTER TABLE `lime_user_in_groups` DISABLE KEYS */;
INSERT INTO `lime_user_in_groups` VALUES (1,1),(1,7),(1,9),(2,1),(2,7),(3,1),(3,10);
/*!40000 ALTER TABLE `lime_user_in_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lime_users`
--

DROP TABLE IF EXISTS `lime_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lime_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` blob NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `htmleditormode` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `templateeditormode` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `questionselectormode` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `one_time_pw` blob,
  `dateformat` int(11) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `users_name` (`users_name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lime_users`
--

LOCK TABLES `lime_users` WRITE;
/*!40000 ALTER TABLE `lime_users` DISABLE KEYS */;
INSERT INTO `lime_users` VALUES (1,'admin','8e48397438b07c5954249033d6fc68505c3b1c9550d16087c53849b3e18096ca','Administrator',0,'es-CL','segundogaldames@gmail.com','default','default','default',NULL,1,'2017-11-27 17:08:41','2017-11-27 17:50:38'),(9,'Calidad','0b102e6848aaa9f9e460888d5c21c36732eed942229b10e41f4bedc43dc117d6','Usuarios de calidad',1,'auto','calidad@cuvox.de','default','default','default',NULL,1,'2017-11-28 11:48:14',NULL),(10,'demo','92980aad1bfd6e5344ce6c692eabc2f3651e5b1133f450cb750dfc8fbc2e19dc','Usuario Super',1,'es-CL','sgaldames@metasolutions.cl','default','default','default',NULL,1,'2017-11-29 14:46:00','2017-11-29 14:51:12');
/*!40000 ALTER TABLE `lime_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 10:51:35
