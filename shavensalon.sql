-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 06:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shavensalon`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_shaven_team` (`Team_Id` INT)   BEGIN
DELETE FROM `shaven_team` WHERE `our_Team_Id` =  Team_Id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertContact` (IN `contact_Fname` VARCHAR(150), IN `contact_Email` VARCHAR(150), IN `contact_Subject` VARCHAR(150), IN `contact_Message` TEXT)   BEGIN
    INSERT INTO `contactus` (`contact_Fname`, `contact_Email`, `contact_Subject`, `contact_Message`) 
    VALUES (contact_Fname, contact_Email, contact_Subject, contact_Message);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_shaven_team` (IN `our_Team_Name` VARCHAR(150), IN `our_Team_Pnumber` INT, IN `our_Team_Email` VARCHAR(150), IN `our_Team_Details` TEXT, IN `our_Team_Image` VARCHAR(150), IN `our_Team_Skills` VARCHAR(150), IN `our_Team_Wschedule` DATETIME, IN `our_Team_rates` INT, IN `Services_Name` VARCHAR(150))   BEGIN
    INSERT INTO `shaven_team`
    (
        `our_Team_Name`, 
        `our_Team_Pnumber`, 
        `our_Team_Email`, 
        `our_Team_Details`, 
        `our_Team_Image`, 
        `our_Team_Skills`, 
        `our_Team_Wschedule`, 
        `our_Team_rates`, 
        `Services_Name`
    ) 
    VALUES 
    (
        our_Team_Name, 
        our_Team_Pnumber, 
        our_Team_Email, 
        our_Team_Details, 
        our_Team_Image, 
        our_Team_Skills, 
        our_Team_Wschedule, 
        our_Team_rates, 
        Services_Name
    );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_shaven_Team` ()   BEGIN
    SELECT * FROM `shaven_team`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_shaven_team` (IN `our_Team_Id` INT, IN `our_Team_Name` VARCHAR(150), IN `our_Team_Pnumber` INT, IN `our_Team_Email` VARCHAR(150), IN `our_Team_Details` TEXT, IN `our_Team_Image` VARCHAR(150), IN `our_Team_Skills` VARCHAR(150), IN `our_Team_Wschedule` DATETIME, IN `our_Team_rates` INT, IN `Services_Name` VARCHAR(150))   BEGIN
    UPDATE `shaven_team`
    SET 
        `our_Team_Name` = our_Team_Name,
        `our_Team_Pnumber` = our_Team_Pnumber,
        `our_Team_Email` = our_Team_Email,
        `our_Team_Details` = our_Team_Details,
        `our_Team_Image` = our_Team_Image,  -- Sirf ek record ki image update hogi
        `our_Team_Skills` = our_Team_Skills,
        `our_Team_Wschedule` = our_Team_Wschedule,
        `our_Team_rates` = our_Team_rates,
        `Services_Name` = Services_Name
    WHERE 
        `our_Team_Id` = our_Team_Id; -- Yahan ID ka check
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking_appointment`
--

CREATE TABLE `booking_appointment` (
  `appintmnet_id` int(11) NOT NULL,
  `client_Name` varchar(150) NOT NULL,
  `client_Email` varchar(150) NOT NULL,
  `client_Pnumber` int(14) NOT NULL,
  `client_Service` varchar(150) NOT NULL,
  `client_Emoplye` varchar(150) NOT NULL,
  `client_appointment_dateTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conabout`
--

CREATE TABLE `conabout` (
  `conid` int(11) NOT NULL,
  `about_heading` varchar(150) NOT NULL,
  `about_para` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conabout`
--

INSERT INTO `conabout` (`conid`, `about_heading`, `about_para`) VALUES
(2, 'Do you like our hairdresser?', 'Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.');

-- --------------------------------------------------------

--
-- Table structure for table `concontact`
--

