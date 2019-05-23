-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 08:02 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnewuser`
--

CREATE TABLE `addnewuser` (
  `id` int(12) NOT NULL,
  `name_address` varchar(50) NOT NULL,
  `contract_number` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tansaction_id` int(12) NOT NULL,
  `submit_date` date NOT NULL,
  `account_no` int(12) NOT NULL,
  `electicitybill_name` varchar(234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnewuser`
--

INSERT INTO `addnewuser` (`id`, `name_address`, `contract_number`, `email`, `tansaction_id`, `submit_date`, `account_no`, `electicitybill_name`) VALUES
(2147483647, 'Dalim/Danmonddi/Electricity', 1935404402, 'monirit402@gmial.com', 101101011, '2018-03-05', 123345, 'Electricity'),
(105105105, 'Nuruzzaman /Saver / WaterBill', 1935404402, 'monithoddsan@gmail.', 2147483647, '2018-03-04', 123455, 'WaterBill'),
(103103103, 'Amrito H-23,R-10 WaterBill', 1935404402, 'monirhossan402@gmai', 1234123456, '2018-03-04', 123456, 'WaterBill'),
(101213411, 'Babul   / Sever/   WaterBill', 171318002, 'monirhossan402@gmail.com', 1234544, '2018-03-04', 1233345, 'WaterBill'),
(104104104, 'korim/  Saver        / GassBill', 1935404402, 'monirit402@gmial.com', 12333213, '2018-03-04', 1234566, 'GasBill'),
(102102102, 'Pantho H-28,R-12 GassBill', 171318002, 'monirhossan402@gmail.com', 1234512345, '2018-03-04', 1234567, 'GasBill'),
(123, 'abul/H-20,R-12 Mirpur Electricity', 171318002, 'monirhossan402@gmail.com', 123456712, '2018-03-04', 12345677, 'Electicity'),
(101010101, 'Monir H-24,R-18 Rupnagar ElectricityBill', 1935404402, 'monirit402@gmail.com', 12341234, '2018-03-03', 12345678, 'Electicity');

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

CREATE TABLE `electricity` (
  `id` int(4) NOT NULL,
  `name_address` varchar(50) NOT NULL,
  `billing_month` varchar(50) NOT NULL,
  `bill_no` int(50) NOT NULL,
  `kwh_consumed` varchar(50) NOT NULL,
  `account_no` int(12) NOT NULL,
  `energy_charge` int(50) NOT NULL,
  `others` int(50) NOT NULL,
  `total_bill` int(50) NOT NULL,
  `due_bill` int(50) NOT NULL,
  `biil_payafterduedate` int(50) NOT NULL,
  `tansaction_id` int(50) NOT NULL,
  `submitt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electricity`
--

INSERT INTO `electricity` (`id`, `name_address`, `billing_month`, `bill_no`, `kwh_consumed`, `account_no`, `energy_charge`, `others`, `total_bill`, `due_bill`, `biil_payafterduedate`, `tansaction_id`, `submitt_date`) VALUES
(0, 'Monir H-24,R-18Rupnagar Mirpur/ ElectricityBill', 'February', 103103103, '45', 12345678, 159, 55, 214, 32, 246, 1234123456, '2018-03-03'),
(0, 'Pantho H-28,R-12 GassBill', 'March', 102102102, '45', 1234567, 159, 55, 214, 32, 246, 1234512345, '2018-03-04'),
(0, 'Amrito H-23,R-10 WaterBill', 'May', 101010101, '78', 123456789, 275, 55, 330, 50, 380, 12341234, '2018-03-04'),
(0, 'abul/H-20,R-12 Mirpur Electricity', 'March', 123, '33', 12345677, 116, 55, 171, 26, 197, 123456712, '2018-03-04'),
(0, 'korim/ Saver / GassBill', 'April', 104104104, '67', 1234566, 237, 55, 292, 44, 335, 12333213, '2018-03-04'),
(0, 'Nuruzzaman /Saver / WaterBill', 'June', 105105105, '123', 123455, 468, 55, 523, 78, 602, 123456712, '2018-03-04'),
(0, 'Dalim/Danmonddi/Electricity', 'March', 2147483647, '76', 123345, 268, 55, 323, 48, 372, 101101011, '2018-03-04'),
(0, 'Nuruzzaman /Saver / WaterBill', 'January', 2147483647, '89', 1233345, 314, 55, 369, 55, 425, 12333213, '2018-03-06'),
(0, 'Dalim/Danmonddi/Electricity', 'January', 2147483647, '45', 123345, 159, 55, 214, 32, 246, 101101011, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `id` tinyint(4) NOT NULL,
  `name_address` varchar(50) NOT NULL,
  `billing_month` varchar(50) NOT NULL,
  `bill_no` int(50) NOT NULL,
  `consumption` varchar(50) NOT NULL,
  `account_no` int(50) NOT NULL,
  `energy_charge` int(12) NOT NULL,
  `others` int(50) NOT NULL,
  `total_bill` int(50) NOT NULL,
  `due_bill` int(50) NOT NULL,
  `biil_payafterduedate` int(50) NOT NULL,
  `tansaction_id` int(50) NOT NULL,
  `submitt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`id`, `name_address`, `billing_month`, `bill_no`, `consumption`, `account_no`, `energy_charge`, `others`, `total_bill`, `due_bill`, `biil_payafterduedate`, `tansaction_id`, `submitt_date`) VALUES
