
    <div class="col-sm-8 col-sm-offset-2" style="padding-top:20px">
    <ol class="breadcrumb">
     <li class="active">搜索结果</li>
     <li class="active"><?php echo $pattern?></li>
    </ol>
        <?php foreach ($show_arr as $key => $value): ?>
        
            <blockquote style="background-color: #FFF;margin-bottom:-20px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD;"><a href='<?php echo site_url("Articles/article/{$value["id"]}");?>'><h2><?php echo $value['title']?></h2></a><small><cite title="Source Title"> published at <?php echo $value['published_at']?></cite></small></blockquote>
          
          <hr style="solid">
        <?php endforeach ?>
    </div>
