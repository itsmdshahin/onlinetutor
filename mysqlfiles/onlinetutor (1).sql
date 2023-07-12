-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:26 PM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prize` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `prize`, `image`) VALUES
(16, 'LU  ', '9', 'img/5511866-antoine-griezmann-wallpapers.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `tutorlist`
--

CREATE TABLE `tutorlist` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `exprience` varchar(100) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `froms` varchar(100) NOT NULL,
  `reviews` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `bio` varchar(1500) DEFAULT NULL,
  `fid` varchar(100) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `level13` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorlist`
--

INSERT INTO `tutorlist` (`id`, `name`, `email`, `subject`, `skill`, `exprience`, `description`, `froms`, `reviews`, `image`, `bio`, `fid`, `title`, `level13`) VALUES
(1, 'SHAHIN', 'mdshahinurrahman8@gmail.com', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', 'Leading University', 'GOOD', 'image/pass.png', 'i have experience on computer science, information technology', '1', 'I will help in CSE Subject', 'https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/272964244/original/0638e83ceb2bc22aff2a519a4668aa2650e527ec.png'),
(16, 'SAYED', 'sayedursultan@gmail.com', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', 'LU', '5 Star', 'image/icon.png', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/173063457/original/a3219b4349e09513b4eecc46f193c22e1514cf26.jpeg'),
(18, 'SHAHIN', 'mdshahinurrahman8@gmail.com', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', 'LU', '5 Star', 'image/pass.png', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/279653492/original/ada14c82200814a3bd43f6b60caa4c0f1a6b7732.jpg'),
(27, 'MONY', 'mony_cse@lus.ac.bd', 'CSE', 'CP,ACM', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', 'LU', '5 Star', 'image/icon.png', 'i have experience on computer science ', '', 'I will help in CP Subjects', 'https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/272964244/original/0638e83ceb2bc22aff2a519a4668aa2650e527ec.png'),
(28, 'MONY', 'mony_cse@lus.ac.bd', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', 'LU', '5 Star', 'image/icon.png', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/173063457/original/a3219b4349e09513b4eecc46f193c22e1514cf26.jpeg'),
(30, 'SHAHIN', 'mdshahinurrahman8@gmail.com', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', '', '', 'image/F_Review.jpg', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'image/aboutme-removebg-preview.png'),
(31, 'SHAHIN', 'mdshahinurrahman8@gmail.com', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', '', '', 'image/G_Review.jpg', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'image/aboutme-removebg-preview.png'),
(32, 'SHAHIN', 'mdshahinurrahman8@gmail.com', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', '', '', 'image/Y_Review.jpg', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'image/aboutme-removebg-preview.png'),
(33, 'FARUK', 'as.sikder@lus.ac.bd', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', '', '', 'image/icon.png', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'image/8fc857b7a92f8c3bbbcc8a71c944ed22cfe6b0a3863e216454b5eee807d3aea9.jpg'),
(34, 'SHAFKAT', 'shafkat@lus.ac.bd', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', '', '', 'image/icon.png', 'i have experience on computer science, information technology', '', 'I will help in CSE Subject', 'image/ML.png'),
(35, 'ARAFAT', 'arafat@lus.ac.bd', 'CSE', 'CSE,CSS', '10 year as a Teacher', 'HI EVERYONE!are you looking for program language expert? then you are in right place. i have experience on computer science, information technology, and software engineering related filed. i also have command on different languages of computer. contact with me and i will shine your work.I will assist in:computer sciencesoftware engineeringinformation technologyjavajava scriptspythonphpHTMLC++C#malwareonce you will work with me hopefully you will be provided with high result. if you are looking for something which is not mentioned above then simply contact with me and i will give you positive response.why choose me?24/7 available100% satisfied workwell researched contentsi will be wait for your positive response', '', '', 'image/217A8685-scaled.jpg', 'i have experience on computer science, information technology', '', 'I will in CSE Subject', 'image/RE4wyT0.jpeg'),
(36, 'Arafat Habib Quraishi', 'arafat@lus.ac.bd', 'CSE', 'REACT NATIVE', '10 year as a Teacher', 'i have experience on computer science, information technology, and software engineering related filed.i have experience on computer science, information technology, and software engineering related filed.i have experience on computer science, information technology, and software engineering related filed.i have experience on computer science, information technology, and software engineering related filed.', '', '', 'image/217A8685-scaled.jpg', 'i have experience on computer science, information technology, and software engineering related filed.', '', '10 Simple training for beginners!', 'image/71dc4c0cd0bb14e4df2790f02cfccb4a5cb79fed.webp'),
(37, 'Md. Jehadul Islam Mony', 'mony_cse@lus.ac.bd', 'CSE', 'C++', '10 year as a Front End Developer ', 'This is solve by SHHAIN THIS  Lecturer Computer Science & EngineeringLecturer Computer Science & EngineeringLecturer Computer Science & Engineering', '', '', 'image/Safeimagekit-resized-img (1).png', 'Lecturer Computer Science & Engineering', '', 'How to solve this Problem[hard/easy]?', 'image/8c75291.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorlist`
--
ALTER TABLE `tutorlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tutorlist`
--
ALTER TABLE `tutorlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
