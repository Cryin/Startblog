<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
<div class="article" style="padding-top:20px;padding-bottom:15px;">      

	<div >
<h1 class="text-center">
	welcome!Here is startblog~
</h1>
<div class="sys-home-mod">
	<ul class="server-list">

			<h3>环境配置信息:</h3>
			<p><b>Startblog版本:</b><?php echo "Startblog v1.1";?></p>
            <p><b>PHP版本:</b><?php echo PHP_VERSION;?></p>
            <p><b>服务器操作系统：</b> <?PHP echo PHP_OS; ?></p>
            <p><b>运行环境：</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?></p>
            <p><b>访问IP:</b><?php echo  $_SERVER["REMOTE_ADDR"];?></p>
            <p><b>上传限制：</b><?php $max_upload = ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled"; echo $max_upload;?></p>
            <p><b>服务器时间：</b><?php echo date("Y-m-d H:i:s",time());?></p>
            <p><b>Github:</b><?php echo "https://github.com/Cryin/Startblog";?></p>
	</ul>
</div>
</div>

</div>
</div>