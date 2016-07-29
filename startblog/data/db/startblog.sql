/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : startblog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-07-29 09:59:46
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `about`
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', '关于', 'startblog,python,Security Engineer,hacker', '##Startblog是什么?\r\n\r\nstartblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统\r\n\r\n##捐助开发者\r\n基于对php的兴趣，学习写一个`免费`的东西，希望你喜欢我的作品，同时也能支持一下。\r\n\r\n##关于作者\r\n\r\n```python\r\nprint \"github : https://github.com/Cryin/Startblog\"\r\n```');

-- ----------------------------
-- Table structure for `article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(50) unsigned NOT NULL,
  `tag_id` int(50) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of article_tag
-- ----------------------------
INSERT INTO `article_tag` VALUES ('1', '1', '1');
INSERT INTO `article_tag` VALUES ('2', '1', '3');
INSERT INTO `article_tag` VALUES ('4', '1', '2');
INSERT INTO `article_tag` VALUES ('5', '1', '4');
INSERT INTO `article_tag` VALUES ('6', '2', '1');
INSERT INTO `article_tag` VALUES ('7', '2', '2');
INSERT INTO `article_tag` VALUES ('8', '2', '3');
INSERT INTO `article_tag` VALUES ('9', '3', '1');
INSERT INTO `article_tag` VALUES ('10', '1', '6');
INSERT INTO `article_tag` VALUES ('11', '7', '7');
INSERT INTO `article_tag` VALUES ('12', '7', '1');
INSERT INTO `article_tag` VALUES ('13', '7', '14');
INSERT INTO `article_tag` VALUES ('14', '0', '1');
INSERT INTO `article_tag` VALUES ('15', '0', '30');
INSERT INTO `article_tag` VALUES ('16', '8', '30');
INSERT INTO `article_tag` VALUES ('17', '9', '38');
INSERT INTO `article_tag` VALUES ('18', '9', '42');
INSERT INTO `article_tag` VALUES ('19', '9', '37');
INSERT INTO `article_tag` VALUES ('23', '10', '44');
INSERT INTO `article_tag` VALUES ('21', '11', '43');
INSERT INTO `article_tag` VALUES ('22', '11', '38');

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章关键词',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT '博文seo描述',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(100) CHARACTER SET utf8 NOT NULL,
  `published_at` datetime NOT NULL,
  `pv` int(50) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('9', 'Startblog', '端他 ', 'test', '##Startblog是什么?\r\n\r\nstartblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统\r\n\r\n##startblog有哪些功能？\r\n\r\n* 博文撰写、修改、删除功能\r\n* markdown语法支持\r\n* 数据备份功能\r\n* 文章搜索功能\r\n* 标签功能\r\n\r\n##有问题反馈\r\n在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流\r\n\r\n* QQ: 416049355\r\n* weibo: [@Cryin1985](http://weibo.com/justear)\r\n* github:(https://github.com/Cryin/Startblog)\r\n\r\n##捐助开发者\r\n基于对php的兴趣，学习写一个`免费`的东西，希望你喜欢我的作品，同时也能支持一下。\r\n\r\n##关于作者\r\n\r\n```python\r\nprint \"Auth: Cryin\"\r\nprint \"github : https://github.com/Cryin/Startblog\"\r\n  }\r\n```', '4', 'startblog,php,github', '2016-07-22 00:00:00', '4');
