/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100132
Source Host           : localhost:3306
Source Database       : swiss

Target Server Type    : MYSQL
Target Server Version : 100132
File Encoding         : 65001

Date: 2018-11-30 23:12:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_11_29_122701_create_about_us_table', '1');
INSERT INTO `migrations` VALUES ('4', '2018_11_30_161618_create_mission_vision_table', '2');

-- ----------------------------
-- Table structure for mission_vision
-- ----------------------------
DROP TABLE IF EXISTS `mission_vision`;
CREATE TABLE `mission_vision` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_de` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_it` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_es` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of mission_vision
-- ----------------------------
INSERT INTO `mission_vision` VALUES ('1', '01', '<p>proba</p>\r\n<p>&nbsp;</p>\r\n<p>aaaa</p>', '<p>proba1</p>', '<p>proba1</p>', '<p>proba1</p>', '<p>proba1</p>', '0000-00-00 00:00:00', '2018-11-30 18:21:59');
INSERT INTO `mission_vision` VALUES ('2', '02', 'proba2', 'proba2', 'proba2', 'proba2', 'proba2', null, null);
INSERT INTO `mission_vision` VALUES ('3', '03', 'proba3', 'proba3', 'proba3', 'proba3', 'proba3', null, null);
INSERT INTO `mission_vision` VALUES ('4', '04', 'proba4', 'proba4', 'proba4', 'proba4', 'proba4', null, null);

-- ----------------------------
-- Table structure for one_row_page
-- ----------------------------
DROP TABLE IF EXISTS `one_row_page`;
CREATE TABLE `one_row_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_de` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_it` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_es` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_de` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_it` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_es` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of one_row_page
-- ----------------------------
INSERT INTO `one_row_page` VALUES ('1', 'aboutUs', 'Header eng', 'Header de', 'Header fra', 'Header italy', 'Header es', '<p>je</p>\r\n<p>l</p>\r\n<p>&nbsp;</p>\r\n<p>radi</p>\r\n<p>&nbsp;</p>\r\n<p>brejk</p>', '<p style=\"color: #000000;\">body de</p>', '<p style=\"color: #000000;\">body fra</p>', '<p style=\"color: #000000;\">body it</p>', '<p style=\"color: #000000;\">body espana</p>', '', null, '2018-11-30 17:53:50');
INSERT INTO `one_row_page` VALUES ('2', 'service', null, null, null, null, null, '<p>proba</p>', '<p>aaaa</p>', '<p>aaa</p>', '<p>aaa</p>', '<p>aaa</p>', '', null, '2018-11-30 19:07:51');

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES ('1', 'app', '/img/partners/1543612600app.png', 'https://www.apple.com/', '2018-11-30 21:16:40', '2018-11-30 21:55:21');
INSERT INTO `partners` VALUES ('5', 'firefox', '/img/partners/1543614815firefox.png', 'https://www.mozilla.org/', '2018-11-30 21:53:35', '2018-11-30 21:55:42');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'test', 'a@a.com', null, '$2y$10$JbNUq9p.bl5Rv.Q1ED/tWeDJNWyUkTRVOQqJHTuUQNm5cwR3UQcpK', null, '2018-11-29 11:24:37', '2018-11-29 11:24:37');
