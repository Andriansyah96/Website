-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2017 at 08:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poros`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_div` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `id_user`, `id_div`, `title`, `photo`, `youtube`, `description`, `like`, `views`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 10, 0, '2017-07-03', '2017-08-17 00:57:18'),
(2, 2, 2, 'Android', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9, 0, '2017-07-04', '2017-08-17 00:57:21'),
(3, 2, 5, 'Code Igniter', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8, 0, '2017-07-03', '2017-08-17 00:57:23'),
(4, 2, 2, 'Bootstrap', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7, 0, '2017-07-03', '2017-08-17 00:57:25'),
(5, 2, 5, 'Laravel', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6, 0, '2017-07-03', '2017-08-17 00:57:30'),
(6, 2, 4, 'Sql Injection', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6, 0, '2017-07-03', '2017-08-17 00:57:27'),
(7, 2, 5, 'Website 2', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 10, 0, '2017-07-26', '2017-08-17 00:57:32'),
(8, 2, 3, 'Ubuntu', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-22 20:22:15'),
(9, 2, 4, 'Security', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-22 20:22:18'),
(10, 2, 4, 'Security', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-22 20:22:19'),
(11, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:12'),
(12, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:16'),
(13, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:26'),
(14, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:23'),
(15, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:20'),
(16, 2, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-23 08:42:25'),
(17, 2, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-23 08:42:28'),
(18, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:33'),
(19, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:30'),
(20, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:38'),
(21, 3, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-29 15:36:35'),
(22, 2, 4, 'Website', '1afa8-placeholder.png', 'wTksDA5D9vI&t', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, '2017-08-23', '2017-08-27 16:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `id_blog`, `id_user`, `comment`, `created_at`) VALUES
(1, 6, 2, 'keren keren', '2017-07-03 12:08:45'),
(2, 2, 2, 'ayayaya', '2017-07-03 12:08:48'),
(3, 2, 2, 'ayayaya', '2017-07-03 12:08:48'),
(4, 2, 2, 'ayayaya', '2017-07-03 12:08:48'),
(5, 2, 2, 'ayayaya', '2017-07-03 12:08:48'),
(9, 1, 2, 'keren banget nih', '2017-07-03 07:17:33'),
(10, 1, 2, 'suka deh', '2017-07-03 07:17:43'),
(12, 6, 2, 'Sql itu apa sih ka?', '2017-07-26 06:57:25'),
(13, 5, 2, 'keren nih blognya', '2017-07-26 06:58:17'),
(14, 5, 2, 'ajarin dong ka', '2017-07-26 06:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `photo`) VALUES
(1, 'Departemen <br> Internal', 'Departemen yang bertanggungjawab pada lingkup internal (dalam) POROS. Bertugas merancang dan menjalankan kegiatan lingkup dalam POROS yang bertujuan untuk mempererat tali silaturahmi agar tumbuhnya rasa kekeluargaan antar anggota.', ''),
(2, 'Departemen Hubungan Masyarakat (Humas)', 'Departemen yang bertanggungjawab dalam hal komunikasi antar lembaga dalam serta luar Fakultas, komunikasi dapat berupa kerja sama maupun silaturahmi antar lembaga. Dan juga bertugas melakukan publikasi baik di web maupun official akun social media milik POROS.', ''),
(3, 'Departemen Pelitian dan Pengembangan (Litbang)', 'Departemen yang mempelajari serta mengembangkan Open Source dalam keminatan yang terdapat di POROS, yaitu Sistem Operasi, Mobile, Desain, Security, Web. Agendanya berupa Study Group dan kontribusi dalam pengembangan Open Source.', '');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `description`, `photo`) VALUES
(1, 'Design UI/UX', 'Divisi atau wadah bagi anggota POROS yang mempelajari, mengimplementasi, dan mengembangkan elemen-elemen desain dalam berkontribusi pada Open Source.', ''),
(2, 'Android Mobile Apps', 'Divisi atau wadah bagi anggota POROS yang mempelajari dan mengembangkan aplikasi mobile yang berbasis Open Source. Juga menggunakan berbagai macam library yang berbasis Open Source', ''),
(3, 'Operating System', 'Divisi atau wadah bagi anggota POROS yang mempelajari dan mengembangkan Sistem Operasi berbasis Linux.', ''),
(4, 'Network Security', 'Divisi atau wadah bagi anggota POROS yang mempelajari tentang keamanan jaringan antara lain mencari vulnerability dan mencari solusi dari masalah yang ada.', ''),
(5, 'Website', 'Divisi atau wadah bagi anggota POROS yang mempelajari dan mengembangkan web menggunakan HTML, PHP, CSS, Java Script. Juga menggunakan berbagai macam framework Open Source lainnya.', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_department` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `quota` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `id_user`, `id_department`, `title`, `photo`, `description`, `date`, `ticket`, `quota`, `created_at`) VALUES
(1, 1, 2, 'Pendaftaran Software Freedom Day 2017', '9347e-18443159_1375858765835936_7416248715813322752_n.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-05-22', '200', 200, '2017-05-14 17:00:00'),
(2, 1, 2, 'Pendaftaran Linux Goes to School', 'bbd3d-18443661_1018675051596399_4142640697389875200_n.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-05-22', '200', 200, '2017-05-14 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `id_user`, `key`, `date_created`) VALUES
(1, 2, '6a415f2b-68e2-492a-96b5-a17626b25313', '2017-07-25 06:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `id_user`, `email`, `mobile`, `message`, `created_at`) VALUES
(11, 2, 'luthfi9503@gmail.com', '085216863058', 'Lorem ipsum', '2017-07-21 08:02:41'),
(12, 2, 'luthfi9503@gmail.com', '085216863058', 'Lorem ipsum', '2017-07-21 08:02:46'),
(13, 2, 'luthfi9503@gmail.com', '085216863058', 'Lorem ipsum', '2017-07-21 08:02:49'),
(14, 2, 'luthfi9503@gmail.com', '085216863058', 'Lorem ipsum', '2017-07-21 08:02:52'),
(15, 2, 'luthfi9503@gmail.com', '085216863058', 'Tes', '2017-07-23 05:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `official`
--

CREATE TABLE `official` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dept` int(11) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `official`
--

INSERT INTO `official` (`id`, `id_user`, `id_dept`, `position`, `quote`, `year`) VALUES
(2, 3, NULL, 'Ketua Umum', 'Open Source Open Mind!', '2017'),
(3, 4, NULL, 'Wakil Ketua Umum', 'Open Source Open Mind!', '2017'),
(4, 5, NULL, 'Sekretaris Umum', 'Open Source Open Mind!', '2017'),
(5, 6, NULL, 'Bendahara Umum I', 'Open Source Open Mind!', '2017'),
(6, 7, NULL, 'Bendahara Umum II', 'Open Source Open Mind!', '2017'),
(7, 2, 3, 'Wakil Ketua Departemen', 'Open Source Open Mind!', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_div` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_user`, `id_div`, `name`, `link`, `photo`, `created_at`) VALUES
(1, 2, 2, 'My Zodiac - Simple App for Retrofit', 'https://github.com/lutluthfi/My-Zodiac.git', 'd5c2f-06.jpg', '2017-06-24 11:53:40'),
(2, 2, 2, 'My Zodiac - Simple App for Retrofit', 'https://github.com/lutluthfi/My-Zodiac.git', 'e3890-02.jpg', '2017-06-26 07:07:41'),
(3, 2, 2, 'My Zodiac - Simple App for Retrofit', 'https://github.com/lutluthfi/My-Zodiac.git', '39d41-08.jpg', '2017-06-26 07:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dept` int(11) DEFAULT NULL,
  `id_div` int(11) DEFAULT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('official','staff','member') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `nim`, `dob`, `photo`, `mobile`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin POROS', 'admin', '2017-06-19', 'e6007-01.jpg', 'Filkom UB', 'poros_ub@ub.ac.id', '6986d648456316f65ffb98c139f28702', 'official', '2017-06-19 11:44:46', '2017-06-19 11:44:47'),
(2, 'Arif Luthfiansyah', '155150207111160', '1997-06-28', '3aabc-img_3649.jpg', '085216863058', 'luthfi9503@gmail.com', 'a27fd208db7a9f4248e999b29120349f', 'official', '2017-06-24 10:00:29', '2017-06-24 10:00:29'),
(3, 'Pupung Adi Prasetyo', '155150207111160', '1997-06-28', 'e6007-01.jpg', '085216863058', 'pupung@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'official', '2017-06-24 10:03:32', '2017-06-24 10:03:32'),
(4, 'Ibnu Sugiman', '155150207111160', '1997-06-28', 'e6007-01.jpg', '085216863058', 'satria@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'official', '2017-06-24 10:03:32', '2017-06-24 10:03:32'),
(5, 'Shindy Maria Ulfa', '155150207111160', '1997-06-28', 'e6007-01.jpg', '085216863058', 'shindy@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'official', '2017-06-24 10:03:32', '2017-06-24 10:03:32'),
(6, 'Nurhaida Syadrina', '155150207111160', '1997-06-28', 'e6007-01.jpg', '085216863058', 'nurhaida@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'official', '2017-06-24 10:03:32', '2017-06-24 10:03:32'),
(7, 'Fadhilatur Rahmah', '155150207111160', '1997-06-28', 'e6007-01.jpg', '085216863058', 'fadhil@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'official', '2017-06-24 10:03:32', '2017-06-24 10:03:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_div` (`id_div`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`id_user`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `official`
--
ALTER TABLE `official`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dept` (`id_dept`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_div` (`id_div`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_position` (`id_dept`),
  ADD KEY `id_div` (`id_div`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `official`
--
ALTER TABLE `official`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`id_div`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keys`
--
ALTER TABLE `keys`
  ADD CONSTRAINT `keys_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `official`
--
ALTER TABLE `official`
  ADD CONSTRAINT `official_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `official_ibfk_2` FOREIGN KEY (`id_dept`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_div`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`id_dept`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_4` FOREIGN KEY (`id_div`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
