
    <div class="col-sm-8  col-sm-offset-2  col-xs-10 col-xs-offset-1" style="padding-top:20px;">
    <ol class="breadcrumb">
     <li><?php echo anchor("admin/Tag/index","标签","")?></li>
     <li class="active"><button type='button' class='btn btn-<?php echo $tag_info[0]['tag_button_type']?> btn-md'><?php echo $tag_info[0]['tag_name']?></button></li>
    </ol>
        <?php foreach ($articles_by_tag as $key => $value): ?>
            <blockquote style="background-color: #FFF;margin-top:20px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD;"><a href='#' data-toggle="modal" data-target="#myModal-<?php echo $value['id']?>"><h2><?php echo $value['title']?></h2></a><small>分类于<strong><?php echo $all_category[$value['category']]['category']?></strong> | <?php echo $value['published_at'];?></small></blockquote>

          <div class="modal fade" id='myModal-<?php echo $value['id']?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document" style="width:400px">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">提示</h4>
                  </div>
                  <div class="modal-body text-center">
                   确定将文章【<?php echo $value['title']?>】的<p>【<?php echo $value['tag_name']?>】标签删除?</p>
                  </div>
                  <div class="modal-footer">

                    <a href="<?php echo site_url("admin/Tag/delete_link/{$value['id']}/{$value['tag_id']}")?>"><button type="button" class="btn btn-default">确定</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  </div>
                </div>
              </div>
            </div>
          <hr style="solid">
        <?php endforeach ?>
</div>