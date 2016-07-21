
<div class="col-sm-8  col-sm-offset-2 col-xs-10 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
   <table class="table table-hover" style="margin-top:20px;margin-bottom:-10px">
      <thead >
         <tr>
            <th class="text-center">序号</th>
            <th class="text-center">分类</th>
            <th class="text-center">操作</th>
         </tr>

      </thead>
      <tbody>
         <tr>
            <form role="form" method="post" action="<?php echo site_url('admin/Category/add')?>">
            <th class="text-center">#</th>
            <td class="text-center"><center><input type="text" class="form-control" id="name" name="category" placeholder="请输入分类" style="width: 100px;"></center></td>
            <td class="text-center"><button type="submit" class="btn btn-success btn-md"><span class="glyphicon glyphicon glyphicon-plus">添加分类</span></button></td>
            </form>
         </tr>
         <?php foreach ($data as $key => $value): ?>
            <tr>
               <th class="text-center col-sm-1 col-xs-1"><?php echo $value['id']?></th>
               <td class="text-center col-sm-5 col-xs-9"><?php echo $value['category']?></td>
               <td class="text-center col-sm-2 col-xs-2">    
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal-<?php echo $value['id']?>"><span class="glyphicon glyphicon-remove">删除</span></button></a>
  
               </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id='myModal-<?php echo $value['id']?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document" style="width:400px">
                <div class="modal-content">
                  <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel">提示</h4>
                  </div>

                  <div class="modal-body text-center">
                   确定删除分类?<p><?php echo $value['category']?></p>
                  </div>
                  <div class="modal-footer">

                    <a href="<?php echo site_url("admin/Category/delete/{$value['id']}")?>"><button type="button" class="btn btn-default">确定</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  </div>
                </div>
              </div>
            </div>

         <?php endforeach ?>
      </tbody>
   </table>
         <center>
        <ul class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
      </center>
</div>