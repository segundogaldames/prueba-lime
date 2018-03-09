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
-- Table structure for table `campos_contacto`
--

DROP TABLE IF EXISTS `campos_contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campos_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `rut` varchar(20) DEFAULT NULL,
  `comuna` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `dato1` varchar(255) DEFAULT NULL,
  `dato2` varchar(255) DEFAULT NULL,
  `dato3` varchar(255) DEFAULT NULL,
  `dato4` varchar(255) DEFAULT NULL,
  `dato5` varchar(255) DEFAULT NULL,
  `dato6` varchar(255) DEFAULT NULL,
  `dato7` varchar(255) DEFAULT NULL,
  `dato8` varchar(255) DEFAULT NULL,
  `dato9` varchar(255) DEFAULT NULL,
  `dato10` varchar(255) DEFAULT NULL,
  `dato11` varchar(255) DEFAULT NULL,
  `fecha1` varchar(20) DEFAULT NULL,
  `fecha2` varchar(20) DEFAULT NULL,
  `fecha3` varchar(20) DEFAULT NULL,
  `telefono2` varchar(100) DEFAULT NULL,
  `telefono3` varchar(100) DEFAULT NULL,
  `telefono4` varchar(100) DEFAULT NULL,
  `telefono5` varchar(100) DEFAULT NULL,
  `telefono6` varchar(100) DEFAULT NULL,
  `telefono7` varchar(100) DEFAULT NULL,
  `telefono8` varchar(100) DEFAULT NULL,
  `telefono9` varchar(100) DEFAULT NULL,
  `telefono10` varchar(100) DEFAULT NULL,
  `encuesta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campos_contacto`
--

LOCK TABLES `campos_contacto` WRITE;
/*!40000 ALTER TABLE `campos_contacto` DISABLE KEYS */;
INSERT INTO `campos_contacto` VALUES (1,'nombre','telefono','rut','Tienda','region','N OS','estado','partidas','instaladores','diseñadores','N','dato6','dato7','dato8','dato9','dato10','dato11','inicio del trabajo','termino del trabajo','fecha3','telefono2','telefono3','telefono4','telefono5','telefono6','telefono7','telefono8','telefono9','telefono10',4),(2,'nombre','telefono','rut','Tienda','region','Folio','Estado de proyecti','proyecto','proveedor','ejecutivo','dato5','dato6','dato7','dato8','dato9','dato10','dato11','fecha de envio','fecha limite','fecha3','telefono2','telefono3','telefono4','telefono5','telefono6','telefono7','telefono8','telefono9','telefono10',1);
/*!40000 ALTER TABLE `campos_contacto` ENABLE KEYS */;
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
  `estado` int(11) NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `encuesta` int(11) NOT NULL,
  `criterio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargas`
--

LOCK TABLES `cargas` WRITE;
/*!40000 ALTER TABLE `cargas` DISABLE KEYS */;
INSERT INTO `cargas` VALUES (1,1,'2018-03-08 12:35:36',1,'2018-03-08 12:35:36',4,NULL),(2,1,'2018-03-08 12:36:37',1,'2018-03-08 12:36:37',1,1);
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
  `telefono` varchar(100) DEFAULT NULL,
  `encuesta` int(11) NOT NULL,
  `rut` varchar(20) DEFAULT NULL,
  `comuna` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `dato1` varchar(255) DEFAULT NULL,
  `dato2` varchar(255) DEFAULT NULL,
  `dato3` varchar(255) DEFAULT NULL,
  `dato4` varchar(255) DEFAULT NULL,
  `dato5` varchar(255) DEFAULT NULL,
  `dato6` varchar(255) DEFAULT NULL,
  `dato7` varchar(255) DEFAULT NULL,
  `dato8` varchar(255) DEFAULT NULL,
  `dato9` varchar(255) DEFAULT NULL,
  `dato10` varchar(255) DEFAULT NULL,
  `dato11` varchar(255) DEFAULT NULL,
  `fecha1` varchar(20) DEFAULT NULL,
  `fecha2` varchar(20) DEFAULT NULL,
  `fecha3` varchar(20) DEFAULT NULL,
  `telefono2` varchar(100) DEFAULT NULL,
  `telefono3` varchar(100) DEFAULT NULL,
  `telefono4` varchar(100) DEFAULT NULL,
  `telefono5` varchar(100) DEFAULT NULL,
  `telefono6` varchar(100) DEFAULT NULL,
  `telefono7` varchar(100) DEFAULT NULL,
  `telefono8` varchar(100) DEFAULT NULL,
  `telefono9` varchar(100) DEFAULT NULL,
  `telefono10` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `num_carga` int(11) NOT NULL,
  `estado_contacto` int(11) NOT NULL,
  `estado_llamada` int(11) NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `encuestador_id` int(11) DEFAULT NULL,
  `criterio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (1,'HILDA BEAS JARA','995071304',4,NULL,'Maipú',NULL,'303643386','Terminado','Proyecto de Cocina (Muebles)','Egidio  Estrada . ','Solange Leyton Ahumada ','6',NULL,NULL,NULL,NULL,NULL,NULL,'04-01-2018','07-01-2018',NULL,'995071304',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,2,1,'2018-03-08 17:27:32',0,NULL),(2,'ANTONIO GOU ','978097116',4,NULL,'Maipú',NULL,'303628129','Terminado','Proyecto de Cocina (Muebles)','Egidio  Estrada . ','Solange Leyton Ahumada ','7',NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018',NULL,'223246845',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,1,7,'2018-03-08 12:35:37',NULL,NULL),(3,'PILAR DONOSO','962274876',4,NULL,'La Dehesa',NULL,'303715659','Terminado','Instalalacion Calefont','Auxilia Auxilia Club Asistencia ','Camila Grandon Gajardo ','9',NULL,NULL,NULL,NULL,NULL,NULL,'04-01-2018','07-01-2018',NULL,'962274876',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,1,7,'2018-03-08 12:35:37',NULL,NULL),(4,'Marcela Sáiz','995340210',4,NULL,'La Reina',NULL,'303715074','Terminado','Instalacion Puerta','Tuten Spa Servicios ','Miguel  Millar  Perez  ','10',NULL,NULL,NULL,NULL,NULL,NULL,'04-01-2018','03-01-2018',NULL,'995340210','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,0,1,'2018-03-08 17:19:40',0,NULL),(5,'EDITH FLORES CARO','79936045',4,NULL,'La Dehesa',NULL,'303704741','Terminado','Ins.Cocinas, Hornos y Encimeras a Gas.','Tuten Spa Servicios ','Camila Grandon Gajardo ','13',NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018',NULL,'79936045','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,0,7,'2018-03-08 17:19:11',0,NULL),(6,'CRISTÓBAL CORBEAUX LÓPEZ','998267030',4,NULL,'La Dehesa',NULL,'303700779','Terminado','Instalalacion Aire Acondicionado','Tuten Spa Servicios ','Karen Muñoz Molina ','15',NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018',NULL,'976480451',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,1,7,'2018-03-08 12:35:37',NULL,NULL),(7,'MARCO VITERI','978972550',4,NULL,'La Dehesa',NULL,'303711645','Terminado','Instalación Griferías','Tuten Spa Servicios ','Mauricio Frez Pulgar ','17',NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018',NULL,'978972550',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,2,1,'2018-03-09 09:56:18',7,NULL),(8,'CARMEN MIRANDA','229685938',4,NULL,'Ochagavía',NULL,'303706572','Terminado','Armado de Muebles (Mas de 99.999)','Auxilia Auxilia Club Asistencia ','Rafael  Troncoso Vásquez ','19',NULL,NULL,NULL,NULL,NULL,NULL,'01-01-2018','02-01-2018',NULL,'229685938',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,1,7,'2018-03-08 12:35:37',NULL,NULL),(9,'ISABEL SOTO  PINTO ','97328981',4,NULL,'Quilín',NULL,'303706184','Terminado','Instalación ventiladores de Techo','Tuten Spa Servicios ','Francisco Silva Aguilar ','22',NULL,NULL,NULL,NULL,NULL,NULL,'01-01-2018','02-01-2018',NULL,'97328981',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,1,7,'2018-03-08 12:35:37',NULL,NULL),(10,'PAMELA CATALAN VERA','985696367',4,NULL,'Maipú',NULL,'303708071','Terminado','Ins.Cocinas, Hornos y Encimeras a Gas.','Tuten Spa Servicios ','Solange Leyton Ahumada ','23',NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018',NULL,'227898982',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:37',1,1,7,'2018-03-08 12:35:37',NULL,NULL),(11,'DAVID LOPEZ ','56887520',4,NULL,'La Florida',NULL,'303706811','Terminado','Armado de Muebles (Entre 40.001-99.999)','May Day May   Day ','Amparo  Soto  Cabrera ','24',NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018',NULL,'56887520',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(12,'Julio Leyton Peñaloza','993322293',4,NULL,'Cerrillos',NULL,'303706117','Terminado','Armado de Muebles (Entre 1-40.000)','Auxilia Auxilia Club Asistencia ','Maricel  Muñoz Roman ','26',NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017',NULL,'228853409','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(13,'MARIO CUEVAS','996797297',4,NULL,'Alto Las Condes',NULL,'303700304','Terminado','Soporte Plasma - LCD','Auxilia Auxilia Club Asistencia ','Nichol Cofre Mesina ','33',NULL,NULL,NULL,NULL,NULL,NULL,'26-12-2017','31-12-2017',NULL,'222097679','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(14,'Doris Soto Adriazola','956878499',4,NULL,'Cerrillos',NULL,'303701534','Terminado','Armado de Muebles (Entre 40.001-99.999)','Auxilia Auxilia Club Asistencia ','Maricel  Muñoz Roman ','34',NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017',NULL,'956878499',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(15,'zahida carvajal','956395164',4,NULL,'La Dehesa',NULL,'303700728','Terminado','Armados de Combos 2','Auxilia Auxilia Club Asistencia ','Mauricio Frez Pulgar ','35',NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017',NULL,'998865219',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(16,'Diego Contreras','2232646131',4,NULL,'La Reina',NULL,'303698209','Terminado','Instal.Aire Acondicionado','Tuten Spa Servicios ','Miguel  Millar  Perez  ','36',NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018',NULL,'988266007',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(17,'GABRIEL ALFARO ORTIZ','226338600',4,NULL,'La Florida',NULL,'303695307','Terminado','Inst.Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Amparo  Soto  Cabrera ','37',NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018',NULL,'92231383',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(18,'gimena herrera','953969876',4,NULL,'Viña del Mar',NULL,'2989023','Terminado','Armado de Muebles (Entre 40.001-99.999)','May Day May   Day ','Mauricio Diaz Torres ','39',NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','01-01-2018',NULL,'953969876',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(19,'Ana Eynaudi','994392196',4,NULL,'La Dehesa',NULL,'303691102','Terminado','Armado  de Taca Taca Tipo B','Auxilia Auxilia Club Asistencia ','Martin  Castillo Rojas ','40',NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017',NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(20,'Angel Tacchi','999436586',4,NULL,'Quilín',NULL,'303688420','Terminado','Proyecto de Baño','Auxilia Auxilia Club Asistencia ','Cristina De Transito Mora  Torres ','41',NULL,NULL,NULL,NULL,NULL,NULL,'01-01-2018','03-01-2018',NULL,'999436586','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,2,1,'2018-03-09 09:56:11',7,NULL),(21,'NEFER ARAYA CORTES ','83976894',4,NULL,'La Serena',NULL,'2988101','Terminado','Inst.Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Paulina Velis Zepeda ','43',NULL,NULL,NULL,NULL,NULL,NULL,'25-12-2017','01-01-2018',NULL,'83976894','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(22,'DIGNA GONZALEZ HERNANDEZ','79662536',4,NULL,'La Serena',NULL,'2988072','Terminado','Instalacion Shower (Stock)','Auxilia Auxilia Club Asistencia ','Paulina Velis Zepeda ','44',NULL,NULL,NULL,NULL,NULL,NULL,'20-12-2017','04-01-2018',NULL,'79662536',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(23,'ALONDRA MARDONES','222265384-957661943',4,NULL,'La Reina',NULL,'303686028','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Patricia  Valenzuela Riveros ','45',NULL,NULL,NULL,NULL,NULL,NULL,'20-12-2017','02-01-2018',NULL,'222265384-957661943',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(24,'MARIELA ZERENE','992767669',4,NULL,'La Dehesa',NULL,'303685768','Terminado','Armado de Muebles (Entre 1-40.000)','Auxilia Auxilia Club Asistencia ','Mauricio Frez Pulgar ','46',NULL,NULL,NULL,NULL,NULL,NULL,'18-12-2017','31-12-2017',NULL,'992767669',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(25,'ANA MARIA VILLAGRA','226678961',4,NULL,'Maipú',NULL,'303679055','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Milton Yanez Meneses ','49',NULL,NULL,NULL,NULL,NULL,NULL,'17-12-2017','01-01-2018',NULL,'226678961',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(26,'teresa leiva espinoza','94992117',4,NULL,'Quilicura',NULL,'303673125','Terminado','Maestro por Medio Día','Auxilia Auxilia Club Asistencia ','Cynthia Andrea  Bravo  Orellana ','51',NULL,NULL,NULL,NULL,NULL,NULL,'14-12-2017','01-01-2018',NULL,'27910600',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(27,'Lorena Balbi ','968472511',4,NULL,'Quilín',NULL,'303688570','Terminado','Instal.Tina de Hidromasaje','Auxilia Auxilia Club Asistencia ','Cristina De Transito Mora  Torres ','53',NULL,NULL,NULL,NULL,NULL,NULL,'19-12-2017','02-01-2018',NULL,'968472511',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(28,'KENNETH WELCH','996343494',4,NULL,'La Reina',NULL,'303671791','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ','54',NULL,NULL,NULL,NULL,NULL,NULL,'12-12-2017','01-01-2018',NULL,'996343494','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(29,'MARTA CARRASCO FRITZ','222125024-941655576',4,NULL,'La Reina',NULL,'303667986','Terminado','Armado de Muebles (Entre 40.001-99.999)','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ','56',NULL,NULL,NULL,NULL,NULL,NULL,'18-12-2017','07-01-2018',NULL,'222125024-941655576','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(30,'MIRNA TORRES','222431398-956074777',4,NULL,'La Reina',NULL,'303653255','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ','59',NULL,NULL,NULL,NULL,NULL,NULL,'04-12-2017','02-01-2018',NULL,'222431398-956074777',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(31,'GERDA GUBERNAPIS','993257286',4,NULL,'La Reina',NULL,'303639020','Terminado','Instal.Ceramica','Auxilia Auxilia Club Asistencia ','Carlos Foncea Maturana ','60',NULL,NULL,NULL,NULL,NULL,NULL,'05-12-2017','01-01-2018',NULL,'993257286-',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(32,'FRANCISCO SAEZ POBLETE','952223959',4,NULL,'Maipú',NULL,'303645912','Terminado','Soporte Plasma - LCD','Auxilia Auxilia Club Asistencia ','Patricia Gomez Gomez Acosta ','62',NULL,NULL,NULL,NULL,NULL,NULL,'04-12-2017','04-01-2018',NULL,'952223959',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(33,'Natalia Moraga','996371843',4,NULL,'Costanera',NULL,'303642592','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Alejandra  Sanhueza Perez ','63',NULL,NULL,NULL,NULL,NULL,NULL,'10-12-2017','01-01-2018',NULL,'996371843',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(34,'HILDA ELGUETA CRUCES','222827704',4,NULL,'Puente Alto',NULL,'303631307','Terminado','Calefont','Auxilia Auxilia Club Asistencia ','Belen  Padilla Mallia ','64',NULL,NULL,NULL,NULL,NULL,NULL,'04-12-2017','07-01-2018',NULL,'222827704',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(35,'DAVID ARCOS  ROSAS','973435602',4,NULL,'La Dehesa',NULL,'303573995','Terminado','Papel Mural','Auxilia Auxilia Club Asistencia ','Karen Muñoz Molina ','66',NULL,NULL,NULL,NULL,NULL,NULL,'20-12-2017','07-01-2018',NULL,'973435602',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(36,'Marina Vivanco ','88071095',4,NULL,'Cerrillos',NULL,'303616432','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Maricel  Muñoz Roman ','69',NULL,NULL,NULL,NULL,NULL,NULL,'28-11-2017','07-01-2018',NULL,'225012965',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(37,'jaime leiva','98161051',4,NULL,'Viña del Mar',NULL,'2975131','Terminado','Piedra Pizarra','Auxilia Auxilia Club Asistencia ','Constanza Vidal Fuentes ','70',NULL,NULL,NULL,NULL,NULL,NULL,'19-11-2017','02-01-2018',NULL,'98161051',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:38',1,1,7,'2018-03-08 12:35:38',NULL,NULL),(38,'Guillermo Marin','222765987',4,NULL,'Quilín',NULL,'303596071','Terminado','Calefont','Auxilia Auxilia Club Asistencia ','Cristina De Transito Mora  Torres ','71',NULL,NULL,NULL,NULL,NULL,NULL,'12-11-2017','31-12-2017',NULL,'222765987',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(39,'ROBERTO ADOLFO IBARRA','965867670',4,NULL,'Costanera',NULL,'303574658','Terminado','Pintura','Auxilia Auxilia Club Asistencia ','Carolina Curiqueo  Contreras ','72',NULL,NULL,NULL,NULL,NULL,NULL,'12-11-2017','02-01-2018',NULL,'952547855',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(40,'DANIELA  MORONI GUTIERRES','92308864',4,NULL,'Costanera',NULL,'2961721','Terminado','Gasfiteria (solo proyecto diseñador)','Auxilia Auxilia Club Asistencia ','Valeria  Bravo  Galaz ','74',NULL,NULL,NULL,NULL,NULL,NULL,'21-11-2017','04-01-2018',NULL,'92308864',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(41,'EVALESKA POBLETE','993315517',4,NULL,'La Florida',NULL,'303509193','Terminado','Pintura','Auxilia Auxilia Club Asistencia ','Amparo  Soto  Cabrera ','75',NULL,NULL,NULL,NULL,NULL,NULL,'08-11-2017','07-01-2018',NULL,'993315517',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(42,'FRANCISCO JAUME RUEDA ','995195654 998714806',4,NULL,'La Reina',NULL,'2952090','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ','76',NULL,NULL,NULL,NULL,NULL,NULL,'10-10-2017','31-12-2017',NULL,'995195654 998714806',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(43,'JOSE LUIS PRADO ARAVENA','57794878',4,NULL,'La Florida',NULL,'303507208','Terminado','Pintura','Auxilia Auxilia Club Asistencia ','Amparo  Soto  Cabrera ','77',NULL,NULL,NULL,NULL,NULL,NULL,'15-10-2017','02-01-2018',NULL,'2866821',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,2,1,'2018-03-09 09:56:29',7,NULL),(44,'DANIELA LIVACIC ALVAREZ ','98978287',4,NULL,'Costanera',NULL,'2941173','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Valeria  Bravo  Galaz ','78',NULL,NULL,NULL,NULL,NULL,NULL,'19-09-2017','02-01-2018',NULL,'98978287',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(45,'JORGE MADRID  ROJAS','76299550',4,NULL,'El Belloto',NULL,'2936434','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Katherine  Paz  Cifuentes ','79',NULL,NULL,NULL,NULL,NULL,NULL,'01-10-2017','02-01-2018',NULL,'76299550',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(46,'CARMEN NUÑEZ FUENTES ','982120329',4,NULL,'Talca',NULL,'2936337','Terminado','Ceramica/ Ceramica','Auxilia Auxilia Club Asistencia / Auxilia Auxilia Club Asistencia ','Pamela  Alfan Bravo ','80',NULL,NULL,NULL,NULL,NULL,NULL,'07-11-2017','02-01-2018',NULL,'712612320',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(47,'EUGENIO CASTILLO DIAZ','84643078',4,NULL,'La Reina',NULL,'2931484','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Carlos Foncea Maturana ','81',NULL,NULL,NULL,NULL,NULL,NULL,'12-09-2017','03-01-2018',NULL,'94706686',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(48,'CATALINA  GACITUA VALENZUELA ','942230117',4,NULL,'La Reina',NULL,'2903974','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ','84',NULL,NULL,NULL,NULL,NULL,NULL,'17-07-2017','01-01-2018',NULL,'229707155',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(49,'MARCELA ANDRADES FLORES','93434501-976254522',4,NULL,'La Serena',NULL,'2896194','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Carolina Andrea Pinto Tapia ','85',NULL,NULL,NULL,NULL,NULL,NULL,'17-08-2017','03-01-2018',NULL,'93434501-976254522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,2,1,'2018-03-08 12:47:46',1,NULL),(50,'miguel candia andrade','976961417',4,NULL,'Chillán',NULL,'2896423','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','JosÉ Caro Andrades ','86',NULL,NULL,NULL,NULL,NULL,NULL,'20-08-2017','31-12-2017',NULL,'976961417',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(51,'MARIO GALARCE GALARCE ','77937011',4,NULL,'La Reina',NULL,'2885955','Terminado','Proyecto de Baño','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ','88',NULL,NULL,NULL,NULL,NULL,NULL,'03-09-2017','04-01-2018',NULL,'77937011',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(52,'ANA LAUGA ROJAS ','88384972',4,NULL,'El Belloto',NULL,'2858788','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Pablo Antonio De Larraechea Olguín ','90',NULL,NULL,NULL,NULL,NULL,NULL,'03-08-2017','01-01-2018',NULL,'88384972',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(53,'ANA LEMUS LOPEZ','95451782',4,NULL,'Concepcion',NULL,'2846702','Terminado','Proyecto de Baño','Auxilia Auxilia Club Asistencia ','Soledad Rozas Gozalvo ','91',NULL,NULL,NULL,NULL,NULL,NULL,'15-08-2017','02-01-2018',NULL,'95451782',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(54,'gloria pizarro morales','76211549',4,NULL,'Viña del Mar',NULL,'2697357','Terminado','Armado de Muebles a domicilio ','May Day May   Day ','Constanza Vidal Fuentes ','93',NULL,NULL,NULL,NULL,NULL,NULL,'09-08-2016','03-01-2018',NULL,'76211549',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:35:39',1,1,7,'2018-03-08 12:35:39',NULL,NULL),(55,'HILDA BEAS JARA','995071304',1,NULL,'Maipú',NULL,'303643386','Terminado','Proyecto de Cocina (Muebles)','Egidio  Estrada . ','Solange Leyton Ahumada ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'04-01-2018','07-01-2018','07-03-2018','995071304',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(56,'ANTONIO GOU ','978097116',1,NULL,'Maipú',NULL,'303628129','Terminado','Proyecto de Cocina (Muebles)','Egidio  Estrada . ','Solange Leyton Ahumada ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018','07-03-2018','223246845',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(57,'PILAR DONOSO','962274876',1,NULL,'La Dehesa',NULL,'303715659','Terminado','Instalalacion Calefont','Auxilia Auxilia Club Asistencia ','Camila Grandon Gajardo ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'04-01-2018','07-01-2018','07-03-2018','962274876',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 17:33:15',0,1),(58,'Marcela Sáiz','995340210',1,NULL,'La Reina',NULL,'303715074','Terminado','Instalacion Puerta','Tuten Spa Servicios ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'04-01-2018','03-01-2018','07-03-2018','995340210','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(59,'EDITH FLORES CARO','79936045',1,NULL,'La Dehesa',NULL,'303704741','Terminado','Ins.Cocinas, Hornos y Encimeras a Gas.','Tuten Spa Servicios ','Camila Grandon Gajardo ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018','07-03-2018','79936045','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(60,'CRISTÓBAL CORBEAUX LÓPEZ','998267030',1,NULL,'La Dehesa',NULL,'303700779','Terminado','Instalalacion Aire Acondicionado','Tuten Spa Servicios ','Karen Muñoz Molina ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018','07-03-2018','976480451',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(61,'MARCO VITERI','978972550',1,NULL,'La Dehesa',NULL,'303711645','Terminado','Instalación Griferías','Tuten Spa Servicios ','Mauricio Frez Pulgar ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018','07-03-2018','978972550',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(62,'CARMEN MIRANDA','229685938',1,NULL,'Ochagavía',NULL,'303706572','Terminado','Armado de Muebles (Mas de 99.999)','Auxilia Auxilia Club Asistencia ','Rafael  Troncoso Vásquez ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'01-01-2018','02-01-2018','07-03-2018','229685938',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(63,'ISABEL SOTO  PINTO ','97328981',1,NULL,'Quilín',NULL,'303706184','Terminado','Instalación ventiladores de Techo','Tuten Spa Servicios ','Francisco Silva Aguilar ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'01-01-2018','02-01-2018','07-03-2018','97328981',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(64,'PAMELA CATALAN VERA','985696367',1,NULL,'Maipú',NULL,'303708071','Terminado','Ins.Cocinas, Hornos y Encimeras a Gas.','Tuten Spa Servicios ','Solange Leyton Ahumada ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018','07-03-2018','227898982',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(65,'DAVID LOPEZ ','56887520',1,NULL,'La Florida',NULL,'303706811','Terminado','Armado de Muebles (Entre 40.001-99.999)','May Day May   Day ','Amparo  Soto  Cabrera ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03-01-2018','04-01-2018','07-03-2018','56887520',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(66,'Julio Leyton Peñaloza','993322293',1,NULL,'Cerrillos',NULL,'303706117','Terminado','Armado de Muebles (Entre 1-40.000)','Auxilia Auxilia Club Asistencia ','Maricel  Muñoz Roman ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017','07-03-2018','228853409','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(67,'MARIO CUEVAS','996797297',1,NULL,'Alto Las Condes',NULL,'303700304','Terminado','Soporte Plasma - LCD','Auxilia Auxilia Club Asistencia ','Nichol Cofre Mesina ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'26-12-2017','31-12-2017','07-03-2018','222097679','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(68,'Doris Soto Adriazola','956878499',1,NULL,'Cerrillos',NULL,'303701534','Terminado','Armado de Muebles (Entre 40.001-99.999)','Auxilia Auxilia Club Asistencia ','Maricel  Muñoz Roman ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017','07-03-2018','956878499',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(69,'zahida carvajal','956395164',1,NULL,'La Dehesa',NULL,'303700728','Terminado','Armados de Combos 2','Auxilia Auxilia Club Asistencia ','Mauricio Frez Pulgar ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017','07-03-2018','998865219',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(70,'Diego Contreras','2232646131',1,NULL,'La Reina',NULL,'303698209','Terminado','Instal.Aire Acondicionado','Tuten Spa Servicios ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018','07-03-2018','988266007',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(71,'GABRIEL ALFARO ORTIZ','226338600',1,NULL,'La Florida',NULL,'303695307','Terminado','Inst.Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Amparo  Soto  Cabrera ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'02-01-2018','03-01-2018','07-03-2018','92231383',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(72,'gimena herrera','953969876',1,NULL,'Viña del Mar',NULL,'2989023','Terminado','Armado de Muebles (Entre 40.001-99.999)','May Day May   Day ','Mauricio Diaz Torres ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','01-01-2018','07-03-2018','953969876',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(73,'Ana Eynaudi','994392196',1,NULL,'La Dehesa',NULL,'303691102','Terminado','Armado  de Taca Taca Tipo B','Auxilia Auxilia Club Asistencia ','Martin  Castillo Rojas ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28-12-2017','31-12-2017','07-03-2018','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:38',2,1,7,'2018-03-08 12:36:38',NULL,1),(74,'Angel Tacchi','999436586',1,NULL,'Quilín',NULL,'303688420','Terminado','Proyecto de Baño','Auxilia Auxilia Club Asistencia ','Cristina De Transito Mora  Torres ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'01-01-2018','03-01-2018','07-03-2018','999436586','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(75,'NEFER ARAYA CORTES ','83976894',1,NULL,'La Serena',NULL,'2988101','Terminado','Inst.Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Paulina Velis Zepeda ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25-12-2017','01-01-2018','07-03-2018','83976894','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(76,'DIGNA GONZALEZ HERNANDEZ','79662536',1,NULL,'La Serena',NULL,'2988072','Terminado','Instalacion Shower (Stock)','Auxilia Auxilia Club Asistencia ','Paulina Velis Zepeda ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20-12-2017','04-01-2018','07-03-2018','79662536',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(77,'ALONDRA MARDONES','222265384-957661943',1,NULL,'La Reina',NULL,'303686028','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Patricia  Valenzuela Riveros ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20-12-2017','02-01-2018','07-03-2018','222265384-957661943',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(78,'MARIELA ZERENE','992767669',1,NULL,'La Dehesa',NULL,'303685768','Terminado','Armado de Muebles (Entre 1-40.000)','Auxilia Auxilia Club Asistencia ','Mauricio Frez Pulgar ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18-12-2017','31-12-2017','07-03-2018','992767669',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(79,'ANA MARIA VILLAGRA','226678961',1,NULL,'Maipú',NULL,'303679055','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Milton Yanez Meneses ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'17-12-2017','01-01-2018','07-03-2018','226678961',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(80,'teresa leiva espinoza','94992117',1,NULL,'Quilicura',NULL,'303673125','Terminado','Maestro por Medio Día','Auxilia Auxilia Club Asistencia ','Cynthia Andrea  Bravo  Orellana ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'14-12-2017','01-01-2018','07-03-2018','27910600',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(81,'Lorena Balbi ','968472511',1,NULL,'Quilín',NULL,'303688570','Terminado','Instal.Tina de Hidromasaje','Auxilia Auxilia Club Asistencia ','Cristina De Transito Mora  Torres ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'19-12-2017','02-01-2018','07-03-2018','968472511',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(82,'KENNETH WELCH','996343494',1,NULL,'La Reina',NULL,'303671791','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'12-12-2017','01-01-2018','07-03-2018','996343494','6789546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(83,'MARTA CARRASCO FRITZ','222125024-941655576',1,NULL,'La Reina',NULL,'303667986','Terminado','Armado de Muebles (Entre 40.001-99.999)','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18-12-2017','07-01-2018','07-03-2018','222125024-941655576','99567910',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(84,'MIRNA TORRES','222431398-956074777',1,NULL,'La Reina',NULL,'303653255','Terminado','Instal.Calefont','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'04-12-2017','02-01-2018','07-03-2018','222431398-956074777',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(85,'GERDA GUBERNAPIS','993257286',1,NULL,'La Reina',NULL,'303639020','Terminado','Instal.Ceramica','Auxilia Auxilia Club Asistencia ','Carlos Foncea Maturana ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05-12-2017','01-01-2018','07-03-2018','993257286-',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(86,'FRANCISCO SAEZ POBLETE','952223959',1,NULL,'Maipú',NULL,'303645912','Terminado','Soporte Plasma - LCD','Auxilia Auxilia Club Asistencia ','Patricia Gomez Gomez Acosta ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'04-12-2017','04-01-2018','07-03-2018','952223959',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(87,'Natalia Moraga','996371843',1,NULL,'Costanera',NULL,'303642592','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Alejandra  Sanhueza Perez ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10-12-2017','01-01-2018','07-03-2018','996371843',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(88,'HILDA ELGUETA CRUCES','222827704',1,NULL,'Puente Alto',NULL,'303631307','Terminado','Calefont','Auxilia Auxilia Club Asistencia ','Belen  Padilla Mallia ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'04-12-2017','07-01-2018','07-03-2018','222827704',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(89,'DAVID ARCOS  ROSAS','973435602',1,NULL,'La Dehesa',NULL,'303573995','Terminado','Papel Mural','Auxilia Auxilia Club Asistencia ','Karen Muñoz Molina ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20-12-2017','07-01-2018','07-03-2018','973435602',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(90,'Marina Vivanco ','88071095',1,NULL,'Cerrillos',NULL,'303616432','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Maricel  Muñoz Roman ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28-11-2017','07-01-2018','07-03-2018','225012965',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(91,'jaime leiva','98161051',1,NULL,'Viña del Mar',NULL,'2975131','Terminado','Piedra Pizarra','Auxilia Auxilia Club Asistencia ','Constanza Vidal Fuentes ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'19-11-2017','02-01-2018','07-03-2018','98161051',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(92,'Guillermo Marin','222765987',1,NULL,'Quilín',NULL,'303596071','Terminado','Calefont','Auxilia Auxilia Club Asistencia ','Cristina De Transito Mora  Torres ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'12-11-2017','31-12-2017','07-03-2018','222765987',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(93,'ROBERTO ADOLFO IBARRA','965867670',1,NULL,'Costanera',NULL,'303574658','Terminado','Pintura','Auxilia Auxilia Club Asistencia ','Carolina Curiqueo  Contreras ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'12-11-2017','02-01-2018','07-03-2018','952547855',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(94,'DANIELA  MORONI GUTIERRES','92308864',1,NULL,'Costanera',NULL,'2961721','Terminado','Gasfiteria (solo proyecto diseñador)','Auxilia Auxilia Club Asistencia ','Valeria  Bravo  Galaz ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'21-11-2017','04-01-2018','07-03-2018','92308864',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,2,1,'2018-03-08 12:48:31',1,1),(95,'EVALESKA POBLETE','993315517',1,NULL,'La Florida',NULL,'303509193','Terminado','Pintura','Auxilia Auxilia Club Asistencia ','Amparo  Soto  Cabrera ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'08-11-2017','07-01-2018','07-03-2018','993315517',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,2,1,'2018-03-08 18:30:54',5,1),(96,'FRANCISCO JAUME RUEDA ','995195654 998714806',1,NULL,'La Reina',NULL,'2952090','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10-10-2017','31-12-2017','07-03-2018','995195654 998714806',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(97,'JOSE LUIS PRADO ARAVENA','57794878',1,NULL,'La Florida',NULL,'303507208','Terminado','Pintura','Auxilia Auxilia Club Asistencia ','Amparo  Soto  Cabrera ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15-10-2017','02-01-2018','07-03-2018','2866821',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(98,'DANIELA LIVACIC ALVAREZ ','98978287',1,NULL,'Costanera',NULL,'2941173','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Valeria  Bravo  Galaz ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'19-09-2017','02-01-2018','07-03-2018','98978287',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(99,'JORGE MADRID  ROJAS','76299550',1,NULL,'El Belloto',NULL,'2936434','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Katherine  Paz  Cifuentes ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'01-10-2017','02-01-2018','07-03-2018','76299550',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 18:26:14',0,1),(100,'CARMEN NUÑEZ FUENTES ','982120329',1,NULL,'Talca',NULL,'2936337','Terminado','Ceramica/ Ceramica','Auxilia Auxilia Club Asistencia / Auxilia Auxilia Club Asistencia ','Pamela  Alfan Bravo ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'07-11-2017','02-01-2018','07-03-2018','712612320',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:39',2,1,7,'2018-03-08 12:36:39',NULL,1),(101,'EUGENIO CASTILLO DIAZ','84643078',1,NULL,'La Reina',NULL,'2931484','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Carlos Foncea Maturana ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'12-09-2017','03-01-2018','07-03-2018','94706686',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(102,'CATALINA  GACITUA VALENZUELA ','942230117',1,NULL,'La Reina',NULL,'2903974','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'17-07-2017','01-01-2018','07-03-2018','229707155',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(103,'MARCELA ANDRADES FLORES','93434501-976254522',1,NULL,'La Serena',NULL,'2896194','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','Carolina Andrea Pinto Tapia ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'17-08-2017','03-01-2018','07-03-2018','93434501-976254522',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(104,'miguel candia andrade','976961417',1,NULL,'Chillán',NULL,'2896423','Terminado','Piso Flotante Normal','Auxilia Auxilia Club Asistencia ','JosÉ Caro Andrades ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20-08-2017','31-12-2017','07-03-2018','976961417',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(105,'MARIO GALARCE GALARCE ','77937011',1,NULL,'La Reina',NULL,'2885955','Terminado','Proyecto de Baño','Auxilia Auxilia Club Asistencia ','Miguel  Millar  Perez  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03-09-2017','04-01-2018','07-03-2018','77937011',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(106,'ANA LAUGA ROJAS ','88384972',1,NULL,'El Belloto',NULL,'2858788','Terminado','Ceramica','Auxilia Auxilia Club Asistencia ','Pablo Antonio De Larraechea Olguín ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03-08-2017','01-01-2018','07-03-2018','88384972',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(107,'ANA LEMUS LOPEZ','95451782',1,NULL,'Concepcion',NULL,'2846702','Terminado','Proyecto de Baño','Auxilia Auxilia Club Asistencia ','Soledad Rozas Gozalvo ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15-08-2017','02-01-2018','07-03-2018','95451782',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1),(108,'gloria pizarro morales','76211549',1,NULL,'Viña del Mar',NULL,'2697357','Terminado','Armado de Muebles a domicilio ','May Day May   Day ','Constanza Vidal Fuentes ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'09-08-2016','03-01-2018','07-03-2018','76211549',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-08 12:36:40',2,1,7,'2018-03-08 12:36:40',NULL,1);
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criterios`
--

DROP TABLE IF EXISTS `criterios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criterios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `encuesta_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criterios`
--

LOCK TABLES `criterios` WRITE;
/*!40000 ALTER TABLE `criterios` DISABLE KEYS */;
INSERT INTO `criterios` VALUES (1,'Zona Sur',1,'2018-03-05 17:18:09','2018-03-05 17:18:09'),(2,'Nuevo',3,'2018-03-06 15:15:42','2018-03-06 15:15:42'),(3,'Primer criterio',6,'2018-03-06 15:41:18','2018-03-06 15:41:18');
/*!40000 ALTER TABLE `criterios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuotas`
--

DROP TABLE IF EXISTS `cuotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `encuesta_id` int(11) NOT NULL,
  `criterio_id` int(11) DEFAULT NULL,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuotas`
--

LOCK TABLES `cuotas` WRITE;
/*!40000 ALTER TABLE `cuotas` DISABLE KEYS */;
INSERT INTO `cuotas` VALUES (1,1,1,'2018-03-07','2018-03-08',2),(2,4,0,'2018-03-01','2018-03-09',2);
/*!40000 ALTER TABLE `cuotas` ENABLE KEYS */;
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
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestas`
--

LOCK TABLES `encuestas` WRITE;
/*!40000 ALTER TABLE `encuestas` DISABLE KEYS */;
INSERT INTO `encuestas` VALUES (1,'Melon Hormigones Mensajeria','http://localhost:8080/prueba-lime/limesurvey/index.php/998811?lang=es-CL',1,'2017-12-04 13:13:31','2017-12-04 15:31:17',1,1),(2,'Nueva encuesta','http://localhost:8080/prueba-lime/limesurvey/index.php/998811?lang=es-CL',2,'2017-12-05 13:09:56','2017-12-05 13:09:56',1,1),(3,'Otra encuesta','http://localhost:8080/prueba-lime/limesurvey/index.php/998811?lang=es-CL',2,'2017-12-05 13:10:54','2018-03-02 13:14:43',1,1),(4,'Proyectos Easy','http://localhost:8080/limesurvey/index.php/318492?lang=es-CL',1,'2017-12-06 17:50:46','2018-03-02 12:38:35',2,1),(6,'Premio Permanencia','http://localhost:8080/prueba-lime/limesurvey/index.php/764876?lang=es-CL',1,'2018-02-20 09:46:44','2018-03-02 17:49:06',4,2);
/*!40000 ALTER TABLE `encuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuestas_supervisores`
--

DROP TABLE IF EXISTS `encuestas_supervisores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuestas_supervisores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `encuesta_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestas_supervisores`
--

LOCK TABLES `encuestas_supervisores` WRITE;
/*!40000 ALTER TABLE `encuestas_supervisores` DISABLE KEYS */;
INSERT INTO `encuestas_supervisores` VALUES (1,4,3),(2,1,3);
/*!40000 ALTER TABLE `encuestas_supervisores` ENABLE KEYS */;
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
  `criterio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuestas_usuarios`
--

LOCK TABLES `encuestas_usuarios` WRITE;
/*!40000 ALTER TABLE `encuestas_usuarios` DISABLE KEYS */;
INSERT INTO `encuestas_usuarios` VALUES (1,6,6,3),(2,4,6,NULL),(3,1,5,1),(4,4,7,NULL);
/*!40000 ALTER TABLE `encuestas_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_contactos`
--

DROP TABLE IF EXISTS `estado_contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_contactos`
--

LOCK TABLES `estado_contactos` WRITE;
/*!40000 ALTER TABLE `estado_contactos` DISABLE KEYS */;
INSERT INTO `estado_contactos` VALUES (1,'Disponible'),(2,'No Disponible'),(3,'Volver a llamar');
/*!40000 ALTER TABLE `estado_contactos` ENABLE KEYS */;
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
  `estado_contacto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_llamadas`
--

LOCK TABLES `estado_llamadas` WRITE;
/*!40000 ALTER TABLE `estado_llamadas` DISABLE KEYS */;
INSERT INTO `estado_llamadas` VALUES (1,'Encuestado',2),(2,'No Contesta',1),(3,'Buzón de Voz',0),(4,'Número Equivocado',2),(5,'Número No Existe',2),(6,'No Desea Contestar',2),(7,'No Contactado',1),(8,'Número Ocupado',1),(9,'Corte en Gestión/Mala Comunicación',1),(10,'No Tiene Tiempo',3),(11,'Ya Fue Encuestado',2),(12,'No Tiene Servicio a Encuestar',2),(13,'Cliente Molesto Corta',2),(14,'Se Toma Nuevo Número',3),(15,'Llamar Mas Tarde/Otro Día',3),(16,'Cliente Pide Que No Le Llamen',2),(17,'No Se Encuentra',3),(18,'Mala Comunicación',1),(19,'Número Fuera de Servicio',2);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Segundo Galdames H.','segundogaldames@gmail.com','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 10:46:08','2017-11-30 17:27:21',1),(3,'Stephanie Henriquez','shenriquez@metasolutions.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 12:37:24','2017-11-30 12:37:24',3),(4,'Kathy Kuhn','kkuhn@metaservicios.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 13:11:03','2018-02-22 17:17:10',1),(5,'Javier Martinez Ayala','jmartineza@gmail.com','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-11-30 13:14:38','2018-02-23 13:21:27',2),(6,'Segundo Galdames H.','sgaldames@metasolutions.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2017-12-05 12:55:36','2017-12-05 12:55:36',2),(7,'Pedro Morales','pmorales@gmail.com','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2018-02-28 17:55:14','2018-02-28 17:55:14',2),(8,'Maria Jose Maldonado','mmaldonado@metasolutions.cl','930fa2faf4ebaf4f5d4b6650d0f8dc8b725a8206','2018-03-01 12:15:04','2018-03-01 12:15:04',2);
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

-- Dump completed on 2018-03-09 10:04:57
