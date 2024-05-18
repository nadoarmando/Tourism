-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 03:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aegyptus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `id` varchar(250) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `event_name` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Fname`, `Lname`, `id`, `email`, `phone_num`, `event_name`) VALUES
('ahmed', 'hesham', '2147483647', 'dfsfv527@gmail.com', '01063704860', 'موكب المومياوات الملكية'),
('ahmed', 'ahmed', '30401011403017', 'dfsfv527@gmail.com', '01063704860', 'موكب المومياوات الملكية'),
('ahmed', 'ahmed', '30401011443017', 'dfsfv5275@gmail.com', '01063704860', 'موكب المومياوات الملكية'),
('ahmed', 'mohamed', '30401011453017', 'dfsfv54427@gmail.com', '01063704861', 'موكب المومياوات الملكية'),
('ahmed', 'hesham', '30471011453017', 'Dfsfv5257@gmail.com', '01063704860', 'بوم المرأة العالمي');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Educational_Qualification` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `id` varchar(250) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `interview_date` date DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Fname`, `Lname`, `Educational_Qualification`, `email`, `phone_num`, `id`, `date_of_birth`, `interview_date`, `result`) VALUES
('ahmed', 'hesham', 'wep developer', 'mohammednassar5772003@gmail.com', '01063704860', '30401011403019', '2024-04-17', '2024-08-23', ' 1'),
('yousef', 'hesham', 'wep developer', 'Dfkksfv527@gmail.com', '01063704860', '30401011403015', '2003-07-07', '2024-10-29', ' 0'),
('ahmed', 'hesham', 'wep developer', 'mohammednassar772003@gmail.com', '01063704860', '30401011403011', '2024-04-17', '2024-05-25', ' 0'),
('ahmed', 'hesham', 'wep developer', 'mohammednassar57725003@gmail.com', '01063704860', '30401011402019', '2024-04-17', '2024-10-30', ' 0'),
('ahmed', 'hesham', 'xxx', '3amo65r@gmail.com', '01063704861', '30401011404040', '2024-04-17', '2024-09-27', ' 0'),
('klk', 'kl', 'k', 'dfsfv5527@gmail.com', '01063704860', '30401011404041', '2024-04-18', '2025-03-06', ' 0'),
('klk', 'klc', 'k', 'dfsfv55c27@gmail.com', '01063704860', '30401015404041', '2024-04-18', '2024-05-03', ' 0'),
('klk', 'klcc', 'k', 'dfsfv55c267@gmail.com', '01063704860', '30407015404041', '2024-04-18', '2024-10-21', ' 1'),
('klk', 'klcc', 'k', 'dfsfv55c268@gmail.com', '01063704860', '37407015404041', '2024-04-18', '2024-10-06', ' 1'),
('ahmed', 'hesham', 'ss', 'Dfsfv527@gmail.com', '01063704860', '30303030303030', '2024-04-26', '2025-02-02', ' 1'),
('yousef', 'klcc', 'ss', 'dfsfv554627@gmail.com', '01063704860', '30401091403055', '0002-06-05', '2024-06-30', ' 0'),
('yousef', 's', 'k', 'mohammednassar77200355@gmail.com', '01063704860', '30401011403025', '2024-05-07', '2024-05-09', ' 1'),
('ahmed', 'hesham', 'wep developer', 'Dfkksfv52527@gmail.com', '01063704860', '30401011403045', '0052-08-06', '2024-05-27', ' 0'),
('ahmed', 'ahmed', 'ss', 'dfskkkfv53527@gamil.com', '01063704860', '30401011403057', '0252-03-21', '2024-05-20', ' 1');

-- --------------------------------------------------------

--
-- Table structure for table `museum`
--

CREATE TABLE `museum` (
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `id` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `museum_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `museum`
--

