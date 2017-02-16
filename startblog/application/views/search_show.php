
    <!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <h1 class="blog-text-center">-- 搜索结果 --</h1>
        <div class="timeline-year">
            <h1><?php if(isset($pattern))echo $pattern?></h1>
            <hr>
                <ul>
                <hr>
                <?php foreach ($show_arr as $key => $value): ?>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span"><?php echo $value['published_at']?></span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="<?php echo site_url("Articles/article/{$value["id"]}");?>"><?php echo $value['title']?></a></span>
                    
                </li>
                <?php endforeach; ?>
                </ul>
        </div>

        <hr>
    </div>

<!-- content end -->
    


