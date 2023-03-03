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
-- Table structure for table `Createur`
--

DROP TABLE IF EXISTS `Createur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Createur` (
  `crea_id` int(11) NOT NULL AUTO_INCREMENT,
  `crea_nom` char(25) NOT NULL COMMENT 'Nom des créateurs des ARGs et mythes',
  `crea_plateforme` char(25) NOT NULL COMMENT 'Plateforme utilisée lors de la création de l''ARG ou mythe',
  `crea_nationalitee` char(2) NOT NULL COMMENT 'Nationalitée du créateur',
  PRIMARY KEY (`crea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Createur`
--

LOCK TABLES `Createur` WRITE;
/*!40000 ALTER TABLE `Createur` DISABLE KEYS */;
/*!40000 ALTER TABLE `Createur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Mythes`
--

DROP TABLE IF EXISTS `Mythes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mythes` (
  `mARG_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant des mythes et ARGs',
  `mARG_titre` char(45) NOT NULL COMMENT 'Titres des ARGs et mythes',
  `mARG_annee` year(4) NOT NULL COMMENT 'Année d''apparition/création des ARGs et mythes',
  `mARG_photo` varchar(30) NOT NULL COMMENT 'Photo représentant les ARGs et mythes',
  `mARG_resume` blob NOT NULL COMMENT 'Description/resumes des ARGs et mythes',
  `mARG_type` char(25) NOT NULL COMMENT 'Types de l''histoire (entre ARG ou mythe d''internet : tréfond, début de l''iceberg ...)',
  `mARG_popularitee` char(15) NOT NULL COMMENT 'Montrer son influence/popularitee sur le web (Faible/FOrt/Trés fort/Traumatisant...)',
  `_crea_id` int(11) NOT NULL COMMENT 'Identifiant créateurs ARGs et mythes (clé étrangère)',
  PRIMARY KEY (`mARG_id`),
  KEY `crea_id` (`_crea_id`),
  CONSTRAINT `crea_id` FOREIGN KEY (`_crea_id`) REFERENCES `Createur` (`crea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mythes`
--

LOCK TABLES `Mythes` WRITE;
/*!40000 ALTER TABLE `Mythes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Mythes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02  8:53:45
