    <div class="profile-heading">
        <?php echo __('Koleksiyonlarım');?>
    </div>
<div class="row row-cols-lg-3 row-cols-md-2 list-grouped">
    <?php foreach ($Collections as $Collection) { ?>
    <div class="col">
                		<div>
            				<div class="list-collection" style="width: 100%;background-size: cover;background-position: center;background-image: url('<?php echo $Collection['background'];?>');background-color: <?php echo $Collection['color'];?>;color: <?php echo $Collection['color'];?>">
                				<div class="list-caption">
                                		<a href="<?php echo APP . '/collection/' . $Collection['self'] . '-' . $Collection['id']; ?>" class="list-title">
<div class="list-desc"><?php echo $Collection['toplam'];?> içerik</div>
                                    		<?php if(empty($Collection['background'])){ echo $Collection['name']; } else { } ?>
                                		</a>
                				</div>
                    		</div>
                		</div>
    </div>
    <?php } ?>
</div>
