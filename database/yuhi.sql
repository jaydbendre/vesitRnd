-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 10:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_table`
--

CREATE TABLE `company_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_table`
--

INSERT INTO `company_table` (`id`, `company_name`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 'Tata', 2, '2019-09-17 07:57:53', '2019-09-17 07:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domain_patent_table`
--

CREATE TABLE `domain_patent_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain_id` int(11) NOT NULL,
  `patent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domain_publication_table`
--

CREATE TABLE `domain_publication_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain_id` int(11) NOT NULL,
  `pub_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funded_project_table`
--

CREATE TABLE `funded_project_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `funded_by` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `funded_project_table`
--

INSERT INTO `funded_project_table` (`id`, `p_id`, `funded_by`, `amount`, `created_at`, `updated_at`) VALUES
(1, 3, 'Tata Hospital', 1000000, '2019-09-17 07:54:16', '2019-09-17 07:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_project_table`
--

CREATE TABLE `industrial_project_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `domain` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `industrial_project_table`
--

INSERT INTO `industrial_project_table` (`id`, `p_id`, `domain`, `created_at`, `updated_at`) VALUES
(1, 2, 'IOT', '2019-09-17 07:54:31', '2019-09-17 07:54:31'),
(2, 3, 'AI', NULL, NULL),
(3, 1, 'AI', '2019-09-18 01:03:00', NULL),
(4, 5, 'data mining', '2019-09-18 05:41:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_projects_users_table`
--

CREATE TABLE `inhouse_projects_users_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inhouse_projects_users_table`
--

