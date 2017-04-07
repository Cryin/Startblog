<!-- 内容区域 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('articles_header'); ?> </h1>
            <ol class="breadcrumb">
                <li>
                <i class="fa fa-dashboard"></i>
                    <a href="<?php echo site_url('admin/index')?>"><?php echo $this->lang->line('nav_dash'); ?></a>
                </li>
                <li class="active">
                <i class="fa fa-fw fa-file"></i>
                    <a href="<?php echo site_url('admin/Articles/index')?>"><?php echo $this->lang->line('articles_header'); ?></a>
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
                        <th> <?php echo $this->lang->line('articles_title'); ?></th>
                        <th> <?php echo $this->lang->line('articles_category'); ?> </th>
                        <th> <?php echo $this->lang->line('articles_date'); ?> </th>
                        <th class="td-actions"> <?php echo $this->lang->line('articles_delete'); ?></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value): ?>
                    <tr>
                    <td><?php echo $value['title']?></td>
                    <?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
                    <td><?php echo $category_name;?></td>
                    <td><?php echo $value['published_at']?></td>
                    <td class="td-actions"><a href="<?php echo site_url("admin/Articles/edit/{$value['id']}")?>" class="btn btn-small btn-success"><i class="fa fa-pencil"> </i></a> <a data-toggle="modal" class="btn btn-danger btn-small" href="<?php echo site_url("admin/Articles/delete/{$value['id']}")?>"><i class="fa fa-remove"> </i></a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
              </table>
              <?php echo $this->pagination->create_links(); ?>
            </div>
          </div>
         
     </div>