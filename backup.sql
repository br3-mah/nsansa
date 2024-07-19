-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: nsansadb
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `counselor_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (1,'please talk to your wife','fobia',NULL,NULL,NULL,'1','2023-04-05 15:36:54','2023-04-05 15:36:54',NULL);
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `guest_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` smallint DEFAULT NULL,
  `published` smallint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'yes',1,'2023-04-04 13:04:17','2023-04-04 13:04:17',1,NULL,NULL,NULL),(2,'no',1,'2023-04-04 13:04:17','2023-04-04 13:04:17',1,NULL,NULL,NULL),(3,'yes',2,'2023-04-04 13:05:00','2023-04-04 13:05:00',1,NULL,NULL,NULL),(4,'no',2,'2023-04-04 13:05:00','2023-04-04 13:05:00',1,NULL,NULL,NULL),(5,'5-10',3,'2023-04-04 13:29:44','2023-04-04 13:29:44',1,NULL,NULL,NULL),(6,'10-12',3,'2023-04-04 13:29:44','2023-04-04 13:29:44',1,NULL,NULL,NULL),(7,'Male',4,'2023-05-03 12:11:00','2023-05-03 12:11:00',1,NULL,NULL,NULL),(8,'Female',4,'2023-05-03 12:11:00','2023-05-03 12:11:00',1,NULL,NULL,NULL),(9,'Here',5,'2023-05-03 12:11:46','2023-05-03 12:11:46',1,NULL,NULL,NULL),(10,'There',5,'2023-05-03 12:11:46','2023-05-03 12:11:46',1,NULL,NULL,NULL),(11,'Anywhere',5,'2023-05-03 12:11:46','2023-05-03 12:11:46',1,NULL,NULL,NULL),(12,'11 - 17 (Adolescent)',8,'2023-05-30 14:11:24','2023-05-30 14:11:24',1,NULL,NULL,NULL),(16,'English',9,'2023-05-30 14:14:16','2023-05-30 14:14:16',1,NULL,NULL,NULL),(17,'Bemba',9,'2023-05-30 14:14:16','2023-05-30 14:14:16',1,NULL,NULL,NULL),(18,'Tonga',9,'2023-05-30 14:14:16','2023-05-30 14:14:16',1,NULL,NULL,NULL),(19,'Lozi',9,'2023-05-30 14:14:16','2023-05-30 14:14:16',1,NULL,NULL,NULL),(20,'Nyanja',9,'2023-05-30 14:14:16','2023-05-30 14:14:16',1,NULL,NULL,NULL),(21,'Single',10,'2023-05-30 14:16:20','2023-05-30 14:16:20',1,NULL,NULL,NULL),(22,'Married',10,'2023-05-30 14:16:20','2023-05-30 14:16:20',1,NULL,NULL,NULL),(23,'Divorced',10,'2023-05-30 14:16:20','2023-05-30 14:16:20',1,NULL,NULL,NULL),(24,'Widowed',10,'2023-05-30 14:16:20','2023-05-30 14:16:20',1,NULL,NULL,NULL),(25,'Yes',11,'2023-05-30 14:16:41','2023-05-30 14:16:41',1,NULL,NULL,NULL),(26,'No',11,'2023-05-30 14:16:41','2023-05-30 14:16:41',1,NULL,NULL,NULL),(27,'A. High',12,'2023-05-30 14:17:51','2023-05-30 14:17:51',1,NULL,NULL,NULL),(28,'B. Fair',12,'2023-05-30 14:17:51','2023-05-30 14:17:51',1,NULL,NULL,NULL),(29,'C. Low',12,'2023-05-30 14:17:51','2023-05-30 14:17:51',1,NULL,NULL,NULL),(30,'A. Yes',13,'2023-05-30 14:18:51','2023-05-30 14:18:51',1,NULL,NULL,NULL),(31,'B. No',13,'2023-05-30 14:18:51','2023-05-30 14:18:51',1,NULL,NULL,NULL),(32,'I’ve been feeling depressed',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(33,'I feel anxious or overwhelmed',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(34,'My mood is interfering with my job/school performance.',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(35,'I struggle with building or maintaining relationships',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(36,'I can’t find purpose or meaning in my life.',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(37,'I am grieving',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(38,'I have experienced trauma and/or abuse',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(39,'I need to talk through a specific challenge',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(40,'Other',14,'2023-05-30 14:20:56','2023-05-30 14:20:56',1,NULL,NULL,NULL),(41,'A. Via chat or messaging',15,'2023-05-30 14:21:22','2023-05-30 14:21:22',1,NULL,NULL,NULL),(42,'B. Via phone call',15,'2023-05-30 14:22:04','2023-05-30 14:22:04',1,NULL,NULL,NULL),(43,'C. Video sessions',15,'2023-05-30 14:22:04','2023-05-30 14:22:04',1,NULL,NULL,NULL),(44,'D. Not sure yet (decide later)',15,'2023-05-30 14:22:04','2023-05-30 14:22:04',1,NULL,NULL,NULL),(45,'Male therapist',16,'2023-05-30 14:23:09','2023-05-30 14:23:09',1,NULL,NULL,NULL),(46,'Female therapist',16,'2023-05-30 14:23:09','2023-05-30 14:23:09',1,NULL,NULL,NULL),(47,'Christian-based therapy',16,'2023-05-30 14:23:09','2023-05-30 14:23:09',1,NULL,NULL,NULL),(48,'Peer (Youth) Counselor',16,'2023-05-30 14:23:09','2023-05-30 14:23:09',1,NULL,NULL,NULL),(49,'A. Good',17,'2023-05-30 14:23:54','2023-05-30 14:23:54',1,NULL,NULL,NULL),(50,'B. Fair',17,'2023-05-30 14:23:54','2023-05-30 14:23:54',1,NULL,NULL,NULL),(51,'C. Bad',17,'2023-05-30 14:23:54','2023-05-30 14:23:54',1,NULL,NULL,NULL),(52,'A. Good',18,'2023-05-30 14:24:40','2023-05-30 14:24:40',1,NULL,NULL,NULL),(53,'B. Fair',18,'2023-05-30 14:24:40','2023-05-30 14:24:40',1,NULL,NULL,NULL),(54,'C. Bad',18,'2023-05-30 14:24:40','2023-05-30 14:24:40',1,NULL,NULL,NULL),(55,'A. Yes',19,'2023-05-30 14:25:18','2023-05-30 14:25:18',1,NULL,NULL,NULL),(56,'B. No',19,'2023-05-30 14:25:18','2023-05-30 14:25:18',1,NULL,NULL,NULL),(57,'A. Both are Alive.',20,'2023-05-30 14:25:52','2023-05-30 14:25:52',1,NULL,NULL,NULL),(58,'B. Only One is Alive',20,'2023-05-30 14:25:52','2023-05-30 14:25:52',1,NULL,NULL,NULL),(59,'C. None',20,'2023-05-30 14:25:52','2023-05-30 14:25:52',1,NULL,NULL,NULL),(60,'male',21,'2023-05-30 14:34:23','2023-05-30 14:34:23',1,NULL,NULL,NULL),(61,'female',21,'2023-05-30 14:34:23','2023-05-30 14:34:23',1,NULL,NULL,NULL),(62,'2 year',22,'2023-06-01 16:27:56','2023-06-01 16:27:56',1,NULL,NULL,NULL),(63,'19-30',8,'2023-06-21 12:04:43','2023-06-21 12:04:43',1,NULL,NULL,NULL),(64,'31-45',8,'2023-06-21 12:04:43','2023-06-21 12:04:43',1,NULL,NULL,NULL),(65,'46-70',8,'2023-06-21 12:04:43','2023-06-21 12:04:43',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (2,'Test Video Call Meeting','9 Jun, 2023','23 Jun, 2023','5219c923-36e4-4964-813a-69596fa859bb',NULL,'1',NULL,1,'2023-06-05 10:16:41','2023-06-05 10:16:41','video','10:00 PM','1:00 PM'),(12,'Nsansa Therapy Session','6 Jul, 2023','6 Jul, 2023','868188fa-69c0-4f89-bafe-ff89c37b2c14',NULL,'1',NULL,1,'2023-07-06 13:12:32','2023-07-06 13:12:32','video','2:00 PM','3:00 PM'),(20,'First Test Meeting','10 Jul, 2023','13 Jul, 2023','0f26b6c6-f6c7-4ed5-8992-ca87463473e9',NULL,'1','<p>sdsdsddsssdsd</p>',6,'2023-07-10 12:37:19','2023-07-10 12:37:19','video','03:00 AM','04:00 AM'),(21,'Testing Meetup','10 Jul, 2023','20 Jul, 2023','b5705dd1-9d82-4520-9c28-5790984c6e9b',NULL,'1','<p>sdsdsdssdsdd</p>',6,'2023-07-10 12:48:40','2023-07-10 12:48:40','video','03:00 AM','04:00 AM'),(22,'Meeting Up Call','10 Jul, 2023','12 Jul, 2023','53394391-48bc-44a2-8c73-d0a642dd6ccf',NULL,'1','<p>sdsdsdsdsdds</p>',6,'2023-07-10 13:53:08','2023-07-10 13:53:08','video','03:00 AM','04:00 AM');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assign_counselors`
--

DROP TABLE IF EXISTS `assign_counselors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assign_counselors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int unsigned NOT NULL,
  `counselor_id` int unsigned NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assign_counselors`
--

