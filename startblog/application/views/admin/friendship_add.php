<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-cog page-header-heading-icon"></span> 友情链接 <small>Friendship</small></div>
                        <p class="page-header-description">新增友情链接</p>
                    </div>
                </div>

            </div>
              <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body am-fr">
                                <form class="am-form tpl-form-border-form tpl-form-border-br"  method="post" action="<?php echo site_url('admin/Friendship/add')?>">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">链接名称 <span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input class="tpl-form-input" name="link_name" type="text" placeholder="输入友情链接名称">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">链接URL <span class="tpl-form-line-small-title">Link</span></label>
                                        <div class="am-u-sm-9">
                                            <input class="am-form-field tpl-form-no-bg" name="link" type="text" placeholder="输入友情链接地址">
                                            <small>以http://开头</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" name='subimit' class="am-btn am-btn-primary tpl-btn-bg-color-success tpl-login-btn">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
        </div>