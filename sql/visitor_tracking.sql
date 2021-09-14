-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2021 at 01:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16999459_ip_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitor_tracking`
--

CREATE TABLE `visitor_tracking` (
  `entry_id` int(11) NOT NULL,
  `address` varchar(15) NOT NULL,
  `agent` varchar(255) NOT NULL,
  `referer` varchar(255) NOT NULL,
  `requestUri` varchar(100) NOT NULL,
  `latitude` varchar(40) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `country_name` varchar(25) NOT NULL,
  `region_name` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zip_code` int(15) NOT NULL,
  `time_zone` varchar(25) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitor_tracking`
--

INSERT INTO `visitor_tracking` (`entry_id`, `address`, `agent`, `referer`, `requestUri`, `latitude`, `longitude`, `country_name`, `region_name`, `city`, `zip_code`, `time_zone`, `timestamp`) VALUES
(24, '207.244.89.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '38.8851', '-77.1803', 'United States', 'Virginia', 'Falls Church', 22046, 'America/New_York', '2021-09-12 16:07:49'),
(25, '207.244.71.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '38.93', '-77.35', 'United States', 'Virginia', 'Reston', 20191, 'America/New_York', '2021-09-13 10:43:51'),
(26, '112.134.196.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 01:48:06'),
(27, '112.134.197.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'https://www.000webhost.com/', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 06:28:51'),
(28, '112.134.197.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'https://www.000webhost.com/', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 06:31:25'),
(29, '207.244.71.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '38.93', '-77.35', 'United States', 'Virginia', 'Reston', 20191, 'America/New_York', '2021-09-14 06:33:00'),
(30, '207.244.71.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '38.93', '-77.35', 'United States', 'Virginia', 'Reston', 20191, 'America/New_York', '2021-09-14 06:33:20'),
(31, '112.134.197.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'https://www.000webhost.com/', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 06:33:37'),
(32, '112.134.197.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 06:47:43'),
(33, '35.161.55.221', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '', '/', '45.8491', '-119.7143', 'United States', 'Oregon', 'Boardman', 97818, 'America/Los_Angeles', '2021-09-14 07:24:05'),
(34, '35.161.55.221', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '', '/', '45.8491', '-119.7143', 'United States', 'Oregon', 'Boardman', 97818, 'America/Los_Angeles', '2021-09-14 07:25:58'),
(35, '35.161.55.221', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '', '/', '45.8491', '-119.7143', 'United States', 'Oregon', 'Boardman', 97818, 'America/Los_Angeles', '2021-09-14 07:26:18'),
(36, '35.161.55.221', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '', '/', '45.8491', '-119.7143', 'United States', 'Oregon', 'Boardman', 97818, 'America/Los_Angeles', '2021-09-14 07:27:13'),
(37, '112.134.197.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 09:50:38'),
(38, '162.210.194.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '38.6759', '-77.3158', 'United States', 'Virginia', 'Woodbridge', 22192, 'America/New_York', '2021-09-14 09:59:37'),
(39, '162.210.194.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '38.6759', '-77.3158', 'United States', 'Virginia', 'Woodbridge', 22192, 'America/New_York', '2021-09-14 09:59:38'),
(40, '112.134.197.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:92.0) Gecko/20100101 Firefox/92.0', '', '/', '6.9525', '79.9224', 'Sri Lanka', 'Western Province', 'Kelaniya', 11600, 'Asia/Colombo', '2021-09-14 11:04:13'),
(41, '35.161.55.221', 'Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 5.1; Trident/4.0; (R1 1.5); .NET CLR 1.1.4322; .NET CLR 2.0.50727)', '', '/', '45.8491', '-119.7143', 'United States', 'Oregon', 'Boardman', 97818, 'America/Los_Angeles', '2021-09-14 12:53:40'),
(42, '35.161.55.221', 'Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 5.1; Trident/4.0; (R1 1.5); .NET CLR 1.1.4322; .NET CLR 2.0.50727)', '', '/', '45.8491', '-119.7143', 'United States', 'Oregon', 'Boardman', 97818, 'America/Los_Angeles', '2021-09-14 12:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitor_tracking`
--
ALTER TABLE `visitor_tracking`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `entry_id` (`entry_id`,`timestamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor_tracking`
--
ALTER TABLE `visitor_tracking`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
