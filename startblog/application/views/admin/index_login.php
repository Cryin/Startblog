
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->lang->line('nav_logout'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="<?php echo base_url('/static/admin/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('/static/admin/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('/static/admin/css/sb-admin.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/static/admin/font-awesome/css/font-awesome.min.css')?>">
</head>

<body class="login"><div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    <img src="<?php echo base_url('/static/img/favicon.png')?>" class="login_logo" />
                    </div>
                    <div class="panel-body">
                            <form action="<?php echo site_url("admin/Index/login")?>" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="username"><?php echo $this->lang->line('login_username'); ?></label>
                                        <input type="text" name="username" value="demo" id="username" class="form-control" placeholder="<?php echo $this->lang->line('login_username'); ?>"  />
                                        <label for="password"><?php echo form_error('username'); ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="password"><?php echo $this->lang->line('login_password'); ?>:</label>
                                     <input type="password" name="password" value="demo" id="password" class="form-control" placeholder="<?php echo $this->lang->line('login_password'); ?>"  />
                                     <label for="password"><?php echo form_error('password'); ?></label>
                                     
                                </div>
                    
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="<?php echo $this->lang->line('login_signin'); ?>">
                                </div>

                                <p>Powered By Startblog &copy; 2017</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>