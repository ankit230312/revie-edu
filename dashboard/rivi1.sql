-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 05:35 AM
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
-- Database: `rivi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `brnd_info`
--

CREATE TABLE `brnd_info` (
  `id` int(11) NOT NULL,
  `brd_name` varchar(255) NOT NULL,
  `brd_title` varchar(255) NOT NULL,
  `brd_regis` date NOT NULL DEFAULT current_timestamp(),
  `brd_email` varchar(255) NOT NULL,
  `brd_con` varchar(255) NOT NULL,
  `brd_add` varchar(255) NOT NULL,
  `brd_dis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brnd_info`
--

INSERT INTO `brnd_info` (`id`, `brd_name`, `brd_title`, `brd_regis`, `brd_email`, `brd_con`, `brd_add`, `brd_dis`) VALUES
(1, 'Rivie', 'Rivie Technology LTD', '2023-07-27', 'rivie@gmail.com', '9474646464', 'sector - 62', 'csrgrs'),
(4, 'Rivie 2', 'Rivie Technology', '2023-08-16', 'rivie@gmail.com', '9474646464', 'bdfbdbd', 'fbdf');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `chapter_name` varchar(255) NOT NULL,
  `org_id` varchar(11) NOT NULL,
  `class_id` varchar(11) NOT NULL,
  `subject_id` varchar(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `upated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `chapter_name`, `org_id`, `class_id`, `subject_id`, `status`, `created_at`, `upated_at`) VALUES
