-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2021 年 12 月 28 日 15:49
-- 伺服器版本： 5.7.34
-- PHP 版本： 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `hw_1228_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `hw_1228_sheet`
--

CREATE TABLE `hw_1228_sheet` (
  `serial_number` int(100) NOT NULL,
  `sheet_col_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sheet_col_age` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sheet_col_salary` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `hw_1228_sheet`
--

INSERT INTO `hw_1228_sheet` (`serial_number`, `sheet_col_name`, `sheet_col_age`, `sheet_col_salary`) VALUES
(1, '張雯婷', '24', '200090'),
(10, '習近平', '59', '10000000'),
(12, '何誒', '35', '65000'),
(18, 'Yumi', '36', '200090'),
(19, '傅崐萁', '67', '3492000'),
(21, '啊哈', '23', '90000'),
(23, '阿館大肌肌', '40', '34600'),
(26, '苗博雅', '39', '1239999'),
(27, '老猴', '79', '4599');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `hw_1228_sheet`
--
ALTER TABLE `hw_1228_sheet`
  ADD PRIMARY KEY (`serial_number`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hw_1228_sheet`
--
ALTER TABLE `hw_1228_sheet`
  MODIFY `serial_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
