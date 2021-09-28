-- MariaDB dump 10.19  Distrib 10.4.20-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: smsdb
-- ------------------------------------------------------
-- Server version	10.4.20-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(13) NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Mr. Admin','PERT8eoZgLS','admin@admin.com','admin123','1','');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assignments` (
  `assignment_id` varchar(13) NOT NULL,
  `title`  longtext NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fileID` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `description` longtext NOT NULL,
  `due_date` datetime NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`assignment_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `class_id` (`class_id`),
  KEY `subject_id` (`subject_id`),
  CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`),
  CONSTRAINT `assignments_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  CONSTRAINT `assignments_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignments`
--

LOCK TABLES `assignments` WRITE;
/*!40000 ALTER TABLE `assignments` DISABLE KEYS */;
INSERT INTO `assignments` VALUES ('ASxNG271SP5','solomon"s jone sands', 1,4,'1632486869_c4e299c704b75311b548.pdf','0000-00-00 00:00:00','0000-00-00 00:00:00','afaaf','2021-09-09 00:00:00',2);
/*!40000 ALTER TABLE `assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `prefect_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'Form 1',0,0),(2,'Form 2',0,0),(4,'Form 3',0,0),(5,'Form 4',0,0);
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `title` longtext NOT NULL,
  `allowed` int(1) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'2021-09-26','0000-00-00','happy hour for the students',1),(2,'2021-09-21','0000-00-00','parent\'s day',1),(3,'2021-09-28','0000-00-00','pre-election committee',1),(4,'2021-09-22','2021-09-22','Happy',1),(5,'2021-09-21','2021-09-23','asjkhdal',1),(6,'2021-09-20','0000-00-00','Jane Dow',1),(7,'2021-09-20','0000-00-00','Jane Dow',1),(8,'2021-09-20','0000-00-00','Jane Dow',1),(9,'2021-09-20','0000-00-00','Jane Dow',1),(10,'2021-09-20','0000-00-00','Jane Dow',1),(11,'2021-09-05','0000-00-00','Happy Day',1),(12,'2021-09-05','0000-00-00','Happy Day',1),(13,'2021-09-05','0000-00-00','Happy Day',1),(14,'2021-09-05','0000-00-00','Happy Day',1),(15,'2021-09-05','0000-00-00','Happy Day',1),(16,'2021-09-22','0000-00-00','Happy day',1),(17,'2021-09-22','0000-00-00','Happy day',1),(18,'2021-09-05','0000-00-00','Happy day',1),(19,'2021-09-05','0000-00-00','Happy day',1),(20,'2021-09-05','0000-00-00','Happy day',1),(21,'2021-09-10','2021-09-11','MAIN EVENT',1),(22,'2021-09-10','2021-09-11','MAIN EVENT',1),(23,'2021-09-10','2021-09-11','MAIN EVENT',1),(24,'2021-09-10','2021-09-11','MAIN EVENT',1),(25,'2021-09-10','2021-09-11','MAIN EVENT',1),(26,'2021-09-10','2021-09-11','MAIN EVENT',1);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `destination` varchar(13) NOT NULL,
  `origin` varchar(13) NOT NULL,
  `read_status` int(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `posted_by` longtext NOT NULL,
  `title` longtext NOT NULL,
  `body` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (1,'jeniffer sotik','happy hour','Things have been easy since the school sms is up, thanks yoh!','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Elon Musk','Django','Start of a new age of developers','2021-09-19 23:36:36','2021-09-19 23:36:36'),(7,'Jayden manjaro','Fort','Have to secure the goods, secure','2021-09-19 23:39:54','2021-09-19 23:39:54'),(8,'HeadMaster','Teacher\'s Meeting','Teachers will be metting at 4.pm today','2021-09-20 00:23:24','2021-09-20 00:23:24'),(9,'','','','2021-09-22 07:14:20','2021-09-22 07:14:20'),(10,'HeadMaster','Company Website Redesign','This is the case right','2021-09-22 07:14:37','2021-09-22 07:14:37'),(11,'joe byden','Fort','Happy sabbath','2021-09-22 07:15:11','2021-09-22 07:15:11');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `DAY` longtext NOT NULL,
  `start_time` time NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `system_name` varchar(100) NOT NULL,
  `system_email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `skin_color` varchar(20) NOT NULL DEFAULT 'primary',
  `active_sms_service` varchar(50) NOT NULL DEFAULT 'disabled',
  `twilio_account_sid` varchar(256) NOT NULL DEFAULT '0',
  `twilio_auth_token` varchar(256) NOT NULL DEFAULT '0',
  `twilio_sender_phone_number` varchar(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`settings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'BroadWay SMS','schools@broadway.com','+9199979788','dark','clicksend-sms','13e65090c97d41e6bb81945a5d2a5e03972a61dd','13e65090c97d41e6bb81945a5d2a5e03972a61dd','+487898998989');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `father_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `role` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profileUrl` longtext COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (889,'bryan bett','ASxNG271SP5','06/06/2018','male','christianity','','20108 Rongai','74-661-3059','kiplangatsgt@gmail.com','','Will Smith','Wale Smith',3,'','',''),(899,'Ade Wellis','PERT8ISZgLa','06/11/2014','male','','','14 Aladin Road','080-255-9586','luiswelt@gmail.com','','James Maina','lily Chepkurui',3,'','',''),(912,'kemi','KtxNG771SP1','07/15/2015','male','','','1 Long Tubae','080-5454-4545','kemi2@kem2i.com','','Mike Kemi','Jane Kemi',4,'','',''),(1011,'Lydia Adams','PERT8eoISLa','06/20/2014','female','','','3103 Modoc Alley','208-259-2964','LydiaAdams@gmail.com','','james jordan','mary jane',2,'','',''),(1058,'Francesca Thornton','QItxNG271SP5','06/10/2014','female','','','3009 Beech Street','925-752-8053','FrancescaThornton@gmail.com','','Thorton Master','Francesca Master',2,'','',''),(1245,'Royce Miller','axRT8eoZgLa','06/06/2018','male','','','15 olson highway','08033527716','royce@gmail.com','','Simon Kella','Milly Kwamboka',3,'','',''),(1412,'segun','LtxHJG271SP5','06/17/2014','female','','','12 Kware Way','08-054-5545','segun@segun.com','','De Segun','Mel Segan',3,'','',''),(1511,'Danielle Glover','KtxIUD271SP5','09/12/2017','male','','','1601 Pearlman Avenue','978-233-5452','DanielleGlover@gmail.com','','Daniel Glover','Mercy Glover',2,'','',''),(5555,'brian kiplangat','','2021-09-24','male','christan','B','20108 rongai','0746613059','Kiplangatsgt@gmail.com','','Larry O Monna','Jane Wangeshi',2,'','1632048732_908ca7d64c8d5dcee6fa.jpg',''),(8468,'Mary Wangeshi','','2008-02-08','male','muslim','B','20108 rongai','0746613059','Kiplangatsgt@gmail.com','','Hillary Rotich','Jane Rotich',1,'','1632224839_0e4fb44555a65f1be9bf.jpg','');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'Mathematics'),(2,'Calculus'),(3,'Computer Science'),(4,'Humanity'),(5,'Neural Networks'),(6,'Robotics');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjectteacher`
--

DROP TABLE IF EXISTS `subjectteacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjectteacher` (
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  KEY `subject_id` (`subject_id`),
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `subjectteacher_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`),
  CONSTRAINT `subjectteacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjectteacher`
--

LOCK TABLES `subjectteacher` WRITE;
/*!40000 ALTER TABLE `subjectteacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `subjectteacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submissions` (
  `submission_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `fileID` longtext NOT NULL,
  `student_id` int(11) NOT NULL,
  `assignment_id` varchar(13) NOT NULL,
  PRIMARY KEY (`submission_id`),
  KEY `student_id` (`student_id`),
  KEY `assignment_id` (`assignment_id`),
  CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  CONSTRAINT `submissions_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submissions`
--

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacherclass`
--

DROP TABLE IF EXISTS `teacherclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacherclass` (
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  KEY `class_id` (`class_id`),
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `teacherclass_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  CONSTRAINT `teacherclass_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacherclass`
--

LOCK TABLES `teacherclass` WRITE;
/*!40000 ALTER TABLE `teacherclass` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacherclass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `hash` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profileUrl` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `role` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `country` longtext COLLATE utf8_unicode_ci NOT NULL,
  `county` longtext COLLATE utf8_unicode_ci NOT NULL,
  `subjects` longtext COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'PERT8eoZgLa','Tom Connolly','06/03/1976','male','','','','','694 Michael Street','713-732-6331','TomConnolly@teachers.com','','','','',''),(2,'KtxNG271SP5','Alfie Nolly','12/08/1985','female','','','','','4841 Andell Road','614-901-1543','jordiealaba@gmail..com','','','','',''),(3,'Y8DRa6q_9FD','Alfie Nolly','12/08/1985','female','','','','','4841 Andell Road','614-901-1543','luisenrique@gmail..com','','','','',''),(5,'Bk21ciawUyL','Alfie Nolly','12/08/1985','female','','','','','4841 Andell Road','614-901-1543','juliesanchez@gmail..com','','','','',''),(6,'lidM5K6i6wK','Alfie Nolly','12/08/1985','female','','','','','4841 Andell Road','614-901-1543','marcuschege@gmail..com','','','','','');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-24 15:38:00
