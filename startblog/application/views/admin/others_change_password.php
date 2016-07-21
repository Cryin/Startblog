
<?php echo form_open('admin/Others/change_password'); ?>
    <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;padding-bottom: 30px;">
      <form class="form-signin">
        <h2 class="form-signin-heading">当前用户：<?php echo $_SESSION['username']?></h2>
        <label for="old_password" class="sr-only">原密码</label>
        <input type="password" id="old_password" class="form-control" name="old_password" placeholder="原密码" autofocus>
        <p class="text-danger"><?php echo form_error('old_password'); ?></p>

        <label for="inputPassword" class="sr-only">新密码</label>
        <input type="password" id="new_password" class="form-control" name="new_password" placeholder="新密码">
        <p class="text-danger"><?php echo form_error('new_password'); ?></p>

        <label for="inputPassword" class="sr-only">重复新密码</label>
        <input type="password" id="new_password_conf" class="form-control" name="new_password_conf" placeholder="重复新密码">
        <p class="text-danger"><?php echo form_error('new_password_conf'); ?></p>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name='subimit' value="subimit">修改</button>
      </form>
      
    </div>
</body>
