<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>startblog登录</title>
   <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php echo form_open('admin/Index/login'); ?>
<div class="container" id="mymodal">
  <div class="row myCenter">
    <div class="col-sm-4 col-center-block" style="margin-top:10%;float: none;display: block;margin-left: auto;margin-right: auto;">
    <div class="panel panel-default">
   <div class="panel-body">
      <form class="form-signin">
        <div class="text-center">
        <img src="<?php echo base_url('/static/img/logo.png')?>" class="img-rounded" alt="Startblog v1.1" width="200" height="130"> 
        </div>
        <div>
        <label for="username" class="sr-only">用户名</label>
        <input type="text" id="username" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="用户名" autofocus>
        <p class="text-danger"><?php echo form_error('username'); ?></p>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="密码">
        <p class="text-danger"><?php echo form_error('password'); ?></p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">
            记住我的登录信息 </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name='subimit' value="subimit">登录</button>
      </form>
   </div>
</div>
<p class="pull-right" style="">Powered by startblog &copy; 2016 version 1.4</p>
    </div>
  </div>

</div>
</body>

</html>
