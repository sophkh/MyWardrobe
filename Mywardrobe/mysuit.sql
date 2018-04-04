-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 11:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysuit`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`serial`, `name`, `email`, `appointment_date`, `appointment_time`, `type`, `location`, `phone`, `comment`, `status`, `user_id`) VALUES
(13, 'Sophia Khan', 'sophia.sag27@gmail.com', '0000-00-00', '12:15:00', 'Picking up my First Suit', 'Westchester Mall - NY', '7737393589', 'I would like to set up an appointment', 'inactive', 1),
(14, 'Sophia Khan', 'sophia.sag27@gmail.com', '2016-08-15', '12:00:00', 'First Measurement', 'Westchester Mall - NY', '7737393589', 'I would like to make an appointment for Friday.', 'active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `build_suit`
--

CREATE TABLE IF NOT EXISTS `build_suit` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `token_number` varchar(50) NOT NULL,
  `cart_price` int(100) NOT NULL,
  `shipping` int(100) NOT NULL,
  `delivered` enum('Delivered','Pending') NOT NULL,
  `payment` varchar(200) NOT NULL,
  `accountNumber` varchar(100) DEFAULT NULL,
  `user_paid_amount` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `fabric` varchar(20) DEFAULT NULL,
  `type_button` varchar(50) DEFAULT NULL,
  `lapel_type` varchar(20) DEFAULT NULL,
  `lapel_size` varchar(20) DEFAULT NULL,
  `vent` varchar(20) DEFAULT NULL,
  `brest_pockets` varchar(20) DEFAULT NULL,
  `side_pockets` varchar(50) DEFAULT NULL,
  `hacking_pockets` varchar(50) DEFAULT NULL,
  `ticket_pockets` varchar(50) DEFAULT NULL,
  `button_types` varchar(50) DEFAULT NULL,
  `button_styles` varchar(50) DEFAULT NULL,
  `stitching` varchar(50) DEFAULT NULL,
  `pleat` varchar(50) DEFAULT NULL,
  `pant_side_pockets` varchar(50) DEFAULT NULL,
  `pant_back_pockets` varchar(50) DEFAULT NULL,
  `pant_cuff` varchar(50) DEFAULT NULL,
  `leg_break` varchar(50) DEFAULT NULL,
  `waist_closure` varchar(50) DEFAULT NULL,
  `belt_loops` varchar(50) DEFAULT NULL,
  `vest_coat_type` varchar(50) DEFAULT NULL,
  `vest_coat_buttons` varchar(50) DEFAULT NULL,
  `vest_coat_pocket_number` varchar(50) DEFAULT NULL,
  `vest_coat_pocket_type` varchar(50) DEFAULT NULL,
  `vest_coat_back_style` varchar(50) DEFAULT NULL,
  `label` varchar(50) DEFAULT NULL,
  `under_collar_fabric` varchar(50) DEFAULT NULL,
  `lapel_eyelet_color` varchar(50) DEFAULT NULL,
  `cuff_type` varchar(50) DEFAULT NULL,
  `linig_style` varchar(50) DEFAULT NULL,
  `piping_saddle_stitch` varchar(50) DEFAULT NULL,
  `watch_pockets` varchar(50) DEFAULT NULL,
  `suspender_buttons` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `deliver_date` date NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `build_suit`
--

INSERT INTO `build_suit` (`serial`, `user_id`, `token_number`, `cart_price`, `shipping`, `delivered`, `payment`, `accountNumber`, `user_paid_amount`, `currency`, `fabric`, `type_button`, `lapel_type`, `lapel_size`, `vent`, `brest_pockets`, `side_pockets`, `hacking_pockets`, `ticket_pockets`, `button_types`, `button_styles`, `stitching`, `pleat`, `pant_side_pockets`, `pant_back_pockets`, `pant_cuff`, `leg_break`, `waist_closure`, `belt_loops`, `vest_coat_type`, `vest_coat_buttons`, `vest_coat_pocket_number`, `vest_coat_pocket_type`, `vest_coat_back_style`, `label`, `under_collar_fabric`, `lapel_eyelet_color`, `cuff_type`, `linig_style`, `piping_saddle_stitch`, `watch_pockets`, `suspender_buttons`, `created_date`, `deliver_date`, `status`) VALUES
(60, 1, '#wardrobe1392', 500, 20, 'Pending', 'Cheque', '123456', '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-05', '2016-08-15', 'active'),
(62, 1, '#wardrobe180528', 500, 20, 'Pending', '', NULL, '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-05', '0000-00-00', 'inactive'),
(67, 1, '#wardrobe19632', 500, 20, 'Pending', 'PayPal', '456789', '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-08', '2016-08-18', 'active'),
(68, 1, '#wardrobe118152', 500, 20, 'Delivered', 'Cheque', '123456789', '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-08', '2016-08-18', 'active'),
(69, 8, '#wardrobe8227272', 500, 20, 'Delivered', 'PayPal', '123456', '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-08', '2016-08-18', 'active'),
(70, 1, '#wardrobe1144416', 500, 20, 'Delivered', 'Cheque', '123456789', '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-08', '2016-08-18', 'active'),
(71, 1, '#wardrobe1226152', 500, 20, 'Pending', '', NULL, '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-08', '0000-00-00', 'inactive'),
(72, 1, '#wardrobe1156304', 500, 20, 'Pending', '', NULL, '', '', 'CB11004', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-08', '0000-00-00', 'inactive'),
(73, 1, '#wardrobe1160240', 500, 20, 'Pending', '', NULL, '', '', 'CB11006', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(74, 1, '#wardrobe1206072', 500, 20, 'Pending', '', NULL, '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(75, 1, '#wardrobe1249696', 500, 20, 'Pending', '', NULL, '', '', 'CB11003', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(76, 1, '#wardrobe13496', 500, 20, 'Pending', '', NULL, '', '', 'CB11004', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(77, 1, '#wardrobe1258608', 500, 20, 'Pending', '', NULL, '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(78, 1, '#wardrobe122784', 500, 20, 'Pending', '', NULL, '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'English', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(79, 1, '#wardrobe133360', 500, 20, 'Pending', '', NULL, '', '', 'CB11001', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(80, 1, '#wardrobe189560', 500, 20, 'Pending', '', NULL, '', '', 'CB11004', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'Both', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(81, 1, '#wardrobe1147512', 500, 20, 'Pending', '', NULL, '', '', 'CB11004', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'None', 'On Seam', 'Suspender Buttons', '2016-08-09', '0000-00-00', 'inactive'),
(82, 1, '#wardrobe1149184', 500, 20, 'Pending', 'Cheque', '123456789', '', '', 'CB11005', '1-Button Single Breasted', 'Notch', 'Standard', 'Center', 'Welt', 'Flap', 'Yes', 'Yes,Single Beam', 'Regular', 'MB-608', 'None', 'Flat Front', 'On-Seam', 'Envelope', 'No-Cuff', 'Slight', 'Pointed Tab', 'Regular Belt Loops', 'Standard', '5-Button', '2 Pockets', 'Welt', 'Lining', 'Name', 'Back', 'Back', 'Bottom 1', 'Fully Lined', 'None', 'On Seam', 'Suspender Buttons', '2016-08-09', '2016-08-19', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `fabric`
--

CREATE TABLE IF NOT EXISTS `fabric` (
  `serial` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fabric`
