
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <h1 class="blog-text-center"><?php echo $this->lang->line('categorys_blog'); ?></h1>
        <div class="timeline-year">
            <h1><?php if(isset($cur_category[0]['category']))echo $cur_category[0]['category']?></h1>
            <hr>
                <ul>
                <hr>
                <?php foreach ($data as $key => $value): ?>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span"><?php echo $value['published_at']?></span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="<?php echo site_url("Articles/article/{$value["id"]}");?>"><?php echo $value['title']?></a></span>
                    <?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only"><?php echo $category_name;?></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only"><?php echo $value['tag']?></span>
                </li>
                <?php endforeach; ?>
                </ul>
        </div>

        <hr>
    </div>

<!-- content end -->
    

