<div class="menu">
    <div class="col-sm-10 col-sm-offset-1 "style="padding-top:2%">
      <div class="row">
          <div class="col-xs-9">
            <ul class="nav nav-pills">
             <li class="<?php echo $cur_title[0];?>"><?php echo anchor("Articles/index","首页","")?></li>
             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                文章 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","撰写文章","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理文章","")?></li>
             </ul>
             </li>

             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                分类 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","创建分类","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理分类","")?></li>
             </ul>
             </li>

             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                标签 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","创建标签","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理标签","")?></li>
             </ul>
             </li>

              <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                功能 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","创建标签","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理标签","")?></li>
             </ul>
             </li>
             
             <?php echo anchor("admin/Login/index",'<button type="button" class="btn btn-default hidden-xs btn-sm" style="margin-top:5px">
                <span class="glyphicon glyphicon-off"> </span>
              </button>',"")?>
             </ul>

          </div>
           <div class="col-sm-3" style="float:right;margin-top:5px">
              <div class="input-group">
                 <input type="text" class="form-control">
                 <span class="glyphicon glyphicon-off"> </span>
              </div><!-- /input-group -->
              
           </div><!-- /.col-lg-6 -->
          
        </div>
        <div class="row">
          <hr>
        </div>

      </div>
      
    </div>
    