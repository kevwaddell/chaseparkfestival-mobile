<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($main_partners_active && $sponsors_active) { ?>
<?php  
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
?>
<section id="sponsors-and-stalls" class="wide-panel bg-col-orange text-center">
	<h3 class="panel-header text-center bg-col-wht tk-azo-sans-uber txt-col-orange">Our Sponsors for <?php echo $main_partner_year; ?></h3>
	<div class="sponsors-outer-wrap carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">	
		<?php foreach ($sponsors_and_stalls as $k => $s ) { ?>

		<div id="sponsor-slide-<?php echo $k+1; ?>" class="item sponsors-inner-wrap<?php echo ($k == 0) ? " active":""; ?>">
				
			<div class="sponsor-logo" style="background-image: url(<?php echo $s['sponsor_logo']; ?>);">
			<a href="<?php echo $s['sponsor_website']; ?>" target="_blank" rel="nofollow"><span class="sr-only"><?php echo $s['sponsor_name']; ?></span></a>
			</div>		
			
		</div>

		<?php } ?>
		
	</div>
	</div>
</section>
<?php } ?>