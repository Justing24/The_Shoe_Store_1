-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 10:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_shoe_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_orders`
--
-- Creation: Dec 06, 2021 at 09:34 PM
-- Last update: Dec 06, 2021 at 09:44 PM
--

CREATE TABLE `confirmed_orders` (
  `COID` int(255) NOT NULL,
  `UPID` int(255) NOT NULL,
  `INID` int(255) NOT NULL,
  `status` enum('Confirmed') NOT NULL,
  `dos` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `employee` (
  `EID` int(11) NOT NULL,
  `UPID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `hire_date` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `UPID`, `title`, `hire_date`, `country`) VALUES
(1, 8, 'secretary', '02/18/2021', 'united');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `inventory` (
  `INID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `color` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `size` double NOT NULL,
  `price` double NOT NULL,
  `qty_received` int(11) NOT NULL,
  `qty_sold` int(11) NOT NULL,
  `qty_on_hand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`INID`, `name`, `brand`, `image`, `color`, `gender`, `size`, `price`, `qty_received`, `qty_sold`, `qty_on_hand`) VALUES
(1, 'Air Max Excee', 'Nike', 'air-max-excee-mens-shoes-MhJh6v.jfif', 'white', 'F', 9, 150, 0, 0, 996),
(2, 'All Star', 'Converse', 'M7652_A_107X1.jpg', 'White', 'M', 10, 60, 0, 0, 996),
(3, 'Ultraboost', 'Adidas', 'Ultraboost_4.0_DNA_Shoes_Black_FY9123_01_standard.jpg', 'Black', 'M', 9, 180, 0, 0, 1000),
(4, 'Air Force 1', 'Nike', 'nike-air-force-1-lead-1.jfif', 'White', 'F', 9, 100, 0, 0, 1000),
(5, 'Ward', 'Vans', '58863_pair_large.webp', 'Black', 'M', 10, 60, 0, 0, 1000),
(6, 'Air Jordan 1 ', 'Jordan', 'air-jordan-1-chicago.jfif', 'Red', 'F', 8, 170, 0, 0, 1000),
(8, 'Nike Benassi JDI', 'Nike', 'i1-43afcd36-febc-4d27-8126-ae5d57d7061c.webp', 'black/white', 'F', 6, 25, 0, 0, 1000),
(9, 'Victory One', 'Nike', 'e4fc57bc-688b-45c1-be7b-a35b2f794ab0.webp', 'blue', 'M', 10, 25, 0, 0, 1000),
(10, 'Offcourt Duo', 'Nike', '53a5ebdd-a215-4717-b1e8-75d4f565222e.webp', 'baby blue/ light green', 'F', 7, 40, 0, 0, 1000),
(11, 'Offcourt(NFL Green Bay Packers)', 'Nike', '0a8a04ee-d52b-42f0-8c37-961042ffc57b.webp', 'black/dark green', 'M', 10, 35, 0, 0, 1000),
(13, 'Benassi Duo Ultra', 'Nike', 'ae3bd155-2bf2-4709-ba98-cc3b8939ef12.webp', 'Black', 'F', 8, 40, 0, 0, 1000),
(14, 'NOLA', 'Nike', '12099ab7-8cd0-4570-8a14-19a2f0cb5873.webp', 'White', 'F', 9, 40, 0, 0, 1000),
(15, 'ACG Air Deschutz +', 'Nike', '455829b5-1776-4e45-abe8-276bec8e40b0.webp', 'blue/yellow/orange', 'M', 10, 75, 0, 0, 1000),
(16, 'Adilette sandals', 'adidas', '0dd802f116214156a7b7ac0800f46726_9366.webp', 'black', 'F', 7, 40, 0, 0, 1000),
(17, 'Adilette comfort sandals', 'Adidas', 'b498956b5fac44a4b637ad1200d32fe9_9366.webp', 'gray/green', 'M', 8, 35, 0, 0, 1000),
(18, 'Adilette Comfort Sandals', 'Adidas', 'd6e06fd60b6f4f28b54eac9800a2498c_9366.webp', 'white/reflective pink', 'F', 6, 35, 0, 0, 1000),
(19, 'Adilette Comfort Sandals', 'adidas', '34b42698f6df4ca9b442ac55009a6acb_9366.webp', 'black/white', 'M', 9, 35, 0, 0, 1000),
(20, 'College Air Zoom Pegasus', 'Nike', '037a0ea6-491a-4a34-9dcd-899ec3af888c.webp', 'navy blue/yellow', 'M', 7, 130, 0, 0, 1000),
(21, 'Stan Smith Vulc Shoes', 'Adidas', 'fa4ffdb425a745e29781ad4200418b8b_9366.webp', 'green/white/wine', 'M', 9, 75, 0, 0, 1000),
(22, 'NMD_R1', 'Adidas', '53900496786b4eac827aad040104a9e6_9366.webp', 'black/white', 'F', 6, 140, 0, 0, 1000),
(23, 'ULTRABOOST 1.0 DNA', '', '1376a6fa8fbc4a6b8a85accd01385c6f_9366.webp', 'black/gray', 'M', 8, 180, 0, 0, 1000),
(24, 'Jordan Point Lane', 'Jordan', '4e38092d-9d08-414b-bb36-01c89a4eba02.webp', 'black/white', 'M', 11, 140, 0, 0, 1000),
(25, 'Air Jordan 1 Low', 'Jordan', 'dc0f39dc-ed2c-4145-bd93-b216e40bb53d.webp', 'red/black/white', 'F', 8, 100, 0, 0, 1000),
(26, 'Air Jordan 13 Retro Low', 'Jordan', '736759ee-6ddd-4d7b-8270-6962eb627235.webp', 'green/black', 'M', 9.5, 200, 0, 0, 1000),
(27, 'Jordan Delta 2', 'Jordan', '23ecd619-36d5-4e9e-bfaa-57e7e2947b21.webp', 'red/white', 'M', 11, 130, 0, 0, 1000),
(28, 'Zion 1', 'Jordan', '2a9e1d42-08bb-4bae-99c2-1eb0976f6264.webp', 'black/crimson', 'M', 12, 120, 0, 0, 1000),
(30, 'Air Jordan 11 Retro', 'Jordan', '702dfebe-dde5-4286-adc5-bc2315d9ed43.webp', 'grey', 'M', 10, 225, 0, 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_orders`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `inventory_orders` (
  `IOID` int(11) NOT NULL,
  `INID` int(11) NOT NULL,
  `VID` int(11) NOT NULL,
  `units_ordered` varchar(50) NOT NULL,
  `units_on_backorder` int(11) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `markup` varchar(20) NOT NULL,
  `retail_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `logs` (
  `LID` int(11) NOT NULL,
  `UPID` int(11) NOT NULL,
  `is_successful` int(1) NOT NULL,
  `error_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`LID`, `UPID`, `is_successful`, `error_message`) VALUES
(1, 6, 1, 'Login Success');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--
-- Creation: Dec 06, 2021 at 09:44 PM
-- Last update: Dec 06, 2021 at 09:45 PM
--

CREATE TABLE `order_info` (
  `OID` int(255) NOT NULL,
  `UPID` int(255) NOT NULL,
  `dos` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` float NOT NULL,
  `pricetopay` float NOT NULL,
  `is_completed` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `permission` (
  `PID` int(11) NOT NULL,
  `UPID` int(11) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_customer` int(1) NOT NULL,
  `is_employee` int(1) NOT NULL,
  `is_accounting` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`PID`, `UPID`, `is_admin`, `is_customer`, `is_employee`, `is_accounting`) VALUES
(1, 7, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `shipper` (
  `SID` int(11) NOT NULL,
  `VID` int(11) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--
-- Creation: Dec 06, 2021 at 09:44 PM
-- Last update: Dec 06, 2021 at 09:45 PM
--

CREATE TABLE `temp_order` (
  `TOID` int(11) NOT NULL,
  `UPID` int(11) NOT NULL,
  `dos` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` float NOT NULL,
  `pricetopay` float NOT NULL,
  `is_completed` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--
-- Creation: Dec 06, 2021 at 09:44 PM
-- Last update: Dec 06, 2021 at 09:46 PM
--

CREATE TABLE `users_items` (
  `UIID` int(11) NOT NULL,
  `UPID` int(11) NOT NULL,
  `INID` int(11) NOT NULL,
  `status` enum('Added to Cart','Payment Pending','Confirmed') NOT NULL,
  `dos` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `user_profile` (
  `UPID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`UPID`, `email`, `password`, `first_name`, `last_name`, `address`, `city`, `state`, `zip_code`, `phone_number`, `dob`) VALUES
(6, 'michelucy18@gmail.com', 'Rosasamarillas18!', 'Michelle', 'Zhunio', '20 Oxford Rd', 'New Windsor', 'NY', '12553', '8455226193', '02/18/1997'),
(7, 'michelucy18@gmail.com', 'Rosasamarillasa18!', '', '', '', '', '', '', '', ''),
(8, 'karo@gmail.com', '', 'karo', 'zhunio fugon', '', 'newburgh', 'NY', '12550', '85634534456', '10/09/1997'),
(9, 'ginesej24@gmail.com', '8f66ba616caab53ed8412d035afae87a', 'Justin', 'Ginese', '41 Hampshire Rd', 'Fishkill', 'NY', '12524', '8458931801', '09/04/2002'),
(10, '', '74be16979710d4c4e7c6647856088456', '', '', '', '', '', '', '', ''),
(11, 'ginesej2@gmail.com', '8f66ba616caab53ed8412d035afae87a', 'Justin', 'Ginese', '41 Hampshire RD', 'Fishkill', 'NY', '12524', '8458931801', '09/04/2002');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--
-- Creation: Dec 06, 2021 at 09:24 PM
--

CREATE TABLE `vendor` (
  `VID` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `website` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  ADD PRIMARY KEY (`COID`),
  ADD KEY `UPID` (`UPID`,`INID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`),
  ADD UNIQUE KEY `UPID` (`UPID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`INID`);

--
-- Indexes for table `inventory_orders`
--
ALTER TABLE `inventory_orders`
  ADD PRIMARY KEY (`IOID`),
  ADD KEY `inventory_orders_ibfk_1` (`INID`),
  ADD KEY `inventory_orders_ibfk_2` (`VID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`LID`),
  ADD KEY `logs_ibfk_1` (`UPID`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `UPID` (`UPID`),
  ADD KEY `UPID_2` (`UPID`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `UPID` (`UPID`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `VID` (`VID`);

--
-- Indexes for table `temp_order`
--
ALTER TABLE `temp_order`
  ADD PRIMARY KEY (`TOID`),
  ADD KEY `UPID` (`UPID`),
  ADD KEY `UPID_2` (`UPID`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`UIID`),
  ADD KEY `UPID` (`UPID`,`INID`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`UPID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  MODIFY `COID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `INID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `inventory_orders`
--
ALTER TABLE `inventory_orders`
  MODIFY `IOID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `OID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipper`
--
ALTER TABLE `shipper`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_order`
--
ALTER TABLE `temp_order`
  MODIFY `TOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `UIID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `UPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  ADD CONSTRAINT `confirmed_orders_ibfk_1` FOREIGN KEY (`UPID`) REFERENCES `user_profile` (`UPID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`UPID`) REFERENCES `user_profile` (`UPID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `inventory_orders`
--
ALTER TABLE `inventory_orders`
  ADD CONSTRAINT `inventory_orders_ibfk_1` FOREIGN KEY (`INID`) REFERENCES `inventory` (`INID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `inventory_orders_ibfk_2` FOREIGN KEY (`VID`) REFERENCES `vendor` (`VID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`UPID`) REFERENCES `user_profile` (`UPID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`UPID`) REFERENCES `user_profile` (`UPID`);

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`UPID`) REFERENCES `user_profile` (`UPID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `shipper`
--
ALTER TABLE `shipper`
  ADD CONSTRAINT `shipper_ibfk_1` FOREIGN KEY (`VID`) REFERENCES `vendor` (`VID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `temp_order`
--
ALTER TABLE `temp_order`
  ADD CONSTRAINT `temp_order_ibfk_1` FOREIGN KEY (`UPID`) REFERENCES `user_profile` (`UPID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
