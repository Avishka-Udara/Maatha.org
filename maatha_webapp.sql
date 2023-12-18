-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 09:10 PM
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
-- Database: `maatha_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `language` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `detail`, `language`, `image`, `created_at`, `updated_at`) VALUES
(1, 'TatapOOtan', 'Kanjeb ilobilov la titur tiw hajzolav ta wipapuc cidec ij wipap ujaotjim avudi dop talim ebigof. Ci uweaka ivitamahe bare wukos si ba ipjabe wufwogo idse ri wonwun. Nudog rovnidzoz hubuha win arevru iwe sacoje zis kojodun huh fujizwoj', 'English', '20231005210442.jpg', '2023-10-05 15:34:42', '2023-10-05 15:34:42'),
(2, 'ටයෙටෙය‌ෙ ඉටෙයය වයවන මනවන වපබප', 'වයනවනයපබපඉපම පයනසද වය චදසච නකපක ලපල බයනවයවන චදසචදන කත තක', 'Sinhala', '20231005210541.jpg', '2023-10-05 15:35:41', '2023-10-05 15:35:41'),
(3, 'லோரெம் இப்சம் உரை என்றால் என்ன, அதன் அர்த்தம் என்ன?', 'இணையம் முழுவதும் உங்கள் பயணங்களில் \"லோரெம் இப்சம்\" உரையை நீங்கள் பார்த்திருக்க வாய்ப்புகள் உள்ளன. இது பெரும்பாலும் வேர்ட்பிரஸ் தீம்கள் மற்றும் பப்ளிஷிங் மோக்கப்கள் போன்ற கிராஃபிக் டிசைன் பொருட்களில் தோன்றும்.\r\n\r\nஇந்த உரை முட்டாள்தனம் போல் தெரிகிறது, அது ஏன் மிகவும் பொதுவானது? lorem ipsum நகல் எதற்காகப் பயன்படுத்தப்படுகிறது, ஆங்கிலத்தில் lorem ipsum என்றால் என்ன, இந்த உரையை நீங்களே எளிதாக உருவாக்குவது எப்படி என்பதைப் பார்ப்போம்.\r\nலோரெம் இப்சம் என்றால் என்ன?\r\n\r\nLorem ipsum என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல். இறுதி தயாரிப்பில் உண்மையான வார்த்தைகள் எப்படி இருக்கும் என்பது பற்றிய யோசனையை இது அடிப்படையில் முட்டாள்தனமான உரை.', 'Tamil', '20231005210747.jpg', '2023-10-05 15:37:47', '2023-10-05 15:37:47'),
(4, 'என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல்.', 'ஒரு மைக்ரோசாஃப்ட் வேர்ட் டெம்ப்ளேட் தளமானது அதன் மொக்கப்களில் ஆங்கிலம் அல்லது படைப்பாளரின் தாய்மொழியில் உள்ள சில பத்திகளுக்குப் பதிலாக, லோரெம் இப்சம் உரையைப் பயன்படுத்துவதை ஏன் தேர்வுசெய்கிறது என்று நீங்கள் ஆச்சரியப்படலாம். ஒரு பழைய புத்தகத்திலிருந்து ஒரு பக்கத்தை அல்லது பிரபலமான பாடலின் வரிகளை ஏன் நகலெடுத்து ஒட்டக்கூடாது?\r\n\r\nலோரெம் இப்சம் உரையைப் பயன்படுத்துவதற்கான முக்கியக் காரணம், அது உண்மையான உரையில் கவனம் செலுத்துவதைத் தடுக்கிறது. யாராவது ஒரு டெம்ப்ளேட்டை உருவாக்கி, அதைப் பற்றிய கருத்தைக் கேட்கும்போது, ​​அதை மதிப்பாய்வு செய்பவர்கள் அந்த உரையில் என்ன சொல்கிறீர்கள் என்று திசை திருப்புவதை அவர்கள் விரும்பவில்லை. உரையின் தளவமைப்பில் கவனம் செலுத்துவதற்குப் பதிலாக, மக்கள் எழுத்துப் பிழைகளைக் கண்டறிய வார்த்தைகளைப் படிக்கலாம் அல்லது பாடல் வரிகளுடன் சேர்ந்து பாடலாம்.\r\n\r\nகூடுதலாக, லோரெம் இப்சம் பொதுவாக எழுதப்பட்ட உரையை ஒத்திருக்கிறது. அதே சில வார்த்தைகளை நகலெடுத்து ஒட்டுவது கடிதங்களின் சீரற்ற விநியோகத்தை விளைவிக்கும். லோரெம் இப்சம் உரையுடன், எழுத்துரு மற்றும் பக்க தளவமைப்பு கிட்டத்தட்ட முழு யதார்த்தமான நகலுடன் எவ்வாறு தோற்றமளிக்கிறது என்பதில் கவனம் செலுத்தலாம்.\r\n\r\nஅந்த வகையில், இது \"விரைவான பழுப்பு நரி சோம்பேறி நாய் மீது குதிக்கிறது\" என்ற வாக்கியத்தைப் போன்றது. எழுத்துருக்களை முன்னோட்டமிடும்போது விண்டோஸ் இதைப் பயன்படுத்துகிறது, ஏனெனில் இது எழுத்துக்களின் அனைத்து எழுத்துக்களையும் பயன்படுத்துகிறது.', 'Tamil', '20231005210913.jpg', '2023-10-05 15:39:13', '2023-10-05 15:39:13'),
(5, 'Nuakgib', 'Piazkef noha zeji efnuhvat vu locuji mudefmu aktodo ubo curvav diwre rohfob nefwici sojsaw. Kabtor sulih nih edpel buwaspo ejiilu puadiwu izunu fefuti terwinvuz bekebi fo sunapjo wicda cofupe in golecub. Fimumo pemawi tojsico cavnaco jel fiwroriz na nucow vuna ta to ecegadva izsic lanno ojebirad di kanabo dis. Mabukaz zu buseref zez rihwe zadl', 'English', '20231005212816.jpg', '2023-10-05 15:58:16', '2023-10-05 15:58:16'),
(6, 'லோரெம் இப்சம் உரை என்றால் என்ன, அதன் அர்த்தம் என்ன?', 'என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல்.என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல்.என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல்.என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல்.என்பது ஒரு பொதுவான வகை ஒதுக்கிட உரைக்கான பெயர். ஃபில்லர் அல்லது டம்மி டெக்ஸ்ட் என்றும் அறியப்படும் இது, அர்த்தமுள்ள எதையும் கூறாமல் ஒரு இடத்தை நிரப்ப உதவும் உரை நகல்.', 'Tamil', '20231005212954.jpg', '2023-10-05 15:59:54', '2023-10-05 15:59:54'),
(7, 'ஒரு மைக்ரோசாஃப்ட் வேர்ட் டெம்ப்ளேட் தளமானது அதன் மொக்கப்களில்', 'ஒரு மைக்ரோசாஃப்ட் வேர்ட் டெம்ப்ளேட் தளமானது அதன் மொக்கப்களில் ஆங்கிலம் அல்லது படைப்பாளரின் தாய்மொழியில் உள்ள சில பத்திகளுக்குப் பதிலாக, லோரெம் இப்சம் உரையைப் பயன்படுத்துவதை ஏன் தேர்வுசெய்கிறது என்று நீங்கள் ஆச்சரியப்படலாம். ஒரு பழைய புத்தகத்திலிருந்து ஒரு பக்கத்தை அல்லது பிரபலமான பாடலின் வரிகளை ஏன் நகலெடுத்து ஒட்டக்கூடாது?\r\n\r\nலோரெம் இப்சம் உரையைப் பயன்படுத்துவதற்கான முக்கியக் காரணம், அது உண்மையான உரையில் கவனம் செலுத்துவதைத் தடுக்கிறது. யாராவது ஒரு டெம்ப்ளேட்டை உருவாக்கி, அதைப் பற்றிய கருத்தைக் கேட்கும்போது, ​​அதை மதிப்பாய்வு செய்பவர்கள் அந்த உரையில் என்ன சொல்கிறீர்கள் என்று திசை திருப்புவதை அவர்கள் விரும்பவில்லை. உரையின் தளவமைப்பில் கவனம் செலுத்துவதற்குப் பதிலாக, மக்கள் எழுத்துப் பிழைகளைக் கண்டறிய வார்த்தைகளைப் படிக்கலாம் அல்லது பாடல் வரிகளுடன் சேர்ந்து பாடலாம்.\r\n\r\nகூடுதலாக, லோரெம் இப்சம் பொதுவாக எழுதப்பட்ட உரையை ஒத்திருக்கிறது. அதே சில வார்த்தைகளை நகலெடுத்து ஒட்டுவது கடிதங்களின் சீரற்ற விநியோகத்தை விளைவிக்கும். லோரெம் இப்சம் உரையுடன், எழுத்துரு மற்றும் பக்க தளவமைப்பு கிட்டத்தட்ட முழு யதார்த்தமான நகலுடன் எவ்வாறு தோற்றமளிக்கிறது என்பதில் கவனம் செலுத்தலாம்.\r\n\r\nஅந்த வகையில், இது \"விரைவான பழுப்பு நரி சோம்பேறி நாய் மீது குதிக்கிறது\" என்ற வாக்கியத்தைப் போன்றது. எழுத்துருக்களை முன்னோட்டமிடும்போது விண்டோஸ் இதைப் பயன்படுத்துகிறது, ஏனெனில் இது எழுத்துக்களின் அனைத்து எழுத்துக்களையும் பயன்படுத்துகிறது.', 'Tamil', '20231005213318.jpg', '2023-10-05 16:03:18', '2023-10-05 16:03:18');

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
-- Table structure for table `mds`
--

CREATE TABLE `mds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `District` text NOT NULL,
  `Divisional_Secretariat` text NOT NULL,
  `Grama_Niladhari_Division` text NOT NULL,
  `Grama_Niladhari_Division_Number` text NOT NULL,
  `Village` text NOT NULL,
  `Office_Address` text NOT NULL,
  `Contact_person` text NOT NULL,
  `Position` text NOT NULL,
  `Contact_number` text NOT NULL,
  `WhatsApp_number` text NOT NULL,
  `Religious_Authority` varchar(255) NOT NULL,
  `Grama_Niladhari` varchar(255) NOT NULL,
  `Minutes_with_members_signature_list` varchar(255) NOT NULL,
  `Prioritized_project_proposal` varchar(255) NOT NULL,
  `President` text NOT NULL,
  `Secretory` text NOT NULL,
  `Treasurer` text NOT NULL,
  `Assistant_treasurer` text NOT NULL,
  `Agriculture_Coordinator` text NOT NULL,
  `Vocational_Training_and_Entrepreneurship_Coordinator` text NOT NULL,
  `English_language_and_Education_Coordinator` text NOT NULL,
  `mitcordinator` text NOT NULL,
  `Entertainment_and_Reconciliation_Coordinator` text NOT NULL,
  `Health_Promotion_Coordinator` text NOT NULL,
  `Women_affaires_and_child_development_Coordinator` text NOT NULL,
  `Coordinator` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_07_27_143600_create_sessions_table', 1),
