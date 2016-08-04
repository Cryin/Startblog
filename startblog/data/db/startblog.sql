-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-08-04 11:16:38
-- 服务器版本： 5.5.47
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `title`, `tag`, `content`) VALUES
(1, '关于', 'startblog,python,Security Engineer,hacker', '##Startblog是什么?\r\n\r\nstartblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统\r\n\r\n###博客功能\r\nmarkdown博文撰写、修改、删除功能,采用使用simplemde编辑器;\r\nmarkdown语法解析支持，使用parsedown解析;\r\n文章搜索、备份功能;\r\n站点、博文SEO信息设置;\r\nRSS订阅功能;\r\n\r\n###运行环境:\r\n```python\r\nprint "php 5.2+ 、 mysql"\r\n```\r\n###捐助开发者\r\n基于对php的兴趣，学习写一个`免费`的东西，希望你喜欢我的作品，同时也能支持一下。\r\n\r\n###关于作者\r\ngithub [https://github.com/Cryin/Startblog](https://github.com/Cryin/Startblog)\r\n\r\n###下载\r\n [startblog v1.3](https://github.com/Cryin/Startblog)');

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章关键词',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT '博文seo描述',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(100) CHARACTER SET utf8 NOT NULL,
  `published_at` datetime NOT NULL,
  `pv` int(50) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `title`, `keyword`, `description`, `content`, `category`, `tag`, `published_at`, `pv`) VALUES
(9, 'Startblog', 'startblog,codeigniter blog,markdown blog,php', 'startblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统', '# Startblog\r\n\r\n>startblog是一个基于codeigniter 3.x开发的简单、易用、适合技术从业者使用的Markdown博客系统！\r\n\r\n>Author: [Cryin'']\r\n\r\n###程序功能：\r\n\r\n* markdown博文撰写、修改、删除功能,采用使用simplemde编辑器;\r\n* markdown语法解析支持，使用parsedown解析;\r\n* 文章搜索、备份功能;\r\n* 站点、博文SEO信息设置;\r\n* RSS订阅功能;\r\n\r\n###运行环境:\r\n* php 5.x + mysql\r\n\r\n###反馈:\r\n\r\n基于对php的兴趣，学习写一个blog自己使用，有问题可以和我交流。\r\n\r\n###关于作者\r\n\r\n* github https://github.com/Cryin/Startblog\r\n\r\n###使用说明:\r\n\r\n>根据站点目录设置application\\config\\config.php文件$config[''base_url'']项\r\n\r\n>根据站点目录修改.htaccess文件Rewrite规则\r\n\r\n>设置数据库配置信息：application\\config\\database.php文件\r\n\r\n>创建数据库startblog，并导入sql文件，路径data\\db\\startblog.sql\r\n\r\n>管理默认用户名、密码均为startblog\r\n\r\n>>有些环境下可能会出现找不到model的问题，这种情况把application\\models\\ 下所有文件首字母改成大写即可\r\n\r\n###Screenshot\r\n文章编辑:\r\n\r\n![](http://i4.piimg.com/567571/2593ba39f83e00d1.png)\r\n\r\n前台页面：\r\n\r\n![](http://i4.piimg.com/567571/259bca5d799ea672.png)\r\n\r\n###更新说明:\r\n\r\n>2016/7/12 完成基本功能！version：startblog v1.0\r\n\r\n>2016/7/22 初始化sql文件，修复xss问题及标签显示bug！\r\n\r\n>2016/7/25 修改登录页面及标签页面！\r\n\r\n>2016/7/27 完成站点SEO功能，增加url rewrite，完成文章页面seo功能，添加登录logo！version：startblog v1.1\r\n\r\n>2016/7/27 增加about编辑功能，添加评论功能！version：startblog v1.2\r\n\r\n>2016/8/1  增加rss订阅功能！version：startblog v1.3\r\n\r\n>...\r\n', '4', 'startblog,php,github', '2016-07-22 00:00:00', 10),
(10, 'Markdown入门指南', ' Markdown入门指南', ' Markdown入门指南', '#Markdown入门指南\r\n\r\n##Strong and Emphasize\r\n```\r\n*emphasize*   **strong**\r\n_emphasize_   __strong__\r\n```\r\n##Links and Email\r\nInline:\r\n```\r\nAn [example](http://url.com/ "Title")\r\n```\r\nReference-style labels (titles are optional):\r\n```\r\n\r\nAn [example][id]. Then, anywhere\r\nelse in the doc, define the link:\r\n\r\n  [id]: http://example.com/  "Title"\r\n```\r\nEmail:\r\n```\r\nAn email <example@example.com> link.\r\n```\r\n\r\n##Images\r\nInline (titles are optional):\r\n```\r\n![alt text](/path/img.jpg "Title")\r\n```\r\nReference-style:\r\n```\r\n![alt text][id]\r\n\r\n[id]: /url/to/img.jpg "Title"\r\n```\r\n##Headers\r\n```\r\nSetext-style:\r\n\r\nHeader 1\r\n========\r\n\r\nHeader 2\r\n--------\r\n```\r\natx-style (closing #’s are optional):\r\n```\r\n# Header 1 #\r\n\r\n## Header 2 ##\r\n\r\n###### Header 6\r\n```\r\n##Lists\r\nOrdered, without paragraphs:\r\n```\r\n1.  Foo\r\n2.  Bar\r\n```\r\nUnordered, with paragraphs:\r\n```\r\n*   A list item.\r\n\r\n    With multiple paragraphs.\r\n\r\n*   Bar\r\n```\r\nYou can nest them:\r\n```\r\n*   Abacus\r\n    * answer\r\n*   Bubbles\r\n    1.  bunk\r\n    2.  bupkis\r\n        * BELITTLER\r\n    3. burper\r\n*   Cunning\r\n```\r\n##Blockquotes\r\n```\r\n> Email-style angle brackets\r\n> are used for blockquotes.\r\n\r\n> > And, they can be nested.\r\n\r\n> #### Headers in blockquotes\r\n> \r\n> * You can quote a list.\r\n> * Etc.\r\n```\r\n##Inline Code\r\n```\r\n`<code>` spans are delimited\r\nby backticks.\r\n\r\nYou can include literal backticks\r\nlike `` `this` ``.\r\n```\r\n##Block Code\r\nIndent every line of a code block by at least 4 spaces or 1 tab.\r\n```\r\nThis is a normal paragraph.\r\n\r\n    This is a preformatted\r\n    code block.\r\n```\r\n##Horizontal Rules\r\nThree or more dashes or asterisks:\r\n```\r\n---\r\n\r\n* * *\r\n\r\n- - - -\r\n```\r\n##Hard Line Breaks\r\nEnd a line with two or more spaces:\r\n```\r\nRoses are red,   \r\nViolets are blue.```', '4', ' Markdown', '2016-07-22 00:00:00', 5);

