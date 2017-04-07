/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : startblog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-04-07 16:33:55
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
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

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
INSERT INTO `article_tag` VALUES ('76', '1', '35');
INSERT INTO `article_tag` VALUES ('64', '31', '68');
INSERT INTO `article_tag` VALUES ('65', '32', '70');
INSERT INTO `article_tag` VALUES ('66', '33', '71');
INSERT INTO `article_tag` VALUES ('67', '34', '70');
INSERT INTO `article_tag` VALUES ('68', '35', '72');
INSERT INTO `article_tag` VALUES ('69', '36', '70');
INSERT INTO `article_tag` VALUES ('70', '36', '73');
INSERT INTO `article_tag` VALUES ('71', '37', '74');
INSERT INTO `article_tag` VALUES ('73', '38', '75');
INSERT INTO `article_tag` VALUES ('75', '39', '77');

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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('admin', '1', 'Startblog', 'startblog,codeigniter blog,markdown blog,php', 'startblog是一个基于codeigniter 3.x开发的简洁，易用的Markdown博客系统', 'http://cryin.startblog.cc/static/img/b11.jpg', '# Startblog\r\n\r\n>一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.\r\n\r\n>Author: [Cryin\']\r\n\r\n![](http://i1.piimg.com/567571/6947db2521f305f1.jpg)\r\n\r\n###主页\r\n\r\n [http://cryin.startblog.cc](http://cryin.startblog.cc)\r\n\r\n ###下载：\r\n \r\n  [github]( https://github.com/Cryin/Startblog)\r\n \r\n###程序功能：\r\n\r\n>Markdown博文撰写、修改、删除功能,\r\n\r\n>Markdown在线编辑器,实时预览;\r\n\r\n>文章全文搜索、备份功能;\r\n\r\n>站点、博文SEO信息设置;\r\n\r\n>RSS订阅、友情链接功能;\r\n\r\n###运行环境:\r\n* Apache+php 5.x + mysql\r\n\r\n###反馈:\r\n\r\n本着大道至简的原则，本Blog程序只维持最基本的Blog形态，不会轻易增加其它功能。有任何问题可以反馈至issues或者qq交流。\r\n\r\n###关于作者\r\n\r\n* github https://github.com/Cryin\r\n\r\n###贡献者\r\n\r\n感谢辉哥设计的Logo，感谢贡献者LUHOO、Hardy、Ant、半城人\r\n\r\n###捐赠者\r\n\r\n感谢Hardy、格格的捐赠！\r\n\r\n###安装方法:\r\n\r\n>手动创建数据库\r\n\r\n>将程序上传至站点根目录,输入http://www.yoursite.cc/install进行安装即可\r\n\r\n如果安装在目录则根据站点目录\r\n\r\n>修改application\\config\\config.php文件，添加目录字段，如目录为startblog：\r\n$config[\'base_url\'] = \'http://\'.$_SERVER[\'SERVER_NAME\'].\'/startblog\';\r\n\r\n>修改.htaccess文件Rewrite规则，如目录为startblog则修改为：\r\n>>RewriteEngine on  \r\n>>RewriteCond $1 !^(index\\.php|static|favicon\\.ico|robots\\.txt)  \r\n>>RewriteRule ^(.*)$ /startblog/index.php/$1 [L]\r\n\r\n###手动安装说明:\r\n\r\n>根据站点目录设置application\\config\\config.php文件$config[\'base_url\']项\r\n\r\n>根据站点目录修改.htaccess文件Rewrite规则\r\n\r\n>设置数据库配置信息：application\\config\\database.php文件\r\n\r\n>创建数据库startblog，并导入sql文件，路径data\\db\\startblog.sql\r\n\r\n>管理默认用户名、密码均为startblog\r\n\r\n###Screenshot\r\n![](http://i2.muimg.com/567571/c5f0fac2fcde0b02.png)\r\n![](http://i4.buimg.com/567571/79ae794be212b2f1.png)\r\n', '4', 'startblog,codeigniter blog,markdown blog,php', '2016-12-13 15:38:45', '29');
INSERT INTO `articles` VALUES ('admin', '2', 'Markdown入门指南', ' Markdown入门指南', ' Markdown入门指南', 'http://10.65.10.195/startblog/static/img/f6.jpg', '## 什么是 Markdown\r\n\r\nMarkdown 是一种方便记忆、书写的纯文本标记语言，用户可以使用这些标记符号以最小的输入代价生成极富表现力的文档：譬如您正在阅读的这份文档。它使用简单的符号标记不同的标题，分割不同的段落，**粗体** 或者 *斜体* 某些文字，更棒的是，它还可以\r\n\r\n### 1. 制作一份待办事宜 [Startblog Todo 列表]\r\n\r\n- [x] 整站备份功能\r\n- [x] 文章编辑优化，自动提取关键词、文章简要描述\r\n- [x] 图片上传或图床接口\r\n- [x] 安装程序优化，自动识别根目录、子目录\r\n- [x] 持续坚决程序bug及反馈\r\n\r\n## Markdown 简明语法手册\r\n\r\n---\r\n\r\n### 1. 斜体和粗体\r\n\r\n使用 * 和 ** 表示斜体和粗体。\r\n\r\n示例：\r\n\r\n这是 *斜体*，这是 **粗体**。\r\n\r\n### 2. 分级标题\r\n\r\n使用 === 表示一级标题，使用 --- 表示二级标题。\r\n\r\n示例：\r\n\r\n```\r\n这是一个一级标题\r\n============================\r\n\r\n这是一个二级标题\r\n--------------------------------------------------\r\n\r\n### 这是一个三级标题\r\n```\r\n\r\n你也可以选择在行首加井号表示不同级别的标题 (H1-H6)，例如：# H1, ## H2, ### H3，#### H4。\r\n\r\n### 3. 外链接\r\n\r\n使用 \\[描述](链接地址) 为文字增加外链接。\r\n\r\n示例：\r\n\r\n这是去往 [Startblog](https://github.com/Cryin/Startblog) 的链接。\r\n\r\n### 4. 无序列表\r\n\r\n使用 *，+，- 表示无序列表。\r\n\r\n示例：\r\n\r\n- 无序列表项 一\r\n- 无序列表项 二\r\n- 无序列表项 三\r\n\r\n### 5. 有序列表\r\n\r\n使用数字和点表示有序列表。\r\n\r\n示例：\r\n\r\n1. 有序列表项 一\r\n2. 有序列表项 二\r\n3. 有序列表项 三\r\n\r\n### 6. 文字引用\r\n\r\n使用 > 表示文字引用。\r\n\r\n示例：\r\n\r\n> 野火烧不尽，春风吹又生。\r\n\r\n### 7. 行内代码块\r\n\r\n使用 \\`代码` 表示行内代码块。\r\n\r\n示例：\r\n\r\n让我们聊聊 `html`。\r\n\r\n### 8.  代码块\r\n\r\n使用 四个缩进空格 表示代码块。\r\n\r\n示例：\r\n\r\n    这是一个代码块，此行左侧有四个不可见的空格。\r\n\r\n### 9.  插入图像\r\n\r\n使用 \\!\\[描述](图片链接地址) 插入图像。\r\n\r\n示例：\r\n\r\n![logo](http://cryin.startblog.cc/static/img/b1.jpg)\r\n\r\n\r\n总而言之，不同于其它 *所见即所得* 的编辑器：你只需使用键盘专注于书写文本内容，就可以生成印刷级的排版格式，省却在键盘和工具栏之间来回切换，调整内容和格式的麻烦。**Markdown 在流畅的书写和印刷级的阅读体验之间找到了平衡。** 目前它已经成为世界上最大的技术分享网站 GitHub 和 技术问答网站 StackOverFlow 的御用书写格式。', '4', ' Markdown入门指南', '2016-12-13 15:27:22', '4');
INSERT INTO `articles` VALUES ('admin', '31', 'SDL-软件安全设计初窥', 'SDL', 'SDL-软件安全设计初窥', 'http://i1.piimg.com/567571/e5eebbd5be28a14d.jpg', '# SDL-软件安全设计初窥\r\n\r\n------\r\n> Auth:Cryin@insight-labs.org\r\n\r\n## 前言\r\n\r\n本文详细介绍微软软件安全开发生命周期（SDL）相关概念，并讨论要遵循 SDL 过程所应执行的各种安全活动，其中着重对软件安全设计的原则进行探讨。并对STRIDE威胁建模方法进行深入介绍。\r\n\r\n### SDL介绍\r\n\r\n安全开发生命周期（SDL）即Security Development Lifecycle，是一个帮助开发人员构建更安全的软件和解决安全合规要求的同时降低开发成本的软件开发过程。\r\n\r\n自2004年起，微软将SDL作为全公司的计划和强制政策，SDL的核心理念就是将安全考虑集成在软件开发的每一个阶段:需求分析、设计、编码、测试和维护。从需求、设计到发布产品的每一个阶段每都增加了相应的安全活动，以减少软件中漏洞的数量并将安全缺陷降低到最小程度。安全开发生命周期 (SDL)是侧重于软件开发的安全保证过程，旨在开发出安全的软件应用。\r\n\r\n### SDL安全活动\r\n\r\n简单来说，SDL是微软提出的从安全角度指导软件开发过程的管理模式，在传统软件开发生命周期 (SDLC) 的各个阶段增加了一些必要的安全活动，软件开发的不同阶段所执行的安全活动也不同，每个活动就算单独执行也都能对软件安全起到一定作用。当然缺少特定的安全活动也会对软件的安全性带来影响。\r\n\r\n![图1：微软SDL安全活动简图](http://i1.piimg.com/567571/04b1f42fbbd0fffb.png)\r\n\r\n我曾今有幸参加过微软安全专家Michael Howard及Taha Mir关于SDL及威胁建模的培训，作为《软件安全开发生命周期》一书的作者，Michael Howard不只一次强调，安全培训是SDL最核心的概念，软件是由设计人员设计，代码是有开发人员编写。同样，大部分软件本身的安全漏洞也是由设计及编码人员引入，所以对软件开发过程中的技术人员进行安全培训这点至关重要。\r\n\r\n可以看到在整个SDL周期中，除了安全培训这项活动，还在软件发布后增加了安全应急响应的相关活动，而目前国内大多数公司目前已经基本上具备了安全应急响应的活动和职能部门，同时包括安全编码规范、代码审计、渗透测试等安全活动也都已经基本具备甚至个别企业已经比较成熟。但在软件设计阶段的安全活动则相对较少，据我了解仅个别大型跨国企业才拥有安全设计等相关的安全活动。而根据微软多年的实践和经验，软件的安全问题很大一部分是由于不安全的设计而引入的。在设计阶段造成的安全缺陷在后期修复的成本和时间都相对较高。STRIDE威胁建模的创始人之一Taha Mir曾说过\r\n> “safer applications begin with secure design”\r\n\r\n即安全应用从安全设计开始，相应的微软SDL也提出了若干核心的安全设计原则，并提出了如攻击面最小化、STRIDE威胁建模等多种方法辅助安全人员对软件进行安全设计，本文就针对当前国内企业在软件设计阶段安全活动发展相对欠缺的安全设计进行探讨。   \r\n\r\n##安全设计核心原则\r\n\r\nSDL安全设计核心原则: \r\n> * Attack Surface Reduction：攻击面最小化\r\n> * Basic Privacy: 基本隐私\r\n> * Least Privilege: 权限最小化\r\n> * Secure Defaults: 默认安全\r\n> * Defense in Depth：纵深防御\r\n> * Threat Modeling：威胁建模\r\n\r\n### 攻击面最小化\r\n\r\n攻击面是指程序任何能被用户或者其它程序所访问到的部分，这些暴露给用户的地方往往也是最可能被恶意攻击者攻击的地方。\r\n\r\n攻击面最小化即是指尽量减少暴露恶意用户可能发现并试图利用的攻击面数量。软件产品的受攻击面是一个混合体，不仅包括代码、接口、服务，也包括对所有用户提供服务的协议。尤其是那些未被验证或者远程的用户都可以访问到的协议，安全人员在攻击面最小化时首先要对攻击面进行分析，攻击面分析就是枚举所有访问入库、接口、协议以及可执行代码的过程，从高层次来说，攻击面分析着重于:\r\n\r\n> * 降低默认执行的代码量\r\n> * 限制可访问到代码的人员范围\r\n> * 限定可访问到代码的人员身份\r\n> * 降低代码执行所需权限\r\n\r\n常见的攻击面分析技巧如下表:\r\n![](http://i1.piimg.com/567571/f829b981e0c39648.png)\r\n\r\n攻击面最小化在微软的应用实践示例:\r\n![](http://i1.piimg.com/567571/fa0857fccc6d5b39.png)\r\n\r\n###基本隐私\r\n\r\n用户使用软件时无可避免个人信息被收集、使用甚至分发，企业则有责任和义务建立保护个人信息的保护措施，抵御敌对攻击行为，确保用户基本隐私的安全性。隐私安全是建立可信任应用程序的关键因素。\r\n\r\n在软件设计时考虑用户基本隐私的必要性及意义有:\r\n> * 履行法律规定和义务\r\n> * 增加客户的信赖\r\n> * 防止堵塞部署\r\n\r\n对于特殊的软件或者全球性的产品，设计人员需要明确软件的行为及针对人群。尤其要考虑当地国家的法律法规，如美国儿童网路隐私保护法COPPA(Children\'s Online Privacy Protection Act)等，企业在开发产品、服务时有必要制定明确的隐私准则，对获取、记录用户隐私的相关产品需有明确的要求和指导建议。\r\n\r\nTips:  \r\n> * 只收集程序必须用到的隐私数据，并明确告知用户并征得用户同意;\r\n> *  微软对于用户隐私数据如密码、口令等均需要加密存储，最低要求是sha256+salt，对于更高要求的则使用PBKDF2算法加密存储;\r\n\r\n\r\n### 权限最小化\r\n\r\n如果一个应用程序或网站被攻击、破坏，权限最小化机制能够有效的将潜在损害最小化。常见的权限最小化实践如:\r\n> * 普通管理员/系统管理员等角色管理\r\n> * 文件只读权限/文件访问权限等访问控制\r\n> * 进程/服务以所需最小用户权限运行\r\n\r\n在进行软件设计时，安全设计人员可以评估应用程序的行为及功能所需的最低限度权限及访问级别，从而合理分配相应的权限。如果程序特定情况必须要较高级别的权限，也可以考虑特权赋予及释放的机制。即便程序遭到攻击，也可以将损失降到最低。\r\n\r\nTips:\r\n> * Windows系统中网络进程、本地服务、用户进程的权限都较低且互相独立，分别为NETWORK SERVICE、LOCAL SERVICE、user权限，只有核心的重要进程实用SYSTEM权限;\r\n> * 最新版本的Office程序打开不可信来源的文档时，默认时不可编辑的，同时也是默认不可执行代码的，即使存在缓冲区溢出漏洞，也不会执行shellcode等恶意代码;\r\n\r\n### 默认安全\r\n\r\n默认安全配置在客户熟悉安全配置选项之前不仅有利于更好的帮助客户掌握安全配置经验，同时也可以确保应用程序初始状态下处于较安全状态。而客户可根据实际使用情况而决定应用程序安全与隐私的等级水平是否降低。\r\n\r\nTips:\r\n> * 在Win 7之后的Windows操作系统中，DEP(数据执行保护)默认是开启的。用户可设置选项改变DEP的状态;\r\n> * Win 10默认启用安全防护软件Windows Defender，用户可选择关闭;\r\n\r\n### 纵深防御\r\n\r\n与默认安全一样，纵深防御也是设计安全方案时的重要指导思想。纵深防御包含两层含义：首先，要在各个不同层面、不同方面实施安全方案，避免出现疏漏，不同安全方案之间需要相互配合，构成一个整体；其次，要在正确的地方做正确的事情，即：在解决根本问题的地方实施针对性的安全方案。\r\n\r\n纵深防御并不是同一个安全方案要做两遍或多遍，而是要从不同的层面、不同的角度对系统做出整体的解决方案。\r\n\r\nTips:\r\n> * 针对XSS的防护，除了要对用户输入的特殊符号进行过滤，还要区分是否是富文本进而进行相应编码操作，在输入时过滤的同时在输出时也进行过滤操作。\r\n> *  即使做了十足的过滤、编码等安全防护，为了更一步确保缓解XSS攻击，Internet Explorer 为Cookie引入了一个新属性，这个属性规定，不许通过脚本访问cookie。Web站点程序对Cookie启用HTTP-Only属性后，可确保即使发生XSS攻击，也可以阻止通过脚本访问Cookie的操作。\r\n\r\n### 威胁建模\r\n\r\n威胁建模是一种分析应用程序威胁的过程和方法。这里的威胁是指恶意用户可能会试图利用以破坏系统，和我们常说的漏洞并不相同。漏洞是一个特定的可以被利用的威胁，如缓冲区溢出、sql注入等。\r\n\r\n作为SDL设计阶段的一部分安全活动，威胁建模允许安全设计人员尽在的识别潜在的安全问题并实施相应缓解措施。在设计阶段把潜在的威胁发现有助于威胁的全面和更有效的解决，同时也有助于降低开发和后期维护的成本。威胁建模的一般流程如下:\r\n> * 与系统架构师及设计人员沟通，了解设计详情\r\n> * 使用成熟的威胁建模方法分析当前设计潜在的安全问题\r\n> * 提出安全建议及对潜在威胁的缓解措施\r\n> * 对安全设计进行验证并对整个设计方案进行回顾并再次确认\r\n\r\n微软使用的威胁建模方法是STRIDE威胁建模方法。为了便于安全人员快速便捷的进行威胁建模，微软开发基于STRIDE威胁建模方法的[SDL Threat Modeling Tool]( https://www.microsoft.com/en-us/sdl/adopt/threatmodeling.aspx)威胁建模工具，该工具可以帮助安全人员画数据流图、分析威胁、生成并导出威胁建模报告。\r\n\r\n## STRIDE威胁建模方法 \r\n\r\n### STRIDE介绍\r\n\r\nSTRIDE威胁建模是由微软提出的一种威胁建模方法，该方法将威胁类型分为Spoofing（仿冒）、Tampering（篡改）、Repudiation（抵赖）、Information Disclosure（信息泄漏）、Denial of Service（拒绝服务）和 Elevation of Privilege（权限提升）。这六种威胁的首字母缩写即是STRIDE，STRIDE威胁模型几乎可以涵盖目前绝大部分安全问题。此外，STRIDE威胁建模方法有着详细的流程和方法。\r\n\r\n### 威胁建模流程\r\nSTRIDE威胁建模的一般流程如下:\r\n> * 绘制数据流图\r\n> * 识别威胁\r\n> * 提出缓解措施\r\n> * 安全验证\r\n\r\n![STRIDE威胁建模流程](http://p1.bpimg.com/567571/bae32719cc8fedb0.png)\r\n\r\n### 数据流图\r\n数据流图(Data Flow Diagrams)包含外部实体(External Entity)、处理过程(Process)、数据流(Data Flow)、数据存储(Data Store)，安全人员与系统架构师及设计人员沟通，了解设计详情并画出数据流图后还需要标注信任边界（Trust Boundary），针对简单的Web应用的数据流图如下:\r\n![数据流图示例及元素类型](http://p1.bpimg.com/567571/85a927be9433294a.png)\r\n\r\n### 识别威胁\r\nSTRIDE威胁建模方法已经明确了每个数据流图元素具有不同的威胁，其中外部实体只有仿冒（S）、抵赖（R）威胁，数据流只有篡改（T）、信息泄露（I）、拒绝服务（D）威胁，处理过程有所有六种（STRIDE）威胁，存储过程有篡改（T）、信息泄露（I）、拒绝服务（D）威胁，但如果是日志类型存储则还有抵赖（R）威胁。具体可以对照如下表格进行威胁识别:\r\n![](http://i1.piimg.com/567571/3b89f95a52c6ecf1.png)\r\n\r\n### 缓解措施\r\n\r\n根据不同的数据流图元素及威胁，相应的缓解措施也不相同。如本文示例数据流图中外部实体用户的仿冒威胁，其缓解措施简单来说就是对用户身份进行认证。对于一个Web应用来说，缓解仿冒威胁不仅需要较强的认证机制，还需要防止恶意攻击者用暴力破解、口令猜测等方法绕过认证从而造成仿冒用户的威胁。如果笔者来提出该用户仿冒威胁的缓解措施的话，详细措施如下:\r\n> * 对用户访问进行帐号密码、证书等身份认证;\r\n> * 用户帐号密码认证过程中，如果出现三次密码错误，则增加验证码机制。输入验证码且正确再进行身份认证;\r\n> * 当用户认证5次后仍然验证失败，则在30分钟内禁止该帐号登录;\r\n> * 用户密码必须包含数字、字母及特殊字符，且长度在8位以上，如果业务安全需要则增加密码过期机制，每隔6个月提醒用户修改密码;\r\n\r\n在提出缓解措施时，有的时候不仅要考虑安全问题，同时也要考虑软件的易用性，所以不同的威胁，不同的应用场景。其缓解措施也要随之而改变以提高应用安全的同时也能给用户带来较好的交互体验。\r\n\r\n微软对于常用的威胁给出了其常用的标准缓解措施，并在具体实施时已将常用的缓解方案及措施集成为独立的解决方案或者代码模块。可以方便同类应用直接使用。\r\n![](http://i1.piimg.com/567571/01c6c694fcd2a9a9.png)\r\n\r\n### 安全验证\r\n在威胁建模完成后，需要对整个过程进行回顾，不仅要确认缓解措施是否能够真正缓解潜在威胁，同时验证数据流图是否符合设计，代码实现是否符合预期设计，所有的威胁是否都有相应的缓解措施。最后将威胁建模报告留存档案，作为后续迭代开发、增量开发时威胁建模的参考依据。\r\n\r\n## 总结\r\nSDL的核心理念是将安全考虑集成在软件开发的每一个阶段:需求分析、设计、编码、测试和维护。从需求、设计到发布产品的每一个阶段每都增加了相应的安全活动，以减少软件中漏洞的数量并将安全缺陷降低到最小程度。本文重点介绍了设计阶段的安全活动指导思想及STRIDE威胁建模，但SDL的其它阶段的不同安全活动也同样对软件安全有着重要影响。同时本文介绍的安全设计原则仅为指导思想，安全设计人员还需要掌握一定的安全攻防知识，具备一定的安全攻防经验才能更好的设计出安全的方案及软件应用。另外根据笔者经验，在实际的安全设计工作中，对于不同软件及应用场景其面临的安全问题也不同。随着互联网时代发展，目前已经不在是单纯的软件时代了，类似移动端应用、智能硬件、云端、大数据平台等新形态的应用都面临的自身特有的安全问题。安全设计人员要考虑的也要更多，但安全设计的核心原则还是相差无几。由于篇幅及笔者经验有限，本文所述如有不妥之处可以与笔者联系交流。\r\n\r\n[原文PDF格式下载](https://github.com/Cryin/Paper/blob/master/SDL-%E8%BD%AF%E4%BB%B6%E5%AE%89%E5%85%A8%E8%AE%BE%E8%AE%A1%E5%88%9D%E7%AA%A5.pdf)：https://github.com/Cryin/Paper\r\n## 参考文献\r\n[1] https://www.microsoft.com/en-us/SDL/process/design.aspx\r\n\r\n[2] http://www.microsoft.com/en-us/sdl/adopt/threatmodeling.aspx\r\n\r\n[3] Introduction_to_Threat_Modeling\r\n\r\n[4] Simplified Implementation of the SDL\r\n\r\n[5] https://github.com/Cryin/Paper\r\n\r\n', '7', 'SDL', '2017-02-16 09:59:00', '4');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category_order` int(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('4', 'Startblog', '1');
INSERT INTO `category` VALUES ('7', 'web安全', '1');
INSERT INTO `category` VALUES ('11', '漏洞分析', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friendship
-- ----------------------------
INSERT INTO `friendship` VALUES ('1', 'Startblog', 'https://github.com/Cryin/Startblog', '1');
INSERT INTO `friendship` VALUES ('7', 'AmazeUI', 'http://amazeui.org/', '2');
INSERT INTO `friendship` VALUES ('9', 'Cryin', 'http://cryin.startblog.cc/', '3');

-- ----------------------------
-- Table structure for `mesboard`
-- ----------------------------
DROP TABLE IF EXISTS `mesboard`;
CREATE TABLE `mesboard` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `site` varchar(256) DEFAULT NULL,
  `message` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mesboard
-- ----------------------------

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
  `footer` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `language` text COLLATE utf8_unicode_ci,
  `statistic` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of siteinfo
-- ----------------------------
INSERT INTO `siteinfo` VALUES ('1', 'http://cryin.startblog.cc', '416049355@qq.com', 'Startblog  |  一款简洁、易用、跨平台自适应的Markdown博客系统', 'startblog,codeigniter blog,markdown博客程序,php blog,markdown blog,Markdown博客系统', ' 2014-2017 Cryin\' | Images :  Startblog', '一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.', 'english', '<script language=\"javascript\" type=\"text/javascript\" src=\"http://js.users.51.la/19034341.js\"></script>\r\n<noscript><a href=\"http://www.51.la/?19034341\" target=\"_blank\"><img alt=\"我要啦免费统计\" src=\"http://img.users.51.la/19034341.asp\" style=\"border:none\" /></a></noscript>');

-- ----------------------------
-- Table structure for `tag`
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag_button_type` varchar(50) DEFAULT 'success',
  PRIMARY KEY (`id`,`tag_name`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('44', ' Markdown', 'warning');
INSERT INTO `tag` VALUES ('66', 'markdown blog', 'danger');
INSERT INTO `tag` VALUES ('39', 'codeigniter', 'danger');
INSERT INTO `tag` VALUES ('38', 'startblog', 'danger');
INSERT INTO `tag` VALUES ('37', 'github', 'success');
INSERT INTO `tag` VALUES ('65', 'codeigniter blog', 'danger');
INSERT INTO `tag` VALUES ('35', 'PHP', 'warning');
INSERT INTO `tag` VALUES ('34', 'HTML5', 'danger');
INSERT INTO `tag` VALUES ('54', 'Paper', 'info');
INSERT INTO `tag` VALUES ('67', 'php', 'warning');
INSERT INTO `tag` VALUES ('68', 'SDL', 'warning');

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

-- ----------------------------
-- Table structure for `version`
-- ----------------------------
DROP TABLE IF EXISTS `version`;
CREATE TABLE `version` (
  `id` int(11) NOT NULL DEFAULT '0',
  `version` varchar(256) DEFAULT NULL,
  `title` text,
  `update` text,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of version
-- ----------------------------
INSERT INTO `version` VALUES ('3', '2.30', '升级后台UI', '升级后台UI，增加英语、中文支持', '2017-04-07 13:17:30');
INSERT INTO `version` VALUES ('2', '2.20', '优化前端', '视图代码通用化，简化Banner、footer页面，增加留言板', '2017-02-06 13:18:46');
INSERT INTO `version` VALUES ('1', '1.60', '更换编辑器', '更新Markdown编辑控件，使用simplemde编辑器。parsedown解析', '2016-10-24 13:19:51');
INSERT INTO `version` VALUES ('0', '1.10', '创建startblog', '学习CodeIgniter，编写博客程序', '2014-09-18 13:20:51');
