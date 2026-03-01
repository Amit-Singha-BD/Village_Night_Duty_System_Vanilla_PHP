-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2026 at 02:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `night_gourd`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `p1_id` int(11) DEFAULT NULL,
  `p2_id` int(11) DEFAULT NULL,
  `p3_id` int(11) DEFAULT NULL,
  `p4_id` int(11) DEFAULT NULL,
  `p5_id` int(11) DEFAULT NULL,
  `p6_id` int(11) DEFAULT NULL,
  `p7_id` int(11) DEFAULT NULL,
  `p8_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `day` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `p1_id`, `p2_id`, `p3_id`, `p4_id`, `p5_id`, `p6_id`, `p7_id`, `p8_id`, `date`, `day`) VALUES
(643, 1, 31, 61, 91, 121, NULL, NULL, NULL, '2025-12-01', 'Monday'),
(644, 2, 32, 62, 92, 122, NULL, NULL, NULL, '2025-12-02', 'Tuesday'),
(645, 3, 33, 63, 93, 123, NULL, NULL, NULL, '2025-12-03', 'Wednesday'),
(646, 4, 34, 64, 94, 124, NULL, NULL, NULL, '2025-12-04', 'Thursday'),
(647, 5, 35, 65, 95, 125, NULL, NULL, NULL, '2025-12-05', 'Friday'),
(648, 6, 36, 66, 96, 126, NULL, NULL, NULL, '2025-12-06', 'Saturday'),
(649, 7, 37, 67, 97, 127, NULL, NULL, NULL, '2025-12-07', 'Sunday'),
(650, 8, 38, 68, 98, 128, NULL, NULL, NULL, '2025-12-08', 'Monday'),
(651, 9, 39, 69, 99, 129, NULL, NULL, NULL, '2025-12-09', 'Tuesday'),
(652, 10, 40, 70, 100, 130, NULL, NULL, NULL, '2025-12-10', 'Wednesday'),
(653, 11, 41, 71, 101, 131, NULL, NULL, NULL, '2025-12-11', 'Thursday'),
(654, 12, 42, 72, 102, 132, NULL, NULL, NULL, '2025-12-12', 'Friday'),
(655, 13, 43, 73, 103, 133, NULL, NULL, NULL, '2025-12-13', 'Saturday'),
(656, 14, 44, 74, 104, 134, NULL, NULL, NULL, '2025-12-14', 'Sunday'),
(657, 15, 45, 75, 105, 135, NULL, NULL, NULL, '2025-12-15', 'Monday'),
(658, 16, 46, 76, 106, 136, NULL, NULL, NULL, '2025-12-16', 'Tuesday'),
(659, 17, 47, 77, 107, 137, NULL, NULL, NULL, '2025-12-17', 'Wednesday'),
(660, 18, 48, 78, 108, 138, NULL, NULL, NULL, '2025-12-18', 'Thursday'),
(661, 19, 49, 79, 109, 139, NULL, NULL, NULL, '2025-12-19', 'Friday'),
(662, 20, 50, 80, 110, 140, NULL, NULL, NULL, '2025-12-20', 'Saturday'),
(663, 21, 51, 81, 111, 141, NULL, NULL, NULL, '2025-12-21', 'Sunday'),
(664, 22, 52, 82, 112, 142, NULL, NULL, NULL, '2025-12-22', 'Monday'),
(665, 23, 53, 83, 113, 143, NULL, NULL, NULL, '2025-12-23', 'Tuesday'),
(666, 24, 54, 84, 114, 144, NULL, NULL, NULL, '2025-12-24', 'Wednesday'),
(667, 25, 55, 85, 115, 145, NULL, NULL, NULL, '2025-12-25', 'Thursday'),
(668, 26, 56, 86, 116, 146, NULL, NULL, NULL, '2025-12-26', 'Friday'),
(669, 27, 57, 87, 117, 147, NULL, NULL, NULL, '2025-12-27', 'Saturday'),
(670, 28, 58, 88, 118, 148, NULL, NULL, NULL, '2025-12-28', 'Sunday'),
(671, 29, 59, 89, 119, 149, NULL, NULL, NULL, '2025-12-29', 'Monday'),
(672, 30, 60, 90, 120, 150, NULL, NULL, NULL, '2025-12-30', 'Tuesday'),
(673, 31, 61, 91, 121, 301, 0, NULL, NULL, '2025-12-31', 'Wednesday'),
(674, 32, 62, 92, 122, 302, NULL, NULL, NULL, '2026-01-01', 'Thursday'),
(675, 1, 2, 3, 4, 5, 6, 0, 0, '2026-03-01', 'Sunday'),
(676, 7, 8, 9, 10, 11, 12, 0, 0, '2026-03-02', 'Monday'),
(677, 13, 14, 15, 16, 17, 0, 0, 0, '2026-03-03', 'Tuesday'),
(678, 18, 19, 20, 21, 22, 0, 0, 0, '2026-03-04', 'Wednesday'),
(679, 23, 24, 25, 26, 27, 0, 0, 0, '2026-03-05', 'Thursday'),
(680, 28, 29, 30, 31, 32, 0, 0, 0, '2026-03-06', 'Friday'),
(681, 33, 34, 35, 36, 37, 0, 0, 0, '2026-03-07', 'Saturday'),
(682, 38, 39, 40, 41, 42, 0, 0, 0, '2026-03-08', 'Sunday'),
(683, 43, 44, 45, 46, 47, 0, 0, 0, '2026-03-09', 'Monday'),
(684, 48, 49, 50, 51, 52, 0, 0, 0, '2026-03-10', 'Tuesday'),
(685, 53, 54, 55, 56, 57, 0, 0, 0, '2026-03-11', 'Wednesday'),
(686, 58, 59, 60, 61, 62, 0, 0, 0, '2026-03-12', 'Thursday'),
(687, 63, 64, 65, 66, 67, 0, 0, 0, '2026-03-13', 'Friday'),
(688, 68, 69, 70, 71, 72, 0, 0, 0, '2026-03-14', 'Saturday'),
(689, 73, 74, 75, 76, 77, 0, 0, 0, '2026-03-15', 'Sunday'),
(690, 78, 79, 80, 81, 82, 0, 0, 0, '2026-03-16', 'Monday'),
(691, 83, 84, 85, 86, 87, 0, 0, 0, '2026-03-17', 'Tuesday'),
(692, 88, 89, 90, 91, 92, 0, 0, 0, '2026-03-18', 'Wednesday'),
(693, 93, 94, 95, 96, 97, 0, 0, 0, '2026-03-19', 'Thursday'),
(694, 98, 99, 100, 101, 102, 0, 0, 0, '2026-03-20', 'Friday'),
(695, 103, 104, 105, 106, 107, 0, 0, 0, '2026-03-21', 'Saturday'),
(696, 108, 109, 110, 111, 112, 0, 0, 0, '2026-03-22', 'Sunday'),
(697, 113, 114, 115, 116, 117, 0, 0, 0, '2026-03-23', 'Monday'),
(698, 118, 119, 120, 121, 122, 0, 0, 0, '2026-03-24', 'Tuesday'),
(699, 123, 124, 125, 126, 127, 0, 0, 0, '2026-03-25', 'Wednesday'),
(700, 128, 129, 130, 131, 132, 0, 0, 0, '2026-03-26', 'Thursday'),
(701, 133, 134, 135, 136, 137, 0, 0, 0, '2026-03-27', 'Friday'),
(702, 138, 139, 140, 141, 142, 0, 0, 0, '2026-03-28', 'Saturday'),
(703, 143, 144, 145, 146, 147, 0, 0, 0, '2026-03-29', 'Sunday'),
(704, 148, 149, 150, 301, 302, 0, 0, 0, '2026-03-30', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `attendance` varchar(3) NOT NULL,
  `absent_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `father_name`, `phone`, `attendance`, `absent_details`) VALUES
