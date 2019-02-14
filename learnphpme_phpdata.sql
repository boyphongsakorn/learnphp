-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2019 at 07:45 PM
-- Server version: 10.2.21-MariaDB-log
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnphpme_phpdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `exechapter`
--

CREATE TABLE `exechapter` (
  `exechapter` int(11) NOT NULL,
  `chapterno` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `choice` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exechapter`
--

INSERT INTO `exechapter` (`exechapter`, `chapterno`, `question`, `choice`, `answer`) VALUES
(1, 2, 'array sort – เรียงลำดับอาเรย์มิติเดียวมีคำสั่งอะไรบ้าง', '$fruits = array|sort($fruits)|Echo|foreach', 'sort($fruits)'),
(2, 2, 'คำสั่งใดที่ array shuffle – สลับที่อยู่ของสมาชิกในอาเรย์โดยการสุ่ม', '$numbers = range(1, 20);|shuffle($numbers);|foreach ($numbers as $number)|echo “$number “;\r\n', 'shuffle($numbers);'),
(3, 2, 'คำสั่งที่ใช้สำหรับ สร้างอาเรย์ขี้นตามเงื่อนไขที่กำหนด โดยพารามิเตอร์ กี่อย่าง', '2|3|1|7', '3'),
(4, 2, 'คำสั่งที่ใช้ดึงค่าดึงค่า key ออกจากอาเรย์โดยใช้งานร่วมกับคำสั่ง ที่ใช้จัดการ pointe คื่อคำสั่งอะไรบ้าง', 'current|Next|Array|CurrentและNext', 'CurrentและNext'),
(5, 2, 'array natsort เรียงลำดับค่าอาเรย์โดยใช้คำสั่งใดอะไรบ้าง', 'natural|Naturalและalgorithm|Order|natural order และalgorithm', 'natural order และalgorithm'),
(6, 2, 'array_reverse ฟังกช์ันนี้ใช้เรียงลำดับของอาเรย์ใหม่เรียกฟังกชั้นนี้ว่าอะไร', 'พลิกลำดับของอาเรย์|เปลี่ยนค่าในอาเรย์โดยระบุตำแหน่ง|เปรียบเทียบค่า key ของอาเรย|ลดจำนวนสมาชิกในอาเรย์', 'พลิกลำดับของอาเรย์'),
(7, 2, 'array_rand – สุ่มค่าจากอาเรย์ ใช้คำสั่งอะไร', '$input = array(“กล้วย”, “ส้ม”, “มะนาว”, “องุ่น”, “แตงโม”);|$rand_keys = array_rand($input, 2)|echo $input[$rand_keys[0]] . “n”;|echo $input[$rand_keys[1]] . “n”;', '$rand_keys = array_rand($input, 2)'),
(8, 2, 'การหาผลรวมของค่าทั้งหมดในอาเรย์ ใช้ฟังก์ใดหาผลลัพธ์ของค่าทั้งหมดในอาเรย์', 'หาผลบวก|หาผลคูณ|หาผลลบ|หาผลหาร', 'หาผลคูณ'),
(9, 2, 'คำสั่งใดที่เรียงลำดับข้อมูลในอาเรย์โดยใช้หลายๆ เงื่อนไขและหลายแบบ พารามิเตอร์ที่ใช้กับคำสั่งมีคำสั่งอะไรบ้าง', 'array ที่ต้องการเรียงลำดับ|รูปแบบการเรียงลำดับ|ชนิดของการเรียง|array  รูปแบบการเรียงลำดับ และชนิดของการเรียง', 'array  รูปแบบการเรียงลำดับ และชนิดของการเรียง'),
(10, 2, 'ชนิดของการเรียงดับค่าในอาเรย์มีกี่ชนิด', '2|4|3|5', '3');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `userid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`userid`, `chapter`, `answer`, `score`) VALUES
('1', 2, '$fruits = array|$numbers = range(1, 20);|2|current|natural|พลิกลำดับของอาเรย์|$input = array(“กล้วย”, “ส้ม”, “มะนาว”, “องุ่น”, “แตงโม”);|หาผลบวก|array ที่ต้องการเรียงลำดับ|2|', 1),
('3', 2, '$fruits = array|shuffle($numbers);|3|Array|Order|พลิกลำดับของอาเรย์|$rand_keys = array_rand($input, 2)|หาผลคูณ|รูปแบบการเรียงลำดับ|4|', 5);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `name`, `filename`) VALUES
(1, 'Apache', 'Apache.pdf'),
(2, 'Array', 'Array.pdf'),
(3, 'CURL', 'CURL.pdf'),
(4, 'Date', 'Date.pdf'),
(5, 'File Directory', 'File_Directory.pdf'),
(6, 'General', 'General.pdf'),
(7, 'Hash,Json & Math', 'HJM.pdf'),
(8, 'Mysqli', 'mysqli.pdf'),
(9, 'Network', 'Network.pdf'),
(10, 'PDO', 'PDO.pdf'),
(11, 'Regex & String', 'RS.pdf'),
(12, 'Zip', 'zip.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `haveadmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `haveadmin`) VALUES
(1, 'boy1556@hotmail.com', '0823039158', 1),
(2, 'trumthong2017@gmail.com', '123456', 0),
(3, 'ongamecrafttv@gmail.com', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exechapter`
--
ALTER TABLE `exechapter`
  ADD PRIMARY KEY (`exechapter`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exechapter`
--
ALTER TABLE `exechapter`
  MODIFY `exechapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
