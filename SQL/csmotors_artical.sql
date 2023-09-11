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
-- Table structure for table `artical`
--

DROP TABLE IF EXISTS `artical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artical` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `para_1` text NOT NULL,
  `para_2` text NOT NULL,
  `author` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artical`
--

LOCK TABLES `artical` WRITE;
/*!40000 ALTER TABLE `artical` DISABLE KEYS */;
INSERT INTO `artical` VALUES (4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus eget nunc scelerisque viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus eget nunc scelerisque viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus eget nunc scelerisque viverra.','csmotors','2022-02-02 22:14:11'),(5,',ashhjcvsakgvckjsvfukj','Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur.','Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur.','vbsjhvkyusdvkuvsjv','2022-02-02 22:14:11'),(6,'kgzvcgsvckgjsvajz v','Initially conceived under Vickers ownership but launched in 1998, when Bentley was under the Volkswagen Group umbrella, the Arnage had a heart originally from a BMW: the 4.4-litre V8 in turbocharged 344bhp form. To avoid the obvious embarrassment after its takeover, Volkswagen in 1999 added the old 6.75-litre V8 from the Bentley Turbo R, taking the opportunity to stiffen the Arnage’s bodyshell in the process, and then a year later dropped the more efficient BMW unit. A little tweaking of the nomenclature to distinguish between the two resulted in the BMW-engined cars being called Green Label and the Volkswagen-engined cars Red Label.','Initially conceived under Vickers ownership but launched in 1998, when Bentley was under the Volkswagen Group umbrella, the Arnage had a heart originally from a BMW: the 4.4-litre V8 in turbocharged 344bhp form. To avoid the obvious embarrassment after its takeover, Volkswagen in 1999 added the old 6.75-litre V8 from the Bentley Turbo R, taking the opportunity to stiffen the Arnage’s bodyshell in the process, and then a year later dropped the more efficient BMW unit. A little tweaking of the nomenclature to distinguish between the two resulted in the BMW-engined cars being called Green Label and the Volkswagen-engined cars Red Label.','bavvaj','2022-02-02 22:14:11'),(7,'dadaadaadadadada','a fondness for astronomy, Star Wars, or any other outer-space-related subject matter? Well, apparently one Bentley customer answered yes to all of the above,','a fondness for astronomy, Star Wars, or any other outer-space-related subject matter? Well, apparently one Bentley customer answered yes to all of the above,','aadda','2022-02-02 22:14:11'),(8,'Mulliner Reveals One-Off Space-Themed Bentley Bentayga','Mulliner Reveals One-Off Space-Themed Bentley Bentayga	Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua','Mulliner Reveals One-Off Space-Themed Bentley Bentayga	Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua','as','2022-03-08 05:24:00');
/*!40000 ALTER TABLE `artical` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-10 15:52:10
