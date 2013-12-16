-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 �?12 �?16 �?22:09
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
(23, 15, '第十五周技术部会议', '新的大神诞生了！！', 1387167360);

-- --------------------------------------------------------

--
-- 表的结构 `test_user`
--

CREATE TABLE IF NOT EXISTS `test_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) CHARACTER SET utf8 NOT NULL,
  `password` char(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `test_user`
--

INSERT INTO `test_user` (`id`, `name`, `password`) VALUES
(1, 'wsq', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'wsq', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'www', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'qqq', 'e10adc3949ba59abbe56e057f20f883e'),
(5, '???', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'eee', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'eee', 'e10adc3949ba59abbe56e057f20f883e'),
(8, '555', 'c5fe25896e49ddfe996db7508cf00534'),
(9, 'root', 'e10adc3949ba59abbe56e057f20f883e'),
(10, '?', '123'),
(11, 'daasd', '?'),
(12, '222', '202cb962ac59075b964b07152d234b70'),
(13, '王', '123'),
(14, '王世卿', 'e10adc3949ba59abbe56e057f20f883e'),
(15, '宋辉', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
