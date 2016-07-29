<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
$Parsedown = new Parsedown();
$html = $Parsedown->text($about[0]['content']);

# Read file and pass content through the Markdown parser


?>
<div class="container col-sm-8 col-sm-offset-2" style="background-color: #FFF;margin-top:20px;padding-top:1px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
<div class="article" style="padding-top:10px;padding-bottom:50px;">
      <h2 class="text-center">
        <?php echo $about[0]['title'];?>
      </h2>
      <center>
        <p>
          <small class="text-muted">
          	<?php echo $about[0]['tag']; ?>
          </small>
        </p>
         <hr>
       </center>
       <center>
        <article class="markdown-body">
          <?php echo $html; ?>
        </article>
        </center>
    </div>     

<div class="ds-thread" data-thread-key="0" data-title="about" data-url="<?php echo base_url("/About/index");?>"></div>
  <!-- 多说评论框 start -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"startblog"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
     || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
  </script>
<!-- 多说公共JS代码 end -->
  </div>