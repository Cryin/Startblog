<?php 
date_default_timezone_set('Asia/Chongqing'); 
echo date('Y-m-d H:i:s'); 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('dash_welcome'); ?>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                <i class="fa fa-dashboard"></i>
                    <?php echo $this->lang->line('nav_dash'); ?>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p><?php echo $this->lang->line('dash_message'); ?></p>
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <i class="fa fa-newspaper-o fa-fw"></i>
                        <?php echo $this->lang->line('feed_heading'); ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                        <?php foreach ($version as $key => $value): ?>
                        <li class="list-group-item"><span class="badge"><?php echo date("jS",strtotime($value['updatetime'])).' '.date("M", strtotime($value["updatetime"]))?></span><p><a href="https://github.com/Cryin/Startblog" class="news-item-title" target="_blank"><?php echo 'v'.$value['version'].' '.$value['title']?></a></p><p><?php echo $value['update']?></p></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                </div>
        </div>
        <!-- /colmd6 -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Author  :</b> <?php echo $this->config->item('author');?><br/>
                    Version :</b> <?php echo $this->config->item('startblog_ver');?><br/>
                    Contact:</b> <?php echo $this->config->item('contact');?><br/>
                    Github:</b> <a href="<?php echo $this->config->item('github');?>"><span class="fa fa-github-alt"></span></a><br/>
                                </p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    <i class="fa fa-long-arrow-right fa-fw"></i>
                    <?php echo $this->lang->line('dash_recent'); ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                    <?php foreach ($data as $key => $value): ?>
                    <li class="list-group-item"><span class="badge"><?php echo date("jS",strtotime($value['published_at'])).' '.date("M", strtotime($value["published_at"]));?></span><p><a href="<?php echo site_url("/Articles/article/{$value['id']}")?>" class="news-item-title" target="_blank"><?php echo $value['title']?></a></p><p><?php echo $value['description']?></p></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
            </div>
        </div>
        <!-- /colmd6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 