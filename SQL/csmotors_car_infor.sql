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
-- Table structure for table `car_infor`
--

DROP TABLE IF EXISTS `car_infor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_infor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `eng_size` varchar(255) NOT NULL,
  `eng_pow` varchar(255) NOT NULL,
  `trans` varchar(255) NOT NULL,
  `door` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `co2_emi` varchar(255) NOT NULL,
  `top_speed` varchar(255) NOT NULL,
  `boot` varchar(255) NOT NULL,
  `consumption` varchar(255) NOT NULL,
  `safety_rate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_infor`
--

LOCK TABLES `car_infor` WRITE;
/*!40000 ALTER TABLE `car_infor` DISABLE KEYS */;
INSERT INTO `car_infor` VALUES (2,'3.5 litres','313 bhp','Automatic','5 doors','7 seats','185.0 g/km','112 mph','211 litres','34.4 mpg','-'),(3,'4.0 litres','600 bhp','Automatic','5 doors','5 seats','301.0 g/km','155 mph','680 litres','21.2 mpg','-'),(4,'2.0 litres','204 bhp','Automatic','4 doors','5 seats','169.0 g/km','152 mph','530 litres','38.2 mpg','5 Stars'),(5,'-','245 bhp','Automatic','4 doors','5 seats','0.0 g/km','140 mph','542 litres','305.0 miles','5 Stars'),(10,'2.0 litres','156 bhp','Automatic','4 doors','5 seats','145.0 g/km','139 mph','480 litres','44.1 mpg','5 Stars'),(11,'3.0 litres','3.0 litres','Automatic','2 doors','4 seats','223.0 g/km','155 mph','440 litres','28.8 mpg','-'),(12,'3.0 litres','286 bhp','Automatic','4 doors','5 seats','173.0 g/km','155 mph','540 litres','42.8 mpg','-'),(13,'2.0 litres','204 bhp','Automatic','5 doors','5 seats','168.0 g/km','130 mph','552 litres','44.2 mpg','5 Stars');
/*!40000 ALTER TABLE `car_infor` ENABLE KEYS */;
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
