<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <?php if(isset($siteinfo))foreach ($siteinfo as $key => $value);?>
  <title><?php if(isset($value['title']))echo $value['title'];?></title>
  <meta name="keywords" content="<?php if(isset($value['keywords']))echo $value['keywords'];?>" />
  <meta name="description" content="<?php if(isset($value['description']))echo $value['description'];?>" />
  <meta name="generator" content="startblog v2.30" />
  <meta name="renderer" content="webkit">
  <meta name="author" content="https://github.com/cryin/startblog" />
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="<?php echo base_url('/static/img/favicon.png')?>">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="<?php echo base_url('/static/img/favicon.png')?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/static/img/favicon.png')?>">
  <meta name="msapplication-TileImage" content="<?php echo base_url('/static/img/favicon.png')?>">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/amazeui.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/app.css')?>">
  <script src="<?php echo base_url('/static/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('/static/js/amazeui.min.js')?>"></script>
</head>

<body id="blog">
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <a href="<?php echo base_url()?>"><img width="200" src="<?php echo base_url('/static/img/bigtitle.png')?>" alt="Startblog Logo"/></a>
        <h2 class="am-hide-sm-only"> <?php echo $this->lang->line('blog_header'); ?></h2>
    </div>
</header>
<hr>
