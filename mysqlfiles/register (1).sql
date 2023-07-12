-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `re-password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `image`, `email`, `password`, `re-password`, `mobile`, `username`) VALUES
(1, 'MD SHAHINUR  ', 'image/pass.png', 'mdshahinurrahman8@gmail.com', '1234', '1234', '+8801717258344', ' itsmdshahin'),
(3, 'MD SHAHINUR RAHMAN', 'image/pass.png', 'mdshahinahmn8@gmail.com', 'Admin1234@', 'Admin1234@', '+8801646884879', 'ssssssssss'),
(4, 'MD SHAHINUR RAHMAN', 'image/pass.png', '1', '1', 'Admin1234@', '+8801646884879', 'sssssssssss'),
(5, 'MD SHAHINUR RAHMAN', 'image/pass.png', 'cse_1932020044@lus.ac.bd', '1', 'Admin1234@', '+8801646884879', 'sssssssssss232323232'),
(7, 'Md. Jehadul Islam Mony', 'image/Safeimagekit-resized-img (1).png', 'mony_cse@lus.ac.bd', 'Mony1234@', 'Mony1234@', '01686749128', 'JIM'),
(8, 'Prof. Dr. AS. Sikder', 'image/asfaruqsir.jpg', 'as.sikder@lus.ac.bd', 'Faruq1234@', 'Faruq1234@', '01757584584', 'Prof.Dr. AS.Sikder'),
(9, 'Shafkat Kibria', 'image/shafkat060320.jpg', 'shafkat@lus.ac.bd', 'Shafkat1234@', 'Shafkat1234@', '01972601050', 'ShafkatKibria'),
(10, 'Arafat Habib Quraishi', 'image/217A8685-scaled.jpg', 'arafat@lus.ac.bd', 'Admin1234@', 'Admin1234@', '+8801914487146', 'Arafat ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