--

INSERT INTO `fabric` (`serial`, `name`, `description`) VALUES
(1, 'CB11001', 'Black Herringbone'),
(2, 'CB11002', 'Grey Sharkskin'),
(3, 'CB11003', 'Navy Blue Stripe'),
(4, 'CB11004', 'Ivory Herringbone'),
(5, 'CB11005', 'Navy Stripe On Ivory'),
(6, 'CB11006', 'Burgundy Solid');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_breast_pocket`
--

CREATE TABLE IF NOT EXISTS `jacket_breast_pocket` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_breast_pocket` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jacket_breast_pocket`
--

INSERT INTO `jacket_breast_pocket` (`serial`, `jacket_breast_pocket`) VALUES
(1, 'Welt'),
(2, 'Patch');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_button_style`
--

CREATE TABLE IF NOT EXISTS `jacket_button_style` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_button_style` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jacket_button_style`
--

INSERT INTO `jacket_button_style` (`serial`, `jacket_button_style`, `description`) VALUES
(1, 'MB-608', 'Round - Black'),
(2, 'MB-609', 'Round - Ivory'),
(3, 'MB-610', 'Round - Anchor Embossed'),
(4, 'MB-611', 'Round - Golden Embossed');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_button_type`
--

CREATE TABLE IF NOT EXISTS `jacket_button_type` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_button_type` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jacket_button_type`
--

INSERT INTO `jacket_button_type` (`serial`, `jacket_button_type`) VALUES
(1, 'Regular'),
(2, 'Regular Kissing'),
(3, 'Slant'),
(4, 'Slant Kissing');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_hacking_pockets`
--

