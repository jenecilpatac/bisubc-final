-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 08:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisubc-finale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_alerts`
--

CREATE TABLE `admin_alerts` (
  `Admin_Alert_Key` int(10) UNSIGNED NOT NULL,
  `Alert` text NOT NULL,
  `Alert_Time` int(10) NOT NULL,
  `Is_Read` int(1) NOT NULL,
  `Alert_Code` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_alerts`
--

INSERT INTO `admin_alerts` (`Admin_Alert_Key`, `Alert`, `Alert_Time`, `Is_Read`, `Alert_Code`) VALUES
(1, 'Rhea Jagunos updated his/her profile.', 1677025765, 1, '21d6bf5831c383349b458434d31c22bb'),
(2, 'Riza Salva updated his/her profile.', 1677035818, 1, 'cf9d2294af0f1b53cc9462f3c2155181');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `Alumni_Key` int(10) UNSIGNED NOT NULL,
  `Batch_Key` int(10) UNSIGNED NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`Alumni_Key`, `Batch_Key`, `First_Name`, `Middle_Name`, `Last_Name`) VALUES
(1, 1, 'JASON', '', 'BALDESCO'),
(2, 1, 'JONALYN', '', 'LAMOSTE'),
(3, 1, 'AILYN', '', 'MAHINAY'),
(4, 1, 'BELLE SHAIRA', '', 'MASIBAY'),
(5, 1, 'MELANIE', '', 'RIVERO'),
(6, 2, 'GEDYM MAE', '', 'SAB'),
(7, 2, 'RIZA', '', 'SALVA'),
(8, 2, 'JEAN', '', 'VILLALON'),
(9, 2, 'OLIVER', '', 'JIMENEZ'),
(10, 2, 'CARLO', '', 'MOSQUISA'),
(11, 3, 'CATALINO', '', 'PONGASE JR.'),
(12, 3, 'SHIELA MAE', '', 'CALAMBA'),
(13, 3, 'PAMELA MAE', '', 'DAYO'),
(14, 3, 'CHERRY MAE', '', 'GARSUTA'),
(15, 3, 'LEA JOY', '', 'KARAAN'),
(16, 4, 'FERMO JR', '', 'ASUFRA'),
(17, 4, 'ROLLY', '', 'DUMADAG'),
(18, 4, 'ENRIE JOHN', '', 'EDEM'),
(19, 4, 'RUPERTO II', '', 'GARCINES'),
(20, 4, 'NICO', '', 'GURREA'),
(21, 4, 'JHON KEVIN', '', 'IBARRA'),
(22, 4, 'JAY NIÃ‘O', '', 'LAMOSTE'),
(23, 4, 'GIOVANNI', '', 'LARGO'),
(24, 4, 'DENNIS', '', 'LEGASPI'),
(25, 4, 'HERBERT', '', 'MAGLAJOS'),
(26, 4, 'NEIL ABBIE', '', 'MALINAO'),
(27, 4, 'BENZENE', '', 'BANATE'),
(28, 4, 'JOHN LOU', '', 'ONOD'),
(29, 4, 'JOSEPH', '', 'PEQUIT'),
(30, 4, 'REYGIE', '', 'PONOLLERA'),
(31, 4, 'BRIAN BRANDO', '', 'RACHO'),
(32, 4, 'JON ALBERT', '', 'SILAGAN'),
(33, 4, 'BERN ANGELO', '', 'TEMPLA'),
(34, 4, 'JENILYN', '', 'ALO'),
(35, 4, 'CLAUDIA MAE', '', 'AÃ‘ORA'),
(36, 4, 'CRISTINE', '', 'ARANCON'),
(37, 4, 'RHEALYN B.', '', 'ASUFRA'),
(38, 4, 'REXALDIE', '', 'BATINGAL'),
(39, 4, 'KHEYCIE', '', 'BANAL'),
(40, 4, 'SHIRLY', '', 'BANDOY'),
(41, 4, 'MITCHELLE ANN', '', 'BATUCAN'),
(42, 5, 'ZORAIDA', '', 'BOYOSE'),
(43, 5, 'GENIRA', '', 'CABAHUG'),
(44, 5, 'LILIMAE', '', 'CABASAN'),
(45, 5, 'TRINITY ROSE', '', 'CABIG'),
(46, 5, 'VIRGIE', '', 'CAMANZO'),
(47, 5, 'MARY JANE', '', 'CASANOVA'),
(48, 5, 'JESSICA', '', 'COMIGHOD'),
(49, 5, 'FRANKLIN JOSEPH', '', 'BOOC'),
(50, 5, 'STEPHANIE', '', 'DANGHIL'),
(51, 5, 'JESSA', '', 'DAWANG'),
(52, 5, 'CRISSIA MAE', '', 'DECENILLA'),
(53, 5, 'MARICEL', '', 'DUPIT'),
(54, 5, 'LINIE', '', 'FRANCISCO'),
(55, 5, 'RICHEL', '', 'FUDERANAN'),
(56, 5, 'MARIEL', '', 'GAMBA'),
(57, 5, 'GENELYN', '', 'GINGO'),
(58, 5, 'HIDIE', '', 'GULLEM'),
(59, 5, 'GINA MAE', '', 'HERNANDO'),
(60, 5, 'FLORENCE JERADE', '', 'BUCA'),
(61, 5, 'SOFIA MAE', '', 'HUMOC'),
(62, 5, 'MA CARMENA', '', 'IBARRA'),
(63, 5, 'VERONICA', '', 'ILANDAG'),
(64, 5, 'ABEGAEL MAE', '', 'IPONG'),
(65, 5, 'MAE', '', 'LABIS'),
(66, 5, 'KIMBERLY ANN', '', 'LABOR'),
(67, 5, 'JUDITH', '', 'LAGUNA'),
(68, 6, 'ANGELIE', '', 'LAMBAN'),
(69, 6, 'IVY', '', 'LIBAS'),
(70, 6, 'LOVE LEA', '', 'LIBOT'),
(71, 6, 'JAKE VINCENT', '', 'BUCA'),
(72, 6, 'CHARITY ANN', '', 'LOON'),
(73, 6, 'HAZEL MAE', '', 'LOPENA'),
(74, 6, 'JESSEL', '', 'MANCHA'),
(75, 6, 'MA LORAINE', '', 'NAMOCO'),
(76, 6, 'ARGELYN', '', 'OCAY'),
(77, 6, 'DENIE JANE', '', 'OCAY'),
(78, 6, 'EMILY', '', 'PAJO'),
(79, 6, 'ARCELIE', '', 'PATAC'),
(80, 6, 'MARY JEAN', '', 'PAURNIA'),
(81, 6, 'ANTHONETH ROSE', '', 'RACHO'),
(82, 6, 'JUNAIRE EDRIS', '', 'BUICO'),
(83, 6, 'ANALIZA', '', 'RASONABLE'),
(84, 6, 'LOIDA', '', 'SALANG'),
(85, 6, 'RUBELYN', '', 'SUPERA'),
(86, 6, 'JESSA MAE', '', 'TAMPARONG'),
(87, 6, 'MAE VIL', '', 'TANJAY'),
(88, 6, 'LESLIE', '', 'TEREC'),
(89, 6, 'ROSE ANN', '', 'TOLANG'),
(90, 6, 'ANNALOU', '', 'TOMBIGA'),
(91, 6, 'ABEGAILE JANE', '', 'YBAÃ‘EZ'),
(92, 6, 'JHUN JERUM', '', 'CEPE'),
(93, 6, 'EUGENIO JR.', '', 'COMIDOY'),
(94, 7, 'ALTHER ALLID', '', 'ABANTE'),
(95, 7, 'JUN MICHEL', '', 'BAUTISTA'),
(96, 7, 'ARIEL', '', 'BLANCO'),
(97, 7, 'PHILIP ANTHONY', '', 'BOYONAS'),
(98, 7, 'RICKY', '', 'CABILLANES'),
(99, 7, 'RYAN', '', 'CABULAO'),
(100, 7, 'RICHARD', '', 'CALOPE'),
(101, 7, 'JAMES LIE', '', 'CANO'),
(102, 7, 'JONNARD', '', 'CASUSULA'),
(103, 7, 'ANGELITO', '', 'CENTILLAS'),
(104, 7, 'NIEL MARK', '', 'DOGOY'),
(105, 7, 'JOEY', '', 'ADLAON'),
(106, 7, 'MELMAR', '', 'GONZAGA'),
(107, 7, 'ALDIN', '', 'GUHAYON'),
(108, 7, 'KEVIN LESLEY', '', 'HINAUTAN'),
(109, 7, 'RUBIN', '', 'HOROHORO'),
(110, 7, 'JUSTIN JAY', '', 'IGNACIO'),
(111, 8, 'JESSREL', '', 'JAMILO'),
(112, 8, 'JAMES RYAN', '', 'LANGAMEN'),
(113, 8, 'JESSIE ROY', '', 'LAO-AY'),
(114, 8, 'EMELIO', '', 'LEPARTO JR.'),
(115, 8, 'VINCENT VICTOR', '', 'MAGADAN'),
(116, 8, 'JOSEPH', '', 'ALCALA'),
(117, 8, 'MARC FRANCIZ', '', 'MANIWANG'),
(118, 8, 'RICOL', '', 'MELLINO'),
(119, 8, 'MARVIN', '', 'MERANO'),
(120, 8, 'VALERIANO JR.', '', 'MERANO'),
(121, 8, 'ANGELO', '', 'MULIT'),
(122, 8, 'MIKO', '', 'MUÃ‘EZ'),
(123, 8, 'JEFFERSONN', '', 'NAVARRO'),
(124, 8, 'JOHN LEE', '', 'OMBAY'),
(125, 8, 'RUTHEL LLOYD', '', 'ORAPA'),
(126, 8, 'LOUIE NIEL', '', 'PACOT'),
(127, 8, 'DANIEL FRIEDERICK', '', 'ALONZO'),
(128, 9, 'CAMELITO', '', 'PAG-ONG'),
(129, 9, 'BONIFACIO III', '', 'SALANG'),
(130, 9, 'FRANCIS PAUL', '', 'SILAGAN'),
(131, 9, 'JOMAR', '', 'SUMABONG'),
(132, 9, 'JULIUS JR', '', 'TACULOD'),
(133, 9, 'REY MARK', '', 'TONGCO'),
(134, 9, 'VINCENT JOHN', '', 'TRAGO'),
(135, 9, 'JAYSON', '', 'VERTUDAZO'),
(136, 9, 'JENICELLE', '', 'DANO'),
(137, 9, 'SWEET ROSE', '', 'DOGOY'),
(138, 9, 'DOMINIC', '', 'AMBAN'),
(139, 9, 'JACKELYN', '', 'MIRANDA'),
(140, 9, 'MATT  LAURENCE', '', 'ARMEAN'),
(141, 9, 'GIM BERT', '', 'ARONG'),
(142, 9, 'ZENO', '', 'BALICOG'),
(143, 9, 'MELVIN', '', 'BANOL'),
(144, 10, 'MARK LLOYD', '', 'ALMONTE'),
(145, 10, 'JAYSON', '', 'MELLIJOR'),
(146, 10, 'DARWIN', '', 'PAINIT'),
(147, 10, 'FRANK JULIUS', '', 'RACHO'),
(148, 10, 'JONEL', '', 'RAÃ‘ISES'),
(149, 10, 'BRIAN VINCENT', '', 'TINAJA'),
(150, 10, 'MARK JOVEN', '', 'UY'),
(151, 10, 'CYNDIE GRACE', '', 'ALE'),
(152, 10, 'CHARLENE JOY', '', 'AMIT'),
(153, 10, 'MIRAFLOR', '', 'ANDOY'),
(154, 10, 'ANALYN', '', 'ANDRADE'),
(155, 10, 'JENNIFER', '', 'APARICIO'),
(156, 10, 'MONIQUE ROICE', '', 'ANTIPOLO'),
(157, 10, 'MA. RUBELYN', '', 'BALLESTER'),
(158, 10, 'ROCIL', '', 'BATINGAL'),
(159, 10, 'JENIFER', '', 'BAYUD'),
(160, 10, 'ANNABELLE', '', 'BELOY'),
(161, 10, 'ROSEMARIE', '', 'BERONG'),
(162, 10, 'JESSA MAE', '', 'CAGABCAB'),
(163, 10, 'CRISTEL', '', 'CANO'),
(164, 11, 'LANELYN', '', 'CELOCIA'),
(165, 11, 'VALERIE', '', 'DE CASTRO'),
(166, 11, 'HARLEE SON', '', 'BALDUMAN'),
(167, 11, 'MARIFE', '', 'GOHOL'),
(168, 11, 'LADY JANE', '', 'HALAWIG'),
(169, 11, 'MICHELLE', '', 'LACEA'),
(170, 11, 'JESSA', '', 'LANSANG'),
(171, 11, 'CHARMAINE', '', 'LIHAT'),
(172, 11, 'ROTCHEL', '', 'MADERA'),
(173, 11, 'JESSA GRACE', '', 'MAGLAJOS'),
(174, 11, 'GLYDEL', '', 'MALBASIAS'),
(175, 11, 'MEKAILA ANGELA', '', 'MARANIA'),
(176, 11, 'REYNA', '', 'MARZON'),
(177, 11, 'MARK VIRGEL', '', 'DAOHOG'),
(178, 11, 'MELAROSE', '', 'MERANO'),
(179, 11, 'KIMBERLY ANN', '', 'OCOY'),
(180, 11, 'RENA', '', 'ORAÃ‘O'),
(181, 11, 'MARLYN', '', 'PAINIT'),
(182, 11, 'RUVY MAE', '', 'PALMA'),
(183, 11, 'ANA MARIE', '', 'PANGANORON'),
(184, 12, 'AVIE', '', 'PAÃ‘AMOGAN'),
(185, 12, 'MA CHARLINE', '', 'POJADAS'),
(186, 12, 'DANNIELLE FAYE', '', 'PONOLLERA'),
(187, 12, 'JOVELYN', '', 'PORLAJE'),
(188, 12, 'TEOTIMO JR.', '', 'GINGO'),
(189, 12, 'JECELYN', '', 'ROBANTE'),
(190, 12, 'CARYL KEITH', '', 'SAB'),
(191, 12, 'MA FATIMA', '', 'SABOTE'),
(192, 12, 'JONAME', '', 'SERNOS'),
(193, 12, 'SHELLA MAE', '', 'SUCOBOS'),
(194, 12, 'ROSEFIN', '', 'TAYROS'),
(195, 12, 'ROWENA', '', 'TAYROS'),
(196, 12, 'MYLA', '', 'TOLEDO'),
(197, 12, 'MICHELL', '', 'VALORIA'),
(198, 12, 'JOSEPHINE', '', 'VIBO'),
(199, 12, 'NIÃ‘O', '', 'HINAY'),
(200, 12, 'EURICA', '', 'VILLENA'),
(201, 12, 'DENNIS', '', 'LACEA'),
(202, 12, 'MARVIN', '', 'MACARAYO'),
(203, 12, 'RJ', '', 'MEJIA'),
(204, 13, 'RHEA', '', 'JAGUNOS'),
(205, 14, 'JOLLYMARIE', '', 'LUMANAS');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_alerts`
--

CREATE TABLE `alumni_alerts` (
  `Alumni_Alert_Key` int(10) UNSIGNED NOT NULL,
  `Alumni_Key` int(10) UNSIGNED DEFAULT NULL,
  `Annoucement_Key` int(10) UNSIGNED DEFAULT NULL,
  `Is_Read` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_alerts`
