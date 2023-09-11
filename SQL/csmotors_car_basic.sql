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
-- Table structure for table `car_basic`
--

DROP TABLE IF EXISTS `car_basic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_basic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `small_des` varchar(255) NOT NULL,
  `price` varchar(45) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_basic`
--

LOCK TABLES `car_basic` WRITE;
/*!40000 ALTER TABLE `car_basic` DISABLE KEYS */;
INSERT INTO `car_basic` VALUES (2,'Audi RS Q8','• 4.0 litres • Automatic • Petrol • 5 doors','£106,885','If the amazing Lamborghini Urus is too expensive or too flashy for you, the 2022 Audi RS Q8 offers a similar package and nearly identical performance. The reason for the similarities is the close mechanical ties between these two top-tier hyper-performance SUVs'),(3,'Lexus RX L Takumi','• 3.5 litres • Automatic • Hybrid (Petrol) • 5 doors','£68,015','On the outside, the Takumi version of the Lexus RX L adds 20-inch alloy wheels, blind-spot monitoring, an electric tailgate and a sunroof to the entry-level trim. The navigation system is now 12.3 inches, there are a fifteen-speaker sound system and a 360-degree camera.'),(4,'Audi A6 Black Edition','2.0 litres • Automatic • Petrol • 4 doors',' £45,550','Black Edition is the top-of-the-range model, so comes with lots of goodies as standard. This includes 20-inch alloy wheels, Bose surround sound system, tinted windows and black chrome exterior detailing.'),(5,'Tesla Model 3 Performance','335 kW • Automatic • Electric • 4 doors',' £59,990','On top of the huge 15-inch touchscreen that dominates the Tesla’s interior, the Model 3 comes as standard with power-adjustable and heated front seats, Bluetooth connectivity and a heated steering wheel. The car also gets climate control, faux leather upholstery and 18-inch alloy wheels out of the box.'),(6,'BMW 3 Series M Sport','2.0 litres • Automatic • Petrol • 4 doors','£37,495','-'),(7,'BMW M4 Competition','3.0 litres • Automatic • Petrol • 2 doors','£88,240','-'),(8,'Mercedes S-Class AMG Line','2.9 litres • Automatic • Diesel • 4 doors',' £89,610','-'),(9,'Range Rover Velar R-Dynamic SE','2.0 litres • Automatic • Diesel • 5 doors','£56,545','-');
/*!40000 ALTER TABLE `car_basic` ENABLE KEYS */;
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
