<!-- 内容区域 -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('tags_header'); ?>
            </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-tags"></i>
                    <a href="<?php echo site_url('admin/Tag/index')?>"><?php echo $this->lang->line('tags_header'); ?></a>
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
                    <i class="fa fa-tag"></i>
                    <?php echo $this->lang->line('tags_new_header'); ?>                </h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo site_url('admin/Tag/add')?>" method="post" accept-charset="utf-8">

                <div class="form-group">        

                    <div class="controls">
                    <input type="text" name="tag_name" id="tag_name" class="form-control" placeholder="<?php echo $this->lang->line('tags_new_tips'); ?>"  />
                    </div> <!-- /controls --> 
                </div> <!-- /form-group -->
                    <input type="submit" name="submit" value="<?php echo $this->lang->line('btn_add'); ?>" id="submit" class="btn btn-primary"  />
                </div>
               </form>               
          </div>

            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> <?php echo $this->lang->line('tags_title'); ?> </th>
                    <th> <?php echo $this->lang->line('tags_delete'); ?></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value): ?>
                    <tr>
                        <td><?php echo $value['tag_name']?></td>
                        <td class="td-actions">
                            <?php echo anchor("admin/Tag/delete/{$value['id']}",'<i class="fa fa-remove"></i>',"class='btn btn-danger btn-small',data-toggle='modal'")?>
                        </td>
                        </tr>
                         <?php endforeach; ?>
                </tbody>
              </table>
              <?php echo $this->pagination->create_links(); ?>
            </div>
      </div>
 </div>