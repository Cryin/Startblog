<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
<div class="article" style="padding-top:20px;padding-bottom:15px;">      
<div class="text-center">
        <img src="<?php echo base_url('/static/img/logo.png')?>" class="img-rounded" alt="Startblog v1.1" width="200" height="130"> 
        
	<div>
<h1 class="text-center">
	Start your blog with Markdown ~
</h1>
	<ul class="server-list">

			<h3></h3>
			<p><b>Startblog version:</b><?php echo "Startblog v1.4";?></p>
            <p><b>PHP version:</b><?php echo PHP_VERSION;?></p>
            <p><b>OS type：</b> <?PHP echo PHP_OS; ?></p>
            <p><b>Web server：</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?></p>
            <p><b>Client IP:</b><?php echo  $_SERVER["REMOTE_ADDR"];?></p>
            <p><b>Server time：</b><?php echo date("Y-m-d H:i:s",time());?></p>
            <p><b>Github:</b><?php echo "https://github.com/Cryin/Startblog";?></p>
	</ul>
</div>
</div>
</div>
</div>