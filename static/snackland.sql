-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2022 at 05:24 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snackland`
--
CREATE DATABASE IF NOT EXISTS `snackland` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `snackland`;

-- --------------------------------------------------------

--
-- Table structure for table `broodjes`
--

DROP TABLE IF EXISTS `broodjes`;
CREATE TABLE IF NOT EXISTS `broodjes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `broodjes`
--

INSERT INTO `broodjes` (`id`, `name`, `price`, `description`) VALUES
(1, 'Kaas', '3.50', NULL),
(2, 'Beenham', '3.30', NULL),
(3, 'Gezond', '4.00', NULL),
(4, 'Fricandeau', '3.05', NULL),
(5, 'Filet americain', '3.10', NULL),
(6, 'Gekookt ei', '3.00', NULL),
(7, 'Gebakken ei', '3.00', NULL),
(8, 'Ei en tomaat', '3.25', NULL),
(9, 'Tartaar', '4.00', NULL),
(10, 'Tartaar speciaal', '4.25', 'gekookt ei en ui'),
(11, 'Gehaktbal', '4.10', NULL),
(12, 'Warm vlees', '4.50', NULL),
(13, 'Warme beenham', '4.00', 'met honing-mosterd saus');

-- --------------------------------------------------------

--
-- Table structure for table `dranken`
--

DROP TABLE IF EXISTS `dranken`;
CREATE TABLE IF NOT EXISTS `dranken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dranken`
--

