<!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="<?php echo base_url('/static/admin/img/author.jpg')?>" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              Cryin
          </span>
                    <?php echo anchor('admin/Others/change_password','<span class="am-icon-pencil"></span> 账号设置','class="tpl-user-panel-action-link"')?>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Dashboard <span class="sidebar-nav-heading-info"> 控制面板</span></li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo site_url('admin/index')?>" class="<?php echo $cur_title[0];?>">
                      <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo site_url('admin/Others/show_siteinfo')?>" class="<?php echo $cur_title[1];?>">
                      <i class="am-icon-cog sidebar-nav-link-logo"></i> 站点设置
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo site_url('admin/Articles/index')?>" class="<?php echo $cur_title[2];?>">
                      <i class="am-icon-clone sidebar-nav-link-logo"></i> 文章管理
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo site_url('admin/Category/index')?>" class="<?php echo $cur_title[3];?>">
                      <i class="am-icon-folder-o sidebar-nav-link-logo"></i> 类别管理
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="<?php echo site_url('admin/Tag/index')?>" class="<?php echo $cur_title[4];?>">
                      <i class="am-icon-star sidebar-nav-link-logo"></i> 标签管理
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title <?php echo $cur_title[5];?>">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 扩展工具
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <?php echo anchor('admin/Others/back_up','<i class="am-icon-angle-right sidebar-nav-link-logo"></i> 文章备份','')?>
                        </li>
                        <li class="sidebar-nav-link">
                            <?php echo anchor('admin/Others/about','<i class="am-icon-angle-right sidebar-nav-link-logo"></i> 关于本站','')?>
                        </li>
                        <li class="sidebar-nav-link">
                            <?php echo anchor('admin/Friendship/index','<i class="am-icon-angle-right sidebar-nav-link-logo"></i> 友情链接','')?>
                        </li>
                        <li class="sidebar-nav-link">
                            <?php echo anchor('admin/Others/back_up','<i class="am-icon-angle-right sidebar-nav-link-logo"></i> 站点备份','')?>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-nav-link">
                    <a href="<?php echo site_url('admin/Others/feedback')?>" class="<?php echo $cur_title[6];?>">
                      <i class="am-icon-tv sidebar-nav-link-logo"></i> 问题反馈
                    </a>
                </li>

            </ul>
        </div>
