<!-- 内容区域 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('link_new_header'); ?>            </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-cogs "></i>
                    <a href="<?php echo site_url('admin/Friendship/index')?>"><?php echo $this->lang->line('link_header'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-pencil"></i>
                    <?php echo $this->lang->line('link_new_header'); ?>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    
    <div class="panel panel-default">
        
        <div class="panel-body">
            <div class="form-group">  
            <form action="<?php echo site_url('admin/Friendship/add')?>" method="post" accept-charset="utf-8">
                                                   
                    <label class="control-label" for="link_name"> <?php echo $this->lang->line('link_name'); ?> </label>
                    <div class="controls">
                    <input type="text" name="link_name" id="link_name" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="link"><?php echo $this->lang->line('link_address'); ?></label>
                    <div class="controls">
                    <input type="text" name="link" id="link" class="form-control" placeholder="<?php echo $this->lang->line('link_new_tips'); ?>" />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="link_order"><?php echo $this->lang->line('link_id'); ?></label>
                    <div class="controls">
                    <input type="text" name="link_order" id="link_order" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
           <div class="panel-footer">
                   <input type="submit" name="submit" value="<?php echo $this->lang->line('btn_save');?>" id="submit" class="btn btn-primary"  />
                    <a class="btn" href="<?php echo site_url('admin/Friendship/index')?>"><?php echo $this->lang->line('btn_cancel');?></a>
            </div> 
            </form>           
        </div> 
        </div>
    </div>
</div>