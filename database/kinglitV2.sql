-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 07:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CMSMULTIe2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(100) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` text NOT NULL,
  `photo` text NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `two_factor` tinyint(1) NOT NULL DEFAULT 0,
  `two_factor_code` int(11) DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `is_admin`, `name`, `email`, `password`, `token`, `photo`, `role_id`, `two_factor`, `two_factor_code`, `two_factor_expires_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nigus Abate', 'abatenigus0@gmail.com', '$2y$12$Y3uCQTGlwYoPLKKcz6LksuEx/1crc2akzflC/aKmdhf6LJw9Kvmsm', 'e9db422942dab2a7d3567cb1166007b8fe153ec5e1794f217a5b8f6c15aa181b', 'user-1.png', 1, 0, NULL, NULL, '2024-04-19 02:16:39', '2024-04-20 21:15:49'),
(2, 0, 'Mr Manager', 'manager@gmail.com', '$2y$12$CMOiZKhLdNutEuQJNugmWeOqOIKC1sladovE6Sc6BL0xRasw6EJoq', '', 'user-4.jpg', 4, 0, NULL, NULL, '2024-04-19 02:16:40', '2024-04-19 02:16:40'),
(3, 0, 'Mr Editor', 'editor@gmail.com', '$2y$12$VfMDiKHORxP0kfdOf9q0beqtUKH1G/..Rp6iDAI3PxA4aH..CwWty', '', 'user-6.png', 5, 0, NULL, NULL, '2024-04-19 02:16:40', '2024-04-19 02:16:40'),
(4, 0, 'Nigus Abate', 'admin@gmail.com', '$2y$12$Dpxi/G68TQ.3MHcXKqyUr.gdXFUIuN.RscJQ1tlATE9aEC27kdmDC', '', 'user-7.png', 1, 0, NULL, NULL, '2024-04-19 02:16:40', '2024-04-19 02:16:40'),
(5, 0, 'test user', 'test@gmail.com', '$2y$12$KV0YKDwk.Hi/wjl9gxi6HeEAxhVESDH8Iq67EoJK8fTrmkVmpE9B2', '', 'user-8.png', 9, 0, NULL, NULL, '2024-04-19 02:16:40', '2024-04-19 02:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `ai_chats`
--

CREATE TABLE `ai_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_message` text DEFAULT NULL,
  `ai_message` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_content` text NOT NULL,
  `blog_content_short` text NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_slug`, `blog_content`, `blog_content_short`, `blog_photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test blog', 'test-blog', '<p>some content<br></p>', 'blog short', 'blog-1.png', 'seo title', 'meta desc', '2024-04-20 22:22:21', '2024-04-20 22:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `board_directors`
--

CREATE TABLE `board_directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `board_message` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `level` text DEFAULT NULL,
  `telephone` text DEFAULT NULL,
  `manager` text DEFAULT NULL,
  `photo` text NOT NULL,
  `latitude` text DEFAULT NULL,
  `longitude` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Commercial', 'commertial', 'comertial', NULL, '2024-04-20 22:21:21', '2024-04-20 22:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `person_name` text NOT NULL,
  `person_email` text NOT NULL,
  `person_message` text NOT NULL,
  `comment_status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counter_title` varchar(255) NOT NULL,
  `counter_number` varchar(255) NOT NULL,
  `counter_favicon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `coupon_type` varchar(30) NOT NULL,
  `coupon_discount` varchar(10) NOT NULL,
  `coupon_maximum_use` smallint(6) NOT NULL,
  `coupon_existing_use` smallint(6) NOT NULL,
  `coupon_start_date` varchar(10) NOT NULL,
  `coupon_end_date` varchar(10) NOT NULL,
  `coupon_status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_country` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `customer_state` varchar(255) DEFAULT NULL,
  `customer_city` varchar(255) DEFAULT NULL,
  `customer_zip` varchar(255) DEFAULT NULL,
  `customer_password` text NOT NULL,
  `customer_token` text NOT NULL,
  `customer_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_country`, `customer_address`, `customer_state`, `customer_city`, `customer_zip`, `customer_password`, `customer_token`, `customer_status`, `created_at`, `updated_at`) VALUES
(1, 'Kebede', 'customer@gmail.com', '+251915276873', 'et', 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia', 'TX', 'Addis Ababa', '1000', '$2y$12$OtP8PQRCQzppC7jvs4rpeeCJ0eD4ZQ/BpJi93VzE30fZpjifuWnlC', '', 'Pending', '2024-04-19 02:16:41', '2024-04-19 03:09:16'),
(2, 'Nigus Abate', 'nigusabate4@gmail.com', '+251915852276', 'Ethiopia', '4008 Cherchill Street, Ethiopia', 'Addis Ababa', 'Addis ababa', '1000', '$2y$12$5CZkIYMzLLKJFiOeMKZu3ur9JPG3FpstG4cKDwJ2tCrBkaWBFCala', '0af035f2bd20622ea76ea48a3d6b7504b86d45c46c1816e274e151a8343864d6', 'Active', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `document_url` varchar(255) NOT NULL,
  `document_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_pages`
--

CREATE TABLE `dynamic_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dynamic_page_name` text NOT NULL,
  `dynamic_page_slug` text DEFAULT NULL,
  `dynamic_page_content` text DEFAULT NULL,
  `dynamic_page_banner` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `et_subject` text NOT NULL,
  `et_content` text NOT NULL,
  `et_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `et_subject`, `et_content`, `et_name`, `created_at`, `updated_at`) VALUES
