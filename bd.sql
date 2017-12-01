CREATE DATABASE  IF NOT EXISTS `laraveltasks` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laraveltasks`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: laraveltasks
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2014_10_12_000000_create_users_table',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2017_11_11_154839_create_tasks_table',1),(11,'2017_11_30_233446_create_trocas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,'Iphone 5s','poucas marcas de uso','1.200',1,'2017-12-01 17:31:31','2017-12-01 17:31:31'),(2,'Câmera semi-profissional','zoom até na lua','2.400',2,'2017-12-01 17:32:12','2017-12-01 17:32:12'),(3,'Bicicleta','era da minha sogra, porém ela morreu. Não tenho interesse em ficar','700',2,'2017-12-01 17:33:06','2017-12-01 17:33:06'),(4,'Relógio Invicta','ainda tenho a caixa + nota fiscal','1.200',3,'2017-12-01 17:33:34','2017-12-01 17:33:34'),(5,'Televisão LG','Especificações:\r\nModelo:	28MT49S-PS\r\nTamanho:	28\" (70cm) - Formato: 16:9\r\nwebOS:	Versão 3.5\r\nResolução máxima:	1366x768 (HD)\r\nBrilho:	200 cd/m²\r\nContraste Dinâmico:	5.000.000:1\r\nTempo de Resposta:	8ms (GTG)\r\nSuporte de cores:	16,7M\r\nÂngulo de Visão:	178°/178°\r\nPixel Pitch:	0,4447 x 0,4447\r\nFonte:	Externa (Adaptador)\r\nRevestimentos da tela:	Non Glare\r\nFreqüência Digital:	H: 30kHz ~ 83kHz  \r\n V: 58Hz ~ 62Hz\r\nConsumo de Energia:	30,4W (Médio)\r\nCapacidade:	Bivolt 100 ~ 240V\r\nConector de Entrada/Saída:	RJ45 (LAN), WiFi Integrado, Componente/Composto, USB, HDMI (2x), Áudio Ótico, Antena e Cabo\r\nWi-Fi:	Integrado\r\nVesa:	Sim (100x100mm)\r\nAlto Falantes:	Sim (2x5W)\r\nConversor Digital:	Sim, Integrado (DTV ISDB-T)\r\nCor:	Preto\r\nBase:	Preta (Sem Tilt), Removível\r\nCódigo para Vendas:	28MT49S-PS\r\nCódigo EAN:	789329990737-1\r\nSufixo:	AWZ\r\nClassificação Fiscal:	8528.72.00','1.500',1,'2017-12-01 17:56:00','2017-12-01 17:56:52'),(6,'Moletem Lacoste','usei poucas vezes, engordei e não serve mais!','120.00',4,'2017-12-01 18:02:03','2017-12-01 18:03:13'),(7,'Tênis Nike','não me serve mais','270.00',5,'2017-12-01 18:12:11','2017-12-01 18:12:11');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trocas`
--

DROP TABLE IF EXISTS `trocas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trocas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tasks_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `users_recebeu` int(11) NOT NULL,
  `tasks_id_my` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trocas`
--

LOCK TABLES `trocas` WRITE;
/*!40000 ALTER TABLE `trocas` DISABLE KEYS */;
INSERT INTO `trocas` VALUES (1,2,3,2,4,'meu relógio + 600 reais!','600,00','2017-12-01 17:39:33','2017-12-01 17:39:33'),(3,1,3,1,4,'meu relógio é mais caro, você estaria em vantagem no caso, sem volta da minha parte!','0.00','2017-12-01 17:48:59','2017-12-01 17:48:59');
/*!40000 ALTER TABLE `trocas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Matheus','matheus.2010jf@hotmail.com','$2y$10$fVTyBgdRZFKlnCfomhIkn.n70qVXVpDJgfKB6p8O6AfHRnXjxF9e.','cPKcE98wD7CI18GMpyTkmXD3fx8lf6eFdaJHdDF4uXXP8JunswHf1LP2PaOl','2017-12-01 17:30:25','2017-12-01 17:30:25'),(2,'Pedro','pedro@hotmail.com','$2y$10$9TpwxF5/hSlPiN.sZuW/Q.vgcMk5m5bmpj7XPZIpVxt7EsZsWNNRu','PEtMcstsrOXYYj1DPig721n3aZ0FPxClnEcYADshpXOR1s5uvXNn43nndeIR','2017-12-01 17:30:49','2017-12-01 17:30:49'),(3,'Tiago','tiago@hotmail.com','$2y$10$g9XyRWYBhn907ENk/n5NP.olXzpdQt4zNHTkJki.vVcjOpb6NAYv2','LH5loHBvotv97GHRN7plr25jJ51JJyBQAmSslkslLrjC0GfO2lIBQ42tpkaK','2017-12-01 17:31:03','2017-12-01 17:31:03'),(4,'Afonso','afonso@hotmail.com','$2y$10$zWN2mYrmuRpasLcs66/y/eq9GCtMBzLflxCRCb5AB3yxgxDslXaYa','aaF8CosUKuHhp0KUVT3mBZOAYSz5apFtmqq5jyCA80HNpXso1rVstuhoz7cS','2017-12-01 17:59:38','2017-12-01 17:59:38'),(5,'João','joao@hotmail.com','$2y$10$4.w0eZGprWh7DjcI3aO2VOT1Z8/lKSF6Zs0VBbKfp5axPalTogQ2O',NULL,'2017-12-01 18:11:10','2017-12-01 18:11:10');
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

-- Dump completed on 2017-12-01 14:16:29
