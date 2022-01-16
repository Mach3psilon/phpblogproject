-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 05:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `content` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `author` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `author`, `date`, `image`) VALUES
(26, 'ddfs', 'fsdfdsfds', '1', '2021-12-26 09:49:04', 'fdgdfgdfgdfg.png'),
(27, 'ddfs', 'fsdfdsfds', '1', '2021-12-26 09:58:45', 'sfd.png'),
(28, 'ddfs', 'fsdfdsfds', '1', '2021-12-26 09:59:11', 'asds.png'),
(29, 'ddfs', 'fsdfdsfds', '1', '2021-12-26 09:59:26', '21344.png'),
(30, 'baslik123', 'icerik', '1', '2021-12-26 16:15:02', '23.png'),
(31, '', '', '0', '2021-12-26 16:33:37', '31.png'),
(32, '', '', '0', '2021-12-26 16:35:52', '3131313.png'),
(33, 'Deneme123', '123', '0', '2021-12-26 16:37:14', '3123124124.png'),
(34, '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero ligula, lacinia ac fermentum pellentesque, iaculis vitae metus. Donec a ex ut nisl iaculis malesuada et quis quam. Etiam ut arcu magna. Maecenas hendrerit ultricies lorem, sed varius odio tempus vel. Donec blandit massa magna, quis gravida ipsum aliquam et. Curabitur vel mollis nunc, vitae pharetra libero. Quisque erat risus, consectetur ut lorem vel, tempus malesuada eros. Morbi cursus velit id magna egestas fringilla. In hendrerit rutrum mi et venenatis.  Integer volutpat libero et nunc tincidunt cursus. Fusce pellentesque mi sed eros interdum, in finibus lorem pulvinar. Curabitur egestas aliquam risus, vitae congue massa laoreet ut. Ut mattis neque erat, vulputate bibendum dolor suscipit eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse viverra volutpat lorem non pretium. Suspendisse fringilla nulla ac tellus congue venenatis. Aliquam faucibus augue vitae justo semper viverra. Donec auctor convallis enim vit', 'carphorus', '2021-12-26 16:42:29', '2334314.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `username` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`) VALUES
(3, 'erayokutay@hotmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Eray Okutay'),
(5, 'blabla@hotmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Blabla'),
(13, 'birinsan@hotmail.com', 'ed265bc903a5a097f61d3ec064d96d2e', 'birinsan'),
(14, 'erayaseray@as.com', 'fca0789e7891cbc0583298a238316122', '421412'),
(18, 'er@1.com', 'abc', 'user'),
(15, 'mach3psilon@2.com', '81dc9bdb52d04dc20036dbd8313ed055', 'mach3psilon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
