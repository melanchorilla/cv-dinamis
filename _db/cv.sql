-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cv
CREATE DATABASE IF NOT EXISTS `cv` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cv`;

-- Dumping structure for table cv.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2020_06_28_094737_create_table_profile', 2),
	(4, '2020_06_28_111930_alter_table_profile', 3),
	(5, '2020_06_28_122244_create_table_pengalaman', 4),
	(6, '2020_06_28_143915_create_table_pengalaman', 5),
	(7, '2020_06_30_162929_create_table_skill', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table cv.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table cv.pendidikan
CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` datetime NOT NULL,
  `sampai` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.pendidikan: ~2 rows (approximately)
/*!40000 ALTER TABLE `pendidikan` DISABLE KEYS */;
INSERT INTO `pendidikan` (`id`, `nama`, `jurusan`, `deskripsi`, `dari`, `sampai`) VALUES
	(1, 'Universitas Komputer Indonesia (UNIKOM)', 'Manajemen Informatika (D3)', 'Lulus dengan Cumlaude (Lulusan terbaik)', '2015-07-01 00:00:00', '2019-03-01 00:00:00');
/*!40000 ALTER TABLE `pendidikan` ENABLE KEYS */;

-- Dumping structure for table cv.pengalaman
CREATE TABLE IF NOT EXISTS `pengalaman` (
  `pengalaman_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sampai` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pengalaman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.pengalaman: ~2 rows (approximately)
/*!40000 ALTER TABLE `pengalaman` DISABLE KEYS */;
INSERT INTO `pengalaman` (`pengalaman_id`, `nama`, `jabatan`, `deskripsi`, `dari`, `sampai`) VALUES
	(1, 'CV. Sankimo Okta Violet', 'Web Designer', 'Magang di CV. Sankimo Okta Violet dengan mendesain web penjualan', '2020-08-01', '2020-10-01'),
	(2, 'PT. Semoga Bahagia', 'Junior Web Programmer', 'Bidang Junior Programmer', '2020-06-01', 'Sekarang');
/*!40000 ALTER TABLE `pengalaman` ENABLE KEYS */;

-- Dumping structure for table cv.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.profile: ~1 rows (approximately)
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`id`, `nama`, `email`, `phone`, `alamat`, `photo`) VALUES
	(1, 'Dicky Kamaludin', 'dickykamaludin08@gmail.com', '082240080940', 'Garut, Jawa Barat', 'foto.jpg');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;

-- Dumping structure for table cv.skill
CREATE TABLE IF NOT EXISTS `skill` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.skill: ~0 rows (approximately)
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` (`id`, `description`, `skill`) VALUES
	(1, 'Description', 'HTML\r\nCSS');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;

-- Dumping structure for table cv.users
CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table cv.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@sangcahaya.com', NULL, '$2y$10$ILC30URvu2li0U7L2LDC6ePbS6r95Rw98cL0phWzQy4zK8jwlfpfu', NULL, '2020-06-28 09:22:39', '2020-06-28 09:22:39'),
	(2, 'Dicky', 'dickykamaludin08@gmail.com', NULL, '$2y$10$H2Un8FBprwASBcjcVGCSr.GEoG1xA1GzL9h9aPILrvBSyDxFh119O', NULL, '2020-06-28 09:24:23', '2020-06-28 09:24:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
