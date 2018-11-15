-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 10:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_formate`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(111) NOT NULL,
  `a_id` text NOT NULL,
  `type` text NOT NULL,
  `content_one` text NOT NULL,
  `content_two` text NOT NULL,
  `content_three` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `a_id`, `type`, `content_one`, `content_two`, `content_three`) VALUES
(2, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Work Experience', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'SmFucnVhcnkgMjAwNyAtIE1hcmNoIDIwMTE=', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gRG9uZWMgdWx0cmljaWVzIG1hc3NhIGV0IGVyYXQgbHVjdHVzIGhlbmRyZXJpdC4gQ3VyYWJpdHVyIG5vbiBjb25zZXF1YXQgZW5pbS4gVmVzdGlidWx1bSBiaWJlbmR1bSBtYXR0aXMgZGlnbmlzc2ltLiBQcm9pbiBpZCBzYXBpZW4gcXVpcyBsaWJlcm8gaW50ZXJkdW0gcG9ydHRpdG9yLg=='),
(3, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Work Experience', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'SmFucnVhcnkgMjAwNyAtIE1hcmNoIDIwMTE=', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gRG9uZWMgdWx0cmljaWVzIG1hc3NhIGV0IGVyYXQgbHVjdHVzIGhlbmRyZXJpdC4gQ3VyYWJpdHVyIG5vbiBjb25zZXF1YXQgZW5pbS4gVmVzdGlidWx1bSBiaWJlbmR1bSBtYXR0aXMgZGlnbmlzc2ltLiBQcm9pbiBpZCBzYXBpZW4gcXVpcyBsaWJlcm8gaW50ZXJkdW0gcG9ydHRpdG9yLg=='),
(4, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Work Experience', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'RmVicnVhcnkgMjAwNyAtIE1hcmNoIDIwMTE=', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gRG9uZWMgdWx0cmljaWVzIG1hc3NhIGV0IGVyYXQgbHVjdHVzIGhlbmRyZXJpdC4gQ3VyYWJpdHVyIG5vbiBjb25zZXF1YXQgZW5pbS4gVmVzdGlidWx1bSBiaWJlbmR1bSBtYXR0aXMgZGlnbmlzc2ltLiBQcm9pbiBpZCBzYXBpZW4gcXVpcyBsaWJlcm8gaW50ZXJkdW0gcG9ydHRpdG9yLg=='),
(5, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Education', 'Q29sbGVnZS9Vbml2ZXJzaXR5', 'UXVhbGlmaWNhdGlvbg==', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gRG9uZWMgdWx0cmljaWVzIG1hc3NhIGV0IGVyYXQgbHVjdHVzIGhlbmRyZXJpdC4gQ3VyYWJpdHVyIG5vbiBjb25zZXF1YXQgZW5pbS4='),
(6, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Education', 'Q29sbGVnZS9Vbml2ZXJzaXR5', 'UXVhbGlmaWNhdGlvbg==', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gRG9uZWMgdWx0cmljaWVzIG1hc3NhIGV0IGVyYXQgbHVjdHVzIGhlbmRyZXJpdC4gQ3VyYWJpdHVyIG5vbiBjb25zZXF1YXQgZW5pbS4='),
(7, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Education', 'Q29sbGVnZS9Vbml2ZXJzaXR5', 'UXVhbGlmaWNhdGlvbg==', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gRG9uZWMgdWx0cmljaWVzIG1hc3NhIGV0IGVyYXQgbHVjdHVzIGhlbmRyZXJpdC4gQ3VyYWJpdHVyIG5vbiBjb25zZXF1YXQgZW5pbS4='),
(8, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Work Experience', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'SmFucnVhcnkgMjAwNyAtIE1hcmNoIDIwMTE=', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywgd2hlbiBhbiB1bmtub3duIHByaW50ZXIgdG9vayBhIGdhbGxleSBvZiB0eXBlIGFuZCBzY3JhbWJsZWQgaXQgdG8gbWFrZSBhIHR5cGUgc3BlY2ltZW4gYm9vay4='),
(9, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Work Experience', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'QXByaWwgMjAxMSAtIFByZXNlbnQ=', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywgd2hlbiBhbiB1bmtub3duIHByaW50ZXIgdG9vayBhIGdhbGxleSBvZiB0eXBlIGFuZCBzY3JhbWJsZWQgaXQgdG8gbWFrZSBhIHR5cGUgc3BlY2ltZW4gYm9vay4='),
(10, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Work Experience', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'RmVicnVhcnkgMjAwNyAtIE1hcmNoIDIwMTE=', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywgd2hlbiBhbiB1bmtub3duIHByaW50ZXIgdG9vayBhIGdhbGxleSBvZiB0eXBlIGFuZCBzY3JhbWJsZWQgaXQgdG8gbWFrZSBhIHR5cGUgc3BlY2ltZW4gYm9vay4='),
(11, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Education', 'Q29sbGVnZS9Vbml2ZXJzaXR5', 'UXVhbGlmaWNhdGlvbg==', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywg'),
(12, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Education', 'Q29sbGVnZS9Vbml2ZXJzaXR5', 'UXVhbGlmaWNhdGlvbg==', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywg'),
(13, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Education', 'Q29sbGVnZS9Vbml2ZXJzaXR5', 'UXVhbGlmaWNhdGlvbg==', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `a_id` text NOT NULL,
  `job_title` text NOT NULL,
  `w_address` text NOT NULL,
  `mobile` text NOT NULL,
  `summery` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `a_id`, `job_title`, `w_address`, `mobile`, `summery`, `image`) VALUES
(1, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS8=', 'MDEyMzQ1Njc4OTA=', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gSW50ZWdlciBkb2xvciBtZXR1cywgaW50ZXJkdW0gYXQgc2NlbGVyaXNxdWUgaW4sIHBvcnRhIGF0IGxhY3VzLiBNYWVjZW5hcyBkYXBpYnVzIGx1Y3R1cyBjdXJzdXMuIExvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNjaW5nIGVsaXQuIERvbmVjIHVsdHJpY2llcyBtYXNzYSBldCBlcmF0IGx1Y3R1cyBoZW5kcmVyaXQuIEN1cmFiaXR1ciBub24gY29uc2VxdWF0IGVuaW0uIFZlc3RpYnVsdW0gYmliZW5kdW0gbWF0dGlzIGRpZ25pc3NpbS4gUHJvaW4gaWQgc2FwaWVuIHF1aXMgbGliZXJvIGludGVyZHVtIHBvcnR0aXRvci4=', 'aW1nLzYwMTQ1MjYzNi5qcGc='),
(2, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'Sm9iIFRpdGxlIGF0IENvbXBhbnk=', 'aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS8=', 'MDEyMzQ1Njc4OTA=', 'TG9yZW0gSXBzdW0gaXMgc2ltcGx5IGR1bW15IHRleHQgb2YgdGhlIHByaW50aW5nIGFuZCB0eXBlc2V0dGluZyBpbmR1c3RyeS4gTG9yZW0gSXBzdW0gaGFzIGJlZW4gdGhlIGluZHVzdHJ5J3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywgd2hlbiBhbiB1bmtub3duIHByaW50ZXIgdG9vayBhIGdhbGxleSBvZiB0eXBlIGFuZCBzY3JhbWJsZWQgaXQgdG8gbWFrZSBhIHR5cGUgc3BlY2ltZW4gYm9vay4gSXQgaGFzIHN1cnZpdmVkIG5vdCBvbmx5IGZpdmUgY2VudHVyaWVzLCBidXQgYWxzbyB0aGUgbGVhcCBpbnRvIGVsZWN0cm9uaWMgdHlwZXNldHRpbmcsIHJlbWFpbmluZyBlc3NlbnRpYWxseSB1bmNoYW5nZWQu', 'aW1nLzY1MTE0NjAwLmpwZw==');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(111) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `data`) VALUES
(2, 'SyBFIEggUmFoYXQ=', 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'MzAwMTAwMTEx', '12-11-18'),
(3, 'S2guIEVhcXViIEhvc3NhaW4gcmFoYXQ=', 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'MzAwMTAw', '12-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(111) NOT NULL,
  `a_id` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `a_id`, `content`) VALUES
(2, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(3, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(4, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(5, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(6, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(7, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(8, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(9, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(10, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(11, 'cmFoYXQudHVzaGVyNjI5QGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(12, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(13, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(14, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(15, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(16, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(17, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw='),
(18, 'cmFoYXQudHVzaGVyNjMwQGdtYWlsLmNvbQ==', 'QSBLZXkgU2tpbGw=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
