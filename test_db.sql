-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 10:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Admin`, `Password`, `Name`) VALUES
(1, 'admin', '123', 'Phuc');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_name`) VALUES
(1, 'India Pop'),
(2, 'Korean'),
(3, 'Pop'),
(4, 'Rap '),
(5, 'US-UK'),
(6, 'Ballad'),
(7, 'Chos Phuc ');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `SongID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Singer` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`SongID`, `Name`, `Path`, `Image`, `Singer`, `Category`) VALUES
(3, 'Chơi', '', 'Chơi645678c1ee73d7.39289397.jpg', 'HieuThuHai', 'Rap'),
(4, 'Cua', '', 'Cua6456819bc9b5b8.23339542.jpg', 'HieuThuHai', 'Rap'),
(5, 'DynamicDuo', '', 'DynamicDuo645681b8bf8f24.88290444.jpg', 'HieuThuHai', 'Rap'),
(6, 'Fashion Tán Gái', '', 'Fashion Tán Gái645681d5b300c6.74061201.png', 'LowG', 'Rap'),
(7, 'Mượn Rượu Tỏ Tình', '', 'Mượn Rượu Tỏ Tình645681fa9a3cc3.46707536.jpg', 'Big Daddy', 'Rap'),
(8, 'Ánh Nắng Của Anh ', '', 'Ánh Nắng Của Anh 6456822a549d19.29861296.jpg', 'Đức Phúc ', 'Pop'),
(9, 'Waiting For You ', '', 'Waiting For You 6456826fd4e1f5.53425377.jpg', 'Mono', 'Pop'),
(10, 'Bang Bang Bang', '', 'Bang Bang Bang645682a9a14338.38787386.jpg', 'Big Bang ', 'Korean'),
(11, 'Pink Venom', '', 'Pink Venom645682bd13a305.25098655.jpg', 'Black Pink', 'Korean'),
(12, 'Baby', '', 'Baby645682f0f35949.57716997.jpg', 'Justin Bieber', 'US-UK'),
(13, 'Blue', '', 'Blue6457252c2afb71.49718928.jpg', 'Big Bang', 'Korean');

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE `top` (
  `ID` int(11) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Singer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`ID`, `Place`, `Name`, `Singer`) VALUES
(1, 'TOP 1', 'Pink Venom', 'Black Pink '),
(2, 'TOP 2', 'Hãy Trao Cho Anh ', 'Sơn Tùng'),
(3, 'TOP 3', 'Baby ', 'Justin Bieber'),
(4, 'TOP 4', 'Dynamic Duo ', 'Hieuthuhai'),
(5, 'TOP 5', 'Fashion Tán Gái', 'LowG');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `UserID` int(11) NOT NULL,
  `SongID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Interact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`UserID`, `SongID`, `Username`, `Comment`, `Interact`) VALUES
(1, 0, 'Phúc', 'Nghe hong kịp :(', 'Sad'),
(2, 0, 'Long', 'Nhạc hay', 'Like'),
(3, 0, 'Thư', 'Anh Hieuthuhai đtrai quá :>>', 'Love'),
(4, 0, 'Bảo', 'Nhạc gì v ???', 'Angry');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Name`) VALUES
(1, 'Phuc', '123', 'Phuc'),
(2, 'Long', '123', 'Long'),
(3, 'Baoz', '202cb962ac59075b964b07152d234b70', 'Bao'),
(4, 'Thu', '202cb962ac59075b964b07152d234b70', 'Thu'),
(5, 'Nam', '979d472a84804b9f647bc185a877a8b5', 'Nam'),
(6, 'Huy', '202cb962ac59075b964b07152d234b70', 'Huy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `top`
--
ALTER TABLE `top`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
