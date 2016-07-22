
    <div class="col-sm-8 col-sm-offset-2" style="padding-top:20px">
    <ol class="breadcrumb">
     <li><?php echo anchor("Tag/index","标签","")?></li>
     <li class="active"><button type='button' class='btn btn-<?php if(isset($data[0]['tag_button_type']))echo $data[0]['tag_button_type']?> btn-md'><?php if(isset($data[0]['tag_name']))echo $data[0]['tag_name']?></button></li>
    </ol>
        <?php foreach ($data as $key => $value): ?>
            <blockquote style="background-color: #FFF;margin-bottom:-20px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD;"><a href='<?php echo site_url("Articles/article/{$value["id"]}");?>'><h2><?php echo $value['title']?></h2></a><small><cite title="Source Title"> published at <?php echo $value['published_at']?></cite></small></blockquote>
          
          <hr style="solid">
        <?php endforeach ?>
    </div>
