<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>StartBlog Admin</title>
    <meta name="generator" content="startblog v2.0" />
    <meta name="author" content="https://github.com/cryin/startblog" />
    <meta name="description" content="startblog是一款基于Codeigniter、Html5开发的简洁、易用、跨平台自适应的Markdown博客系统.！！">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?php echo base_url('/static/admin/img/logoa.png')?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/static/admin/img/app-icon72x72@2x.png')?>">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?php echo base_url('/static/admin/css/amazeui.min.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('/static/admin/css/amazeui.datatables.min.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('/static/admin/css/app.css')?>">
    <script src="<?php echo base_url('/static/admin/js/jquery.min.js')?>"></script>

</head>
<body data-type="index">
    <script src="<?php echo base_url('/static/admin/js/theme.js')?>"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="<?php echo base_url('Articles/index')?>"><img src="<?php echo base_url('/static/admin/img/logo.png')?>" alt="StartBlog"></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="https://github.com/Cryin/Startblog"><span class="am-icon-github"></span> </a>
                        </li>
                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <?php echo anchor('admin/Index/logout','<span class="am-icon-sign-out"></span> 退出',"");?>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>