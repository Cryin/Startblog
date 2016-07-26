
<div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
<form class="form-horizontal" style='align:"left"' role="form" method="post" action="<?php echo site_url('admin/Others/set_siteinfo')?>">
<div class="article" style="padding-top:20px;padding-bottom:15px;">
  <div class="form-group form-group">
     <?php foreach ($data as $key => $value);?>
    <label class="col-sm-2 control-label">站点标题 :</label>
    <div class="col-sm-3">
      <input class="form-control" name="title" type="text" value="<?php echo $value['title'];?>">
    </div>
  </div>
  <div class="form-group form-group">
     <?php foreach ($data as $key => $value);?>
    <label class="col-sm-2 control-label">站点URL :</label>
    <div class="col-sm-3">
      <input class="form-control" name="url" type="text" value="<?php echo $value['url'];?>">
    </div>
  </div>
  <div class="form-group form-group">
     <?php foreach ($data as $key => $value);?>
    <label class="col-sm-2 control-label">管理邮箱 :</label>
    <div class="col-sm-3">
      <input class="form-control" name="email" type="text" value="<?php echo $value['email'];?>">
    </div>
  </div>
  <div class="form-group form-group">
    <label class="col-sm-2 control-label">SEO关键词 :</label>
    <div class="col-sm-5">
      <input class="form-control" name="keywords" type="text" value="<?php echo $value['keywords'];?>">
      <span class="help-block">注: 多个关键词用“,”分离</span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">站点描述 :</label>
    <div class="col-sm-6">
          <textarea class="form-control" name="description" rows="4"><?php echo $value['description'];?></textarea>
    </div>

  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">统计代码 :</label>
    <div class="col-sm-6">
          <textarea class="form-control" name="statistic" rows="4"><?php echo $value['statistic'];?></textarea>
    </div>

  </div>
  <div class="form-group">
      <div class="col-sm-4 col-sm-offset-2">
        <button type="submit" name='subimit' value="subimit" class="btn btn-block btn-info">提交</button>
      </div>
  </div>
     </div>
</form>
</div>