(1, 'Rahim Hossain', 'Karim Hossain', '01710000001', '', '0'),
(2, 'Karim Uddin', 'Rahman Uddin', '01710000002', '', '0'),
(3, 'Samiul Islam', 'Nazmul Islam', '01710000003', '', '0'),
(4, 'Rafiqul Alam', 'Farid Alam', '01710000004', '', '0'),
(5, 'Nurul Amin', 'Abdul Amin', '01710000005', '', '0'),
(6, 'Akash Mia', 'Kamal Mia', '01710000006', '', '0'),
(7, 'Jamil Hasan', 'Salim Hasan', '01710000007', '', '0'),
(8, 'Habib Rahman', 'Jalal Rahman', '01710000008', '', '0'),
(9, 'Shamim Sarker', 'Latif Sarker', '01710000009', '', '0'),
(10, 'Nafis Ahmed', 'Majid Ahmed', '01710000010', '', '0'),
(11, 'Arif Rahman', 'Bashir Rahman', '01710000011', '', '0'),
(12, 'Hasibul Hossain', 'Mostafa Hossain', '01710000012', '', '0'),
(13, 'Shahidul Islam', 'Hasan Islam', '01710000013', '', '0'),
(14, 'Sabbir Khan', 'Rafiq Khan', '01710000014', '', '0'),
(15, 'Emon Karim', 'Latif Karim', '01710000015', '', '0'),
(16, 'Saiful Islam', 'Amzad Islam', '01710000016', '', '0'),
(17, 'Rashed Alam', 'Murad Alam', '01710000017', '', '0'),
(18, 'Milon Sarker', 'Hamid Sarker', '01710000018', '', '0'),
(19, 'Sajjad Khan', 'Mustafiz Khan', '01710000019', '', '0'),
(20, 'Rubel Hasan', 'Hafizur Hasan', '01710000020', '', '0'),
(21, 'Alamin Ahmed', 'Kazi Ahmed', '01710000021', '', '0'),
(22, 'Badrul Islam', 'Moinul Islam', '01710000022', '', '0'),
(23, 'Tanvir Rahman', 'Mostafa Rahman', '01710000023', '', '0'),
(24, 'Mehedi Hasan', 'Foyez Hasan', '01710000024', '', '0'),
(25, 'Asif Uddin', 'Lutfur Uddin', '01710000025', '', '0'),
(26, 'Biplob Hossain', 'Sadek Hossain', '01710000026', '', '0'),
(27, 'Mahfuz Khan', 'Shafiq Khan', '01710000027', '', '0'),
(28, 'Nasir Uddin', 'Harun Uddin', '01710000028', '', '0'),
(29, 'Mithun Rahman', 'Abdul Rahman', '01710000029', '', '0'),
(30, 'Zahidul Islam', 'Kabir Islam', '01710000030', '', '0'),
(31, 'Faruk Hossain', 'Alim Hossain', '01710000031', '', '0'),
(32, 'Rabiul Karim', 'Aminul Karim', '01710000032', '', '0'),
(33, 'Saiful Hossain', 'Jalal Hossain', '01710000033', '', '0'),
(34, 'Jahangir Alam', 'Rashid Alam', '01710000034', '', '0'),
(35, 'Tariqul Islam', 'Kamrul Islam', '01710000035', '', '0'),
(36, 'Nayem Hasan', 'Shahid Hasan', '01710000036', '', '0'),
(37, 'Jahidul Islam', 'Liton Islam', '01710000037', '', '0'),
(38, 'Masum Billah', 'Faruq Billah', '01710000038', '', '0'),
(39, 'Sohag Sarker', 'Asad Sarker', '01710000039', '', '0'),
(40, 'Shahin Ahmed', 'Habib Ahmed', '01710000040', '', '0'),
(41, 'Riyad Rahman', 'Shamsur Rahman', '01710000041', '', '0'),
(42, 'Shahinur Rahman', 'Hanif Rahman', '01710000042', '', '0'),
(43, 'Milton Islam', 'Latif Islam', '01710000043', '', '0'),
(44, 'Tanim Khan', 'Jamal Khan', '01710000044', '', '0'),
(45, 'Maruf Ahmed', 'Gulam Ahmed', '01710000045', '', '0'),
(46, 'Bipul Hossain', 'Aminul Hossain', '01710000046', '', '0'),
(47, 'Shuvo Alam', 'Salman Alam', '01710000047', '', '0'),
(48, 'Monirul Islam', 'Nazrul Islam', '01710000048', '', '0'),
(49, 'Masudur Rahman', 'Fazlur Rahman', '01710000049', '', '0'),
(50, 'Sohanur Rahman', 'Iqbal Rahman', '01710000050', '', '0'),
(51, 'Azizur Rahman', 'Fazlur Rahman', '01710000051', '', '0'),
(52, 'Farid Alam', 'Siraj Alam', '01710000052', '', '0'),
(53, 'Arman Islam', 'Rashid Islam', '01710000053', '', '0'),
(54, 'Rasel Hossain', 'Akram Hossain', '01710000054', '', '0'),
(55, 'Shariful Islam', 'Shamsul Islam', '01710000055', '', '0'),
(56, 'Mamun Hossain', 'Harun Hossain', '01710000056', '', '0'),
(57, 'Rokibul Islam', 'Rafiq Islam', '01710000057', '', '0'),
(58, 'Hamidur Rahman', 'Khalil Rahman', '01710000058', '', '0'),
(59, 'Asad Ullah', 'Aziz Ullah', '01710000059', '', '0'),
(60, 'Nazim Ahmed', 'Lutfur Ahmed', '01710000060', '', '0'),
(61, 'Aminul Islam', 'Salim Islam', '01710000061', '', '0'),
(62, 'Shamim Rahman', 'Karim Rahman', '01710000062', '', '0'),
(63, 'Mustafizur Rahman', 'Halim Rahman', '01710000063', '', '0'),
(64, 'Biplob Khan', 'Mostafa Khan', '01710000064', '', '0'),
(65, 'Sohel Rana', 'Habibur Rana', '01710000065', '', '0'),
(66, 'Mamun Khan', 'Sarwar Khan', '01710000066', '', '0'),
(67, 'Moinul Islam', 'Hasmat Islam', '01710000067', '', '0'),
(68, 'Habibur Rahman', 'Majid Rahman', '01710000068', '', '0'),
(69, 'Zakir Hossain', 'Rafiqul Hossain', '01710000069', '', '0'),
(70, 'Shakil Khan', 'Nasir Khan', '01710000070', '', '0'),
(71, 'Jashim Uddin', 'Habib Uddin', '01710000071', '', '0'),
(72, 'Abdul Mannan', 'Mofizur Mannan', '01710000072', '', '0'),
(73, 'Lutfor Rahman', 'Alim Rahman', '01710000073', '', '0'),
(74, 'Mazharul Islam', 'Kamal Islam', '01710000074', '', '0'),
(75, 'Rokon Hossain', 'Rashid Hossain', '01710000075', '', '0'),
(76, 'Kamrul Islam', 'Fazal Islam', '01710000076', '', '0'),
(77, 'Sujon Mia', 'Samad Mia', '01710000077', '', '0'),
(78, 'Sarwar Hossain', 'Jalil Hossain', '01710000078', '', '0'),
(79, 'Habibul Hasan', 'Azam Hasan', '01710000079', '', '0'),
(80, 'Saddam Hossain', 'Jashim Hossain', '01710000080', '', '0'),
(81, 'Bashir Ahmed', 'Shahid Ahmed', '01710000081', '', '0'),
(82, 'Ruhul Amin', 'Karim Amin', '01710000082', '', '0'),
(83, 'Mizanur Rahman', 'Asad Rahman', '01710000083', '', '0'),
(84, 'Hasan Mahmud', 'Anwar Mahmud', '01710000084', '', '0'),
(85, 'Mushfiqur Rahman', 'Kamal Rahman', '01710000085', '', '0'),
(86, 'Sohan Islam', 'Rashid Islam', '01710000086', '', '0'),
(87, 'Hasibul Alam', 'Farid Alam', '01710000087', '', '0'),
(88, 'Kamruzzaman', 'Salim Zaman', '01710000088', '', '0'),
(89, 'Manirul Islam', 'Hanif Islam', '01710000089', '', '0'),
(90, 'Tanzil Ahmed', 'Jalal Ahmed', '01710000090', '', '0'),
(91, 'Ruhul Quddus', 'Salam Quddus', '01710000091', '', '0'),
(92, 'Shahadat Hossain', 'Faruk Hossain', '01710000092', '', '0'),
(93, 'Imran Hossain', 'Mokhles Hossain', '01710000093', '', '0'),
(94, 'Kamal Uddin', 'Mofiz Uddin', '01710000094', '', '0'),
(95, 'Sadiqur Rahman', 'Momin Rahman', '01710000095', '', '0'),
(96, 'Nazmul Islam', 'Aminul Islam', '01710000096', '', '0'),
(97, 'Helal Uddin', 'Sayeed Uddin', '01710000097', '', '0'),
(98, 'Mazid Rahman', 'Sarwar Rahman', '01710000098', '', '0'),
(99, 'Naim Hasan', 'Latif Hasan', '01710000099', '', '0'),
(100, 'Shihab Rahman', 'Latifur Rahman', '01710000100', '', '0'),
(101, 'Masudur Hossain', 'Siraj Hossain', '01710000101', '', '0'),
(102, 'Sujan Islam', 'Hasan Islam', '01710000102', '', '0'),
(103, 'Rubel Khan', 'Harun Khan', '01710000103', '', '0'),
(104, 'Sumon Ahmed', 'Anwar Ahmed', '01710000104', '', '0'),
(105, 'Maruf Hossain', 'Habib Hossain', '01710000105', '', '0'),
(106, 'Rayhan Ahmed', 'Kamal Ahmed', '01710000106', '', '0'),
(107, 'Sabuj Hossain', 'Sadek Hossain', '01710000107', '', '0'),
(108, 'Selim Uddin', 'Mamun Uddin', '01710000108', '', '0'),
(109, 'Nazrul Islam', 'Foyez Islam', '01710000109', '', '0'),
(110, 'Rakib Hasan', 'Nazmul Hasan', '01710000110', '', '0'),
(111, 'Mamun Sarker', 'Latif Sarker', '01710000111', '', '0'),
(112, 'Fahim Rahman', 'Fazlul Rahman', '01710000112', '', '0'),
(113, 'Shafiq Ahmed', 'Salim Ahmed', '01710000113', '', '0'),
(114, 'Amin Hossain', 'Latif Hossain', '01710000114', '', '0'),
(115, 'Wasim Akram', 'Nazrul Akram', '01710000115', '', '0'),
(116, 'Farid Ahmed', 'Hasan Ahmed', '01710000116', '', '0'),
(117, 'Hasanur Rahman', 'Karim Rahman', '01710000117', '', '0'),
(118, 'Ruhul Hossain', 'Amin Hossain', '01710000118', '', '0'),
(119, 'Kamruzzaman', 'Latifur Zaman', '01710000119', '', '0'),
(120, 'Sajjad Hossain', 'Karim Hossain', '01710000120', '', '0'),
(121, 'Hafizur Rahman', 'Faruk Rahman', '01710000121', '', '0'),
(122, 'Badal Khan', 'Kamruzzaman Khan', '01710000122', '', '0'),
(123, 'Mujibur Rahman', 'Hanif Rahman', '01710000123', '', '0'),
(124, 'Ashraf Uddin', 'Majid Uddin', '01710000124', '', '0'),
(125, 'Tariqul Hasan', 'Anwar Hasan', '01710000125', '', '0'),
(126, 'Sayedur Rahman', 'Salam Rahman', '01710000126', '', '0'),
(127, 'Mizanur Alam', 'Rahman Alam', '01710000127', '', '0'),
(128, 'Nizam Hossain', 'Latif Hossain', '01710000128', '', '0'),
(129, 'Nasim Rahman', 'Salam Rahman', '01710000129', '', '0'),
(130, 'Hafiz Ahmed', 'Kamal Ahmed', '01710000130', '', '0'),
(131, 'Shamim Hossain', 'Latifur Hossain', '01710000131', '', '0'),
(132, 'Kawser Ahmed', 'Karim Ahmed', '01710000132', '', '0'),
(133, 'Ashiqur Rahman', 'Anisur Rahman', '01710000133', '', '0'),
(134, 'Fazlul Karim', 'Salam Karim', '01710000134', '', '0'),
(135, 'Shafiqul Islam', 'Mominul Islam', '01710000135', '', '0'),
(136, 'Elias Ahmed', 'Faruq Ahmed', '01710000136', '', '0'),
(137, 'Imam Hossain', 'Jamil Hossain', '01710000137', '', '0'),
(138, 'Sarwar Alam', 'Harun Alam', '01710000138', '', '0'),
(139, 'Tanjil Hasan', 'Mokbul Hasan', '01710000139', '', '0'),
(140, 'Nahidul Islam', 'Aminul Islam', '01710000140', '', '0'),
(141, 'Alamgir Hossain', 'Kabir Hossain', '01710000141', '', '0'),
(142, 'Sultan Ahmed', 'Jashim Ahmed', '01710000142', '', '0'),
(143, 'Miraj Rahman', 'Habibur Rahman', '01710000143', '', '0'),
(144, 'Sohel Mia', 'Karim Mia', '01710000144', '', '0'),
(145, 'Naim Ahmed', 'Samsul Ahmed', '01710000145', '', '0'),
(146, 'Imran Ahmed', 'Alamgir Ahmed', '01710000146', '', '0'),
(147, 'Ariful Rahman', 'Shafiqul Rahman', '01710000147', '', '0'),
(148, 'Iqbal Hossain', 'Anwar Hossain', '01710000148', '', '0'),
(149, 'Jahidul Karim', 'Kamrul Karim', '01710000149', '', '0'),
(150, 'Naimur Rahman', 'Shamim Rahman', '01710000150', '', '0'),
(301, '', '', '', '', ''),
(302, 'Subroto Singha', 'sdfsdflskd dsfshfsd', '01779178489', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_attendance`
--

CREATE TABLE `member_attendance` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `present` tinyint(1) DEFAULT 0,
  `absent` tinyint(1) DEFAULT 0,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `email`, `password`) VALUES
(1, '01779178486', 'amitsingha220@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_attendance`
--
ALTER TABLE `member_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `member_attendance`
--
ALTER TABLE `member_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
