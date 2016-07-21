<div class="col-sm-8  col-sm-offset-2 col-xs-10 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
<form class="form-inline" role="form" method="post" action="<?php echo site_url('admin/Others/backup')?>">
   <table class="table table-hover" style="margin-top:20px;margin-bottom:-15px">
      <thead >
         <tr>
            <th class="text-center">#</th>
            <th>文章</th>
            <th class="text-center"> </th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $key => $value): ?>

            <tr>
               <th class="text-center col-sm-1"><?php echo $value['id']?></th>
               <td class="col-sm-5"><?php echo $value['title']?></td>
               <td class="text-center col-sm-2"><input type="checkbox" name="backup_article[<?php echo $value['id']?>]"value="<?php echo $value['title']?>" checked></td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
   <center style="margin-top: 40px;">
           <div class="form-group">
              <label for="name">备份路径</label>
              <input type="text" class="form-control" id="name" name="backup_path"value="<?php echo $path;?>" 
                 placeholder="请输入备份路径">
           </div>
           <button type="submit" class="btn btn-primary btn-md">备份文章</button>
           </center>
        </form>
        
      
         <center>
        <ul class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
      </center>
</div>