--

INSERT INTO `alumni_alerts` (`Alumni_Alert_Key`, `Alumni_Key`, `Annoucement_Key`, `Is_Read`) VALUES
(1, 15, 1, 0),
(2, 14, 1, 0),
(3, 15, 2, 0),
(4, 14, 2, 0),
(5, 15, 3, 0),
(6, 14, 3, 0),
(7, 15, 4, 0),
(8, 14, 4, 0),
(9, 15, 5, 0),
(10, 14, 5, 0),
(11, 51, 5, 0),
(12, 205, 5, 1),
(13, 204, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_profiles`
--

CREATE TABLE `alumni_profiles` (
  `Alumni_Profile_Key` int(10) UNSIGNED NOT NULL,
  `Alumni_Key` int(10) UNSIGNED DEFAULT NULL,
  `Profile1` longtext NOT NULL,
  `Profile2` longtext NOT NULL,
  `Profile3` longtext NOT NULL,
  `Employment_Status` varchar(30) NOT NULL DEFAULT '',
  `Company_Name` varchar(255) NOT NULL DEFAULT '',
  `Supporting_Doc` varchar(255) NOT NULL DEFAULT '',
  `Position` varchar(100) NOT NULL DEFAULT '',
  `Awards_Received` varchar(255) NOT NULL DEFAULT '',
  `Hired_2Years_After_Grad` int(1) NOT NULL DEFAULT 0,
  `Date_Updated` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_profiles`
--

INSERT INTO `alumni_profiles` (`Alumni_Profile_Key`, `Alumni_Key`, `Profile1`, `Profile2`, `Profile3`, `Employment_Status`, `Company_Name`, `Supporting_Doc`, `Position`, `Awards_Received`, `Hired_2Years_After_Grad`, `Date_Updated`) VALUES
(1, 15, '{\"FIRST_NAME\":\"LEA JOY\",\"MIDDLE_NAME\":\"Middle Name\",\"LAST_NAME\":\"KARAAN\",\"PERMANENT_ADDRESS\":\"Address\",\"EMAIL\":\"leajoy.karaan@gmail.com\",\"PHONE\":\"411-123456\",\"MOBILE\":\"1234567890\",\"CIVIL_STATUS\":\"1\",\"SEX\":\"1\",\"BIRTHDAY\":\"2000-02-04\",\"ANNUAL_INCOME\":\"Php 1,000,000\"}', '{\"EXAM_PASSED\":[\"Licensure Examination for Teacher\",\"Exam Name 1\",\"Exam Name 2\",\"\"],\"EXAM_DATE_TAKEN\":[\"May 2020\",\"Exam Date 1\",\"Exam Date 2\",\"\"],\"EXAM_RATING\":[\"80.5\",\"Rating 1\",\"Rating 2\",\"\"],\"ADVANCE_STUDY_PASSED\":[\"Masters 1\",\"Masters 2\",\"Masters 3\",\"\"],\"ADVANCE_STUDY_DURATION\":[\"Masters Date 1\",\"Masters Date 2\",\"Masters Date 3\",\"\"],\"ADVANCE_STUDY_PLACE\":[\"University 1\",\"University 2\",\"University 3\",\"\"],\"PURSUE_ADVANCE_STUDIES\":\"others\",\"PURSUE_ADVANCE_STUDIES_OTHERS\":\" testing\"}', '{\"EMPLOYMENT_STATUS\":\"employed\",\"JOB_EXPERIENCES\":\"single_multiple\",\"NEVER_EMPLOYED\":\"others\",\"NEVER_EMPLOYED_OTHERS\":\"sdafsadf\",\"LOCAL_ABROAD\":\"abroad\",\"NAME_COMPANY\":\"dsfsaf\",\"ADDRESS_COMPANY\":\"dsafsdf\",\"CONTACT_COMPANY\":\"dsfsdaf\",\"LINE_BUSINESS\":\"dsafsf\",\"POSITION\":\"sdfsadf\",\"WORK_ALIGNED\":\"yes\",\"STATUS_FIRST_JOB\":\"regular_permanent\",\"STATUS_CURRENT_JOB\":\"casual\",\"LEVEL_FIRST_JOB\":\"self_employed\",\"SELF_EMPLOYED_LINE\":\"sdfsadf\",\"FIND_FIRST\":\"others\",\"FIND_FIRST_OTHERS\":\"sdafsdaf\",\"FIRST_JOB_AFTER_GRAD\":\"others\",\"FIRST_JOB_AFTER_GRAD_OTHERS\":\"sdfsadfs\",\"FIRST_JOB_FACTORS\":\"others\",\"FIRST_JOB_FACTORS_OTHERS\":\"sdfsadfs\",\"CHALLENGES\":\"others\",\"CHALLENGES_OTHERS\":\"sdfsadfs\",\"AWARDS\":\"yes\",\"LEVEL_AWARD\":\"others\",\"LEVEL_AWARD_OTHERS\":\"sdafsdf\",\"SUPPORTING_DOCUMENT\":\"company id\",\"AWARD_DOC\":\"Cretificate\"}', 'employed', 'dsfsaf', 'company id', 'sdfsadf', 'others', 0, 1677015689),
(2, 51, '{\"PERMANENT_ADDRESS\":\"Baucan Norte, Balilihan, Bohol\",\"EMAIL\":\"jessadawang@gmail.com\",\"PHONE\":\"09123456789\",\"MOBILE\":\"0998764533\",\"CIVIL_STATUS\":\"3\",\"SEX\":\"1\",\"BIRTHDAY\":\"2001-01-12\",\"ANNUAL_INCOME\":\"10,000\"}', '{\"EXAM_PASSED\":[\"TESDA Cookery\",\"\",\"\",\"\"],\"EXAM_DATE_TAKEN\":[\"January 2, 2020\",\"\",\"\",\"\"],\"EXAM_RATING\":[\"90%\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PASSED\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_DURATION\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PLACE\":[\"\",\"\",\"\",\"\"],\"PURSUE_ADVANCE_STUDIES\":\"professional_development\"}', '{\"EMPLOYMENT_STATUS\":\"not_employed\",\"JOB_EXPERIENCES\":\"never_employed\",\"NEVER_EMPLOYED\":\"not_look\",\"FIND_FIRST\":\"advertisement\",\"FIRST_JOB_AFTER_GRAD\":\"0_1month\",\"FIRST_JOB_FACTORS\":\"personality_factors\",\"CHALLENGES\":\"cpmpetition\",\"AWARDS\":\"yes\",\"LEVEL_AWARD\":\"local\",\"AWARD_DOC\":\"Best Employee of the month\"}', 'not_employed', '', '', '', 'local', 1, 1677010424),
(3, 205, '{\"PERMANENT_ADDRESS\":\"Cortes, Bohol\",\"EMAIL\":\"lumanas@gmail.com\",\"PHONE\":\"0987654321\",\"MOBILE\":\"0987654321\",\"CIVIL_STATUS\":\"1\",\"SEX\":\"1\",\"BIRTHDAY\":\"2001-01-23\",\"ANNUAL_INCOME\":\"5,000\"}', '{\"EXAM_PASSED\":[\"\",\"\",\"\",\"\"],\"EXAM_DATE_TAKEN\":[\"\",\"\",\"\",\"\"],\"EXAM_RATING\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PASSED\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_DURATION\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PLACE\":[\"\",\"\",\"\",\"\"],\"PURSUE_ADVANCE_STUDIES\":\"professional_development\"}', '{\"EMPLOYMENT_STATUS\":\"employed\",\"JOB_EXPERIENCES\":\"single_multiple\",\"LOCAL_ABROAD\":\"local\",\"NAME_COMPANY\":\"Zionlab\",\"ADDRESS_COMPANY\":\"Baclayon, Bohol\",\"CONTACT_COMPANY\":\"09123456789\",\"SUPPORTING_DOCUMENT\":\"Company ID\",\"LINE_BUSINESS\":\"IT\",\"POSITION\":\"Tester\",\"WORK_ALIGNED\":\"yes\",\"STATUS_FIRST_JOB\":\"regular_permanent\",\"STATUS_CURRENT_JOB\":\"regular_permanent\",\"SELF_EMPLOYED_LINE\":\"CEO\",\"FIND_FIRST\":\"recommended\",\"FIRST_JOB_AFTER_GRAD\":\"2_3years\",\"FIRST_JOB_FACTORS\":\"area_specialization\",\"CHALLENGES\":\"lack_experience\",\"AWARDS\":\"yes\",\"LEVEL_AWARD\":\"local\",\"AWARD_DOC\":\"Best Tester\"}', 'employed', 'Zionlab', 'Company ID', 'Tester', 'local', 1, 1677015461),
(4, 204, '{\"EMAIL\":\"rheajagunos@gmail.com\",\"PHONE\":\"0987654321\",\"MOBILE\":\"0987654321\",\"CIVIL_STATUS\":\"2\",\"SEX\":\"1\",\"ANNUAL_INCOME\":\"10,000\"}', '{\"EXAM_PASSED\":[\"\",\"\",\"\",\"\"],\"EXAM_DATE_TAKEN\":[\"\",\"\",\"\",\"\"],\"EXAM_RATING\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PASSED\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_DURATION\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PLACE\":[\"\",\"\",\"\",\"\"],\"PURSUE_ADVANCE_STUDIES\":\"professional_development\"}', '{\"EMPLOYMENT_STATUS\":\"self_employed\",\"JOB_EXPERIENCES\":\"never_employed\",\"LOCAL_ABROAD\":\"local\",\"NAME_COMPANY\":\"Zebralab\",\"ADDRESS_COMPANY\":\"boyog sur, balilihan,bohol\",\"CONTACT_COMPANY\":\"09123456789\",\"SUPPORTING_DOCUMENT\":\"Company ID\",\"LINE_BUSINESS\":\"Zebra\",\"POSITION\":\"Ceo\",\"WORK_ALIGNED\":\"no\",\"STATUS_FIRST_JOB\":\"temporary\",\"STATUS_CURRENT_JOB\":\"casual\",\"LEVEL_FIRST_JOB\":\"self_employed\",\"SELF_EMPLOYED_LINE\":\"Zebra technology\",\"FIND_FIRST\":\"arranged\",\"FIRST_JOB_AFTER_GRAD\":\"0_1month\",\"FIRST_JOB_FACTORS\":\"area_specialization\",\"CHALLENGES\":\"no_opportunity\",\"AWARDS\":\"yes\",\"LEVEL_AWARD\":\"international\",\"AWARD_DOC\":\"Best software engineer\"}', 'self_employed', 'Zebralab', 'Company ID', 'Ceo', 'international', 1, 1677033561),
(5, 7, '{\"PERMANENT_ADDRESS\":\"Magsija, Balilihan, Bohol\",\"EMAIL\":\"salva@gmail.com\",\"MOBILE\":\"09123456789\",\"CIVIL_STATUS\":\"2\",\"SEX\":\"1\",\"BIRTHDAY\":\"2009-02-22\",\"ANNUAL_INCOME\":\"10,000\"}', '{\"EXAM_PASSED\":[\"Cookery NC11\",\"\",\"\",\"\"],\"EXAM_DATE_TAKEN\":[\"February 12,2020\",\"\",\"\",\"\"],\"EXAM_RATING\":[\"passed\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PASSED\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_DURATION\":[\"\",\"\",\"\",\"\"],\"ADVANCE_STUDY_PLACE\":[\"\",\"\",\"\",\"\"]}', '{\"EMPLOYMENT_STATUS\":\"employed\",\"JOB_EXPERIENCES\":\"never_employed\",\"NEVER_EMPLOYED\":\"no_opportunity\",\"LINE_BUSINESS\":\"Call center\",\"POSITION\":\"Analyst\",\"WORK_ALIGNED\":\"yes\",\"STATUS_FIRST_JOB\":\"temporary\",\"STATUS_CURRENT_JOB\":\"regular_permanent\",\"LEVEL_FIRST_JOB\":\"rank_clerical\",\"FIND_FIRST\":\"recommended\",\"FIRST_JOB_AFTER_GRAD\":\"2_3years\",\"FIRST_JOB_FACTORS\":\"personality_factors\",\"CHALLENGES\":\"cpmpetition\",\"AWARDS\":\"no\",\"LEVEL_AWARD\":\"national\"}', 'employed', '', '', 'Analyst', 'national', 1, 1677038267);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `Annoucement_Key` int(10) UNSIGNED NOT NULL,
  `Time_Stamp` int(10) NOT NULL,
  `Announcement_Code` char(32) NOT NULL,
  `Announcement` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Annoucement_Key`, `Time_Stamp`, `Announcement_Code`, `Announcement`) VALUES
(1, 1676576859, '3c8bd135df41fa8e372fb8dd8a5eb8f7', 'This is an announcement to all alumni.'),
(2, 1676576899, 'dce09456a54b0e0a7de4164bc0b36ff7', 'testing only'),
(3, 1676576909, '120ea8a25e5d487bf68b5f7096440019', 'This is a test.'),
(4, 1676580383, '679eab6e6e5c43e9eb71781be324b06a', 'Sample announcement'),
(5, 1677033950, '0e2085dd35de1e0996fa2747c182e334', 'Please update your profile');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `Batch_Key` int(10) UNSIGNED NOT NULL,
  `Course_Key` int(10) UNSIGNED NOT NULL,
  `Batch` char(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`Batch_Key`, `Course_Key`, `Batch`) VALUES
(1, 2, '2018-2019'),
(2, 2, '2019-2020'),
(3, 2, '2020-2021'),
(4, 1, '2018-2019'),
(5, 1, '2019-2020'),
(6, 1, '2020-2021'),
(7, 4, '2018-2019'),
(8, 4, '2019-2020'),
(9, 4, '2020-2021'),
(10, 5, '2018-2019'),
(11, 5, '2019-2020'),
(12, 5, '2020-2021'),
(13, 1, '2017-2018'),
(14, 2, '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_Key` int(10) UNSIGNED NOT NULL,
  `Course_Code` char(15) NOT NULL,
  `Course_Name` char(255) NOT NULL,
  `Department` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_Key`, `Course_Code`, `Course_Name`, `Department`) VALUES
(1, 'BSIT', 'BS in Information Technology', 'ICT'),
(2, 'BSCS', 'BS in Computer Science', 'ICT'),
(3, 'BS-ELEX', 'BS in Electronics Technology', 'ITD'),
(4, 'BS-ELEC', 'BS in Electronics Technology', 'ITD'),
(5, 'BSIT-FPSM', 'BSIT major in Food Preparation Service Management', 'ITD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Key` int(10) UNSIGNED NOT NULL,
  `Alumni_Key` int(10) UNSIGNED DEFAULT NULL,
  `Email` char(100) NOT NULL,
  `Pass_Word` char(32) NOT NULL,
  `Date_Registered` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Key`, `Alumni_Key`, `Email`, `Pass_Word`, `Date_Registered`) VALUES
(1, 15, 'leajoy.karaan@gmail.com', '190f59a61c072f4877cf35e32d3f5fe9', 1676546903),
(2, 14, 'cherrymae.garsuta@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1676546987),
(3, 51, 'jessadawang@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677025583),
(4, 205, 'lumanas@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677014400),
(5, 204, 'rheajagunos@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677015780),
(6, 7, 'salva@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677035681),
(7, 1, 'jasonbaldesco@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677051297),
(8, 2, 'jonalynlamoste@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677051351),
(9, 9, 'oliverjimenez@gmail.com', '752c476b8c86a6176e3482ca9b206f80', 1677051404);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_alerts`
--
ALTER TABLE `admin_alerts`
  ADD PRIMARY KEY (`Admin_Alert_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Alert_Code`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`Alumni_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Batch_Key`,`First_Name`,`Middle_Name`,`Last_Name`);

--
-- Indexes for table `alumni_alerts`
--
ALTER TABLE `alumni_alerts`
  ADD PRIMARY KEY (`Alumni_Alert_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Alumni_Key`,`Annoucement_Key`);

--
-- Indexes for table `alumni_profiles`
--
ALTER TABLE `alumni_profiles`
  ADD PRIMARY KEY (`Alumni_Profile_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Alumni_Key`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`Annoucement_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Announcement_Code`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`Batch_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Batch`,`Course_Key`),
  ADD KEY `tbl_index1` (`Course_Key`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Course_Code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Key`),
  ADD UNIQUE KEY `tbl_unique` (`Alumni_Key`),
  ADD KEY `tbl_index1` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_alerts`
--
ALTER TABLE `admin_alerts`
  MODIFY `Admin_Alert_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `Alumni_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `alumni_alerts`
--
ALTER TABLE `alumni_alerts`
  MODIFY `Alumni_Alert_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alumni_profiles`
--
ALTER TABLE `alumni_profiles`
  MODIFY `Alumni_Profile_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `Annoucement_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `Batch_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Key` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
