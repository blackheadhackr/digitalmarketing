-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 07:10 AM
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
-- Database: `dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `alternate` varchar(5000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `alternate`, `date`) VALUES
(20, 'AlNU3WTK_400x400.jpg', 'hvgcfdfg', '2024-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(1200) NOT NULL,
  `category` varchar(500) NOT NULL,
  `desc` text NOT NULL,
  `dateofupdation` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `catg` int(11) NOT NULL DEFAULT 1,
  `updationdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `category`, `desc`, `dateofupdation`, `img`, `content`, `catg`, `updationdate`) VALUES
(19, 'Design that drives growth: a wellness app elevates retention rates by 42%', 'roshan', 'Financial growth and wealth accumulation are common goals for individuals and businesses alike. However, navigating the complex world of finance, investments, and money management can be challenging. This is where a financial consultant can make a significant difference. Let’s explore. One of the key', '26-08-24', 'post_01.jpg', '<h1>Design that drives growth: a wellness app elevates retention rates by 42%</h1>\r\n\r\n<p>Financial growth and wealth accumulation are common goals for individuals and businesses alike. However, navigating the complex world of finance, investments, and money management can be challenging. This is where a financial consultant can make a significant difference. Let\'s explore.</p>\r\n\r\n<p>One of the key ways to grow wealth is through investments. Financial consultants are experts in various investment opportunities, from stocks and bonds to real estate and alternative investments. They can guide you in making informed investment decisions based on your financial objectives.</p>\r\n\r\n<p>The phrase \"with confidence\" signifies that seeking expert guidance can provide you with a sense of assurance and self-assuredness throughout the application journey. It highlights that you\'re not alone in facing the challenges of the application process.It positions expert guidance as a powerful tool that can significantly impact.</p>\r\n\r\n<p>consultants provide continuous support, helping you navigate any additional requests from immigration authorities and addressing any concerns that may arise during the processing period.</p>\r\n\r\n<p><img alt=\"Design that drives growth: a  app elevates retention rates by 42%\" src=\"https://www.lappymaker.com/images/macbook-air-screen-replacement-cost.webp\" style=\"float:left; height:254px; width:450px\" /></p>\r\n\r\n<ul>\r\n	<li>Personalized Financial Planning</li>\r\n	<li>Expert Investment Strategies</li>\r\n	<li>Tax Optimization</li>\r\n	<li>Education and Awareness</li>\r\n	<li>Long-Term Perspective</li>\r\n	<li>Estate Planning</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\">Design that drives growth: a wellness app</span></p>\r\n\r\n<p>consulting is an invaluable resource for anyone navigating the complexities of international travel, work, or family reunification. By enlisting the expertise of consultant, you can save time, reduce stress, and increase your chances of a successful application. Make sure to do your due diligence when choosing a consultant, and you\'ll be well on your way to realizing your global aspirations.</p>\r\n', 1, '2024-08-26 11:45:35'),
(20, 'this is an title for secound blog', 'roshan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '26-08-24', 'post_03.jpg', '<h1 style=\"text-align:center\"><strong>Where does it come from?</strong></h1>\n\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\n\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\n', 1, '2024-08-26 13:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `catg`
--

CREATE TABLE `catg` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catg`
--

INSERT INTO `catg` (`id`, `name`) VALUES
(7, 'goutam'),
(8, 'roshan');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `service` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `service`, `email`, `phone`, `message`, `date`) VALUES
(1, 'asdfghjkl', 'asdfgbn', 'shivanityagi@gmail.com', '2345678901', 'asdfghj', '2024-08-23'),
(2, 'dharmendr', 'asdagsfgh', 'shivanityafgi@gmail.com', '1234567890', 'sazfsbgdhfy', '2024-08-23'),
(3, 'dharmender', 'asdf', 'shivanityagi@gmail.com', '1234567890', 'asdf', '2024-08-23'),
(4, 'roshan kumar', 'this is roshan file ', 'roshan@gmail.com', '8569745896', 'testing data', '2024-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `address`, `mail`, `phone`, `whatsapp`, `date`) VALUES
(1, 'Netaji Subhash Place ', 'www.dharmender.kumar89830@gmail.com', '8527041034', '8527041034', '2024-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `title`, `alt`, `status`, `date`) VALUES
(4, 'wallpaperflare_com_wallpaper.jpg', 'sdsad', 'sdfasd', 1, '2024-02-12'),
(12, 'wallpaperflare_com_wallpaper_(1).jpg', 'DFASDF', 'DFASD', 1, '2024-02-13'),
(13, 'wallpaperflare_com_wallpaper1.jpg', 'this is testing ', 'this is tesing for new img', 1, '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `join-status` int(11) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `fname`, `lname`, `email`, `phone`, `DOB`, `gender`, `address`, `address1`, `city`, `state`, `zipcode`, `country`, `idproof`, `religion`, `join-status`, `date`) VALUES
(4, 'aa', 'aa', 'dharmender@gamail.com', '2222222222', '02/Feb/2024', 'Male', '12/78 ', 'fdsasd', 'asdfas', 'asdfasd', 12145, 'sdafsdf', 'wallpaper11.jpg', 'Sanatan', 0, '2024-02-06 18:57:37'),
(5, 'raja ram', 'chaudhary', 'rajaram@gmail.com', '6202223924', '07/Feb/1998', 'Male', '12/78 ', 'fdsasd', 'asdfas', 'asdfasd', 12145, 'sdafsdf', 'Logo_RamA1.png', 'Sanatan', 0, '2024-02-07 14:15:48'),
(6, 'roshan', 'kumar', 'roshan@gmail.com', '8596748596', '14/Feb/2024', 'Female', 'wz-052', 'rohni', 'delhi', 'delhi', 110001, 'india', 'wallpaperflare_com_wallpaper_(4).jpg', 'Hindu', 0, '2024-02-08 05:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_type`, `date`) VALUES
(1, 'dharmender', 'dharmender@123', 'admin', '2024-01-24'),
(4, 'dharmender1', 'dhar123', 'user', '2024-01-26'),
(9, 'dharmender', 'dharmender89830', 'super admin', '2024-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `disc` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catg`
--
ALTER TABLE `catg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `catg`
--
ALTER TABLE `catg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
