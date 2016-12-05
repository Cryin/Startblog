<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>安装向导 | Powered By Startblog</title>
  <meta name="generator" content="startblog v2.1" />
  <meta name="author" content="https://github.com/cryin/startblog" />

  <link rel="stylesheet" href="<?php echo base_url('/static/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/github-markdown.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('static/css/style.css');?>" media="screen" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('/static/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('/static/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/static/js/moment.min.js')?>"></script>
  <script type="text/javascript">
  var baseurl='<?php echo base_url()?>';
  var siteurl='<?php echo site_url()?>';
  var sitedomain='<?php echo $_SERVER['HTTP_HOST'];?>';
  </script>
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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">StartBlog 安装向导 >> 创建数据</div>
                    <div class="panel-body">
                        <?php echo form_open('install/process');?>
                            <div class="form-group">
                                <label class="col-md-offset-1 control-label"><h3><b>数据库信息：</b></h3></label>
                            </div>
                            <div class="form-group">
                                <label for="dbhost" class="col-md-2 col-md-offset-1 control-label">数据库服务器</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="dbhost" name="dbhost" value="<?php echo $item['dbhost'];?>" placeholder="localhost">
	                            	<span class="help-block red"><?php echo form_error('dbhost');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="port" class="col-md-2 col-md-offset-1 control-label">数据库端口</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="port" name="port" value="<?php echo $item['port'];?>" placeholder="3306">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dbuser" class="col-md-2 col-md-offset-1 control-label">数据库用户名</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="dbuser" name="dbuser" value="<?php echo set_value('dbuser')?>" placeholder="">
	                            	<span class="help-block red"><?php echo form_error('dbuser');?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dbpsw" class="col-md-2 col-md-offset-1 control-label">数据库密码</label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" id="dbpsw" name="dbpsw" value="<?php echo set_value('password')?>" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dbname" class="col-md-2 col-md-offset-1 control-label">数据库名</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="dbname" name="dbname" value="<?php echo set_value('dbname')?>" placeholder="请先手动创建数据库">
	                            	<span class="help-block red"><?php echo form_error('dbname');?></span>
                                </div> 
                            </div>

                            <div class="row">
                            <label class="col-md-offset-1 control-label"><h3><b></b></h3></label>
                            </div> 
                            <center>
                                <br>
                                <button type="submit" class="btn btn-primary btn-block">创建数据</button>
                            </center>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
                            <script type="text/javascript">
                            $(document).ready(function(){
                                $("#dbname").blur(function(){
                                    $.ajax({
                                        url: '<?php echo site_url('install/testdb');?>'+'/'+document.getElementById("dbhost").value+'/'+document.getElementById("dbuser").value+'/'+document.getElementById("dbpsw").value+'/'+document.getElementById("dbname").value+'/'+document.getElementById("port").value,
                                        success: function(data) {
                                          $("#testdb").html(data);
                                      }});
                                });
                            });
                            </script>
</body>
</html>