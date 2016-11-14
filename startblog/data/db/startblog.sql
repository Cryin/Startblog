/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : startblog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-11-14 17:54:42
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
INSERT INTO `about` VALUES ('1', '关于', 'startblog,python,Security Engineer,hacker', '##Startblog是什么?\r\n\r\nstartblog是一个基于codeigniter 3.x开发的简洁、易用的Markdown博客系统\r\n\r\n###博客功能\r\nmarkdown博文撰写、修改、删除功能,采用使用simplemde编辑器;\r\nmarkdown语法解析支持，使用parsedown解析;\r\n文章搜索、备份功能;\r\n站点、博文SEO信息设置;\r\nRSS订阅功能;\r\n\r\n###运行环境:\r\n```python\r\nprint \"php 5.2+ 、 mysql\"\r\n```\r\n###捐助开发者\r\n基于对php的兴趣，学习写一个`免费`的东西，希望你喜欢我的作品，同时也能支持一下。\r\n\r\n###关于作者\r\ngithub [https://github.com/Cryin/Startblog](https://github.com/Cryin/Startblog)\r\n\r\n###下载\r\n [startblog v1.5](https://github.com/Cryin/Startblog)');

-- ----------------------------
-- Table structure for `article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(50) unsigned NOT NULL,
  `tag_id` int(50) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

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
INSERT INTO `article_tag` VALUES ('24', '12', '45');
INSERT INTO `article_tag` VALUES ('25', '13', '44');
INSERT INTO `article_tag` VALUES ('26', '12', '45');
INSERT INTO `article_tag` VALUES ('27', '15', '42');
INSERT INTO `article_tag` VALUES ('28', '16', '48');
INSERT INTO `article_tag` VALUES ('29', '17', '44');
INSERT INTO `article_tag` VALUES ('30', '18', '49');
INSERT INTO `article_tag` VALUES ('31', '19', '50');
INSERT INTO `article_tag` VALUES ('32', '20', '51');
INSERT INTO `article_tag` VALUES ('33', '21', '52');
INSERT INTO `article_tag` VALUES ('34', '22', '53');
INSERT INTO `article_tag` VALUES ('35', '23', '54');
INSERT INTO `article_tag` VALUES ('36', '1', '38');
INSERT INTO `article_tag` VALUES ('37', '1', '35');
INSERT INTO `article_tag` VALUES ('38', '1', '37');
INSERT INTO `article_tag` VALUES ('39', '2', '44');

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章关键词',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT '博文seo描述',
  `imagelink` varchar(255) COLLATE utf8_unicode_ci DEFAULT '/static/img/f6.jpg',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(100) CHARACTER SET utf8 NOT NULL,
  `published_at` datetime NOT NULL,
  `pv` int(50) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('admin', '1', 'Startblog', 'startblog,codeigniter blog,markdown blog,php', 'startblog是一个基于codeigniter 3.x开发的简洁，易用的Markdown博客系统', 'http://i1.piimg.com/567571/a1edd8ec4b956ef6.png', '# Startblog\r\n\r\n>startblog是一个基于codeigniter 3.x开发的简洁、易用的Markdown博客系统！\r\n\r\n>Author: [Cryin\']\r\n\r\n###程序功能：\r\n\r\n*markdown博文撰写、修改、删除功能,采用使用simplemde编辑器;\r\n\r\n*markdown语法解析支持，使用parsedown解析;\r\n\r\n*文章搜索、备份功能;\r\n\r\n*站点、博文SEO信息设置;\r\n\r\n*rss订阅功能;\r\n\r\n###运行环境:\r\n* php 5.x + mysql\r\n\r\n###反馈:\r\n\r\n基于对php的兴趣，学习写一个blog自己使用，有问题可以和我交流。\r\n\r\n###关于作者\r\n\r\n* github https://github.com/Cryin/Startblog\r\n\r\n###安装方法:\r\n\r\n>将程序上传至站点根目录,输入http://www.yoursite.cc/install进行安装即可\r\n\r\n>>有些环境下可能会出现找不到model的问题，这种情况把application\\models\\ 下所有文件首字母改成大写即可\r\n>>如果安装在目录则根据站点目录修改.htaccess文件Rewrite规则，并修改application\\config\\config.php文件，添加目录字段：\r\n>>$config[\'base_url\'] = \'http://\'.$_SERVER[\'SERVER_NAME\'].\'/mulu\';\r\n\r\n\r\n###手动安装说明:\r\n\r\n>根据站点目录设置application\\config\\config.php文件$config[\'base_url\']项\r\n\r\n>根据站点目录修改.htaccess文件Rewrite规则\r\n\r\n>设置数据库配置信息：application\\config\\database.php文件\r\n\r\n>创建数据库startblog，并导入sql文件，路径data\\db\\startblog.sql\r\n\r\n>管理默认用户名、密码均为startblog\r\n\r\n>>有些环境下可能会出现找不到model的问题，这种情况把application\\models\\ 下所有文件首字母改成大写即可\r\n\r\n###Screenshot\r\n文章编辑:\r\n\r\n![](http://i4.piimg.com/567571/2593ba39f83e00d1.png)\r\n\r\n前台页面：\r\n\r\n![](http://i4.piimg.com/567571/259bca5d799ea672.png)\r\n\r\n###更新说明:\r\n\r\n>2016/7/12 完成基本功能！version：startblog v1.0\r\n\r\n>2016/7/22 初始化sql文件，修复xss问题及标签显示bug！\r\n\r\n>2016/7/25 修改登录页面及标签页面！\r\n\r\n>2016/7/27 完成站点SEO功能，增加url rewrite，完成文章页面seo功能，添加登录logo！version：startblog v1.1\r\n\r\n>2016/7/27 增加about编辑功能，添加评论功能！version：startblog v1.2\r\n\r\n>2016/8/1  增加rss订阅功能！version：startblog v1.3\r\n\r\n>2016/8/5  增加install功能！version：startblog v1.4\r\n\r\n>2016/10/23  修复markdown编辑器加载不稳定问题，修复post提交时bug！version：startblog v1.5\r\n', '4', 'startblog,php,github', '2016-10-23 12:05:00', '1');
INSERT INTO `articles` VALUES ('admin', '2', 'Markdown入门指南', ' Markdown入门指南', ' Markdown入门指南', 'http://i1.hdslb.com/video/08/086510262d86a381a52a3651174dbd4d.jpg', '#Markdown入门指南\r\n\r\n##Strong and Emphasize\r\n```\r\n*emphasize*   **strong**\r\n_emphasize_   __strong__\r\n```\r\n##Links and Email\r\nInline:\r\n```\r\nAn [example](http://url.com/ \"Title\")\r\n```\r\nReference-style labels (titles are optional):\r\n```\r\n\r\nAn [example][id]. Then, anywhere\r\nelse in the doc, define the link:\r\n\r\n  [id]: http://example.com/  \"Title\"\r\n```\r\nEmail:\r\n```\r\nAn email <example@example.com> link.\r\n```\r\n\r\n##Images\r\nInline (titles are optional):\r\n```\r\n![alt text](/path/img.jpg \"Title\")\r\n```\r\nReference-style:\r\n```\r\n![alt text][id]\r\n\r\n[id]: /url/to/img.jpg \"Title\"\r\n```\r\n##Headers\r\n```\r\nSetext-style:\r\n\r\nHeader 1\r\n========\r\n\r\nHeader 2\r\n--------\r\n```\r\natx-style (closing #’s are optional):\r\n```\r\n# Header 1 #\r\n\r\n## Header 2 ##\r\n\r\n###### Header 6\r\n```\r\n##Lists\r\nOrdered, without paragraphs:\r\n```\r\n1.  Foo\r\n2.  Bar\r\n```\r\nUnordered, with paragraphs:\r\n```\r\n*   A list item.\r\n\r\n    With multiple paragraphs.\r\n\r\n*   Bar\r\n```\r\nYou can nest them:\r\n```\r\n*   Abacus\r\n    * answer\r\n*   Bubbles\r\n    1.  bunk\r\n    2.  bupkis\r\n        * BELITTLER\r\n    3. burper\r\n*   Cunning\r\n```\r\n##Blockquotes\r\n```\r\n> Email-style angle brackets\r\n> are used for blockquotes.\r\n\r\n> > And, they can be nested.\r\n\r\n> #### Headers in blockquotes\r\n> \r\n> * You can quote a list.\r\n> * Etc.\r\n```\r\n##Inline Code\r\n```\r\n`<code>` spans are delimited\r\nby backticks.\r\n\r\nYou can include literal backticks\r\nlike `` `this` ``.\r\n```\r\n##Block Code\r\nIndent every line of a code block by at least 4 spaces or 1 tab.\r\n```\r\nThis is a normal paragraph.\r\n\r\n    This is a preformatted\r\n    code block.\r\n```\r\n##Horizontal Rules\r\nThree or more dashes or asterisks:\r\n```\r\n---\r\n\r\n* * *\r\n\r\n- - - -\r\n```\r\n##Hard Line Breaks\r\nEnd a line with two or more spaces:\r\n```\r\nRoses are red,   \r\nViolets are blue.```', '4', ' Markdown', '2016-07-22 00:00:00', '1');
INSERT INTO `articles` VALUES ('admin', '23', '技术文章存档', 'Paper,基于MBR的系统登录密码验证程序,More Insights On The APT', 'slideshare被墙了，09年开始使用的百度空间也关停了，到现在换了三个笔记本，两块移动硬盘。导致很多自己写的文章找不到。所以这里单独整理一个存档，放一些自己曾今和后续写的安全技术相关的文档', 'http://img0.gao7.com/files/appleimage/335/335476F1-3589-43BF-BAD7-BF1607106B4B.jpg', 'slideshare被墙了，09年开始使用的百度空间也关停了，到现在换了三个笔记本，两块移动硬盘。导致很多自己写的文章找不到。所以这里单独整理一个存档，放一些自己曾今和后续写的安全技术相关的文档。 \r\n##Paper list：\r\n\r\n> * Talking About Exploit Writing\r\n> * Bypassing AntiVirus Detection for Malicious PDFs\r\n> * MBR病毒分析\r\n> * 使用bochs调试MBR\r\n> * 基于MBR的系统登录密码验证程序\r\n> * PDF文件格式分析\r\n> * 恶意PDF文件解析思路\r\n> * Win 7下定位kernel32.dll基址及shellcode编写\r\n> * CVE-2009-0658漏洞分析\r\n> * Firefox vulnerability(CVE-2011-0065 ) Bypassing DEP\r\n> * CVE-2009-4324漏洞分析\r\n> * More Insights On The APT\r\n> * 慢速http拒绝服务攻击及防御方案\r\n> * 由交互式扫描联想到的实时漏洞感知方法\r\n> * ......\r\n\r\n链接:[github](https://github.com/Cryin/Paper)    \r\nDate: 2016/08/15\r\n\r\n\r\n\r\n', '5', 'Paper', '2016-11-14 00:00:00', '1');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category_order` int(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('8', 'python', '1');
INSERT INTO `category` VALUES ('4', 'Startblog', '1');
INSERT INTO `category` VALUES ('5', '漏洞分析', '1');
INSERT INTO `category` VALUES ('6', '代码审计', '1');
INSERT INTO `category` VALUES ('7', 'web安全', '1');

-- ----------------------------
-- Table structure for `friendship`
-- ----------------------------
DROP TABLE IF EXISTS `friendship`;
CREATE TABLE `friendship` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `link_name` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `link_order` int(50) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friendship
-- ----------------------------
INSERT INTO `friendship` VALUES ('1', 'Startblog', 'https://github.com/Cryin/Startblog', '1');

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
INSERT INTO `siteinfo` VALUES ('1', 'http://cryin.startblog.cc', '79564065@qq.com', 'startblog v1.5', 'startblog,codeigniter,markdown,php', 'startblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统！！！', 'testtest');

-- ----------------------------
-- Table structure for `tag`
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag_button_type` varchar(50) DEFAULT 'success',
  PRIMARY KEY (`id`,`tag_name`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('44', ' Markdown', 'warning');
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
INSERT INTO `tag` VALUES ('48', 'markdown', 'info');
INSERT INTO `tag` VALUES ('49', '而而而', 'info');
INSERT INTO `tag` VALUES ('50', '讨厌讨厌他', 'danger');
INSERT INTO `tag` VALUES ('51', 'test', 'warning');
INSERT INTO `tag` VALUES ('52', '第三方', 'danger');
INSERT INTO `tag` VALUES ('53', '就开了', 'success');
INSERT INTO `tag` VALUES ('54', 'Paper', 'info');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'startblog', '2f780b5a7762af9c258076e913178715', 'assetsview@sina.cn');
