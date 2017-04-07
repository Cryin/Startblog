
<!-- 内容区域 -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('link_header'); ?>
            </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-user"></i>
                    <a href="<?php echo site_url('admin/Friendship/index')?>"><?php echo $this->lang->line('link_header'); ?></a>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> <?php echo $this->lang->line('link_id'); ?> </th>
                    <th> <?php echo $this->lang->line('link_name'); ?> </th>
                    <th> <?php echo $this->lang->line('link_address'); ?> </th>
                    <th> <?php echo $this->lang->line('link_edit'); ?></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value): ?>
                    <tr>
                        <td><?php echo $value['link_order']?></td>
                        <td><?php echo $value['link_name']?></td>
                        <td><?php echo $value['link']?></td>
                        <td class="td-actions">
                            
                            <?php echo anchor("admin/Friendship/editpage/{$value['id']}",'<i class="fa fa-pencil"></i>',"class ='btn btn-small btn-success'")?>
                            <?php echo anchor("admin/Friendship/delete/{$value['id']}",'<i class="fa fa-remove"></i>',"class='btn btn-danger btn-small',data-toggle='modal'")?>
                        </td>
                        </tr>
                         <?php endforeach; ?>
                </tbody>
              </table>
              <?php echo $this->pagination->create_links(); ?>
            </div>
      </div>
 </div>