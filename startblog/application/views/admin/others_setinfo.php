<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-cog page-header-heading-icon"></span> 站点设置 <small>Setting</small></div>
                        <p class="page-header-description">站点SEO信息设置</p>
                    </div>
                </div>

            </div>
              <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body am-fr">
                                <form class="am-form tpl-form-border-form tpl-form-border-br"  method="post" action="<?php echo site_url('admin/Others/set_siteinfo')?>">
                                  <?php foreach ($data as $key => $value):?>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">站点标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input class="tpl-form-input" name="title" type="text" value="<?php echo $value['title'];?>">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">站点URL <span class="tpl-form-line-small-title">Url</span></label>
                                        <div class="am-u-sm-9">
                                            <input class="am-form-field tpl-form-no-bg" name="url" type="text" value="<?php echo $value['url'];?>">
                                            <small>以http://开头</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">管理邮箱 <span class="tpl-form-line-small-title">Email</span></label>
                                        <div class="am-u-sm-9">
                                            <input class="am-form-field tpl-form-no-bg" name="email" type="text" value="<?php echo $value['email'];?>">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">SEO关键字 <span class="tpl-form-line-small-title">SEO</span></label>
                                        <div class="am-u-sm-9">
                                            
                                            <input name="keywords" type="text" value="<?php echo $value['keywords'];?>">
                                            <small>添加多个关键词用逗号隔开</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">站点描述 <span class="tpl-form-line-small-title">Description</span></label>
                                        <div class="am-u-sm-9">
                                            <input name="description" type="text" value="<?php echo $value['description'];?>">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">统计代码 <span class="tpl-form-line-small-title">Statistics</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" name="statistic" rows="5"><?php echo $value['statistic'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" name='subimit' class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success tpl-login-btn">提交</button>
                                        </div>
                                    </div>
                                </form>
                                <?php endforeach;  ?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
        </div>