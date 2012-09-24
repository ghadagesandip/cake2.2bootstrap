-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2012 at 02:44 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.5-1ubuntu7.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sandip`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `department_name` (`department_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `slug`, `created`, `modified`) VALUES
(1, 'PIMS', 'pims', '2012-08-25 19:32:21', '2012-08-27 12:12:09'),
(2, 'Supplier', 'd', '2012-08-25 19:34:44', '2012-08-25 19:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_name` (`group_name`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `slug`, `created`, `modified`) VALUES
(1, 'Admin', 'admin', '2012-08-25 12:04:31', '2012-08-27 13:33:11'),
(2, 'Manager', 'manager', '2012-08-25 12:04:41', '2012-08-27 12:28:39'),
(3, 'Staff Member', 'staff_member', '2012-08-25 12:05:06', '2012-08-25 12:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `temporary_password` varchar(255) DEFAULT NULL,
  `performance_points` int(11) DEFAULT NULL,
  `signature_image` varchar(255) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `telephone_no` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `last_signed_in` datetime DEFAULT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `map_address` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `department_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `profile_image`, `date_of_birth`, `gender`, `email_address`, `contact_number`, `address`, `temporary_password`, `performance_points`, `signature_image`, `fax`, `telephone_no`, `is_active`, `is_deleted`, `last_signed_in`, `latitude`, `longitude`, `map_address`, `created`, `modified`) VALUES
(1, 1, 1, 'sandip', '358c31dba0ddf74935a02542b3208e2aa6564a71', 'Sandip', '', 'Ghadge', '', '2032-08-25', 'Male', 'ghadagesandip@gmail.com', '', 'tulshetpada,bhandup', NULL, NULL, '', NULL, '', 0, 0, NULL, 19, 19, 'Link Rd, Khindipada, Mulund West, Mumbai, Maharashtra, India', '2012-08-25 17:03:19', '2012-08-25 18:17:11'),
(2, 3, 1, 'sandipk', '79fffa3c0572b772e53aef01c055b665463f67b6', 'Sandip', '', 'Karanjekar', NULL, '1990-08-25', 'Male', 'sandip.karanjekar@gmail.com', '', 'ulhasnagar  ', NULL, NULL, NULL, NULL, '', 0, 0, NULL, 19, 19, 'ashale gaon Rd, Vitthalwadi, Ulhasnagar, Maharashtra, India', '2012-08-25 18:27:10', '2012-08-25 18:27:10');
