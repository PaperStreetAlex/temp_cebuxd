-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2015 at 03:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cebuxd`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `description`, `created_at`, `updated_at`, `thumb`) VALUES
(1, 'UX Guide for Product Managers', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(2, 'UX Design for Startups', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(3, 'UX Design to Wireframing', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(4, 'UX Design Process and Documentation', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(5, 'Define App Requirements Within 20 Minutes\n', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(6, 'A Practical Guide to Designing for the Web', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(7, 'Bright Ideas for UX Designers', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(8, 'Enhancing Human Performance', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(9, 'How to Turn Website Visitors into Buyers', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(10, 'Incomplete Guide to Building a Website', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(11, 'Mental Models in HCI', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(12, 'Research-Based Web Design and Usability Guidelines', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(13, 'Six Circles: An Experience Design Framework', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(14, 'Taking Your Talent to the Web', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(15, 'The Fable of the User-Centered Designer', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(16, 'The Guide to Mockups', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(17, 'Time Management for Creative People', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg'),
(18, 'Tips for Recruiting Participants in Usability Testing', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-25 05:23:24', '2015-07-25 05:23:24', 'http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `meetups`
--

CREATE TABLE IF NOT EXISTS `meetups` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meetups`
--

INSERT INTO `meetups` (`id`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:29', '2015-07-25 17:48:29'),
(2, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:30', '2015-07-25 17:48:30'),
(3, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:30', '2015-07-25 17:48:30'),
(4, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:30', '2015-07-25 17:48:30'),
(5, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:31', '2015-07-25 17:48:31'),
(6, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:31', '2015-07-25 17:48:31'),
(7, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:31', '2015-07-25 17:48:31'),
(8, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '2015-07-26 01:48:26', '2015-07-25 17:48:31', '2015-07-25 17:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `description`, `email`, `number`, `position`, `created_at`, `updated_at`, `thumb`) VALUES
(1, 'Chester Cornelio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'chestercornelio@gmail.com', '09173100918', 'CEO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(2, 'Cris Ryan Tan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'chestercornelio@gmail.com', '09173100918', 'CEO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(3, 'Dan Allen Pantinople', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'chestercornelio@gmail.com', '09173100918', 'CEO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(4, 'Karl Michael dela Cruz', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'chestercornelio@gmail.com', '09173100918', 'CEO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(5, 'Cecille M. Pantonial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(6, 'Edzel Rubite', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(7, 'Edzel Rubite', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(8, 'Ma. Ashley Uy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg'),
(9, 'Lee Wells', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '', '', 'FOUNDER', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_07_25_073203_create_members_table', 1),
('2015_07_25_130949_create_books_table', 2),
('2015_07_25_133750_add_books_thumb_field', 3),
('2015_07_25_134647_add_members_thumb_field', 4),
('2015_07_25_144822_create_sites_table', 5),
('2015_07_26_010503_create_videos_table', 6),
('2015_07_26_013450_create_slides_table', 7),
('2015_07_26_013640_create_meetups_table', 7),
('2015_07_26_032428_drop_slides_descrpiton_field', 8),
('2015_07_26_032604_create_studies_table', 9),
('2015_07_26_080158_create_reviews_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) unsigned NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `domain`, `email`, `site_name`, `user_name`, `user_company`, `info`, `created_at`, `updated_at`) VALUES
(6, 'http://catandentalcare.url.ph', 'john.doe@gmail.com', 'Catan Dental Care', 'John Doe', 'Catan Dental Care', 'Lorem ipsum', '2015-07-26 00:23:39', '2015-07-26 00:23:39'),
(7, 'http://catandentalcare.url.ph', 'john.doe@gmail.com', 'Catan Dental Care', 'John Doe', 'Catan Dental Care', 'Lorem ipsum', '2015-07-26 00:23:46', '2015-07-26 00:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `description`, `thumb`, `link`, `created_at`, `updated_at`) VALUES
(1, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:54', '2015-07-25 08:04:54'),
(2, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(3, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(4, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(5, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(6, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(7, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(8, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(9, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(10, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(11, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(12, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(13, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(14, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(15, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(16, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(17, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(18, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(19, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(20, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55'),
(21, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://localhost:8000/dist/img/site.png', 'http://www.smashingmagazine.com/2007/11/monday-inspiration-user-experience-of-the-future/', '2015-07-25 08:04:55', '2015-07-25 08:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) unsigned NOT NULL,
  `meetup_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `meetup_id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'Undercover UX Team of One: Producing user delight with little money, support, and experience', '1.docx', '2015-07-25 17:55:45', '2015-07-25 17:55:45'),
(2, 1, 'The Science and Art of Effective Web and Application Design', '1.docx', '2015-07-25 17:55:45', '2015-07-25 17:55:45'),
(3, 2, 'UX Portfolio Sharing', '1.docx', '2015-07-25 17:55:45', '2015-07-25 17:55:45'),
(4, 3, 'UX at Lexmark', '1.docx', '2015-07-25 17:55:45', '2015-07-25 17:55:45'),
(5, 4, 'UX and Conversion Optimization', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(6, 5, 'Intentional Site Building', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(7, 5, 'Usability Testing', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(8, 6, 'UX at VOX Media', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(9, 7, 'Designing for the Mobile UX Part 1', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(10, 7, 'Designing Skimpl: Experience Design for an Early-Stage SaaS', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(11, 8, 'Designing for the Mobile UX Part 2', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46'),
(12, 8, 'Rapid Prototyping in UX Design', '1.docx', '2015-07-25 17:55:46', '2015-07-25 17:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`id`, `name`, `description`, `link`, `author`, `created_at`, `updated_at`) VALUES
(1, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'William Fredirick Durts', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(2, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(3, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(4, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(5, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(6, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(7, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(8, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(9, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'Steve Jobs', '2015-07-25 19:34:56', '2015-07-25 19:34:56'),
(10, 'What You See Isn’t What Your Brain Gets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', 'http://google.com', 'William Fredirick Durts', '2015-07-25 19:34:56', '2015-07-25 19:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(2, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(3, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(4, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(5, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(6, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(7, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(8, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(9, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30'),
(10, 'UX Guide for Product Managers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/yjJL9DGU7Gg" frameborder="0" allowfullscreen></iframe>', '2015-07-25 17:11:30', '2015-07-25 17:11:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetups`
--
ALTER TABLE `meetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `meetups`
--
ALTER TABLE `meetups`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
