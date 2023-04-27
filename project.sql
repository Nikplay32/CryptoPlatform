-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.30 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project`;

-- Дамп структуры для таблица project.subscriptions
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `card_number` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы project.subscriptions: ~2 rows (приблизительно)
INSERT INTO `subscriptions` (`id`, `user_id`, `card_number`, `full_name`, `type`) VALUES
	(23, 16, '56748392', 'test', 'Month subscription'),
	(24, 20, '487652625', 'test7', 'Year subscription'),
	(25, 23, '12345', 'Nick', 'Month subscription');

-- Дамп структуры для таблица project.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Type_ID` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы project.users: ~9 rows (приблизительно)
INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `Type_ID`) VALUES
	(6, 'Nick', 'nick', 'nick@gmail.com', '6512', 1),
	(13, 'nick', 'papito', 'pap@gmail.com', '202', 2),
	(15, 'Joshua', 'josh', 'josh@gmail.com', '827', 2),
	(17, 'test2', 'test2', 'test2@gmail.com', '202', 2),
	(18, 'test3', 'test3', 'test3@gmail.com', '81', 2),
	(19, 'test5', 'test5', 'test5@gmail.com', '827', 2),
	(20, 'test7', 'test7', 'test7@gmail.com', '698', 2),
	(21, 'test9', 'test9', 'test9@gmail.com', '202', 2),
	(22, 'nick', 'nick', 'nick@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 2),
	(23, 'test99', 'test99', 'test99@gmail.com', '202cb962ac59075b964b07152d234b70', 2);

-- Дамп структуры для таблица project.userstype
CREATE TABLE IF NOT EXISTS `userstype` (
  `uTypeId` int NOT NULL AUTO_INCREMENT,
  `Type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`uTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы project.userstype: ~2 rows (приблизительно)
INSERT INTO `userstype` (`uTypeId`, `Type`) VALUES
	(1, 'admin'),
	(2, 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
