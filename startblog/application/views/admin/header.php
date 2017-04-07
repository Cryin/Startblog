<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>StartBlog Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">




<script src="<?php echo base_url('/static/admin/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('/static/admin/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('/static/admin/css/sb-admin.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/static/admin/font-awesome/css/font-awesome.min.css')?>">
</head>
<body>
<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/index')?>"><img src="<?php echo base_url('/static/img/bigtitle.png')?>" class="logo-icon" alt="Startblog"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="<?php echo base_url('Articles/index')?>"><i class="fa fa-home"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <!--  <li>
                            <a href="<?php echo base_url('admin/Others/change_password')?>"><i class="fa fa-fw fa fa-pencil"></i> <?php echo $this->lang->line('nav_profile'); ?></a>
                        </li>-->

                        <li>
                            <a href="<?php echo base_url('admin/Index/logout')?>"><i class="fa fa-fw fa-power-off"></i> <?php echo $this->lang->line('nav_logout'); ?></a>
                        </li>
                            
                    </ul>
                </li>
            </ul>