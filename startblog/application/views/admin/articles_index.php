
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">
              <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-clone page-header-heading-icon"></span> 文章管理 <small>Article</small></div>
                        <p class="page-header-description">发布、编辑、删除文章</p>
                    </div>
                </div>

            </div>
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a class="am-btn am-btn-primary tpl-btn-bg-color-success tpl-login-btn" href="<?php echo site_url('admin/Articles/add')?>"><span class="am-icon-plus"></span> 新建文章</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
              <?php foreach ($all_category as $key => $value): ?>
              <option value="option"><?php echo $value['category']?></option>
             <?php endforeach; ?>
            </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field" placeholder="搜索内容">
                                        <span class="am-input-group-btn">
                                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>序号</th>
                                                <th>封面图片</th>
                                                <th>文章标题</th>
                                                <th>类别</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($data as $key => $value): ?>
                                            <tr class="gradeX">
                                              <td class="am-text-middle"><?php echo $value['id']?></td>
                                                <td>
                                                    <img src="<?php echo $value['imagelink']?>" class="tpl-table-line-img" alt="封面图">
                                                </td>
                                                <td class="am-text-middle"><?php echo $value['title']?></td>
                                                <?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
                                                <td class="am-text-middle"><?php echo$category_name;?></td>
                                                <td class="am-text-middle"><?php echo $value['published_at']?></td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <?php echo anchor("admin/Articles/edit/{$value['id']}",'<i class="am-icon-pencil"></i> 编辑',"")?>
                                                        <a href="<?php echo site_url("admin/Articles/delete/{$value['id']}")?>" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- more data -->
                                            <?php endforeach; ?>
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