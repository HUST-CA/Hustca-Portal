-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
-- 服务器版本: 5.6.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_naihai`
--

-- --------------------------------------------------------

--
-- 表的结构 `hustca-apply_it`
--

CREATE TABLE IF NOT EXISTS `hustca-apply_it` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` char(30) NOT NULL,
  `major` char(20) NOT NULL,
  `apartment` char(10) NOT NULL,
  `building` char(10) NOT NULL,
  `room` char(10) NOT NULL,
  `it_group` char(10) NOT NULL,
  `experience` varchar(300) DEFAULT NULL,
  `excellent` varchar(150) DEFAULT NULL,
  `interest` varchar(150) DEFAULT NULL,
  `reason` varchar(400) NOT NULL,
  `applytime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--技术部报名' AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-corepair`
--

CREATE TABLE IF NOT EXISTS `hustca-corepair` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `major` varchar(20) NOT NULL,
  `apartment` varchar(20) NOT NULL,
  `building` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `experiences` varchar(100) NOT NULL,
  `applytime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--义务维修队报名' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-fk`
--

CREATE TABLE IF NOT EXISTS `hustca-fk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `complainment` varchar(2000) NOT NULL,
  `advice` varchar(2000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--反馈' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-huiyuan`
--

CREATE TABLE IF NOT EXISTS `hustca-huiyuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `major` varchar(20) NOT NULL,
  `class` varchar(15) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `groups` varchar(10) NOT NULL,
  `applytime` datetime NOT NULL,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--会员报名' AUTO_INCREMENT=53 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-lxwm`
--

CREATE TABLE IF NOT EXISTS `hustca-lxwm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `tel` char(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--联系我们' AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-staff`
--

CREATE TABLE IF NOT EXISTS `hustca-staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `major` varchar(40) NOT NULL,
  `apartment` varchar(20) NOT NULL,
  `building` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `groups` varchar(15) NOT NULL,
  `level` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `applytime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--部员申请' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-test`
--

CREATE TABLE IF NOT EXISTS `hustca-test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `major` varchar(20) NOT NULL,
  `class` varchar(15) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `groups` varchar(10) NOT NULL,
  `applytime` datetime NOT NULL,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--测试' AUTO_INCREMENT=53 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-tougao`
--

CREATE TABLE IF NOT EXISTS `hustca-tougao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(16) NOT NULL,
  `link` varchar(60) NOT NULL,
  `intro` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--资源投稿' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-ts`
--

CREATE TABLE IF NOT EXISTS `hustca-ts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` char(11) NOT NULL,
  `sex` char(6) NOT NULL,
  `complainment` varchar(1000) NOT NULL,
  `advice` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--投诉' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `hustca-webapply`
--

CREATE TABLE IF NOT EXISTS `hustca-webapply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `sex` char(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` char(30) NOT NULL,
  `major` char(20) NOT NULL,
  `it_group` char(3) NOT NULL,
  `experience` varchar(300) DEFAULT NULL,
  `excellent` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='官网--网管报名' AUTO_INCREMENT=28 ;
