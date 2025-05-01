<?php require PATH . '/view/common/header.php';?>
<form method="post" autocomplete="off" enctype="multipart/form-data" class="form-content">
    <div class="d-md-flex">
        <div class="flex-fill">
            <input type="hidden" name="_ACTION" value="save">
            <input type="hidden" name="_TOKEN" value="<?php echo $Token; ?>">
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Name');?></label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="<?php echo __('Name');?>" value="<?php echo $Listing['name'];?>" required="true">
            </div>
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Username');?></label>
                <input type="text" name="username" class="form-control" placeholder="<?php echo __('Username');?>" value="<?php echo $Listing['username'];?>" required="true">
            </div>
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Email');?></label>
                <input type="email" name="email" class="form-control" placeholder="<?php echo __('Email');?>" value="<?php echo $Listing['email'];?>" required="true">
            </div>
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Password');?></label>
                <input type="password" name="password" class="form-control" placeholder="<?php echo __('Password');?>" value="">
            </div>
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('About');?></label>
                <textarea name="data[about]" class="form-control" placeholder="<?php echo __('About');?>"><?php echo $Data['about'];?></textarea>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                $('.datepicker-form').datepicker();
            });
            </script>
        </div>
        <div class="app-aside-right">
            <div class="form-group">
                <div class="media-select media" style="background-image: url(<?php if($Listing['avatar']) echo UPLOAD.'/user/'.$Listing['avatar']?>);">
                    <div class="media-btn" id="input-cover">
                        <svg class="icon">
                            <use xlink:href="<?php echo ASSETS.'/img/sprite.svg#upload';?>" />
                        </svg>
                    </div>
                    <div class="media-remove" data-id="<?php echo $Listing['id'];?>">
                        <svg class="icon">
                            <use xlink:href="<?php echo ASSETS.'/img/sprite.svg#close';?>" />
                        </svg>
                    </div>
                </div>
                <input type="file" name="image" class="media-input d-none" id="file-input-cover" data-preview="media-select">
            </div>     
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Type');?></label>
                <select name="account_type" class="custom-select" required="true">
                    <option value="">
                        <?php echo __('Type');?>
                    </option>
                    <option value="admin" <?php if($Listing['account_type']=='admin' ) echo 'selected=""' ;?>>
                        <?php echo __('Admin');?>
                    </option>
                    <option value="uploader" <?php if($Listing['account_type']=='uploader' ) echo 'selected=""' ;?>>
                        <?php echo __('Uploader');?>
                    </option>
                    <option value="fansubber" <?php if($Listing['account_type']=='fansubber' ) echo 'selected=""' ;?>>
                        <?php echo __('Fansubber');?>
                    </option>
                    <option value="premium" <?php if($Listing['account_type']=='premium' ) echo 'selected=""' ;?>>
                        <?php echo __('Premium');?>
                    </option>
                    <option value="user" <?php if($Listing['account_type']=='user' ) echo 'selected=""' ;?>>
                        <?php echo __('User');?>
                    </option>
                </select>
            </div>
            <div class="form-group">
            <div class="form-group">
                <label class="custom-label">
                    <?php echo __('Premium Son Kullanım Tarihi');?>:</label>
                <input type="date" name="date" class="form-control" placeholder="<?php echo __('Reason for chatbox ban');?>" value="<?php echo $Listing['date'];?>">
            </div>
            </div>
            <button type="submit" class="btn btn-theme btn-lg btn-block">
                <?php echo __('Save Changes');?></button>
        </div>
    </div>
</form> 
<?php require PATH . '/view/common/footer.php';?>
