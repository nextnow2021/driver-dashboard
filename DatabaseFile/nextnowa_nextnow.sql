-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 02:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextnowa_nextnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_summary`
--

CREATE TABLE `bill_summary` (
  `bill_id` int(255) NOT NULL,
  `login_id` int(6) NOT NULL,
  `uploaded_date` datetime NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `business_registration_code` varchar(255) NOT NULL,
  `vat_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_summary`
--

INSERT INTO `bill_summary` (`bill_id`, `login_id`, `uploaded_date`, `company_name`, `company_email`, `address`, `business_registration_code`, `vat_no`) VALUES
(1, 6, '0000-00-00 00:00:00', 'MS Tech', 'moinshaikh19@gmail.com', 'Mumbai', '123546VCFWR', 'WERT123');

-- --------------------------------------------------------

--
-- Table structure for table `doc_summary`
--

CREATE TABLE `doc_summary` (
  `doc_id` int(255) NOT NULL,
  `login_id` int(255) NOT NULL,
  `uploaded_date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `driver_id_document` varchar(255) NOT NULL,
  `driver_license` varchar(255) NOT NULL,
  `driver_photo` varchar(255) NOT NULL,
  `vehicle_license` varchar(255) NOT NULL,
  `registration_certificate` varchar(255) NOT NULL,
  `vehicle_inspection` varchar(255) NOT NULL,
  `signed_eme_affidavit` varchar(255) NOT NULL,
  `operating_license` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_summary`
--

INSERT INTO `doc_summary` (`doc_id`, `login_id`, `uploaded_date`, `driver_id_document`, `driver_license`, `driver_photo`, `vehicle_license`, `registration_certificate`, `vehicle_inspection`, `signed_eme_affidavit`, `operating_license`) VALUES
(3, 6, '2021-04-30 17:00:46.410156', 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'Koala.jpg', 'Lighthouse.jpg', 'Penguins.jpg', 'Chrysanthemum.jpg', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `driver_document`
--

CREATE TABLE `driver_document` (
  `driver_id` int(255) NOT NULL,
  `login_id` int(30) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_document`
--