-- --------------------------------------------------------

--
-- 表的结构 `article_tag`
--

CREATE TABLE IF NOT EXISTS `article_tag` (
  `id` int(10) unsigned NOT NULL,
  `article_id` int(50) unsigned NOT NULL,
  `tag_id` int(50) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

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
(16, 8, 30),
(17, 9, 38),
(18, 9, 42),
(19, 9, 37),
(23, 10, 44),
(21, 11, 43),
(22, 11, 38),
(24, 12, 45),
(25, 13, 44),
(26, 12, 45);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category_order` int(50) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
  `id` int(10) NOT NULL,
  `url` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `statistic` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `siteinfo`
--

INSERT INTO `siteinfo` (`id`, `url`, `email`, `title`, `keywords`, `description`, `statistic`) VALUES
(1, 'http://www.startblog.cc', '79564065@qq.com', 'startblog v1.3', 'startblog,codeigniter,markdown,php', 'startblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统！！！', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) unsigned NOT NULL,
  `tag_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag_button_type` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tag`
--

INSERT INTO `tag` (`id`, `tag_name`, `tag_button_type`) VALUES
(44, ' Markdown', 'warning'),
(43, 'markdown', 'success'),
(42, 'php', 'danger'),
(41, 'XXE', 'info'),
(40, 'XSS', 'success'),
(39, 'codeigniter', 'danger'),
(38, 'startblog', 'danger'),
(37, 'github', 'success'),
(36, 'PHP Markdown', 'info'),
(35, 'PHP', 'warning'),
(34, 'HTML5', 'danger'),
(33, 'python', 'info');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'startblog', '2f780b5a7762af9c258076e913178715');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteinfo`
--
ALTER TABLE `siteinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `siteinfo`
--
ALTER TABLE `siteinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
