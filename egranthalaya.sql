-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 11:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egranthalaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `acquiston_record`
--

CREATE TABLE `acquiston_record` (
  `acq_id` int(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `app_no` varchar(50) NOT NULL,
  `app_date` int(50) NOT NULL,
  `proposed` varchar(50) NOT NULL,
  `applied` varchar(50) NOT NULL,
  `order` varchar(50) NOT NULL,
  `recieved` varchar(50) NOT NULL,
  `library` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `vender` varchar(40) NOT NULL,
  `mode` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acquiston_record`
--

INSERT INTO `acquiston_record` (`acq_id`, `status`, `app_no`, `app_date`, `proposed`, `applied`, `order`, `recieved`, `library`, `currency`, `price`, `order_no`, `order_date`, `vender`, `mode`) VALUES
(1, '24', '12/02/2015', 3, '3', '3', '3', 'aa', 'aa', '400', '23', '2343', '2343', 'a', 'aa'),
(2, '24', '12/02/2015', 3, '3', '3', '3', '', '', '400', '23', '2343', '2343', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_authors`
--

CREATE TABLE `add_authors` (
  `ath_id` int(30) NOT NULL,
  `ath_name` varchar(50) NOT NULL,
  `ath_address` text NOT NULL,
  `ath_dob` int(20) NOT NULL,
  `ath_mail` varchar(50) NOT NULL,
  `ath_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_authors`
--

INSERT INTO `add_authors` (`ath_id`, `ath_name`, `ath_address`, `ath_dob`, `ath_mail`, `ath_code`) VALUES
(1, 'Vikas', 'lko', 12, 'vksh007@gmail.com', 'LIB001U02'),
(3, 'JK', 'london university', 1996, 'jk042@gmail.com', 'LIB001U02'),
(4, 'BBDU', 'bbd campus', 12, 'aa@gmail.com', 'LIB001U02'),
(5, 'NIC', 'kanpur', 28, 'vksh007@gmail.com', 'LIB001U02');

-- --------------------------------------------------------

--
-- Table structure for table `add_bib`
--

CREATE TABLE `add_bib` (
  `bib_id` int(30) NOT NULL,
  `bib_code` varchar(50) NOT NULL,
  `bib_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_bib`
--

INSERT INTO `add_bib` (`bib_id`, `bib_code`, `bib_name`) VALUES
(3, 'S', 'Serials'),
(4, 'M', 'Monographs'),
(5, '007', 'bond');

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `book_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cat` varchar(30) NOT NULL,
  `bib` varchar(30) NOT NULL,
  `material` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `author1` varchar(30) NOT NULL,
  `author2` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `publisher` varchar(40) NOT NULL,
  `place` varchar(30) NOT NULL,
  `date` int(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `abstract` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`book_id`, `title`, `cat`, `bib`, `material`, `language`, `author1`, `author2`, `author`, `year`, `publisher`, `place`, `date`, `subject`, `abstract`) VALUES
(1, 'a', '235', 'BBDU', 'chjhl;', '', 'NIC', 'NIC', 'Vikas', 'w5tt8', '', 'dghvk', 2547869, 'aaa', ''),
(2, 'as', 'e67578', 'BBDU', 'chjhl;', '', 'BBDU', 'BBDU', 'BBDU', '36656', '', 'vjn', 254578, '', ' jbn./,'),
(3, 'c', '235', 'BBDU', 'chjhl;', '', 'NIC', 'NIC', 'NIC', '365476', 'NIC', 'lko', 356, 'aaa', 'fxhjbn.m'),
(4, 'a', '6', 'BBDU', 'chjhl;', '', 'NIC', 'NIC', 'NIC', '25475', 'BBDU', 'lko', 3658, 'aaa', 'xghfvkm'),
(5, 'b', '235', 'BBDU', 'chjhl;', '', 'BBDU', 'BBDU', 'BBDU', '25475', 'BBDU', 'lko', 467679, 'aaa', 'dhgh.'),
(6, 'a', 'a', 'BBDU', 'chjhl;', '', 'NIC', 'NIC', 'NIC', '25475', 'NIC', 'lko', 4658, 'aaa', 'dwrhtkj'),
(7, 'a', '235', 'BBDU', 'chjhl;', '', 'BBDU', 'NIC', 'NIC', '3236y7u56', '', 'xasvd', 53475, 'aaa', 'czvf '),
(8, 'a', '235', 'BBDU', 'chjhl;', '', 'BBDU', 'BBDU', 'BBDU', 'e1453', 'BBDU', 'safvbf', 437, 'aaa', 'csdbfng'),
(9, 'aaa', '3242', 'BBDU', 'chjhl;', '', 'BBDU', 'NIC', 'BBDU', '2015', 'BBDU', 'bly', 11, 'aaa', 'aaaaaaa'),
(10, 'a', '235', 'BBDU', 'chjhl;', 'English', 'BBDU', 'BBDU', 'BBDU', '34325r', 'BBDU', 'avd', 42547, 'aaa', 'v dc g'),
(11, '', '14', 'Serials', 'Books', 'English', '', '', '', '2001', 'BBDU', 'LKO', 2013, 'aaa', 'ACSD'),
(12, 'abc', '15', 'Serials', 'Books', 'Hindi', 'JK', 'JK', 'JK', '2001', 'BBDU', 'lucknow', 29, 'aaa', 'acx'),
(13, 'xxx', '19', 'Monographs', 'Annuals', 'English', 'Vikas', 'JK', 'pravan', '2001', 'BBDU', 'lucknow', 29, 'aaa', 'xdfg');

-- --------------------------------------------------------

--
-- Table structure for table `add_library`
--

CREATE TABLE `add_library` (
  `lib_id` int(30) NOT NULL,
  `lib_name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `lib_type` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_mat`
--

CREATE TABLE `add_mat` (
  `mat_id` int(30) NOT NULL,
  `mat_code` varchar(40) NOT NULL,
  `mat_name` varchar(50) NOT NULL,
  `mat_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_mat`
--

INSERT INTO `add_mat` (`mat_id`, `mat_code`, `mat_name`, `mat_level`) VALUES
(11, 'B', 'Books', 'Serials'),
(12, 'A', 'Annuals', 'Monographs');

-- --------------------------------------------------------

--
-- Table structure for table `add_member_record`
--

CREATE TABLE `add_member_record` (
  `member_id` int(30) NOT NULL,
  `member_no` varchar(30) NOT NULL,
  `member_name` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `res_add` text NOT NULL,
  `off_add` text NOT NULL,
  `password` varchar(40) NOT NULL,
  `rpassword` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `age` int(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `add_date` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `closing_date` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_member_record`
--

INSERT INTO `add_member_record` (`member_id`, `member_no`, `member_name`, `category`, `res_add`, `off_add`, `password`, `rpassword`, `mail`, `age`, `phone`, `add_date`, `gender`, `closing_date`, `file`) VALUES
(1, '12', 'Vikas', 'w2', 'lucknow', 'sv', '', ' xzknb', 'vksh007@gmail.com', 12, 2147483647, '12', '', '2343', '../member/../member/images/014.jpg'),
(2, '13', 'BBDU', 'gr', '    xsv', 'acs', '1234', ' xzknb', 'xs', 12, 2147483647, '12', 'Male', '2343', '../member/images/014.jpg'),
(3, '14', 'BBDU', 'gr', '    xsv', 'aaa', '1234', 'aaa', 'xs', 0, 2147483647, '0', 'Male', '0', '../member/images/014.jpg'),
(4, '15', 'Vikas', 'gr', 'lucknow', 'aa', '1234', 'aa', 'vksh007@gmail.com', 121, 2147483647, '1234', 'Male', '1213354', '../member/../member/images/014.jpg'),
(5, '0', 'member', 'student', 'lko', 'lko', '12345', '12345', 'member@gmail.com', 21, 2147483647, '6', 'Male', '6', 'images/Chrysanthemum.jpg'),
(6, 'MEM12', 'member', 'student', '      lko1', 'lko', '123', '1234', 'member1@gmail.com', 21, 2147483647, '06-05-2015', 'Male', '06-05-2020', '../member/../member/../member/images/Chrysanthemum.jpg'),
(7, '33', 'Vikas', 'aa', 'hazratganj,lko.', 'bbdu,lko.', '1234', '1234', 'vksh007@gmail.com', 21, 113456789, '25-04-2017', 'Male', '25-04-2022', 'images/-downloadfiles-wallpapers-1280_960-universal_nature_4868.jpg'),
(8, '007', 'bond', 'W2', 'LKO', 'LKO', '1234', '1234', 'vksh007@gmail.com', 42, 2147483647, '28-04-2017', 'Male', '28-04-2022', 'images/IMG_20160919_194417.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_publisher`
--

CREATE TABLE `add_publisher` (
  `pub_id` int(20) NOT NULL,
  `pub_name` varchar(50) NOT NULL,
  `place` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `phn` int(12) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_publisher`
--

INSERT INTO `add_publisher` (`pub_id`, `pub_name`, `place`, `country`, `address`, `phn`, `mail`) VALUES
(1, 'BBDU', 'lknw', 'India', 'stgdfjkj/', 12345678, 'wgfjhl.,'),
(3, 'India Times', 'lucknow', 'India', 'gomti nagar,lko.', 123456789, 'vksh007@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_return_renew`
--

CREATE TABLE `add_return_renew` (
  `return_id` int(30) NOT NULL,
  `acc_no` int(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(40) NOT NULL,
  `idate` varchar(20) NOT NULL,
  `itime` varchar(20) NOT NULL,
  `rdate` varchar(20) NOT NULL,
  `rtime` varchar(20) NOT NULL,
  `ddate` varchar(30) NOT NULL,
  `redate` varchar(30) NOT NULL,
  `fdue` varchar(40) NOT NULL,
  `fcollected` varchar(40) NOT NULL,
  `dadded` varchar(40) NOT NULL,
  `ucode` varchar(40) NOT NULL,
  `dmodified` varchar(40) NOT NULL,
  `mno` varchar(40) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `ddays` varchar(40) NOT NULL,
  `entitlement` varchar(50) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `bissued` varchar(40) NOT NULL,
  `group` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `fine_days` varchar(40) NOT NULL,
  `adate` varchar(40) NOT NULL,
  `cdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_return_renew`
--

INSERT INTO `add_return_renew` (`return_id`, `acc_no`, `title`, `author`, `publisher`, `idate`, `itime`, `rdate`, `rtime`, `ddate`, `redate`, `fdue`, `fcollected`, `dadded`, `ucode`, `dmodified`, `mno`, `mname`, `designation`, `ddays`, `entitlement`, `mail`, `bissued`, `group`, `phone`, `fine_days`, `adate`, `cdate`) VALUES
(1, 0, 'a', 'a', 'a', '0', '0', '0', '0', '0', '0', '', 'a', '0', '0', 'a', 'a', 'a', 'a', '0', '', 'a', 'a', 'a', 'a', 'a', '0', '0'),
(2, 0, 'a', 'a', 'a', '0', '0', '0', '0', '0', '0', '', 'a', '0', '0', 'a', 'MEM12', 'a', 'a', '0', '', 'a', 'a', 'a', 'a', 'a', '0', '0'),
(3, 7, 'MATHS', 'VIKAS', 'PRANAV', '29 April 2017', '1:30', '06 May 2017', '12:00', '', '04 May 2017', '200', '100', '', '12', '', '12', '', 'STUDENT', '6', 'BH', 'VHB', '2', '', '12345679', '1000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_section`
--

CREATE TABLE `add_section` (
  `sec_id` int(30) NOT NULL,
  `sec_code` varchar(30) NOT NULL,
  `sec_name` varchar(50) NOT NULL,
  `sec_des` text NOT NULL,
  `se_code1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_section`
--

INSERT INTO `add_section` (`sec_id`, `sec_code`, `sec_name`, `sec_des`, `se_code1`) VALUES
(1, 'LIB001', 'BBDU', 'dyrfuyo', 'LBI123'),
(3, 'LIB001', 'BBDU', '', 'LIB001U02'),
(4, '007', 'Vikas', 'Bold', 'LIB001U02');

-- --------------------------------------------------------

--
-- Table structure for table `add_subject`
--

CREATE TABLE `add_subject` (
  `subject_id` int(40) NOT NULL,
  `subject_heading` varchar(60) NOT NULL,
  `keywords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_subject`
--

INSERT INTO `add_subject` (`subject_id`, `subject_heading`, `keywords`) VALUES
(1, 'aaa', 'aa11'),
(4, 'bbb', 'bb12'),
(5, 'abc', 'c13');

-- --------------------------------------------------------

--
-- Table structure for table `add_users`
--

CREATE TABLE `add_users` (
  `user_id` int(20) NOT NULL,
  `user_code` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `lib_code` varchar(30) NOT NULL,
  `active_permission` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_users`
--

INSERT INTO `add_users` (`user_id`, `user_code`, `user_name`, `password`, `lib_code`, `active_permission`) VALUES
(7, 'LIB001U02', 'abc', '1234', 'LIB002', 'reserve,search');

-- --------------------------------------------------------

--
-- Table structure for table `add_vendor`
--

CREATE TABLE `add_vendor` (
  `ven_id` int(30) NOT NULL,
  `ven_name` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `country` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `phn` int(20) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_vendor`
--

INSERT INTO `add_vendor` (`ven_id`, `ven_name`, `place`, `country`, `address`, `phn`, `mail`) VALUES
(4, 'BBDU', 'lucknow', 'India', 'bbdu,lko.', 123456789, 'vksh007@gmail.com'),
(5, 'book house', 'lucknow', 'India', 'gomti nagar,lko.', 123456789, 'vksh007@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `check_duplicate`
--

CREATE TABLE `check_duplicate` (
  `check_id` int(30) NOT NULL,
  `bib_level` varchar(40) NOT NULL,
  `mat_level` varchar(40) NOT NULL,
  `doc_level` varchar(40) NOT NULL,
  `aut` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `search` varchar(20) NOT NULL,
  `option` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `feedback_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `des` varchar(40) NOT NULL,
  `org` varchar(40) NOT NULL,
  `oaddress` text NOT NULL,
  `raddress` text NOT NULL,
  `ophone` int(20) NOT NULL,
  `rphone` int(20) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`feedback_id`, `name`, `des`, `org`, `oaddress`, `raddress`, `ophone`, `rphone`, `mobile_no`, `mail`, `comments`) VALUES
(1, 'BBDU', 'aa', 'aa', 'aa', 'aa', 1234567, 123456, 2147483647, 'shalu@gmail.com', 'aa'),
(2, '', '', '', '', '', 0, 0, 0, '', ''),
(3, 'VIKAS ', 'STUDENT', 'E-SOFT ', 'BBDU LUCKNOW', 'HAZRATGANJ', 522262210, 2147483647, 2147483647, 'vksh007@gmail.com', 'VERY INTRESTING ');

-- --------------------------------------------------------

--
-- Table structure for table `gen_aqu`
--

CREATE TABLE `gen_aqu` (
  `gen_id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `search` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `aut1` int(11) NOT NULL,
  `aut2` int(11) NOT NULL,
  `corp` int(11) NOT NULL,
  `multi` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `pub` int(11) NOT NULL,
  `acq` int(11) NOT NULL,
  `catno` int(11) NOT NULL,
  `process` int(11) NOT NULL,
  `appno` int(11) NOT NULL,
  `appdate` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `memono` int(11) NOT NULL,
  `memodate` int(11) NOT NULL,
  `copy` int(11) NOT NULL,
  `currency` int(11) NOT NULL,
  `itemprice` int(11) NOT NULL,
  `setprice` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_lib`
--

CREATE TABLE `manage_lib` (
  `lib_id` int(30) NOT NULL,
  `lib_code` varchar(30) NOT NULL,
  `lib_name` varchar(40) NOT NULL,
  `location` text NOT NULL,
  `city` varchar(40) NOT NULL,
  `lib_type` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `about_lib` text NOT NULL,
  `about_service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_lib`
--

INSERT INTO `manage_lib` (`lib_id`, `lib_code`, `lib_name`, `location`, `city`, `lib_type`, `address`, `about_lib`, `about_service`) VALUES
(6, 'LIB002', 'BBDU', 'BBBU,LUCKNOW', 'LUCKNOW', 'Main Library', 'BBDU,FAIZABAD ROAD,LUCKNOW', '', ''),
(7, 'aa', 'aaa', 'aaa', 'bly', 'Main Library', 'qwaaa', '', ''),
(8, '007', 'abc', 'Kanpur', 'Kanpur', 'Main Library', 'xyz', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member1_login`
--

CREATE TABLE `member1_login` (
  `member_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `member_id` int(30) NOT NULL,
  `member_no` varchar(40) NOT NULL,
  `member_name` varchar(40) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `add2` text NOT NULL,
  `add1` text NOT NULL,
  `mail` varchar(40) NOT NULL,
  `age` int(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` int(40) NOT NULL,
  `add_date` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `override` varchar(40) NOT NULL,
  `cls_date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`member_id`, `member_no`, `member_name`, `category`, `sub_category`, `add2`, `add1`, `mail`, `age`, `password`, `phone`, `add_date`, `gender`, `override`, `cls_date`) VALUES
(1, '12', 'BBDU', 'Student', 'Student', 'lko', 'lko', 'shalu@gmail.com', 22, '1234', 2147483647, '12/02/2015', 'Female', 'Yes', '24/10/2015'),
(2, '12', 'BBDU', 'Student', 'Student', 'aaa', 'aaa', 'shalu@gmail.com', 12, '12345', 2147483647, '12/02/2015', 'Female', 'Yes', '2343');

-- --------------------------------------------------------

--
-- Table structure for table `member_login`
--

CREATE TABLE `member_login` (
  `member_id` int(30) NOT NULL,
  `member_no` int(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_login`
--

INSERT INTO `member_login` (`member_id`, `member_no`, `password`) VALUES
(2, 1, 'aa'),
(3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE `member_registration` (
  `member_id` int(30) NOT NULL,
  `member_no` int(40) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `res_add` text NOT NULL,
  `off_add` text NOT NULL,
  `password` varchar(40) NOT NULL,
  `rpassword` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `add_date` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `closing_date` int(20) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`member_id`, `member_no`, `member_name`, `category`, `res_add`, `off_add`, `password`, `rpassword`, `mail`, `age`, `phone`, `add_date`, `gender`, `closing_date`, `file`) VALUES
(1, 12, 'BBDU', 'gr', 'aa', 'aa', '12', '12', 'shalu@gmail.com', 12, 2147483647, 12, 'Female', 24, 'images/Penguins.jpg'),
(2, 12, 'aa', 'gr', 'aa', 'aa', '12', '12', 'shalu@gmail.com', 22, 2147483647, 12, 'Female', 24, 'images/Desert.jpg'),
(3, 12, 'sh', 'aa', 'aa', 'aa', '123', '123', 'shalu@gmail.com', 22, 2147483647, 12, 'Female', 24, 'images/Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_record`
--

CREATE TABLE `purchase_record` (
  `purchase_id` int(20) NOT NULL,
  `title` text NOT NULL,
  `authore` varchar(30) NOT NULL,
  `publisher` varchar(40) NOT NULL,
  `app_no` varchar(40) NOT NULL,
  `process_status` varchar(50) NOT NULL,
  `app_date` int(20) NOT NULL,
  `volume` varchar(30) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `item_price` varchar(40) NOT NULL,
  `library` varchar(40) NOT NULL,
  `user code` varchar(40) NOT NULL,
  `acquisition_mode` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acquiston_record`
--
ALTER TABLE `acquiston_record`
  ADD PRIMARY KEY (`acq_id`);

--
-- Indexes for table `add_authors`
--
ALTER TABLE `add_authors`
  ADD PRIMARY KEY (`ath_id`);

--
-- Indexes for table `add_bib`
--
ALTER TABLE `add_bib`
  ADD PRIMARY KEY (`bib_id`),
  ADD UNIQUE KEY `bib_code` (`bib_code`);

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `add_library`
--
ALTER TABLE `add_library`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indexes for table `add_mat`
--
ALTER TABLE `add_mat`
  ADD PRIMARY KEY (`mat_id`),
  ADD UNIQUE KEY `mat_code` (`mat_code`);

--
-- Indexes for table `add_member_record`
--
ALTER TABLE `add_member_record`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `add_publisher`
--
ALTER TABLE `add_publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indexes for table `add_return_renew`
--
ALTER TABLE `add_return_renew`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `add_section`
--
ALTER TABLE `add_section`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `add_subject`
--
ALTER TABLE `add_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `add_users`
--
ALTER TABLE `add_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user code` (`user_code`);

--
-- Indexes for table `add_vendor`
--
ALTER TABLE `add_vendor`
  ADD PRIMARY KEY (`ven_id`);

--
-- Indexes for table `check_duplicate`
--
ALTER TABLE `check_duplicate`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `manage_lib`
--
ALTER TABLE `manage_lib`
  ADD PRIMARY KEY (`lib_id`),
  ADD UNIQUE KEY `lib_code` (`lib_code`);

--
-- Indexes for table `member1_login`
--
ALTER TABLE `member1_login`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_login`
--
ALTER TABLE `member_login`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_registration`
--
ALTER TABLE `member_registration`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `purchase_record`
--
ALTER TABLE `purchase_record`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acquiston_record`
--
ALTER TABLE `acquiston_record`
  MODIFY `acq_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `add_authors`
--
ALTER TABLE `add_authors`
  MODIFY `ath_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `add_bib`
--
ALTER TABLE `add_bib`
  MODIFY `bib_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `book_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `add_library`
--
ALTER TABLE `add_library`
  MODIFY `lib_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_mat`
--
ALTER TABLE `add_mat`
  MODIFY `mat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `add_member_record`
--
ALTER TABLE `add_member_record`
  MODIFY `member_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `add_publisher`
--
ALTER TABLE `add_publisher`
  MODIFY `pub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `add_return_renew`
--
ALTER TABLE `add_return_renew`
  MODIFY `return_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `add_section`
--
ALTER TABLE `add_section`
  MODIFY `sec_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `add_subject`
--
ALTER TABLE `add_subject`
  MODIFY `subject_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `add_users`
--
ALTER TABLE `add_users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `add_vendor`
--
ALTER TABLE `add_vendor`
  MODIFY `ven_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `check_duplicate`
--
ALTER TABLE `check_duplicate`
  MODIFY `check_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `feedback_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manage_lib`
--
ALTER TABLE `manage_lib`
  MODIFY `lib_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member1_login`
--
ALTER TABLE `member1_login`
  MODIFY `member_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `member_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_login`
--
ALTER TABLE `member_login`
  MODIFY `member_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `member_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchase_record`
--
ALTER TABLE `purchase_record`
  MODIFY `purchase_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
