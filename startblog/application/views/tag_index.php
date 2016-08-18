<div class="container col-sm-8 col-sm-offset-2" style="background-color: #FFF;margin-top:20px;padding-top:1px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
      <center >
        <?php foreach ($data as $key => $value): ?>
            <?php echo anchor("/Tag/show/{$value['tag_id']}","<button type='button' class='btn btn-{$value['tag_button_type']} {$value['tag_size']}'>{$value['tag_name']}</button>","")?>
        <?php endforeach ?>
      </center>
    </div>

