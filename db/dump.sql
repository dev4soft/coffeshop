-- --------------------------------------------------------
-- ����:                         192.168.30.223
-- ������ �������:               10.5.18-MariaDB-log - Source distribution
-- ������������ �������:         Linux
-- HeidiSQL ������:              12.4.0.6670
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- ���� ��������� ��� ������� coffeshop.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `link` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.category: ~3 rows (��������������)
REPLACE INTO `category` (`category_id`, `category_name`, `link`) VALUES
	(1, '����', '#coffee'),
	(2, '���', '#tea'),
	(3, '�������', '#desert');

-- ���� ��������� ��� ������� coffeshop.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `dt_tm` datetime DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.orders: ~1 rows (��������������)
REPLACE INTO `orders` (`order_id`, `user_id`, `status_id`, `dt_tm`, `address`, `phone`, `comments`) VALUES
	(1, 4, 1, NULL, NULL, NULL, NULL);

-- ���� ��������� ��� ������� coffeshop.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `trait_id` tinyint(3) unsigned NOT NULL,
  `title_id` smallint(5) unsigned NOT NULL,
  `cost` decimal(10,2) unsigned NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `trait_id` (`trait_id`,`title_id`),
  KEY `FK_product_title` (`title_id`),
  CONSTRAINT `FK_product_title` FOREIGN KEY (`title_id`) REFERENCES `title` (`title_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_product_trait` FOREIGN KEY (`trait_id`) REFERENCES `trait` (`trait_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.product: ~42 rows (��������������)
REPLACE INTO `product` (`product_id`, `trait_id`, `title_id`, `cost`) VALUES
	(1, 1, 1, 80.00),
	(2, 2, 1, 90.00),
	(3, 3, 1, 100.00),
	(4, 1, 2, 75.00),
	(5, 2, 2, 80.00),
	(6, 3, 2, 85.00),
	(7, 1, 3, 60.00),
	(8, 2, 3, 80.00),
	(9, 3, 3, 100.00),
	(10, 1, 4, 65.00),
	(11, 2, 4, 75.00),
	(12, 3, 4, 85.00),
	(13, 1, 5, 85.00),
	(14, 2, 5, 90.00),
	(15, 3, 5, 95.00),
	(16, 1, 6, 80.00),
	(17, 2, 6, 100.00),
	(18, 3, 6, 120.00),
	(19, 2, 7, 50.00),
	(20, 3, 7, 70.00),
	(21, 2, 8, 60.00),
	(22, 3, 8, 80.00),
	(23, 2, 9, 55.00),
	(24, 3, 9, 60.00),
	(25, 2, 10, 70.00),
	(26, 3, 10, 80.00),
	(27, 2, 11, 40.00),
	(28, 3, 11, 50.00),
	(29, 2, 12, 55.00),
	(30, 3, 12, 75.00),
	(31, 4, 13, 80.00),
	(32, 5, 13, 100.00),
	(33, 4, 14, 60.00),
	(34, 5, 14, 70.00),
	(35, 4, 15, 55.00),
	(36, 5, 15, 85.00),
	(37, 4, 16, 90.00),
	(38, 5, 16, 120.00),
	(39, 4, 17, 100.00),
	(40, 5, 17, 150.00),
	(41, 4, 18, 90.00),
	(42, 5, 18, 120.00);

-- ���� ��������� ��� ������� coffeshop.product_orders
DROP TABLE IF EXISTS `product_orders`;
CREATE TABLE IF NOT EXISTS `product_orders` (
  `order_id` int(10) unsigned NOT NULL,
  `product_id` smallint(5) unsigned NOT NULL,
  `quantity` smallint(5) unsigned NOT NULL DEFAULT 1,
  `cost` decimal(10,2) unsigned NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.product_orders: ~1 rows (��������������)
REPLACE INTO `product_orders` (`order_id`, `product_id`, `quantity`, `cost`) VALUES
	(1, 4, 1, 75.00);

-- ���� ��������� ��� ������� coffeshop.status
DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.status: ~3 rows (��������������)
REPLACE INTO `status` (`status_id`, `status_name`) VALUES
	(3, '��������'),
	(2, '��������'),
	(1, '�� �����������');

-- ���� ��������� ��� ������� coffeshop.title
DROP TABLE IF EXISTS `title`;
CREATE TABLE IF NOT EXISTS `title` (
  `title_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title_name` varchar(50) NOT NULL,
  `category_id` tinyint(3) unsigned NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`title_id`),
  UNIQUE KEY `title_name` (`title_name`),
  KEY `FK_title_category` (`category_id`),
  CONSTRAINT `FK_title_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.title: ~18 rows (��������������)
REPLACE INTO `title` (`title_id`, `title_name`, `category_id`, `image`) VALUES
	(1, '�����', 1, NULL),
	(2, '��������', 1, NULL),
	(3, '��������', 1, NULL),
	(4, '���������', 1, NULL),
	(5, '�����', 1, NULL),
	(6, '���������', 1, NULL),
	(7, '��� � �������', 2, NULL),
	(8, '��������� ���', 2, NULL),
	(9, '������ ���', 2, NULL),
	(10, '����� ���', 2, NULL),
	(11, '������� ���', 2, NULL),
	(12, '����', 2, NULL),
	(13, '��������', 3, NULL),
	(14, '�������', 3, NULL),
	(15, '����', 3, NULL),
	(16, '����� �����', 3, NULL),
	(17, '��������', 3, NULL),
	(18, '������', 3, NULL);

-- ���� ��������� ��� ������� coffeshop.trait
DROP TABLE IF EXISTS `trait`;
CREATE TABLE IF NOT EXISTS `trait` (
  `trait_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `trait_name` varchar(50) NOT NULL,
  PRIMARY KEY (`trait_id`),
  UNIQUE KEY `trait_name` (`trait_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.trait: ~5 rows (��������������)
REPLACE INTO `trait` (`trait_id`, `trait_name`) VALUES
	(4, '100 �'),
	(5, '200 �'),
	(1, '200 ��'),
	(2, '300 ��'),
	(3, '400 ��');

-- ���� ��������� ��� ������� coffeshop.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `key` varchar(50) DEFAULT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ���� ������ ������� coffeshop.users: ~6 rows (��������������)
REPLACE INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `key`, `active`) VALUES
	(1, '1', '1', '1', '1', NULL, 0),
	(3, '1', '1', '2@ru.ru', '$2y$10$z2m0Kk2FfYF1cZRO8e9CvO.5mcH2wtp/SzyFJ8EiymyoBQfE37Voe', NULL, 0),
	(4, 'test', 'test', 'my@mail.ru', '$2y$10$gGXDDSJZu8NVLPju5Id6bei2vgO7yQ7aTiU1K22T/t8MM75zjlp9e', NULL, 0),
	(6, '12', '12', 'm1@mail.ru', '$2y$10$JGtG1WNMIbdNNqPe5rUvr.84LRpa0G0Uz.jXo7QL9vWkMwj1aB58K', NULL, 0),
	(7, '12', '12', 'm2@mail.ru', '$2y$10$3.8Y5JFdJ3ANJDbrMVGyrO99vOn5hDgV8vitbFngmYR3zQm4CLeaW', NULL, 0),
	(8, '12', '12', 'm3@mail.ru', '$2y$10$uwdDT7zYipXa53rOFsCM6egq.qMf9Ptksp2zznAGbrk2qZ5t.NFRq', NULL, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
