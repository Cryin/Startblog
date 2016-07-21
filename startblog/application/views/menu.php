<div class="menu">
    <div class="col-sm-8 col-sm-offset-2 "style="padding-top:0.5%;">

      <div class="row">
          <div class="col-sm-9">
            <ul class="nav nav-pills">
             <li class="<?php echo $cur_title[0];?>"><?php echo anchor("Articles/index","Home","")?></li>
             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                分类 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
             <?php foreach ($all_category as $key => $value): ?>
              <li ><?php echo anchor("Category/show/{$value['id']}","{$value['category']}","")?></li>
             <?php endforeach ?>
             </ul>
             </li>
             <li class="<?php echo $cur_title[2];?>"><?php echo anchor("Tag/index","标签","")?></li>
             <li class="<?php echo $cur_title[3];?>"><?php echo anchor("About/index","关于","")?></li>
             <?php echo anchor("admin/Index/index",'<span class="glyphicon glyphicon-user" style="margin-top:12px;margin-left:5px"></span>',"")?>
             </ul>

          </div>
           <div class="col-sm-3" style="float:right;margin-top:5px">
              <form class="input-group" method="post" action='<?php echo site_url('Search/show')?>'>
                 <input type="text" class="input-medium form-control" placeholder="搜索..." name='pattern'>
                 <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                       Search
                    </button>
                 </span>
              </form><!-- /input-group -->
              
           </div><!-- /.col-lg-6 -->
          
        </div>
        <div class="row">
          <hr style="border: none;height: 1px;background-color: #bbb;background-image: -webkit-linear-gradient(0deg, #EEE, #000, #EEE);">
        </div>

      </div>
    </div>
    