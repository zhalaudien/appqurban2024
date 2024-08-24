/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_mahasiswa
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB-0ubuntu0.24.04.1

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
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES
(22,'panitia','$2y$10$IkjXmC9vzyyj5N8CUoIENe8w17pyNXzDYnW/E1cMX7FaLvs0sKNS6');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_panitia`
--

DROP TABLE IF EXISTS `data_panitia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_panitia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `cabang` varchar(20) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `seksi` varchar(50) DEFAULT NULL,
  `ket` varchar(50) NOT NULL,
  `date_input` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_panitia`
--

LOCK TABLES `data_panitia` WRITE;
/*!40000 ALTER TABLE `data_panitia` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_panitia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_sapi`
--

DROP TABLE IF EXISTS `data_sapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_sapi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(255) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `berat` int(50) DEFAULT NULL,
  `nomor` int(11) DEFAULT NULL,
  `date_input` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_sapi`
--

LOCK TABLES `data_sapi` WRITE;
/*!40000 ALTER TABLE `data_sapi` DISABLE KEYS */;
INSERT INTO `data_sapi` VALUES
(5,'BUMM Sragen',0,295,1,'2024-06-15 00:00:00'),
(6,'BUMM Sragen',0,293,2,'2024-06-15 00:00:00'),
(7,'BUMM Sragen',0,288,3,'2024-06-15 00:00:00'),
(8,'BUMM Sragen',0,332,4,'2024-06-15 00:00:00'),
(9,'BUMM Sragen',0,290,5,'2024-06-15 00:00:00'),
(10,'BUMM Sragen',0,253,6,'2024-06-15 00:00:00'),
(11,'BUMM Sragen',0,269,7,'2024-06-16 00:00:00'),
(12,'BUMM Sragen',0,300,8,'2024-06-16 00:00:00'),
(13,'BUMM Sragen',0,401,9,'2024-06-16 00:00:00'),
(14,'Gesi',0,301,10,'2024-06-16 00:00:00'),
(15,'BUMM Sragen',0,309,11,'2024-06-16 00:00:00'),
(16,'BUMM Sragen',0,321,12,'2024-06-16 00:00:00'),
(17,'BUMM Sragen',0,351,13,'2024-06-16 00:00:00'),
(18,'BUMM Sragen',0,294,14,'2024-06-16 00:00:00'),
(19,'BUMM Sragen',0,255,15,'2024-06-16 00:00:00'),
(20,'BUMM Sragen',0,288,16,'2024-06-16 00:00:00'),
(21,'BUMM Sragen',0,274,17,'2024-06-16 00:00:00'),
(22,'BUMM Sragen',0,273,18,'2024-06-16 00:00:00'),
(23,'BUMM Sragen',0,287,19,'2024-06-16 00:00:00'),
(24,'BUMM Sragen',0,323,20,'2024-06-16 00:00:00'),
(25,'BUMM Sragen',0,298,21,'2024-06-16 00:00:00'),
(26,'BUMM Sragen',0,305,22,'2024-06-16 00:00:00'),
(27,'BUMM Sragen',0,347,23,'2024-06-16 00:00:00'),
(28,'BUMM Sragen',0,313,24,'2024-06-16 00:00:00'),
(29,'BUMM Sragen',0,300,25,'2024-06-16 00:00:00'),
(30,'BUMM Sragen',0,335,26,'2024-06-16 00:00:00'),
(31,'BUMM Sragen',0,292,27,'2024-06-16 00:00:00'),
(32,'BUMM Sragen',0,292,28,'2024-06-16 00:00:00'),
(33,'BUMM Sragen',0,313,30,'2024-06-16 00:00:00'),
(34,'Gondang 2',0,315,31,'2024-06-16 00:00:00'),
(35,'Gondang 2',0,538,32,'2024-06-16 00:00:00'),
(36,'Sambungmacan 1',0,326,29,'2024-06-16 00:00:00'),
(37,'Kedawung 2',0,497,35,'2024-06-16 00:00:00'),
(38,'BUMM Sragen',0,312,36,'2024-06-16 00:00:00'),
(39,'BUMM Sragen',0,355,37,'2024-06-16 00:00:00'),
(40,'BUMM Sragen',0,264,38,'2024-06-16 00:00:00'),
(41,'BUMM Sragen',0,349,39,'2024-06-16 00:00:00'),
(42,'BUMM Sragen',0,329,41,'2024-06-16 00:00:00'),
(43,'Sambungmacan 2',0,388,40,'2024-06-16 00:00:00'),
(44,'BUMM Sragen',0,342,42,'2024-06-16 00:00:00'),
(45,'BUMM Sragen',0,315,43,'2024-06-16 00:00:00'),
(46,'BUMM Sragen',0,343,44,'2024-06-16 00:00:00'),
(47,'BUMM Sragen',0,378,45,'2024-06-16 00:00:00'),
(48,'Kerjo 4',0,277,46,'2024-06-17 02:25:13'),
(49,'Kerjo 4',0,315,47,'2024-06-17 02:25:32'),
(50,'Kerjo 4',0,263,48,'2024-06-17 02:25:54'),
(51,'BUMM Sragen',0,348,49,'2024-06-17 03:04:49'),
(52,'BUMM Sragen',0,328,50,'2024-06-17 03:05:11'),
(53,'BUMM Sragen',0,281,51,'2024-06-17 03:05:29'),
(54,'Karangmalang 4',0,363,52,'2024-06-17 06:03:05'),
(55,'BUMM Sragen',0,293,53,'2024-06-17 06:03:42'),
(56,'BUMM Sragen',0,294,54,'2024-06-17 06:04:06'),
(57,'BUMM Sragen',0,273,55,'2024-06-17 06:04:38'),
(58,'BUMM Sragen',0,263,56,'2024-06-17 06:04:59'),
(59,'BUMM Sragen',0,262,57,'2024-06-17 06:17:47'),
(60,'BUMM Sragen',0,266,58,'2024-06-17 06:18:12'),
(61,'BUMM Sragen',0,322,59,'2024-06-17 06:18:31'),
(62,'BUMM Sragen',0,291,60,'2024-06-17 06:19:06'),
(63,'BUMM Sragen',0,266,61,'2024-06-17 07:10:54'),
(64,'BUMM Sragen',0,280,62,'2024-06-17 07:11:13'),
(65,'BUMM Sragen',0,273,63,'2024-06-17 07:11:32'),
(66,'BUMM Sragen',0,307,64,'2024-06-17 07:11:50'),
(67,'BUMM Sragen',0,258,65,'2024-06-17 07:36:29'),
(68,'BUMM Sragen',0,294,66,'2024-06-17 07:36:56'),
(69,'BUMM Sragen',0,277,67,'2024-06-17 07:37:13'),
(83,'Sambungmacan 2',0,399,33,'2024-06-18 04:49:40'),
(84,'Sambungmacan 2',0,356,34,'2024-06-18 04:53:01'),
(85,'BUMM Sragen',0,304,68,'2024-06-18 04:53:51'),
(86,'Jenawi 1',0,280,69,'2024-06-18 04:54:36'),
(87,'Jenawi 1',0,360,70,'2024-06-18 04:55:06'),
(88,'Jenawi 1',0,256,71,'2024-06-18 04:55:34'),
(89,'Jenawi 1',0,272,72,'2024-06-18 04:56:32'),
(90,'BUMM Sragen',0,250,73,'2024-06-18 04:56:58'),
(91,'BUMM Sragen',0,289,74,'2024-06-18 04:57:20'),
(92,'BUMM Sragen',0,270,75,'2024-06-18 04:57:47'),
(93,'BUMM Sragen',0,298,76,'2024-06-18 04:58:06'),
(94,'Jenawi 1',0,400,77,'2024-06-18 04:58:46'),
(95,'Jenawi 1',0,373,78,'2024-06-18 04:59:09'),
(96,'Jenawi 2',0,538,79,'2024-06-18 04:59:52'),
(97,'BUMM Sragen',0,281,80,'2024-06-18 05:00:11'),
(98,'Jenar',0,332,81,'2024-06-18 05:01:04');
/*!40000 ALTER TABLE `data_sapi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datacabang`
--

DROP TABLE IF EXISTS `datacabang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datacabang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ketua_cabang` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `panitia_qurban` varchar(50) DEFAULT NULL,
  `no2_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `perwakilan` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date_input` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datacabang`
--

LOCK TABLES `datacabang` WRITE;
/*!40000 ALTER TABLE `datacabang` DISABLE KEYS */;
INSERT INTO `datacabang` VALUES
(1,'Gesi','','','','','','','2024-05-26'),
(2,'Gondang 1','Bakrin Sugito','085647545791','Sriyanto','082133044453','Kedungpandu RT 16, Wonotolo, Gondang, Sragen','Sragen','2024-05-26'),
(3,'Gondang 2','Effendi','085229272829','Sugiman','081393955712','Tegalrejo RT 07, Gondang, Gondang, Sragen','Sragen','2024-05-26'),
(4,'Gondang 3','','','','','','','2024-05-26'),
(5,'Gondang 4','Ardani','081225955722','Agus Suyono','081228260382','','Sragen','2024-05-26'),
(6,'Jenar','Sumeri','','Sholahudin','085259865579','','Sragen','2024-05-26'),
(7,'Jenawi 1','Sukardi','081334148581','Tukimin','082328586577','','Karanganyar','2024-05-26'),
(8,'Jenawi 2','Suwaji','081226451202','Giyarto','','','Karanganyar','2024-05-26'),
(9,'Karangmalang 1','Drs Irfan','08212636235','Luqman','081225405415','Guworejo, Guworejo, Karangmalang, Sragen','Sragen','2024-05-26'),
(10,'Karangmalang 2','Sumarno','085869772737','Siswanto','08122613620','Plumbungan, Karangmalang, Sragen','Sragen','2024-05-26'),
(11,'Karangmalang 3','Suwanto','085229144105','Sadi Samsuri','081215045093','Sukotirto RT 45, Puro, KArangmalang, Sragen','Sragen','2024-05-26'),
(12,'Karangmalang 4','Kamidi','082137556233','Waqimin','083866173308','','Sragen','2024-05-26'),
(13,'Karangmalang 5','','','','','','','2024-05-26'),
(14,'Kedawung 1',NULL,NULL,NULL,NULL,NULL,'Sragen','2024-05-26'),
(15,'Kedawung 2','Sukino Triswanto S.Pd','085700531090','','','Jambangan RT 09, Bendungan, Kedawung, Sragen','Sragen','2024-05-26'),
(16,'Kedawung 3','Sumarno','089617922698','Bahrudin Akhmad','089666070500','Marditani RT 14, Celep, Kedawung, Sragen','Sragen','2024-05-26'),
(17,'Kedawung 4','HAnif Ahmad Rukimin','085601788591','Subroto','085229185542','Sidodadi RT 14, Mojodoyong, Kedawung, Sragen','Sragen','2024-05-26'),
(18,'Kedawung 5','Rachmat Saprudin','081329356486','Sadiqin','082134308537','Segong RT 4, Mojodoyong, Kedawung, Sragen','Sragen','2024-05-26'),
(19,'Kerjo 2','Sugiman','085225095255','Samiran','081225858858','','Karanganyar','2024-05-26'),
(20,'Kerjo 4','Jubaidi','085601696491','Sugino','081326240975','','Karanganyar','2024-05-26'),
(21,'Ngrampal 1',NULL,NULL,NULL,NULL,NULL,'Sragen','2024-05-26'),
(22,'Ngrampal 2','Suyadi','085229303500','Sutrisno','081393055992','','Sragen','2024-05-26'),
(23,'Sambirejo 1','Sugiyanto','082326326503','Suyanto','081808568380','','Sragen','2024-05-26'),
(24,'Sambirejo 2','Rohmad','085293871237','Jayus','085229635629','','Sragen','2024-05-26'),
(25,'Sambungmacan 1','Winarno','085293781456','Sunaryo','085293059409','Bulu Boto RT 02, Karanganyar, Sambungmacan, Sragen','Sragen','2024-05-26'),
(26,'Sambungmacan 2','Sudarsono','081329323059','Ngadimin','085227729681','Sonorejo RT 16, Bedoro, Sambungmacan, Sragen','Sragen','2024-05-26'),
(27,'Sambungmacan 3','Nakwanto','085876327991','Supriyanto','085700481335','Ngrampal RT 10, Karanganyar, Sambungmacan, Sragen','Sragen','2024-05-26'),
(28,'Sragen 1','Sutimin Hp','085702858311','Sukiran','085728222141','Jln Bangka, widoro, Sragen Wetan, Sragen','Sragen','2024-05-26'),
(29,'Sragen 2','Subagyo','089666033020','Sumarno','085727082505','Ngoncol RT 01, Nglorog, Sragen','Sragen','2024-05-26'),
(30,'Tangen 1','Sardi','082138485747','eakimin','085229580670','','Sragen','2024-05-26'),
(31,'Tangen 2','Trigiyanto','082242604973','Sujarwo','087873209980','','Sragen','2024-05-26'),
(37,'Ngrampal 3','Sugino','089615686668','','','','Sragen','2024-05-26');
/*!40000 ALTER TABLE `datacabang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datapanitia`
--

DROP TABLE IF EXISTS `datapanitia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datapanitia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(18) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cabang` varchar(17) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `seksi` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ket` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date_input` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datapanitia`
--

LOCK TABLES `datapanitia` WRITE;
/*!40000 ALTER TABLE `datapanitia` DISABLE KEYS */;
INSERT INTO `datapanitia` VALUES
(1,'Irfan','Karangmalang 1','','Ketua 1','Koordinator','2024-05-26'),
(2,'Sholahudin','Jenar',NULL,'Ketua 2','Anggota','2024-05-26'),
(3,'Salahudin','Kedawung 2','','Sekretaris/Admin','Koordinator','2024-05-26'),
(4,'Nugroho','Kedawung 4',NULL,'Sekretaris/Admin','Anggota','2024-05-26'),
(5,'Rizky','Ngrampal 1',NULL,'Sekretaris/Admin','Anggota','2024-05-26'),
(6,'Abdul Qohar','Sambirejo 1','25224245','Sekretaris/Admin','Anggota','2024-05-26'),
(7,'Elka','Masaran 3',NULL,'Sekretaris/Admin','Anggota','2024-05-26'),
(8,'Alga','Masaran 3',NULL,'Sekretaris/Admin','Anggota','2024-05-26'),
(9,'Khotam','Masaran 2',NULL,'Sekretaris/Admin','Anggota','2024-05-26'),
(10,'Akrom','Masaran 2',NULL,'Sekretaris/Admin','Anggota','2024-05-26'),
(11,'Nurhadi','Ngrampal 1','','Bendahara','Koordinator','2024-05-26'),
(12,'Qomarudin','Masaran 3',NULL,'Bendahara','Anggota','2024-05-26'),
(13,'Hidayat','Ngrampal 1','','Konsumsi &amp; Jayengan','Anggota','2024-05-26'),
(14,'sumiyadi','Ngrampal 1','2147483647','Persiapan Kandang/Gantungan','Koordinator','2024-05-26'),
(15,'Taufik','Ngrampal 1',NULL,'Persiapan Kandang/Gantungan','Anggota','2024-05-26'),
(16,'Kohman','Ngrampal 1',NULL,'Persiapan Kandang/Gantungan','Anggota','2024-05-26'),
(17,'Slamet','Ngrampal 1',NULL,'Persiapan Kandang/Gantungan','Anggota','2024-05-26'),
(18,'Muhsin','Ngrampal 1',NULL,'Persiapan Kandang/Gantungan','Anggota','2024-05-26'),
(20,'Muhromin','Karangmalang 2','2147483647','Persiapan Alas adun Jati','Anggota','2024-05-26'),
(21,'Daliyo','Sragen 2',NULL,'Persiapan Alas adun Jati','Anggota','2024-05-26'),
(22,'Abi Sanjaya','Ngrampal 1','2147483647','Persiapan Alas adun Jati','Anggota','2024-05-26'),
(23,'Walid','Ngrampal 1','2147483647','Persiapan Alas adun Jati','Anggota','2024-05-26'),
(26,'Tukiyo','Jenar',NULL,'Persiapan Alas adun Jati','Anggota','2024-05-26'),
(27,'Pardi','Ngrampal 1',NULL,'Persiapan Alas adun Jati','Anggota','2024-05-26'),
(28,'Supardi','Ngrampal 1','2147483647','Rafia, Plastik, Karung','Koordinator','2024-05-26'),
(29,'Sudardi','Nramapal 1',NULL,'Rafia, Plastik, Karung','Anggota','2024-05-26'),
(30,'Brandi','Ngrampal 1','2147483647','Telenan, Keranjang, Alat','Koordinator','2024-05-26'),
(31,'Jati Sukamto','Ngrampal 1','','Pengairan, Listrik, Kipas Angin','Koordinator','2024-05-26'),
(32,'Ambar Joko s','Ngrampal 1',NULL,'Pengairan, Listrik, Kipas Angin','Anggota','2024-05-26'),
(33,'Wardoyo','Gondang 1',NULL,'Pengairan, Listrik, Kipas Angin','Anggota','2024-05-26'),
(34,'Jadug','Karangmalang 1','2147483647','Penerimaan Hewan Qurban','Koordinator','2024-05-26'),
(35,'Mulyono','Kedawung 3','2147483647','Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(36,'Tokok Yulianto','Ngrampal 1',NULL,'Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(37,'Suyatno','Gondang 2','2147483647','Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(38,'Sugino ','Ngrampal 1',NULL,'Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(40,'Barudin','Kedawung 3',NULL,'Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(41,'Sunarso','Kedawung 3',NULL,'Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(42,'Suyadi','Kedawung 3',NULL,'Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(43,'Hadi Suparno','Kedawung 3',NULL,'Penerimaan Hewan Qurban','Anggota','2024-05-26'),
(46,'Pramono','Ngrampal 1','','Pengadaan Pakan','Koordinator','2024-05-26'),
(47,'Sadiyo','Ngrampal 1',NULL,'Pengadaan Pakan','Anggota','2024-05-26'),
(48,'Wagimin','Ngrampal 1',NULL,'Pengadaan Pakan','Anggota','2024-05-26'),
(49,'Prastyono','Ngrampal 1','2147483647','Keamanan Hewan','Koordinator','2024-05-26'),
(50,'Nunung','Ngrampal 1','','Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(51,'Priono','Ngrampal 1','2147483647','Keamanan Hewan','Anggota','2024-05-26'),
(52,'Basit','Ngrampal 1','','K3 / Pencatatan Penyembelihan','Koordinator','2024-05-26'),
(53,'Zaki','Ngrampal 1',NULL,'K3 / Pencatatan Penyembelihan','Anggota','2024-05-26'),
(55,'Habib Husain','Ngrampal 1',NULL,'K3 / Pencatatan Penyembelihan','Anggota','2024-05-26'),
(57,'Tugiyo','Gondang 3','','Penyembelihan & Pengulitan Kambing','Koordinator','2024-05-26'),
(58,'Suyono','Gondang 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(59,'Makruf','Gondang 3',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(60,'Suparso','Kedawung 4',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(61,'Sugi','Kedawung 2',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(62,'Miyono','Sambungmacan 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(63,'Suharno','Sambungmacan 1','','Konsumsi &amp; Jayengan','Anggota','2024-05-26'),
(64,'Sukidi','Sragen 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(65,'sumari','Tangen 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(66,'Joko Sulis','Ngrampal 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(67,'Siman','Sambungmacan 2',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(68,'Naryo','Sambungmacan 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(69,'Paryanto','Kedawung 2',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(70,'Thoyib','Kedawung 2',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(71,'Yato','Gondang 1',NULL,'Penyembelihan & Pengulitan Kambing','Anggota','2024-05-26'),
(72,'Srianto','Gondang 1','2147483647','Pembawa Hewan Yang Sudah Disembelih','Koordinator','2024-05-26'),
(73,'Wakimin','Tangen 1',NULL,'Pembawa Hewan Yang Sudah Disembelih','Anggota','2024-05-26'),
(74,'Wagiyo','Tangen 1',NULL,'Pembawa Hewan Yang Sudah Disembelih','Anggota','2024-05-26'),
(75,'Suwarno','Kedawung 1',NULL,'Pembawa Hewan Yang Sudah Disembelih','Anggota','2024-05-26'),
(76,'Danar','Masaran 2','2147483647','Penyembelihan Dan Pengulitan Sapi','Koordinator','2024-05-26'),
(77,'Mulyadi','Ngrampal 1','2147483647','Penyembelihan Dan Pengulitan Sapi','Koordinator','2024-05-26'),
(78,'Ngatno Arif','Masaran 3',NULL,'Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(79,'Muh Alim','Masaran 5',NULL,'Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(80,'Pardi','Masaran 5',NULL,'Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(81,'Sariyadi','Sragen 1','2147483647','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(82,'Purnomo','Sambirejo 1',NULL,'Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(83,'Kristono','Gondang 2','2147483647','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(85,'Sumari','Gondang 1','2147483647','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(87,'Tarno','Jenawi 2',NULL,'Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(89,'Wagiman','Jenawi 1',NULL,'Penyembelihan Dan Pengulitan Sapi','Anggota','2024-05-26'),
(91,'Agus','Jenar','2147483647','Seset Daging','Koordinator','2024-05-26'),
(92,'purwanto','Jenar',NULL,'Seset Daging','Anggota','2024-05-26'),
(93,'Sukardianto','Masaran 3',NULL,'Seset Daging','Anggota','2024-05-26'),
(97,'Tohur','Masaran 3',NULL,'Seset Daging','Anggota','2024-05-26'),
(98,'Marzuki','Masaran 3','2147483647','Seset Daging','Anggota','2024-05-26'),
(99,'Sutarno','Sambungmacan 1',NULL,'Seset Daging','Anggota','2024-05-26'),
(100,'Suwardi','Sambungmacan 2',NULL,'Seset Daging','Anggota','2024-05-26'),
(101,'Ahmad','Tangen 1','2147483647','Persiapan Alas adun Jati','Koordinator','2024-05-26'),
(102,'Sunarwo','Kedawung 5','','Seset Daging','Anggota','2024-05-26'),
(103,'Kwatno','Karangmalang 3',NULL,'Seset Daging','Anggota','2024-05-26'),
(104,'Giyono','Gesi',NULL,'Seset Daging','Anggota','2024-05-26'),
(105,'Suwoto','Gondang 2','2147483647','Seset Daging','Anggota','2024-05-26'),
(106,'Wagiman','Gesi','2147483647','Seset Daging','Anggota','2024-05-26'),
(107,'SRIYANTO','Kedawung 4','2147483647','Seset Daging','Anggota','2024-05-26'),
(108,'SUKINO','Kedawung 5','','Seset Daging','Anggota','2024-05-26'),
(109,'Suwarno','Kedawung 4','2147483647','Seset Daging','Anggota','2024-05-26'),
(110,'Jiyanto','Kedawung 4','2147483647','Seset Daging','Anggota','2024-05-26'),
(111,'Purwanto','Ngrampal 2',NULL,'Seset Daging','Anggota','2024-05-26'),
(112,'Sutrisno','Jenar','','Balungan','Koordinator','2024-05-26'),
(113,'Jono','Jenar',NULL,'Balungan','Anggota','2024-05-26'),
(115,'Suwandi','Gondang 2',NULL,'Balungan','Anggota','2024-05-26'),
(116,'Tino','Tangen 2',NULL,'Balungan','Anggota','2024-05-26'),
(117,'Jarwo','Tangen 2',NULL,'Balungan','Anggota','2024-05-26'),
(118,'Jarwono','Tangen 1',NULL,'Balungan','Anggota','2024-05-26'),
(119,'Dwiyono','kedawung 1',NULL,'Balungan','Anggota','2024-05-26'),
(120,'Katiyo','kedawung 1',NULL,'Balungan','Anggota','2024-05-26'),
(121,'Paryanto','kedawung 1',NULL,'Balungan','Anggota','2024-05-26'),
(122,'Winarno','kedawung 1',NULL,'Balungan','Anggota','2024-05-26'),
(123,'Suyanto','Ngrampal 1','','Bedah Waduk','Koordinator','2024-05-26'),
(124,'Suwardi A','Ngrampal 1',NULL,'Bedah Waduk','Anggota','2024-05-26'),
(125,'Tujiono','Jenar',NULL,'Bedah Waduk','Anggota','2024-05-26'),
(126,'Sayid','Kedawung 2',NULL,'Bedah Waduk','Anggota','2024-05-26'),
(127,'Triono A','Kedawung 2',NULL,'Bedah Waduk','Anggota','2024-05-26'),
(128,'Triono B','Kedawung 2',NULL,'Bedah Waduk','Anggota','2024-05-26'),
(129,'Basir','Ngrampal 1','','Pembawa Jeroan','Koordinator','2024-05-26'),
(130,'Slamet','Ngrampal 1',NULL,'Pembawa Jeroan','Anggota','2024-05-26'),
(131,'Suwarno','Sambirejo 1',NULL,'Pembawa Jeroan','Anggota','2024-05-26'),
(132,'Kasno','Sambirejo 1',NULL,'Pembawa Jeroan','Anggota','2024-05-26'),
(133,'Suparmin','Kedawung 3','2147483647','Penerimaan Hewan Qurban','Koordinator','2024-05-26'),
(134,'Maksum','Ngrampal 1','2147483647','Pembersih Jeroan','Anggota','2024-05-26'),
(135,'Tukiyo','Sragen 2',NULL,'Pembersih Jeroan','Anggota','2024-05-26'),
(136,'Tugiman','Ngrampal 1',NULL,'Pembersih Jeroan','Anggota','2024-05-26'),
(137,'Jayus','Sambirejo 2','2147483647','Pembersih Jeroan','Anggota','2024-05-26'),
(138,'Gino','Sambirejo 2',NULL,'Pembersih Jeroan','Anggota','2024-05-26'),
(139,'Joko','Ngrampal 2','2147483647','Pembersih Jeroan','Anggota','2024-05-26'),
(140,'Wandi','Ngrampal 1',NULL,'Pembersih Jeroan','Anggota','2024-05-26'),
(141,'Ngadimin','Masaran 3','','Seset Daging','Koordinator','2024-05-26'),
(142,'Wardi','Gondang 3',NULL,'Pembungkus Jeroan','Anggota','2024-05-26'),
(143,'Suratno','Gondang 3',NULL,'Pembungkus Jeroan','Anggota','2024-05-26'),
(144,'Wagino','Gondang 2','2147483647','Pembungkus Jeroan','Anggota','2024-05-26'),
(145,'Joko','Gondang 2','2147483647','Pembungkus Jeroan','Anggota','2024-05-26'),
(146,'Kasno','Karangmalang 3','2147483647','Pembungkus Jeroan','Anggota','2024-05-26'),
(147,'Parno','Karangmalang 3',NULL,'Pembungkus Jeroan','Anggota','2024-05-26'),
(148,'Yuli Winarno','Gondang 1','2147483647','Pembungkus Jeroan','Anggota','2024-05-26'),
(149,'Sugimin','Gondang 3','','Penimbangan','Koordinator','2024-05-26'),
(150,'Rosyid','Gondang 1',NULL,'Penimbangan','Anggota','2024-05-26'),
(152,'Abdurahman','Gondang 3','','Penimbangan','Anggota','2024-05-26'),
(153,'Suwarno','Gondang 3',NULL,'Penimbangan','Anggota','2024-05-26'),
(154,'Agus Wiyono','Gondang 4','','Penimbangan','Anggota','2024-05-26'),
(155,'Sukiman','Gondang 2','2147483647','Penimbangan','Anggota','2024-05-26'),
(156,'Kusyanto','Gondang 1',NULL,'Penimbangan','Anggota','2024-05-26'),
(157,'Udin','Gondang 3','2147483647','Penimbangan','Anggota','2024-05-26'),
(158,'Sardi','Kedawung 1','2147483647','Penimbangan','Anggota','2024-05-26'),
(159,'Giyono','Kedawung 1','2147483647','Penimbangan','Anggota','2024-05-26'),
(160,'Mariman','Tangen 1',NULL,'Penimbangan','Anggota','2024-05-26'),
(161,'Rahman','Jenar','2147483647','Penimbangan','Anggota','2024-05-26'),
(162,'Siman Alamsyah','Gondang 2','2147483647','Persiapan Besek / Daging keluar','Koordinator','2024-05-26'),
(163,'Tego Wartono','Jenar','2147483647','Persiapan Besek / Daging keluar','Anggota','2024-05-26'),
(165,'Suyatno','Sambungmacan 2','2147483647','Persiapan Besek / Daging keluar','Anggota','2024-05-26'),
(166,'Slamet','Kedawung 1',NULL,'Persiapan Besek / Daging keluar','Anggota','2024-05-26'),
(167,'Samroko','Kedawung 1','2147483647','Persiapan Besek / Daging keluar','Anggota','2024-05-26'),
(168,'Sugiyanto','Kedawung 4',NULL,'Persiapan Besek / Daging keluar','Anggota','2024-05-26'),
(169,'DWI PURNOMO','Kedawung 4','2147483647','Persiapan Besek / Daging keluar','Anggota','2024-05-26'),
(170,'Suhardi','Ngrampal 1','','Catat Besek / Daging Keluar','Koordinator','2024-05-26'),
(171,'Ali Arifin','Ngrampal 1',NULL,'Catat Besek / Daging Keluar','Anggota','2024-05-26'),
(172,'Priyanto','Gondang 3','','Penimbangan','Koordinator','2024-05-26'),
(173,'Agus Sarwanto','Ngrampal 1','','Konsumsi &amp; Jayengan','Koordinator','2024-05-26'),
(174,'Sutarno','Karangmalang 1',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(175,'Wagimin','Karangmalang 1',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(176,'Hardi','Karangmalang 2',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(177,'Gimin','Sambirejo 1',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(178,'Sujiono','Jenar',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(179,'Sadi Samsuri','Karangmalang 3',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(180,'Hidayat','Ngrampal 1','','Persiapan Kajang','Koordinator','2024-05-26'),
(181,'Sakiyo','Ngrampal 1',NULL,'Konsumsi & Jayengan','Anggota','2024-05-26'),
(183,'Handoko','Gondang 3','','Transportasi','Koordinator','2024-05-26'),
(184,'Rebu Wiranto','Gondang 3',NULL,'Kebersihan','Anggota','2024-05-26'),
(185,'Giyanto','Ngrampal 1',NULL,'Kebersihan','Anggota','2024-05-26'),
(186,'Prapto','Gondang 2','2147483647','Kebersihan','Anggota','2024-05-26'),
(187,'Samito','Gondang 3','2147483647','Kebersihan','Anggota','2024-05-26'),
(189,'Suwarno','Ngrampal 1','','Kebersihan','Anggota','2024-05-26'),
(190,'Rajimin','Kedawung 2','','Sinoman','Koordinator','2024-05-26'),
(191,'Setianto','Kedawung 2','','P3K','Koordinator','2024-05-26'),
(192,'Budi','Sidoharjo 1',NULL,'P3K','Anggota','2024-05-26'),
(193,'Tri Setyo','Gondang 1',NULL,'P3K','Anggota','2024-05-26'),
(194,'Gunawan','Kedawung 2',NULL,'P3K','Anggota','2024-05-26'),
(195,'Subagyo','Tim Parkir','','Parkir','Koordinator','2024-05-26'),
(196,'Marimin','Satgas','','Keamanan Umum','Koordinator','2024-05-26'),
(197,'Nashir','Bankom','','Bankom','Koordinator','2024-05-26'),
(198,'Bakrin Sugito','Gondang 1','','Among Tamu','Koordinator','2024-05-26'),
(199,'Ust Sugeng Raharjo',NULL,NULL,'Among Tamu','Anggota','2024-05-26'),
(200,'Ust Agus Suyoko',NULL,NULL,'Among Tamu','Anggota','2024-05-26'),
(201,'Ust Winarno',NULL,NULL,'Among Tamu','Anggota','2024-05-26'),
(208,'Ahmad Mustofa','Ngramapl 1','0','Penimbangan','Anggota','2024-05-26'),
(223,'Kurniawan','Jenawi 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-06'),
(224,'Sunardi','Ngrampal 1','','Keamanan Hewan','Anggota','2024-06-07'),
(225,'Suparmin','Ngrampal 1','','Pembersih Jeroan','Koordinator','2024-06-07'),
(226,'Ngadmin','Gondang 1','','Pembungkus Jeroan','Koordinator','2024-06-07'),
(227,'Supriyanto','Ngrampal 1','','Pembantu Umum / Informasi','Koordinator','2024-06-07'),
(228,'Arif Suyatno','Ngrampal 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-07'),
(229,'Akmal','Ngrampal 1','','K3 / Pencatatan Penyembelihan','Anggota','2024-06-07'),
(230,'Fauzi','Ngrampal 1','','K3 / Pencatatan Penyembelihan','Anggota','2024-06-07'),
(231,'Joko Supriyanto','Gondang 1','','Pembersih Jeroan','Anggota','2024-06-10'),
(232,'Suparman','Gondang 2','','Persiapan Besek / Daging keluar','Anggota','2024-06-10'),
(233,'Tamo','Kedawung 1','','Persiapan Besek / Daging keluar','Anggota','2024-06-10'),
(234,'Parno','Ngrampal 2','','Balungan','Anggota','2024-06-10'),
(235,'Handoyo','Kedawung 1','','Bedah Waduk','Anggota','2024-06-10'),
(236,'Taklim','Tangen 1','','Bedah Waduk','Anggota','2024-06-10'),
(237,'Bdayo','Karangmalang 5','','Bedah Waduk','Anggota','2024-06-10'),
(238,'Suyatko','Jenawi 1','','Bedah Waduk','Anggota','2024-06-10'),
(239,'Sujiarno','Jenar','','Bedah Waduk','Anggota','2024-06-10'),
(240,'Hakim','Tangen 1','','Persiapan Alas adun Jati','Anggota','2024-06-10'),
(241,'Narya','Sragen 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-10'),
(242,'Sukidi','Sragen 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-10'),
(243,'Suwarno','Sambirejo 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-10'),
(244,'Parmin','kedawung 5','','Seset Daging','Anggota','2024-06-10'),
(245,'Ahmad','Karangmalang 1','','Seset Daging','Anggota','2024-06-10'),
(246,'Tri','Kedawung 1','','Among Tamu','Anggota','2024-06-10'),
(247,'Suharno','Kedawung 2','','Bedah Waduk','Anggota','2024-06-16'),
(248,'Slamet','Kedawung 2','','Bedah Waduk','Anggota','2024-06-16'),
(249,'Rega','Kedawuang 4','','Sekretaris/Admin','Anggota','2024-06-16'),
(250,'Habib (B)','Masaran 3','','Sekretaris/Admin','Anggota','2024-06-16'),
(251,'Habib ','Masaran 3','','Sekretaris/Admin','Anggota','2024-06-16'),
(252,'Angga','Kedawung 3','','Sekretaris/Admin','Anggota','2024-06-16'),
(253,'Agus P','Ngrampal 1','','Pengairan, Listrik, Kipas Angin','Anggota','2024-06-16'),
(254,'Suwardi','Kedawung 3','','Penerimaan Hewan Qurban','Anggota','2024-06-16'),
(255,'Yoko','Kedawung 3','','Penerimaan Hewan Qurban','Anggota','2024-06-16'),
(256,'Suprianto','Jenawi 2','','Persiapan Alas adun Jati','Anggota','2024-06-16'),
(257,'Joko S','Gondang 1','','Pembungkus Jeroan','Anggota','2024-06-16'),
(258,'Rois ','Ngrampal 1','','K3 / Pencatatan Penyembelihan','Anggota','2024-06-16'),
(259,'Rizal','Ngrampal 1','','K3 / Pencatatan Penyembelihan','Anggota','2024-06-16'),
(260,'Hafid','Ngrampal 1','','K3 / Pencatatan Penyembelihan','Anggota','2024-06-16'),
(261,'Sugino','Masaran 3','','Seset Daging','Anggota','2024-06-16'),
(262,'mustakim','Masaran 3','','Seset Daging','Anggota','2024-06-16'),
(263,'Amir','Masaran 3','','Seset Daging','Anggota','2024-06-16'),
(265,'Budi','Masaran 3','','Seset Daging','Anggota','2024-06-16'),
(266,'oktavian','Karangmalang 1','','Seset Daging','Anggota','2024-06-16'),
(267,'Gufran','Masaran 3','','Seset Daging','Anggota','2024-06-16'),
(268,'Jarno','Jenar','','Seset Daging','Anggota','2024-06-16'),
(269,'Trirohmadi','Kedawung 3','','Seset Daging','Anggota','2024-06-16'),
(270,'Sugiman','Ngrampal 1','','Penyembelihan & Pengulitan Kambing','Anggota','2024-06-16'),
(271,'Taufik','Masaran 2','','Persiapan Besek / Daging keluar','Anggota','2024-06-17'),
(272,'Maryono','Kedawung 2','','Pembungkus Jeroan','Anggota','2024-06-18'),
(273,'Brandi','Ngrampal 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-18'),
(274,'Sugiman','Ngrampal 1','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-18'),
(275,'Pono','Kedawung 4','','Penyembelihan Dan Pengulitan Sapi','Anggota','2024-06-18');
/*!40000 ALTER TABLE `datapanitia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataqurban2023`
--

DROP TABLE IF EXISTS `dataqurban2023`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dataqurban2023` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(14) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `sapi_bumm` int(11) DEFAULT NULL,
  `sapib_bumm` int(11) DEFAULT NULL,
  `kambing_bumm` int(11) DEFAULT NULL,
  `sapi_mandiri` int(11) DEFAULT NULL,
  `kambing_mandiri` int(11) DEFAULT NULL,
  `date_input` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataqurban2023`
--

LOCK TABLES `dataqurban2023` WRITE;
/*!40000 ALTER TABLE `dataqurban2023` DISABLE KEYS */;
INSERT INTO `dataqurban2023` VALUES
(1,'Gesi',1,8,0,1,1,'2023-06-30 00:00:00'),
(2,'Gondang 1',1,0,4,0,1,'2023-06-30 00:00:00'),
(3,'Gondang 2',0,6,3,2,10,'2023-06-30 00:00:00'),
(4,'Gondang 3',0,14,7,0,6,'2023-06-30 00:00:00'),
(5,'Gondang 4',0,0,0,0,0,'2023-06-30 00:00:00'),
(6,'Jenar',3,0,4,1,3,'2023-06-30 00:00:00'),
(7,'Jenawi 1',0,0,0,7,87,'2023-06-30 00:00:00'),
(8,'Jenawi 2',0,1,2,0,4,'2023-06-30 00:00:00'),
(9,'Karangmalang 1',2,4,8,0,0,'2023-06-30 00:00:00'),
(10,'Karangmalang 2',3,0,13,0,0,'2023-06-30 00:00:00'),
(11,'Karangmalang 3',3,7,30,0,6,'2023-06-30 00:00:00'),
(12,'Karangmalang 4',0,5,1,0,0,'2023-06-30 00:00:00'),
(13,'Karangmalang 5',0,0,0,0,0,'2023-06-30 00:00:00'),
(14,'Kedawung 1',0,66,13,0,1,'2023-06-30 00:00:00'),
(15,'Kedawung 2',3,5,26,2,25,'2023-06-30 00:00:00'),
(16,'Kedawung 3',8,2,5,0,0,'2023-06-30 00:00:00'),
(17,'Kedawung 4',0,57,11,0,13,'2023-06-30 00:00:00'),
(18,'Kedawung 5',0,0,0,0,0,'2023-06-30 00:00:00'),
(19,'Kerjo 2',0,0,0,0,22,'2023-06-30 00:00:00'),
(20,'Kerjo 4',0,0,0,4,5,'2023-06-30 00:00:00'),
(21,'Ngrampal 1',0,66,5,0,6,'2023-06-30 00:00:00'),
(22,'Ngrampal 2',0,7,8,0,1,'2023-06-30 00:00:00'),
(23,'Ngrampal 3',0,0,0,0,0,'2023-06-30 00:00:00'),
(24,'Sambirejo 1',0,6,4,0,12,'2023-06-30 00:00:00'),
(25,'Sambirejo 2',2,4,4,0,0,'2023-06-30 00:00:00'),
(26,'Sambungmacan 1',0,0,6,2,12,'2023-06-30 00:00:00'),
(27,'Sambungmacan 2',0,1,5,2,0,'2023-06-30 00:00:00'),
(28,'Sambungmacan 3',0,0,0,0,0,'2023-06-30 00:00:00'),
(29,'Sragen 1',8,5,22,0,4,'2023-06-30 00:00:00'),
(30,'Sragen 2',0,19,10,0,11,'2023-06-30 00:00:00'),
(31,'Tangen 1',3,1,1,0,0,'2023-06-30 00:00:00'),
(32,'Tangen 2',0,4,3,0,0,'2023-06-30 00:00:00');
/*!40000 ALTER TABLE `dataqurban2023` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataqurban2024`
--

DROP TABLE IF EXISTS `dataqurban2024`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dataqurban2024` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `sapi_bumm` int(11) DEFAULT NULL,
  `sapib_bumm` int(11) DEFAULT NULL,
  `kambing_bumm` int(11) DEFAULT NULL,
  `sapi_mandiri` int(11) DEFAULT NULL,
  `kambing_mandiri` int(11) DEFAULT NULL,
  `info` varchar(255) NOT NULL,
  `date_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataqurban2024`
--

LOCK TABLES `dataqurban2024` WRITE;
/*!40000 ALTER TABLE `dataqurban2024` DISABLE KEYS */;
INSERT INTO `dataqurban2024` VALUES
(1,'Gesi',1,0,8,1,0,'Sudah','2024-05-28 00:00:00'),
(2,'Gondang 1',1,0,4,0,1,'Sudah','2024-05-28 00:00:00'),
(3,'Gondang 2',0,2,6,2,11,'Sudah','2024-05-28 00:00:00'),
(4,'Gondang 3',2,0,5,0,4,'Sudah','2024-05-28 00:00:00'),
(5,'Gondang 4',1,0,0,0,2,'Sudah','2024-05-28 00:00:00'),
(6,'Jenar',2,3,6,1,1,'Sudah','2024-05-28 00:00:00'),
(7,'Jenawi 1',0,0,0,6,99,'Sudah','2024-05-28 00:00:00'),
(8,'Jenawi 2',0,0,0,1,1,'Sudah','2024-05-28 00:00:00'),
(9,'Karangmalang 1',0,12,16,0,0,'Sudah','2024-05-28 00:00:00'),
(10,'Karangmalang 2',2,0,19,0,0,'Sudah','2024-05-28 00:00:00'),
(11,'Karangmalang 3',0,22,34,0,2,'Sudah','2024-05-28 00:00:00'),
(12,'Karangmalang 4',0,0,0,1,0,'Sudah','2024-05-28 00:00:00'),
(13,'Karangmalang 5',2,1,5,0,0,'Sudah','2024-05-28 00:00:00'),
(14,'Kedawung 1',0,50,10,0,3,'Sudah','2024-05-28 00:00:00'),
(15,'Kedawung 2',0,30,25,1,38,'Sudah','2024-05-28 00:00:00'),
(16,'Kedawung 3',0,29,35,0,4,'Sudah','2024-05-28 00:00:00'),
(17,'Kedawung 4',0,46,24,0,12,'Sudah','2024-05-28 00:00:00'),
(18,'Kedawung 5',0,10,1,0,2,'Sudah','2024-05-28 00:00:00'),
(19,'Kerjo 2',0,11,0,0,25,'Sudah','2024-05-28 00:00:00'),
(20,'Kerjo 4',0,0,0,3,7,'Sudah','2024-05-28 00:00:00'),
(21,'Ngrampal 1',0,24,36,0,13,'Sudah','2024-05-28 00:00:00'),
(22,'Ngrampal 2',0,5,5,0,4,'Sudah','2024-05-28 00:00:00'),
(23,'Ngrampal 3',0,11,3,0,0,'Sudah','2024-05-28 00:00:00'),
(24,'Sambirejo 1',0,7,5,0,12,'Sudah','2024-05-28 00:00:00'),
(25,'Sambirejo 2',0,14,1,0,7,'Sudah','2024-05-28 00:00:00'),
(26,'Sambungmacan 1',0,0,3,1,20,'Sudah','2024-05-28 00:00:00'),
(27,'Sambungmacan 2',0,0,0,3,3,'Sudah','2024-05-28 00:00:00'),
(28,'Sambungmacan 3',0,3,2,0,6,'Belum','2024-05-28 00:00:00'),
(29,'Sragen 1',0,37,48,0,4,'Sudah','2024-05-28 00:00:00'),
(30,'Sragen 2',0,19,18,0,5,'Sudah','2024-05-28 00:00:00'),
(31,'Tangen 1',0,11,15,0,0,'Sudah','2024-05-28 00:00:00'),
(32,'Tangen 2',0,3,0,0,0,'Sudah','2024-05-28 00:00:00');
/*!40000 ALTER TABLE `dataqurban2024` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `id_cabang`
--

DROP TABLE IF EXISTS `id_cabang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_cabang` (
  `id_cabang` varchar(11) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `id_cabang`
--

LOCK TABLES `id_cabang` WRITE;
/*!40000 ALTER TABLE `id_cabang` DISABLE KEYS */;
/*!40000 ALTER TABLE `id_cabang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `id_panitia`
--

DROP TABLE IF EXISTS `id_panitia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_panitia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seksi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `id_panitia`
--

LOCK TABLES `id_panitia` WRITE;
/*!40000 ALTER TABLE `id_panitia` DISABLE KEYS */;
INSERT INTO `id_panitia` VALUES
(1,'Among Tamu'),
(2,'Balungan'),
(3,'Bankom'),
(4,'Bedah Waduk'),
(5,'Bendahara'),
(6,'Catat Besek Dan Daging Keluar'),
(7,'K3 Atau Pencatatan Penyembelihan'),
(8,'Keamanan Hewan'),
(9,'Keamanan Umum'),
(10,'Kebersihan'),
(11,'Ketua 1'),
(12,'Ketua 2'),
(13,'Konsumsi & Jayengan'),
(14,'P3K'),
(15,'Parkir'),
(16,'Pembantu Umum Atau Informasi'),
(17,'Pembawa Hewan Yang Sudah Disembelih'),
(18,'Pembawa Jeroan'),
(19,'Pembersih Jeroan'),
(20,'Pembungkus Jeroan'),
(21,'Penerimaan Hewan Qurban'),
(22,'Pengadaan Pakan'),
(23,'Pengairan, Listrik, Kipas Angin'),
(24,'Penimbangan'),
(25,'Penyembelihan & Pengulitan Kambing'),
(26,'Penyembelihan Dan Pengulitan Sapi'),
(27,'Persiapan Alas adun Jati'),
(28,'Persiapan Besek / Daging keluar'),
(29,'Persiapan Kajang'),
(30,'Persiapan Kandang/Gantungan'),
(31,'Rafia, Plastik, Karung'),
(32,'Sekretaris/Admin'),
(33,'Seset Daging'),
(34,'Sinoman'),
(35,'Telenan, Keranjang, Alat'),
(36,'Transportasi');
/*!40000 ALTER TABLE `id_panitia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwalpengiriman`
--

DROP TABLE IF EXISTS `jadwalpengiriman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwalpengiriman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `antrian` int(50) DEFAULT NULL,
  `kirim_hewan` varchar(255) NOT NULL,
  `kirim_besek` varchar(255) NOT NULL,
  `date_input` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwalpengiriman`
--

LOCK TABLES `jadwalpengiriman` WRITE;
/*!40000 ALTER TABLE `jadwalpengiriman` DISABLE KEYS */;
INSERT INTO `jadwalpengiriman` VALUES
(1,'Gesi',5,'H2 17 Juni 2024 Pagi','H2 17 Juni 2024','2024-05-26'),
(2,'Gondang 1',12,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(3,'Gondang 2',10,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(4,'Gondang 3',11,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(5,'Gondang 4',7,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(6,'Jenar',5,'H3 18 Juni 2024 Pagi','H3 18 Juni 2024','2024-05-26'),
(7,'Jenawi 1',1,'H3 18 Juni 2024 Pagi','H3 18 Juni 2024','2024-05-26'),
(8,'Jenawi 2',2,'H3 18 Juni 2024 Pagi','H3 18 Juni 2024','2024-05-26'),
(9,'Karangmalang 1',10,'H2 17 Juni 2024 Siang','H3 18 Juni 2024','2024-05-26'),
(10,'Karangmalang 2',9,'H2 17 Juni 2024 Siang','H3 18 Juni 2024','2024-05-26'),
(11,'Karangmalang 3',8,'H2 17 Juni 2024 Siang','H3 18 Juni 2024','2024-05-26'),
(12,'Karangmalang 4',7,'H2 17 Juni 2024 Siang','H3 18 Juni 2024','2024-05-26'),
(13,'Karangmalang 5',6,'H2 17 Juni 2024 Siang','H3 18 Juni 2024','2024-05-26'),
(14,'Kedawung 1',1,'H1 16 Juni 2024 Pagi','H1 16 Juni 2024','2024-05-26'),
(15,'Kedawung 2',3,'H1 16 Juni 2024 Siang','H2 17 Juni 2024','2024-05-26'),
(16,'Kedawung 3',4,'H2 17 Juni 2024 Pagi','H2 17 Juni 2024','2024-05-26'),
(17,'Kedawung 4',3,'H3 18 Juni 2024 Pagi','H3 18 Juni 2024','2024-05-26'),
(18,'Kedawung 5',4,'H3 18 Juni 2024 Pagi','H3 18 Juni 2024','2024-05-26'),
(19,'Kerjo 2',2,'H2 17 Juni 2024 Pagi','H2 17 Juni 2024','2024-05-26'),
(20,'Kerjo 4',1,'H2 17 Juni 2024 Pagi','H2 17 Juni 2024','2024-05-26'),
(21,'Ngrampal 1',8,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(22,'Ngrampal 2',6,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(23,'Ngrampal 3',9,'H-1 15 Juni 2024 Siang','H1 16 Juni 2024','2024-05-26'),
(24,'Sambirejo 1',6,'H2 17 Juni 2024 Pagi','H2 17 Juni 2024','2024-05-26'),
(25,'Sambirejo 2',7,'H2 17 Juni 2024 Pagi','H2 17 Juni 2024','2024-05-26'),
(26,'Sambungmacan 1',8,'H1 16 Juni 2024 Siang','H2 17 Juni 2024','2024-05-26'),
(27,'Sambungmacan 2',9,'H1 16 Juni 2024 Siang','H2 17 Juni 2024','2024-05-26'),
(28,'Sambungmacan 3',10,'H1 16 Juni 2024 Siang','H2 17 Juni 2024','2024-05-26'),
(29,'Sragen 1',2,'H1 16 Juni 2024 Pagi','H1 16 Juni 2024','2024-05-26'),
(30,'Sragen 2',3,'H1 16 Juni 2024 Pagi','H1 16 Juni 2024','2024-05-26'),
(31,'Tangen 1',4,'H1 16 Juni 2024 Pagi','H1 16 Juni 2024','2024-05-26'),
(32,'Tangen 2',5,'H1 16 Juni 2024 Pagi','H1 16 Juni 2024','2024-05-26');
/*!40000 ALTER TABLE `jadwalpengiriman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kandang`
--

DROP TABLE IF EXISTS `kandang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kandang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_input` datetime NOT NULL DEFAULT current_timestamp(),
  `sapi` int(10) DEFAULT NULL,
  `kambing` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kandang`
--

LOCK TABLES `kandang` WRITE;
/*!40000 ALTER TABLE `kandang` DISABLE KEYS */;
INSERT INTO `kandang` VALUES
(16,'2024-06-16 07:31:37',27,200),
(17,'2024-06-17 00:03:26',10,0),
(20,'2024-06-17 01:03:25',0,25),
(21,'2024-06-17 01:35:27',0,20),
(22,'2024-06-17 02:10:14',0,20),
(23,'2024-06-17 02:20:27',3,0),
(24,'2024-06-17 02:48:38',0,20),
(25,'2024-06-17 02:51:29',3,0),
(26,'2024-06-17 03:34:41',0,20),
(27,'2024-06-17 03:36:11',2,0),
(29,'2024-06-17 03:44:14',2,0),
(30,'2024-06-17 04:14:38',1,20),
(31,'2024-06-17 04:41:39',1,0),
(32,'2024-06-17 06:05:04',2,0),
(33,'2024-06-17 06:18:05',0,30),
(34,'2024-06-17 06:47:03',0,20),
(35,'2024-06-17 07:12:18',0,15),
(37,'2024-06-17 23:55:56',2,0),
(38,'2024-06-18 01:06:06',10,30),
(39,'2024-06-18 02:02:46',5,30),
(40,'2024-06-18 03:17:11',6,30),
(43,'2024-06-18 07:46:46',9,140);
/*!40000 ALTER TABLE `kandang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laravel`
--

DROP TABLE IF EXISTS `laravel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laravel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laravel`
--

LOCK TABLES `laravel` WRITE;
/*!40000 ALTER TABLE `laravel` DISABLE KEYS */;
INSERT INTO `laravel` VALUES
(22,'panitia','$2y$10$IkjXmC9vzyyj5N8CUoIENe8w17pyNXzDYnW/E1cMX7FaLvs0sKNS6');
/*!40000 ALTER TABLE `laravel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES
(1,'Jeon Jungkook','18083000200','7A','Sistem Informasi','7'),
(19,'Dessya Christianita Effendi','18083000158','7F','Sistem Informasi','7'),
(20,'Otsuka Ryouma','18083000160','7G','Sistem Informasi','7'),
(21,'Sya Dessya','18083000300','3C','Sistem Informasi','3');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(20) NOT NULL,
  `menu_link` varchar(200) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES
(1,'home','index.html'),
(2,'data panitia','datapantia/datapanitia.php'),
(3,'data cabang','datacabang/datacabang.php'),
(4,'data qurban','dataqurban/dataqurban.php'),
(5,'penerimaan','penerimaan/penerimaan.php');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pendataan`
--

DROP TABLE IF EXISTS `pendataan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pendataan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(100) NOT NULL,
  `sapi_bumm` int(11) DEFAULT NULL,
  `sapib_bumm` int(11) DEFAULT NULL,
  `kambing_bumm` int(11) DEFAULT NULL,
  `sapi_cabang` int(11) DEFAULT NULL,
  `kambing_cabang` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date_input` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pendataan`
--

LOCK TABLES `pendataan` WRITE;
/*!40000 ALTER TABLE `pendataan` DISABLE KEYS */;
INSERT INTO `pendataan` VALUES
(11,'TEST',2,2,10,1,5,NULL,'2024-06-01 19:00:31'),
(12,'Kedawung 5',1,10,1,0,2,NULL,'2024-06-01 20:45:21'),
(13,'Kedawung 4',7,43,23,0,12,NULL,'2024-06-02 05:36:32'),
(14,'Karangmalang 5',2,0,5,0,0,NULL,'2024-06-03 20:30:11'),
(15,'Karangmalang 4',1,0,0,0,0,NULL,'2024-06-03 20:31:13'),
(16,'Gondang 3',2,0,4,0,3,NULL,'2024-06-03 20:31:55'),
(17,'Ngrampal 2',0,5,8,0,3,NULL,'2024-06-03 20:32:24'),
(18,'Ngrampal 1',0,23,27,0,12,NULL,'2024-06-03 20:32:51'),
(19,'Kerjo 2',0,11,0,0,13,NULL,'2024-06-03 20:33:13'),
(20,'Karangmalang 2',2,0,18,0,0,NULL,'2024-06-03 20:41:23'),
(21,'Sambungmacan 2',0,0,0,3,2,NULL,'2024-06-03 20:45:10'),
(22,'Kedawung 4',6,43,25,0,13,NULL,'2024-06-06 01:01:55');
/*!40000 ALTER TABLE `pendataan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan`
--

DROP TABLE IF EXISTS `penerimaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(50) DEFAULT NULL,
  `pengirim` varchar(50) DEFAULT NULL,
  `sapi` int(10) DEFAULT NULL,
  `kambing` int(10) DEFAULT NULL,
  `shadaqoh` int(255) DEFAULT NULL,
  `pembayaran` int(255) DEFAULT NULL,
  `date_input` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan`
--

LOCK TABLES `penerimaan` WRITE;
/*!40000 ALTER TABLE `penerimaan` DISABLE KEYS */;
INSERT INTO `penerimaan` VALUES
(16,'BUMM Sragen','Supri',6,0,0,0,'2024-06-15 13:29:50'),
(17,'BUMM Sragen','Supri',0,30,0,0,'2024-06-15 13:32:24'),
(18,'Ngrampal 1','wagimin',0,1,0,0,'2024-06-15 13:37:42'),
(19,'Gondang 3','Harsono',0,1,0,0,'2024-06-15 13:38:28'),
(20,'Ngrampal 1','no name',0,1,0,0,'2024-06-15 13:39:15'),
(21,'Gondang 2','Tris',0,7,0,630000,'2024-06-15 13:40:51'),
(22,'Ngrampal 1','Parno',0,2,0,0,'2024-06-15 13:42:19'),
(23,'Gondang 2','No Name',0,1,0,0,'2024-06-15 13:43:45'),
(24,'Ngrampal 1','Dardi',0,1,0,0,'2024-06-15 13:45:28'),
(25,'Gondang 3','Sugimin',0,1,0,0,'2024-06-15 13:46:10'),
(26,'Ngrampal 2','Sutrisno',0,4,0,360000,'2024-06-15 13:48:50'),
(27,'Ngrampal 1','Jati',0,2,0,180000,'2024-06-15 13:49:30'),
(28,'Ngrampal 1','No Name',0,1,0,0,'2024-06-15 13:50:46'),
(29,'BUMM Sragen','Supri',0,24,0,0,'2024-06-15 13:51:18'),
(30,'Ngrampal 1','No Name',0,1,0,0,'2024-06-15 13:57:24'),
(31,'Gondang 3','suwarno',0,2,0,0,'2024-06-15 13:58:23'),
(32,'Gondang 2','Miyono',0,1,0,90000,'2024-06-15 13:59:33'),
(33,'Sambungmacan 1','Miyono',0,1,0,90000,'2024-06-15 14:00:08'),
(34,'Ngrampal 1','Sugiyo',0,2,0,0,'2024-06-15 14:01:40'),
(35,'Ngrampal 1','Agung',0,1,0,90000,'2024-06-15 14:02:18'),
(36,'BUMM Sragen','Supri',0,32,0,0,'2024-06-15 14:02:37'),
(37,'Ngrampal 1','Rosyid',0,1,0,0,'2024-06-15 14:03:42'),
(38,'BUMM Sragen','Hasyid',0,0,0,40000000,'2024-06-15 14:04:22'),
(39,'Ngrampal 1','Amin Suwito',0,0,0,450000,'2024-06-15 14:05:25'),
(40,'Ngrampal 1','Amin Suwito',0,0,0,180000,'2024-06-15 14:05:56'),
(41,'Ngrampal 1','Amin Suwito',0,0,0,270000,'2024-06-15 14:07:08'),
(42,'Gondang 3','hadi',0,0,0,180000,'2024-06-16 01:19:56'),
(43,'Sragen 1','suparno',0,1,0,90000,'2024-06-16 01:22:38'),
(44,'Gondang 2','yatno (bu marsini)',0,1,0,90000,'2024-06-16 01:23:10'),
(45,'Kedawung 1','tri rahmadi',0,2,0,180000,'2024-06-16 01:23:53'),
(46,'Sragen 1','wiwid',0,1,0,90000,'2024-06-16 01:31:59'),
(47,'BUMM Sragen','Abdul manan',3,0,0,0,'2024-06-16 02:01:07'),
(48,'Gesi','narno',1,0,0,630000,'2024-06-16 02:14:28'),
(49,'Sragen 2','jose',0,5,0,450000,'2024-06-16 02:14:53'),
(50,'BUMM Sragen','jose',0,1,0,0,'2024-06-16 02:15:22'),
(51,'BUMM Sragen','Abdul mannan',0,59,0,0,'2024-06-16 02:15:51'),
(52,'BUMM Sragen','Abdul manan',0,15,0,0,'2024-06-16 02:47:48'),
(53,'Kerjo 2','maryanto',0,18,0,1620000,'2024-06-16 03:11:14'),
(54,'BUMM Sragen','Abdul manan',9,0,0,0,'2024-06-16 03:15:23'),
(55,'BUMM Sragen','Abdul manan',9,0,0,0,'2024-06-16 03:15:41'),
(56,'Gondang 2','giyono',0,1,0,90000,'2024-06-16 04:10:05'),
(57,'Gondang 2','yatno dan ngadiyo',2,0,0,1260000,'2024-06-16 04:47:12'),
(58,'Kerjo 2','maryanto',0,7,0,720000,'2024-06-16 04:48:16'),
(59,'Sambungmacan 1','naryo',1,0,0,630000,'2024-06-16 05:51:41'),
(60,'Kedawung 2','agung',0,8,0,720000,'2024-06-16 06:15:54'),
(61,'Sambungmacan 1','naryo',0,10,0,900000,'2024-06-16 06:33:39'),
(62,'BUMM Sragen','Abdul manan',1,0,0,0,'2024-06-16 06:39:41'),
(63,'Kedawung 2','darmanto',0,29,0,2610000,'2024-06-16 07:00:37'),
(64,'Sambungmacan 2','andri',2,0,0,1260000,'2024-06-16 07:28:03'),
(65,'Sambungmacan 2','andri',0,0,0,270000,'2024-06-16 07:29:58'),
(66,'Sambungmacan 1','naryo',0,1,0,90000,'2024-06-16 07:35:36'),
(67,'Kedawung 2','sutardi',1,0,0,630000,'2024-06-16 07:57:48'),
(68,'BUMM Sragen','Abdul manan',4,0,0,0,'2024-06-16 08:08:47'),
(69,'Sambungmacan 1','mustain',0,2,0,180000,'2024-06-16 08:22:28'),
(70,'BUMM Sragen','Abdul manan',1,0,0,0,'2024-06-16 08:42:50'),
(71,'BUMM Sragen','Abdul manan',4,0,0,0,'2024-06-16 09:15:59'),
(72,'Sambungmacan 2','andri',1,0,0,630000,'2024-06-16 09:23:07'),
(73,'Kedawung 3','pak manto',0,4,0,360000,'2024-06-17 02:19:22'),
(76,'Kerjo 4','sugino',3,7,0,2520000,'2024-06-17 02:23:14'),
(77,'Gondang 4','simanto',0,2,0,180000,'2024-06-17 02:23:47'),
(78,'Sambirejo 1','sipur',0,1,0,90000,'2024-06-17 02:24:33'),
(79,'BUMM Sragen','Abdul manan',3,0,0,0,'2024-06-17 03:03:59'),
(81,'BUMM Sragen','Abdul manan',0,86,0,0,'2024-06-17 03:07:26'),
(82,'Sambirejo 2','suroto',0,7,0,630000,'2024-06-17 03:23:30'),
(84,'Karangmalang 4','samsuri',1,0,0,630000,'2024-06-17 03:46:27'),
(85,'BUMM Sragen','Abdul manan',0,36,0,0,'2024-06-17 04:00:31'),
(86,'BUMM Sragen','naryo',0,2,0,0,'2024-06-17 05:48:44'),
(87,'BUMM Sragen','Abdul manan',4,0,0,0,'2024-06-17 06:01:31'),
(88,'BUMM Sragen','Abdul manan',0,3,0,0,'2024-06-17 06:16:01'),
(89,'BUMM Sragen','Abdul manan',4,0,0,0,'2024-06-17 06:17:12'),
(90,'Tangen 2','tangen 2',0,0,200000,0,'2024-06-17 06:25:57'),
(91,'Kedawung 1','cipto',0,1,0,90000,'2024-06-17 06:38:47'),
(92,'Sragen 1','dasipur',0,1,0,90000,'2024-06-17 06:40:57'),
(93,'Sragen 1','ali maksum',0,1,0,90000,'2024-06-17 06:41:18'),
(94,'Kedawung 2','darmanto',0,1,0,0,'2024-06-17 06:42:58'),
(95,'Sambungmacan 1','cipto miyono',0,4,0,360000,'2024-06-17 06:49:26'),
(96,'Sambungmacan 1','cipto miyono',0,2,0,180000,'2024-06-17 06:52:08'),
(97,'Sambungmacan 2','naryo',0,3,0,270000,'2024-06-17 06:54:36'),
(98,'Sambungmacan 3','naryo',0,6,0,540000,'2024-06-17 06:57:02'),
(100,'Sambirejo 1','siswanto',0,11,0,990000,'2024-06-17 07:04:36'),
(101,'Karangmalang 3','samsuri',0,1,0,90000,'2024-06-17 07:06:23'),
(102,'BUMM Sragen','Abdul manan',4,0,0,0,'2024-06-17 07:08:47'),
(103,'BUMM Sragen','naryo',0,4,0,0,'2024-06-17 07:10:20'),
(104,'BUMM Sragen','Abdul manan',0,20,0,0,'2024-06-17 07:10:37'),
(105,'BUMM Sragen','Abdul manan',3,0,0,0,'2024-06-17 07:35:39'),
(106,'BUMM Sragen','Abdul manan',0,1,0,0,'2024-06-17 08:17:02'),
(107,'BUMM Sragen','Abdul manan',5,0,0,0,'2024-06-18 02:17:21'),
(108,'Jenawi 1','sarmin',6,98,0,12600000,'2024-06-18 02:28:01'),
(109,'Jenawi 2','somad',1,1,0,720000,'2024-06-18 02:34:19'),
(110,'Kedawung 4','sumadi',0,13,0,1170000,'2024-06-18 02:35:27'),
(111,'Jenar','salahudin',1,1,350000,720000,'2024-06-18 02:37:24'),
(112,'Gondang 3','samito',0,0,200000,0,'2024-06-18 02:38:16'),
(113,'BUMM Sragen','Abdul manan',1,0,0,0,'2024-06-18 02:38:52'),
(114,'Jenawi 1','sarmin',0,1,0,90000,'2024-06-18 02:45:35'),
(115,'BUMM Sragen','Abdul Manan',0,0,0,20000000,'2024-06-18 11:04:47');
/*!40000 ALTER TABLE `penerimaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permintaan`
--

DROP TABLE IF EXISTS `permintaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ts` int(11) DEFAULT NULL,
  `tk` int(11) DEFAULT NULL,
  `a` int(11) DEFAULT NULL,
  `os` int(11) DEFAULT NULL,
  `ok` int(11) DEFAULT NULL,
  `ks` int(11) DEFAULT NULL,
  `kb` int(11) DEFAULT NULL,
  `kks` int(11) DEFAULT NULL,
  `kls` int(11) DEFAULT NULL,
  `date_input` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permintaan`
--

LOCK TABLES `permintaan` WRITE;
/*!40000 ALTER TABLE `permintaan` DISABLE KEYS */;
INSERT INTO `permintaan` VALUES
(39,'Kedawung 3',45,0,0,500,350,0,0,0,0,'2024-06-17 02:48:08'),
(41,'Kedawung 3',23,0,0,50,50,4,35,10,4,'2024-06-17 02:51:32'),
(43,'Gelombang Sidorejo Kedawung 2',0,0,0,80,0,0,2,0,0,'2024-06-17 02:57:10'),
(44,'Kedawung 2',80,20,0,600,500,5,0,15,5,'2024-06-17 04:28:57'),
(45,'Tower Persada MTA',0,0,0,150,0,0,0,0,0,'2024-06-17 06:23:35'),
(46,'sekitar cabang kedawung 2',0,0,0,50,0,0,0,0,0,'2024-06-17 07:46:03'),
(47,'Kedawung 2',0,0,0,0,0,0,25,0,1,'2024-06-17 07:59:27'),
(48,'Kedawung 2',0,0,0,0,0,0,30,0,0,'2024-06-17 08:14:46'),
(49,'Kedawung 5',0,0,0,250,100,0,0,0,0,'2024-06-17 08:37:32'),
(50,'Kedawung 4',0,0,0,600,500,0,0,0,0,'2024-06-17 08:38:02'),
(51,'Sambirejo 2',0,0,0,0,0,1,0,0,0,'2024-06-18 03:48:13');
/*!40000 ALTER TABLE `permintaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permohonan_besek`
--

DROP TABLE IF EXISTS `permohonan_besek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permohonan_besek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `p_ts` int(11) DEFAULT NULL,
  `p_tk` int(11) DEFAULT NULL,
  `p_a` int(11) DEFAULT NULL,
  `p_os` int(11) DEFAULT NULL,
  `p_ok` int(11) DEFAULT NULL,
  `p_ks` int(11) DEFAULT NULL,
  `p_kb` int(11) DEFAULT NULL,
  `p_kks` int(11) DEFAULT NULL,
  `p_kls` int(11) DEFAULT NULL,
  `info` varchar(255) DEFAULT 'Belum',
  `date_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permohonan_besek`
--

LOCK TABLES `permohonan_besek` WRITE;
/*!40000 ALTER TABLE `permohonan_besek` DISABLE KEYS */;
INSERT INTO `permohonan_besek` VALUES
(1,'Gesi',22,0,0,450,50,2,8,4,2,'Sudah','2024-05-28 00:00:00'),
(2,'Gondang 1',11,0,0,100,100,1,4,2,1,'Sudah','2024-05-28 00:00:00'),
(3,'Gondang 2',31,0,0,225,125,2,13,6,2,'Sudah','2024-05-28 00:00:00'),
(4,'Gondang 3',23,0,0,450,50,2,9,6,2,'Sudah','2024-05-28 00:00:00'),
(5,'Gondang 4',7,0,0,120,0,1,0,4,1,'Sudah','2024-05-28 00:00:00'),
(6,'Jenar',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(7,'Jenawi 1',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(8,'Jenawi 2',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(9,'Karangmalang 1',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(10,'Karangmalang 2',32,0,0,200,150,2,15,6,2,'Sudah','2024-05-28 00:00:00'),
(11,'Karangmalang 3',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(12,'Karangmalang 4',7,0,0,190,0,1,0,4,1,'Sudah','2024-05-28 00:00:00'),
(13,'Karangmalang 5',19,0,0,250,50,2,4,6,2,'Sudah','2024-05-28 00:00:00'),
(14,'Kedawung 1',63,0,0,800,200,7,13,14,7,'Sudah','2024-05-28 00:00:00'),
(15,'Kedawung 2',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(16,'Kedawung 3',68,0,0,1200,0,4,39,0,0,'Belum','2024-05-28 00:00:00'),
(17,'Kedawung 4',81,1,0,800,700,6,36,20,6,'Sudah','2024-05-28 00:00:00'),
(18,'Kedawung 5',20,0,0,250,20,2,2,5,2,'Sudah','2024-05-28 00:00:00'),
(19,'Kerjo 2',24,0,0,150,130,1,10,8,1,'Sudah','2024-05-28 00:00:00'),
(20,'Kerjo 4',28,0,0,350,50,3,4,10,3,'Sudah','2024-05-28 00:00:00'),
(21,'Ngrampal 1',24,49,0,700,364,3,35,10,3,'Sudah','2024-05-28 00:00:00'),
(22,'Ngrampal 2',13,0,0,100,100,1,9,4,1,'Sudah','2024-05-28 00:00:00'),
(23,'Ngrampal 3',14,0,0,100,0,0,0,0,0,'Sudah','2024-05-28 00:00:00'),
(24,'Sambirejo 1',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(25,'Sambirejo 2',21,0,0,173,100,2,10,4,2,'Sudah','2024-05-28 00:00:00'),
(26,'Sambungmacan 1',30,0,0,200,200,1,23,4,1,'Sudah','2024-05-28 00:00:00'),
(27,'Sambungmacan 2',21,3,0,425,35,3,3,12,3,'Sudah','2024-05-28 00:00:00'),
(28,'Sambungmacan 3',11,0,0,180,45,1,11,1,0,'Sudah','2024-05-28 00:00:00'),
(29,'Sragen 1',37,52,0,600,600,5,52,5,5,'Sudah','2024-05-28 00:00:00'),
(30,'Sragen 2',40,0,0,300,200,3,20,8,3,'Sudah','2024-05-28 00:00:00'),
(31,'Tangen 1',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00'),
(32,'Tangen 2',0,0,0,0,0,0,0,0,0,'Belum','2024-05-28 00:00:00');
/*!40000 ALTER TABLE `permohonan_besek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produksibesek`
--

DROP TABLE IF EXISTS `produksibesek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produksibesek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_input` datetime NOT NULL DEFAULT current_timestamp(),
  `ts` int(10) DEFAULT NULL,
  `tk` int(10) DEFAULT NULL,
  `a` int(10) DEFAULT NULL,
  `os` int(10) DEFAULT NULL,
  `ok` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produksibesek`
--

LOCK TABLES `produksibesek` WRITE;
/*!40000 ALTER TABLE `produksibesek` DISABLE KEYS */;
INSERT INTO `produksibesek` VALUES
(9,'2024-06-16 10:08:02',0,425,0,3659,2545);
/*!40000 ALTER TABLE `produksibesek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realisasi_besek`
--

DROP TABLE IF EXISTS `realisasi_besek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realisasi_besek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cabang` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ts` int(11) DEFAULT NULL,
  `tk` int(11) DEFAULT NULL,
  `a` int(11) DEFAULT NULL,
  `os` int(11) DEFAULT NULL,
  `ok` int(11) DEFAULT NULL,
  `ks` int(11) DEFAULT NULL,
  `kb` int(11) DEFAULT NULL,
  `kks` int(11) DEFAULT NULL,
  `kls` int(11) DEFAULT NULL,
  `realisasi` varchar(255) DEFAULT 'Belum',
  `info_kirim` varchar(255) DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realisasi_besek`
--

LOCK TABLES `realisasi_besek` WRITE;
/*!40000 ALTER TABLE `realisasi_besek` DISABLE KEYS */;
INSERT INTO `realisasi_besek` VALUES
(1,'Gesi',22,0,0,200,50,2,6,4,2,'Sudah','Dikirim','2024-05-28 00:00:00'),
(2,'Gondang 1',12,0,0,100,50,1,6,0,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(3,'Gondang 2',33,0,0,325,150,2,18,0,2,'Sudah','Dikirim','2024-05-28 00:00:00'),
(4,'Gondang 3',23,0,0,200,100,2,10,0,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(5,'Gondang 4',9,0,0,160,50,1,2,0,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(6,'Jenar',31,0,0,350,50,3,7,13,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(7,'Jenawi 1',140,1,0,950,750,6,70,12,6,'Sudah','Dikirim','2024-05-28 00:00:00'),
(8,'Jenawi 2',8,0,0,250,0,1,1,2,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(9,'Karangmalang 1',28,0,0,300,150,1,14,0,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(10,'Karangmalang 2',33,0,0,250,250,2,15,0,2,'Sudah','Dikirim','2024-05-28 00:00:00'),
(11,'Karangmalang 3',58,0,0,325,325,3,34,10,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(12,'Karangmalang 4',7,0,0,150,0,1,0,4,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(13,'Karangmalang 5',20,0,0,275,50,2,5,0,2,'Sudah','Dikirim','2024-05-28 00:00:00'),
(14,'Kedawung 1',63,0,0,850,200,7,13,14,7,'Sudah','Dikirim','2024-05-28 00:00:00'),
(15,'Kedawung 2',80,20,0,500,600,5,58,15,5,'Sudah','Dikirim','2024-05-28 00:00:00'),
(16,'Kedawung 3',68,0,0,550,400,4,35,10,4,'Sudah','Dikirim','2024-05-28 00:00:00'),
(17,'Kedawung 4',80,2,0,800,700,6,32,8,6,'Sudah','Dikirim','2024-05-28 00:00:00'),
(18,'Kedawung 5',13,0,0,250,100,2,2,2,2,'Sudah','Dikirim','2024-05-28 00:00:00'),
(19,'Kerjo 2',36,0,0,160,250,2,25,6,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(20,'Kerjo 4',28,0,0,350,50,3,5,8,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(21,'Ngrampal 1',73,0,0,350,450,3,45,10,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(22,'Ngrampal 2',14,0,0,100,50,0,9,0,0,'Sudah','Dikirim','2024-05-28 00:00:00'),
(23,'Ngrampal 3',14,0,0,150,50,2,4,0,1,'Belum','Dikirim','2024-05-28 00:00:00'),
(24,'Sambirejo 1',23,0,0,100,150,1,12,2,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(25,'Sambirejo 2',22,0,0,200,100,1,8,0,2,'Sudah','Dikirim','2024-05-28 00:00:00'),
(26,'Sambungmacan 1',30,0,0,250,150,1,20,0,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(27,'Sambungmacan 2',24,0,0,300,150,3,3,0,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(28,'Sambungmacan 3',6,5,0,200,100,1,8,0,1,'Sudah','Dikirim','2024-05-28 00:00:00'),
(29,'Sragen 1',89,0,0,550,500,5,50,21,5,'Sudah','Dikirim','2024-05-28 00:00:00'),
(30,'Sragen 2',42,0,0,250,215,3,20,8,3,'Sudah','Dikirim','2024-05-28 00:00:00'),
(31,'Tangen 1',26,0,0,150,150,1,15,0,1,'Belum','Dikirim','2024-05-28 00:00:00'),
(32,'Tangen 2',3,0,0,100,0,0,0,3,0,'Belum','Dikirim','2024-05-28 00:00:00');
/*!40000 ALTER TABLE `realisasi_besek` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-28 11:05:27
