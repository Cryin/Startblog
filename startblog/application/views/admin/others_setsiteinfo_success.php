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
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
          
            <div class="panel-body">
            <h3><?php echo $this->lang->line('settings_notice'); ?><h3>
            <a class="btn btn-primary am-btn-secondary" href="<?php echo site_url("admin/index");?>"><?php echo $this->lang->line('settings_dash'); ?></a></div>
               
            </div> 
          </div>