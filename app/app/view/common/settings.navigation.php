<div class="form-group">
    <label class="custom-label"><?php echo __('Show Menu Icon');?></label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][menuicon]" type="checkbox" value="1" <?php if(get($Settings,'data.menuicon',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Show Menu Icon');?></label>
    </div>
</div>
<div class="form-group">
    <label class="custom-label">Menu:</label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][serie]" type="checkbox" value="1" <?php if(get($Settings,'data.serie',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Animeler');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][movie]" type="checkbox" value="1" <?php if(get($Settings,'data.movie',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Anime Filmleri');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][calendar]" type="checkbox" value="1" <?php if(get($Settings,'data.calendar',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Takvim');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][actors]" type="checkbox" value="1" <?php if(get($Settings,'data.actors',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Aktörler');?></label>
	</div>
</div>
<div class="form-group">        
	<label class="custom-label">Keşfet:</label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][discovery]" type="checkbox" value="1" <?php if(get($Settings,'data.discovery',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Keşfet');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][categories]" type="checkbox" value="1" <?php if(get($Settings,'data.categories',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Katagoriler');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][trending]" type="checkbox" value="1" <?php if(get($Settings,'data.trending',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Trendler');?></label>
       	<label class="switch ml-4"><input name="data[<?php echo $key?>][collections]" type="checkbox" value="1" <?php if(get($Settings,'data.collections',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Collections');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][channels]" type="checkbox" value="1" <?php if(get($Settings,'data.channels',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Fansublar');?></label>
    	<label class="switch ml-4"><input name="data[<?php echo $key?>][request]" type="checkbox" value="1" <?php if(get($Settings,'data.request',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('İstekte Bulun');?></label>
    	<label class="switch ml-4"><input name="data[<?php echo $key?>][requests]" type="checkbox" value="1" <?php if(get($Settings,'data.requests',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('İstek Listesi');?></label>
    </div>
</div>      
<div class="form-group">        
	<label class="custom-label">Mağaza:</label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][store]" type="checkbox" value="1" <?php if(get($Settings,'data.store',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Mağazayı Göster');?></label>
    </div>
</div>       
<div class="form-group">
    <label class="custom-label"><?php echo __('Sayfalar:');?></label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][showpages]" type="checkbox" value="1" <?php if(get($Settings,'data.showpages',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Sayfaları Göster');?></label>
    </div>
</div>
<div class="form-group">        
	<label class="custom-label">Sosyal Medya:</label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][instagram]" type="checkbox" value="1" <?php if(get($Settings,'data.instagram',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Instagram');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][youtube]" type="checkbox" value="1" <?php if(get($Settings,'data.youtube',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('YouTube');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][discord]" type="checkbox" value="1" <?php if(get($Settings,'data.discord',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Discord');?></label>
    	<label class="switch ml-4"><input name="data[<?php echo $key?>][tiktok]" type="checkbox" value="1" <?php if(get($Settings,'data.tiktok',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('TikTok');?></label>
	</div>
</div> 
<div class="form-group">        
	<label class="custom-label">RSS Beslemesi:</label>
    <div class="switch-container">
        <label class="switch"><input name="data[<?php echo $key?>][series_feed]" type="checkbox" value="1" <?php if(get($Settings,'data.series_feed',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Animeler RSS');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][movies_feed]" type="checkbox" value="1" <?php if(get($Settings,'data.movies_feed',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Anime Filmleri RSS');?></label>
        <label class="switch ml-4"><input name="data[<?php echo $key?>][episode_feed]" type="checkbox" value="1" <?php if(get($Settings,'data.episode_feed',$key)=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span><?php echo __('Bölümler RSS');?></label>
	</div>
</div>   