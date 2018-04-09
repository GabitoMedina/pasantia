-- MySQL dump 10.13  Distrib 5.6.38, for Linux (x86_64)
--
-- Host: localhost    Database: costadro_braupecomp
-- ------------------------------------------------------
-- Server version	5.6.38

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `tipoidentificacion` varchar(3) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `estado` char(3) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nombres`, `tipoidentificacion`, `identificacion`, `telefono`, `celular`, `email`, `direccion`, `estado`) VALUES (1,'Consumidor Final','1','9999999999999','9999999999','','xx@gg.com','xxxxx','ACT'),(2,'Bryan Fernandez ','1','00000000000','999999999','','xx@gg.com','xx','ACT'),(3,'Georgina Cecibel Cedeño Mendez','1','1311199390','0959478889','0959478889','gccm@gg.com','','ACT');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ruc` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracion`
--

LOCK TABLES `configuracion` WRITE;
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;
INSERT INTO `configuracion` (`id`, `nombre`, `direccion`, `ruc`, `telefono`, `celular`, `email`, `logo`) VALUES (1,'BrauPeComp Tecnologies','EL EMPALME - SAN VICENTE Y SALINAS, CALLE 21 (Mz - 03; S - 05)',' 1311136954001 ','999999999','0997890738','brau_ps@hotmail.com','resource/ConfigIMG/logo.png');
/*!40000 ALTER TABLE `configuracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleproforma`
--

DROP TABLE IF EXISTS `detalleproforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleproforma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproforma` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioProveedor` decimal(12,2) DEFAULT NULL,
  `precioComision` decimal(12,2) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idx_detalleproforma__producto` (`idproducto`) USING BTREE,
  KEY `idx_detalleproforma__proforma` (`idproforma`) USING BTREE,
  CONSTRAINT `fk_detalleproforma__producto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`),
  CONSTRAINT `fk_detalleproforma__proforma` FOREIGN KEY (`idproforma`) REFERENCES `proforma` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleproforma`
--

