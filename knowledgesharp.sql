-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jan 01, 2014, 06:35 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `ccumiskm`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `content`
-- 

CREATE TABLE `content` (
  `aid` int(5) NOT NULL auto_increment,
  `title` varchar(30) character set utf8 NOT NULL,
  `question` varchar(10) character set utf8 NOT NULL,
  `org` varchar(10) character set utf8 NOT NULL,
  `dept` varchar(10) character set utf8 NOT NULL,
  `grade` varchar(20) character set utf8 NOT NULL,
  `member` varchar(30) character set utf8 NOT NULL,
  `advisor` varchar(10) character set utf8 NOT NULL,
  `createTime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- 列出以下資料庫的數據： `content`
-- 

INSERT INTO `content` VALUES (2, 'SITCON Knowledge Sharp Project Report Sample', 'Veck Hsiao', 'National Chen Chi University', 'Department of Computer Science', '102 級 (97 學年度) ', 'Veck Hsiao、Wade Chen、Michelle Cheng', '**', '2013-10-13 11:33:40');

-- --------------------------------------------------------

-- 
-- 資料表格式： `user`
-- 

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL auto_increment COMMENT 'Primary Key',
  `u_name` varchar(50) NOT NULL COMMENT 'user name',
  `u_level` int(11) NOT NULL COMMENT 'user level',
  `u_log_name` varchar(50) default NULL COMMENT 'login name',
  `u_passwd` varchar(50) NOT NULL default 'testing',
  `u_email` varchar(50) NOT NULL COMMENT 'user email',
  `act_time` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT 'the time the account  act',
  PRIMARY KEY  (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- 列出以下資料庫的數據： `user`
-- 

INSERT INTO `user` VALUES (1, 'fbukevin', 0, '407530048', 'testing', 'fbukevin@gmail.com', '2013-10-12 14:43:27');
