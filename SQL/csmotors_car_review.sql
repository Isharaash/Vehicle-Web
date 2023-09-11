-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: csmotors
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `car_review`
--

DROP TABLE IF EXISTS `car_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_review` (
  `id` int NOT NULL AUTO_INCREMENT,
  `driver` longtext NOT NULL,
  `engine` longtext NOT NULL,
  `interior` longtext NOT NULL,
  `packs` longtext NOT NULL,
  `safety` longtext NOT NULL,
  `security` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_review`
--

LOCK TABLES `car_review` WRITE;
/*!40000 ALTER TABLE `car_review` DISABLE KEYS */;
INSERT INTO `car_review` VALUES (4,'• Audi parking system plus includes 360 degree display with front and rear sensors • Audi connect with Amazon Alexa Integration • Audi virtual cockpit - 12.3','• Quattro all wheel drive with sport differential • RS specific Adaptive air suspension • 48V Mild hybrid technology • Electromechanical active roll stabilisation','• Upper and lower interior elements in leather, upper part of instrument panel including centre console and door armrests in leather • Front seat ventilation operated through MMI system • 4 zone automatic climate control • Double sun visor with illuminated vanity mirror on driver and passenger side extendable • ISOFIX child seat mounting for front passenger seat and 2 outer rear seats with top tether child seat mounting for all 3 rear seats • Electric adjustable steering column with memory functionality • Luggage compartment sill protection in stainless steel • Driver and front passenger seat memory function for electrically adjustable front seats • 4-way lumbar support for front seats • Comfort front centre armrest • Rear seat bench plus • Black cloth headlining • 40:20:40 split folding rear seat • Stainless steel pedals • Front head restraints • Front/rear floor mats • Rear headrests • Tool kit • Heated front seats','• RS specific styling pack - RS Q8 • Multi-coloured extended LED interior lighting pack - RS Q8 • Air quality package - RS Q8','• Driver and front passenger, front side and curtain airbags • Audi pre sense front • Electronic Stability Control (ESC) including ABS, ASR and EDL • Seatbelt monitoring • Tyre pressure loss indicator • Predictive pedestrian protection • Hill hold assist • Front passenger airbag deactivation • Electromechanical parking brake • Warning triangle and first aid kit • Hill descent control • 3 point seatbelts on all seats','• Anti-theft wheel bolts and wheel loosening detection • Anti theft alarm with tow away protection • Advanced key • Immobiliser');
/*!40000 ALTER TABLE `car_review` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-10 15:52:11
