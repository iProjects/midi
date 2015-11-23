-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 11:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mididb`
--

-- --------------------------------------------------------
 
CREATE TABLE IF NOT EXISTS `midi_assets` (
  `auto_id` int(11) NOT NULL,
  `ast_description` varchar(200) DEFAULT NULL,
  `ast_asset_type` int(11) DEFAULT NULL,
  `ast_date_acquired` datetime DEFAULT NULL,
  `ast_acquired_value` float DEFAULT NULL,
  `ast_current_value` float DEFAULT NULL,
  `ast_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_asset_types`
--

CREATE TABLE IF NOT EXISTS `midi_asset_types` (
  `auto_id` int(11) NOT NULL,
  `at_description` varchar(200) DEFAULT NULL,
  `at_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_conservation_agriculture_programme`
--

CREATE TABLE IF NOT EXISTS `midi_conservation_agriculture_programme` (
  `auto_id` int(11) NOT NULL,
  `cap_demonstration_plot` varchar(200) NOT NULL,
  `cap_crop_variety` varchar(200) NOT NULL,
  `cap_group_name` varchar(200) NOT NULL,
  `cap_group_population` int(11) NOT NULL,
  `cap_initiation_date` datetime NOT NULL,
  `cap_completion_date` datetime NOT NULL,
  `cap_total_revenue_production` double NOT NULL,
  `cap_remarks` varchar(1000) NOT NULL,
  `cap_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_employees`
--

CREATE TABLE IF NOT EXISTS `midi_employees` (
  `auto_id` int(11) NOT NULL,
  `employee_first_name` varchar(200) DEFAULT NULL,
  `employee_last_name` varchar(200) DEFAULT NULL,
  `employee_surname` varchar(200) DEFAULT NULL,
  `employee_date_of_birth` datetime DEFAULT NULL,
  `employee_address` varchar(200) DEFAULT NULL,
  `employee_phone` varchar(200) DEFAULT NULL,
  `employee_email` varchar(200) DEFAULT NULL,
  `employee_pwd` varchar(200) DEFAULT NULL,
  `employee_job_title` varchar(200) DEFAULT NULL,
  `employee_no` varchar(200) DEFAULT NULL,
  `employee_gender` varchar(200) DEFAULT NULL,
  `employee_date_of_employment` datetime DEFAULT NULL,
  `employee_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_hay_bales_programme`
--

CREATE TABLE IF NOT EXISTS `midi_hay_bales_programme` (
  `auto_id` int(11) NOT NULL,
  `hbp_hay_type` varchar(200) DEFAULT NULL,
  `hbp_hay_size` int(11) DEFAULT NULL,
  `hbp_hay_care_taker` varchar(200) DEFAULT NULL,
  `hbp_date_planted` datetime DEFAULT NULL,
  `hbp_date_harvested` datetime DEFAULT NULL,
  `hbp_land_under_hay_capacity` int(11) DEFAULT NULL,
  `hbp_training_offered` int(11) DEFAULT NULL,
  `hbp_revenue` double DEFAULT NULL,
  `hbp_remarks` varchar(200) DEFAULT NULL,
  `hbp_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_livestock_farming_programme`
--

CREATE TABLE IF NOT EXISTS `midi_livestock_farming_programme` (
  `auto_id` int(11) NOT NULL,
  `lfp_farm_location` varchar(200) DEFAULT NULL,
  `lfp_breed_type` varchar(200) DEFAULT NULL,
  `lfp_animal_id_no` varchar(200) DEFAULT NULL,
  `lfp_cost_of_animal` double DEFAULT NULL,
  `lfp_animal_date_of_birth` datetime DEFAULT NULL,
  `lfp_treatment` varchar(200) DEFAULT NULL,
  `lfp_animal_production_revenue` double DEFAULT NULL,
  `lfp_culling_date` datetime DEFAULT NULL,
  `lfp_remarks` varchar(200) DEFAULT NULL,
  `lfp_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_projects`
--

CREATE TABLE IF NOT EXISTS `midi_projects` (
  `auto_id` int(11) NOT NULL,
  `pr_name` varchar(500) DEFAULT NULL,
  `pr_cost` double DEFAULT NULL,
  `pr_start_date` datetime DEFAULT NULL,
  `pr_end_date` datetime DEFAULT NULL,
  `pr_remarks` varchar(1000) DEFAULT NULL,
  `pr_location` varchar(200) DEFAULT NULL,
  `pr_usage` varchar(1000) DEFAULT NULL,
  `pr_benefitiaries` varchar(200) DEFAULT NULL,
  `pr_analysis_results` varchar(1000) DEFAULT NULL,
  `pr_project_type` int(11) DEFAULT NULL,
  `pr_estimated_revenue` double DEFAULT NULL,
  `pr_actual_revenue` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_project_types`
--

