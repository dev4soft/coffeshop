-- --------------------------------------------------------
-- Хост:                         192.168.30.223
-- Версия сервера:               10.5.18-MariaDB-log - Source distribution
-- Операционная система:         Linux
-- HeidiSQL Версия:              12.4.0.6670
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица coffeshop.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `link` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Дамп данных таблицы coffeshop.category: ~3 rows (приблизительно)
REPLACE INTO `category` (`category_id`, `category_name`, `link`) VALUES
	(1, 'Кофе', '#coffee'),
	(2, 'Чай', '#tea'),
	(3, 'Десерты', '#desert');

-- Дамп структуры для таблица coffeshop.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `dt_tm` datetime DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `FK_orders_users` (`user_id`),
  KEY `FK_orders_status` (`status_id`),
  CONSTRAINT `FK_orders_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Дамп данных таблицы coffeshop.orders: ~0 rows (приблизительно)
REPLACE INTO `orders` (`order_id`, `user_id`, `status_id`, `dt_tm`, `address`, `phone`, `comments`) VALUES
	(1, 4, 1, NULL, NULL, NULL, NULL);

-- Дамп структуры для таблица coffeshop.product
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

-- Дамп данных таблицы coffeshop.product: ~28 rows (приблизительно)
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
	(19, 2, 7, 50.00),
	(20, 3, 7, 70.00),
	(21, 2, 8, 60.00),
	(22, 3, 8, 80.00),
	(23, 2, 9, 55.00),
	(24, 3, 9, 60.00),
	(25, 2, 10, 70.00),
	(26, 3, 10, 80.00),
	(31, 4, 13, 80.00),
	(32, 5, 13, 100.00),
	(33, 4, 14, 60.00),
	(34, 5, 14, 70.00),
	(37, 4, 16, 90.00),
	(38, 5, 16, 120.00),
	(41, 4, 18, 90.00),
	(42, 5, 18, 120.00);

-- Дамп структуры для таблица coffeshop.product_orders
DROP TABLE IF EXISTS `product_orders`;
CREATE TABLE IF NOT EXISTS `product_orders` (
  `product_order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` smallint(5) unsigned NOT NULL,
  `quantity` smallint(5) unsigned NOT NULL DEFAULT 1,
  `cost` decimal(10,2) unsigned NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`product_order_id`) USING BTREE,
  UNIQUE KEY `order_id` (`order_id`,`product_id`),
  KEY `FK_product_orders_product` (`product_id`),
  CONSTRAINT `FK_product_orders_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_product_orders_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Дамп данных таблицы coffeshop.product_orders: ~3 rows (приблизительно)
REPLACE INTO `product_orders` (`product_order_id`, `order_id`, `product_id`, `quantity`, `cost`) VALUES
	(1, 1, 1, 1, 80.00),
	(2, 1, 10, 3, 65.00),
	(3, 1, 42, 1, 120.00),
	(4, 1, 21, 1, 60.00);

-- Дамп структуры для таблица coffeshop.status
DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Дамп данных таблицы coffeshop.status: ~3 rows (приблизительно)
REPLACE INTO `status` (`status_id`, `status_name`) VALUES
	(3, 'выполнен'),
	(2, 'доставка'),
	(1, 'не оформленный');

-- Дамп структуры для таблица coffeshop.title
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

-- Дамп данных таблицы coffeshop.title: ~12 rows (приблизительно)
REPLACE INTO `title` (`title_id`, `title_name`, `category_id`, `image`) VALUES
	(1, 'Латте', 1, '/resource/images/slides/lat.jpg'),
	(2, 'Капучино', 1, '/resource/images/slides/cap.jpg'),
	(3, 'Эспрессо', 1, '/resource/images/slides/es.jpg'),
	(4, 'Американо', 1, '/resource/images/slides/am.jpg'),
	(7, 'Чай с молоком', 2, '/resource/images/slides/bm.jpg'),
	(8, 'Фруктовый час', 2, '/resource/images/slides/ft.jpg'),
	(9, 'Черный чай', 2, '/resource/images/slides/bt.jpg'),
	(10, 'Зеленый чай', 2, '/resource/images/slides/gt.jpg'),
	(13, 'Десерт Ягодный', 3, '/resource/images/slides/dya.jpg'),
	(14, 'Кофейно-шоколадный', 3, '/resource/images/slides/ksh.jpg'),
	(16, 'Панна котта', 3, '/resource/images/slides/pk.jpg'),
	(18, 'Карамельно-банановый', 3, '/resource/images/slides/kb.jpg');

-- Дамп структуры для таблица coffeshop.trait
DROP TABLE IF EXISTS `trait`;
CREATE TABLE IF NOT EXISTS `trait` (
  `trait_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `trait_name` varchar(50) NOT NULL,
  PRIMARY KEY (`trait_id`),
  UNIQUE KEY `trait_name` (`trait_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Дамп данных таблицы coffeshop.trait: ~5 rows (приблизительно)
REPLACE INTO `trait` (`trait_id`, `trait_name`) VALUES
	(4, '100 г'),
	(5, '200 г'),
	(1, '200 мл'),
	(2, '300 мл'),
	(3, '400 мл');

-- Дамп структуры для таблица coffeshop.users
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

-- Дамп данных таблицы coffeshop.users: ~6 rows (приблизительно)
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
