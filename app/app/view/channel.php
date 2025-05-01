<?php require PATH . '/view/common/header.php';?>
<form method="post" autocomplete="off" enctype="multipart/form-data" class="form-content">
    <div class="d-md-flex">
        <div class="flex-fill">
            <input type="hidden" name="_ACTION" value="save">
            <input type="hidden" name="_FORMTOKEN" value="<?php echo $Token; ?>">
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Name');?></label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="<?php echo __('Name');?>" value="<?php echo $Listing['name'];?>" maxlength="255" autofocus="true">
            </div>
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Overview');?></label>
                <textarea name="description" class="form-control" placeholder="<?php echo __('Overview');?>"><?php echo $Listing['description']; ?></textarea>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="custom-label">Website</label>
                        <input type="text" name="data[social][house]" class="form-control" placeholder="Website" value="<?php echo $Data['social']['facebook']; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="custom-label">Discord</label>
                        <input type="text" name="data[social][discord]" class="form-control" placeholder="Discord" value="<?php echo $Data['social']['twitter']; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="custom-label">Tiktok</label>
                        <input type="text" name="data[social][tiktok]" class="form-control" placeholder="Tiktok" value="<?php echo $Data['social']['youtube']; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="custom-label">Instagram</label>
                        <input type="text" name="data[social][instagram]" class="form-control" placeholder="Instagram" value="<?php echo $Data['social']['instagram']; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="switch-container">
                        <label class="switch"><input name="comment" type="checkbox" value="1" <?php if($Listing['comment']=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span>
                            <?php echo __('Closed to comment');?></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-aside-right">
            <div class="form-group">
                <div class="media-select media media-actor" style="background-image: url(<?php if($Listing['image']) echo UPLOAD.'/channel/'.$Listing['image']?>);">
                    <div class="media-btn" id="input-cover">
                        <svg class="icon">
                            <use xlink:href="<?php echo ASSETS.'/img/sprite.svg#upload';?>" />
                        </svg>
                    </div>
                </div>
                <input type="file" name="image" class="media-input d-none" id="file-input-cover" data-preview="media-select">
                <input type="hidden" name="image-url" value="">
            </div>
            <div class="form-group">
                <div class="switch-container">
                    <label class="switch"><input name="featured" type="checkbox" value="1" <?php if($Listing['featured']=='1' ) echo 'checked="true"' ;?>><span class="switch-button"></span>
                        <?php echo __('Featured');?></label>
                </div>
                <div class="switch-container">
                    <label class="switch"><input name="status" type="checkbox" value="1" <?php if($Listing['status']=='1' || !$Listing['status']) echo 'checked="true"' ;?>><span class="switch-button"></span>
                        <?php echo __('Active');?></label>
                </div>
            </div>
            <button type="submit" class="btn btn-theme btn-lg btn-block">
                <?php echo __('Save Changes');?></button>
        </div>
    </div>
</form>
<?php require PATH . '/view/common/footer.php';?>