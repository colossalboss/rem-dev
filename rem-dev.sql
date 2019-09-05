-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 04:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rem-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(10) UNSIGNED NOT NULL,
  `admin_First_Name` varchar(30) NOT NULL,
  `admin_Last_Name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `date_Of_Account_Creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_ID` int(10) UNSIGNED NOT NULL,
  `category_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_ID`, `category_Name`) VALUES
(1, 'Back-end Developer'),
(2, 'Front-end Developer'),
(3, 'Digital Marketer'),
(4, 'Python'),
(5, 'Vue Js'),
(6, 'React');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_ID` int(10) UNSIGNED NOT NULL,
  `client_First_Name` varchar(30) NOT NULL,
  `client_Last_Name` varchar(30) NOT NULL,
  `client_Email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_Number` char(11) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clientdevchat`
--

CREATE TABLE `clientdevchat` (
  `chat_ID` int(10) UNSIGNED NOT NULL,
  `client_ID` int(11) NOT NULL,
  `developer_ID` int(11) NOT NULL,
  `chat_Date` datetime NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `dev_ID` int(10) UNSIGNED NOT NULL,
  `developer_First_Name` varchar(30) NOT NULL,
  `developer_Last_Name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_Name` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `developer_Profile` text NOT NULL,
  `proficiency` varchar(30) NOT NULL,
  `average_Rating` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone_Number` char(11) NOT NULL,
  `github_Url` varchar(150) NOT NULL,
  `img_Url` varchar(200) NOT NULL,
  `category_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`dev_ID`, `developer_First_Name`, `developer_Last_Name`, `email`, `user_Name`, `password`, `developer_Profile`, `proficiency`, `average_Rating`, `location`, `phone_Number`, `github_Url`, `img_Url`, `category_Name`) VALUES
(1, 'Nnamdi', 'Obiesie', 'nnamdi@gmail.com', 'nado', '51dc30ddc473d43a6011e9ebba6ca7', 'I am an analytical thinker with an eye for detail, with ability to thrive in a challenging and busy environment. A team player with excellent interpersonal, verbal and written communication skills', '', '$15/hr', 'Lagos', '0907373733', '', './asset/pic1.jpg', 'Front-end Devel'),
(2, 'Ralp', 'Olie', 'jo@jnsjs', 'ghost', '8ff32489f92f33416694be8fdc2d4c', 'Mad ass problem solver solver with an eye for detail, with ability to thrive in a challenging and busy environment. A team player with excellent interpersonal, verbal and written communication skills', '', '$20/hr', 'Port Harcourt', '1122333', '', './asset/pic2.jpg', 'Front-end Devel'),
(3, 'Chinene', 'Joeee', 'chi@gmail.com', 'maraj', '4a0b0dcedd48f780778d1cd1bb8f98', 'I am a problem solver with an eye for detail, with ability to thrive in a challenging and busy environment. A team player with excellent interpersonal, verbal and written communication skills', '', '$30/hr', 'Abuja', '09099w3', '', './asset/pic4.jpg', 'Front-end Devel'),
(4, 'Chinene', 'Joeee', 'cgghi@gmail.com', '', '22c276a05aa7c90566ae2175bcc2a9', '', '', '0', '', '09099w3', '', './asset/pic1.jpg', 'Front-end Devel'),
(5, 'Sarah', 'Connor', 'co@jsjsjs', '', 'c12e01f2a13ff5587e1e9e4aedb824', '', '', '0', '', '22333', '', './asset/pic1.jpg', '0'),
(6, 'John', 'HHHJ', 'klsl@mmsms', '', 'ff1ccf57e98c817df1efcd9fe44a8a', '', '', '0', '', '222323', '', './asset/pic1.jpg', '0'),
(7, 'kdfkdkq', 'kdkedk', 'kdksd@kekwe1q', '', '1fdc0f893412ce55f0d2811821b84d', '', '', '0', '', '33333', '', './asset/pic1.jpg', '0'),
(8, 'jjsdj', 'KSKSK', 'KSKS!@MWW', '', '3acf83834396fa1c878707132ead62', '', '', '0', '', 'KWKW', '', './asset/pic1.jpg', '0'),
(9, 'Show', 'jsjsj', 'jsjs@jsjsj', '', 'eff7d5dba32b4da32d9a67a519434d', '', '', '0', '', '2i2i2', '', './asset/pic1.jpg', '0'),
(12, 'nam', 'nam', 'nam@gmail.com', '', '51dc30ddc473d43a6011e9ebba6ca7', '', '', '', '', '929292', '', '', ''),
(13, 'nado', 'obi', 'nado@gmail.com', '', 'dd07de8561395a7c37f8fcc1752d45', '', '', '', '', '89399w3', '', '', ''),
(14, 'mini', 'mie', 'me@gmail.com', '', 'ab86a1e1ef70dff97959067b723c5c24', '', '', '', '', '892929', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `devreview`
--

CREATE TABLE `devreview` (
  `dev_Review_ID` int(10) UNSIGNED NOT NULL,
  `admin_ID` int(10) UNSIGNED NOT NULL,
  `developer_ID` int(10) UNSIGNED NOT NULL,
  `status_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devstatus`
--

CREATE TABLE `devstatus` (
  `status_ID` int(11) NOT NULL,
  `status_Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `job_ID` int(10) UNSIGNED NOT NULL,
  `job_Title` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `start_Date` datetime NOT NULL,
  `end_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_ID` int(11) NOT NULL,
  `job_ID` int(11) UNSIGNED NOT NULL,
  `client_ID` int(11) UNSIGNED NOT NULL,
  `client_Review` varchar(150) NOT NULL,
  `developer_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_ID` int(10) UNSIGNED NOT NULL,
  `skill_Name` varchar(10) NOT NULL,
  `developer_ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_ID`, `skill_Name`, `developer_ID`, `category_ID`) VALUES
(1, 'HTML', 1, 0),
(2, 'CSS', 1, 0),
(3, 'JavaScript', 0, 0),
(4, 'Django', 0, 0),
(5, 'VueJs', 0, 0),
(6, 'Python', 0, 0),
(7, 'React', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image_Url` varchar(250) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `cv_Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `clientdevchat`
--
ALTER TABLE `clientdevchat`
  ADD PRIMARY KEY (`chat_ID`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`dev_ID`);

--
-- Indexes for table `devreview`
--
ALTER TABLE `devreview`
  ADD PRIMARY KEY (`dev_Review_ID`);

--
-- Indexes for table `devstatus`
--
ALTER TABLE `devstatus`
  ADD PRIMARY KEY (`status_ID`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`job_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_ID`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clientdevchat`
--
ALTER TABLE `clientdevchat`
  MODIFY `chat_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `dev_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `devreview`
--
ALTER TABLE `devreview`
  MODIFY `dev_Review_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `devstatus`
--
ALTER TABLE `devstatus`
  MODIFY `status_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `job_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
