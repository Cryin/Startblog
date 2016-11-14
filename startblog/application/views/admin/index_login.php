<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>StartBlog Admin</title>
    <meta name="generator" content="startblog v1.5" />
    <meta name="author" content="https://github.com/cryin/startblog" />
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?php echo base_url('/static/admin/img/favicon.png')?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/static/admin/img/app-icon72x72@2x.png')?>">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?php echo base_url('/static/admin/css/amazeui.min.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('/static/admin/css/amazeui.datatables.min.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('/static/admin/css/app.css')?>">
    <script src="<?php echo base_url('/static/admin/js/jquery.min.js')?>"></script>

</head>

<body data-type="login">
    <script src="<?php echo base_url('/static/admin/js/theme.js')?>"></script>
    <div class="am-g tpl-g">
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
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>
                <?php echo form_open('admin/Index/login','class="am-form tpl-form-line-form"'); ?>
                
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input-lg" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="请输入账号">
                        <label class="am-form-label" for="doc-ipt-error"><?php echo form_error('username'); ?></label>
                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="请输入密码">
                        <label class="am-form-label" for="doc-ipt-error"><?php echo form_error('password'); ?></label>
                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
       
                        记住我的登录信息
                         </label>

                    </div>

                    <div class="am-form-group">

                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" name='subimit' value="subimit">提交</button>

                    </div>
                </form>
                <p>Powered by startblog &copy; 2016 version 1.5</p>
            </div>
            
        </div>
    </div>
    <script src="<?php echo base_url('/static/admin/js/amazeui.min.js')?>"></script>
    <script src="<?php echo base_url('/static/admin/js/app.js')?>"></script>

</body>

</html>
