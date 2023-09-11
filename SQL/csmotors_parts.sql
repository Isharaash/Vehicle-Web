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
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(145) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parts`
--

LOCK TABLES `parts` WRITE;
/*!40000 ALTER TABLE `parts` DISABLE KEYS */;
INSERT INTO `parts` VALUES (1,'Tesla 18 inch rims Model 3 summer','  The item is in very good condition, the rims can occasionally show minimal signs of wear.','Rs 250 000'),(2,'VLAND Tail lights BMW 3 Series','Perfect Fit for 12 13 14 15 BMW 3 Series F30 taillight. 2-year warranty. DOT or SAE certification, with PC,ABS,PMMA,GLASS Material Prove Fully Sealed, Waterproof, Dust and Corrosion Resistant, Works Perfectly Even in Harsh Weather Conditions.','Rs 120 000'),(3,'Carbon Fiber Rear Diffuser for BMW 3 Series E92 E93 M3','This Rear Diffuser fits for BMW 3 Series E92 E93 M3 Coupe Convertible 2-Door 2008 2009 2010 2011 2012 2013,Only for BMW E92/E93 M3 with factory bumper.','Rs 120 000'),(4,'Genuine Land Rover Towing Trailer Hitch Receiver','A high-quality genuine Land Rover standard 2-inch tow hitch receiver that effortlessly mounts and releases quickly from your Rover to be stowed away for later use.\nRated for a 7,716 lbs. trailer load capacity and a 500 lbs. tongue weight capacity.\nHas a lock for security and comes with two (2) keys.','Rs 195 000'),(5,'Tail Light Lamp For Land Rover Range Rover Sport','For Land Rover Range Rover Sport 2014 2015 2016 2017 2018 2019 2020（New appearance,2014-2017 models need to purchase a pair). ','Rs 215 000'),(6,'Archaic LED Tail Lights Compatible with Lexus Sedan','STARTING ANIMATION AND SEQUENTIAL TURN SIGNAL: When start your Lexus XE20, starting animation will last 3s-5s; sequential turn light Super attractive making it stand out from the rest. Built with high power LEDs to be visually striking & enhance visibility at night.','Rs 150 000'),(7,'Headlight Assembly Fit for LEXUS','Dependable performance : VLAND product undergo a thorough testing and quality control process before they leave the factory. Bright, intense LEDs are perfect for increasing your visibility , efficiently light up the road ahead during night time. ','Rs 175 000');
/*!40000 ALTER TABLE `parts` ENABLE KEYS */;
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
