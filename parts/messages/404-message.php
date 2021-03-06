<?php  
$social_links = get_field('gbl_social_links', 'options');	
?>
<div class="container-fluid">

	<div class="no-content-message text-center">
		
		<figure class="message-img in-block">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/_/img/line-up-panel-imgs.png" class="img-responsive" />
		</figure>
		
		<h1 class="text-uppercase txt-col-orange tk-azo-sans-uber">We couldn't find it.</h1>
		
		<p><strong>You have requested a page or file which does not exist.</strong> Double check the web address for typos or head back to our <a href="<?php echo get_option('home'); ?>" title="Home page">home page</a>.</p><br>
		
		<?php if ($social_links) { ?>
		<p>Keep up to date by following us on<br> <span class="txt-col-orange">Twitter</span> or liking us on <span class="txt-col-orange">Facebook</span></p>
		
		<div class="social-links">
			<?php foreach ($social_links as $link) { ?>
				<a href="<?php echo $link['link_url']; ?>" target="_blank"><i class="fa <?php echo $link['link_icon']; ?>"></i><span class="sr-only"><?php echo $link['link_title']; ?></span></a>
			<?php } ?>
		</div>
		<?php } ?>

	</div>
	
</div>
