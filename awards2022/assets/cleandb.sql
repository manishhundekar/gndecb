-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2019 at 09:06 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtuathletics2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `clgzoneid`
--

CREATE TABLE `clgzoneid` (
  `SLNO` int(11) NOT NULL,
  `CLGCODE` varchar(10) NOT NULL,
  `CLGNAME` varchar(200) NOT NULL,
  `CLGZONE` varchar(200) NOT NULL,
  `CLGZONEID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clgzoneid`
--

INSERT INTO `clgzoneid` (`SLNO`, `CLGCODE`, `CLGNAME`, `CLGZONE`, `CLGZONEID`) VALUES
(2, 'AT', 'Atria Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(3, 'BM', 'BM S College of Engineering', 'Bengaluru Central Zone Institutions', 3),
(4, 'CF', 'BM S College of Architecture', 'Bengaluru Central Zone Institutions', 3),
(5, 'BE', 'B M S{Even] College of Engineering', 'Bengaluru Central Zone Institutions', 3),
(6, 'BI', 'Bengaluru Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(7, 'BH', 'Bengaluru Technological Institute', 'Bengaluru Central Zone Institutions', 3),
(8, 'CR', 'CM R Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(9, 'CD', 'Cambridge Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(10, 'EC', 'East Point College of Engineering & Technology for Women', 'Bengaluru Central Zone Institutions', 3),
(11, 'EP', 'East Point College of Engineering & Technology', 'Bengaluru Central Zone Institutions', 3),
(12, 'GD', 'Gopalan College of Engineering & Management', 'Bengaluru Central Zone Institutions', 3),
(13, 'GO', 'Gopalan School of Architecture and Planning', 'Bengaluru Central Zone Institutions', 3),
(14, 'SE', 'Government SKSJTI [Evening]', 'Bengaluru Central Zone Institutions', 3),
(15, 'SK', 'Government SKSJTI', 'Bengaluru Central Zone Institutions', 3),
(16, 'GT', 'Govt. Tool Room & Training Centre', 'Bengaluru Central Zone Institutions', 3),
(17, 'HK', 'H K B XK Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(18, 'NH', 'New Horizon College of Engineering', 'Bengaluru Central Zone Institutions', 3),
(19, 'OX', 'Oxford College of Engineering', 'Bengaluru Central Zone Institutions', 3),
(20, 'SC', 'SCT Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(21, 'SP', 'SEA College of Engineering & Technology', 'Bengaluru Central Zone Institutions', 3),
(22, 'K', 'Sri Krishna School of Engineering & Management', 'Bengaluru Central Zone Institutions', 3),
(23, 'VI', 'Vemana Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(24, 'BG', 'B N M Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(25, 'DA', 'Dr. Ambedkar Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(26, 'EW', 'East West Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(27, 'RG', 'Rajiv Gandhi Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(28, 'MS', 'M S$ Ramaiah Institute of Technology', 'Bengaluru Central Zone Institutions', 3),
(29, '', 'VTU Regional Centre', 'Bengaluru Central Zone Institutions', 3),
(30, 'AY', 'Acharya Institute of Technology', 'Bengalore North Zone Institutions', 5),
(31, 'AA', 'Acharyar NRV School of Architecture', 'Bengalore North Zone Institutions', 5),
(32, 'AO', 'Achutha Institute of Technology', 'Bengalore North Zone Institutions', 5),
(33, 'BY', 'BM S Institute of Technology', 'Bengalore North Zone Institutions', 5),
(34, 'BS', 'Basava Academy of Engineering', 'Bengalore North Zone Institutions', 5),
(35, 'BQ', 'BMS School of Architecture', 'Bengalore North Zone Institutions', 5),
(36, 'BO', 'Brindavan College of Engineering', 'Bengalore North Zone Institutions', 5),
(37, 'CK', 'C Bairegowda Institute of Technology', 'Bengalore North Zone Institutions', 5),
(38, 'CC', 'Dr. Sri Sri Sri Shivakumara Mahaswamy College of Engineering', 'Bengalore North Zone Institutions', 5),
(39, 'AC', 'Alpha College of Engineering', 'Bengalore North Zone Institutions', 5),
(40, 'IC', 'Impact College of Engineering & Applied Science', 'Bengalore North Zone Institutions', 5),
(41, 'KN', 'K NS Institute of Technology', 'Bengalore North Zone Institutions', 5),
(42, 'ME', 'M S Engineering College', 'Bengalore North Zone Institutions', 5),
(43, 'NJ', 'Nadgir Institute of Engineering | & Technology', 'Bengalore North Zone Institutions', 5),
(44, 'NC', 'Nagarjuna College of Engineering & Technology', 'Bengalore North Zone Institutions', 5),
(45, 'NT', 'Nitte Meenakshi Institute of Technology', 'Bengalore North Zone Institutions', 5),
(46, 'PN', 'PN S Women’s Institute of Technology', 'Bengalore North Zone Institutions', 5),
(47, 'RL', 'R L Jalappa Institute of Technology', 'Bengalore North Zone Institutions', 5),
(48, 'RI', 'R R Institute of Technology', 'Bengalore North Zone Institutions', 5),
(49, 'RR', 'RR School of Architecture', 'Bengalore North Zone Institutions', 5),
(50, 'BN', 'SB M Institute of Technology', 'Bengalore North Zone Institutions', 5),
(51, 'SJ', 'SJC Institute of Technology', 'Bengalore North Zone Institutions', 5),
(52, 'VA', 'Sai Vidya Institute of Technology', 'Bengalore North Zone Institutions', 5),
(53, 'ST', 'Sambhram Institute of Technology', 'Bengalore North Zone Institutions', 5),
(54, 'SG', 'Sapthagiri College of Engineering', 'Bengalore North Zone Institutions', 5),
(55, 'MV', 'Sir M Visvesvaraya Institutte of Technology', 'Bengalore North Zone Institutions', 5),
(56, 'KT', 'Sri Krishana Institute of Technology', 'Bengalore North Zone Institutions', 5),
(57, 'PL', 'Sri Pillappa College of Engineering', 'Bengalore North Zone Institutions', 5),
(58, 'RC', 'Sri Revana Siddeshwara Institute of Technology', 'Bengalore North Zone Institutions', 5),
(59, 'GV', 'Dr. T Timmayya Institute of Technology', 'Bengalore North Zone Institutions', 5),
(60, 'MJ', 'MV J College of Engineering', 'Bengalore North Zone Institutions', 5),
(61, 'VJ', 'Vijayavithal Institute of Technology', 'Bengalore North Zone Institutions', 5),
(62, 'VE', 'Sri Venkateshwara College of Engineering', 'Bengalore North Zone Institutions', 5),
(63, 'HS', 'Shah-Shib College of Engineering', 'Bengalore North Zone Institutions', 5),
(64, 'AJ', 'Adharsha Institute of Technology', 'Bengalore North Zone Institutions', 5),
(65, 'AN', 'Adhitya Academy of Architecture and Management', 'Bengalore North Zone Institutions', 5),
(66, 'NS', 'Nitte School of Architecture', 'Bengalore North Zone Institutions', 5),
(67, 'IV', 'Sir M V School of Architecture', 'Bengalore North Zone Institutions', 5),
(68, 'IE', 'Brindavana college of Architecture', 'Bengalore North Zone Institutions', 5),
(69, 'KT', 'Sri Krishna Institute of Techology', 'Bengalore North Zone Institutions', 5),
(70, '', 'VTU PG Centre', 'Bengalore North Zone Institutions', 5),
(71, 'AP', 'Acharya Pathashala Rural College of Engineering', 'Bengalore South Zone Institutions', 4),
(72, 'AH', 'ACS College of Engineering', 'Bengalore South Zone Institutions', 4),
(73, 'AR', 'Amrutha Institute of Engineering and\r\nManagement Sciences\r\n', 'Bengalore South Zone Institutions', 4),
(74, 'DC', 'Dayananda College of Architecture', 'Bengalore South Zone Institutions', 4),
(75, 'CE', 'City Engineering College', 'Bengalore South Zone Institutions', 4),
(76, 'DT', 'Dayananda Sagar Academy of Technology & Memt., [Technical Campus]', 'Bengalore South Zone Institutions', 4),
(77, 'DS', 'Dayananda Sagar College of Engineering', 'Bengalore South Zone Institutions', 4),
(78, 'DB', 'Don Bosco Institute of Technology', 'Bengalore South Zone Institutions', 4),
(79, 'GA', 'Global Academy of Technology', 'Bengalore South Zone Institutions', 4),
(80, 'JS', 'JSS Academy of Technical Education', 'Bengalore South Zone Institutions', 4),
(81, 'JV', 'Jnana Vikas Institute of Technology Bidadi', 'Bengalore South Zone Institutions', 4),
(82, 'JT', 'Jyothy Inst. of Technology', 'Bengalore South Zone Institutions', 4),
(83, 'KS', 'K S Institute of Technology', 'Bengalore South Zone Institutions', 4),
(84, 'KG', 'Kammavari Sangh Group & Institutions', 'Bengalore South Zone Institutions', 4),
(85, 'PE', 'PES Institute of Technology,', 'Bengalore South Zone Institutions', 4),
(86, 'RN', 'RN S Institute of Technology', 'Bengalore South Zone Institutions', 4),
(87, 'RQ', 'RNS School of Architecture', 'Bengalore South Zone Institutions', 4),
(88, 'RV', 'R V College of Engineering', 'Bengalore South Zone Institutions', 4),
(89, 'RR', 'RajaRajesheshwari College of Engineering', 'Bengalore South Zone Institutions', 4),
(90, 'JB', 'S J B Institute of Technology', 'Bengalore South Zone Institutions', 4),
(91, 'SB', 'Sri Sai Ram Engineering College', 'Bengalore South Zone Institutions', 4),
(92, 'VK', 'Vivekananda Institute of Technology', 'Bengalore South Zone Institutions', 4),
(93, 'YD', 'Yellamma Dasappa Institute of Tech', 'Bengalore South Zone Institutions', 4),
(94, 'TJ', 'T John College of Engineering,', 'Bengalore South Zone Institutions', 4),
(95, 'AM', 'AMC College of Engineering,', 'Bengalore South Zone Institutions', 4),
(96, 'BT', 'BTL Institute of Technology & Management', 'Bengalore South Zone Institutions', 4),
(97, 'BC', 'Bengaluru College of Engineering &\r\nTechnology ', 'Bengalore South Zone Institutions', 4),
(98, 'PE', 'P ES School of Engineering,', 'Bengalore South Zone Institutions', 4),
(99, 'VG', 'Sri vidhya Vinayaka Institute of Technology', 'Bengalore South Zone Institutions', 4),
(100, 'JA', 'SJB School of Architecture and Planning', 'Bengalore South Zone Institutions', 4),
(101, 'II', 'Islamiah Institute Of Technology a Top of FormBottom of Form', 'Bengalore South Zone Institutions', 4),
(102, 'RW', 'R V College of Architecture', 'Bengalore South Zone Institutions', 4),
(103, 'PC', 'BGS School of Architecture and Planning', 'Bengalore South Zone Institutions', 4),
(104, 'KF', 'KS School of Architecture', 'Bengalore South Zone Institutions', 4),
(105, 'AV', 'AGM Rural College of Engineering &', 'Belgavi Zone Institutions', 1),
(106, 'AG', 'Angadi Institute of Technology &Management', 'Belgavi Zone Institutions', 1),
(107, 'BV', 'B VB College of Engineering & Technology', 'Belgavi Zone Institutions', 1),
(108, 'GI', 'Gogte Institute of Technology', 'Belgavi Zone Institutions', 1),
(109, 'GO', 'Govt. Engineering College,Haveri', 'Belgavi Zone Institutions', 1),
(110, 'HN', 'Hirasugar Institute of Technology', 'Belgavi Zone Institutions', 1),
(111, 'JI', 'Jain College of Engineering,', 'Belgavi Zone Institutions', 1),
(112, 'KE', 'K LE Institute of Technology,Hubli', 'Belgavi Zone Institutions', 1),
(113, 'KD', 'KL E’s College of Engineering &  Technology,Chikkodi', 'Belgavi Zone Institutions', 1),
(114, 'KL', 'KL E\'s College of Engineering & Technology,Belagavi', 'Belgavi Zone Institutions', 1),
(115, 'VD', 'Karnataka Law Society, Vishwanathrao Desphande Rural Institute of Technology', 'Belgavi Zone Institutions', 1),
(116, 'MM', 'Maratha Mandal Engineering College', 'Belgavi Zone Institutions', 1),
(117, 'RH', 'Rural Engineering College', 'Belgavi Zone Institutions', 1),
(118, 'SD', 'S D M College of Engineering & Technology', 'Belgavi Zone Institutions', 1),
(119, 'BU', 'S G Balekundri Institute of Technology', 'Belgavi Zone Institutions', 1),
(120, 'SR', 'ST J Institute of Technology', 'Belgavi Zone Institutions', 1),
(121, 'HA', 'Shaikh College of Engineering & Technology', 'Belgavi Zone Institutions', 1),
(122, 'KA', 'Smt. Kamala & Vekappa M.\r\nAgadi College of Engineering & Technology', 'Belgavi Zone Institutions', 1),
(123, 'TG', 'Sri Tontadarya College of Engineering', 'Belgavi Zone Institutions', 1),
(124, 'VS', 'V S M’s Institute of Technology', 'Belgavi Zone Institutions', 1),
(125, '', 'VTU Regional Belagavi', 'Belgavi Zone Institutions', 1),
(126, 'AE', 'Appa Institute of Engineering & Technology', 'Kalaburgi Zone Institutions', 2),
(127, 'BR', 'Ballari Institute of Technology & Management', 'Kalaburgi Zone Institutions', 2),
(128, 'BK', 'Basava Kalyan Engineering College', 'Kalaburgi Zone Institutions', 2),
(129, 'BL', 'BLDEA’s College of Engineering & Technology', 'Kalaburgi Zone Institutions', 2),
(130, 'GF', 'Godutai Engineering College for Women', 'Kalaburgi Zone Institutions', 2),
(131, 'GB', 'Govt. Engineering College,Bellary', 'Kalaburgi Zone Institutions', 2),
(132, 'GU', 'Govt. Engineering College,Raichur', 'Kalaburgi Zone Institutions', 2),
(133, 'GN', 'Guru Nanak Dev Engineering College', 'Kalaburgi Zone Institutions', 2),
(134, 'KB', 'KBN College of Engineering', 'Kalaburgi Zone Institutions', 2),
(135, 'KC', 'KCT Engineering College', 'Kalaburgi Zone Institutions', 2),
(136, 'LA', 'Lingaraj Appa Engineering College', 'Kalaburgi Zone Institutions', 2),
(137, 'NA', 'Navodaya Institute of Technology', 'Kalaburgi Zone Institutions', 2),
(138, 'PD', 'PD A College of Engineering', 'Kalaburgi Zone Institutions', 2),
(139, 'PG', 'Proudadevaraya Institute of Technology', 'Kalaburgi Zone Institutions', 2),
(140, 'VC', 'Rao Bahaddur Y Mahabaleshwarappa Engineering College', 'Kalaburgi Zone Institutions', 2),
(141, 'RB', 'Rural Engineering College,Bhalki', 'Kalaburgi Zone Institutions', 2),
(142, 'SL', 'S LN College of Engineering', 'Kalaburgi Zone Institutions', 2),
(143, 'TS', 'Shetty Institute of Technology', 'Kalaburgi Zone Institutions', 2),
(144, 'VN', 'Veerappa Nisty Engineering College', 'Kalaburgi Zone Institutions', 2),
(145, 'SA', 'SECAB Institute of Engineering & Technology', 'Kalaburgi Zone Institutions', 2),
(146, 'MB', 'Malik Sandal Inst. of Arts & Architecture', 'Kalaburgi Zone Institutions', 2),
(147, 'LB', 'Biluru Gurubasava Mahaswamiji institute of technology', 'Kalaburgi Zone Institutions', 2),
(148, 'BA', 'Basaveshwara Engineering College', 'Kalaburgi Zone Institutions', 2),
(149, '', 'VTU Regional Office Kalaburagi', 'Kalaburgi Zone Institutions', 2),
(150, 'AI', 'Adichunchanagiri Institute of Technology', 'Central Karnataka Institutions', 8),
(151, 'AK', 'Akshaya Institute of Technology', 'Central Karnataka Institutions', 8),
(152, 'BB', 'Bahubali College of Engineering', 'Central Karnataka Institutions', 8),
(153, 'BD', 'Bapuji Institute of Engineering Technology', 'Central Karnataka Institutions', 8),
(154, 'GM', 'G M Institute of Technology', 'Central Karnataka Institutions', 8),
(155, 'GH', 'Govt. Engineering College,Hassan', 'Central Karnataka Institutions', 8),
(156, 'HM', 'HM S Institute of Technology', 'Central Karnataka Institutions', 8),
(157, 'JN', 'J NN College of Engineering Navule', 'Central Karnataka Institutions', 8),
(158, 'JI', 'Jain Institute of Technology', 'Central Karnataka Institutions', 8),
(159, 'KI', 'Kalpataru Institute of Technology', 'Central Karnataka Institutions', 8),
(160, 'MC', 'Malnad College of Engineering', 'Central Karnataka Institutions', 8),
(161, 'PM', 'PES Institute of Technology & Management', 'Central Karnataka Institutions', 8),
(162, 'RA', 'Rajeev Institute of Technology', 'Central Karnataka Institutions', 8),
(163, 'SM', 'S J M Institute of Technology', 'Central Karnataka Institutions', 8),
(164, 'SV', 'Shridevi Institute of Engineering & Technology', 'Central Karnataka Institutions', 8),
(165, 'SI', 'Siddaganga Institute of Technology', 'Central Karnataka Institutions', 8),
(166, 'SW', 'Sri Basaveshwar Institute ofTechnology', 'Central Karnataka Institutions', 8),
(167, 'CG', 'Sri Channabasaveshwara Institute of Technology', 'Central Karnataka Institutions', 8),
(168, 'YG', 'Yagachi Institute of Technology', 'Central Karnataka Institutions', 8),
(169, 'UB', 'UBDT College of Engineering', 'Central Karnataka Institutions', 8),
(170, 'AL', 'Alva’s Institute of Engineering and Technology', 'Mangalore Zone Institutions', 7),
(171, 'BP', 'Beary’s Institute of Technology,', 'Mangalore Zone Institutions', 7),
(172, 'CB', 'Canara Engineering College', 'Mangalore Zone Institutions', 7),
(173, 'DM', 'Dr. M V Shetty Institute of Technology', 'Mangalore Zone Institutions', 7),
(174, 'GP', 'Govt. Engineering College,Karawar', 'Mangalore Zone Institutions', 7),
(175, 'KV', 'KVG College of Engineering', 'Mangalore Zone Institutions', 7),
(176, 'KM', 'Karavali Institute of Technology', 'Mangalore Zone Institutions', 7),
(177, 'MT', 'Mangalurulnstitute of Engineering | & Technology', 'Mangalore Zone Institutions', 7),
(178, 'MK', 'Moodalkatte Institute of Technology', 'Mangalore Zone Institutions', 7),
(179, 'NM', 'N MAM Institute of Technology', 'Mangalore Zone Institutions', 7),
(180, 'PA', 'P A College of Engineering', 'Mangalore Zone Institutions', 7),
(181, 'PR', 'Prasaanna College of Engineering  & Technology', 'Mangalore Zone Institutions', 7),
(182, 'SF', 'Sahyadri Institute of Technology  & Management', 'Mangalore Zone Institutions', 7),
(183, 'SO', 'Saint Joseph College of Engineering & Technology', 'Mangalore Zone Institutions', 7),
(184, 'SH', 'Shree Devi Institute of Technology', 'Mangalore Zone Institutions', 7),
(185, 'SU', 'Shri Dharmasthala Manjunatheshwar Educational Society [Regd]', 'Mangalore Zone Institutions', 7),
(186, 'MW', 'Shri Madhwa Vadiraja Institute of Technology & Management', 'Mangalore Zone Institutions', 7),
(187, 'SN', 'Srinivas Institute of Technology', 'Mangalore Zone Institutions', 7),
(188, 'ES', 'Srinivas School of Engineering', 'Mangalore Zone Institutions', 7),
(189, 'VP', 'Vivekananda College of Engg. & Tech', 'Mangalore Zone Institutions', 7),
(190, 'AB', 'Anjuman Engineering College', 'Mangalore Zone Institutions', 7),
(191, 'MR', 'Mangaluru Marine College of Engineering and Technology', 'Mangalore Zone Institutions', 7),
(192, '01', 'Girija Bai Sail Institute of Technology', 'Mangalore Zone Institutions', 7),
(193, 'AD', 'Academy for Technical and Management Excellence', 'Mysore Zone Institutions', 6),
(194, 'BW', 'BGS Institute of Technology', 'Mysore Zone Institutions', 6),
(195, 'CA', 'Cauvery Institute of Technology', 'Mysore Zone Institutions', 6),
(196, 'CI', 'Coorg Institute of Technology', 'Mysore Zone Institutions', 6),
(197, 'CM', 'Wadiyar center for architecture', 'Mysore Zone Institutions', 6),
(198, 'EK', 'Ekalavya Institute of Technology', 'Mysore Zone Institutions', 6),
(199, 'GW', 'Be GSS S Institute of Engineering & Technology for Women', 'Mysore Zone Institutions', 6),
(200, 'MG', 'G. Madegowda institute of Technolog', 'Mysore Zone Institutions', 6),
(201, 'GC', 'Ghousia College of Engineering,', 'Mysore Zone Institutions', 6),
(202, 'GE', 'Govt. Engineering College,Chamarajnagara', 'Mysore Zone Institutions', 6),
(203, 'GK', 'Govt. Engineering College,Mandya', 'Mysore Zone Institutions', 6),
(204, 'GL', 'Govt. Engineering College,Kushalanagar', 'Mysore Zone Institutions', 6),
(205, 'GG', 'Govt. Engineering College,Ramanagara', 'Mysore Zone Institutions', 6),
(206, 'GR', 'Govt. Tool Room & Training Center', 'Mysore Zone Institutions', 6),
(207, 'MH', 'Maharaja Institute of Technology', 'Mysore Zone Institutions', 6),
(208, 'NE', 'National Institute of Engineering(Even)', 'Mysore Zone Institutions', 6),
(209, 'NI', 'National Institute of Engineering', 'Mysore Zone Institutions', 6),
(210, 'NN', 'NIE Institute of Technology', 'Mysore Zone Institutions', 6),
(211, 'PS', 'PE S College of Engineering', 'Mysore Zone Institutions', 6),
(212, 'SZ', 'Sampoorna Institute of Technology & Research', 'Mysore Zone Institutions', 6),
(213, 'JC', 'Sri Jayachamarajendra', 'Mysore Zone Institutions', 6),
(214, 'JE', 'Sri Jayachamrajendra College of Engineering [Even]', 'Mysore Zone Institutions', 6),
(215, 'VV', 'Vidya Vardhaka College of Engineering', 'Mysore Zone Institutions', 6),
(216, 'VM', 'Vidya Vikas Institute of Technology', 'Mysore Zone Institutions', 6),
(217, 'MA', 'Mysuru School of Architecture', 'Mysore Zone Institutions', 6),
(218, 'MO', 'Mysuru College of Engineering | and Management', 'Mysore Zone Institutions', 6),
(219, 'MU', 'Mysuru royal Institute of Technology', 'Mysore Zone Institutions', 6);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `CLGDBID` int(11) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `CLGNAME` varchar(200) NOT NULL,
  `CLGADD` varchar(500) NOT NULL,
  `CLGCITY` varchar(50) NOT NULL,
  `CLGPIN` varchar(20) NOT NULL,
  `CLGSTATE` varchar(50) NOT NULL,
  `CLGCOU` varchar(50) NOT NULL,
  `CLGCODE` varchar(10) NOT NULL,
  `CLGZONE` int(11) NOT NULL,
  `CLGCONTACT` varchar(20) NOT NULL,
  `PRINAM` varchar(200) NOT NULL,
  `PRICNT` varchar(20) NOT NULL,
  `PDNAME` varchar(200) NOT NULL,
  `PDCNT` varchar(20) NOT NULL,
  `PDEMAIL` varchar(100) NOT NULL,
  `ACCREQ` varchar(10) NOT NULL,
  `DOA` varchar(30) NOT NULL,
  `TOA` varchar(30) NOT NULL,
  `NMP` int(11) NOT NULL,
  `NFP` int(11) NOT NULL,
  `UNAME` varchar(100) NOT NULL,
  `UPASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `PID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `ANAME` varchar(200) NOT NULL,
  `AFNAME` varchar(200) NOT NULL,
  `PHOTO` varchar(500) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `USN` varchar(30) NOT NULL,
  `PRTSEM` varchar(10) NOT NULL,
  `TPYEAR` varchar(10) NOT NULL,
  `DOCA` varchar(20) NOT NULL,
  `DOPA` varchar(100) NOT NULL,
  `PPGAME` varchar(150) NOT NULL,
  `PPYEAR` varchar(20) NOT NULL,
  `EVENT1` varchar(100) NOT NULL,
  `EVENT2` varchar(100) NOT NULL,
  `RELAYEVT` varchar(100) NOT NULL,
  `RESEVENT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `SCREF` int(11) NOT NULL,
  `PARTID` int(11) NOT NULL,
  `EVENT` int(11) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `ROUND` int(11) NOT NULL,
  `HEAT` int(11) NOT NULL,
  `POSITION` int(11) NOT NULL,
  `QUALSTATUS` int(11) NOT NULL,
  `TIME` float NOT NULL,
  `REMARKS` varchar(40) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`SCREF`, `PARTID`, `EVENT`, `GENDER`, `ROUND`, `HEAT`, `POSITION`, `QUALSTATUS`, `TIME`, `REMARKS`) VALUES
(1, 261, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(2, 201, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(3, 221, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(4, 301, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(5, 343, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(6, 241, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(7, 363, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(8, 322, 1, 'MALE', 1, 1, 1, 0, 0, ''),
(9, 1, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(10, 132, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(11, 62, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(12, 42, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(13, 153, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(14, 22, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(15, 164, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(16, 102, 1, 'FEMALE', 1, 1, 1, 0, 0, ''),
(17, 271, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(18, 311, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(19, 353, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(20, 333, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(21, 211, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(22, 231, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(23, 251, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(24, 373, 1, 'MALE', 1, 2, 1, 0, 0, ''),
(25, 263, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(26, 303, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(27, 203, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(28, 345, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(29, 244, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(30, 223, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(31, 324, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(32, 366, 3, 'MALE', 1, 1, 1, 0, 0, ''),
(33, 302, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(34, 272, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(35, 312, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(36, 262, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(37, 354, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(38, 334, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(39, 392, 1, 'MALE', 1, 5, 1, 0, 0, ''),
(40, 282, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(41, 399, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(42, 292, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(43, 397, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(44, 344, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(45, 391, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(46, 393, 1, 'MALE', 1, 6, 1, 1, 0, ''),
(47, 264, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(48, 314, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(49, 274, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(50, 355, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(51, 394, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(52, 325, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(53, 336, 3, 'MALE', 1, 5, 1, 1, 0, ''),
(54, 209, 10, 'MALE', 1, 1, 3, 0, 15.2, ''),
(55, 269, 10, 'MALE', 1, 1, 1, 0, 13.1, ''),
(56, 249, 10, 'MALE', 1, 1, 4, 0, 13.7, ''),
(57, 310, 10, 'MALE', 1, 1, 2, 0, 14.1, ''),
(58, 229, 10, 'MALE', 1, 1, 5, 0, 15.8, ''),
(59, 352, 10, 'MALE', 1, 1, 6, 0, 11.1, ''),
(60, 331, 10, 'MALE', 1, 1, 7, 0, 13.9, ''),
(61, 371, 10, 'MALE', 1, 1, 8, 0, 14.4, ''),
(62, 321, 10, 'MALE', 1, 2, 2, 0, 13, ''),
(63, 279, 10, 'MALE', 1, 2, 1, 0, 12, ''),
(64, 260, 10, 'MALE', 1, 2, 4, 0, 12.1, ''),
(65, 219, 10, 'MALE', 1, 2, 3, 0, 14, ''),
(66, 239, 10, 'MALE', 1, 2, 5, 0, 13.1, ''),
(67, 362, 10, 'MALE', 1, 2, 6, 0, 14.1, ''),
(68, 381, 10, 'MALE', 1, 2, 8, 0, 14.5, ''),
(69, 330, 10, 'MALE', 1, 2, 7, 0, 15, ''),
(70, 289, 10, 'MALE', 1, 3, 1, 0, 10, ''),
(71, 210, 10, 'MALE', 1, 3, 1, 0, 12, ''),
(72, 309, 10, 'MALE', 1, 3, 1, 0, 11, ''),
(73, 230, 10, 'MALE', 1, 3, 1, 0, 14, ''),
(74, 342, 10, 'MALE', 1, 3, 1, 0, 15, ''),
(75, 250, 10, 'MALE', 1, 3, 1, 0, 13, ''),
(76, 372, 10, 'MALE', 1, 3, 1, 0, 14.5, ''),
(77, 299, 10, 'MALE', 1, 4, 1, 0, 13, ''),
(78, 320, 10, 'MALE', 1, 4, 1, 0, 0, ''),
(79, 220, 10, 'MALE', 1, 4, 1, 0, 0, ''),
(80, 259, 10, 'MALE', 1, 4, 1, 0, 0, ''),
(81, 361, 10, 'MALE', 1, 4, 1, 0, 0, ''),
(82, 332, 10, 'MALE', 1, 4, 1, 0, 0, ''),
(83, 382, 10, 'MALE', 1, 4, 1, 0, 0, ''),
(84, 270, 10, 'MALE', 1, 5, 1, 0, 13, ''),
(85, 280, 10, 'MALE', 1, 5, 1, 0, 0, ''),
(86, 290, 10, 'MALE', 1, 5, 1, 0, 0, ''),
(87, 300, 10, 'MALE', 1, 5, 1, 0, 0, ''),
(88, 351, 10, 'MALE', 1, 5, 1, 0, 0, ''),
(89, 240, 10, 'MALE', 1, 5, 1, 0, 0, ''),
(90, 341, 10, 'MALE', 1, 5, 1, 0, 0, ''),
(92, 352, 10, 'MALE', 2, 3, 1, 0, 1, '11g'),
(93, 299, 10, 'MALE', 2, 3, 3, 0, 3, '3g'),
(94, 362, 10, 'MALE', 2, 3, 6, 0, 6, '6g'),
(95, 219, 10, 'MALE', 2, 3, 5, 0, 5, '5g'),
(96, 269, 10, 'MALE', 2, 3, 4, 0, 4, '4g'),
(97, 260, 10, 'MALE', 2, 3, 2, 0, 2, '2g'),
(98, 372, 10, 'MALE', 2, 3, 7, 0, 7, '7g'),
(99, 209, 10, 'MALE', 2, 3, 8, 0, 8, '8g');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `SNO` int(11) NOT NULL,
  `SNAME` varchar(100) NOT NULL,
  `TYPE` int(11) NOT NULL,
  `MPGEN` int(11) NOT NULL DEFAULT '0',
  `FPGEN` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`SNO`, `SNAME`, `TYPE`, `MPGEN`, `FPGEN`) VALUES
(1, '100 MTS', 1, 0, 0),
(2, '200 MTS', 1, 0, 0),
(3, '400 MTS', 1, 0, 0),
(4, '800 MTS', 1, 0, 0),
(5, '1500 MTS', 11, 0, 0),
(6, '5000 MTS', 11, 0, 0),
(7, '10000 MTS', 11, 0, 0),
(8, '20KM Walking Race', 22, 0, 0),
(9, '110 MTS Hurdles-MALE/100 MTS Hurdles-FEMALE', 1, 0, 0),
(10, '400 MTS Hurdles', 1, 0, 0),
(11, 'SHOT PUT', 33, 0, 0),
(12, 'DISCUS THROW', 33, 0, 0),
(13, 'JAVELIN THROW', 33, 0, 0),
(14, 'HAMMER THROW', 33, 0, 0),
(15, 'BROAD JUMP', 33, 0, 0),
(16, 'HIGH JUMP', 2, 0, 0),
(17, 'TRIPLE JUMP', 33, 0, 0),
(18, 'POLE VAULT', 2, 0, 0),
(19, 'DECATHLON-MALE/HEPTATHLON-FEMALE', 3, 0, 0),
(20, 'HALF MARATHON', 22, 0, 0),
(21, '4x 100 MTS RELAY', 5, 0, 0),
(22, '4x 400 MTS RELAY', 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tempprofromatables`
--

CREATE TABLE `tempprofromatables` (
  `ref` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `round` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `z1` varchar(200) NOT NULL,
  `z2` varchar(200) NOT NULL,
  `z3` varchar(200) NOT NULL,
  `z4` varchar(200) NOT NULL,
  `z5` varchar(200) NOT NULL,
  `z6` varchar(200) NOT NULL,
  `z7` varchar(200) NOT NULL,
  `z8` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempprofromatables`
--

INSERT INTO `tempprofromatables` (`ref`, `event`, `gender`, `round`, `row`, `z1`, `z2`, `z3`, `z4`, `z5`, `z6`, `z7`, `z8`) VALUES
(1, 1, 'MALE', 1, 1, '261-Deepak-7-Agadi College of Engineering & Technology-AC', '301-Akash-20-Appa Institute of Engineering & Technology-ET', '201-Aarav-1-Cambridge Institute of Technology-CI', '241-Dev-5-Dayananda Sagar College of Engineering-DS', '221-Mohan-3-Acharya Institute of Technology-AI', '343-Stephan-15-Vidya Vikas Institute of Technology-VV', '322-Vineet-13-Karavali Institute of Technology-KI', '363-Sankalp-11-PES Institute of Technology & Management-PE'),
(2, 1, 'MALE', 1, 2, '271-Ian-8-S G Balekundri Institute of Technology-BI', '311-Manik-21-Godutai Engineering College for Women-GE', '211-Kabir-2-East Point College of Engineering & Technology-EP', '251-Pranav-6-Global Academy of Technology-GA', '231-Rajiv-4-Brindavan College of Engineering-BC', '353-Rajesh-16-Sri Jayachamarajendra-JY', '333-Sujal-14-Dr. M V Shetty Institute of Technology-ST', '373-Anup-12-Shridevi Institute of Engineering & Technology-SI'),
(3, 1, 'MALE', 1, 3, '281-Dhiraj-9-Appa Institute of Engineering & Technology-AE', '398-Sunil-22-Guru Nanak Dev Engineering College-GN', '202-Vivaan-1-Cambridge Institute of Technology-CI', '242-Parth-5-Dayananda Sagar College of Engineering-DS', '222-Prem-3-Acharya Institute of Technology-AI', '396-Anup-29-Coorg Institute of Technology-CO', 'NULL', '364-Harshith-11-PES Institute of Technology & Management-PE'),
(4, 1, 'MALE', 1, 4, '291-Mandar-10-Guru Nanak Dev Engineering College-GN', '400-guru-22-Guru Nanak Dev Engineering College-GN', '212-Kadhir-2-East Point College of Engineering & Technology-EP', '252-Ritvik-6-Global Academy of Technology-GA', '232-Tarun-4-Brindavan College of Engineering-BC', 'NULL', '323-Saikumar-13-Karavali Institute of Technology-KI', '374-Summet-12-Shridevi Institute of Engineering & Technology-SI'),
(5, 1, 'MALE', 1, 5, '262-Manoj-7-Agadi College of Engineering & Technology-AC', '302-Adarsh-20-Appa Institute of Engineering & Technology-ET', '272-Immanuel-8-S G Balekundri Institute of Technology-BI', '312-Lokesh-21-Godutai Engineering College for Women-GE', 'NULL', '354-Raj-16-Sri Jayachamarajendra-JY', '334-Veeresh-14-Dr. M V Shetty Institute of Technology-ST', '392-Premdas-31-Bearyâ€™s Institute of Technology-BI'),
(6, 1, 'MALE', 1, 6, '282-Ekana-9-Appa Institute of Engineering & Technology-AE', '399-Vineet-22-Guru Nanak Dev Engineering College-GN', '397-Anup-29-Coorg Institute of Technology-CO', '292-Mandeep-10-Guru Nanak Dev Engineering College-GN', '393-Dheeraj-29-Coorg Institute of Technology-CO', '344-Omkar-15-Vidya Vikas Institute of Technology-VV', '391-Prem-31-Bearyâ€™s Institute of Technology-BI', 'NULL'),
(7, 1, 'FEMALE', 1, 1, '62-Deepali-7-Agadi College of Engineering & Technology-AC', '132-Nirmitha-39-Veerappa Nisty Engineering College-KS', '1-Avni-1-Cambridge Institute of Technology-CI', '42-Aadarshini-5-Dayananda Sagar College of Engineering-DS', '22-Dakshina-3-Acharya Institute of Technology-AI', '153-Parineetha-28-BGS Institute of Technology-BG', '164-Poojashree-41-Dr. M V Shetty Institute of Technology-KS', '102-Leelavati-11-PES Institute of Technology & Management-PE'),
(8, 1, 'FEMALE', 1, 2, '72-Kajal-8-S G Balekundri Institute of Technology-BI', '122-Neha-44-Govt. Engineering College,Bellary-GB', '12-Aadhya-2-East Point College of Engineering & Technology-EP', '53-Aditha-6-Global Academy of Technology-GA', '32-Aashaka-4-Brindavan College of Engineering-BC', '142-Paavani-42-V.S Alwas Shetty Institute of Technology-KS', 'NULL', '112-Naageshwari-12-Shridevi Institute of Engineering & Technology-SI'),
(9, 1, 'FEMALE', 1, 3, '82-Khushi-9-Appa Institute of Engineering & Technology-AE', '133-Nisha-39-Veerappa Nisty Engineering College-KS', '2-Arya-1-Cambridge Institute of Technology-CI', '43-Aahana-5-Dayananda Sagar College of Engineering-DS', '23-Eashita-3-Acharya Institute of Technology-AI', 'NULL', '163-Pooja-41-Dr. M V Shetty Institute of Technology-KS', '103-Likitha-11-PES Institute of Technology & Management-PE'),
(10, 1, 'FEMALE', 1, 4, '92-Lakini-10-Guru Nanak Dev Engineering College-GN', '123-Netra-44-Govt. Engineering College,Bellary-GB', '13-Anita-2-East Point College of Engineering & Technology-EP', '52-Adwiteya-6-Global Academy of Technology-GA', 'NULL', '143-Padma-42-V.S Alwas Shetty Institute of Technology-KS', '176-Raakhi-45-Girija Bai Sail Institute of Technology-01', '113-Naayaa-12-Shridevi Institute of Engineering & Technology-SI'),
(11, 1, 'FEMALE', 1, 5, '63-Deepanjali-7-Agadi College of Engineering & Technology-AC', '73-Kalpini-8-S G Balekundri Institute of Technology-BI', '83-Khushali-9-Appa Institute of Engineering & Technology-AE', '93-Lakshana-10-Guru Nanak Dev Engineering College-GN', '33-Aashi-4-Brindavan College of Engineering-BC', '154-Parineeti-28-BGS Institute of Technology-BG', '175-Raagini-45-Girija Bai Sail Institute of Technology-01', 'NULL'),
(12, 3, 'MALE', 1, 1, '263-Shamu-7-Agadi College of Engineering & Technology-AC', '303-Abhishek-20-Appa Institute of Engineering & Technology-ET', '203-Aditya-1-Cambridge Institute of Technology-CI', '244-Anupam-5-Dayananda Sagar College of Engineering-DS', '223-Rahul-3-Acharya Institute of Technology-AI', '345-Raghu-15-Vidya Vikas Institute of Technology-VV', '324-Kiran-13-Karavali Institute of Technology-KI', '366-Nitin-11-PES Institute of Technology & Management-PE'),
(13, 3, 'MALE', 1, 2, '273-Adhav-8-S G Balekundri Institute of Technology-BI', '313-Harsh-21-Godutai Engineering College for Women-GE', '213-Arush-2-East Point College of Engineering & Technology-EP', '253-Veeresh-6-Global Academy of Technology-GA', '233-Tara-4-Brindavan College of Engineering-BC', '356-Arya-16-Sri Jayachamarajendra-JY', 'NULL', '375-Aleem-12-Shridevi Institute of Engineering & Technology-SI'),
(14, 3, 'MALE', 1, 3, '283-Gopal-9-Appa Institute of Engineering & Technology-AE', '384-Akshay-22-Guru Nanak Dev Engineering College-GN', '204-Vihaan-1-Cambridge Institute of Technology-CI', '243-Anurag-5-Dayananda Sagar College of Engineering-DS', '224-Akash-3-Acharya Institute of Technology-AI', 'NULL', '387-Sharan-31-Bearyâ€™s Institute of Technology-BI', '365-Girish-11-PES Institute of Technology & Management-PE'),
(15, 3, 'MALE', 1, 4, '293-Shubham-10-Guru Nanak Dev Engineering College-GN', '304-Aditya-20-Appa Institute of Engineering & Technology-ET', '214-Farahan-2-East Point College of Engineering & Technology-EP', '254-Jai-6-Global Academy of Technology-GA', 'NULL', '346-Vinayak-15-Vidya Vikas Institute of Technology-VV', '390-Shriram-31-Bearyâ€™s Institute of Technology-BI', '376-Harish-12-Shridevi Institute of Engineering & Technology-SI'),
(16, 3, 'MALE', 1, 5, '264-Ojas-7-Agadi College of Engineering & Technology-AC', '314-Mahadev-21-Godutai Engineering College for Women-GE', '274-Adhavik-8-S G Balekundri Institute of Technology-BI', 'NULL', '394-Akhilesh-29-Coorg Institute of Technology-CO', '355-Abhay-16-Sri Jayachamarajendra-JY', '325-Raj-13-Karavali Institute of Technology-KI', '336-Somesh -14-Dr. M V Shetty Institute of Technology-ST'),
(17, 3, 'MALE', 1, 6, '284-Gopalnath-9-Appa Institute of Engineering & Technology-AE', '389-Shisheer-31-Bearyâ€™s Institute of Technology-BI', '294-Nagesh-10-Guru Nanak Dev Engineering College-GN', '385-Surya-22-Guru Nanak Dev Engineering College-GN', '234-Romy-4-Brindavan College of Engineering-BC', '393-Dheeraj-29-Coorg Institute of Technology-CO', '335-Purushotham-14-Dr. M V Shetty Institute of Technology-ST', 'NULL'),
(18, 3, 'FEMALE', 1, 1, '64-Deepta-7-Agadi College of Engineering & Technology-AC', '134-Nishtha-39-Veerappa Nisty Engineering College-KS', '3-Ambika-1-Cambridge Institute of Technology-CI', '44-Aakriti-5-Dayananda Sagar College of Engineering-DS', '24-Eashwari-3-Acharya Institute of Technology-AI', '155-Parinika-28-BGS Institute of Technology-BG', '165-Poojita-41-Dr. M V Shetty Institute of Technology-KS', '104-Maanasa-11-PES Institute of Technology & Management-PE'),
(19, 3, 'FEMALE', 1, 2, '74-Kalavathi-8-S G Balekundri Institute of Technology-BI', '125-Nidhi-44-Govt. Engineering College,Bellary-GB', '14-Anushka-2-East Point College of Engineering & Technology-EP', '55-Advika-6-Global Academy of Technology-GA', '34-Maanika-4-Brindavan College of Engineering-BC', '144-Padmaja-42-V.S Alwas Shetty Institute of Technology-KS', '167-Poornima-41-Dr. M V Shetty Institute of Technology-KS', '114-Naavya-12-Shridevi Institute of Engineering & Technology-SI'),
(20, 3, 'FEMALE', 1, 3, '84-Kishori-9-Appa Institute of Engineering & Technology-AE', '135-Niska-39-Veerappa Nisty Engineering College-KS', '4-kavya-1-Cambridge Institute of Technology-CI', '45-Aamira-5-Dayananda Sagar College of Engineering-DS', '25-Easmatara-3-Acharya Institute of Technology-AI', '146-Padmamalini-42-V.S Alwas Shetty Institute of Technology-KS', '178-Radha-45-Girija Bai Sail Institute of Technology-01', '105-Maanika-11-PES Institute of Technology & Management-PE'),
(21, 3, 'FEMALE', 1, 4, '94-Lakshmi-10-Guru Nanak Dev Engineering College-GN', '124-Netravati-44-Govt. Engineering College,Bellary-GB', '15-Anya-2-East Point College of Engineering & Technology-EP', '54-Adishree-6-Global Academy of Technology-GA', '35-Maaya-4-Brindavan College of Engineering-BC', '156-Parivita-28-BGS Institute of Technology-BG', '166-Poonam-41-Dr. M V Shetty Institute of Technology-KS', '115-Navyashree-12-Shridevi Institute of Engineering & Technology-SI'),
(22, 3, 'FEMALE', 1, 5, '65-Devaki-7-Agadi College of Engineering & Technology-AC', '75-Kalyani-8-S G Balekundri Institute of Technology-BI', '177-Rachika-45-Girija Bai Sail Institute of Technology-01', '85-Kokila-9-Appa Institute of Engineering & Technology-AE', '95-Lakshmi Priya-10-Guru Nanak Dev Engineering College-GN', '145-Padmakshi-42-V.S Alwas Shetty Institute of Technology-KS', '168-Praachi-41-Dr. M V Shetty Institute of Technology-KS', 'NULL'),
(23, 2, 'MALE', 1, 1, '261-Deepak-7-Agadi College of Engineering & Technology-AC', '301-Akash-20-Appa Institute of Engineering & Technology-ET', '201-Aarav-1-Cambridge Institute of Technology-CI', '241-Dev-5-Dayananda Sagar College of Engineering-DS', '221-Mohan-3-Acharya Institute of Technology-AI', '344-Omkar-15-Vidya Vikas Institute of Technology-VV', '322-Vineet-13-Karavali Institute of Technology-KI', '364-Harshith-11-PES Institute of Technology & Management-PE'),
(24, 2, 'MALE', 1, 2, '271-Ian-8-S G Balekundri Institute of Technology-BI', '311-Manik-21-Godutai Engineering College for Women-GE', '212-Kadhir-2-East Point College of Engineering & Technology-EP', '251-Pranav-6-Global Academy of Technology-GA', '231-Rajiv-4-Brindavan College of Engineering-BC', 'NULL', '333-Sujal-14-Dr. M V Shetty Institute of Technology-ST', '373-Anup-12-Shridevi Institute of Engineering & Technology-SI'),
(25, 2, 'MALE', 1, 3, '281-Dhiraj-9-Appa Institute of Engineering & Technology-AE', '383-Mukund-22-Guru Nanak Dev Engineering College-GN', '202-Vivaan-1-Cambridge Institute of Technology-CI', '242-Parth-5-Dayananda Sagar College of Engineering-DS', 'NULL', '395-Nagraj-29-Coorg Institute of Technology-CO', '388-Shirish-31-Bearyâ€™s Institute of Technology-BI', '363-Sankalp-11-PES Institute of Technology & Management-PE'),
(26, 2, 'MALE', 1, 4, '291-Mandar-10-Guru Nanak Dev Engineering College-GN', '399-Vineet-22-Guru Nanak Dev Engineering College-GN', '211-Kabir-2-East Point College of Engineering & Technology-EP', 'NULL', '232-Tarun-4-Brindavan College of Engineering-BC', '343-Stephan-15-Vidya Vikas Institute of Technology-VV', '323-Saikumar-13-Karavali Institute of Technology-KI', '374-Summet-12-Shridevi Institute of Engineering & Technology-SI'),
(27, 2, 'MALE', 1, 5, '262-Manoj-7-Agadi College of Engineering & Technology-AC', '302-Adarsh-20-Appa Institute of Engineering & Technology-ET', 'NULL', '312-Lokesh-21-Godutai Engineering College for Women-GE', '387-Sharan-31-Bearyâ€™s Institute of Technology-BI', '354-Raj-16-Sri Jayachamarajendra-JY', '334-Veeresh-14-Dr. M V Shetty Institute of Technology-ST', '282-Ekana-9-Appa Institute of Engineering & Technology-AE'),
(28, 2, 'MALE', 1, 6, '398-Sunil-22-Guru Nanak Dev Engineering College-GN', '292-Mandeep-10-Guru Nanak Dev Engineering College-GN', '272-Immanuel-8-S G Balekundri Institute of Technology-BI', '252-Ritvik-6-Global Academy of Technology-GA', '222-Prem-3-Acharya Institute of Technology-AI', '353-Rajesh-16-Sri Jayachamarajendra-JY', 'NULL', 'NULL'),
(29, 10, 'MALE', 1, 1, '269-Garv-7-Agadi College of Engineering & Technology-AC', '310-Praveen-20-Appa Institute of Engineering & Technology-ET', '209-Dhruv-1-Cambridge Institute of Technology-CI', '249-Daksh-5-Dayananda Sagar College of Engineering-DS', '229-Manish-3-Acharya Institute of Technology-AI', '352-Rahul-15-Vidya Vikas Institute of Technology-VV', '331-Sanjeev-13-Karavali Institute of Technology-KI', '371-Ravi-11-PES Institute of Technology & Management-PE'),
(30, 10, 'MALE', 1, 2, '279-Nischit-8-S G Balekundri Institute of Technology-BI', '321-Vishal-21-Godutai Engineering College for Women-GE', '219-Maheshwar-2-East Point College of Engineering & Technology-EP', '260-Yash-6-Global Academy of Technology-GA', '239-Adviksh-4-Brindavan College of Engineering-BC', '362-Neelesh-16-Sri Jayachamarajendra-JY', '330-Venky-13-Karavali Institute of Technology-KI', '381-Prakash-12-Shridevi Institute of Engineering & Technology-SI'),
(31, 10, 'MALE', 1, 3, '289-Jagadeep-9-Appa Institute of Engineering & Technology-AE', '309-Srinivas-20-Appa Institute of Engineering & Technology-ET', '210-Krish-1-Cambridge Institute of Technology-CI', '250-Harish-5-Dayananda Sagar College of Engineering-DS', '230-Mukund-3-Acharya Institute of Technology-AI', 'NULL', '342-Varun-14-Dr. M V Shetty Institute of Technology-ST', '372-Shrikanth-11-PES Institute of Technology & Management-PE'),
(32, 10, 'MALE', 1, 4, '299-Aniket-10-Guru Nanak Dev Engineering College-GN', '320-Amar-21-Godutai Engineering College for Women-GE', '220-Avinash-2-East Point College of Engineering & Technology-EP', '259-Aagaman-6-Global Academy of Technology-GA', 'NULL', '361-Sandeep-16-Sri Jayachamarajendra-JY', '332-Sanjay-13-Karavali Institute of Technology-KI', '382-Vikas-12-Shridevi Institute of Engineering & Technology-SI'),
(33, 10, 'MALE', 1, 5, '270-Ekash-7-Agadi College of Engineering & Technology-AC', '280-Nerlesh-8-S G Balekundri Institute of Technology-BI', '290-Luv-9-Appa Institute of Engineering & Technology-AE', '300-Sanket-10-Guru Nanak Dev Engineering College-GN', '240-Mantesh-4-Brindavan College of Engineering-BC', '351-Prasad-15-Vidya Vikas Institute of Technology-VV', '341-Prem-14-Dr. M V Shetty Institute of Technology-ST', 'NULL'),
(48, 10, 'MALE', 2, 2, '309-Srinivas-11', '210-Krish-12', '321-Vishal-13', '239-Adviksh-13.1', '331-Sanjeev-13.9', '310-Praveen-14.1', '381-Prakash-14.5', '342-Varun-15'),
(49, 10, 'MALE', 2, 3, '352-Rahul-11.1', '260-Yash-12.1', '299-Aniket-13', '269-Garv-13.1', '219-Maheshwar-14', '362-Neelesh-14.1', '372-Shrikanth-14.5', '209-Dhruv-15.2'),
(50, 10, 'MALE', 2, 1, '289-Jagadeep-10', '279-Nischit-12', '250-Harish-13', '270-Ekash-13', '249-Daksh-13.7', '230-Mukund-14', '371-Ravi-14.4', '330-Venky-15'),
(51, 4, 'MALE', 1, 1, '263-Shamu-7-Agadi College of Engineering & Technology-AC', '303-Abhishek-20-Appa Institute of Engineering & Technology-ET', '203-Aditya-1-Cambridge Institute of Technology-CI', '243-Anurag-5-Dayananda Sagar College of Engineering-DS', '223-Rahul-3-Acharya Institute of Technology-AI', '345-Raghu-15-Vidya Vikas Institute of Technology-VV', '324-Kiran-13-Karavali Institute of Technology-KI', '365-Girish-11-PES Institute of Technology & Management-PE'),
(52, 4, 'MALE', 1, 2, '273-Adhav-8-S G Balekundri Institute of Technology-BI', '313-Harsh-21-Godutai Engineering College for Women-GE', '213-Arush-2-East Point College of Engineering & Technology-EP', '254-Jai-6-Global Academy of Technology-GA', '233-Tara-4-Brindavan College of Engineering-BC', '355-Abhay-16-Sri Jayachamarajendra-JY', '335-Purushotham-14-Dr. M V Shetty Institute of Technology-ST', '375-Aleem-12-Shridevi Institute of Engineering & Technology-SI'),
(53, 4, 'MALE', 1, 3, '283-Gopal-9-Appa Institute of Engineering & Technology-AE', '383-Mukund-22-Guru Nanak Dev Engineering College-GN', '204-Vihaan-1-Cambridge Institute of Technology-CI', '244-Anupam-5-Dayananda Sagar College of Engineering-DS', '224-Akash-3-Acharya Institute of Technology-AI', '395-Nagraj-29-Coorg Institute of Technology-CO', '325-Raj-13-Karavali Institute of Technology-KI', '366-Nitin-11-PES Institute of Technology & Management-PE'),
(54, 4, 'MALE', 1, 4, '293-Shubham-10-Guru Nanak Dev Engineering College-GN', '304-Aditya-20-Appa Institute of Engineering & Technology-ET', '214-Farahan-2-East Point College of Engineering & Technology-EP', '253-Veeresh-6-Global Academy of Technology-GA', '234-Romy-4-Brindavan College of Engineering-BC', '346-Vinayak-15-Vidya Vikas Institute of Technology-VV', '336-Somesh -14-Dr. M V Shetty Institute of Technology-ST', '376-Harish-12-Shridevi Institute of Engineering & Technology-SI'),
(55, 4, 'MALE', 1, 5, '264-Ojas-7-Agadi College of Engineering & Technology-AC', '314-Mahadev-21-Godutai Engineering College for Women-GE', '274-Adhavik-8-S G Balekundri Institute of Technology-BI', '386-Punneth-22-Guru Nanak Dev Engineering College-GN', '284-Gopalnath-9-Appa Institute of Engineering & Technology-AE', '356-Arya-16-Sri Jayachamarajendra-JY', '294-Nagesh-10-Guru Nanak Dev Engineering College-GN', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `ZID` int(11) NOT NULL,
  `ZNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`ZID`, `ZNAME`) VALUES
(1, 'Belgavi Zone Institutions'),
(2, 'Kalaburgi Zone Institutions'),
(3, 'Bengaluru Central Zone Institutions'),
(4, 'Bengalore South Zone Institutions'),
(5, 'Bengalore North Zone Institutions'),
(6, 'Mysore Zone Institutions'),
(7, 'Mangalore Zone Institutions'),
(8, 'Central Karnataka Institutions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clgzoneid`
--
ALTER TABLE `clgzoneid`
  ADD PRIMARY KEY (`SLNO`),
  ADD KEY `CLGZONEID` (`CLGZONEID`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`CLGDBID`),
  ADD KEY `CLGZONE` (`CLGZONE`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`SCREF`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `tempprofromatables`
--
ALTER TABLE `tempprofromatables`
  ADD PRIMARY KEY (`ref`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`ZID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clgzoneid`
--
ALTER TABLE `clgzoneid`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `CLGDBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `scorecard`
--
ALTER TABLE `scorecard`
  MODIFY `SCREF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tempprofromatables`
--
ALTER TABLE `tempprofromatables`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `ZID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clgzoneid`
--
ALTER TABLE `clgzoneid`
  ADD CONSTRAINT `clgzoneid_ibfk_1` FOREIGN KEY (`CLGZONEID`) REFERENCES `zone` (`ZID`);

--
-- Constraints for table `college`
--
ALTER TABLE `college`
  ADD CONSTRAINT `college_ibfk_1` FOREIGN KEY (`CLGZONE`) REFERENCES `zone` (`ZID`);

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `college` (`CLGDBID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
