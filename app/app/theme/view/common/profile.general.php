<div class="row">
        <?php if($Data['location']) { ?>
   <div class="col-md-3">
        <div class="profile-heading">
                <?php echo __('Location');?>
            </div>
        <div class="profile-attr">
            <div class="text">
                <?php echo $Data['location'];?>
            </div>
        </div>
	</div>
        <?php } ?>

        <?php if($Data['about']) { ?>
    <div class="col-md-9">
        <div class="profile-heading">
            <?php echo __('About');?>
        </div>
        <div class="profile-attr">
            <div class="attr">İmza</div>
            <div class="text">
                <?php echo $Data['about'];?>
            </div>
        </div>
        <div class="profile-attr">
            <div class="attr">Cinsiyet</div>
            <div class="text">
					<?php
						if(strpos($Data['gender'], '1') !== false){
							echo "Kadın";
						} else {
							echo "Erkek";
						}
					?>
            </div>
        </div>
        <div class="profile-attr">
            <div class="attr">Hesap Oluşturulma Tarihi</div>
            <div class="text">
                <?php echo $Data['date'];?>
            </div>
        </div>
    </div>
        <?php } ?>
</div>