LOCK TABLES `detalleproforma` WRITE;
/*!40000 ALTER TABLE `detalleproforma` DISABLE KEYS */;
INSERT INTO `detalleproforma` (`id`, `idproforma`, `idproducto`, `cantidad`, `precioProveedor`, `precioComision`, `orden`) VALUES (1,1,1,1,130.00,0.00,0),(2,2,3,1,130.00,0.00,0),(3,2,2,1,20.00,0.00,1),(4,3,3,1,130.00,10.00,0),(5,3,4,1,30.00,0.00,1),(6,3,2,1,20.00,5.00,2),(7,4,18,1,174.00,10.00,1),(8,4,19,1,402.68,10.00,2),(9,4,20,4,96.44,20.00,3),(10,4,8,1,50.00,10.00,4),(11,4,21,1,950.00,10.00,5),(12,4,22,1,152.84,10.00,6),(13,4,23,1,71.27,10.00,7),(14,4,24,1,258.93,10.00,8),(15,4,25,1,238.64,10.00,9),(16,4,3,1,0.00,0.00,0),(17,5,3,1,0.00,0.00,0),(18,5,4,1,35.00,10.00,1),(19,5,13,2,30.00,5.00,2),(20,6,26,1,0.00,0.00,0),(21,6,27,1,56.78,0.00,1),(22,6,15,1,122.00,0.00,2),(23,6,28,1,55.65,0.00,3),(24,6,8,1,46.79,0.00,4),(25,6,29,1,33.00,0.00,5),(27,7,26,1,0.00,0.00,0),(28,7,27,1,56.78,0.00,1),(29,7,31,1,61.30,0.00,2),(30,7,2,1,97.00,0.00,3),(31,7,8,1,46.79,0.00,4),(32,7,29,1,33.00,0.00,5),(33,7,30,1,91.02,0.00,6),(34,8,26,5,0.00,0.00,0),(35,8,27,5,56.78,0.00,1),(36,8,15,5,122.00,0.00,2),(37,8,28,5,55.65,0.00,3),(38,8,8,5,46.79,0.00,4),(39,8,29,5,33.00,0.00,5),(41,8,33,5,67.60,0.00,6),(45,9,8,1,46.79,0.00,4),(47,9,34,1,202.27,0.00,7),(48,9,2,1,97.00,0.00,3),(52,9,37,1,37.00,0.00,8),(53,9,38,1,113.78,0.00,1),(54,9,39,1,128.79,0.00,2),(55,9,40,1,85.46,0.00,9),(57,9,35,1,54.00,0.00,5),(58,9,42,1,30.00,0.00,6),(60,9,44,1,0.00,0.00,0),(61,6,45,1,110.10,0.00,6),(62,10,44,1,0.00,0.00,0),(63,10,38,1,113.78,0.00,1),(64,10,39,1,128.79,0.00,2),(65,10,2,1,97.00,0.00,3),(66,10,8,1,46.79,0.00,4),(67,10,35,1,54.00,0.00,5),(68,10,42,1,30.00,0.00,6),(69,10,37,1,37.00,0.00,7),(70,11,46,1,0.00,0.00,0),(71,11,47,1,228.00,0.00,1),(72,11,48,1,197.00,0.00,2),(73,11,2,1,97.00,0.00,3),(74,11,8,1,46.79,0.00,4),(75,11,41,1,48.00,0.00,5),(76,11,49,1,280.00,0.00,6),(77,11,16,1,59.56,0.00,7),(78,11,50,1,58.55,0.00,8),(79,11,4,1,32.00,0.00,9),(80,12,51,1,0.00,0.00,0),(81,12,52,1,363.42,0.00,1),(82,12,38,1,113.78,0.00,2),(83,12,2,1,96.43,0.00,3),(84,12,53,1,89.93,0.00,4),(85,12,8,1,46.79,0.00,5),(86,12,41,1,48.00,0.00,6),(87,12,54,1,37.00,0.00,7),(88,12,55,1,86.62,0.00,8),(89,13,56,1,0.00,0.00,0),(90,13,57,1,180.42,0.00,1),(91,13,1,1,326.00,0.00,2),(92,13,2,1,96.43,0.00,3),(93,13,8,1,46.79,0.00,4),(94,13,13,1,30.00,0.00,5),(95,13,54,1,37.00,0.00,6),(96,14,58,1,0.00,0.00,0),(97,14,59,1,1174.00,0.00,1),(98,14,60,1,297.60,0.00,2),(99,14,2,4,96.43,0.00,3),(100,14,61,1,0.00,0.00,4),(101,15,46,1,0.00,0.00,0),(102,15,62,1,282.00,0.00,1),(103,15,48,1,197.00,0.00,2),(104,15,2,1,96.47,0.00,3),(106,15,64,1,66.88,0.00,4),(107,15,8,1,46.79,0.00,5),(108,15,41,1,48.00,0.00,6),(109,16,65,1,0.00,0.00,0),(110,16,1,1,326.00,0.00,1),(111,16,66,1,87.27,0.00,2),(112,16,2,1,97.00,0.00,3),(113,16,67,1,368.13,0.00,4),(114,16,8,1,46.79,0.00,5),(115,16,10,1,37.00,0.00,6),(116,16,41,1,48.00,0.00,7),(117,16,68,1,47.00,0.00,8),(118,16,69,1,14.50,0.00,9),(119,16,32,1,80.59,0.00,10),(120,16,70,1,25.00,0.00,11),(121,17,65,1,0.00,0.00,0),(122,17,1,1,326.00,0.00,1),(123,17,66,1,87.27,0.00,2),(124,17,2,1,97.00,0.00,3),(125,17,8,1,46.79,0.00,4),(126,17,41,1,48.00,0.00,5),(127,17,68,1,47.00,0.00,6),(128,17,71,1,239.00,0.00,7),(129,17,16,1,59.56,0.00,8),(130,17,70,1,25.00,0.00,9),(131,18,72,1,0.00,0.00,0),(132,18,48,1,197.00,0.00,1),(133,18,2,2,97.00,0.00,2),(134,18,47,1,228.25,0.00,3),(135,18,71,1,239.00,0.00,4),(136,18,53,1,84.25,0.00,5),(137,19,72,1,0.00,0.00,0),(138,19,48,1,197.00,0.00,1),(139,19,2,2,97.00,0.00,2),(140,19,47,1,228.25,0.00,3),(141,19,71,1,239.00,0.00,4),(142,19,73,1,166.00,0.00,5),(143,20,26,1,0.00,0.00,0),(144,20,7,1,58.95,0.00,1),(145,20,15,1,122.00,0.00,2),(146,20,2,1,96.43,0.00,3),(147,20,8,1,48.75,0.00,4),(148,20,29,1,33.00,0.00,5),(149,20,69,1,14.50,0.00,6),(150,21,26,1,0.00,0.00,0),(151,21,7,1,58.95,0.00,1),(152,21,15,1,122.00,0.00,2),(153,21,8,1,48.75,0.00,3),(154,21,29,1,33.00,0.00,4),(155,21,69,1,14.50,0.00,5),(156,21,28,1,52.30,0.00,6),(158,22,7,1,58.95,0.00,1),(159,22,31,1,53.00,0.00,2),(160,22,2,1,96.43,0.00,3),(161,22,8,1,48.75,0.00,4),(162,22,29,1,33.00,0.00,5),(163,22,69,1,14.50,0.00,6),(164,22,75,1,0.00,0.00,0),(168,23,2,1,96.43,0.00,1),(169,23,8,1,48.75,0.00,2),(170,23,13,1,28.23,0.00,3),(171,23,55,1,86.62,0.00,4),(172,23,76,1,37.75,0.00,5),(173,23,77,1,0.00,0.00,0),(174,23,78,1,127.00,0.00,6),(175,23,79,1,160.00,0.00,7),(179,24,28,1,52.30,10.00,3),(180,24,10,1,37.00,10.00,4),(181,24,5,1,0.00,0.00,0),(182,24,7,1,58.95,10.00,1),(183,24,15,1,122.00,10.00,2),(184,24,29,1,33.00,10.00,5),(185,25,51,1,0.00,0.00,0),(186,25,52,1,328.40,0.00,1),(187,25,38,1,113.78,0.00,2),(188,25,2,2,96.43,0.00,3),(189,25,53,1,84.25,0.00,4),(190,25,8,1,46.79,0.00,5),(191,25,41,1,48.00,0.00,6),(192,25,54,1,37.00,0.00,7),(193,25,81,1,111.29,0.00,8),(194,26,65,1,0.00,0.00,0),(195,26,82,1,126.28,0.00,1),(196,26,1,1,326.00,0.00,2),(197,26,2,4,97.00,0.00,3),(198,26,8,1,48.00,0.00,4),(199,26,41,1,48.00,0.00,5),(200,26,70,1,25.00,0.00,6),(201,26,69,1,0.00,0.00,7),(202,27,26,1,0.00,0.00,0),(203,27,27,1,58.95,10.00,1),(204,27,15,1,122.00,10.00,2),(205,27,28,1,52.30,10.00,3),(206,27,8,1,47.00,10.00,4),(207,27,29,1,33.00,10.00,5),(209,27,84,1,265.39,10.00,6),(210,27,69,1,14.50,1.00,7),(211,28,87,1,140.00,0.00,0),(215,29,4,1,120.00,0.00,0),(216,30,88,1,0.00,0.00,0),(217,30,89,1,2.73,5.00,1),(218,30,90,1,5.70,5.00,2),(219,30,91,1,3.00,5.00,3),(220,30,92,1,5.00,5.00,4),(221,30,93,1,14.16,5.00,5),(222,30,94,1,48.63,10.00,6),(223,30,95,1,3.31,5.00,7),(224,30,96,1,2.71,5.00,8),(225,30,97,1,83.39,15.00,9),(226,30,98,1,90.00,10.00,10),(227,30,99,1,7.82,5.00,11),(228,30,100,1,49.00,10.00,12),(229,30,101,1,36.00,10.00,13),(230,30,102,1,13.00,5.00,14),(231,31,88,1,0.00,0.00,0),(232,31,89,1,2.73,5.00,1),(233,31,90,1,5.70,5.00,2),(234,31,91,1,3.00,5.00,3),(235,31,92,1,5.00,5.00,4),(236,31,93,1,14.16,5.00,5),(237,31,94,1,48.63,10.00,6),(238,31,95,1,3.31,5.00,7),(239,31,96,1,2.71,5.00,8),(240,31,97,1,83.39,15.00,9),(241,31,98,1,90.00,10.00,10),(242,31,99,1,7.82,5.00,11),(243,31,100,1,49.00,10.00,12),(244,31,101,1,36.00,10.00,13),(245,31,102,1,13.00,5.00,14),(246,32,22,1,160.00,0.00,0),(247,33,103,1,0.00,0.00,0),(248,33,104,4,67.88,0.00,1),(249,33,105,5,110.03,0.00,2),(250,33,106,1,56.16,0.00,3),(251,33,107,4,38.93,0.00,4),(252,33,108,5,28.24,0.00,5),(253,33,109,4,130.93,0.00,6),(254,33,110,5,89.93,0.00,7),(255,33,111,5,31.38,0.00,8),(256,33,112,6,58.93,0.00,9),(257,33,113,1,14.67,0.00,10),(258,33,114,1,12.55,0.00,11),(259,33,115,1,226.86,0.00,12),(260,33,116,1,180.11,0.00,13),(261,34,26,5,0.00,0.00,0),(262,34,27,5,56.23,0.00,1),(263,34,109,5,122.00,0.00,2),(264,34,105,5,101.00,0.00,3),(265,34,8,5,48.97,0.00,4),(266,34,13,5,28.34,0.00,5),(267,34,117,5,12.05,0.00,6),(268,34,118,5,20.20,0.00,7),(269,34,55,5,99.54,0.00,8),(270,34,119,5,81.00,0.00,9),(271,35,120,1,0.00,0.00,0),(272,35,121,1,187.00,0.00,1),(273,35,122,1,107.09,0.00,2),(274,35,123,2,57.52,0.00,3),(275,35,124,1,67.30,0.00,4),(276,35,125,1,316.72,0.00,5);
/*!40000 ALTER TABLE `detalleproforma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `garantia`
--

DROP TABLE IF EXISTS `garantia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `garantia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `estado` char(3) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `garantia`
--

LOCK TABLES `garantia` WRITE;
/*!40000 ALTER TABLE `garantia` DISABLE KEYS */;
INSERT INTO `garantia` (`id`, `descripcion`, `estado`) VALUES (1,'ANTE DEFECTOS DE FABRICACIÓN: 3 Años en Monitor, mainboard, gráfica y procesador.					\r\n1 año en resto de componentes y partes.	','ACT'),(2,'ANTE DEFECTOS DE FABRICACIÓN: 1 año en periféricos Marvo','ACT'),(3,'ANTE DEFECTOS DE FABRICACIÓN: 6 meses en periféricos Havit','ACT'),(4,'Ninguno 12','ACT');
/*!40000 ALTER TABLE `garantia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `estado` varchar(3) NOT NULL,
  `observacion` text,
  PRIMARY KEY (`id`) USING BTREE,
  FULLTEXT KEY `index_name` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`id`, `descripcion`, `estado`, `observacion`) VALUES (1,'Procesador Intel Core I7-7700 - 3.6ghz - ','ACT',NULL),(2,'Ram MUSHKIN DDR4 8GB 2666mhz','ACT',NULL),(3,'Pc intel i7 oficina','ACT',NULL),(4,'Combo Mouse y Teclado Gamer Marvo K400L Iluminado ','ACT',NULL),(5,'Pc Intel i3 Kaby Lake','ACT',NULL),(6,'Procesador Intel Pentium G4560 - 3.5 GHz','ACT',NULL),(7,'Mainboard ASUS H110M-P','ACT',NULL),(8,'Disco duro 1 Tera sata 3 6gbps','ACT',NULL),(9,' Case Gaming Gamemax G527 ','ACT',NULL),(10,' Fuente De Poder Game-max 650w ','ACT',NULL),(11,'Mainboard Asus H110m-d Lga1151','ACT',NULL),(12,'Ram Kingston 8gb Ddr4 Pc-2133','ACT',NULL),(13,'SPEEDMIND CASE GAMER','ACT',NULL),(14,'SM PS600W FUENTE PODER','ACT',NULL),(15,'Procesador Intel Core I3-7100 - 3.9ghz -','ACT',NULL),(16,'Fuente De Poder Evga 80 Plus 600w ','ACT',NULL),(17,'Case Q-one Lgx-5901 Combo','ACT',NULL),(18,'MAINBOARD  Asus Z370 Plus Gaming','ACT',NULL),(19,'PROCESADOR Intel Core I7-8700k - 3.7ghz','ACT',NULL),(20,'Ram MUSHKIN DDR4 32GB 2666MHz (4x8gb)','ACT',NULL),(21,'Gráfica Asus Strix Gaming Gtx-1080ti 11gb','ACT',NULL),(22,'FUENTE CORSAIR RMx Series RM850X','ACT',NULL),(23,'CASE CORSAIR CARBIDE SPEC-04 BLACK/RED','ACT',NULL),(24,'SSD M.2 Samsung EVO 960 de 500gb ','ACT',NULL),(25,'Monitor FLAT PANEL AOC 23\"FHD 1080p','ACT',NULL),(26,'Pc Gamer Intel i3 Kaby Lake','ACT',NULL),(27,'Mainboard ASUS PRIME H110M-P ','ACT',NULL),(28,'MEMORIA RAM ADATA 4GB DDR4 2400MHZ','ACT',NULL),(29,'Case Q-one Lgx-5901 Combo (mouse + teclado + parlantes)','ACT',NULL),(30,'TARJETA DE VIDEO ASUS GT1030 2GB GDDR5','ACT',NULL),(31,'PROCESADOR INTEL PENTIUM G4400 3.3GHZ ','ACT',NULL),(32,' Monitor LED LG 20MP38HQ - 20 - VGA y HDMI','ACT',NULL),(33,'Monitor Aoc 16\" E1670swu Led','ACT',NULL),(34,'MONITOR SAMSUNG 21.5\" SLIM LED - HDMI - VGA','ACT',NULL),(35,' SSD Adata 120gb Su650 Sata','ACT',NULL),(36,' TARJETA DE VIDEO ASUS DUAL GXT1060TI 3GB','ACT',NULL),(37,'Fuente De Poder Game-max 650w - 80 plus Bronce','ACT',NULL),(38,'MAINBOARD GIGABYTE AB350M-GAMING 3','ACT',NULL),(39,'PROCESADOR AMD RYZEN 3 1200','ACT',NULL),(40,'Gráfica Gigabyte GV-N1030D5-2GL ','ACT',NULL),(41,'Case Gaming Gamemax G536','ACT',NULL),(42,'Case Micro-gaming Gamemax H603','ACT',NULL),(43,'Gastos Envío','INA',''),(44,'Pc AMD Ryzen 3 1200','ACT',NULL),(45,' TARJETA DE VIDEO GIGABYTE RX-550 GAMING OC-2GD','ACT',NULL),(46,'Pc intel i5 Coofee Lake - 8va Generación','ACT',NULL),(47,'Mainboard Gigabyte Z370 Aorus Gaming 3','ACT',NULL),(48,'Procesador Intel Core I5-8400 - 2.8ghz - ','ACT',NULL),(49,'TARJETA DE VIDEO ASUS DUAL GXT 1060 3GB','ACT',NULL),(50,'Unidad en estado sólido M.2 - 120 GB - WD Green','ACT',NULL),(51,'Computador AMD Ryzen 7 ','ACT',NULL),(52,'PROCESADOR AMD RYZEN 7-1700 3.0ghz','ACT',NULL),(53,'Unidad en estado sólido WD Green 240 GB','ACT',NULL),(54,'Fuente De Poder Game-max 650w','ACT',NULL),(55,'MSI GT 1030 AERO ITX 2G OC - Tarjeta gráfica','ACT',NULL),(56,'Computador Intel i7 Kaby Lake','ACT',NULL),(57,'MAINBOARD ASUS ROG STRIX Z270H GAMING ','ACT',NULL),(58,'Workstation Intel i9 ','ACT',NULL),(59,'Procesador Intel Core I9-7900x 3.3ghz 13.75mb 10nucleos 20 Hilos','ACT',NULL),(60,'Mainboard MSI X299 SLI PLUS','ACT',NULL),(61,'','INA',NULL),(62,'Mainboard Gigabyte Z370 Aorus Gaming 5','ACT',NULL),(63,'','INA',NULL),(64,'Fuente de Poder EVGA 600B Bronze','ACT',NULL),(65,'Combo Intel i7 Kaby Lake - Gaming','ACT',NULL),(66,'MAINBOARD ASUS PRIME B250M-A','ACT',NULL),(67,'TARJETA DE VIDEO GIGABYTE GTX 1060 6GB','ACT',NULL),(68,' Unidad en estado sólido WD Green 120gb','ACT',NULL),(69,'Dvd-rwriter Lg Gh24nc0 24x','ACT',NULL),(70,'GRATIS COMBO MOUSE Y TECLADO ILUMINADO ','ACT',NULL),(71,'Tarjeta de video Asus Gtx-1050ti 4gb ','ACT',NULL),(72,'Hardware Intel i5 Coofee Lake','ACT',NULL),(73,'Ssd Kingston 480gb A400','ACT',NULL),(74,'','INA',NULL),(75,'PC Intel Pentium Dual core','ACT',NULL),(76,'Fuente de Poder EVGA 400W','ACT',NULL),(77,'','INA',NULL),(78,'Procesador Intel Core I3-8100 - 3.6ghz - ','ACT',NULL),(79,'Mainboard Asus Z370-p Prime','ACT',NULL),(80,'Pc intel i3 Coofee Lake','ACT',NULL),(81,'Tarjeta de Video Asus RX550 2gb','ACT',NULL),(82,' MAINBOARD GIGABYTE B250 GAMING B8 ','ACT',NULL),(83,' Monitor AOC 19.5\" LED HDMI-VGA ','ACT',NULL),(84,'FLAT PANEL SAMSUNG 24\" LED CURVO ','ACT',NULL),(85,'aa','ACT',NULL),(86,'aaa','ACT',NULL),(87,'a','ACT',NULL),(88,'Periféricos y Redes','ACT',NULL),(89,'Xtech - Optical mouse - USB','ACT',NULL),(90,'Teclado Genius Kb 125 Usb','ACT',NULL),(91,'CABLE DE PODER ','ACT',NULL),(92,'CABLE DE PODER - TRES PATAS','ACT',NULL),(93,'Teclado Genius + Mouse Slimstar Kb-8000x Wireless','ACT',NULL),(94,'PARLANTES Klip Xtreme KWS-616 2.1 ','ACT',NULL),(95,'Forza - Power extension cable - 3m','ACT',NULL),(96,'REGLETA FORZA - 6 CONECTORES','ACT',NULL),(97,'Nexxt Cable UTP Cat5e - Gris','ACT',NULL),(98,'Linksys Business LAPN300 - Punto de acceso','ACT',NULL),(99,'SWICTH Nexxt - 8 puertos','ACT',NULL),(100,'DISCOS DUROS 1 tb interno','ACT',NULL),(101,'MEMORIA RAM DDR3 4GB','ACT',NULL),(102,' FUENTE PODER PARA DESKTOP ATX 600W','ACT',NULL),(103,'Computadoras para Cyber Gaming - Kaby Lake','ACT',NULL),(104,'Mainboard  ASUS H110M-P	','ACT',NULL),(105,'Ram DDR4 Adata 8Gb Pc-2400','ACT',NULL),(106,'Disco duro 1 Tera sata 3 6Gbps','ACT',NULL),(107,'Speedmind Case Gamer','ACT',NULL),(108,'Combo Genius KMH-200 Teclado, Mouse y auriculares Gamer','ACT',NULL),(109,'Procesador Intel Core i3-7100 - 3,9Ghz','ACT',NULL),(110,'Monitor Aocc 22in Vga Led E2270swn','ACT',NULL),(111,'Fuente de Poder speedmind gamers 800W','ACT',NULL),(112,'Kigston SSDNow A400 120Gb','ACT',NULL),(113,'Switch D-Link DES 1008A','ACT',NULL),(114,'Conectores Nexxt RJ45','ACT',NULL),(115,'Servidor para Cyber','ACT',NULL),(116,'Refrigeracion para Case Speedmind (5 unidades)','ACT',NULL),(117,'Fuente de poder Speedmind PS600W','ACT',NULL),(118,'Combo Teclado + mouse + auricular Gaming Genius Kmh-200 ','ACT',NULL),(119,'Monitor Aoc 20inc E2070swhn Hdmi - vga','ACT',NULL),(120,'Pc intel i5 Kaby Lake','ACT',NULL),(121,'Procesador Intel Core I5-7400 - 3.5ghz - ','ACT',NULL),(122,'MAINBOARD GIGABYTE B250M-GAMING5','ACT',NULL),(123,'Ram HyperX FURY ddr4 4gb 2400mhz','ACT',NULL),(124,'Fuente de Poder EVGA 600B Bronze ','ACT',NULL),(125,'TARJETA DE VIDEO ASUS PH-GTX1050TI-4G','ACT',NULL);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proforma`
--

DROP TABLE IF EXISTS `proforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proforma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `ganancia` decimal(12,2) NOT NULL,
  `envio` decimal(12,2) DEFAULT NULL,
  `idgarantia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idx_proforma__cliente` (`idcliente`) USING BTREE,
  KEY `fk_proforma__garantia` (`idgarantia`) USING BTREE,
  CONSTRAINT `fk_proforma__cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `fk_proforma__garantia` FOREIGN KEY (`idgarantia`) REFERENCES `garantia` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proforma`
--

LOCK TABLES `proforma` WRITE;
/*!40000 ALTER TABLE `proforma` DISABLE KEYS */;
INSERT INTO `proforma` (`id`, `codigo`, `fecha`, `idcliente`, `ganancia`, `envio`, `idgarantia`) VALUES (1,'2018-0001','2018-01-22 00:00:00',1,1.00,1.00,1),(2,'2018-0002','2018-01-22 00:00:00',1,0.00,0.00,1),(3,'2018-0003','2018-01-22 00:00:00',1,40.00,0.00,1),(4,'2018-0004','2018-01-22 00:00:00',1,0.00,0.00,1),(5,'2018-0005','2018-01-22 00:00:00',1,0.00,10.00,1),(6,'2018-0006','2018-01-22 00:00:00',1,60.00,15.00,1),(7,'2018-0007','2018-01-22 00:00:00',1,60.00,15.00,1),(8,'2018-0008','2018-01-22 00:00:00',2,200.00,60.00,1),(9,'2018-0009','2018-01-22 00:00:00',1,90.00,20.00,1),(10,'2018-0010','2018-01-23 00:00:00',1,70.00,10.00,1),(11,'2018-0011','2018-01-25 00:00:00',1,80.00,15.00,1),(12,'2018-0012','2018-01-29 00:00:00',1,80.00,15.00,1),(13,'2018-0013','2018-01-29 00:00:00',1,60.00,15.00,1),(14,'2018-0014','2018-01-29 00:00:00',1,0.00,20.00,1),(15,'2018-0015','2018-01-30 00:00:00',1,60.00,15.00,1),(16,'2018-0016','2018-01-31 00:00:00',1,100.00,15.00,1),(17,'2018-0017','2018-02-03 00:00:00',1,90.00,15.00,1),(18,'2018-0018','2018-02-03 00:00:00',1,50.00,10.00,1),(19,'2018-0019','2018-02-03 00:00:00',1,50.00,10.00,1),(20,'2018-0020','2018-02-06 00:00:00',1,62.00,10.00,1),(21,'2018-0021','2018-02-06 00:00:00',1,61.00,0.00,1),(22,'2018-0022','2018-02-06 00:00:00',1,60.00,0.00,1),(23,'2018-0023','2018-02-07 00:00:00',1,70.00,15.00,1),(24,'2018-0024','2018-02-08 00:00:00',1,0.00,10.00,1),(25,'2018-0025','2018-02-08 00:00:00',1,80.00,0.00,1),(26,'2018-0026','2018-02-08 00:00:00',1,0.00,0.00,1),(27,'2018-0027','2018-02-08 00:00:00',1,0.00,0.00,1),(28,'2018-0028','2018-03-05 00:00:00',1,0.00,15.00,1),(29,'2018-0029','2018-03-07 00:00:00',1,0.00,0.00,1),(30,'2018-0030','2018-03-07 00:00:00',1,0.00,10.00,1),(31,'2018-0031','2018-03-07 00:00:00',1,0.00,0.00,1),(32,'2018-0032','2018-03-11 00:00:00',1,0.00,0.00,1),(33,'2018-0033','2018-03-12 00:00:00',3,0.00,10.00,1),(34,'2018-0034','2018-03-14 00:00:00',1,350.00,10.00,1),(35,'2018-0035','2018-03-19 00:00:00',1,50.00,15.00,1);
/*!40000 ALTER TABLE `proforma` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`costadro`@`localhost`*/ /*!50003 TRIGGER `tgrProforma` BEFORE INSERT ON `proforma` FOR EACH ROW BEGIN
		set @auto_id := (SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES
                         WHERE TABLE_NAME='proforma' AND TABLE_SCHEMA=DATABASE() );
	  set @codigo = SUBSTRING(CONCAT("0000",@auto_id),-4,4);
		set NEW.codigo = CONCAT(YEAR(New.fecha),"-",@codigo);

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `estado` char(3) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id`, `descripcion`, `estado`) VALUES (1,'Administrador','ACT'),(2,'Vendedor','ACT');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u` varchar(255) NOT NULL,
  `p` blob NOT NULL,
  `estado` char(3) DEFAULT NULL,
  `idrol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idrol` (`idrol`) USING BTREE,
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `u`, `p`, `estado`, `idrol`) VALUES (1,'Brau93lio','����n[�]�+p','ACT',1),(2,'kbsg','��A','ACT',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`costadro`@`localhost`*/ /*!50003 TRIGGER `tgrInsertUsuario` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
		set NEW.p = ENCODE(NEW.p,'pass');  
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`costadro`@`localhost`*/ /*!50003 TRIGGER `tgrUpdUsuario` BEFORE UPDATE ON `usuario` FOR EACH ROW BEGIN
		set NEW.p = ENCODE(NEW.p,'pass');  
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Temporary table structure for view `viewdetalleproforma`
--

DROP TABLE IF EXISTS `viewdetalleproforma`;
/*!50001 DROP VIEW IF EXISTS `viewdetalleproforma`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viewdetalleproforma` AS SELECT 
 1 AS `id`,
 1 AS `idproforma`,
 1 AS `idproducto`,
 1 AS `cantidad`,
 1 AS `precioProveedor`,
 1 AS `precioComision`,
 1 AS `producto`,
 1 AS `orden`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `viewproforma`
--

DROP TABLE IF EXISTS `viewproforma`;
/*!50001 DROP VIEW IF EXISTS `viewproforma`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viewproforma` AS SELECT 
 1 AS `id`,
 1 AS `codigo`,
 1 AS `fecha`,
 1 AS `idcliente`,
 1 AS `ganancia`,
 1 AS `envio`,
 1 AS `idgarantia`,
 1 AS `nombres`,
 1 AS `garantia`,
 1 AS `productos`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'costadro_braupecomp'
--

--
-- Dumping routines for database 'costadro_braupecomp'
--

--
-- Final view structure for view `viewdetalleproforma`
--

/*!50001 DROP VIEW IF EXISTS `viewdetalleproforma`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`costadro`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewdetalleproforma` AS select `dp`.`id` AS `id`,`dp`.`idproforma` AS `idproforma`,`dp`.`idproducto` AS `idproducto`,`dp`.`cantidad` AS `cantidad`,`dp`.`precioProveedor` AS `precioProveedor`,`dp`.`precioComision` AS `precioComision`,`p`.`descripcion` AS `producto`,`dp`.`orden` AS `orden` from (`detalleproforma` `dp` join `producto` `p` on((`p`.`id` = `dp`.`idproducto`))) order by `dp`.`orden` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewproforma`
--

/*!50001 DROP VIEW IF EXISTS `viewproforma`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`costadro`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewproforma` AS select `p`.`id` AS `id`,`p`.`codigo` AS `codigo`,`p`.`fecha` AS `fecha`,`p`.`idcliente` AS `idcliente`,`p`.`ganancia` AS `ganancia`,`p`.`envio` AS `envio`,`p`.`idgarantia` AS `idgarantia`,`c`.`nombres` AS `nombres`,`g`.`descripcion` AS `garantia`,count(`dtp`.`id`) AS `productos` from ((((`proforma` `p` join `cliente` `c` on((`c`.`id` = `p`.`idcliente`))) join `garantia` `g` on((`g`.`id` = `p`.`idgarantia`))) join `detalleproforma` `dtp` on((`dtp`.`idproforma` = `p`.`id`))) join `producto` `prod` on((`prod`.`id` = `dtp`.`idproducto`))) group by `p`.`id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-20 15:28:32


DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idx_proforma__cliente` (`idcliente`) USING BTREE,
  CONSTRAINT `fk_servicio__cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;



DROP TABLE IF EXISTS `caractequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caractequipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `marca` varchar (100)DEFAULT NULL,
  `modelo` varchar (100)DEFAULT NULL,
  `serie` varchar (100)DEFAULT NULL,
  `cargador` varchar (5)DEFAULT NULL,
  `bateria` varchar (5)DEFAULT NULL,
  `accesorios` varchar (5)DEFAULT NULL,
  `otroCentro` varchar (5)DEFAULT NULL,
   PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `detalleservicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleservicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipempresa` varchar(5) DEFAULT NULL,
  `producto` varchar (100)DEFAULT NULL,
  `marca` varchar (100)DEFAULT NULL,
  `modelo` varchar (100)DEFAULT NULL,
  `tiporespaldo` varchar (200)DEFAULT NULL,
  `respaldo` varchar (100)DEFAULT NULL,
  `programa` varchar (100)DEFAULT NULL,
  `costo` decimal(12,2) DEFAULT NULL,
  `abono` decimal(12,2) DEFAULT NULL,
  `saldo` decimal(12,2) DEFAULT NULL,
  `idservicio` int(11) DEFAULT NULL,
  `idcaractequipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idx_detalleservicio__servicio` (`idservicio`) USING BTREE,
  KEY `fk_detalleservicio__caractequipo` (`idcaractequipo`) USING BTREE,
  CONSTRAINT `idx_detalleservicio__servicio` FOREIGN KEY (`idservicio`) REFERENCES `servicio` (`id`),
  CONSTRAINT `fk_detalleservicio__caractequipo` FOREIGN KEY (`idcaractequipo`) REFERENCES `caractequipo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;


