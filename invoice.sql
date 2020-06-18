-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award_number`
--

CREATE TABLE `award_number` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_number`
--

INSERT INTO `award_number` (`id`, `number`, `period`, `year`, `type`) VALUES
(9, '91911374', 3, '2020', 1),
(10, '08501338', 3, '2020', 2),
(11, '57161318', 3, '2020', 3),
(12, '23570653', 3, '2020', 3),
(13, '47332279', 3, '2020', 3),
(15, '519', 3, '2020', 4),
(17, '59647042', 6, '2019', 1),
(18, '01260528', 6, '2019', 2),
(19, '01616970', 6, '2019', 3),
(20, '69921388', 6, '2019', 3),
(21, '53451508', 6, '2019', 3),
(22, '', 6, '2019', 3),
(23, '710', 6, '2019', 4),
(24, '585', 6, '2019', 4),
(25, '633', 6, '2019', 4),
(26, '12620024', 1, '2020', 1),
(27, '39793895', 1, '2020', 2),
(28, '67913945', 1, '2020', 3),
(29, '09954061', 1, '2020', 3),
(30, '54574947', 1, '2020', 3),
(31, '', 1, '2020', 3),
(32, '007', 1, '2020', 4),
(33, '', 1, '2020', 4),
(34, '', 1, '2020', 4),
(35, '91911374', 2, '2020', 1),
(36, '08501338', 2, '2020', 2),
(37, '57161318', 2, '2020', 3),
(38, '23570653', 2, '2020', 3),
(39, '47332279', 2, '2020', 3),
(40, '', 2, '2020', 3),
(41, '519', 2, '2020', 4),
(42, '', 2, '2020', 4),
(43, '', 2, '2020', 4),
(62, '88888888', 5, '2020', 1),
(63, '77777777', 5, '2020', 2),
(64, '66666666', 5, '2020', 3),
(65, '55555555', 5, '2020', 3),
(66, '44444444', 5, '2020', 3),
(67, '333', 5, '2020', 4),
(68, '222', 5, '2020', 4),
(69, '111', 5, '2020', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `expend` int(10) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoice`
--

INSERT INTO `invoice` (`id`, `code`, `number`, `period`, `expend`, `year`) VALUES
(1, 'LG', '12345678', 2, 100, '2020'),
(2, 'LB', '22223333', 1, 150, '2020'),
(4, 'aa', '87655433', 3, 222, '2020'),
(5, 'aa', '87655777', 3, 222, '2020'),
(7, 'ss', '87645435', 3, 566, '2020'),
(11, 'dd', '77776654', 3, 7778, '2020'),
(12, 'ee', '12345678', 3, 567, '2020'),
(13, 'ed', '12343234', 3, 2343, '2020'),
(14, 'ws', '32143254', 2, 233, '2020'),
(15, 'ws', '32143254', 2, 233, '2020'),
(16, 'ws', '43232154', 1, 234, '2020'),
(17, 'ws', '43232154', 1, 234, '2020'),
(18, 'ws', '43232154', 1, 234, '2020'),
(19, 'aa', '34223422', 1, 233, '2020'),
(21, 'ws', '12345432', 3, 233, '2021'),
(22, 'ws', '23423423', 3, 333345, '2020'),
(23, 'ee', '67876788', 3, 444, '2020'),
(24, 'ws', '12345351', 3, 233, '2020'),
(25, 'ws', '11111518', 3, 233, '2020');

-- --------------------------------------------------------

--
-- 資料表結構 `reward_record`
--

CREATE TABLE `reward_record` (
  `id` int(8) UNSIGNED NOT NULL,
  `number` int(8) NOT NULL,
  `period` tinyint(1) NOT NULL,
  `reward` int(8) NOT NULL,
  `expent` int(10) NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2020'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_number`
--
ALTER TABLE `award_number`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reward_record`
--
ALTER TABLE `reward_record`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_number`
--
ALTER TABLE `award_number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reward_record`
--
ALTER TABLE `reward_record`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
