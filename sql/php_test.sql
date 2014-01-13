-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 �?01 �?13 �?14:27
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `php_test`
--
CREATE DATABASE IF NOT EXISTS `php_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_test`;

-- --------------------------------------------------------

--
-- 表的结构 `test_message`
--

CREATE TABLE IF NOT EXISTS `test_message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 NOT NULL,
  `message` mediumtext CHARACTER SET utf8 NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `test_message`
--

INSERT INTO `test_message` (`mid`, `uid`, `subject`, `message`, `time`) VALUES
(1, 0, '????', 'xxxxxxxx', 0),
(2, 0, '??????', '?????', 12),
(3, 0, '12345', 'weqweqweqwe', 12),
(4, 0, '1231312', 'wqeq;hwewq;e;qw', 12),
(5, 0, 'asdha;ksd', 'ha;ksdasjkhd\r\n', 12),
(6, 0, '121212121', 'ahsdkasdasdjas;', 12),
(7, 0, '1323', 'wqewqe', 12),
(8, 0, '3123132', 'weqwewqeqw', 12),
(9, 0, '3123132', 'weqwewqeqw', 12),
(10, 4, 'www', 'qqqq', 12),
(11, 4, 'wsq', 'asdasdjaskljds', 1387106100),
(12, 0, 'wsq', 'sadsdasdaskdhakjd', 1387106100),
(13, 5, 'wqweqeq', 'qweqweqweqwewqe', 1387106100),
(14, 4, '12312323123', '213231232312', 1387106100),
(15, 6, 'weqewqew', 'eqweqweqweqw', 1387106100),
(16, 6, 'ewrwrwer', 'ewrerwrewr', 1387192560),
(17, 8, '12313213', '2312312312', 1387192560),
(18, 4, 'ewrwe', 'ewrwerwerw', 1387192560),
(19, 9, '2312', '132312321', 1387192560),
(20, 9, '????', '????????????????? ', 1387192560),
(21, 9, '????', '?????', 1387192560),
(22, 14, '第十五周', '我是个好人', 1387167360),
(23, 15, '第十五周技术部会议', '新的大神诞生了！！', 1387167360),
(24, 2, 'sdfds', 'sdfsdfs', 1387513200),
(25, 2, '第十五周', '大家表现的很好', 1387513200),
(26, 5, '第十六周', '撒打算看来大家安静收到了', 1387513200);

-- --------------------------------------------------------

--
-- 表的结构 `test_user`
--

CREATE TABLE IF NOT EXISTS `test_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) CHARACTER SET utf8 NOT NULL,
  `password` char(32) CHARACTER SET utf8 NOT NULL,
  `adminid` int(11) DEFAULT '8',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `test_user`
--

INSERT INTO `test_user` (`id`, `name`, `password`, `adminid`) VALUES
(1, '阿狸', 'cee8d6b7ce52554fd70354e37bbf44a2', 1),
(3, 'wsq123', 'd41d8cd98f00b204e9800998ecf8427e', 8),
(4, 'wwww', 'd41d8cd98f00b204e9800998ecf8427e', 8),
(5, '琪琪', '099b3b060154898840f0ebdfb46ec78f', 8),
(8, 'wwww', '4eae35f1b35977a00ebd8086c259d4c9', 8),
(9, '啊啊啊', '47bce5c74f589f4867dbd57e9ca9f808', 8),
(10, '别别别', '08f8e0260c64418510cefb2b06eee5cd', 8),
(11, '试试', '3691308f2a4c2f6983f2880d32e29c84', 8),
(12, '宋辉', 'e10adc3949ba59abbe56e057f20f883e', 8),
(13, 'jb', 'c4a6c07a8a2d7c804a5776d9d039428a', 8),
(14, '宋辉', 'e10adc3949ba59abbe56e057f20f883e', 8),
(15, 'jb', 'c4a6c07a8a2d7c804a5776d9d039428a', 8),
(17, '啦啦啦', 'e10adc3949ba59abbe56e057f20f883e', 8),
(18, '阿狸阿狸', '3861a60523ef89a017be166c5b325409', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
