-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 25 ต.ค. 2013  น.
-- รุ่นของเซิร์ฟเวอร์: 5.1.37
-- รุ่นของ PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `it_techz`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `itt_article`
--

DROP TABLE IF EXISTS `itt_article`;
CREATE TABLE IF NOT EXISTS `itt_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `intro_text` text NOT NULL,
  `full_text` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL COMMENT 'name of images',
  `meta_desc` varchar(1024) DEFAULT NULL,
  `meta_key` varchar(1024) DEFAULT NULL,
  `meta_data` varchar(2048) DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- dump ตาราง `itt_article`
--


-- --------------------------------------------------------

--
-- โครงสร้างตาราง `itt_category`
--

DROP TABLE IF EXISTS `itt_category`;
CREATE TABLE IF NOT EXISTS `itt_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parrent_id` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `name` char(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL COMMENT 'name of images',
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `meta_desc` varchar(1024) NOT NULL,
  `meta_key` varchar(1024) NOT NULL,
  `meta_data` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- dump ตาราง `itt_category`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
