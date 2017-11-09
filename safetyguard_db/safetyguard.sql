-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2017 at 10:42 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `safetyguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descriprion` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `conf_pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`, `conf_pass`, `email`) VALUES
(1, 'safety@guards', '7ca0d2b82bdaa7fbc138b396c3afa225', '{@safetyguards@}', 'admin@123.com');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `descriptions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `image`, `descriptions`) VALUES
(18, '1498727659Pump Award-2015-16.jpg', '<h3>The Best Water Pumps-Doemstic 2015-16</h3>\r\n<p>BEST WATER PUMPS-DOMESTIC 2015-16 at "Water Digest Awards 2016" awarded by Water digest.</p>'),
(19, '1498727670Pump Awards - 2016-17 (2).jpg', '<h3>The Best Membrane Manufacturer 2016-17</h3>\r\n<p>BEST MEMBRANE MANUFACTURER 2016-17 at "Water Digest 2017" awarded by Water digest in association with UNESCO and&nbsp;Assocham India</p>');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `banner` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `banner`) VALUES
(12, 'Safety Valve Guards', '1499867314Safety Valve Guards.jpg'),
(13, 'Safety Guards Accessories', 'banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `descriptions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `image`, `descriptions`) VALUES
(111, '1499342746Standard Engineers  18.jpg', '<h3>OHSAS 18001:2007</h3>\r\n<p>&nbsp;</p>'),
(112, '1499342831Standard Engineers 91.jpg', '<h3>ISO 9001:2015</h3>\r\n<h3>&nbsp;</h3>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `address` text NOT NULL,
  `comments` text NOT NULL,
  `subject` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `f_name`, `l_name`, `email`, `phone`, `image`, `address`, `comments`, `subject`) VALUES
(19, 'rupal', 'barad', 'baradrupal@gmail.com', '9676767676767667', '', 'dfdfdfd', 'dfdfdfd', 'dfndbfdf'),
(20, 'palak', 'palak', 'bb@gmail.com', '7899999996754444', '', 'sas', 'as', 'sas'),
(21, 'as', 'asa', 'admin@admin.com', '7878787787878787', '1504173058signing-the-contract.png', 'dsdsdsds', 'sd', 'dsd'),
(22, 'gf', 'fggf', 'baradrupal@gmail.com', '7899999996754444', '1504173097call-center-agent.png', 'bffg', 'fff', 'ff'),
(23, 'gf', 'fggf', 'baradrupal@gmail.com', '7899999996754444', '1504173164call-center-agent.png', 'bffg', 'fff', 'ff'),
(24, 'dds', 'Dsd', 'bb@gmail.com', '7899999996754444', '1504173188signing-the-contract.png', 'sds', 'sds', 'sdsd'),
(25, 'DSds', 'Dsd', 'bb@gmail.com', '7899999996754444', '1504173244man-talking-with-phone.png', 'dsdsdsd', 'dsd', 'sdsd'),
(26, 'DSds', 'Dsd', 'bb@gmail.com', '7899999996754444', '1504173430man-talking-with-phone.png', 'dsdsdsd', 'dsd', 'sdsd'),
(27, 'DSds', 'Dsd', 'bb@gmail.com', '7899999996754444', '1504173790man-talking-with-phone.png', 'dsdsdsd', 'dsd', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `pdf_icon` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `name`, `pdf`, `pdf_icon`) VALUES
(18, 'Lexpure', '1498818335LEXPURE.pdf', '1498818335download.png'),
(19, 'Cruze', '1498818374CRUZE.pdf', '1498818374download.png'),
(20, 'LCM', '1498818398LCM INDUSTRIAL CATALOUGE.pdf', '1498818398download.png');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `date` varchar(100) NOT NULL,
  `venue` varchar(300) NOT NULL,
  `cont` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `logo`, `date`, `venue`, `cont`) VALUES
