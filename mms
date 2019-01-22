-- MySQL dump 10.13  Distrib 5.7.19, for osx10.12 (x86_64)
--
-- Host: localhost    Database: mms
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` VALUES (20190113140352,'CreateUsers','2019-01-14 02:26:07','2019-01-14 02:26:07',0),(20190115122737,'CreateTeachers','2019-01-15 05:50:21','2019-01-15 05:50:21',0),(20190115122757,'CreateStudents','2019-01-15 05:50:21','2019-01-15 05:50:21',0),(20190115153941,'CreateSubjects','2019-01-17 04:20:27','2019-01-17 04:20:27',0),(20190115155108,'CreateTeachersSubjects','2019-01-17 04:20:27','2019-01-17 04:20:27',0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(31) NOT NULL,
  `first_name` varchar(31) NOT NULL,
  `grade` int(11) NOT NULL,
  `school` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=329 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (288,'山田','智',1,'ABC'),(289,'澤田','義一',2,'ABC'),(290,'国枝','守',3,'ABC'),(291,'港','健斗',1,'姶良'),(292,'橋下','勉',2,'姶良'),(293,'桐山','源太',2,'姶良'),(294,'吉村','光輝',1,'姶良'),(295,'林田','海斗',3,'姶良'),(296,'三山','和成',1,'加治木'),(297,'野崎','大輝',3,'加治木'),(298,'大和','実',2,'加治木'),(299,'飯田','聡',1,'加治木'),(300,'厚治','光太郎',1,'国分'),(301,'宮本','武蔵',1,'国分'),(302,'坂本','龍馬',1,'国分'),(303,'岡田','以蔵',2,'国分'),(304,'久坂','美希',2,'国分'),(305,'服部','凛',3,'国分'),(306,'西郷','隆盛',3,'国分'),(307,'大久保','利通',3,'国分'),(308,'山本','健斗',3,'鹿屋'),(309,'宮崎','徹夜',2,'鹿屋'),(310,'橋口','健志',1,'鹿屋'),(311,'矢野','貴之',3,'鹿屋'),(312,'吉松','健太郎',3,'鹿屋'),(313,'森川','裕太',2,'鹿屋'),(314,'山田','真斗',3,'鹿屋'),(315,'杉本','直安',1,'鹿屋'),(316,'飯塚','美玲',1,'鹿屋'),(317,'安田','れん',1,'川辺'),(318,'原田','真凛',3,'川辺'),(319,'石田','望',1,'川辺'),(320,'石川','鉄人',1,'川辺'),(321,'片桐','晋',1,'川辺'),(322,'貞','コウ',3,'川辺'),(323,'河本','弘樹',3,'川辺'),(324,'川崎','宗則',1,'川辺'),(325,'川本','美希',2,'川辺'),(326,'長谷','翔太',2,'川辺'),(327,'長谷川','智紀',2,'川辺'),(328,'山口','大翔',1,'川辺');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL DEFAULT '数値',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (4,'数学'),(5,'国語'),(6,'英語'),(7,'化学'),(8,'物理'),(9,'生物'),(10,'情報'),(11,'歴史'),(12,'地理');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(31) NOT NULL,
  `first_name` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (27,'堀江','悟'),(28,'増田','義一'),(29,'林','元長'),(30,'菊池','ゆうや'),(31,'菊竹','カズマ'),(32,'榎田','誠'),(33,'森本','マサル'),(34,'安倍','紀香'),(35,'森田','一重'),(36,'和田','涼'),(37,'上久保','竜'),(38,'野田','源太'),(39,'新沢','はじめ'),(40,'坂本','みさき'),(41,'坂口','隼人'),(42,'須田','光太郎'),(43,'河合','塾'),(44,'明光','義塾'),(45,'全教','研'),(46,'野原','しんのすけ'),(47,'野比','のび太'),(48,'江田','たけし'),(49,'後藤','正和'),(50,'黒川','愛華'),(51,'江口','美和'),(52,'本田','元基');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers_subjects`
--

DROP TABLE IF EXISTS `teachers_subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers_subjects`
--

LOCK TABLES `teachers_subjects` WRITE;
/*!40000 ALTER TABLE `teachers_subjects` DISABLE KEYS */;
INSERT INTO `teachers_subjects` VALUES (11,27,4),(12,27,7),(13,27,8),(14,28,10),(15,29,6),(16,30,5),(17,30,11),(18,31,9),(19,32,11),(20,32,12),(21,33,4),(22,33,9),(23,33,10),(24,34,11),(25,35,8),(26,36,6),(27,37,9),(28,38,6),(29,38,7),(30,39,7),(31,40,5),(32,41,4),(33,42,4),(34,42,6),(35,42,8),(36,42,11),(37,43,5),(38,43,11),(39,44,4),(40,44,5),(41,45,12),(42,46,5),(43,46,11),(44,46,12),(45,47,4),(46,48,7),(47,49,7),(48,49,8),(49,49,9),(50,49,12),(51,50,4),(52,50,5),(53,50,6),(54,51,5),(55,51,11),(56,52,7),(57,52,11);
/*!40000 ALTER TABLE `teachers_subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(31) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'admin','$2y$10$jKkCJg/t9GWXwH0lUyfMNOZVNovJImAgWxz5t5K9QNvflkmH2vPIe');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-22 16:28:02
