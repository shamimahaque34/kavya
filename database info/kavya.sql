-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 09:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavya`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `description`, `author`, `author_image`, `author_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 5, 'Maiden triumph or missed opportunity', 'On paper, Bangladesh and Sri Lanka are heading into the Dhaka Test with an equal chance of winning the series. The first Test in Chattogram ended in a drab draw where batsmen made merry on a placid wicket while the bowlers battled hard under sweltering heat with little to show for their efforts.\r\n\r\nIn Dhaka, however, the match is unlikely to end in a draw. The Sher-e-Bangla National Cricket Stadium in Mirpur hasn’t produced a draw Test in over seven years. The wicket in Mirpur traditionally provides turn from Day 1 and the pitch condition deteriorates as the game progresses.', 'Tanha', 'admin-assets/images/author/Author1653223019.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,', 'admin-assets/images/blog/Blog1653223019.jpg', 1, '2022-05-22 06:36:59', '2022-05-22 06:36:59'),
(4, 3, 'BNP misinterpreting PM\'s comment over Padma Bridge: Quader', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'Jahid', 'admin-assets/images/author/Author1653223178.jpg', NULL, 'admin-assets/images/blog/Blog1653223178.jpg', 1, '2022-05-22 06:39:38', '2022-05-22 06:56:25'),
(5, 4, 'Moscow bans over 900 prominent Americans from Russia', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'Jahid2', 'admin-assets/images/author/Author1653235473.jpg', NULL, 'admin-assets/images/blog/Blog1653235473.jpg', 1, '2022-05-22 10:04:33', '2022-05-24 06:36:24'),
(6, 4, 'Risk of monkeypox spreading widely \'very low\'', 'The risk of monkeypox spreading widely among the general population is very low and transmission can be stopped outside endemic countries in Central and West Africa, health officials said Monday, after cases exploded this month in Europe and North America.\r\n\r\nFewer than 200 confirmed and suspected cases had been recorded since early May in Australia, Europe and North America, the World Health Organization (WHO) said, sparking fears over the spread of the disease.\r\n\r\nAlthough monkeypox has been known for 40 years, WHO said it was the first time there had been several cases across many countries simultaneously and among people who had not travelled to the endemic regions in Africa.\r\n\r\nBut the UN agency said the outbreaks in non-endemic countries could be brought under control and human-to-human transmission of monkeypox stopped.', 'asha', 'admin-assets/images/author/Author1653380323.png', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,', 'admin-assets/images/blog/Blog1653380323.jpg', 1, '2022-05-24 02:18:43', '2022-05-24 02:18:43'),
(7, 4, 'Japan hosts Quad summit seeking unity on countering China', 'Leaders of Japan, India, Australia and the United States met in Tokyo on Tuesday, looking to put China on notice as it expands its military and economic influence in the region.\r\n\r\nThe summit of the grouping known as the Quad comes a day after US president Joe Biden said Washington would be ready to intervene militarily to defend Taiwan, prompting China to accuse him of \"playing with fire\".\r\n\r\nTuesday\'s gathering is expected to produce fewer fireworks but still be clearly directed at China.\r\n\r\n\"This is about democracies versus autocracies, and we have to make sure we deliver,\" Biden said as the Quad summit began.\r\n\r\nThere is growing regional discomfort with Chinese military activity including sorties, naval exercises and encroachments by fishing vessels that are viewed as probing regional defences and red lines.', 'asad', 'admin-assets/images/author/Author1653383111.jpg', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.', 'admin-assets/images/blog/Blog1653383111.jpg', 1, '2022-05-24 03:05:11', '2022-05-24 03:05:11'),
(8, 4, 'Ukraine jails Russian soldier for life at war crimes trial', 'A Kyiv court on Monday found a 21-year-old Russian soldier who killed a civilian guilty of war crimes and handed him a life sentence, in the first verdict against Moscow\'s forces since their invasion.\r\n\r\n\"The court has found that (Vadim) Shishimarin is guilty and sentences him to life imprisonment,\" judge Sergiy Agafonov said.\r\n\r\nThe Russian sergeant admitted in court to killing 62-year-old Oleksandr Shelipov during the first days of the Kremlin\'s offensive in north-east Ukraine.', 'shuvo', 'admin-assets/images/author/Author1653383262.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin-assets/images/blog/Blog1653383262.jpg', 0, '2022-05-24 03:07:42', '2022-05-24 03:16:43'),
(9, 4, 'Shot grandmother, acted alone: police profile Texas gunman', 'Before he opened fire in a Texas elementary school—killing 19 small children—teenager Salvador Ramos first shot his grandmother, officials said.\r\n\r\nThe 18-year-old, who died when police tried to arrest him, was a US citizen and a student in Uvalde, a small community near the Mexican border where the tragedy took place.\r\n\r\nA mugshot of Ramos that circulated in local media showed a young man with brown hair, looking in front of him with an expressionless gaze.\r\n\r\n“The first incident was at their grandmother’s residence where he shot the grandmother,” said Erick Estrada of the Texas Department of Public Safety, adding she was later airlifted to a medical facility.', 'asif', 'admin-assets/images/author/Author1653454930.jpeg', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'admin-assets/images/blog/Blog1653454930.jpg', 1, '2022-05-24 23:02:10', '2022-05-24 23:02:10'),
(10, 1, 'Dhaka seeks increased Swiss investment', 'State Minister for Foreign Affairs Md. Shahriar Alam has called for more Swiss investment in Bangladesh, reports UNB.\r\n\r\nHe made the call during a bilateral meeting with Livia Leu, state secretary of Switzerland held on the sidelines of the World Economic Forum Annual Meeting in Davos on Monday.', 'mahmud', 'admin-assets/images/author/Author1653460628.jpg', 'In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', 'admin-assets/images/blog/Blog1653460628.jpg', 1, '2022-05-25 00:37:08', '2022-05-25 00:37:08'),
(11, 1, 'Bangladesh plans to import 1m tonnes of wheat from India', 'Bangladesh has a plan to import up to one million (10 lakh) tonnes of wheat from India under government to government contract and necessary steps already have been taken by the concerned food ministry, reports news agency BSS.\r\n\r\n“Bangladesh has sent an offer letter to the Bangladesh High Commission in India for making a negotiation with the Indian government to import as much as 10 lakh tonnes wheat,” Food Minister Sadhan Chandra Majumder told the news agency on Tuesday night.', 'simul', 'admin-assets/images/author/Author1653460948.jpg', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.', 'admin-assets/images/blog/Blog1653460948.jpg', 1, '2022-05-25 00:42:28', '2022-05-25 00:42:28'),
(12, 1, 'Nordic embassies organise business promotion event with focus on sustainability', 'The Embassies of Denmark, Norway and Sweden in collaboration with the Nordic Chamber of Commerce and Industry in Bangladesh (NCCI), organised a Business Promotion Event with focus on sustainability on Tuesday.\r\n\r\nThe seminar, organised to promote Nordic businesses and investments in Bangladesh, is part of an overall Nordic celebration to commemorate 50 years of bilateral relations between the Nordic countries and Bangladesh, says a press release.', 'asif', 'admin-assets/images/author/Author1653461097.jpg', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', 'admin-assets/images/blog/Blog1653461097.jpg', 1, '2022-05-25 00:44:57', '2022-05-25 00:44:57'),
(13, 1, 'DCCI delegation visits Kolkata to explore new trade opportunities', 'To explore new window of opportunities, a 49-member business delegation from Dhaka Chamber of Commerce and Industry (DCCI) led by its President Rizwan Rahman would leave for Kolkata Wednesday to explore further trade and investment scopes bilaterally, reports BSS.\r\n\r\nThe core purpose of the visit of this large delegation is to steer the existing friendly economic relation and explore potential business and investment cooperation and opportunities between West Bengal and Bangladesh in various wide-ranging avenues, said a press release.', 'ete', 'admin-assets/images/author/Author1653461391.JPG', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 'admin-assets/images/blog/Blog1653461391.jpg', 1, '2022-05-25 00:49:51', '2022-05-25 00:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Economics', '2022-05-22 03:24:44', '2022-05-22 03:24:44'),
(2, 'Entertainment', '2022-05-22 03:24:58', '2022-05-22 03:24:58'),
(3, 'Politics', '2022-05-22 03:25:10', '2022-05-22 03:25:10'),
(4, 'International', '2022-05-22 03:25:17', '2022-05-22 03:25:17'),
(5, 'Sports', '2022-05-22 03:25:24', '2022-05-22 03:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `email`, `comment`, `approve`, `created_at`, `updated_at`) VALUES
(4, 7, 'shamima', 'haqueshamima34@gmail.com', 'It is a exciting news', 1, '2022-05-25 00:15:41', '2022-05-25 00:24:33'),
(5, 13, 'jahid', 'jahid@gmail.com', 'the news is very exciting', 1, '2022-05-25 00:53:35', '2022-05-25 00:53:50'),
(6, 13, 'shuvo', 'shuvo@gmail.com', 'it\'s a good news', 0, '2022-05-25 00:54:40', '2022-05-25 00:54:40'),
(7, 12, 'ete', 'ete@gmail.com', 'It is very very exciting news', 1, '2022-05-25 00:58:07', '2022-05-25 00:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shamima', 'haqueshamima34@gmail.com', 'reviews', 'It is a nice blog', '2022-05-22 10:24:19', '2022-05-22 10:24:19'),
(2, 'shamima', 'admin@admin.com', 'reviews', 'It is a nice blog', '2022-05-22 10:24:46', '2022-05-22 10:24:46'),
(3, 'shamima', 'admin@admin.com', 'reviews', 'It is a nice blog', '2022-05-22 10:24:58', '2022-05-22 10:24:58'),
(4, 'jahid', 'jahid@gmail.com', 'reviews', 'It is a nice blog', '2022-05-22 10:25:32', '2022-05-22 10:25:32'),
(5, 'jahid', 'jahid@gmail.com', 'reviews', 'It is a nice blog', '2022-05-22 10:29:56', '2022-05-22 10:29:56'),
(6, 'jahid', 'jahid@gmail.com', 'reviews', 'It is a nice blog', '2022-05-22 10:33:29', '2022-05-22 10:33:29'),
(7, 'shamima', 'shamimahaque95@gmail.com', 'reviews', 'it is a nice blog', '2022-05-22 10:35:26', '2022-05-22 10:35:26'),
(8, 'shamima', 'shamimahaque95@gmail.com', 'reviews', 'it is a nice blog', '2022-05-22 10:36:03', '2022-05-22 10:36:03'),
(9, 'shamima', 'shamimahaque95@gmail.com', 'reviews', 'it is a nice blog', '2022-05-22 10:38:32', '2022-05-22 10:38:32'),
(10, 'shamima', 'haqueshamima34@gmail.com', 'reviews', 'It is very nice blog', '2022-05-22 10:42:50', '2022-05-22 10:42:50'),
(11, 'shamima', 'haqueshamima34@gmail.com', 'reviews', 'it is a nice blog', '2022-05-22 10:46:19', '2022-05-22 10:46:19'),
(12, 'shamima', 'ete@gmail.com', 'reviews', 'it is a nice writting.', '2022-05-24 02:21:20', '2022-05-24 02:21:20'),
(13, 'ete', 'ete@gmail.com', 'reviews', 'it is a exciting post', '2022-05-25 00:14:38', '2022-05-25 00:14:38'),
(14, 'shamima', 'haqueshamima34@gmail.com', 'reviews', 'I like your blog', '2022-05-25 00:58:56', '2022-05-25 00:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2022_01_17_081958_create_sessions_table', 1),
(34, '2022_01_18_132532_create_categories_table', 1),
(35, '2022_01_18_132628_create_blogs_table', 1),
(36, '2022_01_19_004653_create_contacts_table', 1),
(37, '2022_01_30_114142_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('r6V6OF4euaUnuO3C6msMw2uEPMkPFWwc2DOGyUcF', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQ0dISVpFajRDTGh2eWlVT1JaQXpYemF1M1NJMnZQSFlBVXZxWFF0ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3QvU2hhbWltYS9wdWJsaWMiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDk4amVUVFBXclNEUE1JTzB5SVRMZWVucHhNMjc2R2lTbUI5eVJQdXdFa1poTjlwd1BnaHUuIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ5OGplVFRQV3JTRFBNSU8weUlUTGVlbnB4TTI3NkdpU21COXlSUHV3RWtaaE45cHdQZ2h1LiI7fQ==', 1653462533);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'shamima', 'haqueshamima34@gmail.com', NULL, '$2y$10$98jeTTPWrSDPMIO0yITLeenpxM276GiSmB9yRPuwEkZhN9pwPghu.', NULL, NULL, NULL, NULL, NULL, '2022-05-22 03:17:11', '2022-05-22 03:17:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