LOCK TABLES `assign_counselors` WRITE;
/*!40000 ALTER TABLE `assign_counselors` DISABLE KEYS */;
INSERT INTO `assign_counselors` VALUES (2,2,6,NULL,1,'2023-04-04 13:42:30','2023-04-04 13:42:30'),(4,3,6,NULL,1,'2023-04-13 13:40:15','2023-04-13 13:40:15'),(5,7,6,NULL,1,'2023-04-14 22:33:39','2023-04-14 22:33:39'),(6,5,12,NULL,1,'2023-05-29 18:08:57','2023-05-29 18:08:57'),(7,4,12,NULL,1,'2023-05-29 18:11:48','2023-05-29 18:11:48'),(8,15,16,NULL,1,'2023-05-30 14:56:22','2023-05-30 14:56:22'),(9,27,6,NULL,1,'2023-06-01 16:34:11','2023-06-01 16:34:11'),(10,33,6,NULL,1,'2023-06-13 01:06:07','2023-06-13 01:06:07'),(11,34,16,NULL,1,'2023-06-13 10:40:48','2023-06-13 10:40:48'),(13,42,39,NULL,1,'2023-06-21 11:00:05','2023-06-21 11:00:05'),(15,45,38,NULL,1,'2023-06-21 11:07:27','2023-06-21 11:07:27'),(16,47,38,NULL,1,'2023-06-22 02:59:56','2023-06-22 02:59:56'),(17,48,49,NULL,1,'2023-07-05 13:13:52','2023-07-05 13:13:52'),(18,51,49,NULL,1,'2023-07-05 14:19:09','2023-07-05 14:19:09'),(20,36,6,NULL,1,'2023-07-06 13:17:00','2023-07-06 13:17:00'),(21,37,6,NULL,1,'2023-07-10 11:34:05','2023-07-10 11:34:05');
/*!40000 ALTER TABLE `assign_counselors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asyncs`
--

DROP TABLE IF EXISTS `asyncs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asyncs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asyncs`
--

LOCK TABLES `asyncs` WRITE;
/*!40000 ALTER TABLE `asyncs` DISABLE KEYS */;
INSERT INTO `asyncs` VALUES (7,'Activate Video Call Button','e7559b18-079e-4a18-9357-91f809ea1bcb',1,6,1,'2023-04-13 14:34:27','2023-04-13 14:34:27'),(15,'Activate Video Call Button','4f8ccbc2-aae2-4cd4-928c-2083edf102b7',3,6,1,'2023-05-27 18:15:49','2023-05-27 18:15:49'),(17,'Activate Video Call Button','0cd5f588-bd15-41e2-a5e3-5685beda8657',7,12,1,'2023-05-29 18:25:08','2023-05-29 18:25:08'),(18,'Activate Video Call Button','680960c3-420e-4dbb-8719-3070839ce1a6',8,16,1,'2023-05-30 15:03:53','2023-05-30 15:03:53');
/*!40000 ALTER TABLE `asyncs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `charge_amount` double DEFAULT NULL,
  `balance` double(9,3) NOT NULL,
  `remainder_count` int NOT NULL DEFAULT '0',
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `counselor_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billings`
--

LOCK TABLES `billings` WRITE;
/*!40000 ALTER TABLE `billings` DISABLE KEYS */;
INSERT INTO `billings` VALUES (1,4,500,500.000,18,'Insurance Payer',1,'2023-04-04 13:33:28','2023-05-29 18:26:31',NULL),(2,4,500,500.000,18,'Insurance Payer',1,'2023-04-04 13:45:28','2023-05-29 18:26:31',NULL);
/*!40000 ALTER TABLE `billings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_messages`
--

DROP TABLE IF EXISTS `chat_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int unsigned NOT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chat_id` int unsigned NOT NULL,
  `status_received` int NOT NULL DEFAULT '0',
  `viewable` int NOT NULL DEFAULT '1',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_id` int unsigned DEFAULT NULL,
  `activity_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_messages`
--

LOCK TABLES `chat_messages` WRITE;
/*!40000 ALTER TABLE `chat_messages` DISABLE KEYS */;
INSERT INTO `chat_messages` VALUES (1,'hello\nneed help',4,0,'2023-04-05 15:11:59','2023-05-29 12:05:53',3,1,1,NULL,NULL,NULL),(2,'ok',6,0,'2023-04-05 15:22:32','2023-05-29 12:05:53',3,1,1,NULL,NULL,NULL),(3,'https://nsansawellness.com/video-session/6/1/chewe%20chikweto/patient',6,0,'2023-04-05 15:25:57','2023-06-19 15:06:37',1,0,1,NULL,NULL,NULL),(4,'https://nsansawellness.com/video-session/6/1/chewe%20chikweto/patient',6,0,'2023-04-05 15:26:02','2023-05-29 12:05:53',3,1,1,NULL,NULL,NULL),(5,'questions\nhow i can deal stress',4,0,'2023-04-12 18:24:02','2023-05-29 12:05:53',3,1,1,NULL,NULL,NULL),(6,'hey',6,0,'2023-04-13 14:27:51','2023-05-29 12:05:53',3,1,1,NULL,NULL,NULL),(7,'Hi',3,0,'2023-04-13 14:32:37','2023-07-07 14:11:26',4,1,1,NULL,NULL,NULL),(8,'Hey bremah, hope u are okay',6,0,'2023-04-13 14:33:20','2023-07-07 14:11:26',4,1,1,NULL,NULL,NULL),(9,'Hi George',6,0,'2023-05-27 11:25:06','2023-05-29 12:05:53',3,1,1,NULL,NULL,NULL),(10,'Are you there',12,0,'2023-05-29 18:18:10','2023-05-29 18:31:41',7,1,1,NULL,NULL,NULL),(11,'Can you see the video link?',12,0,'2023-05-29 18:18:27','2023-05-29 18:31:41',7,1,1,NULL,NULL,NULL),(12,'i cannot see you in here',4,0,'2023-05-29 18:25:08','2023-05-29 18:31:41',7,1,1,NULL,NULL,NULL),(13,'in the video chat',4,0,'2023-05-29 18:25:25','2023-05-29 18:31:41',7,1,1,NULL,NULL,NULL),(14,'hello',15,0,'2023-05-30 14:59:50','2023-05-30 15:12:28',8,1,1,NULL,NULL,NULL),(15,'Goodafternoon ,welcome to Nansa wellness center\nhow may I assist you today?',16,0,'2023-05-30 15:00:56','2023-05-30 15:12:28',8,1,1,NULL,NULL,NULL),(16,'Welcome to nsansa wellness',6,0,'2023-06-01 16:36:00','2023-07-05 15:33:09',9,1,1,NULL,NULL,NULL),(17,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/12ca36d4-02f5-496d-a24b-631f6423b12c\'>Join Video Call</a>',6,0,'2023-06-01 16:36:25','2023-07-05 15:33:09',9,1,1,NULL,NULL,NULL),(18,'Hello there chewe welcome to nsansa wellness how are doing today',6,0,'2023-06-13 10:44:46','2023-06-19 15:06:37',1,0,1,NULL,NULL,NULL),(19,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/344cea28-bfd8-43f5-8eca-e511e116d055\'>Join Video Call</a>',46,0,'2023-06-20 20:44:53','2023-06-20 20:49:12',12,1,1,NULL,NULL,NULL),(20,'Hello Taizya, i will be your counselor for today.\nplease let me know when you are ready so that i can start the video call.',39,0,'2023-06-21 12:28:46','2023-07-06 14:20:14',13,1,1,NULL,NULL,NULL),(21,'Hello Leah, Yes I am ready',42,0,'2023-06-21 12:30:54','2023-07-06 14:20:14',13,1,1,NULL,NULL,NULL),(22,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/cb207aa2-1c61-493c-b0a3-dfc259625860\'>Join Video Call</a>',39,0,'2023-06-21 12:33:03','2023-07-06 14:20:14',13,1,1,NULL,NULL,NULL),(23,'hai this is fridah from nsansa please let me know when ready',38,0,'2023-06-21 15:05:39','2023-07-10 14:00:16',14,0,1,NULL,NULL,NULL),(24,'Hello',45,0,'2023-06-21 15:16:35','2023-06-22 08:24:48',15,1,1,NULL,NULL,NULL),(25,'Am ready now',45,0,'2023-06-21 15:16:43','2023-06-22 08:24:48',15,1,1,NULL,NULL,NULL),(26,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/fe5fcd57-a285-47a2-ba80-cd467db86e90\'>Join Video Call</a>',38,0,'2023-06-21 15:18:56','2023-06-22 08:24:48',15,1,1,NULL,NULL,NULL),(27,'Good morning, I am Debra from Nsansa wellness, let me know when you are ready.',38,0,'2023-06-22 08:12:13','2023-06-22 09:37:15',16,1,1,NULL,NULL,NULL),(28,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/13146dcd-9ba8-4d0f-9f56-dcfc1a001630\'>Join Video Call</a>',38,0,'2023-06-22 08:25:22','2023-06-22 09:37:15',16,1,1,NULL,NULL,NULL),(29,'Can we reschedule when you are free?',38,0,'2023-06-22 09:10:40','2023-06-22 09:37:15',16,1,1,NULL,NULL,NULL),(30,'Hello',51,0,'2023-07-05 14:22:47','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(31,'hi',51,0,'2023-07-05 14:40:20','2023-07-05 15:33:09',9,0,1,NULL,NULL,NULL),(32,'hi',51,0,'2023-07-05 14:52:46','2023-07-07 14:11:26',4,0,1,NULL,NULL,NULL),(33,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/4ec0d57d-e00d-40a3-a86f-967da8c754ef\'>Join Video Call</a>',49,0,'2023-07-05 15:11:55','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(34,'Greetings',49,0,'2023-07-05 15:12:05','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(35,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/1ee8adcf-ff11-4f2f-8474-db02d5667d9d\'>Join Video Call</a>',49,0,'2023-07-05 15:16:26','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(36,'Hello',49,0,'2023-07-05 15:21:50','2023-07-05 15:33:09',9,0,1,NULL,NULL,NULL),(37,'Tasheni how are you',49,0,'2023-07-05 15:24:06','2023-07-05 15:33:09',9,0,1,NULL,NULL,NULL),(38,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/85c1cc8f-8a1e-4c89-ace2-7016afeb9a26\'>Join Video Call</a>',49,0,'2023-07-05 15:36:26','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(39,'Hi',51,0,'2023-07-05 15:39:25','2023-07-05 15:46:30',10,0,1,NULL,NULL,NULL),(40,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/679374de-96be-45b9-a056-ef67af6209b8\'>Join Video Call</a>',49,0,'2023-07-05 15:42:43','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(41,'Hello',51,0,'2023-07-06 14:11:15','2023-07-06 14:20:14',13,0,1,NULL,NULL,NULL),(42,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/4/receiver/patient/3e524c18-18ef-48b3-b8cf-a81afc0a7f85\'>          <svg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' fill=\'currentColor\' class=\'bi bi-person-video3\' viewBox=\'0 0 16 16\'>            <path d=\'M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2Z\'/>            <path d=\'M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2H2Z\'/>          </svg>          Join Video Call</a>',49,0,'2023-07-06 14:15:59','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(43,'Good afternoon',49,0,'2023-07-06 14:19:11','2023-07-06 14:19:11',11,0,1,NULL,NULL,NULL),(44,'hi',51,1,'2023-07-06 14:38:09','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(45,'the link is https://meet.google.com/fcc-iusi-gzt',51,1,'2023-07-06 14:38:19','2023-07-06 14:38:20',18,1,1,NULL,NULL,NULL),(46,'Hi George are you there?',6,0,'2023-07-10 11:36:19','2023-07-10 11:54:47',21,0,1,NULL,NULL,NULL),(47,'<a class=\'btn btn-danger btn-sm text-white\' href=\'https://nsansawellness.com/therapy-session/10/21/receiver/patient/1e32cd2e-01db-4301-844c-606277e002bc\'>          <svg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' fill=\'currentColor\' class=\'bi bi-person-video3\' viewBox=\'0 0 16 16\'>            <path d=\'M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2Z\'/>            <path d=\'M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2H2Z\'/>          </svg>          &nbsp;          Join Video Call</a>',6,0,'2023-07-10 11:54:43','2023-07-10 11:54:47',21,0,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `chat_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'single',
  `sender_id` int unsigned NOT NULL,
  `receiver_id` int unsigned NOT NULL,
  `appointment_id` int unsigned DEFAULT NULL,
  `third_party_id` int unsigned DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chats`
--

LOCK TABLES `chats` WRITE;
/*!40000 ALTER TABLE `chats` DISABLE KEYS */;
INSERT INTO `chats` VALUES (1,NULL,'single',6,2,NULL,NULL,1,'2023-04-04 13:42:26','2023-04-04 13:42:26',NULL,0),(2,NULL,'single',6,2,NULL,NULL,1,'2023-04-04 13:42:30','2023-04-04 13:42:30',NULL,0),(3,NULL,'single',6,4,NULL,NULL,1,'2023-04-04 13:43:06','2023-04-04 13:43:06',NULL,0),(4,NULL,'single',6,3,NULL,NULL,1,'2023-04-13 13:40:15','2023-04-13 13:40:15',NULL,0),(5,NULL,'single',6,7,NULL,NULL,1,'2023-04-14 22:33:39','2023-04-14 22:33:39',NULL,0),(6,NULL,'single',12,5,NULL,NULL,1,'2023-05-29 18:08:57','2023-05-29 18:08:57',NULL,0),(7,NULL,'single',12,4,NULL,NULL,1,'2023-05-29 18:11:48','2023-05-29 18:11:48',NULL,0),(8,NULL,'single',16,15,NULL,NULL,1,'2023-05-30 14:56:22','2023-05-30 14:56:22',NULL,0),(9,NULL,'single',6,27,NULL,NULL,1,'2023-06-01 16:34:11','2023-06-01 16:34:11',NULL,0),(10,NULL,'single',6,33,NULL,NULL,1,'2023-06-13 01:06:07','2023-06-13 01:06:07',NULL,0),(11,NULL,'single',16,34,NULL,NULL,1,'2023-06-13 10:40:48','2023-06-13 10:40:48',NULL,0),(12,NULL,'single',46,45,NULL,NULL,1,'2023-06-20 20:42:39','2023-06-20 20:42:39',NULL,0),(13,NULL,'single',39,42,NULL,NULL,1,'2023-06-21 11:00:05','2023-06-21 11:00:05',NULL,0),(14,NULL,'single',38,37,NULL,NULL,1,'2023-06-21 11:06:00','2023-06-21 11:06:00',NULL,0),(15,NULL,'single',38,45,NULL,NULL,1,'2023-06-21 11:07:27','2023-06-21 11:07:27',NULL,0),(16,NULL,'single',38,47,NULL,NULL,1,'2023-06-22 02:59:56','2023-06-22 02:59:56',NULL,0),(17,NULL,'single',49,48,NULL,NULL,1,'2023-07-05 13:13:52','2023-07-05 13:13:52',NULL,0),(18,NULL,'single',49,51,NULL,NULL,1,'2023-07-05 14:19:09','2023-07-05 14:19:09',NULL,0),(19,NULL,'single',40,36,NULL,NULL,1,'2023-07-06 13:11:20','2023-07-06 13:11:20',NULL,0),(20,NULL,'single',6,36,NULL,NULL,1,'2023-07-06 13:17:00','2023-07-06 13:17:00',NULL,0),(21,NULL,'single',6,37,NULL,NULL,1,'2023-07-10 11:34:05','2023-07-10 11:34:05',NULL,0);
/*!40000 ALTER TABLE `chats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commission_settings`
--

DROP TABLE IF EXISTS `commission_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commission_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` double(9,3) DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commission_settings`
--

LOCK TABLES `commission_settings` WRITE;
/*!40000 ALTER TABLE `commission_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `commission_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commissions`
--

DROP TABLE IF EXISTS `commissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `payment_id` int unsigned DEFAULT NULL,
  `amount` double(9,3) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commissions`
--

LOCK TABLES `commissions` WRITE;
/*!40000 ALTER TABLE `commissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `commissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversations`
--

DROP TABLE IF EXISTS `conversations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conversations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_user_id` int NOT NULL,
  `second_user_id` int NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversations`
--

LOCK TABLES `conversations` WRITE;
/*!40000 ALTER TABLE `conversations` DISABLE KEYS */;
/*!40000 ALTER TABLE `conversations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department_commissions`
--

DROP TABLE IF EXISTS `department_commissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `department_commissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `department_id` int unsigned NOT NULL,
  `comm_setting_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_commissions`
--

LOCK TABLES `department_commissions` WRITE;
/*!40000 ALTER TABLE `department_commissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `department_commissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liecense` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `files` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int NOT NULL,
  `conversation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_conversations`
--

DROP TABLE IF EXISTS `group_conversations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group_conversations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_conversations`
--

LOCK TABLES `group_conversations` WRITE;
/*!40000 ALTER TABLE `group_conversations` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_conversations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_users`
--

DROP TABLE IF EXISTS `group_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group_users` (
  `group_conversation_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_users`
--

LOCK TABLES `group_users` WRITE;
/*!40000 ALTER TABLE `group_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` int NOT NULL,
  `conversation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0000_00_00_000000_create_websockets_statistics_entries_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2017_10_16_084042_create_conversations_table',1),(5,'2017_10_16_091956_create_messages_table',1),(6,'2017_10_21_165446_create_group_conversations_table',1),(7,'2017_10_21_172616_create_group_users_table',1),(8,'2017_10_25_165610_add_is_accepted_column_to_conversation_table',1),(9,'2017_11_07_224816_create_files_table',1),(10,'2019_08_19_000000_create_failed_jobs_table',1),(11,'2019_12_14_000001_create_personal_access_tokens_table',1),(12,'2022_09_29_130250_create_alter_user_table',1),(13,'2022_10_12_083928_create_permission_tables',1),(14,'2022_10_14_124443_alter_user_2_table',1),(15,'2022_10_14_164503_create_alter_use_2_table',1),(16,'2022_10_15_090445_create_questionaires_table',1),(17,'2022_10_15_105303_create_questions_table',1),(18,'2022_10_15_105706_create_results_table',1),(19,'2022_10_17_105320_create_answers_table',1),(20,'2022_10_18_113059_create_alter_answers_table',1),(21,'2022_10_18_114015_create_alter_user_ses_table',1),(22,'2022_10_18_114613_create_sessions_table',1),(23,'2022_10_19_130751_create_users_altered_table',1),(24,'2022_10_19_140051_create_results_altered_table',1),(25,'2022_10_25_091056_alter_user_tbl_table',1),(26,'2022_10_25_134112_create_appointments_table',1),(27,'2022_10_25_134610_create_user_appointments_table',1),(28,'2022_11_09_073657_appointment_fields_table',1),(29,'2022_11_09_074719_appointment_fields2_table',1),(30,'2022_11_16_081446_create_notifications_table',1),(31,'2022_11_17_120421_create_alter_status_apptnment',1),(32,'2022_11_21_081455_create_alt_user',1),(33,'2022_11_21_124154_create_activities_table',1),(34,'2022_11_21_125150_create_patient_activities_table',1),(35,'2022_11_24_142155_create_assign_counselors_table',1),(36,'2022_11_28_114451_create_user_addition_table',1),(37,'2022_11_28_122351_create_user_addition2_table',1),(38,'2022_12_04_185933_create_patient_files_table',1),(39,'2022_12_05_111904_create_patient_files2_table',1),(40,'2022_12_12_095452_create_user_additionals_table',1),(41,'2022_12_15_144752_create_alter_user_image',1),(42,'2022_12_16_143600_alter_user_condition_new_table',1),(43,'2022_12_19_094708_create_chats_table',1),(44,'2022_12_19_113643_create_chat_messages_table',1),(45,'2022_12_19_120254_create_alter_chat_table',1),(46,'2022_12_20_113928_create_alter_chatmessages_table',1),(47,'2023_01_05_235431_create_billings_table',1),(48,'2023_01_06_000240_create_payments_table',1),(49,'2023_01_06_001712_create_commissions_table',1),(50,'2023_01_06_002608_create_commission_settings_table',1),(51,'2023_01_06_003352_create_department_commissions_table',1),(52,'2023_01_06_003704_create_departments_table',1),(53,'2023_01_06_004443_create_my_departments_table',1),(54,'2023_01_12_023255_create_asyncs_table',1),(55,'2023_01_20_134119_create_alter_billing_user_table',1),(56,'2023_01_25_123827_create_session_notes_table',1),(57,'2023_03_30_122639_create_alter_billing_2_table',1),(58,'2023_04_21_154313_create_site_ratings_table',2),(59,'2023_05_03_154453_create_alter_activities_table',3),(60,'2023_05_09_155704_create_alter_acts_table',4),(61,'2023_05_11_145854_create_patient_questionnaires_table',4),(62,'2023_05_11_145942_create_patient_q_questions_table',4),(63,'2023_05_11_150000_create_patient_q_answers_table',4),(64,'2023_05_11_150656_create_patient_q_results_table',4),(65,'2023_05_11_192554_creat_alter_patient_questionnaire_table',4),(66,'2023_05_24_131008_create_alter_patientqanswers_table',5),(67,'2023_06_06_114951_create_alter_chats_table',6),(68,'2023_06_08_145211_create_push_alerts_table',7),(69,'2023_06_12_115220_create_plans_table',8),(70,'2023_06_12_170759_create_plan_items_table',8),(71,'2023_06_27_011408_create_videos_table',9),(72,'2023_07_06_164144_alter_user_appointmnt_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(3,'App\\Models\\User',2),(3,'App\\Models\\User',5),(2,'App\\Models\\User',6),(2,'App\\Models\\User',8),(2,'App\\Models\\User',11),(2,'App\\Models\\User',12),(1,'App\\Models\\User',13),(1,'App\\Models\\User',14),(3,'App\\Models\\User',36),(3,'App\\Models\\User',37),(2,'App\\Models\\User',38),(2,'App\\Models\\User',39),(2,'App\\Models\\User',40),(2,'App\\Models\\User',41),(3,'App\\Models\\User',42),(3,'App\\Models\\User',43),(3,'App\\Models\\User',44),(2,'App\\Models\\User',46),(3,'App\\Models\\User',47),(2,'App\\Models\\User',49),(3,'App\\Models\\User',50),(3,'App\\Models\\User',51);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_departments`
--

DROP TABLE IF EXISTS `my_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `my_departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_departments`
--

LOCK TABLES `my_departments` WRITE;
/*!40000 ALTER TABLE `my_departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES ('00226679-5177-4b0f-9738-84f14cfe4b98','App\\Notifications\\NewAppointment','App\\Models\\User',49,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/11\\/receiver\\/patient\\/160cb028-047f-418a-afcb-ca5957bf10fb\"}',NULL,'2023-07-06 09:23:39','2023-07-06 09:23:39'),('00bf8a7f-be71-4901-ba16-751eb9bee8ff','App\\Notifications\\NsansaWellnessCounselor','App\\Models\\User',6,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"Hi Wezi Bota. Thank you for joining Nsansa Wellness Group.\",\"sender\":\"Nsansa Wellness Board\",\"type\":\"welcome-counselor\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-04 13:31:22','2023-04-04 13:31:22'),('053ed8ff-2d58-4ad2-9d80-c4886683e5cf','App\\Notifications\\NewAppointment','App\\Models\\User',37,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have been invited to a new video call appointment with Wezi Bota\",\"sender\":\"Wezi Bota\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/6\\/14\\/receiver\\/patient\\/53394391-48bc-44a2-8c73-d0a642dd6ccf\"}',NULL,'2023-07-10 13:53:10','2023-07-10 13:53:10'),('0606e7be-133b-48c0-b68d-05dbaa86d015','App\\Notifications\\CounselorAssigned','App\\Models\\User',45,'{\"sender_id\":\"38\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-21 11:07:30','2023-06-21 11:07:30'),('0a31f847-f51f-445b-a261-871d7116312d','App\\Notifications\\NewAppointment','App\\Models\\User',37,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have been invited to a new video call appointment with Wezi Bota\",\"sender\":\"Wezi Bota\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/6\\/19\\/receiver\\/patient\\/1a4856fd-0ca3-4217-9e91-ec55e219ab26\"}',NULL,'2023-07-10 12:28:29','2023-07-10 12:28:29'),('0cd78f1d-8d51-43f7-a6ac-0c0383d993a6','App\\Notifications\\CounselorAssigned','App\\Models\\User',2,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-04-04 13:42:32','2023-04-04 13:42:32'),('1b9d8448-57af-4f83-b454-1fcf00c9edb4','App\\Notifications\\NewActivity','App\\Models\\User',2,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"please talk to your wife\",\"sender\":\"Wezi Bota\",\"type\":\"new-activity\",\"ispopped\":0,\"link\":\"activities\"}',NULL,'2023-04-05 15:36:56','2023-04-05 15:36:56'),('20e40f1c-de87-477a-9132-a7a7cccf4334','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":45,\"name\":\"george Munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-20 20:23:22','2023-06-20 20:23:22'),('23531c38-4b49-429e-b959-99202f841bfa','App\\Notifications\\NewAppointment','App\\Models\\User',48,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/8\\/receiver\\/patient\\/b264e1f6-b8ca-487b-bb18-0fd40a265979\"}',NULL,'2023-07-05 13:16:15','2023-07-05 13:16:15'),('239ed6b6-569c-4cd2-a0f9-4902dc2cc97f','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"27\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-01 16:34:11','2023-06-01 16:34:11'),('23e06a37-fe29-4049-9ae0-a35ca54546f4','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":25,\"name\":\"Bremah Nyeleti\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-01 16:14:42','2023-06-01 16:14:42'),('27f043b0-e56b-45f6-bfdc-009d167e203b','App\\Notifications\\NewAppointment','App\\Models\\User',5,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/2\"}',NULL,'2023-06-05 10:16:41','2023-06-05 10:16:41'),('280d9e55-b4fc-45e3-9d7e-1a4285c98ec1','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":26,\"name\":\"George Munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-01 16:18:34','2023-06-01 16:18:34'),('2bde0e0c-efc1-4907-b2bf-7ae141fa3cc8','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"ddddd video call appointment\",\"sender\":\"ddddd appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/1\"}',NULL,'2023-04-04 13:46:08','2023-04-04 13:46:08'),('307b0358-c81c-4ce4-9d8e-4944a1b3635a','App\\Notifications\\CounselorAssigned','App\\Models\\User',2,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-04-04 13:42:29','2023-04-04 13:42:29'),('314eb4dc-65d7-408c-bb7a-8db60695ed64','App\\Notifications\\Welcome','App\\Models\\User',43,'{\"sender_id\":43,\"name\":\"Andrew Munganga\",\"message\":\"Hi Andrew Munganga. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-16 16:31:42','2023-06-16 16:31:42'),('3308ba45-f7e7-446b-bae4-e8ae50af6222','App\\Notifications\\NewAppointment','App\\Models\\User',2,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have been invited to a new phone call appointment with Wezi Bota\",\"sender\":\"Wezi Bota\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"1c9146df-30c1-4f32-8529-fa22f6c9441c\"}',NULL,'2023-06-19 15:07:42','2023-06-19 15:07:42'),('3486ba8f-0b7a-4daf-99b2-e29073496558','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"2\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-04-04 13:42:31','2023-04-04 13:42:31'),('36c51d54-e563-4920-b523-f17c3903ae25','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"couselling session phone call appointment\",\"sender\":\"couselling session appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/3\"}',NULL,'2023-06-19 15:07:44','2023-06-19 15:07:44'),('36dcd97b-5f49-4a77-aec1-942b019530fe','App\\Notifications\\Welcome','App\\Models\\User',50,'{\"sender_id\":50,\"name\":\"George Munganga\",\"message\":\"Hi George Munganga. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-07-05 14:01:56','2023-07-05 14:01:56'),('38dd6e81-a862-49ba-8a03-57d4d02268f6','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"33\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-13 01:06:09','2023-06-13 01:06:09'),('3a0d5d2c-707c-4079-90a8-5b73de2d0cd9','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":7,\"name\":\"Chipeko Wasa\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-14 22:16:23','2023-04-14 22:16:23'),('3aca830c-0b63-4211-84a9-784e807cef60','App\\Notifications\\Welcome','App\\Models\\User',33,'{\"sender_id\":33,\"name\":\"Bremah Nyeleti\",\"message\":\"Hi Bremah Nyeleti. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-13 01:03:29','2023-06-13 01:03:29'),('3d586cd0-875c-4057-a1c6-21fded773306','App\\Notifications\\Welcome','App\\Models\\User',51,'{\"sender_id\":51,\"name\":\"Tasheni Bota\",\"message\":\"Hi Tasheni Bota. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-07-05 14:07:08','2023-07-05 14:07:08'),('3f026cc3-7025-478c-98f6-4c8aea0e2a2f','App\\Notifications\\NewAppointment','App\\Models\\User',37,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have been invited to a new video call appointment with Wezi Bota\",\"sender\":\"Wezi Bota\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/6\\/14\\/receiver\\/patient\\/0f26b6c6-f6c7-4ed5-8992-ca87463473e9\"}',NULL,'2023-07-10 12:37:21','2023-07-10 12:37:21'),('3f278a83-2e6c-45d1-a4e7-4b40917dc97f','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Nsansa Therapy Session video call appointment\",\"sender\":\"Nsansa Therapy Session appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/8\"}',NULL,'2023-07-05 13:16:17','2023-07-05 13:16:17'),('3fe544b1-5ae2-425f-bba4-2edec5ad3305','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"2\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-04-04 13:42:28','2023-04-04 13:42:28'),('45273199-b451-40b0-ba8d-4c4005ab5a81','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"Internal Meeting Test video call appointment\",\"sender\":\"Internal Meeting Test appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/18\"}',NULL,'2023-07-10 11:54:17','2023-07-10 11:54:17'),('47836e77-117f-4d34-b5a0-01208db0451f','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"Meeting Up Call video call appointment\",\"sender\":\"Meeting Up Call appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/14\"}',NULL,'2023-07-10 13:53:12','2023-07-10 13:53:12'),('47a9dc3c-870f-4103-afd2-a960c80e086d','App\\Notifications\\CounselorAssigned','App\\Models\\User',37,'{\"sender_id\":\"38\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-21 11:06:03','2023-06-21 11:06:03'),('48cc3ae0-4bdc-4afe-90bc-27c3fe6b69db','App\\Notifications\\CounselorAssigned','App\\Models\\User',47,'{\"sender_id\":\"38\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-22 02:59:59','2023-06-22 02:59:59'),('4bb1f99a-ef12-4814-be12-37043bf9f60f','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":44,\"name\":\"Bremah Nyeleti\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-20 13:27:01','2023-06-20 13:27:01'),('4cac4ab2-de05-4c4f-94bf-69dbf44e57b7','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Nsansa Therapy Session video call appointment\",\"sender\":\"Nsansa Therapy Session appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/11\"}',NULL,'2023-07-06 09:23:40','2023-07-06 09:23:40'),('4d0fc87d-d8a9-4a37-b7df-f4802de4e2dd','App\\Notifications\\NewAppointment','App\\Models\\User',6,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/1\"}',NULL,'2023-04-04 13:46:07','2023-04-04 13:46:07'),('4efa1925-7ab3-49ed-8fe5-91b42b3ab837','App\\Notifications\\NewPatientAssigned','App\\Models\\User',49,'{\"sender_id\":\"48\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-07-05 13:13:54','2023-07-05 13:13:54'),('5091b221-ddb4-4374-98e2-4394df7913b3','App\\Notifications\\NewAppointment','App\\Models\\User',4,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/1\"}',NULL,'2023-04-04 13:46:05','2023-04-04 13:46:05'),('5243be4b-8a1a-4845-9774-ed29ff16a762','App\\Notifications\\CounselorAssigned','App\\Models\\User',4,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-04-04 13:43:09','2023-04-04 13:43:09'),('58ccc6d5-371f-4bae-9100-b997c9e136d4','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":15,\"name\":\"mercy nalu\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-05-30 14:36:45','2023-05-30 14:36:45'),('5a3e32e0-595e-4480-b86b-c718ced77134','App\\Notifications\\NewPatientAssigned','App\\Models\\User',12,'{\"sender_id\":\"5\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-05-29 18:08:59','2023-05-29 18:08:59'),('5b38e788-f10d-46d3-b81a-b97ab296ad83','App\\Notifications\\NewPatientAssigned','App\\Models\\User',39,'{\"sender_id\":\"42\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-21 11:00:08','2023-06-21 11:00:08'),('64b7d9d5-ce05-4f6d-86d1-0c5c66bc0401','App\\Notifications\\NewAppointment','App\\Models\\User',39,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/5\\/receiver\\/patient\\/9cc78da3-cd0b-4467-b411-ae7ad9a808ed\"}',NULL,'2023-06-21 11:03:49','2023-06-21 11:03:49'),('66af9423-6462-4e0e-96b7-58bb9ed5d1e7','App\\Notifications\\Welcome','App\\Models\\User',37,'{\"sender_id\":37,\"name\":\"George Munganga\",\"message\":\"Hi George Munganga. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-14 11:17:41','2023-06-14 11:17:41'),('676f7926-ad91-45a3-a11e-4d0b91dbcffa','App\\Notifications\\NewAppointment','App\\Models\\User',38,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/6\\/receiver\\/patient\\/6a1eccbf-103f-46c1-87e4-13572d8a3d15\"}',NULL,'2023-06-21 11:09:47','2023-06-21 11:09:47'),('6832348c-184a-41c7-8962-4e424f998d2b','App\\Notifications\\Welcome','App\\Models\\User',25,'{\"sender_id\":25,\"name\":\"Bremah Nyeleti\",\"message\":\"Hi Bremah Nyeleti. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-01 16:14:41','2023-06-01 16:14:41'),('6b6ed11c-a85f-4f8c-bfb8-b6ba69c29dd0','App\\Notifications\\NewAppointment','App\\Models\\User',45,'{\"sender_id\":46,\"name\":\"George kulunga\",\"message\":\"You have been invited to a new phone call appointment with George kulunga\",\"sender\":\"George kulunga\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"0167b145-00b3-42cf-97ec-b70b15ee445a\"}',NULL,'2023-06-20 20:50:52','2023-06-20 20:50:52'),('6c2f1e96-539e-488a-a1ba-abaa9b68fc77','App\\Notifications\\Welcome','App\\Models\\User',26,'{\"sender_id\":26,\"name\":\"George Munganga\",\"message\":\"Hi George Munganga. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-01 16:18:34','2023-06-01 16:18:34'),('6dd4d0b3-0a92-4e4f-a96b-4ac14d986351','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":37,\"name\":\"George Munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-14 11:17:42','2023-06-14 11:17:42'),('726dc1b6-3017-4feb-9756-0a3bf6951866','App\\Notifications\\NewAppointment','App\\Models\\User',37,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have been invited to a new video call appointment with Wezi Bota\",\"sender\":\"Wezi Bota\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/6\\/14\\/receiver\\/patient\\/b5705dd1-9d82-4520-9c28-5790984c6e9b\"}',NULL,'2023-07-10 12:48:42','2023-07-10 12:48:42'),('744562e2-dc66-4fcd-a08f-97bd651c1e2d','App\\Notifications\\NewAppointment','App\\Models\\User',51,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/9\\/receiver\\/patient\\/89abf72a-b6da-4987-bf6b-dcaaf80356a5\"}',NULL,'2023-07-05 14:20:18','2023-07-05 14:20:18'),('744a3431-3e99-4926-9bb5-6d88947f417c','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"7\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-04-14 22:33:42','2023-04-14 22:33:42'),('744bdecb-0daf-4cbe-bc98-68b812f9bfd5','App\\Notifications\\NewAppointment','App\\Models\\User',49,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/8\\/receiver\\/patient\\/b264e1f6-b8ca-487b-bb18-0fd40a265979\"}',NULL,'2023-07-05 13:16:16','2023-07-05 13:16:16'),('77ebcc42-818b-4a42-b601-a96c9ba9b1a4','App\\Notifications\\NewPatientAssigned','App\\Models\\User',38,'{\"sender_id\":\"47\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-22 02:59:58','2023-06-22 02:59:58'),('78128f47-7c4e-41cd-a97a-25ca0f10065b','App\\Notifications\\NewPatientAssigned','App\\Models\\User',16,'{\"sender_id\":\"15\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-05-30 14:56:23','2023-05-30 14:56:23'),('7d390db0-5413-44a9-bd67-206c19c44eb4','App\\Notifications\\CounselorAssigned','App\\Models\\User',48,'{\"sender_id\":\"49\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-07-05 13:13:55','2023-07-05 13:13:55'),('84557638-d555-42b8-813d-f50486173ff9','App\\Notifications\\Welcome','App\\Models\\User',27,'{\"sender_id\":27,\"name\":\"george munganga\",\"message\":\"Hi george munganga. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-01 16:31:42','2023-06-01 16:31:42'),('85e3f6f3-8d5a-425c-a6cc-da6f39410a32','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"Testing Meetup video call appointment\",\"sender\":\"Testing Meetup appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/14\"}',NULL,'2023-07-10 12:48:43','2023-07-10 12:48:43'),('8783306a-f226-4e18-b0c8-f253d3020a00','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":43,\"name\":\"Andrew Munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-16 16:31:43','2023-06-16 16:31:43'),('895a5c65-2476-44bb-bf55-2d354b13d50d','App\\Notifications\\Welcome','App\\Models\\User',45,'{\"sender_id\":45,\"name\":\"george Munganga\",\"message\":\"Hi george Munganga. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-20 20:23:21','2023-06-20 20:23:21'),('8c48f145-958d-4b31-a458-c139925e8dce','App\\Notifications\\NsansaWellnessCounselor','App\\Models\\User',8,'{\"sender_id\":8,\"name\":\"Nyambe Mufungulwa\",\"message\":\"Hi Nyambe Mufungulwa. Thank you for joining Nsansa Wellness Group.\",\"sender\":\"Nsansa Wellness Board\",\"type\":\"welcome-counselor\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-15 11:39:29','2023-04-15 11:39:29'),('8cd5330b-cf7d-4621-951c-407c52e1a970','App\\Notifications\\CounselorAssigned','App\\Models\\User',45,'{\"sender_id\":\"46\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-20 20:42:42','2023-06-20 20:42:42'),('8ef68e04-2dd7-482b-b4ca-b8dbfdcbb7a9','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Nsansa Therapy Sessions video call appointment\",\"sender\":\"Nsansa Therapy Sessions appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/7\"}',NULL,'2023-06-22 03:01:55','2023-06-22 03:01:55'),('90abde2d-172b-4f8d-93aa-2ebd4f7194b4','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"3\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-04-13 13:40:17','2023-04-13 13:40:17'),('92ab390f-dec7-4641-bcf2-5b085cd4da6e','App\\Notifications\\CounselorAssigned','App\\Models\\User',4,'{\"sender_id\":\"12\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-05-29 18:11:51','2023-05-29 18:11:51'),('93df735f-13fa-4285-b219-10dcf1e4399e','App\\Notifications\\CounselorAssigned','App\\Models\\User',5,'{\"sender_id\":\"12\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-05-29 18:09:01','2023-05-29 18:09:01'),('97250c23-924c-4bcb-9688-5da6ef759ba6','App\\Notifications\\NewPatientAssigned','App\\Models\\User',38,'{\"sender_id\":\"37\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-21 11:06:02','2023-06-21 11:06:02'),('97af4ff7-b241-40b6-a3d6-0e984f3f474b','App\\Notifications\\CounselorAssigned','App\\Models\\User',42,'{\"sender_id\":\"39\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-21 11:00:09','2023-06-21 11:00:09'),('97b33539-596d-4749-b797-0d9edd6b766d','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":46,\"name\":\"George kulunga\",\"message\":\"test phone call appointment\",\"sender\":\"test appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/4\"}',NULL,'2023-06-20 20:50:53','2023-06-20 20:50:53'),('9801173d-6ba9-4e14-bd06-6b68a131e96f','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"New Upcoming Meeting Test video call appointment\",\"sender\":\"New Upcoming Meeting Test appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/19\"}',NULL,'2023-07-10 12:28:30','2023-07-10 12:28:30'),('99364854-3904-4de8-8e5f-2d780479b852','App\\Notifications\\Welcome','App\\Models\\User',7,'{\"sender_id\":7,\"name\":\"Chipeko Wasa\",\"message\":\"Hi Chipeko Wasa. Welcome to Nsansawellness online therapy.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-14 22:16:21','2023-04-14 22:16:21'),('9992f41f-3fc7-4092-8baf-58ae67c96014','App\\Notifications\\Welcome','App\\Models\\User',5,'{\"sender_id\":5,\"name\":\"Bremah Nyeleti\",\"message\":\"Hi Bremah Nyeleti. Welcome to Nsansawellness online therapy.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-04 13:24:42','2023-04-04 13:24:42'),('9b56cd0c-ba33-4c2d-bbbf-ade88dd62193','App\\Notifications\\Welcome','App\\Models\\User',42,'{\"sender_id\":42,\"name\":\"Taizya Tembo\",\"message\":\"Hi Taizya Tembo. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-16 13:44:12','2023-06-16 13:44:12'),('9bd1d20c-5194-462c-889a-9c44084677f1','App\\Notifications\\NewAppointment','App\\Models\\User',47,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/7\\/receiver\\/patient\\/0854dc09-9639-4ed5-a15a-af6ed7345c71\"}',NULL,'2023-06-22 03:01:54','2023-06-22 03:01:54'),('9cea16c8-0799-4f91-8c8e-8e730ab69bb1','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":5,\"name\":\"Bremah Nyeleti\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-04 13:24:43','2023-04-04 13:24:43'),('9ed084d1-9cc4-4d99-93b1-acc1bcdc2345','App\\Notifications\\NewAppointment','App\\Models\\User',49,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/9\\/receiver\\/patient\\/89abf72a-b6da-4987-bf6b-dcaaf80356a5\"}',NULL,'2023-07-05 14:20:19','2023-07-05 14:20:19'),('9fd08280-cd65-4c83-b697-ac7f7ea79914','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":8,\"name\":\"Nyambe Mufungulwa\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-15 11:39:30','2023-04-15 11:39:30'),('a05e4f73-86c6-4019-87dc-5ccdb12feeac','App\\Notifications\\CounselorAssigned','App\\Models\\User',33,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-13 01:06:10','2023-06-13 01:06:10'),('a129e67a-8b7c-45e1-885f-328024caa7b3','App\\Notifications\\NewAppointment','App\\Models\\User',42,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/5\\/receiver\\/patient\\/9cc78da3-cd0b-4467-b411-ae7ad9a808ed\"}',NULL,'2023-06-21 11:03:51','2023-06-21 11:03:51'),('a19f32a7-3f00-49a8-bed6-3defb7aa3e83','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":4,\"name\":\"george munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-04 13:24:12','2023-04-04 13:24:12'),('a4e26f72-439d-4d3e-98d2-733eb28ba33e','App\\Notifications\\NewAppointment','App\\Models\\User',37,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/6\\/receiver\\/patient\\/6a1eccbf-103f-46c1-87e4-13572d8a3d15\"}',NULL,'2023-06-21 11:09:44','2023-06-21 11:09:44'),('a9845835-f758-47d9-b591-ea7403a75fff','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":47,\"name\":\"Tumeyo Chipungu\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-21 16:22:30','2023-06-21 16:22:30'),('aba817b4-5b3c-4b21-93e4-2d66bca7b26d','App\\Notifications\\NewPatientAssigned','App\\Models\\User',12,'{\"sender_id\":\"4\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-05-29 18:11:50','2023-05-29 18:11:50'),('ae62b471-7b60-4ae7-9ef5-33d377a23a5f','App\\Notifications\\NewAppointment','App\\Models\\User',51,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/13\\/receiver\\/patient\\/d5e0ee6e-c0b6-418c-a13e-07fa7db5e415\"}',NULL,'2023-07-06 13:14:32','2023-07-06 13:14:32'),('b02a9862-70a7-459d-8d5e-dc4c83a6dfa5','App\\Notifications\\NewAppointment','App\\Models\\User',51,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/11\\/receiver\\/patient\\/160cb028-047f-418a-afcb-ca5957bf10fb\"}',NULL,'2023-07-06 09:23:38','2023-07-06 09:23:38'),('b2a3123a-a7c4-47d8-aad2-23e553086165','App\\Notifications\\NewPatientAssigned','App\\Models\\User',38,'{\"sender_id\":\"45\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-21 11:07:29','2023-06-21 11:07:29'),('b49939b5-057f-4cb3-8b47-5f87668278dd','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":49,\"name\":\"Dalitso Maseko\",\"message\":\"Therapy Session 1 video call appointment\",\"sender\":\"Therapy Session 1 appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/10\"}',NULL,'2023-07-05 15:35:22','2023-07-05 15:35:22'),('b65e7007-fc59-4b99-9c52-fc48d1f647aa','App\\Notifications\\Welcome','App\\Models\\User',4,'{\"sender_id\":4,\"name\":\"george munganga\",\"message\":\"Hi george munganga. Welcome to Nsansawellness online therapy.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-04 13:24:11','2023-04-04 13:24:11'),('b6b16818-8b58-4a29-8ecb-5905f42256fe','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Nsansa Therapy Session video call appointment\",\"sender\":\"Nsansa Therapy Session appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/9\"}',NULL,'2023-07-05 14:20:21','2023-07-05 14:20:21'),('beed34dd-4d4b-4b39-9d8b-53dc910940f2','App\\Notifications\\Welcome','App\\Models\\User',15,'{\"sender_id\":15,\"name\":\"mercy nalu\",\"message\":\"Hi mercy nalu. Welcome to Nsansawellness online therapy.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-05-30 14:36:44','2023-05-30 14:36:44'),('c43b0758-ed38-4507-8f0d-9a3835a2bb01','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":9,\"name\":\"Chipego Waza\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-30 08:50:37','2023-04-30 08:50:37'),('c4ceed41-7d2d-4c7c-b50d-7ba977c8da20','App\\Notifications\\CounselorAssigned','App\\Models\\User',27,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-06-01 16:34:12','2023-06-01 16:34:12'),('c55798a2-48bd-4af7-bdec-662b0b48515c','App\\Notifications\\Welcome','App\\Models\\User',47,'{\"sender_id\":47,\"name\":\"Tumeyo Chipungu\",\"message\":\"Hi Tumeyo Chipungu. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-21 16:22:29','2023-06-21 16:22:29'),('c5994b61-20aa-4853-8b5e-e4730ceefd0e','App\\Notifications\\CounselorAssigned','App\\Models\\User',7,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-04-14 22:33:43','2023-04-14 22:33:43'),('ca664604-df12-4186-aa64-7a7e93252783','App\\Notifications\\NewPatientAssigned','App\\Models\\User',46,'{\"sender_id\":\"45\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-06-20 20:42:41','2023-06-20 20:42:41'),('cd4a0e79-4809-4e0c-a5c4-1a8f07656444','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Nsansa Counseling Session video call appointment\",\"sender\":\"Nsansa Counseling Session appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/6\"}',NULL,'2023-06-21 11:09:48','2023-06-21 11:09:48'),('cfedfc8e-86e4-4434-ae67-010e6815c3a9','App\\Notifications\\Welcome','App\\Models\\User',44,'{\"sender_id\":44,\"name\":\"Bremah Nyeleti\",\"message\":\"Hi Bremah Nyeleti. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-20 13:27:00','2023-06-20 13:27:00'),('d0b21be7-6cc7-4775-a10f-180349b8fd43','App\\Notifications\\NewPatientAssigned','App\\Models\\User',49,'{\"sender_id\":\"51\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-07-05 14:19:11','2023-07-05 14:19:11'),('d2902094-7c3b-4ab5-974d-e3b3267d110c','App\\Notifications\\NewAppointment','App\\Models\\User',37,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have been invited to a new video call appointment with Wezi Bota\",\"sender\":\"Wezi Bota\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/6\\/18\\/receiver\\/patient\\/8f8e4956-ad83-490e-b4c8-6ba4110876ac\"}',NULL,'2023-07-10 11:54:16','2023-07-10 11:54:16'),('d5ff2b39-5ba7-4964-834d-16bb29c17859','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":51,\"name\":\"Tasheni Bota\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-07-05 14:07:09','2023-07-05 14:07:09'),('d71f8380-f898-4226-99da-aad560056253','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":42,\"name\":\"Taizya Tembo\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-16 13:44:13','2023-06-16 13:44:13'),('e27ade6e-ee14-46d1-a0a3-741d6502cb87','App\\Notifications\\CounselorAssigned','App\\Models\\User',15,'{\"sender_id\":\"16\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-05-30 14:56:25','2023-05-30 14:56:25'),('e4540d43-3234-4e1e-8032-5577377c1d3d','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"First Test Meeting video call appointment\",\"sender\":\"First Test Meeting appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/14\"}',NULL,'2023-07-10 12:37:22','2023-07-10 12:37:22'),('e51baa0f-98ae-401e-8e97-b00131f5e34a','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Test Video Call Meeting video call appointment\",\"sender\":\"Test Video Call Meeting appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/2\"}',NULL,'2023-06-05 10:16:42','2023-06-05 10:16:42'),('e80f00fa-d65b-4553-9c12-413908b1cee5','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":6,\"name\":\"Wezi Bota\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-04 13:31:23','2023-04-04 13:31:23'),('e8b9d9fa-e080-4844-afe7-77cc108d75ac','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":27,\"name\":\"george munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-01 16:31:43','2023-06-01 16:31:43'),('eb250160-37a4-4c43-b469-ff903d987822','App\\Notifications\\NewPatientAssigned','App\\Models\\User',6,'{\"sender_id\":\"4\",\"name\":\"Nsansa wellness\",\"message\":\"You have one new patient assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"patient-assigned\",\"ispopped\":0,\"link\":\"\\/patient-files\"}',NULL,'2023-04-04 13:43:08','2023-04-04 13:43:08'),('eb6f7160-eb37-44d1-abd9-3a1630685781','App\\Notifications\\Welcome','App\\Models\\User',48,'{\"sender_id\":48,\"name\":\"Tasheni Bota\",\"message\":\"Hi Tasheni Bota. Welcome to Nsansawellness online therapy. An email will be sent once a counselor has been assigned to you.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-07-05 13:11:21','2023-07-05 13:11:21'),('ef2e81e5-1e7f-43ac-aa15-f38456092e5b','App\\Notifications\\Welcome','App\\Models\\User',9,'{\"sender_id\":9,\"name\":\"Chipego Waza\",\"message\":\"Hi Chipego Waza. Welcome to Nsansawellness online therapy.\",\"sender\":\"Nsansa Wellness\",\"type\":\"welcome\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-04-30 08:50:36','2023-04-30 08:50:36'),('f1164ba0-c8b0-48ca-9f3c-fb45cca89b90','App\\Notifications\\CounselorAssigned','App\\Models\\User',51,'{\"sender_id\":\"49\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-07-05 14:19:12','2023-07-05 14:19:12'),('f28096d7-3e09-4479-a342-416a9bcc6044','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":50,\"name\":\"George Munganga\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-07-05 14:01:57','2023-07-05 14:01:57'),('f491e291-97ca-42b8-bf37-343efd3a593a','App\\Notifications\\NewAppointment','App\\Models\\User',51,'{\"sender_id\":49,\"name\":\"Dalitso Maseko\",\"message\":\"You have been invited to a new video call appointment with Dalitso Maseko\",\"sender\":\"Dalitso Maseko\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/49\\/10\\/receiver\\/patient\\/df4c2179-e234-418a-80c0-2bd920ad43c4\"}',NULL,'2023-07-05 15:35:19','2023-07-05 15:35:19'),('f8f61dfd-6a68-43c4-9086-f0728bad24a7','App\\Notifications\\CounselorAssigned','App\\Models\\User',3,'{\"sender_id\":\"6\",\"name\":\"Nsansa wellness\",\"message\":\"A counselor has been assigned to you\",\"sender\":\"Nsansa wellness\",\"type\":\"counselor-assigned\",\"ispopped\":0,\"link\":\"\\/counseling-center\"}',NULL,'2023-04-13 13:40:18','2023-04-13 13:40:18'),('fcb01928-7227-4a7c-b89a-5b2058561e76','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":33,\"name\":\"Bremah Nyeleti\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-06-13 01:03:30','2023-06-13 01:03:30'),('fd88fccc-2b04-4c40-a552-0a801c6695e1','App\\Notifications\\NewAppointment','App\\Models\\User',45,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"You have been invited to a new video call appointment with Super Administrator\",\"sender\":\"Super Administrator\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"\\/therapy-session-appointment\\/1\\/6\\/receiver\\/patient\\/6a1eccbf-103f-46c1-87e4-13572d8a3d15\"}',NULL,'2023-06-21 11:09:46','2023-06-21 11:09:46'),('fdcfb8a3-6eaa-4df2-b840-c67bae720045','App\\Notifications\\MyNewAppointment','App\\Models\\User',1,'{\"sender_id\":1,\"name\":\"Super Administrator\",\"message\":\"Nsansa Therapy Session video call appointment\",\"sender\":\"Nsansa Therapy Session appointment\",\"type\":\"new-appointment\",\"ispopped\":0,\"link\":\"view-appointment\\/5\"}',NULL,'2023-06-21 11:03:52','2023-06-21 11:03:52'),('fe3fe658-9e71-42ad-a3cb-4c88b26e352e','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"sender_id\":48,\"name\":\"Tasheni Bota\",\"message\":\"You have a new registered Patient.\",\"sender\":\"Nsansa Wellness Group\",\"type\":\"new-user\",\"ispopped\":0,\"link\":\"\"}',NULL,'2023-07-05 13:11:23','2023-07-05 13:11:23');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('sainto.bah82@gmail.com','$2y$10$lOPNM8TUJDIyS9i6N6DyNeBD46/lcTKyDHkmsHcovR7YCWQsIDyCq','2023-06-14 09:09:53');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_activities`
--

DROP TABLE IF EXISTS `patient_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `counselor_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_activities`
--

LOCK TABLES `patient_activities` WRITE;
/*!40000 ALTER TABLE `patient_activities` DISABLE KEYS */;
INSERT INTO `patient_activities` VALUES (1,1,2,NULL,NULL,NULL,'2023-04-05 15:36:54','2023-04-05 15:36:54',NULL);
/*!40000 ALTER TABLE `patient_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_files`
--

DROP TABLE IF EXISTS `patient_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symptom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `status_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bp_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_files`
--

LOCK TABLES `patient_files` WRITE;
/*!40000 ALTER TABLE `patient_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_q_answers`
--

DROP TABLE IF EXISTS `patient_q_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_q_answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `question_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_q_answers`
--

LOCK TABLES `patient_q_answers` WRITE;
/*!40000 ALTER TABLE `patient_q_answers` DISABLE KEYS */;
INSERT INTO `patient_q_answers` VALUES (1,'Poor',6,1,'2023-05-27 13:18:29','2023-05-27 13:18:29'),(2,'Not that bad',6,1,'2023-05-27 13:18:29','2023-05-27 13:18:29'),(3,'Very bad',6,1,'2023-05-27 13:18:29','2023-05-27 13:18:29'),(4,'Good',6,1,'2023-05-27 13:18:29','2023-05-27 13:18:29'),(5,'Nothing Changed',6,2,'2023-05-27 13:19:40','2023-05-27 13:19:40'),(6,'Yes I have lost appetite',6,2,'2023-05-27 13:19:40','2023-05-27 13:19:40'),(7,'I am not sure',6,2,'2023-05-27 13:19:40','2023-05-27 13:19:40'),(8,'Nothing Changed',6,2,'2023-05-27 13:20:07','2023-05-27 13:20:07'),(9,'Not Sure',6,2,'2023-05-27 13:20:07','2023-05-27 13:20:07'),(10,'It Changed',6,2,'2023-05-27 13:20:07','2023-05-27 13:20:07'),(11,'Yes',6,3,'2023-05-27 13:20:48','2023-05-27 13:20:48'),(12,'No, I dont',6,3,'2023-05-27 13:20:48','2023-05-27 13:20:48');
/*!40000 ALTER TABLE `patient_q_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_q_questions`
--

DROP TABLE IF EXISTS `patient_q_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_q_questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questionaire_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_q_questions`
--

LOCK TABLES `patient_q_questions` WRITE;
/*!40000 ALTER TABLE `patient_q_questions` DISABLE KEYS */;
INSERT INTO `patient_q_questions` VALUES (1,'How would you describe your overall mood and emotional well-being on a daily basis?','Select One',1,'2023-05-27 13:16:39','2023-05-27 13:16:39'),(2,'Have you noticed any changes in your appetite, weight, or eating patterns recently?','Select One',1,'2023-05-27 13:16:39','2023-05-27 13:16:39'),(3,'Do you often experience negative or intrusive thoughts that impact your daily functioning?','Select One',1,'2023-05-27 13:16:39','2023-05-27 13:16:39');
/*!40000 ALTER TABLE `patient_q_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_q_results`
--

DROP TABLE IF EXISTS `patient_q_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_q_results` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `questionnaire_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_q_results`
--

LOCK TABLES `patient_q_results` WRITE;
/*!40000 ALTER TABLE `patient_q_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_q_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_questionnaires`
--

DROP TABLE IF EXISTS `patient_questionnaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_questionnaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `patients` json NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_questionnaires`
--

LOCK TABLES `patient_questionnaires` WRITE;
/*!40000 ALTER TABLE `patient_questionnaires` DISABLE KEYS */;
INSERT INTO `patient_questionnaires` VALUES (1,'[\"4\"]','1','2023-05-27 13:16:39','2023-05-27 13:16:39','Self Test',6);
/*!40000 ALTER TABLE `patient_questionnaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `settled_amount` double(9,3) NOT NULL,
  `transaction_ref` double(8,2) DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `billing_id` int unsigned DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'sanctum.csrf-cookie','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(2,'welcome','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(3,'login','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(4,'logout','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(5,'register','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(6,'password.request','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(7,'password.email','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(8,'password.reset','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(9,'password.update','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(10,'password.confirm','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(11,'verification.notice','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(12,'verification.verify','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(13,'verification.resend','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(14,'home','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(15,'pop-notifications','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(16,'counsellor','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(17,'profile','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(18,'video-call','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(19,'phone-call','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(20,'video-call-peer','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(21,'send.remote_id','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(22,'get.remote_id','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(23,'video-call-runner','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(24,'conversation-details','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(25,'createMeeting','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(26,'validateMeeting','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(27,'chat','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(28,'group.chat','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(29,'meeting.store','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(30,'chat.send','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(31,'chat.send.file','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(32,'group.send','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(33,'group.send.file','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(34,'bpb','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(35,'settings.index','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(36,'set-commission','web','2023-04-04 12:32:21','2023-04-04 12:32:21'),(37,'settings.commissions','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(38,'settings.departments','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(39,'settings.departments.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(40,'settings.departments.delete','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(41,'notification','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(42,'delete-notification','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(43,'appointment','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(44,'appointment.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(45,'appointment.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(46,'appointment.deactivate','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(47,'appointment.activate','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(48,'appointment.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(49,'appointment.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(50,'appointment.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(51,'appointment.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(52,'appointment.remove_guest','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(53,'markNotification','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(54,'questionaire.status','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(55,'questionaire-user-feedback','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(56,'question.remove','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(57,'user-survey-response','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(58,'questionaires.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(59,'questionaires.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(60,'questionaires.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(61,'questionaires.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(62,'questionaires.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(63,'questionaires.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(64,'questionaires.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(65,'answers.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(66,'answers.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(67,'answers.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(68,'answers.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(69,'answers.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(70,'answers.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(71,'answers.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(72,'answers.remove','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(73,'billing','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(74,'income','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(75,'patient','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(76,'patient-files','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(77,'create-patient-file','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(78,'show-patient-file','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(79,'edit-patient-file','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(80,'delete-patient-file','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(81,'add-patient-file','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(82,'update-patient-file','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(83,'all-patient-files','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(84,'activities.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(85,'activities.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(86,'activities.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(87,'activities.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(88,'activities.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(89,'activities.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(90,'activities.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(91,'actions','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(92,'roles.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(93,'roles.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(94,'roles.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(95,'roles.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(96,'roles.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(97,'roles.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(98,'roles.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(99,'permissions.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(100,'permissions.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(101,'permissions.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(102,'permissions.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(103,'permissions.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(104,'permissions.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(105,'permissions.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(106,'users.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(107,'users.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(108,'users.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(109,'users.show','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(110,'users.edit','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(111,'users.update','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(112,'users.destroy','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(113,'chat.index','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(114,'chat.create','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(115,'chat.store','web','2023-04-04 12:32:22','2023-04-04 12:32:22'),(116,'chat.show','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(117,'chat.edit','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(118,'chat.update','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(119,'chat.destroy','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(120,'chat.stream','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(121,'counselors-by-dept','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(122,'manual.assign.counselor','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(123,'manual.remove.counselor','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(124,'about','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(125,'contact','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(126,'faq','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(127,'careers','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(128,'career-survey','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(129,'reviews','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(130,'start','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(131,'couples-start','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(132,'child-start','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(133,'results.index','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(134,'results.create','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(135,'results.store','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(136,'results.show','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(137,'results.edit','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(138,'results.update','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(139,'results.destroy','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(140,'pay','web','2023-04-04 12:32:23','2023-04-04 12:32:23'),(141,'invoice-patient','web','2023-04-04 12:32:23','2023-04-04 12:32:23');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',9,'LaravelAuthApp','aad914c936ce6f60d9480db8616c295e87d775e3b15c3563dcae83af0c4f7b6d','[\"*\"]',NULL,NULL,'2023-04-30 09:05:57','2023-04-30 09:05:57'),(2,'App\\Models\\User',9,'LaravelAuthApp','38f3ae893ccac06b17448627bbe96d177866e973ac39a948bf48ff23feff3853','[\"*\"]',NULL,NULL,'2023-04-30 18:39:34','2023-04-30 18:39:34'),(3,'App\\Models\\User',6,'LaravelAuthApp','90fa6d9a1b57f9c51ec7b5d6bfd1e3713af734418fd4a149d8ade9bd6ccc0255','[\"*\"]',NULL,NULL,'2023-05-03 10:38:48','2023-05-03 10:38:48'),(4,'App\\Models\\User',6,'LaravelAuthApp','ff9a3c8d53ecbe654bcdfe997efea8e42430f09307c7157a8fd134719760ed46','[\"*\"]',NULL,NULL,'2023-05-03 10:40:56','2023-05-03 10:40:56'),(5,'App\\Models\\User',6,'LaravelAuthApp','ac4b738b60ad16a8439e2eec8d65dbcfa322e2a5dfb7146d255053535b6b0199','[\"*\"]',NULL,NULL,'2023-05-03 10:41:06','2023-05-03 10:41:06'),(6,'App\\Models\\User',6,'LaravelAuthApp','b3e3e21729489615925541611d7a7c9e0665e000a54d03cfcd4801e11f8a17c2','[\"*\"]',NULL,NULL,'2023-05-03 10:41:39','2023-05-03 10:41:39'),(7,'App\\Models\\User',6,'LaravelAuthApp','e3ca0c5eac78424007b12bd56822c6c8b7cda97caecc659e4d217a43e7554c32','[\"*\"]',NULL,NULL,'2023-05-03 10:41:47','2023-05-03 10:41:47'),(8,'App\\Models\\User',6,'LaravelAuthApp','099a447c5801f8f50908b31322fb72dbc176d5fec90b41a4dac0100ea9586806','[\"*\"]',NULL,NULL,'2023-05-03 11:20:47','2023-05-03 11:20:47'),(9,'App\\Models\\User',6,'LaravelAuthApp','e2de89d46e96cd02c767f4fb90a25a3a15643914d1950b1f5e679292589e9be6','[\"*\"]',NULL,NULL,'2023-05-04 10:34:18','2023-05-04 10:34:18'),(10,'App\\Models\\User',6,'LaravelAuthApp','632edd3287dfdb7940b8ae73786c80c4b5574a9bd4fcd981ad2aab2fae8ec614','[\"*\"]',NULL,NULL,'2023-05-09 21:41:23','2023-05-09 21:41:23'),(11,'App\\Models\\User',6,'LaravelAuthApp','69815b2ace7f2cee2d115fb1bd7ca369d40f7ede7b91eb33690b6cace6804e5f','[\"*\"]',NULL,NULL,'2023-05-09 22:57:50','2023-05-09 22:57:50'),(12,'App\\Models\\User',6,'LaravelAuthApp','48175138f3ad4e72732b51347c8e1cdaa9a73e7b85bca60119851dc01208965a','[\"*\"]',NULL,NULL,'2023-05-09 23:00:03','2023-05-09 23:00:03'),(13,'App\\Models\\User',6,'LaravelAuthApp','ece0de389462437318712b692818bc52ca95609ab11311ec4a7c7ce53bd7372e','[\"*\"]',NULL,NULL,'2023-05-12 11:15:09','2023-05-12 11:15:09'),(14,'App\\Models\\User',6,'LaravelAuthApp','d99930f8e010a9b28b777996a702310a1f584e4bd4e330a79f1f62d899c3823f','[\"*\"]',NULL,NULL,'2023-05-14 16:42:11','2023-05-14 16:42:11'),(15,'App\\Models\\User',6,'LaravelAuthApp','b440f91b83aae025340ab4b8a7fe83a605bf95d8b92296d0013a2f9281432233','[\"*\"]',NULL,NULL,'2023-05-14 17:05:05','2023-05-14 17:05:05'),(16,'App\\Models\\User',6,'LaravelAuthApp','e7f7e66fc10084ade149b8797decb22e24b344ef0a7e00da69031239a42f7f4a','[\"*\"]',NULL,NULL,'2023-05-14 17:13:29','2023-05-14 17:13:29'),(17,'App\\Models\\User',6,'LaravelAuthApp','80600a66e01bbb0ebd4c501bdb4c739cc26d7366b828095a79627b4febf3d15b','[\"*\"]',NULL,NULL,'2023-05-14 17:25:31','2023-05-14 17:25:31'),(18,'App\\Models\\User',6,'LaravelAuthApp','97be345fba6ccbcda182c34398a971c43db63d6c67035132695295c95ea61621','[\"*\"]',NULL,NULL,'2023-05-14 18:11:29','2023-05-14 18:11:29'),(19,'App\\Models\\User',6,'LaravelAuthApp','2b4bc5298287d8c742272f96182a96fa3e23a2797d8985101daf1d08dba8b03f','[\"*\"]',NULL,NULL,'2023-05-14 18:33:56','2023-05-14 18:33:56'),(20,'App\\Models\\User',6,'LaravelAuthApp','28500a0fa458465b5cbfee3bd8de101c5bf116032516a23cd618b2d019682fe5','[\"*\"]',NULL,NULL,'2023-05-15 20:08:47','2023-05-15 20:08:47'),(21,'App\\Models\\User',6,'LaravelAuthApp','ce9ed613587b8d073baa9d67cd2308d1f5e449ebce4fd784e8055cebc4714bf7','[\"*\"]',NULL,NULL,'2023-05-16 08:06:36','2023-05-16 08:06:36'),(22,'App\\Models\\User',6,'LaravelAuthApp','e606f3885a13f5eeb677d44b2b852ec0888f5900d78779301d536f659fbfdfc8','[\"*\"]',NULL,NULL,'2023-05-16 08:50:13','2023-05-16 08:50:13'),(23,'App\\Models\\User',6,'LaravelAuthApp','af5b69e80d0398b2c2af9d64ac8b8cbefb9af1e51c2f843d324273cde6fd1aec','[\"*\"]',NULL,NULL,'2023-05-16 20:32:37','2023-05-16 20:32:37'),(24,'App\\Models\\User',6,'LaravelAuthApp','8ae790779a6581ea4de514823cece4f0e3aeefcbf7b9bf0aec025c555acd0677','[\"*\"]',NULL,NULL,'2023-05-16 20:46:26','2023-05-16 20:46:26'),(25,'App\\Models\\User',6,'LaravelAuthApp','530b7d153fe76c43b48f9744f1cb31ee9f813598662b1ed2e09826e77e22f182','[\"*\"]',NULL,NULL,'2023-05-16 20:47:41','2023-05-16 20:47:41'),(26,'App\\Models\\User',6,'LaravelAuthApp','4ba2b83d3972a76b8a04c9390d3f5dc8ba8502c7b177512ae1452a7c0fcf9b9c','[\"*\"]',NULL,NULL,'2023-05-16 20:50:20','2023-05-16 20:50:20'),(27,'App\\Models\\User',6,'LaravelAuthApp','b73d349c32859243a7df21c638e52863725c5ec0015de3a5d5ed147f2e416fac','[\"*\"]',NULL,NULL,'2023-05-16 20:52:59','2023-05-16 20:52:59'),(28,'App\\Models\\User',4,'LaravelAuthApp','e6baf6476243c30f61b58bfaa0bf80bf42ee7205ba340304c52c3dcbf04c3a17','[\"*\"]',NULL,NULL,'2023-05-17 12:16:01','2023-05-17 12:16:01'),(29,'App\\Models\\User',4,'LaravelAuthApp','3563f74773346159eb6c81c6bcb9fd4129902331bdbc805d98c038211693c57c','[\"*\"]',NULL,NULL,'2023-05-17 12:22:41','2023-05-17 12:22:41'),(30,'App\\Models\\User',4,'LaravelAuthApp','6e2bdc44661349bd60bd473f56fc64c4fb801bc5a8a96a8b0465062ba6e1463a','[\"*\"]',NULL,NULL,'2023-05-17 12:31:41','2023-05-17 12:31:41'),(31,'App\\Models\\User',4,'LaravelAuthApp','c91e338634ca94a60a4e9cd2082963f3ab516915e3bc68d414056c438bdbce8b','[\"*\"]',NULL,NULL,'2023-05-17 12:33:16','2023-05-17 12:33:16'),(32,'App\\Models\\User',4,'LaravelAuthApp','e31f425efb8dadac158ef3ea88ce29c48b1b5640e8d18e9e78898afd753608e1','[\"*\"]',NULL,NULL,'2023-05-17 12:39:23','2023-05-17 12:39:23'),(33,'App\\Models\\User',4,'LaravelAuthApp','df51477687f9a90c928caa005b77bf478e96ef3513e5a146ef6a9c308bc5893b','[\"*\"]',NULL,NULL,'2023-05-17 12:44:10','2023-05-17 12:44:10'),(34,'App\\Models\\User',4,'LaravelAuthApp','3506884d4ef184a90be10190931e36c87742194e46e44d28044e17c04b0a3495','[\"*\"]',NULL,NULL,'2023-05-17 12:58:26','2023-05-17 12:58:26'),(35,'App\\Models\\User',4,'LaravelAuthApp','bb2eef3f4783883ed1e4a24f81174ca1c8792767446cab631046c8e43f9cab84','[\"*\"]',NULL,NULL,'2023-05-17 16:51:27','2023-05-17 16:51:27'),(36,'App\\Models\\User',4,'LaravelAuthApp','07744872a4c3945de459ed63326c5d95ac804709a65c46b4fd86e24ca3b1b6a7','[\"*\"]',NULL,NULL,'2023-05-17 17:57:43','2023-05-17 17:57:43'),(37,'App\\Models\\User',4,'LaravelAuthApp','7f4ab7d742dc6448aa321af87e2330ee002f8869647cd42753ebb8abee201595','[\"*\"]',NULL,NULL,'2023-05-17 18:01:18','2023-05-17 18:01:18'),(38,'App\\Models\\User',4,'LaravelAuthApp','ce6dda8dee47f26e99e3e4cd38a772191f3ed1f8e8acdfdfd71c394869451864','[\"*\"]',NULL,NULL,'2023-05-17 18:02:59','2023-05-17 18:02:59'),(39,'App\\Models\\User',4,'LaravelAuthApp','e518d22151839d2725c02e127073c7eb063788bed7b7fa6ddbbe5b534ac1bea1','[\"*\"]',NULL,NULL,'2023-05-17 18:10:59','2023-05-17 18:10:59'),(40,'App\\Models\\User',4,'LaravelAuthApp','4ffcbca182de60f621964f01b46568282b3cbada60f87c183edcdd38b451f5e5','[\"*\"]',NULL,NULL,'2023-05-17 18:41:35','2023-05-17 18:41:35'),(41,'App\\Models\\User',4,'LaravelAuthApp','58617276fb33085b396bf07bacd389676b458f62a1d39ffb16b36a22be9a88fa','[\"*\"]',NULL,NULL,'2023-05-17 18:51:29','2023-05-17 18:51:29'),(42,'App\\Models\\User',4,'LaravelAuthApp','a4ccf18cca6969e16360d5a752cc163c712a4742348208271e41135aa93fc8e3','[\"*\"]',NULL,NULL,'2023-05-17 19:19:47','2023-05-17 19:19:47'),(43,'App\\Models\\User',4,'LaravelAuthApp','c9addd5f244ee1e74f4dc1f58904398c673dc76e2f310383301695cab82c5fb3','[\"*\"]',NULL,NULL,'2023-05-17 19:22:25','2023-05-17 19:22:25'),(44,'App\\Models\\User',4,'LaravelAuthApp','682c6b92240476aa2a8667c221f0ea6b08ea4d1fb74e21514b217e59e5ca929a','[\"*\"]',NULL,NULL,'2023-05-17 19:24:05','2023-05-17 19:24:05'),(45,'App\\Models\\User',4,'LaravelAuthApp','f487b185741eadbceec15bb1bc6c5dcff8d45ba15b024da118a615b5b49aae83','[\"*\"]',NULL,NULL,'2023-05-17 19:26:12','2023-05-17 19:26:12'),(46,'App\\Models\\User',4,'LaravelAuthApp','8ae53c97a87a7ba19dc9912042779e2d833abcdf5d2b477792e011f2b0756a10','[\"*\"]',NULL,NULL,'2023-05-17 19:27:52','2023-05-17 19:27:52'),(47,'App\\Models\\User',4,'LaravelAuthApp','6cb23f6fa00de6880b04cd481eea1009785d547ef7549faf4d8bbb71398b0eae','[\"*\"]',NULL,NULL,'2023-05-17 19:30:06','2023-05-17 19:30:06'),(48,'App\\Models\\User',4,'LaravelAuthApp','f1d97d7d05a284998c7f04529cb6c48f56d22d595027e4510c4e9d90a2dfa50b','[\"*\"]',NULL,NULL,'2023-05-17 19:33:00','2023-05-17 19:33:00'),(49,'App\\Models\\User',4,'LaravelAuthApp','33b5a97106674339318ebb118a4baef2635fa75d53c94b68896ba7a5359feb44','[\"*\"]',NULL,NULL,'2023-05-17 19:34:23','2023-05-17 19:34:23'),(50,'App\\Models\\User',4,'LaravelAuthApp','751f3b9be7cb39d0cc76bda82d8b0f622aa2aebd4f32a9061b3991001471113b','[\"*\"]',NULL,NULL,'2023-05-17 19:35:56','2023-05-17 19:35:56'),(51,'App\\Models\\User',4,'LaravelAuthApp','038a4236b245d5cf67e5ef0c7d83b53a28711b669df06fcdf1ef71e00d6605a1','[\"*\"]',NULL,NULL,'2023-05-17 19:37:58','2023-05-17 19:37:58'),(52,'App\\Models\\User',4,'LaravelAuthApp','215a1b0769f00a66fc1770ed7e48a25f33e0ca61259d804d714e2410e5297a01','[\"*\"]',NULL,NULL,'2023-05-17 19:42:55','2023-05-17 19:42:55'),(53,'App\\Models\\User',4,'LaravelAuthApp','061b879c37f19ba06a0b0863681b3538268972e8d505bfc8cc0449a18c0121ab','[\"*\"]',NULL,NULL,'2023-05-17 19:47:05','2023-05-17 19:47:05'),(54,'App\\Models\\User',4,'LaravelAuthApp','8531d39a7d3b489af60e99257e5d9191d37672ca249be344a135cb97b54e8ab8','[\"*\"]',NULL,NULL,'2023-05-18 07:53:09','2023-05-18 07:53:09'),(55,'App\\Models\\User',4,'LaravelAuthApp','a6efe4ef7d06b8cf585a8e73f3da55d83b93e51fbb7798b0fe6f2e576c9c639f','[\"*\"]',NULL,NULL,'2023-05-18 08:48:15','2023-05-18 08:48:15'),(56,'App\\Models\\User',4,'LaravelAuthApp','3b63ecbcf561b120afc1b27c04b2abec4109ac208e42f62adcc1c0d54460b624','[\"*\"]',NULL,NULL,'2023-05-18 08:49:36','2023-05-18 08:49:36'),(57,'App\\Models\\User',4,'LaravelAuthApp','c12b07156bb6eeba745787c3ebcd7fbc54e11b05377f8b89ba0bb2923c4846b7','[\"*\"]',NULL,NULL,'2023-05-18 08:55:04','2023-05-18 08:55:04'),(58,'App\\Models\\User',4,'LaravelAuthApp','3b01b017f31d61edaea2438df6a378fc7ba835b976a6e1db32546dda19a58899','[\"*\"]',NULL,NULL,'2023-05-18 09:04:56','2023-05-18 09:04:56'),(59,'App\\Models\\User',4,'LaravelAuthApp','2f7634bbb8382e5107790ddc55cfdbb3b97b7be73bea4b8fdfd38470e0bd9110','[\"*\"]',NULL,NULL,'2023-05-18 09:06:29','2023-05-18 09:06:29'),(60,'App\\Models\\User',4,'LaravelAuthApp','b01898b9b223646115be7a1f7f068fe0ed60e4c6a59782491648634f0ce91677','[\"*\"]',NULL,NULL,'2023-05-29 21:50:57','2023-05-29 21:50:57'),(61,'App\\Models\\User',4,'LaravelAuthApp','32650372ad0e125ddfa39085a8fee331ca2255901215aee2cabbb2398bfde9b0','[\"*\"]',NULL,NULL,'2023-05-29 23:03:23','2023-05-29 23:03:23'),(62,'App\\Models\\User',4,'LaravelAuthApp','e09af7fba9ab6a3c241d254ebf601b8953e13bd348225c5921776ea5dbec4232','[\"*\"]',NULL,NULL,'2023-05-29 23:04:50','2023-05-29 23:04:50'),(63,'App\\Models\\User',4,'LaravelAuthApp','130f43d0d3d9c3dd7189e4adaffe22e7d4b5bad7be88f7a17229617d3a52e06c','[\"*\"]',NULL,NULL,'2023-05-29 23:11:15','2023-05-29 23:11:15'),(64,'App\\Models\\User',4,'LaravelAuthApp','bee17e1ee56161b73a20455d451614db1457c87d2f241520e6bc732c4ba338e7','[\"*\"]',NULL,NULL,'2023-05-29 23:22:19','2023-05-29 23:22:19'),(65,'App\\Models\\User',4,'LaravelAuthApp','6735791fe0aca8fa2fa25663d00a03d2802f2c5351cd46fc0edb24a60d9a03c3','[\"*\"]',NULL,NULL,'2023-05-29 23:24:56','2023-05-29 23:24:56'),(66,'App\\Models\\User',4,'LaravelAuthApp','3cd08ff6ff7ef2ab4a54597d6196c93c47f731e2d29340d0fcd64f1e5a62765b','[\"*\"]',NULL,NULL,'2023-05-30 00:01:09','2023-05-30 00:01:09'),(67,'App\\Models\\User',4,'LaravelAuthApp','0392b2d7d4d162ae7c0a68dc8328a39ec7f02481c63bf29d1a8c98bd3553d4c3','[\"*\"]',NULL,NULL,'2023-05-30 00:04:22','2023-05-30 00:04:22'),(68,'App\\Models\\User',4,'LaravelAuthApp','badbb473ead7b04807d57f32d99bd6b65442dd0871193d89048457b5fa94bbf7','[\"*\"]',NULL,NULL,'2023-05-30 12:49:40','2023-05-30 12:49:40'),(69,'App\\Models\\User',4,'LaravelAuthApp','276dbdd91a48a237b862b2309dab6ea3039b5e91402a02bf1feaa871f7d3963f','[\"*\"]',NULL,NULL,'2023-05-30 13:12:35','2023-05-30 13:12:35'),(70,'App\\Models\\User',4,'LaravelAuthApp','26beb972c43e2f5b186ff6274ffdb66bef99bc308c4774b340a79ce25fe3ec2e','[\"*\"]',NULL,NULL,'2023-05-30 13:21:12','2023-05-30 13:21:12'),(71,'App\\Models\\User',4,'LaravelAuthApp','599056fd5b3c3c5d45d761964a9e5def077b019d2cf17592aedc9a5df800f98d','[\"*\"]',NULL,NULL,'2023-05-30 13:27:06','2023-05-30 13:27:06'),(72,'App\\Models\\User',4,'LaravelAuthApp','56c4084dd6d45f05154103d1d2e88febe409ae858c09f14129d1cfa8b8b09b92','[\"*\"]',NULL,NULL,'2023-05-30 14:59:09','2023-05-30 14:59:09'),(73,'App\\Models\\User',4,'LaravelAuthApp','7e43a36c0869d901420d2286e4f46c4a2796141f4e63ddf362aaaa859897640f','[\"*\"]',NULL,NULL,'2023-05-30 19:00:46','2023-05-30 19:00:46'),(74,'App\\Models\\User',4,'LaravelAuthApp','adab0ea18c268f3f3d1d8f8db4a80da3cb697e6413078c4cde8aa36c33b2d71d','[\"*\"]',NULL,NULL,'2023-05-30 19:05:05','2023-05-30 19:05:05'),(75,'App\\Models\\User',4,'LaravelAuthApp','ca2341be5f86c42b0159085abf205e2bef5657774a087bde0e8b8cfdb179ae9f','[\"*\"]',NULL,NULL,'2023-05-30 20:37:14','2023-05-30 20:37:14'),(76,'App\\Models\\User',4,'LaravelAuthApp','a87d1bc3da2745fcaaea0b55705a3c3375c9c1a6ee1610a475d087afd71d7edb','[\"*\"]',NULL,NULL,'2023-05-31 22:07:37','2023-05-31 22:07:37'),(77,'App\\Models\\User',4,'LaravelAuthApp','3362de1b97474e1dbbfc8ce24fe1f2d33e4912895e2471aaadfe0bf01fd92462','[\"*\"]',NULL,NULL,'2023-05-31 22:29:30','2023-05-31 22:29:30'),(78,'App\\Models\\User',4,'LaravelAuthApp','761db4f3d15e12cd9c5ba5d40f221a775fe9a390a58162c519d4bffa03492165','[\"*\"]',NULL,NULL,'2023-05-31 22:38:27','2023-05-31 22:38:27'),(79,'App\\Models\\User',4,'LaravelAuthApp','4657fab0f7333f2b4ec94f922bfa9317fe7e83a8e6bbf3770f4dc8d4c4263073','[\"*\"]',NULL,NULL,'2023-05-31 22:52:51','2023-05-31 22:52:51'),(80,'App\\Models\\User',4,'LaravelAuthApp','1c1aac9b285b780646533fdd5becacdb7a2099a6966e8b4cbf51bb3844ecb530','[\"*\"]',NULL,NULL,'2023-06-01 10:50:34','2023-06-01 10:50:34'),(81,'App\\Models\\User',4,'LaravelAuthApp','9ede5897ec5694ebc4143a9b136731d8f8d760ddce8cd054830e1262209d1dbb','[\"*\"]',NULL,NULL,'2023-06-01 10:52:37','2023-06-01 10:52:37'),(82,'App\\Models\\User',4,'LaravelAuthApp','9a732acec970ce8e2bb286e2708be03f6d76482595ddf99d1be44dee3803e972','[\"*\"]',NULL,NULL,'2023-06-01 11:27:22','2023-06-01 11:27:22'),(83,'App\\Models\\User',4,'LaravelAuthApp','fa373398925e08b2e45e6edcc32e5c132ce60f7f8f2b5fbb47270cf33432cf11','[\"*\"]',NULL,NULL,'2023-06-01 11:35:19','2023-06-01 11:35:19'),(84,'App\\Models\\User',4,'LaravelAuthApp','26528faa28de059b9ff0387f6414f86c5c370fe14d29e1a6fd5c6ccceea96ac6','[\"*\"]',NULL,NULL,'2023-06-01 12:01:16','2023-06-01 12:01:16'),(85,'App\\Models\\User',27,'LaravelAuthApp','519f86d85325fe1c9fe3e263ac0f5c930b9bcbe921d2888eae4c98a70dc3e026','[\"*\"]',NULL,NULL,'2023-06-12 10:55:10','2023-06-12 10:55:10'),(86,'App\\Models\\User',27,'LaravelAuthApp','784fa8f84f72b22e2989af51f32a087ce20ff5779295e2da6260efba529c0383','[\"*\"]',NULL,NULL,'2023-06-12 11:04:29','2023-06-12 11:04:29'),(87,'App\\Models\\User',27,'LaravelAuthApp','855b15200db9f67e731a5eb80ed96fd50e26f33978b85006e8757a102a32a8b5','[\"*\"]',NULL,NULL,'2023-06-12 11:08:16','2023-06-12 11:08:16'),(88,'App\\Models\\User',44,'LaravelAuthApp','98d8e66fa376144faf88acde501bfdc0011ad144f85de302c4f5a5860d251f65','[\"*\"]',NULL,NULL,'2023-06-20 13:31:56','2023-06-20 13:31:56');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_items`
--

DROP TABLE IF EXISTS `plan_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plan_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_items`
--

LOCK TABLES `plan_items` WRITE;
/*!40000 ALTER TABLE `plan_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(9,2) DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `per` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `push_alerts`
--

DROP TABLE IF EXISTS `push_alerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `push_alerts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8mb4_unicode_ci,
  `for_user_id` int unsigned DEFAULT NULL,
  `from_user_id` int unsigned DEFAULT NULL,
  `is_seen` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `push_alerts`
--

LOCK TABLES `push_alerts` WRITE;
/*!40000 ALTER TABLE `push_alerts` DISABLE KEYS */;
INSERT INTO `push_alerts` VALUES (1,'A Counselor has been assigned to you',33,1,1,0,'2023-06-13 01:06:07','2023-06-13 01:06:19'),(2,'A Counselor has been assigned to you',34,1,0,0,'2023-06-13 10:40:48','2023-06-13 10:40:48'),(3,'You have been invited to an appointment',2,6,0,0,'2023-06-19 15:07:40','2023-06-19 15:07:40'),(4,'A Counselor has been assigned to you',45,1,0,0,'2023-06-20 20:42:39','2023-06-20 20:42:39'),(5,'You have been invited to an appointment',45,46,0,0,'2023-06-20 20:50:50','2023-06-20 20:50:50'),(6,'A Counselor has been assigned to you',42,1,0,0,'2023-06-21 11:00:05','2023-06-21 11:00:05'),(7,'You have been invited to an appointment',39,1,1,0,'2023-06-21 11:03:47','2023-06-21 13:58:30'),(8,'You have been invited to an appointment',42,1,0,0,'2023-06-21 11:03:50','2023-06-21 11:03:50'),(9,'A Counselor has been assigned to you',37,1,0,0,'2023-06-21 11:06:00','2023-06-21 11:06:00'),(10,'A Counselor has been assigned to you',45,1,0,0,'2023-06-21 11:07:27','2023-06-21 11:07:27'),(11,'You have been invited to an appointment',37,1,0,0,'2023-06-21 11:09:42','2023-06-21 11:09:42'),(12,'You have been invited to an appointment',45,1,0,0,'2023-06-21 11:09:45','2023-06-21 11:09:45'),(13,'You have been invited to an appointment',38,1,1,0,'2023-06-21 11:09:46','2023-06-22 07:59:13'),(14,'A Counselor has been assigned to you',47,1,0,0,'2023-06-22 02:59:56','2023-06-22 02:59:56'),(15,'You have been invited to an appointment',47,1,0,0,'2023-06-22 03:01:52','2023-06-22 03:01:52'),(16,'A Counselor has been assigned to you',48,1,0,0,'2023-07-05 13:13:52','2023-07-05 13:13:52'),(17,'You have been invited to an appointment',48,1,0,0,'2023-07-05 13:16:12','2023-07-05 13:16:12'),(18,'You have been invited to an appointment',49,1,1,0,'2023-07-05 13:16:15','2023-07-06 14:15:31'),(19,'A Counselor has been assigned to you',51,1,1,0,'2023-07-05 14:19:09','2023-07-06 14:09:03'),(20,'You have been invited to an appointment',51,1,1,0,'2023-07-05 14:20:16','2023-07-06 14:09:03'),(21,'You have been invited to an appointment',49,1,1,0,'2023-07-05 14:20:18','2023-07-06 14:15:31'),(22,'You have been invited to an appointment',51,49,1,0,'2023-07-05 15:35:17','2023-07-06 14:09:03'),(23,'You have been invited to an appointment',51,1,1,0,'2023-07-06 09:23:35','2023-07-06 14:09:03'),(24,'You have been invited to an appointment',49,1,1,0,'2023-07-06 09:23:38','2023-07-06 14:15:31'),(25,'A Counselor has been assigned to you',36,1,0,0,'2023-07-06 13:11:20','2023-07-06 13:11:20'),(26,'You have been invited to an appointment',36,1,0,0,'2023-07-06 13:12:32','2023-07-06 13:12:32'),(27,'You have been invited to an appointment',51,1,1,0,'2023-07-06 13:14:30','2023-07-06 14:09:03'),(28,'You have been invited to an appointment',6,1,1,0,'2023-07-06 13:14:32','2023-07-13 00:04:29'),(29,'A Counselor has been assigned to you',36,1,0,0,'2023-07-06 13:17:00','2023-07-06 13:17:00'),(30,'You have been invited to an appointment',2,6,0,0,'2023-07-06 13:17:19','2023-07-06 13:17:19'),(31,'You have been invited to an appointment',2,6,0,0,'2023-07-06 14:00:20','2023-07-06 14:00:20'),(32,'You have been invited to an appointment',2,6,0,0,'2023-07-06 14:02:21','2023-07-06 14:02:21'),(33,'A Counselor has been assigned to you',37,1,0,0,'2023-07-10 11:34:05','2023-07-10 11:34:05');
/*!40000 ALTER TABLE `push_alerts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionaires`
--

DROP TABLE IF EXISTS `questionaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questionaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_assigned` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionaires`
--

LOCK TABLES `questionaires` WRITE;
/*!40000 ALTER TABLE `questionaires` DISABLE KEYS */;
INSERT INTO `questionaires` VALUES (5,'Onboarding','patient','1','2023-05-30 14:10:05','2023-06-01 15:45:56'),(7,'Counselor Onboarding','counselor',NULL,'2023-06-01 16:27:03','2023-06-01 16:27:03');
/*!40000 ALTER TABLE `questionaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questionaire_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (8,'How old are you?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(9,'What is your preferred language?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(10,'What is your relationship Status?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(11,'Do you consider yourself to be religious or spiritual?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(12,'How would you rate your current financial status?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(13,'Have you ever done therapy before?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(14,'What led you to consider therapy today?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(15,'How do you prefer to communicate with your therapist?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(16,'Are there any specific preferences for your therapist?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(17,'How would you rate your current physical health?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(18,'How would you rate your eating habits?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(19,'Are you currently experiencing overwhelming sadness, grief, or depression?','Select One',5,'2023-05-30 14:10:05','2023-05-30 14:10:05'),(22,'how long have you been a therapit for?','Select Many',7,'2023-06-01 16:27:03','2023-06-01 16:27:03');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `results` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guest_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` smallint DEFAULT NULL,
  `published` smallint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=415 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,'yes',1,NULL,'2023-04-04 13:06:05','2023-04-04 13:06:05','PWHS7AuLnTbw6N0F2ALlD7o1JRJ6S0',NULL,NULL),(2,'no',2,NULL,'2023-04-04 13:06:05','2023-04-04 13:06:05','PWHS7AuLnTbw6N0F2ALlD7o1JRJ6S0',NULL,NULL),(3,'yes',1,NULL,'2023-04-04 13:06:17','2023-04-04 13:06:17','veKArzpVw1KV73NSMWOW999bjQHVCh',NULL,NULL),(4,'no',2,NULL,'2023-04-04 13:06:17','2023-04-04 13:06:17','veKArzpVw1KV73NSMWOW999bjQHVCh',NULL,NULL),(5,'yes',1,NULL,'2023-04-04 13:13:45','2023-04-04 13:13:45','mvztpfXSs6nMZw3iFHazjhp5hwMrAm',NULL,NULL),(6,'yes',2,NULL,'2023-04-04 13:13:45','2023-04-04 13:13:45','mvztpfXSs6nMZw3iFHazjhp5hwMrAm',NULL,NULL),(7,'no',1,NULL,'2023-04-04 13:23:57','2023-04-04 13:23:57','PWHS7AuLnTbw6N0F2ALlD7o1JRJ6S0',NULL,NULL),(8,'yes',2,NULL,'2023-04-04 13:23:57','2023-04-04 13:23:57','PWHS7AuLnTbw6N0F2ALlD7o1JRJ6S0',NULL,NULL),(9,'yes',1,NULL,'2023-04-04 13:24:19','2023-04-04 13:24:19','mvztpfXSs6nMZw3iFHazjhp5hwMrAm',NULL,NULL),(10,'yes',2,NULL,'2023-04-04 13:24:19','2023-04-04 13:24:19','mvztpfXSs6nMZw3iFHazjhp5hwMrAm',NULL,NULL),(11,'5-10',3,NULL,'2023-04-04 13:30:49','2023-04-04 13:30:49','NLwgO69ZUveGzpGr3fU2vfPUDrO13w',NULL,NULL),(12,'5-10',3,NULL,'2023-04-12 18:18:08','2023-04-12 18:18:08','qT1cu0CmSkj2kDQj4snX2wzFCACd29',NULL,NULL),(13,'yes',1,NULL,'2023-04-12 18:19:05','2023-04-12 18:19:05','NCTSYm8rAnFvuLy5V4cQVB2S7g7pPU',NULL,NULL),(14,'no',2,NULL,'2023-04-12 18:19:05','2023-04-12 18:19:05','NCTSYm8rAnFvuLy5V4cQVB2S7g7pPU',NULL,NULL),(15,'yes',1,NULL,'2023-04-14 22:15:02','2023-04-14 22:15:02','qRFSAzuVgFCNaHkQ6IyJ48KGQ38wh3',NULL,NULL),(16,'no',2,NULL,'2023-04-14 22:15:02','2023-04-14 22:15:02','qRFSAzuVgFCNaHkQ6IyJ48KGQ38wh3',NULL,NULL),(17,'5-10',3,NULL,'2023-04-15 11:37:46','2023-04-15 11:37:46','E4hdoWGDVc8ea5B214iE78hMBkpPDV',NULL,NULL),(18,'male',21,NULL,'2023-05-30 14:35:13','2023-05-30 14:35:13','t2tzrOmCuN93sauSOZwxVEm14cBLR1',NULL,NULL),(19,'male',21,NULL,'2023-06-01 15:02:03','2023-06-01 15:02:03','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(20,'11 - 17 (Adolescent)',8,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(21,'Lozi',9,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(22,'Single',10,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(23,'Yes',11,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(24,'B. Fair',12,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(25,'B. No',13,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(26,'I am grieving',14,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(27,'C. Video sessions',15,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(28,'Male therapist',16,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(29,'B. Fair',17,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(30,'A. Good',18,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(31,'A. Yes',19,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(32,'B. Only One is Alive',20,NULL,'2023-06-01 15:48:14','2023-06-01 15:48:14','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(33,'11 - 17 (Adolescent)',8,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(34,'English',9,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(35,'Married',10,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(36,'No',11,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(37,'A. High',12,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(38,'B. No',13,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(39,'I feel anxious or overwhelmed',14,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(40,'B. Via phone call',15,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(41,'Female therapist',16,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(42,'B. Fair',17,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(43,'B. Fair',18,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(44,'A. Yes',19,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(45,'A. Both are Alive.',20,NULL,'2023-06-01 15:57:58','2023-06-01 15:57:58','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(46,'11 - 17 (Adolescent)',8,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(47,'English',9,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(48,'Single',10,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(49,'Yes',11,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(50,'A. High',12,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(51,'A. Yes',13,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(52,'I’ve been feeling depressed',14,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(53,'A. Via chat or messaging',15,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(54,'Male therapist',16,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(55,'A. Good',17,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(56,'A. Good',18,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(57,'A. Yes',19,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(58,'B. Only One is Alive',20,NULL,'2023-06-01 16:04:49','2023-06-01 16:04:49','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(59,'11 - 17 (Adolescent)',8,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(60,'English',9,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(61,'Single',10,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(62,'Yes',11,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(63,'A. High',12,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(64,'A. Yes',13,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(65,'I’ve been feeling depressed',14,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(66,'A. Via chat or messaging',15,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(67,'Male therapist',16,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(68,'A. Good',17,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(69,'A. Good',18,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(70,'A. Yes',19,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(71,'B. Only One is Alive',20,NULL,'2023-06-01 16:07:46','2023-06-01 16:07:46','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(72,'18 - 30 (Young Adult)',8,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(73,'Tonga',9,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(74,'Divorced',10,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(75,'Yes',11,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(76,'B. Fair',12,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(77,'B. No',13,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(78,'My mood is interfering with my job/school performance.',14,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(79,'C. Video sessions',15,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(80,'Christian-based therapy',16,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(81,'B. Fair',17,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(82,'C. Bad',18,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(83,'A. Yes',19,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(84,'B. Only One is Alive',20,NULL,'2023-06-01 16:10:35','2023-06-01 16:10:35','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(85,'18 - 30 (Young Adult)',8,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(86,'Bemba',9,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(87,'Divorced',10,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(88,'Yes',11,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(89,'B. Fair',12,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(90,'B. No',13,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(91,'I struggle with building or maintaining relationships',14,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(92,'C. Video sessions',15,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(93,'Female therapist',16,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(94,'C. Bad',17,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(95,'A. Good',18,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(96,'A. Yes',19,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(97,'B. Only One is Alive',20,NULL,'2023-06-01 16:14:00','2023-06-01 16:14:00','FyE3ATgwa7RJZ8HhZaqol8pS7Hpit1',NULL,NULL),(98,'11 - 17 (Adolescent)',8,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(99,'Bemba',9,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(100,'Married',10,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(101,'Yes',11,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(102,'A. High',12,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(103,'A. Yes',13,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(104,'I’ve been feeling depressed',14,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(105,'A. Via chat or messaging',15,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(106,'Male therapist',16,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(107,'A. Good',17,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(108,'A. Good',18,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(109,'A. Yes',19,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(110,'A. Both are Alive.',20,NULL,'2023-06-01 16:18:02','2023-06-01 16:18:02','yP6kGhY3FJTSauH2eOr6AGj0efP4Gi',NULL,NULL),(111,'31 - 45 (Adult)',8,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(112,'English',9,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(113,'Single',10,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(114,'No',11,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(115,'A. High',12,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(116,'B. No',13,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(117,'I’ve been feeling depressed',14,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(118,'C. Video sessions',15,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(119,'Male therapist',16,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(120,'A. Good',17,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(121,'A. Good',18,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(122,'A. Yes',19,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(123,'A. Both are Alive.',20,NULL,'2023-06-01 16:31:07','2023-06-01 16:31:07','xrl8S324OOrJ2X4i9wIfnIBOQoavhf',NULL,NULL),(124,'18 - 30 (Young Adult)',8,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(125,'English',9,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(126,'Single',10,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(127,'No',11,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(128,'B. Fair',12,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(129,'B. No',13,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(130,'I’ve been feeling depressed',14,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(131,'A. Via chat or messaging',15,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(132,'Male therapist',16,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(133,'A. Good',17,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(134,'A. Good',18,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(135,'B. No',19,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(136,'A. Both are Alive.',20,NULL,'2023-06-12 12:02:56','2023-06-12 12:02:56','28z9ndtln4bihVRkASlbWqK8xNByk7',NULL,NULL),(137,'11 - 17 (Adolescent)',8,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(138,'English',9,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(139,'Single',10,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(140,'Yes',11,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(141,'B. Fair',12,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(142,'B. No',13,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(143,'My mood is interfering with my job/school performance.',14,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(144,'C. Video sessions',15,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(145,'Christian-based therapy',16,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(146,'B. Fair',17,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(147,'B. Fair',18,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(148,'A. Yes',19,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(149,'B. Only One is Alive',20,NULL,'2023-06-12 12:27:13','2023-06-12 12:27:13','8QSbdIQY2l4Ixb68KLqotVgjNSWh5a',NULL,NULL),(150,'11 - 17 (Adolescent)',8,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(151,'Tonga',9,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(152,'Divorced',10,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(153,'Yes',11,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(154,'B. Fair',12,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(155,'A. Yes',13,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(156,'I feel anxious or overwhelmed',14,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(157,'B. Via phone call',15,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(158,'Peer (Youth) Counselor',16,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(159,'A. Good',17,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(160,'B. Fair',18,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(161,'A. Yes',19,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(162,'B. Only One is Alive',20,NULL,'2023-06-12 15:07:45','2023-06-12 15:07:45','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(163,'11 - 17 (Adolescent)',8,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(164,'English',9,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(165,'Married',10,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(166,'Yes',11,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(167,'B. Fair',12,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(168,'A. Yes',13,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(169,'My mood is interfering with my job/school performance.',14,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(170,'D. Not sure yet (decide later)',15,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(171,'Female therapist',16,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(172,'B. Fair',17,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(173,'A. Good',18,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(174,'A. Yes',19,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(175,'A. Both are Alive.',20,NULL,'2023-06-12 15:12:48','2023-06-12 15:12:48','jszY5sMWbFIsge3rqwywjDVIf8O8mo',NULL,NULL),(176,'18 - 30 (Young Adult)',8,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(177,'Bemba',9,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(178,'Married',10,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(179,'No',11,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(180,'B. Fair',12,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(181,'B. No',13,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(182,'I feel anxious or overwhelmed',14,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(183,'B. Via phone call',15,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(184,'Christian-based therapy',16,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(185,'B. Fair',17,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(186,'A. Good',18,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(187,'B. No',19,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(188,'B. Only One is Alive',20,NULL,'2023-06-13 01:02:47','2023-06-13 01:02:47','8kgbSt2SYOpYxLfPtWqeWeGdSZHrGi',NULL,NULL),(189,'11 - 17 (Adolescent)',8,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(190,'English',9,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(191,'Single',10,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(192,'Yes',11,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(193,'A. High',12,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(194,'B. No',13,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(195,'I struggle with building or maintaining relationships',14,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(196,'A. Via chat or messaging',15,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(197,'Female therapist',16,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(198,'A. Good',17,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(199,'B. Fair',18,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(200,'A. Yes',19,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(201,'B. Only One is Alive',20,NULL,'2023-06-13 10:33:40','2023-06-13 10:33:40','h8zEhsqiq8SXWFwCs0pfB7znpHmtjq',NULL,NULL),(202,'18 - 30 (Young Adult)',8,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(203,'English',9,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(204,'Married',10,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(205,'Yes',11,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(206,'B. Fair',12,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(207,'B. No',13,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(208,'I struggle with building or maintaining relationships',14,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(209,'B. Via phone call',15,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(210,'Female therapist',16,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(211,'B. Fair',17,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(212,'B. Fair',18,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(213,'B. No',19,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(214,'B. Only One is Alive',20,NULL,'2023-06-14 09:17:54','2023-06-14 09:17:54','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(215,'18 - 30 (Young Adult)',8,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(216,'English',9,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(217,'Single',10,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(218,'No',11,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(219,'B. Fair',12,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(220,'B. No',13,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(221,'I’ve been feeling depressed',14,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(222,'B. Via phone call',15,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(223,'Female therapist',16,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(224,'B. Fair',17,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(225,'A. Good',18,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(226,'A. Yes',19,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(227,'C. None',20,NULL,'2023-06-14 09:20:28','2023-06-14 09:20:28','TAxcvUZhJuXUrXKTfkQSXX6h9bAqjF',NULL,NULL),(228,'31 - 45 (Adult)',8,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(229,'English',9,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(230,'Single',10,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(231,'Yes',11,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(232,'A. High',12,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(233,'A. Yes',13,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(234,'I’ve been feeling depressed',14,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(235,'B. Via phone call',15,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(236,'Female therapist',16,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(237,'B. Fair',17,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(238,'B. Fair',18,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(239,'A. Yes',19,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(240,'B. Only One is Alive',20,NULL,'2023-06-14 09:28:17','2023-06-14 09:28:17','Ty6G47M0ce0osHCFLbvRsBwjiLRrqE',NULL,NULL),(241,'18 - 30 (Young Adult)',8,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(242,'English',9,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(243,'Single',10,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(244,'No',11,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(245,'C. Low',12,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(246,'B. No',13,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(247,'I’ve been feeling depressed',14,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(248,'B. Via phone call',15,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(249,'Female therapist',16,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(250,'C. Bad',17,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(251,'C. Bad',18,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(252,'A. Yes',19,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(253,'B. Only One is Alive',20,NULL,'2023-06-14 09:29:49','2023-06-14 09:29:49','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,NULL),(254,'11 - 17 (Adolescent)',8,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(255,'English',9,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(256,'Married',10,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(257,'Yes',11,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(258,'A. High',12,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(259,'A. Yes',13,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(260,'I’ve been feeling depressed',14,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(261,'A. Via chat or messaging',15,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(262,'Male therapist',16,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(263,'A. Good',17,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(264,'A. Good',18,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(265,'A. Yes',19,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(266,'A. Both are Alive.',20,NULL,'2023-06-14 11:17:04','2023-06-14 11:17:04','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,NULL),(267,'31 - 45 (Adult)',8,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(268,'English',9,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(269,'Single',10,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(270,'Yes',11,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(271,'C. Low',12,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(272,'B. No',13,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(273,'I feel anxious or overwhelmed',14,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(274,'D. Not sure yet (decide later)',15,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(275,'Female therapist',16,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(276,'B. Fair',17,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(277,'C. Bad',18,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(278,'A. Yes',19,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(279,'B. Only One is Alive',20,NULL,'2023-06-16 13:43:32','2023-06-16 13:43:32','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,NULL),(280,'18 - 30 (Young Adult)',8,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(281,'English',9,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(282,'Single',10,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(283,'Yes',11,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(284,'B. Fair',12,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(285,'B. No',13,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(286,'I struggle with building or maintaining relationships',14,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(287,'C. Video sessions',15,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(288,'Christian-based therapy',16,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(289,'A. Good',17,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(290,'B. Fair',18,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(291,'B. No',19,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(292,'B. Only One is Alive',20,NULL,'2023-06-16 16:30:45','2023-06-16 16:30:45','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,NULL),(293,'18 - 30 (Young Adult)',8,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(294,'Bemba',9,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(295,'Single',10,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(296,'No',11,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(297,'C. Low',12,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(298,'B. No',13,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(299,'I have experienced trauma and/or abuse',14,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(300,'C. Video sessions',15,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(301,'Christian-based therapy',16,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(302,'B. Fair',17,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(303,'B. Fair',18,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(304,'A. Yes',19,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(305,'B. Only One is Alive',20,NULL,'2023-06-20 13:26:13','2023-06-20 13:26:13','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,NULL),(306,'18 - 30 (Young Adult)',8,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(307,'English',9,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(308,'Married',10,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(309,'Yes',11,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(310,'B. Fair',12,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(311,'A. Yes',13,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(312,'I feel anxious or overwhelmed',14,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(313,'A. Via chat or messaging',15,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(314,'Male therapist',16,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(315,'A. Good',17,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(316,'A. Good',18,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(317,'A. Yes',19,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(318,'B. Only One is Alive',20,NULL,'2023-06-20 20:22:10','2023-06-20 20:22:10','RRsHuZo3lfcwsH66y8QzMIKMxZnVmu',NULL,NULL),(319,'31-45',8,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(320,'English',9,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(321,'Single',10,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(322,'Yes',11,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(323,'C. Low',12,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(324,'B. No',13,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(325,'Other',14,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(326,'D. Not sure yet (decide later)',15,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(327,'Female therapist',16,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(328,'B. Fair',17,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(329,'B. Fair',18,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(330,'B. No',19,NULL,'2023-06-21 16:21:53','2023-06-21 16:21:53','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,NULL),(331,'11 - 17 (Adolescent)',8,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(332,'English',9,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(333,'Single',10,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(334,'No',11,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(335,'B. Fair',12,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(336,'A. Yes',13,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(337,'I feel anxious or overwhelmed',14,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(338,'A. Via chat or messaging',15,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(339,'Female therapist',16,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(340,'C. Bad',17,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(341,'C. Bad',18,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(342,'A. Yes',19,NULL,'2023-07-05 13:10:28','2023-07-05 13:10:28','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(343,'19-30',8,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(344,'Bemba',9,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(345,'Married',10,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(346,'Yes',11,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(347,'A. High',12,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(348,'A. Yes',13,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(349,'I’ve been feeling depressed',14,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(350,'A. Via chat or messaging',15,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(351,'Male therapist',16,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(352,'A. Good',17,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(353,'A. Good',18,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(354,'A. Yes',19,NULL,'2023-07-05 13:46:38','2023-07-05 13:46:38','pqyapi7p5XsbW1slhO082mJtxcsyPg',NULL,NULL),(355,'11 - 17 (Adolescent)',8,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(356,'English',9,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(357,'Single',10,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(358,'No',11,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(359,'B. Fair',12,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(360,'A. Yes',13,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(361,'I feel anxious or overwhelmed',14,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(362,'A. Via chat or messaging',15,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(363,'Female therapist',16,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(364,'C. Bad',17,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(365,'C. Bad',18,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(366,'B. No',19,NULL,'2023-07-05 13:55:42','2023-07-05 13:55:42','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(367,'19-30',8,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(368,'Bemba',9,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(369,'Divorced',10,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(370,'Yes',11,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(371,'B. Fair',12,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(372,'B. No',13,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(373,'I feel anxious or overwhelmed',14,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(374,'C. Video sessions',15,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(375,'Christian-based therapy',16,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(376,'C. Bad',17,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(377,'C. Bad',18,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(378,'B. No',19,NULL,'2023-07-05 14:01:35','2023-07-05 14:01:35','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,NULL),(379,'11 - 17 (Adolescent)',8,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(380,'English',9,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(381,'Single',10,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(382,'No',11,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(383,'B. Fair',12,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(384,'A. Yes',13,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(385,'I feel anxious or overwhelmed',14,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(386,'A. Via chat or messaging',15,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(387,'Female therapist',16,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(388,'C. Bad',17,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(389,'C. Bad',18,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(390,'B. No',19,NULL,'2023-07-05 14:06:09','2023-07-05 14:06:09','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,NULL),(391,'19-30',8,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(392,'English',9,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(393,'Single',10,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(394,'No',11,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(395,'B. Fair',12,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(396,'B. No',13,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(397,'I feel anxious or overwhelmed',14,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(398,'B. Via phone call',15,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(399,'Male therapist',16,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(400,'A. Good',17,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(401,'A. Good',18,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(402,'A. Yes',19,NULL,'2023-07-06 14:34:05','2023-07-06 14:34:05','gCWZw3FuRrbkVEuTjsLPCOviKt4UuJ',NULL,NULL),(403,'19-30',8,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(404,'English',9,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(405,'Divorced',10,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(406,'Yes',11,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(407,'A. High',12,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(408,'A. Yes',13,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(409,'I’ve been feeling depressed',14,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(410,'A. Via chat or messaging',15,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(411,'Male therapist',16,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(412,'A. Good',17,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(413,'A. Good',18,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL),(414,'A. Yes',19,NULL,'2023-07-10 14:04:25','2023-07-10 14:04:25','DjJIWVYhepYzX7uqYalwE4DO8BuVif',NULL,NULL);
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(110,1),(111,1),(112,1),(113,1),(114,1),(115,1),(116,1),(117,1),(118,1),(119,1),(120,1),(121,1),(122,1),(123,1),(124,1),(125,1),(126,1),(127,1),(128,1),(129,1),(130,1),(131,1),(132,1),(133,1),(134,1),(135,1),(136,1),(137,1),(138,1),(139,1),(140,1),(141,1),(1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(21,2),(22,2),(23,2),(24,2),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(41,2),(42,2),(43,2),(44,2),(45,2),(46,2),(47,2),(48,2),(49,2),(50,2),(51,2),(52,2),(53,2),(55,2),(73,2),(74,2),(75,2),(76,2),(77,2),(78,2),(79,2),(80,2),(81,2),(82,2),(83,2),(84,2),(85,2),(86,2),(87,2),(88,2),(89,2),(90,2),(91,2),(113,2),(114,2),(115,2),(116,2),(117,2),(118,2),(119,2),(120,2),(124,2),(125,2),(126,2),(127,2),(128,2),(129,2),(130,2),(131,2),(132,2),(133,2),(134,2),(135,2),(136,2),(137,2),(138,2),(139,2),(140,2),(141,2),(1,3),(2,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(11,3),(12,3),(13,3),(14,3),(15,3),(17,3),(18,3),(19,3),(20,3),(21,3),(22,3),(23,3),(24,3),(25,3),(26,3),(27,3),(28,3),(29,3),(30,3),(31,3),(32,3),(33,3),(41,3),(42,3),(43,3),(44,3),(45,3),(46,3),(47,3),(48,3),(49,3),(50,3),(51,3),(52,3),(53,3),(73,3),(75,3),(84,3),(85,3),(86,3),(87,3),(88,3),(89,3),(90,3),(91,3),(109,3),(110,3),(111,3),(112,3),(113,3),(114,3),(115,3),(116,3),(117,3),(118,3),(119,3),(120,3),(124,3),(125,3),(126,3),(127,3),(128,3),(129,3),(130,3),(131,3),(132,3),(133,3),(134,3),(135,3),(136,3),(137,3),(138,3),(139,3),(140,3),(141,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2023-04-04 12:32:34','2023-04-04 12:32:34'),(2,'counselor','web','2023-04-04 12:32:34','2023-04-04 12:32:34'),(3,'patient','web','2023-04-04 12:32:34','2023-04-04 12:32:34');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_notes`
--

DROP TABLE IF EXISTS `session_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `session_notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_id` int unsigned DEFAULT NULL,
  `async_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_notes`
--

LOCK TABLES `session_notes` WRITE;
/*!40000 ALTER TABLE `session_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_ratings`
--

DROP TABLE IF EXISTS `site_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_ratings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_ratings`
--

LOCK TABLES `site_ratings` WRITE;
/*!40000 ALTER TABLE `site_ratings` DISABLE KEYS */;
INSERT INTO `site_ratings` VALUES (1,4,5,NULL,0,'2023-05-27 23:27:16','2023-05-27 23:27:16');
/*!40000 ALTER TABLE `site_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_appointments`
--

DROP TABLE IF EXISTS `user_appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_appointments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_id` int unsigned DEFAULT NULL,
  `appointment_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chat_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_appointments`
--

LOCK TABLES `user_appointments` WRITE;
/*!40000 ALTER TABLE `user_appointments` DISABLE KEYS */;
INSERT INTO `user_appointments` VALUES (1,'1',4,1,'2023-04-04 13:46:04','2023-04-04 13:46:04',NULL),(2,'1',6,1,'2023-04-04 13:46:06','2023-04-04 13:46:06',NULL),(3,'1',5,2,'2023-06-05 10:16:41','2023-06-05 10:16:41',NULL),(7,'1',42,5,'2023-06-21 11:03:50','2023-06-21 11:03:50',NULL),(9,'1',45,6,'2023-06-21 11:09:45','2023-06-21 11:09:45',NULL),(10,'1',38,6,'2023-06-21 11:09:46','2023-06-21 11:09:46',NULL),(13,'1',49,8,'2023-07-05 13:16:15','2023-07-05 13:16:15',NULL),(15,'1',49,9,'2023-07-05 14:20:18','2023-07-05 14:20:18',NULL),(18,'1',49,11,'2023-07-06 09:23:38','2023-07-06 09:23:38',NULL),(19,'1',36,12,'2023-07-06 13:12:32','2023-07-06 13:12:32',NULL),(20,'1',51,13,'2023-07-06 13:14:30','2023-07-06 13:14:30',NULL),(21,'1',6,13,'2023-07-06 13:14:32','2023-07-06 13:14:32',NULL),(22,'1',2,14,'2023-07-06 13:17:19','2023-07-06 13:17:19',NULL),(23,'1',2,15,'2023-07-06 14:00:20','2023-07-06 14:00:20',NULL),(24,'1',2,16,'2023-07-06 14:02:21','2023-07-06 14:02:21',NULL),(25,'1',2,17,'2023-07-06 14:06:19','2023-07-06 14:06:19',NULL),(27,'1',37,19,'2023-07-10 12:28:27','2023-07-10 12:28:27',14),(28,'1',37,20,'2023-07-10 12:37:19','2023-07-10 12:37:19',14),(29,'1',37,21,'2023-07-10 12:48:40','2023-07-10 12:48:40',14),(30,'1',37,22,'2023-07-10 13:53:08','2023-07-10 13:53:08',14);
/*!40000 ALTER TABLE `user_appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liecense_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `patient_limit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `work_status` int NOT NULL DEFAULT '1',
  `hourly_charge` double(9,2) DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_count` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','wezibotae@gmail.com','2023-04-04 12:32:34','$2y$10$dhSbn85An7JcEsaV28BzIOvgxcvauYr9g9AcQiRkJqCXkFipjD7Nm',NULL,'2023-04-04 12:32:34','2023-04-04 12:47:48','Super','admin',NULL,NULL,NULL,NULL,NULL,NULL,'admin',NULL,NULL,'0','2',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(2,'chikweto','chikwetof@yahoo.com',NULL,'$2y$10$pgcIocuc4hvUTokAXZezYeFYGLvlHzaj.4qDdiDm7ThRDYfTqLWEq',NULL,'2023-04-04 13:07:44','2023-04-04 13:07:44','chewe','patient',NULL,'0',NULL,NULL,NULL,NULL,'chikwetof@yahoo.com','PWHS7AuLnTbw6N0F2ALlD7o1JRJ6S0',NULL,'true','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(5,'Nyeleti','roadoc404@gmail.com',NULL,'$2y$10$h5Ciok0D2pBpOjMZ/R5K3.5ZcM6XvzI6EP3crjlKmbqkrLthBd07W',NULL,'2023-04-04 13:24:41','2023-04-04 13:24:41','Bremah','patient',NULL,'0',NULL,NULL,NULL,NULL,'roadoc404@gmail.com','mvztpfXSs6nMZw3iFHazjhp5hwMrAm',NULL,'true','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(6,'Bota','wezibota@yahoo.com','2023-04-04 13:33:17','$2y$10$tbPjV0IBggiaugB9PQ8R1OsuANOajGzpnMOz849ArFUf66K/L351C',NULL,'2023-04-04 13:31:20','2023-04-05 15:21:44','Wezi','counsellor',NULL,'LSW',NULL,NULL,NULL,NULL,'wezibota@yahoo.com','NLwgO69ZUveGzpGr3fU2vfPUDrO13w',NULL,'0','2',1,NULL,'Clinical Social Worker',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(8,'Mufungulwa','nyambemufungulwa0@gmail.com','2023-04-15 11:43:47','$2y$10$w9.j56YW2rjFN9R39tnXI.r1hc7s9sSGufYkQkElzxWieK8NjTzSG',NULL,'2023-04-15 11:39:26','2023-04-15 11:43:47','Nyambe','counsellor',NULL,'0',NULL,NULL,NULL,NULL,'nyambemufungulwa0@gmail.com','E4hdoWGDVc8ea5B214iE78hMBkpPDV',NULL,'true','2',1,NULL,'Mental Health Counselor',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(11,'Mwanza','sainto.bah82@gmail.com','2023-05-29 11:30:20','$2y$10$7tM8CbYhavdC0UH4/YKE6eWdZwzNDC7NMUZQijhXClZcxit2oeltC',NULL,'2023-05-29 11:23:49','2023-05-29 11:31:03','Mercy',NULL,NULL,'89898',NULL,NULL,NULL,'female','Mercy',NULL,NULL,'0','2',1,400.00,'Clinical Social Worker','A','29 May, 2023','mongu','Woodlannds',NULL,'123456/10/1',NULL,NULL,'',NULL,NULL,NULL,1),(12,'Mutambo','georgemunganga@outlook.com','2023-05-29 18:03:00','$2y$10$aS7MzoMeSNyzOLZL5gZ9HuE/oeBPwQMe3OGSvGF99AkwLCMTFSm1i',NULL,'2023-05-29 17:53:32','2023-05-29 18:04:15','Lucky',NULL,NULL,'2323232323232323',NULL,NULL,NULL,'male','George',NULL,NULL,'0','2',1,20.00,'Mental Health Counselor','A','29 May, 2023','Lusaka','221 elm 24a Mual road, lusaka',NULL,'22323232323',NULL,NULL,'',NULL,NULL,NULL,1),(13,'Bota','mwaba_bota@yahoo.co.uk','2023-05-30 13:44:01','$2y$10$f4wf7PxxQbTg2W7fnUZqAOc9ndrQZURkYLWwAtrwZX1wrGJnr7ooC',NULL,'2023-05-30 13:44:01','2023-05-30 13:44:01','Mwaba','admin',NULL,NULL,NULL,NULL,NULL,NULL,'admin',NULL,NULL,'true','2',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(14,'Mulubwa','info@nsansawellness.com','2023-05-30 13:44:01','$2y$10$S7cgrTBt2IGzoLY/bQdG..z6tm/RuzG74py0AB7k2JMYrhEY49JtG',NULL,'2023-05-30 13:44:01','2023-05-30 13:44:01','Mwansa','admin',NULL,NULL,NULL,NULL,NULL,NULL,'admin',NULL,NULL,'true','2',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(36,'jaye','graejae82@gmail.com',NULL,'$2y$10$DuXRgsoMVWNigvmO13KCaOYfbY3kdIlm61Fck1/Dw.fZkn4Ly6bxu',NULL,'2023-06-14 09:30:39','2023-06-14 09:30:39','grey','patient',NULL,'0',NULL,NULL,NULL,NULL,'graejae82@gmail.com','jHOCEm2KpG90rNbweULSpRwjGU21lz',NULL,'true','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(37,'Munganga','info@greenwebbtech.com',NULL,'$2y$10$hmritzeVDK3dbWOp1s2ZaeMU5e9WLFk3SsEjqqVMhq4VbpwGDU6gO',NULL,'2023-06-14 11:17:39','2023-06-14 13:09:13','George','patient',NULL,'0',NULL,NULL,NULL,NULL,'info@greenwebbtech.com','Qy0B0fDvpqpECygoiwlkfybMzcqzOX',NULL,'0','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(38,'Njuka','debranjuka97@gmail.com','2023-06-16 12:56:44','$2y$10$Iw62TnXvk3Eacc4USd1cG.z.hNY5tUkYu2vkpzeMSO6jGMIWIiHmu',NULL,'2023-06-16 12:45:04','2023-06-21 10:32:40','Debra',NULL,NULL,NULL,NULL,NULL,NULL,'female','debra',NULL,NULL,'0','2',1,NULL,'Peer Counseling','A','16 Jun, 2023','Siavonga','Off Lilayi Road',NULL,'604461/61/1',NULL,NULL,'',NULL,NULL,NULL,1),(39,'Kaliwanda','Leahkaliwandah@gmail.com','2023-06-16 13:50:19','$2y$10$ng7zfnpJeV8WBSOtu964suzo4fjgnp2751GUBt.5rYDkUgqOoe.NK',NULL,'2023-06-16 12:47:43','2023-06-16 14:05:48','Leah',NULL,NULL,NULL,NULL,NULL,NULL,'female','leah',NULL,NULL,'0','2',1,NULL,'Psychologist','A','16 Jun, 2023','Ndola','Kaunda square Stage 2',NULL,'281031/42/1',NULL,NULL,'',NULL,NULL,NULL,1),(40,'Shimwami','mercyshimwami06@gmail.com','2023-06-16 13:47:39','$2y$10$TVahsmk8cN3EiigIkwbE6eYZ1AkTfNDmuIfCVWIZ.BwcmkUAMzHYK',NULL,'2023-06-16 12:51:05','2023-06-16 13:47:39','Mercy',NULL,NULL,NULL,NULL,NULL,NULL,'female','Mercy',NULL,NULL,'true','2',1,NULL,'Psychologist','A','16 Jun, 2023','Lusaka','Plot 1832, Ngwerere road, Chelstone',NULL,'411478/10/1',NULL,NULL,'',NULL,NULL,NULL,1),(41,'chindele','Lungowechindele2@gmail.com','2023-06-16 12:56:40','$2y$10$bOuIP7N1Zj5JoncJUanImOEl1Xl0lsYb.pH9SHNOG.0cqn3K2YURO',NULL,'2023-06-16 12:52:53','2023-06-16 12:58:17','Lungowe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Lungowe',NULL,NULL,'0','2',1,NULL,'Professional Counselor','A','16 Jun, 2023','mongu','Kuomboko area, Lusaka south',NULL,'481663/16/1',NULL,NULL,'',NULL,NULL,NULL,1),(42,'Tembo','taizyamichael@gmail.com','2023-06-16 13:44:37','$2y$10$oc8KjB8l45IRCPvWihRjP.7YWLEH80AY8nHIxEgUei.SbiFTxpKlK',NULL,'2023-06-16 13:44:10','2023-06-16 14:33:13','Taizya','patient','3','0',NULL,NULL,NULL,NULL,'taizyamichael@gmail.com','aVYgRQeTGFsvF56iANiqE4DAtnJ7jK',NULL,'0','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(43,'Munganga','amunganga@studentsforliberty.org','2023-06-16 16:33:58','$2y$10$Yf2YgvP0BpSUa2EoiZr3p.ESnOOBOKq40XJebK3kXv6ySs0ZYZvli',NULL,'2023-06-16 16:31:40','2023-06-16 16:34:00','Andrew','patient',NULL,'0',NULL,NULL,NULL,NULL,'amunganga@studentsforliberty.org','9XpANBX7Xk4DNSzNblou4gqtfiIcmE',NULL,'0','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(44,'Nyeleti','nyeleti.bremah@gmail.com','2023-06-20 23:34:23','$2y$10$ExNhMZEAH.vbdJl1GJ2cIOSObNPBNRGzSYOFehuj2LLj24yfrP0Dq',NULL,'2023-06-20 13:26:58','2023-06-20 23:43:10','Bremah','patient',NULL,'0','Zambia',NULL,'Lusaka','male','nyeleti.bremah@gmail.com','1kz8k18yzQ1bZR5OSVORt3mAge9wa4',NULL,'0','2',1,NULL,'patient','B+','16 Apr, 1994','Lusaka',NULL,NULL,NULL,'Joyce Mumba','Robbie Nyeleti','image_path/cwpyorDLPdDRpMXF0pU2fkRIpA1EudrrmNCLKOoe.webp',NULL,NULL,NULL,1),(46,'kulunga','gmunganga@greenwebbtech.com','2023-06-20 20:39:46','$2y$10$92SWns19F1ZYMLlQviDZN.eSZF4aIGQ9JFfYyJtYw93OXfxHIJuoe',NULL,'2023-06-20 20:34:37','2023-06-20 20:39:54','George',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'george',NULL,NULL,'0','2',1,NULL,'Mental Health Counselor','A','4 Jun, 1998','mongu','luwato rd',NULL,'604461/61/1',NULL,NULL,'',NULL,NULL,NULL,1),(47,'Chipungu','tumeyochipungu@gmail.com',NULL,'$2y$10$QEcU48hIx2OqCQQJia3C9.NCWm1MhWPe7Sh2N3Rp2CMzVslNM41ES',NULL,'2023-06-21 16:22:26','2023-06-22 08:49:06','Tumeyo','patient',NULL,'0',NULL,NULL,NULL,NULL,'tumeyochipungu@gmail.com','DPJuyZ3tVIrsXoK3nIcA4Tf81LlCBM',NULL,'0','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(49,'Maseko','masekodalitso@gmail.com','2023-07-05 15:10:52','$2y$10$wlO4vI.Jfbz0/DPo8VylEe/l8MKADyV/DebsWPJotxLtPWffhKEq2',NULL,'2023-07-05 13:12:24','2023-07-05 15:11:24','Dalitso',NULL,NULL,NULL,NULL,NULL,NULL,'male','Dalitso Maseko',NULL,NULL,'0','2',1,NULL,'Professional Counselor','A','5 Jul, 2023','Lusaka','Chongwe',NULL,'241230/75/1',NULL,NULL,'',NULL,NULL,NULL,1),(50,'Munganga','georgemunganga@gmail.com',NULL,'$2y$10$LPq5RTFvLJYSmx5irEa.SeZ.cH4gsfpOWh8wFOCGjhoag8pJmXfBu',NULL,'2023-07-05 14:01:54','2023-07-05 14:01:54','George','patient',NULL,'0',NULL,NULL,NULL,NULL,'georgemunganga@gmail.com','LfHrdzxU9g7sIidLeWLn2bNe7XpAIN',NULL,'true','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(51,'Bota','queenofdragons266@gmail.com','2023-07-05 14:18:45','$2y$10$d56Ejsmex7M2KI3kF.i8T.Okw6jXNObHuAiA2EpRAwbU8nPsZIZVy',NULL,'2023-07-05 14:07:07','2023-07-05 14:18:46','Tasheni','patient',NULL,'0',NULL,NULL,NULL,NULL,'queenofdragons266@gmail.com','cuKOf1K99VnSqR5EY7Ta6g0gS2292c',NULL,'0','2',1,NULL,'patient',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `patient_id` int unsigned DEFAULT NULL,
  `appointment_id` int unsigned DEFAULT NULL,
  `chat_id` int unsigned DEFAULT NULL,
  `note_id` int unsigned DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websockets_statistics_entries`
--

DROP TABLE IF EXISTS `websockets_statistics_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `websockets_statistics_entries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int NOT NULL,
  `websocket_message_count` int NOT NULL,
  `api_message_count` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websockets_statistics_entries`
--

LOCK TABLES `websockets_statistics_entries` WRITE;
/*!40000 ALTER TABLE `websockets_statistics_entries` DISABLE KEYS */;
/*!40000 ALTER TABLE `websockets_statistics_entries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-13 10:45:22
