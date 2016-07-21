<div class="col-sm-8  col-sm-offset-2 col-xs-10 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
   <table class="table table-hover" style="margin-top:20px;margin-bottom:-15px">
      <thead >
         <tr>
            <th class="text-center">序号</th>
            <th>文章</th>
            <th class="text-center">操作</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $key => $value): ?>
            <tr>
               <th class="text-center col-sm-1"><?php echo $value['id']?></th>
               <td class="col-sm-5"><?php echo $value['title']?></td>
               <td class="text-center col-sm-2">    
                <?php echo anchor("admin/Articles/edit/{$value['id']}",'<button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil">编辑</span></button>',"")?>
                  <a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal-<?php echo $value['id']?>"><span class="glyphicon glyphicon-remove">删除</span></button></a>
  
               </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id='myModal-<?php echo $value['id']?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document" style="width:400px">
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body text-center">
                   确定删除文章?<p><?php echo $value['title']?></p>
                  </div>
                  <div class="modal-footer">

                    <a href="<?php echo site_url("admin/Articles/delete/{$value['id']}")?>"><button type="button" class="btn btn-default">确定</button></a>
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