INSERT INTO `driver_document` (`driver_id`, `login_id`, `photo`, `name`, `contactno`, `email`, `address`, `state`) VALUES
(2, 2, 'Chrysanthemum.jpg', 'Moin Shaikh', '9876543210', 'moinshaikh19@gmail.com', 'Kalyan', 'Shivaji University,Kohlapur'),
(3, 2, 'Desert.jpg', 'Moin', '8097275865', 'moin@nextnow.africa', 'Mumbai', 'Maharashtra'),
(4, 6, 'Logo.png', 'Support', '123456', 'lenovo@ms.com', 'M_S', 'M_S'),
(5, 6, 'bg-01.jpg', 'Png', '123456', 'MS@hi.com', 'am', 'am'),
(6, 10, 'Screenshot (3).png', 'Ritesh Patel', '9004799961', 'ritesh@nextnow.africa', 'Dombivali', 'Maharashtra'),
(7, 14, 'ec5-demo-project.jfif', 'Amit Singh', '9999999999', 'amysingh4966@gmail.com', '1234', 'Maharastra'),
(8, 9, 'pexels-andrea-piacquadio-3769022.jpg', 'Ankita Mishra', '8291623616', 'ankita@nextnow.africa', 'Sai Ganesh Apartment', 'Maharashtra'),
(9, 13, 'logo-01.png', 'Pratik Deshmukh', '54734573457357', 'pratikdeshmukh1114@gmail.com', '303,Pankaj Building, Sarovar Darshan, Ambernath', 'Maharashtra'),
(10, 10, 'Screenshot (3).png', 'Ritesh Patel', '9004799961', 'ritesh@nextnow.africa', 'Dombivali', 'Maharashtra'),
(11, 13, 'logo-01.png', 'Pratik Deshmukh', '54734573457357', 'pratikdeshmukh1114@gmail.com', '303,Pankaj Building, Sarovar Darshan, Ambernath', 'Maharashtra'),
(12, 8, 'Mano.png', 'Manoharan Balamurugan', '7499627667', 'manoharanbalamurugan16@gmail.com', 'Room No. 816, Swami Nagar,', 'Maharashtra'),
(13, 2, 'Capture.PNG', 'Capture2', '1234567892', 'MS@hi.com', 'M_S', 'M_S'),
(14, 2, 'Capture.PNG', 'Capture2', '1234567892', 'MS@hi.com', 'M_S', 'M_S'),
(15, 2, 'Capture1.PNG', 'Capture1', '123456', 'moin@nextnow.africa', 'am', 'MS'),
(16, 13, 'Capture1.PNG', 'Support', '123456', 'nextnow@afr.com', 'M_S', 'M_S'),
(17, 13, 'Capture2.PNG', 'Capture2', 'M_S', 'moin@nextnow.africa', 'am', 'am'),
(18, 13, 'Capture1.PNG', 'M_S', '123456', 'moinsh1907@gmail.com', 'M_S', 'M_S');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `UserEmail` varchar(200) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `FullName`, `Username`, `UserEmail`, `Password`, `RegDate`) VALUES
(1, '', 'admin', '0', 'admin', '2021-03-06 11:01:05'),
(2, 'next', 'nextnow', '0', '123', '2021-03-06 12:24:52'),
(3, 'MS', 'ms@nextnow.africa', '0', '827ccb0eea8a706c4c34a16891f84e7b', '2021-03-10 12:06:01'),
(4, 'next', 'admin', 'nextnow@afr.com', 'd0cab90d8d20d57e2f2b9be52f7dd25d', '2021-03-10 12:33:10'),
(5, 'moin', 'moinsh', 'ms@nextnow.africa', 'd81f9c1be2e08964bf9f24b15f0e4900', '2021-03-15 10:54:33'),
(6, 'lenovo', 'x1carbon', 'lenovo@ms.com', '12345', '2021-04-05 06:58:13'),
(7, 'now', 'now', 'now@gmail.com', 'now', '2021-04-06 07:33:53'),
(8, 'Manoharan Balamurugan', 'Manoharan', 'manoharanbalamurugan16@gmail.com', 'mano@123', '2021-04-06 08:37:10'),
(9, 'Ankita Mishra', 'ankita', 'ankita@nextnow.africa', 'ankita@1998', '2021-04-06 08:39:47'),
(10, 'Ritesh Patel', 'riteshp.nextnow', 'ritesh@nextnow.africa', '8976388414r', '2021-04-06 08:39:57'),
(11, 'Amit Singh', 'amitsingh', 'amysingh4966@gmail.com', 'amity1234', '2021-04-06 08:40:19'),
(12, 'Diksha', 'Diksha', 'diksha@nextnow.africa', 'Diksha@1a', '2021-04-06 08:40:34'),
(13, 'Pratik Deshmukh', 'pratikd', 'pratikd@nextnow.africa', 'moinsir1', '2021-04-06 08:41:12'),
(14, 'Amit Singh', 'amitsingh', 'amysingh4966@gmail.com', 'amit1234', '2021-04-06 08:41:56'),
(15, 'Vanita malkar', 'vanita malkar', 'vanitamalkar13@gmail.com', 'vanita@123', '2021-04-06 08:44:06'),
(16, 'intel 1', 'intel', 'intel@gmail.com', '5456', '2021-05-03 07:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `bill_id` int(255) NOT NULL,
  `login_id` int(6) NOT NULL,
  `bill_type` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_code` varchar(255) NOT NULL,
  `vat_number` varchar(255) NOT NULL,
  `bank_account_name` varchar(255) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_summary`
--

CREATE TABLE `profile_summary` (
  `profile_id` int(255) NOT NULL,
  `login_id` int(30) NOT NULL,
  `uploaded_date` date NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `driving_licence_number` varchar(255) NOT NULL,
  `driver_licence_expiry_date` date NOT NULL,
  `driver_vehicle_model` varchar(6) NOT NULL,
  `driver_vehicle_year` varchar(255) NOT NULL,
  `driver_vehicle_numberplate` varchar(255) NOT NULL,
  `driver_seats` varchar(255) NOT NULL,
  `vehicle_brand` varchar(255) NOT NULL,
  `vehicle_disc_licence` varchar(255) NOT NULL,
  `vehicle_licence_expire_date` date NOT NULL,
  `vehicle_year` varchar(255) NOT NULL,
  `vehicle_registration_numberplate` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_document`
--

CREATE TABLE `vehicle_document` (
  `vehicle_id` int(255) NOT NULL,
  `login_id` int(255) NOT NULL,
  `carphoto` varchar(255) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `vcontactno` varchar(255) NOT NULL,
  `licencephoto` varchar(255) NOT NULL,
  `vemail` varchar(255) NOT NULL,
  `vaddress` varchar(255) NOT NULL,
  `vstate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_document`
--

INSERT INTO `vehicle_document` (`vehicle_id`, `login_id`, `carphoto`, `vname`, `vcontactno`, `licencephoto`, `vemail`, `vaddress`, `vstate`) VALUES
(3, 2, 'favicon.png', 'POLO', '9090909', 'bg-01.jpg', 'ms@hi.com', 'Africa', 'Africa'),
(4, 14, 'ec5-demo-project.jfif', 'aaaa', '888888888', 'ec5-demo-project.jfif', 'as@gmail.com', '1234', 'maha'),
(5, 9, 'MicrosoftTeams-image (47).png', 'Audi', '08291623616', 'MicrosoftTeams-image (23).png', 'ankita@nextnow.africa', 'Sai Ganesh Apartment', 'Maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_summary`
--
ALTER TABLE `bill_summary`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `Fk_key` (`login_id`);

--
-- Indexes for table `doc_summary`
--
ALTER TABLE `doc_summary`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `foreign key` (`login_id`);

--
-- Indexes for table `driver_document`
--
ALTER TABLE `driver_document`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `foreign key` (`login_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `foreign-key` (`login_id`);

--
-- Indexes for table `profile_summary`
--
ALTER TABLE `profile_summary`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `foreignkey` (`login_id`);

--
-- Indexes for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `foreignkey` (`login_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_summary`
--
ALTER TABLE `bill_summary`
  MODIFY `bill_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doc_summary`
--
ALTER TABLE `doc_summary`
  MODIFY `doc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver_document`
--
ALTER TABLE `driver_document`
  MODIFY `driver_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `bill_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_summary`
--
ALTER TABLE `profile_summary`
  MODIFY `profile_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  MODIFY `vehicle_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_summary`
--
ALTER TABLE `bill_summary`
  ADD CONSTRAINT `Fk_key` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_summary`
--
ALTER TABLE `doc_summary`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `foreign-key` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);

--
-- Constraints for table `profile_summary`
--
ALTER TABLE `profile_summary`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