(8, '2023_07_28_230005_create_announcements_table', 1),
(9, '2023_08_14_163753_create_mds_table', 1),
(10, '2023_08_15_184250_create_sponsors_table', 1),
(11, '2023_08_22_091118_create_officials_table', 1),
(12, '2023_08_22_103639_create_accounts_table', 1),
(13, '2023_08_27_133236_create_projects_table', 1),
(14, '2023_09_21_103943_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mds_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `national_id_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `special_abilities` text DEFAULT NULL,
  `overseas_employment_plan` tinyint(1) DEFAULT NULL,
  `service_to_society` text DEFAULT NULL,
  `personal_life_vision` text DEFAULT NULL,
  `political_involvement` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `detail` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
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
('7pioU6eydYeF38dSIImmYW5wafRdQAmQtcSmV6ap', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV0J4bUFhdk5tYUpJb2tLejBxNGF5NTljelRESjYyaTkyYlFmNFhwYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbiI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1696541823),
('8ZkourrXbBhq45PMfd7KTwAHhjXasoFP1LDADn40', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/118.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMERKZzVjcVc4eGhER2l4dzNvZ0NvbHRuR1Znejc3Y1NMUkhyeXMzQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6ImxvY2FsZSI7czoyOiJzaSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1697950629),
('VkMOFh7aIlJdnAMqBs6KVSo36C4X5cGjd6S8jlNE', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/118.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUNES29IUDRIbEozZk5sbTJqVjJ2MURkRndjWTFnV1Vvb0lCUFpoaiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvQW5ub3VuY2VtZW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1696541812),
('wOZlYb8cjwuMbl4M3d9tMjU8cKrhvakX3CIkqnT8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZlFGVGhXQ1BwWUZUNHV6NDJ0dmJMNVJTYlB6d0ZVbGUxaGxhMEJYOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbi9tZHMiO31zOjY6ImxvY2FsZSI7czoyOiJlbiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1702926534);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `logo` varchar(255) NOT NULL,
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
  `role` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `profile` text DEFAULT NULL,
  `strengths` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `contact_number`, `verification_code`, `profession`, `profile`, `strengths`, `created_at`, `updated_at`) VALUES
(1, 'avishka', 'admin@maatha.com', '1', NULL, '$2y$10$K6B2ZOE7LmthH65GGeLT1u4j7Mg0nIx65c1aurxKMVD83YeDt4IqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-05 15:33:17', '2023-10-05 15:33:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mds`
--
ALTER TABLE `mds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officials_mds_id_foreign` (`mds_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mds`
--
ALTER TABLE `mds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `officials`
--
ALTER TABLE `officials`
  ADD CONSTRAINT `officials_mds_id_foreign` FOREIGN KEY (`mds_id`) REFERENCES `mds` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
