/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : startblog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-12-13 15:44:05
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
INSERT INTO `about` VALUES ('1', '关于', 'startblog,python,Security Engineer,hacker', '##Startblog是什么?\r\n\r\n一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.\r\n\r\n###博客功能\r\n\r\n>markdown博文撰写、修改、删除功能,\r\n\r\n>Markdown在线编辑器，采用Simplemde编辑器;\r\n\r\n>markdown语法解析支持，使用parsedown解析;\r\n\r\n>文章全文搜索、备份功能;\r\n\r\n>站点、博文SEO信息设置;\r\n\r\n>RSS订阅、友情链接功能;\r\n\r\n###运行环境:\r\n```python\r\nphp 5.3+ 、 mysql\r\n```\r\n###反馈\r\n本着大道至简的原则，本Blog程序只维持最基本的Blog形态，不会轻易增加其它功能。有任何问题可以反馈至issues或者qq:416049355 交流。\r\n\r\n###关于作者\r\ngithub [https://github.com/Cryin/Startblog](https://github.com/Cryin/Startblog)\r\n\r\n###下载\r\n [startblog v2.1](http://cryin.startblog.cc/upload/startblogv2.1.zip)\r\n\r\n###贡献者\r\n感谢辉哥设计的Logo，感谢贡献者LUHOO、Hardy、Ant、半城人、[Seven](http://www.sevenblog.cn/)\r\n\r\n###捐赠者\r\n感谢Hardy、格格的捐赠！\r\n\r\n###使用案例\r\n[Cryin](http://cryin.startblog.cc/)、[智戎创客](http://www.zrcktech.com/)、[dearmrli](http://www.dearmrli.com/)、待续....');