(19, 'WAPTAG  Expo  2017', '1496746236WAPTAG_mahatma_logo.jpg', '3rd to 5th March 2017', 'Mahatma Mandir Gandhinagar, Gujarat India.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum ante arcu, vel cursus nisi sagittis vel. Phasellus hendrerit felis nec euismod fermentum. Nulla sit amet mauris suscipit, fringilla sem vel, euismod ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.'),
(20, 'WAPTEMA  Expo 2017', '1496753598WAPTEMA_delhi_logo.jpg', '4th to 6th May 2017', 'Pragati Maidan,Delhi,India', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum ante arcu, vel cursus nisi sagittis vel. Phasellus hendrerit felis nec euismod fermentum. Nulla sit amet mauris suscipit, fringilla sem vel, euismod ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.'),
(21, 'WATER INDIA   Expo 2017', '1496753964Water India_logo.jpg', '1st to 3rd  June  2017', 'Auto Cluster Exhibition Center, Pipri-Chinchwad', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum ante arcu, vel cursus nisi sagittis vel. Phasellus hendrerit felis nec euismod fermentum. Nulla sit amet mauris suscipit, fringilla sem vel, euismod ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `events_photo`
--

CREATE TABLE IF NOT EXISTS `events_photo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `e_id` varchar(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `events_photo`
--

INSERT INTO `events_photo` (`id`, `e_id`, `image`) VALUES
(20, '19', '1.JPG'),
(21, '19', '2.JPG'),
(22, '19', '3.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `f_name`, `phone`, `email`, `image`, `comments`) VALUES
(3, 'rup[al', '897676767767', 'bb@gmail.com', '1498733401SILVER MEMBRANE.png', '0'),
(4, 'rup[al', '897676767767', 'bb@gmail.com', '1498733473SILVER MEMBRANE.png', '0'),
(5, 'rup[al', '897676767767', 'bb@gmail.com', '1498733527SILVER MEMBRANE.png', '0'),
(6, 'rup[al', '897676767767', 'bb@gmail.com', '1498733530SILVER MEMBRANE.png', '0'),
(7, 'rup[al', '897676767767', 'bb@gmail.com', '1498733589SILVER MEMBRANE.png', '0'),
(8, 'sasa', '897676767767', 'bb@gmail.com', '1498733608SUPER MEMBRANE.png', '0'),
(9, 'sasa', '897676767767', 'bb@gmail.com', '1498733615SUPER MEMBRANE.png', '0'),
(10, 'sasa', '897676767767', 'bb@gmail.com', '1498733657SUPER MEMBRANE.png', '0'),
(11, 'DSDS', '897676767767', 'bb@gmail.com', '1498733696SUPER MEMBRANE.png', '0'),
(12, 'DSDS', '897676767767', 'bb@gmail.com', '1498733736SUPER MEMBRANE.png', 'ddsd'),
(13, 'palak', '897676767767', 'bb@gmail.com', '1498733745SUPER MEMBRANE.png', 'dsdsdsds'),
(14, 'palak', '897676767767', 'bb@gmail.com', '1498733901SUPER MEMBRANE.png', 'dsdsdsds'),
(15, 'ggfgfgf', '7787878788888888', 'bb@gmail.com', '1498733953SILVER MEMBRANE.png', 'sdsd'),
(16, 'ggfgfgf', '7787878788888888', 'bb@gmail.com', '1498735823SILVER MEMBRANE.png', 'sdsd'),
(17, 'ggfgfgf', '7787878788888888', 'bb@gmail.com', '1498735869SILVER MEMBRANE.png', 'sdsd'),
(18, 'ggfgfgf', '7787878788888888', 'bb@gmail.com', '1498735884SILVER MEMBRANE.png', 'sdsd'),
(19, 'ggfgfgf', '7787878788888888', 'bb@gmail.com', '1498736973SILVER MEMBRANE.png', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(2, '1498743386Award Photo1.jpg'),
(13, '1498743392award photo2.jpg'),
(14, '1498743402award photo3.jpg'),
(15, '1498743407China Expo.jpg'),
(16, '1498743412china_new.jpg'),
(17, '1498743417guj_new1.jpg'),
(18, '1498743426Kolkata Expo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(200) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `sub_category` int(10) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `cat_id`, `sub_category`, `image`, `description`) VALUES
(4, 'Parallel Model Light', 12, 16, '1500471555Parallel Model Light.png', ''),
(5, 'Parallel Model Light - 1', 12, 16, '1500471564Parallel Model Light 1.png', ''),
(6, 'Parallel Model Heavy', 12, 17, '1501668733Parallel-Model-Heavy.png', ''),
(7, 'Parallel Model Heavy - 1', 12, 17, '1500471588Parallel Model Heavy 1.png', ''),
(8, 'Conical Model', 12, 18, '1500471599Conical Model.png', ''),
(9, 'Conical Model - 1', 12, 18, '1500471608Conical Model 1.png', ''),
(11, 'DA Parallel Model', 12, 19, '1500471618DA Parallel Model.png', ''),
(12, 'DA Parallel Model - 1', 12, 19, '1501668750DA-Parallel-Model-1.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `products_inquiry`
--

CREATE TABLE IF NOT EXISTS `products_inquiry` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pro_photo` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `products_inquiry`
--

INSERT INTO `products_inquiry` (`id`, `pro_name`, `name`, `pro_photo`, `email`, `phone`, `address`, `comments`) VALUES
(1, 'DSDS', 'Dfd', '', 'bb@gmail.com', '7878787878787877', 'dfdgfdfdf', 'dfdfdf'),
(2, 'rupal', 'palak', '', 'bb@gmail.com', '8787878787878787', 'fdfdfd fdfdfffffffffffffffff', 'jgjhjhjh'),
(3, 'rupal', 'palak', '', 'bb@gmail.com', '8787878787878787', 'fdfdfd fdfdfffffffffffffffff', 'jgjhjhjh'),
(4, 'rupal', 'aa', '', 'bb@gmail.com', '7899999996754444', 'fdfdfd fdfdfffffffffffffffff', 'dsddsds'),
(5, 'palak', 'barad', '', 'pa@gmail.com', '8788778787878787', 'fdfdfd fdfdfffffffffffffffff', '7878787vcvcv'),
(6, 'pro_name', '$name', '', 'email', '$phone', '$address', '$sub'),
(7, 'product', 'Ravi', '', 'abc@xyz.com', '7600278055', 'Address', 'Test.'),
(8, 'product', 'Ravi', '', 'abc@xyz.com', '7600278055', 'Address', 'Test.'),
(9, 'Pusa Basmati Rice', 'Ravi', '', 'abc@xyz.com', '7600278055', 'Address', 'asgag'),
(10, 'Product Name', 'Name', '', 'webservices.intelliworkz@gmail.com', '9999999999', 'Address', 'This is for Test. '),
(11, 'Product Name', 'Name', '', 'webservices.intelliworkz@gmail.com', '9999999999', 'Address', 'This is for Test. '),
(12, 'Product ', 'Ravi', '', 'abc@xyz.com', '7600278055', 'Address', 'Test.'),
(13, 'Product ', 'Ravi', 'gallery-1.jpg', 'abc@xyz.com', '9999999999', 'Address', 'Test.'),
(14, 'Wheat', 'Ravi', 'bg1.jpg', 'abc@xyz.com', '9999999999', 'Address', 'sadfcas'),
(15, 'P', 'Name', 'bg1.jpg', 'abc@xyz.com', '7600278055', 'Address', 'test.'),
(16, 'Prodyct one', 'Rudra', 'barbell.jpeg', 'abc@xyz.com', '9999999999', 'Address', 'Test.'),
(17, 'Prodyct one', 'Rudra', 'barbell.jpeg', 'abc@xyz.com', '9999999999', 'Address', 'Test.'),
(18, 'Housing', 'daxa', 'award photo2.jpg', 'bb@gmail.com', '7899999996754444', 'fdfdfd fdfdfffffffffffffffff', 'sasasasas'),
(19, 'rupal', 'daxa', 'images.jpg', 'bb@gmail.com', '7899999996754444', 'fdfdfd fdfdfffffffffffffffff', 'CXCX');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `cat_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `cat_id`) VALUES
(16, 'Parallel Model Light', 12),
(17, 'Parallel Model Heavy', 12),
(18, 'Conical Model', 12),
(19, 'DA Parallel Model', 12),
(20, 'Manifolds', 13),
(21, 'Restraining Rings', 13),
(22, 'Testing Rings', 13),
(23, 'Pallets', 13),
(24, 'Trolleys', 13),
(25, 'Skids', 13),
(30, 'Quads', 13),
(31, 'Brass Washers', 13),
(32, 'Teflon Washers', 13);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `descriptions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descriprion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE IF NOT EXISTS `upcoming_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `date` varchar(100) NOT NULL,
  `venue` varchar(300) NOT NULL,
  `cont` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`id`, `title`, `logo`, `date`, `venue`, `cont`) VALUES
(19, 'WAPTAG  Expo  2017', '1496746236WAPTAG_mahatma_logo.jpg', '3rd to 5th March 2017', 'Mahatma Mandir Gandhinagar, Gujarat India.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel aliquam nisl, et porta lacus. Suspendisse quis ex orci. Sed sed sapien scelerisque, convallis purus non, facilisis neque. Morbi eget leo lorem. Cras nec augue sodales lectus euismod pulvinar. Donec congue arcu vel enim luctus, a maximus quam consectetur. Phasellus a aliquet urna, quis mollis eros. In blandit vulputate posuere. Pellentesque viverra magna sed est ornare suscipit.');

-- --------------------------------------------------------

--
-- Table structure for table `vision_mission`
--

CREATE TABLE IF NOT EXISTS `vision_mission` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descriprion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `vision_mission`
--

INSERT INTO `vision_mission` (`id`, `descriprion`) VALUES
(9, '<h2>Our Mission</h2>\r\n<p>&nbsp;TO SERVE AND DELIVER QUALITY PRODUCT&nbsp; </p>\r\n<h2>Our Vision</h2>\r\n<p>&nbsp;</p>'),
(10, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