CREATE TABLE IF NOT EXISTS `midi_project_types` (
  `auto_id` int(11) NOT NULL,
  `pt_description` varchar(200) NOT NULL,
  `pt_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_sand_dam_programme`
--

CREATE TABLE IF NOT EXISTS `midi_sand_dam_programme` (
  `auto_id` int(11) NOT NULL,
  `sdp_location` varchar(200) DEFAULT NULL,
  `sdp_main_use` varchar(200) DEFAULT NULL,
  `sdp_dam_capacity` float DEFAULT NULL,
  `sdp_beneficiary` varchar(200) DEFAULT NULL,
  `sdp_analysis_survey` varchar(200) DEFAULT NULL,
  `sdp_date_of_implementation` datetime DEFAULT NULL,
  `sdp_project_duration` int(11) DEFAULT NULL,
  `sdp_project_start_date` datetime DEFAULT NULL,
  `sdp_project_end_date` datetime DEFAULT NULL,
  `sdp_project_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_statuses`
--

CREATE TABLE IF NOT EXISTS `midi_statuses` (
  `auto_id` int(11) NOT NULL,
  `status_description` varchar(200) DEFAULT NULL,
  `status_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_training_programme`
--

CREATE TABLE IF NOT EXISTS `midi_training_programme` (
  `auto_id` int(11) NOT NULL,
  `tp_training_type` varchar(200) DEFAULT NULL,
  `tp_training_start_date` datetime DEFAULT NULL,
  `tp_training_end_date` datetime DEFAULT NULL,
  `tp_attendant_number` int(11) DEFAULT NULL,
  `tp_attendant_composition` varchar(200) DEFAULT NULL,
  `tp_training_topics` varchar(200) DEFAULT NULL,
  `tp_name_of_trainer` varchar(200) DEFAULT NULL,
  `tp_training_analysis` varchar(200) DEFAULT NULL,
  `tp_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midi_users`
--

CREATE TABLE IF NOT EXISTS `midi_users` (
  `auto_id` int(11) NOT NULL,
  `us_email` varchar(200) DEFAULT NULL,
  `us_pwd` varchar(200) DEFAULT NULL,
  `us_telephone` varchar(200) DEFAULT NULL,
  `us_usertype` varchar(200) DEFAULT NULL,
  `us_status` varchar(200) DEFAULT NULL,
  `us_role` varchar(200) DEFAULT NULL,
  `us_lastlogindate` varchar(200) DEFAULT NULL,
  `us_employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midi_users`
--

INSERT INTO `midi_users` (`auto_id`, `us_email`, `us_pwd`, `us_telephone`, `us_usertype`, `us_status`, `us_role`, `us_lastlogindate`, `us_employee_id`) VALUES
(32, 'k@k.com', 'k', 'k', 'k', '1', 'k', NULL, NULL),
(33, 'v@v.com', 'v', 'v', 'v', '1', 'v', NULL, NULL),
(34, 'a@a.com', 'a', 'a', 'a', '1', 'a', NULL, NULL),
(35, 's@s.com', 's', 's', 's', '1', 's', NULL, NULL),
(36, 'w@w.com', 'w', 'w', 'w', '1', 'w', NULL, NULL),
(37, 'd@d.com', 'd', 'd', 'd', '1', 'd', NULL, NULL),
(38, 'q@q.com', 'q', 'q', 'q', '1', 'q', NULL, NULL),
(39, 'e@e.com', 'e', 'ee', 'e', '1', 'e', NULL, NULL),
(40, 'z@z.com', 'z', 'z', 'z', '1', 'z', NULL, NULL),
(41, 'r@r.com', 'r', 'r', 'r', '1', 'r', NULL, NULL),
(42, 't@t.com', 't', 't', 't', '1', 't', NULL, NULL),
(43, 'y@y.com', 'y', 'y', 'y', '1', 'y', NULL, NULL),
(44, 'u@u.com', 'u', 'u', 'u', '1', 'u', NULL, NULL),
(45, 'o@o.com', 'o', 'o', 'o', '1', 'o', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `midi_user_types`
--

CREATE TABLE IF NOT EXISTS `midi_user_types` (
  `auto_id` int(11) NOT NULL,
  `ut_description` varchar(200) DEFAULT NULL,
  `ut_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midi_user_types`
--

INSERT INTO `midi_user_types` (`auto_id`, `ut_description`, `ut_status`) VALUES
(1, 'Administrator', 'Y'),
(2, 'Manager', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `midi_users`
--
ALTER TABLE `midi_users`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_assets`
--
ALTER TABLE `midi_assets`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_asset_types`
--
ALTER TABLE `midi_asset_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_conservation_agriculture_programme`
--
ALTER TABLE `midi_conservation_agriculture_programme`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_employees`
--
ALTER TABLE `midi_employees`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_livestock_farming_programme`
--
ALTER TABLE `midi_livestock_farming_programme`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_projects`
--
ALTER TABLE `midi_projects`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_project_types`
--
ALTER TABLE `midi_project_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_sand_dam_programme`
--
ALTER TABLE `midi_sand_dam_programme`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_statuses`
--
ALTER TABLE `midi_statuses`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `midi_training_programme`
--
ALTER TABLE `midi_training_programme`
  ADD PRIMARY KEY (`auto_id`);
 
--
-- Indexes for table `midi_user_types`
--
ALTER TABLE `midi_user_types`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `midi_users`
--
ALTER TABLE `midi_users`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
