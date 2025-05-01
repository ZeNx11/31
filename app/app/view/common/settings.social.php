<div class="alert bg-warning-lt text-12 mt-4 mb-3"><?php echo __('Sosyal medya adreslerinizi URL olarak başında HTTPS tagı olarak ekleyin.');?></div>
<div class="form-group">
    <label class="custom-label">Instagram Sayfanız</label>
    <input type="text" name="data[<?php echo $key?>][instagram]" value="<?php echo get($Settings,'data.instagram',$key);?>" class="form-control limitter" placeholder="Instagram Sayfanız" maxlength="160">
</div>
<div class="form-group">
    <label class="custom-label">Youtube Kanalınız</label>
    <input type="text" name="data[<?php echo $key?>][youtube]" value="<?php echo get($Settings,'data.youtube',$key);?>" class="form-control limitter" placeholder="Youtube Kanalınız" maxlength="160">
</div>
<div class="form-group">
    <label class="custom-label">Discord Sunucunuz</label>
    <input type="text" name="data[<?php echo $key?>][discord]" value="<?php echo get($Settings,'data.discord',$key);?>" class="form-control limitter" placeholder="Discord Sunucunuz" maxlength="160">
</div>
<div class="form-group">
    <label class="custom-label">TikTok Sayfanız</label>
    <input type="text" name="data[<?php echo $key?>][tiktok]" value="<?php echo get($Settings,'data.tiktok',$key);?>" class="form-control limitter" placeholder="TikTok Sayfanız" maxlength="160">
</div>
