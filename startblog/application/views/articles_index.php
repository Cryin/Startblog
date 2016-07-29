<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
$Parsedown = new Parsedown();

# Read file and pass content through the Markdown parser
foreach ($data as $key => $value) {
  $data[$key]['content'] = substr($Parsedown->text($value['content']), 0, 450);
}


?>
    
      <?php foreach ($data as $key => $value): ?>
        <div class="col-sm-8 col-sm-offset-2" style="background-color: #FFF;margin-top:5px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
        <div class="article" style="padding-top:20px;">
          <h2 class="text-center">
            <?php echo anchor("/Articles/article/{$value['id']}","{$value['title']}","")?>
          </h2>
          <center>
            <p>
              <small class="text-muted">

                <?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
                分类&nbsp<?php echo anchor("Category/show/{$category_id}","$category_name","")?> &nbsp&nbsp|&nbsp&nbsp<?php echo date('Y年m月d日',strtotime($value['published_at']));?>&nbsp&nbsp|&nbsp&nbsp阅读：<?php echo $value['pv'];?>次
              </small>
            </p>
            <div class="row">
              <hr style="border: none;height: 1px;background-color: #bbb;background-image: -webkit-linear-gradient(0deg, #ddd, #bbb, #ddd);max-width: 80%;">
            </div>
          </center>
          <article class="markdown-body">
            <?php echo $value['content']; ?>
          </article>
          <hr>
          <center style="margin-bottom:30px;margin-top:20px">
            <a href="<?php echo site_url("/articles/article/{$value['id']}")?>">
              <button type="button" class="btn btn-success" style="margin-bottom:30px">阅读全文</button>
            </a>
          </center>
        </div>
        </div>
      <?php endforeach ?>
      <div class="col-sm-8 col-sm-offset-2">
      <center>
        <ul class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
      </center>
      </div>
    