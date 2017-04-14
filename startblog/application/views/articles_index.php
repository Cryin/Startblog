<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
$Parsedown = new Parsedown();

# Read file and pass content through the Markdown parser
foreach ($data as $key => $value) {
  $data[$key]['description'] = substr($Parsedown->text($value['description']), 0, 100);
}

date_default_timezone_set("Asia/Shanghai"); 
?>
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
         <?php foreach ($data as $key => $value): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <!--<img src="<?php echo $value['imagelink']?>" alt="封面配图" class="am-u-sm-12">-->
                <img src="<?php echo $value['imagelink'] == '' ? site_url("/static/img/b2.jpg") : $value['imagelink']?>" alt="封面配图" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">

                <span><?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
                <?php echo anchor("Category/show/{$category_id}","$category_name","")?>&nbsp;</span>
                <span><?php echo date('Y年m月d日',strtotime($value['published_at']));?>&nbsp;</span>

                <span><?php echo $this->lang->line('blog_read'); ?>：<?php echo $value['pv'];?><?php echo ' '.$this->lang->line('blog_time'); ?> &nbsp;</span>
                <h1><?php echo anchor("/Articles/article/{$value['id']}","{$value['title']}","")?></h1>
                <p><?php echo $value['description']; ?>
                </p>
                <p><a href="<?php echo site_url("/articles/article/{$value['id']}")?>" class="am-btn am-btn-default"><?php echo $this->lang->line('article_read'); ?></a></p>
            </div>
        </article>
        <?php endforeach ?>

        

        <ul class="am-pagination">
   <?php echo $this->pagination->create_links(); ?>
</ul>
    </div>

