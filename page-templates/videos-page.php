<?php 
/*
Template Name: Videos page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$videos_active = get_field('videos_active');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber text-center">
	<h1><?php the_title(); ?></h1>
</div>
<main id="main-content"> 
<?php if ($videos_active) { ?>
<?php  
$videos = get_field('videos');	
global $wp_embed;
?>
	<article <?php post_class('pg-content'); ?>>

		<section id="videos-section" class="video-grid pad-top-30">

			<?php foreach ($videos as $video) { ?>
			<div class="video-wrap">
				<h3 class="txt-col-blue text-center"><?php echo $video['video_title']; ?></h3>
				<iframe width="280" height="158" class="mag-bot-20" src="<?php echo $video['video_url']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<?php } ?>

		</section>

	</article>

<?php } else { ?>
	<?php get_template_part( 'parts/messages/video', 'message' ); ?>
<?php } ?>	

</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>



<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>