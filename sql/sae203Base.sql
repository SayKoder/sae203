-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `createur`
--

DROP TABLE IF EXISTS `createur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `createur` (
  `crea_id` int(11) NOT NULL AUTO_INCREMENT,
  `crea_nom` char(25) NOT NULL COMMENT 'Nom des créateurs des ARGs et mythes',
  `crea_plateforme` char(25) NOT NULL COMMENT 'Plateforme utilisée lors de la création de l''ARG ou mythe',
  `crea_nationalitee` char(2) NOT NULL COMMENT 'Nationalitée du créateur',
  PRIMARY KEY (`crea_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `createur`
--

LOCK TABLES `createur` WRITE;
/*!40000 ALTER TABLE `createur` DISABLE KEYS */;
INSERT INTO `createur` VALUES (1,'Anonyme','Inconnue','EN'),(2,'Alan Resnick','Youtube','US'),(3,'Michael P. Crowe','Blogs','US'),(4,'Troy Wagner et Tim Sutton','Youtube','US'),(5,'Eric Knudsen','Youtube','EN'),(6,'Sam Gorski','Blogs','US'),(7,'Troy Hasbrouck','Youtube','EN'),(8,'Matt Dymerski','Youtube','EN'),(9,' Brian Brushwood','Blogs','US'),(10,'Anonyme','Youtube','EN'),(11,'Troy Wagner','Blogs','EN'),(12,'Kris Straub','Blogs','US'),(13,'Tony Domenico','Blogs','US'),(14,'Adam Rosner','Youtube','US'),(15,'Vincent Cuseo','Fandom','EN'),(16,'Michael Divinski','Twitter','US'),(17,'Carrie Zylka','Youtube','EN'),(18,'Nick Kelly','Youtube','US'),(19,'Troy Hasbrouck','Twitter','EN'),(20,'Alan Resnick','Youtube','US'),(21,'Zack Akers','Film','EN'),(22,'Joseph DeLage','Film','EN'),(23,'Fans de Half-Life','Fandom','US'),(24,'Communeautee SCP','Blogs','X'),(25,'Jesse Petersen','Litterature','EN'),(26,' Kelly Andrew','Litterature','US'),(27,'Lewis Packwood','Blogs','US'),(28,' Eric Heisserer','Blogs','EN'),(29,'Alex Hall','Youtube','US'),(30,'42 Entertainement','Blogs','US'),(31,'Funcom','Blogs','US'),(32,'Drew Sykes','Film','EN'),(33,'Andrew Miller','Film','US'),(34,'Con Artist Games','Blogs','US'),(35,'Sarah Schachner','Youtube','US'),(36,'Nine Inch Nails','Blogs','EN'),(37,'Bill Gallagher','Film','US'),(38,'Anonyme','Blogs','EN'),(39,'Thomas Hercouët','Twitter','FR'),(40,'42 Entertainement','Blogs','US'),(41,'X','Blogs','EN'),(42,'Jesse Petersen','Blogs','US'),(43,'Brian Brushwood','Blogs','EN'),(44,'42 Entertainement','Blogs','US'),(45,'IAM','Youtube','US'),(46,'Alice & Smith','Jeux-Vidéo','EN'),(47,'Mind Candy','Blogs','US'),(48,'X','Blogs','US'),(49,'X','Film','US'),(50,'Communeautee BKR','Blogs','US');
/*!40000 ALTER TABLE `createur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mythes`
--

DROP TABLE IF EXISTS `mythes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mythes` (
  `mARG_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant des mythes et ARGs',
  `mARG_titre` char(45) NOT NULL COMMENT 'Titres des ARGs et mythes',
  `mARG_annee` year(4) NOT NULL COMMENT 'Année d''apparition/création des ARGs et mythes',
  `mARG_desc` varchar(255) NOT NULL COMMENT 'Description et resumes ',
  `mARG_photo` varchar(50) DEFAULT NULL,
  `mARG_type` char(25) NOT NULL COMMENT 'Types de l''histoire (entre ARG ou mythe d''internet : tréfond, début de l''iceberg ...)',
  `mARG_popularitee` char(15) NOT NULL COMMENT 'Montrer son influence/popularitee sur le web (Faible/FOrt/Trés fort/Traumatisant...)',
  `_crea_id` int(11) NOT NULL COMMENT 'Identifiant créateurs ARGs et mythes (clé étrangère)',
  PRIMARY KEY (`mARG_id`),
  KEY `crea_id` (`_crea_id`),
  CONSTRAINT `crea_id` FOREIGN KEY (`_crea_id`) REFERENCES `createur` (`crea_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mythes`
--

LOCK TABLES `mythes` WRITE;
/*!40000 ALTER TABLE `mythes` DISABLE KEYS */;
INSERT INTO `mythes` VALUES (2,'alantutorial',2011,'un homme qui crée des tutoriels étranges et déroutants. Les vidéos contiennent des éléments perturbants et une histoire complexe qui se déroule au fil du temps.','alantutorial.jpg','ARG','Connu',2),(3,'The Wests Records',2013,'The West Records suit l\'histoire d\'un groupe de scientifiques qui tentent de comprendre les mystères d\'une ville abandonnée. Ils découvrent bientôt qu\'ils sont en danger et qu\'ils doivent trouver un moyen de s\'en sortir.','thewestrecords.jpg','Mythe','Connu',3),(4,'Clear Lakes 44 / Slender-man',2014,'Clear Lakes 44 suit l\'histoire d\'un homme qui commence à recevoir des appels étranges d\'une entreprise mystérieuse. Il découvre bientôt qu\'il est suivi par une présence inquiétante, le Slender Man.','clearlake44.png','Mythe','Trés Connu',4),(8,'fdg',2013,'Bonjour','2023_03_21_13_53_34---Chaise.jpg','ml','sef',1);
/*!40000 ALTER TABLE `mythes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-22 16:16:58
