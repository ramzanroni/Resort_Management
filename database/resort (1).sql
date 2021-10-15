-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 03:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_resort`
--

CREATE TABLE `add_resort` (
  `id` int(255) NOT NULL,
  `resort_name` varchar(255) NOT NULL,
  `troom` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `number_room` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_resort`
--

INSERT INTO `add_resort` (`id`, `resort_name`, `troom`, `bed`, `number_room`, `price`, `description`, `status`, `image`) VALUES
(4, 'Queen Deluxe', 'Deluxe Room', 'Double', 15, '10000', 'This is the only one-bedroom suite, tucked beside the slopes of a hillock under one of the four suite villas. The suite has a separate living room with a dinette table. The bedroom and the living room features open view towards the lake and tea gardens through separate balconies. The bathroom features a two-person Bathtub.\r\n                              \r\n                              \r\n                              ', 'available', '961009.jpg'),
(8, 'King Deluxe', 'Deluxe Room', 'Double', 5, '20000', 'These rooms are in the lower floor of the Villas. These rooms have Queen size beds facing towards the balcony, The balcony features a open air bath-tub over looking the serpentine lake and the tea garden beyond it.                          \r\n                      ', 'available', '871779.jpg'),
(9, 'Villa Suite B', 'Guest House', 'Double', 2, '40000', 'These suites are based on the lower levels of the villa. They consist of two bedrooms, two bathrooms, a living and dinning space and a long balcony overlooking the serpentine lake and adjacent tea garden. The master bedroom has a King size bed while the second room features two single beds. The master bathrooms feature a single person Bathtub.                          \r\n                      ', 'available', '595517.jpg'),
(10, 'Villa Suite C', 'Guest House', 'Quad', 3, '30000', 'This is the only one-bedroom suite, tucked beside the slopes of a hillock under one of the four suite villas. The suite has a separate living room with a dinette table. The bedroom and the living room features open view towards the lake and tea gardens through separate balconies. The bathroom features a two-person Bathtub.                          \r\n                      ', 'available', '835141.jpg'),
(11, 'Villa Suite A', 'Guest House', 'Triple', 4, '50000', 'These suites are based on the upper floor of the suite villas and features 20’ high thatch roofs in both the bedrooms. Otherwise they are almost similar to Suite B.                          \r\n                      ', 'available', '456704.jpg'),
(12, 'Moon Villa', 'Guest House', 'Double', 2, '50000', 'This is a private walled villa with a drawing room, master bedroom, bathroom, a pantry and a large bathroom. This hilltop villa features a heated infinity edged wading pool and a thatched gazebo. The bathroom features a large Jacuzzi for couples.                          \r\n                      ', 'available', '842958.jpg'),
(13, 'Superior King / Twin', 'Superior Room', 'Quad', 5, '18000', 'There are 18 Superior class rooms on the three floors of the north side of the main hotel building. These rooms sporting wooden designed linear floor tiles have all the international standard room and bathroom amenities & facilities.                          \r\n                      ', 'available', '291650.jpg'),
(14, 'Premium King / Twin', 'Deluxe Room', 'Double', 7, '19000', 'There are 12 Premium rooms on the south (front) side of the Main Hotel. These rooms have wooden parquet floors south facing private balconies overlooking the tree-infested main garden.                          \r\n                      ', 'available', '452810.jpg'),
(15, 'Safinah Banquet Hall', 'Hall Room', 'Quad', 2, '50000', 'Large hall, Pillar less with built in collapsible acoustic. Offer a flexible setting up to 1000 person in various styles.                          \r\n                      ', 'available', '230431.jpg'),
(16, 'Imperial/Regal Meeting Hall', 'Hall Room', 'Quad', 5, '45000', 'The Imperial and Regal are well-appointed meeting rooms offering 1200 sq ft of flexible space with collapsible acoustic partition with the interconnecting meeting room. Both the rooms can accommodate up to 100 guests in theatre style.                          \r\n                      ', 'available', '144495.jpg'),
(17, 'Superior Hill View', 'Superior Room', 'Double', 10, '10000', 'Functionality & individuality are the essence of our Executive Suites. This room is of 400 sft with Ultra luxurious comfort. All the rooms are well decorated with all modern amenities for the ultimate relaxation of the guests.                          \r\n                      ', 'available', '123737.jpg'),
(18, 'Superior Garden View', 'Superior Room', 'Double', 5, '55000', 'Functionality & individuality are the essence of our Superior Garden View. This room is of 400 sft with Ultra luxurious comfort. All the rooms are well decorated with all modern amenities for the ultimate relaxation of the guests.                          \r\n                      ', 'available', '251725.jpg'),
(19, 'Royal Family Suite', 'Deluxe Room', 'Triple', 3, '60000', ' One luxury master bedroom and another children/guests bedroom, fitted with an elegantly decorated living room, and kitchenette. Our 1050 sft. 2 bedrooms suites mirror the warmth of a Home away from Home convenience.                         \r\n                      ', 'available', '132277.jpg'),
(20, ' Royal Paradise Suite', 'Superior Room', 'Double', 2, '75000', 'Our romantic honeymoon suites are well furnished with special amenities like sumptuous a four-poster bed, a luxurious bathroom, a mini swimming pool and outdoor veranda to enjoy the natural sea breeze surrounding Sea Pearl. Each suite features. 2020 sft. areas.                   \r\n                      \r\n                              ', 'available', '594932.jpg'),
(21, 'Studio', 'Single Room', 'Single', 10, '15000', 'Comfort and coziness are integrated in our studio suites. Our honourable guest will enjoy the belligerent view of Bay of Bengal and the scenic beauty around seating at the couch.                          \r\n                      ', 'available', '155182.jpg'),
(22, 'Executive Suite', 'Single Room', 'Single', 12, '12500', 'Our Executive Suite with bigger area and articulation of space will give the guests cherish feeling of living at his/her home. A comfortable master bedroom fitted with a living room and kitchenette. These mirrors the warmth of home convenience.                          \r\n                      ', 'available', '257885.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'nafisayasmin17@gmail.com', 'nafisa1998');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `cdate` date DEFAULT current_timestamp(),
  `approval` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `message`, `cdate`, `approval`) VALUES
