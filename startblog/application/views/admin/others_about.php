
<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
<form class="form-horizontal" style='align:"left"' role="form" method="post" action="<?php echo site_url('admin/Others/edit_about')?>">
<div class="article" style="padding-top:20px;padding-bottom:15px;">
  <div class="form-group form-group">
     <?php foreach ($data as $key => $value);?>
    <label class="col-sm-2 control-label">标题 :</label>
    <div class="col-sm-3">
      <input class="form-control" name="title" type="text" value="<?php echo $value['title'];?>">
    </div>
  </div>
  <div class="form-group form-group">
     <?php foreach ($data as $key => $value);?>
    <label class="col-sm-2 control-label">标签 :</label>
    <div class="col-sm-5">
      <input class="form-control" name="tag" type="text" value="<?php echo $value['tag'];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">页面内容 :</label>
    <div class="col-sm-8">
          <textarea class="form-control" name="content" rows="20"><?php echo htmlspecialchars($value['content']);?></textarea>
    </div>

  </div>
  <div class="form-group">
      <div class="col-sm-3 col-sm-offset-2">
        <button type="submit" name='subimit' value="subimit" class="btn btn-block btn-info">提交</button>
      </div>
  </div>
     </div>
</form>
</div>