
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="<?php echo $cur_title[0];?>"><a href="<?php echo base_url()?>"><?php echo $this->lang->line('menu_home'); ?></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <?php echo $this->lang->line('menu_cats'); ?> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <?php foreach ($all_category as $key => $value): ?>
          <li ><?php echo anchor("Category/show/{$value['id']}","{$value['category']}","");?></li>
          <?php endforeach; ?>
        </ul>
      </li>

      <li class="am-sr-only <?php echo $cur_title[2];?>"><?php echo anchor("Articles/timeline","更新记录","")?></li>
      <li class="<?php echo $cur_title[3];?>"><?php echo anchor("About/index",$this->lang->line('menu_about'),"")?></li>
    </ul>
    <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search" method="post" action='<?php echo site_url('Search/show')?>'>
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" name='pattern' placeholder="<?php echo $this->lang->line('menu_search_tips'); ?>">
      </div>
      <button type="submit" class="am-btn am-btn-default am-btn-sm"><?php echo $this->lang->line('menu_search'); ?></button>
    </form>
  </div>
</nav>
<hr>
<!-- nav end -->
    