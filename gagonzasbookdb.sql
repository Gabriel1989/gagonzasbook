-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para friendbook
CREATE DATABASE IF NOT EXISTS `friendbook` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `friendbook`;

-- Volcando estructura para tabla friendbook.chatcomments
CREATE TABLE IF NOT EXISTS `chatcomments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `text_comment` mediumtext,
  `meme_comment` varchar(4000) DEFAULT NULL,
  `video_comment` varchar(4000) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla friendbook.chatcomments: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `chatcomments` DISABLE KEYS */;
INSERT INTO `chatcomments` (`id`, `nickname`, `text_comment`, `meme_comment`, `video_comment`, `created_at`, `updated_at`) VALUES
	(1, 'gabriel', 'hola', NULL, NULL, '2018-08-16 04:54:29', '2018-08-16 04:54:29'),
	(2, 'andrea', 'hola', NULL, NULL, '2018-08-16 04:59:39', '2018-08-16 04:59:39'),
	(3, 'gabriel', '¿cómo estás?', NULL, NULL, '2018-08-16 05:10:32', '2018-08-16 05:10:32'),
	(4, 'andrea', '¿bien y tú?', NULL, NULL, '2018-08-16 05:11:00', '2018-08-16 05:11:00'),
	(5, 'gabriel', 'aquí estamos', NULL, NULL, '2018-08-16 05:13:08', '2018-08-16 05:13:08'),
	(6, 'gabriel', 'jajaj', NULL, NULL, '2018-08-16 05:13:51', '2018-08-16 05:13:51'),
	(7, 'andrea', 'qué haces', NULL, NULL, '2018-08-16 05:18:35', '2018-08-16 05:18:35'),
	(8, 'andrea', '?', NULL, NULL, '2018-08-16 05:18:47', '2018-08-16 05:18:47'),
	(9, 'gabriel', 'programando este chat', NULL, NULL, '2018-08-16 05:19:13', '2018-08-16 05:19:13'),
	(10, 'andrea', 'aaahh, el loco seco', NULL, NULL, '2018-08-16 05:19:33', '2018-08-16 05:19:33'),
	(11, 'gabriel', NULL, 'public/zUMGSiibJgOUoJXFRJXXemAWZL4NI9sLxgihCYqF.jpeg', NULL, '2018-08-16 15:49:23', '2018-08-16 15:49:23'),
	(12, 'daniel', 'hola cabros', NULL, NULL, '2018-08-18 06:10:59', '2018-08-18 06:10:59'),
	(13, 'daniel', 'hola', NULL, NULL, '2018-08-18 06:30:50', '2018-08-18 06:30:50'),
	(14, 'daniel', 'hola', NULL, NULL, '2018-08-18 06:32:01', '2018-08-18 06:32:01'),
	(15, 'daniel', 'hola alguien ahi', NULL, NULL, '2018-08-18 06:36:17', '2018-08-18 06:36:17'),
	(16, 'gabriel', 'fggf', NULL, NULL, '2018-08-18 06:40:45', '2018-08-18 06:40:45'),
	(17, 'andrea', '?', NULL, NULL, '2018-08-18 06:41:56', '2018-08-18 06:41:56'),
	(18, 'daniel', 'fggfgffg', NULL, NULL, '2018-08-18 07:04:58', '2018-08-18 07:04:58'),
	(19, 'gabriel', 'hola a todos', NULL, NULL, '2018-08-18 17:02:04', '2018-08-18 17:02:04'),
	(20, 'gabriel', 'hola', NULL, NULL, '2018-08-18 17:02:43', '2018-08-18 17:02:43'),
	(21, 'gabriel', 'hola', NULL, NULL, '2018-08-18 17:06:54', '2018-08-18 17:06:54'),
	(22, 'gabriel', 'hola', NULL, NULL, '2018-08-18 17:07:10', '2018-08-18 17:07:10'),
	(23, 'gabriel', 'hggh', NULL, NULL, '2018-08-18 17:07:22', '2018-08-18 17:07:22'),
	(24, 'gabriel', 'gfgfgfg', NULL, NULL, '2018-08-18 17:08:58', '2018-08-18 17:08:58'),
	(25, 'gabriel', 'fggfgf', NULL, NULL, '2018-08-18 17:09:40', '2018-08-18 17:09:40'),
	(26, 'gabriel', 'hola', NULL, NULL, '2018-08-18 17:11:32', '2018-08-18 17:11:32'),
	(27, 'andrea', 'hola a todos', NULL, NULL, '2018-08-18 17:14:17', '2018-08-18 17:14:17'),
	(28, 'daniel', NULL, 'public/mDPebZpQMZdfvywqOgAbpHAfRJTCqyDykj6IBgBX.jpeg', NULL, '2018-08-18 17:20:16', '2018-08-18 17:20:16'),
	(29, 'gabriel', 'mmmm', NULL, NULL, '2018-08-18 17:23:18', '2018-08-18 17:23:18'),
	(30, 'andrea', 'dassdsd', NULL, NULL, '2018-08-18 17:26:03', '2018-08-18 17:26:03'),
	(31, 'andrea', NULL, 'public/csOGpRw5mm3Xj1NNL2fGe4dyNGluW1TE5NbpLHge.jpeg', NULL, '2018-08-18 17:26:41', '2018-08-18 17:26:41'),
	(32, 'daniel', NULL, 'public/8MkYps5b9LNBmrEEOm7WqeIO9w12FI0jNj6V2kKS.jpeg', NULL, '2018-08-18 17:35:20', '2018-08-18 17:35:20'),
	(33, 'gabriel', NULL, NULL, 'public/jNE0PT9tKdOHwRVp6pMhviIAXFTdMtYZ36pjyo8P.mp4', '2018-08-18 18:11:52', '2018-08-18 18:11:52'),
	(34, 'daniel', NULL, NULL, 'public/BXmjdKRw1NUPAByQgxATJebzvvecYCTTQo8Z2T5P.mp4', '2018-08-18 18:18:25', '2018-08-18 18:18:25'),
	(35, 'andrea', NULL, NULL, 'public/dXjYGNU1xUz4lUlMp1NtQ0VUwL8kedbWu0DRQ5pg.mp4', '2018-08-18 18:23:42', '2018-08-18 18:23:42'),
	(36, 'gabriel', NULL, NULL, 'public/sRdN3YbfnaiCyzanqe6FKm6RfeBDT7GRINb9NQIx.mp4', '2018-08-18 18:26:56', '2018-08-18 18:26:56'),
	(37, 'marcelo', 'hola cabros', NULL, NULL, '2018-08-18 19:13:58', '2018-08-18 19:13:58'),
	(38, 'gabriel', 'hhjhj', NULL, NULL, '2018-08-18 19:14:54', '2018-08-18 19:14:54'),
	(39, 'gabriel', NULL, 'public/b807wK8TjaKQh0sGy8PFKklilAodtad9b54x2SU2.jpeg', NULL, '2018-08-18 19:16:08', '2018-08-18 19:16:08'),
	(40, 'gabriel', 'holo', NULL, NULL, '2018-08-18 23:54:21', '2018-08-18 23:54:21'),
	(41, 'daniel', 'ghhg', NULL, NULL, '2018-08-18 23:55:44', '2018-08-18 23:55:44'),
	(42, 'gabriel', NULL, 'public/0c6sgymlxlkZyinwXXSWSN0RD4dlEJdZDmVfvRGq.gif', NULL, '2018-08-19 00:00:42', '2018-08-19 00:00:42'),
	(43, 'daniel', 'jajajaaj, talacagaa', NULL, NULL, '2018-08-19 00:16:13', '2018-08-19 00:16:13'),
	(44, 'andrea', 'jajajaja', NULL, NULL, '2018-08-19 00:17:01', '2018-08-19 00:17:01'),
	(45, 'gabriel', 'mmm', NULL, NULL, '2018-08-19 01:16:31', '2018-08-19 01:16:31'),
	(46, 'gabriel', 'msn', NULL, NULL, '2018-08-19 01:28:42', '2018-08-19 01:28:42'),
	(47, 'marcelo', NULL, 'public/Rff28SsP7hlZud2fh0DUbH7QeRaHbAqXTgFx4bgh.png', NULL, '2018-08-19 05:09:37', '2018-08-19 05:09:37'),
	(48, 'marcelo', NULL, 'public/Rtr6YVDZm53SQk01hGVZYO5hCi4f7xXTX6Ko7H6h.png', NULL, '2018-08-19 05:10:36', '2018-08-19 05:10:36'),
	(49, 'gabriel', '<iframe width="560" height="315" src="https://www.youtube.com/embed/nVbmTBKCJak" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', NULL, NULL, '2018-08-19 17:10:05', '2018-08-19 17:10:05');
/*!40000 ALTER TABLE `chatcomments` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.confirmfriendsnoty
CREATE TABLE IF NOT EXISTS `confirmfriendsnoty` (
  `id_user_follower` int(10) unsigned NOT NULL,
  `id_user_followed` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user_follower`,`id_user_followed`),
  KEY `confirmfriendsnoty_id_user_followed_foreign` (`id_user_followed`),
  CONSTRAINT `confirmfriendsnoty_id_user_followed_foreign` FOREIGN KEY (`id_user_followed`) REFERENCES `users` (`id`),
  CONSTRAINT `confirmfriendsnoty_id_user_follower_foreign` FOREIGN KEY (`id_user_follower`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.confirmfriendsnoty: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `confirmfriendsnoty` DISABLE KEYS */;
INSERT INTO `confirmfriendsnoty` (`id_user_follower`, `id_user_followed`, `created_at`, `updated_at`) VALUES
	(4, 7, '2018-08-15 06:14:16', '2018-08-15 06:14:16'),
	(4, 8, '2018-08-15 06:14:21', '2018-08-15 06:14:21'),
	(4, 9, '2018-08-15 06:14:28', '2018-08-15 06:14:28'),
	(4, 10, '2018-08-15 06:14:34', '2018-08-15 06:14:34'),
	(4, 11, '2018-08-15 06:14:42', '2018-08-15 06:14:42'),
	(4, 12, '2018-08-15 06:14:47', '2018-08-15 06:14:47'),
	(4, 13, '2018-08-15 06:14:52', '2018-08-15 06:14:52'),
	(4, 14, '2018-08-15 06:14:59', '2018-08-15 06:14:59'),
	(4, 15, '2018-08-15 06:15:39', '2018-08-15 06:15:39'),
	(6, 4, '2018-08-12 18:52:51', '2018-08-12 18:52:51');
/*!40000 ALTER TABLE `confirmfriendsnoty` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.face_user
CREATE TABLE IF NOT EXISTS `face_user` (
  `id_face` int(10) unsigned NOT NULL,
  `love_situation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `face_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `living_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Hombre','Mujer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_face`),
  CONSTRAINT `face_user_id_face_foreign` FOREIGN KEY (`id_face`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.face_user: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `face_user` DISABLE KEYS */;
INSERT INTO `face_user` (`id_face`, `love_situation`, `face_info`, `birthday`, `telephone`, `living_place`, `gender`, `hobbies`, `avatar`, `created_at`, `updated_at`) VALUES
	(4, 'Soltero', 'Soy ejecutivo de ventas WOM y futuro egresado de Analista Programador Computacional', '2018-08-29', 91462482, 'San Ramón, Santiago de Chile', 'Hombre', 'Programar, viajar, jugar videojuegos', 'public/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg', '2018-07-25 01:41:16', '2018-07-25 01:41:16'),
	(5, 'Soltero', '', '1978-04-27', 225465265, 'San Ramón, Santiago de Chile', 'Hombre', '', 'public/w6IcMQ2EqiYUUsZQRbtOEcftfa9yRDX3rzMpxQhm.jpeg', '2018-07-31 05:55:08', '2018-07-31 05:55:08'),
	(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-12 18:52:07', '2018-08-12 18:52:07'),
	(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:09:11', '2018-08-15 06:09:11'),
	(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:09:39', '2018-08-15 06:09:39'),
	(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:09:58', '2018-08-15 06:09:58'),
	(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:10:16', '2018-08-15 06:10:16'),
	(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:10:34', '2018-08-15 06:10:34'),
	(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:10:52', '2018-08-15 06:10:52'),
	(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:11:53', '2018-08-15 06:11:53'),
	(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:12:07', '2018-08-15 06:12:07'),
	(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/sinfoto.jpg', '2018-08-15 06:15:30', '2018-08-15 06:15:30');
/*!40000 ALTER TABLE `face_user` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.friendsfacesusers
CREATE TABLE IF NOT EXISTS `friendsfacesusers` (
  `user_id` int(10) unsigned NOT NULL,
  `id_facefriend` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`id_facefriend`),
  KEY `friendsfacesusers_id_facefriend_foreign` (`id_facefriend`),
  CONSTRAINT `friendsfacesusers_id_facefriend_foreign` FOREIGN KEY (`id_facefriend`) REFERENCES `users` (`id`),
  CONSTRAINT `friendsfacesusers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.friendsfacesusers: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `friendsfacesusers` DISABLE KEYS */;
INSERT INTO `friendsfacesusers` (`user_id`, `id_facefriend`, `created_at`, `updated_at`) VALUES
	(4, 4, '2018-08-12 02:24:15', '2018-08-12 02:24:23'),
	(4, 5, '2018-08-11 06:57:44', '2018-08-11 06:57:44'),
	(4, 6, '2018-08-12 18:53:09', '2018-08-12 18:53:09'),
	(4, 7, '2018-08-15 06:16:11', '2018-08-15 06:16:11'),
	(4, 8, '2018-08-15 06:16:33', '2018-08-15 06:16:33'),
	(4, 9, '2018-08-15 06:16:45', '2018-08-15 06:16:45'),
	(4, 10, '2018-08-15 06:16:59', '2018-08-15 06:16:59'),
	(4, 11, '2018-08-15 06:17:15', '2018-08-15 06:17:15'),
	(4, 12, '2018-08-15 06:17:27', '2018-08-15 06:17:27'),
	(4, 13, '2018-08-15 06:17:39', '2018-08-15 06:17:39'),
	(4, 14, '2018-08-15 06:17:54', '2018-08-15 06:17:54'),
	(4, 15, '2018-08-15 06:18:17', '2018-08-15 06:18:17'),
	(5, 4, '2018-08-11 06:57:44', '2018-08-11 06:57:44'),
	(6, 4, '2018-08-12 18:53:09', '2018-08-12 18:53:09'),
	(7, 4, '2018-08-15 06:16:11', '2018-08-15 06:16:11'),
	(8, 4, '2018-08-15 06:16:33', '2018-08-15 06:16:33'),
	(9, 4, '2018-08-15 06:16:45', '2018-08-15 06:16:45'),
	(10, 4, '2018-08-15 06:16:59', '2018-08-15 06:16:59'),
	(11, 4, '2018-08-15 06:17:15', '2018-08-15 06:17:15'),
	(12, 4, '2018-08-15 06:17:27', '2018-08-15 06:17:27'),
	(13, 4, '2018-08-15 06:17:39', '2018-08-15 06:17:39'),
	(14, 4, '2018-08-15 06:17:54', '2018-08-15 06:17:54'),
	(15, 4, '2018-08-15 06:18:17', '2018-08-15 06:18:17');
/*!40000 ALTER TABLE `friendsfacesusers` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_02_04_200834_faceUserTable', 1),
	(4, '2018_02_04_230955_publicationsUserTable', 1),
	(5, '2018_02_13_020749_friendsfacesusers', 1),
	(6, '2018_02_16_195440_confirmAddFriendTable', 1),
	(7, '2018_02_17_004242_create_notifications_table', 1),
	(8, '2018_02_21_010616_VisitUserfaceCount', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) unsigned NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.notifications: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
	('450a1bb8-0ea2-49bc-a982-7390ec60ecbe', 'App\\Notifications\\FriendRequest', 14, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"14","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:17:54', '2018-08-15 06:14:59', '2018-08-15 06:17:54'),
	('4e63e093-f07d-4930-90e1-869118d280be', 'App\\Notifications\\FriendRequest', 9, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"9","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:16:45', '2018-08-15 06:14:27', '2018-08-15 06:16:45'),
	('4e8bc9ca-69f7-4144-a922-592485fa671d', 'App\\Notifications\\FriendRequest', 15, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"15","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:18:17', '2018-08-15 06:15:39', '2018-08-15 06:18:17'),
	('ad92a555-3a03-4efd-95e9-c929e2c43a9a', 'App\\Notifications\\FriendRequest', 8, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"8","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:16:33', '2018-08-15 06:14:21', '2018-08-15 06:16:33'),
	('b8a939dc-6cd7-4443-a521-96e047d13bd8', 'App\\Notifications\\FriendRequest', 11, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"11","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:17:15', '2018-08-15 06:14:41', '2018-08-15 06:17:15'),
	('c34fe02e-0885-4784-b045-8d289c8c475b', 'App\\Notifications\\FriendRequest', 12, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"12","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:17:27', '2018-08-15 06:14:47', '2018-08-15 06:17:27'),
	('deffe99a-7a8f-492a-91ac-3b9156bbfc72', 'App\\Notifications\\FriendRequest', 10, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"10","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:16:59', '2018-08-15 06:14:33', '2018-08-15 06:16:59'),
	('e1120372-6260-428b-937e-f4ae8736efde', 'App\\Notifications\\FriendRequest', 13, 'App\\User', '{"message":"El usuario Gabriel Gonzalez Segura te ha enviado una solicitud de amistad","id_follower":"4","id_followed":"13","avatarSender":"public\\/zpDC39HUNIzrA3x9JuLWZ9r1bnAWxHTwKjCG2uZN.jpeg"}', '2018-08-15 06:17:39', '2018-08-15 06:14:52', '2018-08-15 06:17:39');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.publications_users
CREATE TABLE IF NOT EXISTS `publications_users` (
  `id_publication` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publication_text` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `url_image_publication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha_publ` datetime NOT NULL,
  PRIMARY KEY (`id_publication`),
  KEY `publications_users_id_user_foreign` (`id_user`),
  CONSTRAINT `publications_users_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.publications_users: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `publications_users` DISABLE KEYS */;
INSERT INTO `publications_users` (`id_publication`, `publication_text`, `id_user`, `url_image_publication`, `created_at`, `updated_at`, `fecha_publ`) VALUES
	(1, 'Experiencia PHP-LARAVEL, MYSQL, HTML, CSS, JQUERY, JSON, JAVA y Python en NexNews (5 meses):\r\n-Desarrollé nuevos módulos y mejoré los sistemas existentes en la empresa tanto en PHP y Laravel como en HTML, CSS, JQuery\r\n-Soporte de código a errores que ocurrían en producción.\r\n-Desarrollé rutinas en Python enfocadas al webscraping de redes sociales (Instagram y Twitter) mediante APIs y la validación de procesos que desarrollaban las aplicaciones en PHP y Laravel.\r\n-Analizar y entender la lógica de código PHP puro en aplicaciones antiguas para hacer la migración a Laravel 4.2 y Laravel 5.3\r\n-Realizar consultas de baja y mediana complejidad en MYSQL usando phpmyadmin, además de realizar tareas de administración de base de datos. \r\nExperiencia en desarrollos en PHP puro de forma freelance con posterior pago (6 meses):\r\n -Desarrollo completo de un sistema de asistencia de docentes (para un amigo que desarrollaba la tesis de ingeniería informática).\r\n -Arreglar y hacer funcionar una aplicación PHP que estaba incompleta de ventas e inventario en un almacén de Pirque.', 4, NULL, '2018-08-10 23:49:51', '2018-08-10 23:49:51', '2018-08-10 23:49:51'),
	(2, 'https://youtu.be/anXbqXFCy2c', 4, NULL, '2018-08-12 16:23:06', '2018-08-12 16:23:06', '2018-08-12 16:23:06'),
	(3, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/anXbqXFCy2c&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen&gt;&lt;/iframe&gt;', 4, NULL, '2018-08-12 16:24:08', '2018-08-12 16:24:08', '2018-08-12 16:24:08'),
	(4, '<iframe width="560" height="315" src="https://www.youtube.com/embed/anXbqXFCy2c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 4, NULL, '2018-08-12 22:12:29', '2018-08-12 22:12:29', '2018-08-12 22:12:29'),
	(5, 'Supermercado "avasallador" jaajajajaj\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/TnoPH524KZQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 4, NULL, '2018-08-12 22:15:09', '2018-08-12 22:15:09', '2018-08-12 22:15:09'),
	(6, 'Eres Prepago o tienes plan en otra compañía? 🤔 Portate a WOM 🔥 y conserva tu número o saca una línea nueva con número nuevo. Planes desde 9990 a 29990 despacho del chip a tu misma casa 🏡 totalmente gratis más un regalo sorpresa  🤫 primer pago en octubre 🎉EVALUO SOLO CON TU RUT Y NUMERO CELULAR 😎 Equipos en venta con atractivas opciones de financiamiento.', 4, 'public/rcNDsLBnrmGGTPex6o0x8oCZqwl7waDmLm1lCoSG.jpeg', '2018-08-16 12:15:09', '2018-08-16 12:15:09', '2018-08-16 12:15:09'),
	(7, 'Eres Prepago o tienes plan en otra compañía? 🤔 Portate a WOM 🔥 y conserva tu número o saca una línea nueva con número nuevo. Planes desde 9990 a 29990 despacho del chip a tu misma casa 🏡 totalmente gratis más un regalo sorpresa  🤫 primer pago en octubre 🎉EVALUO SOLO CON TU RUT Y NUMERO CELULAR 😎 Equipos en venta con atractivas opciones de financiamiento. Interesados por inbox o whatsapp al +56991462482', 4, NULL, '2018-08-16 12:16:24', '2018-08-16 12:16:24', '2018-08-16 12:16:24'),
	(8, 'gagonzasSocialNetwork\r\nMy project of social network with a chat, notifications about who see your profile and counter of visits, insert publications, customize your personal data and other news coming soon', 4, NULL, '2018-08-19 15:15:41', '2018-08-19 15:15:41', '2018-08-19 15:15:41');
/*!40000 ALTER TABLE `publications_users` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.users: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(4, 'Gabriel Gonzalez Segura', 'gabrielsegura974@gmail.com', '$2y$10$bv9TN0HYwELFhpbD3Bh.PeJn7Vav0LOL58SlCtGh8gZNl6eRXtkQS', 'a9ddbx6pkPWzid5Tg3JumptVgKCVhw2000q5WhOf5RdrjF7eQM1rtARLvoZv', '2018-07-25 01:41:16', '2018-07-25 01:41:16'),
	(5, 'Marcelo Gonzalez Segura', 'djgabitoxcientifico7@gmail.com', '$2y$10$3ycQC2HTf72r26TNUKc.tuI/jrnNB3RfosEwycm3Zn8F2HOkNdcf6', 'UN3MS9IXMRDqzwYxOawzlHVPxGSywzqHWM6hAK5ukVPoRqzaeLcvj1AbchZV', '2018-07-31 05:55:08', '2018-07-31 05:55:08'),
	(6, 'Nelson Segura', 'gabriel.gonzalez.s@consultor.wom.cl', '$2y$10$oOBm9i8Wn5hVq2ev.yd1t.JEMMS3yZXwUrG2pfiu1.4Dvmlxmcdi.', 'r0esHSCQuslNrgX9tmAQWykhUGcrGTHif8S9bsftwTAVAxbmwTVpaFiCgU9z', '2018-08-12 18:52:07', '2018-08-12 18:52:07'),
	(7, 'Usuario1', 'gabrielsegura9741@gmail.com', '$2y$10$iHr8yOD29vzHmIncjbbofuFhoVmZSz6c5Oe.4VCTVC5vY328hy9p6', 'SA44AKcD7BvKKBTTygj29vXtbINJrn2BbosXpiyxICinbhNVUzeosfzNRthQ', '2018-08-15 06:09:11', '2018-08-15 06:09:11'),
	(8, 'Usuario2', 'gabrielsegura9742@gmail.com', '$2y$10$0lS4pH.6cVlDh.Khq8.EiueyB5Gwz.2drIiI/8dkwsBELj8BXNEt6', 'N3KNH0GxvpGVUDfiGFsqo3I6zTgsEQvkpLkksw8F6RYrLJpaWhmhS2O8N9KG', '2018-08-15 06:09:39', '2018-08-15 06:09:39'),
	(9, 'Usuario3', 'gabrielsegura9743@gmail.com', '$2y$10$me4Q7k.nRH.Aj5ihn9i6MOvlHA6csp7hM0NmS0wCAU1Bx4h7Kdpk.', '8OBmoU57GRzD7L9X8NnFtxdlqlSU5X6ZSChNdj3D5Pv775ToSBHx68NV08vQ', '2018-08-15 06:09:58', '2018-08-15 06:09:58'),
	(10, 'Usuario4', 'gabrielsegura9744@gmail.com', '$2y$10$viNS2pNlkh63WqJEEF1dtO36ExRC5ko2WA/DcTSwtfuvhbiNsw5lu', 'z05loS2HjVpScYkLkrc90ek107eKQIQSESCzE3cWMk92d1iLA32I7lTHgLYS', '2018-08-15 06:10:16', '2018-08-15 06:10:16'),
	(11, 'Usuario5', 'gabrielsegura9745@gmail.com', '$2y$10$inFD6T3HxoN.jwVBwU4UEuszfAUVBylDGAn6Xj51KJ6rqig1XENre', 'lguDUls2HjJ98bfv4hBV2fPAF9G2bCAsWyiujXO1CmBhj1cWEkvW4hnKxB6Q', '2018-08-15 06:10:34', '2018-08-15 06:10:34'),
	(12, 'Usuario6', 'gabrielsegura9746@gmail.com', '$2y$10$0pUs7r/VUZfgVsnsuABC6OO3JTnoCFqBl3kWDHKCx6Kgm9C5bOhMG', 'VeNabWsD350duzIsGZ1w14onlfeNR7CeEY82dELU81WDBmFTp3lHb5my8BCi', '2018-08-15 06:10:52', '2018-08-15 06:10:52'),
	(13, 'Usuario7', 'gabrielsegura9747@gmail.com', '$2y$10$JjJ1Tc1h.qgHOtaO0GDNpO7eTJFIa/VGss7/rbFJe2IMOX0L7zOFK', 'niYIxnc5wS61T65E3QFnbW1028a9jccPRJqffcQBjX7Yg3o6FXfQpOhk8QhY', '2018-08-15 06:11:53', '2018-08-15 06:11:53'),
	(14, 'Usuario8', 'gabrielsegura9748@gmail.com', '$2y$10$kc5I10p7m938mhBtqbpsjey7G0k2zLuRV6Sub.SSTxJIp0taVCbZ6', 'GY6x3MBaaKErMJJsLJPfuYzxgZ17IiGqUwLGPjCyvSVego3Ts47XwvLnVzUl', '2018-08-15 06:12:07', '2018-08-15 06:12:07'),
	(15, 'Usuario9', 'gabrielsegura9749@gmail.com', '$2y$10$4hwAeaMKR6Jl6y0ylp7ve.ey49uW0Tl10bD/fdnzmMwd3NXI5yQEu', 'eJZsjemiGi85pF4T9NztcHwdSb9Omypd6ViUWjcbesHuinCY6pJHwn4U6cWR', '2018-08-15 06:15:30', '2018-08-15 06:15:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla friendbook.visitsuserfacecount
CREATE TABLE IF NOT EXISTS `visitsuserfacecount` (
  `id_user` int(10) unsigned NOT NULL,
  `visituserface_counter` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `visitsuserfacecount_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla friendbook.visitsuserfacecount: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `visitsuserfacecount` DISABLE KEYS */;
INSERT INTO `visitsuserfacecount` (`id_user`, `visituserface_counter`, `created_at`, `updated_at`) VALUES
	(4, 7, '2018-07-25 01:41:17', '2018-08-13 05:04:17'),
	(5, 11, '2018-07-31 05:55:08', '2018-08-13 04:37:57'),
	(6, 3, '2018-08-12 18:52:07', '2018-08-13 05:14:56'),
	(7, 0, '2018-08-15 06:09:11', '2018-08-15 06:09:11'),
	(8, 0, '2018-08-15 06:09:39', '2018-08-15 06:09:39'),
	(9, 0, '2018-08-15 06:09:58', '2018-08-15 06:09:58'),
	(10, 0, '2018-08-15 06:10:16', '2018-08-15 06:10:16'),
	(11, 0, '2018-08-15 06:10:34', '2018-08-15 06:10:34'),
	(12, 0, '2018-08-15 06:10:52', '2018-08-15 06:10:52'),
	(13, 0, '2018-08-15 06:11:53', '2018-08-15 06:11:53'),
	(14, 0, '2018-08-15 06:12:07', '2018-08-15 06:12:07'),
	(15, 0, '2018-08-15 06:15:30', '2018-08-15 06:15:30');
/*!40000 ALTER TABLE `visitsuserfacecount` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