CREATE TABLE `concontact` (
  `id` int(11) NOT NULL,
  `Saloon_Email` varchar(150) NOT NULL,
  `Saloon_ContactNo` varchar(200) NOT NULL,
  `Salonn_Location` varchar(150) NOT NULL,
  `Google_Map_Link` mediumtext NOT NULL,
  `Salonn_Para` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `concontact`
--

INSERT INTO `concontact` (`id`, `Saloon_Email`, `Saloon_ContactNo`, `Salonn_Location`, `Google_Map_Link`, `Salonn_Para`) VALUES
(1, 'info@shavensaloon.com', '+123 255 688', 'United States', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26424711.752715345!2d-161.4385307850939!3d36.05269002668965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1734461626892!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'We’ve received your message and truly appreciate you taking the time to contact us. Our team will review your inquiry and get back to you as soon as possible.');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_UId` int(11) NOT NULL,
  `contact_Fname` varchar(150) NOT NULL,
  `contact_Email` varchar(150) NOT NULL,
  `contact_Subject` varchar(150) NOT NULL,
  `contact_Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_paypal`
--

CREATE TABLE `payment_paypal` (
  `id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `service_name` varchar(150) NOT NULL,
  `currrency_name` varchar(150) NOT NULL,
  `ammount` decimal(10,0) NOT NULL,
  `status` varchar(150) NOT NULL,
  `Transaction_id` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_paypal`
--

INSERT INTO `payment_paypal` (`id`, `user_name`, `user_email`, `service_name`, `currrency_name`, `ammount`, `status`, `Transaction_id`, `created_at`) VALUES
(3, 'sdasd', 'sdasd@gmail.com', 'coloring', 'USD', 0, 'PENDING', '80', '2024-12-19 12:46:14'),
(4, 'COMPLETE\r\n', 'sdasd@gmail.com', 'coloring', 'USD', 0, 'SLASDLJAD54123DASD', '80', '2024-12-19 12:45:23'),
(5, 'sdasd', 'sdasd@gmail.com', 'coloring', 'USD', 0, 'COMPLETED\r\n', '80', '0000-00-00 00:00:00'),
(6, 'Bilal', 'sb-4yn9335054191@personal.example.com', 'Beard Treatment', 'USD', 40, 'Completed', '4MEZSVFZA9W8Y', '2024-12-20 00:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `saloon_feedback`
--

CREATE TABLE `saloon_feedback` (
  `feedback_Id` int(11) NOT NULL,
  `FB_Full_Name` varchar(150) NOT NULL,
  `FB_Email_Address` varchar(150) NOT NULL,
  `FB_Subject` varchar(150) NOT NULL,
  `Additional_Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_Id` int(11) NOT NULL,
  `Service_Name` varchar(150) NOT NULL,
  `Service_Details` text NOT NULL,
  `Service_Price` int(250) NOT NULL,
  `Service_Image` varchar(250) NOT NULL,
  `White_Service_Image` varchar(250) NOT NULL,
  `calendar_url` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_Id`, `Service_Name`, `Service_Details`, `Service_Price`, `Service_Image`, `White_Service_Image`, `calendar_url`) VALUES