INSERT INTO `dranken` (`id`, `name`, `price`, `description`) VALUES
(1, 'Blikje frisdrank', '2.60', NULL),
(2, 'Flesje water', '2.70', NULL),
(3, 'Verse jus klein', '2.80', NULL),
(4, 'Verse jus groot', '3.30', NULL),
(5, 'Blikje bier', '2.90', NULL),
(6, 'Blikje bier 0.0%', '2.90', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hamburgers`
--

DROP TABLE IF EXISTS `hamburgers`;
CREATE TABLE IF NOT EXISTS `hamburgers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='			';

--
-- Dumping data for table `hamburgers`
--

INSERT INTO `hamburgers` (`id`, `name`, `price`, `description`) VALUES
(1, 'Hamburger', '4.25', NULL),
(2, 'Kaasburger', '4.45', NULL),
(3, 'Baconburger', '4.65', NULL),
(4, 'Baconburger kaas', '4.75', 'burger met bacon en kaas'),
(5, 'Ei burger', '4.45', NULL),
(6, 'Gio burger', '4.85', 'burger met bacon, kaas en ei'),
(7, 'Hawaï burger', '4.55', NULL),
(8, 'Snackland burger', '5.45', 'dubbele burger'),
(9, 'Luxe burger', '4.40', 'burger met champignons en ui');

-- --------------------------------------------------------

--
-- Table structure for table `ijs`
--

DROP TABLE IF EXISTS `ijs`;
CREATE TABLE IF NOT EXISTS `ijs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ijs`
--

INSERT INTO `ijs` (`id`, `name`, `price`, `description`) VALUES
(6, 'Radartoren', '2.00', NULL),
(7, 'Oubliehoorn', '2.80', NULL),
(8, 'Koekbeker', '2.80', NULL),
(9, 'Bakje ijs', '1.80', NULL),
(10, 'Nootjes of discodip', '0.80', NULL),
(11, 'Waterijs', '0.50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kindermenu`
--

DROP TABLE IF EXISTS `kindermenu`;
CREATE TABLE IF NOT EXISTS `kindermenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kindermenu`
--

INSERT INTO `kindermenu` (`id`, `name`, `price`, `description`) VALUES
(1, 'Frikandel', '5.80', NULL),
(2, 'Kroket', '5.80', NULL),
(3, 'Kipnuggets', '5.80', '4 stuks'),
(4, 'Shoarma', '7.80', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kip`
--

DROP TABLE IF EXISTS `kip`;
CREATE TABLE IF NOT EXISTS `kip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kip`
--

INSERT INTO `kip` (`id`, `name`, `price`, `description`) VALUES
(1, 'Kipburger', '3.80', NULL),
(2, 'Kipburger kaas', '4.20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `description`) VALUES
(1, 'Shoarma', '16.45', 'met kaas'),
(2, 'Shoarma speciaal', '16.45', NULL),
(3, 'Shoarma hawaï', '16.45', 'met gebakken groenten'),
(4, 'Shoarma gio', '15.70', NULL),
(5, 'Lamskotelet', '17.45', NULL),
(6, 'Kebab', '14.45', NULL),
(7, 'Shoarma-kebab', '16.45', NULL),
(8, 'Shoarma-shaslick', '16.45', NULL),
(9, 'Shoarma-spareribs', '20.45', NULL),
(10, 'Kipfilet', '14.70', NULL),
(11, 'Shaslick', '14.45', NULL),
(12, 'Halve kip uit de frituur', '12.45', NULL),
(13, 'Halve kip van de grill', '12.45', NULL),
(14, 'Loempia speciaal', '11.45', 'met ham, ei en satésaus'),
(15, 'T-bone', '24.85', NULL),
(16, 'Biefstuk', '16.85', NULL),
(17, 'Entrecote', '17.85', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `milkshakes`
--

DROP TABLE IF EXISTS `milkshakes`;
CREATE TABLE IF NOT EXISTS `milkshakes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `milkshakes`
--

INSERT INTO `milkshakes` (`id`, `name`, `price`, `description`) VALUES
(1, 'Klein', '2.70', NULL),
(2, 'Middel', '3.15', NULL),
(3, 'Groot', '3.60', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasta`
--

DROP TABLE IF EXISTS `pasta`;
CREATE TABLE IF NOT EXISTS `pasta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasta`
--

INSERT INTO `pasta` (`id`, `name`, `price`, `description`) VALUES
(1, 'Bolognese', '8.85', NULL),
(2, 'Tonno', '9.60', NULL),
(3, 'Gorgonzola', '9.60', NULL),
(4, 'Quattro formaggi', '9.60', NULL),
(5, 'Carbonara', '10.60', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patat`
--

DROP TABLE IF EXISTS `patat`;
CREATE TABLE IF NOT EXISTS `patat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patat`
--

INSERT INTO `patat` (`id`, `name`, `price`, `description`) VALUES
(1, 'Patat', '3.00', NULL),
(2, 'Patat Shoarma', '8.75', 'met saus en salade'),
(3, 'Kapsalon', '8.75', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pita`
--

DROP TABLE IF EXISTS `pita`;
CREATE TABLE IF NOT EXISTS `pita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pita`
--

INSERT INTO `pita` (`id`, `name`, `price`, `description`) VALUES
(1, 'Kaas', '3.30', NULL),
(2, 'Ham en kaas', '4.10', NULL),
(3, 'Hawaï', '4.30', NULL),
(4, 'Shoarma klein', '7.15', NULL),
(5, 'Shoarma medium', '8.15', NULL),
(6, 'Shoarma groot', '9.15', NULL),
(7, 'Shoarma speciaal', '9.25', 'met kaas'),
(8, 'Kebab klein', '7.80', NULL),
(9, 'Kebab groot', '9.80', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `price`, `description`) VALUES
(1, 'Met sla en saus', '3.95', NULL),
(2, 'Met kaas, sla en saus', '5.20', NULL),
(3, 'Met shoarma', '8.20', NULL),
(4, 'Speciaal met kaas', '8.20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `porties`
--

DROP TABLE IF EXISTS `porties`;
CREATE TABLE IF NOT EXISTS `porties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `porties`
--

INSERT INTO `porties` (`id`, `name`, `price`, `description`) VALUES
(1, 'Kipsaté', '8.70', NULL),
(2, 'Saté van de haas', '8.70', NULL),
(3, 'Halve kip uit de frituur', '8.20', NULL),
(4, 'Halve kip van de grill', '8.20', NULL),
(5, 'Loempia speciaal', '6.75', NULL),
(6, 'Karbonade', '4.55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sauzen`
--

DROP TABLE IF EXISTS `sauzen`;
CREATE TABLE IF NOT EXISTS `sauzen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sauzen`
--

INSERT INTO `sauzen` (`id`, `name`, `price`, `description`) VALUES
(1, 'Fritessaus', '1.10', NULL),
(2, 'Ketchup', '1.10', NULL),
(3, 'Curry', '1.10', NULL),
(4, 'Knoflooksaus', '1.20', NULL),
(5, 'Joppiesaus', '1.20', NULL),
(6, 'Satésaus', '1.20', NULL),
(7, 'Speciaal curry', '1.40', NULL),
(8, 'Speciaal ketchup', '1.40', NULL),
(9, 'Oorlog', '1.40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `smoothies`
--

DROP TABLE IF EXISTS `smoothies`;
CREATE TABLE IF NOT EXISTS `smoothies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smoothies`
--

INSERT INTO `smoothies` (`id`, `name`, `price`, `description`) VALUES
(1, 'Aardbei/ banaan', '4.50', NULL),
(2, 'Ananas/ mango', '4.50', NULL),
(3, 'Mango/ banaan', '4.50', NULL),
(4, 'Mango/ aardbei', '4.50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

DROP TABLE IF EXISTS `snacks`;
CREATE TABLE IF NOT EXISTS `snacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `name`, `price`, `description`) VALUES
(1, 'Frikandel', '2.50', NULL),
(2, 'Kaassoufflé', '2.60', NULL),
(3, 'Ham-kaassoufflé', '2.80', NULL),
(4, 'Rund vleeskroket', '2.75', NULL),
(5, 'Kalfs vleeskroket', '2.75', NULL),
(6, 'Saté kroket', '2.65', NULL),
(7, 'Goulash kroket', '2.75', NULL),
(8, 'Groenten kroket', '2.70', NULL),
(9, 'Kwekkeboom kroket', '2.80', NULL),
(10, 'Van Dobben kroket', '2.80', NULL),
(11, 'Bonita', '2.50', NULL),
(12, 'Kipcorn', '2.95', NULL),
(13, 'Mexicano', '3.40', NULL),
(14, 'Pikanto', '3.40', NULL),
(15, 'Berehap', '3.90', NULL),
(16, 'Bamischijf', '2.60', NULL),
(17, 'Nasischijf', '2.60', NULL),
(18, 'Gehaktbal', '3.40', NULL),
(19, 'Smulrol', '3.20', NULL),
(20, 'Shoarmarol', '3.30', NULL),
(21, 'Sitostick', '3.20', NULL),
(22, 'Loempia', '3.90', NULL),
(23, 'Vegetarische loempia', '4.15', NULL),
(24, 'Kipnuggets', '3.55', '6 stuks'),
(25, 'Kaasstengels', '5.70', '6 stuks'),
(26, 'Vlammetjes', '3.90', '6 stuks'),
(27, 'Bitterballen', '3.85', '6 stuks'),
(28, 'Mini kaassoufflés', '3.90', '6 stuks'),
(29, 'Chickenstrips', '4.40', '4 stuks'),
(30, 'Minisnacks', '5.80', '10 stuks');

-- --------------------------------------------------------

--
-- Table structure for table `specialiteiten`
--

DROP TABLE IF EXISTS `specialiteiten`;
CREATE TABLE IF NOT EXISTS `specialiteiten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialiteiten`
--

INSERT INTO `specialiteiten` (`id`, `name`, `price`, `description`) VALUES
(1, 'Spareribs', '22.95', 'Argentijns gemarineerd'),
(2, 'Spareribs hot', '22.95', 'Argentijns hot gemarineerd'),
(3, '1.5 Spareribs', '35.75', NULL),
(4, 'Kipsaté', '13.90', '3 spiezen kipfilet met satésaus'),
(5, 'Saté van de haas', '15.65', '3 spiezen varkenshaas met satésaus'),
(6, 'Mixed grill', '24.00', 'shoarma, kebab, lamscotelet en spareribs'),
(7, 'Mixed grill (2 p)', '43.45', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