(3, 'Nafisa yasmin', 1735530143, 'nafisayasmin17@gmail.com', '  This is test.', '2021-08-29', 'Not Allowed'),
(4, 'Nafisa', 1735530143, 'a@gmail.com', '  test message', '2021-08-29', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` varchar(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `cdate` timestamp NULL DEFAULT current_timestamp(),
  `approval` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `fullname`, `phoneno`, `email`, `message`, `cdate`, `approval`) VALUES
(4, 'Nafi', '01735530143', 'nafisayasmin17@gmail.com', '  ok', '2021-08-23 08:53:40', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `upazila` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `division` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `nid_no` int(20) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `street_address`, `district`, `upazila`, `city`, `division`, `nationality`, `phoneno`, `nid_no`, `email`, `password`) VALUES
(3, 'nafisa_Nafi', 'Yasmin', 'Sreemangal', 'moulvibazar', 'sreemangal', 'sylhet', 'sylhet', 'Bangladeshi', 1735530143, 258245454, 'nafisayasmin17@gmail.com', '4321'),
(4, 'A', 'B', 'Test', 'Test', 'Test', 'Test', 'Test', 'BD', 123545487, 454545, 'a@gmail.com', '1234 '),
(5, 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 23, 211, 'aaa@gmail.com', '4321'),
(6, 'this', 'test', 'Test', 'test', 'Test', 'Test', 'Test', 'Bangladesh', 1236548965, 25896, 'thistest@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(255) NOT NULL,
  `name` varchar(2552) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `resort_id` varchar(255) NOT NULL,
  `booking_no` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `number_guest` varchar(255) NOT NULL,
  `ex_phone` int(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'panding',
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `name`, `email`, `phone`, `resort_id`, `booking_no`, `start_date`, `end_date`, `number_guest`, `ex_phone`, `time`, `status`, `price`) VALUES
(6, 'nafisa_Nafi', 'nafisayasmin17@gmail.com', '1735530143', '4', '530176770', '2021-09-15', '2021-09-17', '3', 1777777777, '2021-09-04 17:56:26', 'check_in', '21000'),
(7, 'A', 'a@gmail.com', '123545487', '9', '778612080', '2021-08-31', '2021-09-03', '3', 1777777777, '2021-09-04 19:28:39', 'check_out', '126000'),
(8, 'A', 'a@gmail.com', '123545487', '4', '769279862', '2021-08-31', '2021-09-03', '2', 1777777777, '2021-09-04 19:30:59', 'payment', '31500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_resort`
--
ALTER TABLE `add_resort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_resort`
--
ALTER TABLE `add_resort`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
