<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
#use \Michelf\MarkdownExtra;
#require_once __DIR__ . '/Michelf/Parsedown.php';
# Read file and pass content through the Markdown parser
#$html = MarkdownExtra::defaultTransform($article[0]['content']);

$Parsedown = new Parsedown();
$html = $Parsedown->text($article[0]['content']);
date_default_timezone_set("Asia/Shanghai"); 
?>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center"><?php echo $article[0]['title'];?></h1>
          <p class="am-article-meta blog-text-center">
              <?php $category_id = $article[0]['category'];$category_name = $all_category["$category_id"]['category'];?>
                &nbsp<?php echo anchor("Category/show/{$category_id}","$category_name","")?> &nbsp&nbsp|&nbsp&nbsp<?php echo date('Y年m月d日',strtotime($article[0]['published_at']));?>&nbsp&nbsp|&nbsp&nbsp阅读：<?php echo $article[0]['pv'];?>次
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
            <?php if(isset($article[0]['tag'])):?>
          <?php foreach ($article[0]['tag'] as $key => $value):?>
            <?php echo anchor("/Tag/show/{$key}","$value","");?>
          <?php endforeach?>
        <?php endif?>
          </div>
        </div>

        <hr>
    </div>

 
