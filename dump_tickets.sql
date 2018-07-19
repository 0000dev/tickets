-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text,
  `image` varchar(250) DEFAULT NULL,
  `tm_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `artists_schedule`;
CREATE TABLE `artists_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artists_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `update_trigger` int(11) DEFAULT NULL,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `artists_id` (`artists_id`),
  CONSTRAINT `artists_schedule_ibfk_2` FOREIGN KEY (`artists_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_names_id` int(11) NOT NULL,
  `artists_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_names_id` (`categories_names_id`),
  KEY `artists_id` (`artists_id`),
  CONSTRAINT `categories_ibfk_8` FOREIGN KEY (`categories_names_id`) REFERENCES `categories_names` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `categories_ibfk_9` FOREIGN KEY (`artists_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `categories_names`;
CREATE TABLE `categories_names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artists_id` int(11) NOT NULL,
  `title` text,
  `text` text,
  `comment_details_id` int(11) DEFAULT NULL,
  `author` text,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `artists_id` (`artists_id`),
  KEY `comment_details_id` (`comment_details_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`artists_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_ibfk_4` FOREIGN KEY (`comment_details_id`) REFERENCES `comment_details` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `comment_details`;
CREATE TABLE `comment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artists_id` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artists_id` (`artists_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`artists_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `venues`;
CREATE TABLE `venues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `image_small` varchar(250) DEFAULT NULL,
  `image_big` varchar(250) DEFAULT NULL,
  `address` text,
  `details` text,
  `tm_id` int(11) DEFAULT NULL,
  `tm_api_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `venues_schedule`;
CREATE TABLE `venues_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venues_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `update_trigger` int(11) DEFAULT NULL,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `artists_id` (`venues_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2018-07-19 15:50:03
