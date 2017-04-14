
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">
              <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-clone page-header-heading-icon"></span> 标签管理 <small>Tag</small></div>
                        <p class="page-header-description">新增、删除标签</p>
                    </div>
                </div>

            </div>

                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body  am-fr">

                                
                                <div class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                   <form class="am-form"  method="post" action="<?php echo site_url('admin/Tag/add')?>">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field" name="tag_name" placeholder="请输入标签名称">
                                        <span class="am-input-group-btn">
                                        
                                        <button type="submit" name='subimit' class="am-btn am-btn-primary tpl-btn-bg-color-success tpl-login-btn"><span class="am-icon-plus"></span>新增</button>
                                        </span>
                                    </div>
                                    </form>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>序号</th>
                                                <th>分类</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($data as $key => $value): ?>
                                            <tr class="gradeX">
                                                <td class="am-text-middle"><?php echo $value['id']?></td>
                                                <td class="am-text-middle"><?php echo $value['tag_name']?></td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="<?php echo site_url("admin/Tag/delete/{$value['id']}")?>" class="tpl-table-black-operation-del">
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