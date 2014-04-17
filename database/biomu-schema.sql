-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: biomu
-- ------------------------------------------------------
-- Server version	5.6.15-log

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
-- Table structure for table `astronauts`
--

DROP TABLE IF EXISTS `astronauts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `astronauts` (
  `AstroID` int(11) NOT NULL AUTO_INCREMENT,
  `AstroName` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  PRIMARY KEY (`AstroID`)
) ENGINE=MyISAM AUTO_INCREMENT=1002 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pulse`
--

DROP TABLE IF EXISTS `pulse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pulse` (
  `PulseID` int(11) NOT NULL AUTO_INCREMENT,
  `AstroID` int(11) NOT NULL,
  `BPM` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`PulseID`)
) ENGINE=MyISAM AUTO_INCREMENT=701 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sensordata`
--

DROP TABLE IF EXISTS `sensordata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sensordata` (
  `SensorDataID` int(11) NOT NULL AUTO_INCREMENT,
  `Timestamp` timestamp NULL DEFAULT NULL,
  `AstroID` int(11) DEFAULT NULL,
  `Pulse` int(11) DEFAULT NULL,
  `GSR` int(11) DEFAULT NULL,
  `Temperature` int(11) DEFAULT NULL,
  `O2` int(11) DEFAULT NULL,
  `SuitPressure` float DEFAULT NULL,
  `PosX` int(11) DEFAULT NULL,
  `PosY` int(11) DEFAULT NULL,
  `PosZ` int(11) DEFAULT NULL,
  `Radiation` int(11) DEFAULT NULL,
  `BloodSystolic` int(11) DEFAULT NULL,
  `BloodDiastolic` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`SensorDataID`)
) ENGINE=InnoDB AUTO_INCREMENT=1710 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-17  0:06:04
