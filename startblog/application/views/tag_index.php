
    <div class="col-sm-2" style="padding-top:20px">
    </div>
    <div class="col-sm-8" style="padding-top:20px">
      <center >
        <?php foreach ($data as $key => $value): ?>
            <?php echo anchor("/Tag/show/{$value['tag_id']}","<button type='button' class='btn btn-{$value['tag_button_type']} {$value['tag_size']}'>{$value['tag_name']}</button>","")?>
        <?php endforeach ?>
      </center>
    </div>

