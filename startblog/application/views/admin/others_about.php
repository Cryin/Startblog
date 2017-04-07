<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('contact_header'); ?>            </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-cogs "></i>
                    <a href="<?php echo site_url('admin/Others/about')?>"><?php echo $this->lang->line('contact_header'); ?></a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    
    <div class="panel panel-default">
        
        <div class="panel-body">
            <div class="form-group">  
            <?php foreach ($data as $key => $value):?>  
            <form action="<?php echo site_url('admin/Others/edit_about');?>" method="post" accept-charset="utf-8">
                                                   
                    <label class="control-label" for="title"> <?php echo $this->lang->line('contact_title'); ?> </label>
                    <div class="controls">
                    <input type="text" name="title" value="<?php echo $value['title'];?>" id="siteTitle" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="content"><?php echo $this->lang->line('contact_content'); ?></label>
                    <div class="controls">
                    <textarea name="content" cols="40" rows="18" id="content" class="form-control" ><?php echo htmlspecialchars($value['content']);?></textarea>  
                    <?php echo $this->lang->line('contact_tips'); ?>
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="tags"><?php echo $this->lang->line('contact_tags'); ?></label>
                    <div class="controls">
                    <input type="text" name="tag" value="<?php echo $value['tag'];?>" id="tag" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                
                <div class="panel-footer">

                 <input type="submit" name="submit" value="<?php echo $this->lang->line('btn_save');?>" id="submit" class="btn btn-primary"  />
                   
                </div>
            </form> 
        <?php endforeach;  ?>           
        </div> 
        </div>
    </div>
</div>