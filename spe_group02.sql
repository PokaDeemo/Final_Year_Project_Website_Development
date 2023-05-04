-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 05, 2022 at 06:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spe_group02`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_table`
--

CREATE TABLE `account_table` (
  `AccountID` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_table`
--

INSERT INTO `account_table` (`AccountID`, `Name`, `Email`, `UserPassword`, `role`) VALUES
(1, 'Test', 'test@gmail.com', '321', 2),
(2, 'Freeman Tan', 'freemantan96@gmail.com', '123321', 2),
(3, 'Peter Cole', 'petercole@murdoch.com', '123321', 1),
(4, 'test teo', 'test69@gmail.com', '123321', 0),
(5, 'Freeman Tan', 'mikkiz1996@gmail.com', '123321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alert_table`
--

CREATE TABLE `alert_table` (
  `AlertID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alert_table`
--

INSERT INTO `alert_table` (`AlertID`, `Name`, `Email`) VALUES
(1, 'Test', 'test123@yahoo.com'),
(2, 'Freeman Tan', 'mikkiz1996@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `file_table`
--

CREATE TABLE `file_table` (
  `FileID` int(255) NOT NULL,
  `File` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_table`
--

INSERT INTO `file_table` (`FileID`, `File`) VALUES
(1, '8672-spe_group02 (1).sql'),
(2, '25349-ict302 Final Project Submission Template.doc'),
(3, '28190-import.JPG'),
(4, '1732-ict302 Final Project Submission Template.doc'),
(5, '94576-ict302 Final Project Submission Template.doc'),
(6, '50462-ict302 Final Project Submission Template.doc'),
(7, '14005-spe_group02 (1).sql'),
(8, '46630-spe_group02.sql'),
(9, '62023-import.JPG'),
(10, '77216-spe_group02 (1).sql');

-- --------------------------------------------------------

--
-- Table structure for table `spe1`
--

CREATE TABLE `spe1` (
  `Spe1ID` varchar(50) NOT NULL,
  `PersonID` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `SubmissionStatus` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `spe2`
--

CREATE TABLE `spe2` (
  `Spe2ID` varchar(50) NOT NULL,
  `PersonID` int(11) NOT NULL,
  `SubmissionStatus` varchar(20) NOT NULL,
  `SpeSubmissionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `spe_01`
--

CREATE TABLE `spe_01` (
  `SPE1ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Status` tinyint(1) UNSIGNED ZEROFILL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spe_01`
--

INSERT INTO `spe_01` (`SPE1ID`, `Name`, `Email`, `Date`, `Status`) VALUES
(1, 'Test', 'test123@yahoo.com', '5/4/2022', 255);

-- --------------------------------------------------------

--
-- Table structure for table `spe_02`
--

CREATE TABLE `spe_02` (
  `SPE2ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spe_02`
--

INSERT INTO `spe_02` (`SPE2ID`, `Name`, `Email`, `Date`, `Status`) VALUES
(1, 'Test', 'test123@yahoo.com', '5/4/2022', 127);

-- --------------------------------------------------------

--
-- Table structure for table `studentotherdetails`
--

CREATE TABLE `studentotherdetails` (
  `PersonID` int(11) NOT NULL,
  `TeamID` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentotherdetails`
--

INSERT INTO `studentotherdetails` (`PersonID`, `TeamID`, `Email`) VALUES
(1, 'FT01', 'esmekhoo90@gmail.com'),
(2, 'FT01', 'lau.andreas@gmail.com'),
(3, 'FT01', 'dianjin92@hotmail.com'),
(4, 'FT01', 'tayyki@outlook.com'),
(5, 'FT01', 'austinalessandro21@gmail.com'),
(6, 'FT01', 'kcy96@hotmail.com'),
(7, 'FT02', 'clement.ryan.limwp@gmail.com'),
(8, 'FT02', 'ryanquah2@gmail.com'),
(9, 'FT02', 'mikkiz1996@gmail.com'),
(10, 'FT02', 'huangyan4998@gmail.com'),
(11, 'FT02', 'jeremytay110397@hotmail.com'),
(12, 'FT02', 'dtwf94@gmail.com'),
(13, 'FT03', 'wei96word@gmail.com'),
(14, 'FT03', 'rajkumarr2412@gmail.com'),
(15, 'FT03', 'raj_16_96@hotmail.com'),
(16, 'FT03', 'kevincmulia@gmail.com'),
(17, 'FT03', 'pavethrakanasin2035@gmail.com'),
(18, 'FT03', 'mnhi18t@gmail.com'),
(19, 'FT04', 'yuuki.quinn@yahoo.com'),
(20, 'FT04', 'azizzak1996@gmail.com'),
(21, 'FT04', 'nashpurain@hotmail.com'),
(22, 'FT04', 'swordlaker@gmail.com'),
(23, 'FT04', 'ryan280298@gmail.com'),
(24, 'FT04', 'evantanchinkiat@gmail.com'),
(25, 'FT05', 'aaym98@gmail.com'),
(26, 'FT05', 'sintianlee1229@gmail.com'),
(27, 'FT05', 'tanjunrong1993@gmail.com'),
(28, 'FT05', 'zhenxiangyuen@hotmail.com'),
(29, 'FT05', 'shiyuanhang0913@163.com'),
(30, 'FT05', 'boonpin.sim@gmail.com'),
(31, 'PT01', 'giangweizhi1991@gmail.com'),
(32, 'PT01', 'kohwarner@gmail.com'),
(33, 'PT01', 'yao_qinghong@outlook.com'),
(34, 'PT01', 'jesjestongoh@gmail.com'),
(35, 'PT01', 'everything_asyiqin@hotmail.com'),
(36, 'PT01', 'NNNNN8520@gmail.com'),
(37, 'PT02', 'limjerome21@gmail.com'),
(38, 'PT02', 'gan0611@gmail.com'),
(39, 'PT02', 'shygirlsam@gmail.com'),
(40, 'PT02', 'xiaoqiwoon@gmail.com'),
(41, 'PT02', 'mediatorgoh@gmail.com'),
(42, 'PT02', 'jimes1107@gmail.com'),
(43, 'PT03', 'teo.guoxiang@hotmail.com'),
(44, 'PT03', 'hanyangchan@gmail.com'),
(45, 'PT03', 'sashi1991@hotmail.com'),
(46, 'PT03', 'sivashankar32@hotmail.com'),
(47, 'PT03', 'kathi939@hotmail.com'),
(48, 'PT03', 'hafiz.daud.93@gmail.com'),
(49, 'PT04', 'jazbuenaventura@yahoo.com'),
(50, 'PT04', 'leeyayan.here@gmail.com'),
(51, 'PT04', 'tjw.teyjingwen@gmail.com'),
(52, 'PT04', 'menggan89@gmail.com'),
(53, 'PT04', 'zackrocha14@gmail.com'),
(54, 'PT04', 'gyruza@gmail.com'),
(55, 'PT05', 'chongsinyiaw@gmail.com'),
(56, 'PT05', 'tansiningkimberly@gmail.com'),
(57, 'PT05', 'nick_anboo@hotmail.com'),
(58, 'PT05', 'sakinah_ishak@hotmail.com'),
(59, 'PT05', 'nilkanthanilkant@gmail.com'),
(60, 'PT05', 'lim.changjie@gmail.com'),
(61, 'PT05', 'hiteshk280388@gmail.com'),
(62, 'PT06', 'simck79@gmail.com'),
(63, 'PT06', 'Vipin.khatri5@yahoo.com'),
(64, 'PT06', 'derricktanyz91@gmail.com'),
(65, 'PT06', 'sqing1013@gmail.com'),
(66, 'PT06', 'hariz.zainal@outlook.com'),
(67, 'PT06', 'kongchenhwa@gmail.com'),
(68, 'PT06', 'jervis16@hotmail.com'),
(69, 'PT07', 'allangeorge005@gmail.com'),
(70, 'PT07', 'josephmok1997@hotmail.com'),
(71, 'PT07', 'akiff_kasban@hotmail.sg'),
(72, 'PT07', 'simjk9@gmail.com'),
(73, 'PT07', 'wasee_m@icloud.com'),
(74, 'PT07', 'muizzuddin_musa@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `PersonID` int(11) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `GivenNames` varchar(50) NOT NULL,
  `TeachPeriod` varchar(15) NOT NULL,
  `UnitCode` varchar(10) NOT NULL,
  `TeamID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`PersonID`, `Surname`, `Title`, `GivenNames`, `TeachPeriod`, `UnitCode`, `TeamID`) VALUES
(1, 'khoo', 'Ms', 'Sing Bao Esme', 'S1 2022', 'ICT302', 'FT01'),
(2, 'Lau', 'Mr', 'Andreas Kuan Tze', 'S1 2022', 'ICT302', 'FT01'),
(3, 'Oh', 'Mr', 'Dian Jin', 'S1 2022', 'ICT302', 'FT01'),
(4, 'Tay', 'Ms', 'Yang Ki', 'S1 2022', 'ICT302', 'FT01'),
(5, 'Tjahjono', 'Mr', 'Austin Alessandro', 'S1 2022', 'ICT302', 'FT01'),
(6, 'Koh', 'Mr', 'Chee yu', 'S1 2022', 'ICT302', 'FT01'),
(7, 'Lim', 'Mr', 'Wei Ping Clement Ryan', 'S1 2022', 'ICT302', 'FT02'),
(8, 'Quah', 'Mr', 'Han Wei Ryan', 'S1 2022', 'ICT302', 'FT02'),
(9, 'Tan', 'Mr', 'Hong Rui Freeman', 'S1 2022', 'ICT302', 'FT02'),
(10, 'Huang', 'Ms', 'Yan', 'S1 2022', 'ICT302', 'FT02'),
(11, 'Tay', 'Mr', 'Jeremy Wei Hao', 'S1 2022', 'ICT302', 'FT02'),
(12, 'Teo', 'Mr', 'Dylan Wayne Fynn', 'S1 2022', 'ICT302', 'FT02'),
(13, 'Wei', 'Mr', 'Fan', 'S1 2022', 'ICT302', 'FT03'),
(14, 'Raj Kumar', 'Mr', 'Raj Kumar', 'S1 2022', 'ICT302', 'FT03'),
(15, 'SO Balasubraman', 'Mr', 'Kaviraj', 'S1 2022', 'ICT302', 'FT03'),
(16, 'Mulia', 'Ms', 'Kevin Christian', 'S1 2022', 'ICT302', 'FT03'),
(17, 'Kanasin', 'Ms', 'Pavethra', 'S1 2022', 'ICT302', 'FT03'),
(18, 'Tran', 'Ms', 'Man Nhi', 'S1 2022', 'ICT302', 'FT03'),
(19, 'Lim', 'Ms', 'Yuuki Quinn', 'S1 2022', 'ICT302', 'FT04'),
(20, 'Adnan', 'Mr', 'Abdul Aziz Zaki', 'S1 2022', 'ICT302', 'FT04'),
(21, 'Purain', 'Mr', 'Nashwin Singh', 'S1 2022', 'ICT302', 'FT04'),
(22, 'Nguyen', 'Ms', 'Minh Tri', 'S1 2022', 'ICT302', 'FT04'),
(23, 'Tan', 'Ms', 'Ryan Zhi Hong', 'S1 2022', 'ICT302', 'FT04'),
(24, 'Tan', 'Ms', 'Evan Chin Kiat', 'S1 2022', 'ICT302', 'FT04'),
(25, 'Ang', 'Ms', 'Audrey Yu Min', 'S1 2022', 'ICT302', 'FT05'),
(26, 'Lee', 'Ms', 'Sin Tian', 'S1 2022', 'ICT302', 'FT05'),
(27, 'Tan', 'Mr', 'Jun Rong', 'S1 2022', 'ICT302', 'FT05'),
(28, 'Teh', 'Mr', 'Xiang Yuan', 'S1 2022', 'ICT302', 'FT05'),
(29, 'Shi', 'Mr', 'Yuan Hang', 'S1 2022', 'ICT302', 'FT05'),
(30, 'Sim', 'Mr', 'Boon Pin', 'S1 2022', 'ICT302', 'FT05'),
(31, 'Giang', 'Mr', 'Wei Zhi', 'S1 2022', 'ICT302', 'PT01'),
(32, 'Koh', 'Mr', 'Chin Hong Warner', 'S1 2022', 'ICT302', 'PT01'),
(33, 'Yao', 'Mr', 'Qing Hong', 'S1 2022', 'ICT302', 'PT01'),
(34, 'Goh', 'Mr', 'Zhi Yong Jeston', 'S1 2022', 'ICT302', 'PT01'),
(35, 'Bte Saat', 'Ms', 'Nurul Asyiqin', 'S1 2022', 'ICT302', 'PT01'),
(36, 'Chen', 'Mr', 'Hao', 'S1 2022', 'ICT302', 'PT01'),
(37, 'Lim', 'Mr', 'Jerome', 'S1 2022', 'ICT302', 'PT02'),
(38, 'Gan', 'Mr', 'Boon Ping', 'S1 2022', 'ICT302', 'PT02'),
(39, 'Liau', 'Ms', 'Samantha Sin Ting', 'S1 2022', 'ICT302', 'PT02'),
(40, 'Woon', 'Ms', 'Xiao Qi', 'S1 2022', 'ICT302', 'PT02'),
(41, 'Goh', 'Mr', 'Bryan Jun Hui', 'S1 2022', 'ICT302', 'PT02'),
(42, 'Lau', 'Mr', 'Yu Jian', 'S1 2022', 'ICT302', 'PT02'),
(43, 'Teo', 'Mr', 'Guo Xiang', 'S1 2022', 'ICT302', 'PT03'),
(44, 'Chan', 'Mr', 'Han Yang', 'S1 2022', 'ICT302', 'PT03'),
(45, 'SO Ganasekeran', 'Mr', 'Sashi', 'S1 2022', 'ICT302', 'PT03'),
(46, 'SO Gunasegaran', 'Mr', 'Sivashankar', 'S1 2022', 'ICT302', 'PT03'),
(47, 'Balakrishnan', 'Mr', 'Kathiresh', 'S1 2022', 'ICT302', 'PT03'),
(48, 'Bin Mohd Daud', 'Mr', 'Muhammad Hafiz', 'S1 2022', 'ICT302', 'PT03'),
(49, 'Buenaventura', 'Ms', 'Jazmin Mendoza', 'S1 2022', 'ICT302', 'PT04'),
(50, 'Lee', 'Ms', 'Ya Yan', 'S1 2022', 'ICT302', 'PT04'),
(51, 'Tey', 'Ms', 'Jing Wen', 'S1 2022', 'ICT302', 'PT04'),
(52, 'Ng', 'Mr', 'Meng Gan', 'S1 2022', 'ICT302', 'PT04'),
(53, 'Bin Umar', 'Mr', 'Muhammad Fakhrin', 'S1 2022', 'ICT302', 'PT04'),
(54, 'Ng', 'Mr', 'Elffi', 'S1 2022', 'ICT302', 'PT04'),
(55, 'Chong', 'Mr', 'Sin Yiaw', 'S1 2022', 'ICT302', 'PT05'),
(56, 'Tan', 'Ms', 'Si Ning Kimberly', 'S1 2022', 'ICT302', 'PT05'),
(57, 'Anboo', 'Mr', 'Nicholsen Arvind Clement', 'S1 2022', 'ICT302', 'PT05'),
(58, 'Binte Ishak', 'Ms', 'Sakinah', 'S1 2022', 'ICT302', 'PT05'),
(59, 'SO Anilkant', 'Mr', 'Nilkanth', 'S1 2022', 'ICT302', 'PT05'),
(60, 'Lim', 'Mr', 'Chang Jie', 'S1 2022', 'ICT302', 'PT05'),
(61, 'SO Mahesh Kuma', 'Mr', 'Hitesh', 'S1 2022', 'ICT302', 'PT05'),
(62, 'Sim', 'Mr', 'Ching Kiong', 'S1 2022', 'ICT302', 'PT06'),
(63, 'Vipin Bahadur Khatri', 'Mr', 'Vipin Bahadur Khatri', 'S1 2022', 'ICT302', 'PT06'),
(64, 'Tan', 'Mr', 'Yong Zhi Derrick', 'S1 2022', 'ICT302', 'PT06'),
(65, 'Hong', 'Mr', 'Siang Qing', 'S1 2022', 'ICT302', 'PT06'),
(66, 'Bin Zainal Abidin', 'Mr', 'Muhammad Hariz', 'S1 2022', 'ICT302', 'PT06'),
(67, 'Kong', 'Mr', 'Chen Hwa', 'S1 2022', 'ICT302', 'PT06'),
(68, 'Yeo', 'Mr', 'Jervis Wee Chien', 'S1 2022', 'ICT302', 'PT06'),
(69, 'George', 'Mr', 'Allan', 'S1 2022', 'ICT302', 'PT07'),
(70, 'Mok', 'Mr', 'Joseph Heng Jie', 'S1 2022', 'ICT302', 'PT07'),
(71, 'Bin Kasban', 'Mr', 'Akiff', 'S1 2022', 'ICT302', 'PT07'),
(72, 'Sim', 'Mr', 'Joo Kiat', 'S1 2022', 'ICT302', 'PT07'),
(73, 'Waseem', 'Mr', 'Muthu Mohamed', 'S1 2022', 'ICT302', 'PT07'),
(74, 'Bin Musa', 'Mr', 'Muizzuddin', 'S1 2022', 'ICT302', 'PT07');

-- --------------------------------------------------------

--
-- Table structure for table `ucdetails`
--

CREATE TABLE `ucdetails` (
  `UCname` varchar(50) NOT NULL,
  `UCemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ucdetails`
--

INSERT INTO `ucdetails` (`UCname`, `UCemail`) VALUES
('Peter Cole', 'petercole@murdoch.com');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounttable`
--

CREATE TABLE `useraccounttable` (
  `PersonID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `webadmintable`
--

CREATE TABLE `webadmintable` (
  `PersonID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webadmintable`
--

INSERT INTO `webadmintable` (`PersonID`, `Email`, `Roles`) VALUES
(7, 'clement.ryan.limwp@gmail.com', 'Data Coordinator'),
(8, 'ryanquah2@gmail.com', 'Project Activity Coordinator'),
(9, 'mikkiz1996@gmail.com', 'SoftWare and Website Design Coordinator'),
(10, 'huangyan4998@gmail.com', 'Secretary'),
(11, 'jeremytay110397@hotmail.com', 'Communication Coordinator'),
(12, 'dtwf94@gmail.com', 'Librarian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_table`
--
ALTER TABLE `account_table`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `alert_table`
--
ALTER TABLE `alert_table`
  ADD PRIMARY KEY (`AlertID`);

--
-- Indexes for table `file_table`
--
ALTER TABLE `file_table`
  ADD PRIMARY KEY (`FileID`);

--
-- Indexes for table `spe1`
--
ALTER TABLE `spe1`
  ADD PRIMARY KEY (`Spe1ID`),
  ADD KEY `PersonID` (`PersonID`);

--
-- Indexes for table `spe2`
--
ALTER TABLE `spe2`
  ADD PRIMARY KEY (`Spe2ID`),
  ADD KEY `PersonID` (`PersonID`);

--
-- Indexes for table `spe_01`
--
ALTER TABLE `spe_01`
  ADD PRIMARY KEY (`SPE1ID`);

--
-- Indexes for table `spe_02`
--
ALTER TABLE `spe_02`
  ADD PRIMARY KEY (`SPE2ID`);

--
-- Indexes for table `studentotherdetails`
--
ALTER TABLE `studentotherdetails`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `ucdetails`
--
ALTER TABLE `ucdetails`
  ADD PRIMARY KEY (`UCemail`);

--
-- Indexes for table `useraccounttable`
--
ALTER TABLE `useraccounttable`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `webadmintable`
--
ALTER TABLE `webadmintable`
  ADD KEY `PersonID` (`PersonID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_table`
--
ALTER TABLE `account_table`
  MODIFY `AccountID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `alert_table`
--
ALTER TABLE `alert_table`
  MODIFY `AlertID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `file_table`
--
ALTER TABLE `file_table`
  MODIFY `FileID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spe_01`
--
ALTER TABLE `spe_01`
  MODIFY `SPE1ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spe_02`
--
ALTER TABLE `spe_02`
  MODIFY `SPE2ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spe1`
--
ALTER TABLE `spe1`
  ADD CONSTRAINT `spe1_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `students` (`PersonID`);

--
-- Constraints for table `spe2`
--
ALTER TABLE `spe2`
  ADD CONSTRAINT `spe2_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `students` (`PersonID`);

--
-- Constraints for table `studentotherdetails`
--
ALTER TABLE `studentotherdetails`
  ADD CONSTRAINT `studentotherdetails_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `students` (`PersonID`);

--
-- Constraints for table `useraccounttable`
--
ALTER TABLE `useraccounttable`
  ADD CONSTRAINT `useraccounttable_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `students` (`PersonID`);

--
-- Constraints for table `webadmintable`
--
ALTER TABLE `webadmintable`
  ADD CONSTRAINT `webadmintable_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `students` (`PersonID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