(1, 'Haircuts & Styling', 'Haircut, shampoo/conditior & hot towel finish.', 150, 'Haircuts&Styling-20-1204-1.png', 'Haircuts&Styling-20-1204-1h.png', ''),
(2, 'Beard Treatment', 'Haircut, shampoo/conditior & hot towel finish.                                    ', 200, 'BeardTreatment-20-671-2.png', 'BeardTreatment-20-671-2h.png', ''),
(3, 'Coloring Services', 'Haircut, shampoo/conditior & hot towel finish.', 100, 'ColoringServices-20-1259-3.png', 'ColoringServices-20-1259-3h.png', ''),
(4, 'Beard Waxing', 'Haircut, shampoo/conditior & hot towel finish.', 160, 'BeardWaxing-20-1259-4.png', 'BeardWaxing-20-1259-4h.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `shaven_team`
--

CREATE TABLE `shaven_team` (
  `our_Team_Id` int(11) NOT NULL,
  `our_Team_Name` varchar(150) NOT NULL,
  `our_Team_Pnumber` int(150) NOT NULL,
  `our_Team_Email` varchar(150) NOT NULL,
  `our_Team_Details` text NOT NULL,
  `our_Team_Image` varchar(150) NOT NULL,
  `our_Team_Skills` varchar(250) NOT NULL,
  `our_Team_Wschedule` datetime NOT NULL,
  `our_Team_rates` int(13) NOT NULL,
  `Services_Name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shaven_team`
--

INSERT INTO `shaven_team` (`our_Team_Id`, `our_Team_Name`, `our_Team_Pnumber`, `our_Team_Email`, `our_Team_Details`, `our_Team_Image`, `our_Team_Skills`, `our_Team_Wschedule`, `our_Team_rates`, `Services_Name`) VALUES
(5, 'Dr. Victoria De Vito', 561321815, 'Dr.VictoriaDeVito@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, \r\n', 'Dr.VictoriaDeVito-14-187-Founder – MD, Facts.webp', 'Make up Artisit', '2024-12-02 09:36:00', 4, 'Select Services'),
(6, 'Dr. Alexander Collin', 123456789, 'Dr.AlexanderCollin@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'Dr.AlexanderCollin-14-69-Dr. Alexander Collin.webp', ' Cosmetologist', '2024-12-14 10:41:00', 4, 'Select Services'),
(7, 'Rachel Green', 123456789, 'RachelGreen@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'RachelGreen-14-153-Rachel Green.webp', ' Hairdresser', '2024-12-14 10:42:00', 5, 'Haircuts & Styling'),
(8, 'Nick Boil', 123456789, 'NickBoil@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'NickBoil-14-335-Nick Boil.webp', ' Barber', '2024-12-14 04:37:00', 5, 'Select Services'),
(9, 'Diana Milos', 123456789, 'DianaMilos@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'DianaMilos-14-233-Diana Milos.webp', ' Nail Specialist', '2024-12-14 04:53:00', 4, 'Select Services'),
(10, 'Andrew Parker', 123456789, 'AndrewParker@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'AndrewParker-14-10-62.webp', ' Event Manager', '2024-12-14 04:54:00', 3, 'Select Services'),
(11, 'Susan Geller', 123456789, 'SusanGeller@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'SusanGeller-14-957-Susan Geller.webp', ' Nail Specialist', '2024-12-14 04:55:00', 4, 'Select Services'),
(12, 'Nadia Bake', 12365479, 'NadiaBake@gmail.com', 'As co-founder of the first all-woman physician plastic surgery practice in Atlanta, Dr. Diane Z. Alexander is a nationally', 'NadiaBake-14-155-Nadia Bake.webp', ' Administrator', '2024-12-14 04:55:00', 5, 'Select Services');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paswword` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `paswword`, `created_at`) VALUES
(1, 'test2', 'test@gmail.com', '$2y$10$1asQm2FS54KCSuJsYVCFju.Htvz7PKicAUIjkhc6VRjAQkPO/NS3K', '2024-12-19 12:19:55'),
(3, 'xywudod', 'holih@mailinator.com', '$2y$10$cO37p2sktazjmbf1AWw/au4jA8YGzUH1V9MkLh5OPz8LbNLIA7CnO', '2024-12-18 16:15:20'),
(4, 'zames', 'byfusyki@mailinator.com', '$2y$10$IyKNPO0zUyRL0LODnnnQg.ZRjrIJgGL0KNj5A.l3RTspK0KLCrSK6', '2024-12-18 16:15:22'),
(5, 'pysef', 'qicop@mailinator.com', '$2y$10$EAnJGcQgJnMJ/UrB53BH8e1/reBi8prL1r/U0arBjEL4119iRkLX6', '2024-12-18 16:27:52'),
(7, 'test3', 'test3@gmail.com', '$2y$10$S.Y6jWMiA2MODBijJ5Cih.fpjs3vFZXipKUaUvI5UGo6dne3EpJmW', '2024-12-19 12:21:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_appointment`
--
ALTER TABLE `booking_appointment`
  ADD PRIMARY KEY (`appintmnet_id`);

--
-- Indexes for table `conabout`
--
ALTER TABLE `conabout`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `concontact`
--
ALTER TABLE `concontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_UId`);

--
-- Indexes for table `payment_paypal`
--
ALTER TABLE `payment_paypal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saloon_feedback`
--
ALTER TABLE `saloon_feedback`
  ADD PRIMARY KEY (`feedback_Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_Id`);

--
-- Indexes for table `shaven_team`
--
ALTER TABLE `shaven_team`
  ADD PRIMARY KEY (`our_Team_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_appointment`
--
ALTER TABLE `booking_appointment`
  MODIFY `appintmnet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conabout`
--
ALTER TABLE `conabout`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `concontact`
--
ALTER TABLE `concontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_UId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_paypal`
--
ALTER TABLE `payment_paypal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `saloon_feedback`
--
ALTER TABLE `saloon_feedback`
  MODIFY `feedback_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shaven_team`
--
ALTER TABLE `shaven_team`
  MODIFY `our_Team_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
