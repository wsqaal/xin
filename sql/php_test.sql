-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: php_test
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `test_message`
--

DROP TABLE IF EXISTS `test_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 NOT NULL,
  `message` mediumtext CHARACTER SET utf8 NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_message`
--

LOCK TABLES `test_message` WRITE;
/*!40000 ALTER TABLE `test_message` DISABLE KEYS */;
INSERT INTO `test_message` VALUES (1,0,'????','xxxxxxxx',0),(2,0,'??????','?????',12),(3,0,'12345','weqweqweqwe',12),(4,0,'1231312','wqeq;hwewq;e;qw',12),(5,0,'asdha;ksd','ha;ksdasjkhd\r\n',12),(6,0,'121212121','ahsdkasdasdjas;',12),(7,0,'1323','wqewqe',12),(8,0,'3123132','weqwewqeqw',12),(9,0,'3123132','weqwewqeqw',12),(10,4,'www','qqqq',12),(11,4,'wsq','asdasdjaskljds',1387106100),(12,0,'wsq','sadsdasdaskdhakjd',1387106100),(13,5,'wqweqeq','qweqweqweqwewqe',1387106100),(14,4,'12312323123','213231232312',1387106100),(15,6,'weqewqew','eqweqweqweqw',1387106100),(16,6,'ewrwrwer','ewrerwrewr',1387192560),(17,8,'12313213','2312312312',1387192560),(18,4,'ewrwe','ewrwerwerw',1387192560),(19,9,'2312','132312321',1387192560),(20,9,'????','????????????????? ',1387192560),(21,9,'????','?????',1387192560),(22,14,'第十五周','我是个好人',1387167360),(23,15,'第十五周技术部会议','新的大神诞生了！！',1387167360),(24,2,'sdfds','sdfsdfs',1387513200),(25,2,'第十五周','大家表现的很好',1387513200),(26,5,'第十六周','撒打算看来大家安静收到了',1387513200);
/*!40000 ALTER TABLE `test_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_user`
--

DROP TABLE IF EXISTS `test_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) CHARACTER SET utf8 NOT NULL,
  `password` char(32) CHARACTER SET utf8 NOT NULL,
  `adminid` int(11) DEFAULT '8',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_user`
--

LOCK TABLES `test_user` WRITE;
/*!40000 ALTER TABLE `test_user` DISABLE KEYS */;
INSERT INTO `test_user` VALUES (1,'阿狸','cee8d6b7ce52554fd70354e37bbf44a2',1),(3,'wsq123','d41d8cd98f00b204e9800998ecf8427e',8),(4,'wwww','d41d8cd98f00b204e9800998ecf8427e',8),(5,'琪琪','099b3b060154898840f0ebdfb46ec78f',8),(8,'wwww','4eae35f1b35977a00ebd8086c259d4c9',8),(9,'啊啊啊','47bce5c74f589f4867dbd57e9ca9f808',8),(10,'别别别','08f8e0260c64418510cefb2b06eee5cd',8),(11,'试试','3691308f2a4c2f6983f2880d32e29c84',8);
/*!40000 ALTER TABLE `test_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-22 23:33:37
