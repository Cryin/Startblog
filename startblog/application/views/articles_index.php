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


?>
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
         <?php foreach ($data as $key => $value): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="<?php echo $value['imagelink']?>" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">

                <span><?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
                <?php echo anchor("Category/show/{$category_id}","$category_name","")?>&nbsp;</span>
                <span><?php echo date('Y年m月d日',strtotime($value['published_at']));?>&nbsp;</span>

                <span>阅读：<?php echo $value['pv'];?>次 &nbsp;</span>
                <h1><?php echo anchor("/Articles/article/{$value['id']}","{$value['title']}","")?></h1>
                <p><?php echo $value['description']; ?>
                </p>
                <p><a href="<?php echo site_url("/articles/article/{$value['id']}")?>" class="am-btn am-btn-default">阅读全文</a></p>
            </div>
        </article>
        <?php endforeach ?>

        

        <ul class="am-pagination">
   <?php echo $this->pagination->create_links(); ?>
</ul>
    </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="<?php echo base_url('/static/img/favicon.png')?>" alt="about me" class="blog-entry-img" >
            <p>StartBlog</p>
            <p>一款基于Codeigniter、Amazeui开发的简洁、易用、跨平台自适应的Markdown博客系统.</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href="tencent://message/?uin=416049355"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href="https://github.com/Cryin/"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href="http://weibo.com/justear"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
                <a href="<?php echo base_url('/feed')?>"><span class="am-icon-rss am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">

            <?php foreach ($all_tag as $key => $value): ?>
            <?php echo anchor("/Tag/show/{$value['id']}","{$value['tag_name']}",array('class' => 'blog-tag'));?>
            <?php endforeach ;?>
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>友情链接</span></h2>
            <ul class="am-list">
              <?php foreach ($friendship as $key => $value): ?>
                <li><a href="<?php echo $value['link']?>" target="_blank"><?php echo $value['link_name']?></a></li>
                <?php endforeach ;?>
            </ul>
        </div>
    </div>
</div>  