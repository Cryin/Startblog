
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">
              <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-clone page-header-heading-icon"></span> 友情链接 <small>Friendship</small></div>
                        <p class="page-header-description">新增、删除友情链接</p>
                    </div>
                </div>

            </div>

                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-body  am-fr">

                                
                                <div class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a class="am-btn am-btn-primary tpl-btn-bg-color-success tpl-login-btn" href="<?php echo site_url('admin/Friendship/addpage')?>"><span class="am-icon-plus"></span>新增</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact tpl-table-black" id="example-r">

                                        <thead>
                                            <tr>
                                                <th>序号</th>
                                                <th>名称</th>
                                                <th>链接</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($data as $key => $value): ?>
                                            <tr class="gradeX">
                                                <td class="am-text-middle"><?php echo $value['id']?></td>
                                                <td class="am-text-middle"><?php echo $value['link_name']?></td>
                                                <td class="am-text-middle"><?php echo $value['link']?></td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="<?php echo site_url("admin/Friendship/delete/{$value['id']}")?>" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <?php echo $this->pagination->create_links(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>