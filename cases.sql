-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 06:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `case_title` varchar(255) NOT NULL,
  `victim_name` varchar(255) NOT NULL,
  `victim_age` int(11) NOT NULL,
  `victim_address` varchar(255) NOT NULL,
  `infect_date` date NOT NULL,
  `case_body` varchar(255) NOT NULL,
  `case_author` varchar(100) NOT NULL,
  `case_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_title`, `victim_name`, `victim_age`, `victim_address`, `infect_date`, `case_body`, `case_author`, `case_created_at`) VALUES
(1, 'Second Case', 'John Doe', 29, 'Kingston', '2020-03-29', 'This is our second victim.', 'Jane Doe', '2020-03-12 17:23:30'),
(2, 'Third Case', 'Woe Pung', 30, 'Kingston 11', '2020-03-31', 'This is our third victim.', 'Jim Wefu', '2020-03-12 17:23:30'),
(11, 'Fourth Case', 'icbdeiu', 90, 'Fourth Case Lane', '0000-00-00', 'This is the fourth case', 'jdbchiu', '2020-03-15 14:05:04'),
(17, 'Fifth Case', 'bvdwub', 70, 'bvewbhk', '0000-00-00', 'This is the fifth case.', 'hbvsdiu', '2020-03-15 15:12:13'),
(19, 'First Case', 'Vince Law', 47, 'Vince Law Ave', '1234-10-02', 'This is the first Case.', 'Marry Jane', '2020-03-15 17:47:44'),
(21, 'Another Case', 'Xampp', 33, 'phpMyAdmin', '2017-02-14', 'This is another case.', 'Server', '2020-03-15 19:34:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
