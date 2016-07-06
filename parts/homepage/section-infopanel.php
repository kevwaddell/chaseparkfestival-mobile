<?php  
$hp_info_txt = get_field('hp_info_txt', 'options');	
?>

<?php if ($hp_info_txt != "") { ?>

<section class="col-panel bg-col-blue-dk">
	<div class="container-fluid">
		<div class="panel-imgs offset-imgs" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/_/img/hp-panel-imgs.png)"></div>
		<div class="panel-txt txt-col-wht">
			<?php echo $hp_info_txt; ?>
		</div>
	</div>
</section>

<?php } ?>