<?php get_header(); ?>	
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container">
		<?php echo get_the_title( get_option('page_for_posts')); ?>
	</div>
</div>
<main id="main-content" class="pad-bot-20">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<article <?php post_class(); ?>>
			<header class="post-header text-center">
				<?php if (has_post_thumbnail($post->ID)) { ?>
				<figure class="feat-img">
					<?php feat_img($post); ?>
				</figure>
				<?php } ?>
	
				<h1 class="txt-col-blue tk-azo-sans-uber"><?php the_title(); ?></h1>	
				<div class="post-date">Published on: <time><?php the_date(); ?></time></div>
			</header>
			<hr />
			<div class="main-txt">
				<?php the_content(); ?>
			</div>
		</article>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>