<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('settings_header'); ?>            </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-cogs "></i>
                    <a href="<?php echo site_url('admin/Others/show_siteinfo')?>"><?php echo $this->lang->line('settings_header'); ?></a>
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
            <form action="<?php echo site_url('admin/Others/set_siteinfo');?>" method="post" accept-charset="utf-8">
                                                   
                    <label class="control-label" for="title"> <?php echo $this->lang->line('settings_title'); ?> </label>
                    <div class="controls">
                    <input type="text" name="title" value="<?php echo $value['title'];?>" id="siteTitle" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="keywords"><?php echo $this->lang->line('settings_keywords'); ?></label>
                    <div class="controls">
                    <input type="text" name="keywords" value="<?php echo $value['keywords'];?>" id="keywords" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="description"><?php echo $this->lang->line('settings_description'); ?></label>
                    <div class="controls">
                    <input type="text" name="description" value="<?php echo $value['description'];?>" id="description" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
                <div class="form-group">    
                    <label class="control-label" for="footer"><?php echo $this->lang->line('settings_footer'); ?></label>
                    <div class="controls">
                    <input type="text" name="footer" value="<?php echo $value['footer'];?>" id="footer" class="form-control"  />
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->

                <div class="form-group">
                    <label class="control-label" for="language"><?php echo $this->lang->line('settings_lang'); ?></label>
                    <div class="controls">
                    <select name="language" id="language" class="form-control">
                        <option <?php if($value['language']=='english') echo 'selected '?>value="english">english</option>
                        <option <?php if($value['language']=='chinese') echo 'selected '?> value="chinese">chinese</option>
                        </select>
                    </div> <!-- /controls -->               
                </div> <!-- /form-group -->
            <hr />
              <div class="form-group">  
                    <label class="control-label" for="statistic"><?php echo $this->lang->line('settings_additional_js'); ?></label>
                    <div class="controls">
                    <textarea name="statistic" cols="40" rows="5" id="statistic" class="form-control" ><?php echo $value['statistic'];?></textarea>
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