-- ----------------------------
-- Table structure for `article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(50) unsigned NOT NULL,
  `tag_id` int(50) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

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
INSERT INTO `article_tag` VALUES ('59', '1', '64');
INSERT INTO `article_tag` VALUES ('58', '1', '63');
INSERT INTO `article_tag` VALUES ('57', '2', '62');
INSERT INTO `article_tag` VALUES ('45', '24', '55');
INSERT INTO `article_tag` VALUES ('48', '25', '56');
INSERT INTO `article_tag` VALUES ('49', '26', '57');
INSERT INTO `article_tag` VALUES ('52', '27', '52');
INSERT INTO `article_tag` VALUES ('53', '28', '58');
INSERT INTO `article_tag` VALUES ('54', '29', '59');
INSERT INTO `article_tag` VALUES ('56', '30', '61');
INSERT INTO `article_tag` VALUES ('61', '1', '65');
INSERT INTO `article_tag` VALUES ('62', '1', '66');
INSERT INTO `article_tag` VALUES ('63', '1', '35');

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
  `pv` int(50) unsigned DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('admin', '1', 'Startblog', 'startblog,codeigniter blog,markdown blog,php', 'startblog是一个基于codeigniter 3.x开发的简洁，易用的Markdown博客系统', 'http://cryin.startblog.cc/static/img/b11.jpg', '# Startblog\r\n\r\n>一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.\r\n\r\n>Author: [Cryin\']\r\n\r\n![](http://i1.piimg.com/567571/6947db2521f305f1.jpg)\r\n\r\n###主页\r\n\r\n [http://cryin.startblog.cc](http://cryin.startblog.cc)\r\n\r\n###下载：\r\n\r\n [startblog v2.1](http://cryin.startblog.cc/upload/startblogv2.1.zip)\r\n \r\n ###源码下载：\r\n \r\n  [github]( https://github.com/Cryin/Startblog)\r\n \r\n###程序功能：\r\n\r\n>Markdown博文撰写、修改、删除功能,\r\n\r\n>Markdown在线编辑器,实时预览;\r\n\r\n>文章全文搜索、备份功能;\r\n\r\n>站点、博文SEO信息设置;\r\n\r\n>RSS订阅、友情链接功能;\r\n\r\n###运行环境:\r\n* php 5.x + mysql\r\n\r\n###反馈:\r\n\r\n本着大道至简的原则，本Blog程序只维持最基本的Blog形态，不会轻易增加其它功能。有任何问题可以反馈至issues或者qq交流。\r\n\r\n###关于作者\r\n\r\n* github https://github.com/Cryin\r\n\r\n###贡献者\r\n\r\n感谢辉哥设计的Logo，感谢贡献者LUHOO、Hardy、Ant、半城人\r\n\r\n###捐赠者\r\n\r\n感谢Hardy、格格的捐赠！\r\n\r\n###安装方法:\r\n\r\n>手动创建数据库\r\n\r\n>将程序上传至站点根目录,输入http://www.yoursite.cc/install进行安装即可\r\n\r\n如果安装在目录则根据站点目录\r\n\r\n>修改application\\config\\config.php文件，添加目录字段，如目录为startblog：\r\n$config[\'base_url\'] = \'http://\'.$_SERVER[\'SERVER_NAME\'].\'/startblog\';\r\n\r\n>修改.htaccess文件Rewrite规则，如目录为startblog则修改为：\r\n>>RewriteEngine on  \r\n>>RewriteCond $1 !^(index\\.php|static|favicon\\.ico|robots\\.txt)  \r\n>>RewriteRule ^(.*)$ /startblog/index.php/$1 [L]\r\n\r\n###手动安装说明:\r\n\r\n>根据站点目录设置application\\config\\config.php文件$config[\'base_url\']项\r\n\r\n>根据站点目录修改.htaccess文件Rewrite规则\r\n\r\n>设置数据库配置信息：application\\config\\database.php文件\r\n\r\n>创建数据库startblog，并导入sql文件，路径data\\db\\startblog.sql\r\n\r\n>管理默认用户名、密码均为startblog\r\n\r\n###Screenshot\r\n移动端页面:\r\n\r\n![](https://static.oschina.net/uploads/space/2016/1122/111415_PPhq_2720166.png)\r\n\r\nPC端页面：\r\n\r\n![](http://i1.piimg.com/567571/3ca2f44da1c73fea.png)\r\n\r\n###更新说明:\r\n\r\n>2014/9/18 初识CodeIgniter，编写博客程序！\r\n\r\n>2015/3/27 实现markdown编辑器与解析\r\n\r\n>2016/7/12 完成基本功能！version：startblog v1.0\r\n\r\n>2016/7/22 初始化sql文件，修复xss问题及标签显示bug！\r\n\r\n>2016/7/25 修改登录页面及标签页面！\r\n\r\n>2016/7/27 完成站点SEO功能，增加url rewrite，完成文章页面seo功能，添加登录logo！version：startblog v1.1\r\n\r\n>2016/7/27 增加about编辑功能，添加评论功能！version：startblog v1.2\r\n\r\n>2016/8/1  增加rss订阅功能！version：startblog v1.3\r\n\r\n>2016/8/5  增加install功能！version：startblog v1.4\r\n\r\n>2016/10/23  修复markdown编辑器加载不稳定问题，修复post提交时bug！version：startblog v1.5\r\n\r\n>2016/11/14  全面升级UI，采用Amazeui开发后台及前端UI！version：startblog v2.0\r\n\r\n>2016/11/25  新增友情链接编辑、排序功能，修改文件编辑界面，增加编辑框边框。修复dreamkill同学提出的bug及程序问题，输入输出统一进行安全过滤，model类修改为大写 ！version：startblog v2.1\r\n', '4', 'startblog,codeigniter blog,markdown blog,php', '2016-12-13 15:38:45', '24');
INSERT INTO `articles` VALUES ('admin', '2', 'Markdown入门指南', ' Markdown入门指南', ' Markdown入门指南', 'http://10.65.10.195/startblog/static/img/f6.jpg', '## 什么是 Markdown\r\n\r\nMarkdown 是一种方便记忆、书写的纯文本标记语言，用户可以使用这些标记符号以最小的输入代价生成极富表现力的文档：譬如您正在阅读的这份文档。它使用简单的符号标记不同的标题，分割不同的段落，**粗体** 或者 *斜体* 某些文字，更棒的是，它还可以\r\n\r\n### 1. 制作一份待办事宜 [Startblog Todo 列表]\r\n\r\n- [x] 整站备份功能\r\n- [x] 文章编辑优化，自动提取关键词、文章简要描述\r\n- [x] 图片上传或图床接口\r\n- [x] 安装程序优化，自动识别根目录、子目录\r\n- [x] 持续坚决程序bug及反馈\r\n\r\n## Markdown 简明语法手册\r\n\r\n---\r\n\r\n### 1. 斜体和粗体\r\n\r\n使用 * 和 ** 表示斜体和粗体。\r\n\r\n示例：\r\n\r\n这是 *斜体*，这是 **粗体**。\r\n\r\n### 2. 分级标题\r\n\r\n使用 === 表示一级标题，使用 --- 表示二级标题。\r\n\r\n示例：\r\n\r\n```\r\n这是一个一级标题\r\n============================\r\n\r\n这是一个二级标题\r\n--------------------------------------------------\r\n\r\n### 这是一个三级标题\r\n```\r\n\r\n你也可以选择在行首加井号表示不同级别的标题 (H1-H6)，例如：# H1, ## H2, ### H3，#### H4。\r\n\r\n### 3. 外链接\r\n\r\n使用 \\[描述](链接地址) 为文字增加外链接。\r\n\r\n示例：\r\n\r\n这是去往 [Startblog](https://github.com/Cryin/Startblog) 的链接。\r\n\r\n### 4. 无序列表\r\n\r\n使用 *，+，- 表示无序列表。\r\n\r\n示例：\r\n\r\n- 无序列表项 一\r\n- 无序列表项 二\r\n- 无序列表项 三\r\n\r\n### 5. 有序列表\r\n\r\n使用数字和点表示有序列表。\r\n\r\n示例：\r\n\r\n1. 有序列表项 一\r\n2. 有序列表项 二\r\n3. 有序列表项 三\r\n\r\n### 6. 文字引用\r\n\r\n使用 > 表示文字引用。\r\n\r\n示例：\r\n\r\n> 野火烧不尽，春风吹又生。\r\n\r\n### 7. 行内代码块\r\n\r\n使用 \\`代码` 表示行内代码块。\r\n\r\n示例：\r\n\r\n让我们聊聊 `html`。\r\n\r\n### 8.  代码块\r\n\r\n使用 四个缩进空格 表示代码块。\r\n\r\n示例：\r\n\r\n    这是一个代码块，此行左侧有四个不可见的空格。\r\n\r\n### 9.  插入图像\r\n\r\n使用 \\!\\[描述](图片链接地址) 插入图像。\r\n\r\n示例：\r\n\r\n![logo](http://cryin.startblog.cc/static/img/b1.jpg)\r\n\r\n\r\n总而言之，不同于其它 *所见即所得* 的编辑器：你只需使用键盘专注于书写文本内容，就可以生成印刷级的排版格式，省却在键盘和工具栏之间来回切换，调整内容和格式的麻烦。**Markdown 在流畅的书写和印刷级的阅读体验之间找到了平衡。** 目前它已经成为世界上最大的技术分享网站 GitHub 和 技术问答网站 StackOverFlow 的御用书写格式。', '4', ' Markdown入门指南', '2016-12-13 15:27:22', '2');

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
INSERT INTO `category` VALUES ('4', 'Startblog', '1');
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friendship
-- ----------------------------
INSERT INTO `friendship` VALUES ('1', 'Startblog', 'https://github.com/Cryin/Startblog', '1');
INSERT INTO `friendship` VALUES ('7', 'AmazeUI', 'http://amazeui.org/', '2');
INSERT INTO `friendship` VALUES ('9', 'Cryin\'blog', 'http://cryin.startblog.cc/', '3');

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
INSERT INTO `siteinfo` VALUES ('1', 'http://cryin.startblog.cc', '416049355@qq.com', 'Startblog  |  一款简洁、易用、跨平台自适应的Markdown博客系统', 'startblog,codeigniter blog,markdown博客程序,php blog,markdown blog,Markdown博客系统', '一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.', '');

-- ----------------------------
-- Table structure for `tag`
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag_button_type` varchar(50) DEFAULT 'success',
  PRIMARY KEY (`id`,`tag_name`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('44', ' Markdown', 'warning');
INSERT INTO `tag` VALUES ('66', 'markdown blog', 'danger');
INSERT INTO `tag` VALUES ('40', 'XSS', 'success');
INSERT INTO `tag` VALUES ('39', 'codeigniter', 'danger');
INSERT INTO `tag` VALUES ('38', 'startblog', 'danger');
INSERT INTO `tag` VALUES ('37', 'github', 'success');
INSERT INTO `tag` VALUES ('65', 'codeigniter blog', 'danger');
INSERT INTO `tag` VALUES ('35', 'PHP', 'warning');
INSERT INTO `tag` VALUES ('34', 'HTML5', 'danger');
INSERT INTO `tag` VALUES ('54', 'Paper', 'info');
INSERT INTO `tag` VALUES ('67', 'php', 'warning');

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
