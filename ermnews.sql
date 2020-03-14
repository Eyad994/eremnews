-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ermnews
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Politics','2020-03-13 19:27:41','2020-03-13 19:27:41'),(2,'News and Events','2020-03-13 19:27:41','2020-03-13 19:27:41'),(3,'Food and Cooking','2020-03-13 19:27:41','2020-03-13 19:27:41'),(4,'Cars','2020-03-13 19:27:41','2020-03-13 19:27:41'),(5,'Animals and Nature','2020-03-13 19:27:41','2020-03-13 19:27:41');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_03_12_072927_create_products_table',1),(4,'2020_03_12_081949_create_categories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'officia',9,'1.jpg','Et placeat perspiciatis architecto quae temporibus. Nisi qui quisquam quis velit inventore harum. Aut ab iste perferendis. Sequi et sit rerum non. In ducimus iusto voluptatum sit.','4',1,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(2,'a',2,'2.jpg','Dicta molestiae qui asperiores quam doloribus minima. Enim quam ut est minima porro. Et animi possimus quibusdam accusamus tempora.','5',3,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(3,'excepturi',26,'3.jpg','Tempore consequatur voluptate beatae error est accusamus. Exercitationem modi assumenda aut fugit magni. Totam cupiditate qui minus ratione.','1',2,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(4,'alias',8,'4.jpg','Mollitia excepturi fuga exercitationem molestias dolore aliquam qui. Iusto quasi enim nisi assumenda aut reprehenderit dignissimos. Doloremque temporibus corporis totam et.','2',4,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(5,'error',4,'5.jpg','Placeat numquam vitae neque minima. Aut et ut neque eos sequi aut. Officiis dicta saepe minus et assumenda voluptatibus dicta.','3',3,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(6,'quisquam',26,'6.jpg','Incidunt maxime nihil et. Est non alias ducimus odit dolores temporibus. Fugiat eos et est similique. Non qui et cum voluptates fugiat quo. Rerum nobis nihil velit.','5',3,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(7,'rerum',14,'7.jpg','Beatae quas quisquam minima non consectetur. Incidunt nisi praesentium eaque.','4',3,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(8,'molestias',21,'8.jpg','Qui non sapiente quas cum molestias ut doloribus. Voluptatem quo sapiente officia. Perspiciatis impedit aut soluta rem. Debitis distinctio dolores minima id ex.','2',4,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(9,'aliquid',16,'9.jpg','Cumque voluptatem iure consectetur. Nesciunt voluptas qui rerum omnis repellat. Aut aliquam magni voluptas laudantium velit amet. Vel aspernatur adipisci sequi nihil nesciunt harum eius.','4',4,'2020-03-13 19:27:41','2020-03-13 19:27:41'),(10,'soluta',30,'10.jpg','Beatae laborum aut nulla consequatur et quas. Et vel quidem incidunt atque. Consequatur voluptatum ut in nesciunt quas. Delectus et non esse animi consequuntur.','5',5,'2020-03-13 19:27:41','2020-03-13 19:27:41');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
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
INSERT INTO `users` VALUES (1,'Brett Connelly','avis67@example.org','2020-03-13 19:27:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','mgscushRxo','2020-03-13 19:27:41','2020-03-13 19:27:41'),(2,'Myrna Yost I','wiza.alexandro@example.com','2020-03-13 19:27:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','efrZTIZAut','2020-03-13 19:27:41','2020-03-13 19:27:41'),(3,'Ms. Marion Effertz PhD','cesar.powlowski@example.com','2020-03-13 19:27:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','lmvxCreJy6','2020-03-13 19:27:41','2020-03-13 19:27:41'),(4,'Katrina Greenholt','graciela73@example.org','2020-03-13 19:27:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','LnqlwYINv9','2020-03-13 19:27:41','2020-03-13 19:27:41'),(5,'Meaghan Watsica','lmacejkovic@example.org','2020-03-13 19:27:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ONbj9ebkBS','2020-03-13 19:27:41','2020-03-13 19:27:41');
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

-- Dump completed on 2020-03-15  0:08:18
