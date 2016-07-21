<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if(isset($siteinfo))foreach ($siteinfo as $key => $value);?>
  <title><?php if(isset($value['title'])) echo $value['title'];?> - powered by startblog</title>
  <meta name="keywords" content="<?php if(isset($value['keywords']))echo $value['keywords'];?>" />
  <meta name="description" content="<?php if(isset($value['description']))echo $value['description'];?>" />
  <meta name="generator" content="startblog v1.0" />
  <meta name="author" content="https://github.com/cryin/startblog" />

  <link rel="stylesheet" href="<?php echo base_url('/static/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/github-markdown.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/bootstrap-datetimepicker.min.css')?>">
  <script src="<?php echo base_url('/static/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('/static/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/static/js/moment.min.js')?>"></script>
   <style>
    .markdown-body {
        box-sizing: border-box;
        min-width: 200px;
        max-width: 980px;
        margin: 0 auto;
        padding: 0px;
    }
   </style>
</head>
<body style="background-color: #FFFFF">
