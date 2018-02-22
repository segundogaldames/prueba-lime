-- MySQL dump 10.13  Distrib 5.5.59, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: prueba_lime
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
-- Table structure for table `campaign`
--

DROP TABLE IF EXISTS `campaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `cod_vicidial_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign`
--

LOCK TABLES `campaign` WRITE;
/*!40000 ALTER TABLE `campaign` DISABLE KEYS */;
INSERT INTO `campaign` VALUES (1,'Melon Hormigones',1,'010034001'),(2,'Proyectos Easy',2,NULL),(4,'Auditoria Cencosud',3,'0123456');
/*!40000 ALTER TABLE `campaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargas`
--

DROP TABLE IF EXISTS `cargas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargas`
--

LOCK TABLES `cargas` WRITE;
/*!40000 ALTER TABLE `cargas` DISABLE KEYS */;
INSERT INTO `cargas` VALUES (1,1,'2018-02-21 10:12:05'),(2,1,'2018-02-21 10:12:41'),(3,1,'2018-02-21 13:26:24');
/*!40000 ALTER TABLE `cargas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Praxis','2017-12-01 11:36:34','2017-12-01 11:36:34'),(2,'Easy','2017-12-04 08:11:08','2017-12-04 08:11:08'),(3,'Cencosud','2018-02-20 09:43:54','2018-02-20 09:43:54');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `encuesta` int(11) NOT NULL,
  `rut` varchar(20) DEFAULT NULL,
  `comuna` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `profesion` varchar(200) DEFAULT NULL,
  `edad` varchar(10) DEFAULT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `tienda` varchar(100) DEFAULT NULL,
  `dato1` varchar(255) DEFAULT NULL,
  `dato2` varchar(255) DEFAULT NULL,
  `dato3` varchar(255) DEFAULT NULL,
  `fecha1` varchar(100) DEFAULT NULL,
  `fecha2` varchar(20) DEFAULT NULL,
  `fecha3` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `telefono3` varchar(20) DEFAULT NULL,
  `telefono4` varchar(20) DEFAULT NULL,
  `telefono5` varchar(20) DEFAULT NULL,
  `telefono6` varchar(20) DEFAULT NULL,
  `telefono7` varchar(20) DEFAULT NULL,
  `telefono8` varchar(20) DEFAULT NULL,
  `telefono9` varchar(20) DEFAULT NULL,
  `telefono10` varchar(20) DEFAULT NULL,
  `criterio1` varchar(255) DEFAULT NULL,
  `criterio2` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `num_carga` int(11) NOT NULL,
  `estado_contacto` int(11) NOT NULL,
  `estado_llamada` int(11) NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (1,'Laura Andrade','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180220300',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:05',1,1,7,'2018-02-21 14:11:48'),(2,'Luisa Chavez','56988051289',1,NULL,'La Serena','4',NULL,NULL,NULL,NULL,NULL,'20180222302',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:05',1,1,7,'2018-02-21 14:11:48'),(3,'Jacinta Errasuriz','56988051289',1,NULL,'Curico','7',NULL,NULL,NULL,NULL,NULL,'20180224304',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:06',1,1,7,'2018-02-21 14:11:48'),(4,'Maria Cruz','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180226306',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:06',1,1,7,'2018-02-21 14:11:48'),(5,'Samuel Venegas','56988051289',1,NULL,'Valparaiso','5',NULL,NULL,NULL,NULL,NULL,'20180228308',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:06',1,1,7,'2018-02-21 14:11:48'),(6,'Noemi Alvarez','56988051289',1,NULL,'Arica','15',NULL,NULL,NULL,NULL,NULL,'20180230310',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:06',1,1,7,'2018-02-21 14:11:48'),(7,'Rodrigo Mendez','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180232312',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:06',1,1,7,'2018-02-21 14:11:48'),(8,'Carolina Estevez','56988051289',1,NULL,'San Bernardo','RM',NULL,NULL,NULL,NULL,NULL,'20180234314',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:06',1,1,7,'2018-02-21 14:11:48'),(9,'Laura Andrade','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180220300',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:41',2,1,7,'2018-02-21 14:11:48'),(10,'Luisa Chavez','56988051289',1,NULL,'La Serena','4',NULL,NULL,NULL,NULL,NULL,'20180222302',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:41',2,1,7,'2018-02-21 14:11:48'),(11,'Jacinta Errasuriz','56988051289',1,NULL,'Curico','7',NULL,NULL,NULL,NULL,NULL,'20180224304',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:42',2,1,7,'2018-02-21 14:11:48'),(12,'Maria Cruz','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180226306',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:42',2,1,7,'2018-02-21 14:11:48'),(13,'Samuel Venegas','56988051289',1,NULL,'Valparaiso','5',NULL,NULL,NULL,NULL,NULL,'20180228308',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:42',2,1,7,'2018-02-21 14:11:48'),(14,'Noemi Alvarez','56988051289',1,NULL,'Arica','15',NULL,NULL,NULL,NULL,NULL,'20180230310',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:42',2,1,7,'2018-02-21 14:11:48'),(15,'Rodrigo Mendez','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180232312',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:42',2,1,7,'2018-02-21 14:11:48'),(16,'Carolina Estevez','56988051289',1,NULL,'San Bernardo','RM',NULL,NULL,NULL,NULL,NULL,'20180234314',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 10:12:42',2,1,7,'2018-02-21 14:11:48'),(17,'Laura Andrade','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180220300',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,2,1,'2018-02-21 14:12:27'),(18,'Luisa Chavez','56988051289',1,NULL,'La Serena','4',NULL,NULL,NULL,NULL,NULL,'20180222302',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,1,7,'2018-02-21 14:11:48'),(19,'Jacinta Errasuriz','56988051289',1,NULL,'Curico','7',NULL,NULL,NULL,NULL,NULL,'20180224304',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,1,7,'2018-02-21 14:11:48'),(20,'Maria Cruz','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180226306',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,1,7,'2018-02-21 14:11:48'),(21,'Samuel Venegas','56988051289',1,NULL,'Valparaiso','5',NULL,NULL,NULL,NULL,NULL,'20180228308',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,2,2,'2018-02-21 17:06:47'),(22,'Noemi Alvarez','56988051289',1,NULL,'Arica','15',NULL,NULL,NULL,NULL,NULL,'20180230310',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,1,7,'2018-02-21 14:11:48'),(23,'Rodrigo Mendez','56988051289',1,NULL,'Santiago','13',NULL,NULL,NULL,NULL,NULL,'20180232312',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,1,7,'2018-02-21 14:11:48'),(24,'Carolina Estevez','56988051289',1,NULL,'San Bernardo','RM',NULL,NULL,NULL,NULL,NULL,'20180234314',NULL,'Fijo','Praxis',NULL,'20-01-2018','20-02-2018','20-02-2018','9675432976',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-02-21 13:26:25',3,1,7,'2018-02-21 14:11:48');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuestas`
--

DROP TABLE IF EXISTS `encuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `campaign_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestas`
--

LOCK TABLES `encuestas` WRITE;
/*!40000 ALTER TABLE `encuestas` DISABLE KEYS */;
INSERT INTO `encuestas` VALUES (1,'Melon Hormigones Mensajeria','http://localhost:8080/prueba-lime/limesurvey/index.php/998811?lang=es-CL',1,'2017-12-04 13:13:31','2017-12-04 15:31:17',1),(2,'Nueva encuesta','http://localhost:8080/prueba-lime/limesurvey/index.php/998811?lang=es-CL',2,'2017-12-05 13:09:56','2017-12-05 13:09:56',1),(3,'Otra encuesta','http://localhost:8080/prueba-lime/limesurvey/index.php/998811?lang=es-CL',1,'2017-12-05 13:10:54','2017-12-05 13:13:27',1),(4,'Proyectos Easy','http://localhost:8080/limesurvey/index.php/318492?lang=es-CL',1,'2017-12-06 17:50:46','2018-02-08 17:57:14',2),(6,'Premio Permanencia','http://localhost:8080/prueba-lime/limesurvey/index.php/764876?lang=es-CL',1,'2018-02-20 09:46:44','2018-02-21 17:53:17',4);
/*!40000 ALTER TABLE `encuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuestas_usuarios`
--

DROP TABLE IF EXISTS `encuestas_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuestas_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `encuesta_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestas_usuarios`
--

LOCK TABLES `encuestas_usuarios` WRITE;
/*!40000 ALTER TABLE `encuestas_usuarios` DISABLE KEYS */;
INSERT INTO `encuestas_usuarios` VALUES (1,1,5),(2,1,6),(3,4,6),(4,6,6);
/*!40000 ALTER TABLE `encuestas_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_llamadas`
--

DROP TABLE IF EXISTS `estado_llamadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_llamadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_llamadas`
--

LOCK TABLES `estado_llamadas` WRITE;
/*!40000 ALTER TABLE `estado_llamadas` DISABLE KEYS */;
INSERT INTO `estado_llamadas` VALUES (1,'Encuestado'),(2,'No Contesta'),(3,'Buzón de Voz'),(4,'Número Equivocado'),(5,'Número No Existe'),(6,'No Desea Contestar'),(7,'No Contactado');
/*!40000 ALTER TABLE `estado_llamadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Ejecutivo'),(3,'Supervisor');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Segundo Galdames H.','segundogaldames@gmail.com','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 10:46:08','2017-11-30 17:27:21',1),(3,'Stephanie Henriquez','shenriquez@metasolutions.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 12:37:24','2017-11-30 12:37:24',3),(4,'Kathy Kuhn','kkuhn@metaservicios.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 13:11:03','2017-11-30 13:11:03',3),(5,'Javier Martinez Ayala','jmartineza@gmail.com','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 13:14:38','2018-02-20 11:16:42',2),(6,'Segundo Galdames H.','sgaldames@metasolutions.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-12-05 12:55:36','2017-12-05 12:55:36',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-22 17:14:52
