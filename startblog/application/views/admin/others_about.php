<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-cog page-header-heading-icon"></span> 关于本站 <small>About</small></div>
                        <p class="page-header-description">关于本站的介绍</p>
                    </div>
                </div>

            </div>
<div class="row">

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" method="post" action="<?php echo site_url('admin/Others/edit_about')?>">
                                  
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="title" value="<?php echo $data[0]['title'];?>" placeholder="请输入标题文字">
                                            <small>请填写标题文字</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">标签 <span class="tpl-form-line-small-title">Tag</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="tag" type="text" value="<?php echo $data[0]['tag'];?>" placeholder="输入Tag关键字">
                                            <small>多个标签请用英文","分离</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">文章内容 <span class="tpl-form-line-small-title">Content</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" name="content" rows="20"><?php echo htmlspecialchars($data[0]['content']);?></textarea>
                                            <small>请使用Markdown格式编辑内容</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" name='subimit' value="subimit" class="am-btn am-btn-primary am-btn-block tpl-btn-bg-color-success tpl-login-btn">提交</button>
                                        </div>
                                    </div>
    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </div>
