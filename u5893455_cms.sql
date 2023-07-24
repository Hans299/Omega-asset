-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 12:42 PM
-- Server version: 10.6.13-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5893455_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_team`
--

CREATE TABLE `md_team` (
  `id` int(11) NOT NULL,
  `url_name` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `path_picture` text NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_team`
--

INSERT INTO `md_team` (`id`, `url_name`, `fullname`, `role`, `phonenumber`, `description`, `path_picture`, `is_active`) VALUES
(1, 'joko', 'Joko Purnomo', 'Chief Executive Officer', '6281221809709', 'Joko has several years experiences in variety in education background industry. He has nominated as a best target achieving in Sun Education Group. He has been proven successfully to grow the sales number in several local universities.', 'public\\assets\\images\\team\\Joko.png\r\n', 1),
(2, 'rizvian', 'Rizvian Ritheli', 'Chief Technology Officer', '6285278085666', 'Rizvian obtained a Bachelor of Computer Science Degree in best private IT university in Indonesia. He has several years experience in UI/UX Designer in Online Pajak. He has been successfully managed platform & networks in HSBC.', 'public\\assets\\images\\team\\Rizvian.png\r\n', 1),
(3, 'radja', 'Radja Mohammad', 'Head of Marketing', '6281219234885', '', 'public\\assets\\images\\team\\Radja.png', 1),
(4, 'monic', 'Pricila Monica', 'Head of Product', '6281323918057', '', 'public\\assets\\images\\team\\Monic.png\r\n', 0),
(5, 'marcella', 'Marcella Christa', 'Section Head Admission', '6281323963291', '', 'public\\assets\\images\\team\\Marcella.png\r\n', 1),
(6, 'rio', 'Rio Cristanto Effendi', 'Senior Counselor', '6281296768294', '', 'public\\assets\\images\\team\\Rio.png', 1),
(7, 'tivvany', 'Tivvany Mareli', 'Social Media', '6282171279888', '', 'public\\assets\\images\\team\\Tivvany.png\r\n', 1),
(8, 'yudistira', 'R.Bg. Yudistira', 'Graphic Designer', '6281284840055', '', 'public\\assets\\images\\team\\Yudistira.png\r\n', 1),
(9, 'kirana', 'Kirana Octiavany', 'Counselor Support', '6281316676644', '', 'public\\assets\\images\\team\\Kirana.png', 1),
(10, 'jannete', 'Jannete Amelia Alicia', 'Counselor Support', '6281282152864', '', 'public\\assets\\images\\team\\Jannete.png\r\n', 1),
(11, 'nabilah', 'Nabilah Anindya Putri', 'Counselor Support', '6281282152861', '', 'public\\assets\\images\\team\\Nabilah.png\r\n', 1),
(12, 'latisha', 'Latisha Sahrani', 'Counselor Support', '6281290512161', '', 'public\\assets\\images\\team\\Latisha.png\r\n', 1),
(13, 'chanyn', 'Chanyndita Bivothy', 'Counselor Support', '6281321808775', '', 'public\\assets\\images\\team\\Chanyn.png\r\n', 1),
(14, 'elena', 'Elena Chrisnandari', 'Counselor Support', '6281211500058', '', 'public\\assets\\images\\team\\Elena.png\r\n', 1),
(15, 'lady', 'Lady Mardan', 'Counselor Support', '6281214000128', '', 'public\\assets\\images\\team\\Lady.png\r\n', 1),
(16, 'alsavina', 'Zeninah Alsavina', 'Counselor Support', '6281211565917', '', 'public\\assets\\images\\team\\Alsavina.png\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_visit`
--

CREATE TABLE `sys_visit` (
  `id` int(11) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `md_team`
--
ALTER TABLE `md_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_visit`
--
ALTER TABLE `sys_visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `md_team`
--
ALTER TABLE `md_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sys_visit`
--
ALTER TABLE `sys_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
