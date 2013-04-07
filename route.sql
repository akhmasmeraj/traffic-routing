-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2013 at 12:15 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `civichackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `RouteId` int(11) NOT NULL AUTO_INCREMENT,
  `RouteName` varchar(25) NOT NULL,
  `RouteType` varchar(25) NOT NULL COMMENT 'options : MiniBus,BariBus, UTS, CNG',
  `Route1` text NOT NULL,
  PRIMARY KEY (`RouteId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`RouteId`, `RouteName`, `RouteType`, `Route1`) VALUES
(1, 'W-22', 'Mini Bus', 'siddiq market -> asia mor -> disco mor -> baradari -> thana ajmer nagri -> rehmanai town -> carela mor -> al majid school -> enquiry office -> nusrat bhutto colony -> pahar gang -> abdullah college -> gharibabad -> hassan square -> purani sabzi mandi -> jail road -> khalid bin waleed road -> shahrah-e-quaideen -> sindhi muslim society -> nursery -> gora qabrastan -> kalapul -> defence society -> korangi road -> akhter colony -> qayyumabad -> shah bhittai colony -> double road -> korangi 2 â½'),
(2, 'Shama Coach', 'Coach', 'qasba colony -> kawari colony -> nusrat bhutto colony -> shipowner college -> abdullah college -> paposh nagar -> abbasi shaheed hospital -> nazimabad no 7 -> petrol pump -> liaquatabad no 10 -> teen hatti -> p.i.b colony -> central jail -> shaheed-e-millat road -> nursery -> signal mehmoodabad -> azam basti -> korangi road -> sunset boulevard -> khyaban dhamsher -> saba avenue -> khyaban-e-baharia -> korangi road -> akhter colony -> qayyumabad'),
(3, 'W-18', 'Mini Bus', 'surjani town -> north karachi -> baradari -> disco mor -> sir syed town -> u.p mour -> nagan chowrangi -> sohrab goth -> rashid minhas road -> drive-in-cinema -> drigh road -> shahrah faisal -> malir no 15 -> quaidabad -> dawood chowrangi -> hussain chawk -> sherpao colony -> korangi fish harbour'),
(4, 'W-21', 'Mini Bus', 'qasba colony -> kawari colony -> nusrat bhutto colony -> shipowner college -> abdullah college -> paposh nagar -> abbasi shaheed hospital -> nazimabad no 7 -> petrol pump -> liaquatabad no 10 -> teen hatti -> p.i.b colony -> central jail -> shaheed-e-millat road -> nursery -> signal mehmoodabad -> azam basti -> korangi road -> sunset boulevard -> khyaban dhamsher -> saba avenue -> khyaban-e-baharia -> korangi road -> akhter colony -> qayyumabad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