INSERT INTO `articles` VALUES ('10', 'Markdown入门指南', ' Markdown入门指南', ' Markdown入门指南', '#Markdown入门指南\r\n\r\n##Strong and Emphasize\r\n```\r\n*emphasize*   **strong**\r\n_emphasize_   __strong__\r\n```\r\n##Links and Email\r\nInline:\r\n```\r\nAn [example](http://url.com/ \"Title\")\r\n```\r\nReference-style labels (titles are optional):\r\n```\r\n\r\nAn [example][id]. Then, anywhere\r\nelse in the doc, define the link:\r\n\r\n  [id]: http://example.com/  \"Title\"\r\n```\r\nEmail:\r\n```\r\nAn email <example@example.com> link.\r\n```\r\n\r\n##Images\r\nInline (titles are optional):\r\n```\r\n![alt text](/path/img.jpg \"Title\")\r\n```\r\nReference-style:\r\n```\r\n![alt text][id]\r\n\r\n[id]: /url/to/img.jpg \"Title\"\r\n```\r\n##Headers\r\n```\r\nSetext-style:\r\n\r\nHeader 1\r\n========\r\n\r\nHeader 2\r\n--------\r\n```\r\natx-style (closing #’s are optional):\r\n```\r\n# Header 1 #\r\n\r\n## Header 2 ##\r\n\r\n###### Header 6\r\n```\r\n##Lists\r\nOrdered, without paragraphs:\r\n```\r\n1.  Foo\r\n2.  Bar\r\n```\r\nUnordered, with paragraphs:\r\n```\r\n*   A list item.\r\n\r\n    With multiple paragraphs.\r\n\r\n*   Bar\r\n```\r\nYou can nest them:\r\n```\r\n*   Abacus\r\n    * answer\r\n*   Bubbles\r\n    1.  bunk\r\n    2.  bupkis\r\n        * BELITTLER\r\n    3. burper\r\n*   Cunning\r\n```\r\n##Blockquotes\r\n```\r\n> Email-style angle brackets\r\n> are used for blockquotes.\r\n\r\n> > And, they can be nested.\r\n\r\n> #### Headers in blockquotes\r\n> \r\n> * You can quote a list.\r\n> * Etc.\r\n```\r\n##Inline Code\r\n```\r\n`<code>` spans are delimited\r\nby backticks.\r\n\r\nYou can include literal backticks\r\nlike `` `this` ``.\r\n```\r\n##Block Code\r\nIndent every line of a code block by at least 4 spaces or 1 tab.\r\n```\r\nThis is a normal paragraph.\r\n\r\n    This is a preformatted\r\n    code block.\r\n```\r\n##Horizontal Rules\r\nThree or more dashes or asterisks:\r\n```\r\n---\r\n\r\n* * *\r\n\r\n- - - -\r\n```\r\n##Hard Line Breaks\r\nEnd a line with two or more spaces:\r\n```\r\nRoses are red,   \r\nViolets are blue.```', '4', ' Markdown', '2016-07-22 00:00:00', '2');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category_order` int(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('8', 'python', '1');
INSERT INTO `category` VALUES ('4', 'Startblog', '1');
INSERT INTO `category` VALUES ('5', '漏洞分析', '1');
INSERT INTO `category` VALUES ('6', '代码审计', '1');
INSERT INTO `category` VALUES ('7', 'web安全', '1');

-- ----------------------------
-- Table structure for `siteinfo`
-- ----------------------------
DROP TABLE IF EXISTS `siteinfo`;
CREATE TABLE `siteinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `statistic` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of siteinfo
-- ----------------------------
INSERT INTO `siteinfo` VALUES ('1', 'http://www.startblog.cc', '79564065@qq.com', 'startblog v1.2', 'startblog,codeigniter,markdown,php', 'startblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统！！！', 'test');

-- ----------------------------
-- Table structure for `tag`
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag_button_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('44', ' Markdown', 'warning');
INSERT INTO `tag` VALUES ('43', 'markdown', 'success');
INSERT INTO `tag` VALUES ('42', 'php', 'danger');
INSERT INTO `tag` VALUES ('41', 'XXE', 'info');
INSERT INTO `tag` VALUES ('40', 'XSS', 'success');
INSERT INTO `tag` VALUES ('39', 'codeigniter', 'danger');
INSERT INTO `tag` VALUES ('38', 'startblog', 'danger');
INSERT INTO `tag` VALUES ('37', 'github', 'success');
INSERT INTO `tag` VALUES ('36', 'PHP Markdown', 'info');
INSERT INTO `tag` VALUES ('35', 'PHP', 'warning');
INSERT INTO `tag` VALUES ('34', 'HTML5', 'danger');
INSERT INTO `tag` VALUES ('33', 'python', 'info');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'startblog', '2f780b5a7762af9c258076e913178715');