INSERT INTO `museum` (`Fname`, `Lname`, `id`, `email`, `phone_num`, `date`, `museum_name`) VALUES
('jj', 'hhh', '30481011403018', 'Dfsfv5257@gmail.com', '01063704860', '0031-06-05', 'هرم زوسر'),
('ahmed', 'hesham', '30401011111111', 'dfsfv5275@gmail.com', '01063704860', '0532-02-01', '>دير سانت كاترين '),
('j', 'j', '30401011403018', 'dfsfv5427@gmail.com', '01063704860', '0020-03-05', '  معبد الكرنك'),
('ahmed', 'jjj', '30401011403017', 'dfsfv5275@gmail.com', '01063704860', '0003-03-05', 'ابو الهول ');

-- --------------------------------------------------------

--
-- Table structure for table `places_of_visit`
--

CREATE TABLE `places_of_visit` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `id` varchar(250) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `places_of_visit`
--

INSERT INTO `places_of_visit` (`Fname`, `Lname`, `id`, `email`, `phone_num`, `date`, `place`) VALUES
('ahmed', 'hesham', '0', 'dfsfv527@gmail.com', '0', '0000-00-00', 'noo');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `id` varchar(250) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Tourist_guide_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`Fname`, `Lname`, `id`, `email`, `phone_num`, `date`, `Tourist_guide_name`) VALUES
('ss', 'ss', '30401011403089', 'Dfsfv5257@gmail.com', '01063704860', '2024-04-14', 'ندي رضا رفاعي'),
('ahmed', 'hesham', '30401011403019', 'Dfsfv5257@gmail.com', '01063704860', '0013-05-31', 'محمد محمود رجب نصار '),
('ahmed', 'hesham', '30401011403018', 'dfsfv527@gmail.com', '01063704860', '0002-05-04', 'ايمان السيد المتولي');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(255) DEFAULT NULL,
  `Age` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Governorate` varchar(200) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Id` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Age`, `email`, `Governorate`, `password`, `Id`, `Phone`) VALUES
('ahmed', '<10', '3am55or@gmail.com', 'السويس', '1', '30404040404040', '01036704860'),
('Mohamed Ali', '10->20', 'g3far88@gmail.com', 'السويس', '1', '[value-6]', '01063704860'),
('Mohamed Ali', '<10', 'dfsfv527@yahoo.com', 'السويس', '1', '[value-6]', '01063704860'),
('Mohamed Ali', '>40', 'dfsfv527@yahoo.com', 'السويس', '1', '[value-6]', '01063704860'),
('Mohamed Ali', '21->30', 'dfsfv527@yahoo.com', 'السويس', '1', '[value-6]', '01063704860'),
('gafir', '21->30', 'ga3for@gmail.com', 'الاسماعيلية', '1', '30404040404040', '01063704860'),
('Mohamed Ali', '31->40', 'dfsfv527@yahoo.com', 'المنوفية', '1', '[value-6]', '01063704860'),
('ahmed hesham', '31->40', 'dfsfv527@yahoo.com', 'بورسعيد', '1', '[value-6]', '01063704860'),
('ahmed hesham', '21->30', 'dfsfv527@gmail.com', 'القليوبية', '5', '[value-6]', '01063704860'),
('yousef m h', '<10', 'Dfkksfv527@gmail.com', 'دمياط', '1', '30401011111111', '01063704865'),
('ahmed hesham', '31->40', 'dfsf4v527@gmail.com', 'شمال سيناء', '1', '30401011111111', '01063704862'),
('ahmed hesham', '31->40', 'dfsf4v5527@gmail.com', 'شمال سيناء', '1', '30401011111111', '01063704862'),
('ahmed hesham', '31->40', 'dfsf4v55527@gmail.com', 'شمال سيناء', '1', '30401011111111', '01063704862'),
('ahmed hesham', '31->40', 'dfsf4v5ss5527@gmail.com', 'شمال سيناء', '1', '30401011111111', '01063704862'),
('ahmed hesham', '31->40', 'dfsf4v5sss5527@gmail.com', 'شمال سيناء', '1', '30401011111111', '01063704862'),
('yousef', '31->40', 'Dfsfv5257@gmail.com', 'دمياط', '1', '30401015403019', '01063704860');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