(1, 'Contact Form - your website', '<p>You have received a message from a visitor. Detailed information is here:</p><p>Visitor Name: [[visitor_name]]</p><p>Visitor Email: [[visitor_email]]</p><p>Visitor Phone: [[visitor_phone]]</p><p>Visitor Message:&nbsp;</p><p>[[visitor_message]]</p>', 'Contact Page Message', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(2, 'New Comment Posted', '<p>You have received a new comment from a person. His detail is here:</p><p><strong>Person Name:</strong>&nbsp;[[person_name]]</p><p><strong>Person Email:&nbsp;</strong>[[person_email]]</p><p><strong>Person Message:</strong></p><p>[[person_message]]</p><p>Go to this link to see this comment<span style=\\\"font-weight: bolder;\\\">:&nbsp;</span><a href=\\\"[[comment_see_url]]\\\" target=\\\"_blank\\\">See Comment</a></p>', 'Comment Message to Admin', NULL, '2020-11-28 12:51:16'),
(3, 'Verify Subscription', '<p>Dear Sir,</p><p>You have requested to be a subscriber in our website. Please click on the following link to confirm the subscription:</p><p><a href=\\\"[[verification_link]]\\\" target=\\\"_blank\\\">Verification Link</a></p><p>Thank you so much!<br>Marketing Team</p>', 'Subscriber Message for Verification', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(4, 'A News has been added', '<p>Dear Subscriber,</p><p>A news has been published. To see the news, please go to the following link:</p><p><a href=\\\"[[post_link]]\\\" target=\\\"_blank\\\">Click here to see the post</a></p><p>Thank you!</p>', 'News Post Message to Active Subscribers', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(5, 'Reset Password', '<p>To reset your password, please click on the following link:</p><p><a href=\\\"[[reset_link]]\\\" target=\\\"_blank\\\">Reset Password</a><br></p>', 'Reset Password Message to Admin', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(6, 'Confirm Registration', '<p>To activate your account and confirm the registration, please click on the verify link below:</p><p><a href=\\\"[[verification_link]]\\\" target=\\\"_blank\\\">Verification Link</a></p>', 'Registration Email to Customer', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(7, 'Reset Password', '<p>To reset your password, please click on the following link:</p><p><a href=\\\"[[reset_link]]\\\" target=\\\"_blank\\\">Reset Password Link</a></p>', 'Reset Password Message to Customer', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(8, 'Order Completed', '<p>Dear [[customer_name]],</p><p>Your order has been submitted successfully and we received the payment from you. After you process and ship the order, you will get all the products after a certain time period.&nbsp;</p><p><b>Payment Information:</b></p><p>Order Number: [[order_number]]</p><p>[[payment_method]]</p><p>Payment Date &amp; Time: [[payment_date_time]]</p><p>Transaction Id: [[transaction_id]]</p><p>Shipping Cost: [[shipping_cost]]</p><p>Coupon Code: [[coupon_code]]</p><p>Coupon Discount: [[coupon_discount]]</p><p>Paid Amount: [[paid_amount]]</p><p>Payment Status: [[payment_status]]</p><p>----------------------------------------</p><p><b>Your billing details:</b></p><p>Billing Name: [[billing_name]]</p><p>Billing Email: [[billing_email]]</p><p>Billing Phone: [[billing_phone]]</p><p>Billing Country: [[billing_country]]</p><p>Billing Address: [[billing_address]]</p><p>Billing State: [[billing_state]]</p><p>Billing City: [[billing_city]]</p><p>Billing Zip: [[billing_zip]]</p><p>----------------------------------------</p><p><b>Your shipping details:</b></p><p>Shipping Name: [[shipping_name]]</p><p>Shipping Email: [[shipping_email]]</p><p>Shipping Phone: [[shipping_phone]]</p><p>Shipping Country: [[shipping_country]]</p><p>Shipping Address: [[shipping_address]]</p><p>Shipping State: [[shipping_state]]</p><p>Shipping City: [[shipping_city]]</p><p>Shipping Zip: [[shipping_zip]]</p><p>----------------------------------------</p><p><b>Products You Purchased:&nbsp;</b></p><p>[[product_detail]]</p><p>Thank you! The ABC Team</p>', 'Order Completed Email to Customer', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_title` text NOT NULL,
  `faq_content` text NOT NULL,
  `faq_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder_id` bigint(20) UNSIGNED DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_columns`
--

CREATE TABLE `footer_columns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `column_item_text` varchar(255) NOT NULL,
  `column_item_url` varchar(255) NOT NULL,
  `column_item_order` int(11) NOT NULL DEFAULT 0,
  `column_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_columns`
--

INSERT INTO `footer_columns` (`id`, `column_item_text`, `column_item_url`, `column_item_order`, `column_name`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'https://www.demo.devethio.com/', 1, 'Column 1', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(2, 'Blog', 'https://www.demo.devethio.com/blog', 2, 'Column 1', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(3, 'Contact us', 'https://www.demo.devethio.com/contact', 3, 'Column 1', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(4, 'Jobs', 'https://www.demo.devethio.com/career', 1, 'Column 2', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(5, 'Our Services', 'https://www.demo.devethio.com/services', 2, 'Column 2', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(6, 'FAQ', 'https://www.demo.devethio.com/faq', 3, 'Column 2', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `login_bg` text NOT NULL,
  `top_bar_email` text DEFAULT NULL,
  `top_bar_phone` text DEFAULT NULL,
  `top_bar_social_status` text NOT NULL,
  `top_bar_login_status` text NOT NULL,
  `top_bar_registration_status` text NOT NULL,
  `top_bar_cart_status` text NOT NULL,
  `sidebar_total_recent_post` tinyint(4) NOT NULL,
  `theme_color` text NOT NULL,
  `sidebar_color` text DEFAULT NULL,
  `footer_column1_heading` text NOT NULL,
  `footer_column2_heading` text NOT NULL,
  `footer_column3_heading` text NOT NULL,
  `footer_column4_heading` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_email` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `preloader_photo` text NOT NULL,
  `preloader_status` text NOT NULL,
  `sticky_header_status` text NOT NULL,
  `google_analytic_tracking_id` text NOT NULL,
  `google_analytic_status` text NOT NULL,
  `tawk_live_chat_code` text NOT NULL,
  `tawk_live_chat_status` text NOT NULL,
  `google_adsense_script_code` text NOT NULL,
  `google_adsense_script_status` text NOT NULL,
  `cookie_consent_status` text NOT NULL,
  `google_recaptcha_site_key` text NOT NULL,
  `google_recaptcha_status` text NOT NULL,
  `banner_about` text NOT NULL,
  `banner_service` text NOT NULL,
  `banner_service_detail` text NOT NULL,
  `banner_blog` text NOT NULL,
  `banner_blog_detail` text NOT NULL,
  `banner_category` text NOT NULL,
  `banner_senior_detail` text DEFAULT NULL,
  `banner_board_detail` text DEFAULT NULL,
  `banner_developer_detail` text DEFAULT NULL,
  `banner_project` text NOT NULL,
  `banner_project_detail` text NOT NULL,
  `banner_team_member` text NOT NULL,
  `banner_team_member_detail` text NOT NULL,
  `banner_photo_gallery` text NOT NULL,
  `banner_video_gallery` text NOT NULL,
  `banner_faq` text NOT NULL,
  `banner_product` text NOT NULL,
  `banner_product_detail` text NOT NULL,
  `banner_contact` text NOT NULL,
  `banner_search` text NOT NULL,
  `banner_cart` text NOT NULL,
  `banner_checkout` text NOT NULL,
  `banner_login` text NOT NULL,
  `banner_registration` text NOT NULL,
  `banner_forget_password` text NOT NULL,
  `banner_customer_panel` text NOT NULL,
  `banner_career` text NOT NULL,
  `banner_branch` text DEFAULT NULL,
  `banner_senior` text DEFAULT NULL,
  `banner_board` text DEFAULT NULL,
  `banner_job` text NOT NULL,
  `banner_job_application` text NOT NULL,
  `banner_term` text NOT NULL,
  `banner_privacy` text NOT NULL,
  `banner_document` text NOT NULL,
  `banner_ceo` text NOT NULL,
  `authorized_share` double DEFAULT NULL,
  `per_value` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `favicon`, `login_bg`, `top_bar_email`, `top_bar_phone`, `top_bar_social_status`, `top_bar_login_status`, `top_bar_registration_status`, `top_bar_cart_status`, `sidebar_total_recent_post`, `theme_color`, `sidebar_color`, `footer_column1_heading`, `footer_column2_heading`, `footer_column3_heading`, `footer_column4_heading`, `footer_address`, `footer_email`, `footer_phone`, `footer_copyright`, `preloader_photo`, `preloader_status`, `sticky_header_status`, `google_analytic_tracking_id`, `google_analytic_status`, `tawk_live_chat_code`, `tawk_live_chat_status`, `google_adsense_script_code`, `google_adsense_script_status`, `cookie_consent_status`, `google_recaptcha_site_key`, `google_recaptcha_status`, `banner_about`, `banner_service`, `banner_service_detail`, `banner_blog`, `banner_blog_detail`, `banner_category`, `banner_senior_detail`, `banner_board_detail`, `banner_developer_detail`, `banner_project`, `banner_project_detail`, `banner_team_member`, `banner_team_member_detail`, `banner_photo_gallery`, `banner_video_gallery`, `banner_faq`, `banner_product`, `banner_product_detail`, `banner_contact`, `banner_search`, `banner_cart`, `banner_checkout`, `banner_login`, `banner_registration`, `banner_forget_password`, `banner_customer_panel`, `banner_career`, `banner_branch`, `banner_senior`, `banner_board`, `banner_job`, `banner_job_application`, `banner_term`, `banner_privacy`, `banner_document`, `banner_ceo`, `authorized_share`, `per_value`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'favicon.png', 'login_bg.png', 'demo@example.com', '+42222222222', 'Show', 'Show', 'Show', 'Show', 5, '1B82D1', '081A3F', 'Important Links', 'Useful Links', 'Contact Information', 'Social Media', 'your Street address', 'demo@example.com', '+422222222222', '©Copyright 2024. your company All Rights Reserved.', 'preloader.gif', 'Show', 'Show', '531240162', 'Show', '<script type=\"text/javascript\">\n                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\n                (function(){\n                    var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\n                    s1.async=true;\n                    s1.src=\'https://embed.tawk.to/5a7c31ded7591465c7077c48/default\';\n                    s1.charset=\'UTF-8\';\n                    s1.setAttribute(\'crossorigin\',\'*\');\n                    s0.parentNode.insertBefore(s1,s0);\n                })();\n            </script>', 'Show', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3527244353235156\" crossorigin=\"anonymous\"></script>', 'Show', 'Show', '6LfiFKofAAAAAG5so9XN9uQVuws4zl31fjt94tuH', 'Hide', 'banner_about.png', 'banner_service.png', 'banner_service_detail.png', 'banner_blog.png', 'banner_blog_detail.png', 'banner_category.png', 'banner_senior_detail.png', 'banner_board_detail.png', 'banner_developer_detail.png', 'banner_project.png', 'banner_project_detail.jpeg', 'banner_team_member.png', 'banner_team_member_detail.jpeg', 'banner_photo_gallery.jpeg', 'banner_video_gallery.png', 'banner_faq.jpeg', 'banner_product.jpeg', 'banner_product_detail.jpeg', 'banner_contact.png', 'banner_search.jpeg', 'banner_cart.jpeg', 'banner_checkout.jpeg', 'banner_login.jpeg', 'banner_registration.jpeg', 'banner_forget_password.png', 'banner_customer_panel.jpeg', 'banner_career.png', 'banner_branch.png', 'banner_senior.png', 'banner_board.png', 'banner_job.png', 'banner_job_application.png', 'banner_term.png', 'banner_privacy.png', 'banner_document.png', 'banner_ceo.png', 1200000000, 1000, '2024-04-19 02:16:41', '2024-04-20 23:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_title` text NOT NULL,
  `job_slug` text DEFAULT NULL,
  `job_description_short` text NOT NULL,
  `job_responsibility` text NOT NULL,
  `job_education` text DEFAULT NULL,
  `job_experience` text DEFAULT NULL,
  `job_additional_requirement` text DEFAULT NULL,
  `job_benefit` text DEFAULT NULL,
  `job_deadline` text NOT NULL,
  `job_vacancy` text NOT NULL,
  `job_company_name` text DEFAULT NULL,
  `job_location` text NOT NULL,
  `job_type` text DEFAULT NULL,
  `job_salary` text NOT NULL,
  `job_order` int(11) NOT NULL DEFAULT 0,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobses`
--

CREATE TABLE `jobses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `applicant_first_name` text NOT NULL,
  `applicant_last_name` text NOT NULL,
  `applicant_email` text NOT NULL,
  `applicant_phone` text NOT NULL,
  `applicant_country` text NOT NULL,
  `applicant_state` text NOT NULL,
  `applicant_street` text NOT NULL,
  `applicant_city` text NOT NULL,
  `applicant_zip_code` text NOT NULL,
  `applicant_expected_salary` text NOT NULL,
  `applicant_cover_letter` text NOT NULL,
  `applicant_cv` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management_categories`
--

CREATE TABLE `management_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_categories`
--

INSERT INTO `management_categories` (`id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'CEO', 'ceo', 'ceo', 'ceo', '2024-04-19 02:19:10', '2024-04-19 02:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(2, 'About', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(3, 'Services', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(4, 'Shop', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(5, 'Blog', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(6, 'Project', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(7, 'FAQ', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(8, 'Team Members', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(9, 'Contact', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(10, 'Career', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(11, 'Photo Gallery', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(12, 'Video Gallery', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(13, 'Terms and Conditions', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(14, 'Privacy Policy', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(15, 'Branch', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(16, 'Senior', 'Show', '2023-02-13 19:54:34', '2024-04-19 02:16:41'),
(17, 'Board', 'Show', '2023-02-13 19:55:04', '2024-04-19 02:16:41'),
(18, 'Developer', 'Show', '2023-02-13 19:55:27', '2024-04-19 02:16:41'),
(19, 'Document', 'Show', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobses_table', 1),
(4, '2024_04_18_111228_create_roles_table', 1),
(5, '2024_04_18_111758_create_ai_chats_table', 1),
(6, '2024_04_18_111933_create_categories_table', 1),
(7, '2024_04_18_112630_create_board_directors_table', 1),
(8, '2024_04_18_112807_create_branches_table', 1),
(9, '2024_04_18_112957_create_blogs_table', 1),
(10, '2024_04_18_113041_create_comments_table', 1),
(11, '2024_04_18_113314_create_counters_table', 1),
(12, '2024_04_18_113446_create_coupons_table', 1),
(13, '2024_04_18_113612_create_customers_table', 1),
(14, '2024_04_18_113744_create_developers_table', 1),
(15, '2024_04_18_114053_create_documents_table', 1),
(16, '2024_04_18_114204_create_dynamic_pages_table', 1),
(17, '2024_04_18_114522_create_email_templates_table', 1),
(18, '2024_04_18_114941_create_faqs_table', 1),
(19, '2024_04_18_115054_create_folders_table', 1),
(20, '2024_04_18_115152_create_files_table', 1),
(21, '2024_04_18_115310_create_footer_columns_table', 1),
(22, '2024_04_18_115446_create_general_settings_table', 1),
(23, '2024_04_18_115555_create_jobs_table', 1),
(24, '2024_04_18_115651_create_vaccants_table', 1),
(25, '2024_04_18_115857_create_job_applications_table', 1),
(26, '2024_04_18_120035_create_job_categories_table', 1),
(27, '2024_04_18_120122_create_languages_table', 1),
(28, '2024_04_18_120243_create_management_categories_table', 1),
(29, '2024_04_18_120404_create_menus_table', 1),
(30, '2024_04_18_120515_create_orders_table', 1),
(31, '2024_04_18_120656_create_products_table', 1),
(32, '2024_04_18_120811_create_page_about_items_table', 1),
(33, '2024_04_18_121027_create_page_board_items_table', 1),
(34, '2024_04_18_121151_create_page_branch_items_table', 1),
(35, '2024_04_18_121257_create_page_career_items_table', 1),
(36, '2024_04_18_121405_create_page_contact_items_table', 1),
(37, '2024_04_18_121508_create_page_developer_items_table', 1),
(38, '2024_04_18_121617_create_page_document_items_table', 1),
(39, '2024_04_18_121727_create_page_faq_items_table', 1),
(40, '2024_04_18_121838_create_page_home_items_table', 1),
(41, '2024_04_18_122016_create_page_other_items_table', 1),
(42, '2024_04_18_122121_create_page_photo_gallery_items_table', 1),
(43, '2024_04_18_122241_create_page_privacy_items_table', 1),
(44, '2024_04_18_122355_create_page_project_items_table', 1),
(45, '2024_04_18_122459_create_page_senior_items_table', 1),
(46, '2024_04_18_122555_create_page_service_items_table', 1),
(47, '2024_04_18_122637_create_page_shop_items_table', 1),
(48, '2024_04_18_122737_create_page_team_items_table', 1),
(49, '2024_04_18_122901_create_page_term_items_table', 1),
(50, '2024_04_18_123014_create_page_video_gallery_items_table', 1),
(51, '2024_04_18_123149_create_partners_table', 1),
(52, '2024_04_18_123224_create_password_resets_table', 1),
(53, '2024_04_18_123417_create_role_pages_table', 1),
(54, '2024_04_18_123531_create_photos_table', 1),
(55, '2024_04_18_123634_create_order_details_table', 1),
(56, '2024_04_18_123752_create_product_categories_table', 1),
(57, '2024_04_18_123820_create_projects_table', 1),
(58, '2024_04_18_123947_create_project_photos_table', 1),
(59, '2024_04_18_124056_create_admins_table', 1),
(60, '2024_04_18_124158_create_permissions_table', 1),
(61, '2024_04_18_124301_create_role_permissions_table', 1),
(62, '2024_04_18_124406_create_senior_managements_table', 1),
(63, '2024_04_18_124753_create_services_table', 1),
(64, '2024_04_18_125411_create_setup_guides_table', 1),
(65, '2024_04_18_125517_create_shippings_table', 1),
(66, '2024_04_18_125619_create_sliders_table', 1),
(67, '2024_04_18_125644_create_social_media_items_table', 1),
(68, '2024_04_18_125836_create_subscribers_table', 1),
(69, '2024_04_18_125937_create_team_members_table', 1),
(70, '2024_04_18_130046_create_testimonials_table', 1),
(71, '2024_04_18_130148_create_translations_table', 1),
(72, '2024_04_18_130358_create_videos_table', 1),
(73, '2024_04_18_130426_create_why_choose_items_table', 1),
(74, '2024_04_18_152450_create_page_blog_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_type` text NOT NULL,
  `billing_name` text NOT NULL,
  `billing_email` text NOT NULL,
  `billing_phone` text NOT NULL,
  `billing_country` text NOT NULL,
  `billing_address` text NOT NULL,
  `billing_state` text NOT NULL,
  `billing_city` text NOT NULL,
  `billing_zip` text NOT NULL,
  `shipping_name` text NOT NULL,
  `shipping_email` text NOT NULL,
  `shipping_phone` text NOT NULL,
  `shipping_country` text NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_state` text NOT NULL,
  `shipping_city` text NOT NULL,
  `shipping_zip` text NOT NULL,
  `order_note` text DEFAULT NULL,
  `txnid` text NOT NULL,
  `shipping_cost` text DEFAULT NULL,
  `coupon_code` text DEFAULT NULL,
  `coupon_discount` text DEFAULT NULL,
  `paid_amount` text NOT NULL,
  `fee_amount` text NOT NULL,
  `net_amount` text NOT NULL,
  `card_last4` text DEFAULT NULL,
  `card_exp_month` text DEFAULT NULL,
  `card_exp_year` text DEFAULT NULL,
  `payment_method` text NOT NULL,
  `payment_status` text NOT NULL,
  `order_no` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text NOT NULL,
  `product_price` text NOT NULL,
  `product_qty` text NOT NULL,
  `payment_status` text NOT NULL,
  `order_no` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_about_items`
--

CREATE TABLE `page_about_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `about_us_photo` varchar(255) DEFAULT NULL,
  `vision_photo` varchar(255) DEFAULT NULL,
  `mession_photo` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mession` text DEFAULT NULL,
  `objective` text DEFAULT NULL,
  `core_value` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_about_items`
--

INSERT INTO `page_about_items` (`id`, `name`, `about_us_photo`, `vision_photo`, `mession_photo`, `detail`, `vision`, `mession`, `objective`, `core_value`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about_us_image-.png', 'vision_image-.png', 'mession_image-.png', 'Dummy text', 'Some Dummy data', 'another dummy data', 'Dummy data also', 'Show', 'meta title', 'meta description', '2024-04-18 13:37:54', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_blog_items`
--

CREATE TABLE `page_blog_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_blog_items`
--

INSERT INTO `page_blog_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Blog', NULL, 'Show', 'CMSMULTI blog and news', 'CMSMULTI meta description', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_board_items`
--

CREATE TABLE `page_board_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_board_items`
--

INSERT INTO `page_board_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Board', NULL, 'Show', 'CMSMULTI meta title', 'CMSMULTI meta data', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_branch_items`
--

CREATE TABLE `page_branch_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_branch_items`
--

INSERT INTO `page_branch_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Branch', NULL, 'Show', 'CMSMULTI branches', 'CMSMULTI is a leading technological company based in Ethiopia.', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_career_items`
--

CREATE TABLE `page_career_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_career_items`
--

INSERT INTO `page_career_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Career', NULL, 'Show', 'CMSMULTI meta title', 'CMSMULTI', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_contact_items`
--

CREATE TABLE `page_contact_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `contact_address` text DEFAULT NULL,
  `contact_email` text DEFAULT NULL,
  `contact_phone` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contact_items`
--

INSERT INTO `page_contact_items` (`id`, `name`, `detail`, `status`, `contact_address`, `contact_email`, `contact_phone`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', '<p><br></p>', 'Show', 'Your address City\r\nYour Country', 'demo@example.com\r\nsupport@example.com', 'Office 1: +422222222222\r\nOffice 2: +433333333333', 'CMSMULTI meta title', 'CMSMULTI meta descrption', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_developer_items`
--

CREATE TABLE `page_developer_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_developer_items`
--

INSERT INTO `page_developer_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Developer', NULL, NULL, 'developer', 'web developer, system administrator, system developer, networking', '2024-04-19 02:16:41', '2024-04-19 03:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `page_document_items`
--

CREATE TABLE `page_document_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_document_items`
--

INSERT INTO `page_document_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Document', NULL, 'Show', 'CMSMULTI meta title', 'CMSMULTI meta description', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_faq_items`
--

CREATE TABLE `page_faq_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_faq_items`
--

INSERT INTO `page_faq_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'FAQ', '', 'Show', 'FAQ', 'FAQ', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_home_items`
--

CREATE TABLE `page_home_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seo_title` text NOT NULL,
  `seo_meta_description` text NOT NULL,
  `why_choose_title` text NOT NULL,
  `why_choose_subtitle` text NOT NULL,
  `why_choose_status` text NOT NULL,
  `special_title` text NOT NULL,
  `special_subtitle` text NOT NULL,
  `special_content` text NOT NULL,
  `special_btn_text` text NOT NULL,
  `special_btn_url` text NOT NULL,
  `special_yt_video` text NOT NULL,
  `special_bg` text NOT NULL,
  `special_video_bg` text NOT NULL,
  `special_status` text NOT NULL,
  `service_title` text NOT NULL,
  `service_subtitle` text NOT NULL,
  `service_status` text NOT NULL,
  `testimonial_title` text NOT NULL,
  `testimonial_subtitle` text NOT NULL,
  `testimonial_status` text NOT NULL,
  `testimonial_bg` text NOT NULL,
  `project_title` text NOT NULL,
  `project_subtitle` text NOT NULL,
  `project_status` text NOT NULL,
  `team_member_title` text NOT NULL,
  `team_member_subtitle` text NOT NULL,
  `team_member_status` text NOT NULL,
  `appointment_title` text NOT NULL,
  `appointment_text` text NOT NULL,
  `appointment_btn_text` text NOT NULL,
  `appointment_btn_url` text NOT NULL,
  `appointment_bg` text NOT NULL,
  `appointment_status` text NOT NULL,
  `latest_blog_title` text NOT NULL,
  `latest_blog_subtitle` text NOT NULL,
  `latest_blog_status` text NOT NULL,
  `newsletter_title` text NOT NULL,
  `newsletter_text` text NOT NULL,
  `newsletter_bg` text NOT NULL,
  `newsletter_status` text NOT NULL,
  `partner_title` text NOT NULL,
  `partner_subtitle` text NOT NULL,
  `partner_status` text NOT NULL,
  `senior_title` text DEFAULT NULL,
  `senior_subtitle` text DEFAULT NULL,
  `senior_status` text NOT NULL,
  `board_title` text NOT NULL,
  `board_subtitle` text NOT NULL,
  `board_status` text NOT NULL,
  `document_title` text NOT NULL,
  `document_subtitle` text NOT NULL,
  `document_status` text NOT NULL,
  `about_us_title` text DEFAULT NULL,
  `about_us_subtitle` text DEFAULT NULL,
  `about_us_status` text DEFAULT NULL,
  `why_choose_bg` text NOT NULL,
  `counter_title` text NOT NULL,
  `counter_subtitle` text NOT NULL,
  `counter_status` text NOT NULL,
  `counter_bg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_home_items`
--

INSERT INTO `page_home_items` (`id`, `seo_title`, `seo_meta_description`, `why_choose_title`, `why_choose_subtitle`, `why_choose_status`, `special_title`, `special_subtitle`, `special_content`, `special_btn_text`, `special_btn_url`, `special_yt_video`, `special_bg`, `special_video_bg`, `special_status`, `service_title`, `service_subtitle`, `service_status`, `testimonial_title`, `testimonial_subtitle`, `testimonial_status`, `testimonial_bg`, `project_title`, `project_subtitle`, `project_status`, `team_member_title`, `team_member_subtitle`, `team_member_status`, `appointment_title`, `appointment_text`, `appointment_btn_text`, `appointment_btn_url`, `appointment_bg`, `appointment_status`, `latest_blog_title`, `latest_blog_subtitle`, `latest_blog_status`, `newsletter_title`, `newsletter_text`, `newsletter_bg`, `newsletter_status`, `partner_title`, `partner_subtitle`, `partner_status`, `senior_title`, `senior_subtitle`, `senior_status`, `board_title`, `board_subtitle`, `board_status`, `document_title`, `document_subtitle`, `document_status`, `about_us_title`, `about_us_subtitle`, `about_us_status`, `why_choose_bg`, `counter_title`, `counter_subtitle`, `counter_status`, `counter_bg`, `created_at`, `updated_at`) VALUES
(1, 'CMSMULTI', 'your meta description', 'Why Choose Us', 'You should choose our product for the following reasons', 'Show', 'Welcome to our website', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \\r\\n\\r\\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read More', '#', 'UreGlSvnb1A', 'special_bg.png', 'special_video_bg.png', 'Show', 'Our Services', 'Our team always provides quality services to our valuable clients', 'Show', 'Testimonial', 'What our clients tell about us', 'Show', 'testimonial_bg.png', 'Our Projects', 'See all our completed successful projects here', 'Show', 'Team Members', 'See all our expert team members who are ready to help you always', 'Show', 'Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Make An Appointment', '#', 'appointment_bg.png', 'Show', 'Latest Blog', 'See all the latest blog about our activity from here', 'Show', 'Newsletter', 'TO GET FREE NOTIFICATIONS SUBSCRIBE TO OUR NEWSLETTER', 'newsletter_bg.jpg', 'Show', 'Our Partners', 'See all our Partners', 'Show', 'Senior Management', 'See all our Senior Management', 'Show', 'Board of Directors', 'Lorem Ipsum has been the industry\'s standard', 'Show', 'Public Documents & Files', 'See All Document', 'Show', 'About Us', 'About our Business', 'Show', '', 'counter', 'counter section', 'Show', 'counter_bg.png', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_other_items`
--

CREATE TABLE `page_other_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seo_title` text NOT NULL,
  `seo_meta_description` text NOT NULL,
  `page_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_other_items`
--

INSERT INTO `page_other_items` (`id`, `seo_title`, `seo_meta_description`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'Search', 'Search Page Description', 'Search Page', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(2, 'Cart', 'Cart Page Description', 'Cart Page', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(3, 'Checkout', 'Checkout Page Description', 'Checkout Page', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(4, 'Login', 'Login Page Description', 'Login Page', '2024-04-19 02:16:41', '2020-12-23 04:19:05'),
(5, 'Registration', 'Registration Page Description', 'Registration Page', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(6, 'Forget Password', 'Forget Password Page Description', 'Forget Password Page', '2024-04-19 02:16:41', '2020-12-23 04:19:07'),
(7, 'Customer Panel', 'Customer Page Description', 'Customer Panel Pages', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(8, 'Payment', 'Payment Page Description', 'Payment Page', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_photo_gallery_items`
--

CREATE TABLE `page_photo_gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_photo_gallery_items`
--

INSERT INTO `page_photo_gallery_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Photo Gallery', '', 'Show', 'Photo Gallery', 'Photo Gallery', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_privacy_items`
--

CREATE TABLE `page_privacy_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_privacy_items`
--

INSERT INTO `page_privacy_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', 'privacy policy content', 'Show', 'meta Privacy Policy', 'meta Privacy Policy', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_project_items`
--

CREATE TABLE `page_project_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_project_items`
--

INSERT INTO `page_project_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Projects', '', 'Show', 'Projects', 'Project Page Meta Description', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_senior_items`
--

CREATE TABLE `page_senior_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_senior_items`
--

INSERT INTO `page_senior_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Senior', NULL, 'Show', 'CMSMULTI senior management', 'CMSMULTI senior managements', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_service_items`
--

CREATE TABLE `page_service_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_service_items`
--

INSERT INTO `page_service_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Services', NULL, 'Show', 'CMSMULTI Services', 'CMSMULTI is a leading technological company based in Ethiopia.', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_shop_items`
--

CREATE TABLE `page_shop_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_shop_items`
--

INSERT INTO `page_shop_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Shop', NULL, 'Show', 'meta title Shop', 'CMSMULTI data', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_team_items`
--

CREATE TABLE `page_team_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_team_items`
--

INSERT INTO `page_team_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Team Member', '', 'Show', 'Team Member', 'Team Member', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_term_items`
--

CREATE TABLE `page_term_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_term_items`
--

INSERT INTO `page_term_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', 'terms and conditions goes here', 'Show', 'meta terms and conditions', 'meta terms and conditions', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_video_gallery_items`
--

CREATE TABLE `page_video_gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_video_gallery_items`
--

INSERT INTO `page_video_gallery_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Video Gallery', '', 'Show', 'Video Gallery', 'Video Gallery', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_name` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `partner_url` varchar(255) DEFAULT NULL,
  `partner_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_name`, `status`, `partner_url`, `partner_photo`, `created_at`, `updated_at`) VALUES
(4, 'Lorm ipsum', NULL, 'https://devethio.com', 'partner-4.jpg', '2024-04-20 22:30:47', '2024-04-20 22:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_page_id` bigint(20) UNSIGNED NOT NULL,
  `access_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_name` text NOT NULL,
  `photo_caption` text DEFAULT NULL,
  `photo_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `product_name` text NOT NULL,
  `product_slug` text DEFAULT NULL,
  `product_old_price` text DEFAULT NULL,
  `product_current_price` text NOT NULL,
  `product_stock` smallint(6) NOT NULL,
  `product_content` text NOT NULL,
  `product_content_short` text NOT NULL,
  `product_return_policy` text DEFAULT NULL,
  `product_featured_photo` text NOT NULL,
  `product_order` smallint(6) NOT NULL DEFAULT 0,
  `product_status` text NOT NULL,
  `seo_title` text NOT NULL,
  `seo_meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Computer', 'computer', 'computer title', 'computer meta', '2024-04-20 21:14:07', '2024-04-20 21:14:07'),
(2, 1, 'HPE', 'hpe', 'Hpe', 'hpe', '2024-04-20 21:47:45', '2024-04-20 21:58:26'),
(3, 1, 'MAC', 'mac', 'mac', NULL, '2024-04-20 22:10:29', '2024-04-20 22:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` text NOT NULL,
  `project_slug` text DEFAULT NULL,
  `project_content` text DEFAULT NULL,
  `project_content_short` text DEFAULT NULL,
  `project_start_date` text DEFAULT NULL,
  `project_end_date` text DEFAULT NULL,
  `project_client_name` text DEFAULT NULL,
  `project_client_company` text DEFAULT NULL,
  `project_client_comment` text DEFAULT NULL,
  `project_video` text DEFAULT NULL,
  `project_featured_photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_photos`
--

CREATE TABLE `project_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `project_photo` text NOT NULL,
  `project_photo_caption` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-04-19 02:16:39', '2024-04-19 02:16:39'),
(4, 'Manager', '2024-04-19 02:16:39', '2024-04-19 02:16:39'),
(5, 'Editor', '2024-04-19 02:16:39', '2024-04-19 02:16:39'),
(7, 'Human Resource', '2024-04-19 02:16:39', '2024-04-19 02:16:39'),
(8, 'Operation', '2024-04-19 02:16:39', '2024-04-19 02:16:39'),
(9, 'test', '2024-04-19 02:16:39', '2024-04-19 02:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_pages`
--

CREATE TABLE `role_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_pages`
--

INSERT INTO `role_pages` (`id`, `page_title`, `created_at`, `updated_at`) VALUES
(1, 'General Settings', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(2, 'Page Settings', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(3, 'Footer Columns', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(4, 'Sliders', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(5, 'Blog Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(6, 'Dynamic Pages', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(7, 'Admin User Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(8, 'Menu Manage', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(9, 'Project', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(10, 'Career Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(11, 'Photo Gallery', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(12, 'Video Gallery', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(13, 'Product Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(14, 'Order Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(15, 'Customer Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(16, 'Why Choose Us', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(17, 'Service', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(18, 'Testimonial', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(19, 'Team Member', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(20, 'FAQ', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(21, 'Email Template', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(22, 'Subscriber Section', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(23, 'Social Media', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(24, 'Branch', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(25, 'Folders', '2023-02-15 18:22:35', '2024-04-19 02:16:41'),
(26, 'Counter', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(27, 'permissions', '2024-04-19 02:16:41', '2024-04-19 02:16:41'),
(29, 'sharesubscribe', '2024-04-19 02:16:41', '2024-04-19 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_page_id` bigint(20) UNSIGNED NOT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `access_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senior_managements`
--

CREATE TABLE `senior_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `ceo_message` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hbzv0BohpleMxbZiYE6Yj0NivAQK9v7eozNkI5Hw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEp3R0w4MjlndmNaQ1cxcHhtbjg3TlFoaTJzT1UweWxqMWE2Z2VkMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYTExL2FkbWluL3R3by1mYWN0b3IiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713615924);

-- --------------------------------------------------------

--
-- Table structure for table `setup_guides`
--

CREATE TABLE `setup_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `action_route` varchar(255) NOT NULL,
  `action_label` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` text NOT NULL,
  `shipping_text` text NOT NULL,
  `shipping_cost` varchar(10) NOT NULL,
  `shipping_order` smallint(6) NOT NULL DEFAULT 0,
  `shipping_status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_heading` varchar(255) DEFAULT NULL,
  `slider_text` text DEFAULT NULL,
  `slider_button_text` varchar(255) NOT NULL,
  `slider_button_url` varchar(255) NOT NULL,
  `slider_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_heading`, `slider_text`, `slider_button_text`, `slider_button_url`, `slider_photo`, `created_at`, `updated_at`) VALUES
(1, 'We are number one in creative business', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', 'Read More', '#', 'slider-2.jpg', '2020-11-20 06:21:45', '2024-01-12 21:01:24'),
(2, 'We work for your success in real', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', 'Read More', '#', 'slider-3.jpg', '2020-11-20 06:22:04', '2024-01-12 21:02:28'),
(3, 'Why Choose Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read More!', '#', 'slider-4.jpg', '2022-04-14 00:09:47', '2024-01-12 21:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_items`
--

CREATE TABLE `social_media_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_url` text NOT NULL,
  `social_icon` text NOT NULL,
  `social_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media_items`
--

INSERT INTO `social_media_items` (`id`, `social_url`, `social_icon`, `social_order`, `created_at`, `updated_at`) VALUES
(1, '#', 'fab fa-twitter', 2, '2020-11-25 02:54:56', '2020-11-25 03:07:08'),
(2, '#', 'fab fa-facebook-f', 1, '2020-11-25 02:56:23', '2020-11-25 11:04:07'),
(3, '#', 'fab fa-linkedin-in', 3, '2020-11-25 03:07:28', '2024-01-12 20:58:40'),
(4, '#', 'fab fa-pinterest-p', 4, '2020-11-25 03:07:41', '2020-11-25 03:08:17'),
(5, '#', 'fab fa-instagram', 5, '2022-04-13 19:32:10', '2022-04-13 19:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subs_email` text NOT NULL,
  `subs_token` text DEFAULT NULL,
  `subs_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `degree` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `video_youtube` text DEFAULT NULL,
  `photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `photo` text NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `group` varchar(255) DEFAULT NULL,
  `key` text NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `vaccants`
--

CREATE TABLE `vaccants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_title` text NOT NULL,
  `job_slug` text DEFAULT NULL,
  `job_description_short` text NOT NULL,
  `job_responsibility` text NOT NULL,
  `job_education` text DEFAULT NULL,
  `job_experience` text DEFAULT NULL,
  `job_additional_requirement` text DEFAULT NULL,
  `job_benefit` text DEFAULT NULL,
  `job_deadline` text NOT NULL,
  `job_vacancy` text NOT NULL,
  `job_company_name` text DEFAULT NULL,
  `job_location` text NOT NULL,
  `job_type` text DEFAULT NULL,
  `job_salary` text NOT NULL,
  `job_order` int(11) NOT NULL DEFAULT 0,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_youtube` text NOT NULL,
  `video_caption` text DEFAULT NULL,
  `video_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_items`
--

CREATE TABLE `why_choose_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` text DEFAULT NULL,
  `photo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_items`
--

INSERT INTO `why_choose_items` (`id`, `name`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Quick Support', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-1.svg', '2020-11-23 07:10:36', '2023-12-30 16:36:59'),
(2, 'Quality Service', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-2.svg', '2020-11-23 07:12:59', '2023-12-30 16:37:12'),
(3, 'Modern Technology', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-3.svg', '2020-11-23 07:13:16', '2023-12-30 16:37:29'),
(4, 'Best Communication', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-4.svg', '2020-11-23 07:13:32', '2023-12-30 16:37:44'),
(5, '100% Satisfaction', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-5.svg', '2020-11-23 07:13:47', '2023-12-30 16:37:58'),
(6, 'Security Protection', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-6.svg', '2020-11-23 07:14:10', '2023-12-30 16:38:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indexes for table `ai_chats`
--
ALTER TABLE `ai_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `board_directors`
--
ALTER TABLE `board_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_folder_id_foreign` (`folder_id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folders_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `footer_columns`
--
ALTER TABLE `footer_columns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`);

--
-- Indexes for table `jobses`
--
ALTER TABLE `jobses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobses_queue_index` (`queue`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applications_job_id_foreign` (`job_id`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_categories`
--
ALTER TABLE `management_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `page_about_items`
--
ALTER TABLE `page_about_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_blog_items`
--
ALTER TABLE `page_blog_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_board_items`
--
ALTER TABLE `page_board_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_branch_items`
--
ALTER TABLE `page_branch_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_career_items`
--
ALTER TABLE `page_career_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contact_items`
--
ALTER TABLE `page_contact_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_developer_items`
--
ALTER TABLE `page_developer_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_document_items`
--
ALTER TABLE `page_document_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_faq_items`
--
ALTER TABLE `page_faq_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_home_items`
--
ALTER TABLE `page_home_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_other_items`
--
ALTER TABLE `page_other_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_photo_gallery_items`
--
ALTER TABLE `page_photo_gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_privacy_items`
--
ALTER TABLE `page_privacy_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_project_items`
--
ALTER TABLE `page_project_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_senior_items`
--
ALTER TABLE `page_senior_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_service_items`
--
ALTER TABLE `page_service_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_shop_items`
--
ALTER TABLE `page_shop_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_team_items`
--
ALTER TABLE `page_team_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_term_items`
--
ALTER TABLE `page_term_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_video_gallery_items`
--
ALTER TABLE `page_video_gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`),
  ADD KEY `permissions_role_page_id_foreign` (`role_page_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_parent_id_foreign` (`parent_id`) USING BTREE;

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_photos`
--
ALTER TABLE `project_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_photos_project_id_foreign` (`project_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_pages`
--
ALTER TABLE `role_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permissions_role_id_foreign` (`role_id`),
  ADD KEY `role_permissions_role_page_id_foreign` (`role_page_id`);

--
-- Indexes for table `senior_managements`
--
ALTER TABLE `senior_managements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `senior_managements_category_id_foreign` (`category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setup_guides`
--
ALTER TABLE `setup_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_items`
--
ALTER TABLE `social_media_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccants`
--
ALTER TABLE `vaccants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vaccants_category_id_foreign` (`category_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_items`
--
ALTER TABLE `why_choose_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ai_chats`
--
ALTER TABLE `ai_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `board_directors`
--
ALTER TABLE `board_directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_columns`
--
ALTER TABLE `footer_columns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobses`
--
ALTER TABLE `jobses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management_categories`
--
ALTER TABLE `management_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_about_items`
--
ALTER TABLE `page_about_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_blog_items`
--
ALTER TABLE `page_blog_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_board_items`
--
ALTER TABLE `page_board_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_branch_items`
--
ALTER TABLE `page_branch_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_career_items`
--
ALTER TABLE `page_career_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_contact_items`
--
ALTER TABLE `page_contact_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_developer_items`
--
ALTER TABLE `page_developer_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_document_items`
--
ALTER TABLE `page_document_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_faq_items`
--
ALTER TABLE `page_faq_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_home_items`
--
ALTER TABLE `page_home_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_other_items`
--
ALTER TABLE `page_other_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_photo_gallery_items`
--
ALTER TABLE `page_photo_gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_privacy_items`
--
ALTER TABLE `page_privacy_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_project_items`
--
ALTER TABLE `page_project_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_senior_items`
--
ALTER TABLE `page_senior_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_service_items`
--
ALTER TABLE `page_service_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_shop_items`
--
ALTER TABLE `page_shop_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_team_items`
--
ALTER TABLE `page_team_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_term_items`
--
ALTER TABLE `page_term_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_video_gallery_items`
--
ALTER TABLE `page_video_gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_photos`
--
ALTER TABLE `project_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_pages`
--
ALTER TABLE `role_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `senior_managements`
--
ALTER TABLE `senior_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setup_guides`
--
ALTER TABLE `setup_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media_items`
--
ALTER TABLE `social_media_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccants`
--
ALTER TABLE `vaccants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_choose_items`
--
ALTER TABLE `why_choose_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `folders`
--
ALTER TABLE `folders`
  ADD CONSTRAINT `folders_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permissions_role_page_id_foreign` FOREIGN KEY (`role_page_id`) REFERENCES `role_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_photos`
--
ALTER TABLE `project_photos`
  ADD CONSTRAINT `project_photos_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_permissions_role_page_id_foreign` FOREIGN KEY (`role_page_id`) REFERENCES `role_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `senior_managements`
--
ALTER TABLE `senior_managements`
  ADD CONSTRAINT `senior_managements_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `management_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vaccants`
--
ALTER TABLE `vaccants`
  ADD CONSTRAINT `vaccants_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
