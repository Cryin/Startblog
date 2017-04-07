
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php echo $cur_title[0];?>">
                        <a href="<?php echo site_url('admin/index')?>"><i class="fa fa-dashboard"></i> <span><?php echo $this->lang->line('nav_dash'); ?></span> 
                        </a>
                    </li>
                     <li class="dropdown <?php echo $cur_title[1];?>">
                        <a href="javascript:;" data-toggle="collapse<?php echo $cur_collapse[0];?>" data-target="#postsmenu"> <i class="fa fa-file"></i> <span><?php echo $this->lang->line('nav_posts'); ?></span> <b class="caret"></b>
                        </a>
                        <ul id="postsmenu" class="collapse<?php echo $cur_collapse[0];?>">
                            <li class="<?php echo $cur_title[1];?>">
                            <a href="<?php echo site_url('admin/Articles/index')?>"><?php echo $this->lang->line('nav_posts_all'); ?></a>
                            </li>

                            <li class="<?php echo $cur_title[1];?>">
                            <a href="<?php echo site_url('admin/Articles/add')?>"><?php echo $this->lang->line('nav_posts_new'); ?></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="<?php echo $cur_title[2];?>">
                        <a href="<?php echo site_url('admin/Category/index')?>"><i class="fa fa-newspaper-o"></i> <span><?php echo $this->lang->line('nav_categories'); ?></span> 
                        </a> 
                    </li>
                    <li class="<?php echo $cur_title[3];?>">
                        <a href="<?php echo site_url('admin/Tag/index')?>"><i class="fa fa-tags"></i> <span><?php echo $this->lang->line('nav_tags'); ?></span> 
                        </a> 
                    </li>
                    
                     <li class="<?php echo $cur_title[4];?>">
                        <a href="<?php echo site_url('admin/Others/change_password')?>"><i class="fa fa-user"></i> <span><?php echo $this->lang->line('nav_users'); ?></span> 
                        </a> 
                    </li>
                    <li class="dropdown <?php echo $cur_title[5];?>">
                        <a href="javascript:;" data-toggle="collapse<?php echo $cur_collapse[1];?>" data-target="#friendlymenu"> <i class="fa fa-link"></i> <span><?php echo $this->lang->line('nav_friendly_links'); ?></span> <b class="caret"></b></a>
                        <ul id="friendlymenu" class="collapse<?php echo $cur_collapse[1];?>">
                        <li class="<?php echo $cur_title[5];?>">
                        <a href="<?php echo site_url('admin/Friendship/index')?>"><?php echo $this->lang->line('nav_friendly_all'); ?></a></li>
                        <li class="<?php echo $cur_title[5];?><?php echo $cur_collapse[1];?>">
                        <a href="<?php echo site_url('admin/Friendship/addpage')?>"><?php echo $this->lang->line('nav_friendly_new'); ?></a>
                        </li>
                        </ul>
                    </li>
                    <li class="<?php echo $cur_title[6];?>">
                        <a href="<?php echo site_url('admin/Others/about')?>"><i class="fa fa-comments-o"></i> <span><?php echo $this->lang->line('nav_contact'); ?></span> 
                        </a> 
                    </li>
                    <li class="<?php echo $cur_title[7];?>">
                        <a href="<?php echo site_url('admin/Others/show_siteinfo')?>"><i class="fa fa-cogs"></i> <span><?php echo $this->lang->line('nav_settings'); ?></span> 
                        </a> 
                    </li>
         
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">