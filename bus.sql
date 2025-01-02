-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2024 at 06:23 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `license_application`
--

CREATE TABLE IF NOT EXISTS `license_application` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fromplace` varchar(255) NOT NULL,
  `toplace` varchar(255) NOT NULL,
  `relation_name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `identification_mark` varchar(255) NOT NULL,
  `id_proof_type` varchar(255) NOT NULL,
  `id_proof_number` varchar(255) NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `edu_qualification` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `randomkey` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `license_application`
--

INSERT INTO `license_application` (`id`, `fromplace`, `toplace`, `relation_name`, `fullname`, `dob`, `address`, `identification_mark`, `id_proof_type`, `id_proof_number`, `placeofbirth`, `edu_qualification`, `blood_group`, `photo`, `email`, `mobile`, `expiry`, `status`, `randomkey`, `license_number`) VALUES
(3, 'Permanent Driving License', '', 'Raja pandian', 'Divya Bharathi', '14-11-1992', 'Roja street,Madurai-12.', 'Scar on hand', 'Voter Id', '4334324324', 'Madurai', 'B.E', 'AB Positive', 'photo/cat.jpg', 'dhivyarajapandian@gmail.com', '9578988407', '29-01-2017', 'Approved', 'ASVVI', 'TN 2017 098234'),
(4, 'Motorcyle License or Two-wheeler License', '', 'Murugan', 'Ram Kumar', '9-8-1990', 'Mullai street,Madurai-12.', 'Mole on left hand', 'Aadhar Card', '487584375', '23423432432', 'MCA', 'B Positive', 'photo/Penguins.jpg', 'ramsita2914@gmail.com', '9500580005', '29-01-2017', 'Approved', 'MXTUU', 'TN 2017 098235'),
(5, 'Permanent Driving License', '', 'Test', 'Sample', '14-11-1992', 'Madurai', 'A Scar on the left forehead', 'Ration Card', '8745847535', 'Madurai', 'MCA', 'AB Positive', 'photo/Chrysanthemum.jpg', 'sample@gmail.com', '9500580005', '14-02-2017', 'Approved', 'DJSW4', 'TN 2017 098233'),
(6, 'Permanent Driving License', '', 'Subramani', 'Gayathiri', '14-11-1992', 'Madurai', 'Scar on left hand', 'Aadhar Card', '4334324324', 'Madurai', 'MCA', 'AB Positive', 'photo/beautiful-floral-design.jpg', 'gayathri@gmail.com', '9500580005', '15-02-2017', 'Approved', '9WZGT', 'TN 2017 098236'),
(7, 'Learner Driving License', '', 'P', 'R', '10', 'mau', 'mole', 'Aadhar Card', '123456789', 'mdu', 'msc', 'A-', 'photo/cat.jpg', 'r@gmail.com', '9876678933', '29-05-2017', 'Approved', '45DVV', '12345'),
(8, 'Learner Driving License', '', 'Muthu', 'Rajprabhu', '26-06-1994', 'Madurai', 'Mole', 'Aadhar Card', '1234567890', 'Madurai', 'Msc', 'A+', 'photo/Desert.jpg', 'raj@gmail.com', '9876543322', '29-05-2017', 'Approved', 'W90Y3', '123456'),
(9, 'madurai', 'chennai', 'ponnu', 'saravana', '11/03/2000', 'madurai', 'ff', 'Ration Card', '12345', 'madurai', 'msc', 'b+ve', 'photo/Acer_Wallpaper_01_5000x2814.jpg', 'sara@gmail.com', '9876543212', '01-01-1970', 'Approved', '9HKQR', '');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `duration`) VALUES
(1, '2 days');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `username`, `password`, `status`) VALUES
(1, 'Divya', 'dhivyarajapandian@gmail.com', '9578988407', 'Divya', 'divya', 'Activated'),
(2, 'Ram', 'ramsita2914@gmail.com', '9500580005', 'Ram kumar', '1234', 'Activated'),
(5, 'Gayathri', 'gayathri@gmail.com', '9500580005', 'Gayu', '1234', 'Activated'),
(4, 'Sample', 'sample@gmail.com', '9500580005', 'Sample', '1234', 'Activated'),
(6, 'R', 'r@gmail.com', '9876678933', 'R', '987654321', 'Activated'),
(7, 'Rajprabhu', 'raj@gmail.com', '9876543322', 'raj', '987654321', 'Activated'),
(8, 'sara', 'sara@gmail.com', '9876543212', 'sara', 'sara', 'Activated'),
(9, 'sara', 'sara@gmail.com', '9876543212', 'sara', 'sara', 'Waiting');
