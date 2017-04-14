<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-cog page-header-heading-icon"></span> 文章备份 <small>Backup</small></div>
                        <p class="page-header-description">文章本地备份</p>
                    </div>
                </div>

            </div>
<div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body am-fr">
                                <form class="am-form tpl-form-border-form tpl-form-border-br"  method="post" action="<?php echo site_url('admin/Others/backup')?>">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-2 am-form-label">备份路径:</label>
                                        <div class="am-u-sm-6 am-u-sm-pull-4">
                                            <input class="tpl-form-input" name="backup_path" type="text" placeholder="请输入备份路径" value="<?php echo $path;?>">
                                            <small>请选择文章备份路径,备份为markdown格式TXT文件</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-10 am-u-sm-push-2">
                                            <button type="submit" name='subimit' class="am-btn am-btn-primary tpl-btn-bg-color-success tpl-login-btn">备份文章</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
        </div>