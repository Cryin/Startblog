# Startblog

>一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.

>Author: [Cryin']

![](http://i1.piimg.com/567571/6947db2521f305f1.jpg)

###主页

 [http://cryin.startblog.cc](http://cryin.startblog.cc)

 ###下载：
 
  [github]( https://github.com/Cryin/Startblog)
 
###程序功能：

>Markdown博文撰写、修改、删除功能,

>Markdown在线编辑器,实时预览;

>文章全文搜索、备份功能;

>站点、博文SEO信息设置;

>RSS订阅、友情链接功能;

###运行环境:
* Apache+php 5.x + mysql

###demo:
* demo.startblog.cc 
* admin page：/admin/Index/login
* username：startblog
* password：startblog

###反馈:

本着大道至简的原则，本Blog程序只维持最基本的Blog形态，不会轻易增加其它功能。有任何问题可以反馈至issues或者qq交流。

###关于作者

* github https://github.com/Cryin

###贡献者

感谢辉哥设计的Logo，感谢贡献者LUHOO、Hardy、Ant、半城人

###捐赠者

感谢Hardy、格格的捐赠！

###安装方法:

>手动创建数据库

>将程序上传至站点根目录,输入http://www.yoursite.cc/install进行安装即可

如果安装在目录则根据站点目录

>修改application\config\config.php文件，添加目录字段，如目录为startblog：
$config['base_url'] = 'http://'.$_SERVER['SERVER_NAME'].'/startblog';

>修改.htaccess文件Rewrite规则，如目录为startblog则修改为：
>>RewriteEngine on  
>>RewriteCond $1 !^(index\.php|static|favicon\.ico|robots\.txt)  
>>RewriteRule ^(.*)$ /startblog/index.php/$1 [L]

###手动安装说明:

>根据站点目录设置application\config\config.php文件$config['base_url']项

>根据站点目录修改.htaccess文件Rewrite规则

>设置数据库配置信息：application\config\database.php文件

>创建数据库startblog，并导入sql文件，路径data\db\startblog.sql

>管理默认用户名、密码均为startblog

###Screenshot
![](http://i2.muimg.com/567571/c5f0fac2fcde0b02.png)
![](http://i4.buimg.com/567571/79ae794be212b2f1.png)