(1, 'Chapter 1', '10', '11', '8', '1', '2023-08-23 23:29:55', '2023-08-23 23:29:55'),
(2, 'Chapter 2', '10', '11', '8', '1', '2023-08-23 23:30:12', '2023-08-23 23:30:12'),
(3, 'Chapter 1', '11', '13', '10', '1', '2023-08-23 23:30:25', '2023-08-23 23:30:25'),
(4, 'Chapter 2', '11', '13', '10', '1', '2023-08-23 23:30:33', '2023-08-23 23:30:33'),
(5, 'Chapter 3', '11', '12', '9', '1', '2023-08-23 23:30:51', '2023-08-23 23:30:51'),
(6, 'Chapter 1', '11', '13', '10', '1', '2023-08-26 17:03:28', '2023-08-26 17:03:28'),
(7, 'Chapter 1', '11', '13', '10', '1', '2023-08-26 17:03:35', '2023-08-26 17:03:35'),
(8, 'CHapter 4', '10', '11', '8', '1', '2023-08-27 12:07:03', '2023-08-27 12:07:03'),
(10, 'Chapter 1', '10', '11', '11', '1', '2023-09-02 12:08:42', '2023-09-02 12:08:42'),
(11, 'Chapter 2', '10', '11', '11', '1', '2023-09-02 12:08:53', '2023-09-02 12:08:53'),
(12, 'Chapter 1', '14', '18', '14', '1', '2023-09-19 09:50:21', '2023-09-19 09:50:21'),
(13, 'Chapter 2', '14', '18', '14', '1', '2023-09-19 09:50:31', '2023-09-19 09:50:31'),
(14, 'Chapter 3', '14', '18', '14', '1', '2023-09-19 09:50:41', '2023-09-19 09:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_sub_name`
--

CREATE TABLE `chapter_sub_name` (
  `id` int(11) NOT NULL,
  `org_id` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `chapter_id` varchar(255) NOT NULL,
  `chapter_sub_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapter_sub_name`
--

INSERT INTO `chapter_sub_name` (`id`, `org_id`, `class_id`, `subject_id`, `chapter_id`, `chapter_sub_name`, `created_at`, `updated_at`) VALUES
(1, '10', '11', '11', '10', 'Chapter 1.1', '2023-09-02 12:26:59', '2023-09-02 12:26:59'),
(2, '10', '11', '11', '10', 'Chapter 1.2', '2023-09-02 12:27:30', '2023-09-02 12:27:30'),
(3, '10', '11', '11', '10', 'Chapter 1.3', '2023-09-02 12:27:44', '2023-09-02 12:27:44'),
(4, '10', '11', '11', '11', 'Chapter 2.1', '2023-09-02 12:27:58', '2023-09-02 12:27:58'),
(5, '10', '11', '11', '11', 'Chapter 2.2', '2023-09-02 12:28:41', '2023-09-02 12:28:41'),
(6, '14', '18', '14', '12', 'Chapter 1.1', '2023-09-19 09:52:18', '2023-09-19 09:52:18'),
(7, '14', '18', '14', '12', 'Chapter 1.2', '2023-09-19 09:52:31', '2023-09-19 09:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `org_id` int(2) NOT NULL,
  `class` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `org_id`, `class`, `slug`, `created_at`, `updated_at`) VALUES
(4, 1, 'Math', '', '2023-08-11 12:17:29', '2023-08-11 12:17:29'),
(5, 1, 'Math 123', '', '2023-08-11 12:43:23', '2023-08-11 12:43:23'),
(6, 1, 'Math', '', '2023-08-11 20:15:39', '2023-08-11 20:15:39'),
(7, 1, 'Hindi', '', '2023-08-11 20:15:49', '2023-08-11 20:15:49'),
(9, 9, 'Math', 'math', '2023-08-12 15:32:11', '2023-08-12 15:32:11'),
(10, 10, 'Math', 'math', '2023-08-12 23:12:20', '2023-08-12 23:12:20'),
(11, 10, 'Hindi', 'hindi', '2023-08-12 23:12:33', '2023-08-12 23:12:33'),
(12, 11, 'Class 1', 'class1', '2023-08-16 23:16:54', '2023-08-16 23:16:54'),
(13, 11, 'Class 2', 'class2', '2023-08-16 23:17:09', '2023-08-16 23:17:09'),
(14, 11, 'Math class', 'mathclass', '2023-08-16 23:17:19', '2023-08-16 23:17:19'),
(15, 10, '11', '11', '2023-09-13 18:34:57', '2023-09-13 18:34:57'),
(16, 12, 'MBA', 'mba', '2023-09-15 16:46:10', '2023-09-15 16:46:10'),
(17, 12, 'Class 4', 'class4', '2023-09-15 16:47:57', '2023-09-15 16:47:57'),
(18, 14, 'Class 1', 'class1', '2023-09-19 09:49:15', '2023-09-19 09:49:15'),
(19, 14, 'Class 2', 'class2', '2023-09-19 09:49:22', '2023-09-19 09:49:22'),
(20, 14, 'class 7', 'class7', '2023-09-23 23:13:32', '2023-09-23 23:13:32'),
(21, 12, 'Class 2', 'class2', '2023-09-23 23:14:12', '2023-09-23 23:14:12'),
(22, 12, 'Class 2', 'class2', '2023-09-23 23:14:49', '2023-09-23 23:14:49'),
(23, 12, 'Class 2', 'class2', '2023-09-23 23:15:51', '2023-09-23 23:15:51'),
(24, 12, 'Class 2', 'class2', '2023-09-23 23:15:59', '2023-09-23 23:15:59'),
(25, 12, 'Class 2', 'class2', '2023-09-23 23:16:24', '2023-09-23 23:16:24'),
(26, 12, 'Class 3', 'class3', '2023-09-23 23:19:42', '2023-09-23 23:19:42'),
(27, 11, 'Class 11', 'class11', '2023-09-23 23:21:20', '2023-09-23 23:21:20'),
(28, 11, 'Class 1', 'class1', '2023-09-23 23:24:44', '2023-09-23 23:24:44'),
(29, 3, '', '', '2023-09-23 23:26:49', '2023-09-23 23:26:49'),
(30, 12, 'Class 2', 'class2', '2023-09-23 23:27:11', '2023-09-23 23:27:11'),
(31, 7, 'Class 1', 'class1', '2023-09-23 23:27:39', '2023-09-23 23:27:39'),
(32, 14, 'Math', 'math', '2023-09-25 22:41:08', '2023-09-25 22:41:08'),
(33, 12, 'Math', 'math', '2023-09-25 22:44:55', '2023-09-25 22:44:55'),
(34, 12, 'Class 2', 'class2', '2023-09-25 22:45:25', '2023-09-25 22:45:25'),
(35, 3, 'Math', 'math', '2023-09-25 22:47:06', '2023-09-25 22:47:06'),
(36, 12, 'Class 2', 'class2', '2023-09-25 22:48:46', '2023-09-25 22:48:46'),
(37, 12, 'Math', 'math', '2023-09-25 22:48:52', '2023-09-25 22:48:52'),
(38, 12, 'Class 1', 'class1', '2023-09-25 22:51:17', '2023-09-25 22:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `org_id` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `org_id`, `role_id`, `designation`, `slug`, `created_at`, `updated_at`) VALUES
(4, '8', 0, 'Teacher123', 'teacher123', '2023-08-11 11:58:11', '2023-08-11 11:58:11'),
(5, '8', 3, 'Admin', 'admin', '2023-08-11 12:00:01', '2023-08-11 12:00:01'),
(6, '1', 1, 'Teacher123', 'teacher123', '2023-08-11 12:02:53', '2023-08-11 12:02:53'),
(7, '9', 1, 'admin1234', 'admin1234', '2023-08-11 20:14:40', '2023-08-11 20:14:40'),
(8, '10', 2, 'Admin 123', 'admin123', '2023-08-12 23:10:42', '2023-08-12 23:10:42'),
(9, '10', 2, 'Admin 123', 'admin123', '2023-08-12 23:11:05', '2023-08-12 23:11:05'),
(11, '11', 3, 'Teacher1', 'teacher1', '2023-08-16 23:15:47', '2023-08-16 23:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `id` int(11) NOT NULL,
  `org_id` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `sub_chapter_id` varchar(255) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `chapter_id` varchar(255) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_ques` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opt1` text NOT NULL,
  `opt2` text NOT NULL,
  `opt3` text NOT NULL,
  `opt4` text NOT NULL,
  `marks` varchar(255) NOT NULL,
  `solution` text NOT NULL,
  `corect_opt` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `year` varchar(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`id`, `org_id`, `class_id`, `subject_id`, `sub_chapter_id`, `section_id`, `chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `marks`, `solution`, `corect_opt`, `status`, `level`, `year`, `created_at`, `updated_at`) VALUES
(600, '14', '18', '14', '6', '4', '12', 13, '1', '', '', '', '', '', '', '', '', '1', NULL, NULL, '2023-09-23 17:36:28', '2023-09-23 17:36:28'),
(601, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-23 17:36:35', '2023-09-23 17:36:35'),
(602, '14', '18', '14', '6', '4', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-23 17:36:36', '2023-09-23 17:36:36'),
(603, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-23 17:36:36', '2023-09-23 17:36:36'),
(604, '14', '18', '14', '6', '4', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-23 17:36:36', '2023-09-23 17:36:36'),
(605, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-23 17:40:08', '2023-09-23 17:40:08'),
(606, '14', '18', '14', '6', '4', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-23 17:40:08', '2023-09-23 17:40:08'),
(607, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-23 17:40:08', '2023-09-23 17:40:08'),
(608, '14', '18', '14', '6', '4', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-23 17:40:08', '2023-09-23 17:40:08'),
(609, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-23 17:41:17', '2023-09-23 17:41:17'),
(610, '14', '18', '14', '6', '4', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-23 17:41:17', '2023-09-23 17:41:17'),
(611, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-23 17:41:17', '2023-09-23 17:41:17'),
(612, '14', '18', '14', '6', '4', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-23 17:41:17', '2023-09-23 17:41:17'),
(613, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-23 17:42:06', '2023-09-23 17:42:06'),
(614, '14', '18', '14', '6', '4', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-23 17:42:06', '2023-09-23 17:42:06'),
(615, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-23 17:42:06', '2023-09-23 17:42:06'),
(616, '14', '18', '14', '6', '4', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-23 17:42:06', '2023-09-23 17:42:06'),
(617, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-23 17:42:41', '2023-09-23 17:42:41'),
(618, '14', '18', '14', '6', '4', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-23 17:42:42', '2023-09-23 17:42:42'),
(619, '14', '18', '14', '6', '4', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-23 17:42:42', '2023-09-23 17:42:42'),
(620, '14', '18', '14', '6', '4', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-23 17:42:42', '2023-09-23 17:42:42'),
(621, '14', '18', '14', '6', '3', '12', 13, '1', '', '', '', '', '', '', '', '', '1', NULL, NULL, '2023-09-23 22:35:13', '2023-09-23 22:35:13'),
(622, '14', '18', '14', '6', '3', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-23 23:20:43', '2023-09-23 23:20:43'),
(623, '14', '18', '14', '6', '3', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-23 23:20:43', '2023-09-23 23:20:43'),
(624, '14', '18', '14', '6', '3', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-23 23:20:43', '2023-09-23 23:20:43'),
(625, '14', '18', '14', '6', '3', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-23 23:20:43', '2023-09-23 23:20:43'),
(626, '14', '18', '14', '6', '1', '12', 13, '1', '', '', '', '', '', '', '', '', '1', NULL, NULL, '2023-09-25 23:27:03', '2023-09-25 23:27:03'),
(627, '14', '18', '14', '6', '1', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'dangerous ', 'amicable ', 'lethal ', 'powerful ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'lethal ', '1', NULL, NULL, '2023-09-25 23:27:24', '2023-09-25 23:27:24'),
(628, '14', '18', '14', '6', '1', '12', 13, '1', 'Virulent ?', 'electric ', 'irrigation ', 'presure ', 'central ', '4', 'aaa', 'irrigation ', '1', NULL, NULL, '2023-09-25 23:27:24', '2023-09-25 23:27:24'),
(629, '14', '18', '14', '6', '1', '12', 13, '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'whimsical ', 'contiguous ', 'spectaculer ', 'adjacent ', '4', 'aa', 'Circueteous', '1', NULL, NULL, '2023-09-25 23:27:24', '2023-09-25 23:27:24'),
(630, '14', '18', '14', '6', '1', '12', 13, '1', 'Select the wrongly spelt word ?', 'dangerous ', 'irrigation ', 'callous ', 'carriage ', '4', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                              (three unpaired electrons)\n(Cu(29)=[Ar]3d^10,4s^1\nCu^+=[Ar]3d^10       (no unpaired electron)', 'Essential', '1', NULL, NULL, '2023-09-25 23:27:24', '2023-09-25 23:27:24'),
(633, '11', '13', '10', '', '2', '3', 6, '1', '600', '14', '18', '14', '6', '4', '12', '13', '1', '', '', '2024-07-21 07:29:36', '2024-07-21 07:29:36'),
(634, '11', '13', '10', '', '2', '3', 6, '1', '601', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(635, '11', '13', '10', '', '2', '3', 6, '1', '602', '14', '18', '14', '6', '4', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(636, '11', '13', '10', '', '2', '3', 6, '1', '603', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(637, '11', '13', '10', '', '2', '3', 6, '1', '604', '14', '18', '14', '6', '4', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(638, '11', '13', '10', '', '2', '3', 6, '1', '605', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(639, '11', '13', '10', '', '2', '3', 6, '1', '606', '14', '18', '14', '6', '4', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(640, '11', '13', '10', '', '2', '3', 6, '1', '607', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(641, '11', '13', '10', '', '2', '3', 6, '1', '608', '14', '18', '14', '6', '4', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(642, '11', '13', '10', '', '2', '3', 6, '1', '609', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(643, '11', '13', '10', '', '2', '3', 6, '1', '610', '14', '18', '14', '6', '4', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(644, '11', '13', '10', '', '2', '3', 6, '1', '611', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(645, '11', '13', '10', '', '2', '3', 6, '1', '612', '14', '18', '14', '6', '4', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(646, '11', '13', '10', '', '2', '3', 6, '1', '613', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(647, '11', '13', '10', '', '2', '3', 6, '1', '614', '14', '18', '14', '6', '4', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(648, '11', '13', '10', '', '2', '3', 6, '1', '615', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(649, '11', '13', '10', '', '2', '3', 6, '1', '616', '14', '18', '14', '6', '4', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(650, '11', '13', '10', '', '2', '3', 6, '1', '617', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(651, '11', '13', '10', '', '2', '3', 6, '1', '618', '14', '18', '14', '6', '4', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(652, '11', '13', '10', '', '2', '3', 6, '1', '619', '14', '18', '14', '6', '4', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(653, '11', '13', '10', '', '2', '3', 6, '1', '620', '14', '18', '14', '6', '4', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(654, '11', '13', '10', '', '2', '3', 6, '1', '621', '14', '18', '14', '6', '3', '12', '13', '1', '', '', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(655, '11', '13', '10', '', '2', '3', 6, '1', '622', '14', '18', '14', '6', '3', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(656, '11', '13', '10', '', '2', '3', 6, '1', '623', '14', '18', '14', '6', '3', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(657, '11', '13', '10', '', '2', '3', 6, '1', '624', '14', '18', '14', '6', '3', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(658, '11', '13', '10', '', '2', '3', 6, '1', '625', '14', '18', '14', '6', '3', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(659, '11', '13', '10', '', '2', '3', 6, '1', '626', '14', '18', '14', '6', '1', '12', '13', '1', '', '', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(660, '11', '13', '10', '', '2', '3', 6, '1', '627', '14', '18', '14', '6', '1', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(661, '11', '13', '10', '', '2', '3', 6, '1', '628', '14', '18', '14', '6', '1', '12', '13', '1', 'Virulent ?', 'electric ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(662, '11', '13', '10', '', '2', '3', 6, '1', '629', '14', '18', '14', '6', '1', '12', '13', '1', 'Zn(30)=[Ar]3d^10,4s^2\nZn^(2+)=[Ar]3d^10     (no unpaired electron)\nFe(26)=[Ar]3d^6,4s^2\nFe^(2+)=[Ar]3d^6\n3d^6       \n                              (four unpaired electrons)\nNi(28)=[Ar]3d^8,4s^2\nNi^(3+) [Ar]3d^7\n3d^7            \n                           ', 'whimsical ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(663, '11', '13', '10', '', '2', '3', 6, '1', '630', '14', '18', '14', '6', '1', '12', '13', '1', 'Select the wrongly spelt word ?', 'dangerous ', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(664, '11', '13', '10', '', '2', '3', 6, '1', '631', '3', '', '', '', '', '', '0', '', '', '', '2024-07-21 07:29:45', '2024-07-21 07:29:45'),
(665, '11', '13', '10', '', '2', '3', 6, '1', '632', '11', '13', '10', '', '1', '4', '6', '1', '', '', '2024-07-21 07:29:45', '2024-07-21 07:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `exam_title`
--

CREATE TABLE `exam_title` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `suject_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `total_marks` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_title`
--

INSERT INTO `exam_title` (`id`, `org_id`, `class_id`, `suject_id`, `exam_name`, `total_marks`, `slug`, `created_at`, `update_at`) VALUES
(1, 7, 2, 4, 'English Test 1', '', 'englishtest1', '2023-08-11 18:17:30', '2023-08-11 18:17:30'),
(2, 7, 2, 4, 'English Test 1', '', 'englishtest1', '2023-08-11 18:18:02', '2023-08-11 18:18:02'),
(3, 8, 4, 2, 'Hindi Exam Test 1', '', 'hindiexamtest1', '2023-08-11 18:18:43', '2023-08-11 18:18:43'),
(4, 9, 6, 5, 'English Test 1', '', 'englishtest1', '2023-08-11 20:24:21', '2023-08-11 20:24:21'),
(5, 10, 11, 8, 'Hindi Exam ', '', 'hindiexam', '2023-08-12 23:15:37', '2023-08-12 23:15:37'),
(6, 11, 12, 9, 'English Test 1', '', 'englishtest1', '2023-08-16 23:21:20', '2023-08-16 23:21:20'),
(8, 10, 11, 8, 'Jee mains', '', 'jeemains', '2023-09-07 23:10:05', '2023-09-07 23:10:05'),
(9, 10, 0, 0, 'JEE  MAIN -1', '', 'jeemain-1', '2023-09-13 18:29:07', '2023-09-13 18:29:07'),
(10, 10, 0, 0, 'JEE  MAIN -1', '', 'jeemain-1', '2023-09-13 18:30:19', '2023-09-13 18:30:19'),
(11, 10, 0, 0, 'JEE  MAIN -1', '', 'jeemain-1', '2023-09-13 18:31:28', '2023-09-13 18:31:28'),
(12, 10, 0, 0, 'JEE  MAIN -1', '', 'jeemain-1', '2023-09-13 18:33:39', '2023-09-13 18:33:39'),
(13, 14, 0, 0, 'JEE MAINS', '', 'jeemains', '2023-09-19 09:46:13', '2023-09-19 09:46:13'),
(18, 14, 0, 0, 'jee3', '', 'jee3', '2023-09-23 22:42:31', '2023-09-23 22:42:31'),
(61, 14, 0, 0, 'Jee ', '', 'jee', '2023-09-23 23:09:14', '2023-09-23 23:09:14'),
(62, 14, 0, 0, 'Jee ', '', 'jee', '2023-09-23 23:09:55', '2023-09-23 23:09:55'),
(63, 14, 0, 0, 'Hindi Exam Test 15', '', 'hindiexamtest15', '2023-09-23 23:10:21', '2023-09-23 23:10:21'),
(64, 12, 0, 0, 'Hindi Exam ', '', 'hindiexam', '2023-09-25 22:39:47', '2023-09-25 22:39:47'),
(65, 12, 0, 0, 'Hindi Exam Test 1', '', 'hindiexamtest1', '2023-09-25 22:40:48', '2023-09-25 22:40:48'),
(66, 14, 0, 0, '', '', '', '2023-09-25 22:55:15', '2023-09-25 22:55:15'),
(67, 14, 0, 0, '', '', '', '2023-09-25 22:55:29', '2023-09-25 22:55:29'),
(68, 14, 0, 0, '', '', '', '2023-09-25 23:17:57', '2023-09-25 23:17:57'),
(69, 14, 0, 0, '', '', '', '2023-09-25 23:18:02', '2023-09-25 23:18:02'),
(70, 14, 0, 0, '', '', '', '2023-09-25 23:21:57', '2023-09-25 23:21:57'),
(71, 14, 0, 0, '', '', '', '2023-09-25 23:22:13', '2023-09-25 23:22:13'),
(72, 14, 0, 0, 'English Test 1', '', 'englishtest1', '2023-09-25 23:29:06', '2023-09-25 23:29:06'),
(73, 14, 0, 0, 'English Test 4', '', 'englishtest4', '2023-09-25 23:29:12', '2023-09-25 23:29:12'),
(74, 14, 0, 0, 'English Test 8', '', 'englishtest8', '2023-09-25 23:29:17', '2023-09-25 23:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `id` int(11) NOT NULL,
  `exam__type_name` varchar(255) NOT NULL,
  `org_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contanct` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_type`
--

INSERT INTO `exam_type` (`id`, `exam__type_name`, `org_id`, `email`, `contanct`, `created_at`, `update_at`) VALUES
(1, 'MCQ', 0, '', 0, '2023-09-19 22:23:19', '2023-09-19 22:23:19'),
(2, 'APTITUTE', 0, '', 0, '2023-09-19 22:23:44', '2023-09-19 22:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `global_sett`
--

CREATE TABLE `global_sett` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `org_code` int(11) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_contact` varchar(255) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_add` varchar(255) NOT NULL,
  `org_abt` text NOT NULL,
  `org_registraiom` date NOT NULL DEFAULT current_timestamp(),
  `user_admin_id` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `org_code`, `org_name`, `org_contact`, `org_email`, `org_add`, `org_abt`, `org_registraiom`, `user_admin_id`, `created_date`) VALUES
(3, 12, 'abcacbdfsf', '343973987', 'qq123@gmail.com', 'adccddrv', 'safsegsgf', '2023-07-15', '1', '2023-07-15 07:39:25'),
(7, 14, 'organisation LTD PVT', '8171619719', 'organisation 1 ', 'jhvjfvvyvv', 'igiugig', '2023-07-16', '1', '2023-07-16 17:17:32'),
(8, 15, 'organisation12  LTD PVT', '431241241412', 'organisation@gmail.com', 'jhvjfvvyvv', 'vfgnsg', '2023-08-11', '1', '2023-08-11 05:54:26'),
(9, 17, 'Nilesh Tek', '6518919191', 'Nilesh@gmail.com', '684894949', '6161818', '2023-08-11', '1', '2023-08-11 14:43:36'),
(10, 19, 'Rohan Ltd Pvt', '8171619719', 'qq123@gmail.com', 'adccddrv', 'efhwifhe9fhu9efh9e', '2023-08-12', '1', '2023-08-12 17:40:07'),
(11, 0, 'Abhijeet PVT LTD', '8171619719', 'qq123@gmail.com', 'dfbdbd', 'dfbdbf', '2023-08-16', '1', '2023-08-16 17:43:57'),
(12, 1000, 'Hamari Company', '8446613467', 'hc@gmail.com', 'dfe', 'fef', '2023-09-15', '1', '2023-09-15 16:45:38'),
(14, 21, 'Pugh Sosa LLC', '899', 'haxowel@mailinator.com', 'David Thompson Trading', 'Labore saepe debitis', '2023-09-19', '1', '2023-09-19 04:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `created`) VALUES
(1, 'super_admin', '2023-07-02 15:30:49'),
(2, 'admin', '2023-07-02 15:31:10'),
(3, 'teacher', '2023-07-02 15:31:18'),
(4, 'parent', '2023-07-02 15:31:25'),
(5, 'student', '2023-07-02 15:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `upated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `org_id`, `role_id`, `class_id`, `sub_name`, `slug`, `created_at`, `upated_at`) VALUES
(1, 8, 2, 4, 'English', 'english', '2023-08-11 14:37:24', '2023-08-11 14:37:24'),
(2, 8, 2, 4, 'Hindi', 'hindi', '2023-08-11 14:38:07', '2023-08-11 14:38:07'),
(3, 7, 3, 1, 'English', 'english', '2023-08-11 14:38:27', '2023-08-11 14:38:27'),
(4, 7, 3, 2, 'English', 'english', '2023-08-11 14:38:38', '2023-08-11 14:38:38'),
(5, 9, 2, 6, 'English', 'english', '2023-08-11 20:20:14', '2023-08-11 20:20:14'),
(6, 9, 2, 6, 'Hindi', 'hindi', '2023-08-11 20:22:59', '2023-08-11 20:22:59'),
(7, 10, 3, 10, 'Math Subject', 'mathsubject', '2023-08-12 23:14:04', '2023-08-12 23:14:04'),
(8, 10, 3, 11, 'Hindi Subject', 'hindisubject', '2023-08-12 23:14:19', '2023-08-12 23:14:19'),
(9, 11, 2, 12, 'English', 'english', '2023-08-16 23:20:06', '2023-08-16 23:20:06'),
(10, 11, 2, 13, 'English', 'english', '2023-08-16 23:20:20', '2023-08-16 23:20:20'),
(11, 10, 1, 11, 'Hindi', 'hindi', '2023-08-26 13:30:55', '2023-08-26 13:30:55'),
(12, 11, 1, 13, 'Hindi', 'hindi', '2023-08-26 17:04:42', '2023-08-26 17:04:42'),
(13, 10, 1, 0, 'PHYSICS', 'physics', '2023-09-13 18:35:37', '2023-09-13 18:35:37'),
(14, 14, 0, 18, 'English', 'english', '2023-09-19 09:49:39', '2023-09-19 09:49:39'),
(15, 14, 0, 18, 'Hindi', 'hindi', '2023-09-19 09:49:51', '2023-09-19 09:49:51'),
(16, 14, 0, 18, 'Chemistry', 'chemistry', '2023-09-19 09:50:03', '2023-09-19 09:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `sub_section`
--

CREATE TABLE `sub_section` (
  `id` int(11) NOT NULL,
  `section_title` varchar(250) NOT NULL,
  `org_id` varchar(255) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `upated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_section`
--

INSERT INTO `sub_section` (`id`, `section_title`, `org_id`, `sub_id`, `class_id`, `status`, `created_at`, `upated_at`) VALUES
(1, 'Section A', '11', '9', '12', '1', '2023-08-22 22:29:32', '2023-08-22 22:29:32'),
(2, 'Section B', '11', '10', '13', '1', '2023-08-22 22:31:43', '2023-08-22 22:31:43'),
(3, 'Section A', '10', '8', '11', '1', '2023-08-22 22:31:56', '2023-08-22 22:31:56'),
(4, 'Section B', '10', '8', '11', '1', '2023-08-22 22:32:04', '2023-08-22 22:32:04'),
(5, 'Section A', '11', '10', '13', '1', '2023-08-26 17:02:55', '2023-08-26 17:02:55'),
(6, 'Section B', '11', '10', '13', '1', '2023-08-26 17:03:11', '2023-08-26 17:03:11'),
(7, 'Section C', '10', '8', '11', '1', '2023-08-27 12:06:04', '2023-08-27 12:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 1 COMMENT '1 for active, 0 for deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `role_id`, `status`) VALUES
(1, 'Ankit', 'admin@gmail.com', '1234567890', '$2y$10$d0splKYhruFesPuR/shRXuPxJa54G8X.5N1AagE6XPuC6URLKsvQW', 1, 1),
(2, 'Ankit11', 'admin11@gmail.com', '1223443444', '$2y$10$BpPd3NzWfVc8qH/Ec.bOleVtN2cWD7KwFnuw99pFseXowU9eGEBA6', 2, 1),
(3, 'ankit111', 'admin111@gmail.com', '1234567890', '$2y$10$zvUrvvV7JnCAuBGaO5wtU..fD0cFf5oQZdHGZFpSF/Ph/R9BSeSIq', 2, 1),
(4, 'ankit Teacher', 'ankit_teacher@gmail.com', '1234567890', '$2y$10$8Nd.Mt/Pk.vzQL7ESpeRsOjKTmUBWdVB78tjuaUjj1iYzFFdMbNwO', 3, 1),
(5, 'ankitstudent', 'ankitstudent@gmail.com', '1234567890', '$2y$10$0C1yKB8ZmIbi13xc/8EuJe.4iQz2e4mtFPERFGb67CYgRMxTm.N7q', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `user_regis` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `f_name`, `l_name`, `user_regis`, `email`, `contact`, `address`) VALUES
(1, 'ankit 111', 'maurya', '2023-06-28', 'admin@gmail.com', '7894561130', '2023-06-28'),
(2, 'Saurav', '--', '2023-06-28', 'admin@gmail.com', '7894561130', '2023-06-28'),
(4, 'NIlesh ', '--', '2023-07-25', 'nishesh@gmai.com', '7894561130', '2023-07-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brnd_info`
--
ALTER TABLE `brnd_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter_sub_name`
--
ALTER TABLE `chapter_sub_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_title`
--
ALTER TABLE `exam_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_sett`
--
ALTER TABLE `global_sett`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `org_code` (`org_code`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_section`
--
ALTER TABLE `sub_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brnd_info`
--
ALTER TABLE `brnd_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chapter_sub_name`
--
ALTER TABLE `chapter_sub_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- AUTO_INCREMENT for table `exam_title`
--
ALTER TABLE `exam_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `global_sett`
--
ALTER TABLE `global_sett`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_section`
--
ALTER TABLE `sub_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
