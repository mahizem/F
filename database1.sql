-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 08:34 PM
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
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `ID`, `amount`) VALUES
('', '', -4478),
('mahlet', '1202258', 81391),
('eyerusalem', '1202259', 952989),
('nolawit', '1202260', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `availablerooms`
--

CREATE TABLE `availablerooms` (
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rooms` int(11) NOT NULL,
  `roomtype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availablerooms`
--

INSERT INTO `availablerooms` (`checkin`, `checkout`, `rooms`, `roomtype`) VALUES
('2023-10-02', '2023-10-07', 3, ''),
('2023-10-02', '2023-10-06', 1, ''),
('2023-10-01', '2023-10-06', 5, 'standard room'),
('2023-10-09', '2023-10-13', 6, 'mini suit'),
('0000-00-00', '0000-00-00', 1, ''),
('0000-00-00', '0000-00-00', 1, ''),
('0000-00-00', '0000-00-00', 1, ''),
('0000-00-00', '0000-00-00', 1, ''),
('0000-00-00', '0000-00-00', 1, ''),
('0000-00-00', '0000-00-00', 1, ''),
('2023-10-01', '2023-10-06', 1, ''),
('2023-10-01', '2023-10-06', 3, ''),
('2023-10-01', '2023-10-06', 3, ''),
('2023-10-01', '2023-10-06', 6, 'Mini suite'),
('2023-10-01', '2023-10-06', 2, 'standard room'),
('2023-10-01', '2023-10-06', 2, 'standard room'),
('2023-10-12', '2023-10-10', 1, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'Mini suite'),
('2023-10-01', '2023-10-06', 1, 'Mini suite'),
('2023-10-01', '2023-10-06', 1, 'Mini suite'),
('2023-10-01', '2023-10-02', 1, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'standard room'),
('2023-10-01', '2023-10-06', 3, ''),
('2023-10-01', '2023-10-06', 3, ''),
('2023-10-01', '2023-10-06', 3, ''),
('2023-10-01', '2023-10-06', 3, ''),
('2023-10-01', '2023-10-06', 2, 'standard room'),
('2023-10-01', '2023-10-06', 2, 'standard room'),
('2023-10-01', '2023-10-06', 3, 'standard room'),
('2023-10-01', '2023-10-06', 3, 'standard room'),
('2023-10-01', '2023-10-06', 4, 'standard room'),
('2023-10-01', '2023-10-06', 4, 'standard room'),
('2023-10-02', '2023-10-07', 2, 'Mini suite'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room'),
('2023-10-01', '2023-10-06', 3, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'standard room'),
('2023-10-01', '2023-10-06', 1, 'standard room'),
('2023-10-02', '2023-10-07', 1, 'standard room'),
('2023-10-02', '2023-10-07', 1, 'standard room'),
('2023-10-02', '2023-10-07', 1, 'standard room'),
('2023-10-02', '2023-10-07', 1, 'standard room'),
('0000-00-00', '0000-00-00', 1, 'standard room');

-- --------------------------------------------------------

--
-- Table structure for table `availableshows`
--

CREATE TABLE `availableshows` (
  `moviename` varchar(20) NOT NULL,
  `time` time(6) NOT NULL,
  `minage` int(11) NOT NULL,
  `sitsleft` int(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availableshows`
--

INSERT INTO `availableshows` (`moviename`, `time`, `minage`, `sitsleft`, `price`) VALUES
('The Avaengers', '07:00:00.000000', 17, 20, 300.95),
('Game Of Thrones', '12:00:00.000000', 19, 13, 350.87);

-- --------------------------------------------------------

--
-- Table structure for table `bookedrooms`
--

CREATE TABLE `bookedrooms` (
  `type` varchar(20) NOT NULL,
  `number` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookedrooms`
--

INSERT INTO `bookedrooms` (`type`, `number`) VALUES
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 1),
('', 3),
('', 3),
('Mini suite', 6),
('standard room', 2),
('standard room', 2),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('', 3),
('', 3),
('', 3),
('', 3),
('standard room', 2),
('standard room', 2),
('standard room', 3),
('standard room', 3),
('standard room', 4),
('standard room', 4),
('Mini suite', 2),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 3),
('standard room', 3),
('standard room', 2),
('standard room', 2),
('standard room', 3),
('standard room', 3),
('standard room', 1),
('Mini suite', 3),
('Mini suite', 3),
('standard room', 2),
('standard room', 2),
('standard room', 2),
('standard room', 2),
('standard room', 2),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 1),
('standard room', 3),
('standard room', 3),
('standard room', 1),
('standard room', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult` int(20) NOT NULL,
  `children` int(20) NOT NULL,
  `rooms` int(20) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ano` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`checkin`, `checkout`, `adult`, `children`, `rooms`, `roomtype`, `name`, `email`, `ano`) VALUES
('2023-10-01', '2023-10-06', 0, 0, 3, '', '', '', 0),
('2023-10-01', '2023-10-06', 0, 0, 3, '', '', '', 0),
('2023-10-01', '2023-10-06', 0, 0, 6, 'Mini suite', '', '', 0),
('2023-10-01', '2023-10-06', 0, 0, 2, 'standard room', '', '', 0),
('2023-10-01', '2023-10-06', 0, 0, 2, 'standard room', '', '', 0),
('2023-10-01', '2023-10-06', 2, 3, 3, '', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 2, 3, 3, '', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 3, 3, 3, '', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 3, 3, 3, '', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 3, 'standard room', 'mahlet zemen', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 3, 'standard room', 'mahlet zemen', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 4, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 4, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-02', '2023-10-07', 0, 0, 2, 'Mini suite', '', '', 0),
('2023-10-01', '2023-10-06', 0, 0, 3, 'standard room', '', '', 0),
('2023-10-01', '2023-10-06', 0, 0, 3, 'standard room', '', '', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet zuu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 2, 2, 3, 'standard room', 'mahlet zemen', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 2, 2, 3, 'standard room', 'mahlet zemen', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 3, 'Mini suite', 'mah zem', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 3, 'Mini suite', 'mah zem', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 1, 1, 2, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 2, 2, 2, 'standard room', 'mahlet zemen', 'mahletzemen@gmail.co', 0),
('2023-10-01', '2023-10-06', 2, 2, 2, 'standard room', 'mahlet zemen', 'mahletzemen@gmail.co', 0),
('2023-10-02', '2023-10-07', 1, 1, 3, 'standard room', ' Zemenu', 'zemen@gmail.com', 1202259),
('2023-10-02', '2023-10-07', 1, 1, 3, 'standard room', ' Zemenu', 'zemen@gmail.com', 1202259),
('2023-10-02', '2023-10-07', 1, 1, 1, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 1202259),
('2023-10-02', '2023-10-07', 1, 1, 1, 'standard room', 'mahlet Zemenu', 'mahletzemen@gmail.co', 1202259);

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `donorname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phono` int(20) NOT NULL,
  `choosbank` varchar(20) NOT NULL,
  `accno` int(20) NOT NULL,
  `donateamt` float NOT NULL,
  `organization` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`donorname`, `address`, `email`, `phono`, `choosbank`, `accno`, `donateamt`, `organization`) VALUES
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('eyu syu', 'addis ababa', 'mahletmen@gmail.com', 922337855, 'Nib bank', 1202259, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 120225877, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '0'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('eyu syu', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202259, 1000, '123456789'),
('eyu syu', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202259, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456788'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456788'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456788'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456788'),
('eyu syu', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202259, 1000, '123456788'),
('eyu syu', 'addis ababa', 'mahletmen@gmail.com', 922337855, 'Nib bank', 1202259, 1000, '123456789'),
('eyu syu', 'addis ababa', 'mahletmen@gmail.com', 922337855, 'Nib bank', 1202259, 1000, '123456789'),
('eyu syu', 'addis ababa', 'mahletmen@gmail.com', 922337855, 'Nib bank', 1202259, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202259, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789'),
('mahlet adugna', 'addis abab', 'mahletzemen@gmail.co', 922337855, 'Nib bank', 1202258, 1000, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `charity_organizations`
--

CREATE TABLE `charity_organizations` (
  `name` varchar(11) NOT NULL,
  `accno` int(11) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charity_organizations`
--

INSERT INTO `charity_organizations` (`name`, `accno`, `balance`) VALUES
('mekedonia', 123456789, 12000),
('selam chari', 123456788, 40000),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `electricbills`
--

CREATE TABLE `electricbills` (
  `name` varchar(20) NOT NULL,
  `chargeamt` float NOT NULL,
  `lastpay` date NOT NULL,
  `paydeadline` date NOT NULL,
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electricbills`
--

INSERT INTO `electricbills` (`name`, `chargeamt`, `lastpay`, `paydeadline`, `id`) VALUES
('mahlet', 700, '2023-10-02', '2023-11-01', '1202258'),
('eyerusalem', 700, '2023-10-02', '2023-11-01', '1202259'),
('nolawit', 4000, '2023-10-03', '2023-10-18', '1202260');

-- --------------------------------------------------------

--
-- Table structure for table `hbooking`
--

CREATE TABLE `hbooking` (
  `name` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adults` int(22) NOT NULL,
  `child` int(22) NOT NULL,
  `rooms` int(22) NOT NULL,
  `type` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hname` varchar(11) NOT NULL,
  `dname` varchar(21) NOT NULL,
  `pname` varchar(21) NOT NULL,
  `id` varchar(21) NOT NULL,
  `service` varchar(21) NOT NULL,
  `charge` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hname`, `dname`, `pname`, `id`, `service`, `charge`) VALUES
('ICMC Hospit', 'Dr. Yabebal', 'Mahlet Adugna', '1202258', 'blood check', 500),
('ICMC Hospit', 'Dr Miheretu', 'Eyerusalem Seyum', '1202259', 'internal checkup', 900);

-- --------------------------------------------------------

--
-- Table structure for table `hospitalbalance`
--

CREATE TABLE `hospitalbalance` (
  `ano` float NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitalbalance`
--

INSERT INTO `hospitalbalance` (`ano`, `balance`) VALUES
(100023, 100500);

-- --------------------------------------------------------

--
-- Table structure for table `hotelbalance`
--

CREATE TABLE `hotelbalance` (
  `accno` varchar(20) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelbalance`
--

INSERT INTO `hotelbalance` (`accno`, `balance`) VALUES
('100022', 171752);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(20) NOT NULL,
  `pword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pword`) VALUES
('adu123', 'adu123'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `mekedoniaacc`
--

CREATE TABLE `mekedoniaacc` (
  `ano` int(20) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mekedoniaacc`
--

INSERT INTO `mekedoniaacc` (`ano`, `balance`) VALUES
(100024, 9002000);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `name` varchar(23) NOT NULL,
  `age` int(23) NOT NULL,
  `time` time(6) NOT NULL,
  `phono` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`name`, `age`, `time`, `phono`) VALUES
('mahlet Zemenu', 21, '20:00:00.000000', 922337855),
('mahlet Zemenu', 21, '20:00:00.000000', 922337855),
('mahlet Zemenu', 22, '21:00:00.000000', 922337850),
('mahlet Zemenu', 21, '20:00:00.000000', 922337855),
('mahlet Zemenu', 21, '20:00:00.000000', 922337855),
('mahlet Zemenu', 21, '20:00:00.000000', 922337855),
('mahlet Zemenu', 15, '19:00:00.000000', 922337855),
('mahlet Zemenu', 15, '19:00:00.000000', 922337855),
('mahlet Zemenu', 15, '19:00:00.000000', 922337855),
('mahlet Zemenu', 15, '19:00:00.000000', 922337855),
('mahlet Zemenu', 15, '19:00:00.000000', 922337855),
('mahlet Zemenu', 10, '19:00:00.000000', 922337855),
('mahlet Zemenu', 10, '22:36:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '21:37:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 15, '08:00:00.000000', 922337855),
('mahlet Zemenu', 15, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 20, '08:00:00.000000', 922337855),
('mahlet Zemenu', 22, '20:13:00.000000', 922337855),
('mahlet Zemenu', 22, '20:00:00.000000', 922337855),
('mahlet Zemenu', 22, '08:00:00.000000', 922337855),
('mahlet Zemenu', 15, '08:00:00.000000', 922337855),
('mahlet m', 17, '07:00:00.000000', 911081640),
('mahlet m', 17, '07:00:00.000000', 911081640),
('mah zem', 17, '08:00:00.000000', 922337855),
('mah zem', 17, '07:00:00.000000', 922337855),
('mah zem', 17, '07:00:00.000000', 922337855),
('mah zem', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 17, '07:00:00.000000', 922337855),
('mahlet Zemenu', 19, '12:00:00.000000', 922337855),
('mahlet Zemenu', 19, '00:00:00.000000', 922337855),
('mahlet Zemenu', 19, '12:00:00.000000', 922337855);

-- --------------------------------------------------------

--
-- Table structure for table `movieamount`
--

CREATE TABLE `movieamount` (
  `balance` float NOT NULL,
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieamount`
--

INSERT INTO `movieamount` (`balance`, `id`) VALUES
(10403.5, '100014');

-- --------------------------------------------------------

--
-- Table structure for table `popcorndrink`
--

CREATE TABLE `popcorndrink` (
  `popcorn` float NOT NULL,
  `drink` float NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popcorndrink`
--

INSERT INTO `popcorndrink` (`popcorn`, `drink`, `price`) VALUES
(25.67, 30.54, 5),
(25.67, 30.54, 5),
(25.67, 30.54, 5),
(25.67, 30.54, 5),
(25.67, 30.54, 5),
(25.67, 30.54, 5),
(25.67, 30.54, 5),
(35.54, 30.54, 6),
(35.54, 30.54, 6),
(35.54, 30.54, 6),
(35.54, 30.54, 6),
(35.54, 30.54, 6),
(35.54, 30.54, 66.08),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(35.54, 30.54, 66.08),
(25.67, 30.54, 56.21),
(25.67, 30.54, 56.21);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomtype` varchar(20) NOT NULL,
  `roomsleft` int(20) NOT NULL,
  `availablecheckin` date NOT NULL,
  `availablecheckout` date NOT NULL,
  `bednumbers` int(20) NOT NULL,
  `prices` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomtype`, `roomsleft`, `availablecheckin`, `availablecheckout`, `bednumbers`, `prices`) VALUES
('Mini suite', 2, '2023-10-02', '2023-10-07', 2, 0),
('Mini suite', 2, '2023-10-09', '2023-10-12', 1, 0),
('Executive suite', 5, '2023-10-16', '2023-10-21', 1, 0),
('Family suite', 5, '2023-10-01', '2023-10-07', 3, 0),
('presidentential suit', 5, '2023-10-22', '2023-10-28', 1, 0),
('Apartment-style', 4, '2023-10-09', '2023-10-20', 3, 0),
('standard room', -12, '2023-10-01', '2023-10-06', 3, 0),
('standard room', -12, '2023-10-01', '2023-10-06', 1, 0),
('standard room', -12, '2023-10-01', '2023-10-06', 2, 0),
('mini suit', 4, '2023-10-01', '2023-10-06', 2, 0),
('standard room', -12, '2023-10-01', '2023-10-06', 1, 0),
('mini suit', 4, '2023-10-01', '2023-10-06', 1, 0),
('Mini suite', -6, '2023-10-01', '2023-10-06', 1, 21955.3),
('standard room', -12, '2023-10-01', '2023-10-06', 1, 8969.2),
('standard room', -12, '2023-10-01', '2023-10-06', 2, 8969.2),
('standard room', 77, '2023-10-02', '2023-10-07', 1, 8969.2);

-- --------------------------------------------------------

--
-- Table structure for table `selamacc`
--

CREATE TABLE `selamacc` (
  `ano` int(20) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selamacc`
--

INSERT INTO `selamacc` (`ano`, `balance`) VALUES
(100025, 9000000);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `account` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pnumber` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`fname`, `lname`, `uname`, `psw`, `bank`, `account`, `address`, `pnumber`, `email`, `gender`, `age`) VALUES
('mahlet', 'Zemenu', 'adu123', '$2y$10$uWyyRPObs7BA3LYAlbfBPO4jQ68EJE0k.6BWilcSXL4w.I.vdrx8C', 'abiss', 121212, 'addis abab', 922337855, 'mahletzemen@gmail.com', 'female', 22),
('', '', '', '$2y$10$Zwg2bHq6pA/gjoHJtYjmw.wVLjF80q9k/QUg1Wp8wKtAytng6GvYW', '', 0, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `waterbills`
--

CREATE TABLE `waterbills` (
  `name` varchar(50) NOT NULL,
  `charge_amount` double NOT NULL,
  `last_payment` date NOT NULL,
  `pay_deadline` date NOT NULL,
  `ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waterbills`
--

INSERT INTO `waterbills` (`name`, `charge_amount`, `last_payment`, `pay_deadline`, `ID`) VALUES
('mahlet', 2000, '2023-09-01', '2023-10-01', '1202258'),
('eyerusalem', 3000, '2023-09-07', '2023-09-08', '1202259'),
('nolawit', 3000, '2023-10-01', '2023-10-14', '1202260');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