CREATE TABLE IF NOT EXISTS `jacket_hacking_pockets` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_hacking_pockets` varchar(20) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jacket_hacking_pockets`
--

INSERT INTO `jacket_hacking_pockets` (`serial`, `jacket_hacking_pockets`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_lapel_size`
--

CREATE TABLE IF NOT EXISTS `jacket_lapel_size` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_lapel_size` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jacket_lapel_size`
--

INSERT INTO `jacket_lapel_size` (`serial`, `jacket_lapel_size`) VALUES
(1, 'Standard'),
(2, 'Narrow');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_lapel_type`
--

CREATE TABLE IF NOT EXISTS `jacket_lapel_type` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_lapel_type` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jacket_lapel_type`
--

INSERT INTO `jacket_lapel_type` (`serial`, `jacket_lapel_type`) VALUES
(1, 'Notch'),
(2, 'Peak');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_side_pocket`
--

CREATE TABLE IF NOT EXISTS `jacket_side_pocket` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_side_pocket` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jacket_side_pocket`
--

INSERT INTO `jacket_side_pocket` (`serial`, `jacket_side_pocket`) VALUES
(1, 'Flap'),
(2, 'Double Besom'),
(3, 'Patch');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_stitching`
--

CREATE TABLE IF NOT EXISTS `jacket_stitching` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_stitching` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jacket_stitching`
--

INSERT INTO `jacket_stitching` (`serial`, `jacket_stitching`) VALUES
(1, 'None'),
(2, 'Pic Stitch 1/16'),
(3, 'Pic Stitch 5/16'),
(4, 'Top Stitch 5/16');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_ticket_pockets`
--

CREATE TABLE IF NOT EXISTS `jacket_ticket_pockets` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_ticket_pockets` varchar(20) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jacket_ticket_pockets`
--

INSERT INTO `jacket_ticket_pockets` (`serial`, `jacket_ticket_pockets`) VALUES
(1, 'Yes, Single Besom'),
(2, 'Yes, Double Besom'),
(3, 'Yes, Flap');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_type`
--

CREATE TABLE IF NOT EXISTS `jacket_type` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_type` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jacket_type`
--

INSERT INTO `jacket_type` (`serial`, `jacket_type`) VALUES
(1, '1-Button Single Breasted'),
(2, '2-Button Single Breasted'),
(3, '3-Button Single Breasted'),
(4, '4-Button Single Breasted'),
(5, '2x4 Button Double Breasted'),
(6, '2x6 Button Double Breasted'),
(7, '2x8 Button Double Breasted');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_vent`
--

CREATE TABLE IF NOT EXISTS `jacket_vent` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_vent` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jacket_vent`
--

INSERT INTO `jacket_vent` (`serial`, `jacket_vent`) VALUES
(1, 'Center'),
(2, 'Side'),
(3, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE IF NOT EXISTS `label` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`serial`, `label`) VALUES
(1, 'Name'),
(2, 'No Label');

-- --------------------------------------------------------

--
-- Table structure for table `label_cuff_type`
--

CREATE TABLE IF NOT EXISTS `label_cuff_type` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `jacket_cuff_type` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `label_cuff_type`
--

INSERT INTO `label_cuff_type` (`serial`, `jacket_cuff_type`) VALUES
(1, 'Bottom 1'),
(2, 'Bottom 2'),
(3, 'All Button'),
(4, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `label_linig_style`
--

CREATE TABLE IF NOT EXISTS `label_linig_style` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `label_linig_style` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `label_linig_style`
--

INSERT INTO `label_linig_style` (`serial`, `label_linig_style`) VALUES
(1, 'Fully Lined'),
(2, 'Half Lined');

-- --------------------------------------------------------

--
-- Table structure for table `label_piping_saddle`
--

CREATE TABLE IF NOT EXISTS `label_piping_saddle` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `label_piping_saddle` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `label_piping_saddle`
--

INSERT INTO `label_piping_saddle` (`serial`, `label_piping_saddle`) VALUES
(1, 'Both'),
(2, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `label_suspender`
--

CREATE TABLE IF NOT EXISTS `label_suspender` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `label_suspender` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `label_suspender`
--

INSERT INTO `label_suspender` (`serial`, `label_suspender`) VALUES
(1, 'Suspender Buttons'),
(2, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `label_under_collar_fabric`
--

CREATE TABLE IF NOT EXISTS `label_under_collar_fabric` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `label_under_collar_fabric` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `label_under_collar_fabric`
--

INSERT INTO `label_under_collar_fabric` (`serial`, `label_under_collar_fabric`) VALUES
(1, 'Black'),
(2, 'Green'),
(3, 'Dark Grey'),
(4, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `label_watch_pockets`
--

CREATE TABLE IF NOT EXISTS `label_watch_pockets` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `label_watch_pockets` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `label_watch_pockets`
--

INSERT INTO `label_watch_pockets` (`serial`, `label_watch_pockets`) VALUES
(1, 'On Seam'),
(2, '1 Below'),
(3, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `lapel_eyelet_color`
--

CREATE TABLE IF NOT EXISTS `lapel_eyelet_color` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `lapel_eyelet_color` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lapel_eyelet_color`
--

INSERT INTO `lapel_eyelet_color` (`serial`, `lapel_eyelet_color`) VALUES
(1, 'Black'),
(2, 'Green'),
(3, 'Dark Grey'),
(4, 'WHITE');

-- --------------------------------------------------------

--
-- Table structure for table `pant_back_pocket`
--

CREATE TABLE IF NOT EXISTS `pant_back_pocket` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_back_pocket` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pant_back_pocket`
--

INSERT INTO `pant_back_pocket` (`serial`, `pant_back_pocket`) VALUES
(1, 'Envelope'),
(2, 'Button-Thru'),
(3, 'Loop Tab');

-- --------------------------------------------------------

--
-- Table structure for table `pant_belt_loop`
--

CREATE TABLE IF NOT EXISTS `pant_belt_loop` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_belt_loop` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pant_belt_loop`
--

INSERT INTO `pant_belt_loop` (`serial`, `pant_belt_loop`) VALUES
(1, 'Regular Belt Loops'),
(2, 'Elastic Side Tabs'),
(3, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `pant_cuff`
--

CREATE TABLE IF NOT EXISTS `pant_cuff` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_cuff` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pant_cuff`
--

INSERT INTO `pant_cuff` (`serial`, `pant_cuff`) VALUES
(1, 'No-Cuff'),
(2, '1-1/2 Cuff'),
(3, '1-3/4 Cuff'),
(4, '2 Cuff');

-- --------------------------------------------------------

--
-- Table structure for table `pant_leg_break`
--

CREATE TABLE IF NOT EXISTS `pant_leg_break` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_leg_break` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pant_leg_break`
--

INSERT INTO `pant_leg_break` (`serial`, `pant_leg_break`) VALUES
(1, 'Slight'),
(2, 'Medium'),
(3, 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `pant_pleat`
--

CREATE TABLE IF NOT EXISTS `pant_pleat` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_pleat` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pant_pleat`
--

INSERT INTO `pant_pleat` (`serial`, `pant_pleat`) VALUES
(1, 'Flat Front'),
(2, 'Single Pleat'),
(3, 'Double Pleat');

-- --------------------------------------------------------

--
-- Table structure for table `pant_side_pocket`
--

CREATE TABLE IF NOT EXISTS `pant_side_pocket` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_side_pocket` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pant_side_pocket`
--

INSERT INTO `pant_side_pocket` (`serial`, `pant_side_pocket`) VALUES
(1, 'On-Seam'),
(2, '1/8 Top'),
(3, 'Western'),
(4, 'Double Besom');

-- --------------------------------------------------------

--
-- Table structure for table `pant_waist_closure`
--

CREATE TABLE IF NOT EXISTS `pant_waist_closure` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `pant_waist_closure` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pant_waist_closure`
--

INSERT INTO `pant_waist_closure` (`serial`, `pant_waist_closure`) VALUES
(1, 'Pointed Tab'),
(2, 'Square Tab'),
(3, 'No Tab');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `arm` varchar(30) DEFAULT NULL,
  `chest` varchar(30) DEFAULT NULL,
  `overarm` varchar(30) DEFAULT NULL,
  `waist` varchar(30) DEFAULT NULL,
  `pant` varchar(30) DEFAULT NULL,
  `seat` varchar(30) DEFAULT NULL,
  `thigh` varchar(30) DEFAULT NULL,
  `outseam` varchar(30) DEFAULT NULL,
  `suitWaist` int(20) NOT NULL,
  `date` date NOT NULL,
  `role` int(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serial`, `username`, `email`, `contact`, `address`, `password`, `arm`, `chest`, `overarm`, `waist`, `pant`, `seat`, `thigh`, `outseam`, `suitWaist`, `date`, `role`, `status`) VALUES
(1, 'Sophia khan', 'skhan@gmail.com', '+17737393589', 'chicago ave', '1234', '2.9', '2.8', '4', '6', '52', '45', '45', '12', 14, '2016-05-10', 1, 'active'),
(7, 'Tim', 'tim@gmail.com', '4567894567', '2501 chicago ave', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2016-06-27', 2, 'active'),
(8, 'Skhan', 'sophia.sag@aol.com', '3124564475', '29 N. madison', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2016-07-08', 2, 'active'),
(9, 'tom.harry', 'tom.harry@yahoo.com', '412-555-9899', '29 N. madison', '0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2016-07-12', 2, 'active'),
(12, 'Admin', 'admin@gmail.com', '3124564475', '300 South Riverside, Chicago, IL', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2016-08-09', 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `role_id` int(20) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`, `status`) VALUES
(1, 'Admin', 'active'),
(2, 'Customer', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vest_coat_back_style`
--

CREATE TABLE IF NOT EXISTS `vest_coat_back_style` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `vest_coat_back_style` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vest_coat_back_style`
--

INSERT INTO `vest_coat_back_style` (`serial`, `vest_coat_back_style`) VALUES
(1, 'Lining'),
(2, 'Fabric');

-- --------------------------------------------------------

--
-- Table structure for table `vest_coat_button`
--

CREATE TABLE IF NOT EXISTS `vest_coat_button` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `vest_coat_button` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vest_coat_button`
--

INSERT INTO `vest_coat_button` (`serial`, `vest_coat_button`) VALUES
(1, '5-Button'),
(2, '6-Button');

-- --------------------------------------------------------

--
-- Table structure for table `vest_coat_pocket_number`
--

CREATE TABLE IF NOT EXISTS `vest_coat_pocket_number` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `vest_coat_pocket_number` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vest_coat_pocket_number`
--

INSERT INTO `vest_coat_pocket_number` (`serial`, `vest_coat_pocket_number`) VALUES
(1, '2-Pockets'),
(2, '4-Pockets');

-- --------------------------------------------------------

--
-- Table structure for table `vest_coat_pocket_type`
--

CREATE TABLE IF NOT EXISTS `vest_coat_pocket_type` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `vest_coat_pocket_type` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vest_coat_pocket_type`
--

INSERT INTO `vest_coat_pocket_type` (`serial`, `vest_coat_pocket_type`) VALUES
(1, 'Welt'),
(2, 'Double Besom');

-- --------------------------------------------------------

--
-- Table structure for table `vest_coat_type`
--

CREATE TABLE IF NOT EXISTS `vest_coat_type` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `vest_coat_type` varchar(50) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vest_coat_type`
--

INSERT INTO `vest_coat_type` (`serial`, `vest_coat_type`) VALUES
(1, 'Standard'),
(2, 'English');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
