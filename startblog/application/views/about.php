<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
$Parsedown = new Parsedown();
$html = $Parsedown->text($about[0]['content']);

# Read file and pass content through the Markdown parser

?>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center"><?php echo $about[0]['title'];?></h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="https://github.com/Cryin" class="blog-color">Cryin &nbsp;</a></span>
              <span><a href="https://github.com/Cryin/Startblog">@startblog.cc &nbsp;</a></span>
              <span><a href="#">2014/8/15</a></span>
          </p>
        </div>        
        <div class="am-article-bd">
       
        <p>
        <?php echo $html; ?>
    
        </p>
        </div>
      </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span>
            <a href="#"><?php echo $about[0]['tag']; ?></a>
            <hr>
          </div>
        </div>
        <form class="am-form am-g" method="post" action="<?php echo site_url('About/leaving_message')?>">
            <h3 class="blog-comment"><?php echo $this->lang->line('blog_message'); ?></h3>
          <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
              <input type="text" name="name" class="am-form-field am-input-sm" placeholder="<?php echo $this->lang->line('mess_name'); ?>">
            </div>
            <div class="am-form-group am-u-sm-4">
              <input type="text" name="email" class="am-form-field am-input-sm" placeholder="<?php echo $this->lang->line('mess_email'); ?>">
            </div>

            <div class="am-form-group am-u-sm-4 blog-clear-right">
              <input type="text" name="site" class="am-form-field am-input-sm" placeholder="<?php echo $this->lang->line('mess_site'); ?>">
            </div>
        
            <div class="am-form-group">
              <textarea name="message" class="am-form-field am-input-sm" rows="5" placeholder="<?php echo $this->lang->line('mess_content'); ?>"></textarea>
            </div>
        
            <p><button type="submit" name='subimit' value="subimit" class="am-btn am-btn-default"><?php echo $this->lang->line('mess_leave'); ?></button></p>
          </fieldset>
        </form>
<hr>
        <?php if(isset($mesboard))foreach ($mesboard as $key => $value):?>
        <div class="am-g blog-author blog-article-margin">
          <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
            <img src="<?php echo base_url('/static/img/f15.jpg')?>" alt="" class="blog-author-img am-circle">
          </div>
          <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
          <h3><span><a href="<?php echo $value['site'];?>"><?php echo $value['name'];?></a>| <?php echo $value['time'];?></span></h3>
            <p><?php echo $value['message'];?></p>
          </div>
        </div>
        <hr>
  <?php endforeach ?>
        </div>
    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span><?php echo $this->lang->line('blog_aboutme'); ?></span></h2>
            <img src="<?php echo base_url('/static/img/favicon.png')?>" alt="about me" class="blog-entry-img" >
            <p>StartBlog</p>
            <p><?php echo $this->lang->line('blog_header'); ?></p>
        </div>

        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span><?php echo $this->lang->line('blog_contact'); ?></span></h2>
            <p>
                <a href="tencent://message/?uin=416049355"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href="https://github.com/Cryin/"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href="http://weibo.com/justear"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href="http://www.startblog.cc/"><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
                <a href="<?php echo base_url('/feed')?>"><span class="am-icon-rss am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        
    </div>
</div>  

