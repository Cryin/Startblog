<link rel="stylesheet" href="<?php echo base_url('/static/admin/css/simplemde.min.css')?>">
<script src="<?php echo base_url('/static/admin/js/simplemde.min.js')?>"></script>
<script src="<?php echo base_url('/static/admin/js/datepicker/jquery.datetimepicker.js'); ?>"></script>
<script src="<?php echo base_url('/static/admin/js/date.js'); ?>"></script>
<link href="<?php echo base_url('/static/admin/js/datepicker/jquery.datetimepicker.css'); ?>" rel="stylesheet">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('articles_new_header'); ?> </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li>
                <i class="fa fa-fw fa-newspaper-o"></i>
                    <a href="<?php echo site_url('admin/Articles/index')?>"><?php echo $this->lang->line('articles_header'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-pencil"></i>
                    <?php echo $this->lang->line('articles_new_header'); ?>               
                    </li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
                                            <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil fa-fw"></i>
                    <?php echo $this->lang->line('articles_new_header'); ?>                
                    </h3>
            </div>

         <div class="panel-body">
            <form action="<?php echo site_url("admin/Articles/update/{$article['0']['id']}")?>" id="contentForm" method="post" accept-charset="utf-8">
                        <textarea name="content" cols="40" rows="50" id="textcontent" class="js-st-instance" ><?php if(isset($article['0']['content'])) echo htmlspecialchars($article['0']['content']);?></textarea>

              </div>
              <div class="panel-footer">
                    <a class="btn btn-primary" data-toggle="modal" href="#attributes"><?php echo $this->lang->line('btn_next'); ?></a>
                    <a class="btn" href="<?php echo site_url('admin/Articles/index')?>"><?php echo $this->lang->line('btn_cancel'); ?></a>
                </div>
            </div>

        <div id="attributes" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('articles_new_attributes'); ?></h4>
              </div>
              <div class="modal-body">
            <div class="alert alert-info"><?php echo $this->lang->line('articles_new_required'); ?></div>
            <div class="form-group">
                                        <label class="control-label" for="postTitle"><?php echo $this->lang->line('articles_new_title'); ?></label>
                    <div class="controls">
                    <input type="text" name="title" id="title" value="<?php if(isset($article['0']['title'])) echo $article['0']['title'];?>" class="form-control"  placeholder="<?php echo $this->lang->line('articles_title_tips'); ?>" required/>
                    <input type="text" name="pv" id="pv" value="<?php echo isset($article['0']['pv'])?$article['0']['pv']:1?>" style="display:none;"  />
                    <input type="text" name="published_at" id="published_at" value="<?php if(isset($article['0']['published_at'])) echo $article['0']['published_at'];?>" style="display:none;"  />
                    </div> <!-- /controls -->
                </div> <!-- /form-group -->

                <div class="form-group">
                                    <label class="control-label" for="category"><?php echo $this->lang->line('articles_new_category'); ?></label>
                    <div class="controls">
                        <select name="category" id="category" class="form-control">
                        <?php foreach ($all_category as $key => $value): ?>
                        <option  <?php if(isset($article['0']['category'])) echo $value['id']==$article['0']['category']?'selected':'' ?> value="<?php echo $value['id']?>"><?php echo $value['category']?></option>
                        <?php endforeach; ?>
                        </select>
                    </div> <!-- /controls -->
                </div> <!-- /form-group -->

                
                <div class="form-group">
                                        <label class="control-label" for="imagelink"><?php echo $this->lang->line('articles_new_feature'); ?></label>
                    <div class="controls">
                         <input type="text" name="imagelink" id="imagelink" value="<?php if(isset($article['0']['imagelink'])) echo $article['0']['imagelink']?>" placeholder="http://www.xxx.com/img/pic.jpg(960*540)" class="form-control" />

                    </div> <!-- /controls -->
                </div> <!-- /form-group -->
               <div class="form-group">
                                        <label class="control-label" for="description"><?php echo $this->lang->line('articles_new_excerpt'); ?></label>
                    <div class="controls">
                         <textarea name="description" cols="40" rows="4" id="description" class="form-control" ><?php if(isset($article['0']['description'])) echo htmlspecialchars($article['0']['description']);?></textarea>

                    </div> <!-- /controls -->
                </div> <!-- /form-group -->

                 <div class="form-group">
                    <label class="control-label" for="tag"><?php echo $this->lang->line('articles_new_tags'); ?></label>
                    <div class="controls">
                         <input type="text" name="tag" id="tag" class="form-control" value="<?php if(isset($article['0']['tag'])) echo $article['0']['tag']?>" placeholder="<?php echo $this->lang->line('articles_tags_tips'); ?>" />

                    </div> <!-- /controls -->
                </div> <!-- /form-group -->

            </div>
            <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $this->lang->line('btn_back'); ?></button>
            <input type="submit" name="submit" value="<?php echo $this->lang->line('btn_save');?>" id="submit" class="btn btn-primary"  />
            </div></div>
           </form>     
           <script>                           
            var simplemde = new SimpleMDE({element: document.getElementById("textcontent")});
            </script>
           </div>
      <!-- /span12 -->

      </div>
      <!-- /row -->
    </div>
