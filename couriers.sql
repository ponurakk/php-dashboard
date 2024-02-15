-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2024 at 10:26 PM
-- Server version: 11.2.3-MariaDB
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couriers`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `registration_date` date NOT NULL,
  `status` enum('Active','Disabled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `login`, `password`, `registration_date`, `status`) VALUES
(1, 'a@a.pl', '$2y$10$yu0J.VJg37LYA7Hp1jF26e.gftqqp6Dj4Gay328JNRjoPajTzLd9m', '2024-01-11', 'Disabled');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL,
  `consideration_date` date NOT NULL,
  `delivery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `description`, `created_at`, `consideration_date`, `delivery_id`) VALUES
(1, 'Package arrived damaged', '2024-01-23', '2024-01-25', 1),
(2, 'Wrong item received', '2024-01-25', '2024-01-27', 3);

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `hours_from` time NOT NULL,
  `hours_to` time NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `name`, `lastname`, `phone_number`, `hours_from`, `hours_to`, `department_id`) VALUES
(1, 'Jan', 'Kowalski', '123456789', '07:00:00', '17:00:00', 1),
(3, 'John', 'Doe', '987654321', '09:00:00', '09:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `tracking_number` varchar(50) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `payment_status` enum('paid','new_payment') NOT NULL DEFAULT 'new_payment',
  `send_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `tracking_number`, `weight`, `payment_status`, `send_date`, `arrival_date`, `price`, `order_id`) VALUES
(1, 'TRK123456', 2.50, 'paid', '2024-01-23', '2024-01-25', 25.99, 1),
(2, 'TRK789012', 1.80, 'new_payment', '2024-01-24', NULL, 18.75, 2),
(3, 'TRK345678', 3.20, 'paid', '2024-01-25', '2024-01-26', 32.50, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `delivery_status`
-- (See below for the actual view)
--
CREATE TABLE `delivery_status` (
`sender_name` varchar(50)
,`recipient_name` varchar(50)
,`courier_name` varchar(50)
,`payment_status` enum('paid','new_payment')
,`weight` decimal(5,2)
,`price` decimal(6,2)
,`send_date` date
,`arrival_date` date
,`location` varchar(60)
);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `street` varchar(255) NOT NULL,
  `home_number` varchar(12) NOT NULL,
  `local_number` int(10) UNSIGNED DEFAULT NULL,
  `post_code` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `street`, `home_number`, `local_number`, `post_code`, `city`, `phone_number`, `email`) VALUES
(1, 'Odział Terenowy Jasło', 'Przemyska', '35', 275, '31-218', 'Jasło', '753-653-312', 'jaslo@kurierzy.pl');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `courier_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `courier_id`, `sender_id`, `recipient_id`) VALUES
(1, '2024-01-23', 1, 3, 1),
(2, '2024-01-23', 3, 1, 2),
(3, '2024-01-23', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `street` varchar(255) NOT NULL,
  `home_number` varchar(12) NOT NULL,
  `local_number` int(10) UNSIGNED DEFAULT NULL,
  `post_code` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `name`, `lastname`, `phone_number`, `email`, `street`, `home_number`, `local_number`, `post_code`, `city`) VALUES
(1, 'Alice', 'Johnson', '555-1111', 'alice.johnson@email.com', '987 Elm St', '12', 303, '98765', 'Villageton'),
(2, 'Charlie', 'Brown', '555-2222', 'charlie.brown@email.com', '654 Birch Ave', '56', 404, '23456', 'Treetown'),
(3, 'Eva', 'Smith', '555-3333', 'eva.smith@email.com', '321 Cedar Ln', '78', 505, '34567', 'Woodsville');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `location` varchar(60) NOT NULL,
  `updated_at` date NOT NULL,
  `delivery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `location`, `updated_at`, `delivery_id`) VALUES
(1, 'Warehouse A', '2024-01-23', 1),
(2, 'Distribution Center B', '2024-01-24', 2),
(3, 'Customer Address C', '2024-01-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `senders`
--

CREATE TABLE `senders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `street` varchar(255) NOT NULL,
  `home_number` varchar(12) NOT NULL,
  `local_number` int(10) UNSIGNED DEFAULT NULL,
  `post_code` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `senders`
--

INSERT INTO `senders` (`id`, `name`, `lastname`, `phone_number`, `email`, `street`, `home_number`, `local_number`, `post_code`, `city`) VALUES
(1, 'John', 'Doe', '555-1234', 'john.doe@email.com', '123 Main St', '42', 101, '12345', 'Cityville'),
(2, 'Jane', 'Smith', '555-5678', 'jane.smith@email.com', '456 Oak Ave', '23', 202, '67890', 'Townburg'),
(3, 'Bob', 'Johnson', '555-9876', 'bob.johnson@email.com', '789 Pine Ln', '7', 303, '54321', 'Villagetown');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(15) NOT NULL,
  `registration` varchar(8) DEFAULT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `brand`, `model`, `registration`, `capacity`, `department_id`) VALUES
(1, 'Toyota', 'Camry', 'ABC123', 1200, 1),
(2, 'Honda', 'Civic', 'XYZ789', 900, 1),
(3, 'Ford', 'Escape', 'DEF456', 1500, 1);

-- --------------------------------------------------------

--
-- Structure for view `delivery_status`
--
DROP TABLE IF EXISTS `delivery_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `delivery_status`  AS SELECT `senders`.`name` AS `sender_name`, `recipients`.`name` AS `recipient_name`, `couriers`.`name` AS `courier_name`, `delivery`.`payment_status` AS `payment_status`, `delivery`.`weight` AS `weight`, `delivery`.`price` AS `price`, `delivery`.`send_date` AS `send_date`, `delivery`.`arrival_date` AS `arrival_date`, `routes`.`location` AS `location` FROM (((((`orders` join `couriers` on(`couriers`.`id` = `orders`.`courier_id`)) join `senders` on(`senders`.`id` = `orders`.`sender_id`)) join `recipients` on(`recipients`.`id` = `orders`.`recipient_id`)) join `delivery` on(`delivery`.`order_id` = `orders`.`id`)) join `routes` on(`routes`.`delivery_id` = `delivery`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_id_fk` (`delivery_id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments2_id_fk` (`department_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_fk` (`order_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `couriers_id_fk` (`courier_id`),
  ADD KEY `senders_id_fk` (`sender_id`),
  ADD KEY `recipients_id_fk` (`recipient_id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery2_id_fk` (`delivery_id`);

--
-- Indexes for table `senders`
--
ALTER TABLE `senders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration` (`registration`),
  ADD KEY `departments_id_fk` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `senders`
--
ALTER TABLE `senders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `delivery_id_fk` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`);

--
-- Constraints for table `couriers`
--
ALTER TABLE `couriers`
  ADD CONSTRAINT `departments2_id_fk` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `orders_id_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `couriers_id_fk` FOREIGN KEY (`courier_id`) REFERENCES `couriers` (`id`),
  ADD CONSTRAINT `recipients_id_fk` FOREIGN KEY (`recipient_id`) REFERENCES `recipients` (`id`),
  ADD CONSTRAINT `senders_id_fk` FOREIGN KEY (`sender_id`) REFERENCES `senders` (`id`);

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `delivery2_id_fk` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `departments_id_fk` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
