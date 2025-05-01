<div class="form-group">
    <label class="custom-label"><?php echo __('Kimler İstekte Bulunabilir?');?></label>
    <select name="data[<?php echo $key?>][requests_permission]" class="custom-select">
        <option value="everyone" <?php if(get($Settings,'data.requests_permission',$key) == 'everyone') echo 'selected';?>>Herkes</option>
        <option value="donators" <?php if(get($Settings,'data.requests_permission',$key) == 'donators') echo 'selected';?>>Sadece Premium'lar</option>
        <option value="no_one" <?php if(get($Settings,'data.requests_permission',$key) == 'no_one') echo 'selected';?>>Kimse</option>
    </select>
</div>
<div class="form-group">
    <label class="custom-label"><?php echo __('İstek Almayı Devredışı Mesajı');?></label>
    <input type="text" name="data[<?php echo $key?>][requests_disabled]" value="<?php echo get($Settings,'data.requests_disabled', $key);?>" class="form-control" placeholder="<?php echo __('İstek Almayı Devredışı Mesajı');?>" maxlength="255">
</div>