

<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-cog page-header-heading-icon"></span> 账户设置 <small>Admin</small></div>
                        <p class="page-header-description">密码修改</p>
                    </div>
                </div>

            </div>
<div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">当前用户：<?php echo $_SESSION['username']?></div>
                               
                            </div>
                            <div class="widget-body am-fr">
                                <?php echo form_open('admin/Others/change_password',array('class' => 'am-form tpl-form-line-form'));?>
                               
                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="old_password" name="old_password" placeholder="请输入原密码">
                        <p class="text-danger"><?php echo form_error('old_password'); ?></p>
                    </div>
                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="new_password" name="new_password" placeholder="请输入新密码">
                        <p class="text-danger"><?php echo form_error('new_password'); ?></p>
                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="new_password_conf" name="new_password_conf" placeholder="再次确认输入新密码">
                        <p class="text-danger"><?php echo form_error('new_password_conf'); ?></p>
                    </div>


                    <div class="am-form-group">
                        <button type="submit" name='subimit' class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success tpl-login-btn">修改</button>

                    </div>
                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
        </div>