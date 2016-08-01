<link rel="stylesheet" href="<?php echo base_url('/static/css/simplemde.min.css')?>">
<script src="<?php echo base_url('/static/js/simplemde.min.js')?>"></script>
  <form role="form" method="post" action="<?php echo site_url('admin/Articles/update')?>">
    <div class="col-sm-6  col-sm-offset-2">
      <div class="form-group">
        <label for="name">标题</label>
        <input class="sr-only" name="id" value="<?php echo isset($article['0']['id'])?$article['0']['id']:0?>">
        <input class="sr-only" name="pv" value="<?php echo isset($article['0']['pv'])?$article['0']['pv']:1?>">
        <input type="text" class="form-control" id="name" name="title"
           placeholder="请输入标题" value="<?php if(isset($article['0']['title'])) echo $article['0']['title'];?>" required>
      </div>

      <div class="form-group">
        <label for="content">内容</label>
        <textarea class="form-control" rows="21" id="textcontent" name="content" placeholder="请输入内容" required><?php if(isset($article['0']['content'])) echo htmlspecialchars($article['0']['content']); else echo("#hello startblog")?></textarea>
      </div>


    </div>

    <div class="col-sm-2">
      <div class="form-group">
          <label for="published_at">发布日期</label>
          <div class='input-group date'>
              <input type='text' class="form-control" name="published_at" id='datetimepicker1' value="<?php if(isset($article['0']['published_at'])) echo $article['0']['published_at']?>"/>
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
      </div>
      <div class="form-group">
        <label for="category">分类</label>
        <select class="form-control" name="category">
          <?php foreach ($all_category as $key => $value): ?>
            <option  <?php if(isset($article['0']['category'])) echo $value['id']==$article['0']['category']?'selected':'' ?> value="<?php echo $value['id']?>"><?php echo $value['category']?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="tag">标签</label>
        <input type="text" class="form-control" id="name" name="tag"
           placeholder="请输入标签" value="<?php if(isset($article['0']['tag'])) echo $article['0']['tag']?>" required>
        <span class="help-block">标签请用英文“,”分离</span>
      </div>
      <div class="form-group">
        <label for="tag">SEO关键词</label>
        <input type="text" class="form-control" id="name" name="keyword"
           placeholder="多个关键词用;分割" value="<?php if(isset($article['0']['keyword'])) echo $article['0']['keyword']?>" required>
      </div>
      <div class="form-group">
        <label for="tag">SEO描述</label>
        <textarea class="form-control" rows="6" name="description" placeholder="请输入SEO描述内容" required><?php if(isset($article['0']['description'])) echo htmlspecialchars($article['0']['description']);?></textarea>
      </div>
   <!--   <div class="form-group">
        <label for="tag">MarkDown在线编辑器</label>
        <span class="help-block"><a href="http://mahua.jser.me/" target="_blank">MaHua</a> </span>
      </div>-->
      <div class="form-group">
      <div class="pull-left">
        <button type="submit" class="btn btn-primary btn-block">提交</button>
      </div>
      </div>

    </div>

          
  </form>
<script>
var simplemde = new SimpleMDE({ element: document.getElementById("textcontent") });
</script>
<script type="text/javascript" src="<?php echo base_url('/static/js/bootstrap-datetimepicker.min.js')?>"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
          format: 'YYYY-MM-DD HH:mm:ss',
          useStrict: true,
          defaultDate: 'moment',
        });
    });
</script>