INSERT INTO `inhouse_projects_users_table` (`id`, `p_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2019-09-17 07:54:50', '2019-09-17 07:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_project_table`
--

CREATE TABLE `inhouse_project_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inhouse_project_table`
--

INSERT INTO `inhouse_project_table` (`id`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-09-17 07:55:04', '2019-09-17 07:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_09_14_082012_create_patents_table', 1),
(3, '2019_09_14_082106_create_publications_table', 1),
(4, '2019_09_14_083507_create_domains_table', 1),
(5, '2019_09_14_172416_create_research_table', 1),
(6, '2019_09_14_172941_create_research_grant_table', 1),
(7, '2019_09_15_135051_create_users_table', 1),
(8, '2019_09_15_140418_patents_user_table', 1),
(9, '2019_09_15_144529_create_publication_user_table', 1),
(10, '2019_09_15_145434_create_domain_publication_table', 1),
(11, '2019_09_15_145952_create_domain_patent_table', 1),
(12, '2019_09_15_152903_create_project_table', 1),
(13, '2019_09_15_154721_create_funded_project_table', 1),
(14, '2019_09_15_154937_create_industrial_project_table', 1),
(15, '2019_09_15_155109_create_inhouse_project_table', 1),
(16, '2019_09_15_161040_create_company_table', 1),
(17, '2019_09_15_162159_create_inhouse_project_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `app_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patents`
--

INSERT INTO `patents` (`id`, `title`, `domain`, `app_no`, `created_at`, `updated_at`) VALUES
(1, '\r\nGlitter Seal Authentication and Tamper Detection using Neural Networks', 'AI', '201621006029/ 2016', '2019-09-17 07:23:22', '2019-09-17 07:23:22'),
(2, 'Helmet', 'IoT', '286362   02/12/2016', '2019-09-17 07:24:11', '2019-09-17 07:24:11'),
(3, 'Solar helmet', 'IoT', '286364', '2019-09-17 07:24:56', '2019-09-17 07:24:56'),
(4, 'Laser mouse navigation sensor system for thickness measurement', 'IoT', '1287/MUM/2010', '2019-09-17 07:25:34', '2019-09-17 07:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `patent_user`
--

CREATE TABLE `patent_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `patent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patent_user`
--

INSERT INTO `patent_user` (`id`, `user_id`, `patent_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-09-17 07:28:00', '2019-09-17 07:28:00'),
(2, 3, 1, '2019-09-17 07:28:18', '2019-09-17 07:28:18'),
(3, 3, 2, '2019-09-17 07:37:36', '2019-09-17 07:37:36'),
(4, 3, 2, '2019-09-17 07:37:53', '2019-09-17 07:37:53'),
(5, 2, 3, '2019-09-17 07:38:16', '2019-09-17 07:38:16'),
(6, 3, 4, '2019-09-17 07:38:48', '2019-09-17 07:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE `project_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`id`, `title`, `status`, `type`, `description`, `domain`, `created_at`, `updated_at`) VALUES
(1, 'Kernel based machine learning for nuclear application', 'Pending', 'Inhouse', 'An algorithm for background estimation in low-count gamma-ray spectra have been developed using kernel-based Gaussian processes (GP) taken from the field of machine learning.', 'IOT', '2019-09-17 07:50:07', '2019-09-17 07:50:07'),
(2, 'Electronic Radioactivity Simulator', 'Completed', 'Industrial', 'Electronic Radioactivity Simulator', 'AI', '2019-09-17 07:51:06', '2019-09-17 07:51:06'),
(3, 'AI Wheelchair for Hospital', 'Pending', 'Funded', 'This project is for providing AI Powered Wheelchair for Specially Abled people. ', 'data_mining', '2019-09-17 07:53:27', '2019-09-17 07:53:27'),
(4, 'AI Wheelchair for Hospital', 'Pending', 'Industrial', 'This project is for providing AI Powered Wheelchair for Specially Abled people. ', 'data_mining', '2019-09-18 10:53:27', '2019-09-17 07:53:27'),
(5, 'Kernel based machine learning for nuclear application', 'Pending', 'kth', 'An algorithm for background estimation in low-count gamma-ray spectra have been developed using kernel-based Gaussian processes (GP) taken from the field of machine learning.', 'AI', '2019-09-17 07:50:07', '2019-09-17 07:50:07'),
(6, 'Electronic Radioactivity Simulator', 'Completed', 'kth', 'Electronic Radioactivity Simulator', 'IOT', '2019-09-17 07:51:06', '2019-09-17 07:51:06'),
(7, 'AI Wheelchair for Hospital', 'Pending', 'kth', 'This project is for providing AI Powered Wheelchair for Specially Abled people. ', 'AI', '2019-09-17 07:53:27', '2019-09-17 07:53:27'),
(8, 'AI Wheelchair for Hospital', 'Pending', 'Inhouse', 'This project is for providing AI Powered Wheelchair for Specially Abled people. ', 'data_mining', '2019-09-18 10:53:27', '2019-09-17 07:53:27'),
(9, 'AI Wheelchair for Hospital', 'Pending', 'Individual', 'This project is for providing AI Powered Wheelchair for Specially Abled people. ', 'data_mining', '2019-09-18 10:53:27', '2019-09-17 07:53:27'),
(10, 'Kernel based machine learning for nuclear application', 'Pending', 'Industial', 'An algorithm for background estimation in low-count gamma-ray spectra have been developed using kernel-based Gaussian processes (GP) taken from the field of machine learning.', 'AI', '2019-09-17 07:50:07', '2019-09-17 07:50:07'),
(11, 'Electronic Radioactivity Simulator', 'Completed', 'Inhouse', 'Electronic Radioactivity Simulator', 'IOT', '2019-09-17 07:51:06', '2019-09-17 07:51:06'),
(12, 'AI Wheelchair for Hospital', 'Pending', 'Individual', 'This project is for providing AI Powered Wheelchair for Specially Abled people. ', 'AI', '2019-09-17 07:53:27', '2019-09-17 07:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `domain`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Implementation of  change detection algorithm in images using neural networks', 'ISSN no 2278-7844/#133', '2019-09-17 07:43:54', '2019-09-17 07:43:54'),
(2, 'ICI self cancellation scheme in MIMO-OFDM system', 'ISSN 0975-8887', '2019-09-17 07:44:36', '2019-09-17 07:44:36'),
(3, 'Simulation of an  Intercarrier  Cancellation Approach in  MIMO- OFDM system', 'National conference', '2019-09-17 07:45:28', '2019-09-17 07:45:28'),
(4, 'Automated lip reading technique for password authentication', 'ISSN\r\n: 2249-0868\r\n', '2019-09-17 07:46:03', '2019-09-17 07:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `publication_user_table`
--

CREATE TABLE `publication_user_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pub_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publication_user_table`
--

INSERT INTO `publication_user_table` (`id`, `user_id`, `pub_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-09-17 07:47:57', '2019-09-17 07:47:57'),
(2, 3, 2, '2019-09-17 07:48:10', '2019-09-17 07:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_grant`
--

CREATE TABLE `research_grant` (
  `r_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `area_of_designation` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `qualification`, `designation`, `area_of_designation`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'qwy', 'admin@gmail.com', NULL, '$2y$10$kQlaHnRqf7BHJsHZGu/M7O2wQxojzmfgMOjOQ52p7lD7Z47NDizXu', 'Admin', 'qwer', 'wer', 'wet', 'image (4).png', NULL, '2019-09-16 23:37:25', '2019-09-16 23:37:25'),
(3, 'CHANDAN SINGH RAWAT', 'chandansingh.rawat@ves.ac.in', NULL, '$2y$10$hl3qXI2qKhQG3aCSoutFHuZo2q1wgBx5wIjmKsuUyc7htsAdmh4t.', 'Admin', 'B.E. (ELECTRONIC ENGINEERING), M.E. ( ELECTRONICS& TELECOMMUNICATION), PHD, NIT ROURKELA(IMAGE PROCESSING)', 'Associate Professor', 'AI', 'dgfdgg.PNG', NULL, '2019-09-17 01:38:44', '2019-09-17 01:38:44'),
(4, 'Mr. Dashrath Mane', 'dashrath.mane@ves.ac.in', NULL, '$2y$10$1dKEQWpQUeH0U5KalM7pjuLkk6VaoZ2nqJ0JdE5MbXZQK9gYHJ.7m', 'Faculty', 'PhD(Computer Science & Engineering) Pursuing*,   ME(Information Technology),   MBA(HR),  BE(Computer Engineering),  Diploma in Computer Engineering(MSBTE)', 'Assistant Professor', 'Information Systems & Management Data analytics/Netnographic studies.', 'dgfdgg.PNG', NULL, '2019-09-17 01:47:11', '2019-09-17 01:47:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_table`
--
ALTER TABLE `company_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain_patent_table`
--
ALTER TABLE `domain_patent_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain_publication_table`
--
ALTER TABLE `domain_publication_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funded_project_table`
--
ALTER TABLE `funded_project_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_project_table`
--
ALTER TABLE `industrial_project_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inhouse_projects_users_table`
--
ALTER TABLE `inhouse_projects_users_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inhouse_project_table`
--
ALTER TABLE `inhouse_project_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patent_user`
--
ALTER TABLE `patent_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication_user_table`
--
ALTER TABLE `publication_user_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_grant`
--
ALTER TABLE `research_grant`
  ADD PRIMARY KEY (`r_id`);

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
-- AUTO_INCREMENT for table `company_table`
--
ALTER TABLE `company_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domain_patent_table`
--
ALTER TABLE `domain_patent_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domain_publication_table`
--
ALTER TABLE `domain_publication_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funded_project_table`
--
ALTER TABLE `funded_project_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industrial_project_table`
--
ALTER TABLE `industrial_project_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inhouse_projects_users_table`
--
ALTER TABLE `inhouse_projects_users_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inhouse_project_table`
--
ALTER TABLE `inhouse_project_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patents`
--
ALTER TABLE `patents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patent_user`
--
ALTER TABLE `patent_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_table`
--
ALTER TABLE `project_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publication_user_table`
--
ALTER TABLE `publication_user_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_grant`
--
ALTER TABLE `research_grant`
  MODIFY `r_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
