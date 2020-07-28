-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mydata
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

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
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `details` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `cgpa` int(11) NOT NULL,
  `skill` varchar(10) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES ('aabbb','ccdef','male','2020-07-28','abc@gmail.com',1234567890,'Bangalore','year4','CS',9,'Python',0),('manu','pande','female','2020-07-21','abc@gmail.com',1234567890,'Bangalore','year4','CS',9,'Python',1),('mangesh','Pande','male','2020-07-29','imships@gmail.com',123456789,'Bangalore','year4','CS',9,'Python',1),('Shweta','Pande','female','2020-07-22','nandan@gmail.com',2147483647,'Bangalore','year4','CV',5,'C',1),('Shweta','Pande','female','2020-07-29','imships@gmail.com',2147483647,'Bangalore','year4','CV',8,'Python',1),('aa','Pande','female','2020-07-27','im_shilpa@rediffmail.com',123456789,'Bangalore','year4','CS',9,'Python',1);
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details_new`
--

DROP TABLE IF EXISTS `details_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `details_new` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `cgpa` int(11) NOT NULL,
  `skill` varchar(10) NOT NULL,
  `flag` int(11) NOT NULL,
  `skillset` varchar(50) NOT NULL,
  `accom` varchar(50) NOT NULL,
  `goal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details_new`
--

LOCK TABLES `details_new` WRITE;
/*!40000 ALTER TABLE `details_new` DISABLE KEYS */;
INSERT INTO `details_new` VALUES ('Shilpa','Pande','female','2020-07-29','abc@gmail.com',1234567890,'Bangalore','year1','CS',8,'to get a j',1,'','',''),('Shilpa','Pande','female','2020-07-07','imships@gmail.com',2147483647,'Bangalore','year1','CS',9,'Python',1,'','Got distriction in exam','to get a job in good company'),('Shilpa','Pande','female','2020-07-29','imships@gmail.com',2147483647,'Bangalore','year1','CS',8,'Python',1,'C,C++','Got distriction in exam','to get a job in good company'),('Shweta','Pande','female','2020-07-17','imships@gmail.com',1234567890,'Bangalore','year4','EC',5,'C',1,'C,C++','Got distriction in exam','to get a job in good company'),('Manas','Pande','male','2020-07-08','abc@gmail.com',1234567890,'Bangalore','year3','EC',8,'Python',1,'c,c++','Got distriction in exam','to get a job in good company'),('Smitha','Pande','female','2020-07-02','shilpa.p@cmrit.ac.in',1234567890,'Bangalore','year4','EC',9,'Java',1,'C,C++','Got distriction in exam','to get a job in good company');
/*!40000 ALTER TABLE `details_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logindetail`
--

DROP TABLE IF EXISTS `logindetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logindetail` (
  `username` varchar(50) NOT NULL,
  `upassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logindetail`
--

LOCK TABLES `logindetail` WRITE;
/*!40000 ALTER TABLE `logindetail` DISABLE KEYS */;
INSERT INTO `logindetail` VALUES ('shilpa@gmail.com','shilpa'),('shilpa@gmail.com','shilpa');
/*!40000 ALTER TABLE `logindetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addr1` varchar(50) NOT NULL,
  `addr2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES (11,'abc','fddd','sdf','imships@gmail.com');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-28 21:42:48