(1, 'Monir', 'January', 3452, '2352', 2345, 2345, 234, 243532, 23245, 2345, 234532, '0000-00-00'),
(3, 'Pantho', 'February', 1234, '2341', 1234, 134, 324, 1234, 3423, 143, 1234, '0000-00-00'),
(4, 'Dalim', 'March', 3452, '232223', 2342, 345, 2345, 345, 2345, 2345, 2435, '0000-00-00'),
(7, 'Kamrul ', 'December', 368258, '45', 785239579, 159, 55, 214, 32, 246, 1124, '2017-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `userid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `account_no` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`userid`, `email`, `password`, `created_date`, `status`, `account_no`) VALUES
(36, 'Nabil', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-18 16:11:07', 1, 12345678),
(35, 'Nahid', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-07 01:06:44', 1, 12345678),
(34, 'Dalim', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-15 10:04:13', 1, 1111),
(33, 'kamrul', '5111f3882f7cba548b62f47ac74f7fb7', '2018-03-04 01:03:15', 1, 123345),
(32, 'raju', 'af44aea32ed228266c88433e64c43b7c', '2018-03-04 01:03:02', 1, 1233345),
(31, 'ramim', '247f0c5804188fbcbed0e6a140aabd45', '2018-03-04 01:03:39', 1, 123455),
(30, 'diner', '8d70d8ab2768f232ebe874175065ead3', '2018-03-04 01:03:54', 1, 1234566),
(29, 'amrito', '65e30e86cba235e09b148b673f4a249c', '2018-03-04 01:03:12', 1, 12345677),
(28, 'abul', '81dc9bdb52d04dc20036dbd8313ed055', '2018-03-04 01:03:42', 1, 123456788),
(27, 'jery', 'fcea920f7412b5da7be0cf42b8c93759', '2018-03-02 20:03:58', 1, 123456789),
(26, 'monir', 'e10adc3949ba59abbe56e057f20f883e', '2018-03-02 20:03:55', 1, 1234567),
(25, 'pantho', '827ccb0eea8a706c4c34a16891f84e7b', '2018-03-02 19:03:17', 1, 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'karim', 'k@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'mm', 'mmm@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(3, 'abul', 'emai@gmail.com', 'user', '25d55ad283aa400af464c76d713c07ad'),
(4, 'Monir Hossan', 'monirhossan402@gmail.com', 'user', '1ff3ccc659687049ed49add3ce12f01f'),
(5, 'monirhossan', 'monirit402@gmial.com', 'user', 'af44aea32ed228266c88433e64c43b7c'),
(6, 'Monir Hossan', 'monirit402@gmial.com', 'user', '202cb962ac59075b964b07152d234b70'),
(7, 'pantho', 'arafat@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'monir', 'monirhossan402@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE `water` (
  `id` tinyint(4) NOT NULL,
  `name_address` varchar(50) NOT NULL,
  `billing_month` varchar(50) NOT NULL,
  `bill_no` int(50) NOT NULL,
  `consumption` varchar(50) NOT NULL,
  `account_no` int(50) NOT NULL,
  `energy_charge` int(50) NOT NULL,
  `others` int(50) NOT NULL,
  `total_bill` int(50) NOT NULL,
  `due_bill` int(50) NOT NULL,
  `biil_payafterduedate` int(50) NOT NULL,
  `tansaction_id` int(50) NOT NULL,
  `submitt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`id`, `name_address`, `billing_month`, `bill_no`, `consumption`, `account_no`, `energy_charge`, `others`, `total_bill`, `due_bill`, `biil_payafterduedate`, `tansaction_id`, `submitt_date`) VALUES
(2, 'Pantho', 'january ', 2345, '34523452', 2345, 523452, 2345, 3245, 23452, 245, 2345, '0000-00-00'),
(3, 'Monir ', 'January ', 657, '43', 4575, 0, 0, 0, 0, 0, 78568, '0000-00-00'),
(4, 'Shajalal ', 'December', 68346984, '45', 563986389, 159, 55, 214, 32, 246, 345723, '2017-12-29'),
(5, 'Kamal Ahamed', 'December', 37567835, '67', 8725682, 237, 55, 292, 44, 335, 2147483647, '2017-12-29'),
(6, 'Kamal ', 'January', 12345, '56', 12345, 198, 70, 268, 40, 308, 234345, '2018-01-03'),
(7, 'Babul', 'February', 234, '78', 123423, 275, 55, 330, 50, 380, 1234, '2018-01-04'),
(8, 'kamal chor', 'April', 1234, '45', 23445, 159, 55, 214, 32, 246, 1234, '2018-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnewuser`
--
ALTER TABLE `addnewuser`
  ADD PRIMARY KEY (`account_no`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `electricity`
--
ALTER TABLE `electricity`
  ADD KEY `account_no` (`account_no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`userid`) USING BTREE,
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gas`
--
ALTER TABLE `gas`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
