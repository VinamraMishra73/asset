-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 05:49 AM
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
-- Database: `dpit_finance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(40) NOT NULL,
  `position` varchar(30) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `identity_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `name`, `email`, `department`, `position`, `vendor`, `updated_at`, `created_at`, `identity_id`) VALUES
(19, 'test', 'test@gmail.com', 'DPIT', 'CEO', 'vendor1', '2024-04-09 01:43:57', '2024-04-09 01:43:57', '9345422424242424242434241313');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` bigint(100) DEFAULT NULL,
  `Item_name` varchar(100) DEFAULT NULL,
  `Amount` int(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `Item_name`, `Amount`, `updated_at`, `created_at`) VALUES
(NULL, 'asdad', 54245, '2024-04-08 23:36:15', '2024-04-08 23:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_12_092655_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mprreport`
--

CREATE TABLE `mprreport` (
  `employee_id` int(255) NOT NULL,
  `employee_name` varchar(220) NOT NULL,
  `vendor_name` varchar(150) NOT NULL,
  `month` varchar(50) NOT NULL,
  `total_leave` int(50) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `pdf` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mprreport`
--

INSERT INTO `mprreport` (`employee_id`, `employee_name`, `vendor_name`, `month`, `total_leave`, `detail`, `pdf`, `updated_at`, `created_at`) VALUES
(11, '', '', '', 0, '', 'pdf', NULL, NULL),
(11, '', '', '', 0, '', 'pdf', NULL, NULL),
(6, 'fgjf', 'hjfgj', 'July', 3, 'dghfghj', NULL, '2024-04-30 00:35:31', '2024-04-30 00:35:31'),
(112, 'Employee 12, Employee 13', 'ghjghj', 'April', 5, 'sdf', NULL, '2024-04-30 01:30:10', '2024-04-30 01:30:10'),
(112, 'Employee 12, Employee 13', 'ghjghj', 'April', 5, 'sdf', NULL, '2024-04-30 01:31:03', '2024-04-30 01:31:03'),
(11, 'wsxfj', 'ghjghj', 'February', 5, 'dasfsa', NULL, '2024-04-30 01:33:16', '2024-04-30 01:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(50) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `employee_name` varchar(55) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `procedure` varchar(500) NOT NULL,
  `maintenance` varchar(300) NOT NULL,
  `upload_doc` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT 0,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_type`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(15, 0, 'vinamra mishra', 'vinamramishra02@gmail.com', '$2y$12$eeIKxw.U6SX2XaVMLt/yQOeOBR2KjWm835.jGFp6z8PkcFtP7KmmW', '2024-04-29 09:53:39', NULL),
(16, 0, 'asdfada', 'asdaasdaad@gmail.com', '$2y$12$ZJPSmTEA8zZ413JPx82i8uMQavepcqJ/eLG08aErbOiYPgPSf27xi', '2024-04-29 09:53:39', NULL),
(17, 0, 'arun', 'arun12@gmail.com', '$2y$12$eeIKxw.U6SX2XaVMLt/yQOeOBR2KjWm835.jGFp6z8PkcFtP7KmmW', '2024-04-29 09:53:39', NULL),
(18, 0, 'ashish singh', 'ashish12@gmail.com', '$2y$12$eeIKxw.U6SX2XaVMLt/yQOeOBR2KjWm835.jGFp6z8PkcFtP7KmmW', '2024-04-29 09:53:39', NULL),
(19, 0, 'test', 'test@gmail.com', '$2y$12$lr86AgMO4N9m2h.3m1daBu8ZZCrKxdGX4vAUzOUhYJQbWu0VKG43S', '2024-04-29 09:53:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(11) NOT NULL,
  `project_id` int(200) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `project_id`, `project_name`, `employee_name`, `updated_at`, `created_at`) VALUES
(7, 1212121, 'sdasd', 'sdsad', '2024-04-05 05:00:12', '2024-04-05 05:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `timeattendance`
--

CREATE TABLE `timeattendance` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `employee_designation` varchar(200) NOT NULL,
  `in_time` datetime NOT NULL,
  `out_time` datetime NOT NULL,
  `short_time` time DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeattendance`
--

INSERT INTO `timeattendance` (`id`, `emp_id`, `name`, `employee_designation`, `in_time`, `out_time`, `short_time`, `duration`, `updated_at`, `created_at`) VALUES
(1, 460038, 'Abhishek Kumar (460038)', 'Software Developer (ng)', '2024-04-05 09:18:41', '2024-04-05 12:13:23', NULL, '02:54:42', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(2, 601960, 'Abhishek Ranjan Gaur ()', 'Software Developer (ng)', '2024-04-05 09:23:05', '2024-04-05 17:38:34', NULL, '08:15:29', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(3, 632845, 'Ajay Yadav (632845)', 'Software Developer (ng)', '2024-04-05 09:21:07', '2024-04-05 17:34:38', NULL, '08:13:31', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(4, 746588, 'Akanksha Adlakha ()', 'Software Developer (ng)', '2024-04-05 08:44:35', '2024-04-05 17:30:50', NULL, '08:46:15', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(5, 566535, 'Alok Kumar ()', 'Software Developer (ng)', '2024-04-05 09:06:28', '2024-04-05 17:35:08', NULL, '08:28:40', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(6, 426412, 'Amit Kumar Gupta (105963)', 'Senior Manager', '2024-04-05 09:20:00', '2024-04-05 17:45:41', NULL, '08:25:41', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(7, 116029, 'Amit Singh Kaler ()', 'Software Developer (ng)', '2024-04-05 09:44:12', '2024-04-05 17:34:12', NULL, '07:50:00', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(8, 749131, 'Amiya Kumar Das (NG010144)', 'Chief Executive Officer (ceo)', '2024-04-05 09:27:36', '2024-04-05 17:38:21', NULL, '08:10:45', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(9, 960311, 'Arun Sahu ()', 'System Administrator(ng)', '2024-04-05 09:03:33', '2024-04-05 17:34:49', NULL, '08:31:16', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(10, 451893, 'Bhupinder Garg (76788)', 'Senior Manager', '2024-04-05 08:50:10', '2024-04-05 17:48:21', NULL, '08:58:11', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(11, 76295, 'Chitranjan Kumar ()', 'Software Developer (ng)', '2024-04-05 09:31:15', '2024-04-05 17:33:16', NULL, '08:02:01', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(12, 359326, 'Deepak Kumar ()', 'Software Developer (ng)', '2024-04-05 09:25:45', '2024-04-05 17:34:56', NULL, '08:09:11', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(13, 721012, 'Devesh Kumar ()', 'Software Developer (ng)', '2024-04-05 09:24:41', '2024-04-05 17:32:12', NULL, '08:07:31', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(14, 604471, 'Dhananjay Kumar ()', 'System Administrator(ng)', '2024-04-05 08:40:33', '2024-04-05 17:35:03', NULL, '08:54:30', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(15, 983547, 'Dileep Kumar Singh ()', 'Software Developer (ng)', '2024-04-05 09:32:04', '2024-04-05 17:39:53', NULL, '08:07:49', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(16, 561517, 'Dushyant ()', 'Manager', '2024-04-05 09:42:56', '2024-04-05 17:31:50', NULL, '07:48:54', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(17, 621783, 'Furkan ()', 'Software Developer (ng)', '2024-04-05 09:32:12', '2024-04-05 17:42:48', NULL, '08:10:36', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(18, 114729, 'Geetanjali Nigam ()', 'Software Developer (ng)', '2024-04-05 09:55:17', '2024-04-05 16:42:14', NULL, '06:46:57', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(19, 778504, 'Gopal Kumar ()', 'Software Developer (ng)', '2024-04-05 09:37:29', '2024-04-05 17:37:12', NULL, '07:59:43', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(20, 803675, 'Gurpreet Singh ()', 'Deputy Manager', '2024-04-05 10:01:01', '2024-04-05 17:45:18', NULL, '07:44:17', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(21, 744518, 'Hriday Ashish Singh (E215391)', 'Deputy Manager', '2024-04-05 11:39:18', '1970-01-01 00:00:00', NULL, NULL, '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(22, 243832, 'Inderneel Minhas ()', 'Software Developer (ng)', '2024-04-05 09:01:20', '2024-04-05 17:31:11', NULL, '08:29:51', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(23, 389450, 'Jai Kaushik ()', 'Software Developer (ng)', '2024-04-05 08:58:47', '2024-04-05 17:34:23', NULL, '08:35:36', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(24, 340998, 'Kumari Pallavi ()', 'Software Developer (ng)', '2024-04-05 09:25:02', '2024-04-05 17:32:03', NULL, '08:07:01', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(25, 923746, 'Mahesh Kumar Yadav ()', 'Software Developer (ng)', '2024-04-05 09:16:43', '2024-04-05 17:38:13', NULL, '08:21:30', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(26, 715016, 'Manisha Kumari ()', 'Software Developer (ng)', '2024-04-05 09:15:14', '2024-04-05 17:37:01', NULL, '08:21:47', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(27, 692095, 'Mohd Abdullah Khan (692095)', 'Junior Auditor (ng)', '2024-04-05 09:21:26', '2024-04-05 17:40:59', NULL, '08:19:33', '2024-04-30 06:10:39', '2024-04-30 06:10:39'),
(28, 31633, 'Niranjan Kumar Pandey (PN3LA75F0)', 'Software Developer (ng)', '2024-04-05 09:25:34', '2024-04-05 17:36:56', NULL, '08:11:22', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(29, 951920, 'Palak Saxena ()', 'Software Developer (ng)', '2024-04-05 09:17:13', '2024-04-05 17:32:15', NULL, '08:15:02', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(30, 659149, 'Pankaj Kumar ()', 'Database Administrator (ng)', '2024-04-05 09:32:33', '2024-04-05 17:34:17', NULL, '08:01:44', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(31, 317722, 'Pankaj Kumar ()', 'Software Developer (ng)', '2024-04-05 09:14:45', '2024-04-05 17:32:43', NULL, '08:17:58', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(32, 341988, 'Piyush Kumar ()', 'Software Developer (ng)', '2024-04-05 09:38:32', '2024-04-05 17:33:40', NULL, '07:55:08', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(33, 496131, 'Pooja ()', 'Software Developer (ng)', '2024-04-05 09:44:49', '2024-04-05 17:37:35', NULL, '07:52:46', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(34, 266676, 'Pratibha Yadav ()', 'Software Developer (ng)', '2024-04-05 09:15:49', '2024-04-05 17:36:46', NULL, '08:20:57', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(35, 968621, 'Pritam Rani (90757)', 'Software Developer (ng)', '2024-04-05 08:56:54', '2024-04-05 17:30:20', NULL, '08:33:26', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(36, 960537, 'Priyanka ()', 'Software Developer (ng)', '2024-04-05 09:25:42', '2024-04-05 17:30:15', NULL, '08:04:33', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(37, 626589, 'Priyankul Kumar ()', 'System Administrator(ng)', '2024-04-05 09:31:25', '2024-04-05 17:39:52', NULL, '08:08:27', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(38, 582105, 'Raveeranjan Kumar ()', 'Software Developer (ng)', '2024-04-05 09:42:47', '2024-04-05 17:33:30', NULL, '07:50:43', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(39, 373409, 'Sugandha Kumari ()', 'Software Developer (ng)', '2024-04-05 09:37:46', '2024-04-05 17:35:17', NULL, '07:57:31', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(40, 951478, 'Suman Sharma ()', 'Software Developer (ng)', '2024-04-05 09:19:49', '2024-04-05 17:40:31', NULL, '08:20:42', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(41, 625711, 'Sumit Kumar (010948)', 'Upper Division Clerk (udc)', '2024-04-05 17:46:37', '1970-01-01 00:00:00', NULL, NULL, '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(42, 665186, 'Sushant Bhardwaj ()', 'Software Developer (ng)', '2024-04-05 09:29:21', '2024-04-05 17:37:23', NULL, '08:08:02', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(43, 357042, 'Uma Shankar ()', 'Software Developer (ng)', '2024-04-05 09:26:47', '2024-04-05 17:37:52', NULL, '08:11:05', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(44, 614978, 'Vinamra Mishra ()', 'Software Developer (ng)', '2024-04-05 09:19:37', '2024-04-05 17:32:03', NULL, '08:12:26', '2024-04-30 06:10:40', '2024-04-30 06:10:40'),
(45, 630273, 'Vivek Verma (630273)', 'Assistant Manager', '2024-04-05 09:45:03', '2024-04-05 18:02:00', NULL, '08:16:57', '2024-04-30 06:10:40', '2024-04-30 06:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeattendance`
--
ALTER TABLE `timeattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeedetails`
--
ALTER TABLE `employeedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timeattendance`
--
ALTER TABLE `timeattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
