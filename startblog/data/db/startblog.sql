-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 07 月 21 日 17:46
-- 服务器版本: 5.1.50
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `startblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(100) CHARACTER SET utf8 NOT NULL,
  `published_at` datetime NOT NULL,
  `pv` int(50) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `category`, `tag`, `published_at`, `pv`) VALUES
(1, 'Startblog', '##Startblog是什么?\r\n\r\nstartblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统\r\n\r\n##startblog有哪些功能？\r\n\r\n* 博文撰写、修改、删除功能\r\n* markdown语法支持\r\n* 数据备份功能\r\n* 文章搜索功能\r\n* 标签功能\r\n\r\n##有问题反馈\r\n在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流\r\n\r\n* QQ: 416049355\r\n* weibo: [@Cryin1985](http://weibo.com/justear)\r\n* github:(https://github.com/Cryin/Startblog)\r\n\r\n##捐助开发者\r\n基于对php的兴趣，学习写一个`免费`的东西，希望你喜欢我的作品，同时也能支持一下。\r\n\r\n##关于作者\r\n\r\n```python\r\nprint "Auth: Cryin"\r\nprint "github : https://github.com/Cryin/Startblog"\r\n  }\r\n```', '4', 'startblog,php,github', '2016-01-01 00:00:00', 6),
(2, 'PHP Markdown', 'PHP Markdown\r\n============\r\n\r\nPHP Markdown Lib 1.6.0 - 23 Dec 2015\r\n\r\nby Michel Fortin  \r\n<https://michelf.ca/>\r\n\r\nbased on Markdown by John Gruber  \r\n<https://daringfireball.net/>\r\n\r\n\r\nIntroduction\r\n------------\r\n\r\nThis is a library package that includes the PHP Markdown parser and its \r\nsibling PHP Markdown Extra with additional features.\r\n\r\nMarkdown is a text-to-HTML conversion tool for web writers. Markdown\r\nallows you to write using an easy-to-read, easy-to-write plain text\r\nformat, then convert it to structurally valid XHTML (or HTML).\r\n\r\n"Markdown" is actually two things: a plain text markup syntax, and a \r\nsoftware tool, originally written in Perl, that converts the plain text \r\nmarkup to HTML. PHP Markdown is a port to PHP of the original Markdown \r\nprogram by John Gruber.\r\n\r\n*	[Full documentation of the Markdown syntax](<https://daringfireball.net/projects/markdown/>)  \r\n	— Daring Fireball (John Gruber)\r\n*	[Markdown Extra syntax additions](<https://michelf.ca/projects/php-markdown/extra/>)  \r\n	— Michel Fortin\r\n\r\n\r\nRequirement\r\n-----------\r\n\r\nThis library package requires PHP 5.3 or later.\r\n\r\nNote: The older plugin/library hybrid package for PHP Markdown and\r\nPHP Markdown Extra is still maintained and will work with PHP 4.0.5 and later.\r\n\r\nBefore PHP 5.3.7, pcre.backtrack_limit defaults to 100 000, which is too small\r\nin many situations. You might need to set it to higher values. Later PHP \r\nreleases defaults to 1 000 000, which is usually fine.\r\n\r\n\r\nUsage\r\n-----\r\n> 1111', '4', 'markdown', '2016-01-01 00:00:00', 4);

-- --------------------------------------------------------

--
-- 表的结构 `article_tag`
--

CREATE TABLE IF NOT EXISTS `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(50) unsigned NOT NULL,
  `tag_id` int(50) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(4, 1, 2),
(5, 1, 4),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 3, 1),
(10, 1, 6),
(11, 7, 7),
(12, 7, 1),
(13, 7, 14),
(14, 0, 1),
(15, 0, 30),
(16, 8, 30);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category_order` int(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `category`, `category_order`) VALUES
(8, 'python', 1),
(4, 'Startblog', 1),
(5, '漏洞分析', 1),
(6, '代码审计', 1),
(7, 'web安全', 1);

-- --------------------------------------------------------

--
-- 表的结构 `siteinfo`
--

CREATE TABLE IF NOT EXISTS `siteinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `title` text NOT NULL,
  `keywords` text,
  `description` text,
  `statistic` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `siteinfo`
--

INSERT INTO `siteinfo` (`id`, `url`, `email`, `title`, `keywords`, `description`, `statistic`) VALUES
(1, 'http://www.startblog.cc', 'startblog@sina.cn', 'startblog', 'startblog,codeigniter,markdown', 'startblog', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag_button_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `tag`
--

INSERT INTO `tag` (`id`, `tag_name`, `tag_button_type`) VALUES
(1, 'php', 'primary'),
(2, 'python', 'success'),
(3, 'linux', 'info'),
(9, 'mysql', 'success'),
(8, 'codeigniter', 'info'),
(7, 'startblog', 'primary'),
(12, 'bug', 'info'),
(13, 'exploit', 'info'),
(14, 'github', 'success'),
(15, 'webscan', 'success'),
(17, '漏洞分析', 'primary'),
(18, '代码审计', 'warning'),
(19, 'POC', 'info'),
(20, 'bootstrap', 'info'),
(21, 'html5', 'danger'),
(22, 'XSS', 'success'),
(23, 'XXE', 'primary'),
(24, 'Sqlinjection', 'primary'),
(25, 'CSRF', 'danger'),
(26, 'IAST', 'success'),
(27, 'JAVA', 'primary'),
(28, 'HTTP', 'success'),
(29, 'TOOL', 'primary'),
(30, 'markdown', 'danger'),
(32, 'test', 'warning');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'startblog', '2f780b5a7762af9c258076e913178715');
