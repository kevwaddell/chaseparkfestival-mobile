<?php
$social_links = get_field('gbl_social_links', 'options');	
//echo '<pre>';print_r($social_links);echo '</pre>';
?>
<?php if (!empty($social_links)) { ?>
<section class="social-section-links">

	<a href="<?php echo $social_links[0]['link_url']; ?>" target="_blank" rel="nofollow" class="social-link facebook text-uppercase tk-azo-sans-uber"><i class="fa <?php echo $social_links[0]['link_icon']; ?> fa-3x"></i>Like Chase Park Festival<br>on <span><?php echo $social_links[0]['link_title']; ?></span></a>
	<a href="<?php echo $social_links[1]['link_url']; ?>" target="_blank" rel="nofollow" class="social-link twitter text-uppercase tk-azo-sans-uber"><i class="fa <?php echo $social_links[1]['link_icon']; ?> fa-3x"></i>Follow Chase Park Festival<br>on <span><?php echo $social_links[1]['link_title']; ?></span></a>
	
</section>
<?php } ?>