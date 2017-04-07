<!-- 内容区域 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('user_edit_header'); ?>           </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li>
                <i class="fa fa-fw fa-user"></i>
                    <a href="<?php echo base_url('admin/Others/change_password')?>"><?php echo $this->lang->line('user_edit_header'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-pencil"></i>
                    <?php echo $this->lang->line('user_edit_pass'); ?> </li>
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
                    <?php echo $this->lang->line('user_edit_pass'); ?>              </h3>
            </div>
            
         <div class="panel-body">
             <form action="<?php echo site_url('admin/Others/change_password');?>" method="post" accept-charset="utf-8">

                <div class="form-group">        
                                                    
                    <label class="control-label" for="username"><?php echo $this->lang->line('user_username'); ?></label>
                    <div class="controls">
                    <input type="text" name="username" value="<?php echo $_SESSION['username']?>" id="username" class="form-control disabled" disabled=""  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->

                <div class="form-group">        
                                                    
                    <label class="control-label" for="old_password"><?php echo $this->lang->line('user_old_pass'); ?></label>
                    <div class="controls">
                         <input type="password" name="old_password" id="old_password" class="form-control"  />
                         <p class="text-danger"><?php echo form_error('old_password'); ?></p>

                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                
                <div class="form-group">        
                                                    
                    <label class="control-label" for="new_password"><?php echo $this->lang->line('user_new_pass'); ?></label>
                    <div class="controls">
                        <input type="password" name="new_password" id="new_password" class="form-control"  />
                        <p class="text-danger"><?php echo form_error('new_password'); ?></p>
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->

                <div class="form-group">    
                                                    
                    <label class="control-label" for="new_password_conf"><?php echo $this->lang->line('user_new_confirm'); ?></label>
                    <div class="controls">
                        <input type="password" name="new_password_conf" id="new_password_conf" class="form-control"  />
                        <p class="text-danger"><?php echo form_error('new_password_conf'); ?></p>
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                </div>
                
                <div class="panel-footer">
                <input type="submit" name="submit" value="<?php echo $this->lang->line('btn_save'); ?>" id="submit" class="btn btn-primary"  />
 
                    <a class="btn" href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('btn_cancel'); ?></a>
                </div> <!-- /form-actions -->
               </form>          </div>
        </div>
    </div>
</div>